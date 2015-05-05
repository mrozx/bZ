<?php
 // Filename: /module/Places/src/Places/Form/PlacesForm.php
 namespace Places\Form;

 use Zend\Form\Form;

 class PlacesForm extends Form
 {
     public function __construct($name = null, $options = array())
     {
		parent::__construct($name, $options);
		
         $this->add(array(
             'name' => 'places-fieldset',
             'type' => 'Places\Form\PlacesFieldset',
			 'options' => array(
                 'use_as_base_fieldset' => true
             )
         ));
		
		$this->add(array(
             'type' => 'button',
             'name' => 'next-button',
			 'label' => 'next-button',
             'attributes' => array(
                 'value' => 'next'
             )
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