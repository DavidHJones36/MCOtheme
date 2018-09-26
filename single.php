<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bootstrappermco
 */

get_header(); ?>
    <?php if (rwmb_meta(bmco_smi_title)!=''){
     $banner_text = rwmb_meta(bmco_smi_title);
     }?>
        <div class="container">
            <?php   echo "<h1>";
            error_log(rwmb_meta(bmco_smi_title));
            echo $banner_text;
            echo "</h1>";?>
                <div class="row">
                    <div id="primary" class="col-md-6 col-lg-6">
                        <main id="main" class="site-main" role="main">
                            <?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );

			//the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
                        </main>
                        <!-- #main -->
                    </div>
                    <!-- #primary -->
                </div>
                <!-- #row -->
        </div>
        <!-- #container -->
        <?php
get_sidebar();
get_footer();