<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pemesanan - Sportify</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <link rel="shortcut icon" href="../assets/images/ball.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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
                <?php if (auth()->loggedIn()) : ?>
                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <div class="dropdown ms-lg-auto">
                        <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <?= auth()->user()->username; ?>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="dashboard">Dashboard</a></li>
                            <li><a class="dropdown-item logout-menu" href="logout">Keluar</a></li>
                        </ul>
                    </div>
                </div>
                <?php else : ?>
                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <a href="login"
                        class="btn btn-outline-primary px-4 py-2 me-lg-2 ms-lg-auto mt-4 mt-lg-0 d-block d-lg-inline-block ">Masuk</a>
                    <a href="register"
                        class="btn btn-primary px-4 py-2 mt-3 mt-lg-0 d-block d-lg-inline-block">Daftar</a>
                </div>
                <?php endif; ?>

            </div>
        </nav>

        <div class="container">
            <div class="row mt-5 justify-content-center ">
                <div class="progress p-0 w-50">
                    <div class="progress-bar bg-danger " role="progressbar" aria-label="Danger example"
                        style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>

            </div>
            <div class="row mt-3 text-center fw-bold fs-5">
                <div class="col">
                    <p>Validasi Item</p>
                </div>
                <div class="col text-muted">
                    <p>Data dan Pembayaran</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="card p-4">
                    <div class="card-body text-center ">
                        <p class="fw-bold fs-4">Periksa Pemesanan Anda</p>
                        <p>Pastikan detail pemesanan sudah sesuai dan benar.</p>
                    </div>

                    <?php for($i = 0; $i < sizeof($jam); $i++) { ?>
                    <div class="card mb-3">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col">
                                    <p class="fw-bold fs-4 m-0"><?= $lapangan['nama_lapangan']; ?></p>
                                    <p class="m-0">Lapangan <?= $lapangan['jenis']; ?></p>
                                    <p class="fw-bold m-0"><?= date('j F Y', strtotime($tanggal)) ?> ◦
                                        <?= $jam[$i]; ?>:00 -
                                        <?= $jam[$i] + 1; ?>:00</p>
                                </div>
                                <div class="col text-end">
                                    <p class="fw-bold fs-4 m-0">Rp.<?= number_format($lapangan['harga'],0,',','.'); ?>
                                    </p>
                                    <a type="button" class="btn text-muted text-decoration-none" href="/belom"><i
                                            class="bi bi-trash3-fill"></i>
                                        Hapus </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php } ?>

                    <div class="row">
                        <div class="col">
                            <p class="fw-bold fs-4">Total Pembayaran</p>
                        </div>
                        <div class="col">
                            <p class="fw-bold fs-4 m-0 text-end">
                                Rp.<?= number_format($lapangan['harga'] * sizeof($jam),0,',','.'); ?>
                            </p>
                        </div>
                    </div>
                </div>

                <form action="/konfirmasi-pembayaran" method="post">
                    <button type="submit" href="" class="btn btn-danger py-2 fs-5 mt-5 w-100">Konfirmasi
                        Pemesanan</button>
                </form>

            </div>
            <div class="" style="height: 150px;"></div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
                crossorigin="anonymous">
            </script>
</body>

</html>