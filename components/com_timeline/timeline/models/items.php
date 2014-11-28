<?php 
/**
* @subpackage	Frontend
* @contact 		jitendra.kumar@dotsquares.com
* @author		Jitendra Khatri
*/
if(defined('_JEXEC')===false) die();


class TimelineModelItems extends TimelineModel
{
	public function getItems()
	{
		$db= & JFactory::getDBO();
		$sql = ' SELECT `items_id`, `short_title`, `title`, `description`
				 FROM '.$db->quoteName('#__timeline_items')
				.'ORDER BY `created_date`';
		$db->setQuery($sql);
		return $db->loadAssocList();
	}
}

class TimelineModelformItems extends TimelineModelform 
{
	
}
