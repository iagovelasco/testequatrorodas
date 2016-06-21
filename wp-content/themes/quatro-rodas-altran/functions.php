<?php
register_nav_menus( array(
	'menu-header' => 'menu header home Quatro Rodas'
));


add_action( 'init', 'estoque_altram' );


function estoque_altram() {
    register_post_type( 'produto', array(
      'labels' => array(
        'name' => 'Produtos',
        'singular_name' => 'Produto',
       ),
      'description' => ' ',
      'public' => true,
      'menu_position' => 20,
      'supports' => array( 'title', 'editor', 'custom-fields' )
    ));
    
    register_post_type( 'Cliente', array(
      'labels' => array(
        'name' => 'Cliente',
        'singular_name' => 'Cliente',
       ),
      'description' => ' ',
      'public' => true,
      'menu_position' => 20,
      'supports' => array( 'title', 'editor', 'custom-fields' )
    ));
    
    
    register_post_type( 'Pedido', array(
      'labels' => array(
        'name' => 'Pedido',
        'singular_name' => 'Pedido',
       ),
      'description' => ' ',
      'public' => true,
      'menu_position' => 20,
      'supports' => array( 'title', 'editor', 'custom-fields' )
    ));    
    
}

