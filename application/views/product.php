<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AMPS Electric Trading </title>
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

  



    <link rel="stylesheet" href="<?php echo base_url().'electricalshop1/assets/css/bootstrap.min.css';?>">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="<?php echo base_url().'electricalshop1/assets/css/fontawesome.min.css';?>">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo base_url().'electricalshop1/assets/css/magnific-popup.min.css';?>">
    <!-- Swiper Js -->
    <link rel="stylesheet" href="<?php echo base_url().'electricalshop1/assets/css/swiper-bundle.min.css';?>">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'electricalshop1/assets/css/style.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'electricalshop1/assets/css/responsive.css';?>">







</head>
<style>
label.error.errpopupmsg {
    position: absolute;
    bottom: -35px;
    color: #f61c0d;
    font-style: italic;
    font-weight: 600;
}

</style>
<body>

    
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
    </div--><!--==============================
Product Lightbox
==============================-->
    <!--div id="QuickView" class="white-popup mfp-hide">
        <div class="container bg-white rounded-10">
            <div class="row gx-60">
                <div class="col-lg-6">
                    <div class="product-big-img">
                        <div class="img"><img src="<?php echo base_url().'electricalshop1/assets/img/product/product_details_1_1.jpg';?>" alt="Product Image"></div>
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
                        <a href="#"><img src="<?php echo base_url().'electricalshop1/assets/img/logo-eletrical.png';?>" alt="logo"></a>
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
                <a href="electric shop#"><img src="<?php echo base_url().'electrical-shop1/assets/img/logo-eletrical.png';?>" alt="Electrical Shop"></a>
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
                        <a href="#">Clearance---</a>
                    </li>
                    <li><a href="#">About Us</a></li>
                  
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div-->
    
    
    
    
    
    <!--==============================
	Header Area
==============================-->
    <!--header class="th-header header-layout3">
        
        <div class="menu-top">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="electric shop#"><img src="<?php echo base_url().'electricalshop1/assets/img/logo-eletrical.png';?>" alt="electric shop"></a>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <form class="header-search">
                            <input type="text" placeholder="Enter Keyword">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                  
                   
                    <div class="col-auto">
                        <div class="custom-block">
                          
                        </div>
                        <div class="header-icons">
                            <a href="login.html" class="icon-btn d-none d-sm-block"><i class="far fa-user"></i></a>
                            <a href="#" class="icon-btn d-none d-sm-block">
                                <span class="badge">3</span>
                                <i class="far fa-heart"></i>
                            </a>
                            <button type="button" class="icon-btn sideMenuToggler">
                                <span class="badge">5</span>
                                <i class="far fa-cart-shopping"></i>
                            </button>

                            <div class="dropdown-link aed-sec">
                                <a class="" href="#" ><img src="<?php echo base_url().'electricalshop1/assets/img/e-shop/menu-icon.png';?>"/>  AED</a>
                               
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
                       
                        <div class="col-auto">
                            <nav class="main-menu menu-style1 d-none d-lg-inline-block">
                                <ul>
                                    <li class="menu-item-has-children">
                                        <a href="#">Bulk Enquiry</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Bulk Enquiry Step</a></li>
                                            <li><a href="#">Bulk Enquiry Step</a></li>
                                            <li><a href="#">Bulk Enquiry Step</a></li>
                                        </ul>
                                    </li>
                                   
                                    <li class="menu-item-has-children">
                                        <a href="#">Brands</a>
                                        <ul class="sub-menu">
                                            <li><a href="#">Service</a></li>
                                            <li><a href="#">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Product</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children">
                                                <a href="#">Shop</a>
                                            </li>
                                            <li><a href="#">Team</a></li>
                                            <li><a href="#">Team Details</a></li>
                                            <li><a href="#">Project Gallery</a></li>
                                            <li><a href="#">Project Details</a></li>
                                            <li><a href="#">Faq Page</a></li>
                                            <li><a href="#">Error Page</a></li>
                                        </ul>
                                    </li>
                                   
                                    <li>
                                        <a href="#">About Us</a>
                                    
                                    </li>
                                    <li>
                                        <a href="#">Clearance</a>
                                    
                                    </li>
                                    <li>
                                        <a href="contact#">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                        </div>
                        <div class="col-auto">
                            <div class="call-btn">
                                <div class="box-icon">
                                    <i class="fa fa-envelope""></i>
                                </div>
                                <div class="media-body">
                                    <p class="box-subtitle">Mail Us 24/7</p>
                                    <h3 class="box-title"><a href="mailto:contact@nexaelectric.com">contact@nexaelectric.com</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="call-btn">
                                <div class="box-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <p class="box-subtitle">Call Us 24/7</p>
                                    <h3 class="box-title"><a href="tel:+0987654321">0987654321</a></h3>
                                </div>
                            </div>
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
<?php $sitedetails = sitedetails();
    $productMetaTags = $prodDesc = '';
    $prodPoints = [];
    foreach ($productdetails['Details'] as $key => $value) {
        if ($value['pd_type_name'] == 'Meta Tags') {
            $productMetaTags = html_entity_decode($value['prod_dt_desc']);
        } else if ($value['pd_type_name'] == 'Description') {
            $prodDesc = $value['prod_dt_desc'];
        } else {
            $prodPoints[$value['pd_type_name']] = $value['prod_dt_desc'];
        }
    }

    $currency = '';
    if (isset($sitecurrency)) {
        $currency = $sitecurrency['currency'];
    }
    ?>

