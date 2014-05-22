<?php
/* @var $this ProfessorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Professores',
);

$this->menu=array(
	array('label'=>'Cadastrar Professor', 'url'=>array('create')),
	array('label'=>'Pesquisar Professores', 'url'=>array('admin')),
);
?>

<h1>Professores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
