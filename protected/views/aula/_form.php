<?php
/* @var $this AulaController */
/* @var $model Aula */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'aula-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'conteudo'); ?>
		<?php echo $form->textArea($model,'conteudo',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'conteudo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dataAula'); ?>
		<?php //echo $form->textField($model,'dataAula'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
				'attribute'=>'dataAula',
				'model' => $model,
				'language' => 'pt',
				'options'=>array(
						'dateFormat' => 'yy-mm-dd',
				),
				'htmlOptions'=>array('readonly'=>true)
		)); ?>
		<?php echo $form->error($model,'dataAula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horaInicio'); ?>
		<?php echo $form->textField($model,'horaInicio',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'horaInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'horaTermino'); ?>
		<?php echo $form->textField($model,'horaTermino',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'horaTermino'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cod_turma'); ?>
		<?php echo $form->dropDownList($model,'cod_turma', CHtml::listData(Turma::model()->findAll(), 'id_Turma', 'descricao')); ?>
		<?php echo $form->error($model,'cod_turma'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->