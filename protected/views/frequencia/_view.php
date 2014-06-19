<?php
/* @var $this FrequenciaController */
/* @var $data Frequencia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Frequencia')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_Frequencia), array('view', 'id'=>$data->id_Frequencia)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('presenca')); ?>:</b>
	<?php echo CHtml::encode($data->presenca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_aula')); ?>:</b>
	<?php echo CHtml::encode($data->cod_aula); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_aluno')); ?>:</b>
	<?php echo CHtml::encode($data->cod_aluno); ?>
	<br />


</div>