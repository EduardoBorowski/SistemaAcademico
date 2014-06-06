<?php
/* @var $this AulaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Aulas',
);

$this->menu=array(
	array('label'=>'Registrar Aula', 'url'=>array('create')),
	array('label'=>'Pesquisar Aulas', 'url'=>array('admin')),
);
?>

<h1>Aulas Ministradas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>