<?php echo $url1= $_SERVER['QUERY_STRING'];
?>


<script>

function curchange(val){
   <?php $url=base_url().$url1;



?>

    //alert("curchange");
    location.href="<?php echo $url;?>"+'?cur='+val;
}
</script>

<?php 




//print_r($product);

include('header.php');?>
<div class="breadcumb-wrapper " data-bg-src="<?php echo base_url().'electricalshop1/assets/img/e-shop/inner-banner-img.png';?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="banner-img">
                    <img src="<?php echo base_url().'electricalshop1/assets/img/e-shop/banner-3.png';?>"/>
                </div>



                
               
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="inner-banner-content">
                    <h1 class="breadcumb-title"><?=$product['prod_name']?> </h1>
                    <p> <?php echo $product['prdshdesc'];?></p>
                    <a href="#" class="th-btn call-bnr-btn"><span class="icon-des"><i class="fa fa-phone"></i></span>  <?=$sitedetails['phone_number_1']?></a>
                
                </div>

            </div>
        </div>
     
    </div>
</div>
   

   

 

    <!--==============================
Product list Area  
==============================-->
<section class="mt-50 space-bottom">
    <div class="container">
       
        <div class="product-deatils-area">
            <div class="container">
                <div class="icon-box mb-20">
                    <h4>Product Details</h4>
                   
                 </div>
                <div class="product th-slider has-shadow">
                    <div class="product-wrapper">

                        <div class="product-details">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                  
                                     <!-- thumbs -->
                <div class="productImage">


                <?php 
                $k=0;
                foreach ($productdetails['Images'] as $image) { 
                    if ($k==0){
                    
                    ?>
                    <img id="largeImage" src="<?=site_url()?>assets/uploads/products/<?=$image['pd_img_image']?>" />
                    <?php 

                
                }
                $k++;
                
                
                } ?>
                   
                  </div>

                  

                  <div id="thumbs" class="mb-20" >
                  <?php foreach ($productdetails['Images'] as $image) { 
                    //echo $image['pd_img_image'];
                    $url=site_url().'assets/uploads/products/'.$image['pd_img_image'];
                    
                    ?>
                    <img src="<?=site_url()?>assets/uploads/products/<?=$image['pd_img_image']?>"  onclick="displayimg('<?php echo $url;?>')" />
                    <?php } ?>
                    <!--img src="<?php //echo base_url().'electricalshop1/assets/img/e-shop/small-product2.png';?>"/>
                    <img src="<?php //echo base_url().'electricalshop1/assets/img/e-shop/small-product3.png';?>" />
                    <img src="<?php //echo base_url().'electricalshop1/assets/img/e-shop/small-product4.png';?>"/-->
                  
                  </div>

               <!-- thumbs -->




                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="product-box-details-area">
        
                                    <div class="products-details">
                                        <h2>
                                            <!--img src="<?php //echo base_url().'electricalshop1/assets/img/e-shop/logo-details.png';?>"/-->


                                            <?php
                                        
                                        //print_r($productdetails['Brand']);
                                          
                                          
                                          if (isset($productdetails['Brand']) && ! empty($productdetails['Brand']) && isset($productdetails['Brand'][0])) { ?>
                                              <h2>
                                                  <img src="<?=site_url()?>assets/uploads/brands/<?=$productdetails['Brand'][0]['brand_image']?>" alt="<?//=$image['prod_name']?>" title="<?=((isset($productdetails['Brand']) && isset($productdetails['Brand'][0]) && isset($productdetails['Brand'][0]['brand_name'])) ?  $productdetails['Brand'][0]['brand_name'] : '')?>" />
                                              </h2>
                                          <?php } ?>
                                        </h2>
    
                                       
                                        <p><?=$product['prod_name']?></p>
                                    </div>

                                    
                                    <form action="<?php echo base_url('productssample/addToCartqty/'); ?>" method="post">
                                    
                                    <div class="matrial-details">
                                      
    
                                        <div class="details-table-sec">
                                         
                                            <table id="part" cellspacing="0">
                                                <tr>
                                                    <th class="label">
                                                        Part Number :
                                                    </th>
                                                    <td>
                                                    <?php echo $pnumber=$prodPoints['Part Number'];?>
                                                    </td>
                                                </tr>
                                                
                                                <tr>
                                                    <th class="label">
                                                        Availability :
                                                    </th>
                                                    <td>
                                                        <span class="btn-sec">
                                                           <?php $prdstk= $product['instock'];
                                                            if ($prdstk==1){

                                                                ?>
                                                                <a href="#" class="default-btn small-btn instock-btn"  >Instock
                                                            </a>
                                                            <?php } if ($prdstk==0) {?>
                                                           
                                                               
                                                                 <a href="<?php echo base_url().'bulkenquiry';?>" class="default-btn small-btn instock1-btn" > Request </a> 
                                                           <?php }
                                                            
                                                            ?>   
                                                            <!--a href="#" class="default-btn small-btn request-btn"> Request </a--> 
                                                        </span>  
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="label">
                                                        SKU :
                                                    </th>
                                                    <td>
                                                    <?php echo $pnumber=$prodPoints['SKU'];?>
                                                    </td>
                                                </tr>
    
                                                <tr>
                                                    <th class="label">
                                                        Country origin :
                                                    </th>
                                                    <td>
                                                    <?php echo $pnumber=$prodPoints['Country origin'];?>
                                                    </td>
                                                </tr>
    
                                                <tr>
                                                    <th class="label">
                                                        Price :
                                                    </th>
                                                    <td class="font-weight-600">
                                                        <span class="smallText"> <?php echo $cur;?> <?php 
                                                        
                                                        if ($cur=='SAR'){
                                                            //echo '<b>SAR : </b> '.$product['prod_price2'];
                                                            $price=$product['prod_price2'];
                                                        
                                                        }
                                                        else if ($cur=='USD'){
                                                            //echo '<b>USD :</b>'.$product['prod_price3'];
                                                            $price=$product['prod_price3'];
                                                        
                                                        }
                                                        
                                                        
                                                        
                                                        else{
                                                        //echo  "<b>$currency : </b>".$pricedt->prod_dt_desc;
                                                        //$price=$pricedt->prod_dt_desc;
                                                        echo $pnumber=$prodPoints['Price'];
                                                        }
                                                        
                                                        
                                                        
                                                        
                                                        //echo $pnumber=$prodPoints['Price'];?></span> <!--AED 850 +VAT--> 
                                                    <!--span class="inner-select">
                                                        <select id="currencyList" class="select-box">
                                                            <option value="AED" selected="selected" label="AED">AED</option>
                                                            <option value="EUR" label="EUR">EUR</option>
                                                            <option value="JPY" label="JPY">JPY</option>
                                                            <option value="USD" label="USD">USD</option>
                                                            </select>
                                                    </span--> 
                                                    </td>
    
                                                </tr>
    
                                                <tr>
                                                    <th class="label">
                                                        Quantity :
                                                    </th>
                                                    <td>
                                                      


                                                        <input type="hidden" id="prdid" name="prdid" value="<?php echo $product['prod_id'];?>" >

