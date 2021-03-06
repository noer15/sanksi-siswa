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
                <a href="<?=site_url('alternatif/add')?>" class="btn btn-sm btn-info">Tambah Alternatif</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>No</th>
                      <th>Nama Siswa</th>
                      <th>Nilai</th>
                      <th>Action</th>
                    </thead>
                    <tbody>
                      <?php $no=1;  foreach($this->db->get('siswa')->result() as $a) : ?>
                        <tr>
                          <td><?=$no++?></td>
                          <td><?=$a->nama_siswa ?></td>
                          <?php $data = $this->db->query("SELECT SUM(nilai) AS nilai FROM alternatif WHERE id_siswa = '$a->id'")->row()?>
                          <td><?=empty($data->nilai) ? '-' : $data->nilai ?></td>
                          <td>
                            <a href="<?=site_url('alternatif/view/'.$a->id)?>" class="btn btn-sm btn-success">view</a>
                            <?php if ($data->nilai > 200) { ?>
                              <a href="https://wa.me/<?=$a->no_tlp?>" class="btn btn-info btn-sm">Kirim WA</a>
                            <?php } ?>
                          </td>
                        </tr>
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
