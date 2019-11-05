<div class="col-xs-12">
	<div class="box box-primary">
		<div class="box-body">
			<?php echo $this->session->flashdata('pesan'); ?>
			<?php if (count($data)==0) { ?>
				<form method="post" action="<?php echo base_url('siswa/insert_nilai'); ?>" enctype="multipart/form-data">
					<div class="form-group">
						<label>Nilai UN Bahasa Indonesia</label>
						<input type="number" name="nilai_bahasa_indonesia" class="form-control" placeholder="Nilai UN Bahasa Indonesia">
					</div>
					<div class="form-group">
						<label>Nilai UN Matematika</label>
						<input type="number" name="nilai_matematika" class="form-control" placeholder="Nilai UN Matematika">
					</div>
					<div class="form-group">
						<label>Nilai UN Bahasa Inggris</label>
						<input type="number" name="nilai_bahasa_inggris" class="form-control" placeholder="NIlai UN Bahasa Inggris">
					</div>
					<div class="form-group">
						<label>Nilai UN IPA</label>
						<input type="number" name="nilai_ipa" class="form-control" placeholder="NIlai UN IPA">
					</div>
					<div class="form-group">
						<label>Lampirkan SKHUN</label>
						<input type="file" name="userfile">
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
					<a href="<?php echo base_url('siswa'); ?>" class="btn btn-danger">Batal</a>
				</form>
			<?php } else { ?>
				<?php foreach ($data as $value) { ?>
					<div class="form-group">
						<label>Nilai UN Bahasa Indonesia</label>
						<input type="number" name="nilai_bahasa_indonesia" value="<?php echo $value->nilai_bahasa_indonesia; ?>" class="form-control" placeholder="Nilai UN Bahasa Indonesia" readonly>
					</div>
					<div class="form-group">
						<label>Nilai UN Matematika</label>
						<input type="number" name="nilai_matematika" value="<?php echo $value->nilai_matematika; ?>" class="form-control" placeholder="Nilai UN Matematika" readonly>
					</div>
					<div class="form-group">
						<label>Nilai UN Bahasa Inggris</label>
						<input type="number" name="nilai_bahasa_inggris" value="<?php echo $value->nilai_bahasa_inggris; ?>" class="form-control" placeholder="NIlai UN Bahasa Inggris" readonly>
					</div>
					<div class="form-group">
						<label>Nilai UN IPA</label>
						<input type="number" name="nilai_ipa" value="<?php echo $value->nilai_ipa; ?>" class="form-control" placeholder="NIlai UN IPA" readonly>
					</div>
					<div class="form-group">
						<label>Lampirkan SKHUN</label><br>
						<a href="<?php echo base_url('assets/file/'.$value->skhun); ?>" target="_blank"><?php echo $value->skhun; ?></a>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
</div>