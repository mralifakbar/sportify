<?= $this->extend('templates/booker-template.php') ?>

<?= $this->section('title') ?> Explore <?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="booking-area">
    <div class="container text-center">
        <h2 class="mt-5 mb-4 fs-1">Pilih Lapangan. Bayar Bookingan. Aman.</h2>
        <form action="search" method="get">
            <div class="row justify-content-center mt-4">
                <div class="col-lg-3 mb-3 mb-lg-3">
                    <select class="form-select" aria-label="Jenis olahraga" required name="jenisOlahraga">
                        <option value="Futsal">Futsal</option>
                        <option value="Badminton">Badminton</option>
                        <option value="Basket">Basket</option>
                    </select>
                </div>
                <div class="col-lg-3 mb-3 mb-lg-3">
                    <input type="date" class="form-control" id="datebBooking" required name="dateBook"
                        value="<?= $tanggal; ?>" min="<?= $tanggal; ?>">
                </div>
                <div class="col-auto text-start mb-3 mb-lg-3">
                    <button type="submit" class="btn btn-primary">Cari Lapangan</button>
                </div>
            </div>
        </form>

    </div>
</section>

<section class="choose-sport mt-5 pt-5">
    <div class="container">
        <div class="row justify-content-evenly">
            <div class="col-md-6 col-lg-3 d-flex justify-content-center mb-3 mb-lg-3">
                <a href="search?jenisOlahraga=Basket">
                    <div class="card" style="width: 18rem;">
                        <img src="../assets/images/basketball.svg" class="card-img-top mx-auto mt-4" alt="Basketball">
                        <div class="card-body">
                            <p class="card-text fs-2 text-center fw-bold">Basket</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 d-flex justify-content-center mb-3 mb-lg-3">
                <a href="search?jenisOlahraga=Futsal">
                    <div class="card" style="width: 18rem;">
                        <img src="../assets/images/futsal.svg" class="card-img-top mx-auto mt-4" alt="Futsal">
                        <div class="card-body">
                            <p class="card-text fs-2 text-center fw-bold">Futsal</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-6 col-lg-3 d-flex justify-content-center">
                <a href="search?jenisOlahraga=Badminton">
                    <div class="card" style="width: 18rem;">
                        <img src="../assets/images/badminton.svg" class="card-img-top mx-auto mt-4" alt="Badminton">
                        <div class="card-body">
                            <p class="card-text fs-2 text-center fw-bold">Badminton</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
</div>

<?= $this->endSection() ?>