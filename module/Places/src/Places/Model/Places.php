<?php
 // Filename: /module/Places/src/Places/Model/Places.php
 namespace Places\Model;

 class Places implements PlacesInterface
 {
     /**
      * @var int
      */
     protected $actid;

     /**
      * @var string
      */
     protected $name;

     /**
      * @var string
      */
     protected $desc;

	  /**
      * @var string
      */
     protected $tel;
	  /**
      * @var string
      */
     protected $web;
	 
     /**
      * {@inheritDoc}
      */
     public function getActid()
     {
         return $this->actid;
     }

     /**
      * @param int $id
      */
     public function setActid($id)
     {
         $this->actid = $id;
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
	 
	 /**
      * {@inheritDoc}
      */
     public function getTel()
     {
         return $this->tel;
     }

     /**
      * @param string $text
      */
     public function setTel($text)
     {
         $this->tel = $text;
     }
	 
	 /**
      * {@inheritDoc}
      */
     public function getWeb()
     {
         return $this->web;
     }

     /**
      * @param string $text
      */
     public function setWeb($text)
     {
         $this->web = $text;
     }
	 
	 
 }