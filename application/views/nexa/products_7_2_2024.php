<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $homepagedetails->label17;?> </title>
    <meta name="author" content="Electrical Shop">
   

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,100;9..40,200;9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&family=Lexend:wght@300;400;500;600;700;800;900&family=Lobster&display=swap" rel="stylesheet">

    <!--==============================
	    All CSS File
	============================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
   
   <link rel="stylesheet" href="<?php echo base_url().'assets/css/fontawesome.min.css';?>">
   
   <link rel="stylesheet" href="<?php echo base_url().'assets/css/magnific-popup.min.css';?>">
   
   <link rel="stylesheet" href="<?php echo base_url().'assets/css/swiper-bundle.min.css';?>">
 
   <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css';?>">
   <link rel="stylesheet" href="<?php echo base_url().'assets/css/responsive.css';?>">




</head>

<style>
.ui-slider-horizontal {
    height: 12px;
    width: 250px;
    margin-left:10px;   
margin-top:0px;
margin-bottom:0px;
}
.ui-slider .ui-slider-handle {
    height: 20px;
    width: 18px;
    padding-left: 5px;
}
</style>

<body>
<?php include('header.php');

if (isset($_GET['cur']))
{
   $cur=$_GET['cur']; 
}
else{
    $cur='AED'; 
}



?><?php
$currency = '';
if (isset($sitecurrency)) {
    $currency = $sitecurrency['currency'];
}

$url1=$this->uri->segment(2);
$url2=$this->uri->segment(3);

?>

<script>

function curchange(val){
   <?php $url=base_url().'/products/'.$url1.'/'.$url2;



?>

    //alert("curchange");
    location.href="<?php echo $url;?>"+'?cur='+val;
}



function sizefilter(val){
   <?php $url=base_url().'/products/'.$url1.'/'.$url2;



?>

    //alert("curchange");
    location.href="<?php echo $url;?>"+'?size='+val;
}




function colorfilter(val){
   <?php $url=base_url().'/products/'.$url1.'/'.$url2;



?>

    //alert("curchange");
    location.href="<?php echo $url;?>"+'?color='+val;
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
    
    
    
    <!--==============================
Product Lightbox
==============================-->
    <!--div id="QuickView" class="white-popup mfp-hide">
        <div class="container bg-white rounded-10">
            <div class="row gx-60">
                <div class="col-lg-6">
                    <div class="product-big-img">
                        <div class="img"><img src="<?=site_url()?>assets/img/product/product_details_1_1.jpg" alt="Product Image"></div>
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
                        <a href="#"><img src="<?=site_url()?>assets/img/logo-eletrical.png" alt="logo"></a>
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
                <a href="electric shop#"><img src="<?=site_url()?>assets/img/logo-eletrical.png" alt="Electrical Shop"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li class="menu-item-has-children">
                        <a href="index.html">Home</a>
                       
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
                            <li><a href="product.html">Product</a></li>
                            <li><a href="product-details.html">Product Details</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a href="clearancesale.html">Clearance</a>
                    </li>
                    <li><a href="about.html">About Us</a></li>
                  
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
                        <a href="#"><img src="<?=site_url()?>assets/img/e-shop/nexa/logo.png" alt="nexa"></a>
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
                            <a class="" href="#"><img src="<?=site_url()?>/assets/img/e-shop/menu-icon.png" alt="menuicon">  AED</a>
                           
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
                    <a href="index.html">Clearance Sale</a>
                </li>
               
                




                    <li class="menu-item-has-children ">
                    <a href="product.html">Brands</a>
                    



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
                    <a href="#">Enquiry</a>
                </li>
               
            
            </ul>                             
                        </nav>
                        <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</header-->

    <!--==============================
Hero Area
==============================-->
   <!--==============================
    Breadcumb
============================== -->
<div class="breadcumb-wrapper " data-bg-src="<?=site_url()?>assets/img/e-shop/product-banner.png" style="height: 300px;">
    <div class="container">
        <div class="row">
          
        </div>
     
    </div>
</div>
   

    <!--==============================
Contact Info Area  
==============================-->

<!--==============================
Category Area  
==============================-->
<section class="space-50 bg-smoke2" id="category-sec">
    <div class="container">
        <div class="title-area text-center">
            <h2 class="sec-title">Product Category</h2>
        </div>
        <div class="swiper th-slider" data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"3"},"768":{"slidesPerView":"4"},"992":{"slidesPerView":"5"},"1200":{"slidesPerView":"6"}}}'>
            <div class="swiper-wrapper">


            <?php 
                            
                            //print_r($categories);
                            
                            foreach ($categories as $category) { ?>


                               
                              
                <div class="swiper-slide">
                    <div class="category-box">
                        <div class="box-icon">
                            <img src="<?=site_url()?>assets/uploads/categories/<?=$category['cat_image']?>" alt="Image">
                        </div>
                     
                    </div>
                </div>
                <?php } ?>

                <!--div class="swiper-slide">
                    <div class="category-box">
                        <div class="box-icon">
                            <img src="assets/img/e-shop/circle-1.png" alt="Image">
                        </div>
                    
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="category-box">
                        <div class="box-icon">
                            <img src="assets/img/e-shop/circle-1.png" alt="Image">
                        </div>
                      
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="category-box">
                        <div class="box-icon">
                            <img src="assets/img/e-shop/circle-1.png" alt="Image">
                        </div>
                        
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="category-box">
                        <div class="box-icon">
                            <img src="assets/img/e-shop/circle-1.png" alt="Image">
                        </div>
                       
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="category-box">
                        <div class="box-icon">
                            <img src="assets/img/e-shop/circle-1.png" alt="Image">
                        </div>
                   
                    </div>
                </div-->

            </div>
        </div>
    </div>
</section>

 

   <!--==============================
