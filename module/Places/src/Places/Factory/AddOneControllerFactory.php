<?php
 // Filename: /module/Places/src/Places/Factory/AddoneControllerFactory.php
 namespace Places\Factory;

 use Places\Controller\AddoneController;
 use Zend\ServiceManager\FactoryInterface;
 use Zend\ServiceManager\ServiceLocatorInterface;

 class AddoneControllerFactory implements FactoryInterface
 {
     public function createService(ServiceLocatorInterface $serviceLocator)
     {
         $realServiceLocator = $serviceLocator->getServiceLocator();
         $placesService        = $realServiceLocator->get('Places\Service\PlacesServiceInterface');
         $placesInsertForm     = $realServiceLocator->get('FormElementManager')->get('Places\Form\PlacesAddSubOneForm');

         return new AddoneController(
             $placesService,
             $placesInsertForm
         );
     }
 }