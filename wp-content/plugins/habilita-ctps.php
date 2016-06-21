<?php

/**
 * Plugin Name: Habilitar Custom Post Type
 * Plugin URI: http://dev.fernando.agenciainfo.com.br
 * Description: Habilita Custom Post Type
 * Version: 1.0.0
 * Author: Fernando Valeriano de Menezes
 * Author URI: http://dev.fernando.agenciainfo.com.br
 * License: GPL2
 */

//registro dos custom post Types

add_action( 'init', 'controle_estoque_cpt' );


function controle_estoque_cpt() {
    register_post_type( 'produto', array(
      'labels' => array(
        'name' => 'Produtos',
        'singular_name' => 'Produto',
       ),
      'description' => 'Custom post criado para Sistema de controle de estoque',
      'public' => true,
      'menu_position' => 20,
      'supports' => array( 'title', 'editor', 'custom-fields' )
    ));
    
    register_post_type( 'Cliente', array(
      'labels' => array(
        'name' => 'Cliente',
        'singular_name' => 'Cliente',
       ),
      'description' => 'Custom post criado para Sistema de controle de estoque',
      'public' => true,
      'menu_position' => 20,
      'supports' => array( 'title', 'editor', 'custom-fields' )
    ));
    
    
    register_post_type( 'Pedido', array(
      'labels' => array(
        'name' => 'Pedido',
        'singular_name' => 'Pedido',
       ),
      'description' => 'Custom post criado para Sistema de controle de estoque',
      'public' => true,
      'menu_position' => 20,
      'supports' => array( 'title', 'editor', 'custom-fields' )
    ));    
    
}


?>
