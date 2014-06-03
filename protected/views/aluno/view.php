<?php
/* @var $this AlunoController */
/* @var $model Aluno */

$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	$model->id_Aluno,
);

$this->menu=array(
	array('label'=>'Listar Alunos', 'url'=>array('index')),
	array('label'=>'Cadastrar Aluno', 'url'=>array('create'), 'visible'=>Yii::app()->user->name == "admin"),
	array('label'=>'Editar Aluno', 'url'=>array('update', 'id'=>$model->id_Aluno), 'visible'=>Yii::app()->user->name == "admin"),
	array('label'=>'Excluir Aluno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_Aluno),
			'confirm'=>'Você têm certeza que quer excluir este item?'), 'visible'=>Yii::app()->user->name == "admin"),
	array('label'=>'Pesquisar Alunos', 'url'=>array('admin')),
);
?>

<h1>Visualizar Aluno #<?php echo $model->id_Aluno; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_Aluno',
		'nome',
		'email',
		array('label'=>'Turma', 'value'=>$model->codTurma->descricao),
	),
)); ?>
