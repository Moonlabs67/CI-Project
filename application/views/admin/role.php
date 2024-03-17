        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Role User</h1>

          
          
          <div class="row">
              <div class="col-lg-5">
                <!-- Tampilan error rules -->
          <?= form_error ('namabahan', '<div class="alert alert-danger" role="alert">', '</div'); ?>
                 <!-- Tampilan error rules -->
          <?= $this->session->flashdata('message'); ?>




              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Role ID</th>
                    <th scope="col">Hak Akses</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $row = 1; ?>
                  <?php foreach ($role as $r) : ?>
                  <tr >
                    <th scope="row"><?= $row; ?></th>
                    <td ><?= $r['role'] ?></td>
                  </tr>
                  <?php $row++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>

              </div>
          </div>





        </div>
        <!-- /.container-fluid -->

      </div>
      <!--Modal-->
