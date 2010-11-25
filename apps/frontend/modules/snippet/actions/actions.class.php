<?php

/**
 * snippet actions.
 *
 * @package    snippets
 * @subpackage snippet
 * @author     lsouza
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class snippetActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->snippets = SnippetTable::ultimos();
  }
  
  public function executeShow(sfWebRequest $request)
  {
    $this->redirectUnless($request->getParameter('slug'), 'snippet/index');
    
    $this->snippet  = SnippetTable::getBySlug($request->getParameter('slug'));
    $this->code     = sfGeshi::parse_single($this->snippet->getSnippet(),$this->snippet->getLinguagem());
  }
  
  public function executeListByTag(sfWebRequest $request)
  {
    $this->snippets = PluginTagTable::getObjectTaggedWith($request->getParameter('tag'));
    $this->setTemplate('index');
  }
  
  public function executeListByAutor(sfWebRequest $request)
  {
  }
  
  public function executeNovo(sfWebRequest $request)
  {
    $this->form = new SnippetForm();
    
    if ($request->isMethod('post')) {
      $this->form->bind($request->getParameter($this->form->getName()), $request->getFiles($this->form->getName()));
      
      if ($this->form->isValid()) {
        $this->form->save();
        
        $this->redirect('@snippet?slug='.$this->form->getObject()->getSlug());
      } else {
        $this->getUser()->setFlash('error', 'Ocorreu algum erro ao salvar seu snippet.');
      }
    }
  }
}
