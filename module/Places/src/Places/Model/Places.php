<?php
 // Filename: /module/Places/src/Places/Model/Places.php
 namespace Places\Model;

 class Places implements PlacesInterface
 {
     /**
      * @var int
      */
     protected $id;

     /**
      * @var string
      */
     protected $name;

     /**
      * @var string
      */
     protected $desc;

     /**
      * {@inheritDoc}
      */
     public function getId()
     {
         return $this->id;
     }

     /**
      * @param int $id
      */
     public function setId($id)
     {
         $this->id = $id;
     }

     /**
      * {@inheritDoc}
      */
     public function getName()
     {
         return $this->name;
     }

     /**
      * @param string $title
      */
     public function setName($title)
     {
         $this->name = $title;
     }

     /**
      * {@inheritDoc}
      */
     public function getDesc()
     {
         return $this->desc;
     }

     /**
      * @param string $text
      */
     public function setDesc($text)
     {
         $this->desc = $text;
     }
 }