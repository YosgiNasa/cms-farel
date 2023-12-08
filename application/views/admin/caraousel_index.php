<div class="col-xl-12">
    <div id="ngilang">
        <?= $this->session->flashdata('alert') ?>
    </div>
	<div class="card">
		<form action="<?= site_url('admin/caraousel/simpan') ?>" method="post" enctype="multipart/form-data">
			<h5 class="card-header">File input</h5>
			<div class="card-body">
				<div class="col-12 mb-3">
					<label class="form-label">judul</label>
					<input type="text" class="form-control" name="judul" />
					<div class="mb-3">
						<label for="formFile" class="form-label">Defalut file input exmpel</label>
						<input class="form-control" type="file" name="foto">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</div>
		</form>
	</div>
    <?php foreach ($caraousel as $aa){?>
    <div class="col-md-12 mb-3">
        <div class="card h-100">
            <img class="card-img-top" style="width:30%" src="<?= base_url('assets/upload/caraousel/'.$aa['foto']) ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $aa['judul']?></h5>
                <a class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus data ini')"
                    href="<?php echo site_url('admin/caraousel/delete_data/'.$aa['foto'])?>">
                    hapus
                </a>
            </div>
        </div>
    </div>
    <?php }   ?>
</div>
