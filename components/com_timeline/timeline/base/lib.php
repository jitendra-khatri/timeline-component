<?php 
/**
* @contact 		jitendra.kumar@dotsquares.com
* @author		Jitendra Khatri
*/
if(defined('_JEXEC')===false) die();

class TimelineLib extends Rb_Lib
{
	public	$_component	= TIMELINE_COMPONENT_NAME;

	static public function getInstance($name, $id=0, $bindData=null, $dummy=null)
	{
		//IMP: dummy variable added just to remove strict errors in development mode
		Rb_Error::assert(!$dummy, Rb_Text::_('COM_TIMELINE_LIB_DUMMY_DATA_VALUE_MUST_NOT_BE_PASSED'));
		return parent::getInstance(TIMELINE_COMPONENT_NAME, $name, $id, $bindData);
	}
}
