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
   



    
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
   
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/fontawesome.min.css';?>">
    
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/magnific-popup.min.css';?>">
    
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/swiper-bundle.min.css';?>">
  
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/responsive.css';?>">

</head>

<body>
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

<?php
$currency = '';
if (isset($sitecurrency)) {
    $currency = $sitecurrency['currency'];
}

$url1=$this->uri->segment(1);
$url2=$this->uri->segment(2);

?>


<?php
if (isset($_GET['cur']))
{
   $cur=$_GET['cur']; 
}
else{
    $cur='AED'; 
}
?>

<?php 

$url3=base_url().'/product'.'/'.$url2;



?>

<script>

function curchange(val){
   

    //alert("curchange");
    location.href="<?php echo $url3;?>"+'?cur='+val;
}
</script>
<?php include('header.php');?>

<script>



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
                    <a href="#">Clearance Sale</a>
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
                    <a href="#">Products</a>
                    



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
                    <a href="#">About Us</a>
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
Product list Area  
==============================-->
<section class="space-50">
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
                    <!--img id="largeImage" src="assets/img/e-shop/product-details.png"-->

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
                  <div id="thumbs" class="mb-20">
                  <?php foreach ($productdetails['Images'] as $image) { 
                    //echo $image['pd_img_image'];
                    $url=site_url().'assets/uploads/products/'.$image['pd_img_image'];
                    
                    ?>
                    <img src="<?=site_url()?>assets/uploads/products/<?=$image['pd_img_image']?>"  onclick="displayimg('<?php echo $url;?>')" />
                    <?php } ?>
                    <!--img src="assets/img/e-shop/small-product1.png" />
                    <img src="assets/img/e-shop/small-product2.png"/>
                    <img src="assets/img/e-shop/small-product3.png" />
                    <img src="assets/img/e-shop/small-product4.png"/-->
                  
                  </div>

               <!-- thumbs -->




                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="product-box-details-area">
        
                                    <div class="products-details">
                                        <h2>
                                            <!--img src="assets/img/e-shop/logo-details.png"/-->


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
                                    
                                    <div class="matrial-details">
                                      
    
                                        <div class="details-table-sec">
                                        <form action="<?php echo base_url('productssample/addToCartqty/'); ?>" method="post">
                                         
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
                                                            <!--a href="#" class="default-btn small-btn instock-btn"> Instock</a>    
                                                            <a href="#" class="default-btn small-btn request-btn"> Request </a--> 



                                                            <?php $prdstk= $product['instock'];
                                                            if ($prdstk==1){

                                                                ?>
                                                                <a href="#" class="default-btn small-btn instock-btn"  >Instock
                                                            </a>
                                                            <?php } if ($prdstk==0) {?>
                                                                <?php echo $product['requestremark'];?>
                                                           
                                                               
                                                                 <!--a href="<?php //echo base_url().'bulkenquiry';?>" class="default-btn small-btn instock1-btn" > Request </a--> 
                                                           <?php }
                                                            
                                                            ?>   



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




                                                        <span class="smallText">  
                                                        <?php if (isset($_GET['cur'])){
                                $cur=$_GET['cur'];
                                
                                
                                ?>

                                <?php } else{
                                    $cur='AED';
                                    
                                }?>
                                                        
                                                        <?php 
                                                        
                                                        if ($cur==''){

                                                            $cur='AED';
                                                        }
                                                        
                                                        
                                                        
                                                        echo $cur;?> <?php 
                                                        
                                                        if ($cur=='SAR'){
                                                            //echo '<b>SAR : </b> '.$product['prod_price2'];
                                                            echo $price=$product['prod_price2'];
                                                        
                                                        }
                                                        else if ($cur=='USD'){
                                                            //echo '<b>USD :</b>'.$product['prod_price3'];
                                                            echo $price=$product['prod_price3'];
                                                        
                                                        }
                                                        
                                                        
                                                        
                                                        else{
                                                        //echo  "<b>$currency : </b>".$pricedt->prod_dt_desc;
                                                        //$price=$pricedt->prod_dt_desc;
                                                        echo $pnumber=$prodPoints['Price'];
                                                        }
                                                        
                                                        
                                                        
                                                        
                                                        //echo $pnumber=$prodPoints['Price'];?>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        <?php //echo $pnumber=$prodPoints['Price'];?></span> <!--AED 850 +VAT--> 
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
                                                        <input type="hidden" id="currency" name="currency" value="<?php echo $cur;?>" >
                                                        <input type="hidden" id="prdid" name="prdid" value="<?php echo $product['prod_id'];?>" >

                                                        <input type="hidden" id="prdname" name="prdname" value="<?=$product['prod_name']?>" >
                                                       
