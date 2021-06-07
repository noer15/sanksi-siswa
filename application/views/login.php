
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
     Login
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://bukureact.id/member/assets/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="https://bukureact.id/member/assets/css/material-dashboard.css?v=2.1.0-12-11-18" rel="stylesheet" />
  <style type="text/css">
    body {
        background: url(https://bukureact.id/member/assets/img/lock.jpg) no-repeat center center fixed;
        background-size: cover;
        height: 100%;
        overflow: hidden;
    }

    footer.footer nav a, footer.footer div, footer.footer div a{
        color: white;
        text-decoration:none;
    }
  </style>
</head>

<body class="off-canvas-sidebar">
  <div class="wrapper ">
      <nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="index.php"> GIAN ALFIAN M </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <span>NRP : 14516803</span>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="content">
    <div class="container-fluid">
        
    <div class="row justify-content-center">
        <div class="col-sm-6 align-self-center">
            <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                        <i class="material-icons">lock</i>
                    </div>
                    <p class="card-category"></p>
                    <h3 class="card-title">Authentication <small></small></h3>
                </div>
                <div class="card-body">
                    <form action="index.php" method="post">
                    <div class="form-group label-floating has-success">
                        <label class="control-label">Username / Email</label>
                        <input type="text" name="token" placeholder="..." class="form-control" />
                    </div>
                    <div class="form-group label-floating has-success">
                        <label class="control-label">Password</label>
                        <input type="text" name="token" placeholder="..." class="form-control" />
                    </div>
                    <button type="submit" name="login" value="ok" class="btn btn-success">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>        
    </div>
</div>

  </div>
  <!--   Core JS Files   -->
  <!--  Notifications Plugin    -->
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  
</body>

</html>
