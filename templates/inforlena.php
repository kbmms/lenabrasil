<div class="container-fluid">
  <div class="container texto-main texto-interna">
  <p>O Inforlena é o informativo periódico impresso do Grupo Lena. Confira abaixo as últimas edições:</p>
  <?php  $pages = $wp_query->max_num_pages; ?>
<?php $additional_loop = new WP_Query("post_type=inforlena&paged=$paged&posts_per_page=10"); ?>

<?php while ($additional_loop->have_posts()) : $additional_loop->the_post(); ?>
      <div class="noticias-inforlena"  id="content">
      <p> <a href="<?php the_field('inforlena') ?>"><span><?php the_title(); ?> </span></a></p> 
      </div>
               <?php endwhile; ?>

   <div class="text-center"><p class="text-center"><?php kriesi_pagination($additional_loop->max_num_pages); ?> </p> </div>
  </div>
</div>