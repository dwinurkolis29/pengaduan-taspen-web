<html>
<head>

<?= $this->extend('default') ?>

<?= $this->section('content') ?>

<?= $this->include('layout/header.php') ?>

<?= $this->include('layout/sidebar.php'); ?>

<?= $this->include('layout/topbar.php') ?>

<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Jenis Golongan</h1>
                    <p class="text-muted m-b-30 font-14">Berikut adalah seluruh data jenis golongan</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-md-7">
                                    <h6 class="m-0 font-weight-bold text-primary">Daftar Golongan</h6>
                                </div>
                                <div class="col-md-5">
                                    <a href="<?=base_url()?>/golongan/inputData" class="btn btn-primary btn-icon-split btn-sm float-right">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        <span class="text">Tambah golongan</span>
                                    </a>
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
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    foreach($golongan as $golongan){
                        
                        echo "
                        <tr>
                            <td>".$golongan['id_g']."</td>
                            <td>".$golongan['nama']."</td>
                            <td>
                                <a href='".base_url()."/golongan/ubahData/".$golongan['id_g']."' class='btn btn-warning' role='button'><i class='fas fa-edit'></i></a> 
                                <a href='".base_url()."/golongan/hapusData/".$golongan['id_g']."' class='btn btn-danger' role='button'><i class='fa fa-trash'></i></a>
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