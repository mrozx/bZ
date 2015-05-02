<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
     'db' => array(
         'driver'         => 'Pdo',
         'username'       => 'bimbiactlive',  //edit this
         'password'       => 'Pass12Bimbi',  //edit this
         'dsn'            => 'mysql:dbname=bimbiMain;host=localhost',
         'driver_options' => array(
             \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
         )
     ),
	 
	'service_manager' => array(
         'factories' => array(
			// 'Places\Mapper\PlacesMapperInterface'   => 'Places\Factory\ZendDbSqlMapperFactory',
             'Places\Service\PlacesServiceInterface' => 'Places\Factory\PlacesServiceFactory',
			 'Zend\Db\Adapter\Adapter'           => 'Zend\Db\Adapter\AdapterServiceFactory',
         )
     ),
	 
     'controllers' => array(
         'factories' => array(
             'Places\Controller\Places' => 'Places\Factory\PlacesControllerFactory',
         ),
     ),
	 
	 // This lines opens the configuration for the RouteManager
	 'router' => array(
		 // Open configuration for all possible routes
         'routes' => array(
			// Define a new route called "places"
             'places' => array(
				// Define the routes type. The segment route allows us to specify placeholders in the URL pattern (route) that will be mapped to named parameters in the matched route.
                 'type'    => 'literal',
				 // Configure the route itself
                 'options' => array(
					// the route is ``/album[/:action][/:id]`` which will match any URL that starts with /album. 
					//The next segment will be an optional action name, 
					//and then finally the next segment will be mapped to an optional id. 
					  'route'    => '/blog',
                     // Define default controller and action to be called when this route is matched
                     'defaults' => array(
                         'controller' => 'Places\Controller\Places',
                         'action'     => 'index',
                     ),
                 ),
             ),
         ),
     ),
	 
     'view_manager' => array(
         'template_path_stack' => array(
				__DIR__ . '/../view/',
         ),
     ),
	 
 );
