<?= $this->extend('templates/auth.php') ?>

<?= $this->section('title') ?> Register <?= $this->endSection() ?>

<?= $this->section('main') ?>

<div class="section-login container text-center">
    <div class="col-lg-6 mx-auto">
        <div class="logo">
            <a href="">
                <img src="../assets/images/ball.svg" alt="Brand Icon" class="logo-brand">
            </a>
        </div>
        <div class="login-greeting mt-3">
            <h3 class="fw-bold fs-2">Daftar untuk menjelajah</h3>
            <p>Tak ribet untuk mendapat suatu kemudahan</p>
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

        <form action="register" method="post" class="mt-4">
            <?= csrf_field() ?>

            <input type="email" name="email" class="form-control w-75 mx-auto mb-3" id="registerEmail" inputmode="email"
                placeholder="Email" value="<?= old('email') ?>" required autocomplete="email">

            <!-- <input type="text" class="form-control" name="username" inputmode="text" autocomplete="username"
                placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" required /> -->

            <input type="text" maxlength="20" inputmode="text" name="username" class="form-control w-75 mx-auto mb-3"
                id="registerUsername" placeholder="Username" autocomplete="username" value="<?= old('username') ?>"
                required>

            <!-- <input type="text" maxlength="30" name="fullname" class="form-control w-75 mx-auto mb-3"
                id="registerFullName" placeholder="Name Lengkap"> -->
            <!-- <input type="tel" maxlength="16" name="phonenumber" class="form-control w-75 mx-auto mb-3"
                id="registerPhone" placeholder="No. Handphone"> -->
            <!-- <input type="password" class="form-control" name="password" inputmode="text" autocomplete="new-password"
                placeholder="<?= lang('Auth.password') ?>" required /> -->

            <input type="password" name="password" class="form-control w-75 mx-auto mb-3" id="registerPassword"
                inputmode="text" placeholder="Password" autocomplete="new-password" required />

            <!-- <input type="password" class="form-control" name="password_confirm" inputmode="text"
                autocomplete="new-password" placeholder="<?= lang('Auth.passwordConfirm') ?>" required /> -->

            <input type="password" name="password_confirm" class="form-control w-75 mx-auto" id="registerConPassword"
                inputmode="text" placeholder="Konfirmasi Password" required autocomplete="new-password">

            <input type="submit" value="Daftar" class="btn btn-primary w-75 mt-3" name="submit">
            <p class="mt-3">Sudah punya akun? <a href="login">Login sekarang</a></p>
        </form>
    </div>
</div>
<?= $this->endsection('main') ?>