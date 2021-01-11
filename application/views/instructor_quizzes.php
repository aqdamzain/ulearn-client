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
        <title>Quizzes</title>

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

                        <a href="<?php echo base_url() ?>"
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
                                <a href="<?php echo base_url() ?>"
                                   class="nav-link">Beranda</a>
                            </li>
                            <li class="nav-item dropdown active">
                                <a href="#"
                                   class="nav-link dropdown-toggle"
                                   data-toggle="dropdown"
                                   data-caret="false">Tutor</a>
                                <div class="dropdown-menu">
                                    <a href="<?php echo base_url() ?>instructor_courses"
                                       class="dropdown-item">Instructor Dashboard</a>
                                    <a href="<?php echo base_url() ?>instructor_quizzes"
                                       class="dropdown-item active">Manage Quiz</a>
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
                                       href="<?php echo base_url() ?>edit_account">Edit Account</a>
                                    <a class="dropdown-item"
                                       href="<?php echo base_url() ?>login">Logout</a>
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
                                <h2 class="mb-0">Quizzes</h2>

                                <ol class="breadcrumb p-0 m-0">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>instructor_courses">Home</a></li>

                                    <li class="breadcrumb-item active">

                                        Quizzes

                                    </li>

                                </ol>

                            </div>
                        </div>

                        <div class="row"
                             role="tablist">
                            <div class="col-auto">
                                <a href="<?php echo base_url() ?>instructor_edit_quiz"
                                   class="btn btn-outline-secondary">Add Quiz</a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="container page__container page-section">

                    <div class="row card-group-row">

                        <div class="card-group-row__col col-md-6">
                            <div class="card card-group-row__card card-sm">
                                <div class="card-body d-flex align-items-center">
                                    <a href="<?php echo base_url() ?>instructor_edit_quiz"
                                       class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                                        <img src="<?php echo base_url() ?>assets/public/images/paths/digital_168.jpg"
                                             alt="Dasar Sistem Digital"
                                             class="avatar-img rounded">
                                        <span class="overlay__content"></span>
                                    </a>
                                    <div class="flex">
                                        <a class="card-title"
                                           href="<?php echo base_url() ?>instructor_edit_quiz">Dasar Sistem Digital</a>
                                        <div class="card-subtitle text-50">15 completed</div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
                                        <div class="flex mr-2">
                                            <a href="#"
                                               class="btn btn-light btn-sm">
                                                <i class="material-icons icon--left">playlist_add_check</i> Review
                                                <span class="badge badge-dark badge-notifications ml-2">5</span>
                                            </a>
                                        </div>

                                        <div class="dropdown">
                                            <a href="#"
                                               data-toggle="dropdown"
                                               data-caret="false"
                                               class="text-muted"><i class="material-icons">more_horiz</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0)"
                                                   class="dropdown-item">Review Quiz</a>
                                                <a href="instructor-edit-quiz.html"
                                                   class="dropdown-item">Edit Quiz</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0)"
                                                   class="dropdown-item text-danger">Delete Quiz</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-group-row__col col-md-6">
                            <div class="card card-group-row__card card-sm">
                                <div class="card-body d-flex align-items-center">
                                    <a href="<?php echo base_url() ?>instructor_edit_quiz"
                                       class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                                        <img src="<?php echo base_url() ?>assets/public/images/paths/kemjar_168.jpg"
                                             alt="Keamanan Jaringan Komputer"
                                             class="avatar-img rounded">
                                        <span class="overlay__content"></span>
                                    </a>
                                    <div class="flex">
                                        <a class="card-title"
                                           href="<?php echo base_url() ?>instructor_edit_quiz">Keamanan Jaringan Komputer</a>
                                        <div class="card-subtitle text-50">15 completed</div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
                                        <div class="flex mr-2">
                                            <a href="#"
                                               class="btn btn-light btn-sm">
                                                <i class="material-icons icon--left">playlist_add_check</i> Review
                                                <span class="badge badge-dark badge-notifications ml-2">5</span>
                                            </a>
                                        </div>

                                        <div class="dropdown">
                                            <a href="#"
                                               data-toggle="dropdown"
                                               data-caret="false"
                                               class="text-muted"><i class="material-icons">more_horiz</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0)"
                                                   class="dropdown-item">Review Quiz</a>
                                                <a href="instructor-edit-quiz.html"
                                                   class="dropdown-item">Edit Quiz</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0)"
                                                   class="dropdown-item text-danger">Delete Quiz</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-group-row__col col-md-6">
                            <div class="card card-group-row__card card-sm">
                                <div class="card-body d-flex align-items-center">
                                    <a href="<?php echo base_url() ?>instructor_edit_quiz"
                                       class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                                        <img src="<?php echo base_url() ?>assets/public/images/paths/cisco_480x168.jpg"
                                             alt="CCNA 1 & 2"
                                             class="avatar-img rounded">
                                        <span class="overlay__content"></span>
                                    </a>
                                    <div class="flex">
                                        <a class="card-title"
                                           href="<?php echo base_url() ?>instructor_edit_quiz">CCNA 1 & 2</a>
                                        <div class="card-subtitle text-50">15 completed</div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
                                        <div class="flex mr-2">
                                            <a href="#"
                                               class="btn btn-light btn-sm">
                                                <i class="material-icons icon--left">playlist_add_check</i> Review
                                                <span class="badge badge-dark badge-notifications ml-2">5</span>
                                            </a>
                                        </div>

                                        <div class="dropdown">
                                            <a href="#"
                                               data-toggle="dropdown"
                                               data-caret="false"
                                               class="text-muted"><i class="material-icons">more_horiz</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0)"
                                                   class="dropdown-item">Review Quiz</a>
                                                <a href="instructor-edit-quiz.html"
                                                   class="dropdown-item">Edit Quiz</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0)"
                                                   class="dropdown-item text-danger">Delete Quiz</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-group-row__col col-md-6">
                            <div class="card card-group-row__card card-sm">
                                <div class="card-body d-flex align-items-center">
                                    <a href="<?php echo base_url() ?>instructor_edit_quiz"
                                       class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                                        <img src="<?php echo base_url() ?>assets/public/images/paths/sbd_168.jpg"
                                             alt="Sistem Basis Data"
                                             class="avatar-img rounded">
                                        <span class="overlay__content"></span>
                                    </a>
                                    <div class="flex">
                                        <a class="card-title"
                                           href="<?php echo base_url() ?>instructor_edit_quiz">Sistem Basis Data</a>
                                        <div class="card-subtitle text-50">15 completed</div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex align-items-center">
                                        <div class="flex mr-2">
                                            <a href="#"
                                               class="btn btn-light btn-sm">
                                                <i class="material-icons icon--left">playlist_add_check</i> Review
                                                <span class="badge badge-dark badge-notifications ml-2">5</span>
                                            </a>
                                        </div>

                                        <div class="dropdown">
                                            <a href="#"
                                               data-toggle="dropdown"
                                               data-caret="false"
                                               class="text-muted"><i class="material-icons">more_horiz</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a href="javascript:void(0)"
                                                   class="dropdown-item">Review Quiz</a>
                                                <a href="<?php echo base_url() ?>instructor_edit_quiz"
                                                   class="dropdown-item">Edit Quiz</a>
                                                <div class="dropdown-divider"></div>
                                                <a href="javascript:void(0)"
                                                   class="dropdown-item text-danger">Delete Quiz</a>
                                            </div>
                                        </div>

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
                    </div>

                    <div class="card stack">
                        <div class="list-group list-group-flush">

                            <div class="list-group-item d-flex flex-column flex-sm-row align-items-sm-center px-12pt">
                                <div class="flex d-flex align-items-center mr-sm-16pt mb-8pt mb-sm-0">
                                    <a href="<?php echo base_url() ?>instructor_edit_quiz"
                                       class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                                        <img src="<?php echo base_url() ?>assets/public/images/paths/embedded_168.jpeg"
                                             alt="Perancangan Sistem Embedded"
                                             class="avatar-img rounded">
                                        <span class="overlay__content"></span>
                                    </a>
                                    <div class="flex">
                                        <a class="card-title mb-4pt"
                                           href="<?php echo base_url() ?>instructor_edit_quiz">Perancangan Sistem Embedded</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex text-center d-flex align-items-center mr-16pt">
                                        <span class="text-50 text-headings text-uppercase mr-12pt">Completed</span>
                                        <span class="badge badge-dark badge-notifications">15</span>
                                    </div>

                                    <div class="dropdown">
                                        <a href="#"
                                           data-toggle="dropdown"
                                           data-caret="false"
                                           class="text-muted"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)"
                                               class="dropdown-item">Review Quiz</a>
                                            <a href="instructor-edit-quiz.html"
                                               class="dropdown-item">Edit Quiz</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)"
                                               class="dropdown-item text-danger">Delete Quiz</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="list-group-item d-flex flex-column flex-sm-row align-items-sm-center px-12pt">
                                <div class="flex d-flex align-items-center mr-sm-16pt mb-8pt mb-sm-0">
                                    <a href="<?php echo base_url() ?>instructor_edit_quiz"
                                       class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                                        <img src="<?php echo base_url() ?>assets/public/images/paths/dmj_168.jpg"
                                             alt="Desain dan Manajemen Jaringan Komputer"
                                             class="avatar-img rounded">
                                        <span class="overlay__content"></span>
                                    </a>
                                    <div class="flex">
                                        <a class="card-title mb-4pt"
                                           href="<?php echo base_url() ?>instructor_edit_quiz">Desain dan Manajemen Jaringan Komputer</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex text-center d-flex align-items-center mr-16pt">
                                        <span class="text-50 text-headings text-uppercase mr-12pt">Completed</span>
                                        <span class="badge badge-dark badge-notifications">15</span>
                                    </div>

                                    <div class="dropdown">
                                        <a href="#"
                                           data-toggle="dropdown"
                                           data-caret="false"
                                           class="text-muted"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)"
                                               class="dropdown-item">Review Quiz</a>
                                            <a href="instructor-edit-quiz.html"
                                               class="dropdown-item">Edit Quiz</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)"
                                               class="dropdown-item text-danger">Delete Quiz</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="list-group-item d-flex flex-column flex-sm-row align-items-sm-center px-12pt">
                                <div class="flex d-flex align-items-center mr-sm-16pt mb-8pt mb-sm-0">
                                    <a href="<?php echo base_url() ?>instructor_edit_quiz"
                                       class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                                        <img src="<?php echo base_url() ?>assets/public/images/paths/PSD_168.jpg"
                                             alt="Perancangan Sistem Digital"
                                             class="avatar-img rounded">
                                        <span class="overlay__content"></span>
                                    </a>
                                    <div class="flex">
                                        <a class="card-title mb-4pt"
                                           href="<?php echo base_url() ?>instructor_edit_quiz">Perancangan Sistem Digital</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex text-center d-flex align-items-center mr-16pt">
                                        <span class="text-50 text-headings text-uppercase mr-12pt">Completed</span>
                                        <span class="badge badge-dark badge-notifications">15</span>
                                    </div>

                                    <div class="dropdown">
                                        <a href="#"
                                           data-toggle="dropdown"
                                           data-caret="false"
                                           class="text-muted"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)"
                                               class="dropdown-item">Review Quiz</a>
                                            <a href="<?php echo base_url() ?>instructor_edit_quiz"
                                               class="dropdown-item">Edit Quiz</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)"
                                               class="dropdown-item text-danger">Delete Quiz</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="list-group-item d-flex flex-column flex-sm-row align-items-sm-center px-12pt">
                                <div class="flex d-flex align-items-center mr-sm-16pt mb-8pt mb-sm-0">
                                    <a href="<?php echo base_url() ?>instructor_edit_quiz"
                                       class="avatar overlay overlay--primary avatar-4by3 mr-12pt">
                                        <img src="<?php echo base_url() ?>assets/public/images/paths/SBK_168.jpg"
                                             alt="Sistem Berbasis Komputer"
                                             class="avatar-img rounded">
                                        <span class="overlay__content"></span>
                                    </a>
                                    <div class="flex">
                                        <a class="card-title mb-4pt"
                                           href="<?php echo base_url() ?>instructor_edit_quiz">Sistem Berbasis Komputer</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex text-center d-flex align-items-center mr-16pt">
                                        <span class="text-50 text-headings text-uppercase mr-12pt">Completed</span>
                                        <span class="badge badge-dark badge-notifications">15</span>
                                    </div>

                                    <div class="dropdown">
                                        <a href="#"
                                           data-toggle="dropdown"
                                           data-caret="false"
                                           class="text-muted"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:void(0)"
                                               class="dropdown-item">Review Quiz</a>
                                            <a href="<?php echo base_url() ?>instructor_edit_quiz"
                                               class="dropdown-item">Edit Quiz</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:void(0)"
                                               class="dropdown-item text-danger">Delete Quiz</a>
                                        </div>
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

                    <a href="<?php echo base_url() ?>"
                       class="sidebar-brand ">
                        <!-- <img class="sidebar-brand-icon" src="../../public/images/illustration/teacher/128/white.svg" alt="Luma"> -->

                        <span class="avatar avatar-xl sidebar-brand-icon h-auto">

                            <span class="avatar-title rounded bg-primary"><img src="<?php echo base_url() ?>assets/public/images/illustration/teacher/128/white.svg"
                                     class="img-fluid"
                                     alt="logo" /></span>

                        </span>

                        <span>U-Learn</span>
                    </a>

                    <div class="sidebar-heading">Instructor</div>
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
                               href="<?php echo base_url() ?>instructor_courses">
                                <span class="material-icons sidebar-menu-icon sidebar-menu-icon--left">school</span>
                                <span class="sidebar-menu-text">Instructor Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-menu-item active">
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