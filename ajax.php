<?php
// $conn = mysqli_connect("localhost", "root", "", "project2") or die("connection error");
include 'admin/connect.php';

$cid = $_GET['cate'];
$sel = "SELECT * from addproduct where cat_id= '$cid' ";
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
<?php
}
?>