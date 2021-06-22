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
              <div class="card-body">
                <div class="table-responsive">
                    <div class="header-card">
                        <span>1.  Normalizing</span>
                    </div><br>
                    <table class="table" style="border:1px solid #bfbfbf70;">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Kehadiran</th>
                          <th>Keterlambatan</th>
                          <th>Merokok</th>
                          <th>Perkelahian</th>
                          <th>Membawa Senjata</th>
                          <th>Obat Terlarang / Miras</th>
                        </tr>
                      </thead>
                      <tbody>
                            <?php $no=1; foreach ($this->db->get('siswa')->result() as $data) { ?>
                                <tr>
                                    <td><?=$no++?></td>
                                    <td><?=$data->nama_siswa?></td>
                                    <?php $data1 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 1")->row()?>
                                    <td><?=empty($data1->nilai) ? '-' : $data1->nilai ?></td>
                                    <?php $data2 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 2")->row()?>
                                    <td><?=empty($data2->nilai) ? '-' : $data2->nilai ?></td>
                                    <?php $data3 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 3")->row()?>
                                    <td><?=empty($data3->nilai) ? '-' : $data3->nilai ?></td>
                                    <?php $data4 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 4")->row()?>
                                    <td><?=empty($data4->nilai) ? '-' : $data4->nilai ?></td>
                                    <?php $data5 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 5")->row()?>
                                    <td><?=empty($data5->nilai) ? '-' : $data5->nilai ?></td>
                                    <?php $data6 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 6")->row()?>
                                    <td><?=empty($data6->nilai) ? '-' : $data6->nilai ?></td>
                                </tr>
                            <?php } ?>

                      </tbody>
                  </table>

                    <div class="header-card">
                        <span>Akar</span>
                    </div><br>
                    <table class="table" style="border:1px solid #bfbfbf70;">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Kehadiran</th>
                          <th>Keterlambatan</th>
                          <th>Merokok</th>
                          <th>Perkelahian</th>
                          <th>Membawa Senjata</th>
                          <th>Obat Terlarang / Miras</th>
                        </tr>
                      </thead>
                      <tbody>
                            <?php $no=1; foreach ($this->db->get('siswa')->result() as $data) { ?>
                                <tr>
                                    <td><?=$no++?></td>
                                    <td><?=$data->nama_siswa?></td>
                                    <?php $data1 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 1")->row()?>
                                    <td><?=empty($data1->nilai) ? '-' : $data1->nilai*$data1->nilai ?></td>
                                    <?php $data2 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 2")->row()?>
                                    <td><?=empty($data2->nilai) ? '-' : $data2->nilai*$data2->nilai ?></td>
                                    <?php $data3 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 3")->row()?>
                                    <td><?=empty($data3->nilai) ? '-' : $data3->nilai*$data3->nilai ?></td>
                                    <?php $data4 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 4")->row()?>
                                    <td><?=empty($data4->nilai) ? '-' : $data4->nilai*$data4->nilai ?></td>
                                    <?php $data5 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 5")->row()?>
                                    <td><?=empty($data5->nilai) ? '-' : $data5->nilai*$data5->nilai ?></td>
                                    <?php $data6 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 6")->row()?>
                                    <td><?=empty($data6->nilai) ? '-' : $data6->nilai*$data6->nilai ?></td>
                                </tr>
                            <?php } ?>
                            <tr style="background-color: #bfbfbf70;">
                                <td colspan="2"></td>
                                <?php $data1 = $this->db->query("SELECT SUM(nilai) AS nilai FROM alternatif WHERE id_kriteria = 1")->row()?>
                                <td><?=empty($data1->nilai) ? '-' : $data1->nilai*$data1->nilai ?></td>
                                <?php $data2 = $this->db->query("SELECT SUM(nilai) AS nilai FROM alternatif WHERE id_kriteria = 2")->row()?>
                                <td><?=empty($data2->nilai) ? '-' : $data2->nilai*$data2->nilai ?></td>
                                <?php $data3 = $this->db->query("SELECT SUM(nilai) AS nilai FROM alternatif WHERE id_kriteria = 3")->row()?>
                                <td><?=empty($data3->nilai) ? '-' : $data3->nilai*$data3->nilai ?></td>
                                <?php $data4 = $this->db->query("SELECT SUM(nilai) AS nilai FROM alternatif WHERE id_kriteria = 4")->row()?>
                                <td><?=empty($data4->nilai) ? '-' : $data4->nilai*$data4->nilai ?></td>
                                <?php $data5 = $this->db->query("SELECT SUM(nilai) AS nilai FROM alternatif WHERE id_kriteria = 5")->row()?>
                                <td><?=empty($data5->nilai) ? '-' : $data5->nilai*$data5->nilai ?></td>
                                <?php $data6 = $this->db->query("SELECT SUM(nilai) AS nilai FROM alternatif WHERE id_kriteria = 6")->row()?>
                                <td><?=empty($data6->nilai) ? '-' : $data6->nilai*$data6->nilai ?></td>
                            </tr>
                      </tbody>
                  </table>

                  <!-- dibagi -->
                  <div class="header-card">
                        <!-- <span>Akar</span> -->
                    </div><br>
                    <table class="table" style="border:1px solid #bfbfbf70;">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Kehadiran</th>
                          <th>Keterlambatan</th>
                          <th>Merokok</th>
                          <th>Perkelahian</th>
                          <th>Membawa Senjata</th>
                          <th>Obat Terlarang / Miras</th>
                        </tr>
                      </thead>
                      <tbody>
                            <?php $no=1; foreach ($this->db->get('siswa')->result() as $data) { ?>
                                <tr>
                                    <td><?=$no++?></td>
                                    <td><?=$data->nama_siswa?></td>
                                    <?php $data1 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 1")->row()?>
                                    <?php $item1 = $this->db->query("SELECT SUM(nilai) AS nilai FROM alternatif WHERE id_kriteria = 1")->row()?>
                                    <td><?=empty($data1->nilai) ? '-' : number_format((float)$data1->nilai/$item1->nilai,2) ?></td>
                                    <!-- kreteria2 -->
                                    <?php $data2 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 2")->row()?>
                                    <?php $item2 = $this->db->query("SELECT SUM(nilai) AS nilai FROM alternatif WHERE id_kriteria = 2")->row()?>
                                    <td><?=empty($data2->nilai) ? '-' : number_format((float)$data2->nilai/$item2->nilai,2)  ?></td>

                                    <?php $data3 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 3")->row()?>
                                    <?php $item3 = $this->db->query("SELECT SUM(nilai) AS nilai FROM alternatif WHERE id_kriteria = 3")->row()?>
                                    <td><?=empty($data3->nilai) ? '-' : number_format((float)$data3->nilai/$item3->nilai,2) ?></td>

                                    <?php $data4 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 4")->row()?>
                                    <?php $item4 = $this->db->query("SELECT SUM(nilai) AS nilai FROM alternatif WHERE id_kriteria = 4")->row()?>
                                    <td><?=empty($data4->nilai) ? '-' : number_format((float)$data4->nilai/$item4->nilai,2) ?></td>

                                    <?php $data5 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 5")->row()?>
                                    <?php $item5 = $this->db->query("SELECT SUM(nilai) AS nilai FROM alternatif WHERE id_kriteria = 5")->row()?>
                                    <td><?=empty($data5->nilai) ? '-' : number_format((float)$data5->nilai/$item5->nilai,2) ?></td>

                                    <?php $data6 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 6")->row()?>
                                    <?php $item6 = $this->db->query("SELECT SUM(nilai) AS nilai FROM alternatif WHERE id_kriteria = 6")->row()?>
                                    <td><?=empty($data6->nilai) ? '-' : number_format((float)$data6->nilai/$item6->nilai,2) ?></td>
                                </tr>
                            <?php } ?>
                      </tbody>
                  </table>


                </div>
              </div>
            </div><br>
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                    <div class="header-card">
                        <span>2.  Weighting the Normalizing</span>
                    </div><br>
                    <table class="table" style="border:1px solid #bfbfbf70;">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Kehadiran (5%)</th>
                          <th>Keterlambatan (5%)</th>
                          <th>Merokok (10%)</th>
                          <th>Perkelahian (20%)</th>
                          <th>Membawa Senjata (30%)</th>
                          <th>Obat Terlarang / Miras (30%)</th>
                        </tr>
                      </thead>
                      <tbody>
                            <?php $no=1; foreach ($this->db->get('siswa')->result() as $data) { ?>
                                <tr>
                                    <td><?=$no++?></td>
                                    <td><?=$data->nama_siswa?></td>
                                    <?php $data1 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 1")->row()?>
                                    <?php $item1 = $this->db->query("SELECT SUM(nilai) AS nilai FROM alternatif WHERE id_kriteria = 1")->row()?>
                                    <td><?=empty($data1->nilai) ? '-' : number_format((float)$data1->nilai/$item1->nilai,2)*5 ?></td>
                                    <!-- kreteria2 -->
                                    <?php $data2 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 2")->row()?>
                                    <?php $item2 = $this->db->query("SELECT SUM(nilai) AS nilai FROM alternatif WHERE id_kriteria = 2")->row()?>
                                    <td><?=empty($data2->nilai) ? '-' : number_format((float)$data2->nilai/$item2->nilai,2)*5 ?></td>

                                    <?php $data3 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 3")->row()?>
                                    <?php $item3 = $this->db->query("SELECT SUM(nilai) AS nilai FROM alternatif WHERE id_kriteria = 3")->row()?>
                                    <td><?=empty($data3->nilai) ? '-' : number_format((float)$data3->nilai/$item3->nilai,2)*10 ?></td>

                                    <?php $data4 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 4")->row()?>
                                    <?php $item4 = $this->db->query("SELECT SUM(nilai) AS nilai FROM alternatif WHERE id_kriteria = 4")->row()?>
                                    <td><?=empty($data4->nilai) ? '-' : number_format((float)$data4->nilai/$item4->nilai,2)*20 ?></td>

                                    <?php $data5 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 5")->row()?>
                                    <?php $item5 = $this->db->query("SELECT SUM(nilai) AS nilai FROM alternatif WHERE id_kriteria = 5")->row()?>
                                    <td><?=empty($data5->nilai) ? '-' : number_format((float)$data5->nilai/$item5->nilai,2)*30 ?></td>

                                    <?php $data6 = $this->db->query("SELECT * FROM alternatif WHERE id_siswa = '$data->id' AND id_kriteria = 6")->row()?>
                                    <?php $item6 = $this->db->query("SELECT SUM(nilai) AS nilai FROM alternatif WHERE id_kriteria = 6")->row()?>
                                    <td><?=empty($data6->nilai) ? '-' : number_format((float)$data6->nilai/$item6->nilai,2)*30 ?></td>
                                </tr>
                            <?php } ?>
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
