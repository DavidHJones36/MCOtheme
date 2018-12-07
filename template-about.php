<?php
/*
 * Template Name: About Page
 *
 * This is the template that displays the about page.
 *
 * @package bootstrapwp
 */

get_header(); 
global $bmco_options;
$bmco_campus=$bmco_options['campus'];

$about_banner = rwmb_meta('bmco_about_image_banner');
$vision_text = rwmb_meta('bmco_vision_text');
$vision_title = rwmb_meta('bmco_vision_title');
$expand_title1 = rwmb_meta('bmco_expand_title1');
$expand_text1 = rwmb_meta('bmco_expand_text1');
$expand_title2 = rwmb_meta('bmco_expand_title2');
$expand_text2 = rwmb_meta('bmco_expand_text2');
$expand_title3 = rwmb_meta('bmco_expand_title3');
$expand_text3 = rwmb_meta('bmco_expand_text3');
$smi_image = rwmb_meta('bmco_smi_image');
$smi_title = rwmb_meta('bmco_smi_title');
$smi_desc = rwmb_meta('bmco_smi_desc');
$history_banner = rwmb_meta('bmco_history_banner');
$history_text = rwmb_meta('bmco_history_text');
$banner_url= '';
if (count($about_banner) > '0'){
    foreach ($about_banner as $banner){
        $img = "{$banner['full_url']}";
        $banner_url = $img;
    }
}
if (count($smi_image) > '0'){
    foreach ($smi_image as $smi){
        $img2 = "{$smi['full_url']}";
        $smi_url = $img2;
    }
}
if (count($history_banner) > '0'){
    foreach ($history_banner as $history){
        $img = "{$history['full_url']}";
        $history_url = "background-image: url( " . $img . " ); ";
    }
}

?>

    <div class="xl-background" style="background-image: url(<?php echo $banner_url; ?>); color: #ffffff;">
        <header class=" header-lg header-child overlay-dark">
            <div class="container">
                <div class="pad15-10">
                    <h2 class="titles">Who we are</h2>
                    <a href="#scroll_prompt_anchor">
                        <div id="scroll-prompt" class="animated bounce"><img src="<?php bloginfo('template_directory') ?>/img/down-arrow.png"></div>
                    </a>
                </div>
            </div>
        </header>
    </div>
    <span id="scroll_prompt_anchor"></span>
    <div id="top-billboard">
            <div class="container">
                    <h3 class="titles">// <?php echo $vision_title; ?> //</h3>
                    <p> <?php echo $vision_text; ?></p>
                    <div class="textcenter">
                    <a class="btn btn-sm btn-black-white smi-btn toggle-trigger" data-target="#further_statements" data-toggle="collapse" data-toggle-expand-title="Read More" data-toggle-collapse-title="Collapse"><span class="toggle-title">Read More</span></a></div>
            </div>
        </div>
    <div id="further_statements" class="collapse">
            <div class="container">
                    <?php if ($expand_title1 != ''){ ?>
                    <h3 class="titles">// <?php echo $expand_title1; ?> //</h3>
                    <p> <?php echo $expand_text1; ?></p>
                    <?php } ?>
                    <?php if ($expand_title2 != ''){ ?>
                    <h3 class="titles">// <?php echo $expand_title2; ?> //</h3>
                    <p> <?php echo $expand_text2; ?></p>
                    <?php } ?>
                    <?php if ($expand_title3 != ''){ ?>
                    <h3 class="titles">// <?php echo $expand_title3; ?> //</h3>
                    <p> <?php echo $expand_text3; ?></p>
                    <?php } ?>
            </div>
    </div>
    <div id="smi-billboard">
        <div class="container-fluid">
            <div class="row">
                    <div class="about-billboard-item col-sm" >
                        <img src = "<?php bloginfo('template_directory'); ?>/img/smi-logo.png">
                    </div>
                    <div class=" about-billboard-item col-sm">
                        <h3 class="titles">// <?php echo $smi_title; ?> //</h3>
                    <p> <?php echo $smi_desc; ?></p>
                    </div>
            </div>
        </div>
    </div>
    <div id="history-billboard" class="xl-background" style="<?php echo $history_url; ?> color: #ffffff;">
        <div class="overlay-dark pad25">
        <div class="container">
            <div class="row textcenter">
                <h3 class="titles">// history //</h3>
                    <p> <?php echo $history_text; ?></p>
            </div>
        </div>
        </div>
    </div>
    
    <?php

get_footer();?>