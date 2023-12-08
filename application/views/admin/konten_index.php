<div class="row">
	<div class="col-lg-12 mb-4">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-warning mb-3" data-toggle="modal" data-target="#exampleModal">
			Tambah Konten
		</button>
		<div id="ngilang">
			<?= $this->session->flashdata('alert') ?>
		</div>

		<!-- Simple Tables -->
		<div class="card">
			<div class="card-header py-3 d-flex flex-row">
				<h6 class="m-0 font-weight-bold text-primary">Tambah Konten</h6>
				<div class="table-responsive">
					<table class="table align-items-center table-flush">
						<thead class="thead-light">
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Kategori Konten</th>
								<th>Tanggal</th>
								<th>Kreator</th>
								<th>Foto</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1; foreach($konten as $aa) {?>
							<tr>
								<td><?= $no; ?></td>
								<td><?= $aa['judul']?></td>
								<td><?= $aa['nama_kategori']?></td>
								<td><?= $aa['tanggal']?></td>
								<td><?= $aa['username']?></td>
								<td>
									<a href="<?= base_url('assets/upload/konten/'.$aa['foto']) ?>" target="_blank" >lihat
										Foto</a>
								</td>
								<td>
									<a class="btn btn-danger btn-sm"
										onclick="return confirm('Apakah anda yakin menghapus data ini')"
										href="<?php echo site_url('admin/konten/delete_data/'.$aa['id_konten'])?>">
										hapus
									</a>
									<button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
										data-target="#edit<?= $aa['id_konten'] ?>">
										edit
									</button>
								</td>
							</tr>
							<div class="modal fade" id="edit<?= $aa['id_konten'] ?>" tabindex="-1" role="dialog"
								aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<form action="<?= site_url('admin/konten/update') ?>" method="post"
										enctype="multipart/form-data">
										<input type="hidden" name="nama_foto" value="<?= $aa['foto'] ?>">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Tambah Konten</h5>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col-12 mb-3">
														<label class="form-label">judul</label>
														<input type="text" class="form-control"
															value="<?= $aa['judul'] ?>" name="judul" />
													</div>
												</div>

												<div class="col-12 mb-3">
													<label class="form-label">kategori</label>
													<select name="id_kategori" class="form-control">
														<?php foreach($kategori as $au) {?>
														<option
															<?php if($au['id_kategori']==$aa['id_kategori']){echo "selected";} ?>
															value="<?= $au['id_kategori'] ?>">
															<?= $au['nama_kategori'] ?>
														</option>
														<?php } ?>
													</select>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-12 mb-3">
															<label class="form-label">keterangan</label>
															<textarea name="keterangan" class="form-control"
																value=""><?= $aa['keterangan'] ?></textarea>
														</div>
													</div>

													<div class="col-12 mb-3">
														<label class="form-label">Foto</label>
														<input type="file" name="foto" value="<?= $aa['foto'] ?>"
															class="form-control" accept="image/png, image/jpeg">
													</div>



													<div class="modal-body">
														<div class="row">

														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary"
																data-dismiss="modal">Close</button>
															<button type="submit"
																class="btn btn-primary">Simpan</button>
														</div>
									</form>
								</div>
							</div>
				</div>

				<?php } ?>

				</tbody>
				</table>
			</div>
			<div class="card-footer"></div>
		</div>
	</div>
</div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<form action="<?= site_url('admin/konten/simpan') ?>" method="post" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">perbarui Kategori</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-12 mb-3">
							<label class="form-label">judul</label>
							<input type="text" class="form-control" name="judul" />
						</div>

						<div class="col-12 mb-3">
							<label class="form-label">kategori</label>
							<select name="id_kategori" class="form-control">
								<?php foreach($kategori as $aa) {?>
								<option value="<?= $aa['id_kategori'] ?>"><?= $aa['nama_kategori'] ?></option>
								<?php } ?>
							</select>
						</div>

						<div class="col-12 mb-3">
							<label class="form-label">keterangan</label>
							<textarea name="keterangan" class="form-control"></textarea>
						</div>

						<div class="col-12 mb-3">
							<label class="form-label">Foto</label>
							<input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>
		</form>
	</div>
</div>
</div>
