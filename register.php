<?php
    include_once 'components/tag_html.php'
?>

<div class="header-logo">
    <div class="img">
        <img src="logo.png" alt="">
    </div>

    <div class="text-logo">
        <h2 class="inklusi">PPDB INKLUSI</h2>
        <p class="nirwana">SEKOLAH NIRWANA</p>
    </div>
</div>


<div class="container-log">
    <div class="card">
        <div class="profil">
            <img src="assets/images/profil-black.png" alt="">
        </div>
        <form action="post" class="login">
            <div class="username">
                <label for="user">Username *</label>
                <input type="text" name="user" id="user">
            </div>    

            <div class="email">
                <label for="email">Email *</label>
                <input type="text" name="email" id="email">
            </div>

            <div class="pass">
                <label for="password">Password *</label>
                <input type="password" name="password" id="password">
            </div>

            <!-- <button class="btn-login">REGISTER</button> -->
            <div class="button">
                <a href="#">Register</a>
            </div>
            <a href="login.php" class="register">Sudah Punya Akun?</a>
        </form>
    </div>
</div>

<?php
    include_once 'components/footer.php';
?>