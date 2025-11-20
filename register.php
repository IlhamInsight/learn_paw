<?php
    include_once 'components/tag_html.php';
    include_once 'components/logo.php';
?>

<div class="konten-reg">
    <div class="container-reg">
        <div class="card-reg">
            <div class="profil">
                <img src="assets/images/profil-black.png" alt="">
            </div>
            <form action="#" class="register" method="post">
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

                <div class="button">
                    <button class="btn-reg">REGISTER</button>
                    <!-- <a href="#">Register</a> -->
                </div>
                <a href="index.php" class="login-href">Sudah Punya Akun?</a>
            </form>
        </div>
    </div>
</div>

<?php
    include_once 'components/footer.php';
?>