<input type="number" id="quantity" name="quantity" min="1" max="500000">
    
                                                    </td>
                                                </tr>
                                             
                                        </table>
                                        </div>
        
                                        
                                        <div class="button-area">
                                            <div class="btn-sec mt-30">
                                                <!--a href="#" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</a>
                                                <a href="#" class="th-btn btn-sm ml-20">
                                                   
                                                    Bulk Order
                                                </a-->
                                                <?php 
                                                
                                                $custname=$this->session->userdata('username');
                                                
                                                
                                                if ($custname==''){?>
                                                    <a href="<?php echo base_url().'login';?>"><button type="button" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</button> </a>

                                                
                                                <?php } else { ?>

                                                <button  class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</button>
                                                <?php } ?>


<a href="<?php echo base_url().'bulkenquiry';?>"><button type="button" class="th-btn"><i class="far fa-cart-shopping mr-5"></i>   Bulk Enquiry</button> </a>




                                            </div>
        
                                            
                                        </div>
                                        </form>
                                      
                                       
                                    </div>
                                  
        
                                   
        
                                    
                                   
        
                                
                                </div>
                                </div>
                            </div>
                        </div>


                      

                       


                       


                       

                    </div>
                </div>

                <div class="row">
                    <div class="prouct-specificaion mt-2">
                        <h4>Description for <?=$product['prod_name']?></h4>
                        <p><?=html_entity_decode(nl2br($prodDesc))?></p>
                    </div>
                    <div class="Specifications mt-2">
                        <h4>Specifications</h4>

                        <div class="specification-table">
                        <?=$product['prdspec']?>
                            <!--table border="1" cellpadding="1" cellspacing="1">
                                <tbody>
                                 <tr>
                                  <th>Range of product</th>
                                  <td>TeSys Deca</td>
                                 
                                 </tr>
                                 <tr>
                                    <th>Product or component type</th>
                                  <td>Contactor</td>
                                 </tr>
                                 <tr>
                                    <th>
                                        Device short name</th>
                                  <td>LC1D</td>
                                 </tr>
                                 <tr>
                                    <th>
                                        Contactor application</th>
                                  <td>Motor control
                                    <br>
                                    Resistive load</td>
                                 </tr>
                                 <tr>
                                    <th>
                                        utilisation category</th>
                                  <td>AC-4
                                    AC-3
                                    AC-1
                                    AC-3e</td>
                                 </tr>
                                 <tr>
                                    <th>
                                        [Ue] rated operational voltage</th>
                                  <td>Power circuit: <= 690 V AC 25...400 Hz
                                    <br>
                                    Power circuit: <= 300 V DC</td>
                                 </tr>
                                 <tr>
                                    <th>
                                        [Ie] rated operational current</th>
                                  <td>
                                   <span>
                                    9 A (at <60 °C) at <= 440 V AC AC-3 for power circuit
                                   </span>
                                   <br>
                                   <span>
                                    25 A (at <60 °C) at <= 440 V AC AC-1 for power circuit
                                   </span>
                                   <br>
                                   <span>
                                    9 A (at <60 °C) at <= 440 V AC AC-3e for power circuit
                                   </span>
                                   <br>
                                   </td>
                                 </tr>
                                 <tr>
                                    <th>
                                        [Uc] control circuit voltage</th>
                                  <td>220 V AC 50/60 Hz</td>
                                 </tr>
                                 <tr>
                                    <th>
                                        Motor power kW</th>
                                  <td>2.2 kW at 220...230 V AC 50/60 Hz (AC-3)
                                  </td>
                                 </tr>
                                </tbody>
                               </table-->
                        </div>

                    </div>
                </div>

               

                
            </div>
        </div>
       
    </div>
