<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container-fluid">
  <div class="container texto-main texto-interna">
  <?php the_content() ?>



  <?php $query = new WP_Query( 'cat=3' ); ?>
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

  <div class="empresas" >
  <a href="<?php the_field('url_site') ?>" target="_blank">
   <?php the_post_thumbnail(); ?>
  </a> <span class="texto-cinza"><?php the_title() ?></span>

      <?php the_content(); ?>
  </div>
<br>
<br> 

 <?php endwhile; 
 wp_reset_postdata();
 else : ?>
 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
 <?php endif; ?>


  </div>
</div>

<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>