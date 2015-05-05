<?php
 // Filename: /module/Places/src/Places/Form/PlacesForm.phpPlacesForm.php
 namespace Places\Form;

 use Zend\Form\Form;

 class PlacesForm extends Form
 {
     public function __construct($name = null, $options = array())
     {
		parent::__construct($name, $options);
		
         $this->add(array(
             'name' => 'places-fieldset',
             'type' => 'Places\Form\PlacesFieldset'
         ));

         $this->add(array(
             'type' => 'submit',
             'name' => 'submit',
             'attributes' => array(
                 'value' => 'Insert new Post'
             )
         ));
     }
 }