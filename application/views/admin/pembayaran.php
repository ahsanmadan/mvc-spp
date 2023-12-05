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
                                                    data-bs-target="#pembayaranModal<?= $row['nisn'] ?>"
                                                    class="btn btn-gradient-success btn-sm">Bayar</a>
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