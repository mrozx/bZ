<?php
 // Filename: /module/Places/src/Places/Model/Places.php
 namespace Places\Model;

 class Places implements PlacesInterface
 {
     /**
      * @var int
      */
     protected $act_id;

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
         return $this->act_id;
     }

     /**
      * @param int $id
      */
     public function setId($id)
     {
         $this->act_id = $id;
     }

     /**
      * {@inheritDoc}
      */
     public function getTitle()
     {
         return $this->name;
     }

     /**
      * @param string $title
      */
     public function setTitle($title)
     {
         $this->name = $title;
     }

     /**
      * {@inheritDoc}
      */
     public function getText()
     {
         return $this->desc;
     }

     /**
      * @param string $text
      */
     public function setText($text)
     {
         $this->desc = $text;
     }
 }