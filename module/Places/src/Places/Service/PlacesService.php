<?php
 // Filename: /module/Places/src/Places/Service/PlacesService.php
 namespace Places\Service;
 
  use Blog\Mapper\PostMapperInterface;
 
 class PlacesService implements PlacesServiceInterface
 {	
	   /**
      * @var \Places\Mapper\PlacesMapperInterface
      */
     protected $placesMapper;

     /**
      * @param PostMapperInterface $postMapper
      */
     public function __construct(PlacesMapperInterface $placesMapper)
     {
         $this->placesMapper = $placesMapper;
     }

	 
     /**
      * {@inheritDoc}
      */
     public function findAllPlaces()
     {
         // TODO: Implement findAllPosts() method.
		return $this->placesMapper->findAll();
     }

     /**
      * {@inheritDoc}
      */
     public function findPlace($id)
     {
         // TODO: Implement findPlace() method.
		  return $this->placesMapper->find($id);
     }
 }