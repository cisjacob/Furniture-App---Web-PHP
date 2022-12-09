<?php
    include_once('partials/user_header.php');
?>

<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>

<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container my-5">
        <?php
            if(isset($_SESSION['successMessage'])){
                echo "<div class='alert alert-success'>" . $_SESSION['successMessage'] . "</div>";
                unset($_SESSION['successMessage']);
            } else if(isset($_SESSION['errorMessage'])){
                echo "<div class='alert alert-danger'>" . $_SESSION['errorMessage'] . "</div>";
                unset($_SESSION['errorMessage']);
            }
        ?>
        <h1>Welcome to PHTree!</h1>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/home/home1.jpg" class="d-block w-100 carousel-img" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/home/home2.webp" class="d-block w-100 carousel-img" alt="...">
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
</body>
</html>

<?php 
    include_once('partials/user_footer.php');
?>