<?php
 // Filename: /module/Places/src/Places/Mapper/PlacesMapperInterface.php
 namespace Places\Mapper;

 use Places\Model\PlacesInterface;

 interface PlacesMapperInterface
 {
     /**
      * @param int|string $id
      * @return PlacesInterface
      * @throws \InvalidArgumentException
      */
     public function find($id);

     /**
      * @return array|PostInterface[]
      */
     public function findAll();
 }