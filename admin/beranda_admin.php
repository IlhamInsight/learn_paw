<?php 
include_once '../components/tag_html.php'; 
include_once '../components/logo.php';
?>

<div class="konten-admin">
    <div class="container-admin">
        <div class="daftar-jurusan">
            <h3>Daftar Jurusan</h3>
            <a href="#" class="">Lihat Daftar Jurusan</a>
        </div>

        <div class="daftar-siswa">
            <h3>Daftar Calon Siswa</h3>
            <a href="#" class="">Lihat Calon Siswa</a>
        </div>

    </div>

    <div class="tambah-jurusan">
        <div class="judul-jurusan">
            <h3>Tambah Jurusan</h3>
        </div>
        <form action="#" class="admin" method="post">
            <div class="masukan-jurusan">
                <label for="masukan-jurusan">Masukkan Jurusan</label>
                <input type="text" name="masukan-jurusan" id="masukan-jurusan">
            </div>    

            <div class="kuota-jurusan">
                <label for="kuota-jurusan">Kuota Jurusan</label>
                <input type="text" name="kuota-jurusan" id="kuota-jurusan">
            </div>

            <div class="desk-jurusan">
                <label for="desk-jurusan">Deskripsi Jurusan</label>
                <input type="text" name="desk-jurusan" id="desk-jurusan">
            </div>

            <div class="button-jurusan">
                <button class="btn-jurusan">Tambah Jurusan</button>
                <!-- <a href="#">Register</a> -->
            </div>

        </form>
    </div>

<!-- output tabel daftar jurusan -->
    <div class="tabel-jurusan">
        <table>
            <tr>
                <th>No</th>
                <th>Jurusan</th>
                <th>Kuota Jurusan</th>
                <th>Deskripsi Jurusan</th>
                <th>Aksi</th>
            </tr>
            <tr>
                <td>01</td>
                <td>Teknik komputer dan jaringan</td>
                <td>10</td>
                <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt eaque eos, architecto, nesciunt consectetur quaerat cupiditate iste vitae nobis rem suscipit maiores corrupti, error? Vitae eum qui aspernatur officia saepe.</td>
                <td>
                    <div class="btn-aksi">
                        <form action="">
                            <button class="edit">Edit</button>
                            <button class="delete">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        </table>
    </div>

<!-- output tabel daftar calon siswa -->

    <div class="tabel-siswa">
        <table>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Temat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Asal Sekolah</th>
                <th>Nama Kebutuhan</th>
                <th>Deskripsi Kebutuhan</th>
                <th>Wali</th>
                <th>No telpon</th>
                <th>Berkas</th>
                <th>Status</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <form action="" method="get">
                        <select name="" id="">
                            <option value="">-- Status Calon Siswa --</option>
                            <option value="">DI verifikasi</option>
                            <option value="">Lulus</option>
                            <option value="">Tidak Lulus</option>
                        </select>
                        <button type="submit" class="drop-status">Simpan</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>

</div>

<?php
    include_once '../components/footer.php';
?>