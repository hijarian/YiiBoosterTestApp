<?php
$this->breadcrumbs=array(
	'Json Gridview Demos',
);

$this->menu=array(
	array('label'=>'Create JsonGridviewDemo','url'=>array('create')),
	array('label'=>'Manage JsonGridviewDemo','url'=>array('admin')),
);
?>

<h1>Json Gridview Demos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
