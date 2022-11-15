<?= $this->extend('templates/booker-template.php') ?>

<?= $this->section('title') ?> Pesan <?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="card my-3 rounded-5">
        <img src="../assets/images/lapanganbaru.jpg" height="500" class="card-img-top " alt="..."
            style="border-radius: 30px 30px 0 0;">
        <div class="card-body m-3">
            <h5 class="card-title fs-3 text-danger fw-bold">
                <?= $lapangan['nama_lapangan']; ?>
            </h5>
            <p class="card-text">Lapangan <span class="text-danger fw-semibold"><?= $lapangan['jenis']; ?></span></p>
        </div>
    </div>

    <div class="row">
        <div class="col">

            <p class="fs-3 text-center fw-bold mt-3">Tanggal: <span
                    class="text-danger"><?= date('j F Y', strtotime($tanggal)) ?></span></p>
            <p class="fs-5 my-4 text-center">Atau ganti tanggal booking</p>
            <div class="col-lg-3 mb-3 mb-lg-5 mx-auto" style="width: 30%">
                <input type="date" class="form-control" id="dateBooking" required name="dateBook"
                    value="<?= $tanggal; ?>" min="<?= $tanggalnow; ?>" style="height: 60px !important;"
                    onchange="changeDate(<?= $id ?>)">
            </div>

            <form action="/konfirmasi-pemesanan" method="post">
                <div class="row">
                    <?php $selected = 0; ?>
                    <input type="hidden" name="tanggal" value="<?= $tanggal; ?>">
                    <input type="hidden" name="harga" value="<?= $lapangan['harga']; ?>">
                    <input type="hidden" name="idLapangan" value="<?= $id?>">
                    <?php $bokarr = 0; ?>
                    <div class="row">
                        <?php for($i = 7; $i <= 21; $i++) { ?>
                        <?php if (in_array($i, $booked[$bokarr])) {?>
                        <?php if ($i >= 7 && $i <= 9) { ?>
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
                        <?php } else {?>
                        <div class="col-lg-2 mb-3">
                            <a class="text-decoration-none text-light fw-bold" aria-disabled="true"
                                style="cursor: not-allowed">
                                <div class="card rounded-4  text-center py-3 bg-secondary">
                                    <p class="fs-4 bi bi-calendar-check-fill"></p>
                                    <p class="p-0 m-0 "><?= $i; ?>.00-<?= $i+1; ?>.00</p>
                                    <p class="p-0 m-0 fs-4"><?= number_format($lapangan['harga'],0,',','.'); ?>
                                    </p>
                                    <?php $selected = $i; ?>
                                    <p class="p-0 m-0 fw-bold">Booked</p>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                        <?php } else { ?>
                        <?php if ($i >= 7 && $i <= 9) { ?>
                        <div class="col-lg-2 mb-3">
                            <input type="checkbox" class="btn-check" id="btn-check-<?= $i ?>-outlined"
                                autocomplete="off" onchange="change(<?= $i ?>)" value="<?= $i ?>" name="jam<?= $i ?>">
                            <label class="btn p-0 m-0 d-block rounded-4" for="btn-check-<?= $i ?>-outlined">
                                <div class="card rounded-4  text-center py-3 fw-bold" id="card<?= $i ?>">
                                    <p class="text-success fs-4 bi bi-plus-circle-fill" id="statusIcon<?= $i ?>"></p>
                                    <p class=" p-0 m-0 ">0<?= $i; ?>.00-0<?= $i+1; ?>.00</p>
                                    <p class=" p-0 m-0 fs-4">
                                        <?= number_format($lapangan['harga'],0,',','.'); ?>
                                    </p>
                                    <p class="p-0 m-0 text-success fw-bold" id="statusText<?= $i ?>">Available
                                    </p>
                                </div>
                            </label><br>
                        </div>
                        <?php } else {?>
                        <div class="col-lg-2 mb-3">
                            <input type="checkbox" class="btn-check" id="btn-check-<?= $i ?>-outlined"
                                autocomplete="off" onchange="change(<?= $i ?>)" value="<?= $i ?>" name="jam<?= $i ?>">
                            <label class="btn p-0 m-0 d-block rounded-4" for="btn-check-<?= $i ?>-outlined">
                                <div class="card rounded-4  text-center py-3 fw-bold" id="card<?= $i ?>">
                                    <p class="text-success fs-4 bi bi-plus-circle-fill" id="statusIcon<?= $i ?>"></p>
                                    <p class="p-0 m-0 "><?= $i; ?>.00-<?= $i+1; ?>.00</p>
                                    <p class="p-0 m-0 fs-4"><?= number_format($lapangan['harga'],0,',','.'); ?>
                                    </p>
                                    <p class="p-0 m-0 text-success fw-bold" id="statusText<?= $i ?>">Available
                                    </p>
                                </div>
                            </label><br>
                        </div>
                        <?php } ?>
                        <?php } ?>

                        <?php } ?>


                        <button disabled type="submit" class="btn btn-primary py-2 fs-5" id="submitBtn">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</form>



</div>
</div>
<!-- <div class="input-group mb-3 mt-3 w-50">
                <input type="text" class="form-control" placeholder="Durasi" aria-label="Recipient's username"
                    aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Pesan</button>
            </div> -->

</div>

<div class="" style="height: 150px;"></div>

<script>
let count = 0;

function changeDate(id) {
    window.location.replace("/order/" + id + "?dateBook=" + document.getElementById('dateBooking').value);
}

function change(id) {
    let text = "btn-check-" + id + "-outlined"
    const checkbox = document.getElementById(text)
    if (checkbox.checked) {
        document.getElementById('statusText' + id).innerHTML = "Selected"
        document.getElementById('statusText' + id).classList.add("text-light")
        document.getElementById('statusIcon' + id).classList.remove("bi-plus-circle-fill")
        document.getElementById('statusIcon' + id).classList.add("bi-dash-circle-fill")
        document.getElementById('statusIcon' + id).classList.add("text-light")
        document.getElementById('card' + id).classList.add("text-light")
        document.getElementById('card' + id).classList.add("bg-success")
        count++
    } else {
        document.getElementById('statusText' + id).innerHTML = "Available"
        document.getElementById('statusText' + id).classList.remove("text-light")
        document.getElementById('statusIcon' + id).classList.remove("bi-dash-circle-fill")
        document.getElementById('statusIcon' + id).classList.add("bi-plus-circle-fill")
        document.getElementById('statusIcon' + id).classList.remove("text-light")
        document.getElementById('card' + id).classList.remove("text-light")
        document.getElementById('card' + id).classList.remove("bg-success")
        count--
    }

    if (!count) {
        document.getElementById('submitBtn').setAttribute('disabled', '')
    } else {
        document.getElementById('submitBtn').removeAttribute('disabled')
    }
}
</script>


<?= $this->endSection() ?>