<input type="number" id="quantity" name="quantity" min="1" max="500000" required class='numberonly' >


    
                                                    </td>
                                                </tr>
                                             
                                        </table>
                                        
                                        </div>
        
                                        
                                        <div class="button-area">
                                            <div class="btn-sec mt-30">

                                            <?php 
                                                
                                                $custname=$this->session->userdata('username');
                                                
                                                
                                                if ($custname==''){
                                                    
                                                    if ($product['addtoquote']==1){
                                                    
                                                    ?>
                                                    <!--a href="<?php //echo base_url().'login';?>"><button type="button" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</button> </a-->
                                                    <a href="#" class="th-btn" onclick="addtoquote()" class="th-btn">Add to Quote</a>

                                                    <?php } else { ?>
                                                        <button type='Submit' class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</button>


                                                        <?php } ?>

                                                
                                                <?php } else { ?>


                                                   <?php if ($product['addtoquote']==1){

?>

<!--a href="<?php //echo base_url('viewquote'); ?>?prd=<?//=$product['prod_name']?>" class="th-btn">Add to Quote</a-->

<a href="#" class="th-btn" onclick="addtoquote()" class="th-btn">Add to Quote</a>


<?php }else{ ?>




                                                <button type='Submit' class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</button>
                                                <?php } } ?>



                                               
                                                <!--a href="<?php //echo base_url().'bulkenquiry';?>?prd=<?//=$product['prod_name']?>" class="th-btn btn-sm ml-20">
                                                   
                                                    Bulk Order
                                                </a-->


                                                <a href="#" class="th-btn" onclick="bulkorder()" class="th-btn"> Bulk Order</a>

                                            </div>
        
                                            
                                        </div></form>
                                       
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
                        <p><?php echo $product['prdshdesc'];?></p>
                    </div>
                    <div class="Specifications mt-2">
                        <h4>Specifications</h4>

                        <div class="specification-table">  <?=$product['prdspec']?>
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

  
  
   <!--==============================
Cta Area  
==============================-->
  <!--==============================
Product list Area  
==============================-->


<?php include('footer.php');?>
 
 
<script>
$('.numberonly').keypress(function (e) {    
    
    var charCode = (e.which) ? e.which : event.keyCode    

    if (String.fromCharCode(charCode).match(/[^0-9]/g))    

        return false;                        

});   

</script>
    
 
   
  
  
   
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

function addtoquote(){
    if ($("#quantity").val()==''){
        alert("Please enter quantity");
    }
    else {
    var prd=$("#prdname").val();
    var qty=$("#quantity").val();
    window.location.href ="<?php echo base_url('viewquote');?>?prd="+prd+"&qty="+qty;
    }
}



function bulkorder(){
    if ($("#quantity").val()==''){
        alert("Please enter quantity");
    }
    else {
    var prd=$("#prdname").val();
    var qty=$("#quantity").val();
    window.location.href ="<?php echo base_url('bulkenquiry');?>?prd="+prd+"&qty="+qty+"&cur=";
    }
}
</script>


</body>

</html>