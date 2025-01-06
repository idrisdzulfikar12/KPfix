<div class="col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Instansi</th>
                    <th>Alamat Instansi</th>
                    <th>Jumlah Siswa</th>
                    <th>Jumlah Siswa Laki-laki</th>
                    <th>Jumlah Siswa Perempuan</th>
                    <th>Tanggal Permohonan</th>
                    <th>Nama PIC</th>
                    <th>WA PIC</th>
                    <th>Surat Permohonan</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; foreach ($list_pengajuan as $key => $value) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value->nama_instansi ?></td>
                    <td><?= $value->alamat ?></td>
                    <td><?= $value->jml_siswa ?></td>
                    <td><?= $value->jml_laki ?></td>
                    <td><?= $value->jml_wanita ?></td>
                    <td><?= $value->tgl_permohonan_kunjungan ?></td>
                    <td><?= $value->nama_pic ?></td>
                    <td><?= $value->wa_pic ?></td>
                    <td>
                    <?php if (!empty($value->file_permohonan)) { ?>
                        <a href="<?= base_url('uploads/pdf/' . $value->file_permohonan) ?>" target="_blank" class="btn btn-primary btn-sm">Lihat Surat</a>
                    <?php } else { ?>
                        Tidak ada file
                    <?php } ?>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
