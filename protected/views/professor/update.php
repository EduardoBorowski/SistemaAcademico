<?php
/* @var $this ProfessorController */
/* @var $model Professor */

$this->breadcrumbs=array(
	'Professores'=>array('index'),
	$model->id_Professor=>array('view','id'=>$model->id_Professor),
	'Alterar',
);

$this->menu=array(
	array('label'=>'Listar Professores', 'url'=>array('index')),
	array('label'=>'Cadastrar Professor', 'url'=>array('create')),
	array('label'=>'Visualizar Professor', 'url'=>array('view', 'id'=>$model->id_Professor)),
	array('label'=>'Pesquisar Professores', 'url'=>array('admin')),
);
?>

<h1>Alterar Professor <?php echo $model->id_Professor; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>