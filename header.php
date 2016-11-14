<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Lena Brasil</title>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
  </head>
  <body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
  <div class="menu-topo container header">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/sugestao_marca_grupo_lena_horizontal_2.png" width="145" alt=""></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<!--       <ul class="nav navbar-nav">
        <li class=""><a href="#">GRUPO LENA<span class="sr-only">(current)</span></a></li>
        <li><a href="#">LENA BRASIL</a></li>
<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NOVIDADES <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">NOTÍCIAS</a></li>
            <li><a href="#">INFORLENA</a></li>
            <li><a href="#">INFORLENA BRASIL</a></li>
          </ul>
        </li>
        <li><a href="#">FALE CONOSCO</a></li>

      </ul> -->

                        <?php
            wp_nav_menu(
                $args = array(
                    'menu' => 'principal',
                    'container' => 'ul',
                    'container_class' => 'nav navbar-nav',
                    'container_id' => '',
                    'menu_class' => 'nav navbar-nav menu-direita-one',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 0,
                    'walker' => new WPDocs_Walker_Nav_Menu(),
                    'theme_location' => 'principal'
                )
            );
        ?>



      <!-- Extra small button group -->
      <div class="btn-group box-selecione">
        <button class="btn btn-default btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          - Selecione <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
         <li><a href="http://www.lizconstrucoes.com.br/" target="_blank">Liz Construções</a></li>
         <li><a href="http://www.lenobetao.com.br/" target="_blank">Lenobetão</a></li>
         <li><a href="http://www.lizmetal.com.br/cgi-sys/suspendedpage.cgi" target="_blank">LizMetal</a></li>
         <li><a href="http://www.pbinvest.com.br/" target="_blank">P&B Invest</a></li>
        </ul>
      </div>
    </div><!-- /.navbar-collapse -->

  </div>

  </div><!-- /.container-fluid -->
</nav>

<!-- <ul class="bxslider">
  <li>
  <img src="<?php bloginfo('template_url'); ?>/images/slide-home/image-1.jpg" height="241" width="1024" title="Funky roots"/>
  </li>
  <li><img src="<?php bloginfo('template_url'); ?>/images/slide-home/image-2.jpg" height="241" width="1024" /></li>
  <li><img src="<?php bloginfo('template_url'); ?>/images/slide-home/image-3.jpg" height="241" width="1024" /></li>
  <li><img src="<?php bloginfo('template_url'); ?>/images/slide-home/image-4.jpg" height="241" width="1024" /></li>
</ul> -->


<?php if (is_home()){ ?>
<?php echo do_shortcode('[rev_slider alias="slidehome"]') ?>

<?php  }elseif (is_page('grupo-lena')) { ?>
<?php echo do_shortcode('[rev_slider alias="slide2"]') ?>

<?php  }elseif (is_page('lena-brasil')) { ?>
<?php echo do_shortcode('[rev_slider alias="slide3"]') ?>

<?php  }elseif (is_page('noticias')) { ?>
<?php echo do_shortcode('[rev_slider alias="noticias"]') ?>


<?php  }elseif (is_page('inforlena')) { ?>
<?php echo do_shortcode('[rev_slider alias="inforlena"]') ?>

<?php  }elseif (is_page('inforlena-brasil')) { ?>
<?php echo do_shortcode('[rev_slider alias="slidehome"]') ?>


<?php  }elseif (is_page('contato')) { ?>
<?php echo do_shortcode('[rev_slider alias="slidehome"]') ?>

 <?php }else{ ?>
<?php echo do_shortcode('[rev_slider alias="slidehome"]') ?>
<?php  } ?>


<?php 
if( is_home()){ ?>


<?php

}else{ ?>
<div class="container-fluid">
  <div class="container">
    <div class="row page-title">
<br><br>
      <img src="<?php bloginfo('template_url'); ?>/images/icone.jpg" alt=""> <span><?php the_title() ?></span>
    </div>
    <div class="row btn-mais-menos">
      <ul class="pull-right">
        <li class="menos"  id="menos"><img src="<?php bloginfo('template_url'); ?>/images/Amenos.gif" alt=""></li>
        <li class="normal" id="normal"><img src="<?php bloginfo('template_url'); ?>/images/Apadrao.gif" alt=""></li>
        <li class="mais" id="mais"><img src="<?php bloginfo('template_url'); ?>/images/Amais.gif" alt=""></li>
      </ul>
    </div>
<!-- <div class="acessibilidade">
<a href="javascript:void(0)" id="menos" class="botao background-g inline-block hover">-a</a>
<a href="javascript:void(0)" id="normal" class="botao background-g inline-block hover">a</a>
<a href="javascript:void(0)" id="mais" class="botao background-g inline-block hover">+a</a>
<a class="clearfix"></a></div> -->
    <div class="row btn-voltar">
       <a class="pull-right azul" href="javascript:history.back()">« VOLTAR</a>
    </div>
  </div>
</div>
<br><br>
<?php
}
 ?>

