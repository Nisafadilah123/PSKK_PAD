<main role="main" class="container">
    <div class="card">
        <div class="card-header">Data Karyawan</div>
        <div class="card-body">

            <br>
            <br>
            <table border="1">
                <thead>
                    <tr>
                        <th>No. Pegawai </th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Status</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>

                    </tr>
                    <tr>
                        <td><?php echo $karyawan->no_pegawai ?></td>
                        <td><?php echo $karyawan->nama ?></td>
                        <td><?php echo $karyawan->jenkel ?></td>
                        <td><?php echo $karyawan->status ?></td>
                        <td><?php echo $karyawan->tgl ?></td>
                        <td><?php echo $karyawan->alamat ?></td>

                    </tr>
                </thead>

            </table>

        </div>
    </div>
</main>
