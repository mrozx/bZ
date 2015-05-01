<?php
 // Filename: /module/PlacesList/src/PlacesList/Factory/PlacesListServiceFactory.php
 namespace PlacesList\Factory;

 use PlacesList\Service\PlacesListService;
 use Zend\ServiceManager\FactoryInterface;
 use Zend\ServiceManager\ServiceLocatorInterface;

 class PlacesListServiceFactory implements FactoryInterface
 {
     /**
      * Create service
      *
      * @param ServiceLocatorInterface $serviceLocator
      * @return mixed
      */
     public function createService(ServiceLocatorInterface $serviceLocator)
     {
         return new PlacesListService(
             $serviceLocator->get('PlacesList\Mapper\PlacesListMapperInterface')
         );
     }
 }