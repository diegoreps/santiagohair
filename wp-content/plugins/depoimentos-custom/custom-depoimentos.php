<?php
ob_start();
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/*
* Plugin name: Depoimentos Personalizado
* Description: Plugin criado por Thiago Ferreira de Sousa
* Version: 1.0
* Author: Thiago Ferreira de Sousa
* License: GPLv2 or later
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
require_once plugin_dir_path(__FILE__) . 'files/depoimentos.php';

$pluginList = get_option( 'active_plugins' );
$plugin = 'depoimentos-custom/custom-depoimentos.php'; 
if ( in_array( $plugin , $pluginList ) ) {
    function create_post_type_depoimentos(){
        register_post_type('depoimentos', 
            array(
            'labels' => array(
                'name' => __('Depoimentos', 'depoimentos'), 
                'singular_name' => __('Depoimento', 'depoimentos'),
                'add_new' => __('Adicionar Depoimento', 'depoimentos'),
                'add_new_item' => __('Adicionar um novo Depoimento', 'depoimentos'),
                'edit' => __('Editar', 'depoimentos'),
                'edit_item' => __('Editar Depoimento', 'depoimentos'),
                'new_item' => __('Novo Depoimento em Branco', 'depoimentos'),
                'view' => __('Visualizar Depoimentos', 'depoimentos'),
                'view_item' => __('Visualizar Depoimentos', 'depoimentos'),
                'search_items' => __('Procurar um Depoimento', 'depoimentos'),
                'not_found' => __('Nenhum Depoimento encontrado', 'depoimentos'),
                'not_found_in_trash' => __('Nenhum Depoimento na lixeira', 'depoimentos')
            ),
            'public' => true,
            'hierarchical' => true, 
            'has_archive' => false,
            'can_export' => true,
            'supports' =>   array(  'title',
                                    'editor', 
                                    'thumbnail',
                                    'revisions'
            ), 
        ));
    }
    add_action('init', 'create_post_type_depoimentos');

    add_filter('get_sample_permalink_html', 'my_hide_permalinks', 10, 5);

    function my_hide_permalinks($return, $post_id, $new_title, $new_slug, $post)
    {
        if($post->post_type == 'depoimentos') {
            return '';
        }
        return $return;
    }

    function wpdocs_register_plugin_styles_depoimentos() {
        wp_register_style( 'custom-depoimentos-style', plugins_url( 'depoimentos-custom/css/custom-depoimentos.css' ) );
        wp_enqueue_style( 'custom-depoimentos-style' );


    }
    add_action( 'wp_enqueue_scripts', 'wpdocs_register_plugin_styles_depoimentos' );
}

ob_get_clean();

?>