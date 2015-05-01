<?php 
	
namespace Places\Controller;

 use Places\Service\PlacesServiceInterface;
 use Zend\Mvc\Controller\AbstractActionController;
 use Zend\View\Model\ViewModel;

 class PlacesController extends AbstractActionController
 {
    protected $placesService;

     public function __construct(PlacesServiceInterface $placesService)
     {
         $this->placesService = $placesService;
     }
	 
	  public function indexAction()
     {
         return array(
             'posts' => $this->placesService->findAllPlaces()
         );
     }
 }
 
?>