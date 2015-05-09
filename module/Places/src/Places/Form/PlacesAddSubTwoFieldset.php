<?php
// Filename: /module/Places/src/Places/Form/PlacesAddSubTwoFieldset.php
namespace Places\Form;

 use Places\Model\Places;
 use Zend\Form\Fieldset;
 use Zend\Stdlib\Hydrator\ClassMethods;

class PlacesAddSubTwoFieldset extends Fieldset
{
   public function __construct($name = null, $options = array())
   {
	 parent::__construct($name, $options);
	 
	 // $this->setHydrator(new ClassMethods(false));
     // $this->setObject(new Places());
	  
 
      $this->add(array(
         'type' => 'text',
         'name' => 'region',
         'options' => array(
           'label' => 'region'
         )
      ));

        $this->add(array(
         'type' => 'text',
         'name' => 'province',
         'options' => array(
           'label' => 'province'
         )
      ));
	  
	     $this->add(array(
         'type' => 'text',
         'name' => 'comune',
         'options' => array(
           'label' => 'comune'
         )
      ));
	  
	     $this->add(array(
         'type' => 'text',
         'name' => 'street',
         'options' => array(
           'label' => 'street'
         )
      ));
	  
	     $this->add(array(
         'type' => 'text',
         'name' => 'streeNo',
         'options' => array(
           'label' => 'streeNo'
         )
      ));
	  
	 
   }
}