<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kelola Transaksi - Sportify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../styles/main.css">
    <link rel="shortcut icon" href="../images/ball.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
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
                        <a class="nav-link text-muted" href="index.php">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted " href="lapangan.php">Lapangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-muted fw-bold active" aria-current="page"
                            href="transaksi.php">Transaksi</a>
                    </li>
                </ul>
                <div class="text-end">
                    <a href="tambah-transaksi.php" class="btn btn-primary px-4 py-2 mt-3">
                        <i class="bi bi-plus-square-fill me-2"></i> Tambah Transaksi
                    </a>
                </div>
                <div class="table-responsive mt-4">
                    <table class="table table-hover align-middle">
                        <thead class="fw-bold">
                            <tr>
                                <td>ID Transaksi</td>
                                <td>Pemesan</td>
                                <td>Olahraga</td>
                                <td>Lapangan</td>
                                <td>Tanggal Booking</td>
                                <td>Jam Booking</td>
                                <td>Durasi (Jam)</td>
                                <td>Jenis Bayar</td>
                                <td>Status</td>
                                <td>Total Harga</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <tr>
                                <td>1</td>
                                <td>Tien Si</td>
                                <td>Futsal</td>
                                <td>Ghinan Futsal</td>
                                <td>2022-06-20</td>
                                <td>16:00</td>
                                <td>2</td>
                                <td>Lunas</td>
                                <td>Selesai</td>
                                <td>Rp.100000</td>
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


    <?php 
    include "../ui/footer.php"
    ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>