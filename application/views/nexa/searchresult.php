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

    <?php $sitedetails = sitedetails(); 
    
    $currency = '';
    if (isset($sitecurrency)) {
        $currency = $sitecurrency['currency'];
    }
    
    
    ?>

</head>

<script>

function curchange(val){
   <?php $url=base_url().'Home/searchproducts';



?>

    //alert("curchange");
    location.href="<?php echo $url;?>"+'?cur='+val;
}

</script>

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
    </div-->
    <?php include('header.php');
    
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
   <?php $url=base_url().'/Home/searchproducts';



?>

    //alert("curchange");
    location.href="<?php echo $url;?>"+'?cur='+val;
}

</script>
    <!--==============================
Hero Area
==============================-->
   <!--==============================
    Breadcumb
============================== -->
<a href="<?php echo base_url().$homepagedetails2->label27;?>">
<div class="breadcumb-wrapper " data-bg-src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails2->clearenceimg1;?>" style="height: 300px;">
    <div class="container">
        <div class="row">
          
        </div>
     
    </div>
</div></a>
   

    <!--==============================
Contact Info Area  
==============================-->



 

   <!--==============================
Product Area  
==============================-->
<section class="space-50">
    <div class="container">
        <div class="row ">
            
            <div class="col-xl-12 col-lg-12 col-md-6">
                <div class="swiper th-slider has-shadow" id="productSlider7" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">

                    <?php if (count($products)>0){ ?>

                    <?php //foreach ($clearencesale as $product) {
                    
                    
                    //print_r($products);
                  
                    
                    foreach ($products as $product) { ?>
                    
                   
                        
        
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
                                    
                                   
                                    <!--a href="<?//=site_url().'product/'.$product['prod_canonial_name']?>" class="icon-btn popup-content1"><i class="far fa-eye"></i></a-->
                                    <div class="actions">
                                    <a href="<?=site_url().'product/'.$product['prod_canonial_name']?>?cur=<?php echo $cur;?>" class="icon-btn"><i class="far fa-eye"></i></a>
                                        <!--a href="<?php //echo base_url('productssample/addToCart/'.$product['prod_id']); ?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->

                                        <?php 
                                            
                                            $username=$this->session->userdata('username');
                                            
                                            if ($username==''){?>


<?php if ($product['addtoquote']==1){ ?>
<a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>" class="icon-btn"><i class="far fa-cart-plus"></i></a>

<?php } else { ?>


   
     <a href="#" class="icon-btn"  onclick="addtocartaj(<?php echo $product['prod_id'];?>)"><i class="far fa-cart-plus"></i></a>

                                                <!--a href="<?php //echo base_url('productssample/addToCart/'.$product['prod_id']); ?>?cur=<?php //echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->
                                                
                                                

<?php } ?>





                                                <!--a href="<?php //echo base_url('home/login'); ?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->
                                        
                                            
                                            
                                            <?php } else { 

                                                if ($product['addtoquote']==1){

?>

<a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>" class="icon-btn"><i class="far fa-cart-plus"></i></a>




<?php }else{



?>
<a href="#" onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="icon-btn"><i class="far fa-cart-plus"></i></a>

                                            
                                            <!--a href="<?php //echo base_url('productssample/addToCart/'.$product['prod_id']); ?>?cur=<?php //echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->
                                            <?php }} ?>




                                        <a  href="javascript:void(0)" onclick=addwishlist(<?php echo $product['prod_id'];?>) class="icon-btn"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content text-lg-start">
                                    <div class="woocommerce-product-rating">
                                     
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                            <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                        </div>
                                    </div>
                                    <h3 class="product-title"><a href="<?=site_url().'product/'.$product['prod_canonial_name']?>"><?=$product['prod_name']?></a></h3>
                                    <h3 class="product-title"><?php 
                            
                            
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
echo 'USD '.$product['prod_price3'];

}



else{
echo  $currency.' '.$pricedt->prod_dt_desc;
}
                            
                            ?>
                            
                        
                            <?php
 if ($product['addtoquote']!=1){?>

<span class="product-title" style="float:right;color:red"><strike><b><?php 
                            
                            
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
}}
                            
                            ?></b></strike></span>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        </h3>








                                  
                                   
                                </div>
                            </div>
                        </div>

                        <?php }} else { ?>

<div class='text-center'><h6 style='color:red'>Sorry No Product found</h6></div>


<?php } ?>
        
        
                        <!--div class="swiper-slide">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/e-shop/nexa/list-2.png" alt="Product Image">
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
                                    <img src="assets/img/e-shop/nexa/list-3.png" alt="Product Image">
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
                                    <img src="assets/img/e-shop/nexa/list-2.png" alt="Product Image">
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
                                    <img src="assets/img/e-shop/nexa/list-2.png" alt="Product Image">
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
                                    <img src="assets/img/e-shop/nexa/list-2.png" alt="Product Image">
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
                                    <img src="assets/img/e-shop/nexa/list-2.png" alt="Product Image">
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
                                    <img src="assets/img/e-shop/nexa/list-2.png" alt="Product Image">
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

                
            </div>
        </div>

    </div>
