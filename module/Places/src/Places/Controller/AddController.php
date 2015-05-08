<?php 
	
namespace Places\Controller;

 //use Places\Model\PlacesInterface;
 use Places\Service\PlacesServiceInterface;
 use Places\Controller\AddoneController;
// use Places\Form\PlacesAddSubOneForm;
// use Places\Form\PlacesAddSubTwoForm;
  use Zend\Form\FormInterface;
 use Zend\Mvc\Controller\AbstractActionController;
 use Zend\View\Model\ViewModel;

 class AddController extends AbstractActionController
 {
    protected $placesService;
	 protected $placesFormOne;
	
     public function __construct(
		PlacesServiceInterface $placesService,
		FormInterface $placesFormOne
		)
     {
         $this->placesService = $placesService;
		 $this->placesFormOne = $placesFormOne;
		 
     }
	 
	  public function loadformAction()
     {
		
        $id = $this->params()->fromRoute('step');
		
		if($id == 1) {
		
		$request = $this->getRequest();
		if ($request->isPost()) {
	         $this->placesFormOne->setData($request->getPost());

             if ($this->placesFormOne->isValid()) {
                 try {
					\Zend\Debug\Debug::dump($this->placesFormOne->getData());die();
                  //   $this->placesService->savePlace($this->placesFormOne->getData());

                   
					return $this->redirect()->toRoute('add/2');
                 } catch (\Exception $e) {
                     // Some DB Error happened, log it and let the user know
                 }
             }
         }
		
			// $one = new PlacesAddSubOneForm(null,null);
			// $formOne = new AddoneController($this->placesService, $one);
			// return $formOne->addAction();
			 $primaryView = new ViewModel(array(
             'form' => $this->placesFormOne,
			 //'test' => $this->placesService->getName()
			));
			
		$primaryView->setTemplate('write/add');
			return $primaryView;
			
			}
			
		  if($id == 2) {
			
			$two = new PlacesAddSubTwoForm(null,null);
			$formTwo = new AddtwoController($this->placesService, $two);
			return $formTwo->addAction();
			}
		 
		$request = $this->getRequest();
		if ($request->isPost()) {
	         $this->placesFormOne->setData($request->getPost());

             if ($this->placesFormOne->isValid()) {
                 try {
					//\Zend\Debug\Debug::dump($this->placesFormOne->getData());die();
                  //   $this->placesService->savePlace($this->placesFormOne->getData());

                   
					return $this->redirect()->toRoute('add/2');
                 } catch (\Exception $e) {
                     // Some DB Error happened, log it and let the user know
                 }
             }
         }
		 
		$primaryView = new ViewModel(array(
		
             'form' => $this->placesFormOne,
			 //'test' => $this->placesService->getName()
			));
			
		$primaryView->setTemplate('write/add');
			return $primaryView;
     }
 }
 
?>