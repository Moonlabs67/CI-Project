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



              <a href="" class="btn btn-primary mb-2 tombolTambahData"  data-toggle="modal" data-target="#NewProyek">Tambah Data Proyek</a>

              <table class="table table-bordered ">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Proyek</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col" >Nilai Proyek</th>
                    <th scope="col" >Tanggal Mulai</th>
                    <th scope="col" >Tanggal Akhir</th>
                    <th scope="col" >Jangka Waktu</th>
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
                    <td >
                        <a href="<?php echo base_url().'direktur/editproyek/'.$p['id_proyek'];?>" class="badge badge-success">Edit</a>
                        <a href="<?php echo base_url().'direktur/deleteproyek/'.$p['id_proyek'];?>" class="badge badge-danger">Hapus</a>
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



<!-- Modal -->
<div class="modal fade" id="NewProyek" tabindex="-1" role="dialog" aria-labelledby="NewProyekModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="NewProyekModalLabel">Tambah Data Proyek</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('direktur/dataproyek'); ?>" method="post">
          <div class="modal-body">
            <div class="form-group"><label>Nama Proyek</label>
              <input type="text" class="form-control" id="namaproyek" name="namaproyek" >
            </div>
            <div class="form-group"><label>Lokasi</label>
              <input type="text" class="form-control" id="lokasi" name="lokasi" >
            </div>
            <div class="form-group"><label>Nilai Proyek</label>
              <input type="text" class="uang"  id="nilai" name="nilai" >
            </div>
            <div class="form-group"><label>Tanggal Mulai</label>
              <input type="date" class="form-control" id="tglmulai" name="tglmulai" >
            </div>
            <div class="form-group"><label>Tanggal Akhir</label>
              <input type="date" class="form-control" id="tglakhir" name="tglakhir" >
            </div>
            <div class="form-group"><label>Jangka Waktu</label>
              <input type="text" class="form-control" id="deadline" name="deadline" >
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
      </form>
    </div>
  </div>
</div>