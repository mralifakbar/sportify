<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Sportify</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <link rel="shortcut icon" href="../assets/images/ball.svg" type="image/x-icon">
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
                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <a href="login" class="btn btn-outline-primary px-4 py-2 me-lg-2 ms-lg-auto mt-4 mt-lg-0 d-block d-lg-inline-block ">Masuk</a>
                    <a href="register" class="btn btn-primary px-4 py-2 mt-3 mt-lg-0 d-block d-lg-inline-block">Daftar</a>
                </div>
            </div>
        </nav>

        <section class="booking-area">
            <div class="container text-center">
                <h2 class="mt-5 mb-4 fs-1">Jadwal Booking Lapangan Basket</h2>
                <form action="" method="post">
                    <div class="row justify-content-center mt-4">
                        <div class="col-lg-3 mb-3 mb-lg-3">
                            <select class="form-select" aria-label="Jenis olahraga">
                                <option selected>Pilih jenis olahraga</option>
                                <option value="Futsal">Futsal</option>
                                <option value="Badminton">Badminton</option>
                                <option value="Basket">Basket</option>
                            </select>
                        </div>
                        <div class="col-lg-3 mb-3 mb-lg-3">
                            <input type="date" class="form-control" id="datebBooking" placeholder="name@example.com">
                        </div>
                        <div class="col-auto text-start mb-3 mb-lg-3">
                            <button type="submit" class="btn btn-primary">Cari Lapangan</button>
                        </div>
                    </div>
                </form>

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
                                <img src="../assets/images/basket.jpeg" alt="images" />
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
                                    <img src="../assets/images/star-yellow.svg" alt="star" />
                                    <span>4.2</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                    <a href="" class="btn btn-outline-secondary me-2 mb-2">10.30</a>
                                    <a href="" class="btn btn-outline-secondary me-2 mb-2 ">08.00</a>
                                    <a href="" class="btn btn-outline-secondary me-2 mb-2">14.00</a>
                                    <a href="" class="btn btn-outline-secondary me-2 mb-2">15.00</a>
                                    <a href="" class="btn btn-outline-secondary me-2 mb-2">17.20</a>
                                    <a href="" class="btn btn-outline-secondary me-2 mb-2">20.00</a>
                                    <a href="" class="btn btn-outline-secondary me-2 mb-2">19.00</a>
                                    <a href="" class="btn btn-outline-secondary me-2 mb-2">21.30</a>
                                </div>
                            </div>


                        </div>
                        <!-- END CARD 1 -->
                        <!-- CARD 2 -->
                        <div class="card-hotel-carousel">
                            <div class="image-placeholder">
                                <img src="../assets/images/basket.jpeg" alt="images" />
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
                                    <img src="../assets/images/star-yellow.svg" alt="star" />
                                    <span>3.7</span>
                                </div>
                            </div>
                            <div class="col">
                                <a href="" class="btn btn-outline-secondary me-2 mb-2">10.30</a>
                                <a href="" class="btn btn-outline-secondary me-2 mb-2 ">08.00</a>
                                <a href="" class="btn btn-outline-secondary me-2 mb-2">14.00</a>
                                <a href="" class="btn btn-outline-secondary me-2 mb-2">15.00</a>
                                <a href="" class="btn btn-outline-secondary me-2 mb-2">17.20</a>
                                <a href="" class="btn btn-outline-secondary me-2 mb-2">20.00</a>
                                <a href="" class="btn btn-outline-secondary me-2 mb-2">19.00</a>
                                <a href="" class="btn btn-outline-secondary me-2 mb-2">21.30</a>
                            </div>
                        </div>
                        <!-- END CARD 2 -->
                        <!-- CARD 3 -->
                        <div class="card-hotel-carousel">
                            <div class="image-placeholder">
                                <img src="../assets/images/basket.jpeg" alt="images" />
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
                                    <img src="../assets/images/star-yellow.svg" alt="star" />
                                    <span>4.8</span>
                                </div>
                            </div>
                            <div class="col">
                                <a href="" class="btn btn-outline-secondary me-2 mb-2">10.30</a>
                                <a href="" class="btn btn-outline-secondary me-2 mb-2 ">08.00</a>
                                <a href="" class="btn btn-outline-secondary me-2 mb-2">14.00</a>
                                <a href="" class="btn btn-outline-secondary me-2 mb-2">15.00</a>
                                <a href="" class="btn btn-outline-secondary me-2 mb-2">17.20</a>
                                <a href="" class="btn btn-outline-secondary me-2 mb-2">20.00</a>
                                <a href="" class="btn btn-outline-secondary me-2 mb-2">19.00</a>
                                <a href="" class="btn btn-outline-secondary me-2 mb-2">21.30</a>
                            </div>
                        </div>
                        <!-- END CARD 3 -->
                        <!-- CARD 4 -->
                        <div class="card-hotel-carousel">
                            <div class="image-placeholder">
                                <img src="../assets/images/basket.jpeg" alt="images" />
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
                                    <img src="../assets/images/star-yellow.svg" alt="star" />
                                    <span>4.8</span>
                                </div>

                            </div>

                        </div>
                        <!-- END CARD 4 -->
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>