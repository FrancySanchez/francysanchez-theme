<?php while (have_posts()) : the_post(); ?>

<?php 

$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );


?>


  <article <?php post_class(); ?>>
    <header>
            <?php get_template_part('templates/entry-meta'); ?>

      <h1 class="entry-title text-center"><?php the_title(); ?></h1>
    </header>

    <div class="entry-content">
<div class="margin_bottom_medium"><?php the_post_thumbnail(); ?></div>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>


