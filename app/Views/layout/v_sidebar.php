    <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-seedling"></i>
                </div>
                <div class="sidebar-brand-text mx-3">ricetrack</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard Petani -->

            <?php if (session()->get('role') === 'petani'): ?>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('petani') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard Petani</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('data-panen') ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Panen</span></a>
            </li>
            <?php endif; ?>

            
            <!-- Nav Item - Dashboard Penggilingan -->

            <?php if (session()->get('role') === 'penggilingan'): ?>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('penggilingan') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard Penggilingan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('data-penggilingan') ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Penggilingan</span></a>
            </li>
            <?php endif; ?>


            <!-- Nav Item - Dashboard Distributor -->

            <?php if (session()->get('role') === 'distributor'): ?>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('distributor') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard Distributor</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('data-distribusi') ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Distributor</span></a>
            </li>
            <?php endif; ?>



        </ul>
        <!-- End of Sidebar -->