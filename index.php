<?php
    include_once 'components/tag_html.php';
    include_once 'components/logo.php';
?>


<div class="konten-log">
    <div class="container-log">
        <div class="card-log">
            <div class="profil">
                <img src="assets/images/profil-black.png" alt="">
            </div>
            <form action="#" class="login" method="post">
                <div class="email">
                    <label for="email">Email *</label>
                    <input type="text" name="email" id="email">
                </div>

                <div class="pass">
                    <label for="password">Password *</label>
                    <input type="password" name="password" id="password">
                </div>

                <div class="button">
                    <button class="btn-login">Login</button>
                    <!-- <a href="beranda.php" class="login">Login</a> -->
                </div>
                <a href="register.php" class="reg-href">Belum Punya Akun?</a>
            </form>
        </div>
    </div>
    <div class="foto_school-log">
        <img src="assets/images/bg_sekolah_1.png" alt="">
    </div>
</div>

<?php
    include_once 'components/footer.php';
?>
