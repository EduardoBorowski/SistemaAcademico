<?php
/* @var $this AlunoController */
/* @var $model Aluno */

$this->breadcrumbs=array(
	'Alunos'=>array('index'),
	'Cadastrar',
);

$this->menu=array(
	array('label'=>'Listar Alunos', 'url'=>array('index')),
	array('label'=>'Pesquisar Alunos', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Aluno</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>