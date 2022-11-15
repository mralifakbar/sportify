<?= $this->extend('templates/booker-template.php') ?>

<?= $this->section('title') ?> Konfirmasi Pemesanan <?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row mt-5 justify-content-center ">
        <div class="progress p-0 w-50">
            <div class="progress-bar bg-danger " role="progressbar" aria-label="Danger example" style="width: 50%"
                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
            </div>
        </div>

    </div>
    <div class="row mt-3 text-center fw-bold fs-5">
        <div class="col">
            <p>Validasi Item</p>
        </div>
        <div class="col text-muted">
            <p>Data dan Pembayaran</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="card p-4">
            <div class="card-body text-center ">
                <p class="fw-bold fs-3 m-0 mb-2">Periksa Pemesanan Anda</p>
                <p class="m-0 mb-3">Pastikan detail pemesanan sudah sesuai dan benar.</p>
            </div>

            <?php for($i = 0; $i < sizeof($jam); $i++) { ?>
            <div class="card mb-3">
                <div class="card-body ">
                    <div class="row">
                        <div class="col">
                            <p class="fw-bold fs-4 m-0"><?= $lapangan['nama_lapangan']; ?></p>
                            <p class="m-0">Lapangan <?= $lapangan['jenis']; ?></p>
                            <p class="fw-bold m-0"><?= date('j F Y', strtotime($tanggal)) ?> ◦
                                <?= $jam[$i]; ?>:00 -
                                <?= $jam[$i] + 1; ?>:00</p>
                        </div>
                        <div class="col text-end">
                            <p class="fw-bold fs-4 m-0">Rp.<?= number_format($lapangan['harga'],0,',','.'); ?>
                            </p>
                            <!-- <form action="/konfirmasi-pemesanan" method="post">
                                        <button type="submit" class="btn text-muted text-decoration-none"><i
                                                class="bi bi-trash3-fill"></i>
                                            Hapus </button>
                                    </form> -->
                        </div>
                    </div>
                </div>

            </div>
            <?php } ?>

            <div class="row">
                <div class="col">
                    <p class="fw-bold fs-4">Total Pembayaran</p>
                </div>
                <div class="col">
                    <p class="fw-bold fs-4 m-0 text-end">
                        Rp.<?= number_format($lapangan['harga'] * sizeof($jam),0,',','.'); ?>
                    </p>
                </div>
            </div>
        </div>
        <form action="/konfirmasi-pembayaran" method="post" class="p-0">
            <input type="hidden" name="lapangan" value="<?= $lapangan['nama_lapangan']; ?>">
            <input type="hidden" name="tipe" value="<?= $lapangan['jenis']; ?>">
            <input type="hidden" name="tanggal" value="<?= $tanggal; ?>">
            <?php 
                        $dataJam = "";
                        for ($i = 0; $i < sizeof($jam); $i++) {
                            $dataJam = $dataJam . $jam[$i] . " ";
                        }
                        echo '<input type="hidden" name="jam" value="<?= $dataJam; ?>">';
            // dd($dataJam);
            ?>
            <input type="hidden" name="jam" value="<?= $dataJam; ?>">
            <input type="hidden" name="total" value="<?= $lapangan['harga'] * sizeof($jam); ?>">
            <input type="hidden" name="id" value="<?= $id ?>">
            <button type=" submit" class="btn btn-danger mt-5 py-2 fs-5 w-100">Konfirmasi Pemesanan</button>
        </form>

    </div>
    <div class="" style="height: 150px;"></div>

    <?= $this->endSection() ?>