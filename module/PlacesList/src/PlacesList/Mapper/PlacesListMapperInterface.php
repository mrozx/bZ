<?php
 // Filename: /module/PlacesList/src/PlacesList/Mapper/PlacesListMapperInterface.php
 namespace PlacesList\Mapper;

 use PlacesList\Model\PlacesListInterface;

 interface PlacesListMapperInterface
 {
     /**
      * @param int|string $id
      * @return PlacesListInterface
      * @throws \InvalidArgumentException
      */
     public function find($id);

     /**
      * @return array|PostInterface[]
      */
     public function findAll();
 }