<?php
/**
* @contact 		jitendra.kumar@dotsquares.com
* @author		Jitendra Khatri
*/
if(defined('_JEXEC')===false) die(); ?>

<?php 

Rb_HelperTemplate::loadSetupEnv();
Rb_HelperTemplate::loadSetupScripts();

//Rb_Html::script(JPATH_SITE.'/administrator/components/com_valogs/templates/default/_media/admin.js');

// load bootsrap css
Rb_Html::_('bootstrap.loadcss');
//Rb_Html::stylesheet(dirname(__FILE__).'/_media/admin.css');

