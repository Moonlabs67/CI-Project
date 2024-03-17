<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <title>Welcome</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <a class="navbar-brand" href="#">SISFO PENGAWASAN PROYEK KONSTRUKSI JALAN RAYA | <b>PT.STAR MITRA SULAWESI</b></a>
          <form class="form-inline my-2 my-lg-0 ml-auto" action="<?php echo base_url(); ?>index.php/auth">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Login</button>
        </form>
        <div class="icon ml-4">
          <h5>
              <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
              <i class="fas fa-bell mr-3"data-toggle="tooltip" title="Notifikasi"></i>
              <i class="fas fa-sign-out-alt mr-3"data-toggle="tooltip" title="Sign Out"></i>
          </h5>
        </div>
      </div>
    </nav>
    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
          <ul class="nav flex-column ml-3 mb-5">
              <li class="nav-item">
                <a class="nav-link active text-white" href="index.php"> <i class="fas fa-tachometer-alt mr-2"></i> Home</a><hr class="bg-secondary">
              </li>
              <li class="nav-item">
                <li class="nav-item">
                <a class="nav-link text-white" href="about.php"> <i class="fas fa-tasks mr-2"></i> About</a><hr class="bg-secondary">
              </li>
            </ul>
      </div>
      <div class="col-md-10 p-5 pt-2">
        <h5> Selamat Datang di Sistem Informasi Pengawasan Proyek <br> Konstruksi Jalan Raya PT.Star Mitra Sulawesi <br> Silahkan Login untuk Melanjutkan</h5> <br>
        <br> <br> <br> <br> <br> <br> <br> <br> 
        <!--INSTAGRAM -->
        <div class="row mt-4">
            <div class="card ml-5 text-white text-center"style="width: 18rem;">
                <div class="card-header bg-danger display-4 pt-4 pb-4">
                    <i class="fab fa-instagram"></i>
                </div>
                <div class="card-body">
                  <h5 class="card-title text-danger">INSTAGRAM</h5>
                  <a href="#" class="btn btn-danger btn-primary">Follow</a>
                </div>
              </div>
        <!--ICON EMAIL -->
            <div class="card ml-5 text-white text-center"style="width: 18rem;">
                <div class="card-header bg-info display-4 pt-4 pb-4">
                    <i class="fab fa-google-plus-g"></i>
                </div>
                <div class="card-body">
                  <h5 class="card-title text-info">GOOGLE+</h5>
                  <a href="#" class="btn btn-info btn-info">Follow</a>
                </div>
            </div>
        <!--ICON TWITTER -->
            <div class="card ml-5 text-white text-center"style="width: 18rem;">
              <div class="card-header bg-primary display-4 pt-4 pb-4">
                  <i class="fab fa-twitter"></i>
              </div>
              <div class="card-body">
                <h5 class="card-title text-primary">TWITTER</h5>
                <a href="#" class="btn btn-primary">Follow</a>
              </div>
            </div>
          <!--ICON END -->
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
  </body>
</html>