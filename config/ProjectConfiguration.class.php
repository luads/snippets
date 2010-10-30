<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    sfConfig::set('linguagens', array(
      'csharp'      => 'C#', 
      'css'         => 'CSS', 
      'gettext'     => 'Gettext', 
      'groovy'      => 'Groovy', 
      'haskell'     => 'Haskell', 
      'html4strict' => 'HTML', 
      'java'        => 'Java', 
      'java5'       => 'Java 5', 
      'javascript'  => 'JavaScript', 
      'jquery'      => 'jQuery', 
      'mirc'        => 'mIRC', 
      'mysql'       => 'MySQL', 
      'objc'        => 'Objective C', 
      'php'         => 'PHP', 
      'plsql'       => 'PL/SQL', 
      'properties'  => 'Properties', 
      'python'      => 'Python', 
      'rails'       => 'Rails', 
      'ruby'        => 'Ruby', 
      'scala'       => 'Scala', 
      'sql'         => 'SQL', 
      'text'        => 'Texto puro', 
      'xml'         => 'XML', 
    ));
    
    sfValidatorBase::setDefaultMessage('required', 'Campo obrigatório');
    sfValidatorBase::setDefaultMessage('invalid', 'Campo inválido');
    
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('sfGeshiPlugin');
    $this->enablePlugins('sfDoctrineActAsTaggablePlugin');
  }
}
