<?php
 // Filename: /module/PlacesList/src/PlacesList/Model/PlacesListInterface.php
 namespace PlacesList\Model;

 interface PlacesListInterface
 {
     /**
      * Will return the ID of the PlacesList post
      *
      * @return int
      */
     public function getId();

     /**
      * Will return the TITLE of the PlacesList post
      *
      * @return string
      */
     public function getTitle();

     /**
      * Will return the TEXT of the PlacesList post
      *
      * @return string
      */
     public function getText();
 }