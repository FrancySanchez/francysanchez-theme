<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FrancySanchez
 */

get_header(); ?>
    <!--Section 1 MAIN on -->
    <div class="front-page c-section-main c-text container" id="home">
        <div class="row">
            <div class="col-md-12 ">
                <img class="c-section-main__map" src="<?php echo get_template_directory_uri() ?>/image/Map.png " />
                <h1 class="c-section-main__title">Hello there!</h1>
                <p class="c-section-main__text"> I’m Francy and this is my personal website. I’m living in Ireland since 2013 and what began as a 6 month adventure ended up being my new life. Here, I’ll be sharing my experience on living abroad, traveling and much more. </p>
                <a href="#about-me" class="btn btn-primary btn-justified" title="Read more">Read more about me</a>
            </div>
        </div>
    </div>
    <!--Section 1 off -->
    <!--Section 2 ABOUT ME on -->
    <div class="c-section-about c-text" id="about-me">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none" class="c-section-about__diagonal">
            <polygon points="100 0 100 10 0 10" />
        </svg>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="c-section-about__title"><span>A little about me</span></h2>
                    <p class="c-section-about__text"> I’m an IT engineer and I’ve been working in IT projects for over 4 years now (which I enjoyed very much!). My main skills are Coding, IT management and  Wordpress content publishing. </p>
                </div>
            </div>
            <?php 

                $data = Timber::get_context();
                $data['posts'] = Timber::get_posts();

                 // echo '<pre> hello';
                // var_dump($data['posts'] );
                Timber::render('views/graph.twig', $data);
            ?>
        </div>
    </div>
    <!--Section 2 off -->
    <!--Section 3 MY INTERESTS on -->
    <div class="c-section-interests c-text container" id="interests">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="c-section-interests__title">my interests</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <i class="c-section-interest__icon fa fa-camera-retro fa-5x"></i>
                <p class="c-section-interest__text">Photograph</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="c-section-interest__icon fa fa-plane fa-5x"></i>
                <p class="c-section-interest__text"> Travel </p>
            </div>
            <div class="col-md-4 text-center">
                <i class="c-section-interest__icon fa fa-bullhorn fa-5x"></i>
                <p class="c-section-interest__text">Marketing online </p>
            </div>
        </div>
        <!--Section 3 off -->
        <!--Section 4 BLOG on -->
        <div class="c-section-blog " id="blog">
            <h2 class="c-section-blog__title"><span>My Blog</span></h2>
            <h2 class="c-section-interests__title">Coming soon :)</h2>
            <?php 

                $data = Timber::get_context();
                $data['posts'] = Timber::get_posts();

                 // echo '<pre> hello';
                // var_dump($data['posts'] );
                Timber::render('views/posts.twig', $data);
            ?>
        </div>
        <!--Section 4 off -->
        <?php
get_footer();
