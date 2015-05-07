<?php
 // Filename: /module/Places/src/Places/Form/PlacesAddSubOneForm.php
 namespace Places\Form;

 use Zend\Form\Form;

 class PlacesAddSubOneForm extends Form
 {
     public function __construct($name = null, $options = array())
     {
		parent::__construct($name, $options);
		
         $this->add(array(
             'name' => 'places-fieldset',
             'type' => 'Places\Form\PlacesAddSubOneFieldSet',
			 'options' => array(
                 'use_as_base_fieldset' => true
             )
         ));
		
		$this->add(array(
             'type' => 'button',
			 'name' => 'next-button',
			 'options' => array(	
				 'label' => 'next',
			 ),
             'attributes' => array(
                 'value' => 'next',
				 'class' => 'testClass',
				 'href' => ''
             )
         ));
		 
         // $this->add(array(
             // 'type' => 'submit',
             // 'name' => 'submit',
             // 'attributes' => array(
                 // 'value' => 'Insert new Post'
             // )
         // ));
     }
 }