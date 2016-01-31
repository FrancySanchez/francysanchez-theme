<div class="col-md-4 item">
	<article <?php post_class(); ?>>
	<?php // Checking for a post thumbnail
			if ( has_post_thumbnail() ) ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="show_modal_post" >
				<?php the_post_thumbnail('large');?>
			</a>
	<header>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="padding_top_small"><?php get_template_part('templates/entry-meta'); ?></div>
	</header>
	<!-- <div class="entry-summary">
		<?php the_excerpt(); ?>
	</div> -->
</article>
</div>