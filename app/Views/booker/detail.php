<?= $this->extend('templates/booker-template.php') ?>

<?= $this->section('title') ?> Detail <?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="card my-3 rounded-5">
        <img src="<?php if($lapangan['link_foto'] != '') {echo $lapangan['link_foto'];} else {echo '../assets/images/lapanganbaru.jpg';} ?>"
            height="500" class="card-img-top " alt="..." style="border-radius: 30px 30px 0 0;">
        <div class="card-body m-3">
            <h5 class="card-title fs-3 text-danger fw-bold">
                <?= $lapangan['nama_lapangan']; ?>
            </h5>
            <p class="card-text">Lapangan <span class="text-danger fw-semibold"><?= $lapangan['jenis']; ?></span></p>
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
                <?php 
                        foreach ($fasilitas as $fsl) {

                         ?>
                <?php if($fsl['nama_fasilitas'] == 'Parkir') {?>
                <div class="col-2 fs-5 mt-3">
                    <p><i class="bi bi-car-front me-3"></i>Parkir</p>
                </div>
                <?php } else if($fsl['nama_fasilitas'] == 'Wifi') {?>
                <div class="col-2 fs-5 mt-3">
                    <p><i class="bi bi-wifi me-3"></i>Wi-Fi</p>
                </div>
                <?php } else if($fsl['nama_fasilitas'] == 'Toilet') {?>
                <div class="col-2 fs-5 mt-3">
                    <p><i class="bi bi-badge-wc-fill me-3"></i>Toilet</p>
                </div>
                <?php } else if($fsl['nama_fasilitas'] == 'Shower') {?>
                <div class="col-2 fs-5 mt-3">
                    <p><i class="bi bi-water me-3"></i>Shower</p>
                </div>
                <?php } else if($fsl['nama_fasilitas'] == 'Toko') {?>
                <div class="col-2 fs-5 mt-3">
                    <p><i class="bi bi-shop me-3"></i>Toko</p>
                </div>
                <?php } else if($fsl['nama_fasilitas'] == 'Kantin') {?>
                <div class="col-2 fs-5 mt-3">
                    <p><i class="bi bi-shop-window me-3"></i>Kantin</p>
                </div>
                <?php } else if($fsl['nama_fasilitas'] == 'Mushola') {?>
                <div class="col-2 fs-5 mt-3">
                    <p><i class="bi bi-moon-stars-fill me-3"></i>Mushola</p>
                </div>
                <?php } else if($fsl['nama_fasilitas'] == 'Locker') {?>
                <div class="col-2 fs-5 mt-3">
                    <p><i class="bi bi-lock-fill me-3"></i>Locker</p>
                </div>
                <?php } ?>
                <?php
                        }
                        ?>
            </div>
        </div>
        <div class="col-lg-4 ps-lg-5 h-100">
            <p class="fw-bold fs-3 mt-3">INFORMASI</p>
            <p class="fs-5 mt-3">
            <p class="fw-bold m-0 mb-2">Alamat</p>
            <p><?= $lapangan['lokasi']; ?></p>
            <a href="/order/<?= $lapangan['id']; ?>?dateBook=<?= $tanggal; ?>" class="btn btn-danger w-100 p-2">Pesan
                Lapangan</a>
        </div>
    </div>
</div>

<div class="" style="height: 150px;"></div>
<?= $this->endSection() ?>