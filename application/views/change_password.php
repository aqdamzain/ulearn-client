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
        <title>Change Password</title>

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

                <div class="page-section pb-0">
                    <div class="container page__container d-flex flex-column flex-sm-row align-items-sm-center">
                        <div class="flex">
                            <h1 class="h2 mb-0">Change Password</h1>
                            <p class="text-breadcrumb">Account Management</p>
                        </div>
                        <p class="d-sm-none"></p>
                        <a href=""
                           class="btn btn-outline-secondary flex-column">
                            Need Help?
                            <span class="btn__secondary-text">Contact us</span>
                        </a>
                    </div>
                </div>

                <div class="page-section">
                    <div class="container page__container">
                        <div class="page-separator">
                            <div class="page-separator__text">Change Password</div>
                        </div>
                        <form action="login.html"
                              class="col-sm-5 p-0">
                            <div class="form-group">
                                <label class="form-label"
                                       for="password">Password:</label>
                                <input id="password"
                                       type="password"
                                       class="form-control"
                                       placeholder="Type a new password ...">
                            </div>
                            <div class="form-group">
                                <label class="form-label"
                                       for="password2">Confirm Password:</label>
                                <input id="password2"
                                       type="password"
                                       class="form-control"
                                       placeholder="Confirm your new password ...">
                            </div>
                            <button type="submit"
                                    class="btn btn-primary">Save password</button>
                        </form>
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

                    <a href="<?php echo base_url() ?>index"
                       class="sidebar-brand ">
                        <!-- <img class="sidebar-brand-icon" src="../../public/images/illustration/student/128/white.svg" alt="Luma"> -->

                        <span class="avatar avatar-xl sidebar-brand-icon h-auto">

                            <span class="avatar-title rounded bg-primary"><img src="<?php echo base_url() ?>assets/public/images/illustration/student/128/white.svg"
                                     class="img-fluid"
                                     alt="logo" /></span>

                        </span>

                        <span>Luma</span>
                    </a>

                    <div class="sidebar-heading">Applications</div>
                    <ul class="sidebar-menu">

                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button js-sidebar-collapse"
                               data-toggle="collapse"
                               href="#student_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">school</span>
                                Student
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="student_menu">

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="<?php echo base_url() ?>">

                                        <span class="sidebar-menu-text">Home</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="<?php echo base_url() ?>courses">

                                        <span class="sidebar-menu-text">Browse Courses</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="<?php echo base_url() ?>paths">

                                        <span class="sidebar-menu-text">Browse Paths</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="<?php echo base_url() ?>student_dashboard">

                                        <span class="sidebar-menu-text">Student Dashboard</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="<?php echo base_url() ?>student_my_courses">

                                        <span class="sidebar-menu-text">My Courses</span>
                                    </a>
                                </li>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="<?php echo base_url() ?>student_take_course">

                                        <span class="sidebar-menu-text">Take Course</span>
                                        <span class="sidebar-menu-badge badge badge-accent badge-notifications ml-auto">PRO</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="<?php echo base_url() ?>student_take_lesson">

                                        <span class="sidebar-menu-text">Take Lesson</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="<?php echo base_url() ?>student_take_quiz">

                                        <span class="sidebar-menu-text">Take Quiz</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="<?php echo base_url() ?>student_quiz_results">

                                        <span class="sidebar-menu-text">My Quizzes</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="<?php echo base_url() ?>student_quiz_result_details">

                                        <span class="sidebar-menu-text">Quiz Result</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button js-sidebar-collapse"
                               data-toggle="collapse"
                               href="#instructor_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">format_shapes</span>
                                Instructor
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse sm-indent"
                                id="instructor_menu">

                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="<?php echo base_url() ?>instructor_dashboard">

                                        <span class="sidebar-menu-text">Instructor Dashboard</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="<?php echo base_url() ?>instructor_courses">

                                        <span class="sidebar-menu-text">Manage Courses</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="<?php echo base_url() ?>instructor_quizzes">

                                        <span class="sidebar-menu-text">Manage Quizzes</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="<?php echo base_url() ?>instructor_edit_course">

                                        <span class="sidebar-menu-text">Edit Course</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="<?php echo base_url() ?>instructor_edit_quiz">

                                        <span class="sidebar-menu-text">Edit Quiz</span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="sidebar-menu-item active open">
                            <a class="sidebar-menu-button"
                               data-toggle="collapse"
                               href="#account_menu">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                                Account
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu collapse show sm-indent"
                                id="account_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="<?php echo base_url() ?>login">
                                        <span class="sidebar-menu-text">Login</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="<?php echo base_url() ?>signup">
                                        <span class="sidebar-menu-text">Signup</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="<?php echo base_url() ?>reset_password">
                                        <span class="sidebar-menu-text">Reset Password</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item active">
                                    <a class="sidebar-menu-button"
                                       href="<?php echo base_url() ?>change_password">
                                        <span class="sidebar-menu-text">Change Password</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button"
                                       href="<?php echo base_url() ?>edit_account">
                                        <span class="sidebar-menu-text">Edit Account</span>
                                    </a>
                                </li>
                            </ul>
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