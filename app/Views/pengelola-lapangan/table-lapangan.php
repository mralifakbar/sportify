<?= $this->extend('templates/dashboard-pengelola-template.php') ?>

<?= $this->section('title') ?> Lapangan <?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"> Tabel Lapangan</h1>
    <p class="mb-1"><a target="_blank" href="https://datatables.net"></a></p>


    <button type="button" class="btn btn-danger my-3" data-toggle="modal" data-target="#myModal">Tambah lapangan <i
            class="fa fa-table"></i></button>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">Info Lapangan</h6>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>

                        <tr>
                            <th>Nama Lapangan</th>
                            <th>Jenis Lapangan</th>
                            <th>Tipe Lapangan</th>
                            <th>Harga Perjam</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach($lapangan as $lp): ?>
                        <tr>
                            <td><?= $lp['nama_lapangan']; ?></td>
                            <td><?= $lp['jenis']; ?></td>
                            <td><?= $lp['tipe_lantai']; ?></td>
                            <td><?= $lp['harga']; ?></td>
                            <td><a type="button" class="btn btn-warning" href="/update-lapangan/<?= $lp['id'] ?>"><i
                                        class="fa fa-edit"></i></a>
                                <a href="/delete-lapangan/<?= $lp['id']; ?>" type="button" class="btn btn-danger"><i
                                        class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>

                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Tambah Data Lapangan</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <form action="/add/lapangan" method="POST">
                                <div class="modal-body">

                                    <input type="text" name="namalapangan" placeholder="Nama Lapangan"
                                        class="form-control">
                                    <label for="exampleFormControlSelect1"></label><select class="form-control"
                                        id="exampleFormControlSelect1" name="jenis">
                                        <option>Jenis Lapangan</option>
                                        <option value="Futsal">Futsal</option>
                                        <option value="Basket">Basket</option>
                                        <option value="Badminton">Badminton</option>
                                    </select>
                                    <br>
                                    <label for="exampleFormControlSelect1">Fasilitas</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Parkir" name="Parkir"
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Parkir
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Wifi" name="Wifi"
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Wifi
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Toilet" name="Toilet"
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Toilet
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Shower" name="Shower"
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Shower
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Toko" name="Toko"
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Toko
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Kantin" name="Kantin"
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Kantin
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Mushola" name="Mushola"
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Mushola
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="Locker" name="Locker"
                                            id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Locker
                                        </label>
                                    </div>
                                    <br>
                                    <input type="text" name="lokasi" placeholder="Lokasi" class="form-control">
                                    <label for="exampleFormControlSelect1"></label><select class="form-control"
                                        id="exampleFormControlSelect1" name="tipe-lapangan">
                                        <option>Tipe Lapangan</option>
                                        <option value="Outdoor">Outdoor</option>
                                        <option value="Indoor">Indoor</option>
                                    </select>
                                    <label for="exampleFormControlSelect1"></label><select class="form-control"
                                        id="exampleFormControlSelect1" name="tipe-lantai">
                                        <option>Tipe Lantai</option>
                                        <option value="Rumput">Rumput Hijau</option>
                                        <option value="Semen Halus">Semen Halus</option>
                                        <option value="Semen Kasar">Semen Kasar</option>
                                    </select>
                                    <br>
                                    <input type="number" name="panjang" placeholder="Panjang Lapangan"
                                        class="form-control">
                                    <br>
                                    <input type="number" name="lebar" placeholder="Lebar Lapangan" class="form-control">
                                    <br>
                                    <input type="number" name="harga" placeholder="Harga" class="form-control">
                                    <br>
                                    <label for="exampleFormControlTextarea1">Deskripsi</label><textarea
                                        class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        name="deskripsi"></textarea>
                                    <br>
                                    <label for="formFile" class="form-label">Foto Lapangan</label>
                                    <input class="form-control" type="text" id="formFile" name="link-gambar">
                                    <br>
                                    <button type="submit" class="btn btn-primary"> Submit </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal" id="updateModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Update Data Lapangan</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <form method="POST" id="updateLapangan">
                                <div class="modal-body">
                                    <input type="text" name="namalapangan" placeholder="Nama Lapangan"
                                        class="form-control">
                                    <label for="exampleFormControlSelect1"></label><select class="form-control"
                                        id="exampleFormControlSelect1" name="jenis">
                                        <option>Jenis Lapangan</option>
                                        <option value="Futsal">Futsal</option>
                                        <option value="Basket">Basket</option>
                                        <option value="Badminton">Badminton</option>
                                    </select>
                                    <br>
                                    <input type="text" name="lokasi" placeholder="Lokasi" class="form-control">
                                    <label for="exampleFormControlSelect1"></label><select class="form-control"
                                        id="exampleFormControlSelect1" name="tipe-lapangan">
                                        <option>Tipe Lapangan</option>
                                        <option value="Outdoor">Outdoor</option>
                                        <option value="Indoor">Indoor</option>
                                    </select>
                                    <label for="exampleFormControlSelect1"></label><select class="form-control"
                                        id="exampleFormControlSelect1" name="tipe-lantai">
                                        <option>Tipe Lantai</option>
                                        <option value="Rumput">Rumput Hijau</option>
                                        <option value="Semen Halus">Semen Halus</option>
                                        <option value="Semen Kasar">Semen Kasar</option>
                                    </select>
                                    <br>
                                    <input type="number" name="panjang" placeholder="Panjang Lapangan"
                                        class="form-control">
                                    <br>
                                    <input type="number" name="lebar" placeholder="Lebar Lapangan" class="form-control">
                                    <br>
                                    <input type="number" name="harga" placeholder="Harga" class="form-control">
                                    <br>
                                    <label for="exampleFormControlTextarea1">Deskripsi</label><textarea
                                        class="form-control" id="exampleFormControlTextarea1" rows="3"
                                        name="deskripsi"></textarea>
                                    <br>
                                    <label for="formFile" class="form-label">Foto Lapangan</label>
                                    <input class="form-control" type="text" id="formFile" name="link-gambar">
                                    <br>
                                    <button type="submit" class="btn btn-primary"> Submit </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function updateLapangan(id) {
    document.getElementById('updateLapangan').setAttribute('action', '/update/lapangan/' + id)
}
</script>
<?= $this->endSection() ?>