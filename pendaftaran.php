<?php
    include_once 'components/tag_html.php';
    include_once 'components/header.php';
?>

<div class="konten-pendaftaran" id="pendaftaran">
    <div class="container-pendaftaran">
        <div class="card-pendaftaran">
            <div class="profil">
                <h3>Pendaftaran</h3>
            </div>
            <form action="#" class="pendaftaran" method="post">
                <div class="nama">
                    <label for="user">Nama Lengkap</label>
                    <span class="value">Lorem</span>
                </div>    

                <div class="email">
                    <label for="email">Email yang digunakan</label>
                    <span class="value">Lorem</span>
                </div>

                <div class="jurusan-satu">
                    <label for="jurusan-satu">Pilihan Satu *</label>
                    <select name="" id="">
                        <option value="">-- Pilih Jurusan --</option>
                        <option value="">Ipa</option>
                        <option value="">Ips</option>
                    </select>
                </div>

                <div class="jurusan-dua">
                    <label for="jurusan-dua">Pilihan Kedua *</label>
                    <select name="" id="">
                        <option value="">-- Pilih Jurusan --</option>
                        <option value="">Ipa</option>
                        <option value="">Ips</option>
                    </select>
                </div>

                <div class="berkas">
                    <label for="file">Masukkan Ijazah (Jpg/Jpeg)</label>
                    <input type="file" name="" id="">
                </div>

                <div class="button">
                    <button class="btn-daftar">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    include_once 'components/footer.php';
?>