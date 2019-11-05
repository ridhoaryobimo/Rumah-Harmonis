<div class="col-xs-12">
	<div class="box box-primary">
		<div class="box-header">
			<h3 class="box-title">
				<a href="#" data-toggle="modal" data-target="#tambah" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</a>
			</h3>
		</div>
		<div class="box-body">
			<?php echo $this->session->flashdata('pesan'); ?>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th style="width: 20px">No</th>
						<th style="width: 80px">Aksi</th>
						<th>Judul</th>
						<th>Deskripsi</th>
						<th>Ditulis</th>
						<th>Tanggal</th>
						<th>Gambar</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach ($data as $value) { ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td>
							<a href="#" data-toggle="modal" data-target="#ubah<?php echo $value->id_berita; ?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
							<a href="#" data-toggle="modal" data-target="#hapus<?php echo $value->id_berita; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
						</td>
						<td><?php echo $value->judul; ?></td>
						<td><?php echo character_limiter($value->deskripsi, 120); ?></td>
						<td><?php echo $value->ditulis; ?></td>
						<td><?php echo $value->tanggal; ?></td>
						<td>
							<a href="#" data-toggle="modal" data-target="#gambar<?php echo $value->id_berita; ?>"><img src="<?php echo base_url('assets/berita/'.$value->gambar); ?>" style="width: 120px"></a>
						</td>
					</tr>
					<?php $no++; } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="modal fade" id="tambah" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Tambah Berita</h4>
			</div>
			<form method="post" action="<?php echo base_url('admin/insert_berita'); ?>" enctype="multipart/form-data">
			<div class="modal-body">
				<div class="form-group">
					<label>Judul</label>
					<input type="text" name="judul" class="form-control" placeholder="Judul">
				</div>
				<div class="form-group">
					<label>Deskripsi</label>
					<textarea id="editor1" name="deskripsi" class="form-control" placeholder="Deskripsi"></textarea>
				</div>
				<div class="form-group">
					<label>Gambar</label>
					<input type="file" name="userfile">
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
<?php foreach ($data as $value) { ?>
<div class="modal fade" id="ubah<?php echo $value->id_berita; ?>" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Ubah Berita</h4>
			</div>
			<form method="post" action="<?php echo base_url('admin/update_berita'); ?>" enctype="multipart/form-data">
			<input type="hidden" name="id_berita" value="<?php echo $value->id_berita; ?>">
			<div class="modal-body">
				<div class="form-group">
					<label>Judul</label>
					<input type="text" name="judul" value="<?php echo $value->judul; ?>" class="form-control" placeholder="Judul">
				</div>
				<div class="form-group">
					<label>Deskripsi</label>
					<textarea id="editor<?php echo $value->id_berita; ?>" name="deskripsi" class="form-control" placeholder="Deskripsi"><?php echo $value->deskripsi; ?></textarea>
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
<div class="modal fade" id="gambar<?php echo $value->id_berita; ?>" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Ubah Gambar Berita</h4>
			</div>
			<form method="post" action="<?php echo base_url('admin/update_gambar_berita'); ?>" enctype="multipart/form-data">
				<input type="hidden" name="id_berita" value="<?php echo $value->id_berita; ?>">
				<div class="modal-body">
					<div class="form-group">
						<label>Gambar</label>
						<img src="<?php echo base_url('assets/berita/'.$value->gambar); ?>" style="width: 100%">
					</div>
					<div class="form-group">
						<label>Ganti Gambar</label>
						<input type="file" name="userfile">
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
<div class="modal fade" id="hapus<?php echo $value->id_berita; ?>" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Hapus Berita</h4>
			</div>
			<form method="post" action="<?php echo base_url('admin/delete_berita'); ?>">
				<input type="hidden" name="id_berita" value="<?php echo $value->id_berita; ?>">
				<div class="modal-body">
					<p>Apakah Anda Yakin Ingin Menghapus ?</p>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Ya</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php } ?>
