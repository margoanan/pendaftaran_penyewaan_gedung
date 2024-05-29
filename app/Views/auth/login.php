<!DOCTYPE html>
<html>
<head>
    <!-- head tags -->
</head>
<body class="hold-transition login-page">
    <div class="login-box">
        <!-- login box content -->

        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <!-- Flash data errors -->
            <?php $errors = session()->getFlashdata('errors');
            if (!empty($errors)) { ?>
                <!-- Error message display -->
            <?php } ?>

            <form action="<?php echo base_url('auth/proses_login'); ?>" method="post">
                <!-- Email input -->
                <div class="input-group mb-3">
                    <!-- Email input field -->
                </div>

                <!-- Password input -->
                <div class="input-group mb-3">
                    <!-- Password input field -->
                </div>

                <!-- Role selection dropdown -->
                <div class="input-group mb-3">
                    <select class="form-control" name="role">
                        <option value="admin">Admin</option>
                        <option value="pasien">Pasien</option>
                        <!-- Add more role options if needed -->
                    </select>
                </div>

                <!-- Login button -->
                <div class="row">
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Scripts -->
</body>
</html>
