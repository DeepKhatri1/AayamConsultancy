<?php  

register_nav_menus(
  array('primary-menu'=>'Top Menu'),
);

// Theme Logo
add_theme_support( 'custom-logo' );



// Enable custom header support
add_theme_support( 'custom-header' );


// Include INC bootstrapmenu.php
require get_template_directory(). '/inc/bootstrapmenu.php';


// For supporting featurd Image
function child_theme_setup() {
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'child_theme_setup' );




// SOCIAL MEDIA LINKS
function custom_theme_customize_register($wp_customize) {
	// Create a new section for social media links
	$wp_customize->add_section('social_media_section', array(
	  'title' => __('Social Media Links', 'custom-theme'),
	  'priority' => 30,
	));
  
	// Create a setting for each social media link
	$wp_customize->add_setting('facebook_link', array(
	  'default' => '',
	  'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_setting('instagram_link', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	  ));
	$wp_customize->add_setting('tiktok_link', array(
	  'default' => '',
	  'sanitize_callback' => 'esc_url_raw',
	));
	$wp_customize->add_setting('youtube_link', array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
	  ));

  
	// Add a control for each social media link setting
	$wp_customize->add_control('facebook_link_control', array(
	  'label' => __('Facebook Link', 'custom-theme'),
	  'section' => 'social_media_section',
	  'settings' => 'facebook_link',
	  'type' => 'text',
	));
	$wp_customize->add_control('tiktok_link_control', array(
	  'label' => __('tiktok Link', 'custom-theme'),
	  'section' => 'social_media_section',
	  'settings' => 'tiktok_link',
	  'type' => 'text',
	));
	$wp_customize->add_control('instagram_link_control', array(
		'label' => __('Instagram Link', 'custom-theme'),
		'section' => 'social_media_section',
		'settings' => 'instagram_link',
		'type' => 'text',
	));
	$wp_customize->add_control('youtube_link_control', array(
		'label' => __('Youtube Link', 'custom-theme'),
		'section' => 'social_media_section',
		'settings' => 'youtube_link',
		'type' => 'text',
	));
  }
  add_action('customize_register', 'custom_theme_customize_register');

//   =========================================================================================







// ######## ######## ########
// ## Costumization #########
// ######## ######## ########



// ########## Banner Customoization ############
function banner_customize($wp_customize)
{
	// Add a new section
	$wp_customize->add_section('banner', array(
		'title'      => __('Customize Banner', 'aayam'),
		'priority'   => 30,
	));

	// Add an image 1 select field
	$wp_customize->add_setting('banner_image', array(
		'default'   => '',
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'banner_image', array(
		'label'    => __('Banner Image', 'aayam'),
		'section'  => 'banner',
		'settings' => 'banner_image',
	)));

  // Add a textarea field
	$wp_customize->add_setting('banner_title', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('banner_title', array(
		'label'    => __('Add Banner Title', 'aayam'),
		'section'  => 'banner',
		'settings' => 'banner_title',
		'type'     => 'text',
	));

  // Add a textarea field
	$wp_customize->add_setting('banner_copy', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('banner_copy', array(
		'label'    => __('Add Banner Title', 'aayam'),
		'section'  => 'banner',
		'settings' => 'banner_copy',
		'type'     => 'textarea',
	));

}
add_action('customize_register', 'banner_customize');

// ###### Banner Customization End #########################



// ++++ About Us Experience Costumization ++++
function experience_customize($wp_customize)
{
	// Add a new section
	$wp_customize->add_section('experience', array(
		'title'      => __('About Us Customization', 'aayam'),
		'priority'   => 30,
	));

  // About Us Content
    // Add a text field
    $wp_customize->add_setting('about_us', array(
      'default' => '',
      'transport' => 'postMessage',
  ));

  $wp_customize->add_control('about_us', array(
  'label'    => __('About Us', 'aayam'),
  'section'  => 'experience',
  'settings' => 'about_us',
  'type'     => 'textarea',
));


    // Years Of Experience
    // Add a number field
    $wp_customize->add_setting('year_value', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('year_value', array(
		'label'    => __('Add Years +', 'aayam'),
		'section'  => 'experience',
		'settings' => 'year_value',
		'type'     => 'text',
	));

  
    // Add a textarea field
	$wp_customize->add_setting('year_description', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('year_description', array(
		'label'    => __('Add Year Short  Description', 'aayam'),
		'section'  => 'experience',
		'settings' => 'year_description',
		'type'     => 'textarea',
	));

    // Add Partners
    // Add a number field
    $wp_customize->add_setting('academic_partners', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('academic_partners', array(
		'label'    => __('Add Academic Partners +', 'aayam'),
		'section'  => 'experience',
		'settings' => 'academic_partners',
		'type'     => 'text',
	));

  
    // Add a textarea field
	$wp_customize->add_setting('partners_description', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('partners_description', array(
		'label'    => __('Add Partners Short Description', 'aayam'),
		'section'  => 'experience',
		'settings' => 'partners_description',
		'type'     => 'textarea',
	));

    // Add Partners
    // Add a number field
    $wp_customize->add_setting('student_counciled', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('student_counciled', array(
		'label'    => __('Add Student Counciled +', 'aayam'),
		'section'  => 'experience',
		'settings' => 'student_counciled',
		'type'     => 'text',
	));

  
    // Add a textarea field
	$wp_customize->add_setting('student_description', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('student_description', array(
		'label'    => __('Add Student Short Description', 'aayam'),
		'section'  => 'experience',
		'settings' => 'student_description',
		'type'     => 'textarea',
	));

    // Add Programs
    // Add a number field
    $wp_customize->add_setting('programs', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('programs', array(
		'label'    => __('Add Program Number +', 'aayam'),
		'section'  => 'experience',
		'settings' => 'programs',
		'type'     => 'text',
	));

  
    // Add a textarea field
	$wp_customize->add_setting('program_description', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('program_description', array(
		'label'    => __('Add Program Short Description', 'aayam'),
		'section'  => 'experience',
		'settings' => 'program_description',
		'type'     => 'textarea',
	));
 
}
add_action('customize_register', 'experience_customize');
// ---- About US End ----

// ++++ Service Section Costumization ++++
function service_customize($wp_customize)
{
	// Add a new section
	$wp_customize->add_section('service', array(
		'title'      => __('Add Main Page Subtitles', 'aayam'),
		'priority'   => 30,
	));

    // Years Of Experience
    // Add a number field
    $wp_customize->add_setting('service_main_title', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('service_main_title', array(
		'label'    => __('Add Service Main Title', 'aayam'),
		'section'  => 'service',
		'settings' => 'service_main_title',
		'type'     => 'textarea',
	));

  
    // Add a textarea field
	$wp_customize->add_setting('service_subtitle', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('service_subtitle', array(
		'label'    => __('Add Service Subtitle', 'aayam'),
		'section'  => 'service',
		'settings' => 'service_subtitle',
		'type'     => 'textarea',
	));

  // Add a description for collage
    $wp_customize->add_setting('collage_description', array(
      'default' => '',
      'transport' => 'postMessage',
  ));

    $wp_customize->add_control('collage_description', array(
    'label'    => __('Add Collage Description', 'aayam'),
    'section'  => 'service',
    'settings' => 'collage_description',
    'type'     => 'textarea',
  ));

  // Add a description field for course
  $wp_customize->add_setting('course_description', array(
    'default' => '',
    'transport' => 'postMessage',
  ));

  $wp_customize->add_control('course_description', array(
  'label'    => __('Add Course Description', 'aayam'),
  'section'  => 'service',
  'settings' => 'course_description',
  'type'     => 'textarea',
  ));

  // Add a work description
  $wp_customize->add_setting('work_description', array(
    'default' => '',
    'transport' => 'postMessage',
  ));

  $wp_customize->add_control('work_description', array(
  'label'    => __('Add Work Description', 'aayam'),
  'section'  => 'service',
  'settings' => 'work_description',
  'type'     => 'textarea',
  ));

  // Add a testimonial description
  $wp_customize->add_setting('testimonial_description', array(
    'default' => '',
    'transport' => 'postMessage',
  ));

  $wp_customize->add_control('testimonial_description', array(
  'label'    => __('Add Testimonmial Subtitle', 'aayam'),
  'section'  => 'service',
  'settings' => 'testimonial_description',
  'type'     => 'text',
  ));

  // Add a news description
  $wp_customize->add_setting('news_description', array(
    'default' => '',
    'transport' => 'postMessage',
  ));

  $wp_customize->add_control('news_description', array(
  'label'    => __('Add News Subtitle', 'aayam'),
  'section'  => 'service',
  'settings' => 'news_description',
  'type'     => 'text',
  ));

  // Add a faq description
  $wp_customize->add_setting('faq_description', array(
    'default' => '',
    'transport' => 'postMessage',
  ));

  $wp_customize->add_control('faq_description', array(
  'label'    => __("Add FAQ's Subtitle", 'aayam'),
  'section'  => 'service',
  'settings' => 'faq_description',
  'type'     => 'text',
  ));
}
add_action('customize_register', 'service_customize');
// ---- Service End ----


// ++++ Institute Information Costumization ++++
function institute_info_customize($wp_customize)
{
	// Add a new section
	$wp_customize->add_section('institute_info', array(
		'title'      => __('Customize Institute Information', 'aayam'),
		'priority'   => 30,
	));

  // Add a Canada Location
  $wp_customize->add_setting('canada_location', array(
    'default' => '',
    'transport' => 'postMessage',
  ));

  $wp_customize->add_control('canada_location', array(
  'label'    => __('Canadian Branch Loaction', 'aayam'),
  'section'  => 'institute_info',
  'settings' => 'canada_location',
  'type'     => 'text',
  ));


  // Add a Canada Contact Number
  $wp_customize->add_setting('canada_number', array(
    'default' => '',
    'transport' => 'postMessage',
  ));

  $wp_customize->add_control('canada_number', array(
  'label'    => __('Canadian Branch Contact Number', 'aayam'),
  'section'  => 'institute_info',
  'settings' => 'canada_number',
  'type'     => 'text',
  ));

  // Add a Nepal Locaton
  $wp_customize->add_setting('nepal_location', array(
    'default' => '',
    'transport' => 'postMessage',
  ));

  $wp_customize->add_control('nepal_location', array(
  'label'    => __('Nepal Offical Location', 'aayam'),
  'section'  => 'institute_info',
  'settings' => 'nepal_location',
  'type'     => 'text',
  ));


  // Add a Nepal Locaton MAP
  $wp_customize->add_setting('nepal_location_map', array(
    'default' => '',
    'transport' => 'postMessage',
  ));

  $wp_customize->add_control('nepal_location_map', array(
  'label'    => __('Nepal Location Map Link', 'aayam'),
  'section'  => 'institute_info',
  'settings' => 'nepal_location_map',
  'type'     => 'text',
  ));

  // Add a Canada Locaton Map
  $wp_customize->add_setting('canada_location_map', array(
    'default' => '',
    'transport' => 'postMessage',
  ));

  $wp_customize->add_control('canada_location_map', array(
  'label'    => __('Canada Offical Location Map', 'aayam'),
  'section'  => 'institute_info',
  'settings' => 'canada_location_map',
  'type'     => 'text',
  ));

  // Add a Nepal Contact Number
  $wp_customize->add_setting('nepal_number', array(
    'default' => '',
    'transport' => 'postMessage',
  ));

  $wp_customize->add_control('nepal_number', array(
  'label'    => __('Nepal Offical Contact Number', 'aayam'),
  'section'  => 'institute_info',
  'settings' => 'nepal_number',
  'type'     => 'text',
  ));

  // Add a Email Address
  $wp_customize->add_setting('email', array(
    'default' => '',
    'transport' => 'postMessage',
  ));

  $wp_customize->add_control('email', array(
  'label'    => __('Add Email ID', 'aayam'),
  'section'  => 'institute_info',
  'settings' => 'email',
  'type'     => 'text',
  ));



  // Add a Email Address
  $wp_customize->add_setting('canada_email', array(
    'default' => '',
    'transport' => 'postMessage',
  ));

  $wp_customize->add_control('canada_email', array(
  'label'    => __('Add Canada Email ID', 'aayam'),
  'section'  => 'institute_info',
  'settings' => 'canada_email',
  'type'     => 'text',
  ));





  // Add a Email Address
  $wp_customize->add_setting('skype', array(
    'default' => '',
    'transport' => 'postMessage',
  ));

  $wp_customize->add_control('skype', array(
  'label'    => __('Add Skype Username', 'aayam'),
  'section'  => 'institute_info',
  'settings' => 'skype',
  'type'     => 'text',
  ));
 
}
add_action('customize_register', 'institute_info_customize');
// ---- About US End ----


// ++++ Program Costumization ++++
function program_customize($wp_customize)
{
	// Add a new section
	$wp_customize->add_section('program', array(
		'title'      => __('Add Programs In Canada Details', 'aayam'),
		'priority'   => 30,
	));

    // Add a textarea field
    $wp_customize->add_setting('diploma_program', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('diploma_program', array(
		'label'    => __('Add Diploma Description', 'aayam'),
		'section'  => 'program',
		'settings' => 'diploma_program',
		'type'     => 'textarea',
	));

  
    // Add a textarea field
	$wp_customize->add_setting('diploma_program_academic', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('diploma_program_academic', array(
		'label'    => __('Add Diploma Program Academic Description', 'aayam'),
		'section'  => 'program',
		'settings' => 'diploma_program_academic',
		'type'     => 'textarea',
	));

  // Add a textarea field
	$wp_customize->add_setting('diploma_program_ielts', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('diploma_program_ielts', array(
		'label'    => __('Add Diploma Program IELTS Requirement', 'aayam'),
		'section'  => 'program',
		'settings' => 'diploma_program_ielts',
		'type'     => 'textarea',
	));


  // Add a bachelor textarea field
  $wp_customize->add_setting('bachelor_program', array(
    'default' => '',
    'transport' => 'postMessage',
  ));

  $wp_customize->add_control('bachelor_program', array(
  'label'    => __('Add Bachelor Description', 'aayam'),
  'section'  => 'program',
  'settings' => 'bachelor_program',
  'type'     => 'textarea',
  ));

  // Add a bachelor academic textarea field
	$wp_customize->add_setting('bachelor_program_academic', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('bachelor_program_academic', array(
		'label'    => __('Add Bachelor Academic Description', 'aayam'),
		'section'  => 'program',
		'settings' => 'bachelor_program_academic',
		'type'     => 'textarea',
	));

  // Add a bachelor ielts textarea field
	$wp_customize->add_setting('bachelor_program_ielts', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('bachelor_program_ielts', array(
		'label'    => __('Add Bachelor Program IELTS Requirement', 'aayam'),
		'section'  => 'program',
		'settings' => 'bachelor_program_ielts',
		'type'     => 'textarea',
	));


  // Add a post graduate textarea field
  $wp_customize->add_setting('post_graduate_program', array(
    'default' => '',
    'transport' => 'postMessage',
  ));

  $wp_customize->add_control('post_graduate_program', array(
  'label'    => __('Add Post Graduate Program Description', 'aayam'),
  'section'  => 'program',
  'settings' => 'post_graduate_program',
  'type'     => 'textarea',
  ));

  // Add a bachelor academic textarea field
	$wp_customize->add_setting('post_graduate_program_academic', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('post_graduate_program_academic', array(
		'label'    => __('Add Post Graduate Academic Description', 'aayam'),
		'section'  => 'program',
		'settings' => 'post_graduate_program_academic',
		'type'     => 'textarea',
	));

  // Add a bachelor ielts textarea field
	$wp_customize->add_setting('post_graduate_program_ielts', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('post_graduate_program_ielts', array(
		'label'    => __('Add Post Graduate Program IELTS Requirement', 'aayam'),
		'section'  => 'program',
		'settings' => 'post_graduate_program_ielts',
		'type'     => 'textarea',
	));


  // Add a master program textarea field
  $wp_customize->add_setting('master_program', array(
    'default' => '',
    'transport' => 'postMessage',
  ));

  $wp_customize->add_control('master_program', array(
  'label'    => __('Add Master Program Description', 'aayam'),
  'section'  => 'program',
  'settings' => 'master_program',
  'type'     => 'textarea',
  ));

  // Add a bachelor academic textarea field
	$wp_customize->add_setting('master_program_academic', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('master_program_academic', array(
		'label'    => __('Add Master Program Academic Description', 'aayam'),
		'section'  => 'program',
		'settings' => 'master_program_academic',
		'type'     => 'textarea',
	));

  // Add a bachelor ielts textarea field
	$wp_customize->add_setting('master_program_ielts', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('master_program_ielts', array(
		'label'    => __('Add Master Program IELTS Requirement', 'aayam'),
		'section'  => 'program',
		'settings' => 'master_program_ielts',
		'type'     => 'textarea',
	));

}
add_action('customize_register', 'program_customize');
// ---- Banner Section End ----


// ++++ Intake Costumization ++++
function intake_customize($wp_customize)
{
	// Add a new section
	$wp_customize->add_section('intake', array(
		'title'      => __('Intake Costumization', 'aayam'),
		'priority'   => 30,
	));

    // Add a textarea field
    $wp_customize->add_setting('one_intake_title', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('one_intake_title', array(
		'label'    => __('1) Add First Intake Season', 'aayam'),
		'section'  => 'intake',
		'settings' => 'one_intake_title',
		'type'     => 'text',
	));

  // Add a textarea field
	$wp_customize->add_setting('one_intake_time', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('one_intake_time', array(
		'label'    => __('1) Add First Intake (X months)', 'aayam'),
		'section'  => 'intake',
		'settings' => 'one_intake_time',
		'type'     => 'text',
	));

  // Add a textarea field
	$wp_customize->add_setting('one_intake_months', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('one_intake_months', array(
		'label'    => __('1) Add First Intake Months(Sep-Dec)', 'aayam'),
		'section'  => 'intake',
		'settings' => 'one_intake_months',
		'type'     => 'text',
	));




  // Add a textarea field
  $wp_customize->add_setting('two_intake_title', array(
    'default' => '',
    'transport' => 'postMessage',
));

$wp_customize->add_control('two_intake_title', array(
'label'    => __('2) Add Second Intake Season', 'aayam'),
'section'  => 'intake',
'settings' => 'two_intake_title',
'type'     => 'text',
));

// Add a textarea field
$wp_customize->add_setting('two_intake_time', array(
'default'   => '',
'transport' => 'postMessage',
));

$wp_customize->add_control('two_intake_time', array(
'label'    => __('2) Add Second Intake (X months)', 'aayam'),
'section'  => 'intake',
'settings' => 'two_intake_time',
'type'     => 'text',
));

// Add a textarea field
$wp_customize->add_setting('two_intake_months', array(
'default'   => '',
'transport' => 'postMessage',
));

$wp_customize->add_control('two_intake_months', array(
'label'    => __('2) Add Second Intake Months(Sep-Dec)', 'aayam'),
'section'  => 'intake',
'settings' => 'two_intake_months',
'type'     => 'text',
));




// Add a textarea field
$wp_customize->add_setting('three_intake_title', array(
  'default' => '',
  'transport' => 'postMessage',
));

$wp_customize->add_control('three_intake_title', array(
'label'    => __('3) Add Third Intake Season', 'aayam'),
'section'  => 'intake',
'settings' => 'three_intake_title',
'type'     => 'text',
));

// Add a textarea field
$wp_customize->add_setting('third_intake_time', array(
'default'   => '',
'transport' => 'postMessage',
));

$wp_customize->add_control('third_intake_time', array(
'label'    => __('3) Add Third Intake (X months)', 'aayam'),
'section'  => 'intake',
'settings' => 'third_intake_time',
'type'     => 'text',
));

// Add a textarea field
$wp_customize->add_setting('third_intake_months', array(
'default'   => '',
'transport' => 'postMessage',
));

$wp_customize->add_control('third_intake_months', array(
'label'    => __('3) Add Third Intake Months(Sep-Dec)', 'aayam'),
'section'  => 'intake',
'settings' => 'third_intake_months',
'type'     => 'text',
));

}
add_action('customize_register', 'intake_customize');




// ++++ Why Aayam Costumization ++++
function why_aayam_customize($wp_customize)
{
	// Add a new section
	$wp_customize->add_section('why_aayam', array(
		'title'      => __('About Us ("Why Aayam?" Section) Costumization', 'aayam'),
		'priority'   => 30,
	));

    // Add a text field
    $wp_customize->add_setting('copy_title_one', array(
        'default' => '',
        'transport' => 'postMessage',
    ));

    $wp_customize->add_control('copy_title_one', array(
		'label'    => __('Add Title in Card One', 'aayam'),
		'section'  => 'why_aayam',
		'settings' => 'copy_title_one',
		'type'     => 'text',
	));

    // Add a textarea field
    $wp_customize->add_setting('copy_content_one', array(
      'default' => '',
      'transport' => 'postMessage',
    ));

    $wp_customize->add_control('copy_content_one', array(
    'label'    => __('Add Content in Card One', 'aayam'),
    'section'  => 'why_aayam',
    'settings' => 'copy_content_one',
    'type'     => 'textarea',
    ));




    // Add a text field
    $wp_customize->add_setting('copy_title_two', array(
      'default' => '',
      'transport' => 'postMessage',
  ));

    $wp_customize->add_control('copy_title_two', array(
    'label'    => __('Add Title in Card Two', 'aayam'),
    'section'  => 'why_aayam',
    'settings' => 'copy_title_two',
    'type'     => 'text',
  ));

    // Add a text field
    $wp_customize->add_setting('copy_content_two', array(
      'default' => '',
      'transport' => 'postMessage',
  ));

    $wp_customize->add_control('copy_content_two', array(
    'label'    => __('Add Content in Card Three', 'aayam'),
    'section'  => 'why_aayam',
    'settings' => 'copy_content_two',
    'type'     => 'textarea',
  ));




    // Add a textarea field
    $wp_customize->add_setting('copy_title_three', array(
      'default' => '',
      'transport' => 'postMessage',
    ));

    $wp_customize->add_control('copy_title_three', array(
    'label'    => __('Add Title in Card Three', 'aayam'),
    'section'  => 'why_aayam',
    'settings' => 'copy_title_three',
    'type'     => 'text',
    ));

    // Add a text field
    $wp_customize->add_setting('copy_content_three', array(
      'default' => '',
      'transport' => 'postMessage',
  ));

    $wp_customize->add_control('copy_content_three', array(
    'label'    => __('Add Content in Card Three', 'aayam'),
    'section'  => 'why_aayam',
    'settings' => 'copy_content_three',
    'type'     => 'textarea',
  ));

}
add_action('customize_register', 'why_aayam_customize');
// ---- Why Aayam Customization End ----


// ---- Intake End ----



// ########## Banner Customoization ############
function key_contact_customize($wp_customize)
{
	// Add a new section
	$wp_customize->add_section('key_contact', array(
		'title'      => __('Add Key Contact For Student', 'aayam'),
		'priority'   => 30,
	));

	// Add an image 1 select field
	$wp_customize->add_setting('contact_one_image', array(
		'default'   => '',
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_one_image', array(
		'label'    => __('Photo Of Contact 1', 'aayam'),
		'section'  => 'key_contact',
		'settings' => 'contact_one_image',
	)));

  // Add a textarea field
	$wp_customize->add_setting('contact_one_name', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('contact_one_name', array(
		'label'    => __('Add Contact 1 Name', 'aayam'),
		'section'  => 'key_contact',
		'settings' => 'contact_one_name',
		'type'     => 'text',
	));

  // Add a textarea field
	$wp_customize->add_setting('contact_one_number', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('contact_one_number', array(
		'label'    => __('Add Contact 1 Number', 'aayam'),
		'section'  => 'key_contact',
		'settings' => 'contact_one_number',
		'type'     => 'text',
	));

  // Add a textarea field
	$wp_customize->add_setting('contact_one_email', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('contact_one_email', array(
		'label'    => __('Add Contact 1 Email', 'aayam'),
		'section'  => 'key_contact',
		'settings' => 'contact_one_email',
		'type'     => 'text',
	));



  // Add an image 2 select field
	$wp_customize->add_setting('contact_two_image', array(
		'default'   => '',
		'transport' => 'refresh',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_two_image', array(
		'label'    => __('Photo Of Contact 2', 'aayam'),
		'section'  => 'key_contact',
		'settings' => 'contact_two_image',
	)));

  // Add a textarea field
	$wp_customize->add_setting('contact_two_name', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('contact_two_name', array(
		'label'    => __('Add Contact 2 Name', 'aayam'),
		'section'  => 'key_contact',
		'settings' => 'contact_two_name',
		'type'     => 'text',
	));

  // Add a textarea field
	$wp_customize->add_setting('contact_two_number', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('contact_two_number', array(
		'label'    => __('Add Contact 2 Number', 'aayam'),
		'section'  => 'key_contact',
		'settings' => 'contact_two_number',
		'type'     => 'text',
	));

  // Add a textarea field
	$wp_customize->add_setting('contact_two_email', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control('contact_two_email', array(
		'label'    => __('Add Contact 2 Email', 'aayam'),
		'section'  => 'key_contact',
		'settings' => 'contact_two_email',
		'type'     => 'text',
	));

}
add_action('customize_register', 'key_contact_customize');

// ###### Key Contact End #########################




// **** **** **** **** **** ****
// **** Custom Post Type ******* **** **** **** **** **** **** **** **** **** **** **** ****
// **** **** **** **** **** ****

// +++++ Services +++++++++++++++++++++++
add_action( 'init', 'create_custom_post_type_service' );
function create_custom_post_type_service() {

  $supports = array(
    'title', // post title

    'editor', // post content
    // 'author', // post author
    'thumbnail', // featured images
    // 'excerpt', // post excerpt
    //'custom-fields', // custom fields
    // 'comments', // post comments
    // 'revisions', // post revisions
    // 'post-formats', // post formats
    );

  $labels = array(
    'name' => _x('Service', 'plural'),
    'singular_name' => _x('Service', 'singular'),
    'name_admin_bar' => _x('Service', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Service'),
    'new_item' => __('New Service'),
    'edit_item' => __('Edit Service'),
    'view_item' => __('View Service'),
    'all_items' => __('All Service'),
    'search_items' => __('Search Service'),
    'not_found' => __('No service found.'),
    );
 
$args = array(
  'supports' => $supports,
  'labels' => $labels,
  'public' => true,
  'has_archive' => false,
  'rewrite' => array('slug' => 'service'),
  'menu_icon' => 'dashicons-admin-users',
 );
 
register_post_type('service',$args);
}
// ---- Service End ----------------------

// Collages +++++++++++++++++++++++++++++++
add_action( 'init', 'create_custom_post_type_collages' );
function create_custom_post_type_collages() {

  $supports = array(
    'title', // post title

    'editor', // post content
    // 'author', // post author
    'thumbnail', // featured images
    // 'excerpt', // post excerpt
    //'custom-fields', // custom fields
    // 'comments', // post comments
    // 'revisions', // post revisions
    // 'post-formats', // post formats
    );

  $labels = array(
    'name' => _x('Collages', 'plural'),
    'singular_name' => _x('Collages', 'singular'),
    'name_admin_bar' => _x('Collages', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Collages'),
    'new_item' => __('New Collages'),
    'edit_item' => __('Edit Collage'),
    'view_item' => __('View Collage'),
    'all_items' => __('All Collages'),
    'search_items' => __('Search Collages'),
    'not_found' => __('No Collages found.'),
    );
 
$args = array(
  'supports' => $supports,
  'labels' => $labels,
  'public' => true,
  'has_archive' => false,
  'rewrite' => array('slug' => 'collages'),
  'menu_icon' => 'dashicons-edit',
 );
 
register_post_type('collages',$args);
}
// ---- Collages End ----------------------



// Courses +++++++++++++++++++++++++++++++

add_action( 'init', 'create_custom_post_type_courses' );
function create_custom_post_type_courses() {

  $supports = array(
    'title', // post title

    'editor', // post content
    // 'author', // post author
    'thumbnail', // featured images
    // 'excerpt', // post excerpt
    //'custom-fields', // custom fields
    // 'comments', // post comments
    // 'revisions', // post revisions
    // 'post-formats', // post formats
    );

  $labels = array(
    'name' => _x('Courses', 'plural'),
    'singular_name' => _x('Courses', 'singular'),
    'name_admin_bar' => _x('Courses', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Courses'),
    'new_item' => __('New Courses'),
    'edit_item' => __('Edit Courses'),
    'view_item' => __('View Courses'),
    'all_items' => __('All Courses'),
    'search_items' => __('Search Courses'),
    'not_found' => __('No courses found.'),
    );
 
$args = array(
  'supports' => $supports,
  'labels' => $labels,
  'public' => true,
  'has_archive' => false,
  'rewrite' => array('slug' => 'courses'),
  'menu_icon' => 'dashicons-book-alt',
 );
 
register_post_type('courses',$args);
}
// ---- Courses End ----------------------


// Program +++++++++++++++++++++++++++++++

add_action( 'init', 'create_custom_post_type_program' );
function create_custom_post_type_program() {

  $supports = array(
    'title', // post title

    'editor', // post content
    // 'author', // post author
    'thumbnail', // featured images
    // 'excerpt', // post excerpt
    //'custom-fields', // custom fields
    // 'comments', // post comments
    // 'revisions', // post revisions
    // 'post-formats', // post formats
    );

  $labels = array(
    'name' => _x('Programs', 'plural'),
    'singular_name' => _x('Programs', 'singular'),
    'name_admin_bar' => _x('Programs', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Programs'),
    'new_item' => __('New Program'),
    'edit_item' => __('Edit Programs'),
    'view_item' => __('View Programs'),
    'all_items' => __('All Programs'),
    'search_items' => __('Search Programs'),
    'not_found' => __('No srogram found.'),
    );
 
$args = array(
  'supports' => $supports,
  'labels' => $labels,
  'public' => true,
  'has_archive' => false,
  'rewrite' => array('slug' => 'program'),
  'menu_icon' => 'dashicons-welcome-learn-more',
 );
 
register_post_type('program',$args);
}
// ---- Program End ----------------------


// Work +++++++++++++++++++++++++++++++

add_action( 'init', 'create_custom_post_type_work' );
function create_custom_post_type_work() {

  $supports = array(
    'title', // post title

    'editor', // post content
    // 'author', // post author
    'thumbnail', // featured images
    // 'excerpt', // post excerpt
    //'custom-fields', // custom fields
    // 'comments', // post comments
    // 'revisions', // post revisions
    // 'post-formats', // post formats
    );

  $labels = array(
    'name' => _x('Work', 'plural'),
    'singular_name' => _x('Work', 'singular'),
    'name_admin_bar' => _x('Work', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Work'),
    'new_item' => __('New Work'),
    'edit_item' => __('Edit Work'),
    'view_item' => __('View Work'),
    'all_items' => __('All Work'),
    'search_items' => __('Search Work'),
    'not_found' => __('No work found.'),
    );
 
$args = array(
  'supports' => $supports,
  'labels' => $labels,
  'public' => true,
  'has_archive' => false,
  'rewrite' => array('slug' => 'work'),
  'menu_icon' => 'dashicons-networking',
 );
 
register_post_type('work',$args);
}
// ---- Work End ----------------------



// Team +++++++++++++++++++++++++++++++
add_action( 'init', 'create_custom_post_type_team' );
function create_custom_post_type_team() {

  $supports = array(
    'title', // post title

    'editor', // post content
    // 'author', // post author
    'thumbnail', // featured images
    // 'excerpt', // post excerpt
    //'custom-fields', // custom fields
    // 'comments', // post comments
    // 'revisions', // post revisions
    // 'post-formats', // post formats
    );

  $labels = array(
    'name' => _x('Team', 'plural'),
    'singular_name' => _x('Team', 'singular'),
    'name_admin_bar' => _x('Team', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Team'),
    'new_item' => __('New Team'),
    'edit_item' => __('Edit Team'),
    'view_item' => __('View Team'),
    'all_items' => __('All Team'),
    'search_items' => __('Search Team'),
    'not_found' => __('No Team found.'),
    );
 
$args = array(
  'supports' => $supports,
  'labels' => $labels,
  'public' => true,
  'has_archive' => false,
  'rewrite' => array('slug' => 'team'),
  'menu_icon' => 'dashicons-universal-access',
 );
 
register_post_type('team',$args);
}
// ---- Team End ----------------------



// Events +++++++++++++++++++++++++++++++

add_action( 'init', 'create_custom_post_type_events' );
function create_custom_post_type_events() {

  $supports = array(
    'title', // post title

    'editor', // post content
    // 'author', // post author
    'thumbnail', // featured images
    // 'excerpt', // post excerpt
    //'custom-fields', // custom fields
    // 'comments', // post comments
    // 'revisions', // post revisions
    // 'post-formats', // post formats
    );

  $labels = array(
    'name' => _x('Events', 'plural'),
    'singular_name' => _x('Events', 'singular'),
    'name_admin_bar' => _x('Events', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Event'),
    'new_item' => __('New Event'),
    'edit_item' => __('Edit Event'),
    'view_item' => __('View Event'),
    'all_items' => __('All Events'),
    'search_items' => __('Search Event'),
    'not_found' => __('No event found.'),
    );
 
$args = array(
  'supports' => $supports,
  'labels' => $labels,
  'public' => true,
  'has_archive' => false,
  'rewrite' => array('slug' => 'event'),
  'menu_icon' => 'dashicons-align-left',
 );
 
register_post_type('event',$args);
}
// ---- Event End ----------------------


// Testimonial +++++++++++++++++++++++++++++++

add_action( 'init', 'create_custom_post_type_testimonials' );
function create_custom_post_type_testimonials() {

  $supports = array(
    'title', // post title

    'editor', // post content
    // 'author', // post author
    'thumbnail', // featured images
    // 'excerpt', // post excerpt
    //'custom-fields', // custom fields
    // 'comments', // post comments
    // 'revisions', // post revisions
    // 'post-formats', // post formats
    );

  $labels = array(
    'name' => _x('Testimonial', 'plural'),
    'singular_name' => _x('Testimonials', 'singular'),
    'name_admin_bar' => _x('Testimonials', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add Name'),
    'new_item' => __('New Testimonial'),
    'edit_item' => __('Edit Testimonial'),
    'view_item' => __('View Testimonial'),
    'all_items' => __('All Testimonial'),
    'search_items' => __('Search Testimonial'),
    'not_found' => __('No testimonial found.'),
    );
 
$args = array(
  'supports' => $supports,
  'labels' => $labels,
  'public' => true,
  'has_archive' => false,
  'rewrite' => array('slug' => 'testimonial'),
  'menu_icon' => 'dashicons-testimonial',
 );
 
register_post_type('testimonial',$args);
}
// ---- Event End ----------------------



// Blog +++++++++++++++++++++++++++++++

add_action( 'init', 'create_custom_post_type_blogs' );
function create_custom_post_type_blogs() {

  $supports = array(
    'title', // post title

    'editor', // post content
    // 'author', // post author
    'thumbnail', // featured images
    // 'excerpt', // post excerpt
    //'custom-fields', // custom fields
    // 'comments', // post comments
    // 'revisions', // post revisions
    // 'post-formats', // post formats
    );

  $labels = array(
    'name' => _x('Blogs', 'plural'),
    'singular_name' => _x('Blog', 'singular'),
    'name_admin_bar' => _x('Blogs', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New Blog'),
    'new_item' => __('New Blog'),
    'edit_item' => __('Edit Blog'),
    'view_item' => __('View Blog'),
    'all_items' => __('All Blogs'),
    'search_items' => __('Search Blog'),
    'not_found' => __('No blog found.'),
    );
 
$args = array(
  'supports' => $supports,
  'labels' => $labels,
  'public' => true,
  'has_archive' => false,
  'rewrite' => array('slug' => 'blog'),
  'menu_icon' => 'dashicons-welcome-write-blog',
 );
 
register_post_type('blog',$args);
}
// ---- Blog End ----------------------


// FAQs +++++++++++++++++++++++++++++++

add_action( 'init', 'create_custom_post_type_faqs' );
function create_custom_post_type_faqs() {

  $supports = array(
    'title', // post title

    'editor', // post content
    // 'author', // post author
    'thumbnail', // featured images
    // 'excerpt', // post excerpt
    //'custom-fields', // custom fields
    // 'comments', // post comments
    // 'revisions', // post revisions
    // 'post-formats', // post formats
    );

  $labels = array(
    'name' => _x('FAQs', 'plural'),
    'singular_name' => _x('FAQ', 'singular'),
    'name_admin_bar' => _x('FAQs', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New FAQ'),
    'new_item' => __('New FAQ'),
    'edit_item' => __('Edit FAQ'),
    'view_item' => __('View FAQ'),
    'all_items' => __('All FAQ'),
    'search_items' => __('Search FAQ'),
    'not_found' => __('No faq found.'),
    );
 
  $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'has_archive' => false,
    'rewrite' => array('slug' => 'faq'),
    'menu_icon' => 'dashicons-info',
  );
 
register_post_type('faq',$args);
}
// ---- Blog End ----------------------





?>