<?php
/**
 * Template Name: Redirect Page
 *
 * This is the template that redirects to a URL
 *
 * @package bootstrapwp
 */

$redirect_url = rwmb_meta('bmco_redirect_url');
wp_redirect($redirect_url);
exit;
    
?>