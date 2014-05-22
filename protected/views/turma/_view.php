<?php
/* @var $this TurmaController */
/* @var $data Turma */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_Turma')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_Turma), array('view', 'id'=>$data->id_Turma)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cod_prof')); ?>:</b>
	<?php echo CHtml::encode($data->codProf->nome); ?>
	<br />


</div>