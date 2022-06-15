<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kelola User - Sportify</title>
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
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <section class="tab-section">
            <div class="container">
                <ul class="nav nav-tabs fs-5">
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="dashboard.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted " href="lapangan.php">Lapangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted fw-bold active" aria-current="page" href="user.php">User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted" href="transaksi.php">Transaksi</a>
                    </li>
                </ul>

                <div class="table-responsive mt-4">
                    <table class="table table-hover align-middle">
                        <thead class="fw-bold">
                            <tr>
                                <td>ID User</td>
                                <td>Username</td>
                                <td>Nama Lengkap</td>
                                <td>No. Handphone</td>
                                <td>Jumlah Transaksi</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <td>1</td>
                                <td>tiensi</td>
                                <td>Tien Si</td>
                                <td>089623319454</td>
                                <td>3</td>
                                <td>
                                    <a href="#" class="btn btn-outline-secondary">Ubah</a>
                                    <a href="#" class="btn btn-outline-primary">Hapus</a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>

        </section>
    </div>


    <footer class="page-footer font-small blue">
        <div class="container text-md-left">
            <div class="row d-flex flex-column-reverse flex-lg-row">
                <div class="col-md-6 mt-md-0 mt-3 address align mb-5 mb-lg-0">
                    <div class="logo font-red-hat-display">
                        Sportify
                    </div>

                    <div class="copyright font-red-hat-display align-self-end">
                        2022 All rights reserved.
                    </div>
                </div>
                <div class="row col-md-6 nav-footer">
                    <div class="col-md-4 mb-md-0 mb-3">
                        <p>
                            Penggunaan
                        </p>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Panduan</a>
                            </li>
                            <li>
                                <a href="#!">Metode Pembayaran</a>
                            </li>
                            <li>
                                <a href="#!">Costumer Services</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-md-0 mb-3">
                        <p>
                            Pengelola Lapangan
                        </p>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Biaya Listing</a>
                            </li>
                            <li>
                                <a href="#!">Ajukan Listing</a>
                            </li>
                            <li>
                                <a href="#!">Panduan</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-md-0 mb-3">
                        <p>
                            Perusahaan Kami
                        </p>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Tentang Kami</a>
                            </li>
                            <li>
                                <a href="#!">Karir</a>
                            </li>
                            <li>
                                <a href="#!">Blog & Berita</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>