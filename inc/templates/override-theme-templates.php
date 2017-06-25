<?php

class Override_Theme_Templates {

	public function __construct() {
		add_filter( 'theme_page_templates', array( $this, 'add_page_template_to_dropdown' ) );
		add_filter( 'template_include', array( $this, 'change_page_template' ), 99 );
	}

	/**
	 * Add page templates.
	 *
	 * @param array $templates The list of page templates
	 *
	 * @return array  $templates  The modified list of page templates
	 */
	public function add_page_template_to_dropdown( $templates ) {
		$templates[ plugin_dir_path( __FILE__ ) . 'templates/plugin-page.php' ] = __( 'Plugin Page Template', 'plugin-slug' );
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

new Override_Theme_Templates();
