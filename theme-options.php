<?php
/**
 * Initialize the custom theme options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 */
function custom_theme_options() {
  
  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;
    
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'general',
        'title'       => __( 'General', 'jindaads' )
      ),
      array(
        'id'          => 'advertisements',
        'title'       => __( 'Advertisements', 'jindaads' )
      ),
      array(
        'id'          => 'footer',
        'title'       => __( 'Footer', 'jindaads' )
      )
    ),
    'settings'        => array( 
      array(
        'id'          => 'description',
        'label'       => __( 'Description', 'jindaads' ),
        'desc'        => __( 'this field for website meta description tag.', 'jindaads' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'keywords',
        'label'       => __( 'Keywords', 'jindaads' ),
        'desc'        => __( 'this field for website meta keywords tag.', 'jindaads' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'custom_html',
        'label'       => __( 'Custom HTML', 'jindaads' ),
        'desc'        => __( 'place your custom HTML tag here<br />
like a popup window from external service.', 'jindaads' ),
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'custom_css',
        'label'       => __( 'Custom CSS', 'jindaads' ),
        'desc'        => __( 'place your custom CSS here.<br /><br />
** place without <u>style</u> tag **', 'jindaads' ),
        'std'         => '',
        'type'        => 'css',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'custom_scripts',
        'label'       => __( 'Custom Javascripts', 'jindaads' ),
        'desc'        => __( 'Place your external javascript here<br />
like Google Analytics, Facebook Javascript or sth..<br /><br />

** place without <u>script</u> tag **', 'jindaads' ),
        'std'         => '',
        'type'        => 'javascript',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'banner_top',
        'label'       => __( 'Banner Top', 'jindaads' ),
        'desc'        => __( 'Place your banner script here <br />
<strong>Recommended size: 468x60px</strong><br /><br />

<small>ไม่ต้องสนใจว่ามันจะฟ้อง error อะไร<br /> ถ้าวางแล้วโฆษณาขึ้นก็โอเค</small>', 'jindaads' ),
        'std'         => '',
        'type'        => 'javascript',
        'section'     => 'advertisements',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'banner_loop',
        'label'       => __( 'Banner Loop', 'jindaads' ),
        'desc'        => __( 'เมื่อครบ 3 posts จะแสดง advertise banner 1 ครั้ง<br />
<strong>recommended size: 468x60px</strong><br /><br />

<small>
ไม่ต้องสนใจว่ามัน error อะไร<br />
ถ้า banner ขึ้นถือว่าโอเค
</small>', 'jindaads' ),
        'std'         => '',
        'type'        => 'javascript',
        'section'     => 'advertisements',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_copyright',
        'label'       => __( 'Footer Copyright', 'jindaads' ),
        'desc'        => __( 'Your copyright goes here.', 'jindaads' ),
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'facebook_link',
        'label'       => __( 'Facebook Link', 'jindaads' ),
        'desc'        => '',
        'std'         => 'https://www.facebook.com/pages/Techr',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'twitter_link',
        'label'       => __( 'Twitter Link', 'jindaads' ),
        'desc'        => '',
        'std'         => 'https://twitter.com/TechrThailand',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'google_plus_link',
        'label'       => __( 'Google Plus Link', 'jindaads' ),
        'desc'        => '',
        'std'         => 'https://plus.google.com/105874781308314969682',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'youtube_link',
        'label'       => __( 'Youtube Link', 'jindaads' ),
        'desc'        => '',
        'std'         => 'https://www.youtube.com/channel/UCijPSEL2EQa-KZBOtSwE0MQ',
        'type'        => 'text',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_credit',
        'label'       => __( 'Footer Credit', 'jindaads' ),
        'desc'        => __( 'Credit ของผู้พัฒนา', 'jindaads' ),
        'std'         => '',
        'type'        => 'textarea',
        'section'     => 'footer',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      )
    )
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}