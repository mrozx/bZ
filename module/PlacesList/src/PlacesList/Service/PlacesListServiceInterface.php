<?php
 // Filename: /module/PlacesList/src/PlacesList/Service/PostServiceInterface.php
 namespace PlacesList\Service;

 use PlacesList\Model\PlacesListInterface;

 interface PlacesListServiceInterface
 {
     /**
      * Should return a set of all PlacesList posts that we can iterate over. Single entries of the array are supposed to be
      * implementing \PlacesList\Model\PostInterface
      *
      * @return array|PlacesListInterface[]
      */
     public function findAllPlaces();

     /**
      * Should return a single PlacesList post
      *
      * @param  int $id Identifier of the Post that should be returned
      * @return PlacesListInterface
      */
     public function findPlace($id);
 }