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
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lapangan Gor Saburai</td>
                        <td>Lapangan Futsal</td>
                        <td>2022-11-21</td>
                        <td>14.00</td>
                        <td>2 jam</td>
                        <td>Sedang Berlangsung</td>
                    </tr>
                    <tr>
                        <td>Lapangan Kemiling Raya</td>
                        <td>Lapangan Basket</td>
                        <td>2022-10-11</td>
                        <td>08.00</td>
                        <td>3 jam</td>
                        <td>Sudah Selesai</td>
                    </tr>
                    <tr>
                        <td>Lapangan Xbadmin </td>
                        <td>Lapangan Badminton</td>
                        <td>2022-11-23</td>
                        <td>08.00</td>
                        <td>1 jam</td>
                        <td>Sudah Selesai</td>
                    </tr>
                    <tr>
                        <td>Lapangan Gor Sudirman</td>
                        <td>Lapangan Futsal</td>
                        <td>2022-10-21</td>
                        <td>21.00</td>
                        <td>2 jam</td>
                        <td>Sudah Selesai</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endsection('content') ?>