</section>

<?php include('footer.php');?>
  
   <!--==============================
Cta Area  
==============================-->

    <!--div class="footer-top-newsletter">
        <div class="container z-index-common">
            <div class="newsletter-wrap">
                <div class="newsletter-content">
                    <div class="email-icon">
                        <img src="<?php //echo base_url().'electricalshop1/assets/img/icon/email_2.svg';?>" alt="Icon">
                    </div>
                    <h4 class="newsletter-title">Sign Up to Get Updates & News About Us.</h4>
                </div>
                <form class="newsletter-form">
                    <div class="form-group">
                        <input class="form-control" type="email" placeholder="Email Address" required="">
                    </div>
                    <button type="submit" class="th-btn">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer-wrapper footer-layout3">
          <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo">
                                    <a href="#"><img src="<?php echo base_url().'electricalshop1/assets/img/logo-eletrical.png';?>" alt="eletrical"></a>
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
                        <div class="widget widget_nav_menu footer-widget">
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
                        <div class="widget widget_nav_menu footer-widget">
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
                        <div class="widget footer-widget">
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
        <div class="copyright-wrap" data-bg-src="<?php echo base_url().'electricalshop1/assets/img/bg/copyright_bg_1.png';?>">
            <div class="container">
                <div class="row gy-2 align-items-center">
                    <div class="col-md-6">
                       
                        <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2023 <a href="#">Electrical Shop</a>. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="developed-area">
                         Created with <img src="<?php echo base_url().'electricalshop1/assets/img/e-shop/heartbeat.png';?>"> by <a href="https://pocketfriendlyweb.com/" target="_blank">PocketFriendlyWeb</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer-->

    <!--********************************
			Code End  Here 
	******************************** -->
