 <?php
    error_reporting(0);
    // $conn = mysqli_connect("localhost", "root", "", "project2") or die("connection error");
    include '<admin/connect.php';

    ?>
 <!doctype html>
 <html lang="en">

 <head>

     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Our Products</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/media.css">

     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
 </head>

 <body>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.8/typed.min.js"></script>


     <div class="taskbar">
         <div class="taskinfo ">
             <div class="row">
                 <div class="col-4">
                     <i class="fa-solid fa-phone"></i>
                     +912235923835
                 </div>
                 <div class="col-4">
                     <i class="fa-solid fa-paper-plane"></i> info@romofyagroindia.com
                 </div>
                 <div class="col-4">3-5 BUSINESS DAYS DELIVERY & FREE RETURNS</div>
             </div>
         </div>
     </div>
     <div class="menubox">
         <div class="menu container-fluid">
             <nav class="navbar navbar-expand-lg p-0">
                 <div class="container">
                     <a class="navbar-brand" href="#"><img src="images/cropped-Agro.png" alt="Not Available" height="77.47px" width="130px"></a>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <ul class="navbar-nav me-auto mb-2 mb-lg-0 " style="margin-right: 0px;">
                             <li class="nav-item">
                                 <a class="nav-link active items" aria-current="page" href="index.php">Home</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link items" href="about.php">About Us</a>
                             </li>
                             <li class="nav-item ">
                                 <a class="nav-link items" href="product.php">Product</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link items" href="certificate.php">Our Certificate</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link items" href="contact.php">Contact Us</a>
                             </li>
                             <li class="nav-item dropdown " style="margin-left: 100px; margin-top:10px;">

                                 <select name="category" id="category" style="width: 250px; height: 30px; text-align:right; border:none;" onchange="getState(this.value)">
                                     <option value="">Categories</option>
                                     <?php
                                        $sel = "SELECT * FROM addcategory";
                                        $exe = mysqli_query($conn, $sel);
                                        while ($fetch = mysqli_fetch_array($exe)) {
                                        ?>
                                         <option value="<?php echo $fetch['cat_id'] ?>"><?php echo $fetch['cat_name'] ?></option>
                                     <?php
                                        }
                                        ?>
                                 </select>
                             </li>

                         </ul>

                     </div>
                 </div>
             </nav>
         </div>
     </div>

     <div class="container-fluid pica">
         <div class="overs">
             <div class="container">
                 <div class="col-lg-12 text-center">
                     <h3><a href="index.php">Home</a> / OUR PRODUCTS</h3>
                     <h2 style="font-weight: 800;">OUR PRODUCTS</h2>
                 </div>
             </div>
         </div>
     </div>
     <br />
     <br />
     <br />
     <br />
     <div class="container-fluid">
         <div class="container">
             <div class="row">
                 <?php

                    $sel = "SELECT * from addproduct";
                    $exe = mysqli_query($conn, $sel);
                    while ($fetch = mysqli_fetch_array($exe)) {
                    ?>
                     <div class="col-lg-3 col-12">
                         <div class="card p-0 " style="width: 18rem; margin-top: 15px; height: 285px">
                             <img class="card-img-top" src="upload_img/<?php echo $fetch['prod_image'] ?> ">
                             <div class="card-body">
                                 <p class="card-text"><?php echo $fetch['prod_name'] ?></p>
                             </div>
                         </div>
                     </div>

                 <?php } ?>
             </div>
         </div>
         <br>
         <div class="container-fluid subs">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-6 col-12">
                         <br>
                         <br>
                         <br>
                         <br>
                         <h2 style="font-weight: 400;">Subcribe to our Newsletter</h2>
                         <p>
                             Get e-mail updates about our latest shops and special offers
                         </p>
                     </div>
                     <div class="col-lg-6 col-12">
                         <br>
                         <br>
                         <br>
                         <br>
                         <form>
                             <div class="row">
                                 <div class="col-lg-10"><input type="text" value="Enter Email Address"></div>
                                 <div class="col-lg-2"><button type="Submit" class="But">Subscribe</button></div>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
             <a href="#">
                 <div class="arrow">
                     <div class="aline"></div>
                 </div>
             </a>
         </div>
         <br>
         <br>
         <br>
         <br>


         <div class="container-fluid">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-4 col-12">
                         <h5>romofy agro india pvt ltd</h5>
                         <br>
                         <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                     </div>
                     <div class="col-lg-3 text-center lists">
                         <h5>&nbsp; &nbsp; Quick Links</h5>
                         <ul style="list-style: none; line-height: 32px; text-decoration: none;">
                             <a href="index.php">
                                 <li>Home</li>
                             </a>
                             <a href="about.php">
                                 <li>About Us</li>
                             </a>
                             <a href="product.php">
                                 <li>Product</li>
                             </a>
                             <a href="certificate.php">
                                 <li>Our Certificate</li>
                             </a>
                             <a href="contact.php">
                                 <li>Contact Us</li>
                             </a>
                         </ul>
                     </div>
                     <div class="col-lg-2"></div>
                     <div class="col-lg-3  haveaque">
                         <h5>&nbsp; &nbsp; Have a Questions? </h5>

                         <div class="row ">
                             <div class="col-lg-1"><i class="fa-solid fa-location-dot"></i></div>
                             <div class="col-lg-10"> Agarwal B2B Centre Mumbai-400064</div>
                         </div>
                         <div class="row ">
                             <div class="col-lg-1"><i class="fa-solid fa-phone"></i></div>
                             <div class="col-lg-10"> +912235923835</div>
                         </div>
                         <div class="row ">
                             <div class="col-lg-1"><i class="fa-solid fa-envelope"></i></div>
                             <div class="col-lg-10">info@romofyagroindia.com</div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

 </body>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

 <script type="text/javascript">
     function getState(cid) {
         $.ajax({
             url: 'ajax.php',
             type: 'GET',
             data: {
                 'cate': cid
             },
             success: function(res) {
                 $("#ajaxreturn").php(res);
             }
         })
     }
 </script>

 </html>