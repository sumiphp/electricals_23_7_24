

<?php $sitedetails = sitedetails();

$uri=$this->uri->segment(2);



?>
 <?php if (isset($_GET['cur'])){
                              $cur2=$_GET['cur'];
                                
                                
                                ?>

                                <?php } else{
                                   $cur2='AED';
                                    
                                }
                                
                                
                                $cur1='';
                                
                                ?>


<div id="QuickView" class="white-popup mfp-hide">
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
    <!--==============================
    Sidemenu
============================== -->
    <div class="sidemenu-wrapper sidemenu-cart d-none d-lg-block "  id="loadcart">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget woocommerce widget_shopping_cart">
                <h3 class="widget_title">Shopping cart</h3>
                <div class="widget_shopping_cart_content">
                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                    <?php $username=$this->session->userdata('username');?>
                    <?php 
                     $cartItems = $this->cart->contents();
    
    $i=0;
    
    
    if($this->cart->total_items() > 0){ foreach($cartItems as $item){    ?>

<?php $itn=$item["name"]; 
                                
                                $this->db->where('prod_id',$itn);
                                //$this->db->where('prod_dt_typeid',5);
                               // $this->db->order_by("orderno", "asc");
                                $this->db->select('*');
                                $this->db->from('products');
                                $query = $this->db->get();
                                $rowdt=$query->row();
                                
                                $qty=$item["qty"];
                                $price=$item["price"];

  
                                


                                
                                
                                ?>
                        <li class="woocommerce-mini-cart-item mini_cart_item" id="<?php echo $item['rowid'];?>" >
                            <a href="#" class="remove remove_from_cart_button"  onclick=del("<?php echo $item['rowid'];?>")><i class="far fa-times"></i></a>
                            <a href="<?=site_url().'product/'.$rowdt->prod_canonial_name;?>"><img src="<?=site_url()?>assets/uploads/products/<?=$item['image']?>" alt="Cart Image"><img width="91" height="91" src="<?=site_url()?>assets/uploads/products/<?=$item['image']?>" alt="Image"></a>
                            <?php echo $string1=$rowdt->prod_name;?>
                            <span class="quantity"><?php echo  $qty;?> 
                            
                            

                           

                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol"> <?php //echo $string1=$rowdt->prod_name;?><?php echo  $price;?></span>&nbsp;<span><?php echo  $item["currency"];?></span>
                            </span>
                            
                        </li>
                        <?php 
                    
                    $i++;

                    $cur1=$item["currency"];
                    
                    } }else{ ?>
    <tr><td colspan="6"><p>Your cart is empty.....</p></td></tr>
    <?php } ?>
                        
                       
                    </ul>
                    <?php if($this->cart->total_items() > 0){ ?>




                        
                    <p class="woocommerce-mini-cart__total total">
                        <strong>Total:</strong>
                        <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol"></span><span id='subtotal'><?php echo $this->cart->total().'&nbsp;'.$cur1; ?></span></span>
                    </p>



                    <!--p class="woocommerce-mini-cart__total total">
                        <strong>Shipping Amount:</strong>
                        <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol"></span><span id='shipamo1' class='shipamo'>

                            <?php 
                                
                               /* if ($cur1=='AED'){

                                   $tot=$this->cart->total();
                                    if ($tot>=500){
                                        echo "0&nbsp;'.".$cur1;
                                $sa=0;

                                    }else{
                                echo $sitedetails['shippingamount'].'&nbsp;'.$cur1;
                                $sa=$sitedetails['shippingamount'];
                                }

                                }else{
                                    $tot=$this->cart->total();
                                    if ($tot>=500){
                                        echo "0&nbsp;'.".$cur1;
                                $sa=0;

                                    }else{

                                    echo $sitedetails['shippingamountusd'].'&nbsp;'.$cur1;
                                    $sa=$sitedetails['shippingamountusd'];
                                    }
                                }*/
                                
                                
                                ?>




                            </span></span>
                    </p>


                    <p class="woocommerce-mini-cart__total total">
                        <strong>Order Total:</strong>
                        <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol" id='nettotal'><?php //$net=$this->cart->total()+$sa;//$net=$this->cart->total()+$sitedetails['shippingamount'];
                            //echo $net.'&nbsp;'.$cur1;?></span>
                    </p-->
                    <p class="woocommerce-mini-cart__buttons buttons">
                        <a  style='margin:15px;padding:10px;' href="<?php echo base_url().'cart'?>" class="th-btn wc-forward" >View cart</a><!--p-->
                       
                       

                        <?php if($this->cart->total_items() > 0){ ?>

                            <div class="row">
                            <?php if ($username==''){?>
                            <div class="col-md-6">
                            
                        <a id="lin" href="<?php echo base_url().'checkout'?>?cur=<?php echo $cur1;?>" class="th-btn" style='padding:10px;'>Checkout</a>
                        </div>
                        <div class="col-md-6">
                         <a href="<?php echo base_url().'login?cur='.$cur1?>" class="th-btn" style='padding:10px;'>Sign In & Checkout</a>
                         </div>
                         <?php } else { ?>
                         <div class="">
                         <a id="lin" style='margin:15px;padding:10px;' href="<?php echo base_url().'checkout'?>?cur=<?php echo $cur1;?>" class="th-btn" style='padding:10px;'>Checkout</a>
                         </div>

                         <?php } ?>
                        </div>
                        <?php }else { ?>

                            <a href="#" class="th-btn">Proceed to checkout</a>

                            <?php } ?>
                    </p>
                    <?php } ?>




                </div>
            </div>
        </div>
    </div> 
    <!--==============================
    Sidemenu
