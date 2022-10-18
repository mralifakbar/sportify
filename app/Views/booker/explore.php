<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Explore - Sportify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <link rel="shortcut icon" href="../assets/images/ball.svg" type="image/x-icon">
</head>

<body>
    <div class="full-screen">
        <nav class="navbar navbar-expand-lg navbar-light pt-3 pt-lg-3">
            <div class="container">
                <a class="navbar-brand p-lg-3 d-flex" href="">
                    <img src="../assets/images/ball.svg" alt="Brand Icon" class="logo-brand">
                    <h5 class="mb-0 ms-2">Sportify</h5>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php if(auth()->loggedIn()): ?>
                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <div class="dropdown ms-lg-auto">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <?= auth()->user()->username; ?>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Ubah Profil</a></li>
                            <li><a class="dropdown-item logout-menu" href="logout">Keluar</a></li>
                        </ul>
                    </div>
                </div>
                <?php else: ?>
                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <a href="login"
                        class="btn btn-outline-primary px-4 py-2 me-lg-2 ms-lg-auto mt-4 mt-lg-0 d-block d-lg-inline-block ">Masuk</a>
                    <a href="register"
                        class="btn btn-primary px-4 py-2 mt-3 mt-lg-0 d-block d-lg-inline-block">Daftar</a>
                </div>
                <?php endif; ?>

            </div>
        </nav>


        <section class="booking-area">
            <div class="container text-center">
                <h2 class="mt-5 mb-4 fs-1">Pilih Lapangan. Bayar Bookingan. Aman.</h2>
                <form action="search" method="get">
                    <div class="row justify-content-center mt-4">
                        <div class="col-lg-3 mb-3 mb-lg-3">
                            <select class="form-select" aria-label="Jenis olahraga" required name="jenisOlahraga">
                                <option value="Futsal">Futsal</option>
                                <option value="Badminton">Badminton</option>
                                <option value="Basket">Basket</option>
                            </select>
                        </div>
                        <div class="col-lg-3 mb-3 mb-lg-3">
                            <input type="date" class="form-control" id="datebBooking" required name="dateBook">
                        </div>
                        <div class="col-auto text-start mb-3 mb-lg-3">
                            <button type="submit" class="btn btn-primary">Cari Lapangan</button>
                        </div>
                    </div>
                </form>

            </div>
        </section>

        <section class="choose-sport mt-5 pt-5">
            <div class="container">
                <div class="row justify-content-evenly">
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center mb-3 mb-lg-3">
                        <a href="search?jenisOlahraga=Basket">
                            <div class="card" style="width: 18rem;">
                                <img src="../assets/images/basketball.svg" class="card-img-top mx-auto mt-4"
                                    alt="Basketball">
                                <div class="card-body">
                                    <p class="card-text fs-2 text-center fw-bold">Basket</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center mb-3 mb-lg-3">
                        <a href="search?jenisOlahraga=Futsal">
                            <div class="card" style="width: 18rem;">
                                <img src="../assets/images/futsal.svg" class="card-img-top mx-auto mt-4" alt="Futsal">
                                <div class="card-body">
                                    <p class="card-text fs-2 text-center fw-bold">Futsal</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center">
                        <a href="search?jenisOlahraga=Badminton">
                            <div class="card" style="width: 18rem;">
                                <img src="../assets/images/badminton.svg" class="card-img-top mx-auto mt-4"
                                    alt="Badminton">
                                <div class="card-body">
                                    <p class="card-text fs-2 text-center fw-bold">Badminton</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>