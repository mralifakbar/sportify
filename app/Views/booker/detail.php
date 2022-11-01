<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail - Sportify</title>
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php if (auth()->loggedIn()) : ?>
                    <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                        <div class="dropdown ms-lg-auto">
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a href="login" class="btn btn-outline-primary px-4 py-2 me-lg-2 ms-lg-auto mt-4 mt-lg-0 d-block d-lg-inline-block ">Masuk</a>
                        <a href="register" class="btn btn-primary px-4 py-2 mt-3 mt-lg-0 d-block d-lg-inline-block">Daftar</a>
                    </div>
                <?php endif; ?>

            </div>
        </nav>
        <div class="container">
            <div class="card mb-3 rounded-5">
                <img src="../assets/images/lapanganbaru.jpg" height="500" class="card-img-top" alt="...">
                <div class="card-body m-3">
                    <h5 class="card-title fs-3 text-danger fw-bold">LAPANGAN PAHOMAN</h5>
                    <p class="card-text">Lapangan Futsal di Pahoman</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <p class="fw-bold fs-3 mt-3">DESKRIPSI</p>
                    <p class="fs-5 mt-3">Jumlah pemain yang memasuki area lapangan maksimal 30 orang, tidak diperkenankan membawa penonton. Wajib menggunakan masker, mencuci tangan sebelum dan sesudah bermain dan menjaga jarak 1,5meter Wajib dalam keadaan sehat, suhu badan diatas 37.3℃ tidak di izinkan untuk memasuki area lapangan. Bagi para pemain pengganti harap duduk berseberangan, memakai masker dan tetap menjaga jarak aman. Dilarang Keras Meludah, merokok di Lapangan maupun area tribune , untuk mencegah resiko penyebaran virus</p>
                    <p class="fw-bold fs-3 mt-3">FASILITAS</p>
                    <div class="row">
                        <div class="col-2 fs-5 mt-3">
                            <p><i class="bi bi-car-front me-3"></i>Parkir</p>
                        </div>
                        <div class="col-2 fs-5 mt-3">
                            <p><i class="bi bi-wifi me-3"></i>Wi-Fi</p>
                        </div>
                        <div class="col-2 fs-5 mt-3">
                            <p><i class="bi bi-badge-wc-fill me-3"></i>Toilet</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ps-5">
                    <p class="fw-bold fs-3 mt-3">INFORMASI</p>
                    <p class="fs-5 mt-3">
                    <p class="fw-bold">Alamat</p>
                    <p>H7F9+HH9, Jl. H. Juanda, Pahoman, Kec. Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35228</p>
                    <a href="" class="btn btn-danger w-100">Pesan Lapangan</a>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
        </script>
</body>

</html>