<?php
/* @var $this ProfessorController */
/* @var $model Professor */

$this->breadcrumbs=array(
	'Professores'=>array('index'),
	'Pesquisar',
);

$this->menu=array(
	array('label'=>'Listar Professores', 'url'=>array('index')),
	array('label'=>'Cadastrar Professor', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#professor-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Pesquisar Professores</h1>

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
	'id'=>'professor-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_Professor',
		'nome',
		'username',
		'password',
		array(
			'header'=>'Turmas', // give new column a header
			'type'=>'HTML', // set it to manual HTML
			'value'=>'$data->turmasToString()' // here is where you call the new function
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
