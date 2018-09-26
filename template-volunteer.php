<?php
/**
 * Template Name: Volunteer Page
 *
 * This is the template that displays a contact form.
 *
 * @package bootstrapwp
 */


get_header(); ?>
    <?php 

    $contact_banner = rwmb_meta('bmco_volunteer_image_banner');
    $banner_url = '';
    if (count($contact_banner) > '0'){
        foreach ($contact_banner as $banner){
            $img = "{$banner['full_url']}";
            $banner_url = $img;
        }
    }

?>
        <div class="xl-background" style="background-image: url(<?php echo $banner_url; ?>); background-position:bottom; color: #ffffff;">
            <header class=" header-sm header-child overlay-dark">
                <div class="container">
                    <h1 class="titles">fill out the form below to join our volunteer teams</h1>
                            <a href="#scroll_prompt_anchor">
                                <div id="scroll-prompt" class="animated bounce"><img src="<?php bloginfo('template_directory') ?>/img/down-arrow.png"></div>
                            </a>
                </div>
            </header>
        </div> <span id="scroll_prompt_anchor"></span>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3>Apply Here to join our volunteer teams</h3>
                </div>
                <div id="primary" class="col-md-12 col-lg-12">
                    <div id="wufoo-kkte6zj1wqqxk3"> Fill out my <a href="https://mcoaugusta.wufoo.com/forms/kkte6zj1wqqxk3">online form</a>. </div>
                    <script type="text/javascript">
                        var kkte6zj1wqqxk3;
                        (function (d, t) {
                            var s = d.createElement(t)
                                , options = {
                                    'userName': 'mcoaugusta'
                                    , 'formHash': 'kkte6zj1wqqxk3'
                                    , 'autoResize': true
                                    , 'height': '679'
                                    , 'async': true
                                    , 'host': 'wufoo.com'
                                    , 'header': 'show'
                                    , 'ssl': true
                                };
                            s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
                            s.onload = s.onreadystatechange = function () {
                                var rs = this.readyState;
                                if (rs)
                                    if (rs != 'complete')
                                        if (rs != 'loaded') return;
                                try {
                                    kkte6zj1wqqxk3 = new WufooForm();
                                    kkte6zj1wqqxk3.initialize(options);
                                    kkte6zj1wqqxk3.display();
                                }
                                catch (e) {}
                            };
                            var scr = d.getElementsByTagName(t)[0]
                                , par = scr.parentNode;
                            par.insertBefore(s, scr);
                        })(document, 'script');
                    </script>
                    <!-- #main -->
                </div>
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
        <?php get_footer(); ?>