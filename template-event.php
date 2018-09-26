<?php
/*
 * Template Name: Event Page
 *
 * This is the template that displays a contact form.
 *
 * @package bootstrapwp
 */


$og_banner = rwmb_meta('bmco_event_image_banner');
$og_url= '';
if (count($og_banner) > '0'){
    foreach ($og_banner as $banner){
        $img = "{$banner['url']}";
        $og_url = $img;
    }
}

function insert_fb_head(){
    global $og_url;
    echo '<meta property="og:image" content="' . $og_url . '">';
}
add_action('wp_head','insert_fb_head',1);
get_header(); ?>

<?php 
$event_title = (rwmb_meta('bmco_event_title') != '' ? rwmb_meta('bmco_event_title') : '' );
$event_desc = (rwmb_meta('bmco_event_desc') != '' ? rwmb_meta('bmco_event_desc') : '' );
$event_date = (rwmb_meta('bmco_event_date') != '' ? rwmb_meta('bmco_event_date') : '' );
$event_banner = rwmb_meta('bmco_event_image_banner');
$banner_url= '';
if (count($event_banner) > '0'){
    foreach ($event_banner as $banner){
        $img = "{$banner['full_url']}";
        $banner_url = $img;
    }
}

$reg_url = '';
$reg_title = '';
$reg_button_check=0;
$reg_open = rwmb_meta('bmco_reg_button');
//checks for application or fundraising
if ($reg_open == 'open'){
    $reg_url = (rwmb_meta('bmco_reg_url') != '' ? rwmb_meta('bmco_reg_url') : '' );
    $reg_title = 'Register Here!';
    $reg_button_check=1;
}

$title_image_check=0;
$event_title_image = rwmb_meta('bmco_event_title_image');
$title_image_url= '';
if (count($event_title_image) > '0'){
    foreach ($event_title_image as $title1){
        $img1 = "{$title1['full_url']}";
        $title_image_url = $img1;
    }
    $title_image_check = 1;
}

$overlay = 0;
if( rwmb_meta('bmco_overlay_on') == 'on'){
    $overlay = 1;
}


$event_video_url = (rwmb_meta('bmco_video_url') != '' ? rwmb_meta('bmco_video_url') : '' );

$title_image_size = '';
if( rwmb_meta('bmco_title_image_size') == '400'){
    $title_image_size = 'img-sm';
}elseif( rwmb_meta('bmco_title_image_size') == '600'){
    $title_image_size = 'img-md';
}else{
    $title_image_size = 'img-lg';
}


?>
        <div class="xl-background" style="background-image: url(<?php echo $banner_url; ?>); color:#fff;">
            <header class="header-lg header-child <?php if ($overlay == 1){ ?> overlay-dark
                    <?php } ?>">
                <div class="container-fluid">
                    <?php if ($title_image_check == 1){ ?>
                        <div class="<?php echo $title_image_size; ?> header-img"> <img src="<?php echo $title_image_url; ?>"> </div>
                        <?php }  
                    else{ ?>
                            <h1 class="titles"><?php echo $event_title; ?></h1>
                            <?php } ?>
                </div>
                <?php if ($reg_button_check == 1){ ?>
                    <div class="container">
                        <a class="btn btn-white btn-lg smi-btn" href="<?php echo $reg_url; ?>">
                            <?php echo $reg_title; ?>
                        </a>
                    </div>
                    <?php }  ?>
                        <a href="#scroll_prompt_anchor">
                            <div id="scroll-prompt" class="animated bounce"><img src="<?php bloginfo('template_directory') ?>/img/down-arrow.png"></div>
                        </a>
            </header>
        </div> <span id="scroll_prompt_anchor"></span>
        <?php if ($event_video_url != '') { ?>
        <div id="video-billboard">
                <div class="container">
                    <div class="row">
                        <div class="no-pad billboard-item col-md-12">
                            <div class="container-video">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <?php echo $event_video_url ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <?php } ?>
        <div id="top-billboard">
            <div class="container">
                <!--                <div class="row">-->
                <h3 class="subtitles">// <?php echo $event_title; ?></h3>
                <p class="whitespace"><?php echo $event_desc; ?>
                </p>
                <h3 class="subtitles"> <?php echo $event_date; ?></h3>
                <div class="textcenter">
                    <?php if ($reg_button_check == 1){ ?>
                        <a class="btn btn-black btn-lg smi-btn" href="<?php echo $reg_url; ?>">
                            <?php echo $reg_title; ?>
                        </a>
                        <?php }  ?>
                </div>
                <!--                </div>-->
            </div>
        </div>
        <?php

get_footer();?>