Product Area  
==============================-->
<section class="space-50">
    <div class="container">
        <div class="row ">
            <div class="col-xl-3 col-lg-3 col-md-6 mb-40 mb-lg-0">
                <aside class="sidebar-area-product">
                   <h2>Category</h2>
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Brand</h4>
                           <li class="menu-item-has-children">
                                    <ul class="sub-menu">

                                    <?php 
                                     $i=0;
                                    foreach ($brands as $brand) { 
                                       
                                        if ($i<5){
                                        
                                        ?>
                                        <li><a href="<?php echo base_url().'products/brand/'.$brand['brand_canonial_name'];?>?cur=<?php echo $cur;?>"><?=$brand['brand_name']?>   </a></li>
                                        <!--li><a href="#">Alfanar   </a></li>
                                        <li><a href="#">Alfanar   </a></li>
                                        <li><a href="#">Alfanar   </a></li-->
                                        <?php }
                                    $i++;
                                    
                                    } ?>
                                    </ul>
                                </li>
                           
                        </div>
                        <!--div class="sidebar__item">
                            <h4>Price</h4>
                            <div class="price-range-wrap">
                                <input type="range" min="0" max="100" value="40" step="5" />
                            </div>
                        </div-->

                       <hr style:'width:20px' color='green'/>
                        <div class="sidebar__item sidebar__item__color--option">
                            <h4>Colors</h4>
                            <div class="sidebar__item__color sidebar__item__color--white" >
                                <label for="white">
                                    White
                                    <input type="radio" id="white" onclick="colorfilter('White')">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--gray" >
                                <label for="gray">
                                    Gray
                                    <input type="radio" id="gray" onclick="colorfilter('Gray')">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--red" >
                                <label for="red">
                                    Red
                                    <input type="radio" id="red" onclick="colorfilter('Red')">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--black">
                                <label for="black">
                                    Black
                                    <input type="radio" id="black" onclick="colorfilter('Black')">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--blue">
                                <label for="blue">
                                    Blue
                                    <input type="radio" id="blue" onclick="colorfilter('Blue')">
                                </label>
                            </div>
                            <div class="sidebar__item__color sidebar__item__color--green">
                                <label for="green">
                                    Green
                                    <input type="radio" id="green" onclick="colorfilter('Green')">
                                </label>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <h4>Popular Size</h4>
                            <div class="sidebar__item__size">
                                <label for="large">
                                    Large
                                    <input type="radio" id="large" onclick="sizefilter('Large')" >
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="medium">
                                    Medium
                                    <input type="radio" id="medium" onclick="sizefilter('Medium')">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="small">
                                    Small
                                    <input type="radio" id="small" onclick="sizefilter('Small')">
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label for="tiny">
                                    Tiny
                                    <input type="radio" id="tiny" onclick="sizefilter('Tiny')">
                                </label>
                            </div>
                        </div>
                       
                    </div>
                   
                   
                </aside>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-6">
                <div class="tab-content best-selling-product">
                    <!-- Single item -->
                    <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                        <div class="slider-area">
                            <div class="swiper th-slider has-shadow productSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"3"}}}'>
                                <div class="swiper-wrapper">
                                <?php if (count($best_selling)>0){?>
                                <?php foreach ($best_selling as $product) { ?>
                                    <!--div class="swiper-slide">
                                        <div class="th-product product-grid">
                                            <div class="product-img">
                                                <img src="<?=site_url()?>assets/img/e-shop/nexa/product-1.png" alt="Product Image">
                                                
                                                <div class="actions">
                                                    <a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                                    <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                                    <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1</a></h3>
                                             
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="left-content">
                                                            <div class="star-rating mt-2" role="img" aria-label="Rated 5.00 out of 5">
                                                                <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                            </div>
        
                                                            <div class="add-cart-sm mt-4">
                                                                <a href="#" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="right-content">
                                                            <div class="sku-txt">
                                                                <p>  <b>SKU </b>: 123456</p>
                                                            </div>
        
                                                            <div class="sku-txt">
                                                                <p>  <b>QAR </b>: 00000</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                              
                                            </div>
                                        </div>
                                    </div-->



                                    <div class="swiper-slide">
                                <div class="th-product product-grid">
                                    <div class="product-img">
                                        <img src="<?=site_url()?>assets/uploads/products/<?=$product['prod_primary_image']?>" alt="<?=$product['prod_name']?>">
                                        
                                        <span class="product-tag">
                                <?php if ($product['prod_canonial_name']){

echo round($product['discountper']).'% <br>OFF'; 

                                    }else{
                                             echo "Hot";
                                    }
                                    ?>
</span>



                                        <div class="actions">
                                            <a href="<?php echo site_url().'product/'.$product['prod_canonial_name']?>?cur=<?php echo $cur;?>" class="icon-btn popup-content1"><i class="far fa-eye"></i></a>
                                            <!--a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a-->
                                            
                                            <?php 
                                            
                                            $username=$this->session->userdata('username');
                                            
                                            if ($username==''){


                                             


if ($product['addtoquote']==1){ ?>
<a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a>

<?php } else { ?>


                                                <!--a href="<?php //echo base_url('home/login'); ?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->

                                                <a href="#"  onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="icon-btn"><i class="far fa-cart-plus"></i></a>

<?php } ?>







                                    <!--a href="<?php //echo base_url('home/login'); ?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->







                                    <?php  } else { 


if ($product['addtoquote']==1){

    ?>
    
    <a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a>
    
    
    
    
    <?php }else{
    
    
    
   
    


 
                                                ?>


                                        <a href="#"  onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="icon-btn"><i class="far fa-cart-plus"></i></a>


                                        <?php } } ?>
                                          

                                            <a href="javascript:void(0)" onclick=addwishlist(<?php echo $product['prod_id'];?>) class="icon-btn"><i class="far fa-heart"></i></a>


                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="<?php echo site_url().'product/'.$product['prod_canonial_name']?>?cur=<?php echo $cur;?>"><?=$product['prod_name']?></a></h3>
                                     
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="left-content">

                                                <div class="sku-txt">
                                                        <p> 
        
        <strike style="float:right;color:red"><b><?php 
                            
                            
                            $this->db->where('prod_dt_prodid',$product['prod_id']);
                            $this->db->where('prod_dt_typeid',4);

$this->db->select('*');
$this->db->from('product_details');
$query = $this->db->get();
$pricedt=$query->row();



if ($cur=='SAR'){
echo 'SAR '.$product['prod_price2'];

}
else if ($cur=='USD'){
echo 'USD '.$product['oldpriceusd'];

}



else{
echo  $currency.' '.$product['oldprice'];
}
                            
                            ?></b></strike>
    
    
    
    
    
    
    </p>
                                                    </div>

                                                    <!--div class="star-rating mt-2" role="img" aria-label="Rated 5.00 out of 5">
                                                        <span>Rated -----<strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                    </div-->

                                                    <div class="add-cart-sm mt-4">
                                                        <!--a href="#" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</a-->



                                                        <?php 
                                            
                                            $username=$this->session->userdata('username');
                                            
                                            if ($username==''){
                                                
                                                if ($product['addtoquote']==1){
                                                
                                                
                                                ?>
<a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Quote</a>




<?php }else{?>

    <a href="#"  onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</a>


<?php }?>

                                                <!--a href="<?php //echo base_url('home/login'); ?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->
                                        
                                                

                                            
                                            <?php } else { 

                                                if ($product['addtoquote']==1){

?>

<!--a href="<?php //echo base_url('viewquote'); ?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->

<a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Quote</a>




<?php }else{



?>

                                            
                                            <a href="#"  onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="th-btn"><i class="far fa-cart-shopping mr-5"></i>Add to Cart</a>
                                            <?php }} ?>









                                                    </div>
                                                </div>
                                            </div>

                                            <?php
                                            $this->db->where('prod_dt_prodid',$product['prod_id']);
        $this->db->where('prod_dt_typeid',4);
       // $this->db->order_by("orderno", "asc");
        $this->db->select('*');
        $this->db->from('product_details');
        $query = $this->db->get();
        $pricedt=$query->row();
       



        $this->db->where('prod_dt_prodid',$product['prod_id']);
        $this->db->where('prod_dt_typeid',15);
       // $this->db->order_by("orderno", "asc");
        $this->db->select('*');
        $this->db->from('product_details');
        $query = $this->db->get();
        $partdt=$query->row();

        //echo $partdt->prod_dt_desc;

        
        ?>

                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="right-content">
                                                <div class="sku-txt">
                                                        <p> <?php if ($cur=='SAR'){
            echo '<b>SAR : </b> '.$product['prod_price2'];

        }
        else if ($cur=='USD'){
            echo '<b>USD :</b>'.$product['prod_price3'];

        }
        
        
        
        else{
        echo  "<b>$currency : </b>".$pricedt->prod_dt_desc;
        } ?></p>
                                                    </div>
                                                    <div class="sku-txt">
                                                        <p>  <b>SKU </b>: <?=$partdt->prod_dt_desc;?></p>
                                                    </div>

                                                   
                                                </div>
                                            </div>
                                        </div>
                                       
                                      
                                    </div>
                                </div>
                            </div>

















                                    
                                    <?php } ?>
                                    <?php } else { ?>

<div class='text-center'><h6 style='color:red'>Sorry No Product found</h6></div>


<?php } ?>
        
                                    <!--div class="swiper-slide">
                                        <div class="th-product product-grid">
                                            <div class="product-img">
                                                <img src="<?=site_url()?>assets/img/e-shop/nexa/product-2.png" alt="Product Image">
                                                
                                                <div class="actions">
                                                    <a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                                    <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                                    <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1</a></h3>
                                               
                                               
                                             
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="left-content">
                                                            <div class="star-rating mt-2" role="img" aria-label="Rated 5.00 out of 5">
                                                                <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                            </div>
        
                                                            <div class="add-cart-sm mt-4">
                                                                <a href="#" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="right-content">
                                                            <div class="sku-txt">
                                                                <p>  <b>SKU </b>: 123456</p>
                                                            </div>
        
                                                            <div class="sku-txt">
                                                                <p>  <b>QAR </b>: 00000</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                              
                                            </div>
                                        </div>
                                    </div>
        
        
                                    <div class="swiper-slide">
                                        <div class="th-product product-grid">
                                            <div class="product-img">
                                                <img src="<?=site_url()?>assets/img/e-shop/nexa/product-3.png" alt="Product Image">
                                                
                                                <div class="actions">
                                                    <a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                                    <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                                    <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1</a></h3>
                                               
                                               
                                             
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="left-content">
                                                            <div class="star-rating mt-2" role="img" aria-label="Rated 5.00 out of 5">
                                                                <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                            </div>
        
                                                            <div class="add-cart-sm mt-4">
                                                                <a href="#" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="right-content">
                                                            <div class="sku-txt">
                                                                <p>  <b>SKU </b>: 123456</p>
                                                            </div>
        
                                                            <div class="sku-txt">
                                                                <p>  <b>QAR </b>: 00000</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                              
                                            </div>
                                        </div>
                                    </div>
        
        
                                    <div class="swiper-slide">
                                        <div class="th-product product-grid">
                                            <div class="product-img">
                                                <img src="<?=site_url()?>assets/img/e-shop/nexa/product-4.png" alt="Product Image">
                                                
                                                <div class="actions">
                                                    <a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                                    <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                                    <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1</a></h3>
                                               
                                               
                                             
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="left-content">
                                                            <div class="star-rating mt-2" role="img" aria-label="Rated 5.00 out of 5">
                                                                <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                            </div>
        
                                                            <div class="add-cart-sm mt-4">
                                                                <a href="#" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="right-content">
                                                            <div class="sku-txt">
                                                                <p>  <b>SKU </b>: 123456</p>
                                                            </div>
        
                                                            <div class="sku-txt">
                                                                <p>  <b>QAR </b>: 00000</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                              
                                            </div>
                                        </div>
                                    </div>
        
        
                                    <div class="swiper-slide">
                                        <div class="th-product product-grid">
                                            <div class="product-img">
                                                <img src="<?=site_url()?>assets/img/e-shop/nexa/product-2.png" alt="Product Image">
                                                
                                                <div class="actions">
                                                    <a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                                    <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                                    <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1</a></h3>
                                               
                                               
                                             
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="left-content">
                                                            <div class="star-rating mt-2" role="img" aria-label="Rated 5.00 out of 5">
                                                                <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                            </div>
        
                                                            <div class="add-cart-sm mt-4">
                                                                <a href="#" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="right-content">
                                                            <div class="sku-txt">
                                                                <p>  <b>SKU </b>: 123456</p>
                                                            </div>
        
                                                            <div class="sku-txt">
                                                                <p>  <b>QAR </b>: 00000</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                              
                                            </div>
                                        </div>
                                    </div>
        
        
                                    <div class="swiper-slide">
                                        <div class="th-product product-grid">
                                            <div class="product-img">
                                                <img src="<?=site_url()?>assets/img/e-shop/nexa/product-3.png" alt="Product Image">
                                                
                                                <div class="actions">
                                                    <a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                                    <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                                    <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1</a></h3>
                                               
                                               
                                             
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="left-content">
                                                            <div class="star-rating mt-2" role="img" aria-label="Rated 5.00 out of 5">
                                                                <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                            </div>
        
                                                            <div class="add-cart-sm mt-4">
                                                                <a href="#" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="right-content">
                                                            <div class="sku-txt">
                                                                <p>  <b>SKU </b>: 123456</p>
                                                            </div>
        
                                                            <div class="sku-txt">
                                                                <p>  <b>QAR </b>: 00000</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                              
                                            </div>
                                        </div>
                                    </div>
        
        
                                    <div class="swiper-slide">
                                        <div class="th-product product-grid">
                                            <div class="product-img">
                                                <img src="<?=site_url()?>assets/img/e-shop/nexa/product-1.png" alt="Product Image">
                                                
                                                <div class="actions">
                                                    <a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                                    <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                                    <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1</a></h3>
                                               
                                               
                                             
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="left-content">
                                                            <div class="star-rating mt-2" role="img" aria-label="Rated 5.00 out of 5">
                                                                <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                            </div>
        
                                                            <div class="add-cart-sm mt-4">
                                                                <a href="#" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="right-content">
                                                            <div class="sku-txt">
                                                                <p>  <b>SKU </b>: 123456</p>
                                                            </div>
        
                                                            <div class="sku-txt">
                                                                <p>  <b>QAR </b>: 00000</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                              
                                            </div>
                                        </div>
                                    </div>
        
        
                                    <div class="swiper-slide">
                                        <div class="th-product product-grid">
                                            <div class="product-img">
                                                <img src="<?=site_url()?>assets/img/e-shop/nexa/product-4.png" alt="Product Image">
                                                
                                                <div class="actions">
                                                    <a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                                    <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                                    <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1</a></h3>
                                               
                                               
                                             
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="left-content">
                                                            <div class="star-rating mt-2" role="img" aria-label="Rated 5.00 out of 5">
                                                                <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                            </div>
        
                                                            <div class="add-cart-sm mt-4">
                                                                <a href="#" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                                        <div class="right-content">
                                                            <div class="sku-txt">
                                                                <p>  <b>SKU </b>: 123456</p>
                                                            </div>
        
                                                            <div class="sku-txt">
                                                                <p>  <b>QAR </b>: 00000</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                              
                                            </div>
                                        </div>
                                    </div-->
        
                                </div>
                            </div>
                            <button data-slider-prev=".productSlider1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                            <button data-slider-next=".productSlider1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                   
                  
                </div>

                
            </div>
        </div>

    </div>
