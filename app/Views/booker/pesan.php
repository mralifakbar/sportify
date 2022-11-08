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
                <div class="col">
                    <input type="checkbox" class="btn-check" id="btn-check-outline" autocomplete="off">

                    <p class="fs-3 text-center fw-bold mt-3">Tanggal: <span
                            class="text-danger"><?= date('j F Y', strtotime($tanggal)) ?></span></p>
                    <p class="fs-5 my-4 text-center">Atau ganti tanggal booking</p>
                    <div class="col-lg-3 mb-3 mb-lg-5 mx-auto" style="width: 30%">
                        <input type="date" class="form-control" id="datebBooking" required name="dateBook"
                            value="<?= $tanggal; ?>" min="<?= $tanggalnow; ?>" style="height: 60px !important;">
                    </div>

                    <div class="row">
                    
                        <?php $selected = 0; ?>

                        <?php $bokarr = 0; ?>
                        <div class="row">
                            <?php for($i = 7; $i <= 21; $i++) { ?>
                            <?php if (in_array($i, $booked[$bokarr])) {?>
                            <?php if ($i >= 7 && $i <= 9) { ?>
                                <input type="checkbox" class="btn-check" id="btn-check-2-outlined" checked autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btn-check-2-outlined">
                                <div class="col-lg-2 mb-3">
                                <a class="text-decoration-none text-light fw-bold" aria-disabled="true"
                                    style="cursor: not-allowed">
                                        <div class="card rounded-4  text-center py-3 bg-secondary">
                                            <p class="fs-4 bi bi-calendar-check-fill"></p>
                                            <p class="p-0 m-0 ">0<?= $i; ?>.00-0<?= $i+1; ?>.00</p>
                                            <p class="p-0 m-0 fs-4"><?= number_format($lapangan['harga'],0,',','.'); ?>
                                                <?php $selected = $i; ?>
                                            </p>
                                            <p class="p-0 m-0 fw-bold">Booked</p>
                                        </div>
                                </a>
                                 </div>
                                </label>
                            
                            <?php } else {?>
                                <input type="checkbox" class="btn-check" id="btn-check-2-outlined" checked autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btn-check-2-outlined">
                                    <div class="col-lg-2 mb-3">
                                    <a class="text-decoration-none text-light fw-bold" aria-disabled="true"
                                        style="cursor: not-allowed">
                                        <label class="btn btn-outline-secondary" for="btn-check-2-outlined">
                                            <div class="card rounded-4  text-center py-3 bg-secondary">
                                                <p class="fs-4 bi bi-calendar-check-fill"></p>
                                                <p class="p-0 m-0 "><?= $i; ?>.00-<?= $i+1; ?>.00</p>
                                                <p class="p-0 m-0 fs-4"><?= number_format($lapangan['harga'],0,',','.'); ?>
                                                </p>
                                                <?php $selected = $i; ?>
                                                <p class="p-0 m-0 fw-bold">Booked</p>
                                            </div>
                                        </label>
                                        
                                    </a>
                                    </div>
                                </label>
                            
                            <?php } ?>
                            <?php } else { ?>
                            <?php if ($i >= 7 && $i <= 9) { ?>
                            <div class="col-lg-2 mb-3" >
                                <a class="text-decoration-none text-dark fw-bold w-100" href="" type="button"
                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <label class="btn btn-outline-secondary" for="btn-check-2-outlined">
                                        <div class="card rounded-4  text-center py-3" for="btn-check-2">
                                            <p class="text-success fs-4 bi bi-plus-circle-fill"></p>
                                            <p class="p-0 m-0 ">0<?= $i; ?>.00-0<?= $i+1; ?>.00</p>
                                            <p class="p-0 m-0 fs-4"><?= number_format($lapangan['harga'],0,',','.'); ?>
                                            </p>
                                            <p class="p-0 m-0 text-success fw-bold">Available</p>
                                        </div>
                                    </label>
                                    
                                </a>
                            </div>
                            <?php } else {?>
                                <input type="checkbox" class="btn-check" id="btn-check-2-outlined" checked autocomplete="off">
                                <label class="btn btn-outline-secondary" for="btn-check-2-outlined">
                                    <div class="col-lg-2 mb-3">
                                    <a class="text-decoration-none text-dark fw-bold w-100" href="" type="button"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <label class="btn btn-outline-secondary" for="btn-check-2-outlined">
                                            <div class="card rounded-4  text-center py-3" for="btn-check-2">
                                                <p class="text-success fs-4 bi bi-plus-circle-fill"></p>
                                                <p class="p-0 m-0 "><?= $i; ?>.00-<?= $i+1; ?>.00</p>
                                                <p class="p-0 m-0 fs-4"><?= number_format($lapangan['harga'],0,',','.'); ?>
                                                </p>
                                                <p class="p-0 m-0 text-success fw-bold">Available</p>
                                            </div>
                                        </label>
                                        
                                    </a>
                                    </div>
                                </label><br>
                            
                            <?php } ?>
                            <?php } ?>

                            <?php } ?>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Pemesanan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/belom" method="post">
                                                <!-- <p><?= $selected; ?></p> -->
                                                <div class="mb-3 row">
                                                    <label for="durasi" class="col-sm-2 col-form-label">Durasi</label>
                                                    <div class="col-sm-10">
                                                        <input type="number" class="form-control" id="durasi" min="1"
                                                            max="10">
                                                    </div>
                                                </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batalkan</button>
                                            <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- <div class="input-group mb-3 mt-3 w-50">
                <input type="text" class="form-control" placeholder="Durasi" aria-label="Recipient's username"
                    aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Pesan</button>
            </div> -->

        </div>

        <div class="" style="height: 150px;"></div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
        </script>
</body>

</html>