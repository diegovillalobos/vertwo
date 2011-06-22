<?php get_header(); ?>

<div id="middle">

<?php if(have_posts()) : ?>
	
	<?php if ((wp_query-post_count) > 1 : ?>
		<?php the excerpt() ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
		<?php if ( is_front_page() ) { ?>
						



<div class="entry-content">
	<?php the_content('read more'); ?>
	<?php wp_link_pages('before=<p class="pages">' . __('Pages:','example') . '&after=</p>'); ?>
</div>

</div>

	<?php endwhile; ?>

<?php else : ?>

	<p class="no-posts"><?php _e('Sorry, no posts matched your criteria', 'example'); ?></p>
	

<?php endif; ?>


</div>