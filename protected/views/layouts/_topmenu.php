<?php /* @var $this Controller */ ?>

<div id="mainmenu" class="navbar">
	<div class="navbar-inner">

	<?php $this->widget('zii.widgets.CMenu',array(
		'items'=> require(__DIR__.DS.'__topmenu_items.php'),
		'htmlOptions' => array(
			'class' => 'nav'
		)
	)); ?>

	</div>
</div><!-- mainmenu -->
