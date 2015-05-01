<?php
 // Filename: /module/PlacesList/src/PlacesList/Service/PlacesListService.php
 namespace PlacesList\Service;

 class PlacesListService implements PlacesListServiceInterface
 {	
	/**
      * @var \PlacesList\Mapper\PlacesListMapperInterface
      */
     protected $placesListMapper;
	
	/**
      * @param PostMapperInterface $placesListMapper
      */
     public function __construct(PlacesListMapperInterface $placesListMapper)
     {
         $this->placesListMapper = $placesListMapper;
     }

	 
     /**
      * {@inheritDoc}
      */
     public function findAllPlaces()
     {
         // TODO: Implement findAllPosts() method.
		 //return $this->PlacesListMapper->findAll();
     }

     /**
      * {@inheritDoc}
      */
     public function findPlace($id)
     {
         // TODO: Implement findPost() method.
		// return $this->PlacesListMapper->find($id);
     }
 }