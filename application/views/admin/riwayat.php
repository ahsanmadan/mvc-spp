<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="fa-solid fa-file-invoice-dollar"></i>
                </span>
                <?= $title; ?>
            </h3>
            <!-- <nav aria-label="breadcrumb">
                <button type="button" data-bs-toggle="modal" data-bs-target="#addModal"
                    class="btn btn-gradient-success btn-rounded btn-icon">
                    <i class="mdi mdi-plus"></i>
                </button>
            </nav> -->
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
                            <table id="tabelPembayaran" style="width:100%" class="table">
                                <thead>
                                    <tr>
                                        <th> Id Pembayaran </th>
                                        <th> Nama petugas </th>
                                        <th> Nisn </th>
                                        <th> Nama siswa </th>
                                        <th> Tanggal bayar </th>
                                        <th> Kelas </th>
                                        <th> Nominal </th>
                                        <th> Aksi </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($datas as $row): ?>
                                        <tr>

                                            <td>
                                                <?= $row['id_pembayaran'] ?>
                                            </td>
                                            <td>
                                                <?php
                                                $id_petugas = $row['id_petugas'];
                                                $query = $this->db->get_where('petugas', array('id_petugas' => $id_petugas));
                                                $petugas = $query->row();
                                                echo $petugas->nama_petugas;
                                                ?>
                                            </td>
                                            <td>
                                                <?= $row['nisn'] ?>
                                            </td>
                                            <td>
                                                <?php
                                                $id = $row['nisn'];
                                                $query = $this->db->get_where('siswa', array('nisn' => $id));
                                                $dbSiswa = $query->row();
                                                echo $dbSiswa->nama_siswa;
                                                ?>
                                            </td>
                                            <td>
                                                <?=
                                                    $row['tgl_bayar'];
                                                ?>
                                            </td>
                                            <td>
                                                <?= $row['id_spp'] ?>
                                            </td>
                                            <td>
                                                <?= "Rp " . number_format($row['jumlah_bayar'], 0, ",", ".") ?>
                                            </td>
                                            <td>
                                                <a type="button" data-bs-toggle="modal"
                                                    data-bs-target="#editModal<?= $row['nisn'] ?>"
                                                    class="btn btn-gradient-primary btn-sm">Cetak</a>
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