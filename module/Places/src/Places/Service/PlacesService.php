<?php
 // Filename: /module/Places/src/Places/Service/PlacesService.php
 namespace Places\Service;
 
  use Places\Mapper\PlacesMapperInterface;
   use Places\Model\PlacesInterface;
 
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
	 
	 
     /**
      * {@inheritDoc}
      */
     public function savePlace(PlacesInterface $places)
     {
         return $this->placesMapper->save($places);
     }
 }