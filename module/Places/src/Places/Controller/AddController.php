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
	protected $placesFormTwo;
	protected $formStep;
	
     public function __construct(
		PlacesServiceInterface $placesService,
		FormInterface $placesFormOne,
		FormInterface $placesFormTwo
		)
     {
         $this->placesService = $placesService;
		 $this->placesFormOne = $placesFormOne;
		 $this->placesFormTwo = $placesFormTwo;
     }
	 
	  public function loadformAction()
     {
		
        //$id = $this->params()->fromRoute('step');
		$this->formStep = 1;
		
		
		$request = $this->getRequest();
		if ($request->isPost()) {
	         $this->placesFormOne->setData($request->getPost());

             if ($this->placesFormOne->isValid()) {
                 try {
					\Zend\Debug\Debug::dump($this->placesFormOne->getData());die();
                  //   $this->placesService->savePlace($this->placesFormOne->getData());
				  $this->formStep = 2;
					$primaryView = new ViewModel(array(
                    'form' => $this->placesFormTwo,
					'test' => $this->formStep
			 //'test' => $this->placesService->getName()
			 ));
			
			$primaryView->setTemplate('write/add');
			return $primaryView;
                 } catch (\Exception $e) {
                     // Some DB Error happened, log it and let the user know
                 }
             }
         }
		 
		if($this->formStep == 1) {
			// $one = new PlacesAddSubOneForm(null,null);
			// $formOne = new AddoneController($this->placesService, $one);
			// return $formOne->addAction();
			 $primaryView = new ViewModel(array(
             'form' => $this->placesFormOne,
			 'test' => $this->formStep
			 //'test' => $this->placesService->getName()
			 ));
			
			$primaryView->setTemplate('write/add');
			return $primaryView;
			
			}
		
		if($this->formStep == 2) {
			$request = $this->getRequest();
		if ($request->isPost()) {
	         $this->placesFormOne->setData($request->getPost());

             if ($this->placesFormOne->isValid()) {
                 try {
					\Zend\Debug\Debug::dump($this->placesFormOne->getData());die();
                  //   $this->placesService->savePlace($this->placesFormOne->getData());
				   $this->formStep = 3;
					$primaryView = new ViewModel(array(
                    'test' => $this->formStep
					//'test' => $this->placesService->getName()
					));
			
					$primaryView->setTemplate('write/add1');
					return $primaryView;
                 } catch (\Exception $e) {
                     // Some DB Error happened, log it and let the user know
                 }
             }
         }
			
			}
		 
		$request = $this->getRequest();
		if ($request->isPost()) {
	         $this->placesFormOne->setData($request->getPost());

             if ($this->placesFormOne->isValid()) {
                 try {
					\Zend\Debug\Debug::dump($this->placesFormOne->getData());die();
                  //   $this->placesService->savePlace($this->placesFormOne->getData());

                   
				//	return $this->redirect()->toRoute('add/2');
                 } catch (\Exception $e) {
                     // Some DB Error happened, log it and let the user know
                 }
             }
         }
		 
		
     }
 }
 
?>