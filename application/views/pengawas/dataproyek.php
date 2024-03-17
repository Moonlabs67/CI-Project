        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Data Proyek</h1>

          
          
          <div class="row">
              <div class="col-lg-13">
                <!-- Tampilan error rules -->
          <?= form_error ('namaproyek', '<div class="alert alert-danger" role="alert">', '</div'); ?>
                 <!-- Tampilan error rules -->
          <?= $this->session->flashdata('message'); ?>

              <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Proyek</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col" >Nilai Proyek</th>
                    <th scope="col" >Tanggal Mulai</th>
                    <th scope="col" >Tanggal Akhir</th>
                    <th scope="col" >Deadline</th>
                    <th scope="col" >Progress</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $row = 1; ?>
                  <?php foreach ($proyek as $p) : ?>
                  <tr >
                    <th scope="row"><?= $row; ?></th>
                    <td ><?= $p['nama_proyek'] ?></td>
                    <td><?= $p['lokasi'] ?></td>
                    <td><?= $p['nilai_proyek'] ?></td>
                    <td><?= $p['tgl_mulai'] ?></td>
                    <td><?= $p['tgl_akhir'] ?></td>
                    <td><?= $p['deadline'] ?></td>
                    <td><?= $p['progress'] ?></td>
                    <td >
                        <a href="<?php echo base_url().'pengawas/editproyek/'.$p['id_proyek'];?>" class="btn btn-success btn-sm" ><span class="glyphicon glyphicon-print"></span> Add Progress </a>
                    </td>
                  </tr>
                  <?php $row++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>

              </div>
          </div>



          </div>

        </div>
        <!-- /.container-fluid -->