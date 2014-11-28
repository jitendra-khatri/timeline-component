<?php
/**
* @contact 		jitendra.kumar@dotsquares.com
* @author		Jitendra Khatri
*/
if(defined('_JEXEC')===false) die();


if(RB_REQUEST_DOCUMENT_FORMAT === 'ajax'){
	class TimelineViewbase extends Rb_ViewAjax{}
}elseif(RB_REQUEST_DOCUMENT_FORMAT === 'json'){
	class TimelineViewbase extends Rb_ViewJson{}
}else{
	class TimelineViewbase extends Rb_ViewHtml{}
}

class TimelineView extends TimelineViewbase 
{
	public $_component = TIMELINE_COMPONENT_NAME;
	
	public function __construct($config = array())
	{
		parent::__construct($config);
		
		self::addSubmenus(array('items'));
		return $this;
	}
}
