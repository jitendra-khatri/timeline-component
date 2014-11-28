<?php
/**
* @subpackage	Backend
* @contact 		jitendra.kumar@dotsquares.com
* @author 		Jitendra Khatri
*/
if(defined('_JEXEC')===false) die();

JHtml::_('behavior.framework');
?>

<form action="<?php echo $uri; ?>" method="post" id="adminForm" name="adminForm">
	<?php echo $this->loadTemplate('filter'); ?>
	<p>Working</p>

	<input type="hidden" name="filter_order" value="<?php echo $filter_order;?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $filter_order_Dir;?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
</form>
<?php 