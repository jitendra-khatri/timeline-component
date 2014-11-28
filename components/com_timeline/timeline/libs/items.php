<?php
/**
* @subpackage	Frontend
* @contact 		jitendra.kumar@dotsquares.com
* @author		Jitendra Khatri
*/

if(defined('_JEXEC')===false) die();

class TimelineItems extends TimelineLib
{ 
	protected   $items_id		= 0;
	protected	$short_title	= '';
	protected 	$title			= '';
	protected   $description	= '';
	protected 	$created_date;
	
	public static function getInstance($id = 0,  $type = null,  $bindData = null)
	{
		return parent::getInstance('items', $id, $bindData);
	}	
}
