<?= $this->extend('templates/dashboard-admin-template.php') ?>

<?= $this->section('title') ?> Transaksi <?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"> Tabel Transaksi Users</h1>
    <p class="mb-1"><a target="_blank" href="https://datatables.net"></a></p>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Info Lapangan</h6>
        </div>



        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>

                        <tr>
                            <th>Username</th>
                            <th>Nama Lapangan</th>
                            <th>Jenis Lapangan</th>
                            <th>Tanggal Penyewaan</th>
                            <th>Jam Penyewaan</th>
                            <th>Total (Rp.)</th>
                            <th>Status Pembayaran</th>
                            <th>Status Bermain</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>

                    <tbody>


                        <?php

                                    foreach ($transaksi as $trans) {
                                    ?>
                        <tr>

                            <td class="align-middle">daffaputra</td>
                            <td class="align-middle"><?php echo $trans['nama_lapangan']; ?></td>
                            <td class="align-middle"><?php echo $trans['jenis']; ?></td>
                            <td class="align-middle"><?php echo $trans['tanggal']; ?></td>
                            <td class="align-middle">
                                <?php 
                                                    foreach ($jam as $jm) {
                                                        if ($jm['id_transaksi'] == $trans['id']) {
                                                            echo $jm['jam'].".00 ";
                                                        }
                                                    }
                                                ?>
                            </td>
                            <td class="align-middle"><?php echo number_format($trans['total_pembayaran']); ?></td>
                            <td class="align-middle"><button class="btn btn-warning" disabled>Pending</button></td>
                            <td class="align-middle">
                                <?php if ($trans['tanggal'] > $time):?>
                                Akan Datang
                                <?php elseif ($trans['tanggal'] == $time): ?>
                                Berlangsung hari ini
                                <?php else: ?>
                                Sudah Selesai
                                <?php endif; ?></td>

                            <!-- <td class="align-middle">
                                                <?php if ($trans['tanggal'] > $time):?>
                                                <a class="btn btn-danger" data-toggle="modal" data-target="#deleteTransModal"
                                                    id="cancel-<?= $trans['id'] ?>" onclick="cancelBook(<?= $trans['id'] ?>)"
                                                    data-bs-toggle="tooltip" data-bs-title="Batalkan Penyewaan"><i
                                                        class="bi bi-x-lg"></i></a>
                                                <?php endif; ?>
                                                <a href="/belom" class="btn btn-warning"><i class="bi bi-eye-fill"></i></i></a>
                                            </td> -->
                            <td><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <?php
                                    }
                                    ?>
                        <!-- <tr>
                                            <td>Bang_alif</td>
                                            <td>Gor Saburai</td>
                                            <td>Futsal</td>
                                            <td>13/11/2022</td>
                                            <td>13.00-15.00</td>
                                            <td>Rp.70.000</td>
                                            <td><button class="btn btn-success" disabled>Sukses</button></td>
                                            <td><button class="btn btn-success" disabled>Sedang berlangsung</button></td>
                                            <td><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td>Winafadhillah</td>
                                            <td>Gor Dekhafin</td>
                                            <td>Badmintoon</td>
                                            <td>21/11/2022</td>
                                            <td>21.00-23.00</td>
                                            <td>Rp.50.000</td>
                                            <td><button class="btn btn-warning" disabled>Pending</button></td>
                                            <td><button class="btn btn-warning" disabled>Akan berlangsung</button></td>
                                            <td><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td>Daffaputra</td>
                                            <td>gor lampung barat</td>
                                            <td>basket</td>
                                            <td>23/11/2022</td>
                                            <td>19.00-22.00</td>
                                            <td>Rp.150.000</td>
                                            <td><button class="btn btn-danger" disabled>gagal</button></td>
                                            <td><button class="btn btn-warning" disabled>Akan berlangsung</button></td>
                                            <td><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>

                                        </tr> -->


                    </tbody>
                </table>
            </div>
        </div>

        <!-- /.container-fluid -->

        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Sportify 2022</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<?= $this->endSection() ?>