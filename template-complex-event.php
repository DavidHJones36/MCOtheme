<?php
/*
 * Template Name: Complex Event Page
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
add_action('wp_head','insert_fb_head');

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

$event_banner2 = rwmb_meta('bmco_c_speaker_image');
$speaker_img = '';
if (count($event_banner2) > '0'){
    foreach ($event_banner2 as $banner2){
        $img2 = "{$banner2['full_url']}";
        $speaker_img = $img2;
    }
}

$speaker_button = rwmb_meta('bmco_c_speaker_button');
$speaker_button_img= '';
if (count($speaker_button) > '0'){
    foreach ($speaker_button as $button){
        $img = "{$button['full_url']}";
        $speaker_button_img = $img;
    }
}

$speaker_name = (rwmb_meta('bmco_c_speaker_name') != '' ? rwmb_meta('bmco_c_speaker_name') : '' );

$speaker_info = (rwmb_meta('bmco_c_speaker_info') != '' ? rwmb_meta('bmco_c_speaker_info') : '' );

$event_banner3 = rwmb_meta('bmco_c_theme_image');
$theme_img= '';
if (count($event_banner3) > '0'){
    foreach ($event_banner3 as $banner3){
        $img3 = "{$banner3['full_url']}";
        $theme_img = $img3;
    }
}

$title_image = rwmb_meta('bmco_c_theme_title_image');
$theme_title = '';
if (count($title_image) > '0'){
    foreach ($title_image as $title){
        $img = "{$title['full_url']}";
        $theme_title = $img;
    }
}

$event_banner4 = rwmb_meta('bmco_c_vol_image');
$vol_img = '';
if (count($event_banner4) > '0'){
    foreach ($event_banner4 as $banner4){
        $img4 = "{$banner4['full_url']}";
        $vol_img = $img4;
    }
}

$c_theme = (rwmb_meta('bmco_c_theme') != '' ? rwmb_meta('bmco_c_theme') : '' );

$c_theme_desc = (rwmb_meta('bmco_c_theme_desc') != '' ? rwmb_meta('bmco_c_theme_desc') : '' );

$event_video_url = (rwmb_meta('bmco_video_url') != '' ? rwmb_meta('bmco_video_url') : '' );

$detailed_schedule = (rwmb_meta('bmco_c_schedule') != '' ? rwmb_meta('bmco_c_schedule') : '' );

$session_count = rwmb_meta('bmco_c_sessions');
if (count($session_count) > '0'){
    for ($x=1; $x <= $session_count; $x++){
        $sessionx = rwmb_meta('bmco_c_session' . $x);
        for ($y=0; $y<=2; $y++){
            $event_sessions[$x-1][$y] = $sessionx[$y];
        }
        
    }
}
$price_amounts = rwmb_meta('bmco_c_prices');
$event_prices = array();
if (count($price_amounts) > '0'){
    foreach ($price_amounts as $prices){
        array_push($event_prices, $prices);
    }
}

$volunteers = rwmb_meta('bmco_vol_button');
$vol_info = rwmb_meta('bmco_vol_info');
//$vol_url = $vol_info[0];
//$vol_title = $vol_info[1];
$volunteer_form = rwmb_meta('bmco_volunteer_form');
    
$title_image_size = '';
if( rwmb_meta('bmco_title_image_size') == '400'){
    $title_image_size = 'img-sm';
}elseif( rwmb_meta('bmco_title_image_size') == '600'){
    $title_image_size = 'img-md';
}else{
    $title_image_size = 'img-lg';
}

$vid_banner = '';
$vid_banner=rwmb_meta('bmco_vid_color');





?>
        <div class="xl-background" style="background-image: url(<?php echo $banner_url; ?>); color: #fff;">
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
                            <div id="scroll-prompt" class="animated bounce"><img src="<?php bloginfo('template_directory')?>/img/down-arrow.png"></div>
                        </a>
            </header>
        </div>
        <?php if ($event_video_url != '') { ?>
            <div id="video-billboard" <?php if ($vid_banner!=''){ ?> style="background-color:<?php echo $vid_banner ?>"<?php } ?>>
                <div class="container">
                    <div class="row">
                        <div class="no-pad billboard-item col-md-12">
                            <div class="container-video">
                                <span id="scroll_prompt_anchor"></span>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <?php echo $event_video_url ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
                <div id="about-billboard">
                    <div class="container">
                        <h1 class="subtitles">// <?php echo $event_title; ?></h1>
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
                    </div>
                </div>
                <div id="speaker-panel">
                    <div class="xs-background" style="background-image:url( <?php echo  $speaker_img; ?> ); color: #ffffff;">
                        <div id="speaker-info" class="slideable">
                            <div id="close-button" class="slideable-close-button">X</div>
                            <div class="container">
                                <div class="col-sm-12">
                                    <h1 class="subtitles desc-titles" <?php if ($speaker_info=='' ) { ?> style="padding:50px 0px 300px 0px" <?php } ?> ><?php echo $speaker_name; ?></h1> </div>
                                <div class="col-sm-8"></div>
                                <div class="col-sm-4">
                                    <?php if ($speaker_info != '') { ?>
                                        <div class="description-box">
                                            <p class="whitespace"><?php echo $speaker_info; ?>
                                            </p>
                                        </div>
                                        <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="xs-background" style="background-image:url(<?php echo $theme_img; ?>); color: #ffffff; background-position:center;">
                        <div id="theme-info" class="slideable">
                            <div id="close-button" class="slideable-close-button">X</div>
                            <div class="container">
                                <div class="col-sm-12">
                                    <h1 class="subtitles desc-titles"><?php echo $c_theme; ?></h1> </div>
                                <div class="col-sm-8"></div>
                                <div class="col-sm-4">
                                    <div class="description-box">
                                        <p class="whitespace"><?php echo $c_theme_desc; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="speaker-theme-billboard">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="no-pad billboard-item col-sm-6">
                                <div class="xs-background billboard-child same-height" style="background: url(<?php echo $speaker_button_img; ?>) center center; background-size:cover;"></div>
                                <div class="billboard-item-hover">
                                    <div class="billboard-child">
                                        <div class="container-xs">
                                            <a class="btn btn-white btn-lg slideable-show-button" href="#speaker-panel" data-target="#speaker-info">
                                                <?php echo $speaker_name; ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="no-pad billboard-item col-sm-6">
                                <div class="xs-background billboard-child same-height" style="background: url(<?php echo $theme_img; ?>) center center; background-size:cover;"> 
                                    <div class="billboard-child">
                                        <div class="container-md">
                                            <img src="<?php echo $theme_title; ?>">
                                        </div>
                                    </div>
                                </div>    
                                <div class="billboard-item-hover">
                                    <div class="billboard-child">
                                        <div class="container-xs">
                                            <a class="btn btn-white btn-lg slideable-show-button" href="#speaker-panel" data-target="#theme-info">
                                                <?php echo $c_theme ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="pricing-billboard">
                    <div class="container">
                        <div class="row pad25">
                            <div class="col-sm-6">
                                <h2 class="titles">Schedule</h2>
                                <div class="container-fluid">
                                    <div class="row">
                                        <?php for ($x=0; $x<=$session_count; $x++){
                                        for ($y=0; $y<=2; $y++){
                                            if ($x==0 && $y==0){?>
                                            <div class="col-xs-4 no-pad">
                                                <p class="uppercase">
                                                    <?php echo $event_sessions[$x][$y]; ?>
                                                </p>
                                            </div>
                                            <?php }elseif ($x==0){?>
                                            <div class="col-xs-4 no-pad">
                                                <p>
                                                    <?php echo $event_sessions[$x][$y]; ?>
                                                </p>
                                            </div>
                                            <?php }elseif($event_sessions[$x][0] != '' && $y==0){ ?>
                                                <div class="col-xs-4 no-pad" style="margin-top:10px">
                                                    <p class="uppercase">
                                                        <?php echo $event_sessions[$x][$y]; ?>
                                                    </p>
                                                </div>
                                                <?php }elseif($event_sessions[$x][0] == ''){ ?>
                                                <div class="col-xs-4 no-pad">
                                                    <p>
                                                        <?php echo $event_sessions[$x][$y]; ?>
                                                    </p>
                                                </div>
                                                <?php }else{ ?>
                                                    <div class="col-xs-4 no-pad" style="margin-top:10px">
                                                        <p>
                                                            <?php echo $event_sessions[$x][$y]; ?>
                                                        </p>
                                                    </div>
                                                    <?php }
                                        }
                                    } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h2 class="titles">Pricing</h2>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-12 no-pad">
                                            <?php foreach ($event_prices as $prices) { ?>
                                                <p>
                                                    <?php echo $prices ?>
                                                </p>
                                                <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <?php if ($reg_button_check == 1){ ?>
                                        <a class="btn btn-black btn-lg smi-btn" href="<?php echo $reg_url; ?>">
                                            <?php echo $reg_title; ?>
                                        </a>
                                        <?php }  ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($volunteers !='' && $volunteers == 'yes' && banner4_url != '') { ?>
                            <div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="no-pad billboard-item col-sm-12">
                                            <div class="xs-background billboard-child same-height overlay-dark" style="background: url(<?php echo $vol_img; ?>) center center; background-size:cover;">
                                                <div class="billboard-child">
                                                    <div class="container-md">
                                                        <img src="<?php bloginfo('template_directory') ?>/img/volunteer.png">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="billboard-item-hover">
                                                <div class="billboard-child">
                                                    <div class="container-xs">
                                                        <a class="btn btn-white btn-lg slideable-show-button" href="#pre-form" data-target="#volunteer-form" >
                                                            <?php if ($vol_title ==''){
                                                                echo "more info";
                                                                }
                                                                else{
                                                                    echo $vol_title;
                                                                
                                                                    //error_log($vol_title);
                                                                }   ?>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span id="pre-form"></span>
                            <div id="volunteer-form" class="slideable">
                                <div class="container textcenter">
                                    <h1>please complete this application to join our volunteer team</h1>
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div id="primary" class="col-sm-8">
                                            <?php echo $volunteer_form; ?>
                                        </div>
                                        <div class="col-sm-2"></div>
                                    </div>
                                </div>
    </div>
                    <?php } ?>
                        <?php

get_footer();?>