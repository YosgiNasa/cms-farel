
<form action="<?= site_url('admin/konfigurasi/update') ?>" method="post">
			<div class="modal-content">
			<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Tambah Konfigurasi</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-12 mb-3">
							<label class="form-label">judul website</label>
							<input type="text" class="form-control" name="judul" value="<?= $konfig->judul_website; ?>" />
						</div>

						<div class="col-12 mb-3">
							<label class="form-label">Profile</label>
							<input name="profil_website" class="form-control"><?= $konfig->judul_website; ?>
						</div>

						<div class="col-12 mb-3">
							<label class="form-label">Facebook</label>
							<input type="text" class="form-control" name="facebook" value="<?= $konfig->facebook; ?> " />
						</div>

						<div class="col-12 mb-3">
							<label class="form-label">Instagram</label>
							<input type="text" class="form-control" name="instagram"value="<?= $konfig->instagram; ?>" />						</div>

						<div class="col-12 mb-3">
							<label class="form-label">Email</label>
							<input type="text" class="form-control" name="email" value="<?= $konfig->email; ?>" />
						</div>

						<div class="col-12 mb-3">
							<label class="form-label">Alamat</label>
							<input type="text" class="form-control" name="alamat" value="<?= $konfig->alamat; ?> " />
						</div>

						<div class="col-12 mb-3">
							<label class="form-label">Whatsapp</label>
							<input type="text" class="form-control" name="no_wa" value="<?= $konfig->no_wa; ?>" />
						</div>


					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
		</form>