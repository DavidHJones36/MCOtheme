<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bootstrappermco
 */
global $bmco_options;
$bmco_phone=$bmco_options['phone'];
$bmco_street=$bmco_options['street'];
$bmco_city=$bmco_options['city'];
$bmco_campus=$bmco_options['campus'];
$bmco_facebook=$bmco_options['facebook'];
$bmco_twitter=$bmco_options['twitter'];
$bmco_instagram=$bmco_options['instagram'];
?>
    <!--    </div>-->
    <!-- #content -->
    <footer id="secondary" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>MCO <?php echo $bmco_campus; ?></h4>
                    <hr>
                    <p class="no-margin-bottom">
                            <?php echo $bmco_phone ?>
                        </p>
                        <p class="no-margin-bottom">
                            <?php echo $bmco_street ?>
                        </p>
                        <p class="no-margin-bottom">
                            <?php echo $bmco_city ?>
                        </p>
                </div>
<!--
                <div class="col-md-4">
                    <h4>Quick Links</h4>
                    <hr>
                    <?php if (has_nav_menu('footer')){ ?>
                        <nav role="navigation">
                            <?php wp_nav_menu(array(
                    'container'=>'',
                    'menu_class'=>'footer-menu',
                    'theme_location'=>'footer')
                                          );
                                                  ?>
                        </nav>
                        <?php } ?>
                </div>
-->
                <div class="col-md-4"></div>
                <div class="col-md-4">
                <h4>Get in touch with us</h4>
                        <hr>
                        <ul class="list-inline" style="color:white">
                            <li>
                                <a href="<?php echo $bmco_facebook ?>" >
                                    <i class="fa fa-facebook-square fa-lg"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $bmco_twitter ?>" >
                                    <i class="fa fa-twitter-square fa-lg"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $bmco_instagram ?>" >
                                    <i class="fa fa-instagram fa-lg"></i>
                                </a>
                            </li>
                    </ul>
                </div>
            </div>
            <!-- .row -->
        </div>
        <!--container-->
    </footer>
    <!--    </div>-->
    <!-- #page -->
    <?php wp_footer(); ?>
        </body>

        </html>