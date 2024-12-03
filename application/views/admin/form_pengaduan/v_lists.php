<style>
/* Container utama */
.container {
    margin-top: 30px;
    padding: 20px;
    background-color: #f3f4f6; /* Warna latar abu-abu lembut */
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); /* Bayangan lebih panjang dan gelap */
}

/* Judul dengan animasi warna */
h2 {
    text-align: center;
    font-size: 24px;
    font-weight: bold;
    animation: colorChange 6s infinite alternate;
    font-family: 'Arial', sans-serif;
}

/* Animasi perubahan warna */
@keyframes colorChange {
    0% { color: #5D6D7E; }  /* Abu-abu gelap */
    25% { color: #2874A6; } /* Biru lembut */
    50% { color: #1ABC9C; } /* Hijau laut */
    75% { color: #AF7AC5; } /* Ungu lembut */
    100% { color: #D5D8DC; } /* Abu-abu pucat */
}

/* Tabel */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2); /* Bayangan lebih panjang untuk tabel */
}

/* Header tabel */
th {
    background-color: #34495E; /* Abu-abu biru */
    color: #ECEFF1;           /* Putih lembut */
    padding: 12px;
    text-align: center;
    font-size: 14px;
    text-transform: uppercase; /* Kapital */
    font-weight: bold;
    border-bottom: 2px solid #2C3E50; /* Garis bawah kontras */
}

/* Isi tabel */
td {
    padding: 10px 12px;
    text-align: center;
    color: #2C3E50; /* Warna teks abu-abu gelap */
    border-bottom: 1px solid #E5E8E8; /* Garis bawah lembut */
    font-size: 13px;
}

/* Warna latar baris bergantian */
tr:nth-child(even) {
    background-color: #F9FAFB; /* Abu-abu terang */
}

tr:nth-child(odd) {
    background-color: #FFFFFF; /* Putih */
}

/* Efek hover pada baris */
tr:hover {
    background-color: #DCE4EC; /* Abu kebiruan */
    transition: background-color 0.3s ease; /* Animasi halus */
}

/* Responsif untuk layar kecil */
@media screen and (max-width: 768px) {
    table {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
    }

    th, td {
        padding: 8px;
        font-size: 12px;
    }
}
</style>

<div class="container">
    <h2><?= $title ?></h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelapor</th>
                <th>Sebagai</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1; 
            foreach ($pelapor as $index => $pelapor_item) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $pelapor_item->nama ?></td>
                    <td><?= $pelapor_item->sebagai ?></td>
                    <td><?= $pelapor_item->alamat ?></td>
                    <td><?= $pelapor_item->no_hp ?></td>
                    <td><?= $pelapor_item->email ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Jenis Kasus</th>
                <th>Bentuk Kekerasan</th>
                <th>Tempat Kejadian</th>
                <th>Kecamatan</th>
                <th>Tanggal Kejadian</th>
                <th>Status Laporan</th>
                <th>Kronologi Singkat</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1; 
            foreach ($pelapor as $index => $pelapor_item) : ?>
                <tr>
                    <?php
                    $kasus_item = $kasus[$index] ?? null;
                    ?>
                    <td><?= $no++ ?></td>
                    <td><?= $kasus_item ? $kasus_item->jenis_kasus : 'Tidak ada data' ?></td>
                    <td><?= $kasus_item ? $kasus_item->bentuk_kekerasan : 'Tidak ada data' ?></td>
                    <td><?= $kasus_item ? $kasus_item->tempat_kejadian : 'Tidak ada data' ?></td>
                    <td><?= $kasus_item ? $kasus_item->kecamatan : 'Tidak ada data' ?></td>
                    <td><?= $kasus_item ? $kasus_item->tanggal_kejadian : 'Tidak ada data' ?></td>
                    <td><?= $kasus_item ? $kasus_item->status_laporan : 'Tidak ada data' ?></td>
                    <td><?= $kasus_item ? $kasus_item->kronologi_singkat : 'Tidak ada data' ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Korban</th>
                <th>Jenis Kelamin Korban</th>
                <th>Usia Korban</th>
                <th>Pendidikan Korban</th>
                <th>Pekerjaan Korban</th>
                <th>Status Perkawinan</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1; 
            foreach ($pelapor as $index => $pelapor_item) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    
                    <?php
                    $korban_item = $korban[$index] ?? null;
                    ?>

                    <td><?= $korban_item ? $korban_item->nama_korban : 'Tidak ada data' ?></td>
                    <td><?= $korban_item ? $korban_item->jenis_kelamin : 'Tidak ada data' ?></td>
                    <td><?= $korban_item ? $korban_item->usia : 'Tidak ada data' ?></td>
                    <td><?= $korban_item ? $korban_item->pendidikan : 'Tidak ada data' ?></td>
                    <td><?= $korban_item ? $korban_item->pekerjaan : 'Tidak ada data' ?></td>
                    <td><?= $korban_item ? $korban_item->status_perkawinan : 'Tidak ada data' ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Pelaku</th>
                <th>Jenis Kelamin Pelaku</th>
                <th>Usia Pelaku</th>
                <th>Pendidikan Pelaku</th>
                <th>Pekerjaan Pelaku</th>
                <th>Hubungan dengan Korban</th>
                <th>Kewarganegaraan</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1; 
            foreach ($pelapor as $index => $pelapor_item) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    
                    <?php
                    $pelaku_item = $pelaku[$index] ?? null;
                    ?>

                    <td><?= $pelaku_item ? $pelaku_item->nama_pelaku : 'Tidak ada data' ?></td>
                    <td><?= $pelaku_item ? $pelaku_item->jenis_kelamin : 'Tidak ada data' ?></td>
                    <td><?= $pelaku_item ? $pelaku_item->usia : 'Tidak ada data' ?></td>
                    <td><?= $pelaku_item ? $pelaku_item->pendidikan : 'Tidak ada data' ?></td>
                    <td><?= $pelaku_item ? $pelaku_item->pekerjaan : 'Tidak ada data' ?></td>
                    <td><?= $pelaku_item ? $pelaku_item->hubungan_dengan_korban : 'Tidak ada data' ?></td>
                    <td><?= $pelaku_item ? $pelaku_item->kewarganegaraan : 'Tidak ada data' ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
