<?php

/*
 * Adds settings to the customizer
 */
function shoestrap_custom_builder_register_settings( $wp_customize ){
  $settings   = array();

  // Grays
  // -------------------------
  $settings[] = array( 'slug' => 'shoestrap_cb_black',        'default' => '#000000' );
  $settings[] = array( 'slug' => 'shoestrap_cb_graydarker',   'default' => '#222222' );
  $settings[] = array( 'slug' => 'shoestrap_cb_graydark',     'default' => '#333333' );
  $settings[] = array( 'slug' => 'shoestrap_cb_gray',         'default' => '#555555' );
  $settings[] = array( 'slug' => 'shoestrap_cb_graylight',    'default' => '#999999' );
  $settings[] = array( 'slug' => 'shoestrap_cb_graylighter',  'default' => '#eeeeee' );
  $settings[] = array( 'slug' => 'shoestrap_cb_white',        'default' => '#ffffff' );
  
  // Accent colors
  // -------------------------
  $settings[] = array( 'slug' => 'shoestrap_cb_blue',     'default' => '#049cdb' );
  $settings[] = array( 'slug' => 'shoestrap_cb_bluedark', 'default' => '#0064cd' );
  $settings[] = array( 'slug' => 'shoestrap_cb_green',    'default' => '46a546' );
  $settings[] = array( 'slug' => 'shoestrap_cb_red',      'default' => '9d261d' );
  $settings[] = array( 'slug' => 'shoestrap_cb_yellow',   'default' => 'ffc40d' );
  $settings[] = array( 'slug' => 'shoestrap_cb_orange',   'default' => 'f89406' );
  $settings[] = array( 'slug' => 'shoestrap_cb_pink',     'default' => 'c3325f' );
  $settings[] = array( 'slug' => 'shoestrap_cb_purple',   'default' => '7a43b6' );
  
  // Scaffolding
  // -------------------------
  $settings[] = array( 'slug' => 'shoestrap_cb_bodybackground', 'default' => '#ffffff' );
  $settings[] = array( 'slug' => 'shoestrap_cb_textcolor',      'default' => '#333333' );

  foreach( $settings as $setting ){
    $wp_customize->add_setting( $setting['slug'], array( 'default' => $setting['default'], 'type' => 'theme_mod', 'capability' => 'edit_theme_options' ) );
  }
}
add_action( 'customize_register', 'shoestrap_register_settings' );
