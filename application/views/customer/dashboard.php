<?php if (count($data)==0) { ?>
<div class="col-lg-3 col-xs-3">
	<div class="small-box bg-aqua">
		<div class="inner">
			<h3>0</h3>
			<p>Nilai Ujian Bahasa Indonesia</p>
		</div>
		<div class="icon">
			<i class="fa fa-file-text-o"></i>
		</div>
		<a href="<?php echo base_url('siswa/nilai-ujian-nasional'); ?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
	</div>
</div>
<div class="col-lg-3 col-xs-3">
	<div class="small-box bg-green">
		<div class="inner">
			<h3>0</h3>
			<p>Nilai Ujian Matematika</p>
		</div>
		<div class="icon">
			<i class="fa fa-file-text-o"></i>
		</div>
		<a href="<?php echo base_url('siswa/nilai-ujian-nasional'); ?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
	</div>
</div>
<div class="col-lg-3 col-xs-3">
	<div class="small-box bg-yellow">
		<div class="inner">
			<h3>0</h3>
			<p>Nilai Ujian Bahasa Inggris</p>
		</div>
		<div class="icon">
			<i class="fa fa-file-text-o"></i>
		</div>
		<a href="<?php echo base_url('siswa/nilai-ujian-nasional'); ?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
	</div>
</div>
<div class="col-lg-3 col-xs-3">
	<div class="small-box bg-red">
		<div class="inner">
			<h3>0</h3>
			<p>Nilai Ujian Ipa</p>
		</div>
		<div class="icon">
			<i class="fa fa-file-text-o"></i>
		</div>
		<a href="<?php echo base_url('siswa/nilai-ujian-nasional'); ?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
	</div>
</div>
<?php } else { ?>
<?php foreach ($data as $value) { ?>
<div class="col-lg-4 col-xs-4">
	<div class="small-box bg-aqua">
		<div class="inner">
			<h3><?php echo $value->nilai_bahasa_indonesia; ?></h3>
			<p>Chat</p>
		</div>
		<div class="icon">
			<i class="fa fa-whatsapp"></i>
		</div>
		<a href="<?php echo base_url('siswa/nilai-ujian-nasional'); ?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
	</div>
</div>
<div class="col-lg-4 col-xs-4">
	<div class="small-box bg-green">
		<div class="inner">
			<h3><?php echo $value->nilai_matematika; ?></h3>
			<p>Video Call</p>
		</div>
		<div class="icon">
			<i class="fa fa-video-camera"></i>
		</div>
		<a href="<?php echo base_url('siswa/nilai-ujian-nasional'); ?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
	</div>
</div>
<div class="col-lg-4 col-xs-4">
	<div class="small-box bg-yellow">
		<div class="inner">
			<h3><?php echo $value->nilai_bahasa_inggris; ?></h3>
			<p>Face to Face</p>
		</div>
		<div class="icon">
			<i class="fa fa-users"></i>
		</div>
		<a href="<?php echo base_url('siswa/nilai-ujian-nasional'); ?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
	</div>
</div>
<div class="col-lg-12 col-xs-12">
	<div class="small-box bg-blue">
		<div class="inner">
			<h3><?php echo $value->nilai_ipa; ?></h3>
			<p>Artikel</p>
		</div>
		<div class="icon">
			<i class="fa fa-file-text-o"></i>
		</div>
		<a href="<?php echo base_url('siswa/nilai-ujian-nasional'); ?>" class="small-box-footer">Lihat <i class="fa fa-arrow-circle-right"></i></a>
	</div>
</div>
<?php } ?>
<?php } ?>