<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $homepagedetails->label17;?> </title>
    <meta name="author" content="Electrical Shop">
   

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <!-- <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json"> -->
   

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,100;9..40,200;9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&family=Lexend:wght@300;400;500;600;700;800;900&family=Lobster&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <!--link rel="stylesheet" href="assets/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css"-->
    
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
   
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/fontawesome.min.css';?>">
    
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/magnific-popup.min.css';?>">
    
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/swiper-bundle.min.css';?>">
  
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/responsive.css';?>">

</head>

<body>
<?php include('header.php');?>
<?php
if (isset($_GET['cur']))
{
   $cur=$_GET['cur']; 
}
else{
    $cur='AED'; 
}
?>

<script>

function curchange(val){
   <?php $url=base_url().'/contact-us';



?>

    //alert("curchange");
    location.href="<?php echo $url;?>"+'?cur='+val;
}

</script>


    
    <!--div class="preloader ">
       
        <div class="preloader-inner">
            <div class="loader">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div-->
    <!--div id="QuickView" class="white-popup mfp-hide">
        <div class="container bg-white rounded-10">
            <div class="row gx-60">
                <div class="col-lg-6">
                    <div class="product-big-img">
                        <div class="img"><img src="assets/img/product/product_details_1_1.jpg" alt="Product Image"></div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="product-about">
                        <p class="price">$120.85<del>$150.99</del></p>
                        <h2 class="product-title">Bosco Apple Fruit</h2>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></div>
                            <a href="#" class="woocommerce-review-link">(<span class="count">4</span> customer reviews)</a>
                        </div>
                        <p class="text">Prepare to embark on a sensory journey with the Bosco Apple, a fruit that transcends the ordinary and promises an unparalleled taste experience. These apples are nothing short of nature’s masterpiece, celebrated for their distinctive blend of flavors and their captivating visual allure.</p>
                        <div class="mt-2 link-inherit">
                            <p>
                                <strong class="text-title me-3">Availability:</strong>
                                <span class="stock in-stock"><i class="far fa-check-square me-2 ms-1"></i>In Stock</span>
                            </p>
                        </div>
                        <div class="actions">
                            <div class="quantity">
                                <input type="number" class="qty-input" step="1" min="1" max="100" name="quantity" value="1" title="Qty">
                                <button class="quantity-plus qty-btn"><i class="far fa-chevron-up"></i></button>
                                <button class="quantity-minus qty-btn"><i class="far fa-chevron-down"></i></button>
                            </div>
                            <button class="th-btn">Add to Cart</button>
                            <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                        </div>
                        <div class="product_meta">
                            <span class="sku_wrapper">SKU: <span class="sku">Bosco-Apple-Fruit</span></span>
                            <span class="posted_in">Category: <a href="#">Fresh Fruits</a></span>
                            <span>Tags: <a href="#">Fruits</a><a href="#">Organic</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        </div>
    </div>
   
    <div class="sidemenu-wrapper sidemenu-cart d-none d-lg-block ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget woocommerce widget_shopping_cart">
                <h3 class="widget_title">Shopping cart</h3>
                <div class="widget_shopping_cart_content">
                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/e-shop/small-product1.png" alt="Cart Image">MPCB</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>940.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/e-shop/small-product1.png" alt="Cart Image">VALVE & ACTUATORS</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>899.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/e-shop/small-product1.png" alt="Cart Image">LIMIT SWITCH & SENSORE</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>756.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/e-shop/small-product1.png" alt="Cart Image">ENCLOSURES</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>723.00</span>
                            </span>
                        </li>
                       
                    </ul>
                    <p class="woocommerce-mini-cart__total total">
                        <strong>Subtotal:</strong>
                        <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">$</span>4398.00</span>
                    </p>
                    <p class="woocommerce-mini-cart__buttons buttons">
                        <a href="cart.html" class="th-btn wc-forward">View cart</a>
                        <a href="checkout.html" class="th-btn checkout wc-forward">Checkout</a>
                    </p>
                </div>
            </div>
        </div>
    </div> 
   
    <div class="sidemenu-wrapper sidemenu-info d-none d-lg-block ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget  ">
                <div class="th-widget-about">
                    <div class="about-logo">
                        <a href="#"><img src="assets/img/logo-eletrical.png" alt="logo"></a>
                    </div>
                    <p class="about-text">We provide specialized winterization services to safeguard your pool during the off-season, and when spring arrives, we handle the thorough opening process.</p>
                    <div class="th-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget  ">
                <h3 class="widget_title">Contact Us</h3>
                <div class="th-widget-contact">
                    <div class="info-box">
                        <div class="info-box_icon">
                            <i class="fas fa-location-dot"></i>
                        </div>
                        <p class="info-box_text">8502 Preston Rd. Inglewood, Maine 98380</p>
                    </div>
                    <div class="info-box">
                        <div class="info-box_icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <p class="info-box_text">
                            <a href="tel:+16326543564" class="info-box_link">+(163)-2654-3564</a>
                            <a href="tel:+16326545432" class="info-box_link">+(163)-2654-5432</a>
                        </p>
                    </div>
                    <div class="info-box">
                        <div class="info-box_icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <p class="info-box_text">
                            <a href="mailto:help24/7@electrical.com" class="info-box_link">help24/7@electrical.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="widget newsletter-widget  ">
                <h3 class="widget_title">Newsletter</h3>
                <p class="footer-text">Sign up to get update news about us</p>
                <form class="newsletter-form">
                    <input class="form-control" type="email" placeholder="Enter Email" required="">
                    <button type="submit" class="th-btn">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="electric shop#"><img src="assets/img/logo-eletrical.png" alt="Electrical Shop"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="#">Home</a>
                       
                    </li>
                   
                    <li class="menu-item-has-children">
                        <a href="#">Bulk Enquiry</a>
                        <ul class="sub-menu">
                            <li><a href="#">Bulk Enquiry</a></li>
                            <li><a href="#">Bulk Enquiry</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Brands</a>
                        <ul class="sub-menu">
                            <li><a href="#">Brands</a></li>
                            <li><a href="#">Brands</a></li>
                            <li><a href="#">Brands</a></li>
                            <li><a href="#">Brands</a></li>
                            <li><a href="#">Brands</a></li>
                            <li><a href="#">Brands</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Product</a>
                        <ul class="sub-menu">
                            <li><a href="#">Product</a></li>
                            <li><a href="#">Product Details</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="#">Clearance</a>
                    </li>
                    <li><a href="#">About Us</a></li>
                  
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<header class="th-header header-layout3">
        
    <div class="menu-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <div class="header-logo">
                        <a href="#"><img src="assets/img/e-shop/nexa/logo.png" alt="nexa"></a>
                    </div>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <form class="header-search" id="frmser" method="post" action="" novalidate="novalidate">
                        <input type="text" placeholder="Enter Keyword" name="serquery">
                        <label id="serquery-error" class="error errpopupmsg" for="serquery" style="color:#fff"></label>
                        <button type="submit"><i class="far fa-search"></i></button>
                    </form>
                </div>

                <div class="col-auto">
                        <div class="call-menu dis-block">
                           

                            <div class="box-icon dis-inblock">
                                <i class="fa fa-envelope" "=""></i>
                            </div>
                            <div class="media-body dis-inblock">
                               
                                <h3 class="box-title"><a href="mailto:contact@nexaelectric.com">contact@nexaelectric.com</a></h3>
                            </div>
                           
                            </div> 
                            <div class="call-menu dis-block">
                            <div class="box-icon dis-inblock">
                            <i class="fa fa-phone"></i>
                            </div>
                            <div class="media-body dis-inblock">
                               
                            <h3 class="box-title"><a href="tel:++971 54 794 2828">+971 54 794 2828</a></h3>
                            </div>
                       
                    </div> 
                    </div>
                   
              
               
                <div class="col-auto">
                    <div class="custom-block">
                      
                    </div>
                    <div class="header-icons">
                        <a href="#" class="icon-btn d-none d-sm-block"><i class="far fa-user"></i></a>
                        <a href="#" class="icon-btn d-none d-sm-block">
                            <span class="badge wishlistcount">0</span>
                            <i class="far fa-heart"></i>
                        </a>
                        <button type="button" class="icon-btn sideMenuToggler" id="cartbt">
                            <span class="badge">0</span>
                            <i class="far fa-cart-shopping"></i>
                        </button>

                        <div class="dropdown-link aed-sec">
                            <a class="" href="#"><img src="./assets/img/e-shop/menu-icon.png" alt="menuicon">  AED</a>
                           
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
      
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                   
                    <div class="ms-auto text-right">
                        <nav class="main-menu menu-style1 d-none d-lg-inline-block">
                        <ul>





