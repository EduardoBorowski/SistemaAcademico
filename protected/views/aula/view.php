<?php
/* @var $this AulaController */
/* @var $model Aula */

$this->breadcrumbs=array(
	'Aulas'=>array('index'),
	$model->id_Aula,
);

$this->menu=array(
	array('label'=>'Listar Aulas', 'url'=>array('index')),
	array('label'=>'Registrar Aula', 'url'=>array('create')),
	array('label'=>'Editar Aula', 'url'=>array('update', 'id'=>$model->id_Aula)),
	array('label'=>'Excluir Aula', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_Aula),'confirm'=>'Você têm certeza que quer excluir este item?')),
	array('label'=>'Pesquisar Aulas', 'url'=>array('admin')),
);
?>

<h1>Visualizar Aula #<?php echo $model->id_Aula; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_Aula',
		'descricao',
		'conteudo',
		array('name'=>'dataAula', 'value'=>date("d/m/Y", strtotime($model->dataAula))),
		array('name'=>'horaInicio', 'value'=>date("H:i", strtotime($model->horaInicio))),
		array('name'=>'horaTermino', 'value'=>date("H:i", strtotime($model->horaTermino))),
		//array('label'=>'Turma', 'value'=>$model->codTurma->descricao),
		array('label'=>'Turma', 
				'type'=>'raw', 
				'value'=>CHtml::link($model->codTurma->descricao, array('turma/view','id'=>$model->codTurma->id_Turma))),
	),
)); ?>
