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
         'type' => 'Zend\Form\Element\Select',
         'name' => 'region',
         'options' => array(
           'label' => 'ragione',
		   'empty_option' => 'seleziona una ragione',
		    'value_options' => array(
                             '1' => 'Abruzzo',
                             '2' => 'Basilicata',
                             '3' => 'Calabria',
							 '4' => 'Campania',
							 '5' => 'Emilia Romagna',
							 '6' => 'Friuli Venezia Giulia',
							 '7' => 'Lazio',
							 '8' => 'Liguria',
							 '9' => 'Lombardia',
							 '10' => 'Marche',
							 '11' => 'Molise',
							 '12' => 'Piemonte',
							 '13' => 'Puglia',
							 '14' => 'Sardegna',
							 '15' => 'Sicilia',
							 '16' => 'Toscana',
							 '17' => 'Trentino Alto Adige',
							 '18' => 'Umbria',
							 '19' => 'Valle d\'Aosta',
							 '20' => 'Veneto',
							 
                     ),
					 
         ),
		 'attributes' => array(
           'onChange' => "listProvinces('id='+this.value)"
         )
      ));
	  
	     $this->add(array(
         'type' => 'Zend\Form\Element\Select',
         'name' => 'province',
         'options' => array(
           'label' => 'provincia'
         ),
		  'attributes' => array(
           'onChange' => "comuneSel('id='+this.value)",
		   'id' => 'provinceSel',
         )
      ));
	  
	     $this->add(array(
         'type' => 'text',
         'name' => 'city',
         'options' => array(
           'label' => 'city'
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
         'name' => 'streetNo',
         'options' => array(
           'label' => 'streetNo'
         )
      ));
	  
	 
   }
}