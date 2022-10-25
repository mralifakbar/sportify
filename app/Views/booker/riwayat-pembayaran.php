<?= $this->extend('templates/dashboard') ?>
<?= $this->section('content') ?>
<h1>RIWAYAT TRANSAKSI PEMBAYARAN</h1>
<div class="card shadow my-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-danger">Table Riwayat pembayaran Customer</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID Transaksi</th>
                        <th>Tanggal Transaksi</th>
                        <th>Metode Pembayaran</th>
                        <th>Jumlah pembayaran</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2022-11-21</td>
                        <td>Bank Transfer</td>
                        <td>Rp. 70.000</td>
                        <td><button class="btn btn-success" disabled>Berhasil</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2022-11-22</td>
                        <td>Qris</td>
                        <td>Rp. 100.000</td>
                        <td><button class="btn btn-danger" disabled>Gagal</button></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2022-11-23</td>
                        <td>Bank Transfer</td>
                        <td>Rp. 170.000</td>
                        <td><button class="btn btn-warning" disabled>Pending</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endsection('content') ?>