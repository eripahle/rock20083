						<div class="form">
							<?php $form=$this->beginWidget('CActiveForm', array(
								'id'=>'registrasi-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
								'enableAjaxValidation'=>false,
								'htmlOptions'=>array('enctype'=>'multipart/form-data','name'=>'registrasi_form',),

								)); ?>

								<p class="note">Form Dengan  <span class="required">*</span> Harus Diisi.</p>

								<?php echo $form->errorSummary(array($model)); ?>
								<fieldset>
									<legend>Data Diri</legend>

									<div class="row">
										<?php echo $form->labelEx($model,'NAMA_LENGKAP'); ?>
										<?php echo $form->textField($model,'NAMA_LENGKAP',array('size'=>50,'maxlength'=>50)); ?>
										<?php echo $form->error($model,'NAMA_LENGKAP'); ?>
									</div>

									<div class="row">
										<?php echo $form->labelEx($model,'TEMPAT'); ?>
										<?php echo $form->textField($model,'TEMPAT',array('size'=>30,'maxlength'=>30)); ?>
										<?php echo $form->error($model,'TEMPAT'); ?>
									</div>

									<div class="row">
										<?php echo $form->labelEx($model,'TANGGAL'); ?>
										<?php //echo $form->textField($model,'TANGGAL'); ?>
										<?php $this->widget('zii.widgets.jui.CJuiDatePicker',array(
											'name'=>'TANGGAL',
											'language'=>'',
											'model'=>$model,
											'attribute'=>'TANGGAL',
					//'mode'=>'date',
											'options'=>array('showAnim'=>'fold','changeYear'=>true,'yearRange'=>'1950:'.date("Y"),'changeMonth'=>true),
											'htmlOptions'=>array('readonly'=>true),
											));?>
											<?php echo $form->error($model,'TANGGAL'); ?>

										</div>

										<div class="row">
											<?php echo $form->labelEx($model,'NEGARA'); ?>
											<?php echo $form->textField($model,'NEGARA',array('size'=>40,'maxlength'=>40)); ?>
											<?php echo $form->error($model,'NEGARA'); ?>
										</div>

										<div class="row">
											<?php echo $form->labelEx($model,'PROVINSI'); ?>
											<?php echo $form->textField($model,'PROVINSI',array('size'=>40,'maxlength'=>40)); ?>
											<?php echo $form->error($model,'PROVINSI'); ?>
										</div>

										<div class="row">
											<?php echo $form->labelEx($model,'KOTA'); ?>
											<?php echo $form->textField($model,'KOTA',array('size'=>40,'maxlength'=>40)); ?>
											<?php echo $form->error($model,'KOTA'); ?>
										</div>

										<div class="row">
											<?php echo $form->labelEx($model,'ALAMAT'); ?>
											<?php echo $form->textArea($model,'ALAMAT',array('rows'=>6, 'cols'=>50)); ?>
											<?php echo $form->error($model,'ALAMAT'); ?>
										</div>

										<div class="row">
											<?php echo $form->labelEx($model,'KODE_POS'); ?>
											<?php echo $form->textField($model,'KODE_POS',array('size'=>5,'maxlength'=>5)); ?>
											<?php echo $form->error($model,'KODE_POS'); ?>
										</div>

										<div class="row">
											<?php echo $form->labelEx($model,'NO_TELP'); ?>
											<?php echo $form->textField($model,'NO_TELP',array('size'=>15,'maxlength'=>15)); ?>
											<?php echo $form->error($model,'NO_TELP'); ?>
										</div>

										<div class="row">
											<?php echo $form->labelEx($model,'EMAIL'); ?>
											<?php echo $form->textField($model,'EMAIL',array('size'=>30,'maxlength'=>30)); ?>
											<?php echo $form->error($model,'EMAIL'); ?>
										</div>

										<div class="row">
											<?php echo $form->labelEx($model,'TWITTER'); ?>
											<?php echo $form->textField($model,'TWITTER',array('size'=>30,'maxlength'=>30)); ?>
											<?php echo $form->error($model,'TWITTER'); ?>
										</div>

										<div class="row">
											<?php echo $form->labelEx($model,'NAMA_IBU'); ?>
											<?php echo $form->textField($model,'NAMA_IBU',array('size'=>30,'maxlength'=>30)); ?>
											<?php echo $form->error($model,'NAMA_IBU'); ?>
										</div>

										<div class="row">
											<?php echo $form->labelEx($model,'NAMA_AYAH'); ?>
											<?php echo $form->textField($model,'NAMA_AYAH',array('size'=>30,'maxlength'=>30)); ?>
											<?php echo $form->error($model,'NAMA_AYAH'); ?>
										</div>

										<!-- <div class="row">
											<?php echo $form->labelEx($model,'CORP'); ?>
											<?php echo $form->textField($model,'CORP',array('size'=>30,'maxlength'=>30)); ?>
											<?php echo $form->error($model,'CORP'); ?>
										</div> -->
										
										

									</fieldset>
									<div class="row buttons">
										<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
									</div>

									<?php $this->endWidget(); ?>

								</div><!-- form -->
							