<?= $this->extend('templates/auth.php') ?>

<?= $this->section('title') ?> Forget Password <?= $this->endSection() ?>

<?= $this->section('main') ?>
<div class="section-login container text-center">
    <div class="col-lg-6 mx-auto my-auto">
        <div class="logo mt-3">
            <a href="">
                <img src="../assets/images/ball.svg" alt="Brand Icon" class="logo-brand">
            </a>
        </div>
        <div class="login-greeting mt-3">
            <h3 class="fw-bold fs-2">Lupa Password</h3>
            <p>Masukan email anda untuk mendapatkan link reset password</p>
        </div>

        <form action="" method="post" class="mt-4">
            <input type="email" name="email" class="form-control w-75 mx-auto mb-3" id="loginEmail" placeholder="Email">

            <input type="submit" value="Reset Password" class="btn btn-primary w-75">
        </form>
    </div>
    <?= $this->endsection('main') ?>