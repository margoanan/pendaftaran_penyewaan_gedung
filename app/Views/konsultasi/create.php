<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Konsultasi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Konsultasi</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url('konsultasi/hasil'); ?>" method="post">
                        <div class="card">
                            <div class="card-body">
                                <?php
                                $inputs = session()->getFlashdata('inputs');
                                $errors = session()->getFlashdata('errors');
                                if (!empty($errors)) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        Whoops! Ada kesalahan saat input data, yaitu:
                                        <ul>
                                            <?php foreach ($errors as $error) : ?>
                                                <li><?= esc($error) ?></li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                <?php } ?>

                                <div class="form-group">
                                    <label for="kode_penyakit">Kode Penyakit</label>
                                    <input type="text" class="form-control" name="kode_penyakit" placeholder="Masukkan kode penyakit" value="<?php echo $inputs['kode_penyakit'] ?? ''; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="nama_penyakit">Nama Penyakit</label>
                                    <input type="text" class="form-control" name="nama_penyakit" placeholder="Masukkan nama penyakit" value="<?php echo $inputs['nama_penyakit'] ?? ''; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi_penyakit">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi_penyakit" placeholder="Masukkan deskripsi penyakit"><?php echo $inputs['deskripsi_penyakit'] ?? ''; ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="solusi_penyakit">Solusi</label>
                                    <textarea class="form-control" name="solusi_penyakit" placeholder="Masukkan solusi penyakit"><?php echo $inputs['solusi_penyakit'] ?? ''; ?></textarea>
                                </div>
                            </div>

                            <div class="card-footer">
                                <a href="<?php echo base_url('penyakit'); ?>" class="btn btn-outline-info">Kembali</a>
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
