<?php
/* @var $this TurmaController */
/* @var $data Turma */
?>

<div class="view">

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('id_Turma')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_Turma), array('view', 'id'=>$data->id_Turma)); ?>
	<br /> -->

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->descricao), array('view', 'id'=>$data->id_Turma)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_prof')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->codProf->nome), 
			array('professor/view', 'id'=>$data->codProf->id_Professor)); ?>
	<br />

	<!-- <b>Aulas:</b>
	<?php echo CHtml::encode($data->aulasToString()); ?>
	<br /> -->
	
	<!-- <b>Alunos:</b>
	<?php echo CHtml::encode($data->alunosToString()); ?>
	<br /> -->

</div>