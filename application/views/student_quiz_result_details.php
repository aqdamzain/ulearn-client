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
        <title>Quiz Result Details</title>

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
                                       class="dropdown-item">My Courses</a>
                                    <a href="student-quiz-results.html"
                                       class="dropdown-item active">My Quizzes</a>
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

                <div class="navbar navbar-list navbar-light bg-white border-bottom-2 border-bottom navbar-expand-sm"
                     style="white-space: nowrap;">
                    <div class="container page__container">
                        <nav class="nav navbar-nav">
                            <div class="nav-item navbar-list__item">
                                <a href="student-take-course.html"
                                   class="nav-link h-auto"><i class="material-icons icon--left">keyboard_backspace</i> Back to Course</a>
                            </div>
                            <div class="nav-item navbar-list__item">
                                <div class="d-flex align-items-center flex-nowrap">
                                    <div class="mr-16pt">
                                        <a href="student-take-course.html"><img src="<?php echo base_url() ?>assets/public/images/paths/kemjar_80x80.jpg"
                                                 width="40"
                                                 alt="Angular"
                                                 class="rounded"></a>
                                    </div>
                                    <div class="flex">
                                        <a href="student-take-course.html"
                                           class="card-title text-body mb-0">Keamanan Jaringan Komputer</a>
                                        <p class="lh-1 d-flex align-items-center mb-0">
                                            <span class="text-50 small font-weight-bold mr-8pt">Fajar Milleano</span>
                                            <span class="text-50 small"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="mdk-box bg-primary mdk-box--bg-gradient-primary2 js-mdk-box mb-0"
                     data-effects="blend-background">
                    <div class="mdk-box__content">
                        <div class="py-64pt text-center text-sm-left">
                            <div class="container d-flex flex-column justify-content-center align-items-center">
                                <p class="lead text-white-50 measure-lead-max mb-0">Submited on 02 Dec 2020</p>
                                <h1 class="text-white mb-24pt">Your Score: 450</h1>
                                <a href="student-take-quiz.html"
                                   class="btn btn-outline-white">Restart quiz</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar navbar-expand-sm navbar-light navbar-submenu navbar-list p-0 m-0 align-items-center">
                    <div class="container page__container">
                        <ul class="nav navbar-nav flex align-items-sm-center">
                            <li class="nav-item navbar-list__item">450/450 Score</li>
                            <li class="nav-item navbar-list__item">
                                <i class="material-icons text-muted icon--left">schedule</i>
                                12 minutes
                            </li>
                            <li class="nav-item navbar-list__item">
                                <i class="material-icons text-muted icon--left">assessment</i>
                                Intermediate
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="container page__container">
                    <div class="border-left-2 page-section pl-32pt">

                        <div class="d-flex align-items-center page-num-container mb-16pt">
                            <div class="page-num">1</div>
                            <h4>Question 1 of 1</h4>
                        </div>

                        <p class="text-70 measure-lead mb-32pt mb-lg-48pt">Tujuan mempelajari keamanan jaringan komputer adalah ?</p>

                        <ul class="list-quiz">
                            <li class="list-quiz-item">
                                <span class="list-quiz-badge">A</span>
                                <span class="list-quiz-text">Agar dapat mengetahui kelemahan suatu jaringan dan mendapatkan keuntungan pribadi</span>
                            </li>
                            <li class="list-quiz-item active">
                                <span class="list-quiz-badge bg-primary text-white"><i class="material-icons">check</i></span>
                                <span class="list-quiz-text">Agar dapat mengetahui kelemahan suatu jaringan dan mencegah terjadinya serangan di masa yang akan datang</span>
                            </li>
                            <li class="list-quiz-item">
                                <span class="list-quiz-badge">C</span>
                                <span class="list-quiz-text">Agar mendapat pekerjaan</span>
                            </li>
                        </ul>

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
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-my-courses.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">search</span>
                                <span class="sidebar-menu-text">My Courses</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item active">
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
        <script src=".<?php echo base_url() ?>assets/public/vendor/bootstrap.min.js"></script>

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