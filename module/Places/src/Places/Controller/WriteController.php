<?php
//Filename: /module/Places/src/Places/Controller/WriteController.php
namespace Places\Controller;

 use Places\Service\PlacesServiceInterface;
 use Zend\Form\FormInterface;
 use Zend\Mvc\Controller\AbstractActionController;
 use Zend\View\Model\ViewModel;

 class WriteController extends AbstractActionController
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
		 $request = $this->getRequest();

         if ($request->isPost()) {
             $this->postForm->setData($request->getPost());

             if ($this->postForm->isValid()) {
                 try {
                     $this->postService->savePost($this->postForm->getData());

                     return $this->redirect()->toRoute('places');
                 } catch (\Exception $e) {
                     // Some DB Error happened, log it and let the user know
                 }
             }
         }

		return new ViewModel(array(
             'form' => $this->placesForm
         ));
     }
 }