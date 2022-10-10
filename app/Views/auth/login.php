<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sportify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <link rel="shortcut icon" href="../assets/images/ball.svg" type="image/x-icon">
</head>

<body>
    <div class="section-login mt-5 pt-2 container text-center">
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

            <form action="" method="post" class="mt-4">
                <input type="email" name="email" class="form-control w-75 mx-auto mb-3" id="loginEmail"
                    placeholder="Email">
                <input type="password" name="password" class="form-control w-75 mx-auto" id="loginPassword"
                    placeholder="Password">
                <div class="w-75 mx-auto text-end mt-1 mb-3">
                    <a href="">Lupa password?</a>
                </div>

                <input type="submit" value="Login" class="btn btn-primary w-75">
                <p class="mt-3">Belum punya akun? <a href="register.php">Daftar sekarang</a></p>
            </form>
        </div>


    </div>
</body>

</html>