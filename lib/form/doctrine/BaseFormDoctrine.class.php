<?php

/**
 * Project form base class.
 *
 * @package    snippets
 * @subpackage form
 * @author     lsouza
 * @version    SVN: $Id: sfDoctrineFormBaseTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class BaseFormDoctrine extends sfFormDoctrine
{
  public function setup()
  {
    unset($this['slug'],$this['created_at'],$this['updated_at']);
  }
}