<li class="Sale-box">
                    <a href="clearancesale.html">Clearance Sale</a>
                </li>
               
                




                    <li class="menu-item-has-children ">
                    <a href="#">Brands</a>
                    



                    <ul class="sub-menu">

                                                <li><a href="#">Schneider</a></li>

                                                    <li><a href="#">Test brand1</a></li>

                                                    <li><a href="#">Omron</a></li>

                                                    <li><a href="#">Alfanar</a></li>

                                                    <li><a href="#">Bticino</a></li>

                                                    <li><a href="#">Himel</a></li>

                                                    <li><a href="#">Siemens</a></li>

                                                    <li><a href="#">Gm</a></li>

                                                    <li><a href="#">Eaton</a></li>

                                                    <li><a href="#">Abb</a></li>

                                                    <li><a href="#">RR Kabel</a></li>

                        
                        </ul>
                </li>


                    




                    <li class="menu-item-has-children ">
                    <a href="product.html">Products</a>
                    



                    <ul class="sub-menu">

                                                <li><a href="#">Capacitor Switches &amp; Sockets</a></li>

                                                    <li><a href="#">LED Lights</a></li>

                                                    <li><a href="#">PLC &amp; HMI</a></li>

                                                    <li><a href="#">Network Accessories</a></li>

                                                    <li><a href="#">Timers</a></li>

                                                    <li><a href="#">RCCB &amp; RCBO</a></li>

                                                    <li><a href="#">MCB &amp; MCCB</a></li>

                                                    <li><a href="#">Float Switch</a></li>

                                                    <li><a href="#">Hour Meter</a></li>

                                                    <li><a href="#">yyyy</a></li>

                                                    <li><a href="#">xxxx</a></li>

                        
                        </ul>
                </li>


                    



