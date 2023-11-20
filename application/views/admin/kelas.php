<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="fa-solid fa-chalkboard"></i>
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
                <?= $this->session->flashdata('user_message') ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> ID Kelas </th>
                                        <th> Nama Kelas </th>
                                        <th> Kode Kelas </th>
                                        <th> ID Jurusan </th>
                                        <th> Tahun Angkatan </th>
                                        <th> Aksi </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($datas as $row): ?>
                                        <tr>

                                            <td>
                                                <?= $row['id_kelas'] ?>
                                            </td>
                                            <td>
                                                <?= $row['nama_kelas'] ?>
                                            </td>
                                            <td>
                                                <?= $row['kode_kelas'] ?>
                                            </td>
                                            <td>
                                                <?= $row['id_jurusan'] ?>
                                            </td>
                                            <td>
                                                <?= $row['tahun_angkatan'] ?>
                                            </td>
                                            <td>
                                                <a type="button" data-bs-toggle="modal"
                                                    data-bs-target="#hapusModal<?= $row['id_kelas'] ?>"
                                                    class="btn btn-gradient-danger btn-sm">Delete</a>
                                            </td>
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
        <!-- modal add user -->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kelas</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" action="<?= base_url('kelas/tambahkelas') ?>" method="post">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Nama Kelas</label>
                                <input autocomplete="off" type="text" class="form-control" placeholder="DKV5.."
                                    name="nama">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Kode Kelas</label>
                                <input type="text" placeholder="2021-PPLG.." class="form-control" id="inputPassword4"
                                    name="kodeKelas">
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Id Jurusan</label>
                                <select id="inputState" class="form-select" name="jurusan">
                                    <option disabled selected>Choose...</option>
                                    <?php foreach ($datasJurusan as $row): ?>
                                        <option value="<?= $row['id_jurusan'] ?>">
                                            <?= $row['jurusan'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-6">
                                <label for="inputAddress" class="form-label">Tahun Angkatan</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="2014.."
                                    name="tahun">
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
        <!-- modal hapus -->
        <?php $no_modal_delete = 1; ?>
        <?php foreach ($datas as $row): ?>
            <td>
                <div class="modal fade" id="hapusModal<?= $row['id_kelas'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus data
                                    kelas
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="row g-3" action="<?= base_url('kelas/hapusKelas/') . $row['id_kelas'] ?>"
                                    method="post">
                                    <span style="font-size:16px">Anda yakin ingin menghapus data kelas <span class="text-capitalize">
                                            <?= $row['kode_kelas'] ?>
                                        </span>?</span>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
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
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.php -->