<?= $this->extend('templates/dashboard-pengelola-template.php') ?>

<?= $this->section('title') ?> Transaksi <?= $this->endSection() ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<h1>RIWAYAT TRANSAKSI PENYEWAAN</h1>
<div class="card shadow my-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-danger">Table Riwayat Transaksi Customer</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
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
                <tbod>
                    <?php
                
                foreach ($transaksi as $trans) {
                ?>
                    <tr>
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
                        <td class="align-middle">
                            <?php if ($trans['tanggal'] > $time):?>
                            <a class="btn btn-danger" data-toggle="modal" data-target="#deleteTransModal"
                                id="cancel-<?= $trans['id'] ?>" onclick="cancelBook(<?= $trans['id'] ?>)"
                                data-bs-toggle="tooltip" data-bs-title="Batalkan Penyewaan"><i
                                    class="bi bi-x-lg"></i></a>
                            <?php endif; ?>
                            <a href="/belom" class="btn btn-warning"><i class="bi bi-eye-fill"></i></i></a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                    </tbody>
            </table>
        </div>

        <div class="modal fade" id="deleteTransModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Yakin ingin membatalkan?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>

                    <div class="modal-body">Jika Anda sudah yakin, silakan pilih "Batalkan Pesanan" untuk membatalkan
                        pesanan Anda</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                        <a class="btn btn-danger" id="cancelButton">Batalkan Pesanan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function cancelBook(id) {
    document.getElementById('cancelButton').setAttribute('href', '/cancel-booking/' + id)
}
</script>
<!-- /.container-fluid -->
<?= $this->endSection() ?>