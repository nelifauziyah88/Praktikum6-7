<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta for Compatibility -->
    <meta charset="utf-8">
    <title>Internship Acceptance Confirmation Form</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!-- Icon -->
    <link rel="icon" href="./assets/img/iconM.png" type="image/x-icon" />
    <link href="./assets/img/iconM.png" rel="apple-touch-icon" type="image/x-icon">

    <link rel='stylesheet' href='./core/component/sweetalert2.min.css'>

    <!-- Tambahkan di <head> -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/atlantis.css">

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
    <script>
        $(function() {});
    </script>
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

        .sidebar a.active {
            background-color: #007bff;
            /* warna biru */
            color: white !important;
            border-radius: 10px;
        }

        .sidebar a.active i {
            color: white;
        }

        .form-container {
            background: #fff;
            border-radius: 6px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
            padding: 40px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: 500;
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #333;
        }

        .form-control {
            background: #e9ecef;
            border: none;
            border-radius: 6px;
            height: 38px;
            padding: 8px 12px;
            font-size: 14px;
        }

        .form-control:focus {
            background: #e9ecef;
            outline: none;
            box-shadow: 0 0 0 2px rgba(30, 115, 232, 0.2);
        }

        .btn-submit {
            background-color: #2563eb;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn-submit:hover {
            background-color: #1d4ed8;
        }

        .btn-back {
            background-color: #f3f4f6;
            color: #374151;
            border: 1.5px solid #d1d5db;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }

        .btn-back:hover {
            background-color: #e5e7eb;
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
                <a href="landing_page.php" class="logo">
                    <img src="assets/img/logo_header.png" alt="navbar brand" class="navbar-brand" style="width: 180px; height: auto;">
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
                                    <img src="assets/img/profile.png" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img src="assets/img/profile.png" alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h5>Neli Fauziyah</h5>
                                                <p class="text-muted">Mahasiswa</p>
                                                <a href="index.php?page=industry_profile" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">My Profile</a>
                                        <a class="dropdown-item" href="#">My Internship</a>
                                        <!-- <a class="dropdown-item" href="#">Inbox</a> -->
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
                                    <span class="wrap2">Neli Fauziyah</span>
                                    <span class="user-level">NIM: 3312401007</span>
                                    <span class="user-level">
                                        Student at <br> Politeknik Negeri Batam
                                    </span>
                                </span>
                            </a>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <ul class="nav nav-primary">
                        <li class="nav-item">
                            <a href="dashboard_student.php">
                                <i class="fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="landing_page.php">
                                <i class="fas fa-home"></i>
                                <p>Home</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#">
                                <i class="fas fa-id-card"></i>
                                <p>Student Identity</p>
                            </a>
                        </li>

                        <!-- Student Section -->
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Student</h4>
                        </li>

                        <li class="nav-item">
                            <a href="#">
                                <i class="fas fa-building"></i>
                                <p>Company List</p>
                            </a>
                        </li>

                        <!-- Internship Approval Section -->
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Internship Approval</h4>
                        </li>

                        <li class="nav-item">
                            <a href="form_submission.php">
                                <i class="fas fa-file-alt"></i>
                                <p>Form Submission</p>
                            </a>
                        </li>

                        <li class="nav-item active">
                            <a href="approval_status.php">
                                <i class="fas fa-clipboard-check"></i>
                                <p>Approval Status</p>
                            </a>
                        </li>

                        <!-- Account Section -->
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Account</h4>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="collapsed" aria-expanded="false">
                                <i class="fas fa-user"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="landing_page.php" onclick="logout_confirm()" class="collapsed" aria-expanded="false">
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
            <!-- Header -->
            <div class="panel-header bg-primary-gradient">
                <div class="page-inner py-5">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                        <div>
                            <h1 class="text-white pb-2 fw-bold">Internship Acceptance Confirmation Form</h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="page-inner mt--5">
                <div class="row mt--2">
                    <div class="col-md-12">
                        <div class="form-container">
                            <form method="POST">
                                <div class="form-group">
                                    <label>NIM</label>
                                    <input type="text" class="form-control" value="3312401007" readonly style="width:70%;">
                                </div>

                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" value="Neli Fauziyah" readonly style="width:70%;">
                                </div>

                                <div class="form-group">
                                    <label>Study Program</label>
                                    <input type="text" class="form-control" value="D3 - Informatics Engineering" readonly style="width:70%;">
                                </div>

                                <div class="form-group">
                                    <label>Department</label>
                                    <input type="text" class="form-control" value="Informatics Engineering" readonly style="width:70%;">
                                </div>

                                <div class="form-group">
                                    <label style="margin-bottom: 10px;">Class</label>
                                    <div class="radio-group">
                                        <label>
                                            <input type="radio" name="class" value="regular"> Regular class
                                        </label>
                                        <label>
                                            <input type="radio" name="class" value="evening"> Evening class
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group" style="display: flex; align-items: center; gap: 10px;">
                                    <label style="margin: 0;">Semester</label>
                                    <select class="form-control" style="width:80px; text-align-last:center;">
                                        <option>1</option>
                                        <option>3</option>
                                        <option selected>5</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Internship Coordinator</label>
                                    <input type="text" class="form-control" value="Lecturer A" readonly style="width:70%;">
                                </div>

                                <div class="form-group">
                                    <label>Company Name</label>
                                    <select id="companySelect" class="form-control" style="width:70%; background:#e9ecef;">
                                        <option value="">Choose Company</option>
                                        <option>PT Philips Industries Batam</option>
                                        <option>McDermott</option>
                                        <option>PT Blue Ocean Shipping</option>
                                        <option>PT Caterpillar Indonesia Batam</option>
                                        <option>PT SMOE Indonesia</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Company Address</label>
                                    <input type="text" class="form-control" placeholder="Enter company address" style="width:70%;">
                                </div>

                                <div class="form-group">
                                    <label style="margin-bottom: 10px;">City</label>
                                    <div class="radio-options">
                                        <label>
                                            <input type="radio" name="city" value="batam"> Batam
                                        </label>
                                        <label>
                                            <input type="radio" name="city" value="tanjung_pinang"> Tanjung Pinang
                                        </label>
                                        <label>
                                            <input type="radio" name="city" value="tanjung_balai"> Tanjung Balai Karimun
                                        </label>
                                        <label>
                                            <input type="radio" name="city" value="other"> Other
                                        </label>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Please type another option here" style="width:70%; margin-top: 10px;">
                                </div>

                                <div class="form-group">
                                    <label style="margin-bottom: 10px;">Province</label>
                                    <div class="radio-options">
                                        <label>
                                            <input type="radio" name="province" value="riau_islands"> Riau Islands
                                        </label>
                                        <label>
                                            <input type="radio" name="province" value="other"> Other
                                        </label>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Please type another option here" style="width:70%; margin-top: 10px;">
                                </div>

                                <div class="form-group">
                                    <label>HRD Email</label>
                                    <input type="email" class="form-control" placeholder="Enter HRD email" style="width:70%;">
                                </div>

                                <div class="form-group">
                                    <label>HRD Name</label>
                                    <input type="text" class="form-control" placeholder="Enter HRD name" style="width:70%;">
                                </div>

                                <div class="form-group">
                                    <label>Active HR Department WhatsApp Number</label>
                                    <input type="text" class="form-control" placeholder="Enter HR WhatsApp number" style="width:70%;">
                                </div>

                                <div class="form-group">
                                    <label>Placement Department/Division</label>
                                    <input type="text" class="form-control" placeholder="Enter department/division" style="width:70%;">
                                </div>

                                <div class="form-group" style="display:flex; gap:15px;">
                                    <div style="flex:1; max-width: calc(35% - 7.5px);">
                                        <label>Start Date</label>
                                        <input type="date" class="form-control" name="start_date">
                                    </div>
                                    <div style="flex:1; max-width: calc(35% - 7.5px);">
                                        <label>End Date</label>
                                        <input type="date" class="form-control" name="end_date">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label style="margin-bottom: 12px;">How did you get the internship information?</label>
                                    <div class="radio-options">
                                        <label>
                                            <input type="radio" name="info_source" value="self"> Self-observation (applied independently, through personal connections)
                                        </label>
                                        <label>
                                            <input type="radio" name="info_source" value="cdc"> Internship information from CDC Polibatam
                                        </label>
                                        <label>
                                            <input type="radio" name="info_source" value="coordinator"> Internship information from Internship Coordinator
                                        </label>
                                        <label>
                                            <input type="radio" name="info_source" value="myinternship"> Internship information from MyInternship
                                        </label>
                                        <label>
                                            <input type="radio" name="info_source" value="workplace"> Interning at the Workplace
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Enter your email" style="width:70%;" name="email">
                                </div>

                                <div class="form-group">
                                    <label>Active WhatsApp Number</label>
                                    <input type="text" class="form-control" placeholder="Enter WhatsApp number" style="width:70%;" name="whatsapp">
                                </div>

                                <div class="form-group" style="margin-bottom: 30px;">
                                    <label style="margin-bottom: 10px;">Internship Response Letter / Proof of Internship Acceptance from the Company</label>

                                    <div class="form-control"
                                        style="width:70%; display:flex; align-items:center; gap:10px; background-color:#e9ecef; border:1px solid #dee2e6; border-radius:8px; padding:10px 15px; height:45px;">
                                        <button type="button" class="file-button" onclick="document.getElementById('fileInput').click()"
                                            style="background-color:#6c757d; color:white; border:none; padding:6px 15px; border-radius:5px; cursor:pointer;">
                                            Choose file</button>

                                        <span id="fileName" class="file-name" style="color:#6c757d;">No file chosen</span>
                                        <input type="file" id="fileInput" name="attachment" accept=".pdf,.doc,.docx" style="display:none;">
                                    </div>
                                </div>

                                <div style="display:flex; justify-content: space-between; margin-top: 30px;">
                                    <button type="button" class="btn-back" onclick="window.history.back()">
                                        <i class="fas fa-arrow-left" style="margin-right:6px;"></i> Back
                                    </button>
                                    <button type="submit" class="btn-submit">
                                        Claim Internship <i class="fas fa-arrow-right" style="margin-left:6px;"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright ml-auto">
                        2025, made with <i class="fa fa-heart heart text-danger"></i> by PBLIFPagi3A-3
                    </div>
                </div>
            </footer>

            <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

            <!-- Tambahkan di sebelum </body> -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

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

            <!-- Chart JS -->
            <script src="./assets/js/plugin/chart.js/chart.min.js"></script>

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

                $(document).ready(function() {
                    $('#companySelect').select2({
                        placeholder: "Choose Company",
                        allowClear: true,
                        width: '70%' // biar lebar pas
                    });
                });

                // Highlight menu
                document.addEventListener("DOMContentLoaded", function() {
                    const navItems = document.querySelectorAll(".sidebar .nav-item");

                    navItems.forEach(item => {
                        item.addEventListener("click", function() {
                            // Hapus active dari semua nav-item
                            navItems.forEach(i => i.classList.remove("active"));

                            // Tambahkan active ke item yang diklik
                            this.classList.add("active");
                        });
                    });

                    // --- BONUS: agar aktif sesuai halaman yang dibuka ---
                    const currentPage = window.location.href;
                    navItems.forEach(item => {
                        const link = item.querySelector("a");
                        if (link && currentPage.includes(link.getAttribute("href"))) {
                            navItems.forEach(i => i.classList.remove("active"));
                            item.classList.add("active");
                        }
                    });
                });
            </script>
        </div>
    </div>

</body>

</html>