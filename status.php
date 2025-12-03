<?php
session_start();
include_once 'components/tag_html.php';
include_once 'components/header.php';
require 'database.php';

if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

$id_siswa = $_SESSION['user_id'];
$data_siswa = getSiswaById($DBH, $id_siswa);
?>

<div class="konten-status" id="status">
    <div class="container-status">
        <h1 class="judul-status">Riwayat & Status Pendaftaran</h1>

        <div class="data">
            <span class="label">Nama</span>
            <span class="titik-dua">:</span>
            <span class="value"><?= htmlspecialchars($data_siswa['NAMA_LENGKAP'] ?? 'Belum Diisi'); ?></span>
        </div>
        <div class="data">
            <span class="label">Email</span>
            <span class="titik-dua">:</span>
            <span class="value"><?= htmlspecialchars($data_siswa['EMAIL_SISWA'] ?? ''); ?></span>
        </div>
        <div class="data">
            <span class="label">Jenis Kelamin</span>
            <span class="titik-dua">:</span>
            <span class="value"><?= htmlspecialchars($data_siswa['JENIS_KELAMIN'] ?? 'Belum Diisi') ?></span>
        </div>
        <div class="data">
            <span class="label">Jurusan</span>
            <span class="titik-dua">:</span>
            <span class="value"><?= htmlspecialchars($data_siswa['JURUSAN_TERPILIH'] ?? 'Belum ditetapkan'); ?></span>
        </div>
        <div class="data">
            <span class="label">Orang Tua</span>
            <span class="titik-dua">:</span>
            <span class="value"><?= htmlspecialchars($data_siswa['NAMA_WALI'] ?? 'Belum Diisi'); ?></span>
        </div>
        <div class="data">
            <span class="label">Asal Sekolah</span>
            <span class="titik-dua">:</span>
            <span class="value"><?= htmlspecialchars($data_siswa['ASAL_SEKOLAH'] ?? 'Belum Diisi'); ?></span>
        </div>
        <div class="data">
            <span class="label">Kebutuhan</span>
            <span class="titik-dua">:</span>
            <span class="value"><?= htmlspecialchars($data_siswa['NAMA_KEBUTUHAN'] ?? 'Tidak Ada'); ?></span>
        </div>
        <div class="status">
            <p class="value-status"><?= htmlspecialchars($data_siswa['STATUS_PENDAFTARAN'] ?? 'BELUM MENDAFTAR'); ?></p>
        </div>
    </div>
</div>

<?php
include_once 'components/footer.php';
?>