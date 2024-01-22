<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta
      name="apple-mobile-web-app-status-bar-style"
      content="black-translucent"
    />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>index</title>
    <link rel="icon" href="assest/img/logo/logo.jpeg" type="image/png" sizes="16x16" />

    <link href="assest/fonts/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="assest/css/bootstrap_css/bootstrap.min.css" />
    <link rel="stylesheet" href="assest/css/bootstrap_css/bootstrap.css" />
    <link rel="stylesheet" href="assest/inter_fonts/interfont.css" />
    <link rel="stylesheet" href="assest/css/custom_css/root.css" />
    <link rel="stylesheet" href="assest/css/custom_css/navbar.css" />
    <link rel="stylesheet" href="assest/css/custom_css/style.css" />
  </head>
  <style>
    img {
      image-rendering: -moz-crisp-edges !important;
      image-rendering: -o-crisp-edges !important;
      image-rendering: -webkit-optimize-contrast !important;
      image-rendering: crisp-edges !important;
      -ms-interpolation-mode: nearest-neighbor !important;
    }
  </style>
  <body>
    <!----------header----------->
    <header class="header-menu" id="header-menu">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-all-list" id="">
            <ul class="nav navbar-nav navbar-left">
              <li>
                <a href="#" class="swipe-icon mobilenone" id="sidebar-swipe">
                  <i class="fas fa-bars"></i>
                </a>
                <div
                  class="menu-toggle mobile-swipe swipe-icon"
                  id="sidebar-swipe"
                >
                  <div class="trigger">
                    <svg
                      class="bars"
                      viewBox="0 0 100 100"
                      onclick="this.classList.toggle('active')"
                    >
                      <path
                        class="line top"
                        d="m 30,33 h 40 c 13.100415,0 14.380204,31.80258 6.899646,33.421777 -24.612039,5.327373 9.016154,-52.337577 -12.75751,-30.563913 l -28.284272,28.284272"
                      ></path>
                      <path
                        class="line middle"
                        d="m 70,50 c 0,0 -32.213436,0 -40,0 -7.786564,0 -6.428571,-4.640244 -6.428571,-8.571429 0,-5.895471 6.073743,-11.783399 12.286435,-5.570707 6.212692,6.212692 28.284272,28.284272 28.284272,28.284272"
                      ></path>
                      <path
                        class="line bottom"
                        d="m 69.575405,67.073826 h -40 c -13.100415,0 -14.380204,-31.80258 -6.899646,-33.421777 24.612039,-5.327373 -9.016154,52.337577 12.75751,30.563913 l 28.284272,-28.284272"
                      ></path>
                    </svg>
                  </div>
                </div>
              </li>
              <li>
                <a class="navbar-brand" href="#"> File Archiving System </a>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown profile">
                <a
                  href="#"
                  class="dropdown-toggle"
                  data-toggle="dropdown"
                  role="button"
                  aria-haspopup="true"
                  aria-expanded="false"
                  ><img src="assest/img/profile/iprofile.webp" /><i
                    class="fas fa-sort-down down-icon"
                  ></i
                ></a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="#"><i class="far fa-user"></i>User Details</a>
                  </li>
                  <li>
                    <a href="#"><i class="fas fa-key"></i>Security 2F</a>
                  </li>
                  <li>
                    <a href="#"><i class="fas fa-user-edit"></i>Edit Profile</a>
                  </li>
                  <li>
                    <a href="#"><i class="fas fa-wrench"></i>Settings</a>
                  </li>
                  <li>
                    <a href="#"><i class="fas fa-sign-out-alt"></i>Sign Out</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>
    </header>

    <div id="wrapper">
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
        <div class="sidebar-nav">
          <div class="sidebar-logo-section">
            <p class="sidebar-logo">
              <span
                ><img
                  src="assest/img/logo/logo.jpeg"
                  width="30px"
                  height="30px"
                  style="border-radius: 100px"
              /></span>
            </p>
            <p>
              <span id="main-menu-list" class="main-menu-list sidebar-logo-name"
                >TGTDCL</span
              >
            </p>
          </div>
          <div class="side-menu-full">
            <ul class="nav-side-menu" id="menu">
              <li class="nav-parent">
                <a
                  href="index.php"
                  class="side-menu-items maindhasboard active-link-as"
                  id="main-menu-item-1"
                >
                  <span class="icon-for-menu">
                    <i class="fas fa-home"></i>
                  </span>
                  <span id="main-menu-list" class="main-menu-list"
                    >Dashboard</span
                  >
                </a>
              </li>
              <li
                data-toggle="collapse"
                data-target="#payment"
                class="collapsed nav-parent main-dropdown-menu"
                aria-expanded="false"
              >
                <a href="#" class="side-menu-items" id="main-menu-item-2">
                  <span class="icon-for-menu"
                    ><i class="fas fa-book-reader"></i
                  ></span>
                  <span id="main-menu-list" class="main-menu-list"
                    >Register Book module</span
                  >
                  <div class="expand_caret caret"></div>
                </a>
                <ul class="sub-menu collapse" id="payment">
                <li>
                    <a
                      href="add_book.php"
                      class="submenu-link"
                      id="submenu-item-1-2"
                      ><i class="fas fa-angle-double-right"></i> Add Register
                      Book</a
                    >
                  </li>
                  <li>
                    <a href="#" class="submenu-link" id="submenu-item-1-3"
                      ><i class="fas fa-angle-double-right"></i> View Register
                      Book</a
                    >
                  </li>
                </ul>
              </li>
              <li
                data-toggle="collapse"
                data-target="#project_management"
                class="collapsed nav-parent main-dropdown-menu"
                aria-expanded="false"
              >
                <a href="#" class="side-menu-items" id="main-menu-item-3">
                  <span class="icon-for-menu">
                    <i class="fas fa-unlink"></i>
                  </span>
                  <span id="main-menu-list" class="main-menu-list"
                    >Project Management</span
                  >
                  <div class="expand_caret caret"></div>
                </a>
                <ul class="sub-menu collapse" id="project_management">
                  <li>
                    <a href="projects.php" class="submenu-link" id="submenu-item-1-6"
                      ><i class="fas fa-angle-double-right"></i> Projects</a
                    >
                  </li>
                  <li>
                    <a
                      href="add_project.php"
                      class="submenu-link"
                      id="submenu-item-1-7"
                      ><i class="fas fa-angle-double-right"></i> Add Project</a
                    >
                  </li>
                  <li>
                    <a href="#" class="submenu-link" id="submenu-item-1-8"
                      ><i class="fas fa-angle-double-right"></i> Timeline
                      View</a
                    >
                  </li>
                  <li>
                    <a href="#" class="submenu-link" id="submenu-item-1-9"
                      ><i class="fas fa-angle-double-right"></i> Budget</a
                    >
                  </li>
                </ul>
              </li>
              <li
                data-toggle="collapse"
                data-target="#user"
                class="collapsed nav-parent main-dropdown-menu"
                aria-expanded="false"
              >
                <a href="#" class="side-menu-items" id="main-menu-item-4">
                  <span class="icon-for-menu">
                    <i class="fas fa-user-alt"></i>
                  </span>
                  <span id="main-menu-list" class="main-menu-list"
                    >User Details</span
                  >
                  <div class="expand_caret caret"></div>
                </a>
                <ul class="sub-menu collapse" id="user">
                  <li>
                    <a href="#" class="submenu-link" id="submenu-item-2"
                      ><i class="fas fa-angle-double-right"></i> New Payment</a
                    >
                  </li>
                  <li>
                    <a href="#" class="submenu-link" id="submenu-item-2-1"
                      ><i class="fas fa-angle-double-right"></i> Overall
                      Drive</a
                    >
                  </li>
                  <li>
                    <a href="#" class="submenu-link" id="submenu-item-2-2"
                      ><i class="fas fa-angle-double-right"></i> Chart Js</a
                    >
                  </li>
                  <li>
                    <a href="#" class="submenu-link" id="submenu-item-2-3"
                      ><i class="fas fa-angle-double-right"></i> Bigest Das</a
                    >
                  </li>
                </ul>
              </li>
              <li
                data-toggle="collapse"
                data-target="#meta_data"
                class="collapsed nav-parent main-dropdown-menu"
                aria-expanded="false"
              >
                <a href="#" class="side-menu-items" id="main-menu-item-meta-data">
                  <span class="icon-for-menu">
                    <i class="fas fa-database"></i>
                  </span>
                  <span id="main-menu-list" class="main-menu-list"
                    >Meta Data module</span
                  >
                  <div class="expand_caret caret"></div>
                </a>
                <ul class="sub-menu collapse" id="meta_data">
                  <li>
                    <a href="add_metadata_nmc.php" class="submenu-link" id="submenu-item-meta-data_nmc"
                      ><i class="fas fa-angle-double-right"></i> Add Meta Data (NMC)</a
                    >
                  </li>
                  <li>
                    <a
                      href="add_metadata_mc.php"
                      class="submenu-link"
                      id="submenu-item-meta-data_mc"
                      ><i class="fas fa-angle-double-right"></i> Add Meta Data (MC)</a
                    >
                  </li>
                  <li>
                    <a href="view_meta_data.php" class="submenu-link" id="submenu-item-view-meta-data"
                      ><i class="fas fa-angle-double-right"></i> View Meta data</a
                    >
                  </li>
                  <li>
                    <a href="master_view.php" class="submenu-link" id="submenu-item-master-view"
                      ><i class="fas fa-angle-double-right"></i> Master View (Admin)</a
                    >
                  </li>
                </ul>
              </li>
              <li
                data-toggle="collapse"
                data-target="#nope"
                class="collapsed nav-parent main-dropdown-menu"
                aria-expanded="false"
              >
                <a href="#" class="side-menu-items" id="main-menu-item-5">
                  <span class="icon-for-menu">
                    <i class="fas fa-tasks"></i>
                  </span>
                  <span id="main-menu-list" class="main-menu-list">Tasks</span>
                  <div class="expand_caret caret"></div>
                </a>
                <ul class="sub-menu collapse" id="nope">
                  <li>
                    <a href="#" class="submenu-link" id="submenu-item-2-4"
                      ><i class="fas fa-angle-double-right"></i> New Payment</a
                    >
                  </li>
                  <li>
                    <a href="#" class="submenu-link" id="submenu-item-2-5"
                      ><i class="fas fa-angle-double-right"></i> Overall
                      Drive</a
                    >
                  </li>
                  <li>
                    <a href="#" class="submenu-link" id="submenu-item-2-6"
                      ><i class="fas fa-angle-double-right"></i> Chart Js</a
                    >
                  </li>
                  <li>
                    <a href="#" class="submenu-link" id="submenu-item-2-7"
                      ><i class="fas fa-angle-double-right"></i> Bigest Das</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-parent">
                <a href="#" class="side-menu-items" id="main-menu-item-6">
                  <span class="icon-for-menu">
                    <i class="fas fa-shopping-bag"></i>
                  </span>
                  <span id="main-menu-list" class="main-menu-list"
                    >Shoping</span
                  >
                </a>
              </li>
              <li
                data-toggle="collapse"
                data-target="#route"
                class="collapsed nav-parent main-dropdown-menu"
                aria-expanded="false"
              >
                <a href="#" class="side-menu-items" id="main-menu-item-7">
                  <span class="icon-for-menu">
                    <i class="fas fa-route"></i>
                  </span>
                  <span id="main-menu-list" class="main-menu-list">Tasks</span>
                  <div class="expand_caret caret"></div>
                </a>
                <ul class="sub-menu collapse" id="route">
                  <li>
                    <a href="#" class="submenu-link" id="submenu-item-2-8"
                      >New Payment</a
                    >
                  </li>
                  <li>
                    <a href="#" class="submenu-link" id="submenu-item-2-9"
                      >Overall Drive</a
                    >
                  </li>
                  <li>
                    <a href="#" class="submenu-link" id="submenu-item-3"
                      >Chart Js</a
                    >
                  </li>
                  <li>
                    <a href="#" class="submenu-link" id="submenu-item-3-1"
                      >Bigest Das</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-parent">
                <a href="#" class="side-menu-items" id="main-menu-item-8">
                  <span class="icon-for-menu">
                    <i class="fas fa-snowflake"></i>
                  </span>
                  <span id="main-menu-list" class="main-menu-list"
                    >Add Promotion</span
                  >
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- /#sidebar-wrapper -->
      <!-- Page Content -->
      <div class="page-content-wrapper">
        <div class="container-fluid xyz">