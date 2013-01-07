<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('textfield')); ?>:</b>
	<?php echo CHtml::encode($data->textfield); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberfield')); ?>:</b>
	<?php echo CHtml::encode($data->numberfield); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('boolfield')); ?>:</b>
	<?php echo CHtml::encode($data->boolfield); ?>
	<br />


</div>