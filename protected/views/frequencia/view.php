<?php
/* @var $this FrequenciaController */
/* @var $model Frequencia */

$this->breadcrumbs=array(
	'Frequencias'=>array('index'),
	$model->id_Frequencia,
);

$this->menu=array(
	array('label'=>'List Frequencia', 'url'=>array('index')),
	array('label'=>'Create Frequencia', 'url'=>array('create')),
	array('label'=>'Update Frequencia', 'url'=>array('update', 'id'=>$model->id_Frequencia)),
	array('label'=>'Delete Frequencia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_Frequencia),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Frequencia', 'url'=>array('admin')),
);
?>

<h1>View Frequencia #<?php echo $model->id_Frequencia; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_Frequencia',
		'presenca',
		'cod_aula',
		'cod_aluno',
	),
)); ?>
