<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://mhrtheme.com
 * @since      1.0.0
 *
 * @package    Mhr_Gallery
 * @subpackage Mhr_Gallery/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Mhr_Gallery
 * @subpackage Mhr_Gallery/public
 * @author     MhrThemes <md.hadidrahman@gmail.com>
 */
class Mhr_Gallery_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		wp_enqueue_style( 'uikit-min-css', plugin_dir_url( __FILE__ ) . 'css/uikit.min.css', array(), $this->version, 'all' );

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/mhr-gallery-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
        
        wp_enqueue_script( 'uikit-min-js', plugin_dir_url( __FILE__ ) . 'js/uikit.min.js', array( 'jquery' ), $this->version, false );

        wp_enqueue_script( 'uikit-icons-min-js', plugin_dir_url( __FILE__ ) . 'js/uikit-icons.min.js', array( 'jquery' ), $this->version, false );

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/mhr-gallery-public.js', array( 'jquery' ), $this->version, false );

	}

}
