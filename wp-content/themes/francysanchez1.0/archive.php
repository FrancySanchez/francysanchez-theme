<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FrancySanchez
 */

get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-9 ">
                <?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
				?>
                    <?php 

                	$data = Timber::get_context();
                	$data['posts'] = Timber::get_posts();
                	$data['columnas'] = 2;

                 	//echo '<pre> hello';
                	// var_dump($data['posts'] );
                	Timber::render('views/posts.twig', $data);
                	
               ?>
            </div>
            <div class="col-md-3 ">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
    <?php

get_footer();
