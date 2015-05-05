<?php
// Filename: /module/Places/src/Places/Form/PlacesFieldset.php
namespace Places\Form;

 use Blog\Model\Post;
 use Zend\Form\Fieldset;
 use Zend\Stdlib\Hydrator\ClassMethods;

class PlacesFieldset extends Fieldset
{
   public function __construct($name = null, $options = array())
   {
	 parent::__construct($name, $options);
	 
	  $this->setHydrator(new ClassMethods(false));
      $this->setObject(new Places());
	  
      $this->add(array(
         'type' => 'hidden',
         'name' => 'id'
      ));

      $this->add(array(
         'type' => 'text',
         'name' => 'desc',
         'options' => array(
           'label' => 'The Desc'
         )
      ));

      $this->add(array(
         'type' => 'text',
         'name' => 'name',
         'options' => array(
            'label' => 'The Name'
         )
      ));
   }
}