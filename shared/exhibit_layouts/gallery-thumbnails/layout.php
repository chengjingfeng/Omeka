<?php 
	//Name: Gallery Thumbnails;
	//Description: Displays a gallery of up to 12 items;
	//Author: Jeremy Boggs; 
?>

<div class="gallery-thumbnails">

	<div class="exhibit-item">
		<?php $item = page_item(1); ?>
		<a href="<?php echo uri('items/show/'.$item->id); ?>" class="permalink"><?php thumbnail($item->Files[0]); ?></a>
	</div>
	<div class="exhibit-item">
		<?php $item = page_item(2); ?>
		<a href="<?php echo uri('items/show/'.$item->id); ?>" class="permalink"><?php thumbnail($item->Files[0]); ?></a>
	</div>
	<div class="exhibit-item">
		<?php $item = page_item(3); ?>
		<a href="<?php echo uri('items/show/'.$item->id); ?>" class="permalink"><?php thumbnail($item->Files[0]); ?></a>
	</div>
	<div class="exhibit-item">
		<?php $item = page_item(4); ?>
		<a href="<?php echo uri('items/show/'.$item->id); ?>" class="permalink"><?php thumbnail($item->Files[0]); ?></a>
	</div>
	<div class="exhibit-item">
		<?php $item = page_item(5); ?>
		<a href="<?php echo uri('items/show/'.$item->id); ?>" class="permalink"><?php thumbnail($item->Files[0]); ?></a>
	</div>
	<?php if($item = page_item(6)):?>
	<div class="exhibit-item">
		<?php $item = page_item(6); ?>
		<a href="<?php echo uri('items/show/'.$item->id); ?>" class="permalink"><?php thumbnail($item->Files[0]); ?></a>
	</div>
	<?php endif; ?>
	<?php if($item = page_item(7)):?>
	<div class="exhibit-item">
		<?php $item = page_item(7); ?>
		<a href="<?php echo uri('items/show/'.$item->id); ?>" class="permalink"><?php thumbnail($item->Files[0]); ?></a>
	</div>
	<?php endif; ?>
	<?php if($item = page_item(8)):?>
	<div class="exhibit-item">
		<?php $item = page_item(8); ?>
		<a href="<?php echo uri('items/show/'.$item->id); ?>" class="permalink"><?php thumbnail($item->Files[0]); ?></a>
	</div>
	<?php endif; ?>
	<?php if($item = page_item(9)):?>
	<div class="exhibit-item">
		<?php $item = page_item(9); ?>
		<a href="<?php echo uri('items/show/'.$item->id); ?>" class="permalink"><?php thumbnail($item->Files[0]); ?></a>
	</div>
	<?php endif; ?>
	<?php if($item = page_item(10)):?>
	<div class="exhibit-item">
		<?php $item = page_item(10); ?>
		<a href="<?php echo uri('items/show/'.$item->id); ?>" class="permalink"><?php thumbnail($item->Files[0]); ?></a>
	</div>
	<?php endif; ?>
	<?php if($item = page_item(11)):?>
	<div class="exhibit-item">
		<?php $item = page_item(11); ?>
		<a href="<?php echo uri('items/show/'.$item->id); ?>" class="permalink"><?php thumbnail($item->Files[0]); ?></a>
	</div>
	<?php endif; ?>
	<?php if($item = page_item(12)):?>
	<div class="exhibit-item">
		<?php $item = page_item(12); ?>
		<a href="<?php echo uri('items/show/'.$item->id); ?>" class="permalink"><?php thumbnail($item->Files[0]); ?></a>
	</div>
	<?php endif; ?>
	
</div>