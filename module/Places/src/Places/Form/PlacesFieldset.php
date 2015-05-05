<?php
// Filename: /module/Places/src/Places/Form/PlacesFieldset.php
namespace Places\Form;

use Zend\Form\Fieldset;

class PlacesFieldset extends Fieldset
{
   public function __construct()
   {
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