<?php
/* @var $this AulaController */
/* @var $model Aula */

$this->breadcrumbs=array(
	'Aulas'=>array('index'),
	'Pesquisar',
);

$this->menu=array(
	array('label'=>'Listar Aulas', 'url'=>array('index')),
	//array('label'=>'Registrar Aula', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#aula-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Pesquisar Aulas</h1>

<p>
Você pode, opcionalmente, digitar um operador de comparação (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
ou <b>=</b>) no início de cada um dos seus valores de pesquisa para especificar como a comparação deve ser feita.
</p>

<?php echo CHtml::link('Pesquisa Avançada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'aula-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
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
)); ?>
