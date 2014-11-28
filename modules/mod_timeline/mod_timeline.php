<?php
/**
 * @package     Timeline
 * @subpackage  mod_timeline
 *
 * @copyright   Copyright (C) Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

require_once JPATH_SITE.'/components/com_timeline/timeline/includes.php';
//Rb_Html::script(dirname(__FILE__).'/tmpl/js/modernizr-2.min.js');
//Rb_Html::script(dirname(__FILE__).'/tmpl/js/timeline.js');
Rb_Html::script(dirname(__FILE__).'/tmpl/js/owl.carousel.min.js');

Rb_Html::stylesheet(dirname(__FILE__).'/tmpl/css/owl.carousel.css');
//Rb_Html::stylesheet(dirname(__FILE__).'/tmpl/css/sense.timeline.light.css');
$itemCount = $params->def('item_count', 5);

if($itemCount)
{
	$items = TimelineHelperItems::getItems($itemCount);
}

//$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_timeline', $params->get('layout', 'default'));
