<?php
// no direct access
defined('_JEXEC') or die('Restricted access');

//require_once( JPATH_COMPONENT.DS.'helpers'.DS.'perms.php' );

// Require the base controller
require_once (JPATH_COMPONENT.DS.'controller.php');
require_once (JPATH_COMPONENT.DS.'tables'.DS.'familias.php');
require_once (JPATH_COMPONENT.DS.'tables'.DS.'direccionFamilia.php');
require_once (JPATH_COMPONENT.DS.'tables'.DS.'personas.php');
require_once (JPATH_COMPONENT.DS.'tables'.DS.'riesgos.php');
require_once (JPATH_COMPONENT.DS.'tables'.DS.'discapacidades.php');
require_once (JPATH_COMPONENT.DS.'tables'.DS.'actividades.php');
require_once (JPATH_COMPONENT.DS.'tables'.DS.'children.php');
require_once (JPATH_COMPONENT.DS.'tables'.DS.'pregnants.php');
require_once (JPATH_COMPONENT.DS.'tables'.DS.'establecimientos.php');
require_once (JPATH_COMPONENT.DS.'tables'.DS.'informegeneral.php');
require_once (JPATH_COMPONENT.DS.'tables'.DS.'informetbc.php');
require_once (JPATH_COMPONENT.DS.'tables'.DS.'contacto.php');
require_once (JPATH_COMPONENT.DS.'tables'.DS.'populations.php');
require_once (JPATH_COMPONENT.DS.'tables'.DS.'informeindhosp.php');


// Require specific controller if requested
if($controller = JRequest::getVar('controller')) {
    require_once (JPATH_COMPONENT.DS.'controllers'.DS.$controller.'.php');
}

// Create the controller
$classname = 'NutritionsController'.$controller;
$controller = new $classname( );

// Perform the Request task
$controller->execute( JRequest::getVar('task'));

// Redirect if set by the controller
$controller->redirect();

?>

