<?php

if ( ! class_exists( 'personal_tm_Customizer' ) ) {
	class personal_tm_Customizer
	{
		/**
		 * Add postMessage support for site title and description for the Theme Customizer.
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 */
		function register($wp_customize)
		{
			$wp_customize->get_setting('blogname')->transport       = 'postMessage';
			$wp_customize->get_setting('blogdescription')->transport = 'postMessage';

			/*--------------------------
			 *  General Options
			 * -------------------------*/
			$wp_customize->add_section('contact_form_options', array(
				'title'           => __('Contact Form', 'tanbir'),
				'priority'        => 1,
			));
			/* Show Static CTA */
			$wp_customize->add_setting('contact_form_shortcode', array(
				'transport'         => 'refresh',
			));
			$wp_customize->add_control('contact_form_shortcode', array(
				'label'    => esc_html__('Contact Form Shortcode', 'tanbir'),
				'section'  => 'contact_form_options',
				'settings' => 'contact_form_shortcode',
				'type'     => 'textarea',
			));

			/*----------------------------------------
			 * Selective Refresh
			 * --------------------------------------*/
			if (isset($wp_customize->selective_refresh)) {
				$wp_customize->selective_refresh->add_partial('blogname', array(
					'selector'        => '.site-name',
					'render_callback' => 'personal_tm_customize_partial_blogname',
				));
				$wp_customize->selective_refresh->add_partial('blogdescription', array(
					'selector'        => '.site-description',
					'render_callback' => 'personal_tm_customize_partial_blogdescription',
				));
			}
		}

		function sanitize_select($input, $setting){
			$input = sanitize_key($input);
			$choices = $setting->manager->get_control($setting->id)->choices;
			return (array_key_exists($input, $choices) ? $input : $setting->default);
		}

		function sanitize_file($file, $setting){
			//allowed file types
			$mimes = array(
				'jpg|jpeg|jpe' => 'image/jpeg',
				'gif' => 'image/gif',
				'png' => 'image/png'
			);
			//check file type from file name
			$file_ext = wp_check_filetype($file, $mimes);
			//if file has a valid mime type return it, otherwise return default
			return ($file_ext['ext'] ? $file : $setting->default);
		}

		/**
		 * Sanitize boolean for checkbox.
		 *
		 * @param bool $checked Whether or not a box is checked.
		 *
		 * @return bool
		 */
		function sanitize_checkbox($checked){
			return ( ( isset( $checked ) && true === $checked ) ? true : false );
		}

		function sanitize_radio($input, $setting){
			//input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
			$input = sanitize_key($input);
			//get the list of possible radio box options
			$choices = $setting->manager->get_control($setting->id)->choices;
			//return input if valid or return default option
			return (array_key_exists($input, $choices) ? $input : $setting->default);
		}
	}
	$personal_tm_customizer = new personal_tm_Customizer();
	add_action('customize_register', [$personal_tm_customizer, 'register']);
}

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function personal_tm_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function personal_tm_customize_partial_blogdescription() {
	bloginfo( 'description' );
}




/* Custom sanitize function for Validate the textarea field. */
if( ! function_exists( 'personal_tm_sanitize_textarea' ) ) {
	function personal_tm_sanitize_textarea ( $value, $key ) {
		// Allow only a, div, span, ul, li, p, img, iframe, object, embed, em, strong and script tags in textarea fields.
		$allow_tags = wp_kses_allowed_html( 'post' );
		$allow_tags['a']      = array( 'href'  => true, 'class' => true, 'target' => true, 'style' => true );
		$allow_tags['div']    = array( 'class' => true, 'style' => true );
		$allow_tags['span']   = array( 'class' => true, 'style' => true );
		$allow_tags['ul']     = array( 'class' => true, 'style' => true );
		$allow_tags['li']     = array( 'class' => true, 'style' => true );
		$allow_tags['p']      = array( 'class' => true, 'style' => true );
		$allow_tags['img']    = array('src'    => true, 'alt'   => true, 'width'  => true, 'height' => true );
		$allow_tags['iframe'] = array('src'    => true, 'width' => true, 'height' => true, 'id'     => true, 'class' => true, 'name' => true );
		$allow_tags['object'] = array('src'    => true, 'width' => true, 'height' => true, 'id'     => true, 'class' => true, 'name' => true );
		$allow_tags['embed']  = array('src'    => true, 'width' => true, 'height' => true, 'id'     => true, 'class' => true, 'name' => true );
		$allow_tags['em']     = array('class'  => true );
		$allow_tags['strong'] = array();
		$allow_tags['script'] = array( 'type' => true, 'src'   => true );
		$allow_tags['link']   = array( 'type' => true, 'href'  => true, 'rel' => true, 'id' => true, 'media' =>true );
		$allow_tags['i']      = array( 'id'   => true, 'class' =>true );
		return wp_kses( $value, $allow_tags );
	}
}
