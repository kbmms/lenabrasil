<?php get_header(); ?>


<?php if (is_home()){ ?>
<?php get_template_part( 'templates/inicio', 'inicio' ); ?>

<?php  }elseif (is_page('grupo-lena')) { ?>
<?php get_template_part( 'templates/grupo-lena', 'grupo-lena' ); ?>

<?php  }elseif (is_page('lena-brasil')) { ?>
<?php get_template_part( 'templates/lena-brasil', 'lena-brasil' ); ?>

<?php  }elseif (is_page('noticias')) { ?>
<?php get_template_part( 'templates/noticias', 'noticias' ); ?>


<?php  }elseif (is_page('inforlena')) { ?>
<?php get_template_part( 'templates/inforlena', 'inforlena' ); ?>

<?php  }elseif (is_page('inforlena-brasil')) { ?>
<?php get_template_part( 'templates/inforlena-brasil', 'inforlena-brasil' ); ?>


<?php  }elseif (is_page('contato')) { ?>
<?php get_template_part( 'templates/contato', 'contato' ); ?>

 <?php }else{
 echo "<div class='container text-center'><h1>404 Página não encontrada!</h1></div>";
 	} ?>

<?php get_footer(); ?>