<?php
/**
* @contact 		jitendra.kumar@dotsquares.com
* @author		Jitendra Khatri
*/
if(defined('_JEXEC')===false) die();


class TimelineModelform extends Rb_Modelform
{
	public	$_component			= TIMELINE_COMPONENT_NAME;
	
	protected $_forms_path 		= TIMELINE_PATH_CORE_FORMS;
	protected $_fields_path 	= TIMELINE_PATH_CORE_FIELDS;
}