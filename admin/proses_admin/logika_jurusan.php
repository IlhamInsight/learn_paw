<?php

foreach ($daftar_siswa as $siswa_raw) {
    $id = $siswa_raw['ID_SISWA'];
    if (!isset($siswa_diproses[$id])) {
        $siswa_diproses[$id] = $siswa_raw;
        $siswa_diproses[$id]['ALL_JURUSAN'] = [];
    }

    if (!empty($siswa_raw['NAMA_JURUSAN'])) {
        if (!in_array($siswa_raw['NAMA_JURUSAN'], $siswa_diproses[$id]['ALL_JURUSAN'])) {
            $siswa_diproses[$id]['ALL_JURUSAN'][] = $siswa_raw['NAMA_JURUSAN'];
        }
    }
}
