        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

          <!-- Content Row -->
          <div class="row">

             <!-- Daftar Proyek -->
             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Daftar Proyek</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $proyek ['nama_proyek']; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Data Bahan -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Data Bahan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $bahan ['nama_bahan']; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-table fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Progress -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Progress</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $proyek ['progress']; ?></div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!-- Pengguna -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">User</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $user ['nama']; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <!--START ICON INSTAGRAM -->
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
          <!--END ICON INSTAGRAM -->

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
        
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->