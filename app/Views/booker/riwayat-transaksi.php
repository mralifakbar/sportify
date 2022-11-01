<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<h1>RIWAYAT TRANSAKSI PENYEWAAN</h1>
<div class="card shadow my-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-danger">Table Riwayat Transaksi Customer</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Lapangan</th>
                        <th>Tipe Lapangan</th>
                        <th>Tanggal Penyewaan</th>
                        <th>Jam Penyewaan</th>
                        <th>Durasi</th>
                        <!-- <th>Status</th> -->
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach ($transaksi as $trans) {
                ?>
                <tr>
                    <td><?php echo $trans['nama_lapangan']; ?></td>
                    <td><?php echo $trans['tipe_lapangan']; ?></td>
                    <td><?php echo $trans['tanggal']; ?></td>
                    <td><?php echo $trans['jam']; ?></td>
                    <td><?php echo $trans['durasi']; ?></td>

                </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endsection('content') ?>