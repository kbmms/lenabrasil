<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container-fluid">
  <div class="container texto-main texto-interna">
  <p>Para entrar em contato com o Grupo Lena Brasil, por favor, utilize o formulário abaixo:</p>
<!-- <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nome: </label>
    <input type="email" class="form-control" id="nome">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Email: </label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
  <label for="exampleInputPassword1">Mensagem: </label>
  <textarea class="form-control" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Enviar</button>
  <button type="submit" class="btn btn-default">Limpar</button>
</form>  -->
<?php the_content(); ?>

<!-- <div class="">
<p>Se preferir, faça-nos uma visita: </p> 
<address>Rua Rio Lena, nº65, Edf. Bela Vista Long Stay, Térreo  Armação 
<br>
SALVADOR - BAHIA
</address>
<p>TEL: +55 (71) 3271 8900</p>
<p>FAX: +55 (71) 3271 8923</p>  
</div> -->


 
  </div>
</div>

<?php endwhile; else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>