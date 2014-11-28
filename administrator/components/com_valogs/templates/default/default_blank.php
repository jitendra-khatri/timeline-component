<?php 
/**
* @subpackage	Frontend
* @contact 		jitendra.kumar@dotsquares.com
* @author 		Jitendra Khatri
*/
if(defined('_JEXEC')===false) die();?>

<div class="pp-admin-blankgrid">
<form action="<?php echo $uri; ?>" method="post" name="adminForm">
	<?php // echo $this->loadTemplate('filter'); ?>
	<div class="pp-message pp-grid_12">
		<p class="pp-title"> <?php echo $heading; ?></p>
		<p class="pp-description"><?php echo $msg; ?></p>
	</div>
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
</form>
</div>
<?php 