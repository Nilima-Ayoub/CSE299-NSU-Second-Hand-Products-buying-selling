<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<title>NITTO</title>
<?php
include_once 'connection.php';
?>

<script async>
  $(document).ready(function(){
    $('#header_search_field').keyup(function(){
var name = $(this).val();
$.post('get_posts.php',{name:name},function(data){
  $('div#header_search').css({'display':'block'});  
$('div#header_search').html(data);
  });

});
  });
</script>

</head>
<body>

  <!--Headnav-->
  <nav class="navbar navbar-light bg-white navbar-expand-lg h-100 sticky-top header" >
<div class="container-fluid">
<figure>
  <blockquote class="blockquote">NITTO</blockquote>
  <figcaption class="blockquote-footer fst-italic">Be Good To Yourself & Environment</figcaption>
</figure>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
  <form>
    <ul class="nav text-uppercase">

<!--Home-->
  <li class="nav-item text-underline-hover">
    <a class="nav-link text-black" href="main.php">Home</a>
    </li>

    <!--Login/signup-->
    <li class="nav-item text-underline-hover dropdown">
<!--if logged in-->
<?php
    if (isset($_SESSION['username']) && $_SESSION['role'] == 'admin') {?> 
    <button class="btn btn-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fas fa-thin fa-user"></i> <?php echo $_SESSION['username']; ?></button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a href="admin_dashboard.php">Dashboard</a></li>
    <li><a href="logout.php" onclick="return logout()">Log Out</a></li>
  </ul>
        <?php } elseif (isset($_SESSION['username']) && $_SESSION['role'] == 'user') {?>   
    <button class="btn btn-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fas fa-thin fa-user"></i> <?php echo $_SESSION['username']; ?></button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a href="seller_dashboard.php">Dashboard</a></li>
    <li><a href="logout.php" onclick="return logout()">Log Out</a></li>
  </ul>
            <?php } else {
        ?>
      <!--if not logged in-->
    <button class="btn btn-white dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fas fa-thin fa-user"></i></button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a href="login.php">Log In</a></li>
    <li><a href="registration.php">Sign Up</a></li>
  </ul>
  </li>
        <?php
    } ?>

  <!--products-->
  <li class="nav-item text-underline-hover">
    <a class="nav-link text-black" href="Product_view.php">Products</a>
    </li>

<!--about-->
        <li class="nav-item text-underline-hover">
    <a class="nav-link text-black" href="about.php" >About</a>
    </li>

<!--searchbox-->    
    <li class="nav-item d-flex ">
      <div class="searchbox">
    <form method="POST" class="d-flex" action="#"class="overlay">
    <input class="form-control" id="header_search_field" type="search" placeholder="Search" aria-label="Search">
      <!--<button class="btn btn-outline-dark" type="submit">Search</button>-->    
      </form> </div>  
</li> 
</ul>
</form>
</div></div></nav>

<div id="header_search"></div>




