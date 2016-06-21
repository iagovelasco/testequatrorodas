<?php
$base = dirname( __FILE__ );
$file = substr( $base, 0, stripos( $base, "wp-content" ) );
require( $file . "/wp-load.php" );


$acao = 'do_nothing';

if($_GET['get'])
	$acao = $_GET['get'];
if($_POST['acao'])
	$acao = $_POST['acao'];
if($_GET['acao'])
	$acao = $_GET['acao'];

switch($acao){
	
		
	case 'css':
	
		header('Content-Type: text/css');
		header('Expires: 0');
		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
		header('Pragma: public');
		
		$files = array(
				
				$base . '/../static/css/bootstrap.min.css',			
				$base . '/../static/css/bootstrap-table.min.css',
				$base . '/../static/css/font-awesome.min.css',
				$base . '/../static/css/menu.css',
				$base . '/../style.css',
                $base . '/../static/css/media-querie.css',
            
				
		);		
	
		
		$fcontent = '';
		
		foreach($files as $file){
			if (file_exists($file)) {
				$handle = fopen($file, "r");
				$fcontent .= $comma. fread($handle, filesize($file));
				fclose($handle);
				$comma = "\n\n/*--------------------------------------------------------------------*/\n";
			}
		}
		
		$fcontent = str_replace("'#page_mob#'" , $mobile , $fcontent );
		$fcontent = str_replace('#page_url#' , get_bloginfo('url') , $fcontent );
		$fcontent = str_replace('#page_lng#' , $_GET['lng'] , $fcontent );
		$fcontent = str_replace('#page_name#' , get_bloginfo('name') , $fcontent );
		
		echo "/*". $_SERVER['HTTP_USER_AGENT'] ."*/\n";
		
		echo $fcontent;
	
		break;
        
        
        
        case 'js':
	
		header('Content-Type: text/javascript');		
		header('Pragma: public');
		
		$files = array(
			$base . "/../static/js/jquery-1.12.4.min.js",			
			$base . "/../static/js/bootstrap.min.js",			
			$base . "/../static/js/bootstrap-table.min.js",			
			$base . "/../static/js/app.js"
		);			
	
		
		$fcontent = '';
		
		foreach($files as $file){
			if (file_exists($file)) {
				$handle = fopen($file, "r");
				$fcontent .= $comma. fread($handle, filesize($file));
				fclose($handle);
				$comma = "\n\n/*--------------------------------------------------------------------*/\n";
			}
		}
		
		$fcontent = str_replace("'#page_mob#'" , $mobile , $fcontent );
		$fcontent = str_replace('#page_url#' , get_bloginfo('url') , $fcontent );
		$fcontent = str_replace('#page_lng#' , $_GET['lng'] , $fcontent );
		$fcontent = str_replace('#page_name#' , get_bloginfo('name') , $fcontent );
		
		echo "/*". $_SERVER['HTTP_USER_AGENT'] ."*/\n";
		
		echo $fcontent;
	
		break;
        
        
        case 'produto':
        
        

        
        break;
        
        
        case 'cliente':
        
          $args = array(
            'posts_per_page'   => -1,
            'orderby'          => 'date',
            'order'            => 'DESC',
            'post_type'        => 'cliente'
        );
        
        $posts_array = get_posts( $args );
        echo json_encode($posts_array);
        
        break; 
        
        
        case 'pedido':
            
        $args = array(
        'post_type'		=> 'pedido',
        'posts_per_page'	=> -1,
        'meta_query'		=> array(
            array(
                'key' => 'id_produto',
                'value' => '',
                'compare' => 'IN'
                )
            )
        );

        // query
        $wp_query = new WP_Query( $args );
        
        
        
        echo json_encode($wp_query);
           
        break;  

    
    default: echo 'ACAO:'. $acao; 


} ?>