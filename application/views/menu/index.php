        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

          <!-- Card User -->
          <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                 <img src="<?= base_url('assets/img/profile/') . $user ['image']; ?>" class="card-img">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"><?= $user ['nama']; ?></h5>
                  <p class="card-text"><?= $user ['email']; ?></p>
                  <p class="card-text"><?= $user ['alamat']; ?></p>
                  <p class="card-text"><small class="text-muted"><?= $user ['no_hp']; ?></small></p>
                </div>
              </div>
            </div>
          </div>
        <!-- Card User end -->
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->