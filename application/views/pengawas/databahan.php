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



              <a href="" class="btn btn-primary mb-2" data-toggle="modal" data-target="#NewBahan">Tambah Data Bahan</a>

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
                    <th scope="col">Action</th>
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
                    <td >
                        <a href="<?php echo base_url().'pengawas/editbahan/'.$b['id_bahan'];?>" class="badge badge-success">Edit</a>
                        <a href="<?php echo base_url().'pengawas/deletebahan/'.$b['id_bahan'];?>" class="badge badge-danger">Hapus</a>
                    </td>
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

<!-- Modal -->
<div class="modal fade" id="NewBahan" tabindex="-1" role="dialog" aria-labelledby="NewBahanModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="NewBahanModalLabel">Tambah Data Bahan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('pengawas/databahan'); ?>" method="post">
          <div class="modal-body">
            <div class="form-group"><label>Nama Proyek</label>
              <select  class="form-control" name="namaproyek" id="namaproyek" required>
                <option value="">Pilih Nama Proyek</option>
                <?php
                foreach($proyek as $pr){ // looping pada variabel proyek dari controller databahan
                echo "<option value='".$pr['nama_proyek']."'>".$pr['nama_proyek']."</option>";
                }
                ?>
              </select>
            </div>
            <div class="form-group"><label>Nama Bahan</label>
              <input type="text" class="form-control" id="namabahan" name="namabahan" >
            </div>
            <div class="form-group"><label>Satuan</label>
              <input type="text" class="form-control" id="satuan" name="satuan" >
            </div>
            <div class="form-group"><label>Harga Satuan</label>
              <input type="text" class="uang"  id="harga" name="harga" >
            </div>
            <div class="form-group"><label>Tanggal Masuk</label>
              <input type="date" class="form-control" id="tglmasuk" name="tglmasuk" >
            </div>
            <div class="form-group"><label>Jumlah</label>
              <input type="text" class="form-control" id="jumlah" name="jumlah" >
            </div>
            <div class="form-group"><label>Tanggal Pakai</label>
              <input type="date" class="form-control" id="tglpakai" name="tglpakai">
            </div>
            <div class="form-group"><label>Jumlah Pakai</label>
              <input type="text" class="form-control" id="jumlahpakai" name="jumlahpakai" >
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