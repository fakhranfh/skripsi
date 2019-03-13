<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="images/favicon.png" type="image/x-icon" />
    <!-- Theme tittle -->
    <title>Mineral Feed</title> 
    
    <!-- Theme style CSS -->       
    <link href="css/style.css" rel="stylesheet"> 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
     <!-- Header Area -->
     <header class="main_header_area">   
        <div class="searchForm">
            <form action="#" class="row">
                <div class="input-group">
                    <span class="input-group-addon"><i class="flaticon-search"></i></span>
                    <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                    <span class="input-group-addon form_hide"><i class="flaticon-close"></i></span>
                </div>
            </form>
        </div>
        <nav class="navbar navbar-expand-lg"> 
            <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a> 
            <!-- Small Divice Menu-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar_supported"  aria-label="Toggle navigation"> 
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <!-- Right Nav bar -->
            <!-- Right Nav bar -->
         
            <!-- Left Nav bar -->
            <div class="collapse navbar-collapse navbar_supported">
                <ul class="navbar-nav"> 
                <li><a href="{{route('formula')}}">Kebutuhan Nutrien</a></li>
                <li><a href="{{route('tekhnik')}}">Tekhnik Pengolahan Mineral</a></li>
                <li><a href="{{route('jenis_mineral')}}">Jenis Mineral</a></li>
                <li><a href="{{route('sumber_mineral')}}">Sumber Mineral</a></li>
                <li><a href="{{route('totalpremix')}}">Komposisi Premix</a></li>
                </ul>   
            </div>
        </nav>   
    </header>
    <!-- Header Area -->  
    <!-- Banner Area -->   
    <section class="banner_area" id="parallax">   
       <img src="images/bannar-shap-1.png" alt="" class="layer layer_1" data-depth="0.10">
       <img src="images/bannar-shap-2.png" alt="" class="layer layer_2" data-depth="0.35">
        <div class="container">
            <h2 class="wow fadeInUp">Mineral Feed </h2><br>
            <h4>Sistem Informasi Formulasi Pakan dan Premix</h4>
            <p class="wow fadeInUp" data-wow-delay="0.3s">Oleh Wira Pratama Sahroni D24140047</p>
            
            <img src="images/bannar-img1.jpg" alt="" class="bannar_img wow fadeInRight">
        </div> 
      
    </section>
    <!-- End Banner Area -->  
   <!-- Footer Area -->  
    <footer class="footer_area"> 
        <img src="images/footer-shap.png" alt="" class="shap">
        <div class="round_shap"></div>
        <div class="footer_inner row">   
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 footer_logo wow fadeIn">
                <a href="index.html"><img src="images/logo.png" alt=""></a> 
               
                    <ul class="footer_social"> 
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li> 
                </ul>
            </div>
            <div class="footer_widget fw_1 col-xl-2 col-lg-3 col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                <h4>Our Contact</h4>
                <ul class="footer_nav"> 
                    <li><a href="gmail.com">Email: sahroniwira@gmail.com</a></li>
                    <li><a href="#">Contact: 082299348902</a></li> 
                   
                </ul>
            </div>  
            <div class="footer_widget fw_2 col-xl-2 col-lg-3 col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                <h4>Campus Location</h4>
                <address>
                    Jl. Agatis Kampus IPB Darmaga, Bogor Jawa Barat <br>Kode Pos 16680
                    <a href="#" class="email">intp@ipb.ac.id</a>
                </address>
            </div> 
            
            <div class="footer_widget fw_2 col-xl-2 col-lg-3 col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                <img src="images/Capture.PNG" height="300px" alt="">
            </div> 
             
            
        </div> 
      
        <p class="copy_right">Mineral Feed © 2019 All rights reserved</p>
    </footer>
    <!-- End Footer Area --> 
    
    <!-- Scroll Top Button -->
    <button class="scroll-top">
        <i class="fa fa-angle-double-up"></i>
    </button>
    
    <!-- Preloader -->  
    <div class="preloader"></div>
    
    <!-- jQuery v3.3.1 -->
    <script src="js/jquery-3.3.1.min.js"></script>    
    <!-- Bootstrap v4.0.0 -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>  
    <!-- Extra Plugin -->
    <script src="vendors/animate-css/wow.min.js"></script> 
    <script src="vendors/parallaxmouse/parallax.min.js"></script> 
    <script src="vendors/counterup/jquery.waypoints.min.js"></script> 
    <script src="vendors/counterup/jquery.counterup.min.js"></script>  
    <script src="vendors/parallaxmouse/jquery.jqlouds.min.js"></script>  
    <script src="vendors/magnify-popup/jquery.magnific-popup.min.js"></script> 
    <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
    <script src="vendors/isotope/isotope.pkgd.min.js"></script>     
    <script src="vendors/bootstrap-selector/jquery.nice-select.min.js"></script>  
    <!-- Theme js / Custom js -->
    <script src="js/theme.js"></script> 
</body>
</html>
