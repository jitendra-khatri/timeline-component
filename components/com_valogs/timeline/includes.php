<?php
/**
* @contact 		jitendra.kumar@dotsquares.com
* @author		Jitendra Khatri
*/
if(defined('_JEXEC')===false) die();

// if already loaded do not load
if(!defined('RB_FRAMEWORK_LOADED')){
	return;
}

// if VALOGS already loaded do not load
if(defined('TIMELINE_CORE_LOADED')){
	return;
}

define('TIMELINE_CORE_LOADED', true);

// include defines
include_once dirname(__FILE__).'/defines.php';

//load core
Rb_HelperLoader::addAutoLoadFolder(TIMELINE_PATH_CORE.'/base',		'',	'Timeline');

Rb_HelperLoader::addAutoLoadFolder(TIMELINE_PATH_CORE.'/models',		'Model',	'Timeline');
Rb_HelperLoader::addAutoLoadFolder(TIMELINE_PATH_CORE.'/models',		'Modelform','Timeline');

Rb_HelperLoader::addAutoLoadFolder(TIMELINE_PATH_CORE.'/tables',		'Table',	'Timeline');
Rb_HelperLoader::addAutoLoadFolder(TIMELINE_PATH_CORE.'/libs',			'',			'Timeline');
Rb_HelperLoader::addAutoLoadFolder(TIMELINE_PATH_CORE.'/helpers',		'Helper',	'Timeline');

//html
Rb_HelperLoader::addAutoLoadFolder(TIMELINE_PATH_CORE.'/html/html',		'Html',			'Timeline');
Rb_HelperLoader::addAutoLoadFolder(TIMELINE_PATH_CORE.'/html/fields',	'FormField',	'Timeline');



// site
Rb_HelperLoader::addAutoLoadFolder(TIMELINE_PATH_SITE.'/controllers',	'Controller',		'TimelineSite');
Rb_HelperLoader::addAutoLoadViews(TIMELINE_PATH_SITE.'/views', RB_REQUEST_DOCUMENT_FORMAT,  'TimelineSite');

// admin
Rb_HelperLoader::addAutoLoadFolder(TIMELINE_PATH_ADMIN.'/controllers',	'Controller',		'TimelineAdmin');
Rb_HelperLoader::addAutoLoadViews(TIMELINE_PATH_ADMIN.'/views', RB_REQUEST_DOCUMENT_FORMAT, 'TimelineAdmin');

$filename = 'com_timeline_extensions';
$language = JFactory::getLanguage();
$language->load($filename, JPATH_SITE);

require_once TIMELINE_PATH_CORE.'/base/event.php';