</section>
 <!--==============================
Contact Area   
==============================-->

 <!--==============================
Product Area  
==============================-->
<section class="space-btm-50">
    <div class="container">
        <div class="row ">
            <div class="col-xl-4 col-lg-4 col-md-6 mb-40 mb-lg-0">
                <aside class="sidebar-area best-box-area">
                   
                    <div class="widget  ">
                        <h3 class="widget_title">BEST MOVE</h3>
                        <div class="recent-post-wrap">
                        <?php 
                        $i=0;
                        
                        
                        foreach ($bestmove as $product) { 
                            
                            
                            if ($i<3){
                            ?>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="<?php echo site_url().'product/'.$product['prod_canonial_name']?>?cur=<?php echo $cur;?>"><img src="<?=site_url()?>assets/uploads/products/<?=$product['prod_primary_image']?>" alt="<?=$product['prod_name']?>" title="<?=$product['prod_name']?>"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="<?php echo site_url().'product/'.$product['prod_canonial_name']?>?cur=<?php echo $cur;?>"><?=$product['prod_name']?></a></h4>
                                    
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                    </div>
                                </div>
                            </div>
                            <?php } 
                        
                        $i++;
                        
                        
                        } ?>
                            <!--div class="recent-post">
                                <div class="media-img">
                                    <a href="#"><img src="<?//=site_url()?>assets/img/e-shop/nexa/side-blog-2.png" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1</a></h4>
                                    
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="#"><img src="<?//=site_url()?>assets/img/e-shop/nexa/side-blog-3.png" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1</a></h4>
                                    
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                    </div>
                                </div>
                            </div-->

                            
                        </div>
                    </div>
                   
                   
                </aside>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-6">
               
                <div class="row justify-content-lg-between justify-content-center align-items-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="blog-img mb-30">
                            <!--img src="<?=site_url()?>assets/img/e-shop/product page offer image.png" alt="img-product"-->
                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails2->clearenceimg4;?>" alt="img-product">
                        </div>
                    </div>
                    
                </div>
               
            </div>
        </div>

    </div>
