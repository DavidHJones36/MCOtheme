<?php
/*
 * Template Name: Home Page
 *
 * This is the template that displays a contact form.
 *
 * @package bootstrapwp
 */

global $bmco_options;
$og_banner = $bmco_options['home_banner']['url'];

function insert_fb_head(){
    global $og_banner;
    echo '<meta property="og:image" content="' . $og_banner . '">';
}
add_action('wp_head','insert_fb_head',1);

get_header(); ?>
    
<?php global $bmco_options;
    $feature = rwmb_meta('bmco_feature_switch') == 'feature' ? 'on' : 'off';
    $header_values = rwmb_meta('bmco_header_image');
    if (!empty($header_values)){
        foreach ($header_values as $img){
            $home_banner = $img['full_url'];
        }
    }
    $title_values = rwmb_meta('bmco_header_title');
    if (!empty($title_values)){
        foreach ($title_values as $img){
            $home_title = $img['full_url'];
        }
    }
    $feature_values = rwmb_meta('bmco_feature_image');
    if (!empty($feature_values)){
        foreach ($feature_values as $img){
            $feature_banner = $img['full_url'];
        }
    }
    $ftitle_values = rwmb_meta('bmco_header_title');
    if (!empty($ftitle_values)){
        foreach ($ftitle_values as $img){
            $feature_title = $img['full_url'];
        }
    }
    $feature_name = get_the_title(rwmb_meta('bmco_feature_target'));
    $feature_target = get_page_link(rwmb_meta('bmco_feature_target'));
    $smi_values = rwmb_meta('bmco_smi_billboard');
        if (!empty($smi_values)) {
            $billboard1_image = wp_get_attachment_url($smi_values['bmco_smi_image_left'][0]);
            $billboard2_image = wp_get_attachment_url($smi_values['bmco_smi_image_center'][0]);
            $billboard3_image = wp_get_attachment_url($smi_values['bmco_smi_image_right'][0]);
            $billboard1_target= $smi_values['bmco_smi_link_left'];
            $billboard2_target= $smi_values['bmco_smi_link_center'];
            $billboard3_target= $smi_values['bmco_smi_link_right'];
            $billboard1_label= get_the_title($smi_values['bmco_smi_link_left']);
            $billboard2_label= get_the_title($smi_values['bmco_smi_link_center']);
            $billboard3_label= get_the_title($smi_values['bmco_smi_link_right']);
        }
    $connected_values = rwmb_meta('bmco_connected_billboard');
        if (!empty($connected_values)) {
            $billboard4_image = wp_get_attachment_url($connected_values['bmco_connect_image_left'][0]);
            $billboard5_image = wp_get_attachment_url($connected_values['bmco_connect_image_right'][0]);
            $billboard6_image = wp_get_attachment_url($connected_values['bmco_connect_image_bottom'][0]);
            $billboard4_target= $connected_values['connect_link_left'];
            $billboard5_target= $connected_values['connect_link_right'];
            $billboard6_target= $connected_values['connect_link_bottom'];
            $billboard4_label= get_the_title($connected_values['connect_link_left']);
            $billboard5_label= get_the_title($connected_values['connect_link_right']);
            $billboard6_label= get_the_title($connected_values['connect_link_bottom']);
        }

    $event_values = rwmb_meta('bmco_events_billboard');
        if (!empty($event_values)) {
            for ($i=1; $i<=count($event_values); $i++){
                ${"event" . $i . "_image"} = wp_get_attachment_url($event_values["bmco_event_image_$i"][0]);
                ${"event" . $i . "_target"} = $event_values["event_link_$i"];
                ${"event" . $i . "_label"} = get_the_title($event_values["event_link_$i"]);
            }
            $event_counter = ($event_values['bmco_event_count']);
        }
    
    $video_banner = $bmco_options['video_banner']['url'];
    $video_billboard_url = $bmco_options['video_billboard_url'];
    $video_billboard_text = $bmco_options['video_billboard_text'];
    $video_billboard_title = $bmco_options['video_billboard_title'];
    $about_button_target = $bmco_options['about_target'];
    $about_button_on = $bmco_options['opt-about-button'];
    $video_hide = ($bmco_options['video_billboard_url'] == '' ? "hide" : '');


        if ($feature == 'on'){ ?>
        <div class="xl-background" style="background-image: url( <?php echo $feature_banner; ?> ); color: #ffffff;">
            <header class=" header-lg header-child overlay-very-dark">
                <div class="container">
                    <div class="img-lg header-img"><img src="<?php echo $feature_title;?>" class='welcome-img' )></div>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6 pad25">
                            <div class="container-xs">
                                <a class="btn btn-white btn-md full" href="<?php echo $feature_target; ?>">
                                            <?php echo $feature_name; ?>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </div>
            </header>
        </div>
        <?php }else{ ?>
        <div class="xl-background" style="background-image: url( <?php echo $home_banner; ?> ); color: #ffffff;">
            <header class=" header-lg header-child overlay-very-dark">
                <div class="container">
                    <div class="img-lg header-img"><img src="<?php echo $home_title;?>" class='welcome-img' )></div>
                    <div class="row">
                        <div class="col-sm-6 pad25">
                            <div class="container-xs">
                                <a class="btn btn-white btn-md full" href="#smi">
                                        serve on smi   
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-6 pad25">
                            <div class="container-xs">
                                <a class="btn btn-white btn-md full" href="#connect">
                                         get connected
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-6 pad25">
                            <div class="container-xs">
                                <a class="btn btn-white btn-md full" href="#events">
                                            fellowship at events
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </div>
            </header>
        </div>
        <?php } ?><span id="smi"></span>
        <div id="first-billboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="no-pad billboard-item col-sm">
                        <div class="xs-background billboard-child same-height" style="background: url(<?php echo $billboard1_image ?>) center center; background-size:cover;"></div>
                        <div class="billboard-item-hover">
                            <div class="billboard-child">
                                <div class="container-xs">
                                    <a class="btn btn-white btn-lg" href="<?php echo get_page_link($billboard1_target); ?>">
                                        <?php echo $billboard1_label ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="no-pad billboard-item col-sm">
                        <div class="xs-background billboard-child same-height" style="background: url(<?php echo $billboard2_image ?>) center center; background-size:cover;"></div>
                        <div class="billboard-item-hover">
                            <div class="billboard-child">
                                <div class="container-xs">
                                    <a class="btn btn-white btn-lg" href="<?php echo get_page_link($billboard2_target); ?>">
                                        <?php echo $billboard2_label ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="no-pad billboard-item col-sm">
                        <div class="xs-background billboard-child same-height" style="background: url(<?php echo $billboard3_image ?>) center center; background-size:cover;"></div>
                        <div class="billboard-item-hover">
                            <div class="billboard-child">
                                <div class="container-xs">
                                    <a class="btn btn-white btn-lg" href="<?php echo get_page_link($billboard3_target); ?>">
                                        <?php echo $billboard3_label ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php if ($video_billboard_url !='') { ?>
        <div id="video-group" class="xl-background" style="background-image: url( <?php echo $video_banner; ?> )">
            <div class="overlay-dark" style="padding:50px; ">
                <div class="container-fluid ">
                    <div class="row ">
                        <div class="no-pad billboard-item col-md-4 ">
                            <h1 class="text-uppercase">
                            <?php echo $video_billboard_title ?>
                            </h1>
                            <h2 class="text-lowercase">
                            <?php echo $video_billboard_text ?></h2>
                            <a class="btn btn-white btn-md margin25" href="<?php echo get_page_link($about_button_target); ?>">
                                        find out more about us
                                    </a></div>
                        <div class="no-pad billboard-item col-md-8 ">
                            <div class="container-video ">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <?php echo $video_billboard_url ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        
        <span id="connect"></span>
        <div id="second-billboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="no-pad billboard-item col-sm">
                        <div class="xs-background billboard-child same-height" style="background: url(<?php echo $billboard4_image ?>) center center; background-size:cover;"></div>
                        <div class="billboard-item-hover">
                            <div class="billboard-child">
                                <div class="container-xs">
                                    <a class="btn btn-white btn-lg" href="<?php echo get_page_link($billboard4_target); ?>">
                                        <?php echo $billboard4_label ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="no-pad billboard-item col-sm">
                        <div class="xs-background billboard-child same-height" style="background: url(<?php echo $billboard5_image ?>) center center; background-size:cover;"></div>
                        <div class="billboard-item-hover">
                            <div class="billboard-child">
                                <div class="container-xs">
                                    <a class="btn btn-white btn-lg" href="<?php echo get_page_link($billboard5_target); ?>">
                                        <?php echo $billboard5_label ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="third-billboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="no-pad billboard-item col-12">
                        <div class="xs-background billboard-child same-height" style="background: url(<?php echo $billboard6_image ?>) center center no-repeat; background-size:cover;"></div>
                        <div class="billboard-item-hover">
                            <div class="billboard-child">
                                <div class="container-xs">
                                    <a class="btn btn-white btn-lg" href="<?php echo get_page_link($billboard6_target); ?>">
                                        <?php echo $billboard6_label ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
<!--        events billboard-->
        <?php   if ($event_counter == 1){ ?>
        <span id="events"></span>
        <div id="first-event-billboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="no-pad billboard-item col-12">
                        <div class="xs-background billboard-child same-height" style="background: url(<?php echo $event1_image ?>) center center; background-size:cover;"></div>
                        <div class="billboard-item-hover">
                            <div class="billboard-child">
                                <div class="container-xs">
                                    <a class="btn btn-white btn-lg" href="<?php echo get_page_link($event1_target); ?>">
                                        <?php echo $event1_label ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }elseif($event_counter > 1) { ?>
        <span id="events"></span>
        <div id="first-event-billboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="no-pad billboard-item col-sm-8">
                        <div class="xs-background billboard-child same-height" style="background: url(<?php echo $event1_image ?>) center center; background-size:cover;"></div>
                        <div class="billboard-item-hover">
                            <div class="billboard-child">
                                <div class="container-xs">
                                    <a class="btn btn-white btn-lg" href="<?php echo get_page_link($event1_target); ?>">
                                        <?php echo $event1_label ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="no-pad billboard-item col-sm-4">
                        <div class="xs-background billboard-child same-height" style="background: url(<?php echo $event2_image ?>) center center; background-size:cover;"></div>
                        <div class="billboard-item-hover">
                            <div class="billboard-child">
                                <div class="container-xs">
                                    <a class="btn btn-white btn-lg" href="<?php echo get_page_link($event2_target); ?>">
                                        <?php echo $event2_label ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } else{}
                if ($event_counter == 3 ){ ?>
        <div id="second-event-billboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="no-pad billboard-item col-12">
                        <div class="xs-background billboard-child same-height" style="background: url(<?php echo $event3_image ?>) center center; background-size:cover;"></div>
                        <div class="billboard-item-hover">
                            <div class="billboard-child">
                                <div class="container-xs">
                                    <a class="btn btn-white btn-lg" href="<?php echo get_page_link($event3_target); ?>">
                                        <?php echo $event3_label ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }elseif ($event_counter > 3 ) { ?>
        <div id="second-event-billboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="no-pad billboard-item col-sm-4">
                        <div class="xs-background billboard-child same-height" style="background: url(<?php echo $event3_image ?>) center center; background-size:cover;"></div>
                        <div class="billboard-item-hover">
                            <div class="billboard-child">
                                <div class="container-xs">
                                    <a class="btn btn-white btn-lg" href="<?php echo get_page_link($event3_target); ?>">
                                        <?php echo $event3_label ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="no-pad billboard-item col-sm-8">
                        <div class="xs-background billboard-child same-height" style="background: url(<?php echo $event4_image ?>) center center; background-size:cover;"></div>
                        <div class="billboard-item-hover">
                            <div class="billboard-child">
                                <div class="container-xs">
                                    <a class="btn btn-white btn-lg" href="<?php echo get_page_link($event4_target); ?>">
                                        <?php echo $event4_label ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }else{}
            if ($event_counter == 5 || $event_counter>6){ ?>
        <div id="third-event-billboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="no-pad billboard-item col-12">
                        <div class="xs-background billboard-child same-height" style="background: url(<?php echo $event5_image ?>) center center; background-size:cover;"></div>
                        <div class="billboard-item-hover">
                            <div class="billboard-child">
                                <div class="container-xs">
                                    <a class="btn btn-white btn-lg" href="<?php echo get_page_link($event5_target); ?>">
                                        <?php echo $event5_label ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } elseif ($event_counter == 6){?>
        <div id="third-event-billboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="no-pad billboard-item col-sm-8">
                        <div class="xs-background billboard-child same-height" style="background: url(<?php echo $event5_image ?>) center center; background-size:cover;"></div>
                        <div class="billboard-item-hover">
                            <div class="billboard-child">
                                <div class="container-xs">
                                    <a class="btn btn-white btn-lg" href="<?php echo get_page_link($event5_target); ?>">
                                        <?php echo $event5_label ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="no-pad billboard-item col-sm-4">
                        <div class="xs-background billboard-child same-height" style="background: url(<?php echo $event6_image ?>) center center; background-size:cover;"></div>
                        <div class="billboard-item-hover">
                            <div class="billboard-child">
                                <div class="container-xs">
                                    <a class="btn btn-white btn-lg" href="<?php echo get_page_link($event6_target); ?>">
                                        <?php echo $event6_label ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }else{} 
                if ($event_counter > 6){ ?>
        <div id="fourth-event-billboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="no-pad billboard-item col-sm-8">
                        <div class="xs-background billboard-child same-height" style="background: url(<?php echo $event6_image ?>) center center; background-size:cover;"></div>
                        <div class="billboard-item-hover">
                            <div class="billboard-child">
                                <div class="container-xs">
                                    <a class="btn btn-white btn-lg" href="<?php echo get_page_link($event6_target); ?>">
                                        <?php echo $event6_label ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="no-pad billboard-item col-sm-4">
                        <div class="xs-background billboard-child same-height" style="background: url(<?php echo $event7_image ?>) center center; background-size:cover;"></div>
                        <div class="billboard-item-hover">
                            <div class="billboard-child">
                                <div class="container-xs">
                                    <a class="btn btn-white btn-lg" href="<?php echo get_page_link($event7_target); ?>">
                                        <?php echo $event7_label ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php } else{}
                if ($event_counter == 8){ ?>
        <div id="fifth-event-billboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="no-pad billboard-item col-12">
                        <div class="xs-background billboard-child same-height" style="background: url(<?php echo $event8_image ?>) center center; background-size:cover;"></div>
                        <div class="billboard-item-hover">
                            <div class="billboard-child">
                                <div class="container-xs">
                                    <a class="btn btn-white btn-lg" href="<?php echo get_page_link($event8_target); ?>">
                                        <?php echo $event8_label ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }elseif ($event_counter > 8){ ?>
        <div id="fifth-event-billboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="no-pad billboard-item col-sm-4">
                        <div class="xs-background billboard-child same-height" style="background: url(<?php echo $event8_image ?>) center center; background-size:cover;"></div>
                        <div class="billboard-item-hover">
                            <div class="billboard-child">
                                <div class="container-xs">
                                    <a class="btn btn-white btn-lg" href="<?php echo get_page_link($event8_target); ?>">
                                        <?php echo $event8_label ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="no-pad billboard-item col-sm-8">
                        <div class="xs-background billboard-child same-height" style="background: url(<?php echo $event9_image ?>) center center; background-size:cover;"></div>
                        <div class="billboard-item-hover">
                            <div class="billboard-child">
                                <div class="container-xs">
                                    <a class="btn btn-white btn-lg" href="<?php echo get_page_link($event9_target); ?>">
                                        <?php echo $event9_label ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }else{}
        if ($event_counter == 10){ ?>
        <div id="sixth-event-billboard">
            <div class="container-fluid">
                <div class="row">
                    <div class="no-pad billboard-item col-12">
                        <div class="xs-background billboard-child same-height" style="background: url(<?php echo $event10_image ?>) center center; background-size:cover;"></div>
                        <div class="billboard-item-hover">
                            <div class="billboard-child">
                                <div class="container-xs">
                                    <a class="btn btn-white btn-lg" href="<?php echo get_page_link($event10_target); ?>">
                                        <?php echo $event10_label ?>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }else{}

get_footer();?>