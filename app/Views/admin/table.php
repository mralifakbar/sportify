<?= $this->extend('templates/dashboard-admin-template.php') ?>

<?= $this->section('title') ?> Dashboard <?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Data Akun</h1>
    <p class="mb-1"><a target="_blank" href="https://datatables.net"></a>.</p>

    <!-- DataTales Example -->
    <button type="button" class="btn btn-danger mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">

    </button>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name Akun</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Tanggal pembuatan akun</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            $i = 0;
                                    foreach ($user as $usr) {
                                    ?>
                        <tr>
                            <td class="align-middle"><?= $usr->username; ?></td>
                            <td><?= $usr->email; ?></td>
                            <td>
                                <?=$role[$i]['group'] ?> </td>
                            <td lass="align-middle"><?= $usr->created_at; ?></td>
                            <td>
                                <a href="/delete-user/<?= $usr->id; ?>" type="button" class="btn btn-danger"><i
                                        class="fa fa-trash"></i></a>
                        </tr>

                        <?php
                                    }
                                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>