</section>

   

     <!--==============================
Product Area  
==============================-->

<section class="marquee-section">
    <div class="offer-text-wrap">
      <ul class="grid-wrap text1">
        <!--li class="grid-wrapper">
          <div class="richtext">5.00 based on 250 reviews</div>
        </li>
        <li class="grid-wrapper">
          <div class="richtext">Upgrade ecomposer for free</div>
        </li>
        <li class="grid-wrapper">
          <div class="richtext">Super high performance</div>
        </li>
        <li class="grid-wrapper">
          <div class="richtext">Save time and money</div>
        </li>
        <li class="grid-wrapper">
          <div class="richtext">Build your powerful store with shopify 2.0</div>
        </li>
        <li class="grid-wrapper">
          <div class="richtext">Outstanding support</div>
        </li-->
        <li class="grid-wrapper">
          <div class="richtext"><?php echo $homepagedetails->label9;?></div>
        </li>
        <li class="grid-wrapper">
          <div class="richtext"><?php echo $homepagedetails->label10;?></div>
        </li>
        <li class="grid-wrapper">
          <div class="richtext"><?php echo $homepagedetails->label11;?></div>
        </li>
        <li class="grid-wrapper">
          <div class="richtext"><?php echo $homepagedetails->label12;?></div>
        </li>
        <li class="grid-wrapper">
          <div class="richtext"><?php echo $homepagedetails->label13;?></div>
        </li>
        <li class="grid-wrapper">
          <div class="richtext"><?php echo $homepagedetails->label14;?></div>
        </li>
      </ul>
      <ul class="grid-wrap text2">
      <li class="grid-wrapper">
          <div class="richtext"><?php echo $homepagedetails->label15;?></div>
        </li>
        <li class="grid-wrapper">
          <div class="richtext"><?php echo $homepagedetails->label16;?></div>
        </li>
        <li class="grid-wrapper">
          <div class="richtext"><?php echo $homepagedetails->label19;?></div>
        </li>
        <li class="grid-wrapper">
          <div class="richtext"><?php echo $homepagedetails->label20;?></div>
        </li>
        <li class="grid-wrapper">
          <div class="richtext"><?php echo $homepagedetails->label21;?></div>
        </li>
        <li class="grid-wrapper">
          <div class="richtext"><?php echo $homepagedetails->label22;?></div>
        </li>
        <!--li class="grid-wrapper">
          <div class="richtext">5.00 based on 250 reviews</div>
        </li>
        <li class="grid-wrapper">
          <div class="richtext">Upgrade ecomposer for free</div>
        </li>
        <li class="grid-wrapper">
          <div class="richtext">Super high performance</div>
        </li>
        <li class="grid-wrapper">
          <div class="richtext">Save time and money</div>
        </li>
        <li class="grid-wrapper">
          <div class="richtext">Build your powerful store with shopify 2.0</div>
        </li>
        <li class="grid-wrapper">
          <div class="richtext">Outstanding support</div>
        </li-->
      </ul>
    </div>
