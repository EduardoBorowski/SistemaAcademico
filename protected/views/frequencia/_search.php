<?php
/* @var $this FrequenciaController */
/* @var $model Frequencia */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_Frequencia'); ?>
		<?php echo $form->textField($model,'id_Frequencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'presenca'); ?>
		<?php echo $form->textField($model,'presenca'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_aula'); ?>
		<?php echo $form->textField($model,'cod_aula'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cod_aluno'); ?>
		<?php echo $form->textField($model,'cod_aluno'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->