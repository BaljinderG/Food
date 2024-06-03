<!DOCTYPE html>
<html lang="en">
<head>
    <!--Define the character set used:-->
    <meta charset="UTF-8">
    <!--Setting the viewport to make your website look good on all devices:-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Define a description of your web page:-->  
    <meta name="description" content="Online Shopping">
    <!--Define keywords for search engines:-->
    <meta name="keywords" content="Online Shopping">
      <!--Define the author of a page:-->
    <meta name="author" content="Baljinder">
    <!--Refresh document every 30 seconds:-->
   <!-- <meta http-equiv="refresh" content="60">-->
    <!--Title for Web page-->
    <title>Final Webs</title>
    

     <!-- Latest compiled and minified CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     
     <!--Stylesheet-->
    <link rel="stylesheet" href="css/style.css">

      <!-- latest jquery -->
    
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
</head>
<body>
  <div class="container-fluid pos-f-t sticky-top header" id="header_frame">
  
  <nav class="navbar navbar-dark  ">
    
  <img src="images/logo-horizontal.png" class="img-fluid  ">


   <!--<input type="text" class="search-click form-control" name="" placeholder="search here..." />-->
    <div>
    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search for your food item/category" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><i class="fa fa-search"></i></button>
      </form>
  
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <!-- <i class="navbar-toggler-icon" onclick="myFunction(this)"></i> -->
      <i onclick="myFunction(this)" class="fa fa-bars"></i>
    </button>
    </div>
    
   
    
  </nav>
  
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-2">
            <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="categories.php">Categories</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="products.php">Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="cart.php">My Cart</a>
        </li>
        <li class="nav-item dropdown w-100 w-lg-auto">
								<a class="nav-link dropdown-toggle show" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">Account</a>
								<ul class="dropdown-menu show" data-bs-popper="static">
									<li><a class="dropdown-item" href="signIn.php">Sign in</a></li>
									<li><a class="dropdown-item" href="signUp.php">Signup</a></li>
									<li><a class="dropdown-item" href="forgotPassword.php">Forgot Password</a></li>
									<li class="dropdown-submenu dropend">
										<a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="account.php">My Account</a>
										<ul class="dropdown-menu">
											<li><a class="dropdown-item" href="account-orders.php">Orders</a></li>
											<li><a class="dropdown-item" href="account-settings.php">Settings</a></li>
											<li><a class="dropdown-item" href="account-address.php">Address</a></li>
											<li><a class="dropdown-item" href="account-payment-method.php">Payment Method</a></li>
											<li><a class="dropdown-item" href="account-notification.php">Notification</a></li>
										</ul>
									</li>
								</ul>
							</li>
        <li class="nav-item">
            <a class="nav-link" href="checkout.php">CheckOut</a>
        </li>
        </ul>
    </div>
  </div>
</div>
