<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package FrancySanchez
 */

get_header(); ?>
    <div class="c-single-page container">
        <div class="row">
            <div class="col-md-8 text-center">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
					       <?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', get_post_format() );

								//the_post_navigation();

								// If comments are open or we have at least one comment, load up the comment template.
								if (comments_open() || get_comments_number()) :comments_template();
								endif;
								
							endwhile; // End of the loop.
							?>
                    </main>
                    <!-- #main -->
                </div>
            </div>
            <div class="col-md-4 container">
                <?php get_sidebar();?>
            </div>
        </div>
    </div>
    <!-- #primary -->
 
<?php
get_footer();
