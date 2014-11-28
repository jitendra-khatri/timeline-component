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
	<?php //echo $this->loadTemplate('filter'); ?>
	<table class="table table-striped">
		<thead>
			<!-- TABLE HEADER START -->
			<tr>
				<th  width="1%">
					<input type="checkbox" name="toggle" value="" onclick="Joomla.checkAll(this);" />
				</th>
				
				<th class="default-grid-sno">
					<?php echo TimelineHtml::_('grid.sort', "ID", 'items_id', $filter_order_Dir, $filter_order);?>
				</th>
				<th><?php echo TimelineHtml::_('grid.sort', "Title", 'title', $filter_order_Dir, $filter_order);?></th>
				<th><?php echo TimelineHtml::_('grid.sort', "Published", 'published', $filter_order_Dir, $filter_order);?></th>
				<th><?php echo TimelineHtml::_('grid.sort', "Creation Date", 'created_date', $filter_order_Dir, $filter_order);?></th>
				<th><?php echo Rb_Text::_("Order");?></th>
			</tr>
		<!-- TABLE HEADER END -->
		</thead>
		
		<tbody>
		<!-- TABLE BODY START -->
			<?php $count= $limitstart;
			foreach ($records as $index => $item):?>
				<tr class="<?php echo "row".$count%2; ?>">								
					<th class="default-grid-chkbox">
				    	<?php echo TimelineHtml::_('grid.id', $count, $item->items_id ); ?>
				    </th>				
					<td>
						<?php echo $item->items_id;?>					
					</td>
					<td>
						<div><?php echo TimelineHtml::link($uri.'&task=edit&id='.$item->items_id, $item->title);?></div>
					</td>
					<td><?php echo TimelineHtml::_("rb_html.boolean.grid", $item, 'published', $count, 'icon-16-allow.png', 'publish_x.png', '', $langPrefix='COM_TIMELINE');?></td>
					<td><?php echo $item->created_date;?></td>
					<td>
						<span><?php echo $pagination->orderUpIcon( $count , true, 'orderup', Rb_Text::_('Up')); ?></span>
						<span><?php echo $pagination->orderDownIcon( $count , count($records), true , 'orderdown', Rb_Text::_('Down'), true ); ?></span>
					</td>
				</tr>
				<?php $count++;?>
			<?php endforeach;?>
		<!-- TABLE BODY END -->
		</tbody>
		<tfoot>
			<tr>
				<td colspan="5"><?php echo $pagination->getListFooter(); ?></td>
				<td>
					<?php   $options = array(); 
							$data = array('10' => '10',
										  '20' => '20',
										  '30' => '30',
										  '40' => '40',
										  '50' => '50',
										  '60' => '60',
										  '70' => '70',
										  '80' => '80',
										  '90' => '90',
										  '100' => '100',
										  'All' => 'All');?>
					<?php
						foreach($data as $value => $label){
							$options[] = TimelineHtml::_('select.option', $value, $label);
						}?>
						<select onchange="Joomla.submitform();" size="1" class="inputbox input-mini" name="limit">
							<?php foreach ($options as $key => $option){
								$selected = ($option->text == $limit) ? 'selected="selected"' : '';
								echo '<option value="'.$option->value.'"'.$selected.'>'.$option->text.'</option>';
		
							}?>
						</select>
				</td>
			</tr>
		</tfoot>
	</table>

	<input type="hidden" name="filter_order" value="<?php echo $filter_order;?>" />
	<input type="hidden" name="filter_order_Dir" value="<?php echo $filter_order_Dir;?>" />
	<input type="hidden" name="task" value="" />
	<input type="hidden" name="boxchecked" value="0" />
</form>