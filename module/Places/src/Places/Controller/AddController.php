<?php 
	
namespace Places\Controller;

 use Places\Service\PlacesServiceInterface;
 use Places\Controller\AddoneController;
 use Places\Form\PlacesAddSubOneForm;
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
		
        $id = $this->params()->fromRoute('step');
		  if($id == 1) {
			
			$one = new PlacesAddSubOneForm(null,null);
			$formOne = new AddoneController($this->placesService, $one);
			return $formOne->addAction();
			}
     }
 }
 
?>