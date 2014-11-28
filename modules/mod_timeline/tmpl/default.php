<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<style>
a {
    color: #FFF;
    text-decoration: none;
    text-align: center;
}
a:hover, a:focus {
    color: #FFFFFF;
    text-align: center;
}
a:active, a:hover {
    outline: 0 none;
    text-decoration : none;
}
</style>
<div class="timeline-wrap" id="timeline-0">
	<div class="row-fluid hidden-phone">
		<div class="breadcrumb clearfix">
			<?php $badgeWidth = 100/count($items);?>
			<?php foreach($items as $index => $item) { ?>
				<div style="width:<?php echo $badgeWidth.'%';?>; float:left; text-align: center;">
					<span class="goToItem label label-info" style="cursor:pointer" data-index="<?php echo $index;?>">
						<?php echo ucfirst(strip_tags($item['short_title']));?>
					</span>
				</div>
			<?php }?>
		</div>
	</div>
	<div class="row-fluid visible-phone DemoBS2">
		<div class="panel-group" id="accordion">
			<?php foreach($items as $index => $item) { ?>
					<div class="panel panel-primary">
						<div class="panel-heading">
							<div data-toggle="collapse" data-parent="#accordion" href="#accordion<?php echo $index;?>">
								<h4 class="panel-title">
									<?php echo ucfirst(strip_tags($item['short_title']));?>
								</h4>
							</div>
						</div>
						
						<div id="accordion<?php echo $index;?>" class="panel-collapse collapse">
							<div class="panel-body">
								<?php echo ucfirst(strip_tags($item['description']));?>
							</div>
						</div>
					</div>
			<?php }?>
		</div>
	</div>
	<div class="owl-carousel hidden-phone">
	<?php foreach($items as $index => $item) { ?>
		<div class="timeline-event" id="timeline-event-0">
<!--			<h4>-->
				<?php //echo ucfirst($item['title']);?>
<!--			</h4>-->
			<div class="well" style="text-align: justify;">
				<?php echo ucfirst($item['description']);?>
			</div>
		</div>		
	<?php }?>
	</div>
	<div class="clearfix"></div>
</div>

<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery(".owl-carousel").owlCarousel({
		items:1,
	    loop:false,
	    margin:30
	});
	
	jQuery(".goToItem").on('click', function(){
		var slideIndex = jQuery(this).attr('data-index');
		var owl = jQuery('.owl-carousel');
		owl.trigger('to.owl.carousel', [slideIndex] );

		//Remove Green color from all tabs
		var tabElements = jQuery(".goToItem");
		jQuery.each(tabElements, function(index, element){
			element.removeClass("label-success");
			element.removeClass("arrow-up");
			element.addClass("label-info");
		});

		jQuery(this).attr("class", "goToItem label label-success arrow-up");
				
	});

	function callback(event) {
		var indexOfActiveSlide = event.item.index;
		var headerElement = jQuery("span[data-index="+indexOfActiveSlide);
	}

	tabElements = jQuery(".goToItem");	
	jQuery(tabElements[0]).attr("class", "goToItem label label-success");

	jQuery(".mobileGoToItem").popover({'data-placement' : 'bootom'});

	jQuery(".mobileGoToItem").on('click', function(){
		jQuery(".mobileGoToItem").popover('destroy');
		jQuery(this).popover('show');
	});
});
</script>