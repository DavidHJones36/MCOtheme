<?php
/*
 * Template Name: Thanks Page
 *
 * This is the template that displays a contact form.
 *
 * @package bootstrapwp
 */

get_header(); ?>
        <div class="container">
                <main id="main" class="site-main" role="main">
                    <section>
                        <header-md class="header-child">
                            <h1 class="page-title">Thanks for filling out the form!</h1>
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