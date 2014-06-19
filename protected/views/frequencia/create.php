<?php
/* @var $this FrequenciaController */
/* @var $model Frequencia */

$this->breadcrumbs=array(
	'Frequencias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Frequencia', 'url'=>array('index')),
	array('label'=>'Manage Frequencia', 'url'=>array('admin')),
);
?>

<h1>Create Frequencia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>