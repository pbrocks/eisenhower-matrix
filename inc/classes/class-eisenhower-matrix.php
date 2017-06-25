<?php

class Eisenhower_Matrix {

	public function __construct() {
		add_filter( 'theme_page_templates', array( $this, 'add_page_template_to_dropdown' ) );
		add_filter( 'template_include', array( $this, 'change_page_template' ), 99 );
		add_action( 'admin_head', array( $this, 'print_in_head' ), 99 );
		// add_action( 'wp_head', array( $this, 'print_in_head' ), 99 );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
	}

	public function enqueue_scripts() {
			wp_enqueue_script( 'drag-drop', plugins_url( '/../js/drag-drop.js', __FILE__ ), array( 'jquery' ), 'version', false );
			wp_enqueue_style( 'drag-drop', plugins_url( '/../css/drag-drop.css', __FILE__ ) );
	}

	/**
	 * Add page templates.
	 *
	 * @param array $templates The list of page templates
	 *
	 * @return array  $templates  The modified list of page templates
	 */
	public function print_in_head() {
		$templates['plugin'] = plugin_dir_path( __FILE__ ) . '../templates/plugin-page.php';
		$templates['script'] = plugins_url( '/../js/drag-drop.js', __FILE__ );

		$templates['file'] = __FILE__;
		 // ] = __( 'Plugin Page Template', 'plugin-slug' );
		echo '<pre><h3 style="text-align: center; color: salmon;">';
		// var_dump( $var );
		print_r( $templates );
		echo '</h3></pre>';
		return $templates;
	}

	/**
	 * Add page templates.
	 *
	 * @param array $templates The list of page templates
	 *
	 * @return array  $templates  The modified list of page templates
	 */
	public function add_page_template_to_dropdown( $templates ) {
		$templates[ plugin_dir_path( __FILE__ ) . '../templates/plugin-page.php' ] = __( 'Eisenhower Matrix Template', 'plugin-slug' );
		return $templates;
	}

	/**
	 * Change the page template to the selected template on the dropdown
	 * Change the single template to the fixed template in the plugin
	 *
	 * @param $template
	 *
	 * @return mixed
	 */
	public function change_page_template( $template ) {
		if ( is_page() ) {
			$meta = get_post_meta( get_the_ID() );

			if ( ! empty( $meta['_wp_page_template'][0] ) && $meta['_wp_page_template'][0] != $template ) {
				$template = $meta['_wp_page_template'][0];
			}
		} elseif ( is_single() ) {

			$fileTemplate = plugin_dir_path( __FILE__ ) . 'templates/plugin-single.php';
			if ( file_exists( $fileTemplate ) ) {
				$template = $fileTemplate;
			}
		}

		return $template;
	}
}

