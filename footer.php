<div class="container-fluid">
  <div class="container main">




<?php if(!is_home()){ ?>
<div class="row btn-voltar">
  <a href="javascript:history.back()" class="pull-right azul">« VOLTAR</a>
</div>
    <h1><span>Conheça as empresas da Lena Brasil:</span></h1>
    <div class="clientes text-center">
      <ul>
  <?php $query = new WP_Query( 'cat=3' ); ?>
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <li>
          <a href="<?php the_field('url_site') ?>" target="_blank"><?php the_post_thumbnail(); ?></a> 
        </li>
   <?php endwhile; 
 wp_reset_postdata();
 else : ?>
 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
 <?php endif; ?>                                       
      </ul>
    </div>
    <?php

  } ?>



  </div>
  <br><br>
  <div class="row text-center">
    <p><img src="<?php bloginfo('template_url'); ?>/images/assinatura_abrasivo.png" alt=""></p>
  </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
         $('.bxslider').bxSlider({
          mode: 'fade',
          pager: false,
          captions: true
        });
        });

function strReplace(haystack, needle, replacement) {
    var temp = haystack.split(needle);
    return temp.join(replacement);
}

 $(document).ready(function(){
  var fonte = 16;

  $('#mais').click(function(){
    if (fonte<18){
      fonte = fonte+1;
      $('.texto-interna p').css({'font-size' : fonte+'px'});
    }
  });
  $('#menos').click(function(){
    if (fonte>9){
      fonte = fonte-1;
      $('.texto-interna p').css({'font-size' : fonte+'px'});
    }
  });
  $('#normal').click(function(){
    fonte = 16;
    $('.texto-interna p').css({'font-size' : fonte+'px'});
  });

   
});
    </script>
    <?php wp_footer(); ?>
  </body>
</html>