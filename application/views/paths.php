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
        <title>Alur Belajar</title>

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
                                    <!--<a href="student-course.html"
                                       class="dropdown-item">Preview Course</a>
                                    <a href="student-lesson.html"
                                       class="dropdown-item">Preview Lesson</a>
                                    <a href="student-take-course.html"
                                       class="dropdown-item">Take Course</a>
                                    <a href="student-take-lesson.html"
                                       class="dropdown-item">Take Lesson</a>
                                    <a href="student-take-quiz.html"
                                       class="dropdown-item">Take Quiz</a>
                                    <a href="student-quiz-result-details.html"
                                       class="dropdown-item">Quiz Result</a>
                                    <a href="student-dashboard.html"
                                       class="dropdown-item">Student Dashboard</a>
                                    <a href="student-my-courses.html"
                                       class="dropdown-item">Kelas Saya</a>
                                    <a href="student-quiz-results.html"
                                       class="dropdown-item">My Quizzes</a>
                                    <a href="help-center.html"
                                       class="dropdown-item">Help Center</a>-->
                                </div>
                            </li>
                            <li class="nav-item dropdown active">
                                <a href="#"
                                   class="nav-link dropdown-toggle"
                                   data-toggle="dropdown"
                                   data-caret="false">Alur Belajar</a>
                                <div class="dropdown-menu">
                                    <a href="paths.html"
                                       class="dropdown-item">Lihat Daftar Alur Belajar</a>
                                    <!--<a href="student-path.html"
                                       class="dropdown-item">Path Details</a>
                                    <a href="student-path-assessment.html"
                                       class="dropdown-item">Skill Assessment</a>
                                    <a href="student-path-assessment-result.html"
                                       class="dropdown-item">Skill Result</a>
                                    <a href="student-paths.html"
                                       class="dropdown-item">Alur Belajar Saya</a>-->
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
                                    <!--<a href="instructor-edit-quiz.html"
                                       class="dropdown-item">Edit Quiz</a>-->
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
                                    <!--<a href="teachers.html"
                                       class="dropdown-item">Lihat Daftar Tutor</a>
                                    <a href="student-profile.html"
                                       class="dropdown-item">Student Profile</a>
                                    <a href="teacher-profile.html"
                                       class="dropdown-item">Instructor Profile</a>
                                    <a href="blog.html"
                                       class="dropdown-item">Blog</a>
                                    <a href="blog-post.html"
                                       class="dropdown-item">Blog Post</a>
                                    <a href="faq.html"
                                       class="dropdown-item">FAQ</a>
                                    <a href="help-center.html"
                                       class="dropdown-item">Help Center</a>
                                    <a href="discussions.html"
                                       class="dropdown-item">Discussions</a>
                                    <a href="discussion.html"
                                       class="dropdown-item">Discussion Details</a>
                                    <a href="discussions-ask.html"
                                       class="dropdown-item">Ask Question</a>-->
                                </div>
                            </li>
                        </ul>

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

                <div data-push
                     data-responsive-width="992px"
                     class="mdk-drawer-layout js-mdk-drawer-layout">
                    <div class="mdk-drawer-layout__content">

                        <div class="page-section">
                            <div class="container page__container">

                                <div class="d-flex flex-column flex-sm-row align-items-sm-center mb-24pt"
                                     style="white-space: nowrap;">
                                    <small class="flex text-muted text-headings text-uppercase mr-3 mb-2 mb-sm-0">Displaying 4 out of 10 paths</small>
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
                                    <div class="page-separator__text">Alur Belajar Jaringan</div>
                                </div>

                                <div class="row card-group-row mb-lg-8pt">

                                    <div class="col-sm-4 card-group-row__col">

                                        <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <div class="card-body d-flex flex-column">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex">
                                                        <div class="d-flex align-items-center">
                                                            <div class="rounded mr-12pt z-0 o-hidden">
                                                                <div class="overlay">
                                                                    <img src="<?php echo base_url() ?>assets/public/images/paths/cisco_80x80.jpg"
                                                                         width="40"
                                                                         height="40"
                                                                         alt="Angular"
                                                                         class="rounded">
                                                                    <span class="overlay__content overlay__content-transparent">
                                                                        <span class="overlay__action d-flex flex-column text-center lh-1">
                                                                            <small class="h6 small text-white mb-0"
                                                                                   style="font-weight: 500;">80%</small>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="flex">
                                                                <div class="card-title">CCNA</div>
                                                                <p class="flex text-50 lh-1 mb-0"><small>4 courses</small></p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="alur-belajar-siswa.html"
                                                       data-toggle="tooltip"
                                                       data-title="Add Favorite"
                                                       data-placement="top"
                                                       data-boundary="window"
                                                       class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

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
                                                    <div class="card-title">CCNA</div>
                                                    <p class="text-50 d-flex lh-1 mb-0 small">4 courses</p>
                                                </div>
                                            </div>

                                            <p class="mt-16pt text-70">Mempelajari tentang dasar-dasar jaringan dan manajemen jaringan</p>

                                            <div class="my-32pt">
                                                <div class="d-flex align-items-center mb-8pt justify-content-center">
                                                    <div class="d-flex align-items-center mr-8pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="alur-belajar-siswa.html"
                                                       class="btn btn-primary mr-8pt">Resume</a>
                                                    <a href="alur-belajar-siswa.html"
                                                       class="btn btn-outline-secondary ml-0">Start over</a>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <small class="text-50 mr-8pt">Your rating</small>
                                                <div class="rating mr-8pt">
                                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                    <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                                                </div>
                                                <small class="text-50">4/5</small>
                                            </div>
                                        </div>

                                    </div>
                                   
                                    <div class="col-sm-4 card-group-row__col">

                                        <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card"
                                             
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <div class="card-body d-flex flex-column">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex">
                                                        <div class="d-flex align-items-center">
                                                            <div class="rounded mr-12pt z-0 o-hidden">
                                                                <div class="overlay">
                                                                    <img src="<?php echo base_url() ?>assets/public/images/paths/kemjar_80x80.jpg"
                                                                         width="40"
                                                                         height="40"
                                                                         alt="Angular"
                                                                         class="rounded">
                                                                    <span class="overlay__content overlay__content-transparent">
                                                                        <span class="overlay__action d-flex flex-column text-center lh-1">
                                                                            <small class="h6 small text-white mb-0"
                                                                                   style="font-weight: 500;">80%</small>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="flex">
                                                                <div class="card-title">Keamanan Jaringan</div>
                                                                <p class="flex text-50 lh-1 mb-0"><small>4 courses</small></p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="alur-belajar-siswa.html"
                                                       data-toggle="tooltip"
                                                       data-title="Remove Favorite"
                                                       data-placement="top"
                                                       data-boundary="window"
                                                       class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>

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
                                                    <div class="card-title">Keamanan Jaringan</div>
                                                    <p class="text-50 d-flex lh-1 mb-0 small">4 courses</p>
                                                </div>
                                            </div>

                                            <p class="mt-16pt text-70">Mempelajari tentang dasar-dasar keamanan jaringan</p>

                                            <div class="my-32pt">
                                                <div class="d-flex align-items-center mb-8pt justify-content-center">
                                                    <div class="d-flex align-items-center mr-8pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="alur-belajar-siswa.html"
                                                       class="btn btn-primary mr-8pt">Resume</a>
                                                    <a href="alur-belajar-siswa.html"
                                                       class="btn btn-outline-secondary ml-0">Start over</a>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <small class="text-50 mr-8pt">Your rating</small>
                                                <div class="rating mr-8pt">
                                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                    <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                                                </div>
                                                <small class="text-50">4/5</small>
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
                                    <div class="page-separator__text">Alur Belajar Digital</div>
                                </div>

                                <div class="row card-group-row mb-lg-8pt">

                                    <div class="col-sm-4 card-group-row__col">

                                        <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <div class="card-body d-flex flex-column">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex">
                                                        <div class="d-flex align-items-center">
                                                            <div class="rounded mr-12pt z-0 o-hidden">
                                                                <div class="overlay">
                                                                    <img src="<?php echo base_url() ?>assets/public/images/paths/SBK_80.jpg"
                                                                         width="40"
                                                                         height="40"
                                                                         alt="Angular"
                                                                         class="rounded">
                                                                    <span class="overlay__content overlay__content-transparent">
                                                                        <span class="overlay__action d-flex flex-column text-center lh-1">
                                                                            <small class="h6 small text-white mb-0"
                                                                                   style="font-weight: 500;">80%</small>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="flex">
                                                                <div class="card-title">Sistem Berbasis Komputer</div>
                                                                <p class="flex text-50 lh-1 mb-0"><small>4 courses</small></p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="alur-belajar-siswa.html"
                                                       data-toggle="tooltip"
                                                       data-title="Add Favorite"
                                                       data-placement="top"
                                                       data-boundary="window"
                                                       class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

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
                                                    <div class="card-title">Sistem Berbaasis Komputer</div>
                                                    <p class="text-50 d-flex lh-1 mb-0 small">4 courses</p>
                                                </div>
                                            </div>

                                            <p class="mt-16pt text-70">Mempelajari tentang dasar-dasar sistem berbasis komputer</p>

                                            <div class="my-32pt">
                                                <div class="d-flex align-items-center mb-8pt justify-content-center">
                                                    <div class="d-flex align-items-center mr-8pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="alur-belajar-siswa.html"
                                                       class="btn btn-primary mr-8pt">Resume</a>
                                                    <a href="alur-belajar-siswa.html"
                                                       class="btn btn-outline-secondary ml-0">Start over</a>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <small class="text-50 mr-8pt">Your rating</small>
                                                <div class="rating mr-8pt">
                                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                    <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                                                </div>
                                                <small class="text-50">4/5</small>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-4 card-group-row__col">

                                        <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <div class="card-body d-flex flex-column">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex">
                                                        <div class="d-flex align-items-center">
                                                            <div class="rounded mr-12pt z-0 o-hidden">
                                                                <div class="overlay">
                                                                    <img src="<?php echo base_url() ?>assets/public/images/paths/digital_80.jpg"
                                                                         width="40"
                                                                         height="40"
                                                                         alt="Angular"
                                                                         class="rounded">
                                                                    <span class="overlay__content overlay__content-transparent">
                                                                        <span class="overlay__action d-flex flex-column text-center lh-1">
                                                                            <small class="h6 small text-white mb-0"
                                                                                   style="font-weight: 500;">80%</small>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="flex">
                                                                <div class="card-title">Sistem Digital</div>
                                                                <p class="flex text-50 lh-1 mb-0"><small>4 courses</small></p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="alur-belajar-siswa.html"
                                                       data-toggle="tooltip"
                                                       data-title="Add Favorite"
                                                       data-placement="top"
                                                       data-boundary="window"
                                                       class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

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
                                                    <div class="card-title">Sistem Digital</div>
                                                    <p class="text-50 d-flex lh-1 mb-0 small">4 courses</p>
                                                </div>
                                            </div>

                                            <p class="mt-16pt text-70">Mempelajari tentang ddasar-dasar hingga perancangan sistem digital</p>

                                            <div class="my-32pt">
                                                <div class="d-flex align-items-center mb-8pt justify-content-center">
                                                    <div class="d-flex align-items-center mr-8pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="alur-belajar-siswa.html"
                                                       class="btn btn-primary mr-8pt">Resume</a>
                                                    <a href="alur-belajar-siswa.html"
                                                       class="btn btn-outline-secondary ml-0">Start over</a>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <small class="text-50 mr-8pt">Your rating</small>
                                                <div class="rating mr-8pt">
                                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                    <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                                                </div>
                                                <small class="text-50">4/5</small>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-sm-4 card-group-row__col">

                                        <div class="card js-overlay card-sm overlay--primary-dodger-blue stack stack--1 card-group-row__card"
                                             data-toggle="popover"
                                             data-trigger="click">

                                            <div class="card-body d-flex flex-column">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex">
                                                        <div class="d-flex align-items-center">
                                                            <div class="rounded mr-12pt z-0 o-hidden">
                                                                <div class="overlay">
                                                                    <img src="<?php echo base_url() ?>assets/public/images/paths/embedded_80.jpeg"
                                                                         width="40"
                                                                         height="40"
                                                                         alt="Angular"
                                                                         class="rounded">
                                                                    <span class="overlay__content overlay__content-transparent">
                                                                        <span class="overlay__action d-flex flex-column text-center lh-1">
                                                                            <small class="h6 small text-white mb-0"
                                                                                   style="font-weight: 500;">80%</small>
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="flex">
                                                                <div class="card-title">Sistem Embedded</div>
                                                                <p class="flex text-50 lh-1 mb-0"><small>4 courses</small></p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="alur-belajar-siswa.html"
                                                       data-toggle="tooltip"
                                                       data-title="Add Favorite"
                                                       data-placement="top"
                                                       data-boundary="window"
                                                       class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite_border</a>

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
                                                    <div class="card-title">Sistem Tertanam</div>
                                                    <p class="text-50 d-flex lh-1 mb-0 small">4 courses</p>
                                                </div>
                                            </div>

                                            <p class="mt-16pt text-70">Mempelajari tentang ddasar-dasar hingga perancangan sistem tertanam</p>

                                            <div class="my-32pt">
                                                <div class="d-flex align-items-center mb-8pt justify-content-center">
                                                    <div class="d-flex align-items-center mr-8pt">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">access_time</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>50 minutes left</small></p>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="material-icons icon-16pt text-50 mr-4pt">play_circle_outline</span>
                                                        <p class="flex text-50 lh-1 mb-0"><small>12 lessons</small></p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <a href="alur-belajar-siswa.html"
                                                       class="btn btn-primary mr-8pt">Resume</a>
                                                    <a href="alur-belajar-siswa.html"
                                                       class="btn btn-outline-secondary ml-0">Start over</a>
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <small class="text-50 mr-8pt">Your rating</small>
                                                <div class="rating mr-8pt">
                                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                    <span class="rating__item"><span class="material-icons text-primary">star</span></span>
                                                    <span class="rating__item"><span class="material-icons text-primary">star_border</span></span>
                                                </div>
                                                <small class="text-50">4/5</small>
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

                    <!--<div class="mdk-drawer js-mdk-drawer "
                         id="library-drawer"
                         data-align="end">
                        <div class="mdk-drawer__content top-navbar">
                            <div class="sidebar sidebar-light sidebar-right py-16pt"
                                 data-perfect-scrollbar
                                 data-perfect-scrollbar-wheel-propagation="true">

                                <div class="d-flex align-items-center mb-24pt  d-lg-none">
                                    <form action="index.html"
                                          class="search-form search-form--light mx-16pt pr-0 pl-16pt">
                                        <input type="text"
                                               class="form-control pl-0"
                                               placeholder="Search">
                                        <button class="btn"
                                                type="submit"><i class="material-icons">search</i></button>
                                    </form>
                                </div>

                                <div class="sidebar-heading">Category</div>
                                <ul class="sidebar-menu">
                                    <li class="sidebar-menu-item active">
                                        <a href=""
                                           class="sidebar-menu-button">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">code</span>
                                            <span class="sidebar-menu-text">Web Development</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a href=""
                                           class="sidebar-menu-button">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">brush</span>
                                            <span class="sidebar-menu-text">Design</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a href=""
                                           class="sidebar-menu-button">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">settings_cell</span>
                                            <span class="sidebar-menu-text">iOS &amp; Swift</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a href=""
                                           class="sidebar-menu-button">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">android</span>
                                            <span class="sidebar-menu-text">Android</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a href=""
                                           class="sidebar-menu-button">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">business_center</span>
                                            <span class="sidebar-menu-text">Business</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a href=""
                                           class="sidebar-menu-button">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">crop_original</span>
                                            <span class="sidebar-menu-text">Photography</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a href=""
                                           class="sidebar-menu-button">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">payment</span>
                                            <span class="sidebar-menu-text">Marketing</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a href=""
                                           class="sidebar-menu-button">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">store</span>
                                            <span class="sidebar-menu-text">eCommerce</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a href=""
                                           class="sidebar-menu-button">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">redeem</span>
                                            <span class="sidebar-menu-text">Health &amp; Fitness</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item">
                                        <a href=""
                                           class="sidebar-menu-button">
                                            <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">music_note</span>
                                            <span class="sidebar-menu-text">Music</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="sidebar-heading">Platform</div>
                                <div class="sidebar-block">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input"
                                                   type="checkbox"
                                                   value=""
                                                   id="filtersCheck01"
                                                   checked="">
                                            <label class="custom-control-label"
                                                   for="filtersCheck01">All</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input"
                                                   type="checkbox"
                                                   value=""
                                                   id="filtersCheck02">
                                            <label class="custom-control-label"
                                                   for="filtersCheck02">Archive</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input"
                                                   type="checkbox"
                                                   value=""
                                                   id="filtersCheck06">
                                            <label class="custom-control-label"
                                                   for="filtersCheck06">Unity</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input"
                                                   type="checkbox"
                                                   value=""
                                                   id="filtersCheck03">
                                            <label class="custom-control-label"
                                                   for="filtersCheck03">Web</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input"
                                                   type="checkbox"
                                                   value=""
                                                   id="filtersCheck04">
                                            <label class="custom-control-label"
                                                   for="filtersCheck04">iOS &amp; Swift</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input"
                                                   type="checkbox"
                                                   value=""
                                                   id="filtersCheck05">
                                            <label class="custom-control-label"
                                                   for="filtersCheck05">Android</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebar-heading">Subscription</div>
                                <div class="sidebar-block">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input"
                                                   type="checkbox"
                                                   value=""
                                                   id="filtersCheck07"
                                                   checked="">
                                            <label class="custom-control-label"
                                                   for="filtersCheck07">All</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input"
                                                   type="checkbox"
                                                   value=""
                                                   id="filtersCheck08">
                                            <label class="custom-control-label"
                                                   for="filtersCheck08">Free</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input"
                                                   type="checkbox"
                                                   value=""
                                                   id="filtersCheck09">
                                            <label class="custom-control-label"
                                                   for="filtersCheck09">Beginner</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input"
                                                   type="checkbox"
                                                   value=""
                                                   id="filtersCheck10">
                                            <label class="custom-control-label"
                                                   for="filtersCheck10">Advanced</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="sidebar-heading">Content type</div>
                                <div class="sidebar-block">
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input"
                                                   type="checkbox"
                                                   value=""
                                                   id="filtersCheck11"
                                                   checked="">
                                            <label class="custom-control-label"
                                                   for="filtersCheck11">All</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input"
                                                   type="checkbox"
                                                   value=""
                                                   id="filtersCheck12">
                                            <label class="custom-control-label"
                                                   for="filtersCheck12">Episode</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input"
                                                   type="checkbox"
                                                   value=""
                                                   id="filtersCheck13">
                                            <label class="custom-control-label"
                                                   for="filtersCheck13">Video</label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input"
                                                   type="checkbox"
                                                   value=""
                                                   id="filtersCheck14">
                                            <label class="custom-control-label"
                                                   for="filtersCheck14">Article</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input"
                                                   type="checkbox"
                                                   value=""
                                                   id="filtersCheck15">
                                            <label class="custom-control-label"
                                                   for="filtersCheck15">Book</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input"
                                                   type="checkbox"
                                                   value=""
                                                   id="filtersCheck16">
                                            <label class="custom-control-label"
                                                   for="filtersCheck16">Screencast</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>-->

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
                   <li class="sidebar-menu-item active">
                       <a class="sidebar-menu-button"
                          href="paths.html">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">style</span>
                           <span class="sidebar-menu-text">Lihat Daftar Alur Belajar</span>
                       </a>
                   </li>
                   <li class="sidebar-menu-item">
                       <!--<a class="sidebar-menu-button"
                          href="student-dashboard.html">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">account_box</span>
                           <span class="sidebar-menu-text">Student Dashboard</span>
                       </a>-->
                   </li>
                   <li class="sidebar-menu-item">
                       <!--<a class="sidebar-menu-button"
                          href="student-my-courses.html">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">search</span>
                           <span class="sidebar-menu-text">My Courses</span>
                       </a>-->
                   </li>
                   <li class="sidebar-menu-item">
                       <!--<a class="sidebar-menu-button"
                          href="student-paths.html">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">timeline</span>
                           <span class="sidebar-menu-text">My Paths</span>
                       </a>-->
                   </li>
                   <li class="sidebar-menu-item">
                       <!--<a class="sidebar-menu-button"
                          href="student-path.html">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">change_history</span>
                           <span class="sidebar-menu-text">Path Details</span>
                       </a>-->
                   </li>
                   <li class="sidebar-menu-item">
                       <!--<a class="sidebar-menu-button"
                          href="student-course.html">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">face</span>
                           <span class="sidebar-menu-text">Course Preview</span>
                       </a>-->
                   </li>
                   <li class="sidebar-menu-item">
                       <!--<a class="sidebar-menu-button"
                          href="student-lesson.html">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">panorama_fish_eye</span>
                           <span class="sidebar-menu-text">Lesson Preview</span>
                       </a>-->
                   </li>
                   <li class="sidebar-menu-item">
                       <!--<a class="sidebar-menu-button"
                          href="student-take-course.html">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">class</span>
                           <span class="sidebar-menu-text">Take Course</span>
                           <span class="sidebar-menu-badge badge badge-accent badge-notifications ml-auto">PRO</span>
                       </a>-->
                   </li>
                   <li class="sidebar-menu-item">
                       <!--<a class="sidebar-menu-button"
                          href="student-take-lesson.html">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">import_contacts</span>
                           <span class="sidebar-menu-text">Take Lesson</span>
                       </a>-->
                   </li>
                   <li class="sidebar-menu-item">
                       <!--<a class="sidebar-menu-button"
                          href="student-take-quiz.html">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">dvr</span>
                           <span class="sidebar-menu-text">Take Quiz</span>
                       </a>-->
                   </li>
                   <li class="sidebar-menu-item">
                       <!--<a class="sidebar-menu-button"
                          href="student-quiz-results.html">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">poll</span>
                           <span class="sidebar-menu-text">My Quizzes</span>
                       </a>-->
                   </li>
                   <li class="sidebar-menu-item">
                       <!--<a class="sidebar-menu-button"
                          href="student-quiz-result-details.html">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">live_help</span>
                           <span class="sidebar-menu-text">Quiz Result</span>
                       </a>-->
                   </li>
                   <li class="sidebar-menu-item">
                       <!--<a class="sidebar-menu-button"
                          href="student-path-assessment.html">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">layers</span>
                           <span class="sidebar-menu-text">Skill Assessment</span>
                       </a>-->
                   </li>
                   <li class="sidebar-menu-item">
                       <!--<a class="sidebar-menu-button"
                          href="student-path-assessment-result.html">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">assignment_turned_in</span>
                           <span class="sidebar-menu-text">Skill Result</span>
                       </a>-->
                   </li>

               </ul>
               <div class="sidebar-heading">Instructor</div>
               <!--<ul class="sidebar-menu">

                   <li class="sidebar-menu-item">
                       <a class="sidebar-menu-button"
                          href="instructor-dashboard.html">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">school</span>
                           <span class="sidebar-menu-text">Instructor Dashboard</span>
                       </a>
                   </li>
                   <li class="sidebar-menu-item">
                       <a class="sidebar-menu-button"
                          href="instructor-courses.html">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">import_contacts</span>
                           <span class="sidebar-menu-text">Manage Courses</span>
                       </a>
                   </li>
                   <li class="sidebar-menu-item">
                       <a class="sidebar-menu-button"
                          href="instructor-quizzes.html">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">help</span>
                           <span class="sidebar-menu-text">Manage Quizzes</span>
                       </a>
                   </li>
                   <li class="sidebar-menu-item">
                       <a class="sidebar-menu-button"
                          href="instructor-earnings.html">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">trending_up</span>
                           <span class="sidebar-menu-text">Earnings</span>
                       </a>
                   </li>
                   <li class="sidebar-menu-item">
                       <a class="sidebar-menu-button"
                          href="instructor-statement.html">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">receipt</span>
                           <span class="sidebar-menu-text">Statement</span>
                       </a>
                   </li>
                   <li class="sidebar-menu-item">
                       <a class="sidebar-menu-button"
                          href="instructor-edit-course.html">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">post_add</span>
                           <span class="sidebar-menu-text">Edit Course</span>
                       </a>
                   </li>
                   <li class="sidebar-menu-item">
                       <a class="sidebar-menu-button"
                          href="instructor-edit-quiz.html">
                           <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">format_shapes</span>
                           <span class="sidebar-menu-text">Edit Quiz</span>
                       </a>
                   </li>

               </ul>-->
               
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