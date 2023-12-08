<div class="row">
	<div class="col-lg-12 mb-4">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-warning mb-3" data-toggle="modal" data-target="#tambah">
			Tambah user
		</button>
		<div id="ngilang">
			<?= $this->session->flashdata('alert') ?>
		</div>

		<!-- Simple Tables -->
		<div class="card">
			<div class="card-header py-3 d-flex flex-row">
				<h6 class="m-0 font-weight-bold text-primary">Data Pengguna</h6>
				<div class="table-responsive">
					<table class="table align-items-center table-flush">
						<thead class="thead-light">
							<tr>
								<th>Username</th>
								<th>Nama</th>
								<th>Level</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($user as $aa) {?>
							<tr>
								<td><?= $aa['username']?></td>
								<td><?= $aa['nama']?></td>
								<td><?= $aa['level']?></td>
								<td>
									<a class="btn btn-danger"
										onclick="return confirm('Apakah anda yakin menghapus data ini')"
										href="<?php echo site_url('admin/user/delete_data/'.$aa['id_user'])?>">
										hapus</i>
									</a>
									<button type="button" class="btn btn-warning" data-toggle="modal"
										data-target="#exampleModal<?= $aa['id_user'] ?>">
										edit
									</button>
								</td>
							</tr>
							<div class="modal fade" id="exampleModal<?= $aa['id_user'] ?>" tabindex="-1" role="dialog"
								aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<form action="<?= site_url('admin/user/update') ?>" method="post">
										<input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
												<button type="button" class="close" data-dismiss="modal"
													aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col-12 mb-3">
														<label class="form-label">Nama</label>
														<input type="text" class="form-control"
															value="<?= $aa['nama'] ?>" name="nama" />
													</div>
													<div class="col-12 mb-3">
														<label class="form-label">Username</label>
														<input type="text" class="form-control"
															value="<?= $aa['username'] ?>" name="username" readonly />
													</div>
													<div class="col-12 mb-3">
														<label class="form-label">Password</label>
														<input type="password" class="form-control"
															placeholder="Password" name="password" required />
													</div>
													<div class="col-12 mb-3">
														<label class="form-label">Level</label>
														<select name="level" class="form-control">
															<option value="Admin">Admin</option>
															<option value="Kontributor">Kontributor</option>
														</select>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary"
													data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-primary">Simpan</button>
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
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<form action="<?= site_url('admin/user/simpan') ?>" method="post">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-12 mb-3">
							<label class="form-label">Nama</label>
							<input type="text" class="form-control" value="" name="nama" />
						</div>
						<div class="col-12 mb-3">
							<label class="form-label">Username</label>
							<input type="text" class="form-control" value="" name="username"
								 />
						</div>
						<div class="col-12 mb-3">
							<label class="form-label">Password</label>
							<input type="password" class="form-control" placeholder="Password" name="password"
								required />
						</div>
						<div class="col-12 mb-3">
							<label class="form-label">Level</label>
							<select name="level" class="form-control">
								<option value="Admin">Admin</option>
								<option value="Kontributor">Kontributor</option>
							</select>
						</div>
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