</section>
 <!--==============================
Contact Area   
==============================-->
<section class="">
    <div class="container">
     <div class="row justify-content-lg-between justify-content-center align-items-center">
       <div class="col-lg-6 col-md-6">
        <div class="blog-img mb-30">
        <a href="<?php echo base_url().$homepagedetails2->label28;?>">
        <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails2->clearenceimg2;?>" alt="img-product"></a>
        </div>
       </div>
       <div class="col-lg-6 col-md-6">
        <div class="blog-img mb-30">
        <a href="<?php echo base_url().$homepagedetails2->label29;?>">
        <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails2->clearenceimg3;?>" alt="img-product"></a>
        </div>
    </div>
</div>
</div>
</section>

  

   
    
<!--==============================
Product Area  
==============================-->
 <!--==============================
Product Area  
==============================-->
<section class="space-btm-50">
    <div class="container">
        <div class="row ">
            <div class="col-xl-8 col-lg-8 col-md-6">
                <div class="row justify-content-lg-between justify-content-center align-items-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="blog-img mb-30">
                        <a href="<?php echo base_url().$homepagedetails2->label30;?>">
                        <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails2->clearenceimg4;?>" alt="img-product"></a>
                        </div>
                    </div>
                    
                </div>
               
            </div>

            <?php 
                    
                  
                    $k=1;
                    foreach ($productsdealoftheday as $product) { 
                        
                      
                       if ($k<=1){
                        ?>

            <div class="col-xs-4 col-lg-4 col-md-4">
                <div class="box-img">
                    <div class="img"><?php //echo $k;?>


                    
                    <!--span class="product-tag">Hot</span-->
                    <img src="<?=site_url()?>assets/uploads/products/<?=$product['prod_primary_image']?>" alt="<?=$product['prod_name']?>" title="<?=$product['prod_name']?>"/>
                        <!--img src="assets/img/e-shop/19__1_.jpg" alt="block-img"-->

                    </div>
                    <div class="content-area">
                        <p><?=$product['prod_name']?></p>
                    </div>

                    <div class="button-area">
                                            <div class="btn-sec mt-30">
                                                <a href="<?=site_url().'product/'.$product['prod_canonial_name']?>?cur=<?php echo $cur;?>" class="th-btn">Deal of Day</a>
                                               
                                            </div>
        
                                            
                                        </div>
                </div>
            </div>
<?php  

}
$k=$k+1;

//echo $k;
                    }
?>





        </div>

    </div>
</section>

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

$("#ctcount").html(data);

            //$("#subtotal1").html(data);
        }
    });
   }














function addtocartaj_old(prdid){
    //alert(prdid);
    var cur="<?php echo $cur;?>"
    $.ajax({
        type: 'GET',
        url:"<?php echo base_url().'/productssample/addtocartaj';?>",
        data:{prdid:prdid,cur:cur},
        success:function(data){
          
            //$(".wishlistcount").html(data);
            $("#subtotal1").html(data);
        }
    });
   }


function addwishlist(id){
//alert(id);
$.ajax({
        type: 'GET',
        url:"<?php echo base_url().'/checkout/addwishlist';?>",
        data:{id:id},
        success:function(data){
          
            $(".wishlistcount").html(data);
        }
    });

}

</script>


</body>

</html>