<li class="">
                    <a href="about.html">About Us</a>
                </li>
               
                



<li class="">
                    <a href="#">Contact</a>
                </li>

                <li class="">
                    <a href="login.html">Enquiry</a>
                </li>
               
            
            </ul>                             
                        </nav>
                        <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</header--->

    <!--==============================
Hero Area
==============================-->
   <!--==============================
    Breadcumb
============================== -->
<!--div class="breadcumb-wrapper " data-bg-src="<?php //echo base_url().'assets/img/e-shop/inner-banner-img.png';?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="banner-img">
                    <img src="<?php //echo base_url().'assets/img/e-shop/banner-3.png';?>"/>
                </div>
               
            </div>
            <div class="col-lg-7 col-md-7">
                <div class="inner-banner-content">
                    <h1 class="breadcumb-title">ContactUs</h1>
                    <p>If you have any questions, comments, or concerns, please don't hesitate to reach out to us.</p>
                    <a href="#" class="th-btn call-bnr-btn"><span class="icon-des"><i class="fa fa-phone"></i></span> <?//=$sitedetails['phone_number_1']?></a>
                
                </div>

            </div>
        </div>
     
    </div>
</div-->


<div class="breadcumb-wrapper" data-bg-src="assets/img/e-shop/about-banner.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5">
               
               
            </div>
            <div class="col-lg-6 col-md-6">
               <div class="banner-contact-form1">
                <form class="php-email-form1 aos-init1 aos-animate1"  id="frmcontact" method="post" action="<?php echo base_url().'Home/contactenqprocess';?>">
                <!--form id="frmcontact" novalidate="true" class="contactForm" method="post" action="<?php //echo base_url().'Home/contactenqprocess';?>"-->
                    <div class="row gy-4">
      
                      <div class="col-md-6">
                      <input type="hidden" name="type" class="form-control" >
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                      </div>
      
                      <div class="col-md-6 ">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                      </div>


                      <div class="col-md-6">
                        <input type="text" name="phone_number"  class="form-control" placeholder="Your Phone" required="">
                      </div>
      
                      <div class="col-md-6 ">
                       
                        <div class="form-group">
                               
                                   
                                <select class="form-select" name="country" required>
                                <option value=''>Select Country</option>

                                <?php foreach($countries as $re){ ?>
                                        <option value="<?php echo $re['country_name'];?>"><?php echo $re['country_name'];?></option>
                                        <?php } ?>
                                        
                                    </select>
                                </div>



                      </div>
      
                      <div class="col-md-12">
                        <input type="text" class="form-control" name="msg_subject" placeholder="Subject" required="">
                      </div>
      
                      <div class="col-md-12">
                        <textarea class="form-control" name="message" id="message" rows="6" placeholder="Message" required=""></textarea>
                      </div>
      
                      <div class="col-md-12 text-center">
                        <button type="submit" class="th-btn style3">Send Message</button>


                        <div id="msg" style='color:white' class="h5 text-center hidden"></div>
      
                      
                      </div>
      
                    </div>
                  </form>
               </div>

            </div>
        </div>
     
    </div>
