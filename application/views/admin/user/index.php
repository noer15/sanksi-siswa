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
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah User
                </button>
                <!-- modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <form action="<?=site_url('user/store')?>" method="post">
                          <div class="modal-body">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Nama</label>
                                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Nama">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Username</label>
                                  <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Email</label>
                                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Hak Akses</label>
                                  <select name="role" class="form-control" id="">
                                      <option value="1">Admin</option>
                                      <option value="2">Guru BK</option>
                                  </select>
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
                      <th>
                        Username
                      </th>
                      <th>
                        Email
                      </th>
                      <th>Role</th>
                      <th>Action</th>
                    </thead>
                    <tbody>
                      <?php $no=1; foreach($user as $data) : ?>
                        <tr>
                          <td><?=$no++?></td>
                          <td><?=$data->nama?></td>
                          <td><?=$data->username?></td>
                          <td><?=$data->email?></td>
                          <td><?=$data->role == 1 ? 'Admin' : 'Guru BK'?></td>
                          <td>
                          <button type="button" class="btn-sm btn btn-primary" data-toggle="modal" data-target="#editUser<?=$data->id?>">
                          Edit User
                          </button>
                          <button type="button" class="btn-sm btn btn-primary" data-toggle="modal" data-target="#password<?=$data->id?>">
                            Ubah Password
                          </button>
                            <a href="<?=site_url('user/delete/'.$data->id)?>" class="btn btn-sm btn-danger">Hapus</a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>

                <?php
                  foreach($user as $i):
                      $id=$i->id;
                      $nama=$i->nama;
                      $username=$i->username;
                      $email=$i->email;
                      $role = $i->role;
                  ?>
                <!-- edit modal -->
                <div class="modal fade" id="editUser<?=$id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <form action="<?=site_url('user/update')?>" method="post">
                          <div class="modal-body">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">usernama</label>
                                  <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Nama" value="<?=$nama?>">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Username</label>
                                  <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username"  value="<?=$username?>">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Email</label>
                                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"  value="<?=$email?>">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Hak Akses</label>
                                  <select name="role" class="form-control" id="">
                                      <option value="1">Admin</option>
                                      <option value="2">Guru BK</option>
                                  </select>
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

                <!-- password -->
                <?php
                  foreach($user as $i):
                      $id=$i->id;
                      $nama=$i->password;
                  ?>
                <!-- edit modal -->
                <div class="modal fade" id="password<?=$id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Password</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <form action="<?=site_url('auth/update_password')?>" method="post">
                          <div class="modal-body">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">password</label>
                                  <input type="text" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password Baru" >
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
                <!-- end -->
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
