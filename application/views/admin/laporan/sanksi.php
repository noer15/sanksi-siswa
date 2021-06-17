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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <a href="<?=site_url('laporan/cetak_sanksi')?>" class="btn btn-primary" target="_blank">
                Cetak
                </a>
                <!-- modal -->
              </div>
              <div class="card-body">
                <div class="table-responsive">
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