</div>
   

   

    <!--==============================
Contact Info Area  
==============================-->
<div class="space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-md-7">
                <div class="title-area text-center">
                    <h2 class="sec-title">Contact Information</h2>
                    <p class="sec-text">If you have any questions, comments, or concerns, please don't hesitate to reach out to us.</p>
                </div>
            </div>
        </div>
       
            <div class="container">

                <!-- location 1st section   -->
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-5">
                        <div class="contact-details-info">
                          
                          <h5>Nexa Group of Companies</h3>
                            <div class="contact-feature">
                                <div class="box-icon">
                                    <i class="fa-light fa-location-dot"></i>
                                </div>
                                <a href="https://maps.app.goo.gl/9f6n5g25kMphqfmw6" class="address-contact">
                                <div class="media-body">
                                    <h3 class="box-title">Address</h3>
                                    <p class="box-text">Al Qusais Industrial Area 1- Dubai- UAE</p>
                                </div>
                            </div>
                           
                         
                            <div class="contact-feature">
                                <div class="box-icon bg-theme2">
                                    <i class="fa-light fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Phone Number</h3>
                                    <p class="box-text">
                                        <a href="tel:971 4 3453029">+97143453029</a>
                                    </p>
                                </div>
                            </div>
                         
                        
                            <div class="contact-feature">
                                <div class="box-icon bg-title">
                                    <i class="fa-light fa-envelope"></i>
                                </div>
                                <div class="media-body">
                                    <h3 class="box-title">Email Address</h3>
                                    <p class="box-text">
                                        <a href="mailto:info@electricalshope.com">admin@nexaelectric.com</a>
                                    </p>
                                </div>
                            </div>
                          
                            <div class="contact-feature">
                                <div class="media-body">
                                    <h3 class="box-title">Follow Social Media</h3>
                                    <div class="th-social">
                                        <!--a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                        <a target="_blank" href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a-->

                                        <a target="_blank" href="<?php echo $sitedetails['facebook_url']?>"><i class="fab fa-facebook-f"></i></a>
                                        <a target="_blank" href=<?php echo $sitedetails['twitter_url']?>"><i class="fab fa-twitter"></i></a>
                                        <a target="_blank" href="<?php echo $sitedetails['instagram_url']?>"><i class="fab fa-instagram"></i></a>
                                        <a target="_blank" href="<?php echo $sitedetails['site_linkldn']?>"><i class="fab fa-linkedin-in"></i></a>



                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
    
                <div class="col-lg-6 col-md-6">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3607.648866404972!2d55.38347907402816!3d25.282394828247153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjXCsDE2JzU2LjYiTiA1NcKwMjMnMDkuOCJF!5e0!3m2!1sen!2sbd!4v1718886785930!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
    
                    </div>
            </div>

