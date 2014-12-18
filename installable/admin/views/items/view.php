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
		/*$itemId  =  ($itemId === null) ? $this->getModel()->getState('id') : $itemId ;
		$article = VALogsArticle::getInstance($itemId);
		
		$tmp1 = $article->getModelform();
		$tmp2 = $tmp1->getForm($tmp1);
		$this->assign('article', $tmp2);*/
				
		return true;
	} 
}