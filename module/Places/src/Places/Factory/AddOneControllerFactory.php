<?php
 // Filename: /module/Places/src/Places/Factory/AddOneControllerFactory.php
 namespace Places\Factory;

 use Places\Controller\WriteController;
 use Zend\ServiceManager\FactoryInterface;
 use Zend\ServiceManager\ServiceLocatorInterface;

 class AddOneControllerFactory implements FactoryInterface
 {
     public function createService(ServiceLocatorInterface $serviceLocator)
     {
         $realServiceLocator = $serviceLocator->getServiceLocator();
         $placesService        = $realServiceLocator->get('Places\Service\PlacesServiceInterface');
         $placesInsertForm     = $realServiceLocator->get('FormElementManager')->get('Places\Form\PlacesAddSubOneForm');

         return new WriteController(
             $placesService,
             $placesInsertForm
         );
     }
 }