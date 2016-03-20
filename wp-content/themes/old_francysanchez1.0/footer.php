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
    <footer id="colophon" class="c-section-footer site-footer" role="contentinfo">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none" class="c-section-footer__diagonal">
            <polygon points="100 0 100 10 0 10" />
        </svg>
        <div class="c-text container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Get in touch</h2>
                    <a href="https://www.facebook.com/francyksanchezm" target="_blank"> <i class="c-social-media fa fa-facebook-square"></i> </a>
                    <a href="https://twitter.com/FrancyKSanchez" target="_blank"><i class="c-social-media fa fa-twitter-square"></i></a>
                    <a href="https://www.instagram.com/francyksanchez" target="_blank"><i class="c-social-media fa fa-instagram"></i></a>
                </div>
                <div class="col-md-4 text-center">
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputName2" placeholder="Your name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Your email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleInputMessage2" placeholder="Your message" rows="3"></textarea>
                        </div>
                        <div class="c-footer-btn form-group">
                            <button type="submit" class=" btn btn-default">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 text-center">
                    <div class="site-info">
                        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'francysanchez' ) ); ?>">
                            <?php printf( esc_html__( 'Proudly powered by %s', 'francysanchez' ), 'WordPress' ); ?>
                        </a>
                        <span class="sep"> | </span>
                        <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'francysanchez' ), 'francysanchez', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
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
