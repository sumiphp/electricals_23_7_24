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
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
   
   <link rel="stylesheet" href="<?php echo base_url().'assets/css/fontawesome.min.css';?>">
   
   <link rel="stylesheet" href="<?php echo base_url().'assets/css/magnific-popup.min.css';?>">
   
   <link rel="stylesheet" href="<?php echo base_url().'assets/css/swiper-bundle.min.css';?>">
 
   <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css';?>">
   <link rel="stylesheet" href="<?php echo base_url().'assets/css/responsive.css';?>">

</head>


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
   <?php $url=base_url().'/wishlist.php?cur='.$cur;



?>

    //alert("curchange");
    location.href="<?php echo $url;?>"+'?cur='+val;
}

</script>

<script>
function del(id){
    //alert(id);
$.ajax({
            type: 'GET',
            url: "<?php echo base_url().'index.php/checkout/deletewishlist';?>",
            data:{id:id},
            success:function(data){
                $("#"+id).remove();
                $("#msg").html(data);
            }
        });

}


</script>

<?php
if (isset($_GET['cur']))
{
   $cur=$_GET['cur']; 
}
else{
    $cur='AED'; 
}
?>

<body>


    <!--==============================
     Preloader
  ==============================-->
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
<?php include('header.php');?>


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
                    <a href="#"><img src="assets/img/e-shop/small-product2.png" alt="Cart Image">VALVE & ACTUATORS</a>
                    <span class="quantity">1 ×
                        <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">$</span>899.00</span>
                    </span>
                </li>
                <li class="woocommerce-mini-cart-item mini_cart_item">
                    <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                    <a href="#"><img src="assets/img/e-shop/small-product3.png" alt="Cart Image">LIMIT SWITCH & SENSORE</a>
                    <span class="quantity">1 ×
                        <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">$</span>756.00</span>
                    </span>
                </li>
                <li class="woocommerce-mini-cart-item mini_cart_item">
                    <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                    <a href="#"><img src="assets/img/e-shop/small-product4.png" alt="Cart Image">ENCLOSURES</a>
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
            <a href="index.html"><img src="assets/img/logo-eletrical.png" alt="Electrical Shop"></a>
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
</header>

