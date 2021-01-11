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
        <title>Discussion</title>

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
                            <li class="nav-item dropdown">
                                <a href="#"
                                   class="nav-link dropdown-toggle"
                                   data-toggle="dropdown"
                                   data-caret="false">Kelas</a>
                                <div class="dropdown-menu">
                                    <a href="<?php echo base_url() ?>courses"
                                       class="dropdown-item">Lihat Daftar Kelas</a>
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
                                    <a href="<?php echo base_url() ?>discussions"
                                       class="dropdown-item">Discussions</a>
                                    <a href="<?php echo base_url() ?>discussion"
                                       class="dropdown-item active">Discussion Details</a>
                                    <a href="<?php echo base_url() ?>discussions_ask"
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

                <div class="container page__container">
                    <div class="page-section">

                        <div class="row">
                            <div class="col-md-8">

                                <h1 class="h2 measure-lead-max mb-2">Apa keunggulan dari ESP32 dan ESP8266?</h1>
                                <p class="text-muted d-flex align-items-center mb-lg-32pt">
                                    <a href="<?php echo base_url() ?>discussions"
                                       class="mr-3">Back to Community</a>
                                    <a href="#"
                                       class="mr-2 text-50">Mute</a>
                                    <a href="#"
                                       class="mr-2 text-50">Report</a>
                                    <a href="#"
                                       class="text-50"
                                       style="text-decoration: underline;">Edit</a>
                                </p>

                                <div class="card card-body">
                                    <div class="d-flex">
                                        <a href=""
                                           class="avatar avatar-sm avatar-online mr-12pt">
                                            <!-- <img src="../../public/images/people/256/256_rsz_nicolas-horn-689011-unsplash.jpg" alt="people" class="avatar-img rounded-circle"> -->
                                            <span class="avatar-title rounded-circle">MK</span>
                                        </a>
                                        <div class="flex">
                                            <p class="d-flex align-items-center mb-2">
                                                <a href=""
                                                   class="text-body mr-2"><strong>Muhammad Koku</strong></a>
                                                <small class="text-muted">2 min ago</small>
                                            </p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores beatae quisquam iste maiores libero, corrupti totam saepe itaque quidem perspiciatis?</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos culpa commodi consequuntur! Optio labore corporis quo a quia, incidunt unde soluta velit ad, eius exercitationem sequi ab laborum! Nostrum voluptate earum sit aperiam quaerat unde, vel excepturi quisquam nihil reprehenderit in minus laudantium eligendi odio iusto nemo, aspernatur, optio soluta!</p>
                                            <div class="d-flex align-items-center">
                                                <a href=""
                                                   class="text-50 d-flex align-items-center text-decoration-0"><i class="material-icons mr-1"
                                                       style="font-size: inherit;">favorite_border</i> 30</a>
                                                <a href=""
                                                   class="text-50 d-flex align-items-center text-decoration-0 ml-3"><i class="material-icons mr-1"
                                                       style="font-size: inherit;">thumb_up</i> 130</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex mb-4">
                                    <a href=""
                                       class="avatar avatar-sm mr-12pt">
                                        <!-- <img src="../../public/images/people/50/guy-6.jpg" alt="people" class="avatar-img rounded-circle"> -->
                                        <span class="avatar-title rounded-circle">AZ</span>
                                    </a>
                                    <div class="flex">
                                        <div class="form-group">
                                            <label for="comment"
                                                   class="form-label">Your reply</label>
                                            <textarea class="form-control"
                                                      name="comment"
                                                      id="comment"
                                                      rows="3"
                                                      placeholder="Type here to reply to Matney ..."></textarea>
                                        </div>
                                        <button class="btn btn-outline-secondary">Post comment</button>
                                    </div>
                                </div>
                                <div class="pt-3">
                                    <h4>2 Comments</h4>
                                    <div class="d-flex mb-3">
                                        <a href=""
                                           class="avatar avatar-sm mr-12pt">
                                            <!-- <img src="../../public/images/people/256/256_rsz_karl-s-973833-unsplash.jpg" alt="people" class="avatar-img rounded-circle"> -->
                                            <span class="avatar-title rounded-circle">JF</span>
                                        </a>
                                        <div class="flex">
                                            <a href=""
                                               class="text-body"><strong>Januar Firmansyah</strong></a><br>
                                            <p class="mt-1 text-70">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero neque magnam modi corrupti in aliquid odit eligendi pariatur! Ad consequatur illo voluptates, dignissimos tenetur odit magni excepturi! Nesciunt, fuga, vel.</p>
                                            <div class="d-flex align-items-center">
                                                <small class="text-50 mr-2">27 min ago</small>
                                                <a href=""
                                                   class="text-50"><small>Liked</small></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="ml-sm-32pt mt-3 card p-3">
                                        <div class="d-flex">
                                            <a href="#"
                                               class="avatar avatar-sm mr-12pt">
                                                <!-- <img src="../../public/images/people/110/guy-6.jpg" alt="Guy" class="avatar-img rounded-circle"> -->
                                                <span class="avatar-title rounded-circle">FM</span>
                                            </a>
                                            <div class="flex">
                                                <div class="d-flex align-items-center">
                                                    <a href=""
                                                       class="text-body"><strong>Faiz Mumtaz</strong></a>
                                                    <small class="ml-auto text-muted">just now</small>
                                                </div>
                                                <p class="mt-1 text-70">Hi Januar,<br> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero neque magnam modi corrupti in aliquid odit eligendi pariatur! Ad consequatur illo voluptates, dignissimos tenetur odit magni excepturi! Nesciunt, fuga, vel.</p>

                                                <div class="d-flex align-items-center">
                                                    <a href=""
                                                       class="text-50 d-flex align-items-center text-decoration-0"><i class="material-icons mr-1"
                                                           style="font-size: inherit;">favorite_border</i> 3</a>
                                                    <a href=""
                                                       class="text-50 d-flex align-items-center text-decoration-0 ml-3"><i class="material-icons mr-1"
                                                           style="font-size: inherit;">thumb_up</i> 13</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="<?php echo base_url() ?>courses">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">local_library</span>
                                <span class="sidebar-menu-text">Lihat Daftar Kelas</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="<?php echo base_url() ?>student_dashboard">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">style</span>
                                <span class="sidebar-menu-text">Student Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button"
                               href="<?php echo base_url() ?>student_my_courses">
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