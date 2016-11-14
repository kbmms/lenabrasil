<div class="container-fluid">
  <div class="container texto-main" >
  <?php  $pages = $wp_query->max_num_pages; ?>
<?php $additional_loop = new WP_Query("post_type=noticias&paged=$paged&posts_per_page=10"); ?>

<?php while ($additional_loop->have_posts()) : $additional_loop->the_post(); ?>
 <!-- Show loop content... -->

      <div class="noticias-inforlena">
        <a href="<?php the_permalink(); ?> "><span><?php the_title(); ?></span></a>
        <p><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?> </a></p>
      </div>
<?php endwhile; ?>
                <?php kriesi_pagination($additional_loop->max_num_pages); ?>       
  </div>
</div>