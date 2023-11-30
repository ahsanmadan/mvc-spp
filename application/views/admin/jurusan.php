<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="fa-solid fa-user-astronaut"></i>
                </span>
                <?= $title; ?>
            </h3>
            <nav aria-label="breadcrumb">
                <button type="button" data-bs-toggle="modal" data-bs-target="#addModal"
                    class="btn btn-gradient-success btn-rounded btn-icon">
                    <i class="mdi mdi-plus"></i>
                </button>
            </nav>
        </div>
        <div class="container">
            <div class="row">
                <?= $this->session->flashdata('message') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="tabelJurusan" style="width:100%" class="table">
                                <thead>
                                    <tr>
                                        <th> ID Jurusan</th>
                                        <th> Nama Jurusan </th>
                                        <th> Jurusan </th>
                                        <th> Aksi </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($datas as $row): ?>
                                        <tr>

                                            <td>
                                                <?= $row['id_jurusan'] ?>
                                            </td>
                                            <td>
                                                <?= $row['nama_jurusan'] ?>
                                            </td>
                                            <td>
                                                <?= $row['jurusan'] ?>
                                            </td>
                                            <td>
                                            <a type="button" data-bs-toggle="modal"
                                                    data-bs-target="#editJurusanModal<?= $row['id_jurusan'] ?>"
                                                    class="btn btn-gradient-warning btn-sm">Edit</a>
                                                <a type="button" data-bs-toggle="modal"
                                                    data-bs-target="#hapusJurusanModal<?= $row['id_jurusan'] ?>"
                                                    class="btn btn-gradient-danger btn-sm">Delete</a>
                                        </tr>
                                        <?php $no++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- modal edit jurusan -->
    <?php $no_modal_edit = 1; ?>
    <?php foreach($datas as $row): ?>
        <td>
            <div class="modal fade" id="editJurusanModal<?= $row['id_jurusan'] ?>" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit
                                Jurusan
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="row g-3" action="<?= base_url('jurusan/editJurusan/') . $row['id_jurusan'] ?>"
                                method="post">
                                <div class="mb-3">
                                    <label  class="form-label">Nama Jurusan</label>
                                    <input name="nama_jurusan" value="<?= $row['nama_jurusan'] ?>" type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label  class="form-label">Jurusan</label>
                                    <input name="jurusan" value="<?= $row['jurusan'] ?>" type="text" class="form-control">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-gradient-success btn-fw">Update</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </td>
    <?php $no_modal_edit++; ?>
<?php endforeach; ?>
<!-- modal delete user -->
<?php $no_modal_delete = 1; ?>
<?php foreach ($datas as $row): ?>
    <td>
        <div class="modal fade" id="hapusJurusanModal<?= $row['id_jurusan'] ?>" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Jurusan
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" action="<?= base_url('jurusan/hapusJurusan/') . $row['id_jurusan'] ?>"
                            method="post">
                            <span style="font-size:16px">Apakah anda yakin ingin menghapus <span class="text-capitalize">
                                    <?= $row['nama_jurusan'] ?>
                                </span>?</span>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-gradient-danger btn-fw">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </td>
    <?php $no_modal_delete++; ?>
<?php endforeach; ?>


        <!-- modal add jurusan -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Jurusan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="<?= base_url('jurusan/tambahJurusan') ?>" method="post">
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Nama Jurusan</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Rekayasa Perangkat Lunak"
                            name="nama_jurusan">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="RPL" 
                            name="jurusan">
                    </div>
                  
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-gradient-primary btn-fw">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.php -->