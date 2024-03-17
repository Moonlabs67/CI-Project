<div id="NewBahan" tabindex="-1" role="dialog" aria-labelledby="NewBahanModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="NewBahanModalLabel">Edit Data Bahan</h5>
      </div>
      <?php echo form_open('pengawas/edit_simpanbahan'); ?>
      <?php echo form_hidden('id', $this->uri->segment(3)); ?>
      <form>
          <div class="modal-body">
            <div class="form-group"><label>Nama Proyek</label>
            <input type="text" class="form-control" id="namaproyek" name="namaproyek" readonly value="<?php echo $bahan['nm_proyek']?> ">
            </div>
            <div class="form-group"><label>Nama Bahan</label>
              <input type="text" class="form-control" id="namabahan" name="namabahan" value="<?php echo $bahan['nama_bahan']?>">
            </div>
            <div class="form-group"><label>Satuan</label>
              <input type="text" class="form-control" id="satuan" name="satuan" value="<?php echo $bahan['satuan']?>">
            </div>
            <div class="form-group"><label>Harga Satuan</label>
              <input type="text" class="uang"  id="harga" name="harga" value="<?php echo $bahan['harga_satuan']?>">
            </div>
            <div class="form-group"><label>Tanggal Masuk</label>
              <input type="date" class="form-control" id="tglmasuk" name="tglmasuk" value="<?php echo $bahan['tgl_masuk']?>">
            </div>
            <div class="form-group"><label>Jumlah</label>
              <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?php echo $bahan['jumlah']?>">
            </div>
            <div class="form-group"><label>Tanggal Pakai</label>
              <input type="date" class="form-control" id="tglpakai" name="tglpakai" value="<?php echo $bahan['tgl_pakai']?>">
            </div>
            <div class="form-group"><label>Jumlah Pakai</label>
              <input type="text" class="form-control" id="jumlahpakai" name="jumlahpakai" value="<?php echo $bahan['jumlah_pakai']?>">
            </div>
          </div>
          <div class="modal-footer">
          <a href="<?= base_url('pengawas/databahan') ?>" class="btn btn-secondary " role="button" >close</a>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
      </form>
    </div>
  </div>
</div>