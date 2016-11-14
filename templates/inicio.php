<div class="container-fluid">
  <div class="container main">
    <h1><span>Conheça as empresas da Lena Brasil:</span></h1>
    <div class="clientes text-center">
      <ul>
  <?php $query = new WP_Query( 'cat=3' ); ?>
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>      
        <li>
        <a href="<?php the_field('url_site') ?>" target="_blank">
          <div class="box-home"><?php the_post_thumbnail(); ?></div>  
           <div class="box-texto">
              <p><span><?php the_field('texto_home') ?></span></p>
           </div>
        </a>

        </li>  
 <?php endwhile; 
 wp_reset_postdata();
 else : ?>
 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
 <?php endif; ?>                                    
      </ul>
    </div>
  </div>
</div>