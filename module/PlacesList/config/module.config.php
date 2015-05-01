<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
     'controllers' => array(
         'invokables' => array(
             'PlacesList\Controller\PlacesList' => 'PlacesList\Controller\PlacesListController',
         ),
     ),
     'view_manager' => array(
         'template_path_stack' => array(
             'placesList' => __DIR__ . '/../view',
         ),
     ),
 );
