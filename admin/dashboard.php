<?php
error_reporting(0);
// session_start();
// if ($_SESSION['adid'] == "") {
//     header("Location: index.php");
// }
// $conn = mysqli_connect("localhost", "root", "", "project2") or die("connection error");
include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/cropped-Agro.png">
    <title>agro-admin</title>
    <link href="../admin/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <link href="../admin/dist/css/style.min.css" rel="stylesheet">
    <link href="../admin/dist/css/pages/dashboard4.css" rel="stylesheet">
</head>

<body class="skin-blue fixed-layout">

    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">AgrofyIndia</p>
        </div>
    </div>

    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard.php">
                        <img src="../admin/assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                        <span>Admin Panel</span>
                        </span>
                    </a>
                </div>
                <div class="navbar-collapse">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li>
                    </ul>

                    <ul class="navbar-nav my-lg-0">
                        <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i>Themes</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="left-sidebar">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">

                        <li> <a class="waves-effect waves-dark" href="dashboard.php
                            " aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard </span></a>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" aria-expanded="false"><i class="fa-regular fa-image"></i><span class="hide-menu">SLIDER</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="addslider.php">ADD SLIDER</a></li>
                                <li><a href="viewslider.php">VIEW SLIDER</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">CATEGORIES</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="addcategory.php">ADD CATEGORIES</a></li>
                                <li><a href="viewcategory.php">VIEW CATEGORIES</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" aria-expanded="false"><i class="fa-light fa-carrot"></i><span class="hide-menu">PRODUCTS</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="addproduct.php">ADD PRODUCTS</a></li>
                                <li><a href="viewproduct.php">VIEW PRODUCTS</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" aria-expanded="false"><i class="fa-light fa-carrot"></i><span class="hide-menu">CERTIFICATE</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="addcertificate.php">ADD CERTIFICATE</a></li>
                                <li><a href="viewcertificate.php">VIEW CERTIFICATE</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" aria-expanded="false"><i class="fa-light fa-carrot"></i><span class="hide-menu">TESTIMONIALS</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="addtestimonial.php">ADD TESTIMONIALS</a></li>
                                <li><a href="viewtestimonial.php">VIEW TESTIMONIALS</a></li>
                            </ul>
                        </li>





                        <li> <a class="waves-effect waves-dark" href="logout.php" aria-expanded="false"><i class="far fa-circle text-success"></i><span class="hide-menu">Log Out</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="page-wrapper">

            <div class="container-fluid">

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">TOTAL PRODUCTS</h5>
                                <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                    <div id="sparklinedash"></div>
                                    <div class="ms-auto">
                                        <h2 class="text-success"><i class="ti-arrow-up"></i> <span class="counter">8659</span></h2>
                                    </div>
                                </div>
                            </div>
                            <div id="sparkline8" class="sparkchart"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">TOTAL Categories</h5>
                                <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                    <div id="sparklinedash2"></div>
                                    <div class="ms-auto">
                                        <h2 class="text-purple"><i class="ti-arrow-up"></i> <span class="counter">7469</span></h2>
                                    </div>
                                </div>
                            </div>
                            <div id="sparkline8" class="sparkchart"></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">TOTAL ENQUIRIES</h5>
                                <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                    <div id="sparklinedash3"></div>
                                    <div class="ms-auto">
                                        <h2 class="text-info"><i class="ti-arrow-up"></i> <span class="counter">6011</span></h2>
                                    </div>
                                </div>
                            </div>
                            <div id="sparkline8" class="sparkchart"></div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">TOTAL MAILS</h5>
                                <div class="d-flex no-block align-items-center m-t-20 m-b-20">
                                    <div id="sparklinedash4"></div>
                                    <div class="ms-auto">
                                        <h2 class="text-success"><i class="ti-arrow-up"></i> <span class="counter">18</span></h2>
                                    </div>
                                </div>
                            </div>
                            <div id="sparkline8" class="sparkchart"></div>
                        </div>
                    </div>
                </div>

                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span>
                        </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a>
                                </li>
                                <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme working">4</a>
                                </li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a>
                                </li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="../assets/node_modules/jquery/dist/jquery.min.js"></script> -->
    <script src="../admin/assets/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="../admin/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/waves.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="dist/js/custom.min.js"></script>
    <script src="../admin/assets/node_modules/skycons/skycons.js"></script>
    <script src="../admin/assets/node_modules/raphael/raphael-min.js"></script>
    <script src="../admin/assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="../admin/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="dist/js/dashboard4.js"></script>
</body>

</html>