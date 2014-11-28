<?php
/**
* @subpackage	Backend
* @contact 		jitendra.kumar@dotsquares.com
* @author 		Jitendra Khatri
*/

if(defined('_JEXEC')===false) die();

class TimelineAdminBaseViewItems extends TimelineView
{
	function edit($tpl= null, $itemId = null)
	{
		$itemId = ($itemId === null) ? $this->getModel()->getState('id') : $itemId ;
		$item 	= TimelineItems::getInstance($itemId);
		
		$tmp1 = $item->getModelform();
		$tmp2 = $tmp1->getForm($tmp1);
		$this->assign('item', $tmp2);
		
		return true;
	} 
}