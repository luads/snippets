<?php if ($sf_user->hasFlash('error')): ?>
  <div class="error"><?php echo $sf_user->getFlash('error') ?></div>
<?php endif; ?>

<form action="<?php echo url_for('@novo') ?>" method="post" accept-charset="utf-8">
  <?php echo $form->renderHiddenFields(false) ?>
  
  <?php echo $form['titulo']->renderLabel() ?>
  <?php echo $form['titulo']->renderError() ?>
  <?php echo $form['titulo'] ?>
  
  <?php echo $form['linguagem']->renderLabel() ?>
  <?php echo $form['linguagem']->renderError() ?>
  <?php echo $form['linguagem'] ?>
  
  <?php echo $form['snippet']->renderLabel() ?>
  <?php echo $form['snippet']->renderError() ?>
  <?php echo $form['snippet'] ?>
  
  <?php echo $form['autor_id']->renderLabel() ?>
  <?php echo $form['autor_id']->renderError() ?>
  <?php echo $form['autor_id'] ?>
  
  <!--   
  <fieldset id="novo-autor">
    <legend>Novo autor</legend>
    
    <?php // echo $form['autor']['nome']->renderLabel() ?>
    <?php // echo $form['autor']['nome']->renderError() ?>
    <?php // echo $form['autor']['nome'] ?>
  </fieldset>
  -->
  
  <p><input type="submit" value="Cadastrar &rarr;"/></p>
</form>