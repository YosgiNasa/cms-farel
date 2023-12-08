<div class="row">
    <div class="col-lg-12 mb-4">
        <!-- Button trigger modal -->
        <button
        type="button"
        class="btn btn-warning mb-3"
        data-toggle="modal"
        data-target="#exampleModal">
        Tambah Kategori
    </button>
    <div id="ngilang" >
    <?= $this->session->flashdata('alert') ?>
    </div>

        <!-- Simple Tables -->
        <div class="card">
            <div class="card-header py-3 d-flex flex-row">
                <h6 class="m-0 font-weight-bold text-primary">Kategori Konten</h6>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori Konten</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($kategori as $aa) {?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $aa['nama_kategori']?></td>
                                <td>
                                <a  class="btn btn-danger"
                                onclick="return confirm('Apakah anda yakin menghapus data ini')"
                                href="<?php echo site_url('admin/kategori/delete_data/'.$aa['id_kategori'])?>">
                                hapus
                                </a>
                                        <button
        type="button"
        class="btn btn-warning"
        data-toggle="modal"
        data-target="#exampleModal<?= $aa['id_kategori'] ?>">
        edit
    </button>
                        </td>
                            </tr>
                            <div
class="modal fade"
id="exampleModal<?= $aa['id_kategori'] ?>"
tabindex="-1"
role="dialog"
aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <form action="<?= site_url('admin/kategori/update') ?>" method="post">
    <input type="hidden" name="id_kategori" value="<?= $aa['id_kategori'] ?>">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 mb-3">
                        <label class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" value="<?= $aa['nama_kategori'] ?>" 
                        name="nama"/>
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
<div
    class="modal fade"
    id="exampleModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="<?= site_url('admin/kategori/simpan') ?>" method="post">
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
                        <label class="form-label">Nama Kategori Konten</label>
                        <input type="text" class="form-control" name="nama_kategori" ?>
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