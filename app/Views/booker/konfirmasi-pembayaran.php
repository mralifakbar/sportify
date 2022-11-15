<?= $this->extend('templates/booker-template.php') ?>

<?= $this->section('title') ?> Konfirmasi Pembayaran <?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row mt-5 justify-content-center ">
        <div class="progress p-0 w-50">
            <div class="progress-bar bg-danger " role="progressbar" aria-label="Danger example" style="width: 100%"
                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
            </div>
        </div>

    </div>
    <div class="row mt-3 text-center fw-bold fs-5">
        <div class="col">
            <p>Validasi Item</p>
        </div>
        <div class="col">
            <p>Data dan Pembayaran</p>
        </div>
    </div>

    <form class="row mt-5" method="POST" action="/bayar">
        <input type="hidden" name="id_transaksi" value="<?= $id_transaksi ?>">

        <div class="col-lg-6">
            <div class="card p-5">
                <p class="fw-bold fs-3 text-danger">Detail Customer</p>
                <div class="fs-5">

                    <label for="inputNama" class="form-label">Nama</label>
                    <input type="text" class="form-control" value="<?= old('nama'); ?>" id="inputNama"
                        placeholder="Nama lengkap" style="height:60px" name="inputNama" required>

                    <label for="inputNumber" class="form-label mt-3">Phone</label>
                    <input type="text" class="form-control" value="<?= old('phone'); ?>" id="inputNumber"
                        placeholder="Nomor Telepon" style="height:60px" name="inputNumber" required>

                    <label for="inputAddress" class="form-label mt-3">Alamat</label>
                    <input type="text" class="form-control" value="<?= old('alamat'); ?>" id="inputAddress"
                        placeholder="Alamat lengkap" style="height:60px" name="inputAddress" required>

                    <label for="inputKeterangan" class="form-label mt-3">Keterangan</label>
                    <input type="text" class="form-control" value="<?= old('keterangan'); ?> " name="inputKeterangan"
                        id="inputKeterangan" placeholder="" style="height:60px" required>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-3 mt-lg-0">
            <form class="row">
                <div class="col mb-4">
                    <div class="card p-5">
                        <p class="fw-bold fs-3 text-danger">Jenis Pembayaran</p>
                        <div class="fs-5"></div>
                        <div class="row">
                            <div class="card p-4 mb-4 ">

                                <div class="row p-2 m-0 ">
                                    <p class="fw-bold fs-4 m-0 text-danger"><?= $lapangan; ?></p>
                                    <p class="fs-5 m-0">Lapangan <?= $tipe; ?></p>

                                    <div class="col mt-3">

                                        <?php for($i = 0; $i < sizeof($jam) - 1; $i++) {?>
                                        <p class="fw-bold m-0"><?= date('j F Y', strtotime($tanggal)) ?>
                                            <?php } ?>

                                        <p class="fs-5 m-0 mt-4">Harga Lapangan</p>
                                        <p class="fs-5 m-0 mt-2">Service fee</p>
                                        <p class="fs-5 m-0 mt-3 fw-bold">Total</p>
                                    </div>
                                    <div class="col mt-3 text-end">

                                        <?php for($i = 0; $i < sizeof($jam) - 1; $i++) {?>
                                        <p class="p-0 m-0 fw-bold">
                                            <?= $jam[$i]; ?>:00 -
                                            <?= $jam[$i] + 1; ?>:00</p>
                                        <?php } ?>

                                        <p class="fs-5 m-0 mt-4">
                                            Rp.<?= number_format($total); ?>
                                        </p>
                                        <p class="fs-5 m-0 mt-2">Rp.5,000</p>
                                        <p class="fs-5 m-0 mt-3 fw-bold">Rp.<?= number_format($total + 5000); ?>
                                        </p>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="row">
                            <div class="card p-4">
                                <div class="card-body text-center ">
                                    <p class="fw-bold fs-4 ">Pilih Jenis Pembayaran</p>
                                    <p>Pastikan detail pemesanan sudah sesuai dan benar.</p>
                                </div>

                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Pembayaran QRIS
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <img src="assets/images/qr.png" class="img-thumbnail" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Virtual Bank
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p> BNI : 008008911729361 </p>
                                                <p> BRI : 008108911729361 </p>
                                                <p> BCA : 008208911729361 </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
        </div>
        <button type="submit" class="btn btn-danger w-100 py-2 fs-4 mt-5">Sudah Bayar</button>
    </form>
    <div class="" style="height: 150px;"></div>
    <?= $this->endSection() ?>