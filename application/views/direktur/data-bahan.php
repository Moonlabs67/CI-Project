        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Data Bahan</h1>

          
          
          <div class="row">
              <div class="col-lg-13">
                <!-- Tampilan error rules -->
          <?= form_error ('namabahan', '<div class="alert alert-danger" role="alert">', '</div'); ?>
                 <!-- Tampilan error rules -->
          <?= $this->session->flashdata('message'); ?>

          <table class="table table-bordered ">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Proyek</th>
                    <th scope="col">Nama Bahan</th>
                    <th scope="col" >Satuan</th>
                    <th scope="col" >Harga Satuan</th>
                    <th scope="col" >Tanggal Masuk</th>
                    <th scope="col" >Jumlah</th>
                    <th scope="col" >Tanggal Pakai</th>
                    <th scope="col" >Jumlah Pakai</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $row = 1; ?>
                  <?php foreach ($bahan as $b) : ?>
                  <tr >
                    <th scope="row"><?= $row; ?></th>
                    <td ><?= $b['nm_proyek'] ?></td>
                    <td ><?= $b['nama_bahan'] ?></td>
                    <td><?= $b['satuan'] ?></td>
                    <td><?= $b['harga_satuan'] ?></td>
                    <td><?= $b['tgl_masuk'] ?></td>
                    <td><?= $b['jumlah'] ?></td>
                    <td><?= $b['tgl_pakai'] ?></td>
                    <td ><?= $b['jumlah_pakai'] ?></td>
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
