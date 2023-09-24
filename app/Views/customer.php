<?= $this->extend('default') ?>

<?= $this->section('content') ?>

<?= $this->include('layout/header.php') ?>

<?= $this->include('layout/sidebar.php'); ?>

<?= $this->include('layout/topbar.php') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Selamat Datang Admin</h1>
<h3>Aplikasi Pengelolaan Nasabah Bank Mandiri Taspen</h3>

<br>
<!-- Content Row -->
<div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                pengaduan</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= countData('pengaduan')?></div>
                                        </div>
                                        <div class="col-auto">
                                        <svg class="text-gray-300" xmlns="http://www.w3.org/2000/svg" width="45"  fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                                            <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                            <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z"/>
                                        </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    

    <!-- Alat Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-waning text-uppercase mb-1">
                            Jenis Pengaduan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= countData('jenis_p')?></div>
                    </div>
                    <div class="col-auto">
                    <svg  class="text-gray-300" width="45"  xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
                        <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                        <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
                    </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Properti Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Golongan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= countData('golongan')?></div>
                    </div>
                    <div class="col-auto">
                        <svg class="text-gray-300" width="45" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
                            <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                        </svg>    
                    </div>
                </div>
            </div>
        </div>
    </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            User</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= countData('user')?></div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                </div>
                                                <div class="col">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <svg  class="text-gray-300" xmlns="http://www.w3.org/2000/svg" width="45" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

</div>
<!-- /.container-fluid -->


<!-- Project Card Example -->
<div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-secondary">Diagram banyaknya Pengaduan</h6>
            </div>
            <div class="card-body">
                <h4 class="small font-weight-bold">Pengaduan dari Nasabah<span
                        class="float-right"><?= countData('pengaduan')?>%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: <?= countData('pengaduan')?>%"
                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
        </div>
</div>
</div>
<!-- End of Main Content -->

<?= $this->include('layout/footer.php') ?>