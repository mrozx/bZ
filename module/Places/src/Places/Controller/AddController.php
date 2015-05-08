<?php 
	
namespace Places\Controller;

 use Places\Service\PlacesServiceInterface;
  use Places\Controller\AddoneController;
 use Zend\Mvc\Controller\AbstractActionController;
 use Zend\View\Model\ViewModel;

 class AddController extends AbstractActionController
 {
    protected $placesService;

     public function __construct(PlacesServiceInterface $placesService)
     {
         $this->placesService = $placesService;
     }
	 
	  public function loadformAction()
     {
		$placesS = $placesService;
        $id = $this->params()->fromRoute('step');
		  if($id == 1) {
			  // $primaryView = new ViewModel(array(
             // 'form' => "dsds"
			// ));
		// $primaryView->setTemplate('write/add');
		$formOne = new AddoneController($placesS);
			return $formOne->addAction();
			}
     }
 }
 
?>