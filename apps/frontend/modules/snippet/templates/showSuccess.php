<?php use_helper('Date') ?>

<h2><?php echo $snippet->getTitulo() ?></h2>

<p>
  Por: 
  <?php if ($snippet->getAutorId()): ?>
  <a href="<?php echo url_for('@snippet_by_autor?autor='.$snippet->getAutor()->getSlug()) ?>"><?php echo $snippet->getAutor() ?></a>
  <?php else: ?>
  anônimo
  <?php endif ?>
  
  em <?php echo format_date($snippet->getCreatedAt(), 'd/M/y') ?>
</p>

<div id="snippet">
  <p><strong>Código:</strong></p>
  <br/>
  <?php echo $code ?>
</div>

<p id="voltar"><a href="<?php echo url_for('@homepage') ?>">&larr; Voltar</a></p>