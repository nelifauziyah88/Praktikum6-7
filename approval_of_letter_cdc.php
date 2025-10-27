<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta for Compatibility -->
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!-- Icon -->
    <link rel="icon" href="./assets/img/iconM.png" type="image/x-icon" />
    <link href="./assets/img/iconM.png" rel="apple-touch-icon" type="image/x-icon">
    <!-- SweetAlert2 CSS -->
    <link rel='stylesheet' href='./core/component/sweetalert2.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- CSS Files -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/atlantis.css">
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Fonts and icons -->
    <script src="./assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['./assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CKEDITOR -->
    <script src="./library/ckeditor/ckeditor.js"></script>

    <script src='./core/component/jquery.min.js'></script>
    <script defer src='./core/component/sweetalert2.min.js'></script>
    <script defer src='./core/component/soloalert.js'></script>

    <style type="text/css">
        /* Posisi relatif untuk ikon agar badge bisa ditempatkan relatif terhadapnya */
        .notification-icon {
            position: relative;
            /* Sesuaikan ukuran ikon jika diperlukan */
        }

        /* Badge notifikasi kecil hijau */
        .custom-notification-badge {
            position: absolute;
            top: -8px;
            /* Sesuaikan posisi badge secara vertikal */
            right: -8px;
            /* Sesuaikan posisi badge secara horizontal */
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            /* Ukuran badge */
            font-size: 10px;
            /* Ukuran angka */
            line-height: 1;
            min-width: 16px;
            /* Pastikan ukuran minimal badge */
            text-align: center;
            /* Pusatkan angka di dalam badge */
        }

        .fc-sun {
            color: red;
            /* Mengubah warna font menjadi merah pada hari Minggu */
        }

        .disabled2 {
            pointer-events: none;
        }

        .not-avail {
            text-decoration: line-through;
            pointer-events: none;
            color: #808080;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background: #fff;
        }

        ::-webkit-scrollbar-thumb {
            background: #6c757d;
        }

        .wrap {
            white-space: normal !important;
            word-wrap: break-word;
            min-width: 140px;
            max-width: 140px;
            /* max-width:150px; */
        }

        .wrap2 {
            white-space: normal !important;
            word-wrap: break-word;
            min-width: 170px;
            max-width: 170px;
            /* max-width:150px; */
        }

        .main-panel {
            padding-top: 50px;
        }

        .btn-xs {
            padding: 4px 8px;
            /* lebih kecil dari btn-sm */
            font-size: 0.75rem;
            /* teks sedikit lebih kecil */
            line-height: 1.2;
            /* supaya height-nya rendah */
            border-radius: 4px;
            /* tetap sedikit membulat */
        }

        /* sedikit tambahan tinggi untuk baris yang punya banyak elemen di kolom approval */
        .table td .approval-multi {
            display: flex;
            flex-direction: column;
            gap: 6px;
            align-items: center;
            padding-top: 6px;
            padding-bottom: 6px;
            min-height: 72px;
            /* naik sedikit supaya tidak terlalu rapat */
        }
    </style>
</head>

