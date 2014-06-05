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

	<b class="porra">Aulas:</b><div class="porraloca">
	<?php echo $data->aulasToString(); ?>
	</div><br />
	
	<b class="porra">Alunos:</b><div class="porraloca">
	<?php echo $data->alunosToString(); ?>
	</div><br />

</div>