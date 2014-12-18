<?php
/**
* @contact		jitendra.kumar@dotsquares.com
* @author 		Jitendra Khatri
*/
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

if(!defined('RB_FRAMEWORK_LOADED')){
	JLog::add('Frameowork not loaded',JLog::ERROR);
	JFactory::getApplication()->redirect('index.php?option=com_installer', 'Framework Not Loaded. Either Framework plugin is not installed or not enabled', 'warning');
}

require_once JPATH_SITE.'/components/com_timeline/timeline/includes.php';

// find the controller to handle the request
$option	= 'com_timeline';
$view	= 'items';
$task	= null;
$format	= 'html';

$controllerClass = TimelineHelper::findController($option,$view, $task,$format);


$controller = TimelineFactory::getInstance($controllerClass, 'controller', 'timelineadmin');

// execute task
try{
	$controller->execute($task);
}catch(Exception $e){
	TimelineHelper::handleException($e);
}

// lets complete the task by taking post-action
$controller->redirect();
