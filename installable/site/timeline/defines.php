<?php
/**
* @contact 		jitendra.kumar@dotsquares.com
* @author		Jitendra Khatri
*/
if(defined('_JEXEC')===false) die();

// If file is already included
if(defined('TIMELINE_SITE_DEFINED')){
	return;
}

//mark core loaded
define('TIMELINE_SITE_DEFINED', true);
define('TIMELINE_COMPONENT_NAME','timeline');


// define versions
define('TIMELINE_VERSION', '1.0');
define('TIMELINE_REVISION','1.0');

//define('JPATH_COMPONENT', 				JPATH_SITE.'/components/com_valogs');

//shared paths
define('TIMELINE_PATH_CORE',				JPATH_SITE.'/components/com_timeline/timeline');
define('TIMELINE_PATH_CORE_MEDIA',		JPATH_ROOT.'/media/com_timeline');
define('TIMELINE_PATH_CORE_FORM',			TIMELINE_PATH_CORE.'/form');

// frontend
define('TIMELINE_PATH_SITE', 				JPATH_SITE.'/components/com_timeline');
define('TIMELINE_PATH_SITE_CONTROLLER',	TIMELINE_PATH_SITE.'/controllers');
define('TIMELINE_PATH_SITE_VIEW',			TIMELINE_PATH_SITE.'/views');
define('TIMELINE_PATH_SITE_TEMPLATE',		TIMELINE_PATH_SITE.'/templates');

// backend
define('TIMELINE_PATH_ADMIN', 			JPATH_ADMINISTRATOR.'/components/com_timeline');
define('TIMELINE_PATH_ADMIN_CONTROLLER',	TIMELINE_PATH_ADMIN.'/controllers');
define('TIMELINE_PATH_ADMIN_VIEW',		TIMELINE_PATH_ADMIN.'/views');
define('TIMELINE_PATH_ADMIN_TEMPLATE',	TIMELINE_PATH_ADMIN.'/templates');
define('TIMELINE_PATH_PLUGIN', 			JPATH_PLUGINS.'/timeline');

// Html => form + fields
define('TIMELINE_PATH_CORE_FORMS', 		TIMELINE_PATH_CORE.'/html/forms');
define('TIMELINE_PATH_CORE_FIELDS', 		TIMELINE_PATH_CORE.'/html/fields');

define('TIMELINE_INSTANCE_REQUIRE', 		true);

define('TIMELINE_EXECUTION_TIME_MARGIN', 	10); //in percent

// object to identify extension, create once, so same can be consumed by constructors
Rb_Extension::getInstance(TIMELINE_COMPONENT_NAME, array('prefix_css'=>'timeline'));