<!--==============================
Checkout Area
==============================-->
    <div class="space">
        <div class="container">
            <div class="tinv-wishlist woocommerce tinv-wishlist-clear">
                <div class="tinv-header">
                    <h2 class="mb-30">Wishlist</h2>
                </div>
                <form action="#" method="post" autocomplete="off">
                <?php $custname=$this->session->userdata('username'); 
                
                if ($custname!='')
                
                {?>
 
                    <table class="tinvwl-table-manage-list">
                        <thead>
                            <tr>
                                <!--th class="product-cb">
                                    <input type="checkbox" class="global-cb" title="Select all for bulk action">
                                </th-->
                                <th class="product-remove">Select</th>
                                <th class="product-thumbnail">Product Image&nbsp;</th>
                                <th class="product-name">
                                    <span class="tinvwl-full">Product Name</span><span class="tinvwl-mobile">Product</span>
                                </th>
                                <th class="product-price">Unit Price</th>
                                <!--th class="product-date">Date Added</th-->
                                <th class="product-stock">Stock Status</th>
                                <th class="product-action">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php if (! empty($custwishlist)) { ?>

<?php foreach ($custwishlist as $product) {
    
    
    ?>
    <?php $prdid=$product['product_id'];
    
    $this->db->where('prod_id',$prdid);
    //$this->db->where('prod_dt_typeid',5);
   // $this->db->order_by("orderno", "asc");
    $this->db->select('*');
    $this->db->from('products');
    $query = $this->db->get();
    $rowdt=$query->row();
    
    
    
    ?>
                            <tr class="wishlist_item" id="<?php echo $product['id'];?>">
                                <!--td class="product-cb">
                                    <input type="checkbox" name="wishlist_pr[]" value="58" title="Select for bulk action">
                                </td-->
                                <td class="product-remove">
                                    <button type="button" name="tinvwl-remove" value="58" title="Remove" onclick="del(<?php echo $product['id'];?>)"><i class="fal fa-times"></i>
                                    </button>
                                </td>
                                <td class="product-thumbnail">
                                    <a href="<?=site_url().'product/'.$rowdt->prod_canonial_name;?>"><img src="<?=site_url()?>assets/uploads/products/<?=$rowdt->prod_primary_image?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="image"></a>
                                </td>
                                <td class="product-name">
                                    <a href="<?=site_url().'product/'.$rowdt->prod_canonial_name?>"><?php
                                    //$itn=$item["name"]; 
                                
                               
                                echo $string1=$rowdt->prod_name;
                                ?></a>
                                </td>
                                <td class="product-price">
                                    <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span> <?php 
                                     $this->db->where('prod_dt_prodid',$prdid);
                                     $this->db->where('prod_dt_typeid',4);
                                    // $this->db->order_by("orderno", "asc");
                                     $this->db->select('*');
                                     $this->db->from('product_details');
                                     $query = $this->db->get();
                                     $pricedt=$query->row();
                                     $currency='USD';
                                     
                                     echo $pricedt->prod_dt_desc;  ?></bdi></span>
                                </td>
                                <!--td class="product-date">
                                    <time class="entry-date" datetime="2021-11-21 03:54:24">November 21, 2021</time>
                                </td-->
                                <td class="product-stock">
                                    <p class="stock in-stock">
                                        <span><i class="fas fa-check"></i></span><span class="tinvwl-txt"><?php if ($rowdt->instock==1){
                                            echo 'Instock';
                                        }else{
                                            
                                            echo 'Request';
                                        }?></span>
                                    </p>
                                </td>
                                <td class="product-action">

                                <?php  
                                
                                $username=$this->session->userdata('username');
                                            
                                
                                
                                
                                if ($username==''){
                                    $url=base_url('home/login');
                                    
                                    
                                    ?>

                                    <?php } else {
                                        
                                        $url='productssample/addToCart/'.$prdid;
                                        
                                        ?>

                                        <?php } ?>


                                        <!--a href="<?php //echo $url;?>?cur=<?php //echo $cur;?>" ><button type="button" class="button th-btn" name="tinvwl-add-to-cart" value="58" title="Add to Cart">
                                        <i class="fal fa-shopping-cart"></i><span class="tinvwl-txt">Add to Cart</span>
                                    </button></a-->
  <a href="#" onclick="addtocartaj(<?php echo $product['id'];?>)"><button type="button" class="button th-btn" name="tinvwl-add-to-cart" value="58" title="Add to Cart">
                                        <i class="fal fa-shopping-cart"></i><span class="tinvwl-txt">Add to Cart</span>
                                    </button></a>




                                </td>
                            </tr>

                            <?php }} 

                                    }
                            
                             if ($custname==''){ ?>

                             <tr ><td colspan='6'>Please login</td></tr>
           

           <?php  }
                            
                            
                            ?>
                            <!--tr class="wishlist_item">
                                <td class="product-cb">
                                    <input type="checkbox" name="wishlist_pr[]" value="60" title="Select for bulk action">
                                </td>
                                <td class="product-remove">
                                    <button type="submit" name="tinvwl-remove" value="60" title="Remove"><i class="fal fa-times"></i>
                                    </button>
                                </td>
                                <td class="product-thumbnail">
                                    <a href="#"><img src="assets/img/e-shop/small-product2.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="image"></a>
                                </td>
                                <td class="product-name">
                                    <a href="#">TeSysD TH O/L RELAY CL10A 16-24A</a>
                                </td>
                                <td class="product-price">
                                    <ins><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>18.00</bdi></span></ins>
                                    <del><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>20.00</bdi></span></del>
                                </td>
                                <td class="product-date">
                                    <time class="entry-date" datetime="2021-11-21 03:54:24">November 21, 2021</time>
                                </td>
                                <td class="product-stock">
                                    <p class="stock in-stock"><span><i class="fas fa-check"></i></span><span class="tinvwl-txt">In stock</span></p>
                                </td>
                                <td class="product-action">
                                    <button class="button th-btn" name="tinvwl-add-to-cart" value="60" title="Add to Cart">
                                        <i class="fal fa-shopping-cart"></i><span class="tinvwl-txt">Add to Cart</span>
                                    </button>
                                </td>
                            </tr>
                            <tr class="wishlist_item">
                                <td class="product-cb">
                                    <input type="checkbox" name="wishlist_pr[]" value="60" title="Select for bulk action">
                                </td>
                                <td class="product-remove">
                                    <button type="submit" name="tinvwl-remove" value="60" title="Remove"><i class="fal fa-times"></i>
                                    </button>
                                </td>
                                <td class="product-thumbnail">
                                    <a href="#"><img src="assets/img/e-shop/small-product4.png" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="image"></a>
                                </td>
                                <td class="product-name">
                                    <a href="#">CIRCUIT BREAKER C60H-DC 250VDC 1A 1P C</a>
                                </td>
                                <td class="product-price">
                                    <ins><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>18.00</bdi></span></ins>
                                    <del><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>20.00</bdi></span></del>
                                </td>
                                <td class="product-date">
                                    <time class="entry-date" datetime="2021-11-21 03:54:24">November 21, 2021</time>
                                </td>
                                <td class="product-stock">
                                    <p class="stock in-stock"><span><i class="fas fa-check"></i></span><span class="tinvwl-txt">In stock</span></p>
                                </td>
                                <td class="product-action">
                                    <button class="button th-btn" name="tinvwl-add-to-cart" value="60" title="Add to Cart">
                                        <i class="fal fa-shopping-cart"></i><span class="tinvwl-txt">Add to Cart</span>
                                    </button>
                                </td>
                            </tr-->
                        </tbody>
                    </table>
                </form>
                <div class="social-buttons">
                    <span>Follow Social Media</span>
                    <ul>
                        <li><a href="<?php echo $sitedetails['facebook_url']?>" class="social social-facebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?php echo $sitedetails['twitter_url']?>" class="social social-twitter " title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <!--li><a href="#" class="social social-pinterest " title="Pinterest"><i class="fab fa-pinterest-p"></i></a></li-->
                        <!--li><a href="#" class="social social-whatsapp " title="WhatsApp"><i class="fab fa-whatsapp"></i></a></li-->
                        <!--li><a href="#" class="social social-clipboard " title="Clipboard"><i class="far fa-clipboard"></i></a></li>
                        <li><a href="#" class="social social-email " title="Email"><i class="far fa-envelope"></i></a></li-->
                        <li><a target="_blank" href="<?php echo $sitedetails['instagram_url']?>" class="social social-instagram "><i class="fab fa-instagram"></i></a></li>
                        <li><a target="_blank" href="<?php echo $sitedetails['site_linkldn']?>" class="social social-linkldn "><i class="fab fa-linkedin-in"></i></a></li>


                       




                    </ul>
                </div>

            </div>
        </div>
    </div>


    <?php include('footer.php');?>


    <script>
    function del(id){
       
$.ajax({
            type: 'GET',
            url: "<?php echo base_url().'checkout/deletewishlist';?>",
            data:{id:id},
            success:function(data){
                $("#"+id).remove();
                //$("#msg").html(data);
                $(".wishlistcount").html(data);
            }
        });

}


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
    </div-->

   
  
    <!--script src="<?php //echo base_url().'assets/js/vendor/jquery-3.6.0.min.js';?>"></script>
    
    <script src="<?php //echo base_url().'assets/js/swiper-bundle.min.js';?>"></script>
  
    <script src="<?php //echo base_url().'assets/js/bootstrap.min.js';?>"></script>
    
    <script src="<?php //echo base_url().'assets/js/jquery.magnific-popup.min.js';?>"></script>
    
    <script src="<?php //echo base_url().'assets/js/jquery.counterup.min.js';?>"></script>
    
    <script src="<?php //echo base_url().'assets/js/jquery-ui.min.js';?>"></script>
    
    <script src="<?php //echo base_url().'assets/js/imagesloaded.pkgd.min.js';?>"></script>
    <script src="<?php //echo base_url().'assets/js/isotope.pkgd.min.js';?>"></script>

    <script src="<?php //echo base_url().'assets/js/main.js';?>"></script-->

    <script>


function ch(){

if ($(".checkAll").length) {
        //alert("en");
        $("input:checkbox").prop("checked", true);
    } else {
        $("input:checkbox").prop("checked", false);
    }


}

/*$(".checkAll").click(function() {
alert($(".checkAll").length);
    if ($(".checkAll").length) {
      
        $("input:checkbox").prop("checked", true);
    } else {
        $("input:checkbox").prop("checked", false);
    }
})*/



$(function(){

$('.checkAll').click(function(){

if (this.checked) {

  //$(".checkboxes").prop("checked", true);
  $("input:checkbox").prop("checked", true);

} else {

  //$(".checkboxes").prop("checked", false);
  $("input:checkbox").prop("checked", false);

}	

});

});




function addtocartaj(prdid){
    alert(prdid);
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





</script>

</body>

</html>