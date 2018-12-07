<?php
/*
 * Template Name: SMI Page
 *
 * This is the template that displays a contact form.
 *
 * @package bootstrapwp
 */

$og_banner = rwmb_meta('bmco_smi_image_2');
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
    <?php $smi_title = (rwmb_meta('bmco_smi_title') != '' ? rwmb_meta(bmco_smi_title) : '' );
$smi_banner = rwmb_meta('bmco_smi_image_banner');
$banner_url= '';
if (count($smi_banner) > '0'){
    foreach ($smi_banner as $banner){
        $img = "{$banner['full_url']}";
        $banner_url = $img;
    }
}

$smi_banner2 = rwmb_meta('bmco_smi_image_2');
$banner2_url= '';
if (count($smi_banner2) > '0'){
    foreach ($smi_banner2 as $banner2){
        $img2 = "{$banner2['full_url']}";
        $banner2_url = $img2;
    }
}


$app_url = '';
$app_title = '';
$app_or_fund = rwmb_meta('bmco_apply_button');
//checks for application or fundraising
if ($app_or_fund == 'apply'){
$app_url = (rwmb_meta('bmco_app_url') != '' ? rwmb_meta('bmco_app_url') : '' );
$app_title = 'Apply Here!';
}else{
    $app_url = 'https://mcoaugusta.wufoo.com/forms/w7h1ls007gbwhc/';
    $app_title = 'Fund Deposit Form';
}
$app_deadline = rwmb_meta('bmco_smi_deadline');

$smi_banner2 = rwmb_meta('bmco_smi_image_2');
$banner2_url= '';
if (count($smi_banner2) > '0'){
    foreach ($smi_banner2 as $banner2){
        $img2 = "{$banner2['full_url']}";
        $banner2_url = $img2;
    }
}

$smi_banner3 = rwmb_meta('bmco_smi_image_3');
$banner3_url= '';
if (count($smi_banner3) > '0'){
    foreach ($smi_banner3 as $banner3){
        $img3 = "{$banner3['full_url']}";
        $banner3_url = $img3;
    }
}

$info_date = rwmb_meta('bmco_info_date');
$support_date = rwmb_meta('bmco_support_date');
$half_date = rwmb_meta('bmco_half_date');
$pft_date = rwmb_meta('bmco_pft_date');
$full_date = rwmb_meta('bmco_full_date');
$trip_date = rwmb_meta('bmco_trip_date');

$file_1 = rwmb_meta('bmco_smi_file1');
$file1_url= '';
if ( !empty ($file_1)){
    foreach ($file_1 as $files){
        $hello= "hello";
        $file1_url = "{$files['url']}";
    }
}
$file_2 = rwmb_meta('bmco_smi_file2');
$file2_url= '';
if ( !empty ($file_2)){
    foreach ($file_2 as $files){
        $hello= "hello";
        $file2_url = "{$files['url']}";
    }
}
$file_3 = rwmb_meta('bmco_smi_file3');
$file3_url= '';
if ( !empty ($file_3)){
    foreach ($file_3 as $files){
        $hello= "hello";
        $file3_url = "{$files['url']}";
    }
}
$file_4 = rwmb_meta('bmco_smi_file4');
$file4_url= '';
if ( !empty ($file_4)){
    foreach ($file_4 as $files){
        $hello= "hello";
        $file4_url = "{$files['url']}";
    }
}
$file_5 = rwmb_meta('bmco_smi_file5');
$file5_url= '';
if ( !empty ($file_5)){
    foreach ($file_5 as $files){
        $hello= "hello";
        $file5_url = "{$files['url']}";
    }
}
$file_6 = rwmb_meta('bmco_smi_file6');
$file6_url= '';
if ( !empty ($file_6)){
    foreach ($file_6 as $files){
        $hello= "hello";
        $file6_url = "{$files['url']}";
    }
}


