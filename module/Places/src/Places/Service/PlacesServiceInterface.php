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
 }