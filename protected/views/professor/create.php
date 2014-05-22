<?php
/* @var $this ProfessorController */
/* @var $model Professor */

$this->breadcrumbs=array(
	'Professores'=>array('index'),
	'Cadastrar',
);

$this->menu=array(
	array('label'=>'Listar Professores', 'url'=>array('index')),
	array('label'=>'Pesquisar Professores', 'url'=>array('admin')),
);
?>

<h1>Cadastrar Professor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>