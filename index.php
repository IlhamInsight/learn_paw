<?php
    include_once 'components/tag_html.php'
?>

<div class="header-logo">
    <div class="img">
        <img src="logo.png" alt="">
    </div>

    <div class="text-logo">
        <h1 class="inklusi">PPDB INKLUSI</h1>
        <p class="nirwana">SEKOLAH NIRWANA</p>
    </div>
</div>


<div class="container-log">
    <div class="card">
        <div class="profil">
            <img src="assets/images/profil-black.png" alt="">
        </div>
        <form action="post" class="login">
            <div class="email">
                <label for="email">Email *</label>
                <input type="text" name="email" id="email">
            </div>

            <div class="pass">
                <label for="password">Password *</label>
                <input type="password" name="password" id="password">
            </div>

            <!-- <button class="btn-login">LOGIN</button> -->
            <div class="button">
                <a href="#" class="login">Login</a>
            </div>
            <a href="register.php" class="register">Belum Punya Akun?</a>
        </form>
    </div>
</div>

<?php
    include_once 'components/footer.php';
?>