<?= $this->extend('default') ?>

<?= $this->section('content') ?>

<?= $this->include('layout/header.php') ?>

<?= $this->include('layout/sidebar.php'); ?>

<?= $this->include('layout/topbar.php') ?>

<!-- Bootstrap CSS -->
<link href="<?=base_url()?>/https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <div class="container">
        <h2>Update Data Jenis Pengaduan</h2><br>
            <form action="<?=base_url()?>/jenis/simpanUbahData/<?= $id_j?>" method="POST">
                <div class="form-group">
                    <label >Nama Jenis Pengaduan:</label>
                    <input type="text" class="form-control" name="nama_j" value="<?= $nama_j?>"/>
                </div>
                <br>
                <button type="submit" value="Simpan" class="btn btn-primary">Submit</button>
                <a href="<?=base_url()?>/jenis" class="btn btn-danger">Kembali</a>
            </form>
        </div>
<?= $this->endSection() ?>