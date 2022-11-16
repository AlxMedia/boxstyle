<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('group post-standard'); ?>>	

	<div class="pad group">
		
		<?php if ( get_theme_mod( 'format-icon', 'on' ) =='on' ): ?>
			<div class="format-circle"><a href="<?php echo get_post_format_link($format); ?>"><i class="fa"></i></a></div>
		<?php endif; ?>
		
		<div class="post-category">
			<?php the_category(' / '); ?>
		</div><!--/.post-category-->
		
		<h2 class="post-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2><!--/.post-title-->
		
		<div class="post-date">
			<i class="far fa-clock"></i><?php the_time( get_option('date_format') ); ?>
		</div><!--/.post-date-->
		
		<?php get_template_part('inc/post-formats'); ?>

		<div class="entry">
			<?php 
				if ( is_search() ) { the_excerpt(); } 
				else the_content(esc_html__('Continue reading...','boxstyle'));
			?>
		</div><!--/.entry-->
		
	</div><!--/.pad-->

</article><!--/.post-->	