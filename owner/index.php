<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Owner Dashboard - Sportify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../styles/main.css">
    <link rel="shortcut icon" href="../images/ball.svg" type="image/x-icon">
</head>

<body>
    <div class="full-screen">
        <nav class="navbar navbar-expand-lg navbar-light pt-3 pt-lg-3">
            <div class="container">
                <a class="navbar-brand p-lg-3 d-flex" href="#">
                    <img src="../images/ball.svg" alt="Brand Icon" class="logo-brand">
                    <h5 class="mb-0 ms-2">Sportify</h5>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <div class="dropdown ms-auto">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Alif Akbar Kartadinata
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Ubah Profil</a></li>
                            <li><a class="dropdown-item logout-menu" href="#">Keluar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <section class="tab-section">
            <div class="container">
                <ul class="nav nav-tabs fs-5">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" href="index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" aria-current="page" href="lapangan.php">Lapangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="user.php">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="transaksi.php">Transaksi</a>
                    </li>
                </ul>

                <div class="row mt-4">
                    <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="card text-center w-100">
                            <div class="card-body py-5">
                                <h5 class="card-title fs-3">Jumlah Lapangan</h5>
                                <p class="card-text fs-2 my-3 fw-bold">3</p>
                                <a href="#" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="card text-center w-100">
                            <div class="card-body py-5">
                                <h5 class="card-title fs-3">Jumlah Booking</h5>
                                <p class="card-text fs-2 my-3 fw-bold">12</p>
                                <a href="#" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="card text-center w-100">
                            <div class="card-body py-5">
                                <h5 class="card-title fs-3">Jumlah Transaksi</h5>
                                <p class="card-text fs-2 my-3 fw-bold">Rp.200.000.000</p>
                                <a href="#" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card text-center w-100">
                            <div class="card-body py-5">
                                <h5 class="card-title fs-3">Pendapatan Terbesar</h5>
                                <p class="card-text fs-2 my-3 fw-bold">Rp.800.000</p>
                                <a href="#" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
    </div>


    <?php 
    include "../ui/footer.php"
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>