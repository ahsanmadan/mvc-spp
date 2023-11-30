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
                            <table id="tabelSpp" style="width:100%" class="table">
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
                                                <a class="btn btn-gradient-warning btn-sm" data-bs-toggle="modal"
                                                    data-bs-target="#editModal<?= $row['id_spp'] ?>">Edit</a>
                                                <a type="button" data-bs-toggle="modal"
                                                    data-bs-target="#hapusModal<?= $row['id_spp'] ?>"
                                                    class="btn btn-gradient-danger btn-sm">Hapus</a>
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
            <div class="modal fade" id="editModal<?= $row['id_spp'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit
                                data SPP
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="row g-3" action="<?= base_url('dataspp/editSpp/'). $row['id_spp'] ?>" method="post">
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label">Tahun masuk</label>
                                    <input value="<?= $row['tahun_masuk'] ?>" type="number" placeholder="8392.."
                                        class="form-control" id="inputPassword4" name="thnMasuk">
                                </div>
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">Id SPP</label>
                                    <select id="inputState" class="form-select" name="idSpp">
                                        <?php foreach ($datasKelas as $rowKelas): ?>
                                            <option value="<?= $rowKelas['kode_kelas'] ?>" 
                                                <?php if ($rowKelas['kode_kelas'] == $row['id_spp']):
                                                    echo 'selected';
                                                endif; ?>>
                                                <?= $rowKelas['kode_kelas'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>

                                </div>
                                <div class="col-md-4">
                                    <label for="inputState" class="form-label">Id Jurusan</label>
                                    <select id="inputState" class="form-select" name="jurusan">
                                        <?php foreach ($datasJurusan as $rowPilih): ?>
                                            <option value="<?= $rowPilih['id_jurusan'] ?>" 
                                                <?php if ($rowPilih['id_jurusan'] == $row['id_jurusan']):
                                                    echo 'selected';
                                                endif; ?>>
                                                <?= $rowPilih['jurusan'] ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>

                                </div>
                                <div class="col-12">
                                    <label for="inputAddress" class="form-label">Nominal</label>
                                    <input value="<?= $row['nominal'] ?>" type="text" class="form-control" id="inputAddress" placeholder="0892131312.."
                                        name="nominal">
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
        </td>
        <?php $no_modal_edit++; ?>
    <?php endforeach; ?>
    <!-- modal delete -->
    <?php $no = 1; ?>
    <?php foreach ($datas as $row): ?>
        <td>
            <div class="modal fade" id="hapusModal<?= $row['id_spp'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus data
                                SPP
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="row g-3" action="<?= base_url('dataspp/hapusSpp/') . $row['id_spp'] ?>"
                                method="post">
                                <span style="font-size:16px">Anda yakin ingin menghapus data SPP <span
                                        class="text-capitalize">
                                        <?= $row['id_spp'] ?>
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
        <?php $no++; ?>
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
                            <label for="inputPassword4" class="form-label">Tahun masuk</label>
                            <input type="number" placeholder="8392.." class="form-control" id="inputPassword4"
                                name="thnMasuk">
                        </div>
                        <div class="col-md-6">
                        </div>
                        <div class="col-md-4">
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
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Id Jurusan</label>
                            <select id="inputState" class="form-select" name="jurusan">
                                <option disabled selected>Choose...</option>
                                <?php $no = 1; ?>
                                <?php foreach ($datasJurusan as $row): ?>
                                    <option value="<?= $row['id_jurusan'] ?>">
                                        <?= $row['jurusan'] ?>
                                    </option>
                                    <?php $no++; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Nominal</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="0892131312.."
                                name="nominal">
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