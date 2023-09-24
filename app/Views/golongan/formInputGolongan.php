<?= $this->extend('default') ?>

<?= $this->section('content') ?>

<?= $this->include('layout/header.php') ?>

<?= $this->include('layout/sidebar.php'); ?>

<?= $this->include('layout/topbar.php') ?>

<!-- Bootstrap CSS -->
<link href="<?=base_url()?>/https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<div class="container">

<h2>Input Data Jenis Golongan</h2>

            <form action="<?=base_url()?>/golongan/simpanData" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label >Nama Jenis Golongan:</label>
                    <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Golongan" required/>
                </div>
                <br>
                <button type="submit" value="Simpan" class="btn btn-primary">Submit</button>
                <a href="<?=base_url()?>/golongan" class="btn btn-danger">Kembali</a>
            </form>
</div>
<?= $this->endSection() ?>