============================== -->
    <div class="sidemenu-wrapper sidemenu-info d-none d-lg-block ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget  ">
                <div class="th-widget-about">
                    <div class="about-logo">
                        <!--a href="#"><img src="<?php //echo base_url().'assets/img/logo-eletrical.png'?>" alt="logo"></a-->

                        <a href="<?php echo base_url();?>"><img src="<?=base_url().'assets/uploads/site/'.$gt->site_logo?>" alt="nexa"></a>


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
    </div><!--==============================
    Mobile Menu
  ============================== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="<?php echo base_url();?>"><img src="<?=base_url().'assets/uploads/site/'.$gt->site_logo?>" alt="Electrical Shop"></a>
            </div>
            <div class="th-mobile-menu">

            <ul>

            <?php

$i=0;


foreach($menus as $mn){
                                
                                $this->db->where('parentmenuid',$mn['menuid']);    
                                $this->db->where('menutype',2);
                                $this->db->where('status',1);
                                $this->db->select('*');
                                $this->db->from('menus');
                                $query = $this->db->get();
                                $rowcount = $query->num_rows();
                                
                                
                                
                                ?>



<?php 
$style1='';

if ($i==0){
    $style='background-color:yellow;color:black';
    //$style="Sale-box";
    
}
else{
    $style='';
}

if ($rowcount==0){

   
    
    
    ?>

    <li class="menu-item-has-children <?php echo $style;?>">
                        <!--a href="<?php //echo base_url().$mn['url'];?>" ><?php //echo $mn['menuname'];?></a-->
                        <a href="<?php echo base_url().$mn['url'].'?cur='.$cur2;?>" id="roww<?php echo $i;?>"  ><?php echo $mn['menuname'];?></a>
                    </li>
                   
                    <?php } else {?>


                        <li class="menu-item-has-children <?php //echo $style;?>">
                       
                        <a href="<?php echo base_url().$mn['url'].'?cur='.$cur2;?>"  id="roww<?php echo $i;?>"><?php echo $mn['menuname'];?></a>
                        <?php

                        $this->db->where('parentmenuid',$mn['menuid']);                                        
    $this->db->where('menutype',2);
    $this->db->where('status',1);
    $this->db->order_by('orderno');
    $this->db->select('*');
    $this->db->from('menus');
    $query = $this->db->get();
    $submenulist=$query->result_array();

    ?>




                        <ul class="sub-menu sb">

                        <?php foreach($submenulist as $sm){?>
                            <li class="sb"><a href="<?php echo base_url().$sm['url'];?>?cur=".$cur2><?php echo $sm['menuname'];?></a></li>

                            <?php } ?>

                            </ul>
                    </li>


                        <?php } 
                    
                    $i++;
                    
                    
                    }?>




