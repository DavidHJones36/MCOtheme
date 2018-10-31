<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package bootstrappermco
 */

global $bmco_options;
        $fixed = ($bmco_options['opt-navbar-fixed'] == '1' ? 'navbar-fixed-top' : 'navbar-static-top');
        $transparent = ($bmco_options['opt-navbar-transparent'] == '1' ? 'navbar-transparent' : 'opaque' );
        $logo = $bmco_options['opt-logo']['url'];
        $transparent_logo = $bmco_options['opt-transparent-logo']['url'];
        if ($transparent == 'opaque'){
            $current_logo = $logo;
        }else{
            $current_logo = $transparent_logo;
        }
        $logo_height = 50;
        if ($bmco_options['opt-logo-height']!=='')
        {$logo_height = $bmco_options['opt-logo-height'];
        }
        $logo_width = $logo_height*2;
        $header_image = $bmco_options['home_banner']['url'];
?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<!--        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">-->
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon.ico">
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">
        <?php wp_head(); ?>
    </head>
        
        <style>
            .navbar-right .menu-item a{
                line-height: <?php echo $logo_height+20; ?>px;
                white-space: nowrap;
            }
            

        </style>
        <?php if ($fixed == 'navbar-fixed-top'){ ?>
            <script>jQuery(document).ready(function ($) {
                    $(window).scroll(_.throttle(function () {
                            var scroll = $(window).scrollTop();
                            var logo = '<?php echo $logo; ?>';
                            <?php if ($transparent != 'opaque'){ ?>
                                var transparent = '<?php echo $transparent_logo; ?>';
                            <?php } ?>
                            if (scroll > 0) /*height in pixels when the navbar becomes non opaque*/ {
                                $('.navbar-fixed-top').addClass('opaque');
                                $("#navLogo").attr('src', logo);
                            }
                            else {
                                $('.navbar-fixed-top').removeClass('opaque');
                                $("#navLogo").attr('src', transparent);
                            }
                        },50))
                    });
            </script>
        <?php } ?>

    <body <?php body_class();?>>
            <nav role="navigation">
                <div id="navbar" class="navbar navbar-default <?php echo $transparent;?> <?php echo $fixed;?>">
                    <div class="container">
                        <!--.navbar-toggle is used as the toggle for collapsed navbar content-->
                        <div id='navbar-header' class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                            <?php
                                if($logo !== ''){ ?> <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="homepage">
                                        <div class="logo">
                                            <img id="navLogo" src="<?php echo $current_logo; ?>" style="height:<?php echo $logo_height ?>px;">
                                        </div>
                                </a>
                                <?php }
                                        else{ ?>
                                    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="homepage">
                                        <?php bloginfo( 'name' ) ?>
                                    </a>
                                    <?php } ?>
                        </div>
                        <div class="navbar-collapse collapse navbar-responsive-collapse">
                            <?php

                                    $args = array(
                                        'theme_location' => 'primary',
                                        'depth'      => 1,
                                        'container'  => false,
                                        'menu_class'     => 'nav navbar-nav navbar-right',
                                        'walker'     => new Bootstrap_Walker_Nav_Menu()
                                        );


                                      if (has_nav_menu('primary')){        
                                        wp_nav_menu($args);
                                      }

					?>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- #masthead -->
            <!--                <div id="content" class="site-content">-->