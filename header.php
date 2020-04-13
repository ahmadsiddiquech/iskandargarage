<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="XpertSpot">
<link rel="icon"  href="images/ilogo.png">
<link rel="stylesheet" type="text/css" href="revolution/css/settings.css">	
<!-- RS5.0 Layers and Navigation Styles -->
<link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/ionicons.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!-- Online Fonts -->
<link href='https://fonts.googleapis.com/css?family=Martel+Sans:400,200,300,600,700,800,900|Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<style type="text/css">
  .layer {
    background-color: rgba(248, 247, 216, 0.7);
    position: absolute;
    top: 0;
    left: 0;
    width: 78%;
    height: 60%;
    margin-left: 10%;
}
</style>
<!-- Wrap -->
<div id="wrap"> 
  
  <!-- header -->
  <header> 
    
    <!-- Logo -->
    <div class="container">
      <div class="logo"> <a href="#."><img  class="img-responsive" src="images/ilogo.png" alt="" height="80" width="80"></a> </div>
      
      <!-- INFO -->
      <div class="top-info-con">
        <ul>
          
          <!-- Call Us Now -->
          <li >
            <div class="media-left">
              <div class="icon"> <i class="icon-call-in"></i></div>
            </div>
            <div class="media-body">
              <h6>Call Us Now </h6>
              <a href="tel:+971-55-2078666">+971-55-2078666</a>
            </div>
          </li>
          
          <!-- Email us -->
          <li>
            <div class="media-left">
              <div class="icon"> <i class="icon-envelope-open"></i></div>
            </div>
            <div class="media-body">
              <h6>Email us</h6>
              <a href="mailto:info@iskandargarage.ae" style="text-transform: lowercase;">info@iskandargarage.ae</a>
            </div>
          </li>
          
          <!-- Opening Time -->
          <li>
            <div class="media-left">
              <div class="icon"> <i class="icon-clock"></i></div>
            </div>
            <div class="media-body">
              <h6>Opening Hours </h6>
              <p>Mon - Sat : 9am to 7pm</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <?php 
      $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      $uri = explode('/', $uri_path);
    ?>
    <!-- Navigation -->
    <nav class="navbar">
      <div class="container">
        <ul class="nav ownmenu">
          <li <?php if($uri[2]=='index.php' || $uri[2]==''){ print_r('class="active"'); } ?> > 
            <a href="index.php">Home</a> 
          </li>
          <li <?php if($uri[2]=='services.php' || $uri[2]=='service_detail.php'){ print_r('class="active"'); } ?> > 
            <a href="services.php">Services</a>
            <ul class="dropdown animated-3s fadeInRight">
              <li> <a href="#">Tires</a> </li>
              <li> <a href="#">Diagnostics</a> </li>
              <li> <a href="#">Engine,Cooling,Exhaust</a> </li>
              <li> <a href="#">External Vehicle Parts</a> </li>
              <li> <a href="#">Heating and Air Conditioning</a> </li>
              <li> <a href="#">Lighting and Horns</a> </li>
              <li> <a href="#">Auto Maintenance</a> </li>
              <li> <a href="#">Auto Powertrain</a> </li>
            </ul>
          </li>
          <li <?php if($uri[2]=='products.php' || $uri[2]=='product_detail.php'){ print_r('class="active"'); } ?> > 
            <a href="products.php">Products</a> 
          </li>
          <li> <a href="#">Batteries</a> </li>
          <!-- <li> <a href="index.html">Pages &#8964;</a>
            <ul class="dropdown animated-3s fadeInRight">
              <li> <a href="index.html">Home</a> </li>
              <li> <a href="about.html">About</a> </li>
              <li> <a href="services.html">Services</a> </li>
              <li> <a href="work.html">Portfolio</a> </li>
              <li> <a href="blog.html">Blog</a> </li>
              <li> <a href="blog-detail.html">Blog Detail</a> </li>
              <li> <a href="contact.html">Contact</a> </li>
              <li> <a href="404-page.html">404</a> </li>
            </ul>
          </li> -->
          <li> <a href="#">Tyres</a> </li>
          <li> <a href="#">News</a> </li>
          <li> <a href="#">Contact us</a> </li>
        </ul>
        
        <!-- GET A QUOTES -->
        <div class="quotes"> <a href="#"> Add to Cart <i class="icon-basket margin-left-10"></i></a> </div>
      </div>
    </nav>
  </header>