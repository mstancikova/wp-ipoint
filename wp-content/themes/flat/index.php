<?php get_header(); ?>
	<div id="content" class="site-content" role="main">
	<?php 
		if ( is_home() ) {?>
			<div class="homepage-text">
				<?php
				$the_query = new WP_Query( 'page_id=32' );
				while ( $the_query->have_posts() ) :
					$the_query->the_post();
				        //the_title();
				        the_content();
				endwhile;
				wp_reset_postdata();?>
			</div>
	<?php } ?>
	
	<div class="news-content">
	<?php query_posts ($query_string . '&cat=5'); ?>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
			<div class="postBox">
				<div class="postBoxMid">
					<div class="postBoxMidInner first clearfix">
					<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					<div class="date"><?php the_time('F j, Y'); ?></div>
					<div class="textPreview">
					<?php if(has_post_thumbnail()){?>
						<div class="Floats_holder">
							<div class="postThumb"><a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a></div>
							<div class="postText"><?php the_excerpt(); ?></div>
						</div>
					<?php }else{ ?>
						<?php the_excerpt();?>
					<?php } ?>
					</div>
					<div class="postMeta">
						<div class="metaRight">
							<a href="<?php the_permalink() ?>" class="more-link"><?php echo __('Continue reading'); ?> &raquo;</a>
						</div>
					</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>
	
<?php get_footer(); ?>
