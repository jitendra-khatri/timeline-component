<?php 
/**
* @contact 		jitendra.kumar@dotsquares.com
* @author		Jitendra Khatri
*/
if(defined('_JEXEC')===false) die();

class TimelineFactory extends Rb_Factory
{
	static function getInstance($name, $type='', $prefix='timeline', $refresh=false)
	{
		return parent::getInstance($name, $type, $prefix, $refresh);
	}
}
