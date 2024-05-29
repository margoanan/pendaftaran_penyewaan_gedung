<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Gedung</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Gedung</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url('gedung/update'); ?>" method="post">
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

                                <input type="hidden" name="gedung_id" value="<?php echo $gedung['gedung_id']; ?>">

                                <div class="form-group">
                                    <label for="gedung_nama">Nama Gedung</label>
                                    <input type="text" value="<?= $gedung['gedung_nama'] ?>" class="form-control" name="gedung_nama" placeholder="Enter Gedung name">
                                </div>

                                <div class="form-group">
                                    <label for="gedung_alamat">Alamat Gedung</label>
                                    <input type="text" value="<?= $gedung['gedung_alamat'] ?>" class="form-control" name="gedung_alamat" placeholder="Enter the address">
                                </div>

                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control">
                                    <option value="Active" <?= $gedung['status'] == "Active" ? 'selected' : '' ?>>Not Available</option>
                                    <option value="Inactive" <?= $gedung['status'] == "Inactive" ? 'selected' : '' ?>>Available</option>
                                    </select>

                                </div>
                            </div>

                            <div class="card-footer">
                                <a href="<?= base_url('gedung'); ?>" class="btn btn-outline-info">Back</a>
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
