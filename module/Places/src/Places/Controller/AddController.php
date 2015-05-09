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
				  $form_session->dataArray =  array_merge($form_session->dataArray, $this->placesFormOne->getData());;
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
					$form_session->dataArray =  array_merge($form_session->dataArray, $this->placesFormOne->getData());;
					\Zend\Debug\Debug::dump($form_session->dataArray);die();
					
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
			$form_session->dataArray = array();
			
			 $primaryView = new ViewModel(array(
             'form' => $this->placesFormOne,
			 'nextstep' => $form_session->step
			 //'test' => $this->placesService->getName()
			 ));
			
			$primaryView->setTemplate('write/add');
			return $primaryView;
		}	
			
 }
 
?>