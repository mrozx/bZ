<?php
 // Filename: /module/PlacesList/src/PlacesList/Service/PlacesListService.php
 namespace PlacesList\Service;

 class PlacesListService implements PlacesListServiceInterface
 {	
	/**
      * @var \PlacesList\Mapper\PlacesListMapperInterface
      */
     protected $PlacesListMapper;
	
	/**
      * @param PostMapperInterface $PlacesListMapper
      */
     public function __construct(PlacesListMapperInterface $PlacesListMapper)
     {
         $this->PlacesListMapper = $PlacesListMapper;
     }

	 
     /**
      * {@inheritDoc}
      */
     public function findAllPlaces()
     {
         // TODO: Implement findAllPosts() method.
		 return $this->PlacesListMapper->findAll();
     }

     /**
      * {@inheritDoc}
      */
     public function findPlaces($id)
     {
         // TODO: Implement findPost() method.
		 return $this->PlacesListMapper->find($id);
     }
 }