<html>

<head>
    <title>Laporan</title>
</head>

<body>
    <main role="main" class="container">
        <div class="card">
            <div class="card-header">Data Karyawan</div>

            <table width="100%" id="table_id" class="display">
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
                        <td class="text-center"><img src="<?= base_url('assets/gambar/' . $row->gambar) ?>"
                                width="100px">
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
</body>




</html>