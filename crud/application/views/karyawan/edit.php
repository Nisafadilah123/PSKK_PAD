  <div class="container">
      <div class="card">
          <div class="card-header">Edit Karyawan</div>
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
              <form method="post" action="<?php echo base_url(); ?>karyawan/update" enctype="multipart/form-data">
                  <input type="hidden" name="no_pegawai" id="no_pegawai" value="<?php echo $karyawan->no_pegawai; ?>" />
                  <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" value="<?php echo $karyawan->nama; ?>" class="form-control" id="nama"
                          name="nama">
                  </div>

                  <div class="form-group">
                      <label for="jenkel">Jenis Kelamin</label>
                      <select name="jenkel" id="jenkel" class="form-control">
                          <option value="laki-laki">
                              Pilih Jenis Kelamin</option>

                          <option value="laki-laki" <?php echo ($karyawan->jenkel ? 'laki-laki' : 'selected'); ?>>
                              Laki-laki</option>
                          <option value="perempuan" <?php echo ($karyawan->jenkel ? 'perempuan' : 'selected'); ?>>
                              Perempuan</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="tgl">Tanggal Lahir</label>
                      <input type="text" class="datepicker" id="datepicker" name="tgl"
                          value="<?php echo $karyawan->tgl; ?>">
                  </div>

                  <div class="form-group">
                      <label for="status">Status</label>
                      <select name="status" id="status" class="form-control">
                          <option value="laki-laki">
                              Pilih Status</option>

                          <option value="menikah" <?php echo ($karyawan->status ? 'menikah' : 'selected'); ?>>
                              Menikah</option>
                          <option value="belum menikah"
                              <?php echo ($karyawan->status ? 'belum menikah' : 'selected'); ?>>
                              Belum Menikah</option>
                      </select>
                  </div>

                  <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <textarea class="form-control" name="alamat"
                          id="alamat"><?php echo $karyawan->alamat; ?></textarea>
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
                              <img src="<?= base_url('assets/gambar/' . $karyawan->gambar) ?>" id="gambar_load" alt=""
                                  width="100px">
                          </div>
                      </div>


                      <button type="submit" class="btn btn-primary">Update</button>
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

  <script t
ype="text/javascript">
$(document).ready(function() {

    $('.datepicker').datepicker();
});
  </script>