<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Riwayat Pemesanan - Sportify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../styles/main.css">
    <link rel="shortcut icon" href="../images/ball.svg" type="image/x-icon">
</head>

<body>
    <div class="full-screen">
        <nav class="navbar navbar-expand-lg navbar-light pt-3 pt-lg-3">
            <div class="container">
                <a class="navbar-brand p-lg-3 d-flex" href="index.php">
                    <img src="../images/ball.svg" alt="Brand Icon" class="logo-brand">
                    <h5 class="mb-0 ms-2">Sportify</h5>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-lg-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" style="color: #ff4757 !important; font-weight: bold;"
                                aria-current="page" href="riwayat-pemesanan.php">Riwayat Pemesanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rekomendasi.php">Rekomendasi</a>
                        </li>
                    </ul>
                    <div class="dropdown">
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

        <section class="history-header">
            <div class="container text-center mt-5">
                <h2 class="fs-1">Riwayat Pemesanan Anda</h2>
                <p class="fs-5"></p>
            </div>
        </section>

        <section class="table-history mt-5">
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="fw-bold">
                            <tr>
                                <td>No. Reservasi</td>
                                <td>Olahraga</td>
                                <td>Lapangan</td>
                                <td>Tanggal</td>
                                <td>Jam</td>
                                <td>Durasi (jam)</td>
                                <td>Jenis Bayar</td>
                                <td>Total Harga</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <td>1000</td>
                                <td>Futsal</td>
                                <td>Ghinan Futsal</td>
                                <td>2022-06-02</td>
                                <td>16:00</td>
                                <td>2</td>
                                <td>Booking</td>
                                <td>Rp.200000</td>
                                <td>
                                <a href="#" class="btn btn-outline-secondary disabled">Ubah</a>
                                    <a href="#" class="btn btn-outline-primary">Batalkan</a>
                                </td>
                            </tr>
                            <tr>
                                <td>1010</td>
                                <td>Basket</td>
                                <td>Basket Unila</td>
                                <td>2022-06-12</td>
                                <td>14:00</td>
                                <td>1</td>
                                <td>Full</td>
                                <td>Rp.100000</td>
                                <td>
                                    <a href="#" class="btn btn-outline-secondary">Ubah</a>
                                    <a href="#" class="btn btn-outline-primary">Batalkan</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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