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
 use Zend\Session\Container;

 class AddController extends AbstractActionController
 {
    protected $placesService;
	protected $placesFormOne;
	protected $placesFormTwo;
	protected $formStep = 1;
	
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
		
		$form_session = new Container('form');
		
		if($form_session->step == 1) {
		$request = $this->getRequest();
		if ($request->isPost()) {
	         $this->placesFormOne->setData($request->getPost());
						 
             if ($this->placesFormOne->isValid()) {
                 try {
				// \Zend\Debug\Debug::dump($this->placesFormOne->getData());die();
                  //   $this->placesService->savePlace($this->placesFormOne->getData());
				    $form_session->step = 2;
				    $primaryView = new ViewModel(array(
                    'form' => $this->placesFormTwo,
					'nextstep' => $form_session->step 
					));
				   $primaryView->setTemplate('write/add');
				   return $primaryView;
					
                 } catch (\Exception $e) {
                     // Some DB Error happened, log it and let the user know
                 }
             }
         }
		}
		
		if($form_session->step == 2) {
		$request = $this->getRequest();
		if ($request->isPost()) {
	         $this->placesFormOne->setData($request->getPost());
						 
             if ($this->placesFormOne->isValid()) {
                 try {
				// \Zend\Debug\Debug::dump($this->placesFormOne->getData());die();
                  //   $this->placesService->savePlace($this->placesFormOne->getData());
				    $form_session->step = 3;
				    $primaryView = new ViewModel(array(
                    'form' => $this->placesFormTwo,
					'nextstep' => $form_session->step 
					));
				   $primaryView->setTemplate('write/add');
				   return $primaryView;
					
                 } catch (\Exception $e) {
                     // Some DB Error happened, log it and let the user know
                 }
             }
         }
		}
		
			// $one = new PlacesAddSubOneForm(null,null);
			// $formOne = new AddoneController($this->placesService, $one);
			// return $formOne->addAction();
			$form_session->step = 1;
			 $primaryView = new ViewModel(array(
             'form' => $this->placesFormOne,
			 'nextstep' => $this->formStep + 1
			 //'test' => $this->placesService->getName()
			 ));
			
			$primaryView->setTemplate('write/add');
			return $primaryView;
		}	
			
	public function loadform3Action() {	
	\Zend\Debug\Debug::dump("dsas");die();
			$request = $this->getRequest();
			if ($request->isPost()) {
				 $this->placesFormTwo->setData($request->getPost());

				 if ($this->placesFormTwo->isValid()) {
					 try {
						\Zend\Debug\Debug::dump($this->placesFormTwo->getData());die();
					  //   $this->placesService->savePlace($this->placesFormTwo->getData());
					   $this->formStep = 3;
						$primaryView = new ViewModel(array(
						'nextstep' => $this->formStep + 1
						//'test' => $this->placesService->getName()
						));
				
						$primaryView->setTemplate('write/add');
						return $primaryView;
					 } catch (\Exception $e) {
						 // Some DB Error happened, log it and let the user know
					 }
				 }
			 }
			
		

     }
 }
 
?>