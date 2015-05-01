<?php
 // Filename: /module/Places/src/Places/Model/PlacesInterface.php
 namespace Places\Model;

 interface PlacesInterface
 {
     /**
      * Will return the ID of the Places post
      *
      * @return int
      */
     public function getId();

     /**
      * Will return the TITLE of the Places post
      *
      * @return string
      */
     public function getTitle();

     /**
      * Will return the TEXT of the Places post
      *
      * @return string
      */
     public function getText();
 }