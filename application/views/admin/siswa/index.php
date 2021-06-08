<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  METODE MULTI ATTRIBUTE UTILITY THEORY DAN ELECTRE
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Siswa
                </button>
                <!-- modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Form Siswa</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <form action="<?=site_url('siswa/store')?>" method="post">
                          <div class="modal-body">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Nama Siswa</label>
                                  <input type="text" name="nama_siswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Nama">
                              </div>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <input type="submit" class="btn btn-primary" value="SUBMIT">
                          </div>
                      </form>
                      </div>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>Action</th>
                    </thead>
                    <tbody>
                      <?php $no=1; foreach($siswa as $data) : ?>
                        <tr>
                          <td><?=$no++?></td>
                          <td><?=$data->nama_siswa ?></td>
                          <td>
                          <button type="button" class="btn-sm btn btn-primary" data-toggle="modal" data-target="#editUser<?=$data->id?>">
                          Edit
                          </button>
                         
                            <a href="<?=site_url('siswa/delete/'.$data->id)?>" class="btn btn-sm btn-danger">Hapus</a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>

                <?php
                  foreach($siswa as $i):
                      $id=$i->id;
                      $nama=$i->nama_siswa;
                  ?>
                <!-- edit modal -->
                <div class="modal fade" id="editUser<?=$id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Siswa</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <form action="<?=site_url('siswa/update')?>" method="post">
                          <div class="modal-body">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Nama Siswa</label>
                                  <input type="text" name="nama_siswa" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Nama" value="<?=$nama?>">
                              </div>
                              
                          </div>
                          <div class="modal-footer">
                              <input type="hidden" name="id"  value="<?=$id?>">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <input type="submit" class="btn btn-primary" value="SUBMIT">
                          </div>
                      </form>
                      </div>
                  </div>
                </div>
                <?php endforeach; ?>

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
