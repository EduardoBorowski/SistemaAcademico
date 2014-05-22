<?php
/* @var $this TurmaController */
/* @var $model Turma */

$this->breadcrumbs=array(
	'Turmas'=>array('index'),
	$model->id_Turma,
);

$this->menu=array(
	array('label'=>'Listar Turmas', 'url'=>array('index')),
	array('label'=>'Cadastrar Turma', 'url'=>array('create')),
	array('label'=>'Alterar Turma', 'url'=>array('update', 'id'=>$model->id_Turma)),
	array('label'=>'Excluir Turma', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_Turma),'confirm'=>'Você têm certeza que quer excluir este item?')),
	array('label'=>'Pesquisar Turmas', 'url'=>array('admin')),
);
?>

<h1>Visualizar Turma #<?php echo $model->id_Turma; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_Turma',
		'descricao',
		array('label'=>'Professor', 'value'=>$model->codProf->nome),
	),
)); ?>
