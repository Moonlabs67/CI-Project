        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Data Pegawai</h1>

          
          
          <div class="row">
              <div class="col-lg-13">
                 <!-- Tampilan error rules -->
          <?= $this->session->flashdata('message'); ?>

                <table class="table table-bordered ">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nama</th>
                    <th scope="col" >Alamat</th>
                    <th scope="col" >No.Hp</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $row = 1; ?>
                  <?php foreach ($pegawai as $pg) : ?>
                  <tr >
                    <th scope="row"><?= $row; ?></th>
                    <td ><?= $pg['email'] ?></td>
                    <td><?= $pg['nama'] ?></td>
                    <td><?= $pg['alamat'] ?></td>
                    <td><?= $pg['no_hp'] ?></td>
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