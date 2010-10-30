<?php use_helper('Date') ?>

<?php if (count($snippets)): ?>
<div id="snippets">
  <ul>
    <?php foreach ($snippets as $snippet): ?>
    <li>
      <a href="<?php echo url_for('@snippet?slug='.$snippet->getSlug()) ?>"><?php echo $snippet->getTitulo() ?></a><br/>
      <!-- Autor -->
      Por: 
      <?php if ($snippet->getAutorId()): ?>
      <a href="<?php echo url_for('@snippet_by_autor?autor='.$snippet->getAutor()->getSlug()) ?>"><?php echo $snippet->getAutor() ?></a>
      <?php else: ?>
      anônimo
      <?php endif ?>
      <!-- Data -->
      em <?php echo format_date($snippet->getCreatedAt(), 'd/M/y') ?>
      <!-- Tags -->
    </li>
    <?php endforeach ?>
  </ul>
</div>
<?php else: ?>
<p>Nenhum snippet encontrado.</p>  
<?php endif ?>