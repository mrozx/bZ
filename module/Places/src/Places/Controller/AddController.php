<?php 
	
namespace Places\Controller;

 use Places\Service\PlacesServiceInterface;
 use Zend\Mvc\Controller\AbstractActionController;
 use Zend\View\Model\ViewModel;

 class AddController extends AbstractActionController
 {
    protected $placesService;

     public function __construct(PlacesServiceInterface $placesService)
     {
         $this->placesService = $placesService;
     }
	 
	  public function loadForm()
     {
         $id = $this->params()->fromRoute('step');
		  if($id == 1) {
				echo "dsds";
			}
     }
 }
 
?>