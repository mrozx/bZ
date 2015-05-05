<?php
//Filename: /module/Places/src/Places/Controller/WriteController.php
namespace Places\Controller;

 use Places\Service\PlacesServiceInterface;
 use Zend\Form\FormInterface;
 use Zend\Mvc\Controller\AbstractActionController;

 class WriteController extends AbstractActionController
 {
     protected $placesService;

     protected $placesForm;

     public function __construct(
         PlacesServiceInterface $placesService,
         FormInterface $placesForm
     ) {
         $this->placesService = $placesService;
         $this->placesForm    = $placesForm;
     }

     public function addAction()
     {
		return new ViewModel(array(
             'form' => $this->placesForm
         ));
     }
 }