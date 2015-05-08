<?php
 // Filename: /module/Places/src/Places/Service/PlacesServiceInterface.php
 namespace Places\Service;

 use Places\Model\PlacesInterface;


 interface PlacesServiceInterface
 {
     /**
      * Should return a set of all Places posts that we can iterate over. Single entries of the array are supposed to be
      * implementing \Places\Model\PostInterface
      *
      * @return array|PlacesInterface[]
      */
     public function findAllPlaces();

     /**
      * Should return a single Places post
      *
      * @param  int $id Identifier of the Post that should be returned
      * @return PlacesInterface
      */
     public function findPlace($id);
	 
	 /**
      * Should save a given implementation of the PostInterface and return it. If it is an existing Post the Post
      * should be updated, if it's a new Post it should be created.
      *
      * @param  PlacesInterface $places
      * @return PlacesInterface
      */
	 public function savePlace(PlacesInterface $places);
 }
 