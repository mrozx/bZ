<?php 
	
namespace PlacesList\Controller;

 use PlacesList\Service\PlacesListServiceInterface;
 use Zend\Mvc\Controller\AbstractActionController;
 use Zend\View\Model\ViewModel;

 class PlacesListController extends AbstractActionController
 {
    protected $placesListService;

     public function __construct(PlacesListServiceInterface $placesListService)
     {
         $this->placesListService = $placesListService;
     }
	 
	  public function indexAction()
     {
         return new array(
             'posts' => $this->placesListService->findAllPlaces()
         );
     }
 }
 
?>