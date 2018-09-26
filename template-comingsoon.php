<?php
/**
 * Template Name: Coming Soon Page
 *
 * This is the template that displays a coming soon page.
 *
 * @package bootstrapwp
 */

get_header(); ?>
        <div class="container">
                <main id="main" class="site-main" role="main">
                    <section class="error-404 not-found">
                        <header-md class="header-child">
                            <h1 class="page-title"><?php esc_html_e( 'This page is coming Soon!', 'bootstrappermco' ); ?></h1>
                            <div class="row" style="padding:50px">
                            <a class="btn btn-black-white btn-md" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                         return to the home page
                            </a>
                                </div>
                        </header-md>
                        <!-- .page-header -->
                        
                    </section>
                    <!-- .error-404 -->
                </main>
                <!-- #main -->
        </div>
                <?php
get_footer();