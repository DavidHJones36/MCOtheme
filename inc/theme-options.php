<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "bmco_options";



    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();
    
    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => 'bmco_options',
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Options', 'bootstrappermco' ),
        'page_title'           => __( 'Options', 'bootstrappermco' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'bootstrappermco' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'bootstrappermco' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'bootstrappermco' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    /*$args['share_icons'][] = array( 'url' => 'https://github.com/ReduxFramework/ReduxFramework', 'title' => 'Visit us on GitHub', 'icon' => 'el el-github' //'img' => '', // You can use icon OR img. IMG needs to be a full URL. ); $args['share_icons'][] = array( 'url' => 'https://www.facebook.com/pages/Redux-Framework/243141545850368', 'title' => 'Like us on Facebook', 'icon' => 'el el-facebook' ); $args['share_icons'][] = array( 'url' => 'http://twitter.com/reduxframework', 'title' => 'Follow us on Twitter', 'icon' => 'el el-twitter' ); $args['share_icons'][] = array( 'url' => 'http://www.linkedin.com/company/redux-framework', 'title' => 'Find us on LinkedIn', 'icon' => 'el el-linkedin' );*/

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p></p>', 'bootstrappermco' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'bootstrappermco' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p></p>', 'bootstrappermco' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'bootstrappermco' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'bootstrappermco' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'bootstrappermco' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'bootstrappermco' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'bootstrappermco' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Header Fields
    $section=array(
        'title'            =>  'Header' ,
        'id'               => 'navbar',
        'type'              => 'basic',
        'fields'            => array(
        array(
        'id'                =>  'opt-navbar-transparent',
        'type'              => 'switch',
        'title'             =>  'Enable Transparent',
        'on'                => 'Transparent',
        'off'               => 'Opaque',
        'default'           => true,),
        array(
        'id'                =>  'opt-navbar-fixed',
        'type'              => 'switch',
        'title'             =>  'Enable Transparent',
        'on'                => 'Fixed',
        'off'               => 'Static',
        'default'           => true,),
        array(
        'id'                =>  'opt-logo',
        'type'              => 'media',
        'title'             =>  'Upload Logo for Opaque Header',
        'subtitle'          => 'Image will be cropped to height set below',
        'url'               =>  true,
        'default'           => '',),
        array(
        'id'                =>  'opt-transparent-logo',
        'type'              => 'media',
        'title'             =>  'Upload Logo for Transparent Header',
        'subtitle'          => 'Image will be cropped to height set below',
        'url'               =>  true,
        'default'           => '',),
        array(
        'id'                => 'opt-logo-height',
        'type'              => 'text',
        'title'             => 'Logo Height',
        'subtitle'          => 'recommended 50, default is 50',
        'default'           => '50',
        'validate'          => 'numeric',),
         array(
        'id'                =>  'nothin',
        'type'              => 'basic',
        'title'             =>  'Header Menu',
        'subtitle'              => 'Header Menu can be changed in Appearance>Menu',),),
    );
    Redux::setSection( $opt_name, $section );
    
    //START Footer Fields
    $section=array(
        'title'            =>  'Footer' ,
        'id'               => 'footerbar',
        'type'              => 'basic',
    );
    Redux::setSection( $opt_name, $section );
    
    $section=array(
        'title'            =>  'Quick Links' ,
        'id'               => 'quick_links',
        'type'              => 'basic',
        'subsection'        => 'true',
        'desc'             => __( 'Quick Links can be changed in Appearance>Menu', 'bootstrappermco' ),
        );
    Redux::setSection( $opt_name, $section );

    
    $section=array(
        'title'            =>  'Staff' ,
        'id'               => 'staff',
        'type'              => 'basic',
        'subsection'        => 'true',
        'fields'            => array(
            array(
                'id'                =>  'staff1',
                'type'              => 'text',
                'title'             =>  'Staff 1',),
            array(
                'id'                =>  'staff1title',
                'type'              => 'text',
                'title'             =>  'Staff 1 Title',),
            array(
                'id'                =>  'staff2',
                'type'              => 'text',
                'title'             =>  'Staff 2',),
            array(
                'id'                =>  'staff2title',
                'type'              => 'text',
                'title'             =>  'Staff 2 Title',),
            array(
                'id'                =>  'staff3',
                'type'              => 'text',
                'title'             =>  'Staff 3',),
            array(
                'id'                =>  'staff3title',
                'type'              => 'text',
                'title'             =>  'Staff 3 Title',),
            array(
                'id'                =>  'staff4',
                'type'              => 'text',
                'title'             =>  'Staff 4',),
            array(
                'id'                =>  'staff4title',
                'type'              => 'text',
                'title'             =>  'Staff 4 Title',),),);
    Redux::setSection( $opt_name, $section );

    $section=array(
        'title'            =>  'Contact Info' ,
        'id'               => 'contact_footer',
        'type'              => 'basic',
        'subsection'        => 'true',
        'fields'            => array(
            array(
                'id'                =>  'campus',
                'type'              => 'text',
                'title'             =>  'Campus',
                'subtitle'          =>  'Example: Augusta, Athens, etc.'),
            array(
                'id'                =>  'phone',
                'type'              => 'text',
                'title'             =>  'Phone Number',),
            array(
                'id'                =>  'street',
                'type'              => 'text',
                'title'             =>  'Street Address',),
            array(
                'id'                =>  'city',
                'type'              => 'text',
                'title'             =>  'City/State',),
            ),);
    Redux::setSection( $opt_name, $section );

    //START Home Page Fields
//    $section=array(
//        'title'            =>  'Home Page' ,
//        'type'              => 'basic',
//        'fields'            => array(
//            array(
//                'id'                =>  'feature-on',
//                'type'              => 'switch',
//                'title'             =>  'Home Banner or Feature',
//                'off'                => 'Home Banner',
//                'on'               =>   'Featured',
//                'subtitle'          =>  'Scroll down to add featured banner and link',
//                'default'           =>  false,),
//            array(
//                    'id'            =>  'home_banner',
//                    'type'          =>  'media',
//                    'title'         =>  'Home Page Banner',),
//            array(
//                    'id'            =>  'home_title',
//                    'type'          =>  'media',
//                    'title'         =>  'Home Page Title Image',),
//            array(
//                    'id'            =>  'feature_banner',
//                    'type'          =>  'media',
//                    'title'         =>  'Feature Banner',
//                    'subtitle'      =>  'Feature is great for advertising Events',),
//            array(
//                    'id'            =>  'feature_title',
//                    'type'          =>  'media',
//                    'title'         =>  'Feature Title Image',),
//            array(
//                'id'            =>  'feature_target',
//                'type'          =>  'select',
//                'data'          =>  'pages',
//                'title'         =>  'Featured Page',),
//            array(
//                    'id'            =>  'welcome_section_title',
//                    'type'          =>  'text',
//                    'title'         =>  'Welcome Section Title',
//                    'subtitle'      =>  'Title for section below banner image',),
//            array(
//                    'id'            =>  'welcome_section',
//                    'type'          =>  'textarea',
//                    'title'         =>  'Welcome Section Paragraph',),
//        ),
//    );
//    Redux::setSection( $opt_name, $section );
//
//    //START Billboard Fields
//    $section=array(
//        'title'            =>  'Upper Billboard' ,
//        'type'             => 'basic',
//        'subsection'       =>   'true',
//        'fields'           => array(
//            array(
//                'id'            =>  'billboard1',
//                'type'          =>  'media',
//                'title'         =>  'Billboard Image 1',),
//            array(
//                'id'            =>  'billboard1_label',
//                'type'          =>  'text',
//                'title'         =>  'Billboard 1 Label',
//                'subtitle'      =>  'Label for 1st billboard button',),
//            array(
//                'id'            =>  'billboard1_target',
//                'type'          =>  'select',
//                'data'          =>  'pages',
//                'title'         =>  'Billboard 1 url',
//                'subtitle'      =>  'URL for 1st billboard button',),
//            array(
//                'id'            =>  'billboard2',
//                'type'          =>  'media',
//                'title'         =>  'Billboard Image 2',),
//            array(
//                'id'            =>  'billboard2_label',
//                'type'          =>  'text',
//                'title'         =>  'Billboard 2 Label',
//                'subtitle'      =>  'Label for 2nd billboard button',),
//            array(
//                'id'            =>  'billboard2_target',
//                'type'          =>  'select',
//                'data'          =>  'pages',
//                'title'         =>  'Billboard 2 url',
//                'subtitle'      =>  'URL for 2nd billboard button',),
//            array(
//                'id'            =>  'billboard3',
//                'type'          =>  'media',
//                'title'         =>  'Billboard Image 3',),
//            array(
//                'id'            =>  'billboard3_label',
//                'type'          =>  'text',
//                'title'         =>  'Billboard 3 Label',
//                'subtitle'      =>  'Label for 3rd billboard button',),
//            array(
//                'id'            =>  'billboard3_target',
//                'type'          =>  'select',
//                'data'          =>  'pages',
//                'title'         =>  'Billboard 3 url',
//                'subtitle'      =>  'URL for 3rd billboard button',),
//        ),
//    );
//    Redux::setSection( $opt_name, $section );
//    
//    //Video Billboard
//    $section=array(
//            'title'            =>  'Video Billboard' ,
//            'type'             => 'basic',
//            'subsection'       =>   'true',
//            'fields'           => array(
//                array(
//                'id'            =>  'video_banner',
//                'type'          =>  'media',
//                'title'         =>  'Video Banner Background Image'),
//                array(
//                    'id'            =>  'video_billboard_url',
//                    'type'          =>  'text',
//                    'title'         =>  'Video Billboard',
//                    'subtitle'      =>  'please use iframe code and remove "height" and "width" properties',
//                    'placeholder'   =>  '<iframe>...</iframe>',),
//                array(
//                    'id'            =>  'video_billboard_title',
//                    'type'          =>  'text',
//                    'title'         =>  'Video Billboard Title',
//                    'subtitle'      =>  'will render UPPERCASE',
//                    'placeholder'   =>  'welcome to our site!',),
//                array(
//                    'id'            =>  'video_billboard_text',
//                    'type'          =>  'text',
//                    'title'         =>  'Video Billboard Text',
//                    'subtitle'      =>  'will render lowercase',
//                    'placeholder'   =>  'we\'re glad you\'re here',),
//                array(
//                    'id'                =>  'opt-about-button',
//                    'type'              => 'switch',
//                    'title'             =>  'About button on?',
//                    'on'                => 'about',
//                    'off'               => 'no-about',
//                    'default'           => true,),
//                array(
//                    'id'            =>  'about_target',
//                    'type'          =>  'select',
//                    'data'          =>  'pages',
//                    'title'         =>  'Select About Page',
//                    'subtitle'      =>  'URL for about page',),
//            ),
//    );
//
//    Redux::setSection( $opt_name, $section );
//
//    $section=array(
//            'title'            =>  'Lower Billboards' ,
//            'type'             => 'basic',
//            'subsection'       =>   'true',
//            'fields'           => array(
//                array(
//                'id'            =>  'billboard4',
//                'type'          =>  'media',
//                'title'         =>  'Billboard Image 4',),
//            array(
//                'id'            =>  'billboard4_label',
//                'type'          =>  'text',
//                'title'         =>  'Billboard 4 Label',
//                'subtitle'      =>  'Label for 4th billboard button',),
//           array(
//                'id'            =>  'billboard4_target',
//                'type'          =>  'select',
//                'data'          =>  'pages',
//                'title'         =>  'Billboard 4 url',
//                'subtitle'      =>  'URL for 4th billboard button',),
//            array(
//                'id'            =>  'billboard5',
//                'type'          =>  'media',
//                'title'         =>  'Billboard Image 5',),
//            array(
//                'id'            =>  'billboard5_label',
//                'type'          =>  'text',
//                'title'         =>  'Billboard 5 Label',
//                'subtitle'      =>  'Label for 5th billboard button',),
//            array(
//                'id'            =>  'billboard5_target',
//                'type'          =>  'select',
//                'data'          =>  'pages',
//                'title'         =>  'Billboard 5 url',
//                'subtitle'      =>  'URL for 5th billboard button',),
//            array(
//                'id'            =>  'billboard6',
//                'type'          =>  'media',
//                'title'         =>  'Billboard Image 6',),
//            array(
//                'id'            =>  'billboard6_label',
//                'type'          =>  'text',
//                'title'         =>  'Billboard 6 Label',
//                'subtitle'      =>  'Label for 6th billboard button',),
//            array(
//                'id'            =>  'billboard6_target',
//                'type'          =>  'select',
//                'data'          =>  'pages',
//                'title'         =>  'Billboard 6 url',
//                'subtitle'      =>  'URL for 6th billboard button',),
//            array(
//                'id'            =>  'billboard7',
//                'type'          =>  'media',
//                'title'         =>  'Billboard Image 7',),
//            array(
//                'id'            =>  'billboard7_label',
//                'type'          =>  'text',
//                'title'         =>  'Billboard 7 Label',
//                'subtitle'      =>  'Label for 7th billboard button',),
//            array(
//                'id'            =>  'billboard7_target',
//                'type'          =>  'select',
//                'data'          =>  'pages',
//                'title'         =>  'Billboard 7 url',
//                'subtitle'      =>  'URL for 7th billboard button',),
//            array(
//                'id'            =>  'billboard8',
//                'type'          =>  'media',
//                'title'         =>  'Billboard Image 8',),
//            array(
//                'id'            =>  'billboard8_label',
//                'type'          =>  'text',
//                'title'         =>  'Billboard 8 Label',
//                'subtitle'      =>  'Label for 8th billboard button',),
//            array(
//                'id'            =>  'billboard8_target',
//                'type'          =>  'select',
//                'data'          =>  'pages',
//                'title'         =>  'Billboard 8 url',
//                'subtitle'      =>  'URL for 8th billboard button',),
//            array(
//                'id'            =>  'billboard9',
//                'type'          =>  'media',
//                'title'         =>  'Billboard Image 9',
//                'subtitle'       =>  'Image needed to create this row'),
//            array(
//                'id'            =>  'billboard9_label',
//                'type'          =>  'text',
//                'title'         =>  'Billboard 9 Label',
//                'subtitle'      =>  'Label for 9th billboard button',),
//            array(
//                'id'            =>  'billboard9_target',
//                'type'          =>  'select',
//                'data'          =>  'pages',
//                'title'         =>  'Billboard 9 url',
//                'subtitle'      =>  'URL for 9th billboard button',),
//            array(
//                'id'            =>  'billboard10',
//                'type'          =>  'media',
//                'title'         =>  'Billboard Image 10',),
//            array(
//                'id'            =>  'billboard10_label',
//                'type'          =>  'text',
//                'title'         =>  'Billboard 10 Label',
//                'subtitle'      =>  'Label for 10th billboard button',),
//            array(
//                'id'            =>  'billboard10_target',
//                'type'          =>  'select',
//                'data'          =>  'pages',
//                'title'         =>  'Billboard 10 url',
//                'subtitle'      =>  'URL for 10th billboard button',),
//            ),
//    );
//
//    Redux::setSection( $opt_name, $section );
    
    $section=array(
        'title'            =>  'Social' ,
        'type'              => 'basic',
        'fields'            => array(
            array(
                    'id'            =>  'facebook',
                    'type'          =>  'text',
                    'title'         =>  'Facebook URL',
                    'subtitle'      =>  'make sure to use http:// format'),
             array(
                    'id'            =>  'twitter',
                    'type'          =>  'text',
                    'title'         =>  'Twitter URL',
                    'subtitle'      =>  'make sure to use http:// format'),
            array(
                    'id'            =>  'instagram',
                    'type'          =>  'text',
                    'title'         =>  'Instagram URL',
                    'subtitle'      =>  'make sure to use http:// format'),
            
        ),
    );

    Redux::setSection( $opt_name, $section );
   
    /*
     * <--- END SECTIONS
     */


    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $field['msg']    = 'your custom error message';
                $return['error'] = $field;
            }

            if ( $warning == true ) {
                $field['msg']      = 'your custom warning message';
                $return['warning'] = $field;
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', 'bootstrappermco' ),
                'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'bootstrappermco' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }