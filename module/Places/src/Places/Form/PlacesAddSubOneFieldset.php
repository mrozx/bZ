<?php
// Filename: /module/Places/src/Places/Form/PlacesAddSubOneFieldset.php
namespace Places\Form;

 use Places\Model\Places;
 use Zend\Form\Fieldset;
 use Zend\Stdlib\Hydrator\ClassMethods;

class PlacesAddSubOneFieldset extends Fieldset
{
   public function __construct($name = null, $options = array())
   {
	 parent::__construct($name, $options);
	 
	 // $this->setHydrator(new ClassMethods(false));
     // $this->setObject(new Places());
	  
      $this->add(array(
         'type' => 'hidden',
         'name' => 'id'
      ));

      

      $this->add(array(
         'type' => 'text',
         'name' => 'name',
         'options' => array(
            'label' => 'The Name'
         )
      ));
	  
	
	  
	  $this->add(array(
         'type' => 'text',
         'name' => 'tel',
         'options' => array(
            'label' => 'tel'
         )
      ));
	  
	  $this->add(array(
         'type' => 'Zend\Form\Element\Url',
         'name' => 'web',
         'options' => array(
            'label' => 'website:'
         )
      ));
	  
	    $this->add(array(
         'type' => 'textarea',
         'name' => 'desc',
         'options' => array(
           'label' => 'The Desc'
         )
      ));
   }
}