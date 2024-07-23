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

    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->


    <!--********************************
   		Code Start From Here 
	******************************** -->

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
    </div--><!--==============================
Product Lightbox
==============================-->
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
?>


<script>

function curchange(val){
   <?php $url=base_url();



?>

    //alert("curchange");
    location.href="<?php echo $url;?>"+'?cur='+val;
}

</script>

    <!--==============================
Hero Area
==============================-->
   <!--==============================
Hero Area
==============================-->
<?php //print_r($homepagedetails3); ?>
<section class="home-slider position-relative mb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="home-slide-cover mt-30">
                    <div class="hero-slider-1 style-5 dot-style-1 dot-style-1-position-2">
                        <?php if ($homepagedetails3[0]['status']=='Active'){?>

                            <div class="single-hero-slider single-animation-wrap" style="background-image: url(<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails3[0]['img'];?>);background-repeat: no-repeat;background-size: cover;height: 81vh;">     


                        <?php } else { ?>
                        <div class="single-hero-slider single-animation-wrap" style="background-image: url(<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails->banner1;?>);background-repeat: no-repeat;background-size: cover;height: 81vh;">
                            <?php } ?>
                            <div class="slider-content">
                                <h1 class="display-2 mb-40">
                                <?php //echo $homepagedetails->title1;?>
                                </h1>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="img-area">
                                        <img src="<?php //echo base_url().'assets/uploads/homepage/'.$homepagedetails->img1;?>"/>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="banner-content">
                                        <h4><?php //echo $homepagedetails->title2;?></h4>
                                        <p><?php //echo $homepagedetails->label18;?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
               
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-md-6 col-lg-12">
                        <div class="banner-img style-4 mt-30">
                        <?php if ($homepagedetails3[1]['status']=='Active'){?>
                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails3[1]['img'];?>" alt="" />
                            <?php } else { ?>
                                <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails->banner2;?>" alt="" />
                                <?php } ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-12">
                        <div class="banner-img style-5 mt-5 mt-md-30">
                        <?php if ($homepagedetails3[2]['status']=='Active'){?>
                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails3[2]['img'];?>" alt="" />
                            <?php } else { ?>
                                <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails->image1;?>" alt="" />
                                <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End hero slider-->


<!--======== / Hero Section ========-->
    <!--======== / Hero Section ========--><!--==============================
Feature Area  
==============================-->
    <section class="mt-4 mb-35 bg-feature">
        <div class="container">
            <div class="feature-list-wrap">
                <div class="feature-list">
                    <div class="box-icon">
                        <!--img src="<?php //echo base_url().'assets/uploads/homepage/'.$homepagedetails->img1;?>" alt="icon"-->


                       
                                <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails->img1;?>" alt="" />
                              
                    </div>
                    <div class="media-body">
                        <h3 class="box-title"><?php echo $homepagedetails->label1;?></h3>
                        <p class="box-text"><?php echo $homepagedetails->label2;?></p>
                    </div>
                </div>
                <div class="feature-list-line"></div>
                <div class="feature-list">
                    <div class="box-icon">
                   
                        <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails->img2;?>" alt="icon">
                  
                    </div>
                    <div class="media-body">
                        <h3 class="box-title"><?php echo $homepagedetails->label3;?></h3>
                        <p class="box-text"><?php echo $homepagedetails->label4;?></p>
                    </div>
                </div>
                <div class="feature-list-line"></div>
                <div class="feature-list">
                    <div class="box-icon">
                        <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails->img3;?>" alt="icon">
                    </div>
                    <div class="media-body">
                        <h3 class="box-title"><?php echo $homepagedetails->label5;?></h3>
                        <p class="box-text"><?php echo $homepagedetails->label6;?></p>
                    </div>
                </div>
                <div class="feature-list-line"></div>
                <div class="feature-list">
                    <div class="box-icon">
                        <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails->img4;?>" alt="icon">
                    </div>
                    <div class="media-body">
                        <h3 class="box-title"><?php echo $homepagedetails->label7;?></h3>
                        <p class="box-text"><?php echo $homepagedetails->label8;?></p>
                    </div>
                </div>
                <div class="feature-list-line"></div>
            </div>
        </div>
    </section>
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
                <!--div class="swiper-slide">
                    <div class="category-box">
                        <div class="box-icon">
                            <img src="assets/img/e-shop/circle-1.png" alt="Image">
                        </div>
                     
                    </div>
                </div-->


                
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
Product List AREA  
==============================-->
 <!--==============================
Product Area  
==============================-->
<section class="space-50">
    <div class="container">
        <div class="row ">
            <div class="col-xl-4 col-lg-4 col-md-6 mb-40 mb-lg-0">
                <aside class="sidebar-area">
                   
                    <div class="widget widget_categories  ">
                        <h3 class="widget_title">Our Blog</h3>
                        <div class="our-blog-area">
                            <img src="<?=site_url()?>assets/uploads/homepage/<?php echo $homepagedetails2->blogimage1;?>" />
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <div class="logo-ec mt-4">
                                    <img src="<?=site_url()?>assets/uploads/homepage/<?php echo $homepagedetails2->blogimage2;?>"/>
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-4 col-xs-12">
                                <div class="date mt-4 text-right">
                                   <b> <?php $str=$homepagedetails2->date;
                                   
                                   echo date("d/m/Y", strtotime($str));
                                   
                                   
                                   ?> </b> 
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-xs-12">
                                <div class="blog-content-area mt-4">
                                    <p><?php echo $homepagedetails2->blogdesc;?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                   
                </aside>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-6">
              
                <div class="row justify-content-lg-between justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="blog-img mb-30">


                        <?php if ($homepagedetails3[3]['status']=='Active'){?>
                        <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails3[3]['img'];?>" alt="" />

                        <?php } else { ?>
                           
                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails->image2;?>" alt="img-product">
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="blog-img mb-30">
                        <?php if ($homepagedetails3[4]['status']=='Active'){?>
                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails3[4]['img'];?>" alt="" />
                            <?php } else { ?>

                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails->image3;?>" alt="img-product">
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="swiper th-slider has-shadow" id="productSlider7" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">


                    


                    <?php 
                    //print_r($featured_products);
                    
                    
                    if (! empty($featured_products)) { ?>

<?php foreach ($featured_products as $product) { ?>
                        <div class="swiper-slide">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <!--img src="assets/img/e-shop/nexa/list-1.png" alt="Product Image"-->

                                    

                                    <img src="<?=site_url()?>assets/uploads/products/<?=$product['prod_primary_image']?>" alt="<?=$product['prod_name']?>" title="<?=$product['prod_name']?>" alt="Product Image">



                                    


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
                                        <!--a href="#" class="icon-btn"><i class="far fa-heart"></i></a-->

                                        <?php 
                                            
                                            $username=$this->session->userdata('username');
                                            
                                            if ($username==''){


                                                ?>

<?php if ($product['addtoquote']==1){ ?>
<a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a>

<?php } else { ?>
   


                                                <!--a href="<?php //echo base_url('home/login'); ?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->
                                                  <a href="#"  onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="icon-btn"><i class="far fa-cart-plus"></i></a>

                                                <!--a href="<?php //echo base_url('productssample/addToCart/'.$product['prod_id']); ?>?cur=<?php //echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->

<?php } ?>





                                    <!--a href="<?php //echo base_url('home/login'); ?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->
                                    <?php  } else { 


if ($product['addtoquote']==1){

    ?>
    
    <a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a>
    
    
    
    
    <?php }else{
    
    
    
   
    


 
                                                ?>
                                                <!--a href="#" onclick="addtocartaj(<?php //echo $product['prod_id'];?>)" class="icon-btn"><i class="far fa-cart-plus"></i></a-->


                                                <a href="#" onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="icon-btn"><i class="far fa-cart-plus"></i></a>

                                        <!--a href="<?php //echo base_url('productssample/addToCart/'.$product['prod_id']); ?>?cur=<?php //echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->


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
                                    <h3 class="product-title"><a href="<?php echo site_url().'product/'.$product['prod_canonial_name']?>"><?=$product['prod_name']?></a></h3>
                                  
                                   
                                </div>
                            </div>
                        </div>
                        <?php } } ?>

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
Product Area  
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
                        $i=1;
                        
                        foreach ($bestmove as $product) {
                            
                            if ($i<=4){
                            
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
                                    <a href="#"><img src="<?=site_url()?>assets/img/e-shop/nexa/side-blog-2.png" alt="Blog Image"></a>
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
                                    <a href="#"><img src="<?=site_url()?>assets/img/e-shop/nexa/side-blog-3.png" alt="Blog Image"></a>
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
                                    <a href="#"><img src="<?//=site_url()?>assets/img/e-shop/nexa/side-blog-4.png" alt="Blog Image"></a>
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
                    <!-- <div class="col-md text-center text-md-start">
                        <h2 class="sec-title mb-30">Trending Products</h2>
                    </div>
                    <div class="col-md-auto d-none d-lg-inline-block">
                        <div class="sec-btn mb-35">
                            <div class="icon-box">
                                <button data-slider-prev="#productSlider7" class="slider-arrow default"><i class="far fa-arrow-left"></i></button>
                                <button data-slider-next="#productSlider7" class="slider-arrow default"><i class="far fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="row justify-content-lg-between justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="blog-img mb-30">

                       
                            <?php if ($homepagedetails3[6]['status']=='Active'){?>
                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails3[6]['img'];?>" alt="" />

                            <?php } else { ?>

                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails->image3;?>" alt="img-product">
                            <?php }  ?>






                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="blog-img mb-30">

                        <?php if ($homepagedetails3[5]['status']=='Active'){?>
                           
                        <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails3[5]['img'];?>" alt="" />

                        <?php } else { ?>



                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails->image2;?>" alt="img-product">
                            <?php } ?>


                       
                        </div>
                    </div>
                </div>
                <div class="swiper th-slider has-shadow" id="productSlider7" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                    <div class="swiper-wrapper">

                        <!--div class="swiper-slide">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="assets/img/e-shop/nexa/list-1.png" alt="Product Image">
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
                                    <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1</a></h3>
                                  
                                   
                                </div>
                            </div>
                        </div-->



                        <?php if (! empty($featured_products)) { ?>

<?php foreach ($featured_products as $product) { ?>
                        <div class="swiper-slide">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <!--img src="assets/img/e-shop/nexa/list-1.png" alt="Product Image"-->

                                    <img src="<?=site_url()?>assets/uploads/products/<?=$product['prod_primary_image']?>" alt="<?=$product['prod_name']?>" title="<?=$product['prod_name']?>" alt="Product Image">



                                    <!--span class="product-tag">Hot</span-->


                                    
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
                                        <!--a href="#" class="icon-btn"><i class="far fa-heart"></i></a-->

                                        <?php 
                                            
                                            $username=$this->session->userdata('username');
                                            
                                            if ($username==''){


                                                ?>




<?php if ($product['addtoquote']==1){ ?>
<a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a>

<?php } else { ?>


                                                <!--a href="<?php //echo base_url('home/login'); ?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->

                                                <!--a href="<?php //echo base_url('productssample/addToCart/'.$product['prod_id']); ?>?cur=<?php //echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->

                                                
                                                  <a href="#" onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="icon-btn"><i class="far fa-cart-plus"></i></a>


<?php } ?>




                                    <!--a href="<?php //echo base_url('home/login'); ?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->








                                    <?php  } else { 


if ($product['addtoquote']==1){

    ?>
    
    <a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a>
    
    
    
    
    <?php }else{
    
    
    
   
    


 
                                                ?>


                                        <!--a href="<?php //echo base_url('productssample/addToCart/'.$product['prod_id']); ?>?cur=<?php //echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->
                                       

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
                                    <h3 class="product-title"><a href="<?php echo site_url().'product/'.$product['prod_canonial_name']?>"><?=$product['prod_name']?></a></h3>
                                  
                                   
                                </div>
                            </div>
                        </div>
                        <?php } } ?>














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
Product Area  
==============================-->

<section class="marquee-section">
    <div class="offer-text-wrap">
      <ul class="grid-wrap text1">
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
      </ul>
    </div>
</section>


    <!--==============================
Product list Area  
==============================-->
<section class="space-btm-50">
    <div class="container">
       
        <div class="row justify-content-lg-between justify-content-center align-items-end">
            <div class="col-lg">
                <div class="title-area text-center text-lg-start">
                    <h2 class="sec-title">Best Selling Product-----jjjjj</h2>
                </div>
            </div>
            <div class="col-auto mt-n2 mt-lg-0">
                <div class="sec-btn">
                    <div class="nav tab-menu1" role="tablist">
                        <!--button class="tab-btn active" id="nav-one-tab" data-bs-toggle="tab" data-bs-target="#nav-one" role="tab" aria-controls="nav-one" aria-selected="true">Top Products</button-->
                        <button class="tab-btn" id="nav-one-tab" data-bs-toggle="tab" data-bs-target="#nav-one" role="tab" aria-controls="nav-one" aria-selected="false">Best Selling Products</button>
                        <a href="#goto" class="tab-btn" style='color:#000'>Most View Product</a>      <!--a href="#goto"><button class="tab-btn" id="nav-one11" data-bs-toggle="tab" data-bs-target="#nav-one11" role="tab" aria-controls="nav-one11" aria-selected="false">Most View Product</button></a-->
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content best-selling-product">
            <!-- Single item -->
            <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                <div class="slider-area">
                    <div class="swiper th-slider has-shadow productSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                        <div class="swiper-wrapper">


                        <?php 
                            
                            
                            //echo "fffff----";

                          



                            
                            foreach ($best_selling as $product) { ?>

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
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="top-content">
                                                    <div class="sku-txt">
                                                        <p>  <b>SKU </b>: 123456</p>
                                                        <p>  <b>QAR </b>: 00000</p>
                                                    </div>

                                                   
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="content">
                                                    <div class="discount-amount">ggggg
                                                        <strike><b>AED 500.00</b></strike>
                                                </div>
                                              

                                                    <div class="add-cart-sm mt-2">
                                                        <a href="#" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</a>
                                                    </div>
                                                </div>
                                            </div>

                                           
                                        </div>
                                       
                                      
                                    </div>
                                </div>
                            </div>







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
                                         
                                            
                                            <?php 
                                            
                                            $username=$this->session->userdata('username');
                                            
                                            if ($username==''){


                                                ?>



<?php if ($product['addtoquote']==1){ ?>
<a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a>

<?php } else { ?>


                                               
                                                <a href="#"  onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="icon-btn"><i class="far fa-cart-plus"></i></a>

<?php } ?>





                                 
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
                                        <h3 class="product-title"><a href="<?php echo site_url().'product/'.$product['prod_canonial_name']?>"><?=$product['prod_name']?></a></h3>
                                     
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="left-content">


                                                <p> 
        
        <strike style=""><b><?php 
                            
                            
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



                                                

                                                    <div class="add-cart-sm mt-4">
                                                      


                                                        <?php 
                                            
                                            $username=$this->session->userdata('username');
                                            
                                            if ($username==''){?>


                                               
<?php if ($product['addtoquote']==1){

?>



<a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Quote</a>




<?php }else{



?>


                                            
                                            <a href="#" onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="th-btn"><i class="far fa-cart-shopping mr-5"></i>Add to Cart</a>
                                            <?php } ?>




                                        
                                               
                                            
                                            <?php } else { 

                                                if ($product['addtoquote']==1){

?>



<a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Quote</a>




<?php }else{



?>


                                            
 <a href="#" onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="th-btn"><i class="far fa-cart-shopping mr-5"></i>Add to Cart--</a>
                                            <?php }
                                        
                                        
                                        
                                        
                                        
                                        } ?>









                                                    </div>




                                                    
                                                </div>
                                            </div>

                                            <?php
                                            $this->db->where('prod_dt_prodid',$product['prod_id']);
        $this->db->where('prod_dt_typeid',4);
       
        $this->db->select('*');
        $this->db->from('product_details');
        $query = $this->db->get();
        $pricedt=$query->row();
       



        $this->db->where('prod_dt_prodid',$product['prod_id']);
        $this->db->where('prod_dt_typeid',15);
     
        $this->db->select('*');
        $this->db->from('product_details');
        $query = $this->db->get();
        $partdt=$query->row();

       

        
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
                                                        <p>  <b>SKU</b>: <?=$partdt->prod_dt_desc;?></p>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                       
                                      
                                    </div>
                                </div>
                            </div>

                            <?php } ?>



                            <div class="tab-content best-selling-product">
           
            <div class="tab-pane fade show" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">
                <div class="slider-area">
                    <div class="swiper th-slider has-shadow productSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                        <div class="swiper-wrapper">


                        <?php 
                            
                            
                          

                          



                            
                            foreach ($best_selling as $product) { ?>



                            <div class="swiper-slide">



                                <div class="th-product product-grid">
                                    <div class="product-img">
                                        <img src="<?=site_url()?>assets/uploads/products/<?=$product['prod_primary_image']?>" alt="<?=$product['prod_name']?>">
                                        
                                        <div class="actions">
                                            <a href="<?php echo site_url().'product/'.$product['prod_canonial_name']?>?cur=<?php echo $cur;?>" class="icon-btn popup-content1"><i class="far fa-eye"></i></a>
                                           
                                            
                                            <?php 
                                            
                                            $username=$this->session->userdata('username');
                                            
                                            if ($username==''){


                                                ?>



<?php if ($product['addtoquote']==1){ ?>
<a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a>

<?php } else { ?>


                                                <!--a href="<?php //echo base_url('home/login'); ?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->

                                                <!--a href="<?php //echo base_url('productssample/addToCart/'.$product['prod_id']); ?>?cur=<?php //echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->
                                               
                                                <a href="#"  onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="icon-btn"><i class="far fa-cart-plus"></i></a>




<?php } ?>





                                    <!--a href="<?php //echo base_url('home/login'); ?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->
                                    <?php  } else { 


if ($product['addtoquote']==1){

    ?>
    
    <a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a>
    
    
    
    
    <?php }else{
    
    
    
   
    


 
                                                ?>


                                        <!--a href="<?php //echo base_url('productssample/addToCart/'.$product['prod_id']); ?>?cur=<?php //echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->
                                       

                                        <a href="#"  onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="icon-btn"><i class="far fa-cart-plus"></i></a>


                                        <?php } } ?>
                                          

                                            <a href="javascript:void(0)" onclick=addwishlist(<?php echo $product['prod_id'];?>) class="icon-btn"><i class="far fa-heart"></i></a>


                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="<?php echo site_url().'product/'.$product['prod_canonial_name']?>"><?=$product['prod_name']?></a></h3>
                                     
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="left-content">
                                                    <div class="star-rating mt-2" role="img" aria-label="Rated 5.00 out of 5">
                                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                    </div>

                                                    <div class="add-cart-sm mt-4">
                                                        <!--a href="#" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</a-->



                                                        <?php 
                                            
                                            $username=$this->session->userdata('username');
                                            
                                            if ($username==''){?>


                                                <!--a href="<?php //echo base_url('home/login'); ?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->
                                        
                                                <a href="<?php echo base_url('home/login'); ?>" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</a>

                                            
                                            <?php } else { 

                                                if ($product['addtoquote']==1){

?>

<!--a href="<?php //echo base_url('viewquote'); ?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->

<a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Quote</a>




<?php }else{



?>



 <a href="#" onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="th-btn"><i class="far fa-cart-shopping mr-5"></i>Add to Cart</a>
                                            
                                            <!--a href="<?php //echo base_url('productssample/addToCart/'.$product['prod_id']); ?>?cur=<?php //echo $cur;?>" class="th-btn"><i class="far fa-cart-shopping mr-5"></i>Add to Cart</a-->

                                            
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
                                                        <p>  <b>SKU---</b>: <?=$partdt->prod_dt_desc;?></p>
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
                                        <img src="assets/img/e-shop/nexa/product-2.png" alt="Product Image">
                                        
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
                            </div>


                            <div class="swiper-slide">
                                <div class="th-product product-grid">
                                    <div class="product-img">
                                        <img src="assets/img/e-shop/nexa/product-2.png" alt="Product Image">
                                        
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


                            <!--div class="swiper-slide">
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
                            </div-->


                            <!--div class="swiper-slide">
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
                            </div-->


                            <!--div class="swiper-slide">
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
Cta Area  
==============================-->



   
  

  
    
      <!--==============================
Our Store Sec  
==============================-->
<section class="" >
    <div class="our-store-bg">
        <div class="container">
            <div class="our-bg-area" style="background:url(<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails->image5;?>);background-repeat: no-repeat;background-size: cover;border-radius: 20px !important;">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-xs-12">
                        <div class="img-content">


                       

                        



<img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails->image4;?>" alt="img-product">

                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="content">
                            <h2 class="mb-15"><?php echo $homepagedetails2->label25;?></h2>
                            <p><?php echo $homepagedetails->membershipdesc;?></p>
                            <div class="add-cart-btn mt-4">
                                <a href="<?php echo $homepagedetails2->label26;?>?cur=<?php echo $cur;?>" class="th-btn bg-white txt-black-color">Shop Now</a>
                            </div>
                        </div>

                    </div>
                  
                </div>
            </div>
            
        </div>
    </div>
 
</section>


<!--==============================
Product list Area  
==============================-->
<section class="space-50" id="goto">
    <div class="container">
       
        <div class="row justify-content-lg-between justify-content-center align-items-end">
            <div class="col-lg">
                <div class="title-area text-center text-lg-start">
                    <h2 class="sec-title" >Most View Product</h2>
                </div>
            </div>
           
        </div>
        <div class="tab-content best-selling-product">
            <!-- Single item -->
            <div class="tab-pane fade show active" id="nav-one11" role="tabpanel" aria-labelledby="nav-one11-tab">
                <div class="slider-area">
                    <div class="swiper th-slider has-shadow productSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                        <div class="swiper-wrapper">
                        <?php foreach ($most_viewed as $product) { ?>
                            <!--div class="swiper-slide">
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


                                                ?>







                                    <!--a href="<?php //echo base_url('home/login'); ?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->



                                    <?php if ($product['addtoquote']==1){ ?>
<a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a>

<?php } else { ?>
   
    <a href="#"  onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="icon-btn"><i class="far fa-cart-plus"></i></a>


                                                <!--a href="<?php //echo base_url('productssample/addToCart/'.$product['prod_id']); ?>?cur=<?php //echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->

<?php } ?>




                                    <?php  } else { 


if ($product['addtoquote']==1){

    ?>
    
    <a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a>
    
    
    
    
    <?php }else{
    
    
    
   
    


 
                                                ?>
                                               


                                        <!--a href="<?php //echo base_url('productssample/addToCart/'.$product['prod_id']); ?>?cur=<?php //echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->
                                        <a href="#"  onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="icon-btn"><i class="far fa-cart-plus"></i></a>


                                        <?php } } ?>
                                          

                                            <a href="javascript:void(0)" onclick=addwishlist(<?php echo $product['prod_id'];?>) class="icon-btn"><i class="far fa-heart"></i></a>


                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3 class="product-title"><a href="<?php echo site_url().'product/'.$product['prod_canonial_name']?>"><?=$product['prod_name']?></a></h3>
                                     
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <div class="left-content">
                                                    <!--div class="star-rating mt-2" role="img" aria-label="Rated 5.00 out of 5">
                                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                                    </div-->



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



                                                    <div class="add-cart-sm mt-4">
                                                        <!--a href="#" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart</a-->



                                                        <?php 
                                            
                                            $username=$this->session->userdata('username');
                                            
                                            if ($username==''){?>


                                               
                                        
                                                <!--a href="<?php //echo base_url('home/login'); ?>" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Cart---l</a-->



                                               <?php if ($product['addtoquote']==1){

?>

<!--a href="<?php //echo base_url('viewquote'); ?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->

<a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Quote</a>




<?php }else{



?>

                                            
                                            <!--a href="<?php //echo base_url('productssample/addToCart/'.$product['prod_id']); ?>?cur=<?php //echo $cur;?>" class="th-btn"><i class="far fa-cart-shopping mr-5"></i>Add to Cart</a-->
                                            <a href="#" onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="th-btn"><i class="far fa-cart-shopping mr-5"></i>Add to Cart</a>
                                            <?php }

                                            
                                            } else { 

                                                if ($product['addtoquote']==1){

?>

<!--a href="<?php //echo base_url('viewquote'); ?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->

<a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="th-btn"><i class="far fa-cart-shopping mr-5"></i> Add to Quote</a>




<?php }else{



?>

                                            
                                            <!--a href="<?php //echo base_url('productssample/addToCart/'.$product['prod_id']); ?>?cur=<?php //echo $cur;?>" class="th-btn"><i class="far fa-cart-shopping mr-5"></i>Add to Cart</a-->

                                            <a href="#" onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="th-btn"><i class="far fa-cart-shopping mr-5"></i>Add to Cart</a>
                                            <?php }
                                        
                                        
                                        
                                        } ?>









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












                            <?php }?>


                            <!--div class="swiper-slide">
                                <div class="th-product product-grid">
                                    <div class="product-img">
                                        <img src="assets/img/e-shop/nexa/product-2.png" alt="Product Image">
                                        
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
                            </div>


                            <div class="swiper-slide">
                                <div class="th-product product-grid">
                                    <div class="product-img">
                                        <img src="assets/img/e-shop/nexa/product-2.png" alt="Product Image">
                                        
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
                            </div-->


                            <!--div class="swiper-slide">
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

        <div class="row">
            <div class="col-lg-5 col-md-5 col-xs-12">
                <div class="img-area mt-30">

                <?php if ($homepagedetails3[7]['status']=='Active'){?>
                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails3[7]['img'];?>" alt="banner-img"/>
                            <?php } else { ?>
                    <img src="<?php echo base_url().'assets/uploads/homepage/'.$homepagedetails2->image1;?>"/>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-xs-12">
                <div class="row">
                <?php 
                $i=0;
                
                foreach ($latest_products as $product) { 
                    
                    if ($i <4){
                    
                    ?>
                    <div class="col-lg-6 col-md-6">
                        <div class="th-product product-grid mt-30">
                            <div class="product-img">
                                <!--img src="assets/img/e-shop/nexa/list-1.png" alt="Product Image"-->
                                <img src="<?=site_url()?>assets/uploads/products/<?=$product['prod_primary_image']?>" alt="<?=$product['prod_name']?>" title="<?=$product['prod_name']?>"/>
                                <!--span class="product-tag">Hot</span-->

 <span class="product-tag">
                                <?php if ($product['prod_canonial_name']){

echo round($product['discountper']).'% <br>OFF'; 

                                    }else{
                                             echo "Hot";
                                    }
                                    ?>
</span>

                                <div class="actions">
                                    <!--a href="#" class="icon-btn popup-content"><i class="far fa-eye"></i></a-->

                                    <a href="<?php echo site_url().'product/'.$product['prod_canonial_name']?>?cur=<?php echo $cur;?>" class="icon-btn popup-content1"><i class="far fa-eye"></i></a>

<?php 
                                            
                                            $username=$this->session->userdata('username');
                                            
                                            if ($username==''){?>
                                    <!--a href="<?php //echo base_url('home/login'); ?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->



                                    <?php if ($product['addtoquote']==1){ ?>
<a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a>

<?php } else { ?>
    


                                                <!--a href="<?php //echo base_url('home/login'); ?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->
                                                <!--a href="<?php //echo base_url('productssample/addToCart/'.$product['prod_id']); ?>?cur=<?php //echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a-->
                                                <a href="#"  onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="icon-btn"><i class="far fa-cart-plus"></i></a>


<?php } ?>






                                    <?php } else { 
                                        
                                        
                                        if ($product['addtoquote']==1){

                                            ?>
                                            
                                            <a href="<?php echo base_url('viewquote'); ?>?prd=<?=$product['prod_name']?>&cur=<?php echo $cur;?>" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                            
                                            
                                            
                                            
                                            <?php }else{  
                                        
                                        
                                        
                                        ?>
                                        
                                        
                                        <a href="#"  onclick="addtocartaj(<?php echo $product['prod_id'];?>)" class="icon-btn"><i class="far fa-cart-plus"></i></a>



                                        <?php }} ?>



                                    <!--a href="#" class="icon-btn"><i class="far fa-cart-plus"></i></a-->
                                    <a href="javascript:void(0)" onclick=addwishlist(<?php echo $product['prod_id'];?>) class="icon-btn"><i class="far fa-heart"></i></a>
                                    <!--a href="#" class="icon-btn"><i class="far fa-heart"></i></a-->
                                </div>
                            </div>
                            <div class="product-content text-lg-start">
                                <div class="woocommerce-product-rating">
                                 
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span>
                                    </div>
                                </div>
                                <h3 class="product-title"><a href="<?php echo site_url().'product/'.$product['prod_canonial_name']?>"><?=$product['prod_name']?></a></h3>
                              
                               
                            </div>
                        </div>
                    </div>
                    <?php  }
                
                $i++;
                
                } ?>
                    <!--div class="col-lg-6 col-md-6">
                        <div class="th-product product-grid mt-30">
                            <div class="product-img">
                                <img src="assets/img/e-shop/nexa/list-1.png" alt="Product Image">
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
                                <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1</a></h3>
                              
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="th-product product-grid mt-30">
                            <div class="product-img">
                                <img src="assets/img/e-shop/nexa/list-1.png" alt="Product Image">
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
                                <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1</a></h3>
                              
                               
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="th-product product-grid mt-30">
                            <div class="product-img">
                                <img src="assets/img/e-shop/nexa/list-1.png" alt="Product Image">
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
                                <h3 class="product-title"><a href="#">Contactor 4KW, 400V, 9A (AC3) 20A (AC1), 3P+1NO/1</a></h3>
                              
                               
                            </div>
                        </div>
                    </div-->
                </div>
              
            </div>
        </div>
        
    </div>
</section>
 
    <!--==============================
Brand Area  
==============================-->
    <div class="space bg-blue">
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

    <?php include('footer.php');?>

    <script>
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


/*function addtocartaj(prdid){
   
    var cur="<?php //echo $cur;?>"
    $.ajax({
        type: 'GET',
        url:"<?php //echo base_url().'/productssample/addtocartaj';?>",
        data:{prdid:prdid,cur:cur},
        success:function(data){
          
       
            $("#subtotal1").html(data);
        }
    });
   }*/

</script>

<script type="text/javascript">
  
 /* $(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 1000,
      values: [ <?php //echo $min; ?>, <?php //echo $max; ?> ],
      slide: function( event, ui ) {
        $( "#amount" ).html( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
		$( "#min" ).val(ui.values[ 0 ]);
		$( "#max" ).val(ui.values[ 1 ]);
      }
      });
    $( "#amount" ).html( "$" + $( "#slider-range" ).slider( "values", 0 ) +
     " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  });*/
 


 
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



//alert(data);



            $("#subtotal1").html(data);
        }
    });
   }
   </script>

</body>

</html>