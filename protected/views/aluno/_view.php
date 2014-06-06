<?php
/* @var $this AlunoController */
/* @var $data Aluno */
?>

<div class="view">

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('id_Aluno')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_Aluno), array('view', 'id'=>$data->id_Aluno)); ?>
	<br /> -->

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_turma')); ?>:</b>
	<?php echo CHtml::encode($data->codTurma->descricao);
	/*CHtml::link(CHtml::encode($data->codTurma->descricao), 
			array('turma/view', 'id'=>$data->codTurma->id_Turma));*/ ?>
	<br />

	<b><?php echo CHtml::link("Visualizar Aluno", array('view', 'id'=>$data->id_Aluno)); ?></b>

</div>