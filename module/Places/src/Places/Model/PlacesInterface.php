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
     public function getActid();

     /**
      * Will return the TITLE of the Places post
      *
      * @return string
      */
     public function getName();

     /**
      * Will return the TEXT of the Places post
      *
      * @return string
      */
     public function getDesc();
	 
	 /**
      * Will return the telephone of the Places post
      *
      * @return string
      */
     public function getTel();
	 
	 /**
      * Will return the website of the Places post
      *
      * @return string
      */
     public function getWeb();
 }