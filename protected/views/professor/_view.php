<?php
/* @var $this ProfessorController */
/* @var $data Professor */
?>

<div class="view">

	<!-- <b><?php echo CHtml::encode($data->getAttributeLabel('id_Professor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_Professor), array('view', 'id'=>$data->id_Professor)); ?>
	<br /> -->

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->nome), array('view', 'id'=>$data->id_Professor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />
	
	<b class="porra">Turmas:</b><div class="porraloca">
	<?php echo $data->turmasToString(); ?>
	</div><br />

</div>