

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Hallo <?= $this->session->userdata('level'); ?><sup></sup></div>
            </a>
            
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                
            </div>

    
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('pantai') ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Data Pantai</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('pantai/peta') ?>">
                    <i class="fas fa-fw fa-map-marked-alt"></i>
                    <span>Data Peta</span></a>
            </li>

            
            <!-- Nav Item - Tables -->
            <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('welcome') ?>" onclick="return confirm('Apakah anda yakin ingin logout ?')">
                    <i class="fas fa-fw fa-power-off"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <!-- <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div> -->

        </ul>
        <!-- End of Sidebar -->
                        </li>

                    </ul>

                </nav>