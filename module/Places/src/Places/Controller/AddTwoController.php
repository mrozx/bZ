<?php
//Filename: /module/Places/src/Places/Controller/WriteController.php
namespace Places\Controller;

 use Places\Service\PlacesServiceInterface;
 use Zend\Form\FormInterface;
 use Zend\Mvc\Controller\AbstractActionController;
 use Zend\View\Model\ViewModel;

 class AddOneController extends AbstractActionController
 {
     protected $placesService;

     protected $placesForm;

     public function __construct(
         PlacesServiceInterface $placesService,
         FormInterface $placesForm
     ) {
         $this->placesService = $placesService;
         $this->placesForm    = $placesForm;
     }

     public function addAction()
     {
		 
		  $id = $this->params()->fromRoute('step');
		  if($id == 2) {
			return new ViewModel(array(
             'form' => $this->placesForm
			));
		  }	
         
		 
		 $request = $this->getRequest();

         if ($request->isPost()) {
             $this->placesForm->setData($request->getPost());

             if ($this->placesForm->isValid()) {
                 try {
					//\Zend\Debug\Debug::dump($this->placesForm->getData());die();
                     $this->placesService->savePlace($this->placesForm->getData());

                     return $this->redirect()->toRoute('places');
                 } catch (\Exception $e) {
                     // Some DB Error happened, log it and let the user know
                 }
             }
         }

		
     }
 }