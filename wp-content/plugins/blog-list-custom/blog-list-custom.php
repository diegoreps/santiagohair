<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/*
* Plugin name: Blog Personalizado
* Description: Plugin criado por Thiago Ferreira de Sousa
* Version: 1.0
* Author: Thiago Ferreira de Sousa
* License: GPLv2 or later
* Text Domain: blog
*/

/*
 *      Copyright 2022 Thiago Ferreira de Sousa <dev.thiagofsousa@gmail.com>
 *
 *      This program is free software; you can redistribute it and/or modify
 *      it under the terms of the GNU General Public License as published by
 *      the Free Software Foundation; either version 3 of the License, or
 *      (at your option) any later version.
 *
 *      This program is distributed in the hope that it will be useful,
 *      but WITHOUT ANY WARRANTY; without even the implied warranty of
 *      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *      GNU General Public License for more details.
 *
 *      You should have received a copy of the GNU General Public License
 *      along with this program; if not, write to the Free Software
 *      Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 *      MA 02110-1301, USA.
 */

require_once plugin_dir_path(__FILE__) . 'slider/slider.php';
require_once plugin_dir_path(__FILE__) . 'listagem/list.php';
require_once plugin_dir_path(__FILE__) . 'postagem/single.php';

$pluginList = get_option( 'active_plugins' );
$plugin = 'blog-list-custom/blog-list-custom.php'; 
if ( in_array( $plugin , $pluginList ) ) {
    function wpdocs_register_plugin_styles_blog() {
        wp_register_style( 'blog-list-custom-style', plugins_url( 'blog-list-custom/css/blog_list.css' ) );
        wp_enqueue_style( 'blog-list-custom-style' );
    }
    add_action( 'wp_enqueue_scripts', 'wpdocs_register_plugin_styles_blog' );
}



?>