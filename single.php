<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container-fluid">
  <div class="container texto-main texto-interna">
   <h1><?php the_title() ?> </h1>

   <?php the_content() ?>

  </div>

</div>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>