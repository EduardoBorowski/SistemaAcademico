<?php
/* @var $this AlunoController */
/* @var $model Aluno */

$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	$model->id_Aluno=>array('view','id'=>$model->id_Aluno),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Alunos', 'url'=>array('index')),
	array('label'=>'Cadastrar Aluno', 'url'=>array('create')),
	array('label'=>'Visualizar Aluno', 'url'=>array('view', 'id'=>$model->id_Aluno)),
	array('label'=>'Pesquisar Alunos', 'url'=>array('admin')),
);
?>

<h1>Editar Aluno <?php echo $model->id_Aluno; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>