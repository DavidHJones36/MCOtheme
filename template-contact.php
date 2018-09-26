<?php
/**
 * Template Name: Contact Page
 *
 * This is the template that displays a contact form.
 *
 * @package bootstrapwp
 */


get_header(); ?>
    <?php 
    global $bmco_options;
    $campus = ($bmco_options['campus'] != '' ? $bmco_options['campus'] : '') ;
    $street = ($bmco_options['street'] != '' ? $bmco_options['street'] : '') ;
    $city = ($bmco_options['city'] != '' ? $bmco_options['city'] : '') ;
    $contact_message = rwmb_meta('bmco_contact_message');
    $contact_form = rwmb_meta('bmco_contact_form_url');
    $news_button_check=0;
    $news_button = rwmb_meta('bmco_news_button');
    $news_url = rwmb_meta('bmco_news_url');
    $contact_banner = rwmb_meta('bmco_contact_image_banner');
    $banner_url = '';
    if (count($contact_banner) > '0'){
        foreach ($contact_banner as $banner){
            $img = "{$banner['full_url']}";
            $banner_url = $img;
        }
    }
    if ($news_button == 'on'){
        $news_button_check=1;
    }

?>
        <div class="xl-background" style="background-image: url(<?php echo $banner_url; ?>); color: #ffffff;">
            <header class=" header-lg header-child overlay-dark">
                <div class="container">
                    <h1 class="titles"><?php echo $contact_message ?></h1>
                    <p>if you have a specific question, fill out the form below</p>
                    <?php if ($news_button_check == 1){ ?>
                        <a class="btn btn-white btn-lg smi-btn" href="<?php echo get_page_link($news_url); ?>">
                        Sign Up for the Newsletter
                        </a>
                    <?php }  ?>
                    
                    <a href="#scroll_prompt_anchor">
                        <div id="scroll-prompt" class="animated bounce"><img src="<?php echo bloginfo('template_directory'); ?>/img/down-arrow.png"></div>
                    </a>
                </div>
            </header>
        </div>
        <span id="scroll_prompt_anchor"></span>
        <div class="container">
            <h1>CONTACT US</h1>
            <div class="row">
                <div id="primary" class="col-md-8 col-lg-8">
                    <?php echo $contact_form; ?>
                </div>
                <!-- #primary -->
                <div id="primary" class="col-lg-4 col-md-4" style="margin:1.5em 0 0">
                    <p>For more information about MCO <?php echo $campus; ?>, send us a message using this form and we&#8217;ll get back to you!</p>
                    <p>You can also reach us at <strong>706.262.8841</strong></p>
                    <p><strong>MCO <?php echo $campus; ?></strong>
                        <br /><?php echo $street ?>
                        <br /><?php echo $city ?></p>
                </div>
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
        <?php get_footer(); ?>