<!-- location 2nd section   -->
            <div class="row justify-content-center mt-50">


                <div class="col-lg-6 col-md-6">
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d14431.87778228159!2d55.29205791900292!3d25.27161325725299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjXCsDE2JzE3LjciTiA1NcKwMTgnMzcuOCJF!5e0!3m2!1sen!2sbd!4v1718886723289!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
    
                    </div>




                <div class="col-lg-5 col-md-5">
                    <div class="contact-details-info">
                      
                      <h5>Nexa electricals trading LLC (Showroom)</h3>
                        <div class="contact-feature">
                            <div class="box-icon">
                                <i class="fa-light fa-location-dot"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Address</h3>
                                <p class="box-text">Showroom Number 7, Al Nakhal Road, Deira, Dubai -UAE</p>
                            </div>
                        </div>
                       
                     
                        <div class="contact-feature">
                            <div class="box-icon bg-theme2">
                                <i class="fa-light fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Phone Number</h3>
                                <p class="box-text">
                                    <a href="tel:97143453029">+97145805883</a>
                                </p>
                            </div>
                        </div>
                     
                    
                        <div class="contact-feature">
                            <div class="box-icon bg-title">
                                <i class="fa-light fa-envelope"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="box-title">Email Address</h3>
                                <p class="box-text">
                                    <a href="mailto:info@electricalshope.com">deira@nexaelectric.com</a>
                                </p>
                            </div>
                        </div>
                      
                        <div class="contact-feature">
                            <div class="media-body">
                                <h3 class="box-title">Follow Social Media</h3>
                                <div class="th-social">
                                    <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a target="_blank" href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

         
        </div>

<!-- location 3rd section   -->
        <div class="row justify-content-center mt-50">
            <div class="col-lg-5 col-md-5">
                <div class="contact-details-info">
                  
                  <h5>Nexa Switchgear Manufacturing LLC</h3>
                    <div class="contact-feature">
                        <div class="box-icon">
                            <i class="fa-light fa-location-dot"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title">Address</h3>
                            <p class="box-text">Warehouse number 3, Al Qusais Industrial Area 1- Dubai- UAE</p>
                        </div>
                    </div>
                   
                 
                    <div class="contact-feature">
                        <div class="box-icon bg-theme2">
                            <i class="fa-light fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title">Phone Number</h3>
                            <p class="box-text">
                                <a href="tel:97143453029">+97143453029</a>
                            </p>
                        </div>
                    </div>
                 
                
                    <div class="contact-feature">
                        <div class="box-icon bg-title">
                            <i class="fa-light fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="box-title">Email Address</h3>
                            <p class="box-text">
                                <a href="mailto:estimation@nexaelectric.com">estimation@nexaelectric.com</a>
                            </p>
                        </div>
                    </div>
                  
                    <div class="contact-feature">
                        <div class="media-body">
                            <h3 class="box-title">Follow Social Media</h3>
                            <div class="th-social">
                                <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                                <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a target="_blank" href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.6470293159964!2d55.3859771!3d25.2824566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d000a0fdcc5%3A0x5be4d9e6489ddaae!2sNexa%20Switchgear%20Manufacturing%20LLC!5e0!3m2!1sen!2sin!4v1718887166641!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            </div>
    </div>


    <!-- location 4th section   -->
    <div class="row justify-content-center mt-50">

        <div class="col-lg-6 col-md-6">
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3607.648866404972!2d55.38347907402816!3d25.282394828247153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjXCsDE2JzU2LjYiTiA1NcKwMjMnMDkuOCJF!5e0!3m2!1sen!2sbd!4v1718887364620!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    
            </div>
        <div class="col-lg-5 col-md-5">
            <div class="contact-details-info">
              
              <h5>Nexa Electricals Trading LLC (Office )</h3>
                <div class="contact-feature">
                    <div class="box-icon">
                        <i class="fa-light fa-location-dot"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="box-title">Address</h3>
                        <p class="box-text">Al Qusais Industrial Area 1- Dubai- UAE</p>
                    </div>
                </div>
               
             
                <div class="contact-feature">
                    <div class="box-icon bg-theme2">
                        <i class="fa-light fa-phone"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="box-title">Phone Number</h3>
                        <p class="box-text">
                            <a href="tel:97143453029">97143453029</a>
                        </p>
                    </div>
                </div>
             
            
                <div class="contact-feature">
                    <div class="box-icon bg-title">
                        <i class="fa-light fa-envelope"></i>
                    </div>
                    <div class="media-body">
                        <h3 class="box-title">Email Address</h3>
                        <p class="box-text">
                            <a href="mailto:admin@nexaelectric.com">admin@nexaelectric.com</a>
                        </p>
                    </div>
                </div>
              
                <div class="contact-feature">
                    <div class="media-body">
                        <h3 class="box-title">Follow Social Media</h3>
                        <div class="th-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a target="_blank" href="https://pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
    </div>

  
