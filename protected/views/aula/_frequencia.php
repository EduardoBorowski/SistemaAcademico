	<div class="view <?php echo $data->presenca ? 'presente' : 'ausente'; ?>">
	<?php 
	
	echo CHtml::encode($data->codAluno->nome); ?>
	
	<?php 
	if($data->presenca) {
		echo CHtml::link(CHtml::encode('Ausente'), array('ausente', 'id_Frequencia' => $data->id_Frequencia));
	} else {
		echo CHtml::link(CHtml::encode('Presente'), array('presente', 'id_Frequencia' => $data->id_Frequencia));
	}
	?>
	</div>
