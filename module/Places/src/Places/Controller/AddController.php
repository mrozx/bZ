<?php 
	
namespace Places\Controller;

 use Places\Model\PlacesInterface;
 use Places\Service\PlacesServiceInterface;
 use Places\Controller\AddoneController;
 use Places\Form\PlacesAddSubOneForm;
 use Places\Form\PlacesAddSubTwoForm;
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
			
		  if($id == 2) {
			
			$two = new PlacesAddSubTwoForm(null,null);
			$formTwo = new AddtwoController($this->placesService, $two);
			return $formTwo->addAction();
			}
			
		$primaryView = new ViewModel(array(
		'form' => \Zend\Debug\Debug::dump($this->placesForm->getData());die()
             //'form' => $this->placesForm,
			 //'test' => $this->placesService->getName()
			));
			
		$primaryView->setTemplate('write/add');
			return $primaryView;
     }
 }
 
?>