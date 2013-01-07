<?php
$this->breadcrumbs=array(
	'Json Gridview Demos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JsonGridviewDemo','url'=>array('index')),
	array('label'=>'Create JsonGridviewDemo','url'=>array('create')),
	array('label'=>'View JsonGridviewDemo','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage JsonGridviewDemo','url'=>array('admin')),
);
?>

<h1>Update JsonGridviewDemo <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>