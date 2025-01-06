<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Pelapor</th>
                    <th>Nomor Pelapor</th>
                    <th>Alamat Pelapor</th>
                    <th>Jenis Pengaduan</th>
                    <th>Deskripsi</th>
                    <th>Tanggal Kejadian</th>
                    <th>Tanggal Pengaduan</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; foreach ($list_pengaduan as $key => $value) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value->nama_pelapor ?></td>
                    <td><?= $value->nomor_telepon ?></td>
                    <td><?= $value->alamat_pelapor ?></td>
                    <td><?= $value->jenis_pengaduan ?></td>
                    <td><?= $value->deskripsi_lainnya ?></td>
                    <td><?= $value->tanggal_kejadian ?></td>
                    <td><?= $value->tanggal_pengaduan ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
