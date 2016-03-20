<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FrancySanchez
 */

?>
    <div class="c-post">
        <header class="c-post__header" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) )?>)">
            <?php
			if ( is_single() ) {
				the_title( '<h1 class="c-post__title ">', '</h1>' );
			} else {
				the_title( '<h2 class="c-post__title "><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		?>
        </header>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div id="post-<?php the_ID(); ?>" <?php post_class( 'c-post__content'); ?>>
                    <!-- .entry-header -->
                    <?php 
                    if ( 'post' === get_post_type() ) : ?>
                    <div class="entry-meta">
                        <?php francysanchez_posted_on(); ?>
                    </div>
                    <hr/>
                    <!-- .entry-meta -->
                    <?php
					endif; ?>
                        <?php
              			the_content( sprintf(
              				/* translators: %s: Name of current post. */
              				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'francysanchez' ), array( 'span' => array( 'class' => array() ) ) ),
              				the_title( '<span class="screen-reader-text">"', '"</span>', false )
              			) );
              
              			wp_link_pages( array(
              				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'francysanchez' ),
              				'after'  => '</div>',
              			) );
              		?>
                            <!-- .entry-content -->
                            <footer class="entry-footer">
                                <?php francysanchez_entry_footer(); ?>
                            </footer>
                            <!-- .entry-footer -->
                </div>
                <?php if (comments_open() || get_comments_number()) :comments_template();
                    endif; ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
    <!-- #post-## -->
