<?php
/**
* @subpackage	Backend
* @contact 		jitendra.kumar@dotsquares.com
* @author 		Jitendra Khatri
*/

if(defined('_JEXEC')===false) die();

JHtml::_('behavior.tooltip');
JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select.multiselect');
?>
<form action="<?php echo $uri; ?>" method="post" name="adminForm" id="adminForm" class="rb-validate-form" enctype="multipart/form-data">
	<div class="row-fluid">
		<div class="span9">
			<p>Working</p>
		</div>
	</div>
	<input type="hidden" name="task" value="save" />
	<input type="hidden" name="boxchecked" value="1" />		
</form>
<?php 