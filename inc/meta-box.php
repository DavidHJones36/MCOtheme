<?php
/**
 * Registering meta boxes
 *
 * All the definitions of meta boxes are listed below with comments.
 * Please read them CAREFULLY.
 *
 * You also should read the changelog to know what has been changed before updating.
 *
 * For more information, please visit:
 *
 * @link http://metabox.io/docs/registering-meta-boxes/
 */


add_filter( 'rwmb_meta_boxes', 'bmco_register_meta_boxes' );

/**
 * Register meta boxes
 *
 * Remember to change "your_prefix" to actual prefix in your project
 *
 * @param array $meta_boxes List of meta boxes
 *
 * @return array
 */
function bmco_register_meta_boxes( $meta_boxes ) {
	/**
	 * prefix of meta keys (optional)
	 * Use underscore (_) at the beginning to make keys hidden
	 * Alt.: You also can make prefix empty to disable it
	 */
	// Better has an underscore as last sign
	$prefix = 'bmco_';
	
    //About meta Box
    $meta_boxes[] = array(
        'title' => esc_html__('About','bmco_'),
        'post_types' => array('post','page'),
        'show'  =>  array(
            'template'  =>  array('template-about.php'),
        ),
        'fields' => array(
        array(
            'name' => esc_html__('About Image Banner','bmco_'),
            'id' => "{$prefix}about_image_banner",
            'type' => 'image_advanced',
            'max_file_uploads'  =>  1,
            ),
        array(
            //Type
            'type'  => "divider",
        ),
        array(
				//Type
                'type'  => "text",
                // Field name - Will be used as label
				'name'  => esc_html__( 'Vision Title', 'bmco_' ),
				// Label description, display below field name (optional).
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}vision_title",
				// Default value (optional)
				'std'   => esc_html__( 'Our Vision', 'bmco_' ),
            ),
        array(
				//Type
                'type'  => "textarea",
                // Field name - Will be used as label
				'name'  => esc_html__( 'Vision text', 'bmco_' ),
				// Label description, display below field name (optional).
				'label_description' => esc_html__( 'Describe MCO', 'bmco_' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}vision_text",
				// Default value (optional)
				'std'   => esc_html__( 'what is our vision?', 'bmco_' ),
			),
        array(
				//Type
                'type'  => "text",
                // Field name - Will be used as label
				'name'  => esc_html__( 'expanded title 1', 'bmco_' ),
				// Label description, display below field name (optional).
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}expand_title1",
				// Default value (optional)
				'std'   => esc_html__( 'Mission?', 'bmco_' ),
            ),
        array(
				//Type
                'type'  => "textarea",
                // Field name - Will be used as label
				'name'  => esc_html__( 'expanded statement 1', 'bmco_' ),
				// Label description, display below field name (optional).
				'label_description' => esc_html__( '', 'bmco_' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}expand_text1",
				// Default value (optional)
				'std'   => esc_html__( 'what is our mission?', 'bmco_' ),
			),
        array(
				//Type
                'type'  => "text",
                // Field name - Will be used as label
				'name'  => esc_html__( 'expanded title 2', 'bmco_' ),
				// Label description, display below field name (optional).
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}expand_title2",
				// Default value (optional)
				'std'   => esc_html__( 'Strategy?', 'bmco_' ),
            ),
        array(
				//Type
                'type'  => "textarea",
                // Field name - Will be used as label
				'name'  => esc_html__( 'expanded statement 2', 'bmco_' ),
				// Label description, display below field name (optional).
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}expand_text2",
				// Default value (optional)
				'std'   => esc_html__( 'what is our strategy?', 'bmco_' ),
			),
        array(
				//Type
                'type'  => "text",
                // Field name - Will be used as label
				'name'  => esc_html__( 'expanded title 3', 'bmco_' ),
				// Label description, display below field name (optional).
                'label_description' => esc_html__( 'not required', 'bmco_' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}expand_title3",
				// Default value (optional)
				'std'   => esc_html__( '', 'bmco_' ),
            ),
        array(
				//Type
                'type'  => "textarea",
                // Field name - Will be used as label
				'name'  => esc_html__( 'expanded statement 3', 'bmco_' ),
				// Label description, display below field name (optional).
                'label_description' => esc_html__( 'not required', 'bmco_' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}expand_text3",
				// Default value (optional)
				'std'   => esc_html__( '', 'bmco_' ),
        ),
        array(
            //Type
            'type'  => "divider",
        ),
        array(
            'name' => esc_html__('SMI accompanying Image','bmco_'),
            'id' => "{$prefix}smi_image",
            'type' => 'image_advanced',
            'max_file_uploads'  =>  1,
            ),
        array(
				//Type
                'type'  => "text",
                // Field name - Will be used as label
				'name'  => esc_html__( 'SMI description title', 'bmco_' ),
				// Label description, display below field name (optional).
                'label_description' => 'recommended just SMI',
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}smi_title",
				// Default value (optional)
				'std'   => esc_html__( 'SMI', 'bmco_' ),
            ),
        array(
				//Type
                'type'  => "textarea",
                // Field name - Will be used as label
				'name'  => esc_html__( 'SMI description', 'bmco_' ),
				// Label description, display below field name (optional).
                'label_description' => 'feel free to edit this default',
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}smi_desc",
				// Default value (optional)
				'std'   => esc_html__( 'Summer Medical Institute (SMI) began in 1993 in Philadelphia providing vaccinations to under-served areas. In 1998, MCO transitioned SMI to international locations. MCO has since expanded to three SMI trips (Allied Health/Dental/Medical) each year as well as a fourth-year medical elective in in conjunction with Mission to the World and the Medical College of Georgia.', 'bmco_' ),
            ),
        array(
            //Type
            'type'  => "divider",
        ),
        array(
            'name' => esc_html__('History background Image','bmco_'),
            'id' => "{$prefix}history_banner",
            'type' => 'image_advanced',
            'max_file_uploads'  =>  1,
            ),
        array(
				//Type
                'type'  => "textarea",
                // Field name - Will be used as label
				'name'  => esc_html__( 'History Text', 'bmco_' ),
				// Label description, display below field name (optional).
                'label_description' =>  'feel free to edit this default',
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}history_text",
				// Default value (optional)
				'std'   => esc_html__( 'MCO began in 1985 when Bill Pearson arrived at the Medical College of Georgia. Bill left MCG to devote himself to full-time student ministry at MCG. Since 1985, MCO has expanded to seven medical campuses. In 2010, MCO Augusta sent out a team to start the first international MCO in Cusco, Peru.', 'bmco_' ),
            ),
        ),
    );
    //Contact Meta Boxes
    $meta_boxes[] = array(
        'title' => esc_html__('Contact','bmco_'),
        'post_types' => array('post','page'),
        'show'  =>  array(
            'template'  =>  array('template-contact.php'),
        ),
        'fields' => array(
        array(
            //Type
            'type'  => "textarea",
            // Field name - Will be used as label
            'name'  => esc_html__( 'Message for header', 'bmco_' ),
            // Label description, display below field name (optional).
            // Field ID, i.e. the meta key
            'id'    => "{$prefix}contact_message",
            // Default value (optional)
            'std'   => esc_html__( 'contact us', 'bmco_' ),
        ),
        array(
            'name' => esc_html__('Contact Image Banner','bmco_'),
            'id' => "{$prefix}contact_image_banner",
            'type' => 'image_advanced',
            'max_file_uploads'  =>  1,
            ),
        array(
				'name'    => esc_html__( 'Newsletter Button?', 'bmco_' ),
				'id'      => "{$prefix}news_button",
				'type'    => 'radio',
                'label_description' =>  'if you send out a newsletter turn this on. you will need to create a separate newsletter page and choose it below',
				// Array of 'value' => 'Label' pairs for radio options.
				// Note: the 'value' is stored in meta field, not the 'Label'
				'options' => array(
					'on' => esc_html__( 'On', 'bmco_' ),
					'off' => esc_html__( 'Off', 'bmco_' ),
				),
			),
        array(
				'name'        => esc_html__( 'Choose Newsletter Page', 'bmco_' ),
				'id'          => "{$prefix}news_url",
				'type'        => 'post',
				// Post type
				'post_type'   => 'page',
				// Field type, either 'select' or 'select_advanced' (default)
				'field_type'  => 'select_advanced',
                'label_description' => 'choose your newsletter page. newsletter button must be set to "on"',
				'placeholder' => esc_html__( 'Select an Page', 'bmco_' ),
				// Query arguments (optional). No settings means get all published posts
				'query_args'  => array(
					'post_status'    => 'publish',
					'posts_per_page' => - 1,
				),
			),
        array(
            //Type
            'type'  => "textarea",
            // Field name - Will be used as label
            'name'  => esc_html__( 'Contact Form JS', 'bmco_' ),
            // Label description, display below field name (optional).
            'label_description' =>  'go to wufoo account>forms>find the form you want to use>click share>then copy Javascript and paste here',
            // Field ID, i.e. the meta key
            'id'    => "{$prefix}contact_form_url",
             ),
        ),
    );
    //Newsletter Meta Boxes
    $meta_boxes[] = array(
        'title' => esc_html__('Newsletter','bmco_'),
        'post_types' => array('post','page'),
        'show'  =>  array(
            'template'  =>  array('template-newsletter.php'),
        ),
        'fields' => array(
        array(
            //Type
            'type'  => "textarea",
            // Field name - Will be used as label
            'name'  => esc_html__( 'Message for header', 'bmco_' ),
            // Label description, display below field name (optional).
            // Field ID, i.e. the meta key
            'id'    => "{$prefix}news_message",
            // Default value (optional)
            'std'   => esc_html__( 'sign up for newsletter', 'bmco_' ),
        ),
        array(
            'name' => esc_html__('Newsletter Image Banner','bmco_'),
            'id' => "{$prefix}news_image_banner",
            'type' => 'image_advanced',
            'max_file_uploads'  =>  1,
            ),
        array(
            //Type
            'type'  => "textarea",
            // Field name - Will be used as label
            'name'  => esc_html__( 'newsletter form JS', 'bmco_' ),
            // Label description, display below field name (optional).
            'label_description' =>  'go to wufoo account>forms>find the form you want to use>click share>then copy Javascript and paste here',
            // Field ID, i.e. the meta key
            'id'    => "{$prefix}news_form_url",
        ),
        ),
    );
    //SMI Meta Boxes
    $meta_boxes[] = array(
        'title' => esc_html__('SMI','bmco_'),
        'post_types' => array('post','page'),
        'show'  =>  array(
            'template'  =>  array('template-smi.php'),
        ),
        'fields' => array(
        array(
            'name' => esc_html__('Top Banner Image','bmco_'),
            'id' => "{$prefix}smi_image_banner",
            'type' => 'image_advanced',
            'max_file_uploads'  =>  1,
            ),
        array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'SMI Title', 'bmco_' ),
				// Label description, display below field name (optional).
				'label_description' => esc_html__( 'Example: SMI Med/Nursing Trinidad 2017', 'bmco_' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}smi_title",
				// Default value (optional)
				'std'   => esc_html__( 'SMI', 'bmco_' ),
				
			),
        array(
				'name'    => esc_html__( 'Application on or off', 'bmco_' ),
				'id'      => "{$prefix}apply_button",
				'type'    => 'radio',
				// Array of 'value' => 'Label' pairs for radio options.
				// Note: the 'value' is stored in meta field, not the 'Label'
				'options' => array(
					'apply' => esc_html__( 'Apply On', 'bmco_' ),
                    'off' =>    esc_html__( 'Apply Off', 'bmco_' ),
				),
			),
        array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'Application Deadline', 'bmco_' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}smi_deadline",
                'visible'   =>  ['apply_button', '=', 'apply'],
			),
        array(
            // Field name - Will be used as label
            'name'  => esc_html__( 'Application URL', 'bmco_' ),
            // Field ID, i.e. the meta key
            'id'    => "{$prefix}app_url",
            'label_description' => esc_html__('Wufoo, Google Form, etc.', 'bmco_'),
            'visible'   =>  ['apply_button', '=', 'apply'],

        ),
        array(
            'type'  =>  'divider',
        ),
        array(
				'name' => esc_html__( 'Video URL', 'bmco_smi_video_url' ),
				'id'   => "{$prefix}smi_video_url",
				'desc' => esc_html__( 'link to a youtube video', 'bmco_' ),
			),
        array(
            'type'  =>  'divider',
        ),
        array(
            'name' => esc_html__('SMI Image 2','bmco_'),
            'label_description' =>  'good place for previous team pic',
            'id' => "{$prefix}smi_image_2",
            'type' => 'image_advanced',
            'max_file_uploads'  =>  1,
            ),
        array(
            'type'  =>  'divider',
        ),
        array(
            'name' => esc_html__('SMI Image 3','bmco_'),
            'label_description' =>  'beneath important dates box',
            'id' => "{$prefix}smi_image_3",
            'type' => 'image_advanced',
            'max_file_uploads'  =>  1,
            ),
        array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'Info Meeting Date', 'bmco_' ),
				// Label description, display below field name (optional).
				'label_description' => esc_html__( 'Example: January 1st', 'bmco_' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}info_date",
				
			),
        array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'Support Meeting Date', 'bmco_' ),
				// Label description, display below field name (optional).
				'label_description' => esc_html__( 'Example: January 1st', 'bmco_' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}support_date",
				
			),
        array(
				// Field name - Will be used as label
				'name'  => esc_html__( '50% Support Date', 'bmco_' ),
				// Label description, display below field name (optional).
				'label_description' => esc_html__( 'Example: January 1st', 'bmco_' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}half_date",
				
			),
        array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'Prefield Training Date', 'bmco_' ),
				// Label description, display below field name (optional).
				'label_description' => esc_html__( 'Example: January 1st', 'bmco_' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}pft_date",
				
			),
        array(
            // Field name - Will be used as label
            'name'  => esc_html__( '100% Support Date', 'bmco_' ),
            // Label description, display below field name (optional).
            'label_description' => esc_html__( 'Example: January 1st', 'bmco_' ),
            // Field ID, i.e. the meta key
            'id'    => "{$prefix}full_date",

        ),
        array(
            // Field name - Will be used as label
            'name'  => esc_html__( 'Trip Dates', 'bmco_' ),
            // Label description, display below field name (optional).
            'label_description' => esc_html__( 'Example: Jan 1-15', 'bmco_' ),
            // Field ID, i.e. the meta key
            'id'    => "{$prefix}trip_date",
        ),
        array(
            'type'  =>  'divider',
        ),
        array(
        'name' => esc_html__('Health Release/Code of Conduct','bmco_'),
        'id' => "{$prefix}smi_file1",
        'type' => 'file_advanced',
        'max_file_uploads'  =>  '1',
        ),
        array(
        'name' => esc_html__('Project Agreement','bmco_'),
        'id' => "{$prefix}smi_file2",
        'type' => 'file_advanced',
        'max_file_uploads'  =>  '1',
        ),
        array(
        'name' => esc_html__('Team Covenant','bmco_'),
        'id' => "{$prefix}smi_file3",
        'type' => 'file_advanced',
        'max_file_uploads'  =>  '1',
        ),
        array(
        'name' => esc_html__('Guide to Financial Contributions','bmco_'),
        'id' => "{$prefix}smi_file4",
        'type' => 'file_advanced',
        'max_file_uploads'  =>  '1',
        ),
        array(
        'name' => esc_html__('Packing List','bmco_'),
        'id' => "{$prefix}smi_file5",
        'type' => 'file_advanced',
        'max_file_uploads'  =>  '1',
        ),
        array(
        'name' => esc_html__('Vaccinations','bmco_'),
        'id' => "{$prefix}smi_file6",
        'type' => 'file_advanced',
        'max_file_uploads'  =>  '1',
        ),
        ),    
    );
    //Event Meta Boxes
    $meta_boxes[] = array(
        'title' => esc_html__('Event','bmco_'),
        'post_types' => array('post','page'),
        'show'  =>  array(
            'template'  =>  array('template-event.php',
                                    'template-complex-event.php',),
        ),
        'fields' => array(
        array(
            'name' => esc_html__('Event Image Banner','bmco_'),
            'id' => "{$prefix}event_image_banner",
            'type' => 'image_advanced',
            'max_file_uploads'  =>  1,
            ),
        array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'Event Title', 'bmco_' ),
				// Label description, display below field name (optional).
				'label_description' => esc_html__( 'Title Image will override title, however Event Title needed for description area', 'bmco_' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}event_title",
				// Default value (optional)
				'std'   => esc_html__( 'Event', 'bmco_' ),
				
			),
        array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'Event Title Image', 'bmco_' ),
				// Label description, display below field name (optional).
				'label_description' => esc_html__( "If you'd like to use an image for the title instead of text", 'bmco_' ),
                'type' => 'image_advanced',
                'max_file_uploads'  =>  1,
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}event_title_image",
				// Default value (optional)
				'std'   => esc_html__( 'Event', 'bmco_' ),
				
			),
        array(
				'name'    => esc_html__( 'Image Size?', 'bmco_' ),
				'id'      => "{$prefix}title_image_size",
				'type'    => 'radio',
                'label_description' => 'image width; 400px, 600px, 800px',
				// Array of 'value' => 'Label' pairs for radio options.
				// Note: the 'value' is stored in meta field, not the 'Label'
				'options' => array(
					'400' => esc_html__( '400px', 'bmco_' ),
					'600' => esc_html__( '600px', 'bmco_' ),
                    '800' => esc_html__( '800px', 'bmco_' ),
				),
			),
        array(
				'name'    => esc_html__( 'Overlay On?', 'bmco_' ),
				'id'      => "{$prefix}overlay_on",
				'type'    => 'radio',
                'label_description' => 'adds dark overlay to banner image to make text more readable',
				// Array of 'value' => 'Label' pairs for radio options.
				// Note: the 'value' is stored in meta field, not the 'Label'
				'options' => array(
					'on' => esc_html__( 'Overlay On', 'bmco_' ),
					'off' => esc_html__( 'Overlay Off', 'bmco_' ),
				),
			),
        array(
				'name' => esc_html__( 'Video URL', 'bmco_video_url' ),
				'id'   => "{$prefix}video_url",
				'desc' => esc_html__( 'link to a youtube video', 'bmco_' ),
			),
        array(
            'name'          => 'Video Banner Color',
            'id'            => "{$prefix}vid_color",
            'type'          => 'color',
            // Add alpha channel?
            'alpha_channel' => false,
            // Color picker options. See here: https://automattic.github.io/Iris/.
        ),

        array(
                'type'  =>  'divider',
        ),
        array(
                'type' => 'textarea',
				// Field name - Will be used as label
				'name'  => esc_html__( 'Event Description', 'bmco_' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}event_desc",
				// Default value (optional)
				'std'   => esc_html__( 'description', 'bmco_' ),
				
			),
        array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'Event Dates', 'bmco_' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}event_date",
				// Default value (optional)
				'std'   => esc_html__( 'dates', 'bmco_' ),
				
			),
        array(
				'name'    => esc_html__( 'Registration Open?', 'bmco_' ),
				'id'      => "{$prefix}reg_button",
				'type'    => 'radio',
				// Array of 'value' => 'Label' pairs for radio options.
				// Note: the 'value' is stored in meta field, not the 'Label'
				'options' => array(
					'open' => esc_html__( 'Open', 'bmco_' ),
					'closed' => esc_html__( 'Closed', 'bmco_' ),
				),
			),
        array(
            // Field name - Will be used as label
            'name'  => esc_html__( 'Registration URL', 'bmco_' ),
            // Field ID, i.e. the meta key
            'id'    => "{$prefix}reg_url",
            'label_description' => esc_html__('Wufoo, Google Form, etc.', 'bmco_'),

        ),
        ),    
    );
    //Complex Event Meta Boxes
    $meta_boxes[] = array(
        'title' => esc_html__('Complex Event','bmco_'),
        'post_types' => array('post','page'),
        'show'  =>  array(
            'template'  =>  array('template-complex-event.php'),
        ),
        'fields' => array(
        array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'Speaker Background Image', 'bmco_' ),
				// Label description, display below field name (optional).
				'label_description' => esc_html__( "Usually photo of speaker speaking, will appear very large so don't use closeup", 'bmco_' ),
                'type' => 'image_advanced',
                'max_file_uploads'  =>  1,
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}c_speaker_image",
				// Default value (optional)
				'std'   => esc_html__( 'Event', 'bmco_' ),
				
        ),
        array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'Speaker Button Image', 'bmco_' ),
				// Label description, display below field name (optional).
				'label_description' => esc_html__( "example: head shot", 'bmco_' ),
                'type' => 'image_advanced',
                'max_file_uploads'  =>  1,
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}c_speaker_button",
				// Default value (optional)
				'std'   => esc_html__( 'Event', 'bmco_' ),
				
        ),    
        array(
            // Field name - Will be used as label
            'name'  => esc_html__( 'Speaker Name', 'bmco_' ),
            // Field ID, i.e. the meta key
            'id'    => "{$prefix}c_speaker_name",

        ),
        array(
                'type' => 'textarea',
				// Field name - Will be used as label
				'name'  => esc_html__( 'Speaker Description', 'bmco_' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}c_speaker_info",
				// Default value (optional)
				'std'   => esc_html__( 'description', 'bmco_' ),
				
        ),
        array(
                'type'  =>  'divider',
        ),
        array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'Theme Background Image', 'bmco_' ),
                'type' => 'image_advanced',
                'max_file_uploads'  =>  1,
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}c_theme_image",
				// Default value (optional)
				'std'   => esc_html__( 'Event', 'bmco_' ),
				
        ),
        array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'Theme Title Image', 'bmco_' ),
                'type' => 'image_advanced',
                'max_file_uploads'  =>  1,
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}c_theme_title_image",
				// Default value (optional)
				'std'   => esc_html__( 'Event', 'bmco_' ),
				
        ),
        array(
            // Field name - Will be used as label
            'name'  => esc_html__( 'Theme', 'bmco_' ),
            // Field ID, i.e. the meta key
            'id'    => "{$prefix}c_theme",

        ),
        array(
                'type' => 'textarea',
				// Field name - Will be used as label
				'name'  => esc_html__( 'Theme Description', 'bmco_' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}c_theme_desc",
				// Default value (optional)
				'std'   => esc_html__( 'description', 'bmco_' ),
				
        ),
        array(
                'type' => 'number',
                // Field name - Will be used as label
                'name'  => esc_html__( 'How many days is the event?', 'bmco_' ),
                // Field ID, i.e. the meta key
                'id'    => "{$prefix}c_days",
                'label_description' =>  'only necessary if you want to show detailed schedule',
                'step'  =>  '1',
                'min'   =>  '0',

            ),
        array(
                'type' => 'number',
                // Field name - Will be used as label
                'name'  => esc_html__( 'How Many Sessions?', 'bmco_' ),
                // Field ID, i.e. the meta key
                'id'    => "{$prefix}c_sessions",
                'visible'   =>  ['c_days', '>', '0'],
                'label_description' =>  '0-10',
                'step'  =>  '1',
                'min'   =>  '0',
                'max'   =>  '10',

            ),
        array(
            'name'    => esc_html__( 'Session1', 'rwmb' ),
            'id'      => "{$prefix}c_session1",
            'type'    => 'text_list',
            'visible'   =>  ['c_sessions','>','0'],
            // Options of inputs, in format 'Placeholder' => 'Label'
            'options' => array(
                'Date' => esc_html__( 'Date1', 'rwmb' ),
                'time' => esc_html__( 'Time1', 'rwmb' ),
                'topic' => esc_html__( 'Topic1', 'rwmb' ),
            ),
        ),
        array(
            'name'    => esc_html__( 'Session2', 'rwmb' ),
            'id'      => "{$prefix}c_session2",
            'type'    => 'text_list',
            'label_description' =>  'leave date blank if same as previous session',
            'visible'   =>  ['c_sessions','>','1'],
            // Options of inputs, in format 'Placeholder' => 'Label'
            'options' => array(
                'new date?' => esc_html__( 'Date2', 'rwmb' ),
                'time' => esc_html__( 'Time2', 'rwmb' ),
                'topic' => esc_html__( 'Topic2', 'rwmb' ),
            ),
        ),
        array(
            'name'    => esc_html__( 'Session3', 'rwmb' ),
            'id'      => "{$prefix}c_session3",
            'type'    => 'text_list',
            'label_description' =>  'leave date blank if same as previous session',
            'visible'   =>  ['c_sessions','>','2'],
            // Options of inputs, in format 'Placeholder' => 'Label'
            'options' => array(
                'new date?' => esc_html__( 'Date3', 'rwmb' ),
                'time' => esc_html__( 'Time3', 'rwmb' ),
                'topic' => esc_html__( 'Topic3', 'rwmb' ),
            ),
        ),
        array(
            'name'    => esc_html__( 'Session4', 'rwmb' ),
            'id'      => "{$prefix}c_session4",
            'type'    => 'text_list',
            'label_description' =>  'leave date blank if same as previous session',
            'visible'   =>  ['c_sessions','>','3'],
            // Options of inputs, in format 'Placeholder' => 'Label'
            'options' => array(
                'new date?' => esc_html__( 'Date4', 'rwmb' ),
                'time' => esc_html__( 'Time4', 'rwmb' ),
                'topic' => esc_html__( 'Topic4', 'rwmb' ),
            ),
        ),
        array(
            'name'    => esc_html__( 'Session5', 'rwmb' ),
            'id'      => "{$prefix}c_session5",
            'type'    => 'text_list',
            'label_description' =>  'leave date blank if same as previous session',
            'visible'   =>  ['c_sessions','>','4'],
            // Options of inputs, in format 'Placeholder' => 'Label'
            'options' => array(
                'new date?' => esc_html__( 'Date5', 'rwmb' ),
                'time' => esc_html__( 'Time5', 'rwmb' ),
                'topic' => esc_html__( 'Topic5', 'rwmb' ),
            ),
        ),
        array(
            'name'    => esc_html__( 'Session6', 'rwmb' ),
            'id'      => "{$prefix}c_session6",
            'type'    => 'text_list',
            'label_description' =>  'leave date blank if same as previous session',
            'visible'   =>  ['c_sessions','>','5'],
            // Options of inputs, in format 'Placeholder' => 'Label'
            'options' => array(
                'new date?' => esc_html__( 'Date6', 'rwmb' ),
                'time' => esc_html__( 'Time6', 'rwmb' ),
                'topic' => esc_html__( 'Topic6', 'rwmb' ),
            ),
        ),
        array(
            'name'    => esc_html__( 'Session7', 'rwmb' ),
            'id'      => "{$prefix}c_session7",
            'type'    => 'text_list',
            'label_description' =>  'leave date blank if same as previous session',
            'visible'   =>  ['c_sessions','>','6'],
            // Options of inputs, in format 'Placeholder' => 'Label'
            'options' => array(
                'new date?' => esc_html__( 'Date7', 'rwmb' ),
                'time' => esc_html__( 'Time7', 'rwmb' ),
                'topic' => esc_html__( 'Topic7', 'rwmb' ),
            ),
        ),
        array(
            'name'    => esc_html__( 'Session8', 'rwmb' ),
            'id'      => "{$prefix}c_session8",
            'type'    => 'text_list',
            'label_description' =>  'leave date blank if same as previous session',
            'visible'   =>  ['c_sessions','>','7'],
            // Options of inputs, in format 'Placeholder' => 'Label'
            'options' => array(
                'new date?' => esc_html__( 'Date8', 'rwmb' ),
                'time' => esc_html__( 'Time8', 'rwmb' ),
                'topic' => esc_html__( 'Topic8', 'rwmb' ),
            ),
        ),
        array(
            'name'    => esc_html__( 'Session9', 'rwmb' ),
            'id'      => "{$prefix}c_session9",
            'type'    => 'text_list',
            'label_description' =>  'leave date blank if same as previous session',
            'visible'   =>  ['c_sessions','>','8'],
            // Options of inputs, in format 'Placeholder' => 'Label'
            'options' => array(
                'new date?' => esc_html__( 'Date9', 'rwmb' ),
                'time' => esc_html__( 'Time9', 'rwmb' ),
                'topic' => esc_html__( 'Topic9', 'rwmb' ),
            ),
        ),
        array(
            'name'    => esc_html__( 'Session10', 'rwmb' ),
            'id'      => "{$prefix}c_session10",
            'type'    => 'text_list',
            'label_description' =>  'leave date blank if same as previous session',
            'visible'   =>  ['c_sessions','>','9'],
            // Options of inputs, in format 'Placeholder' => 'Label'
            'options' => array(
                'new date?' => esc_html__( 'Date10', 'rwmb' ),
                'time' => esc_html__( 'Time10', 'rwmb' ),
                'topic' => esc_html__( 'Topic10', 'rwmb' ),
            ),
        ),
        array(
            'name'    => esc_html__( 'Prices', 'rwmb' ),
            'id'      => "{$prefix}c_prices",
            'type'    => 'text_list',
            // Options of inputs, in format 'Placeholder' => 'Label'
            'options' => array(
                'Student: $80' => esc_html__( 'Price1', 'rwmb' ),
                'Price2' => esc_html__( 'Price2', 'rwmb' ),
                'Price3' => esc_html__( 'Price3', 'rwmb' ),
            ),
        ),
        array(
				'name'    => esc_html__( 'Volunteers?', 'bmco_' ),
				'id'      => "{$prefix}vol_button",
				'type'    => 'radio',
				// Array of 'value' => 'Label' pairs for radio options.
				// Note: the 'value' is stored in meta field, not the 'Label'
				'options' => array(
					'yes' => esc_html__( 'Yes', 'bmco_' ),
					'no' => esc_html__( 'No', 'bmco_' ),
				),
			),
        array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'Volunteer Background Image', 'bmco_' ),
                'type' => 'image_advanced',
                'max_file_uploads'  =>  1,
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}c_vol_image",
				// Default value (optional)
				'std'   => esc_html__( 'Event', 'bmco_' ),
                'visible'   =>  ['vol_button','=','yes'],
				
        ),
        /*array(
            'name'    => esc_html__( 'Volunteer Form Button', 'rwmb' ),
            'id'      => "{$prefix}vol_info",
            'type'    => 'text_list',
            'label_description' =>  'add URL and Title of button',
            'visible'   =>  ['vol_button','=','yes'],
            // Options of inputs, in format 'Placeholder' => 'Label'
            'options' => array(
                'url' => esc_html__( 'URL', 'rwmb' ),
                'optional' => esc_html__( 'Button Title', 'rwmb' ),
            ),
        ),*/
         array(
            //Type
            'type'  => "textarea",
            // Field name - Will be used as label
            'name'  => esc_html__( 'Volunteer Form JS', 'bmco_' ),
            // Label description, display below field name (optional).
            'label_description' =>  'go to wufoo account>forms>find the form you want to use>click share>then copy Javascript and paste here',
            'visible'   =>  ['vol_button','=','yes'],
            // Field ID, i.e. the meta key
            'id'    => "{$prefix}volunteer_form",
             ),
        ),
           
    );
    //Donate Meta Boxes
    $meta_boxes[] = array(
        'title' => esc_html__('Donate','bmco_'),
        'post_types' => array('post','page'),
        'show'  =>  array(
            'template'  =>  array('template-donate.php'),
        ),
        'fields' => array(
        array(
            'name' => esc_html__('Donate Image Banner','bmco_'),
            'id' => "{$prefix}donate_image_banner",
            'type' => 'image_advanced',
            'max_file_uploads'  =>  1,
            ),
        array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'Donation URL', 'bmco_' ),
				// Label description, display below field name (optional).
				'label_description' => esc_html__( '', 'bmco_' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}donate_url",
				// Default value (optional)
				'std'   => esc_html__( '', 'bmco_' ),
				
			),
            ),
        );
    //Redirect Meta Boxes
    $meta_boxes[] = array(
        'title' => esc_html__('Redirect','bmco_'),
        'post_types' => array('post','page'),
        'show'  =>  array(
            'template'  =>  array('template-redirect.php'),
        ),
        'fields' => array(
        array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'Redirect URL', 'bmco_' ),
				// Label description, display below field name (optional).
				'label_description' => esc_html__( '', 'bmco_' ),
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}redirect_url",
				// Default value (optional)
				'std'   => esc_html__( '', 'bmco_' ),
				
			),
            ),
        );
    //Volunteer Meta Boxes
    $meta_boxes[] = array(
        'title' => esc_html__('Volunteer','bmco_'),
        'post_types' => array('post','page'),
        'show'  =>  array(
            'template'  =>  array('template-volunteer.php'),
        ),
        'fields' => array(
        array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'Header Image', 'bmco_' ),
                'type'  =>  'image_advanced',
                'max_file_uploads'  =>  1,
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}volunteer_image_banner",
				
			),
            ),
        );
    //Home Page Meta Boxes
    $meta_boxes[] = array(
        'title' => esc_html__('Home Page','bmco_'),
        'post_types' => array('post','page'),
        'show'  =>  array(
            'template'  =>  array('template-home.php'),
        ),
        'fields' => array(
            array(
				'name'    => esc_html__( 'Feature or Home Banner', 'bmco_' ),
				'id'      => "{$prefix}feature_switch",
				'type'    => 'radio',
                'label_description' =>  'Use feature if you want to feature an event on your home page',
				// Array of 'value' => 'Label' pairs for radio options.
				// Note: the 'value' is stored in meta field, not the 'Label'
				'options' => array(
					'feature' => esc_html__( 'Feature', 'bmco_' ),
					'home' => esc_html__( 'Home Page', 'bmco_' ),
				),
			),
            array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'Header Image', 'bmco_' ),
                'visible'  => array('feature_switch','=','home'),
				// Label description, display below field name (optional).
				'label_description' => esc_html__( "this image displays when feature is not checked", 'bmco_' ),
                'type' => 'image_advanced',
                'max_file_uploads'  =>  1,
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}header_image",
				
            ),
            array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'Header Title Image', 'bmco_' ),
                'visible'  => array('feature_switch','=','home'),
				// Label description, display below field name (optional).
				'label_description' => esc_html__( "this image displays when feature is not checked", 'bmco_' ),
                'type' => 'image_advanced',
                'max_file_uploads'  =>  1,
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}header_title",
				
            ), 
            array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'Feature Image', 'bmco_' ),
                'visible'  => array('feature_switch','=','feature'),
				// Label description, display below field name (optional).
				'label_description' => esc_html__( "this image displays when feature is checked", 'bmco_' ),
                'type' => 'image_advanced',
                'max_file_uploads'  =>  1,
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}feature_image",
				
            ),
            array(
				// Field name - Will be used as label
				'name'  => esc_html__( 'Feature Title Image', 'bmco_' ),
                'visible'  => array('feature_switch','=','feature'),
				// Label description, display below field name (optional).
				'label_description' => esc_html__( "this image displays when feature is not checked", 'bmco_' ),
                'type' => 'image_advanced',
                'max_file_uploads'  =>  1,
				// Field ID, i.e. the meta key
				'id'    => "{$prefix}feature_title",
				
            ),
            array(
                'name'        => 'Featured page',
                'id'          => 'feature_target',
                'type'        => 'post',
                'visible'  => array('feature_switch','=','feature'),

                // Post type.
                'post_type'   => 'page',

                // Field type.
                'field_type'  => 'select_advanced',

                // Placeholder, inherited from `select_advanced` field.
                'placeholder' => 'Select a page',

            ),
            
            array(
            'group_title'   =>  'SMI billboard',
            'id'     => "{$prefix}smi_billboard",
            'type'   => 'group',
            'collapsible'   =>  'true',
            'fields'    =>  array(
                array(
                    // Field name - Will be used as label
                    'name'  => esc_html__( 'SMI Image Left', 'bmco_' ),
                    'type' => 'image_advanced',
                    'max_file_uploads'  => 1,
                    'columns'   =>  4,
                    // Field ID, i.e. the meta key
                    'id'    => "{$prefix}smi_image_left",

                ),
                array(
                    // Field name - Will be used as label
                    'name'  => esc_html__( 'SMI Image Center', 'bmco_' ),
                    'type' => 'image_advanced',
                    'max_file_uploads'  => 1,
                    'columns'   =>  4,
                    // Field ID, i.e. the meta key
                    'id'    => "{$prefix}smi_image_center",

                ),
                array(
                    // Field name - Will be used as label
                    'name'  => esc_html__( 'SMI Image Right', 'bmco_' ),
                    'type' => 'image_advanced',
                    'max_file_uploads'  => 1,
                    'columns'   =>  4,
                    // Field ID, i.e. the meta key
                    'id'    => "{$prefix}smi_image_right",

                ),
                array(
                    'name'        => 'SMI Link Left',
                    'id'          => "{$prefix}smi_link_left",
                    'type'        => 'post',
                    'columns'   =>  4,

                    // Post type.
                    'post_type'   => 'page',

                    // Field type.
                    'field_type'  => 'select_advanced',

                    // Placeholder, inherited from `select_advanced` field.
                    'placeholder' => 'Select a page',

                ),
                array(
                    'name'        => 'SMI Link Center',
                    'id'          => "{$prefix}smi_link_center",
                    'type'        => 'post',
                    'columns'   =>  4,

                    // Post type.
                    'post_type'   => 'page',

                    // Field type.
                    'field_type'  => 'select_advanced',

                    // Placeholder, inherited from `select_advanced` field.
                    'placeholder' => 'Select a page',

                ),
                array(
                    'name'        => 'SMI Link Right',
                    'id'          => "{$prefix}smi_link_right",
                    'type'        => 'post',
                    'columns'   =>  4,

                    // Post type.
                    'post_type'   => 'page',

                    // Field type.
                    'field_type'  => 'select_advanced',

                    // Placeholder, inherited from `select_advanced` field.
                    'placeholder' => 'Select a page',

                ),
            ),
            ),
            array(
            'group_title'   =>  'Get Connected billboard',
            'id'     => "{$prefix}connected_billboard",
            'type'   => 'group',
            'collapsible'   =>  'true',
            'fields'    =>  array(
                array(
                    // Field name - Will be used as label
                    'name'  => esc_html__( 'Get Connected Image Left', 'bmco_' ),
                    'type' => 'image_advanced',
                    'max_file_uploads'  =>  1,
                    'columns'   =>  6,
                    // Field ID, i.e. the meta key
                    'id'    => "{$prefix}connect_image_left",

                ),
                array(
                    // Field name - Will be used as label
                    'name'  => esc_html__( 'Get Connected Image Right', 'bmco_' ),
                    'type' => 'image_advanced',
                    'max_file_uploads'  =>  1,
                    'columns'   =>  6,
                    // Field ID, i.e. the meta key
                    'id'    => "{$prefix}connect_image_right",

                ),
                array(
                    'name'        => 'Connected Link Left',
                    'id'          => 'connect_link_left',
                    'type'        => 'post',
                    'columns'   =>  6,

                    // Post type.
                    'post_type'   => 'page',

                    // Field type.
                    'field_type'  => 'select_advanced',

                    // Placeholder, inherited from `select_advanced` field.
                    'placeholder' => 'Select a page',

                ),
                array(
                    'name'        => 'Connected Link Right',
                    'id'          => 'connect_link_right',
                    'type'        => 'post',
                    'columns'   =>  6,

                    // Post type.
                    'post_type'   => 'page',

                    // Field type.
                    'field_type'  => 'select_advanced',

                    // Placeholder, inherited from `select_advanced` field.
                    'placeholder' => 'Select a page',

                ),
                array(
                    // Field name - Will be used as label
                    'name'  => esc_html__( 'Get Connected Image Bottom', 'bmco_' ),
                    'type' => 'image_advanced',
                    'max_file_uploads'  =>  1,
                    'columns'   =>  12,
                    // Field ID, i.e. the meta key
                    'id'    => "{$prefix}connect_image_bottom",

                    ),
                array(
                    'name'        => 'Connected Link Bottom',
                    'id'          => 'connect_link_bottom',
                    'type'        => 'post',
                    'columns'   =>  12,

                    // Post type.
                    'post_type'   => 'page',

                    // Field type.
                    'field_type'  => 'select_advanced',

                    // Placeholder, inherited from `select_advanced` field.
                    'placeholder' => 'Select a page',

                ),
                ),
            ),
            array(
            'group_title'   =>  'Events Billboard',
            'id'     => "{$prefix}events_billboard",
            'type'   => 'group',
            'collapsible'   =>  'true',
            'fields'    =>  array(
                array(
                'type' => 'number',
                // Field name - Will be used as label
                'name'  => esc_html__( 'How Many Visible Events?', 'bmco_' ),
                // Field ID, i.e. the meta key
                'id'    => "{$prefix}event_count",
                'label_description' =>  '0-10',
                'step'  =>  '1',
                'min'   =>  '0',
                'max'   =>  '10',

            ),
                array(
                    // Field name - Will be used as label
                    'name'  => esc_html__( '1st Event Image', 'bmco_' ),
                    'type' => 'image_advanced',
                    'max_file_uploads'  =>  1,
                    'visible'   =>  ["{$prefix}event_count",'>','0'],
                    'columns'   =>  8,
                    // Field ID, i.e. the meta key
                    'id'    => "{$prefix}event_image_1",

                ),
                array(
                    // Field name - Will be used as label
                    'name'  => esc_html__( '2nd Event Image', 'bmco_' ),
                    'type' => 'image_advanced',
                    'max_file_uploads'  =>  1,
                    'visible'   =>  ["{$prefix}event_count",'>','1'],
                    'columns'   =>  4,
                    // Field ID, i.e. the meta key
                    'id'    => "{$prefix}event_image_2",

                ),
                array(
                    'name'        => '1st event link',
                    'id'          => 'event_link_1',
                    'type'        => 'post',
                    'visible'   =>  ["{$prefix}event_count",'>','0'],
                    'columns'   =>  8,

                    // Post type.
                    'post_type'   => 'page',

                    // Field type.
                    'field_type'  => 'select_advanced',

                    // Placeholder, inherited from `select_advanced` field.
                    'placeholder' => 'Select a page',

                ),
                array(
                    'name'        => '2nd event link',
                    'id'          => 'event_link_2',
                    'type'        => 'post',
                    'visible'   =>  ["{$prefix}event_count",'>','1'],
                    'columns'   =>  4,

                    // Post type.
                    'post_type'   => 'page',

                    // Field type.
                    'field_type'  => 'select_advanced',

                    // Placeholder, inherited from `select_advanced` field.
                    'placeholder' => 'Select a page',

                ),
                array(
                    // Field name - Will be used as label
                    'name'  => esc_html__( '3rd Event Image', 'bmco_' ),
                    'type' => 'image_advanced',
                    'max_file_uploads'  =>  1,
                    'visible'   =>  ["{$prefix}event_count",'>','2'],
                    'columns'   =>  4,
                    // Field ID, i.e. the meta key
                    'id'    => "{$prefix}event_image_3",

                ),
                array(
                    // Field name - Will be used as label
                    'name'  => esc_html__( '4th Event Image', 'bmco_' ),
                    'type' => 'image_advanced',
                    'max_file_uploads'  =>  1,
                    'visible'   =>  ["{$prefix}event_count",'>','3'],
                    'columns'   =>  8,
                    // Field ID, i.e. the meta key
                    'id'    => "{$prefix}event_image_4",

                ),
                array(
                    'name'        => '3rd event link',
                    'id'          => 'event_link_3',
                    'type'        => 'post',
                    'visible'   =>  ["{$prefix}event_count",'>','2'],
                    'columns'   =>  4,

                    // Post type.
                    'post_type'   => 'page',

                    // Field type.
                    'field_type'  => 'select_advanced',

                    // Placeholder, inherited from `select_advanced` field.
                    'placeholder' => 'Select a page',

                ),
                array(
                    'name'        => '4th event link',
                    'id'          => 'event_link_4',
                    'type'        => 'post',
                    'visible'   =>  ["{$prefix}event_count",'>','3'],
                    'columns'   =>  8,

                    // Post type.
                    'post_type'   => 'page',

                    // Field type.
                    'field_type'  => 'select_advanced',

                    // Placeholder, inherited from `select_advanced` field.
                    'placeholder' => 'Select a page',

                ),
                array(
                    // Field name - Will be used as label
                    'name'  => esc_html__( '5th Event Image', 'bmco_' ),
                    'type' => 'image_advanced',
                    'max_file_uploads'  =>  1,
                    'visible'   =>  ["{$prefix}event_count",'>','4'],
                    'columns'   =>  12,
                    // Field ID, i.e. the meta key
                    'id'    => "{$prefix}event_image_5",

                ),
                array(
                    'name'        => '5th event link',
                    'id'          => 'event_link_5',
                    'type'        => 'post',
                    'visible'   =>  ["{$prefix}event_count",'>','4'],
                    'columns'   =>  12,

                    // Post type.
                    'post_type'   => 'page',

                    // Field type.
                    'field_type'  => 'select_advanced',

                    // Placeholder, inherited from `select_advanced` field.
                    'placeholder' => 'Select a page',

                ),
                array(
                    // Field name - Will be used as label
                    'name'  => esc_html__( '6th Event Image', 'bmco_' ),
                    'type' => 'image_advanced',
                    'max_file_uploads'  =>  1,
                    'visible'   =>  ["{$prefix}event_count",'>','5'],
                    'columns'   =>  8,
                    // Field ID, i.e. the meta key
                    'id'    => "{$prefix}event_image_6",

                ),
                array(
                    // Field name - Will be used as label
                    'name'  => esc_html__( '7th Event Image', 'bmco_' ),
                    'type' => 'image_advanced',
                    'max_file_uploads'  =>  1,
                    'visible'   =>  ["{$prefix}event_count",'>','6'],
                    'columns'   =>  4,
                    // Field ID, i.e. the meta key
                    'id'    => "{$prefix}event_image_7",

                ),
                array(
                    'name'        => '6th event link',
                    'id'          => 'event_link_6',
                    'type'        => 'post',
                    'visible'   =>  ["{$prefix}event_count",'>','5'],
                    'columns'   =>  8,

                    // Post type.
                    'post_type'   => 'page',

                    // Field type.
                    'field_type'  => 'select_advanced',

                    // Placeholder, inherited from `select_advanced` field.
                    'placeholder' => 'Select a page',

                ),
                array(
                    'name'        => '7th event link',
                    'id'          => 'event_link_7',
                    'type'        => 'post',
                    'visible'   =>  ["{$prefix}event_count",'>','6'],
                    'columns'   =>  4,

                    // Post type.
                    'post_type'   => 'page',

                    // Field type.
                    'field_type'  => 'select_advanced',

                    // Placeholder, inherited from `select_advanced` field.
                    'placeholder' => 'Select a page',

                ),
                array(
                    // Field name - Will be used as label
                    'name'  => esc_html__( '8th Event Image', 'bmco_' ),
                    'type' => 'image_advanced',
                    'max_file_uploads'  =>  1,
                    'visible'   =>  ["{$prefix}event_count",'>','7'],
                    'columns'   =>  4,
                    // Field ID, i.e. the meta key
                    'id'    => "{$prefix}event_image_8",

                ),
                array(
                    // Field name - Will be used as label
                    'name'  => esc_html__( '9th Event Image', 'bmco_' ),
                    'type' => 'image_advanced',
                    'max_file_uploads'  =>  1,
                    'visible'   =>  ["{$prefix}event_count",'>','8'],
                    'columns'   =>  8,
                    // Field ID, i.e. the meta key
                    'id'    => "{$prefix}event_image_9",

                ),
                array(
                    'name'        => '8th event link',
                    'id'          => 'event_link_8',
                    'type'        => 'post',
                    'visible'   =>  ["{$prefix}event_count",'>','7'],
                    'columns'   =>  4,

                    // Post type.
                    'post_type'   => 'page',

                    // Field type.
                    'field_type'  => 'select_advanced',

                    // Placeholder, inherited from `select_advanced` field.
                    'placeholder' => 'Select a page',

                ),
                array(
                    'name'        => '9th event link',
                    'id'          => 'event_link_9',
                    'type'        => 'post',
                    'visible'   =>  ["{$prefix}event_count",'>','8'],
                    'columns'   =>  8,

                    // Post type.
                    'post_type'   => 'page',

                    // Field type.
                    'field_type'  => 'select_advanced',

                    // Placeholder, inherited from `select_advanced` field.
                    'placeholder' => 'Select a page',

                ),
                array(
                    // Field name - Will be used as label
                    'name'  => esc_html__( '10th Event Image', 'bmco_' ),
                    'type' => 'image_advanced',
                    'max_file_uploads'  =>  1,
                    'visible'   =>  ["{$prefix}event_count",'>','9'],
                    'columns'   =>  10,
                    // Field ID, i.e. the meta key
                    'id'    => "{$prefix}event_image_10",

                ),
                array(
                    'name'        => '10th event link',
                    'id'          => 'event_link_10',
                    'type'        => 'post',
                    'visible'   =>  ["{$prefix}event_count",'>','9'],
                    'columns'   =>  12,

                    // Post type.
                    'post_type'   => 'page',

                    // Field type.
                    'field_type'  => 'select_advanced',

                    // Placeholder, inherited from `select_advanced` field.
                    'placeholder' => 'Select a page',

                ),    
                ),
            ),
            ),
        );
	return $meta_boxes;
}