<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rekomendasi - Sportify</title>
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
                            <a class="nav-link" aria-current="page" href="riwayat-pemesanan.php">Riwayat Pemesanan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #ff4757 !important; font-weight: bold;" href="rekomendasi.php">Rekomendasi</a>
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

        <section class="recomendation-header">
            <div class="container text-center mt-5">
                <h2 class="fs-1">Rekomendasi <span>Terbaik</span> untuk Anda</h2>
                <p class="fs-5">Kami paham Anda menginginkan yang terbaik, kami berikan yang paling terbaik</p>
            </div>
        </section>

        <section class="basket-recomendation mt-5">
            <div class="container">
                <h3 class="fw-bold">Basket</h3>
                <div class="row">
                    <div class="gallery row p-md-4 section scrolling-wrapper flex-row flex-nowrap">
                        <!-- CARD 1 -->
                        <div class="card-hotel-carousel">
                            <div class="image-placeholder">
                                <img src="../images/basket.jpeg" alt="images" />
                            </div>
                            <div class="card-details">
                                <div class="caption">Basket Vila Citra</div>
                                <span class="sub-caption">150m</span>
                            </div>
                            <div class="bottom-text d-flex flex-row justify-content-between">
                                <div class="price-content flex-grow-1">
                                    <span>Mulai dari</span> <span class="price">Rp.100.000</span>
                                </div>
                                <div class="rating d-flex align-items-center">
                                    <img src="../images/star-yellow.svg" alt="star" />
                                    <span>4.2</span>
                                </div>
                            </div>
                            <div class="btn-pesan text-end">
                                <a href="#" class="btn btn-primary mt-3 px-4">Pesan</a>
                            </div>

                        </div>
                        <!-- END CARD 1 -->
                        <!-- CARD 2 -->
                        <div class="card-hotel-carousel">
                            <div class="image-placeholder">
                                <img src="../images/basket.jpeg" alt="images" />
                            </div>
                            <div class="card-details">
                                <div class="caption">Basket Unila</div>
                                <span class="sub-caption">1500m</span>
                            </div>
                            <div class="bottom-text d-flex flex-row justify-content-between">
                                <div class="price-content flex-grow-1">
                                    <span>Mulai dari</span> <span class="price">Rp.40.000</span>
                                </div>
                                <div class="rating d-flex align-items-center">
                                    <img src="../images/star-yellow.svg" alt="star" />
                                    <span>3.7</span>
                                </div>
                            </div>
                            <div class="btn-pesan text-end">
                                <a href="#" class="btn btn-primary mt-3 px-4">Pesan</a>
                            </div>
                        </div>
                        <!-- END CARD 2 -->
                        <!-- CARD 3 -->
                        <div class="card-hotel-carousel">
                            <div class="image-placeholder">
                                <img src="../images/basket.jpeg" alt="images" />
                            </div>
                            <div class="card-details">
                                <div class="caption">Basket Dino</div>
                                <span class="sub-caption">2000m</span>
                            </div>
                            <div class="bottom-text d-flex flex-row justify-content-between">
                                <div class="price-content flex-grow-1">
                                    <span>Mulai dari</span> <span class="price">Rp.80.000</span>
                                </div>
                                <div class="rating d-flex align-items-center">
                                    <img src="../images/star-yellow.svg" alt="star" />
                                    <span>4.8</span>
                                </div>
                            </div>
                            <div class="btn-pesan text-end">
                                <a href="#" class="btn btn-primary mt-3 px-4">Pesan</a>
                            </div>
                        </div>
                        <!-- END CARD 3 -->
                        <!-- CARD 4 -->
                        <div class="card-hotel-carousel">
                            <div class="image-placeholder">
                                <img src="../images/basket.jpeg" alt="images" />
                            </div>
                            <div class="card-details">
                                <div class="caption">Basket Itera</div>
                                <span class="sub-caption">2000m</span>
                            </div>
                            <div class="bottom-text d-flex flex-row justify-content-between">
                                <div class="price-content flex-grow-1">
                                    <span>Mulai dari</span> <span class="price">Rp.80.000</span>
                                </div>
                                <div class="rating d-flex align-items-center">
                                    <img src="../images/star-yellow.svg" alt="star" />
                                    <span>4.8</span>
                                </div>
                            </div>
                            <div class="btn-pesan text-end">
                                <a href="#" class="btn btn-primary mt-3 px-4">Pesan</a>
                            </div>
                        </div>
                        <!-- END CARD 4 -->
                    </div>
                </div>
            </div>
        </section>

        <section class="futsal-recomendation mt-5">
            <div class="container">
                <h3 class="fw-bold">Futsal</h3>
                <div class="row">
                    <div class="gallery row p-md-4 section scrolling-wrapper flex-row flex-nowrap">
                        <!-- CARD 1 -->
                        <div class="card-hotel-carousel">
                            <div class="image-placeholder">
                                <img src="../images/futsal.jpg" alt="images" />
                            </div>
                            <div class="card-details">
                                <div class="caption">Futsal Intan</div>
                                <span class="sub-caption">150m</span>
                            </div>
                            <div class="bottom-text d-flex flex-row justify-content-between">
                                <div class="price-content flex-grow-1">
                                    <span>Mulai dari</span> <span class="price">Rp.100.000</span>
                                </div>
                                <div class="rating d-flex align-items-center">
                                    <img src="../images/star-yellow.svg" alt="star" />
                                    <span>4.2</span>
                                </div>
                            </div>
                            <div class="btn-pesan text-end">
                                <a href="#" class="btn btn-primary mt-3 px-4">Pesan</a>
                            </div>

                        </div>
                        <!-- END CARD 1 -->
                        <!-- CARD 2 -->
                        <div class="card-hotel-carousel">
                            <div class="image-placeholder">
                                <img src="../images/futsal.jpg" alt="images" />
                            </div>
                            <div class="card-details">
                                <div class="caption">Futsal Twin</div>
                                <span class="sub-caption">1500m</span>
                            </div>
                            <div class="bottom-text d-flex flex-row justify-content-between">
                                <div class="price-content flex-grow-1">
                                    <span>Mulai dari</span> <span class="price">Rp.40.000</span>
                                </div>
                                <div class="rating d-flex align-items-center">
                                    <img src="../images/star-yellow.svg" alt="star" />
                                    <span>3.7</span>
                                </div>
                            </div>
                            <div class="btn-pesan text-end">
                                <a href="#" class="btn btn-primary mt-3 px-4">Pesan</a>
                            </div>
                        </div>
                        <!-- END CARD 2 -->
                        <!-- CARD 3 -->
                        <div class="card-hotel-carousel">
                            <div class="image-placeholder">
                                <img src="../images/futsal.jpg" alt="images" />
                            </div>
                            <div class="card-details">
                                <div class="caption">Lampung Futsal</div>
                                <span class="sub-caption">2000m</span>
                            </div>
                            <div class="bottom-text d-flex flex-row justify-content-between">
                                <div class="price-content flex-grow-1">
                                    <span>Mulai dari</span> <span class="price">Rp.80.000</span>
                                </div>
                                <div class="rating d-flex align-items-center">
                                    <img src="../images/star-yellow.svg" alt="star" />
                                    <span>4.8</span>
                                </div>
                            </div>
                            <div class="btn-pesan text-end">
                                <a href="#" class="btn btn-primary mt-3 px-4">Pesan</a>
                            </div>
                        </div>
                        <!-- END CARD 3 -->
                        <!-- CARD 4 -->
                        <div class="card-hotel-carousel">
                            <div class="image-placeholder">
                                <img src="../images/futsal.jpg" alt="images" />
                            </div>
                            <div class="card-details">
                                <div class="caption">Family Futsal</div>
                                <span class="sub-caption">2000m</span>
                            </div>
                            <div class="bottom-text d-flex flex-row justify-content-between">
                                <div class="price-content flex-grow-1">
                                    <span>Mulai dari</span> <span class="price">Rp.80.000</span>
                                </div>
                                <div class="rating d-flex align-items-center">
                                    <img src="../images/star-yellow.svg" alt="star" />
                                    <span>4.8</span>
                                </div>
                            </div>
                            <div class="btn-pesan text-end">
                                <a href="#" class="btn btn-primary mt-3 px-4">Pesan</a>
                            </div>
                        </div>
                        <!-- END CARD 4 -->
                    </div>
                </div>
            </div>
        </section>

        <section class="badminton-recomendation mt-5">
            <div class="container">
                <h3 class="fw-bold">Badminton</h3>
                <div class="row">
                    <div class="gallery row p-md-4 section scrolling-wrapper flex-row flex-nowrap">
                        <!-- CARD 1 -->
                        <div class="card-hotel-carousel">
                            <div class="image-placeholder">
                                <img src="../images/badminton.jpg" alt="images" />
                            </div>
                            <div class="card-details">
                                <div class="caption">Central Badminton</div>
                                <span class="sub-caption">150m</span>
                            </div>
                            <div class="bottom-text d-flex flex-row justify-content-between">
                                <div class="price-content flex-grow-1">
                                    <span>Mulai dari</span> <span class="price">Rp.100.000</span>
                                </div>
                                <div class="rating d-flex align-items-center">
                                    <img src="../images/star-yellow.svg" alt="star" />
                                    <span>4.2</span>
                                </div>
                            </div>
                            <div class="btn-pesan text-end">
                                <a href="#" class="btn btn-primary mt-3 px-4">Pesan</a>
                            </div>

                        </div>
                        <!-- END CARD 1 -->
                        <!-- CARD 2 -->
                        <div class="card-hotel-carousel">
                            <div class="image-placeholder">
                                <img src="../images/badminton.jpg" alt="images" />
                            </div>
                            <div class="card-details">
                                <div class="caption">IKS Sport</div>
                                <span class="sub-caption">1500m</span>
                            </div>
                            <div class="bottom-text d-flex flex-row justify-content-between">
                                <div class="price-content flex-grow-1">
                                    <span>Mulai dari</span> <span class="price">Rp.40.000</span>
                                </div>
                                <div class="rating d-flex align-items-center">
                                    <img src="../images/star-yellow.svg" alt="star" />
                                    <span>3.7</span>
                                </div>
                            </div>
                            <div class="btn-pesan text-end">
                                <a href="#" class="btn btn-primary mt-3 px-4">Pesan</a>
                            </div>
                        </div>
                        <!-- END CARD 2 -->
                        <!-- CARD 3 -->
                        <div class="card-hotel-carousel">
                            <div class="image-placeholder">
                                <img src="../images/badminton.jpg" alt="images" />
                            </div>
                            <div class="card-details">
                                <div class="caption">GOR Bintang</div>
                                <span class="sub-caption">2000m</span>
                            </div>
                            <div class="bottom-text d-flex flex-row justify-content-between">
                                <div class="price-content flex-grow-1">
                                    <span>Mulai dari</span> <span class="price">Rp.80.000</span>
                                </div>
                                <div class="rating d-flex align-items-center">
                                    <img src="../images/star-yellow.svg" alt="star" />
                                    <span>4.8</span>
                                </div>
                            </div>
                            <div class="btn-pesan text-end">
                                <a href="#" class="btn btn-primary mt-3 px-4">Pesan</a>
                            </div>
                        </div>
                        <!-- END CARD 3 -->
                        <!-- CARD 4 -->
                        <div class="card-hotel-carousel">
                            <div class="image-placeholder">
                                <img src="../images/badminton.jpg" alt="images" />
                            </div>
                            <div class="card-details">
                                <div class="caption">Sport Center Gunter</div>
                                <span class="sub-caption">2000m</span>
                            </div>
                            <div class="bottom-text d-flex flex-row justify-content-between">
                                <div class="price-content flex-grow-1">
                                    <span>Mulai dari</span> <span class="price">Rp.80.000</span>
                                </div>
                                <div class="rating d-flex align-items-center">
                                    <img src="../images/star-yellow.svg" alt="star" />
                                    <span>4.8</span>
                                </div>
                            </div>
                            <div class="btn-pesan text-end">
                                <a href="#" class="btn btn-primary mt-3 px-4">Pesan</a>
                            </div>
                        </div>
                        <!-- END CARD 4 -->
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