$smi_video_url = (rwmb_meta('bmco_smi_video_url') != '' ? rwmb_meta('bmco_smi_video_url') : '' );
?>
        <div class="xl-background" style="background-image: url(<?php echo $banner_url; ?>); color: #ffffff;">
            <header class="header-lg header-child overlay-dark">
                <div class="container">
                    <h1 class="titles"><?php echo $smi_title; ?></h1>
                    <div class="pad15-10">
                        <h2>Participant Info Page</h2>
                        <h3>You will find all important dates and any documents distributed to the team here</h3> </div>
                    <?php if ($app_or_fund == 'apply' || $app_or_fund == 'fund'){ ?>
                        <a class="btn btn-white btn-lg smi-btn" href="<?php echo $app_url; ?>">
                            <?php echo $app_title; ?>
                        </a>
                        <?php } else{}
                            if ($app_or_fund == 'apply'){ 
                                 if ($app_deadline != ''){?>
                        <h3>Application Deadline <?php echo $app_deadline; ?></h3>
                        <?php }
                            }?>
                </div>
            </header>
        </div>
        <?php if ($smi_video_url != ''){ ?>
        <div id="video-billboard" style="background-color:#315376; color:white">
            <div class="container">
                <div class="row textcenter">
                    <div class="container">
                        <div class="row">
                            <div class="no-pad billboard-item col-md-12">
                                <div class="container-video">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <?php echo $smi_video_url ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <div id="top-billboard">
            <div class="container">
                <div class="row textcenter">
                    <h2 class="titles">Managed Missions</h2>
                    <div>
                        <hr> </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm pad15-10"> <i class="fa fa-external-link fa-5x"></i>
                                <p> Sign in to Managed Missions</p>
                            </div>
                            <div class="col-sm pad15-10"> <i class="fa fa-info-circle fa-5x"></i>
                                <p> Fill in all travel and personal info</p>
                            </div>
                            <div class="col-sm pad15-10"> <i class="fa fa-keyboard-o fa-5x"></i>
                                <p> Create your Public Profile</p>
                            </div>
                            <div class="col-sm pad15-10"> <i class="fa fa-users fa-5x"></i>
                                <p> Click the “fundraising” tab to see your donors</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 pad15-10"> <i class="fa fa-inbox fa-5x"></i>
                                <p> Send thank-you’s to supporters</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($banner2_url != '') { ?>
        <div class="xl-background" style="background-image: url(<?php echo $banner2_url; ?>); color: #ffffff;">
            <header class="header-md"></header>
        </div>
        <?php } ?>
        <div id="middle-billboard" style="background-color:#3aa3e6; color:white">
            <div class="container">
                <div class="row textcenter">
                    <h2 class="titles">Support Raising</h2>
                    <div style="text-align:center" class="container-fluid">
                        <div class="row">
                            <div class="col-sm pad15-10"> <i class="fa fa-user fa-5x"></i>
                                <p>Copy of Passport</p>
                            </div>
                            <div class="col-sm pad15-10"> <i class="fa fa-medkit fa-5x"></i>
                                <p>Health release and Code of Conduct</p>
                            </div>
                            <div class="col-sm pad15-10"> <i class="fa fa-usd fa-5x"></i>
                                <p>$200 deposit non-refundable, tax-deductible</p>
                            </div>
                            <div class="col-sm pad15-10"> <i class="fa fa-check fa-5x"></i>
                                <p>Project Agreement</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="bottom-billboard">
            <div class="container">
                <div class="row textcenter">
                    <h2 class="titles">Fundraising</h2>
                    <div class="container-fluid textcenter">
                            <div class="row">
                                <h1 class="titles">Why</h1>
                            </div>
                            <div class="row">
                                <div class="col-sm pad15-10"> <i class="fa fa-anchor fa-5x"></i>
                                    <p>Raising support helps us to trust God to provide for all our needs.</p>
                                </div>
                                <div class="col-sm pad15-10"> <i class="fa fa-users fa-5x"></i>
                                    <p>Raising support helps us to build a prayer team.</p>
                                </div>
                                <div class="col-sm pad15-10"> <i class="fa fa-list-ol fa-5x"></i>
                                    <p>Pride is the #1 reason we don’t want to raise support.</p>
                                </div>
                                <div class="col-sm pad15-10"> <i class="fa fa-envelope fa-5x"></i>
                                    <p>Keep people connected to what God is doing in your life through updates.</p>
                                </div>
                            </div>
                            <div class="row">
                                <h1 class="titles">How</h1>
                            </div>
                            <div class="row">
                                <div class="col-sm pad15-10"> <i class="fa fa-adjust fa-5x"></i>
                                    <p>Letters to family and friends</p>
                                </div>
                                <div class="col-sm pad15-10"> <i class="fa fa-child fa-5x"></i>
                                    <p>Babysitting</p>
                                </div>
                                <div class="col-sm pad15-10"> <i class="fa fa-book fa-5x"></i>
                                    <p>Sunday school or organizational group</p>
                                </div>
                                <div class="col-sm pad15-10"> <i class="fa fa-car fa-5x"></i>
                                    <p>Car wash</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="xl-background" style="background-image:url(<?php echo $banner3_url; ?>); color: #ffffff;">
            <div class="header-child overlay-dark">
                <div class="container white-container">
                    <div class="row">
                        <div class="col-5">
                            <h2 class="no-margin-top titles">Important Dates</h2>
                            <p>
                                <?php echo $info_date; ?> - Informational Meeting</p>
                            <p>
                                <?php echo $support_date; ?> - Support Meeting</p>
                            <p>
                                <?php echo $half_date; ?> - 50% Support Due</p>
                            <p>
                                <?php echo $pft_date; ?> - Prefield Training</p>
                            <p>
                                <?php echo $full_date; ?> - 100% Support Due</p>
                            <p>
                                <?php echo $trip_date; ?> - Trip Dates</p>
                        </div>
                        <div class="col-2"></div>
                        <div class="col-5">
                            <h2 class="no-margin-top titles">Helpful Links</h2>
                            <?php  if ($file1_url != ''){ ?>
                            <div><a href="<?php echo $file1_url; ?>" target="_blank">Health Release/Code of Conduct</a></div>
                            <?php } 
                            if ($file2_url != ''){?>
                            <div><a href="<?php echo $file2_url; ?>" target="_blank">Project Agreement</a></div>
                            <?php } 
                            if ($file3_url != ''){?>
                            <div><a href="<?php echo $file3_url; ?>" target="_blank">Team Covenant</a></div>
                            <?php } 
                            if ($file4_url != ''){?>
                            <div><a href="<?php echo $file4_url; ?>" target="_blank">Guide to Financial Contributions</a></div>
                            <?php } 
                            if ($file5_url != ''){?>
                            <div><a href="<?php echo $file5_url; ?>" target="_blank">Packing List</a></div>
                            <?php } 
                            if ($file6_url != ''){?>
                            <div><a href="<?php echo $file6_url; ?>" target="_blank">Vaccinations</a></div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php

get_footer();?>