<!-- whatsapp -->
    <!--div class="button__cover">
        <a href="tel:+971 50 964 8779 "><i class="fab fa-whatsapp"></i></a>
        <a href="#" target="_blank"> <i class="fas fa-location-dot"></i> </a>
    </div>

   
    <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div-->

    <!--==============================
    All Js File
============================== -->

    <script src="<?php echo base_url().'electricalshop1/assets/js/vendor/jquery-3.6.0.min.js';?>"></script>
   
   <script src="<?php echo base_url().'electricalshop1/assets/js/swiper-bundle.min.js';?>"></script>
 
   <script src="<?php echo base_url().'electricalshop1/assets/js/bootstrap.min.js';?>"></script>
 
   <script src="<?php echo base_url().'electricalshop1/assets/js/jquery.magnific-popup.min.js';?>"></script>
  
   <script src="<?php echo base_url().'electricalshop1/assets/js/jquery.counterup.min.js';?>"></script>
  
   <script src="<?php echo base_url().'electricalshop1/assets/js/jquery-ui.min.js';?>"></script>
  
   <script src="<?php echo base_url().'electricalshop1/assets/js/imagesloaded.pkgd.min.js';?>"></script>
   <script src="<?php echo base_url().'electricalshop1/assets/js/isotope.pkgd.min.js';?>"></script>

   
   <script src="<?php echo base_url().'electricalshop1/assets/js/main.js';?>"></script>


   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>


   

<script>

function updateCartItembtdownprd(val,rowid){
//alert(obj.value);
//alert(rowid);
var value=$('#txt'+val).val();
var actval=parseInt(value)-1;
//alert(value);
$.get("<?php echo base_url('cart/updateItemQty/'); ?>", {rowid:rowid, qty:actval}, function(resp){
    if(resp == 'ok'){
        location.reload();
    }else{
        alert('Cart update failed, please try again.');
    }
});
}









$('form[id="frmemail"]').validate({  
rules: {  
emailidnews: 'required',  

},  
messages: {  
emailidnews: 'Please enter your emailid',  

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

$('#emailnews').val('');

$('#newsmsg').html(response);
}            
});		
}





//form.submit();  
// }  
});  



$("#sub").click(function(){
$('#newsmsg').html('');
}); 

</script>


<script>


function displayimg(src1){
    //alert("src");
    //$('#largeImage').src=src1;
    $("#largeImage").attr("src",src1);
}

$('form[id="frmser"]').validate({  
rules: {  
    serquery: 'required',  
 
},  
messages: {  
    serquery: 'Please enter your Keyword',  
 
},  
submitHandler: function(form) { 
   
    $("#frmser").submit();
      
}

});  



</script>







</body>

</html>