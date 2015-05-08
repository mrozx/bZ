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
	 
	  public function loadform1Action()
     {
		
		$request = $this->getRequest();
		if ($request->isPost()) {
	         $this->placesFormOne->setData($request->getPost());

             if ($this->placesFormOne->isValid()) {
                 try {
					//\Zend\Debug\Debug::dump($this->placesFormOne->getData());die();
                  //   $this->placesService->savePlace($this->placesFormOne->getData());
				  $this->formStep = 2;
				  $primaryView = new ViewModel(array(
                    'form' => $this->placesFormTwo,
					'nextstep' => $this->formStep + 1
					));
				   $primaryView->setTemplate('write/add');
				   return $primaryView;
					
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
			 'nextstep' => $this->formStep 
			 //'test' => $this->placesService->getName()
			 ));
			
			$primaryView->setTemplate('write/add');
			return $primaryView;
		}	
			
	public function loadform2Action() {	
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