  <div class="container">
      <div class="card">
          <div class="card-header">Create Karyawan</div>
          <div class="card-body">
              <?php
				if (validation_errors() != false) {
				?>
              <div class="alert alert-danger" role="alert">
                  <?php echo validation_errors(); ?>
              </div>
              <?php
				}
				?>

              <!-- <?php echo form_open_multipart('karyawan/save') ?> -->
              <form method="post" action="<?php echo base_url(); ?>karyawan/save" enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="no_pegawawai">No. Pegawai</label>
                      <input type="text" class="form-control" id="no_pegawai" name="no_pegawai">
                  </div>
                  <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama">
                  </div>

                  <div class="form-group">
                      <label for="jenkel">Jenis Kelamin</label>
                      <select name="jenkel" id="jenkel" class="form-control">
                          <option value="laki-laki">Pilih Jenis Kelamin</option>
                          <option value="laki-laki">Laki-laki</option>
                          <option value="perempuan">Perempuan</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="tgl">Tanggal Lahir</label>
                      <input type="date" class="datepicker" id="date" name="tgl">
                  </div>
                  <div class="form-group">
                      <label for="status">Status</label>
                      <select name="status" id="status" class="form-control">
                          <option value="Menikah">Pilih Status</option>
                          <option value="Menikah">Menikah</option>
                          <option value="Belum Menikah">Belum Menikah</option>
                      </select>
                  </div>

                  <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <textarea class="form-control" name="alamat" id="alamat"></textarea>
                  </div>

                  <div class="row">
                      <div class="col-sm-6">
                          <div class="form-group">
                              <label>Gambar Karyawan</label>
                              <input type="file" class="form-control" id="preview_gambar" name="gambar" required>
                              </input>
                          </div>
                      </div>

                      <div class="col-sm-12">
                          <div class="form-group">
                              <img src="<?= base_url('assets/gambar/') ?>" id="gambar_load" alt="" width="100px">
                          </div>
                      </div>

                      <button type="submit" class="btn btn-primary">Submit</button>
              </form>
          </div>

      </div>
  </div>

  <script>
// untuk membaca gambar yang ingin diupload di layar sebelum submit
function bacaGambar(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#gambar_load').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#preview_gambar").change(function() {
    bacaGambar(this);
});
  </script>
  <script type="text/javascript">
$(document).ready(function() {

    $('.datepicker').datepicker();
});
  </script>
