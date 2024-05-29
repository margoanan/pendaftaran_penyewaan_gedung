<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Buat Data Gedung Baru</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item active">Buat Data Gedung</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url('gedung/store'); ?>" method="post">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $inputs = session()->getFlashdata('inputs');
                                $errors = session()->getFlashdata('errors');
                                if (!empty($errors)) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        Whoops! Terdapat kesalahan saat memasukkan data, yaitu:
                                        <ul>
                                            <?php foreach ($errors as $error) : ?>
                                                <li><?= esc($error) ?></li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                <?php } ?>

                                <div class="form-group">
                                    <label for="gedung_nama">Nama Gedung</label>
                                    <input type="text" class="form-control" name="gedung_nama" placeholder="Masukkan nama gedung" value="<?php echo $inputs['gedung_nama'] ?? ''; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="gedung_alamat">Alamat</label>
                                    <input type="text" class="form-control" name="gedung_alamat" placeholder="Masukkan alamat gedung" value="<?php echo $inputs['gedung_alamat'] ?? ''; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status">
                                        <option value="Active">Not Available</option>
                                        <option value="Inactive">Available</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo base_url('gedung'); ?>" class="btn btn-outline-info">Kembali</a>
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo view('_partials/footer'); ?>
