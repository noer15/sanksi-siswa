<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('layouts/head') ?> 

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
          <?=$this->session->userdata('role')=='1' ? 'ADMIN' : 'GURU BK'?>
        </a>
      </div>
      <?php $this->load->view('layouts/header')?>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <?php $this->load->view('layouts/navbar')?>
      <!-- End Navbar -->
      <!-- konten isi -->
      <div class="content">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-globe text-warning"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Siswa</p>
                      <p class="card-title"><?=$this->db->get('siswa')->num_rows()?><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                  Update Now
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-money-coins text-success"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">User</p>
                      <p class="card-title"><?=$this->db->get('user')->num_rows()?><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-calendar-o"></i>
                  Last day
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-vector text-danger"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Kriteria</p>
                      <p class="card-title"><?=$this->db->get('kriteria')->num_rows()?><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-clock-o"></i>
                  In the last hour
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
              <div class="card-body ">
                <div class="row">
                  <div class="col-5 col-md-4">
                    <div class="icon-big text-center icon-warning">
                      <i class="nc-icon nc-favourite-28 text-primary"></i>
                    </div>
                  </div>
                  <div class="col-7 col-md-8">
                    <div class="numbers">
                      <p class="card-category">Alternatif</p>
                      <p class="card-title"><?=$this->db->get('alternatif')->num_rows()?><p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-refresh"></i>
                  Update now
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Data Kriteria Pelanggaran</h5>
              </div>
              <div class="card-body ">
                <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Jenis Pelanggaran</th>
                      <th>Sanksi Ringan</th>
                      <th>Sanksi Sedang</th>
                      <th>Sanksi Berat</th>
                      <th>Persentasi Bobot</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Keterlambatan</td>
                      <td>5</td>
                      <td>15</td>
                      <td>30</td>
                      <td>5%</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Kehadiran</td>
                      <td>10</td>
                      <td>20</td>
                      <td>50</td>
                      <td>5%</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Merokok</td>
                      <td>30</td>
                      <td>50</td>
                      <td>70</td>
                      <td>10%</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Perkelahian</td>
                      <td>30</td>
                      <td>45</td>
                      <td>75</td>
                      <td>20%</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Membawa Senjata</td>
                      <td>75</td>
                      <td>90</td>
                      <td>200</td>
                      <td>30%</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>Obat terlarang / Miras</td>
                      <td>75</td>
                      <td>90</td>
                      <td>150</td>
                      <td>30%</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="card-footer ">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end konten -->
      <?php $this->load->view('layouts/footer')?>
    </div>
  </div>
  <!--   Core JS Files   -->
  <?php $this->load->view('layouts/script')?>
</body>

</html>
