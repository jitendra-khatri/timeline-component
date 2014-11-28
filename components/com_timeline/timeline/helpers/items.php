<?php
/**
* @contact jitendra.kumar@dotsquares.com
* @author Jitendra Khatri
*/

if(defined('_JEXEC')===false) die();

class TimelineHelperItems extends TimelineHelper
{
	/*
	 * For fetching all items from itmes table
	 */
	public static function getItems($count = '5')
	{
		$items = TimelineFactory::getInstance('items', 'model', 'timeline')->getItems($count);
		
		if(count($items) > 0)
		{
			return $items;
		}
		
		return false;
	}
}