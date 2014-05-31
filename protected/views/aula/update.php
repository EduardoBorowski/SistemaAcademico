<?php
/* @var $this AulaController */
/* @var $model Aula */

$this->breadcrumbs=array(
	'Aulas'=>array('index'),
	$model->id_Aula=>array('view','id'=>$model->id_Aula),
	'Editar',
);

$this->menu=array(
	array('label'=>'Listar Aulas', 'url'=>array('index')),
	array('label'=>'Registrar Aula', 'url'=>array('create')),
	array('label'=>'Visualizar Aula', 'url'=>array('view', 'id'=>$model->id_Aula)),
	array('label'=>'Pesquisar Aulas', 'url'=>array('admin')),
);
?>

<h1>Editar Aula <?php echo $model->id_Aula; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>