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
            <div class="card my-3 rounded-5">
                <img src="../assets/images/lapanganbaru.jpg" height="500" class="card-img-top " alt="..."
                    style="border-radius: 30px 30px 0 0;">
                <div class="card-body m-3">
                    <h5 class="card-title fs-3 text-danger fw-bold">
                        <?= $lapangan['nama_lapangan']; ?>
                    </h5>
                    <p class="card-text">Lapangan <span
                            class="text-danger fw-semibold"><?= $lapangan['jenis']; ?></span></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <p class="fw-bold fs-3 mt-3">DESKRIPSI</p>
                    <?php if(strlen($lapangan["deskripsi"]) == 0) { ?>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id voluptatem illum ut velit distinctio
                        odit, praesentium consequuntur necessitatibus sit aliquam aspernatur similique assumenda cum
                        vero earum, nihil minus? Eaque quos pariatur itaque reiciendis aliquid consequuntur quidem
                        possimus minima voluptas. Quidem.</p>
                    <?php } else {
                        echo $lapangan['deskripsi'];
                    } ?>
                    <p class="fw-bold fs-3 mt-5">FASILITAS</p>
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
                <div class="col-lg-4 ps-lg-5 h-100">
                    <p class="fw-bold fs-3 mt-3">INFORMASI</p>
                    <p class="fs-5 mt-3">
                    <p class="fw-bold m-0 mb-2">Alamat</p>
                    <p><?= $lapangan['lokasi']; ?></p>
                    <a href="/order/<?= $lapangan['id']; ?>?dateBook=<?= $tanggal; ?>"
                        class="btn btn-danger w-100 p-2">Pesan
                        Lapangan</a>
                </div>
            </div>
        </div>

        <div class="" style="height: 150px;"></div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
        </script>
</body>

</html>