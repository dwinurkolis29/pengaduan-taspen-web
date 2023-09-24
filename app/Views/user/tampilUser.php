<html>
<head>

<?= $this->extend('default') ?>

<?= $this->section('content') ?>

<?= $this->include('layout/header.php') ?>

<?= $this->include('layout/sidebar.php'); ?>

<?= $this->include('layout/topbar.php') ?>

<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data User</h1>
                    <p class="text-muted m-b-30 font-14">Berikut adalah seluruh data user</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <div class="row">
                                <div class="col-md-7">
                                    <h6 class="m-0 font-weight-bold text-primary">Daftar User</h6>
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
                        <th>Nama</th>
                        <th>NOTAS</th>
                        <th>Id user</th>
                        <th>No HP</th>
                        <th>username</th>
                        <th>password</th>
                    </tr>
                    </thead>

                    <?php foreach ($user as $user) : ?>
                        <tr>
                            <td><?= $user['id_u']; ?></td>
                            <td><?= $user['nama']; ?></td>
                            <td><?= $user['notas']; ?></td>
                            <td><?= $user['id_g']; ?></td>
                            <td><a target="_blank" href="https://wa.me/+62<?= $user['no_hp'];?>"><?= $user['no_hp'];?></a></td>
                            <td><?= $user['username']; ?></td>
                            <td><?= $user['password']; ?></td>
                        </tr>
                    <?php endforeach; ?>
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