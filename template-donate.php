<?php
/**
 * Template Name: Donate Page
 *
 * This is the template that displays a donate iframe.
 *
 * @package bootstrapwp
 */


get_header(); ?>
    <?php 
    $donate_banner = rwmb_meta('bmco_donate_image_banner');
    $banner_url = '';
    if (count($donate_banner) > '0'){
        foreach ($donate_banner as $banner){
            $img = "{$banner['full_url']}";
            $banner_url = $img;
        }
    }
    $donate_url = rwmb_meta('bmco_donate_url');

?>
        <div class="xl-background" style="background-image: url(<?php echo $banner_url; ?>); color: #ffffff;">
            <header class="header-lg header-child overlay-dark">
                <div class="container">
                    <h1 class="titles">Thank you for your donation!</h1>

                    <a class="btn btn-white btn-lg smi-btn" href="<?php echo $donate_url ?>">Give Online</a>

                </div>
            </header>
</div>
        

<?php
get_footer();?>