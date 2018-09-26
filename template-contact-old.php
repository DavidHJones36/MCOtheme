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
    $contact_banner = rwmb_meta('bmco_contact_image_banner');
    $banner_url = '';
    if (count($contact_banner) > '0'){
        foreach ($contact_banner as $banner){
            $img = "{$banner['full_url']}";
            $banner_url = "background-image: url( " . $img . " ); ";
        }
    }

?>
        <div class="xs-background" style="<?php echo $banner_url; ?> center center fixed; background-size:cover; color: #ffffff;">
            <div style="padding: 200px 0"></div>
        </div>
        <div class="container">
            <h1>CONTACT US</h1>
            <div class="row">
                <div id="primary" class="col-md-8 col-lg-8">
                    <form id="form82" class="wufoo topLabel page" accept-charset="UTF-8" action="https://mcoaugusta.wufoo.com/forms/xcw3co51npkx4b/#public" autocomplete="off" enctype="multipart/form-data" method="post" name="form82" novalidate="">
                        <div class="wufoorow form-group">
                            <div class="half-size">
                                <input id="Field1" class="field text form-field" tabindex="1" name="Field1" type="text" value="" placeholder="first name" />
                            </div>
                            <div class="half-size">
                                <input id="Field2" class="field text form-field" tabindex="2" name="Field2" type="text" value="" placeholder="last name" />
                            </div>
                        </div>
                        <div class="form-group">
                            <input id="Field3" class="field text form-field" tabindex="3" spellcheck="false" maxlength="255" name="Field3" required="" type="email" value="" placeholder="email" />
                        </div>
                        <div class="form-group">
                            <textarea id="Field109" class="field textarea form-field" tabindex="4" spellcheck="true" cols="50" name="Field109" required="" rows="10" placeholder="message"></textarea>
                        </div>
                        <div class="buttons ">
                            <div>
                                <input id="submit_button" class="btn btn-color" type="button" value="Submit" />
                                <input id="saveForm" class="hide" name="saveForm" type="submit" value="Submit" />
                            </div>
                        </div>
                        <ul>
                            <li class="hide">
                                <label for="comment">Do Not Fill This Out</label>
                                <textarea id="comment" cols="1" name="comment" rows="1"></textarea>
                                <input id="idstamp" name="idstamp" type="hidden" value="YxG1rOD5Af1b0ImMUOYG/6tDNZImZEx0J3J7SYC11yo=" />
                            </li>
                        </ul>
                    </form>
                    <!-- #main -->
                </div>
                <!-- #primary -->
                <div id="primary" class="col-lg-4 col-md-4" style="margin:1.5em 0 0">
                    <p>For more information about MCO Augusta, send us a message using this form and we&#8217;ll get back to you!</p>
                    <p>You can also reach us at <strong>706.262.8841</strong></p>
                    <p><strong>MCO Augusta</strong>
                        <br /> 624 Greene St
                        <br /> Augusta GA 30909</p>
                </div>
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
        <?php get_footer(); ?>