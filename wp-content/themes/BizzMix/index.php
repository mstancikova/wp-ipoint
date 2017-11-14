<?php global $theme; get_header(); ?>

    <div id="main">
    
        <?php $theme->hook('main_before'); ?>
		<?php // retrieve one post with an ID of 1
				query_posts('p=21'); ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile;?>
		<div style="height:1px; border-bottom:1px dashed #d1d1d1; margin-bottom:5px;"></div>
        <div id="content">
        
            <?php $theme->hook('content_before'); ?>
            
            <?php
            	query_posts ($query_string . '&cat=5');
                if (have_posts()) : while (have_posts()) : the_post();
                    /**
                     * The default post formatting from the post.php template file will be used.
                     * If you want to customize the post formatting for your homepage:
                     * 
                     *   - Create a new file: post-homepage.php
                     *   - Copy/Paste the content of post.php to post-homepage.php
                     *   - Edit and customize the post-homepage.php file for your needs.
                     * 
                     * Learn more about the get_template_part() function: http://codex.wordpress.org/Function_Reference/get_template_part
                     */

                    get_template_part('post', 'homepage');
                    
                endwhile;
                
                else :
                    get_template_part('post', 'noresults');
                endif; 
                
                get_template_part('navigation');
            ?>
            
            <?php $theme->hook('content_after'); ?>
        
        </div><!-- #content -->
    
        <?php get_sidebars(); ?>
        
        <?php $theme->hook('main_after'); ?>
        
    </div><!-- #main -->
    
<?php get_footer(); ?>