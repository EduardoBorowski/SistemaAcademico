<?php
/* @var $this AulaController */
/* @var $model Aula */

$this->breadcrumbs=array(
	'Aulas'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Listar Aulas', 'url'=>array('index')),
	array('label'=>'Pesquisar Aulas', 'url'=>array('admin')),
);
?>

<h1>Registrar Aula</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>