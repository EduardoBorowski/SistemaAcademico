<?php
/* @var $this TurmaController */
/* @var $model Turma */

$this->breadcrumbs=array(
	'Turmas'=>array('index'),
	$model->id_Turma=>array('view','id'=>$model->id_Turma),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Turmas', 'url'=>array('index')),
	array('label'=>'Cadastrar Turma', 'url'=>array('create')),
	array('label'=>'Visualizar Turma', 'url'=>array('view', 'id'=>$model->id_Turma)),
	array('label'=>'Pesquisar Turmas', 'url'=>array('admin')),
);
?>

<h1>Editar Turma <?php echo $model->id_Turma; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>