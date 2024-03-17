        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Kelola Data Pengguna</h1>

          
          
          <div class="row">
              <div class="col-lg-13">
                <!-- Tampilan error rules -->
          <?= form_error ('namabahan', '<div class="alert alert-danger" role="alert">', '</div'); ?>
                 <!-- Tampilan error rules -->
          <?= $this->session->flashdata('message'); ?>

              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Email</th>
                    <th scope="col" >Nama</th>
                    <th scope="col" >Alamat</th>
                    <th scope="col" >No.Telepon</th>
                    <th scope="col" >Role ID</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $row = 1; ?>
                  <?php foreach ($pengguna as $usr) : ?>
                  <tr >
                    <th scope="row"><?= $row; ?></th>
                    <td ><?= $usr['email'] ?></td>
                    <td><?= $usr['nama'] ?></td>
                    <td><?= $usr['alamat'] ?></td>
                    <td><?= $usr['no_hp'] ?></td>
                    <td><?= $usr['role_id'] ?></td>
                    <td >
                        <a href="<?php echo base_url().'admin/edituser/'.$usr['id_user'];?>" class="badge badge-success">Edit</a>
                        <a href="<?php echo base_url().'admin/deleteuser/'.$usr['id_user'];?>" class="badge badge-danger">Hapus</a>
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
