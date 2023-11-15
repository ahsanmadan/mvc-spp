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
                                                <a type="button" class="btn btn-gradient-warning btn-sm">Edit</a>
                                                <a type="button" class="btn btn-gradient-danger btn-sm">Delete</a>
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
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="<?= base_url('user/tambahUser') ?>" method="post">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Username</label>
                        <input autocomplete="off" type="text" class="form-control" placeholder="fic21312..."
                            name="username">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword4" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" name="password">
                    </div>
                    <div class="col-12">
                        <label for="inputAddress" class="form-label">Full name</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Sanh Fic..."
                            name="nama_petugas">
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">Status</label>
                        <select id="inputState" class="form-select" name="level">
                            <option disabled selected>Choose...</option>
                            <option value="admin">Admin</option>
                            <option value="petugas">Petugas</option>
                        </select>
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