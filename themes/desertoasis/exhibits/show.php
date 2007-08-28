<?php head(); ?>

<div id="primary">
	<div id="exhibit-page" class="cbb">
	
	<div><!--exhibit header information-->
	<h2 class="summary"><?php echo h($exhibit->title); ?></h2>
	<?php section_nav(); ?>
	<?php page_nav(); ?>
	</div>

	<div class="exhibit-content"><!--exhibit content-->
	<?php render_exhibit_page(); ?>
	</div>
	
	</div><!--end exhibit page-->
</div><!--end primary-->
	
<div id="secondary">
	<?php common('sidebar'); ?>