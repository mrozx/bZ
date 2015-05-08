<?php
 // Filename: /module/Places/src/Places/Mapper/ZendDbSqlMapper.php
 namespace Places\Mapper;

 use Places\Model\PlacesInterface;
 use Zend\Db\Adapter\AdapterInterface;
 use Zend\Db\Adapter\Driver\ResultInterface;
 use Zend\Db\ResultSet\HydratingResultSet;
 use Zend\Db\Sql\Insert;
 use Zend\Db\Sql\Sql;
 use Zend\Db\Sql\Update;
 use Zend\Stdlib\Hydrator\HydratorInterface;
 
 
 class ZendDbSqlMapper implements PlacesMapperInterface
 {
     /**
      * @var \Zend\Db\Adapter\AdapterInterface
      */
     protected $dbAdapter;

    /**
      * @var \Zend\Stdlib\Hydrator\HydratorInterface
      */
     protected $hydrator;

     /**
      * @var \Blog\Model\PostInterface
      */
     protected $placesPrototype;

     /**
      * @param AdapterInterface  $dbAdapter
      * @param HydratorInterface $hydrator
      * @param PostInterface    $placesPrototype
      */
     public function __construct(
         AdapterInterface $dbAdapter,
         HydratorInterface $hydrator,
         PlacesInterface $placesPrototype
     ) {
         $this->dbAdapter      = $dbAdapter;
         $this->hydrator       = $hydrator;
         $this->placesPrototype  = $placesPrototype;
     }


     /**
      * @param int|string $id
      *
      * @return PlacesInterface
      * @throws \InvalidArgumentException
      */
     public function find($id)
     {
     }

     /**
      * @return array|PlacesInterface[]
      */
     public function findAll()
     {
		 $sql    = new Sql($this->dbAdapter);
		 $select = $sql->select();
		 $select->from('activity');
		 $select->columns(array('actid', 'name', 'desc', 'tel', 'web'));
		 
         $stmt   = $sql->prepareStatementForSqlObject($select);
         $result = $stmt->execute();

         if ($result instanceof ResultInterface && $result->isQueryResult()) {
             $resultSet = new HydratingResultSet($this->hydrator, $this->placesPrototype);
			
			  //\Zend\Debug\Debug::dump($resultSet->initialize($result));die();
            return $resultSet->initialize($result);
         }
		
         die("no data");
     }
	 
	 /**
    * @param PlacesInterface $placesObject
    *
    * @return PlacesInterface
    * @throws \Exception
    */
   public function save(PlacesInterface $placesObject)
   {
   
	$postData = $this->hydrator->extract($placesObject);
      unset($postData['id']); // Neither Insert nor Update needs the ID in the array

      if ($placesObject->getActid()) {
         // ID present, it's an Update
         $action = new Update('activity');
         $action->set($postData);
         $action->where(array('id = ?' => $placesObject->getActid()));
      } else {
         // ID NOT present, it's an Insert
         $action = new Insert('activity');
         $action->values($postData);
      }

      $sql    = new Sql($this->dbAdapter);
      $stmt   = $sql->prepareStatementForSqlObject($action);
      $result = $stmt->execute();

      if ($result instanceof ResultInterface) {
         if ($newId = $result->getGeneratedValue()) {
            // When a value has been generated, set it on the object
            $placesObject->setActid($newId);
         }

         return $placesObject;
      }

      throw new \Exception("Database error");
	}
	
	 public function getName() {
			return $this->placesPrototype->getName();
		}
	 
	 public function setName($text){
			$this->placesPrototype->setName($text);
		}
	 
 }