<?php
 // Filename: /module/Places/src/Places/Mapper/ZendDbSqlMapper.php
 namespace Places\Mapper;

 use Places\Model\PlacesInterface;
 use Zend\Db\Adapter\AdapterInterface;
 use Zend\Db\Adapter\Driver\ResultInterface;
 use Zend\Db\ResultSet\HydratingResultSet;
 use Zend\Db\Sql\Sql;
 
 
 class ZendDbSqlMapper implements PlacesMapperInterface
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
             $resultSet = new HydratingResultSet(new \Zend\Stdlib\Hydrator\ClassMethods(), new \Places\Model\Places());

             return $resultSet->initialize($result);
         }

         die("no data");
     }
 }