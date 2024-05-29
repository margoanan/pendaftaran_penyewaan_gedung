<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Penyakit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Penyakit</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?= base_url('penyakit/update/' . $penyakit['Id_penyakit']); ?>" method="post">
                        <div class="card">
                            <div class="card-body">
                                <?php
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

                                <input type="hidden" name="Id_penyakit" value="<?= $penyakit['Id_penyakit']; ?>">

                                <div class="form-group">
                                    <label for="kode_penyakit">Kode Penyakit</label>
                                    <input type="text" value="<?= $penyakit['kode_penyakit'] ?>" class="form-control" name="kode_penyakit" placeholder="Enter Penyakit Code">
                                </div>

                                <div class="form-group">
                                    <label for="nama_penyakit">Nama Penyakit</label>
                                    <input type="text" value="<?= $penyakit['nama_penyakit'] ?>" class="form-control" name="nama_penyakit" placeholder="Enter Penyakit name">
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi_penyakit">Deskripsi</label>
                                    <textarea class="form-control" name="deskripsi_penyakit" placeholder="Enter Description"><?= $penyakit['deskripsi_penyakit'] ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="solusi_penyakit">Solusi</label>
                                    <textarea class="form-control" name="solusi_penyakit" placeholder="Enter Solution"><?= $penyakit['solusi_penyakit'] ?></textarea>
                                </div>
                            </div>

                            <div class="card-footer">
                                <a href="<?= base_url('penyakit'); ?>" class="btn btn-outline-info">Back</a>
                                <button type="submit" class="btn btn-primary float-right">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo view('_partials/footer'); ?>
