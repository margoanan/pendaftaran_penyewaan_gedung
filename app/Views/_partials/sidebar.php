<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?php echo base_url('/'); ?>" class="brand-link">
        <img src="<?php echo base_url('themes/dist'); ?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Sistem Pakar Penyakit Malaria</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo base_url('themes/dist'); ?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo base_url('/'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('diagnosis'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-stethoscope"></i>
                        <p>Diagnosis</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('gejala'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Gejala</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('penyakit'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-virus"></i>
                        <p>Penyakit</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('konsultasi/create'); ?>" class="nav-link">
                        <i class="nav-icon fas fa-user-md"></i>
                        <p>Konsultasi</p>
                    </a>
                </li>

                <li class="nav-header">AKUN</li>
                <li class="nav-item">
                    <a href="<?php echo base_url('auth/logout'); ?>" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
