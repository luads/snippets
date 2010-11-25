<?php use_helper('Date') ?>
<?php use_helper('Tags') ?>

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

<div id="snippets">
  <p><strong>Código:</strong></p>
  <br/>
  <?php echo $code ?>
  <br/>
  
  <?php echo tag_list($snippet->getTags(), '@snippet_by_tag?tag=') ?>
</div>

<p id="voltar"><a href="<?php echo url_for('@homepage') ?>">&larr; Voltar</a></p>