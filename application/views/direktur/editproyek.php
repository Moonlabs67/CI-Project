<div id="NewProyek" tabindex="-1" role="dialog" aria-labelledby="NewProyekModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="NewProyekModalLabel">Edit Data Proyek</h5>
      </div>
      <?php echo form_open('direktur/edit_simpan'); ?>
      <?php echo form_hidden('id', $this->uri->segment(3)); ?>
      <form>
          <div class="modal-body">
            <div class="form-group"><label>Nama Proyek</label>
              <input type="text" class="form-control" id="namaproyek" name="namaproyek" value="<?php echo $proyek['nama_proyek']?>">
            </div>
            <div class="form-group"><label>Lokasi</label>
              <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi" value="<?php echo $proyek['lokasi']?>">
            </div>
            <div class="form-group"><label>Nilai Proyek</label>
              <input type="text" class="uang"  id="nilai" name="nilai" placeholder="Nilai Proyek" value="<?php echo $proyek['nilai_proyek']?>">
            </div>
            <div class="form-group"><label>Tanggal Mulai</label>
              <input type="date" class="form-control" id="tglmulai" name="tglmulai" value="<?php echo $proyek['tgl_mulai']?>">
            </div>
            <div class="form-group"><label>Tanggal Akhir</label>
              <input type="date" class="form-control" id="tglakhir" name="tglakhir" value="<?php echo $proyek['tgl_akhir']?>">
            </div>
            <div class="form-group"><label>Jangka Waktu</label>
              <input type="text" class="form-control" id="deadline" name="deadline" value="<?php echo $proyek['deadline']?>">
            </div>
          </div>
          <div class="modal-footer">
          <a href="<?= base_url('direktur/dataproyek') ?>" class="btn btn-secondary " role="button" >close</a>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
      </form>
    </div>
  </div>
</div>