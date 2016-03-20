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
    <div class="front-page c-section-main c-text container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <img class="c-section-main-map" src="<?php echo get_template_directory_uri() ?>/image/Map.png " />
                <h1>Hello and Welcome!</h1>
                <p>I am Francy from San Cristobal, Venezuela since 2013 I am living in Dublin, Ireland. What began as a travel adventure just for 6 months ended being my new live. So I would like to share my experience of living abroad, travel and much more. </p>
                <button class="btn btn-default btn-justified" type="submit">Read more about me</button>
            </div>
        </div>
    </div>
    <!--Section 1 off -->
    <!--Section 2 ABOUT ME on -->
    <div class="c-section-about c-text">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none" class="c-section-about__diagonal">
            <polygon points="100 0 100 10 0 10" />
        </svg>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>A little about me</h2>
                    <p class="c-section-about__text"> Hi there!! I am IT engineer, with 4+ years of experience , I have a proven track record of delivering successful Information Technology projects. My main strengths are Coding, IT and Project Management along with Digital Marketing and eCommerce. </p>
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
    <div class="c-section-interests c-text container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>my interests</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center">
                <i class="c-section-interests-icons fa fa-camera-retro"></i>
                <p>Beginner of photography, that is the best way to keep your memories forever</p>
            </div>
            <div class="col-md-4 text-center">
                <i class="c-section-interests-icons fa fa-plane"></i>
                <p>I love travel, travel is the best way to find new persons and learnd new culture, this makes me open my eyes a new experiences </p>
            </div>
            <div class="col-md-4 text-center">
                <i class="c-section-interests-icons fa fa-bullhorn"></i>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. </p>
            </div>
        </div>
        <!--Section 3 off -->
        <!--Section 4 BLOG on -->
        <div class="c-section-blog container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>My Blog</h2>
                </div>
                <?php 

                $data = Timber::get_context();
                $data['posts'] = Timber::get_posts();

                 // echo '<pre> hello';
                // var_dump($data['posts'] );
                Timber::render('views/posts.twig', $data);
            ?>
            </div>
        </div>
        <!--Section 4 off -->
        <?php
get_footer();
