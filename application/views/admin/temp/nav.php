<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dasboard | Muda SPP </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/mdi/css/materialdesignicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>vendors/css/vendor.bundle.base.css">
    <!-- font-awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/admin.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>images/icon.png" />
</head>

<body>
    <!-- partial:partials/_navbar.php -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row shadow-sm">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href="index.php"><img style="height:40px; width:80px"
                    src="<?= base_url('assets/'); ?>images/logo.png" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="index.php"><img
                    src="<?= base_url('assets/'); ?>images/icon.png" style="width:35px;height:35px" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <div class="nav-profile-img">
                            <img src="<?= base_url('assets/'); ?>images/profile.png" alt="image">
                            <span class="availability-status online"></span>
                        </div>
                        <div class="nav-profile-text">
                            <p class="mb-1 text-black fw-bolder text-capitalize">
                                <?= $this->session->userdata['full_name'] ?>
                            </p>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-profile navbar-dropdown" aria-labelledby="profileDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="mdi mdi-cached me-2 text-success text-kustom"></i> Activity Log </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
                            <i class="mdi mdi-logout me-2 text-primary text-kusto"></i> Signout </a>
                    </div>
                </li>
                <li class="nav-item d-none d-lg-block full-screen-link">
                    <a class="nav-link">
                        <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                    </a>
                </li>
                <li class="nav-item nav-logout d-none d-lg-block">
                    <a class="nav-link" href="<?= base_url(); ?>">
                        <i class="mdi mdi-power"></i>
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.php -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="nav-profile-image">
                            <img src="<?= base_url('assets/'); ?>images/profile.png" alt="profile">
                            <span class="login-status online"></span>
                            <!--change to offline or busy as needed-->
                        </div>
                        <div class="nav-profile-text d-flex flex-column">
                            <span class="font-weight-bold mb-2 text-capitalize">
                                <?= $this->session->userdata['full_name'] ?>
                            </span>
                            <span class="text-secondary text-small text-capitalize">
                                <?= $this->session->userdata['level'] ?>
                            </span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('admin'); ?>">
                        <span class="menu-title">Dashboard</span>
                        <i class="fa-solid fa-house menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('siswa'); ?>">
                        <span class="menu-title">Students data</span>
                        <i class="fa-solid fa-graduation-cap menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('kelas'); ?>">
                        <span class="menu-title">Class data</span>
                        <i class="fa-solid fa-chalkboard menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('jurusan'); ?>">
                        <span class="menu-title">Major data</span>
                        <i class="fa-solid fa-user-astronaut menu-icon"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('user'); ?>">
                        <span class="menu-title">Users data</span>
                        <i class="fa-solid fa-user-group menu-icon"></i>
                    </a>
                </li>
            </ul>
        </nav>