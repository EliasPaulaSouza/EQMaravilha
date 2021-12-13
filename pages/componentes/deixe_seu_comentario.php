<h2 style=" margin: 30px 0;">Deixe seu comentario</h2>
<form action="/pages/controllers/cadastrar_comentario.php" method="post">
  <div class="one_third first">
    <label for="name">Nome <span>*</span></label>
    <input type="text" name="nome" id="name" value="" size="22" required>
  </div>
  <div class="one_third">
    <label for="email">Email <span>*</span></label>
    <input type="email" name="email" id="email" value="" size="22" required>
  </div>
  <div class="one_third">
    <label for="avaliacao" class="rating-label"><strong>Avaliação</strong>
      <input class="rating rating--nojs" max="5" name="avaliacao" id="avaliacao" step="1" type="range" value="5">
    </label>
  </div>
  <div class="block clear">
    <label for="comment"></label>
    <textarea name="comentario" id="comment" cols="25" rows="10"></textarea>
  </div>
  <div>
    <input type="submit" name="submit" value="Enviar">
    &nbsp;
    <input type="reset" name="reset" value="Limpar">
  </div>
</form>