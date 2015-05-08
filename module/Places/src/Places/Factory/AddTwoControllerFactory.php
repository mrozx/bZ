<?php
 // Filename: /module/Places/src/Places/Factory/AddTwoControllerFactory.php
 namespace Places\Factory;

 use Places\Controller\AddtwoController;
 use Zend\ServiceManager\FactoryInterface;
 use Zend\ServiceManager\ServiceLocatorInterface;

 class AddTwoControllerFactory implements FactoryInterface
 {
     public function createService(ServiceLocatorInterface $serviceLocator)
     {
         $realServiceLocator = $serviceLocator->getServiceLocator();
         $placesService        = $realServiceLocator->get('Places\Service\PlacesServiceInterface');
         $placesInsertForm     = $realServiceLocator->get('FormElementManager')->get('Places\Form\PlacesAddSubTwoForm');

         return new AddtwoController(
             $placesService,
             $placesInsertForm
         );
     }
 }