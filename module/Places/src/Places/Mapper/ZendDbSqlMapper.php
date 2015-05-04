<?php
 // Filename: /module/Places/src/Places/Mapper/ZendDbSqlMapper.php
 namespace Places\Mapper;

 use Places\Model\PlacesInterface;
 use Zend\Db\Adapter\AdapterInterface;
 use Zend\Db\Adapter\Driver\ResultInterface;
 use Zend\Db\ResultSet\HydratingResultSet;
 use Zend\Db\Sql\Sql;
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
         $select = $sql->select('activity');

         $stmt   = $sql->prepareStatementForSqlObject($select);
         $result = $stmt->execute();

         if ($result instanceof ResultInterface && $result->isQueryResult()) {
             $resultSet = new HydratingResultSet($this->hydrator, $this->placesPrototype);
			
			  \Zend\Debug\Debug::dump($resultSet->initialize($result));die();
            // return $resultSet->initialize($result);
         }
		
         die("no data");
     }
 }