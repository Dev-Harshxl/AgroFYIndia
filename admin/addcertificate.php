<?php
error_reporting(0);
// session_start();
// if ($_SESSION['adid'] == "") {
//     header("Location: index.php");
// }

// $conn = mysqli_connect("localhost", "root", "", "project2") or die("connection error");
include 'connect.php';


$imag = $_FILES['prev'];
$i_name = $imag['name'];
$i_tmp = $imag['tmp_name'];
$path = "../upload_img/" . $i_name;

move_uploaded_file($i_tmp, $path);

if (isset($_POST['save'])) {
    $title = $_POST['title'];

    $ins="INSERT INTO addcerti SET 
        certi_name='$title',
        certi_image='$i_name'
    ";
    mysqli_query($conn,$ins);
    header("Location:viewcertificate.php");

}
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
    <link href="assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link href="dist/css/pages/dashboard4.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/node_modules/dropify/dist/css/dropify.min.css">
    <link href="assets/node_modules/switchery/dist/switchery.min.css" rel="stylesheet" />



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

                        <li> <a class="waves-effect waves-dark" href="dashboard.php" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard </span></a>
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

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">Add CERTIFICATE</h4>
                            <form class="mt-4 text-center" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">CERTIFICATE Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name of CERTIFICATE" name="title">
                                </div>

                                <div class="col-lg-12 col-md-12 text-center">
                                    <div class="card">
                                        <h4 class="card-title">CERTIFICATE Image</h4>
                                        <input type="file" id="input-file-now" class="dropify" name="prev"/>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary text-white text-center" name="save" style="width: 20%;margin:auto;">Submit</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="assets/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="dist/js/waves.js"></script>
    <script src="dist/js/sidebarmenu.js"></script>
    <script src="dist/js/custom.min.js"></script>
    <script src="assets/node_modules/skycons/skycons.js"></script>
    <script src="assets/node_modules/raphael/raphael-min.js"></script>
    <script src="assets/node_modules/morrisjs/morris.min.js"></script>
    <script src="assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <script src="dist/js/dashboard4.js"></script>
    <script src="assets/node_modules/switchery/dist/switchery.min.js"></script>
    <script src="assets/node_modules/dropify/dist/js/dropify.min.js"></script>


    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
        });
    </script>



</body>

</html>