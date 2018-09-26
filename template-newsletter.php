<?php
/**
 * Template Name: Newsletter Page
 *
 * This is the template that displays a Newsletter form.
 *
 * @package bootstrapwp
 */


get_header(); ?>
    <?php 

    $news_message = rwmb_meta('bmco_news_message');
    $news_banner = rwmb_meta('bmco_news_image_banner');
    $news_form = rwmb_meta('bmco_news_form_url');
    $banner_url = '';
    if (count($news_banner) > '0'){
        foreach ($news_banner as $banner){
            $img = "{$banner['full_url']}";
            $banner_url = $img;
        }
    }

?>
        <div class="xl-background" style="background-image: url(<?php echo $banner_url; ?>); color: #ffffff;">
            <header class=" header-lg header-child overlay-dark">
                <div class="container">
                    <h1 class="titles"><?php echo $news_message ?></h1>
                    <a href="#scroll_prompt_anchor">
                        <div id="scroll-prompt" class="animated bounce"><img src="<?php bloginfo('template_directory') ?>/img/down-arrow.png"></div>
                    </a>
                </div>
            </header>
        </div> <span id="scroll_prompt_anchor"></span>
        <div class="container textcenter">
            <h1>sign up for the mco newsletter</h1>
            <div class="row">
                <div class="col-sm-2"></div>
                <div id="primary" class="col-sm-8">
                        <?php echo $news_form; ?>
<!--
                    <form id="form1" class="wufoo topLabel page1" accept-charset="UTF-8" action="<?php //echo $news_form ?>#public" autocomplete="off" enctype="multipart/form-data" method="post" name="form1" novalidate="">
                        <div class="wufoorow form-group">
                            <div class="half-size">
                                <input id="Field1" class="field text form-field" tabindex="1" name="Field1" type="text" value="" placeholder="first name" />
                            </div>
                            <div class="half-size">
                                <input id="Field2" class="field text form-field" tabindex="2" name="Field2" type="text" value="" placeholder="last name" />
                            </div>
                        </div>
                        <div class="form-group">
                            <select id="Field6" class="field select form-field" tabindex="3" name="Field6">
                                <option value="School/Professions">School/Profession</option>
                                <option value="MD">MD</option>
                                <option value="DMD">DMD</option>
                                <option value="RN-BSN">RN-BSN</option>
                                <option value="RN-CNL, CRNA, NP">RN-CNL, CRNA, NP</option>
                                <option value="PT">PT</option>
                                <option value="OT">OT</option>
                                <option value="PA">PA</option>
                                <option value="Hygiene">Hygiene</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input id="Field3" class="field text email form-field" tabindex="4" spellcheck="false" maxlength="255" name="Field3" type="email" value="" placeholder="email" />
                        </div>
                        <div class="form-group"> Email Preference?
                            <div>
                                <input id="Field214" class="field checkbox" tabindex="5" name="Field214" type="checkbox" value="Weekly Announcements" />Weekly Announcements</div>
                                <div>
                                    <input id="Field215" class="field checkbox" tabindex="6" name="Field215" type="checkbox" value="Occasional Announcements" />Occasional Announcements</div>
                            
                        </div>
                        <div>
                            <input id="submit_button" class="btn btn-color" type="button" value="Submit" />
                            <input id="saveForm" name="saveForm" type="submit" class="hide" value="Submit" />
                        </div>
                        <ul>
                            <li class="hide">
                                <label for="comment">Do Not Fill This Out</label>
                                <textarea id="comment" cols="1" name="comment" rows="1"></textarea>
                                <input id="idstamp" name="idstamp" type="hidden" value="CYxOqdmtdLfLSaMCRmfXJd602ZRwVJKYLg/FSZIuQMk=" />
                            </li>
                        </ul>
                    </form>
-->
                    <!-- #main -->
                </div>
                <div class="col-sm-2"></div>
                <!-- #primary -->
                
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
        <?php get_footer(); ?>