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
      * @var string
      */
     protected $region;
	 
	  /**
      * @var string
      */
     protected $province;
	 
	  /**
      * @var string
      */
     protected $city;
	 
	  /**
      * @var string
      */
     protected $street;
	 
	  /**
      * @var string
      */
     protected $streetNo;
	 
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
	 
	  /**
      * {@inheritDoc}
      */
     public function getRegion()
     {
         return $this->region;
     }

     /**
      * @param string $text
      */
     public function setRegion($text)
     {
         $this->region = $text;
     }
	 
	  /**
      * {@inheritDoc}
      */
     public function getProvince()
     {
         return $this->province;
     }

     /**
      * @param string $text
      */
     public function setProvince($text)
     {
         $this->province = $text;
     }
	 
	  /**
      * {@inheritDoc}
      */
     public function getCity()
     {
         return $this->city;
     }

     /**
      * @param string $text
      */
     public function setCity($text)
     {
         $this->city = $text;
     }
	 
	  /**
      * {@inheritDoc}
      */
     public function getStreet()
     {
         return $this->street;
     }

     /**
      * @param string $text
      */
     public function setStreet($text)
     {
         $this->street = $text;
     }
	 
	  /**
      * {@inheritDoc}
      */
     public function getStreetNo()
     {
         return $this->streetNo;
     }

     /**
      * @param string $text
      */
     public function setStreetNo($text)
     {
         $this->streetNo = $text;
     }
	 
	 
 }