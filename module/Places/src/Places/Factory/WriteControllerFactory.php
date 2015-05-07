<?php
 // Filename: /module/Places/src/Places/Factory/WriteControllerFactory.php
 namespace Places\Factory;

 use Places\Controller\WriteController;
 use Zend\ServiceManager\FactoryInterface;
 use Zend\ServiceManager\ServiceLocatorInterface;

 class WriteControllerFactory implements FactoryInterface
 {
     public function createService(ServiceLocatorInterface $serviceLocator)
     {
         $realServiceLocator = $serviceLocator->getServiceLocator();
         $placesService        = $realServiceLocator->get('Places\Service\PlacesServiceInterface');
         $placesInsertForm     = $realServiceLocator->get('FormElementManager')->get('Places\Form\PlacesAddSub01Form');

         return new WriteController(
             $placesService,
             $placesInsertForm
         );
     }
 }