</ul>








                <!--ul>



                    <li class="menu-item-has-children">
                        <a href="<?php //echo base_url().'index';?>">Home</a>
                       
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
                </ul-->
            </div>
        </div>
    </div><!--==============================
	Header Area
==============================-->
<header class="th-header header-layout3">
        
    <div class="menu-top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <div class="header-logo">
                        <a href="<?php echo base_url();?>"><img src="<?=base_url().'assets/uploads/site/'.$gt->site_logo?>" alt="nexa"></a>
                    </div>
                </div>
                <div class="col-auto d-none d-lg-block">
                <form class="header-search" id="frmser" method="post" action="<?=base_url().'Home/searchproducts';?>">
                            <input type="text" placeholder="Enter Keyword" name="serquery" required>
                            <label id="serquery-error" class="error errpopupmsg" for="serquery" style='color:#fff' ></label>
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                </div>

                <div class="col-auto">
                        <div class="call-menu dis-block">
                           

                            <div class="box-icon dis-inblock">
                                <i class="fa fa-envelope" ></i>
                            </div>
                            <div class="media-body dis-inblock">
                               
                                <h3 class="box-title"><a href="mailto:<?=$sitedetails['email_1']?>"><?=$sitedetails['email_1']?></a></h3>
                            </div>
                           
                            </div> 
                            <div class="call-menu dis-block">
                            <div class="box-icon dis-inblock">
                            <i class="fa fa-phone"></i>
                            </div>
                            <div class="media-body dis-inblock">
                               
                            <h3 class="box-title"><a href="tel:+<?=$sitedetails['phone_number_1']?>"><?=$sitedetails['phone_number_1']?></a></h3>
                            </div>
                       
                    </div> 
                    </div>
                    <!-- <div class="col-auto">
                        <div class="call-btn">
                            <div class="box-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <p class="box-subtitle">Call Us 24/7</p>
                                <h3 class="box-title"><a href="tel:++971 54 794 2828">+971 54 794 2828</a></h3>
                            </div>
                        </div>
                    </div> -->
                    <?php $username=$this->session->userdata('username');?>
               
                <div class="col-auto">
                    <div class="custom-block">
                      
                    </div>
                    <div class="header-icons">
                    <?php if ( $username==''){?>
                        <a href="<?=base_url().'login';?>" class="icon-btn d-none d-sm-block"><i class="far fa-user"></i></a>
                        <?php }else{?>
                            <a href="<?=base_url().'Home/logout';?>" class="icon-btn d-none d-sm-block"><i class="far fa-user"></i></a>
                            <?php }?>
                            <?php if ( $username==''){?>

                                <a href="<?=base_url().'login';?>" class="icon-btn d-none d-sm-block">
                          
                            <i class="far fa-heart"></i>
                        </a>


                                <?php }else{?>  <a href="<?php echo base_url().'wishlist';?>" class="icon-btn d-none d-sm-block">
                            <span class="badge wishlistcount"><?php echo $wishlistcount;?></span>
                            <i class="far fa-heart"></i>
                        </a> <?php }?>
                       

                        
                        <button type="button" class="icon-btn sideMenuToggler" id="cartbt"> 
                            <span class="badge"  id='ctcount'><?php echo $this->cart->total_items();?></span>
                            <i class="far fa-cart-shopping"></i>
                        </button>
                           
<?php //echo $cur;?>
                        <div class="dropdown-link aed-sec">
                            <!--a class="" href="#"><img src="<?php //echo base_url().'/assets/img/e-shop/menu-icon.png';?>" alt="menuicon">  AED</a-->
                            <img src="<?php echo base_url().'/assets/img/e-shop/menu-icon.png';?>" alt="menuicon">
                            <select name='curr' onchange=curchange(this.value); style='width:15%;display:inline;margin-left:60px;'>
                                    <option <?php if (($cur2)=='AED'){?>selected <?php } ?>>AED</option>
                                
                                <option <?php if (($cur2)=='USD'){?>selected <?php } ?>>USD</option>
                            </select>
                        </div>

                        <!--select name='curr' onchange=curchange(this.value); style='width:20%;display:inline'>
                                    <option>QAR</option>
                                <option>SAR</option>
                                <option>USD</option>
                            </select-->
                           
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                   
                    <div class="ms-auto text-right">
                        <nav class="main-menu menu-style1 d-none d-lg-inline-block">
                        <ul>

                        <?php

