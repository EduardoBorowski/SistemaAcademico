<?php
/* @var $this AulaController */
/* @var $data Aula */
?>

<div class="view">

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('id_Aula')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_Aula), array('view', 'id'=>$data->id_Aula)); ?>
	<br /> -->

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('conteudo')); ?>:</b>
	<?php echo CHtml::encode($data->conteudo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dataAula')); ?>:</b>
	<?php $dataAulaCerta = date('d/m/Y', strtotime($data->dataAula));
		echo CHtml::encode($dataAulaCerta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horaInicio')); ?>:</b>
	<?php $horaInicioCerta = date('H:i', strtotime($data->horaInicio));
		echo CHtml::encode($horaInicioCerta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horaTermino')); ?>:</b>
	<?php $horaTerminoCerta = date('H:i', strtotime($data->horaTermino));
		echo CHtml::encode($horaTerminoCerta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_turma')); ?>:</b>
	<?php echo CHtml::encode($data->codTurma->descricao);
	/*CHtml::link(CHtml::encode($data->codTurma->descricao), 
			array('turma/view', 'id'=>$data->codTurma->id_Turma));*/ ?>
	<br />
	
	<b><?php echo CHtml::link("Visualizar Aula", array('view', 'id'=>$data->id_Aula)); ?></b>

</div>