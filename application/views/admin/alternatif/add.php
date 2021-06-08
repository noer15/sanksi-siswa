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
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Form Alternatif</h5>
              </div>
              <div class="card-body">
                <form action="<?=site_url('alternatif/store')?>" method="post">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="form-group">
                            <label>Nama Siswa</label>
                            <select name="id_siswa" id="" class="form-control">
                                <option value="">--pilih siswa--</option>
                                <?php foreach ($this->db->get('siswa')->result() as $data):?>
                                    <option value="<?=$data->id?>"><?=$data->nama_siswa?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        </div>
                    </div>
                  <div class="row" id="dynamic_field">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Kriteria</label>
                        <select name="id_kriteria[]" id="" class="form-control">
                            <option value="">--pilih kriteria--</option>
                            <?php foreach ($this->db->get('kriteria')->result() as $data):?>
                                <option value="<?=$data->id?>"><?=$data->nama_kriteria?></option>
                            <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Nilai</label>
                        <input type="number" name="nilai[]" class="form-control" placeholder="Masukan nilai" value="...">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                          <button type="button" id="add" class="btn btn-success mt-4 w-full btn-block">+</button>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-primary btn-round">Simpan</button>
                    </div>
                  </div>

                </form>
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
  <script>
    $(document).ready(function(){  
          var i=1;  
          $('#add').click(function(){  
               i++;  
               $('#dynamic_field').append('<div class="col-md-12" ><div class="row" id="row'+i+'"><div class="form-group col-md-6 pr-1"><label for="inputState">Kriteria</label><select class="form-control custom-select" name="id_kriteria[]"><option>--Pilih kriteria--</option><?php foreach ($this->db->get('kriteria')->result() as $data):?><option value="<?=$data->id?>"><?=$data->nama_kriteria?></option><?php endforeach; ?></select></div><div class="form-group col-md-4 pr-1"><label for="Niali">Nilai</label><input type="number" class="form-control" id="input" name="nilai[]" placeholder="Nilai" required=""></div><div class="col-md-2" ><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove btn-block mt-4">X</button></div></div></div>'); 
          });  

          $(document).on('click', '.btn_remove', function(){  
               var button_id = $(this).attr("id");   
               $('#row'+button_id+'').remove();  
          });
      });
</script>
</body>


</html>
