<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FrancySanchez
 */

?>
    </div>
    <!-- #content -->
    <footer id="contact" class="c-section-footer site-footer" role="contentinfo">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none" class="c-section-footer__diagonal">
            <polygon points="100 0 100 10 0 10" />
        </svg>
        <div class="c-text container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Get in touch</h2>
                    <div class="c-social-media">
                        <a href="https://www.facebook.com/francyksanchezm" target="_blank"> <i class=" fa fa-facebook-square"></i> </a>
                        <a href="https://twitter.com/FrancyKSanchez" target="_blank"><i class=" fa fa-twitter-square"></i></a>
                        <a href="https://www.instagram.com/francyksanchez" target="_blank"><i class=" fa fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/in/francy-sanchez-58356451?" target="_blank"><i class="fa fa-linkedin-square"></i></a></div>
                </div>
                <div class="col-md-4 text-center">
                    <?php echo do_shortcode('[contact-form-7 id="47" title="Contact form 1"]'); ?>
                </div>
                <div class="col-md-4 text-center">
                    <div class="site-info">
                        <p> Francy Sanchez, all rights reserved.</p>
                        <p> Made with love using Wordpress</p>
                    </div>
                    <!-- .site-info -->
                </div>
            </div>
        </div>
    </footer>
    <!-- #colophon -->
    </div>
    <!-- #page -->
    <?php wp_footer(); ?>
    </body>

    </html>
