<?php
/**
 * Override theme templates from a plugin
 *
 * Plugin Name: PBrocks Eisenhower Matrix
 * Plugin URI: https://github.com/pbrocks/eisenhower-matrix
 * Description: Credits include Paulund https://paulund.co.uk, http://codepen.io/thehannahpen/pen/Jxteh
 * Version:           1.0.0
 * Author: pbrocks
 * Author URI: https://paul.barthmaier.rocks
 // * Domain Path: /languages
 * Text Domain: pbrx-eisenhower-matrix
 */


defined( 'ABSPATH' ) || die( 'File cannot be accessed directly' );

require 'inc/classes/class-plugin-page-templates.php';
new Plugin_Page_Templates();
