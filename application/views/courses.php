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
        <title>Kelas</title>

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
                        <a href="<?php echo base_url() ?>"
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
                                <a href="<?php echo base_url() ?>"
                                   class="nav-link">Beranda</a>
                            </li>
                            <li class="nav-item dropdown active">
                                <a href="#"
                                   class="nav-link dropdown-toggle"
                                   data-toggle="dropdown"
                                   data-caret="false">Kelas</a>
                                <div class="dropdown-menu">
                                    <a href="<?php echo base_url() ?>courses"
                                       class="dropdown-item active">Lihat Daftar Kelas</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#"
                                   class="nav-link dropdown-toggle"
                                   data-toggle="dropdown"
                                   data-caret="false">Student</a>
                                   <div class="dropdown-menu">
                                    <a href="<?php echo base_url() ?>student_dashboard"
                                       class="dropdown-item">Student Dashboard</a>
                                    <a href="<?php echo base_url() ?>student_my_courses"
                                       class="dropdown-item">My Courses</a>
                                    <a href="<?php echo base_url() ?>student_quiz_results"
                                       class="dropdown-item">My Quizzes</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#"
                                   class="nav-link dropdown-toggle"
                                   data-toggle="dropdown"
                                   data-caret="false">Tutor</a>
                                   <div class="dropdown-menu">
                                    <a href="<?php echo base_url() ?>instructor_courses"
                                       class="dropdown-item">Instructor Dashboard</a>
                                    <a href="<?php echo base_url() ?>instructor_quizzes"
                                       class="dropdown-item">Manage Quiz</a>
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
                                    <a href="<?php echo base_url() ?>discussions"
                                       class="dropdown-item">Discussions</a>
                                    <a href="<?php echo base_url() ?>discussion"
                                       class="dropdown-item">Discussion Details</a>
                                    <a href="<?php echo base_url() ?>discussions_ask"
                                       class="dropdown-item">Ask Question</a>
                                </div>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav ml-auto mr-0">
                            <li class="nav-item">
                                <a href="<?php echo base_url() ?>login"
                                   class="nav-link"
                                   data-toggle="tooltip"
                                   data-title="Login"
                                   data-placement="bottom"
                                   data-boundary="window"><i class="material-icons">lock_open</i></a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo base_url() ?>signup"
                                   class="btn btn-outline-white">Get Started</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <!-- // END Header -->

            <!-- Header Layout Content -->
            <div class="mdk-header-layout__content page-content ">

                <div data-push
                     data-responsive-width="992px"
                     class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content">

                        <div class="page-section">
                            <div class="container page__container">

                                <div class="d-flex flex-column flex-sm-row align-items-sm-center mb-24pt"
                                     style="white-space: nowrap;">
                                    <small class="flex text-muted text-headings text-uppercase mr-3 mb-2 mb-sm-0">Menampilkan 1 dari 10 kelas</small>
                                    <div class="w-auto ml-sm-auto table d-flex align-items-center mb-2 mb-sm-0">
                                        <small class="text-muted text-headings text-uppercase mr-3 d-none d-sm-block">Sort by</small>

                                        <a href="#"
                                           class="sort desc small text-headings text-uppercase">Newest</a>

                                        <a href="#"
                                           class="sort small text-headings text-uppercase ml-2">Popularity</a>

                                    </div>

                                    <a href="#"
                                       data-target="#library-drawer"
                                       data-toggle="sidebar"
                                       class="btn btn-sm btn-white ml-sm-16pt">
                                        <i class="material-icons icon--left">tune</i> Filters
                                    </a>

                                </div>

                                <div class="page-separator">
                                    <div class="page-separator__text">Popular Courses</div>
                                </div>

                                <div class="row card-group-row">

                                    <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay mdk-reveal js-mdk-reveal card-group-row__card"
                                            
                                             data-partial-height="44"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <a href="<?php echo base_url() ?>kelas_siswa"
                                               class="js-image"
                                               data-position="">
                                                <img src="<?php echo base_url() ?>assets/public/images/paths/cisco_168.jpg"
                                                     alt="course">
                                                <span class="overlay__content align-items-start justify-content-start">
                                                    <span class="overlay__action card-body d-flex align-items-center">
                                                        <i class="material-icons mr-4pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <div class="mdk-reveal__content">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class="flex">
                                                            <a class="card-title"
                                                               href="<?php echo base_url() ?>kelas_siswa">CCNA Routing Switching 1 dan 2 </a>
                                                            <small class="text-50 font-weight-bold mb-4pt">Fajar Milleano</small>
                                                        </div>
                                                        <a href="<?php echo base_url() ?>kelas_siswa"
                                                           data-toggle="tooltip"
                                                           data-title="Remove Favorite"
                                                           data-placement="top"
                                                           data-boundary="window"
                                                           class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popoverContainer d-none">
                                            <div class="media">
                                                <div class="media-left mr-12pt">
                                                    <img src="<?php echo base_url() ?>assets/public/images/paths/cisco_80x80.jpg"
                                                         width="40"
                                                         height="40"
                                                         alt="Angular"
                                                         class="rounded">
                                                </div>
                                                <div class="media-body">
                                                    <div class="card-title mb-0">CCNA Routing Switching 1 dan 2</div>
                                                    <p class="lh-1 mb-0">
                                                        <span class="text-50 small">with</span>
                                                        <span class="text-50 small font-weight-bold">Fajar Milleano</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <p class="my-16pt text-70">Mempelajari dasar-dasar routing dan switching</p>

                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                                    </div>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="<?php echo base_url() ?>student_take_course"
                                                       class="btn btn-primary">Start</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay mdk-reveal js-mdk-reveal card-group-row__card"
                                             data-partial-height="44"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <a href="kelas-siswa.html"
                                               class="js-image"
                                               data-position="">
                                                <img src="<?php echo base_url() ?>assets/public/images/paths/kemjar_168.jpg"
                                                     alt="course">
                                                <span class="overlay__content align-items-start justify-content-start">
                                                    <span class="overlay__action card-body d-flex align-items-center">
                                                        <i class="material-icons mr-4pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <div class="mdk-reveal__content">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class="flex">
                                                            <a class="card-title"
                                                               href="kelas-siswa.html">Keamanan Jaringan Komputer</a>
                                                            <small class="text-50 font-weight-bold mb-4pt">Fajar Milleano</small>
                                                        </div>
                                                        <a href="kelas-siswa.html"
                                                           data-toggle="tooltip"
                                                           data-title="Add Favorite"
                                                           data-placement="top"
                                                           data-boundary="window"
                                                           class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popoverContainer d-none">
                                            <div class="media">
                                                <div class="media-left mr-12pt">
                                                    <img src="<?php echo base_url() ?>assets/public/images/paths/kemjar_80x80.jpg"
                                                         width="40"
                                                         height="40"
                                                         alt="Angular"
                                                         class="rounded">
                                                </div>
                                                <div class="media-body">
                                                    <div class="card-title mb-0">Keamanan Jaringan Komputer</div>
                                                    <p class="lh-1 mb-0">
                                                        <span class="text-50 small">with</span>
                                                        <span class="text-50 small font-weight-bold">Fajar Milleano</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <p class="my-16pt text-70">Mempelajari tentang dasar-dasar keamanan jaringan</p>


                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                                    </div>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="<?php echo base_url() ?>student_take_course"
                                                       class="btn btn-primary">Start</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay mdk-reveal js-mdk-reveal card-group-row__card"
                                             data-partial-height="44"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <a href="kelas-siswa.html"
                                               class="js-image"
                                               data-position="">
                                                <img src="<?php echo base_url() ?>assets/public/images/paths/digital_168.jpg"
                                                     alt="course">
                                                <span class="overlay__content align-items-start justify-content-start">
                                                    <span class="overlay__action card-body d-flex align-items-center">
                                                        <i class="material-icons mr-4pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <div class="mdk-reveal__content">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class="flex">
                                                            <a class="card-title"
                                                               href="kelas-siswa.html">Dasar Sistem Digital</a>
                                                            <small class="text-50 font-weight-bold mb-4pt">Hosea</small>
                                                        </div>
                                                        <a href="kelas-siswa.html"
                                                           data-toggle="tooltip"
                                                           data-title="Add Favorite"
                                                           data-placement="top"
                                                           data-boundary="window"
                                                           class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popoverContainer d-none">
                                            <div class="media">
                                                <div class="media-left mr-12pt">
                                                    <img src="<?php echo base_url() ?>assets/public/images/paths/digital_80.jpg"
                                                         width="40"
                                                         height="40"
                                                         alt="Angular"
                                                         class="rounded">
                                                </div>
                                                <div class="media-body">
                                                    <div class="card-title mb-0">Dasar Sistem Digital</div>
                                                    <p class="lh-1 mb-0">
                                                        <span class="text-50 small">with</span>
                                                        <span class="text-50 small font-weight-bold">Hosea</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <p class="my-16pt text-70">Mempelajari tentang dasar-dasar sistem digital</p>

                                            

                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                                    </div>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="<?php echo base_url() ?>student_take_course"
                                                       class="btn btn-primary">Start</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay mdk-reveal js-mdk-reveal card-group-row__card"
                                             data-partial-height="44"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <a href="kelas-siswa.html"
                                               class="js-image"
                                               data-position="">
                                                <img src="<?php echo base_url() ?>assets/public/images/paths/embedded_168.jpeg"
                                                     alt="course">
                                                <span class="overlay__content align-items-start justify-content-start">
                                                    <span class="overlay__action card-body d-flex align-items-center">
                                                        <i class="material-icons mr-4pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <div class="mdk-reveal__content">
                                                <div class="card-body">
                                                    <div class="d-flex">
                                                        <div class="flex">
                                                            <a class="card-title"
                                                               href="kelas-siswa.html">Perancangan Sistem Embedded</a>
                                                            <small class="text-50 font-weight-bold mb-4pt">Ridho Gani</small>
                                                        </div>
                                                        <a href="kelas-siswa.html"
                                                           data-toggle="tooltip"
                                                           data-title="Add Favorite"
                                                           data-placement="top"
                                                           data-boundary="window"
                                                           class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popoverContainer d-none">
                                            <div class="media">
                                                <div class="media-left mr-12pt">
                                                    <img src="<?php echo base_url() ?>assets/public/images/paths/embedded_80.jpeg"
                                                         width="40"
                                                         height="40"
                                                         alt="Angular"
                                                         class="rounded">
                                                </div>
                                                <div class="media-body">
                                                    <div class="card-title mb-0">Perancangan Sistem Embedded</div>
                                                    <p class="lh-1 mb-0">
                                                        <span class="text-50 small">with</span>
                                                        <span class="text-50 small font-weight-bold">Ridho Gani</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <p class="my-16pt text-70">Mempelajari tentang dasar-dasar dari perancangan sistem embedded</p>


                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                                    </div>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="<?php echo base_url() ?>student_take_course"
                                                       class="btn btn-primary">Start</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="mb-32pt">

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

                                </div>

                                <div class="page-separator">
                                    <div class="page-separator__text">Netlab Courses</div>
                                </div>

                                <div class="row card-group-row">

                                    <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <a href="kelas-siswa.html"
                                               class="card-img-top js-image"
                                               data-position=""
                                               data-height="140">
                                                <img src="<?php echo base_url() ?>assets/public/images/paths/cisco_168.jpg"
                                                     alt="course">
                                                <span class="overlay__content">
                                                    <span class="overlay__action d-flex flex-column text-center">
                                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <div class="card-body flex">
                                                <div class="d-flex">
                                                    <div class="flex">
                                                        <a class="card-title"
                                                           href="kelas-siswa.html">CCNA Routing Switching 1 dan 2s</a>
                                                        <small class="text-50 font-weight-bold mb-4pt">Fajar Milleano</small>
                                                    </div>
                                                    <a href="kelas-siswa.html"
                                                       data-toggle="tooltip"
                                                       data-title="Add Favorite"
                                                       data-placement="top"
                                                       data-boundary="window"
                                                       class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="row justify-content-between">
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popoverContainer d-none">
                                            <div class="media">
                                                <div class="media-left mr-12pt">
                                                    <img src="<?php echo base_url() ?>assets/public/images/paths/cisco_80x80.jpg"
                                                         width="40"
                                                         height="40"
                                                         alt="Angular"
                                                         class="rounded">
                                                </div>
                                                <div class="media-body">
                                                    <div class="card-title mb-0">CCNA Routing Switching 1 dan 2</div>
                                                    <p class="lh-1 mb-0">
                                                        <span class="text-50 small">with</span>
                                                        <span class="text-50 small font-weight-bold">Fajar Milleano</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <p class="my-16pt text-70">Mempelajari tentang dasar-dasar routing dan switching cisco</p>


                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                                    </div>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="<?php echo base_url() ?>student_take_course"
                                                       class="btn btn-primary">Start</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <a href="kelas-siswa.html"
                                               class="card-img-top js-image"
                                               data-position=""
                                               data-height="140">
                                                <img src="<?php echo base_url() ?>assets/public/images/paths/kemjar_168.jpg"
                                                     alt="course">
                                                <span class="overlay__content">
                                                    <span class="overlay__action d-flex flex-column text-center">
                                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <div class="card-body flex">
                                                <div class="d-flex">
                                                    <div class="flex">
                                                        <a class="card-title"
                                                           href="kelas-siswa.html">Keamanan Jaringan Komputer</a>
                                                        <small class="text-50 font-weight-bold mb-4pt">Fajar Milleano</small>
                                                    </div>
                                                    <a href="kelas-siswa.html"
                                                       data-toggle="tooltip"
                                                       data-title="Add Favorite"
                                                       data-placement="top"
                                                       data-boundary="window"
                                                       class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                                </div>

                                            </div>
                                            <div class="card-footer">
                                                <div class="row justify-content-between">
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popoverContainer d-none">
                                            <div class="media">
                                                <div class="media-left mr-12pt">
                                                    <img src="<?php echo base_url() ?>assets/public/images/paths/kemjar_80x80.jpg"
                                                         width="40"
                                                         height="40"
                                                         alt="Angular"
                                                         class="rounded">
                                                </div>
                                                <div class="media-body">
                                                    <div class="card-title mb-0">Keamanan Jaringan Komputer</div>
                                                    <p class="lh-1 mb-0">
                                                        <span class="text-50 small">with</span>
                                                        <span class="text-50 small font-weight-bold">Fajar Milleano</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <p class="my-16pt text-70">Mempelajari tentang dasar-dasar keamanan jaringan komputer.</p>


                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                                    </div>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="<?php echo base_url() ?>student_take_course"
                                                       class="btn btn-primary">Start</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <a href="kelas-siswa.html"
                                               class="card-img-top js-image"
                                               data-position=""
                                               data-height="140">
                                                <img src="<?php echo base_url() ?>assets/public/images/paths/sbd_168.jpg"
                                                     alt="course">
                                                <span class="overlay__content">
                                                    <span class="overlay__action d-flex flex-column text-center">
                                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <div class="card-body flex">
                                                <div class="d-flex">
                                                    <div class="flex">
                                                        <a class="card-title"
                                                           href="kelas-siswa.html">Sistem Basis Data</a>
                                                        <small class="text-50 font-weight-bold mb-4pt">Fajar Milleano</small>
                                                    </div>
                                                    <a href="kelas-siswa.html"
                                                       data-toggle="tooltip"
                                                       data-title="Add Favorite"
                                                       data-placement="top"
                                                       data-boundary="window"
                                                       class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                                </div>

                                            </div>
                                            <div class="card-footer">
                                                <div class="row justify-content-between">
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popoverContainer d-none">
                                            <div class="media">
                                                <div class="media-left mr-12pt">
                                                    <img src="<?php echo base_url() ?>assets/public/images/paths/sbd_80.jpg"
                                                         width="40"
                                                         height="40"
                                                         alt="Angular"
                                                         class="rounded">
                                                </div>
                                                <div class="media-body">
                                                    <div class="card-title mb-0">Sistem Basis Data</div>
                                                    <p class="lh-1 mb-0">
                                                        <span class="text-50 small">with</span>
                                                        <span class="text-50 small font-weight-bold">Fajar Milleano</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <p class="my-16pt text-70">Mempelajari tentang dasar-dasar dari sistem basis data.</p>


                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                                    </div>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="<?php echo base_url() ?>student_take_course"
                                                       class="btn btn-primary">Start</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <a href="kelas-siswa.html"
                                               class="card-img-top js-image"
                                               data-position="left"
                                               data-height="140">
                                                <img src="<?php echo base_url() ?>assets/public/images/paths/dmj_168.jpg"
                                                     alt="course">
                                                <span class="overlay__content">
                                                    <span class="overlay__action d-flex flex-column text-center">
                                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <div class="card-body flex">
                                                <div class="d-flex">
                                                    <div class="flex">
                                                        <a class="card-title"
                                                           href="kelas-siswa.html">Desain dan Manajemen Jaringan Komputer</a>
                                                        <small class="text-50 font-weight-bold mb-4pt">Fajar Milleano</small>
                                                    </div>
                                                    <a href="kelas-siswa.html"
                                                       data-toggle="tooltip"
                                                       data-title="Add Favorite"
                                                       data-placement="top"
                                                       data-boundary="window"
                                                       class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                                </div>

                                            </div>
                                            <div class="card-footer">
                                                <div class="row justify-content-between">
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popoverContainer d-none">
                                            <div class="media">
                                                <div class="media-left mr-12pt">
                                                    <img src="<?php echo base_url() ?>assets/public/images/paths/dmj_80.jpg"
                                                         width="40"
                                                         height="40"
                                                         alt="Angular"
                                                         class="rounded">
                                                </div>
                                                <div class="media-body">
                                                    <div class="card-title mb-0">Desain dan Manajemen Jaringan Komputer</div>
                                                    <p class="lh-1 mb-0">
                                                        <span class="text-50 small">with</span>
                                                        <span class="text-50 small font-weight-bold">Fajar Milleano</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <p class="my-16pt text-70">Mempelajari tentag dasar-dasar dari desain dan manajemen jaringan komputer.</p>

                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                                    </div>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="<?php echo base_url() ?>student_take_course"
                                                       class="btn btn-primary">Start</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="mb-32pt">

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

                                </div>

                                <div class="page-separator">
                                    <div class="page-separator__text">Digilab Courses</div>
                                </div>

                                <div class="row card-group-row">

                                    <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <a href="kelas-siswa.html"
                                               class="card-img-top js-image"
                                               data-position=""
                                               data-height="140">
                                                <img src="<?php echo base_url() ?>assets/public/images/paths/digital_168.jpg"
                                                     alt="course">
                                                <span class="overlay__content">
                                                    <span class="overlay__action d-flex flex-column text-center">
                                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <div class="card-body flex">
                                                <div class="d-flex">
                                                    <div class="flex">
                                                        <a class="card-title"
                                                           href="kelas-siswa.html">Dasar Sistem Digital</a>
                                                        <small class="text-50 font-weight-bold mb-4pt">Hosea</small>
                                                    </div>
                                                    <a href="kelas-siswa.html"
                                                       data-toggle="tooltip"
                                                       data-title="Add Favorite"
                                                       data-placement="top"
                                                       data-boundary="window"
                                                       class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                                </div>

                                            </div>
                                            <div class="card-footer">
                                                <div class="row justify-content-between">
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popoverContainer d-none">
                                            <div class="media">
                                                <div class="media-left mr-12pt">
                                                    <img src="<?php echo base_url() ?>assets/public/images/paths/digital_80.jpg"
                                                         width="40"
                                                         height="40"
                                                         alt="Angular"
                                                         class="rounded">
                                                </div>
                                                <div class="media-body">
                                                    <div class="card-title mb-0">Dasar Sistem Digital</div>
                                                    <p class="lh-1 mb-0">
                                                        <span class="text-50 small">with</span>
                                                        <span class="text-50 small font-weight-bold">Hosea</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <p class="my-16pt text-70">Mempelajari tentang dasar-dasar sistem digital.</p>


                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                                    </div>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="<?php echo base_url() ?>student_take_course"
                                                       class="btn btn-primary">Start</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <a href="kelas-siswa.html"
                                               class="card-img-top js-image"
                                               data-position=""
                                               data-height="140">
                                                <img src="<?php echo base_url() ?>assets/public/images/paths/embedded_168.jpeg"
                                                     alt="course">
                                                <span class="overlay__content">
                                                    <span class="overlay__action d-flex flex-column text-center">
                                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <div class="card-body flex">
                                                <div class="d-flex">
                                                    <div class="flex">
                                                        <a class="card-title"
                                                           href="kelas-siswa.html">Perancangan Sistem Embedded</a>
                                                        <small class="text-50 font-weight-bold mb-4pt">Ridho Ghani</small>
                                                    </div>
                                                    <a href="kelas-siswa.html"
                                                       data-toggle="tooltip"
                                                       data-title="Add Favorite"
                                                       data-placement="top"
                                                       data-boundary="window"
                                                       class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                                </div>

                                            </div>
                                            <div class="card-footer">
                                                <div class="row justify-content-between">
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popoverContainer d-none">
                                            <div class="media">
                                                <div class="media-left mr-12pt">
                                                    <img src="<?php echo base_url() ?>assets/public/images/paths/embedded_80.jpeg"
                                                         width="40"
                                                         height="40"
                                                         alt="Angular"
                                                         class="rounded">
                                                </div>
                                                <div class="media-body">
                                                    <div class="card-title mb-0">Perancangan Sistem Tertanam</div>
                                                    <p class="lh-1 mb-0">
                                                        <span class="text-50 small">with</span>
                                                        <span class="text-50 small font-weight-bold">Ridho Ghani</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <p class="my-16pt text-70">Mempelajari tentang dasar-dasar dari perancangan sistem tertanam.</p>


                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                                    </div>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="<?php echo base_url() ?>student_take_course"
                                                       class="btn btn-primary">Start</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <a href="kelas-siswa.html"
                                               class="card-img-top js-image"
                                               data-position=""
                                               data-height="140">
                                                <img src="<?php echo base_url() ?>assets/public/images/paths/PSD_168.jpg"
                                                     alt="course">
                                                <span class="overlay__content">
                                                    <span class="overlay__action d-flex flex-column text-center">
                                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <div class="card-body flex">
                                                <div class="d-flex">
                                                    <div class="flex">
                                                        <a class="card-title"
                                                           href="kelas-siswa.html">Perancangan Sistem Digital</a>
                                                        <small class="text-50 font-weight-bold mb-4pt">Ridho Ghani</small>
                                                    </div>
                                                    <a href="kelas-siswa.html"
                                                       data-toggle="tooltip"
                                                       data-title="Add Favorite"
                                                       data-placement="top"
                                                       data-boundary="window"
                                                       class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                                </div>

                                            </div>
                                            <div class="card-footer">
                                                <div class="row justify-content-between">
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popoverContainer d-none">
                                            <div class="media">
                                                <div class="media-left mr-12pt">
                                                    <img src="<?php echo base_url() ?>assets/public/images/paths/PSD_80.jpg"
                                                         width="40"
                                                         height="40"
                                                         alt="Angular"
                                                         class="rounded">
                                                </div>
                                                <div class="media-body">
                                                    <div class="card-title mb-0">Perancangan Sistem Digital</div>
                                                    <p class="lh-1 mb-0">
                                                        <span class="text-50 small">with</span>
                                                        <span class="text-50 small font-weight-bold">Ridho Ghani</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <p class="my-16pt text-70">Mempelajari tentang perancangan suatu sistem digital.</p>


                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                                    </div>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="<?php echo base_url() ?>student_take_course"
                                                       class="btn btn-primary">Start</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-md-6 col-lg-4 col-xl-3 card-group-row__col">

                                        <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <a href="kelas-siswa.html"
                                               class="card-img-top js-image"
                                               data-position=""
                                               data-height="140">
                                                <img src="<?php echo base_url() ?>assets/public/images/paths/SBK_168.jpg"
                                                     alt="course">
                                                <span class="overlay__content">
                                                    <span class="overlay__action d-flex flex-column text-center">
                                                        <i class="material-icons icon-32pt">play_circle_outline</i>
                                                        <span class="card-title text-white">Preview</span>
                                                    </span>
                                                </span>
                                            </a>

                                            <div class="card-body flex">
                                                <div class="d-flex">
                                                    <div class="flex">
                                                        <a class="card-title"
                                                           href="kelas-siswa.html">Sistem Berbasis Komputer</a>
                                                        <small class="text-50 font-weight-bold mb-4pt">Ridho Ghani</small>
                                                    </div>
                                                    <a href="kelas-siswa.html"
                                                       data-toggle="tooltip"
                                                       data-title="Add Favorite"
                                                       data-placement="top"
                                                       data-boundary="window"
                                                       class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>
                                                </div>

                                            </div>
                                            <div class="card-footer">
                                                <div class="row justify-content-between">
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="col-auto d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="popoverContainer d-none">
                                            <div class="media">
                                                <div class="media-left mr-12pt">
                                                    <img src="<?php echo base_url() ?>assets/public/images/paths/SBK_80.jpg"
                                                         width="40"
                                                         height="40"
                                                         alt="Angular"
                                                         class="rounded">
                                                </div>
                                                <div class="media-body">
                                                    <div class="card-title mb-0">Sistem Berbasis Komputer</div>
                                                    <p class="lh-1 mb-0">
                                                        <span class="text-50 small">with</span>
                                                        <span class="text-50 small font-weight-bold">Ridho Ghani</span>
                                                    </p>
                                                </div>
                                            </div>

                                            <p class="my-16pt text-70">Mempelajari tentang dasa-dasar sistem berbasis komputer.</p>


                                            <div class="row align-items-center">
                                                <div class="col-auto">
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>6 hours</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-4pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">assessment</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>Beginner</small></p>
                                                    </div>
                                                </div>
                                                <div class="col text-right">
                                                    <a href="<?php echo base_url() ?>student_take_course"
                                                       class="btn btn-primary">Start</a>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>

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
                            </div>
                        </div>
                    </div>
                </div> 

            </div> 
            <!-- // END Header Layout Content -->

        </div>
        <!-- // END Header Layout -->

        <!-- Drawer -->

        <div class="mdk-drawer js-mdk-drawer"
             id="default-drawer">
            <div class="mdk-drawer__content">
                <div class="sidebar sidebar-dark-pickled-bluewood sidebar-left"
                     data-perfect-scrollbar>

                    <!-- Sidebar Content -->

                    <div class="d-flex align-items-center navbar-height">
                        <form action="index.html"
                              class="search-form search-form--black mx-16pt pr-0 pl-16pt">
                            <input type="text"
                                   class="form-control pl-0"
                                   placeholder="Search">
                            <button class="btn"
                                    type="submit"><i class="material-icons">search</i></button>
                        </form>
                    </div>

                    <a href="<?php echo base_url() ?>"
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
                               href="<?php echo base_url() ?>">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">home</span>
                                <span class="sidebar-menu-text">Beranda</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item active">
                            <a class="sidebar-menu-button"
                               href="<?php echo base_url() ?>courses">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">local_library</span>
                                <span class="sidebar-menu-text">Lihat Daftar Kelas</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="<?php echo base_url() ?>student-dashboard">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">style</span>
                                <span class="sidebar-menu-text">Student Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="<?php echo base_url() ?>student-my-courses">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">search</span>
                                <span class="sidebar-menu-text">My Courses</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="<?php echo base_url() ?>student_quiz_results">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">poll</span>
                                <span class="sidebar-menu-text">My Quizzes</span>
                            </a>
                        </li>
                    </ul>
                    <div class="sidebar-heading">Instructor</div>
                    <ul class="sidebar-menu">

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="<?php echo base_url() ?>instructor_courses">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">school</span>
                                <span class="sidebar-menu-text">Instructor Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="<?php echo base_url() ?>instructor_quizzes">
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