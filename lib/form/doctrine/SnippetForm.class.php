<?php

/**
 * Snippet form.
 *
 * @package    snippets
 * @subpackage form
 * @author     lsouza
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class SnippetForm extends BaseSnippetForm
{
  public function configure()
  {
    $linguagens = sfConfig::get('linguagens');
    
    $this->widgetSchema['linguagem']  = new sfWidgetFormChoice(array('choices' => $linguagens));
    $this->widgetSchema['snippet']    = new sfWidgetFormTextarea(array(), array('cols' => 60, 'rows' => 10));
    
    $this->setDefaults(array('linguagem' => 'text'));
    
    // $this->embedForm('autor', new AutorForm());
  }
}
