<div class="col-xs-12">
	<div class="box box-primary">
		<div class="box-body">
			<?php echo $this->session->flashdata('pesan'); ?>
			<table id="example0" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th style="width: 30px">Aksi</th>
						<th>Nama</th>
						<th>SKHUN</th>
						<th>Nilai UN Bahasa Indonesia</th>
						<th>Nilai UN Matematika</th>
						<th>Nilai UN Bahasa Inggris</th>
						<th>Nilai UN IPA</th>
						<th>Nilai Peminatan</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach ($data as $value) { ?>
					<tr>
						<td>
							<a href="#" data-toggle="modal" data-target="#ubah<?php echo $value->id_nilai; ?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
						</td>
						<td><?php echo $value->nama_siswa; ?></td>
						<td><a href="<?php echo base_url('assets/file/'.$value->skhun); ?>" target="_blank"><?php echo $value->skhun; ?></a></td>
						<td><?php echo $value->nilai_bahasa_indonesia; ?></td>
						<td><?php echo $value->nilai_matematika; ?></td>
						<td><?php echo $value->nilai_bahasa_inggris; ?></td>
						<td><?php echo $value->nilai_ipa; ?></td>
						<td><?php echo $value->nilai_peminatan; ?></td>
					</tr>
					<?php $no++; } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php foreach ($data as $value) { ?>
<div class="modal fade" id="ubah<?php echo $value->id_nilai; ?>" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Ubah Nilai</h4>
			</div>
			<form method="post" action="<?php echo base_url('admin/update_nilai'); ?>">
			<input type="hidden" name="id_nilai" value="<?php echo $value->id_nilai; ?>">
			<div class="modal-body">
				<div class="form-group">
					<label>Nilai UN Bahasa Indonesia</label>
					<input type="text" name="nilai_bahasa_indonesia" value="<?php echo $value->nilai_bahasa_indonesia; ?>" class="form-control" placeholder="Nilai UN Bahasa Indonesia">
				</div>
				<div class="form-group">
					<label>Nilai UN Matematika</label>
					<input type="text" name="nilai_matematika" value="<?php echo $value->nilai_matematika; ?>" class="form-control" placeholder="Nilai UN Matematika">
				</div>
				<div class="form-group">
					<label>Nilai UN Bahasa Inggis</label>
					<input type="text" name="nilai_bahasa_inggris" value="<?php echo $value->nilai_bahasa_inggris; ?>" class="form-control" placeholder="Nilai UN Bahasa Inggris">
				</div>
				<div class="form-group">
					<label>Nilai UN IPA</label>
					<input type="text" name="nilai_ipa" value="<?php echo $value->nilai_ipa; ?>" class="form-control" placeholder="Nilai UN IPA">
				</div>
				<div class="form-group">
					<label>Nilai Peminatan</label>
					<input type="text" name="nilai_peminatan" value="<?php echo $value->nilai_peminatan; ?>" class="form-control" placeholder="Nilai Peminatan">
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary">Simpan</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
			</div>
			</form>
		</div>
	</div>
</div>
<?php } ?>