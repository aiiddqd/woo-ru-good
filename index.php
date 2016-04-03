<?php
/*
Plugin Name: WooCommerce - правки русского перевода
Plugin URI: https://github.com/systemo-biz/wc-ru-good
Description: Правильный перевод WooCommerce на русский язык
Author: Системо
Author URI: http://systemo.biz

//Support https://github.com/afragen/github-updater
GitHub Plugin URI: https://github.com/systemo-biz/wc-ru-good
GitHub Branch: master

Version: 20160402
*/



function add_mofile_woocommerce(){

  $path = dirname( plugin_basename( __FILE__ ) ) . '/inc/';
	load_plugin_textdomain( 'woocommerce', false, $path );


}
add_action('plugins_loaded', 'add_mofile_woocommerce', 11);
