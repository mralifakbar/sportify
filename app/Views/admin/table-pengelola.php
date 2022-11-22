<?= $this->extend('templates/dashboard-admin-template.php') ?>

<?= $this->section('title') ?> Dashboard <?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"> Tabel Lapangan</h1>
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
                            <th>Nama Lapangan</th>
                            <th>Jenis Lapangan</th>
                            <th>Tipe Lapangan</th>
                            <th>Harga Perjam</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>

                    <tbody>

                        <?php
                                        foreach ($lapangan as $lp) {
                                        ?>
                        <tr>
                            <td class="align-middle"><?php echo $lp['nama_lapangan']; ?></td>
                            <td class="align-middle"><?php echo $lp['jenis']; ?></td>
                            <td class="align-middle"><?php echo $lp['tipe_lapangan']; ?></td>
                            <td class="align-middle">Rp.<?php echo $lp['harga']; ?></td>
                            <td><a type="button" class="btn btn-warning" href="/update-lapangan/<?= $lp['id'] ?>"><i
                                        class="fa fa-edit"></i></a>
                                <a href="/delete-lapangan/<?= $lp['id']; ?>" type="button" class="btn btn-danger"><i
                                        class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
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