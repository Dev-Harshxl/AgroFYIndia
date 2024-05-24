<?php
// $conn = mysqli_connect("localhost", "root", "", "project2") or die("connection error");
include 'admin/connect.php';

?> 
<!doctype html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About us</title>
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
                <div class="container" style="padding-left: 0px; padding-right: 0px;">
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
                                <a class="nav-link items" href="about.php">About </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link items" href="product.php">Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link items" href="certificate.php">Certificate</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link items" href="contact.php">Contact Us</a>
                            </li>

                            <li class="nav-item dropdown" style="margin-left: 200px; ">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown04">
                                    <ul name="category" id="category" onchange="getState(this.value)" >
                                        <li value="-1">Categories</li>
                                        <?php
                                        $sel = "SELECT * FROM addcategory";
                                        $exe = mysqli_query($conn, $sel);
                                        while ($fetch = mysqli_fetch_array($exe)) {
                                        ?>
                                            <li value="<?php echo $fetch['cat_id'] ?>"style="width: 250px;">
                                                <a href="category.php"  style="color: black;">
                                                    <?php echo $fetch['cat_name'] ?>
                                                </a>
                                            </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="container-fluid pica" style="padding-left: 0px; padding-right: 0px;">
        <div class="overs">
            <div class="container">
                <div class="col-lg-12 text-center">
                    <h3><a href="index.php">Home</a> / About US</h3>
                    <h2 style="font-weight: 800;">ABOUT US</h2>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid colo" style="padding-left: 0px; padding-right: 0px;">
        <div class="container text-center aboutpara">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <h1 style="font-size: 40px; font-weight:600;">Welcome to Romofy Agro an eCommerce website</h1>
                </div>
            </div>
            <br />
            <br />
            <div class="row">
                <div class="col-lg-10 col-12  ">
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                        a large language ocean.</p>
                    <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious
                        Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their
                        agency, where they abused her for theirs.</p>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                        a large language ocean.</p>
                    <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious
                        Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their
                        agency, where they abused her for theirs.</p>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                        a large language ocean.</p>
                    <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious
                        Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their
                        agency, where they abused her for theirs.</p>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                        a large language ocean.</p>
                    <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious
                        Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their
                        agency, where they abused her for theirs.</p>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                        a large language ocean.</p>
                    <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious
                        Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their
                        agency, where they abused her for theirs.</p>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                        a large language ocean.</p>
                    <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious
                        Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their
                        agency, where they abused her for theirs.</p>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics,
                        a large language ocean.</p>
                    <p>But nothing the copy said could convince her and so it didn’t take long until a few insidious
                        Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their
                        agency, where they abused her for theirs.</p>
                </div>
            </div>
        </div>

    </div>
    <br>
    <br>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="count-up">
                        <p class="counter-count">10000</p>
                        <h3>HAPPY CUSTOMERS</h3>
                    </div>
                </div>

                <div class="col-12 col-lg-3">
                    <div class="count-up">
                        <p class="counter-count">100</p>
                        <h3>BRANCHES</h3>
                    </div>
                </div>

                <div class="col-12 col-lg-3">
                    <div class="count-up">
                        <p class="counter-count">1000</p>
                        <h3>PARTNER</h3>
                    </div>
                </div>

                <div class="col-12 col-lg-3">
                    <div class="count-up">
                        <p class="counter-count">100</p>
                        <h3>AWARDS</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.counter-count').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 4000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="text-center feature">
                Testimonials
            </div>
            <div class="text-center our">
                Our satisfied customer says
            </div>
            <br>
            <br>
            <br>

            <div class="text-center tag">
                Far far away, behind the word mountains, far from the countries Vokalia and <br>Consonantia, there live
                the blind texts. Separated they live in
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="container-fluid">
        <div class="container" style="margin-left: 150px;">
            <div class="row">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="margin-left: 200px;">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card" style="width: 18rem; border: none;">
                                            <img src="images/Testimonial-img3-scaled.jpg" height="150px" width="100px" style="scale: 0.3 0.5;  border-radius:  50%;" class="card-img-top" alt="...">
                                            <div class="card-body bod">
                                                <p class="card-text " style="text-align: center;">I started using this
                                                    site when my mother got an
                                                    illness. As soon as I started to use this site to buy Vegetables and
                                                    fruits, I stopped going to Markets to buy Vegetables as the
                                                    Freshness of the product they Sell is far better then in Market.
                                                    Even after my mother is recovered I will continue to buy Vegetables
                                                    from this site.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card" style="width: 18rem; border: none;">
                                            <img src="images/Testimonial-img3-scaled.jpg" height="150px" width="100px" style="scale: 0.3 0.5;  border-radius:  50%;" class="card-img-top" alt="...">
                                            <div class="card-body bod">
                                                <p class="card-text " style="text-align: center;">I started using this
                                                    site when my mother got an
                                                    illness. As soon as I started to use this site to buy Vegetables and
                                                    fruits, I stopped going to Markets to buy Vegetables as the
                                                    Freshness of the product they Sell is far better then in Market.
                                                    Even after my mother is recovered I will continue to buy Vegetables
                                                    from this site.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card" style="width: 18rem; border: none;">
                                            <img src="images/Testimonial-img3-scaled.jpg" height="150px" width="100px" style="scale: 0.3 0.5;  border-radius:  50%;" class="card-img-top" alt="...">
                                            <div class="card-body bod">
                                                <p class="card-text " style="text-align: center;">I started using this
                                                    site when my mother got an
                                                    illness. As soon as I started to use this site to buy Vegetables and
                                                    fruits, I stopped going to Markets to buy Vegetables as the
                                                    Freshness of the product they Sell is far better then in Market.
                                                    Even after my mother is recovered I will continue to buy Vegetables
                                                    from this site.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="container">
                                <div class="row">
                                    <?php
                                    $sel = "SELECT * from add_test";
                                    $exe = mysqli_query($conn, $sel);
                                    while ($fetch = mysqli_fetch_array($exe)) {
                                    ?>

                                        <div class="col-lg-4">
                                            <div class="card" style="width: 18rem; border: none;">
                                                <img src="upload_img/<?php echo $fetch['test_photo'] ?>" height="150px" style="scale: 0.3 0.5; border-radius: 50%;" class="card-img-top" alt="...">
                                                <div class="card-body bod">
                                                    <p class="card-text " style="text-align: center;"><?php echo $fetch['test_para'] ?> </p>

                                                </div>
                                            </div>
                                        </div>

                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="container-fluid subs" style="padding-left: 0px; padding-right: 0px;">
        <div class="container" style="padding-left: 0px; padding-right: 0px;">
            <div class="row">
                <div class="col-lg-6 col-12" style="padding-left: 0px; padding-right: 0px;">
                    <br>
                    <br>
                    <br>
                    <br>
                    <h2 style="font-weight: 400;">Subcribe to our Newsletter</h2>
                    <p>
                        Get e-mail updates about our latest shops and special offers
                    </p>
                </div>
                <div class="col-lg-6 col-12" style="padding-left: 0px; padding-right: 0px;">
                    <br>
                    <br>
                    <br>
                    <br>
                    <form>
                        <div class="row">
                            <div class="col-lg-10" style="padding-left: 0px; padding-right: 0px;"><input type="text" value="Enter Email Address"></div>
                            <div class="col-lg-2" style="margin-left: 580px; margin-top:-40px "><button type="Submit" class="But">Subscribe</button></div>
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