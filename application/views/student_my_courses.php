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
        <title>Courses</title>

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

                <div class="pt-32pt">
                    <div class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
                        <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                            <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                                <h2 class="mb-0">Courses</h2>

                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                                    <li class="breadcrumb-item active">

                                        Courses

                                    </li>

                                </ol>

                            </div>
                        </div>

                       

                    </div>
                </div>
                <div class="container page__container">
                    <div class="page-section">
                        <div class="page-separator">
                            <div class="page-separator__text">Digilab Courses</div>
                        </div>

                        <div class="row card-group-row">

                            <div class="col-lg-3 card-group-row__col">

                                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                     data-toggle="popover"
                                     data-trigger="click">

                                    <a href="student-take-course.html"
                                       class="card-img-top js-image"
                                       data-position=""
                                       data-height="140">
                                        <img src="<?php echo base_url() ?>assets/public/images/paths/digital_168.jpg"
                                             alt="course">
                                        <span class="overlay__content">
                                            <span class="overlay__action d-flex flex-column text-center">
                                                <i class="material-icons icon-32pt">play_circle_outline</i>
                                                <span class="card-title text-white">Resume</span>
                                            </span>
                                        </span>
                                    </a>

                                    <span class="corner-ribbon corner-ribbon--default-right-top corner-ribbon--shadow bg-accent text-white">NEW</span>

                                    <div class="card-body flex">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title"
                                                   href="student-take-course.html">Dasar Sistem Digital</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Hosea</small>
                                            </div>
                                            <a href="student-take-course.html"
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
                                            <a href="student-take-lesson.html"
                                               class="btn btn-primary mr-8pt">Resume</a>
                                            <a href="student-take-course.html"
                                               class="btn btn-outline-secondary ml-0">Start over</a>
                                        </div>
                                    </div>

                                    

                                </div>

                            </div>

                            <div class="col-lg-3 card-group-row__col">

                                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                     data-toggle="popover"
                                     data-trigger="click">

                                    <a href="student-take-course.html"
                                       class="card-img-top js-image"
                                       data-position=""
                                       data-height="140">
                                        <img src="<?php echo base_url() ?>assets/public/images/paths/embedded_168.jpeg"
                                             alt="course">
                                        <span class="overlay__content">
                                            <span class="overlay__action d-flex flex-column text-center">
                                                <i class="material-icons icon-32pt">play_circle_outline</i>
                                                <span class="card-title text-white">Resume</span>
                                            </span>
                                        </span>
                                    </a>

                                    <div class="card-body flex">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title"
                                                   href="student-take-course.html">Perancangan Sistem Tertanam</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Ridho Ghani</small>
                                            </div>
                                            <a href="student-take-course.html"
                                               data-toggle="tooltip"
                                               data-title="Remove Favorite"
                                               data-placement="top"
                                               data-boundary="window"
                                               class="ml-4pt material-icons text-20 card-course__icon-favorite">favorite</a>
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
                                            <img src="<?php echo base_url() ?>assets/public/images/paths/embedded_168.jpeg"
                                                 width="40"
                                                 height="40"
                                                 alt="Angular"
                                                 class="rounded">
                                        </div>
                                        <div class="media-body">
                                            <div class="card-title mb-0">Perancangan Sistem Embedded</div>
                                            <p class="lh-1 mb-0">
                                                <span class="text-50 small">with</span>
                                                <span class="text-50 small font-weight-bold">Ridho Ghani</span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="my-16pt text-70">Mempelajari tentang dasar-dasar dari perancangan sistem tertanam.</p>


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
                                            <a href="student-take-lesson.html"
                                               class="btn btn-primary mr-8pt">Resume</a>
                                            <a href="student-take-course.html"
                                               class="btn btn-outline-secondary ml-0">Start over</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-3 card-group-row__col">

                                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                     data-toggle="popover"
                                     data-trigger="click">

                                    <a href="student-take-course.html"
                                       class="card-img-top js-image"
                                       data-position=""
                                       data-height="140">
                                        <img src="<?php echo base_url() ?>assets/public/images/paths/PSD_168.jpg"
                                             alt="course">
                                        <span class="overlay__content">
                                            <span class="overlay__action d-flex flex-column text-center">
                                                <i class="material-icons icon-32pt">play_circle_outline</i>
                                                <span class="card-title text-white">Resume</span>
                                            </span>
                                        </span>
                                    </a>

                                    <div class="card-body flex">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title"
                                                   href="student-take-course.html">Perancangan Sistem Digital</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Ridho Ghani</small>
                                            </div>
                                            <a href="student-take-course.html"
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
                                                <span class="text-50 small font-weight-bold">Elijah Murray</span>
                                            </p>
                                        </div>
                                    </div>

                                    <p class="my-16pt text-70">Mempelajari tentang perancangan suatu sistem digital.</p>


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
                                            <a href="student-take-lesson.html"
                                               class="btn btn-primary mr-8pt">Resume</a>
                                            <a href="student-take-course.html"
                                               class="btn btn-outline-secondary ml-0">Start over</a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-3 card-group-row__col">

                                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                     data-toggle="popover"
                                     data-trigger="click">

                                    <a href="student-take-course.html"
                                       class="card-img-top js-image"
                                       data-position="left"
                                       data-height="140">
                                        <img src="<?php echo base_url() ?>assets/public/images/paths/SBK_168.jpg"
                                             alt="course">
                                        <span class="overlay__content">
                                            <span class="overlay__action d-flex flex-column text-center">
                                                <i class="material-icons icon-32pt">play_circle_outline</i>
                                                <span class="card-title text-white">Resume</span>
                                            </span>
                                        </span>
                                    </a>

                                    <div class="card-body flex">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title"
                                                   href="student-take-course.html">Sistem Berbasis Komputer</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Ridho Ghani</small>
                                            </div>
                                            <a href="student-take-course.html"
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
                                            <a href="student-take-lesson.html"
                                               class="btn btn-primary mr-8pt">Resume</a>
                                            <a href="student-take-course.html"
                                               class="btn btn-outline-secondary ml-0">Start over</a>
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

                            <div class="col-lg-3 card-group-row__col">

                                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                     data-toggle="popover"
                                     data-trigger="click">

                                    <a href="student-take-course.html"
                                       class="card-img-top js-image"
                                       data-position=""
                                       data-height="140">
                                        <img src="<?php echo base_url() ?>assets/public/images/paths/cisco_168.jpg"
                                             alt="course">
                                        <span class="overlay__content">
                                            <span class="overlay__action d-flex flex-column text-center">
                                                <i class="material-icons icon-32pt">play_circle_outline</i>
                                                <span class="card-title text-white">Resume</span>
                                            </span>
                                        </span>
                                    </a>

                                    <div class="card-body flex">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title"
                                                   href="student-take-course.html">CCNA Routing Switching 1 dan 2</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Fajar Milleano</small>
                                            </div>
                                            <a href="student-take-course.html"
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

                                    <p class="my-16pt text-70">Mempelajari tentang dasar-dasar routing dan switching cisco.</p>

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
                                            <a href="student-take-lesson.html"
                                               class="btn btn-primary mr-8pt">Resume</a>
                                            <a href="student-take-course.html"
                                               class="btn btn-outline-secondary ml-0">Start over</a>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-3 card-group-row__col">

                                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                     data-toggle="popover"
                                     data-trigger="click">

                                    <a href="student-take-course.html"
                                       class="card-img-top js-image"
                                       data-position=""
                                       data-height="140">
                                        <img src="<?php echo base_url() ?>assets/public/images/paths/kemjar_168.jpg"
                                             alt="course">
                                        <span class="overlay__content">
                                            <span class="overlay__action d-flex flex-column text-center">
                                                <i class="material-icons icon-32pt">play_circle_outline</i>
                                                <span class="card-title text-white">Resume</span>
                                            </span>
                                        </span>
                                    </a>

                                    <div class="card-body flex">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title"
                                                   href="student-take-course.html">Keamanan Jaringan Komputer</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Fajar Milleano</small>
                                            </div>
                                            <a href="student-take-course.html"
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
                                            <a href="student-take-lesson.html"
                                               class="btn btn-primary mr-8pt">Resume</a>
                                            <a href="student-take-course.html"
                                               class="btn btn-outline-secondary ml-0">Start over</a>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-3 card-group-row__col">

                                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                     data-toggle="popover"
                                     data-trigger="click">

                                    <a href="student-take-course.html"
                                       class="card-img-top js-image"
                                       data-position=""
                                       data-height="140">
                                        <img src="<?php echo base_url() ?>assets/public/images/paths/sbd_168.jpg"
                                             alt="course">
                                        <span class="overlay__content">
                                            <span class="overlay__action d-flex flex-column text-center">
                                                <i class="material-icons icon-32pt">play_circle_outline</i>
                                                <span class="card-title text-white">Resume</span>
                                            </span>
                                        </span>
                                    </a>

                                    <div class="card-body flex">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title"
                                                   href="student-take-course.html">Sistem Basis Data</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Fajar Milleano</small>
                                            </div>
                                            <a href="student-take-course.html"
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
                                            <a href="student-take-lesson.html"
                                               class="btn btn-primary mr-8pt">Resume</a>
                                            <a href="student-take-course.html"
                                               class="btn btn-outline-secondary ml-0">Start over</a>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-3 card-group-row__col">

                                <div class="card card-sm card--elevated p-relative o-hidden overlay overlay--primary-dodger-blue js-overlay card-group-row__card"
                                     data-toggle="popover"
                                     data-trigger="click">

                                    <a href="student-take-course.html"
                                       class="card-img-top js-image"
                                       data-position=""
                                       data-height="140">
                                        <img src="<?php echo base_url() ?>assets/public/images/paths/dmj_168.jpg"
                                             alt="course">
                                        <span class="overlay__content">
                                            <span class="overlay__action d-flex flex-column text-center">
                                                <i class="material-icons icon-32pt">play_circle_outline</i>
                                                <span class="card-title text-white">Resume</span>
                                            </span>
                                        </span>
                                    </a>

                                    <div class="card-body flex">
                                        <div class="d-flex">
                                            <div class="flex">
                                                <a class="card-title"
                                                   href="student-take-course.html">Desain dan Manajemen Jaringan Komputer</a>
                                                <small class="text-50 font-weight-bold mb-4pt">Fajar Milleano</small>
                                            </div>
                                            <a href="student-take-course.html"
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
                                            <a href="student-take-lesson.html"
                                               class="btn btn-primary mr-8pt">Resume</a>
                                            <a href="student-take-course.html"
                                               class="btn btn-outline-secondary ml-0">Start over</a>
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