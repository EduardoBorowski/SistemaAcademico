<?php
/* @var $this FrequenciaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Frequencias',
);

$this->menu=array(
	array('label'=>'Create Frequencia', 'url'=>array('create')),
	array('label'=>'Manage Frequencia', 'url'=>array('admin')),
);
?>

<h1>Frequencias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
