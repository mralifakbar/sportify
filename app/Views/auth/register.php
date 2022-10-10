<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar - Sportify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <link rel="shortcut icon" href="../assets/images/ball.svg" type="image/x-icon">
</head>

<body>
    <div class="section-login mt-5 pt-2 container text-center">
        <div class="col-lg-6 mx-auto">
            <div class="logo mt-3">
                <a href="">
                    <img src="../assets/images/ball.svg" alt="Brand Icon" class="logo-brand">
                </a>
            </div>
            <div class="login-greeting mt-3">
                <h3 class="fw-bold fs-2">Daftar untuk menjelajah</h3>
                <p>Tak ribet untuk mendapat suatu kemudahan</p>
            </div>
            <form action="dashboard" method="get" class="mt-4">
                <input type="email" name="email" class="form-control w-75 mx-auto mb-3" id="registerEmail" placeholder="Email">
                <input type="text" maxlength="20" name="username" class="form-control w-75 mx-auto mb-3" id="registerUsername" placeholder="Username">
                <input type="text" maxlength="30" name="fullname" class="form-control w-75 mx-auto mb-3" id="registerFullName" placeholder="Name Lengkap">
                <input type="tel" maxlength="16" name="phonenumber" class="form-control w-75 mx-auto mb-3" id="registerPhone" placeholder="No. Handphone">
                <input type="password" name="password" class="form-control w-75 mx-auto mb-3" id="registerPassword" placeholder="Password">

                <input type="password" name="conpassword" class="form-control w-75 mx-auto" id="registerConPassword" placeholder="Konfirmasi Password">

                <input type="submit" value="Daftar" class="btn btn-primary w-75 mt-3" name="submit">
                <p class="mt-3">Sudah punya akun? <a href="login.php">Login sekarang</a></p>
            </form>
        </div>
    </div>
</body>

</html>