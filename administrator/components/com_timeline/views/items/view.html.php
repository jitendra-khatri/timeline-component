<?php
/**
* @subpackage	Backend
* @contact 		jitendra.kumar@dotsquares.com
* @author 		Jitendra Khatri
*/

if(defined('_JEXEC')===false) die();

include_once dirname(__FILE__).'/view.php';

class TimelineAdminViewItems extends TimelineAdminBaseViewItems
{
	protected function _adminGridToolbar()
	{
		Rb_HelperToolbar::addNew('new');
		Rb_HelperToolbar::editList();
		Rb_HelperToolbar::divider();
		Rb_HelperToolbar::deleteList();
	}
	
	protected function _adminEditToolbar()
	{
		Rb_HelperToolbar::apply();
		Rb_HelperToolbar::save();
		Rb_HelperToolbar::divider();
		Rb_HelperToolbar::cancel();
	}
}