</section>
 
   
  
    <!--==============================
Product list Area  
==============================-->
<section class="space-50">
    <div class="container">
       
        <div class="row justify-content-lg-between justify-content-center align-items-end">
            <div class="col-lg">
                <div class="title-area text-center text-lg-start">
                    <h2 class="sec-title widget_title">Deal Of the Day</h2>
                </div>
            </div>
            
        </div>

        <div class="swiper th-slider has-shadow" id="productSlider7" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
            <div class="swiper-wrapper">

            <?php 
                    
                  
                    
                    foreach ($productsdealoftheday as $product) { ?>

                <div class="swiper-slide">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <!--img src="<?//=site_url()?>assets/img/e-shop/nexa/list-1.png" alt="Product Image"-->

                            <img src="<?=site_url()?>assets/uploads/products/<?=$product['prod_primary_image']?>" alt="<?=$product['prod_name']?>" title="<?=$product['prod_name']?>"/>
                            <!--span class="product-tag">Hot</span-->

                            <span class="product-tag">
                                <?php if ($product['prod_canonial_name']){

echo round($product['discountper']).'% <br>OFF'; 

                                    }else{
                                             echo "Hot---";
                                    }
                                    ?>
</span>
                            <div class="actions">
                                <!--a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                <a href="#" class="icon-btn"><i class="far fa-heart"></i></a-->


                                <a href="<?php echo site_url().'product/'.$product['prod_canonial_name']?>?cur=<?php echo $cur;?>" class="icon-btn popup-content1"><i class="far fa-eye"></i></a>
                                            <!--a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a-->
                                            
                                            <?php 
                                            
                                            $username=$this->session->userdata('username');
                                            
                                            if ($username==''){


                                                ?>



<?php if ($product['addtoquote']==1){

?>

<a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a>




<?php }else{ ?>





                                    <!--a href="<?php //echo base_url('home/login'); ?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->

                                    <a href="#"  onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="icon-btn"><i class="far fa-cart-plus"></i></a>




                                    <?php } } else { 


if ($product['addtoquote']==1){

    ?>
    
    <a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a>
    
    
    
    
    <?php }else{
    
    
    
   
    


 
                                                ?>


                                        <a href="#"  onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="icon-btn"><i class="far fa-cart-plus"></i></a>


                                        <?php } } ?>
                                          

                                            <a href="javascript:void(0)" onclick=addwishlist(<?php echo $product['prod_id'];?>) class="icon-btn"><i class="far fa-heart"></i></a>









                            </div>
                        </div>
                        <div class="product-content text-lg-start">
                            <div class="woocommerce-product-rating">
                             
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                            </div>

                           
                            <h3 class="product-title"><a href="<?=site_url().'product/'.$product['prod_canonial_name']?>?cur=<?php echo $cur;?>"><?=$product['prod_name']?></a></h3>
                          
                           
                        </div>
                    </div>
                </div>

                <?php } ?>


                <!--div class="swiper-slide">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="<?=site_url()?>assets/img/e-shop/nexa/list-2.png" alt="Product Image">
                            <span class="product-tag">New</span>
                            <div class="actions">
                                <a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-content text-lg-start">
                            <div class="woocommerce-product-rating">
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                            </div>
                            <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1
                            </a></h3>
                         
                           
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="<?=site_url()?>assets/img/e-shop/nexa/list-3.png" alt="Product Image">
                            <span class="product-tag">Hot</span>
                            <div class="actions">
                                <a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-content text-lg-start">
                            <div class="woocommerce-product-rating">
                               
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                            </div>
                            <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1
                            </a></h3>
                           
                           
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="<?=site_url()?>assets/img/e-shop/nexa/list-2.png" alt="Product Image">
                            <span class="product-tag">Sale</span>
                            <div class="actions">
                                <a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-content text-lg-start">
                            <div class="woocommerce-product-rating">
                              
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                            </div>
                            <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1
                            </a></h3>
                         
                         
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="<?=site_url()?>assets/img/e-shop/nexa/list-2.png" alt="Product Image">
                            <span class="product-tag">Sale</span>
                            <div class="actions">
                                <a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-content text-lg-start">
                            <div class="woocommerce-product-rating">
                              
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                            </div>
                            <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1
                            </a></h3>
                         
                         
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="<?=site_url()?>assets/img/e-shop/nexa/list-2.png" alt="Product Image">
                            <span class="product-tag">Sale</span>
                            <div class="actions">
                                <a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-content text-lg-start">
                            <div class="woocommerce-product-rating">
                              
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                            </div>
                            <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1
                            </a></h3>
                         
                         
                        </div>
                    </div>
                </div>


                <div class="swiper-slide">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="<?=site_url()?>assets/img/e-shop/nexa/list-2.png" alt="Product Image">
                            <span class="product-tag">Sale</span>
                            <div class="actions">
                                <a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-content text-lg-start">
                            <div class="woocommerce-product-rating">
                              
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                            </div>
                            <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1
                            </a></h3>
                         
                         
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="<?=site_url()?>assets/img/e-shop/nexa/list-2.png" alt="Product Image">
                            <span class="product-tag">Sale</span>
                            <div class="actions">
                                <a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                            </div>
                        </div>
                        <div class="product-content text-lg-start">
                            <div class="woocommerce-product-rating">
                                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                    <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                </div>
                            </div>
                            <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1
                            </a></h3>
                        </div>
                    </div>
                </div-->
            </div>
        </div>


        <div class="row justify-content-lg-between justify-content-center align-items-center space-50">
            <div class="col-lg-6 col-md-6">
                <div class="blog-img mb-30">
                    <!--img src="<?=site_url()?>assets/img/e-shop/offer-img.png" alt="img-product"-->
                    <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails2->clearenceimg2;?>" alt="img-product">
                    
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="blog-img mb-30">
                    <!--img src="<?=site_url()?>assets/img/e-shop/offer-img.png" alt="img-product"--->
                    <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails2->clearenceimg3;?>" alt="img-product">
                </div>
            </div>
        </div>
        <div class="tab-content best-selling-product">
            <!-- Single item -->
            <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                <div class="slider-area">
                    <div class="swiper th-slider has-shadow productSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                        <div class="swiper-wrapper">
                        <?php foreach ($products as $product) { ?>
                            <div class="swiper-slide">
                                <div class="th-product product-grid">
                                    <div class="product-img">
                                    <img src="<?=site_url()?>assets/uploads/products/<?=$product['prod_primary_image']?>" alt="<?=$product['prod_name']?>" title="<?=$product['prod_name']?>"/>
                                    <span class="product-tag">
                                <?php if ($product['prod_canonial_name']){

echo round($product['discountper']).'% <br>OFF'; 

                                    }else{
                                             echo "Hot";
                                    }
                                    ?>
</span>
                                        
                                        <div class="actions">
                                        <a href="<?php echo site_url().'product/'.$product['prod_canonial_name']?>?cur=<?php echo $cur;?>" class="icon-btn popup-content1"><i class="far fa-eye"></i></a>

<?php 
                                            
                                            $username=$this->session->userdata('username');
                                            
                                            if ($username==''){?>
                                  




                                    <?php if ($product['addtoquote']==1){

?>

<a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a>




<?php }else{  



?>
<a href="#"  onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="icon-btn"><i class="far fa-cart-plus"></i></a>


<?php }







                                     } else { 
                                        
                                        
                                        if ($product['addtoquote']==1){

                                            ?>
                                            
                                            <a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                            
                                            
                                            
                                            
                                            <?php }else{  
                                        
                                        
                                        
                                        ?>
                                        <a href="#"  onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="icon-btn"><i class="far fa-cart-plus"></i></a>


                                        <?php }
                                    
                                    
                                    
                                    } ?>



                                    
                                    <a href="javascript:void(0)" onclick=addwishlist(<?php echo $product['prod_id'];?>) class="icon-btn"><i class="far fa-heart"></i></a>
                                   
                                        </div>
                                    </div>
                                    <div class="product-content">
                                    <h3 class="product-title"><a href="<?php echo site_url().'product/'.$product['prod_canonial_name']?>?cur=<?php echo $cur;?>"><?=$product['prod_name']?></a></h3>
                                     
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="left-content">


                                                <div class="sku-txt">
                                                        <p> 
        
        <strike style="float:right;color:red"><b><?php 
                            
                            
                            $this->db->where('prod_dt_prodid',$product['prod_id']);
                            $this->db->where('prod_dt_typeid',4);
// $this->db->order_by("orderno", "asc");
$this->db->select('*');
$this->db->from('product_details');
$query = $this->db->get();
$pricedt=$query->row();

//echo  $currency.' '.$pricedt->prod_dt_desc;

if ($cur=='SAR'){
echo 'SAR '.$product['prod_price2'];

}
else if ($cur=='USD'){
echo 'USD '.$product['oldpriceusd'];

}



else{
echo  $currency.' '.$product['oldprice'];
}
                            
                            ?></b></strike>
    
    
    
    
    
    
    </p>
                                                    </div>


                                                    




                                                    <!--div class="star-rating mt-2" role="img" aria-label="Rated 5.00 out of 5">
                                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                    </div-->

                                                    <div class="add-cart-sm mt-4">
                                                    <?php 
                                            
                                            $username=$this->session->userdata('username');
                                            
                                            if ($username==''){?>


                                              

                                                <?php if ($product['addtoquote']==1){

?>
                                        
                                        <a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Quote</a>




<?php }else{



?>

                                            
                                            <a href="#"  onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="th-btn"><i class="far fa-cart-shopping mr-5"></i>Add to Cart</a>
                                            <?php }


                                            
                                            } else { 

                                                if ($product['addtoquote']==1){

?>



<a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Quote</a>




<?php }else{



?>

                                            
                                            <a href="#"  onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="th-btn"><i class="far fa-cart-shopping mr-5"></i>Add to Cart</a>
                                            <?php }} ?>



                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="right-content">

                                                <div class="sku-txt">
                                                        <p> <?php if ($cur=='SAR'){
            echo '<b>SAR : </b> '.$product['prod_price2'];

        }
        else if ($cur=='USD'){
            echo '<b>USD :</b>'.$product['prod_price3'];

        }
        
        
        
        else{
        echo  "<b>$currency : </b>".$pricedt->prod_dt_desc;
        } ?></p>
                                                    </div>


                                                    <div class="sku-txt">
                                                        <p>  <b>SKU</b>: <?=$partdt->prod_dt_desc;?></p>
                                                    </div>

                                                   

                                                   
                                                </div>
                                            </div>
                                        </div>
                                       
                                      
                                    </div>
                                </div>
                            </div>
                            <?php } ?>


                            <!--div class="swiper-slide">
                                <div class="th-product product-grid">
                                    <div class="product-img">
                                        <img src="<?=site_url()?>assets/img/e-shop/nexa/product-2.png" alt="Product Image">
                                        
                                        <div class="actions">
                                            <a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                            <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                            <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1</a></h3>
                                       
                                       
                                     
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="left-content">
                                                    <div class="star-rating mt-2" role="img" aria-label="Rated 5.00 out of 5">
                                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                    </div>

                                                    <div class="add-cart-sm mt-4">
                                                        <a href="#" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="right-content">
                                                    <div class="sku-txt">
                                                        <p>  <b>SKU </b>: 123456</p>
                                                    </div>

                                                    <div class="sku-txt">
                                                        <p>  <b>QAR </b>: 00000</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                      
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="th-product product-grid">
                                    <div class="product-img">
                                        <img src="<?=site_url()?>assets/img/e-shop/nexa/product-3.png" alt="Product Image">
                                        
                                        <div class="actions">
                                            <a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                            <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                            <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1</a></h3>
                                       
                                       
                                     
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="left-content">
                                                    <div class="star-rating mt-2" role="img" aria-label="Rated 5.00 out of 5">
                                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                    </div>

                                                    <div class="add-cart-sm mt-4">
                                                        <a href="#" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="right-content">
                                                    <div class="sku-txt">
                                                        <p>  <b>SKU </b>: 123456</p>
                                                    </div>

                                                    <div class="sku-txt">
                                                        <p>  <b>QAR </b>: 00000</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                      
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="th-product product-grid">
                                    <div class="product-img">
                                        <img src="<?=site_url()?>assets/img/e-shop/nexa/product-4.png" alt="Product Image">
                                        
                                        <div class="actions">
                                            <a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                            <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                            <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1</a></h3>
                                       
                                       
                                     
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="left-content">
                                                    <div class="star-rating mt-2" role="img" aria-label="Rated 5.00 out of 5">
                                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                    </div>

                                                    <div class="add-cart-sm mt-4">
                                                        <a href="#" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="right-content">
                                                    <div class="sku-txt">
                                                        <p>  <b>SKU </b>: 123456</p>
                                                    </div>

                                                    <div class="sku-txt">
                                                        <p>  <b>QAR </b>: 00000</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                      
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="th-product product-grid">
                                    <div class="product-img">
                                        <img src="<?=site_url()?>assets/img/e-shop/nexa/product-2.png" alt="Product Image">
                                        
                                        <div class="actions">
                                            <a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                            <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                            <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1</a></h3>
                                       
                                       
                                     
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="left-content">
                                                    <div class="star-rating mt-2" role="img" aria-label="Rated 5.00 out of 5">
                                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                    </div>

                                                    <div class="add-cart-sm mt-4">
                                                        <a href="#" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="right-content">
                                                    <div class="sku-txt">
                                                        <p>  <b>SKU </b>: 123456</p>
                                                    </div>

                                                    <div class="sku-txt">
                                                        <p>  <b>QAR </b>: 00000</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                      
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="th-product product-grid">
                                    <div class="product-img">
                                        <img src="assets/img/e-shop/nexa/product-3.png" alt="Product Image">
                                        
                                        <div class="actions">
                                            <a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                            <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                            <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1</a></h3>
                                       
                                       
                                     
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="left-content">
                                                    <div class="star-rating mt-2" role="img" aria-label="Rated 5.00 out of 5">
                                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                    </div>

                                                    <div class="add-cart-sm mt-4">
                                                        <a href="#" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="right-content">
                                                    <div class="sku-txt">
                                                        <p>  <b>SKU </b>: 123456</p>
                                                    </div>

                                                    <div class="sku-txt">
                                                        <p>  <b>QAR </b>: 00000</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                      
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="th-product product-grid">
                                    <div class="product-img">
                                        <img src="assets/img/e-shop/nexa/product-1.png" alt="Product Image">
                                        
                                        <div class="actions">
                                            <a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                            <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                            <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1</a></h3>
                                       
                                       
                                     
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="left-content">
                                                    <div class="star-rating mt-2" role="img" aria-label="Rated 5.00 out of 5">
                                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                    </div>

                                                    <div class="add-cart-sm mt-4">
                                                        <a href="#" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="right-content">
                                                    <div class="sku-txt">
                                                        <p>  <b>SKU </b>: 123456</p>
                                                    </div>

                                                    <div class="sku-txt">
                                                        <p>  <b>QAR </b>: 00000</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                      
                                    </div>
                                </div>
                            </div>


                            <div class="swiper-slide">
                                <div class="th-product product-grid">
                                    <div class="product-img">
                                        <img src="assets/img/e-shop/nexa/product-4.png" alt="Product Image">
                                        
                                        <div class="actions">
                                            <a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a>
                                            <a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                            <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1</a></h3>
                                       
                                       
                                     
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="left-content">
                                                    <div class="star-rating mt-2" role="img" aria-label="Rated 5.00 out of 5">
                                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                    </div>

                                                    <div class="add-cart-sm mt-4">
                                                        <a href="#" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="right-content">
                                                    <div class="sku-txt">
                                                        <p>  <b>SKU </b>: 123456</p>
                                                    </div>

                                                    <div class="sku-txt">
                                                        <p>  <b>QAR </b>: 00000</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                      
                                    </div>
                                </div>
                            </div-->

                        </div>
                    </div>
                    <button data-slider-prev=".productSlider1" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
                    <button data-slider-next=".productSlider1" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
                </div>
            </div>
           
          
        </div>
        
    </div>
