<?php
/*
Plugin Name: Woo Russian Good
Plugin URI: https://wpcraft.ru/product/woocommerce-pravilnyj-perevod/
Description: Правки русского перевода для WooCommerce. Правильный перевод слова product на русский язык как продукт (вместо Товар).
Author: AY
Author URI: https://github.com/yumashev
Version: 20170722
*/



function add_mofile_woocommerce(){

  $mo_file_path = dirname(__FILE__) . '/inc/woocommerce-ru_RU.mo';
	$check = load_textdomain('woocommerce', $mo_file_path );

}

add_action('plugins_loaded', 'add_mofile_woocommerce', 111);
