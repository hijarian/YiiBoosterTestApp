<?php
$this->breadcrumbs=array(
	'Json Gridview Demos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List JsonGridviewDemo','url'=>array('index')),
	array('label'=>'Create JsonGridviewDemo','url'=>array('create')),
	array('label'=>'Update JsonGridviewDemo','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete JsonGridviewDemo','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JsonGridviewDemo','url'=>array('admin')),
);
?>

<h1>View JsonGridviewDemo #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'textfield',
		'numberfield',
		'boolfield',
	),
)); ?>
