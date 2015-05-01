<?php
 // Filename: /module/PlacesList/src/PlacesList/Service/PlacesListService.php
 namespace PlacesList\Service;

 class PlacesListService implements PlacesListServiceInterface
 {	
	 protected $data = array(
         array(
             'id'    => 1,
             'title' => 'Hello World #1',
             'text'  => 'This is our first blog post!'
         ),
         array(
             'id'     => 2,
             'title' => 'Hello World #2',
             'text'  => 'This is our second blog post!'
         ),
         array(
             'id'     => 3,
             'title' => 'Hello World #3',
             'text'  => 'This is our third blog post!'
         ),
         array(
             'id'     => 4,
             'title' => 'Hello World #4',
             'text'  => 'This is our fourth blog post!'
         ),
         array(
             'id'     => 5,
             'title' => 'Hello World #5',
             'text'  => 'This is our fifth blog post!'
         )
     );

	 
     /**
      * {@inheritDoc}
      */
     public function findAllPlaces()
     {
         // TODO: Implement findAllPosts() method.
		 $allPosts = array();

         foreach ($this->data as $index => $post) {
             $allPosts[] = $this->findPlace($index);
         }

         return $allPosts;
     }

     /**
      * {@inheritDoc}
      */
     public function findPlace($id)
     {
         // TODO: Implement findPost() method.
		 $postData = $this->data[$id];

         $model = new PlacesList();
         $model->setId($postData['id']);
         $model->setTitle($postData['title']);
         $model->setText($postData['text']);

         return $model;
     }
 }