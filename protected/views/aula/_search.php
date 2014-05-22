<?php
/* @var $this AulaController */
/* @var $model Aula */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_Aula'); ?>
		<?php echo $form->textField($model,'id_Aula'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'conteudo'); ?>
		<?php echo $form->textField($model,'conteudo',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dataAula'); ?>
		<?php echo $form->textField($model,'dataAula'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horaInicio'); ?>
		<?php echo $form->textField($model,'horaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'horaTermino'); ?>
		<?php echo $form->textField($model,'horaTermino'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_turma'); ?>
		<?php echo $form->textField($model,'cod_turma'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->