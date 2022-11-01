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
                <div class="col">
                <p class="fw-bold fs-3 mt-3">Pilih Tanggal Booking</p>
                <div class="col-lg-3 mb-3 mb-lg-3">
                            <input type="date" class="form-control" id="datebBooking" required name="dateBook">
                        </div>
                <div class="row">
                    <div class="col-lg-2">
                        <a class="text-decoration-none text-dark fw-bold" href=""><div class="card rounded-4  text-center py-3">
                        <p class="text-success fs-4 bi bi-plus-circle-fill"></p>
                        <p class="p-0 m-0 " >07.00-08.00</p>
                        <p class="p-0 m-0 fs-4" >Rp. 70.000</p>
                        <p class="p-0 m-0 text-success fw-bold" >Available</p>
                        </div></a>
                    
                    </div>
                    <div class="col-lg-2">
                        <a class="text-decoration-none text-dark fw-bold" href=""><div class="card rounded-4  text-center py-3">
                        <p class="text-success fs-4 bi bi-plus-circle-fill"></p>
                        <p class="p-0 m-0 " >07.00-08.00</p>
                        <p class="p-0 m-0 fs-4" >Rp. 70.000</p>
                        <p class="p-0 m-0 text-success fw-bold" >Available</p>
                        </div></a>
                    
                    </div>

                    <div class="col-lg-2">
                        <a class="text-decoration-none text-dark fw-bold" href=""><div class="card rounded-4  text-center py-3">
                        <p class="text-success fs-4 bi bi-plus-circle-fill"></p>
                        <p class="p-0 m-0 " >07.00-08.00</p>
                        <p class="p-0 m-0 fs-4" >Rp. 70.000</p>
                        <p class="p-0 m-0 text-success fw-bold" >Available</p>
                        </div></a>
                    
                    </div>

                    
                    <div class="col-lg-2">
                        <a class="text-decoration-none text-dark fw-bold" href=""><div class="card rounded-4  text-center py-3">
                        <p class="text-success fs-4 bi bi-plus-circle-fill"></p>
                        <p class="p-0 m-0 " >07.00-08.00</p>
                        <p class="p-0 m-0 fs-4" >Rp. 70.000</p>
                        <p class="p-0 m-0 text-success fw-bold" >Available</p>
                        </div></a>
                    
                    </div>

                    
                    <div class="col-lg-2">
                        <a class="text-decoration-none text-dark fw-bold" href=""><div class="card rounded-4  text-center py-3">
                        <p class="text-success fs-4 bi bi-plus-circle-fill"></p>
                        <p class="p-0 m-0 " >07.00-08.00</p>
                        <p class="p-0 m-0 fs-4" >Rp. 70.000</p>
                        <p class="p-0 m-0 text-success fw-bold" >Available</p>
                        </div></a>
                    
                    </div>

                    
                    <div class="col-lg-2">
                        <a class="text-decoration-none text-dark fw-bold" href=""><div class="card rounded-4  text-center py-3">
                        <p class="text-success fs-4 bi bi-plus-circle-fill"></p>
                        <p class="p-0 m-0 " >07.00-08.00</p>
                        <p class="p-0 m-0 fs-4" >Rp. 70.000</p>
                        <p class="p-0 m-0 text-success fw-bold" >Available</p>
                        </div></a>
                    
                    </div>

                    
                    <div class="col-lg-2 mt-3">
                        <a class="text-decoration-none text-dark fw-bold" href=""><div class="card rounded-4  text-center py-3">
                        <p class="text-success fs-4 bi bi-plus-circle-fill"></p>
                        <p class="p-0 m-0 " >07.00-08.00</p>
                        <p class="p-0 m-0 fs-4" >Rp. 70.000</p>
                        <p class="p-0 m-0 text-success fw-bold" >Available</p>
                        </div></a>
                    
                    </div>

                    <div class="col-lg-2 mt-3">
                        <a class="text-decoration-none text-dark fw-bold" href=""><div class="card rounded-4  text-center py-3">
                        <p class="text-success fs-4 bi bi-plus-circle-fill"></p>
                        <p class="p-0 m-0 " >07.00-08.00</p>
                        <p class="p-0 m-0 fs-4" >Rp. 70.000</p>
                        <p class="p-0 m-0 text-success fw-bold" >Available</p>
                        </div></a>
                    
                    </div>

                </div>


                </div>
            </div>
            <div class="input-group mb-3 mt-3 w-50">
            <input type="text" class="form-control" placeholder="Durasi" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Pesan</button>
            </div>
          
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
        </script>
</body>

</html>

