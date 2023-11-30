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
                            <table id="tabelSiswa" style="width:100%" class="table">
                                <thead>
                                    <tr>
                                        <th> NISN </th>
                                        <th> NIS </th>
                                        <th> Nama siswa </th>
                                        <th> Kelas </th>
                                        <th> Nominal SPP / Bulan </th>
                                        <th> Aksi </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($datas as $row): ?>
                                        <tr>

                                            <td>
                                                <?= $row['nisn'] ?>
                                            </td>
                                            <td>
                                                <?= $row['nis'] ?>
                                            </td>
                                            <td>
                                                <?= $row['nama_siswa'] ?>
                                            </td>
                                            <td>
                                                <?php
                                                $id_kelas = $row['id_kelas'];
                                                $query = $this->db->get_where('kelas', array('id_kelas' => $id_kelas));
                                                $kelas = $query->row();
                                                echo $kelas->kode_kelas;
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                $id_spp = $row['id_spp'];
                                                $query = $this->db->get_where('spp', array('id_spp' => $id_spp));
                                                $kelas = $query->row();
                                                $nominal = $kelas->nominal;
                                                echo "Rp. " . number_format($nominal, 0, ',', '.');
                                                ?>
                                            </td>
                                            <td>
                                                <a type="button" data-bs-toggle="modal"
                                                    data-bs-target="#editModal<?= $row['nisn'] ?>"
                                                    class="btn btn-gradient-warning btn-sm">Edit</a>
                                                <a type="button" data-bs-toggle="modal"
                                                    data-bs-target="#hapusModal<?= $row['nisn'] ?>"
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
    <!-- modal edit -->
    <?php $no_modal_edit = 1; ?>
    <?php foreach ($datas as $row): ?>
        <td>
            <div class="modal fade" id="editModal<?= $row['nisn'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit
                                Data siswa
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="row g-3" action="<?= base_url('siswa/editSiswa/') . $row['nisn'] ?>" method="post">
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Nama Siswa</label>
                                    <input value="<?= $row['nama_siswa'] ?>" type="text" class="form-control"
                                        id="inputAddress" placeholder="Sanstoso.." name="nama">
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Nomor Telepon</label>
                                    <input value="<?= $row['no_telp'] ?>" type="text" class="form-control" id="inputAddress"
                                        placeholder="0892131312.." name="nohp">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">Kelas</label>
                                    <select id="inputState" class="form-select" name="kelas">
                                        <?php foreach ($datasKelas as $rowKelas): ?>
                                            <option value="<?= $rowKelas['id_kelas'] ?>"
                                            <?php if ($rowKelas['id_kelas'] == $row['id_kelas']) echo 'selected'; ?>>
                                                <?= $rowKelas['kode_kelas'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">Id SPP</label>
                                    <select id="inputState" class="form-select" name="idSpp">
                                        <?php foreach ($datasSpp as $rowSpp): ?>
                                            <option value="<?= $rowSpp['id_spp'] ?>"
                                            <?php if ($rowSpp['id_spp'] == $row['id_spp'])
                                                  echo 'selected'; ?>>
                                                <?= $rowSpp['id_spp'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Alamat</label>
                                    <textarea name="alamat" class="form-control" id="exampleTextarea1" rows="4"><?= $row['alamat'] ?></textarea>
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
    <!-- modal delete-->
    <?php $no_modal_delete = 1; ?>
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
        <?php $no_modal_delete++; ?>
    <?php endforeach; ?>
    <!-- modal add -->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah siswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3" action="<?= base_url('siswa/tambahSiswa') ?>" method="post">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">NISN</label>
                            <input autocomplete="off" type="text" class="form-control" placeholder="00240359.."
                                name="nisn">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">NIS</label>
                            <input type="text" placeholder="8392.." class="form-control" id="inputPassword4" name="nis">
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
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Id SPP</label>
                            <select id="inputState" class="form-select" name="idSpp">
                                <option disabled selected>Choose...</option>
                                <?php $nokelas = 1; ?>
                                <?php foreach ($datasSpp as $rowSpp): ?>
                                    <option value="<?= $rowSpp['id_spp'] ?>">
                                        <?= $rowSpp['id_spp'] ?>
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