<?php
 // Filename: /module/PlacesList/src/PlacesList/Factory/PlacesListControllerFactory.php
 namespace PlacesList\Factory;

 use PlacesList\Controller\ListController;
 use Zend\ServiceManager\FactoryInterface;
 use Zend\ServiceManager\ServiceLocatorInterface;

 class PlacesListControllerFactory implements FactoryInterface
 {
     /**
      * Create service
      *
      * @param ServiceLocatorInterface $serviceLocator
      *
      * @return mixed
      */
     public function createService(ServiceLocatorInterface $serviceLocator)
     {
         $realServiceLocator = $serviceLocator->getServiceLocator();
         $placesListService        = $realServiceLocator->get('PlacesList\Service\PlacesListServiceInterface');

         return new PlacesListController($placesListService);
     }
 }