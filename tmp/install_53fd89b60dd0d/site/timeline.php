<?php

/**
* @contact 		jitendra.kumar@dotsquares.com
* @author		Jitendra Khatri
*/
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

if(!defined('RB_FRAMEWORK_LOADED')){
	JLog::add('Frameowork not loaded',JLog::ERROR);
}

require_once  dirname(__FILE__).'/timeline/includes.php';
$option	= 'com_timeline';
$view	= 'items';
$task	= null;
$format	= 'html';

$controllerClass = TimelineHelper::findController($option,$view, $task,$format);

$controller = TimelineFactory::getInstance($controllerClass, 'controller', 'timelinesite');

// execute task
$controller->execute($task);

//exit after controller request
if(defined('TIMELINE_EXIT')){
	exit(VALOGS_EXIT);
}

// lets complete the task by taking post-action
$controller->redirect();
