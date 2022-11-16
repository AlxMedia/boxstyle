<?php get_header(); ?>

<div class="content">
	<div class="pad group">
		
		<?php while ( have_posts() ): the_post(); ?>
			<article <?php post_class(); ?>>	
				
				<div class="post-category">
					<?php the_category(' / '); ?>
				</div><!--/.post-category-->
				
				<h1 class="post-title"><?php the_title(); ?></h1>
				
				<div class="post-date">
					<i class="far fa-clock"></i><?php the_time( get_option('date_format') ); ?>
				</div><!--/.post-date-->
				
				<?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
				
				<div class="clear"></div>
				
				<div class="entry">	
					<?php the_content(); ?>
					<?php wp_link_pages(array('before'=>'<div class="post-pages">'.esc_html__('Pages:','boxstyle'),'after'=>'</div>')); ?>
					<div class="clear"></div>				
				</div><!--/.entry-->
				
			</article><!--/.post-->				
		<?php endwhile; ?>
		
		<div class="clear"></div>
		
		<?php the_tags('<p class="post-tags"><span>'.esc_html__('Tags:','boxstyle').'</span> ','','</p>'); ?>
		
		<?php do_action( 'alx_ext_sharrre' ); ?>
		
		<div class="clear"></div>
		
		<?php if ( ( get_theme_mod( 'author-bio', 'on' ) == 'on' ) && get_the_author_meta( 'description' ) ): ?>
			<div class="author-bio">
				<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
				<p class="bio-name"><?php the_author_meta('display_name'); ?></p>
				<p class="bio-desc"><?php the_author_meta('description'); ?></p>
				<div class="clear"></div>
			</div>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'post-nav', 's1' ) == 'content' ) { get_template_part('inc/post-nav'); } ?>
		
		<?php if ( get_theme_mod( 'related-posts', 'categories' ) != 'disable' ) { get_template_part('inc/related-posts'); } ?>
		
		<?php if ( comments_open() || get_comments_number() ) :	comments_template( '/comments.php', true ); endif; ?>
		
	</div><!--/.pad-->
</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>