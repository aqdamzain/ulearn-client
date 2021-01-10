<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en"
      dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"
              content="IE=edge">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Course</title>

        <!-- Prevent the demo from appearing in search engines -->
        <meta name="robots"
              content="noindex">

        <link href="https://fonts.googleapis.com/css?family=Lato:400,700%7CRoboto:400,500%7CExo+2:600&display=swap"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="<?php echo base_url() ?>assets/public/vendor/spinkit.css"
              rel="stylesheet">

        <!-- Perfect Scrollbar -->
        <link type="text/css"
              href="<?php echo base_url() ?>assets/public/vendor/perfect-scrollbar.css"
              rel="stylesheet">

        <!-- Material Design Icons -->
        <link type="text/css"
              href="<?php echo base_url() ?>assets/public/css/material-icons.css"
              rel="stylesheet">

        <!-- Font Awesome Icons -->
        <link type="text/css"
              href="<?php echo base_url() ?>assets/public/css/fontawesome.css"
              rel="stylesheet">

        <!-- Preloader -->
        <link type="text/css"
              href="<?php echo base_url() ?>assets/public/css/preloader.css"
              rel="stylesheet">

        <!-- App CSS -->
        <link type="text/css"
              href="<?php echo base_url() ?>assets/public/css/app.css"
              rel="stylesheet">

    </head>

    <body class="layout-sticky-subnav layout-default ">

        <div class="preloader">
            <div class="sk-chase">
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
                <div class="sk-chase-dot"></div>
            </div>

            <!-- <div class="sk-bounce">
    <div class="sk-bounce-dot"></div>
    <div class="sk-bounce-dot"></div>
  </div> -->

            <!-- More spinner examples at https://github.com/tobiasahlin/SpinKit/blob/master/examples.html -->
        </div>

        <!-- Header Layout -->
        <div class="mdk-header-layout js-mdk-header-layout">

            <!-- Header -->

            <div id="header"
                 class="mdk-header js-mdk-header mb-0"
                 data-fixed
                 data-effects="">
                <div class="mdk-header__content">

                    <!-- Navbar -->

                    <div class="navbar navbar-expand pr-0 navbar-dark-pickled-bluewood navbar-shadow"
                         id="default-navbar"
                         data-primary>

                        <!-- Navbar Toggler -->

                        <button class="navbar-toggler w-auto mr-16pt d-block rounded-0"
                                type="button"
                                data-toggle="sidebar">
                            <span class="material-icons">short_text</span>
                        </button>

                        <!-- // END Navbar Toggler -->

                        <!-- Navbar Brand -->

                        <a href="index.html"
                           class="navbar-brand mr-16pt">

                            <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                                <span class="avatar-title rounded bg-primary"><img src="<?php echo base_url() ?>assets/public/images/illustration/student/128/white.svg"
                                         alt="logo"
                                         class="img-fluid" /></span>

                            </span>

                            <span class="d-none d-lg-block">U-Learn</span>
                        </a>

                        <!-- // END Navbar Brand -->

                        <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt">
                            <li class="nav-item">
                                <a href="index.html"
                                   class="nav-link">Beranda</a>
                            </li>
                            <li class="nav-item dropdown active">
                                <a href="#"
                                   class="nav-link dropdown-toggle"
                                   data-toggle="dropdown"
                                   data-caret="false">Student</a>
                                <div class="dropdown-menu">
                                    <a href="student-dashboard.html"
                                       class="dropdown-item">Student Dashboard</a>
                                    <a href="student-my-courses.html"
                                       class="dropdown-item active">My Courses</a>
                                    <a href="student-quiz-results.html"
                                       class="dropdown-item">My Quizzes</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown"
                                data-toggle="tooltip"
                                data-title="Community"
                                data-placement="bottom"
                                data-boundary="window">
                                <a href="#"
                                   class="nav-link dropdown-toggle"
                                   data-toggle="dropdown"
                                   data-caret="false">
                                    <i class="material-icons">people_outline</i>
                                </a>
                                <div class="dropdown-menu">
                                    <a href="discussions.html"
                                       class="dropdown-item">Discussions</a>
                                    <a href="discussion.html"
                                       class="dropdown-item">Discussion Details</a>
                                    <a href="discussions-ask.html"
                                       class="dropdown-item">Ask Question</a>
                                </div>
                            </li>
                        </ul>

                        <div class="flex"></div>

                        <!-- Navbar Menu -->

                        <div class="nav navbar-nav flex-nowrap d-flex mr-16pt">

                            <!-- Notifications dropdown -->
                            <div class="nav-item dropdown dropdown-notifications dropdown-xs-down-full"
                                 data-toggle="tooltip"
                                 data-title="Messages"
                                 data-placement="bottom"
                                 data-boundary="window">
                                <button class="nav-link btn-flush dropdown-toggle"
                                        type="button"
                                        data-toggle="dropdown"
                                        data-caret="false">
                                    <i class="material-icons icon-24pt">mail_outline</i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div data-perfect-scrollbar
                                         class="position-relative">
                                        <div class="dropdown-header"><strong>Messages</strong></div>
                                        <div class="list-group list-group-flush mb-0">

                                            <a href="javascript:void(0);"
                                               class="list-group-item list-group-item-action unread">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-black-50">5 minutes ago</small>

                                                    <span class="ml-auto unread-indicator bg-accent"></span>

                                                </span>
                                                <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <img src="<?php echo base_url() ?>assets/public/images/people/110/woman-5.jpg"
                                                             alt="people"
                                                             class="avatar-img rounded-circle">
                                                    </span>
                                                    <span class="flex d-flex flex-column">
                                                        <strong class="text-black-100">Michelle</strong>
                                                        <span class="text-black-70">Clients loved the new design.</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <a href="javascript:void(0);"
                                               class="list-group-item list-group-item-action">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-black-50">5 minutes ago</small>

                                                </span>
                                                <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <img src="<?php echo base_url() ?>assets/public/images/people/110/woman-5.jpg"
                                                             alt="people"
                                                             class="avatar-img rounded-circle">
                                                    </span>
                                                    <span class="flex d-flex flex-column">
                                                        <strong class="text-black-100">Michelle</strong>
                                                        <span class="text-black-70">🔥 Superb job..</span>
                                                    </span>
                                                </span>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- // END Notifications dropdown -->

                            <!-- Notifications dropdown -->
                            <div class="nav-item ml-16pt dropdown dropdown-notifications dropdown-xs-down-full"
                                 data-toggle="tooltip"
                                 data-title="Notifications"
                                 data-placement="bottom"
                                 data-boundary="window">
                                <button class="nav-link btn-flush dropdown-toggle"
                                        type="button"
                                        data-toggle="dropdown"
                                        data-caret="false">
                                    <i class="material-icons">notifications_none</i>
                                    <span class="badge badge-notifications badge-accent">2</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div data-perfect-scrollbar
                                         class="position-relative">
                                        <div class="dropdown-header"><strong>System notifications</strong></div>
                                        <div class="list-group list-group-flush mb-0">

                                            <a href="javascript:void(0);"
                                               class="list-group-item list-group-item-action unread">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-black-50">3 minutes ago</small>

                                                    <span class="ml-auto unread-indicator bg-accent"></span>

                                                </span>
                                                <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <span class="avatar-title rounded-circle bg-light">
                                                            <i class="material-icons font-size-16pt text-accent">account_circle</i>
                                                        </span>
                                                    </span>
                                                    <span class="flex d-flex flex-column">

                                                        <span class="text-black-70">Your profile information has not been synced correctly.</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <a href="javascript:void(0);"
                                               class="list-group-item list-group-item-action">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-black-50">5 hours ago</small>

                                                </span>
                                                <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <span class="avatar-title rounded-circle bg-light">
                                                            <i class="material-icons font-size-16pt text-primary">group_add</i>
                                                        </span>
                                                    </span>
                                                    <span class="flex d-flex flex-column">
                                                        <strong class="text-black-100">Adrian. D</strong>
                                                        <span class="text-black-70">Wants to join your private group.</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <a href="javascript:void(0);"
                                               class="list-group-item list-group-item-action">
                                                <span class="d-flex align-items-center mb-1">
                                                    <small class="text-black-50">1 day ago</small>

                                                </span>
                                                <span class="d-flex">
                                                    <span class="avatar avatar-xs mr-2">
                                                        <span class="avatar-title rounded-circle bg-light">
                                                            <i class="material-icons font-size-16pt text-warning">storage</i>
                                                        </span>
                                                    </span>
                                                    <span class="flex d-flex flex-column">

                                                        <span class="text-black-70">Your deploy was successful.</span>
                                                    </span>
                                                </span>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- // END Notifications dropdown -->

                            <div class="nav-item dropdown">
                                <a href="#"
                                   class="nav-link d-flex align-items-center dropdown-toggle"
                                   data-toggle="dropdown"
                                   data-caret="false">

                                    <span class="avatar avatar-sm mr-8pt2">

                                        <span class="avatar-title rounded-circle bg-primary"><i class="material-icons">account_box</i></span>

                                    </span>

                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-header"><strong>Account</strong></div>
                                    <a class="dropdown-item"
                                       href="edit-account.html">Edit Account</a>
                                    <a class="dropdown-item"
                                       href="login.html">Logout</a>
                                </div>
                            </div>
                        </div>

                        <!-- // END Navbar Menu -->

                    </div>

                    <!-- // END Navbar -->

                </div>
            </div>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content page-content ">

                <div class="mdk-box bg-primary mdk-box--bg-gradient-primary2 js-mdk-box mb-0"
                     data-effects="blend-background">
                    <div class="mdk-box__content">
                        <div class="hero py-64pt text-center text-sm-left">
                            <div class="container page__container">
                                <h1 class="text-white">Keamanan Jaringan Komputer</h1>
                                <p class="lead text-white-50 measure-hero-lead mb-24pt">Pada kelas ini, kamu akan mempelajari tentang dasar-dasar keamanan jaringan</p>
                                <a href="student-take-lesson.html"
                                   class="btn btn-white">Resume course</a>
                            </div>
                        </div>
                        <div class="navbar navbar-expand-sm navbar-light bg-white border-bottom-2 navbar-list p-0 m-0 align-items-center">
                            <div class="container page__container">
                                <ul class="nav navbar-nav flex align-items-sm-center">
                                    <li class="nav-item navbar-list__item">
                                        <div class="media align-items-center">
                                            <span class="media-left mr-16pt">
                                                <img src="<?php echo base_url() ?>assets/public/images/people/50/def-50.jpg"
                                                     width="40"
                                                     alt="avatar"
                                                     class="rounded-circle">
                                            </span>
                                            <div class="media-body">
                                                <a class="card-title m-0"
                                                   href="teacher-profile.html">Fajar Milleano</a>
                                                <p class="text-50 lh-1 mb-0">Instructor</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item navbar-list__item">
                                        <i class="material-icons text-muted icon--left">schedule</i>
                                        2h 46m
                                    </li>
                                    <li class="nav-item navbar-list__item">
                                        <i class="material-icons text-muted icon--left">assessment</i>
                                        Beginner
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container page__container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="border-left-2 page-section pl-32pt">

                                <div class="d-flex align-items-center page-num-container">
                                    <div class="page-num">1</div>
                                    <h4>Pendahuluan Keamanan Jaringan Komputer</h4>
                                </div>

                                <p class="text-70 mb-24pt">Berbagai ancaman cyber crime yang terjadi saat ini berdampak juga pada keamanan jaringan komputer baik dirumah, sekolah atau tempat kerja. Ini semua jika tidak diatasi dengan benar akan berbahaya terutama yang berkaitan dengan data-data penting yang tersimpan pada komputer. Untuk itu Anda perlu menambahkan sistem keamanan jaringan komputer yang lebih agar terhindar dari semua hal tersebut.</p>

                                <div class="card mb-32pt mb-lg-64pt">
                                    <ul class="accordion accordion--boxed js-accordion mb-0"
                                        id="toc-1">
                                        <li class="accordion__item open">
                                            <a class="accordion__toggle"
                                               data-toggle="collapse"
                                               data-parent="#toc-1"
                                               href="#toc-content-1">
                                                <span class="flex">1 of 4 Steps</span>
                                                <span class="accordion__toggle-icon material-icons">keyboard_arrow_down</span>
                                            </a>
                                            <div class="accordion__menu">
                                                <ul class="list-unstyled collapse show"
                                                    id="toc-content-1">
                                                    <li class="accordion__menu-link">
                                                        <span class="material-icons icon-16pt icon--left text-body">check_circle</span>
                                                        <a class="flex"
                                                           href="student-take-lesson.html">Pendahuluan</a>
                                                        <span class="text-muted">8m 42s</span>
                                                    </li>
                                                    <li class="accordion__menu-link">
                                                        <span class="material-icons icon-16pt icon--left text-body">play_circle_outline</span>
                                                        <a class="flex"
                                                           href="student-take-lesson.html">Principles of Network Security</a>
                                                        <span class="text-muted">50m 13s</span>
                                                    </li>
                                                    <li class="accordion__menu-link">
                                                        <span class="material-icons icon-16pt icon--left text-body">play_circle_outline</span>
                                                        <a class="flex"
                                                           href="student-take-lesson.html">System Hacking</a>
                                                        <span class="text-muted">12m 10s</span>
                                                    </li>
                                                    <li class="accordion__menu-link">
                                                        <span class="material-icons icon-16pt icon--left text-50">hourglass_empty</span>
                                                        <a class="flex"
                                                           href="student-take-quiz.html">Quiz: Pendahuluan Keamanan Jaringan Komputer</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="d-flex align-items-center page-num-container">
                                    <div class="page-num">2</div>
                                    <h4>Network Vulnerabilities</h4>
                                </div>
                                <p class="text-70 mb-24pt">Pada topik ini dibahas mengenai vulnerability (kerentanan) pada protokol jaringan terutama yang legacy. Identifikasi dilakukan pada setiap layer untuk melihat mekanisme kerja tiap protokol terkait. Selanjutnya dibahas juga mengenai Sniffing yang tidak saja berfungsi sebagai information gathering, akan tetap berpotensi menjadi pintu masuk attacker ke dalam jaringan. Untuk eksplorasi awal akan diberikan latihan dan tugas menggunakan Wireshark.</p>

                                <div class="card mb-0">
                                    <ul class="accordion accordion--boxed js-accordion mb-0"
                                        id="toc-2">
                                        <li class="accordion__item">
                                            <a class="accordion__toggle"
                                               data-toggle="collapse"
                                               data-parent="#toc-2"
                                               href="#toc-content-2">
                                                <span class="flex">6 Steps</span>
                                                <span class="accordion__toggle-icon material-icons">keyboard_arrow_down</span>
                                            </a>
                                            <div class="accordion__menu">
                                                <ul class="list-unstyled collapse"
                                                    id="toc-content-2">
                                                    <li class="accordion__menu-link">
                                                        <span class="material-icons icon-16pt icon--left text-body">check_circle</span>
                                                        <a class="flex"
                                                           href="student-take-lesson.html">Pendahuluan</a>
                                                        <span class="text-muted">8m 42s</span>
                                                    </li>
                                                    <li class="accordion__menu-link">
                                                        <span class="material-icons icon-16pt icon--left text-body">play_circle_outline</span>
                                                        <a class="flex"
                                                           href="student-take-lesson.html">Network vulnerability</a>
                                                        <span class="text-muted">50m 13s</span>
                                                    </li>
                                                    <li class="accordion__menu-link">
                                                        <span class="material-icons icon-16pt icon--left text-body">play_circle_outline</span>
                                                        <a class="flex"
                                                           href="student-take-lesson.html">Wireshark</a>
                                                        <span class="text-muted">12m 10s</span>
                                                    </li>
                                                    <li class="accordion__menu-link">
                                                        <span class="material-icons icon-16pt icon--left text-50">hourglass_empty</span>
                                                        <a class="flex"
                                                           href="student-take-quiz.html">Quiz: Network Vulnerabilities</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-5 page-nav">
                            <div class="page-section">
                                <div class="page-nav__content">
                                    <div class="page-separator">
                                        <div class="page-separator__text">Table of contents</div>
                                    </div>
                                    <!-- <h4 class="mb-16pt">Table of contents</h4> -->
                                </div>
                                <nav class="nav page-nav__menu">
                                    <a class="nav-link active"
                                       href="">Pendahuluan Keamanan Jaringan Komputer</a>
                                    <a class="nav-link"
                                       href="">Network Vulnerabilities</a>
                                    <a class="nav-link"
                                       href="">Cryptography</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="page-section bg-alt border-top-2 border-bottom-2">

                    <div class="container page__container">
                        <div class="row ">
                            <div class="col-md-7">
                                <div class="page-separator">
                                    <div class="page-separator__text">About this course</div>
                                </div>
                                <p class="text-70">Kelas ini akan mengajarimu tentang dasar-dasar keamanan jaringan komputer, termasuk bagaimana cara seseorang untuk melakukan serangan terhadap jaringan. Dengan begitu diharapkan para siswa dapat mencegah terjadinya serangan di masa yang akan datang.</p>
                                <p class="text-70 mb-0"></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- // END Header Layout Content -->

            <!-- Footer -->

            <div class="bg-white border-top-2 mt-auto">
                <div class="container page__container page-section d-flex flex-column">
                    <p class="text-70 brand mb-24pt">
                        <img class="brand-icon"
                             src="<?php echo base_url() ?>assets/public/images/logo/black-70@2x.png"
                             width="30"
                             alt="Luma"> U-Learn
                    </p>
                    <p class="measure-lead-max text-50 small mr-8pt">U-Learn adalah antarmuka pengguna yang dibuat dengan indah untuk Platform Pendidikan modern, termasuk Kursus & Tutorial, Pelajaran Video, Dasbor Pelajar dan Tutor, Manajemen Kurikulum, dan banyak lagi.</p>
                    <p class="mb-8pt d-flex">
                        <a href=""
                           class="text-70 text-underline mr-8pt small">Terms</a>
                        <a href=""
                           class="text-70 text-underline small">Privacy policy</a>
                    </p>
                    <p class="text-50 small mt-n1 mb-0">Copyright 2020 &copy; All rights reserved.</p>
                </div>
            </div>

            <!-- // END Footer -->

        </div>
        <!-- // END Header Layout -->

        <!-- Drawer -->

        <div class="mdk-drawer js-mdk-drawer"
             id="default-drawer">
            <div class="mdk-drawer__content">
                <div class="sidebar sidebar-dark-pickled-bluewood sidebar-left"
                     data-perfect-scrollbar>

                    <!-- Sidebar Content -->

                    <a href="index.html"
                       class="sidebar-brand ">
                        <!-- <img class="sidebar-brand-icon" src="../../public/images/illustration/student/128/white.svg" alt="Luma"> -->

                        <span class="avatar avatar-xl sidebar-brand-icon h-auto">

                            <span class="avatar-title rounded bg-primary"><img src="<?php echo base_url() ?>assets/public/images/illustration/student/128/white.svg"
                                     class="img-fluid"
                                     alt="logo" /></span>

                        </span>

                        <span>Luma</span>
                    </a>

                    <div class="sidebar-heading">Student</div>
                    <ul class="sidebar-menu">

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="index.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                                <span class="sidebar-menu-text">Beranda</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="courses.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">local_library</span>
                                <span class="sidebar-menu-text">Lihat Daftar Kelas</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-dashboard.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">style</span>
                                <span class="sidebar-menu-text">Student Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button"
                               href="student-my-courses.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">search</span>
                                <span class="sidebar-menu-text">My Courses</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-quiz-results.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">poll</span>
                                <span class="sidebar-menu-text">My Quizzes</span>
                            </a>
                        </li>
                    </ul>

                    <!-- // END Sidebar Content -->

                </div>
            </div>
        </div>

        <!-- // END Drawer -->

        <!-- jQuery -->
        <script src="<?php echo base_url() ?>assets/public/vendor/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="<?php echo base_url() ?>assets/public/vendor/popper.min.js"></script>
        <script src="<?php echo base_url() ?>assets/public/vendor/bootstrap.min.js"></script>

        <!-- Perfect Scrollbar -->
        <script src="<?php echo base_url() ?>assets/public/vendor/perfect-scrollbar.min.js"></script>

        <!-- DOM Factory -->
        <script src="<?php echo base_url() ?>assets/public/vendor/dom-factory.js"></script>

        <!-- MDK -->
        <script src="<?php echo base_url() ?>assets/public/vendor/material-design-kit.js"></script>

        <!-- App JS -->
        <script src="<?php echo base_url() ?>assets/public/js/app.js"></script>

        <!-- Preloader -->
        <script src="<?php echo base_url() ?>assets/public/js/preloader.js"></script>

    </body>

</html>