$i=0;


foreach($menus as $mn){
                                
                                $this->db->where('parentmenuid',$mn['menuid']);    
                                $this->db->where('menutype',2);
                                $this->db->where('status',1);
                                $this->db->select('*');
                                $this->db->from('menus');
                                $query = $this->db->get();
                                $rowcount = $query->num_rows();
                                
                                
                                
                                ?>



<?php 


if ($i==0){
    $style='background-color:yellow;color:black !important';
   // $style="Sale-box";
   //$style='';
    
}
else{
    $style='';
}

if ($rowcount==0){

   
    
    
    ?>

    <li class="" id="row1<?php echo $i;?>" >
                      

                        <a href="<?php echo base_url().$mn['url'].'?cur='.$cur2;?>"  style="<?php echo $style;?>" ><?php echo $mn['menuname'];?></a>
                    </li>
                   
                    <?php } else {?>


                        <li class="menu-item-has-children <?php echo $style;?>" id="row1<?php echo $i;?>">
                        <!--a href="<?php //echo base_url().$mn['url'];?>" ><?php //echo $mn['menuname'];?></a-->
                        <a href="<?php echo base_url().$mn['url'].'?cur='.$cur2;?>" ><?php echo $mn['menuname'];?></a>
                        <?php

                        $this->db->where('parentmenuid',$mn['menuid']);                                        
    $this->db->where('menutype',2);
    $this->db->where('status',1);
    $this->db->order_by('orderno');
    $this->db->select('*');
    $this->db->from('menus');
    $query = $this->db->get();
    $submenulist=$query->result_array();

    ?>




                        <ul class="sub-menu" class="sb">

                        <?php foreach($submenulist as $sm){?>
                        

                            <li class="sb"><a href="<?php echo base_url().$sm['url'].'?cur='.$cur2;?>"><?php echo $sm['menuname'];?></a></li>

                            <?php } ?>

                            </ul>
                    </li>


                        <?php } 
                    
                    $i++;
                    
                    
                    }?>



<!--li class="Sale-box">
                    <a href="<?php //echo base_url().'clearencesale';?>">Clearance Sale</a>
                </li>
               
                
                <li class="">
                        <a href="<?php //echo base_url().'index';?>">Home</a>
                       
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
                    <a href="<?php //echo base_url().'product';?>">Products</a>
                    



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
                    <a href="<?php //echo base_url().'about-us';?>">About Us</a>
                </li>
               
                



<li class="">
                    <a href="<?php //echo base_url().'contact-us';?>">Contact</a>
                </li-->

                
               
            
            </ul>                             
                        </nav>
                        <button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</header>


<script>
function del(id){
   //alert("del---"+id);

var shipamount="<?php echo $sitedetails['shippingamount'];?>"
var cur="<?php echo $cur1;?>"
    $.ajax({
            type: 'GET',
            //'dataType': 'json',
            url: "<?php echo base_url().'cart/removecartItem';?>",
            data:{id:id,shipamount:shipamount,cur:cur},
            success:function(data){
                var data1 =data;
                
                //alert(data1.subtotal);
                //var net1=data1.nettotal+" "+data1.cur;
                //let text = "How are you doing today?";
const myArray = data.split("-");
let subtotal = myArray[0];
let net1 = myArray[1];
let cur=myArray[2];
let sym=net1+cur;
let no=myArray[3];
let shipamo=myArray[4];
                $("#"+id).remove();
                $("#subtotal").html(subtotal);
                $("#ctcount").html(no);
                $("#shipamo1").html(shipamo);
                //alert("sa"+shipamo);
                $("#nettotal").html(net1);
                //$("#lin").html(data.nettotal);
                /*if(no==0){
                $("#lin a").attr("href","#");
                }*/
            }
        });





}






</script>