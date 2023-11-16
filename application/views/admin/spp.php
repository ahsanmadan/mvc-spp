<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="fa-solid fa-graduation-cap"></i>
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
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th> Id spp </th>
                                        <th> Tahun masuk </th>
                                        <th> Id jurusan </th>
                                        <th> Nominal </th>
                                        <th> Aksi </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($datas as $row): ?>
                                        <tr>

                                            <td>
                                                <?= $row['id_spp'] ?>
                                            </td>
                                            <td>
                                                <?= $row['tahun_masuk'] ?>
                                            </td>
                                            <td>
                                                <?php
                                                $id_jurusan = $row['id_jurusan'];
                                                $query = $this->db->get_where('jurusan', array('id_jurusan' => $id_jurusan));
                                                $jurusan = $query->row();
                                                echo $jurusan->jurusan;
                                                ?>
                                            </td>
                                            <td>
                                                <?php echo "Rp. " . number_format($row['nominal'], 0, ',', '.');
                                                ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-gradient-warning btn-sm" href="">Edit</a>
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

    </div>
    <!-- modal edit -->
    <!-- <?php $no_modal_edit = 1; ?>
    <?php foreach ($datas as $row): ?>
            <td>
                <div class="modal fade" id="editModal<?= $row['id_petugas'] ?>" tabindex="-1"
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
                                        <input name="nama_edit" value="<?= $row['nama_petugas'] ?>" type="text"
                                            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Username</label>
                                        <input name="username_edit" value="<?= $row['username'] ?>" type="text"
                                            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect3">Level</label>
                                        <select name="level_edit" class="form-control form-control-sm text-dark"
                                            id="exampleFormControlSelect3">
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
<?php endforeach; ?> -->
    <!-- modal delete-->
    <!-- <?php $no_modal_delete = 1; ?>
    <?php foreach ($datas as $row): ?>
        <td>
            <div class="modal fade" id="hapusModal<?= $row['nisn'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus data
                                siswa
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="row g-3" action="<?= base_url('siswa/hapusSiswa/') . $row['nisn'] ?>"
                                method="post">
                                <span style="font-size:16px">Are you sure you want to
                                    remove <span class="text-capitalize">
                                        <?= $row['nama_siswa'] ?>
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
        <?php $no_modal_delete++; ?> -->
    <?php endforeach; ?>
    <!-- modal add -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah data SPP</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" action="<?= base_url('dataspp/tambahspp') ?>" method="post">
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Id SPP</label>
                            <select id="inputState" class="form-select" name="idSpp">
                                <option disabled selected>Choose...</option>
                                <?php foreach ($datasKelas as $rowKelas): ?>
                                    <?php
                                    // pengecekan ke data base
                                    $cekdata = false;
                                    foreach ($datas as $row) {
                                        if ($rowKelas['kode_kelas'] == $row['id_spp']) {
                                            $cekdata = true;
                                            break;
                                        }
                                    }

                                    // jika sudah ada maka tampilkan yg belum ada
                                    if (!$cekdata): ?>
                                        <option value="<?= $rowKelas['kode_kelas'] ?>">
                                            <?= $rowKelas['kode_kelas'] ?>
                                        </option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Tahun masuk</label>
                            <input type="number" placeholder="8392.." class="form-control" id="inputPassword4" name="thn_masuk">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Nama Siswa</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Sanstoso.."
                                name="nama">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="0892131312.."
                                name="nohp">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Kelas</label>
                            <select id="inputState" class="form-select" name="kelas">
                                <option disabled selected>Choose...</option>
                                <?php $nokelas = 1; ?>
                                <?php foreach ($datasKelas as $rowKelas): ?>
                                    <option value="<?= $rowKelas['id_kelas'] ?>">
                                        <?= $rowKelas['kode_kelas'] ?>
                                    </option>
                                    <?php $nokelas++; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea1">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleTextarea1" rows="4"></textarea>
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