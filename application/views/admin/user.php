<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="fa-solid fa-user-group"></i>
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
                                        <th> ID Petugas </th>
                                        <th> Nama Petugas </th>
                                        <th> Username </th>
                                        <th> Status </th>
                                        <th> Aksi </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($datas as $row): ?>
                                        <tr>

                                            <td>
                                                <?= $row['id_petugas'] ?>
                                            </td>
                                            <td>
                                                <?= $row['nama_petugas'] ?>
                                            </td>
                                            <td>
                                                <?= $row['username'] ?>
                                            </td>
                                            <td>
                                                <?= $row['level'] ?>
                                            </td>
                                            <td>
                                                <a type="button" data-bs-toggle="modal"
                                                    data-bs-target="#editUserModal<?= $row['id_petugas'] ?>"
                                                    class="btn btn-gradient-warning btn-sm">Edit</a>
                                                <a type="button" data-bs-toggle="modal"
                                                    data-bs-target="#hapusUserModal<?= $row['id_petugas'] ?>"
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

    </div>
    <!-- modal edit user -->
    <?php $no_modal_edit = 1; ?>
    <?php foreach($datas as $row): ?>
        <td>
            <div class="modal fade" id="editUserModal<?= $row['id_petugas'] ?>" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit
                                User data
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="row g-3" action="<?= base_url('user/editUser/') . $row['id_petugas'] ?>"
                                method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Full name</label>
                                    <input name="nama_edit" value="<?= $row['nama_petugas'] ?>" type="text" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Username</label>
                                    <input name="username_edit" value="<?= $row['username'] ?>" type="text" class="form-control"
                                        id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect3">Level</label>
                                    <select name="level_edit" class="form-control form-control-sm text-dark" id="exampleFormControlSelect3">
                                        <?php
                                        if ($row['level'] == "admin"):
                                            ?>
                                            <option value="admin" selected>Admin</option>
                                            <option value="petugas">Petugas</option>
                                            <?php
                                        elseif ($row['level'] == "petugas"):
                                            ?>
                                            <option value="admin">Admin</option>
                                            <option value="petugas" selected>Petugas</option>
                                        <?php endif; ?>
                                    </select>
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
        <div class="modal fade" id="hapusUserModal<?= $row['id_petugas'] ?>" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete
                            User
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" action="<?= base_url('user/hapusUser/') . $row['id_petugas'] ?>"
                            method="post">
                            <span style="font-size:16px">Are you sure you want to
                                remove <span class="text-capitalize">
                                    <?= $row['username'] ?>
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