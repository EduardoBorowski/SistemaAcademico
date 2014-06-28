<?php
/* @var $this TurmaController */
/* @var $model Turma */

$this->breadcrumbs=array(
	'Turmas'=>array('index'),
	$model->id_Turma,
);

$this->menu=array(
	array('label'=>'Listar Turmas', 'url'=>array('index')),
	array('label'=>'Cadastrar Turma', 'url'=>array('create'), 'visible'=>Yii::app()->user->name == "admin"),
	array('label'=>'Editar Turma', 'url'=>array('update', 'id'=>$model->id_Turma), 'visible'=>Yii::app()->user->name == "admin"),
	array('label'=>'Excluir Turma', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_Turma),
			'confirm'=>'Você têm certeza que quer excluir este item?'), 'visible'=>Yii::app()->user->name == "admin"),
	array('label'=>'Pesquisar Turmas', 'url'=>array('admin')),
);
?>

<h1>Visualizar Turma #<?php echo $model->id_Turma; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_Turma',
		'descricao',
		array('label'=>'Professor', 'value'=>$model->codProf->nome, 'visible'=>Yii::app()->user->name != "admin",),
		array('label'=>'Professor',
				'type'=>'raw',
				'visible'=>Yii::app()->user->name == "admin",
				'value'=>CHtml::link($model->codProf->nome, array('professor/view','id'=>$model->codProf->id_Professor))),
		/*array(
			'name'=>'Aulas',
			'type'=>'HTML',
			'value'=>$model->aulasToString()
		),
		array(
			'name'=>'Alunos',
			'type'=>'HTML',
			'value'=>$model->alunosToString()
		),*/
	),
)); ?>

<br />
<h3>Aulas Ministradas para esta Turma</h3>
<?php echo CHtml::link('Adicionar aula', array('aula/create', 'cod_turma'=>$model->id_Turma)); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'aula-grid',
		'dataProvider'=>$aulasProvider,
		'summaryText'=>'Aulas Ministradas: {count}',
		'columns'=>array(
			//'id_Aula',
			'descricao',
			'conteudo',
			array('name'=>'dataAula', 'value'=>'date("d/m/Y", strtotime($data->dataAula))'),
			array('name'=>'horaInicio', 'value'=>'date("H:i", strtotime($data->horaInicio))'),
			array('name'=>'horaTermino', 'value'=>'date("H:i", strtotime($data->horaTermino))'),
			//array('name'=>'cod_turma', 'header'=>'Turma', 'value'=>'$data->codTurma->descricao'),
			array(
				'class'=>'CButtonColumn',
				'template'=>'{view}{update}{delete}',
				'buttons' => array(
					'view'=>array(
						'url'=>'$this->grid->controller->createUrl("/aula/view", array("id"=>$data->primaryKey))',
					),
					'update'=>array(
						'url'=>'$this->grid->controller->createUrl("/aula/update", array("id"=>$data->primaryKey))',
					),
					'delete'=>array(
						'url'=>'$this->grid->controller->createUrl("/aula/delete", array("id"=>$data->primaryKey))',
					)
				)
			),
		),
	));
?>

<h3>Alunos matriculados</h3>
<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'aluno-grid',
		'dataProvider'=>$alunosProvider,
		'summaryText'=>'Alunos Matriculados: {count}',
		'columns'=>array(
			//'id_Aluno',
			'nome',
			'email',
			array(
				'class'=>'CButtonColumn',
				'template'=>'{view}',
				'buttons' => array(
					'view'=>array(
						'url'=>'$this->grid->controller->createUrl("/aluno/view", array("id"=>$data->primaryKey))',
					),
					/*'update'=>array(
						'url'=>'$this->grid->controller->createUrl("/aluno/update", array("id"=>$data->primaryKey))',
					),
					'delete'=>array(
						'url'=>'$this->grid->controller->createUrl("/aluno/delete", array("id"=>$data->primaryKey))',
					)*/
				)
			),
		),
	));
?>