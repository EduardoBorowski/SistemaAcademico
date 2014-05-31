<?php
/* @var $this ProfessorController */
/* @var $model Professor */

$this->breadcrumbs=array(
	'Professores'=>array('index'),
	$model->id_Professor,
);

$this->menu=array(
	array('label'=>'Listar Professores', 'url'=>array('index')),
	array('label'=>'Cadastrar Professor', 'url'=>array('create')),
	array('label'=>'Editar Professor', 'url'=>array('update', 'id'=>$model->id_Professor)),
	array('label'=>'Excluir Professor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_Professor),'confirm'=>'Você têm certeza que quer excluir este item?')),
	array('label'=>'Pesquisar Professores', 'url'=>array('admin')),
);
?>

<h1>Visualizar Professor #<?php echo $model->id_Professor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_Professor',
		'nome',
		'username',
		'password',
		array(
			'name'=>'Turmas', // give new column a name
			'type'=>'HTML', // set it to manual HTML
			'value'=>$model->turmasToString() // here is where you call the new function
		),
	),
)); ?>
