<html>
<head>

<?= $this->extend('default') ?>

<?= $this->section('content') ?>

<?= $this->include('layout/header.php') ?>

<?= $this->include('layout/sidebar.php'); ?>

<?= $this->include('layout/topbar.php') ?>

<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Pengaduan</h1>
                    <p class="text-muted m-b-30 font-14">Berikut adalah seluruh data pengaduan dari nasabah</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-md-7">
                                    <h6 class="m-0 font-weight-bold text-primary">Daftar pengaduan</h6>
                                </div>
                                <div class="col-md-5">
                                </div>
                            </div>
                        </div>
                    <?php if (!empty($errors)) : ?>
                        <?php foreach ($errors as $field => $error) : ?>
                        <div class="alert alert-danger">
                            <p><?= $error ?></p>
                        </div>
                        <?php endforeach ?>
                    <?php endif ?>
                    <div class="card-body">
                            <div class="table-responsive">
                            <table id="tabelUser"class="table table-striped" width="100%" cellspacing="0">
                    <thead>
                    <tr><th>Id</th>
                        <th>Pengaduan</th>
                        <th>Tanggal</th>
                        <th>NOTAS</th>
                        <th>Status</th>
                        <th>Balasan</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    foreach($pengaduan as $pengaduan){
                        
                        echo "
                        <tr>
                            <td>".$pengaduan['id']."</td>
                            <td>".$pengaduan['pengaduan']."</td>
                            <td>".$pengaduan['created_at']."</td>
                            <td>".$pengaduan['notas']."</td>
                            <td>".$pengaduan['status']."</td>
                            <td>".$pengaduan['balasan']."</td>
                            <td>
                                <a href='".base_url()."/pengaduan/ubahData/".$pengaduan['id']."' class='btn btn-primary' role='button'><i class='fas fa-reply'></i></a>
                                <a href='".base_url()."/pengaduan/hapusData/".$pengaduan['id']."' class='btn btn-danger' role='button'><i class='fa fa-trash'></i></a>
                            </td></tr>
                        ";
                    }
                    ?>
                    </tbody>
                    </table>

                    <script>
                    $(document).ready(function() {
                        $('#tabelUser').DataTable( {
                            dom: 'lfrtBip',
                            buttons: [
                                'copy', 'csv', 'excel', 'pdf', 'print', 
                            ]
                        } );
                    } );
                    </script>
            </div>
                </div>
                    </div>
                </div>
                    <?= $this->endSection() ?>                 