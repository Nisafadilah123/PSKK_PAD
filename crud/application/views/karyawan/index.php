<main role="main" class="container">
    <div class="card">
        <div class="card-header">Data Karyawan</div>
        <div class="card-body">
            <a href="<?php echo base_url(); ?>karyawan/create" class="btn btn-success">Create</a>
            <button onclick="window.print()" class="btn btn-info"><i class="fas fa-print"></i> Print</button>

            <br>
            <br>
            <!-- <table width="100%" id="table_id" class="display"> -->
            <table id="example" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>No. Pegawai</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Status</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Foto</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

					foreach ($karyawan as $row) {
					?>
                    <tr>
                        <!-- <td widtd="5%"><?php echo $no++; ?></td> -->
                        <td><?php echo $row->no_pegawai; ?></td>
                        <td><?php echo $row->nama; ?></td>
                        <td><?php echo $row->jenkel; ?></td>
                        <td><?php echo $row->status; ?></td>
                        <td><?php echo $row->tgl; ?></td>
                        <td><?php echo $row->alamat; ?></td>
                        <td><img src="<?= base_url('assets/gambar/' . $row->gambar) ?>" width="100px"></td>
                        <td>
                            <a href="<?php echo base_url(); ?>karyawan/edit/<?php echo $row->no_pegawai; ?>"
                                class="btn btn-warning">Edit</a>
                            <a href="<?php echo base_url(); ?>karyawan/delete/<?php echo $row->no_pegawai; ?>"
                                class="btn btn-danger">Hapus</a>

                            <!-- untuk mengarahkan ke detail -->
                            <a href="<?php echo base_url(); ?>karyawan/detail/<?php echo $row->no_pegawai; ?>"
                                class="btn btn-info">Detail
                        </td>
                    </tr>
                    <?php
					}
					?>






                </tbody>
       
     </table>
        </div>
    </div>
</main>