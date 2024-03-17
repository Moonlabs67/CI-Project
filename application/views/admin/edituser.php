<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
  <div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-lg">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Ubah Data User</h1>
          </div>
          <?php echo form_open('admin/edit_simpan'); ?>
          <?php echo form_hidden('id', $this->uri->segment(3)); ?>
          <form >
            <div class="form-group">
              <input type="text" class="form-control form-control-user" id="email" name="email" value="<?php echo $pengguna['email']?>">
              <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="col-sm-6">
                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi password">
              </div>
            </div>

            <div class="form-group">
              <input type="text" class="form-control form-control-user" id="nama" name="nama" value="<?php echo $pengguna['nama']?>">
              <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="form-group">
              <input type="text" class="form-control form-control-user" id="alamat" name="alamat" value="<?php echo $pengguna['alamat']?>">
              <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="form-group">
              <input type="text" class="form-control form-control-user" id="handphone" name="handphone" value="<?php echo $pengguna['no_hp']?>">
              <?= form_error('handphone', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-control-user" id="roleid" name="roleid" placeholder="Hak Akses : Admin=1, Pengawas=2, Direktur=3" value="<?php echo $pengguna['role_id']?>">
              <?= form_error('handphone', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
              Update
            </button>
            <hr>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>