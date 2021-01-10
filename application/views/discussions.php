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
        <title>Discussions</title>

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

                    <div class="navbar navbar-expand navbar-dark-pickled-bluewood navbar-shadow"
                         id="default-navbar"
                         data-primary>

                        <!-- Navbar toggler -->
                        <button class="navbar-toggler w-auto mr-16pt d-block rounded-0"
                                type="button"
                                data-toggle="sidebar">
                            <span class="material-icons">short_text</span>
                        </button>

                        <!-- Navbar Brand -->
                        <a href="index.html"
                           class="navbar-brand mr-16pt">
                            <!-- <img class="navbar-brand-icon" src="../../public/images/logo/white-100@2x.png" width="30" alt="Luma"> -->

                            <span class="avatar avatar-sm navbar-brand-icon mr-0 mr-lg-8pt">

                                <span class="avatar-title rounded bg-primary"><img src="<?php echo base_url() ?>assets/public/images/illustration/student/128/white.svg"
                                         alt="logo"
                                         class="img-fluid" /></span>

                            </span>

                            <span class="d-none d-lg-block">U-Learn</span>
                        </a>

                        <ul class="nav navbar-nav d-none d-sm-flex flex justify-content-start ml-8pt">
                            <li class="nav-item">
                                <a href="index.html"
                                   class="nav-link">Beranda</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#"
                                   class="nav-link dropdown-toggle"
                                   data-toggle="dropdown"
                                   data-caret="false">Kelas</a>
                                <div class="dropdown-menu">
                                    <a href="courses.html"
                                       class="dropdown-item">Lihat Daftar Kelas</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
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
                                       class="dropdown-item">My Quizzes</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#"
                                   class="nav-link dropdown-toggle"
                                   data-toggle="dropdown"
                                   data-caret="false">Tutor</a>
                                   <div class="dropdown-menu">
                                    <a href="instructor-courses.html"
                                       class="dropdown-item">Instructor Dashboard</a>
                                    <a href="instructor-quizzes.html"
                                       class="dropdown-item">Manage Quiz</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown active"
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
                                       class="dropdown-item active">Discussions</a>
                                    <a href="discussion.html"
                                       class="dropdown-item">Discussion Details</a>
                                    <a href="discussions-ask.html"
                                       class="dropdown-item">Ask Question</a>
                                </div>
                            </li>
                        </ul>

                        <form class="search-form navbar-search d-none d-lg-flex mr-16pt"
                              action="index.html"
                              style="max-width: 230px">
                            <button class="btn"
                                    type="submit"><i class="material-icons">search</i></button>
                            <input type="text"
                                   class="form-control"
                                   placeholder="Search ...">
                        </form>

                        <ul class="nav navbar-nav ml-auto mr-0">
                            <li class="nav-item">
                                <a href="login.html"
                                   class="nav-link"
                                   data-toggle="tooltip"
                                   data-title="Login"
                                   data-placement="bottom"
                                   data-boundary="window"><i class="material-icons">lock_open</i></a>
                            </li>
                            <li class="nav-item">
                                <a href="signup.html"
                                   class="btn btn-outline-white">Get Started</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content page-content ">

                <div class="container page__container">
                    <div class="page-section">

                        <div class="page-separator">
                            <div class="page-separator__text">Discussions</div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center"
                                     style="white-space: nowrap;">
                                    <div class="col-lg-auto">
                                        <form class="search-form  d-lg-inline-flex mb-8pt mb-lg-0"
                                              action="discussions.html">
                                            <input type="text"
                                                   class="form-control w-lg-auto"
                                                   placeholder="Search discussions">
                                            <button class="btn"
                                                    type="submit"><i class="material-icons">search</i></button>
                                        </form>
                                    </div>
                                    <div class="col-lg d-flex flex-wrap align-items-center">
                                        <div class="ml-lg-auto dropdown">
                                            <a href="#"
                                               class="btn btn-link dropdown-toggle text-70"
                                               data-toggle="dropdown">All Topics</a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href=""
                                                   class="dropdown-item active">All Topics</a>
                                                <a href=""
                                                   class="dropdown-item">My Topics</a>
                                            </div>
                                        </div>
                                        <div class="dropdown mr-8pt">
                                            <a href="#"
                                               class="btn btn-link dropdown-toggle text-70"
                                               data-toggle="dropdown">Newest</a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href=""
                                                   class="dropdown-item active">Newest</a>
                                                <a href=""
                                                   class="dropdown-item">Unanswered</a>
                                            </div>
                                        </div>
                                        <a href="discussions-ask.html"
                                           class="btn btn-accent">Ask a question</a>
                                    </div>
                                </div>
                            </div>

                            <div class="list-group list-group-flush">

                                <div class="list-group-item p-3">
                                    <div class="row align-items-start">
                                        <div class="col-md-3 mb-8pt mb-md-0">
                                            <div class="media align-items-center">
                                                <div class="media-left mr-12pt">
                                                    <a href=""
                                                       class="avatar avatar-sm">
                                                        <!-- <img src="LB" alt="avatar" class="avatar-img rounded-circle"> -->
                                                        <span class="avatar-title rounded-circle">LB</span>
                                                    </a>
                                                </div>
                                                <div class="d-flex flex-column media-body media-middle">
                                                    <a href=""
                                                       class="card-title">Lukman Batubara</a>
                                                    <small class="text-muted">2 days ago</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-8pt mb-md-0">
                                            <p class="mb-8pt"><a href="discussion.html"
                                                   class="text-body"><strong>Penggunaaan ESP32 dibandingkan ESP8266</strong></a></p>

                                            <a href="discussion.html"
                                               class="chip chip-outline-secondary">Perancangan Sistem Embedded</a>

                                        </div>
                                        <div class="col-auto d-flex flex-column align-items-center justify-content-center">
                                            <h5 class="m-0">1</h5>
                                            <p class="lh-1 mb-0"><small class="text-70">answers</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group-item p-3">
                                    <div class="row align-items-start">
                                        <div class="col-md-3 mb-8pt mb-md-0">
                                            <div class="media align-items-center">
                                                <div class="media-left mr-12pt">
                                                    <a href=""
                                                       class="avatar avatar-sm">
                                                        <!-- <img src="AC" alt="avatar" class="avatar-img rounded-circle"> -->
                                                        <span class="avatar-title rounded-circle">AC</span>
                                                    </a>
                                                </div>
                                                <div class="d-flex flex-column media-body media-middle">
                                                    <a href=""
                                                       class="card-title">Aqdam Chaniago</a>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-8pt mb-md-0">
                                            <p class="mb-0"><a href="discussion.html"
                                                   class="text-body"><strong>Kenapa modul Wi-Fi pada ESP8266 saya tidak berfungsi</strong></a></p>

                                        </div>
                                        <div class="col-auto d-flex flex-column align-items-center justify-content-center">
                                            <h5 class="m-0">1</h5>
                                            <p class="lh-1 mb-0"><small class="text-70">answers</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group-item p-3">
                                    <div class="row align-items-start">
                                        <div class="col-md-3 mb-8pt mb-md-0">
                                            <div class="media align-items-center">
                                                <div class="media-left mr-12pt">
                                                    <a href=""
                                                       class="avatar avatar-sm">
                                                        <!-- <img src="EH" alt="avatar" class="avatar-img rounded-circle"> -->
                                                        <span class="avatar-title rounded-circle">NT</span>
                                                    </a>
                                                </div>
                                                <div class="d-flex flex-column media-body media-middle">
                                                    <a href=""
                                                       class="card-title">Nathanael Tristan</a>
                                                    <small class="text-muted">4 days ago</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-8pt mb-md-0">
                                            <p class="mb-0"><a href="discussion.html"
                                                   class="text-body"><strong>Penggunaaan ESP32 dibandingkan ESP8266</strong></a></p>

                                        </div>
                                        <div class="col-auto d-flex flex-column align-items-center justify-content-center">
                                            <h5 class="m-0">1</h5>
                                            <p class="lh-1 mb-0"><small class="text-70">answers</small></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="list-group-item p-3">
                                    <div class="row align-items-start">
                                        <div class="col-md-3 mb-8pt mb-md-0">
                                            <div class="media align-items-center">
                                                <div class="media-left mr-12pt">
                                                    <a href=""
                                                       class="avatar avatar-sm">
                                                        <!-- <img src="JK" alt="avatar" class="avatar-img rounded-circle"> -->
                                                        <span class="avatar-title rounded-circle">SV</span>
                                                    </a>
                                                </div>
                                                <div class="d-flex flex-column media-body media-middle">
                                                    <a href=""
                                                       class="card-title">Saint Vithra</a>
                                                    <small class="text-muted">6 days ago</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-8pt mb-md-0">
                                            <p class="mb-0"><a href="discussion.html"
                                                   class="text-body"><strong>Kenapa modul Wi-Fi pada ESP8266 saya tidak berfungsi</strong></a></p>

                                        </div>
                                        <div class="col-auto d-flex flex-column align-items-center justify-content-center">
                                            <h5 class="m-0">1</h5>
                                            <p class="lh-1 mb-0"><small class="text-70">answers</small></p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer">

                                <ul class="pagination justify-content-start pagination-xsm m-0">
                                    <li class="page-item disabled">
                                        <a class="page-link"
                                           href="#"
                                           aria-label="Previous">
                                            <span aria-hidden="true"
                                                  class="material-icons">chevron_left</span>
                                            <span>Prev</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link"
                                           href="#"
                                           aria-label="Page 1">
                                            <span>1</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link"
                                           href="#"
                                           aria-label="Page 2">
                                            <span>2</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link"
                                           href="#"
                                           aria-label="Next">
                                            <span>Next</span>
                                            <span aria-hidden="true"
                                                  class="material-icons">chevron_right</span>
                                        </a>
                                    </li>
                                </ul>

                                <!-- <ul class="pagination justify-content-center pagination-sm">
  <li class="page-item disabled">
    <a class="page-link" href="#" aria-label="Previous">
      <span aria-hidden="true" class="material-icons">chevron_left</span>
      <span>Prev</span>
    </a>
  </li>
  <li class="page-item active">
    <a class="page-link" href="#" aria-label="1">
      <span>1</span>
    </a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#" aria-label="1">
      <span>2</span>
    </a>
  </li>
  <li class="page-item">
    <a class="page-link" href="#" aria-label="Next">
      <span>Next</span>
      <span aria-hidden="true" class="material-icons">chevron_right</span>
    </a>
  </li>
</ul> -->
                                <!-- <a href="" class="text-70 text-underline">View more discussions</a> -->
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
                             alt="U-Learn"> U-Learn
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

                        <span>U-Learn</span>
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
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="student-quiz-results.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">poll</span>
                                <span class="sidebar-menu-text">My Quizzes</span>
                            </a>
                        </li>
                    </ul>
                    <div class="sidebar-heading">Instructor</div>
                    <ul class="sidebar-menu">

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="instructor-courses.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">school</span>
                                <span class="sidebar-menu-text">Instructor Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="instructor-quizzes.html">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">help</span>
                                <span class="sidebar-menu-text">Manage Quizzes</span>
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