<body>

    <div class="wrapper">

        <div class="modal fade" id="Modalkalender" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header no-bd">
                        <h5 class="modal-title">
                            <span class="fw-mediumbold">
                                Calendar</span>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="calendar"></div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue2">
                <a href="#" class="logo">
                    <img src="./assets/img/logo_header.png" alt="navbar brand" class="navbar-brand" style="width: 180px; height: auto;">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue">
                <div class="container-fluid">
                    <div class="collapse" id="search-nav">
                        <ul class="navbar-nav navbar-left topbar-nav nav-search mr-md-3 align-items-center">

                            <!-- Tanggal -->
                            <li class="nav-item dropdown hidden-caret">
                                <a aria-label="Current Date and Calendar" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                    <span id="date">Wed, 08 Oct 2025</span>
                                </a>
                                <ul class="float-right dropdown-menu dropdown-calendar dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <div class="card-body text-center text-accent-1">
                                            <h3>Wed, 08 Oct 2025M</h3>
                                        </div>
                                    </div>
                                </ul>
                            </li>

                            <!-- Jam -->
                            <li class="nav-item dropdown hidden-caret">
                                <a aria-label="Current Time" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                    <span id="clock">22 : 12 : 24</span>
                                </a>
                                <ul class="float-right dropdown-menu dropdown-calendar dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <div class="card-body text-center text-accent-1 ">
                                            <h3>Jakarta, Indonesia</h3>
                                            <h1>
                                                <span id="clock2">22 : 12 : 24</span>
                                            </h1>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-clock"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link" href="#" role="button" data-toggle="modal" data-target="#Modalkalender" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-calendar"></i>
                            </a>
                        </li>

                        <!-- Notification -->
                        <li class="nav-item dropdown hidden-caret" id="notification">
                            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span id="count_notification"></span>
                            </a>
                            <ul class='dropdown-menu messages-notif-box animated fadeIn' aria-labelledby='notifDropdown' id=''>
                                <li>
                                    <div class='dropdown-title'>New Notification</div>
                                </li>
                                <li>
                                    <div class='dropdown-title'>You don't have new notification</div>
                                </li>
                            </ul>
                        </li>

                        <!-- Profil -->
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="assets/img/profile.png" alt="CDC" class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="assets/img/profile.png" alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h5>CDC</h5>
                                                <p class="text-muted">CDC Politeknik Negeri Batam</p>
                                                <a href="#" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="dashboard_cdc.php">My Dashboard</a>
                                        <a class="dropdown-item" href="#">My Profile</a>
                                        <a class="dropdown-item" href="#">My Company</a>
                                        <!-- <a class="dropdown-item" href="#">Inbox</a> -->
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="landing_page.php">Home</a>
                                        <a class="dropdown-item" href="#">Announcements</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="landing_page.php" onclick="logout_confirm()">Logout</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="assets/img/profile.png" alt="..." class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    <span class="wrap2">CDC</span>
                                    <span class="user-level">1234567890</span>
                                    <span class="user-level">CDC Politeknik Negeri Batam</span>
                                </span>
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-item">
                            <a href="dashboard_cdc.php" class="collapsed" aria-expanded="false">
                                <i class="fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="landing_page.php" class="collapsed" aria-expanded="false">
                                <i class="fas fa-home"></i>
                                <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">CDC Menu</h4>
                        </li>
                        <li class="nav-item active">
                            <a href="approval_of_letter.php" class="collapsed" aria-expanded="false">
                                <i class="fas fa-user-secret"></i>
                                <p>Approval of Letter</p>
                            </a>
                        </li>
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Account</h4>
                        </li>
                        <li class="nav-item">
                            <a href="https://wa.me/6281364440803" target="_blank" class="collapsed"
                                aria-expanded="false">
                                <i class="fas fa-question"></i>
                                <p>Helpdesk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" onclick="logout_confirm()" class="collapsed" aria-expanded="false">
                                <i class="fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <!-- Approval Status Header - FULL WIDTH -->
            <div class="panel-header bg-primary-gradient">
                <div class="page-inner py-5">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                        <div>
                            <h1 class="text-white pb-2 fw-bold">Approval Status</h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Container -->
            <div class="page-inner mt--5">
                <div class="row mt--2">
                    <!-- Filter Section -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Filter</div>
                            </div>
                            <div class="card-body">
                                <form id="filterForm" method="GET" action="">
                                    <div class="row align-items-end">
                                        <!-- Filter By Study Program -->
                                        <div class="col-md mb-3">
                                            <label for="filter_study_program" class="form-label">Filter By Study Program</label>
                                            <select class="form-control" id="filter_study_program" name="study_program" onchange="applyFilter()">
                                                <option value="">Select Study Program</option>
                                                <option value="Teknik Informatika">Teknik Informatika</option>
                                                <option value="Teknik Mesin">Teknik Mesin</option>
                                                <option value="Teknik Elektro">Teknik Elektro</option>
                                                <option value="Manajemen Bisnis">Manajemen Bisnis</option>
                                            </select>
                                        </div>

                                        <!-- Filter By Student Name -->
                                        <div class="col-md mb-3">
                                            <label for="filter_student_name" class="form-label">Filter by Student Name</label>
                                            <input type="text" class="form-control" id="filter_student_name" name="student_name" placeholder="Enter Student Name" onkeyup="applyFilter()">
                                        </div>

                                        <!-- Filter By Approval Coordinator -->
                                        <div class="col-md mb-3">
                                            <label for="filter_coordinator" class="form-label">Filter by Approval Coordinator</label>
                                            <select class="form-control" id="filter_coordinator" name="coordinator" onchange="applyFilter()">
                                                <option value="">ALL</option>
                                                <option value="approved">Approved</option>
                                                <option value="waiting">Waiting</option>
                                                <option value="rejected">Rejected</option>
                                            </select>
                                        </div>

                                        <!-- Filter By Approval CDC -->
                                        <div class="col-md mb-3">
                                            <label for="filter_cdc" class="form-label">Filter by Approval CDC</label>
                                            <select class="form-control" id="filter_cdc" name="cdc" onchange="applyFilter()">
                                                <option value="">ALL</option>
                                                <option value="approve">Approve</option>
                                                <option value="waiting">Waiting</option>
                                                <option value="reject">Reject</option>
                                            </select>
                                        </div>

                                        <!-- Filter By Result Company -->
                                        <div class="col-md mb-3">
                                            <label for="filter_company" class="form-label">Filter by Result Company</label>
                                            <select class="form-control" id="filter_company" name="company" onchange="applyFilter()">
                                                <option value="">ALL</option>
                                                <option value="accepted">Accepted</option>
                                                <option value="waiting">Waiting</option>
                                                <option value="rejected">Rejected</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Table Section -->
                    <div class="col-md-12">
                        <div class="card full-height">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover" id="approvalTable">
                                        <thead>
                                            <tr>
                                                <th style="width: 50px;">No</th>
                                                <th style="width: 120px; cursor: pointer;" onclick="sortTable()">
                                                    Date
                                                    <i id="sortIcon" class="fas fa-sort"></i>
                                                </th>
                                                <th style="width: 120px;">NIM</th>
                                                <th>Name</th>
                                                <th style="width: 150px;">Approval Coordinator</th>
                                                <th style="width: 150px;">Approval CDC</th>
                                                <th style="width: 150px;">Result</th>
                                                <th style="width: 180px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tableBody">
                                            <!-- Sample Data Row 1 - Status Approved (Final) -->
                                            <tr data-id="1">
                                                <td class="align-middle text-center">1</td>
                                                <td class="align-middle text-center" data-date="2025-01-01">01/01/2025</td>
                                                <td class="align-middle text-center">3312401001</td>
                                                <td class="align-middle">Clauresia Valerie Birvindea</td>
                                                <td class="align-middle text-center">
                                                    <span class="badge badge-success px-3 py-2">Approved</span>
                                                    <br><small class="text-muted">01/01/2025</small>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <button class="btn btn-success btn-xs" disabled style="min-width: 100px; pointer-events: none;">Approve</button>
                                                    <br><small class="text-muted d-block mt-1">04/01/2025</small>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="badge badge-success px-3 py-2">Accepted</span>
                                                    <br>
                                                    <button class="btn btn-info btn-xs mt-2" onclick="viewDetail(1)" style="min-width: 120px;">
                                                        <i class="fas fa-eye"></i> Detail Reply Company
                                                    </button>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <button class="btn btn-secondary btn-sm" onclick="viewSubmission(1)" style="min-width: 120px;">
                                                        <i class="fas fa-eye"></i> Detail Submission
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- Sample Data Row 2 - Status Waiting (Bisa diklik) -->
                                            <tr data-id="2">
                                                <td class="align-middle text-center">2</td>
                                                <td class="align-middle text-center" data-date="2025-10-05">05/10/2025</td>
                                                <td class="align-middle text-center">3312401002</td>
                                                <td class="align-middle">John Doe Anderson</td>
                                                <td class="align-middle text-center">
                                                    <span class="badge badge-success px-3 py-2">Approved</span>
                                                    <br><small class="text-muted">10/10/2025</small>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <div class="dropdown">
                                                        <button class="btn btn-warning btn-xs dropdown-toggle" type="button" id="dropdownCDC2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="min-width: 100px;">
                                                            Waiting
                                                        </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownCDC2">
                                                            <a class="dropdown-item" href="#" onclick="updateCDCStatus(2, 'Approve'); return false;">
                                                                <i class="fas fa-check text-success"></i> Approve
                                                            </a>
                                                            <a class="dropdown-item" href="#" onclick="updateCDCStatus(2, 'Reject'); return false;">
                                                                <i class="fas fa-times text-danger"></i> Reject
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="px-3 py-2">-</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <button class="btn btn-secondary btn-sm" onclick="viewSubmission(2)" style="min-width: 120px;">
                                                        <i class="fas fa-eye"></i> Detail Submission
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- Sample Data Row 3 - Status Rejected -->
                                            <tr data-id="3">
                                                <td class="align-middle text-center">3</td>
                                                <td class="align-middle text-center" data-date="2024-12-20">20/12/2024</td>
                                                <td class="align-middle text-center">3312401003</td>
                                                <td class="align-middle">Jane Smith</td>
                                                <td class="align-middle text-center">
                                                    <span class="badge badge-success px-3 py-2">Approved</span>
                                                    <br><small class="text-muted">21/12/2024</small>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <button class="btn btn-danger btn-xs" disabled style="min-width: 100px; pointer-events: none;">Reject</button>
                                                    <br><small class="text-muted d-block mt-1">22/12/2024</small>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="px-3 py-2">-</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <button class="btn btn-secondary btn-sm" onclick="viewSubmission(3)" style="min-width: 120px;">
                                                        <i class="fas fa-eye"></i> Detail Submission
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- Sample Data Row 4 - Status Waiting -->
                                            <tr data-id="4">
                                                <td class="align-middle text-center">4</td>
                                                <td class="align-middle text-center" data-date="2025-10-15">15/10/2025</td>
                                                <td class="align-middle text-center">3312401004</td>
                                                <td class="align-middle">Patrick Kluivert</td>
                                                <td class="align-middle text-center">
                                                    <span class="badge badge-warning px-3 py-2">Waiting</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="px-3 py-2">-</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="px-3 py-2">-</span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <button class="btn btn-secondary btn-sm" onclick="viewSubmission(4)" style="min-width: 120px;">
                                                        <i class="fas fa-eye"></i> Detail Submission
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Pagination -->
                                <div class="mt-3">
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                                            </li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav class="pull-left">
                    </nav>
                    <div class="copyright ml-auto">
                        © 2025, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://github.com/nelifauziyah88/myinternship-development">PBLIFPagi3A-3</a>
                    </div>
                </div>
            </footer>
        </div>

        <script>
            // Auto-apply filter
            function applyFilter() {
                filterTable();
            }

            // Client-side filtering
            function filterTable() {
                const studyProgram = document.getElementById('filter_study_program').value.toLowerCase();
                const studentName = document.getElementById('filter_student_name').value.toLowerCase();
                const coordinator = document.getElementById('filter_coordinator').value.toLowerCase();
                const cdc = document.getElementById('filter_cdc').value.toLowerCase();
                const company = document.getElementById('filter_company').value.toLowerCase();

                const rows = document.querySelectorAll('#tableBody tr');

                rows.forEach(row => {
                    const name = row.cells[3].textContent.toLowerCase();
                    const coordStatus = row.cells[4].textContent.toLowerCase();
                    const cdcStatus = row.cells[5].textContent.toLowerCase();
                    const resultStatus = row.cells[6].textContent.toLowerCase();

                    let showRow = true;

                    if (studentName && !name.includes(studentName)) {
                        showRow = false;
                    }

                    if (coordinator && !coordStatus.includes(coordinator)) {
                        showRow = false;
                    }

                    if (cdc && !cdcStatus.includes(cdc)) {
                        showRow = false;
                    }

                    if (company && !resultStatus.includes(company)) {
                        showRow = false;
                    }

                    row.style.display = showRow ? '' : 'none';
                });
            }

            // Sort Table by Date
            let sortAscending = true;

            function sortTable() {
                const table = document.getElementById("approvalTable");
                const tbody = document.getElementById("tableBody");
                const rows = Array.from(tbody.querySelectorAll("tr"));
                const icon = document.getElementById("sortIcon");

                rows.sort((a, b) => {
                    const dateA = new Date(a.cells[1].getAttribute('data-date'));
                    const dateB = new Date(b.cells[1].getAttribute('data-date'));

                    if (sortAscending) {
                        return dateA - dateB;
                    } else {
                        return dateB - dateA;
                    }
                });

                tbody.innerHTML = '';
                rows.forEach((row, index) => {
                    row.cells[0].textContent = index + 1;
                    tbody.appendChild(row);
                });

                sortAscending = !sortAscending;

                if (sortAscending) {
                    icon.className = "fas fa-sort-up";
                } else {
                    icon.className = "fas fa-sort-down";
                }
            }

            // Update CDC Status (Approve/Reject) - versi diperbarui
            function updateCDCStatus(dataId, status) {
                const row = document.querySelector(`#tableBody tr[data-id="${dataId}"]`);
                if (!row) {
                    console.error('Row not found with data-id:', dataId);
                    return;
                }

                const cdcCell = row.cells[5];
                const resultCell = row.cells[6];
                const currentDate = new Date().toLocaleDateString('en-GB'); // DD/MM/YYYY

                // Jika action = Reject -> pertama minta alasan
                if (status === 'Reject') {
                    // Modal pertama: minta alasan
                    Swal.fire({
                        title: 'Why did you reject this letter?',
                        html: '<p class="text-muted">Give your reasons for rejecting this letter!</p>' +
                            '<textarea id="swal-reason" class="swal2-textarea" placeholder="Type your reason here..." style="height:120px;"></textarea>',
                        showCancelButton: true,
                        confirmButtonText: 'OK',
                        cancelButtonText: 'Cancel',
                        focusConfirm: false,
                        preConfirm: () => {
                            const reason = document.getElementById('swal-reason').value.trim();
                            if (!reason) {
                                Swal.showValidationMessage('Please provide a reason for rejection.');
                                return false;
                            }
                            return reason;
                        }
                    }).then((firstResult) => {
                        if (firstResult.isConfirmed && firstResult.value !== false) {
                            const reasonText = firstResult.value;

                            // Modal konfirmasi kedua
                            Swal.fire({
                                title: 'Are you sure you want to continue with this action?',
                                text: "The action cannot be changed!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#dc3545',
                                cancelButtonColor: '#6c757d',
                                confirmButtonText: 'Reject !',
                                cancelButtonText: 'Cancel'
                            }).then((confirmResult) => {
                                if (confirmResult.isConfirmed) {
                                    // Simpan reason di attribute row (frontend)
                                    row.dataset.cdcReason = reasonText;

                                    // Update CDC cell dengan button disabled + Show Reason + tanggal
                                    cdcCell.innerHTML = `
                                <div class="approval-multi text-center">
                                  <button class="btn btn-danger btn-xs" disabled style="min-width: 100px; pointer-events: none;">Rejected</button>
                                  <button class="btn btn-outline-secondary btn-sm" onclick="showReason(${dataId})" style="min-width: 100px;">Show reason</button>
                                  <small class="text-muted d-block mt-1">${currentDate}</small>
                                </div>
                            `;

                                    // Success feedback
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Rejected!',
                                        text: 'Changes have been saved.',
                                        timer: 1500,
                                        showConfirmButton: true
                                    });

                                    // (Opsional) AJAX untuk backend:
                                    // $.post('update_cdc_status.php', { id: dataId, status: 'Reject', reason: reasonText }, function(resp){ ... });
                                }
                            });
                        }
                    });

                } else if (status === 'Approve') {
                    // Aksi approve
                    Swal.fire({
                        title: 'Are you sure you want to continue with this action?',
                        text: "The action cannot be changed!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#28a745',
                        cancelButtonColor: '#6c757d',
                        confirmButtonText: 'Approve !',
                        cancelButtonText: 'Cancel'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Pastikan hapus data cdcReason jika ada
                            delete row.dataset.cdcReason;

                            cdcCell.innerHTML = `
                        <div class="approval-multi text-center">
                          <button class="btn btn-success btn-xs" disabled style="min-width: 100px; pointer-events: none;">Approve</button>
                          <small class="text-muted d-block mt-1">${currentDate}</small>
                        </div>
                    `;
                    resultCell.innerHTML = `<span class="badge badge-warning px-3 py-2">Waiting</span>`;

                            Swal.fire({
                                icon: 'success',
                                title: 'Approved!',
                                text: 'Changes have been saved.',
                                timer: 1500,
                                showConfirmButton: true
                            });

                            // (Opsional) AJAX backend
                            // $.post('update_cdc_status.php', { id: dataId, status: 'Approve' }, function(resp){ ... });
                        }
                    });
                }
            }

            // Tampilkan modal Show Reason dengan tombol Edit + Close
            function showReason(dataId) {
                const row = document.querySelector(`#tableBody tr[data-id="${dataId}"]`);
                if (!row) return Swal.fire('Error', 'Data not found', 'error');

                const reasonText = row.dataset.cdcReason || '(No reason found)';

                Swal.fire({
                    title: 'Rejection Reason',
                    html: `<div style="text-align:left; white-space:pre-wrap;">${escapeHtml(reasonText)}</div>`,
                    showCancelButton: false,
                    showDenyButton: true,
                    confirmButtonText: 'Close',
                    denyButtonText: 'Edit',
                }).then((choice) => {
                    if (choice.isDenied) {
                        // Edit mode
                        editReason(dataId);
                    }
                });
            }

            // Fungsi edit reason: tampilkan textarea, validasi, simpan ke data-attribute
            function editReason(dataId) {
                const row = document.querySelector(`#tableBody tr[data-id="${dataId}"]`);
                if (!row) return Swal.fire('Error', 'Data not found', 'error');

                const current = row.dataset.cdcReason || '';

                Swal.fire({
                    title: 'Edit rejection reason',
                    html: '<textarea id="swal-edit-reason" class="swal2-textarea" style="height:140px;" placeholder="Type your reason here..."></textarea>',
                    showCancelButton: true,
                    confirmButtonText: 'Save',
                    cancelButtonText: 'Cancel',
                    didOpen: () => {
                        const ta = document.getElementById('swal-edit-reason');
                        if (ta) ta.value = current;
                    },
                    preConfirm: () => {
                        const val = document.getElementById('swal-edit-reason').value.trim();
                        if (!val) {
                            Swal.showValidationMessage('Reason cannot be empty.');
                            return false;
                        }
                        return val;
                    }
                }).then((res) => {
                    if (res.isConfirmed && res.value !== false) {
                        row.dataset.cdcReason = res.value;

                        Swal.fire({
                            icon: 'success',
                            title: 'Saved',
                            text: 'Reason updated successfully.',
                            timer: 1200,
                            showConfirmButton: true
                        });
                    }
                });
            }

            // helper kecil untuk escape html sebelum ditampilkan (supaya aman)
            function escapeHtml(unsafe) {
                if (!unsafe) return '';
                return unsafe
                    .replace(/&/g, "&amp;")
                    .replace(/</g, "&lt;")
                    .replace(/>/g, "&gt;")
                    .replace(/"/g, "&quot;")
                    .replace(/'/g, "&#039;");
            }

            // ---------- fungsi action yang lain (viewSubmission, viewDetail) ----------
            function viewDetail(id) {
                alert('View Detail Reply Company for ID: ' + id);
            }

            function viewSubmission(id) {
                alert('View Detail Submission for ID: ' + id);
            }
        </script>

        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

        <!--   Core JS Files   -->
        <!-- <script src="./assets/js/core/jquery.3.2.1.min.js"></script> -->
        <script src="./assets/js/core/popper.min.js"></script>
        <script src="./assets/js/core/bootstrap.min.js"></script>
        <!-- jQuery UI -->
        <script src="./assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
        <script src="./assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
        <!-- Moment JS -->
        <script src="./assets/js/plugin/moment/moment.min.js"></script>
        <!-- Bootstrap Toggle -->
        <script src="./assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
        <!-- jQuery Scrollbar -->
        <script src="./assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
        <!-- Fullcalendar -->
        <script src="./assets/js/plugin/fullcalendar/fullcalendar.min.js"></script>
        <!-- Atlantis JS -->
        <script src="./assets/js/atlantis.min.js"></script>

        <script>
            $(document).ready(function() {

                clock_run();

                show_calendar();
            });

            function show_calendar() {
                var date = new Date();
                var d = date.getDate();
                var m = date.getMonth();
                var y = date.getFullYear();
                var className = Array('fc-primary', 'fc-danger', 'fc-black', 'fc-success', 'fc-info', 'fc-warning', 'fc-danger-solid', 'fc-warning-solid', 'fc-success-solid', 'fc-black-solid', 'fc-success-solid', 'fc-primary-solid');

                $calendar = $('#calendar');
                $calendar.fullCalendar({
                    fixedWeekCount: false, // Set false agar jumlah minggu yang ditampilkan menyesuaikan dengan bulan aktif
                });
            }

            function clock_run() {

                'use strict';
                let d = new Date();
                let en_day = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
                let en_month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                let day = en_day[d.getDay()];
                let date = d.getDate();
                let month = en_month[d.getMonth()];
                let year = (d.getYear() + 1900);
                let curr_date = day + ', ' + date + ' ' + month + ' ' + year;
                localStorage.setItem('curr_date', curr_date);
                let old_date = localStorage.getItem('curr_date');

                if ($("#date").text() != curr_date) {
                    localStorage.setItem('curr_date', curr_date);
                    $("#date").text(curr_date);
                }

                setInterval(function() {
                    let d = new Date();
                    let day = en_day[d.getDay()];
                    let date = d.getDate();
                    let month = en_month[d.getMonth()];
                    let year = (d.getYear() + 1900);
                    let date_day = day + ', ' + date + ' ' + month + ' ' + year;

                    if (date_day != old_date) {
                        localStorage.setItem('curr_date', date_day);
                        $("#date").text(date_day);
                    }

                    let hours = d.getHours();
                    let minutes = d.getMinutes();
                    let seconds = d.getSeconds();
                    let time = ((hours < 10 ? "0" : "") + hours) + ' : ' + ((minutes < 10 ? "0" : "") + minutes) + ' : ' + ((seconds < 10 ? "0" : "") + seconds);

                    $("#clock").text(time);
                    $("#clock2").text(time);
                }, 1000);
            }
        </script>

        <!-- Javascript Function -->
        <script type="text/javascript">
            function copyToClipboard(text) {
                var tempInput = document.createElement("input");
                document.body.appendChild(tempInput);
                tempInput.value = text;
                tempInput.select();

                document.execCommand("copy");

                document.body.removeChild(tempInput);

                alert("Text copied to clipboard: " + text);

            }

            function getNotificationForm(formSelector) {
                $.ajax({
                    url: 'index.php?request=validation_get',
                    type: 'GET',

                    success: function(response, xhr, status, error) {
                        console.log('Getting form notification');

                        $('body').append(response);
                    },

                    error: function(xhr, status, error) {
                        console.log('Failed Getting form notification');
                    }
                });
                return true;
            }

            function logout_confirm() {

                let _token = $('meta[name="csrf-token"]').attr('content');

                swal.fire({
                    title: 'Logout Confirmation',
                    text: 'Are you sure you want end current session ?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, I'm sure !",
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        // AJAX
                        $.ajax({
                            url: "index.php?request=logout",
                            // type: "GET",
                            type: "POST",
                            data: {
                                'token': _token
                            },

                            success: function() {
                                setTimeout(function() {
                                    localStorage.setItem('first', null);
                                    localStorage.setItem('first_chime', null);
                                    localStorage.setItem('next_chime', null);
                                    window.location.href = 'index.php';
                                }, 200);
                            },
                        });
                    }
                })
            }

            function konfirmasi(notif, lokasi) {

                var x = confirm(notif);
                if (x === true) {
                    window.location.href = lokasi;
                }
            }

            function spinner() {

                // var icon_spinner = event.target.childNodes[0];
                var icon_spinner = event.target.querySelector('i');
                var icon_old = icon_spinner.className;
                var spinner = "fas fa-spinner fa-spin mr-1";

                // console.log(icon_spinner);
                icon_spinner.className = '';
                icon_spinner.className = spinner;

                setTimeout(function() {
                    icon_spinner.className = '';
                    icon_spinner.className = icon_old;
                }, 2000);
            }
        </script>

    </div>

</body>

</html>