</section>
  
   
    <!--==============================
Brand Area  
==============================-->
<div class="space-50 bg-blue">
    <div class="container th-container">
        <div class="row">
            <div class="text-center">
                <h2 class="mb-35">We Deal Brand</h2>
            </div>
           
        </div>
        <div class="row">
            <!--div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/1.png" alt="Brand Logo">
                </div>
            </div-->

            <?php foreach ($brands as $brand) { ?>
            <div class="col-lg-2">
                <div class="brand-card">
                <a href="<?=site_url()?><?='products/brand/'.$brand['brand_canonial_name']?>?cur=<?php echo $cur;?>"><img src="<?=site_url()?>assets/uploads/brands/<?=$brand['brand_image']?>" alt="<?=$brand['brand_name']?>"></a>
                </div>
            </div>
            <?php } ?>


            <!--div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/2.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/3.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/4.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/5.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/6.png" alt="Brand Logo">
                </div>
            </div>

            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/7.png" alt="Brand Logo">
                </div>
            </div>

            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/8.png" alt="Brand Logo">
                </div>
            </div>

            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/9.png" alt="Brand Logo">
                </div>
            </div>

            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/10.png" alt="Brand Logo">
                </div>
            </div>

            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/11.png" alt="Brand Logo">
                </div>
            </div>

            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/12.png" alt="Brand Logo">
                </div>
            </div>

            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/13.png" alt="Brand Logo">
                </div>
            </div>

            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/14.png" alt="Brand Logo">
                </div>
            </div>

            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/15.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/16.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/17.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/18.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/19.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/20.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/21.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/22.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/23.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/24.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/25.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/26.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/27.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/28.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/29.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/30.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/31.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/32.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/33.png" alt="Brand Logo">
                </div>
            </div>
            <div class="col-lg-2">
                <div class="brand-card">
                    <img src="assets/img/e-shop/brand/34.png" alt="Brand Logo">
                </div>
            </div-->
            
            
        </div>


        <div>
          

        </div>
    </div>
