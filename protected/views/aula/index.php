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

<h1>Aulas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<!-- CGridView
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'aula-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'id_Aula',
		'descricao',
		'conteudo',
		array('name'=>'dataAula', 'value'=>'date("d/m/Y", strtotime($data->dataAula))'),
		array('name'=>'horaInicio', 'value'=>'date("H:i", strtotime($data->horaInicio))'),
		array('name'=>'horaTermino', 'value'=>'date("H:i", strtotime($data->horaTermino))'),
		array('name'=>'cod_turma', 'header'=>'Turma', 'value'=>'$data->codTurma->descricao'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?> -->