<?= $this->extend('templates/dashboard-pengelola-template.php') ?>

<?= $this->section('title') ?> Lapangan <?= $this->endSection() ?>

<?= $this->section('content') ?>\
<div class="containter">
    <div class="row">
        <div class="col-lg-6">
            <div class="modal-header">
                <h4 class="modal-title">Update Data Lapangan</h4>
            </div>

            <!-- Modal body -->
            <form method="POST" action="/update-lapangan">
                <input type="hidden" name="id" placeholder="Nama Lapangan" class="form-control"
                    value="<?= $lapangan['id']; ?>">
                <div class="modal-body">
                    <input type="text" name="namalapangan" placeholder="Nama Lapangan" class="form-control"
                        value="<?= $lapangan['nama_lapangan']; ?>">
                    <label for="exampleFormControlSelect1"></label><select class="form-control"
                        id="exampleFormControlSelect1" name="jenis">
                        <option>Jenis Lapangan</option>
                        <option value="Futsal" <?php if ($lapangan['jenis'] == 'Futsal') echo "
                        selected" ?>>Futsal</option>
                        <option value="Basket" <?php if ($lapangan['jenis'] == 'Basket') echo "
                        selected" ?>>Basket</option>
                        <option value="Badminton" <?php if ($lapangan['jenis'] == 'Badminton') echo "
                        selected" ?>>Badminton</option>
                    </select>
                    <br>
                    <input type="text" name="lokasi" placeholder="Lokasi" class="form-control"
                        value="<?= $lapangan['lokasi']; ?>">
                    <label for="exampleFormControlSelect1"></label><select class="form-control"
                        id="exampleFormControlSelect1" name="tipe-lapangan">
                        <option>Tipe Lapangan</option>
                        <option value="Outdoor" <?php if ($lapangan['jenis'] == 'Outdoor') echo "
                        selected" ?>>Outdoor</option>
                        <option value="Indoor" <?php if ($lapangan['jenis'] == 'Indoor') echo "
                        selected" ?>>Indoor</option>
                    </select>
                    <label for="exampleFormControlSelect1"></label><select class="form-control"
                        id="exampleFormControlSelect1" name="tipe-lantai">
                        <option>Tipe Lantai</option>
                        <option value="Rumput" <?php if ($lapangan['jenis'] == 'Rumput Hijau') echo "
                        selected" ?>>Rumput Hijau</option>
                        <option value="Semen Halus" <?php if ($lapangan['jenis'] == 'Semen Halus') echo "
                        selected" ?>>Semen Halus</option>
                        <option value="Semen Kasar" <?php if ($lapangan['jenis'] == 'Semen Kasar') echo "
                        selected" ?>>Semen Kasar</option>
                    </select>
                    <br>
                    <input type="number" name="panjang" placeholder="Panjang Lapangan" class="form-control"
                        value="<?= $lapangan['panjang']; ?>">
                    <br>
                    <input type="number" name="lebar" placeholder="Lebar Lapangan" class="form-control"
                        value="<?= $lapangan['lebar']; ?>">
                    <br>
                    <input type="number" name="harga" placeholder="Harga" class="form-control"
                        value="<?= $lapangan['harga']; ?>">
                    <br>
                    <label for="exampleFormControlTextarea1">Deskripsi</label><textarea class="form-control"
                        id="exampleFormControlTextarea1" rows="3"
                        name="deskripsi"><?= $lapangan['deskripsi']; ?></textarea>
                    <br>
                    <label for="formFile" class="form-label">Foto
                        Lapangan</label>
                    <input class="form-control" type="text" id="formFile" name="link-gambar"
                        value="<?= $lapangan['link_foto']; ?>">
                    <br>
                    <button type="submit" class="btn btn-primary"> Submit </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>