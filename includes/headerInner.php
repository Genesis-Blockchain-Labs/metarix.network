<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Metarix - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/metrix_fav_icon.png" rel="icon">
  <link href="img/metrix_fav_icon.png" rel="apple-touch-icon">

  <!-- font awsome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Bootstrap Files -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- data_aoes_link -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="css/style.css" >


  <!-- ========================================================  -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" >
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php"><img src="img/metarix_update_2022.png" alt=""></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
            <li class="nav-link scrollto active dropdown"><a href="#Products"><span>Products</span> <i class="fa fa-chevron-down"></i></a>
                <ul>
                    <li><a href="market_place.php" >Market Place</a></li>
                    <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="fa fa-chevron-right"></i></a>
                        <ul>
                        <li><a href="#">Deep Drop Down 1</a></li>
                        <li><a href="#">Deep Drop Down 2</a></li>
                        <li><a href="#">Deep Drop Down 3</a></li>
                        <li><a href="#">Deep Drop Down 4</a></li>
                        <li><a href="#">Deep Drop Down 5</a></li>
                        </ul>
                    </li> -->
                    <li><a href="metarix_sdk.php" >Metarix SDK</a></li>
                    <li><a href="asset_store.php" >Asset Store</a></li>
                    <!-- <li><a href="#">Drop Down 3</a></li>
                    <li><a href="#">Drop Down 4</a></li> -->
                </ul>
            </li>
          <li><a class="nav-link scrollto" href="#Token">Token Sale</a></li>
          <li><a class="nav-link scrollto" href="#Roadmap">Roadmap</a></li>
          <li><a class="nav-link scrollto" href="#Teams">Team</a></li>
          <li><a class="nav-link scrollto" href="#Partners">Partners</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="#">More</a></li>
          <li><a class="nav-link scrollto"  href="contact.php">Contact</a></li>
          <li><a class="getstarted scrollto" href="#">Whitepaper</a></li>
          <li><a class="getstarted scrollto"  href="staking.php">Staking</a></li>
        </ul>
        <i class="fa fa-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$(".nav-link").click(function(){
		window.location.href="https://dev.metarix.network"+$(this).attr("href");
	});
})
</script>