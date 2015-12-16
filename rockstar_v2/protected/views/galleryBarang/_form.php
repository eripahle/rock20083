<?php
/* @var $this GalleryBarangController */
/* @var $model GalleryBarang */
/* @var $form CActiveForm */
?>
<?php
/* @var $this GalleryPribadiController */
/* @var $model GalleryPribadi */
/* @var $form CActiveForm */
?>


<!-- Begin Body -->
<div style="min-width:500px;">
	<!-- <div class="row"> -->
	<!-- left side column -->
	<!--mid column-->
	
	<?php $this->renderpartial('../layouts/side-komunitas');  ?>
	<!-- right content column-->
	<div class="col-md-7" >
		<div class="panel" style="min-width=500px;">
			<div class="panel-heading text-center" style="background-color:#111;color:#fff;">UPLOAD GALLERY PRIBADI</div>   
			<div class="panel-body">

				<div class="row">
					<div class="col-sm-offset-1 col-sm-10" style="border: 1px solid #ccc;">
						<div class="form">

							<?php $form=$this->beginWidget('CActiveForm', array(
								'id'=>'gallery-barang-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
								'enableAjaxValidation'=>false,
								'htmlOptions' => array(
									'enctype' => 'multipart/form-data',)
								)); ?>
								<div class="row">
									<?php echo $form->labelEx($model,'NAMA_GALLERY'); ?>
									<?php echo $form->textField($model,'NAMA_GALLERY',array('size'=>50,'maxlength'=>50)); ?>
									<?php echo $form->error($model,'NAMA_GALLERY'); ?>
								</div>

								<div class="row">
									<?php echo $form->labelEx($model,'KODE_GALLERY'); ?>
									<?php echo $form->textField($model,'KODE_GALLERY',array('size'=>32,'maxlength'=>32)); ?>
									<?php echo $form->error($model,'KODE_GALLERY'); ?>
								</div>

								<div class="row">
									<?php echo $form->label($model,'JENIS_GALLERY');
									$jenisGallery = array('Movie'=>'Movie','Picture'=>'Picture','Audio'=>'Audio','Event'=>'Event','CD/DVD'=>'CD/DVD');
									echo $form->dropDownList($model, 'JENIS_GALLERY', $jenisGallery, array('prompt' => '-- Pilih JENIS GALLERY --'));
									?>
										
								</div>

								<div class="row">
								<?php echo $form->labelEx($model,'Upload Gambar Sampel'); ?>
									<?php echo CHtml::activeFileField($model, 'SAMPEL_GALLERY',array('rows'=>6, 'cols'=>50)); ?> 
									<?php echo $form->error($model,'SAMPEL_GALLERY'); ?>
								</div>
								<div class="row">
									<?php echo $form->labelEx($model,'Upload Gambar Gallery'); ?>
									<?php echo CHtml::activeFileField($model, 'GAMBAR_GALLERY',array('rows'=>6, 'cols'=>50)); ?> 
									<?php echo $form->error($model,'GAMBAR_GALLERY'); ?>
								</div>

								<div class="row">
									<?php echo $form->labelEx($model,'HARGA_POINT'); ?>
									<?php echo $form->textField($model,'HARGA_POINT',array('size'=>20,'maxlength'=>20)); ?>
									<?php echo $form->error($model,'HARGA_POINT'); ?>
								</div>

								<div class="row">
									<?php echo $form->labelEx($model,'HARGA_POINT_BONUS'); ?>
									<?php echo $form->textField($model,'HARGA_POINT_BONUS',array('size'=>20,'maxlength'=>20)); ?>
									<?php echo $form->error($model,'HARGA_POINT_BONUS'); ?>
								</div>

								<div class="row">
									<?php echo $form->labelEx($model,'HARGA_CASH'); ?>
									<?php echo $form->textField($model,'HARGA_CASH',array('size'=>20,'maxlength'=>20)); ?>
									<?php echo $form->error($model,'HARGA_CASH'); ?>
								</div>

								<div class="row buttons">
									<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
								</div>

								<?php $this->endWidget(); ?>

							</div><!-- form -->
						</div>
					</div><!--/panel-body-->
				</div><!--/panel-->
				<!--/end right column-->
				<Br>
				</div> 
			</div>

			<?php $this->renderpartial('../layouts/side-social-feed');  ?>
		</div>
		<!-- </div> -->
		<!-- </div> -->
