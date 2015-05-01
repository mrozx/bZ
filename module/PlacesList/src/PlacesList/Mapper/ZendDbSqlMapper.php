<?php
 // Filename: /module/PlacesList/src/PlacesList/Mapper/ZendDbSqlMapper.php
 namespace PlacesList\Mapper;

 use PlacesList\Model\PlacesListInterface;
 use Zend\Db\Adapter\AdapterInterface;

 class ZendDbSqlMapper implements PlacesListMapperInterface
 {
     /**
      * @var \Zend\Db\Adapter\AdapterInterface
      */
     protected $dbAdapter;

     /**
      * @param AdapterInterface  $dbAdapter
      */
     public function __construct(AdapterInterface $dbAdapter)
     {
         $this->dbAdapter = $dbAdapter;
     }

     /**
      * @param int|string $id
      *
      * @return PlacesListInterface
      * @throws \InvalidArgumentException
      */
     public function find($id)
     {
     }

     /**
      * @return array|PlacesListInterface[]
      */
     public function findAll()
     {
		 $sql    = new Sql($this->dbAdapter);
         $select = $sql->select('activity');

         $stmt   = $sql->prepareStatementForSqlObject($select);
         $result = $stmt->execute();

         if ($result instanceof ResultInterface && $result->isQueryResult()) {
             $resultSet = new ResultSet();

             \Zend\Debug\Debug::dump($resultSet->initialize($result));die();
         }

         die("no data");
     }
 }