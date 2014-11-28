<?php
/**
* @subpackage	Backend
* @contact 		jitendra.kumar@dotsquares.com
* @author 		Jitendra Khatri
*/

if(defined('_JEXEC')===false) die(); ?>

<?php 

Rb_HelperTemplate::loadSetupEnv();
Rb_HelperTemplate::loadSetupScripts();

//Rb_Html::script(VALOGS_PATH_CORE_MEDIA.'/js/valogs.js');
Rb_Html::script(dirname(__FILE__).'/_media/admin.js');

// load bootsrap css
//Rb_Html::_('bootstrap.loadcss');
//Rb_Html::stylesheet(dirname(__FILE__).'/_media/admin.css');