</div>
<!--==============================
Product Area  
==============================-->

<?php include('footer.php');?>


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
                                <a href="#"><img src="<?=site_url()?>assets/img/e-shop/nexa/logo.png" alt="eletrical"></a>
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
    <div class="copyright-wrap" data-bg-src="<?=site_url()?>assets/img/bg/copyright_bg_1.png">
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

    
   
    <script src="<?php //echo base_url().'assets/js/vendor/jquery-3.6.0.min.js';?>"></script>
    
    <script src="<?php //echo base_url().'assets/js/swiper-bundle.min.js';?>"></script>
  
    <script src="<?php //echo base_url().'assets/js/bootstrap.min.js';?>"></script>
    
    <script src="<?php //echo base_url().'assets/js/jquery.magnific-popup.min.js';?>"></script>
    
    <script src="<?php //echo base_url().'assets/js/jquery.counterup.min.js';?>"></script>
    
    <script src="<?php //echo base_url().'assets/js/jquery-ui.min.js';?>"></script>
    
    <script src="<?php //echo base_url().'assets/js/imagesloaded.pkgd.min.js';?>"></script>
    <script src="<?php //echo base_url().'assets/js/isotope.pkgd.min.js';?>"></script>

    <script src="<?php //echo base_url().'assets/js/main.js';?>"></script-->

    <script>
$(document).ready(function() {
//////////////////////////
$(function() {
    $( "#slider" ).slider({
min:0,
max:100,
range:true,
slide: function(event, ui) { $( "#d1" ).html( "Min value:" + ui.values[0] ), $( "#d2" ).html("Max value:" + ui.values[1] );} 
  });
  });
////////////////
})




 
function addtocartaj(prdid){
    //alert(prdid);
    var cur="<?php echo $cur;?>"
    $.ajax({
        type: 'GET',
        url:"<?php echo base_url().'/productssample/addtocartaj';?>",
        data:{prdid:prdid,cur:cur},
        success:function(data){
          
            //$(".wishlistcount").html(data);


            $.ajax({
        type: 'GET',
        url:"<?php echo base_url().'/productssample/addtocartajhtml';?>",
        data:{prdid:prdid,cur:cur},
        success:function(data1){

            
            $("#loadcart").html(data1);


        }});



//alert(data);



            $("#subtotal1").html(data);
        }
    });
   }
   </script>




</script>



</body>

</html>