<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="fa-solid fa-house"></i>
        </span>
        <?= $title; ?>
      </h3>
    </div>
    <div class="row">
      <div class="col-md-4 stretch-card grid-margin">
        <a class="w-100 text-decoration-none" href="<?= base_url('siswa') ?>">
          <div class="card bg-gradient-danger card-img-holder text-white">
            <div class="card-body">
              <img src="<?= base_url('assets/'); ?>images/dashboard/circle.svg" class="card-img-absolute"
                alt="circle-image" />
              <h4 class="font-weight-normal mb-3">Jumlah Siswa<i
                  class="ms-2 fa-solid fa-graduation-cap mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">
                <?= $cSiswa ?>
              </h2>
              <h6 class="card-text"></h6>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <a class="w-100 text-decoration-none" href="<?= base_url('kelas') ?>">
          <div class="card bg-gradient-info card-img-holder text-white">
            <div class="card-body">
              <img src="<?= base_url('assets/'); ?>images/dashboard/circle.svg" class="card-img-absolute"
                alt="circle-image" />
              <h4 class="font-weight-normal mb-3">Jumlah Kelas<i
                  class="ms-2 fa-solid fa-school mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">
                <?= $cKelas ?>
              </h2>
              <h6 class="card-text">
              </h6>
            </div>

          </div>
        </a>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <a class="w-100 text-decoration-none" href="<?= base_url('jurusan') ?>">
          <div class="card bg-gradient-success card-img-holder text-white">

            <div class="card-body">
              <img src="<?= base_url('assets/'); ?>images/dashboard/circle.svg" class="card-img-absolute"
                alt="circle-image" />
              <h4 class="font-weight-normal mb-3">Jumlah Jurusan<i
                  class="ms-2 fa-solid fa-shirt mdi-24px float-right"></i>
              </h4>
              <h2 class="mb-5">
                <?= $cJurusan ?>
              </h2>
              <h6 class="card-text"></h6>
            </div>
          </div>
      </div>
      </a>
    </div>

    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Recent</h4>
            <div class="table-responsive">
              <table id="tabelRencent" class="table" style="width:100%">
                <thead>
                  <tr>
                    <th> Assignee </th>
                    <th> Subject </th>
                    <th> Status </th>
                    <th> Last Update </th>
                    <th> Tracking ID </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <img src="<?= base_url('assets/'); ?>images/faces/face1.jpg" class="me-2" alt="image"> David Grey
                    </td>
                    <td> Fund is not recieved </td>
                    <td>
                      <label class="badge badge-gradient-success">DONE</label>
                    </td>
                    <td> Dec 5, 2017 </td>
                    <td> WD-12345 </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="<?= base_url('assets/'); ?>images/faces/face2.jpg" class="me-2" alt="image"> Stella
                      Johnson
                    </td>
                    <td> High loading time </td>
                    <td>
                      <label class="badge badge-gradient-warning">PROGRESS</label>
                    </td>
                    <td> Dec 12, 2017 </td>
                    <td> WD-12346 </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="<?= base_url('assets/'); ?>images/faces/face3.jpg" class="me-2" alt="image"> Marina
                      Michel
                    </td>
                    <td> Website down for one week </td>
                    <td>
                      <label class="badge badge-gradient-info">ON HOLD</label>
                    </td>
                    <td> Dec 16, 2017 </td>
                    <td> WD-12347 </td>
                  </tr>
                  <tr>
                    <td>
                      <img src="<?= base_url('assets/'); ?>images/faces/face4.jpg" class="me-2" alt="image"> John Doe
                    </td>
                    <td> Loosing control on server </td>
                    <td>
                      <label class="badge badge-gradient-danger">REJECTED</label>
                    </td>
                    <td> Dec 3, 2017 </td>
                    <td> WD-12348 </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


  <!-- Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
        </div>
        <div class="modal-body fw-bold">
          <h4>Selamat Datang
            <?= $this->session->userdata['full_name'] ?>
          </h4>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.php -->