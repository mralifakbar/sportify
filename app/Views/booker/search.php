<?= $this->extend('templates/booker-template.php') ?>

<?= $this->section('title') ?> Search <?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="booking-area">
    <div class="container text-center">
        <h2 class="mt-5 mb-4 fs-1">Jadwal Booking Lapangan <b><?= $jenis; ?></b></h2>
        <form action="search" method="get">
            <div class="row justify-content-center mt-4">
                <div class="col-lg-3 mb-3 mb-lg-3">
                    <select class="form-select" aria-label="Jenis olahraga" required name="jenisOlahraga"><?php  ?>
                        <option value="Futsal" <?php if ($jenis === 'Futsal') echo 'selected' ?>>Futsal</option>
                        <option value="Badminton" <?php if ($jenis === 'Badminton') echo 'selected' ?>>Badminton
                        </option>
                        <option value="Basket" <?php if ($jenis === 'Basket') echo 'selected' ?>>Basket</option>
                    </select>
                </div>
                <div class="col-lg-3 mb-3 mb-lg-3">
                    <input type="date" class="form-control" id="datebBooking" required name="dateBook"
                        value="<?= $tanggal; ?>" min="<?= $tanggal; ?>">
                </div>
                <div class="col-auto text-start mb-3 mb-lg-3">
                    <button type="submit" class="btn btn-primary">Ubah Pencarian</button>
                </div>
            </div>
        </form>

    </div>
</section>

<?php if (!$lapangan): ?>
<h1 class="text-center mt-5">Tidak Ada Lapangan</h1>
<?php endif; ?>

<section class="basket-recomendation mt-3">
    <div class="container">
        <!-- <h3 class="fw-bold">Basket</h3> -->
        <div class="row">
            <div class="gallery row p-md-4 section scrolling-wrapper flex-row flex-nowrap">
                <!-- CARD 1 -->
                <?php $bokarr = 0; ?>
                <?php foreach($lapangan as $lp): ?>
                <div class="card-hotel-carousel">
                    <a href="/detail/<?= $lp['id']; ?>?dateBook=<?= $tanggal; ?>" class="text-decoration-none">
                        <div class="image-placeholder">
                            <img src="../assets/images/basket.jpeg" alt="images" />
                        </div>
                        <div class="card-details">
                            <div class="caption"><?= $lp['nama_lapangan']; ?></div>
                            <span class="sub-caption">150m</span>
                        </div>
                        <div class="bottom-text d-flex flex-row justify-content-between">
                            <div class="price-content flex-grow-1">
                                <?php helper('number');?>
                                <span>Mulai dari</span> <span class="price">Rp.
                                    <?= number_format($lp['harga'],0,',','.') ?></span>
                            </div>
                            <div class="rating d-flex align-items-center">
                                <img src="../assets/images/star-yellow.svg" alt="star" />
                                <span>4.2</span>
                            </div>
                        </div>
                    </a>

                </div>
                <?php $bokarr++; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>