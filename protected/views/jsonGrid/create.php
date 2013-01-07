<?php
$this->breadcrumbs=array(
	'Json Gridview Demos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JsonGridviewDemo','url'=>array('index')),
	array('label'=>'Manage JsonGridviewDemo','url'=>array('admin')),
);
?>

<h1>Create JsonGridviewDemo</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>