<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>
         <?php echo get_bloginfo( 'name' ); ?>
      </title>
      <link href='https://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Dosis:400,500,600,700,300' rel='stylesheet' type='text/css'>
      <link href="/css/" rel="stylesheet">
      <script src="/js/"></script>
   </head>
   <body>
      <?php if(is_page("home")){ ?>
      <main class="container">
         <header>
            <figure>
               <a href="#">
               <img src="/wp-content/themes/quatro-rodas-altran/static/img/banner.png" alt="Banner Topo" class="img-responsive center-block" />
               </a>
            </figure>
         </header>
         
         <article class="col-md-12 menu-fix">
            <figure class="col-md-2 logo">
               <a href="#">
               <img src="/wp-content/themes/quatro-rodas-altran/static/img/logo.png" alt="Logo Header" class="img-responsive" />
               </a>
            </figure>
          
            <div class="col-md-8">
               <nav class="navbar navbar-default">
                  <div class="navbar-header">
                     <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                  </div>
                  <div class="collapse navbar-collapse js-navbar-collapse">
                     <ul class="nav navbar-nav">
                        <li class="dropdown menu-dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Carros <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                           <ul class="dropdown-menu menu-dropdown-menu row">
                              <li class="col-sm-3">
                                 <ul>
                                    <nav data-info="carros" class="submenu menu-imagens">
                                       <ul class="lista">
                                          <li class="modelos"><a href="">Modelos de A a Z</a></li>
                                       </ul>
                                       <div class="carros modelos-az">
                                          <!--<ul>
                                             <div class="col-sm-3">
                                                <li><a href="">Chevrolet Onix</a></li>
                                                <li><a href="">Chevrolet Cobalt</a></li>
                                                <li><a href="">Citröen C3</a></li>
                                                <li><a href="">Fiat Palio</a></li>
                                                <li><a href="">Fiat Toro</a></li>
                                             </div>
                                             <li class="col-sm-3">
                                                <ul>
                                                   <li><a href="">Ford EcoSport</a></li>
                                                   <li><a href="">Ford New Fiesta</a></li>
                                                   <li><a href="">Honda Civic</a></li>
                                                   <li><a href="">Honda Fit</a></li>
                                                </ul>
                                             </li>
                                             <li class="col-sm-3">
                                                <ul>
                                                   <li><a href="">Hyundai HB20</a></li>
                                                   <li><a href="">Hyundai ix35</a></li>
                                                   <li><a href="">Jeep Renegade</a></li>
                                                   <li><a href="">Nissan March</a></li>
                                                </ul>
                                             </li>
                                             <li class="col-sm-3">
                                                <ul>
                                                   <li><a href="">Peugeot 208</a></li>
                                                   <li><a href="">Renault Duster Oroch</a></li>
                                                   <li><a href="">Renault Sandero</a></li>
                                                   <li><a href="">Toyota Corolla</a></li>
                                                   <li><a href="">Toyota Hilux</a></li>
                                                   <li><a href="">Volkswagen Gol</a></li>
                                                   <li><a href="">Volkswagen Jetta</a></li>
                                                </ul>-
                                             </li>
                                          </ul>-->
                                       </div>
                                    </nav>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                        <li class="dropdown menu-dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Teste <i class="fa fa-chevron-down" aria-hidden="true"></i></a>                           
                        </li>
                        <li class="dropdown menu-dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Notícias <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                        </li>
                        <li class="dropdown menu-dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Auto Serviço <i class="fa fa-chevron-down" aria-hidden="true"></i></a>                           
                        </li>
                        <li class="dropdown menu-dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Guia de compras <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
                        </li>
                        <li class="dropdown menu-dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tabela Fipe <i class="fa fa-chevron-down" aria-hidden="true"></i></a>                          
                        </li>
                     </ul>
                  </div>
                 
               </nav>
            </div>
            <div class="col-md-1 search">
               <form>
                  <input type="text" placeholder="Pesquisar"><i class="fa fa-search"></i>
               </form>
            </div>
           
         </article>
         <article class="col-md-12 reset-col">
            <div class="menu-bottom row">
               <ul class="list-inline">
                  <li class="col-md-1"><a href="#">+ Acessados</a></li>
                  <li class="col-md-1"><a href="#">Renegade</a></li>
                  <li class="col-md-1"><a href="#">Novo Sandeiro</a></li>
                  <li class="col-md-1"><a href="#">Novo FOX</a></li>
                  <li class="col-md-1"><a href="#">Novo KA</a></li>
                  <li class="col-md-1"><a href="#">HB20</a></li>
                  <li class="col-md-1"><a href="#">Duster</a></li>
                  <li class="col-md-1"><a href="#">Golf</a></li>
                  <li class="col-md-1"><a href="#">Corola</a></li>
                  <li class="col-md-1"><a href="#">Civic</a></li>
                  <li class="col-md-1"><a href="#">|A-Z|</a></li>
               </ul>
            </div>
          
            <div class="bottom-list">
               <div>
                  <article class="col-md-12 reset-col">
                     <section class="destaques">
                        <ul class="list-inline">
                           <li>
                              <a href="#">
                                 <figure>
                                    <?php
                                       $image = get_field('destaque1');
                                       
                                       if( !empty($image) ): ?>
                                    <img src="<?php echo $image['url']; ?>" class="dest1" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                                 </figure>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <?php
                                 $image = get_field('destaque2');
                                 
                                 if( !empty($image) ): ?>
                              <img src="<?php echo $image['url']; ?>" class="img-menor" alt="<?php echo $image['alt']; ?>" />
                              <?php endif; ?>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <?php
                                 $image = get_field('destaque4');
                                 
                                 if( !empty($image) ): ?>
                              <img src="<?php echo $image['url']; ?>" class="img-menor" alt="<?php echo $image['alt']; ?>" />
                              <?php endif; ?>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <?php
                                 $image = get_field('destaque3');
                                 
                                 if( !empty($image) ): ?>
                              <img src="<?php echo $image['url']; ?>" class="img-menor" alt="<?php echo $image['alt']; ?>" />
                              <?php endif; ?>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                              <?php
                                 $image = get_field('destaque5');
                                 
                                 if( !empty($image) ): ?>
                              <img src="<?php echo $image['url']; ?>" class="img-menor" alt="<?php echo $image['alt']; ?>" />
                              <?php endif; ?>
                              </a>
                           </li>
                        </ul>
                     </section>
                     <section class="bottom-featured">
                        <ul class="list-inline reset-col">
                           <li>
                              <a href="#">
                                 <figure>
                                    <?php
                                       $image = get_field('lista1');
                                       
                                       if( !empty($image) ): ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                                 </figure>
                                 <p>A terceira edição do Fórum Direções QUATRO RODAS novamente irá reunir os principais...</p>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <figure>
                                    <?php
                                       $image = get_field('lista2');
                                       
                                       if( !empty($image) ): ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                                 </figure>
                                 <p>A terceira edição do Fórum Direções QUATRO RODAS novamente irá reunir os principais...</p>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <figure>
                                    <?php
                                       $image = get_field('lista3');
                                       
                                       if( !empty($image) ): ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                                 </figure>
                                 <p>A terceira edição do Fórum Direções QUATRO RODAS novamente irá reunir os principais...</p>
                              </a>
                           </li>
                           <li>
                              <a href="#">
                                 <figure>
                                    <?php
                                       $image = get_field('lista4');
                                       
                                       if( !empty($image) ): ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                                    <?php endif; ?>
                                 </figure>
                                 <p>A terceira edição do Fórum Direções QUATRO RODAS novamente irá reunir os principais...</p>
                              </a>
                           </li>
                        </ul>
                     </section>
                  </article>
               </div>
            </div>
         </article>
      </main>
      <? }else{ ?>
      <div class="jumbotron">
         <div class="container">
           
                  <h3>Produtos</h3>
                  <?php 
                     $posts = get_posts(array(
                         'posts_per_page' => -1,
                         'post_type'      => 'produto'
                     ));
                     
                     if( $posts ): ?>
                  <ul>
                     <?php foreach( $posts as $post ): 
                        setup_postdata( $post )
                        
                        ?>
                     <li>
                        <p><b>ID:</b>
                           <?php the_ID(); ?>
                        </p>
                        <p><b>Nome:</b>
                           <?php the_title(); ?>
                        </p>
                        <p><b>Descrição: </b>
                           <?php the_content() ?>
                        </p>
                        <p><b>Preço: R$</b>
                           <?php the_field("preco"); ?>, 00
                        </p>
                     </li>
                     <hr />
                     <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); ?>
                  <?php endif; ?>
              
                  <h3>Clientes</h3>
                  <?php 
                     $posts = get_posts(array(
                         'posts_per_page' => -1,
                         'post_type'      => 'cliente'
                     ));
                     
                     if( $posts ): ?>
                  <ul>
                     <?php foreach( $posts as $post ): 
                        setup_postdata( $post )
                        
                        ?>
                     <li>
                        <p><b>ID:</b>
                           <?php the_ID(); ?>
                        </p>
                        <p><b>Nome:</b>
                           <?php the_title(); ?>
                        </p>
                        <p><b>Email: <?php the_content() ?> </b> </p>
                        <p><b>Telefone: </b>
                           <?php the_field("telefone"); ?>
                        </p>
                     </li>
                     <hr />
                     <?php endforeach; ?>
                  </ul>
                  <?php wp_reset_postdata(); ?>
                  <?php endif; ?>
              
                  <h3>Pedidos</h3>
                  <div id="primary">
                     <div id="content" role="main">
                        <ul>
                           <li class="fgp">
                              <?php while ( have_posts() ) : the_post(); ?>
                              <article>
                                 <div class="entry-content">
                                    <?php 
                                       $pedidos = get_posts(array(
                                        'post_type' => 'pedido',
                                                             'posts_per_page' => -1,    
                                        'meta_query' => array(
                                          array(
                                            'key' => 'id_cliente', 
                                            'value' => '',
                                            'compare' => 'LIKE'
                                          )
                                        )
                                       ));
                                       
                                       ?>
                                    <?php if( $pedidos ): ?>
                                    <?php foreach( $pedidos as $pedido ): ?>
                                    <?php 
                                       $cliente = get_field('id_cliente', $pedido->ID);
                                       $produtos = get_field('id_produto', $pedido->ID);
                                       
                                       
                                       ?>
                                    <div class="col-md-12 id-ped"><br /><b>ID:</b> <?php echo $pedido->ID; ?></div>
                                    <br />
                                    <div class="col-md-6"><b>Descrição:</b> <?php echo get_the_title( $pedido->ID ); ?></div>
                                    <div class="col-md-6"><b><?php get_the_title($pedido->ID); ?></b></div>
                                    <?php foreach( $produtos as $produto ): ?>
                                    <div class="col-md-12"><?php echo get_the_title( $produto->ID ); ?></div>
                                    <?php endforeach; ?>    
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                 </div>
                              </article>
                              <?php endwhile; ?>
                           </li>
                        </ul>
                     </div>
                   
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
      <? } ?>
   </body>
</html>