<?php
 // Filename: /module/Places/src/Places/Factory/AddControllerFactory.php
 namespace Places\Factory;

 use Places\Controller\AddController;
 use Zend\ServiceManager\FactoryInterface;
 use Zend\ServiceManager\ServiceLocatorInterface;

 class AddControllerFactory implements FactoryInterface
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
         $placesService        = $realServiceLocator->get('Places\Service\PlacesServiceInterface');

         return new AddController($placesService);
     }
 }