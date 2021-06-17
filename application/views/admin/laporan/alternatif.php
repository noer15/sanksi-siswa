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
                <a href="<?=site_url('laporan/cetak_alternatif')?>" class="btn btn-sm btn-info" target="_blank">Cetak</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <th>No</th>
                      <th>Nama Siswa</th>
                      <th>Nilai</th>
                    </thead>
                    <tbody>
                      <?php $no=1;  foreach($this->db->get('siswa')->result() as $a) : ?>
                        <tr style="background-color: #8080805e">
                          <td><?=$no++?></td>
                          <td><?=$a->nama_siswa ?></td>
                          <?php $data = $this->db->query("SELECT SUM(nilai) AS nilai FROM alternatif WHERE id_siswa = '$a->id'")->row()?>
                          <td><strong>Total : <?=empty($data->nilai) ? '-' : $data->nilai ?></strong></td>
                        </tr>
                        <?php foreach ($this->db->query("SELECT siswa.nama_siswa,  kriteria.nama_kriteria,  alternatif.* FROM alternatif INNER JOIN siswa ON alternatif.id_siswa = siswa.id INNER JOIN kriteria ON alternatif.id_kriteria = kriteria.id WHERE id_siswa = '$a->id'")->result() as $data) { ?>
                            <tr>
                                <td colspan="1"></td>
                                <td><?=$data->nama_kriteria ?></td>
                                <td><?=$data->nilai ?></td>
                            </tr>
                          <?php } ?>
                      <?php endforeach; ?>
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
