<?= $this->extend('templates/auth.php') ?>

<?= $this->section('title') ?> Login <?= $this->endSection() ?>

<?= $this->section('main') ?>
<div class="section-login container text-center">
    <div class="col-lg-6 mx-auto my-auto">
        <div class="logo mt-3">
            <a href="">
                <img src="../assets/images/ball.svg" alt="Brand Icon" class="logo-brand">
            </a>
        </div>
        <div class="login-greeting mt-3">
            <h3 class="fw-bold fs-2">Selamat Datang Kembali!</h3>
            <p>Tak usah buru-buru, login saja dulu</p>
        </div>

        <?php if (session('error') !== null) : ?>
        <div class="alert alert-danger w-75 mx-auto" role="alert"><?= session('error') ?></div>
        <?php elseif (session('errors') !== null) : ?>
        <div class="alert alert-danger" role="alert">
            <?php if (is_array(session('errors'))) : ?>
            <?php foreach (session('errors') as $error) : ?>
            <?= $error ?>
            <br>
            <?php endforeach ?>
            <?php else : ?>
            <?= session('errors') ?>
            <?php endif ?>
        </div>
        <?php endif ?>

        <?php if (session('message') !== null) : ?>
        <div class="alert alert-success w-75 mx-auto" role="alert"><?= session('message') ?></div>
        <?php endif ?>

        <form action="login" method="post" class="mt-4">
            <?= csrf_field() ?>

            <input type="email" name="email" class="form-control w-75 mx-auto mb-3" id="loginEmail" placeholder="Email"
                autofocus inputmode="email" required autocomplete="email">

            <input type="password" name="password" class="form-control w-75 mx-auto" id="loginPassword"
                placeholder="Password" inputmode="password" autocomplete="current-password" required>

            <div class="w-75 mx-auto text-end mt-1 mb-3">
                <a href="<?= url_to('magic-link') ?>">Lupa password?</a>
            </div>

            <input type="submit" value="Login" class="btn btn-primary w-75">

            <?php if (setting('Auth.allowRegistration')) : ?>
            <p class="mt-3">Belum punya akun? <a href="register">Daftar sekarang</a></p>
            <?php endif ?>

        </form>
    </div>
</div>
<?= $this->endsection('main') ?>