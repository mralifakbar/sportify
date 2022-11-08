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
                        style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    </div>
                </div>

            </div>
            <div class="row mt-3 text-center fw-bold fs-5">
                <div class="col">
                    <p>Validasi Item</p>
                </div>
                <div class="col">
                    <p>Data dan Pembayaran</p>
                </div>
            </div>

            <form class="row mt-5">
                <div class="col">
                    <div class="card p-5">
                        <p class="fw-bold fs-3 text-danger">Detail Customer</p>
                        <div class="fs-5">

                            <label for="inputNama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="inputNama" placeholder="Nama lengkap"
                                style="height:60px">

                            <label for="inputNumber" class="form-label mt-3">Phone</label>
                            <input type="text" class="form-control" id="inputNumber" placeholder="Nomor Telepon"
                                style="height:60px">

                            <label for="inputAddress" class="form-label mt-3">Alamat</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="Alamat lengkap"
                                style="height:60px">

                            <label for="inputKeterangan" class="form-label mt-3">Keterangan</label>
                            <input type="text" class="form-control" id="inputKeterangan"
                                placeholder="Apartment, studio, or floor" style="height:60px">


                            <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Apakah sudah Valid?
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <form class="row">
                        <div class="col mb-4">
                            <div class="card p-5">
                                <p class="fw-bold fs-3 text-danger">Jenis Pembayaran</p>
                                <div class="fs-5"></div>
                                <div class="card p-4 m-0 mb-3">

                                    <div class="row p-2 m-0 ">
                                        <p class="fw-bold fs-4 m-0 text-danger">ATG SENTUL</p>
                                        <p class="fs-5 m-0">Lapangan 1</p>
                                        <p class="fw-bold m-0">07-Nov-2022 ◦ 06:00 - 08:00</p>

                                        <div class="col mt-3">
                                            <p class="fs-5 m-0">Harga Lapangan</p>
                                            <p class="fs-5 m-0 mt-2">Service fee</p>
                                            <p class="fs-5 m-0 mt-5">Total</p>
                                        </div>
                                        <div class="col mt-3 text-end">

                                            <p class="fs-5 m-0 mt-2">Rp. 1.980.000</p>
                                            <p class="fs-5 m-0 mt-2">Rp. 5.000</p>
                                            <hr>
                                            <p class="fs-5 m-0 mt-3">Rp. 1.985.000</p>
                                        </div>
                                    </div>


                                </div>
                    </form>

                    <div class="row">
                        <div class="card p-4">
                            <div class="card-body text-center ">
                                <p class="fw-bold fs-4 ">Pilih Jenis Pembayaran</p>
                                <p>Pastikan detail pemesanan sudah sesuai dan benar.</p>
                            </div>

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Pembayaran QRIS
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <img src="assets/images/qr.png" class="img-thumbnail" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Virtual Bank
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p> BNI : 008008911729361 </p>
                                            <p> BRI : 008108911729361 </p>
                                            <p> BCA : 008208911729361 </p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

        </div>

        <div class="" style="height: 150px;"></div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
        </script>
</body>

</html>