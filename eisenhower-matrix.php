<?php
/**
 * Override theme templates from a plugin
 *
 * Plugin Name: PBrocks Eisenhower Matrix
 * Plugin URI:        https://paulund.co.uk
 * Description:       Override theme templates from a plugin - DO NOT ACTIVATE ON A LIVE SITE
 * Version:           1.0.0
 http://codepen.io/thehannahpen/pen/Jxteh
 // * Author:            Paulund
 // * Author URI:        https://paulund.co.uk
 // * Domain Path:       /languages
 */


defined( 'ABSPATH' ) || die( 'File cannot be accessed directly' );

require 'inc/classes/class-plugin-page-templates.php';
new Plugin_Page_Templates();
