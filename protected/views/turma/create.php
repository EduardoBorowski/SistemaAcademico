<?php
/* @var $this TurmaController */
/* @var $model Turma */

$this->breadcrumbs=array(
	'Turmas'=>array('index'),
	'Cadastrar',
);

$this->menu=array(
	array('label'=>'Listar Turmas', 'url'=>array('index')),
	array('label'=>'Pesquisar Turmas', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Turma</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>