</div>

<!-- location 5th section   -->
<div class="row justify-content-between mt-50">
    <div class="col-lg-12">
        <h4 class="mb-0"> Sales enquiries
        </h4>
    </div>
</div>
<div class="row justify-content-center mt-20 sales-bx-area">

    <div class="col-lg-4 col-md-4">
        <div class="contact-details-info">
         
           
            <div class="contact-feature">
                <div class="box-icon bg-title">
                    <i class="fa-light fa-envelope"></i>
                </div>
                <div class="media-body">
                    <h3 class="box-title">Electrical and Automation Spare parts</h3>
                    <p class="box-text">
                        <a href="mailto:admin@nexaelectric.com">admin@nexaelectric.com</a>
                    </p>
                </div>
            </div>
            
        </div>
</div>
<div class="col-lg-4 col-md-4">
    <div class="contact-details-info">
     
       
       
        <div class="contact-feature">
            <div class="box-icon bg-title">
                <i class="fa-light fa-envelope"></i>
            </div>
            <div class="media-body">
                <h3 class="box-title">Switchgear manufacturing enquiries</h3>
                <p class="box-text">
                    <a href="mailto:admin@nexaelectric.com">estimation@nexaelectric.com</a>
                </p>
            </div>
        </div>
        
    </div>
</div>

<div class="col-lg-4 col-md-4">
    <div class="contact-details-info">
    
       
       
        <div class="contact-feature">
            <div class="box-icon bg-title">
                <i class="fa-light fa-envelope"></i>
            </div>
            <div class="media-body">
                <h3 class="box-title">Feedback <br> Complaints</h3>
                <p class="box-text">
                    <a href="mailto:admin@nexaelectric.com">feedback@nexaelectric.com</a>
                </p>
            </div>
        </div>
        
    </div>
</div>
</div>
              
            </div>
      
    </div>
</div>

<?php include('footer.php');?>


<script>
$('form[id="frmcontact"]').validate({  
    rules: {  
      name: 'required',  
      msg_subject: 'required',
      phone_number:'required',  
      email: {  
        required: true,  
        email: true,  
      }, 
      message:"required", 
      country:"required",
      //producttype:"required",
      //brand:"required",
    },  
    messages: {  
      name: '<font color=#fff>Name is required</font>',  
      msg_subject: '<font color=#fff>Subject is required</font>',  
      phone_number: '<font color=#fff>Enter a valid Phone</font>',
      email: '<font color=#fff>Enter a valid Email</font>',  
      //producttype:"Enter a valid Product Type",
      message:'<font color=#fff>Please enter Message</font>',
      country:"<font color=#fff>Please enter Country</font>", 
    },  
    submitHandler: function(form) { 
      

            $.ajax({
	url: form.action,
	type: form.method,
	data: $(form).serialize(),
	success: function(response) {
        $('input[type=text]').each(function() {
        $(this).val('');
    });
    
    $("#email").val('');
    $("#message").val('');
    
		//$('#msg').html(response);
        $('#msg').html("Your enquiry send successfully");
	}            
      });		
}





      //form.submit();  
   // }  
  }); 
  


    </script>



<!--==============================
Contact Area   
==============================-->
 
 

    
 
   
  
  
   
   
<!--div class="footer-top-newsletter space-50">
    <div class="container">
        <div class="newsletter-content ">
            <div class="newsletter">
                <h4 class="newsletter-title">News Letter</h4>
                <p class="about-text">lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <form class="newsletter-form">
                <div class="form-group">
                    <input class="form-control" type="email" placeholder="Email Address" required="">
                </div>
                <button type="submit" class="th-btn style3">Subscribe</button>
            </form>
        </div>
    </div>
</div>
<footer class="footer-wrapper footer-layout3">
      <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-auto">
                    <div class="footer-widget">
                        <div class="th-widget-about">
                            <div class="about-logo">
                                <a href="#"><img src="assets/img/e-shop/nexa/logo.png" alt="eletrical"></a>
                            </div>
                            <p class="about-text">ELECTRICAL SHOPE is a team of highly skilled and experienced engineers ensuring excellence in multi-disciplinary areas with proficiency in all kinds of Products, Solutions, and Services. Our team is committed to offer an amazing experience for the client .</p>
                            <div class="th-social">
                                <a href="#/"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget_nav_menu footer-widget">
                        <h3 class="widget_title">Quick Links</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Help & FAQs</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget_nav_menu footer-widget">
                        <h3 class="widget_title">Categories</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="#">MPCB</a></li>
                                <li><a href="#">PLC & HMI</a></li>
                                <li><a href="#">CAPACITORS</a></li>
                                <li><a href="#">SWITCH & SOCKET</a></li>
                                <li><a href="#">LIMIT SWITCH & SENSORE</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
               
                <div class="col-md-6 col-xl-auto">
                    <div class="footer-widget">
                        <h3 class="widget_title">Contact Us</h3>
                        <div class="th-widget-contact">
                            <div class="info-box">
                                <div class="info-box_icon">
                                    <i class="fas fa-location-dot"></i>
                                </div>
                                <p class="info-box_text">Nexa electricals trading LLC Dubai-UAE</p>
                            </div>
                            <div class="info-box">
                                <div class="info-box_icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <p class="info-box_text">
                                    <a href="tel:+97145805883" class="info-box_link">+97145805883</a>
                                   
                                </p>
                            </div>
                            <div class="info-box">
                                <div class="info-box_icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <p class="info-box_text">
                                    <a href="mailto:contact@nexaelectric.com" class="info-box_link">contact@nexaelectric.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap" data-bg-src="assets/img/bg/copyright_bg_1.png">
        <div class="container">
            <div class="row gy-2 align-items-center">
                <div class="col-md-12 col-lg-12 ">
                    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2023 <a href="#">Nexa</a>. All Rights Reserved.</p>
                </div>
                
            </div>
        </div>
    </div>
</footer>

   
    <div class="button__cover">
        <a href="tel:+971 50 964 8779 "><i class="fab fa-whatsapp"></i></a>
        <a href="#" target="_blank"> <i class="fas fa-location-dot"></i> </a>
    </div>

    
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>

   
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>

    <script src="assets/js/swiper-bundle.min.js"></script>
  
    <script src="assets/js/bootstrap.min.js"></script>
    
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
  
    <script src="assets/js/jquery.counterup.min.js"></script>
   
    <script src="assets/js/jquery-ui.min.js"></script>

    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <script src="assets/js/main.js"></script-->





</body>

</html>