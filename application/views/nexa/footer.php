
<?php $pageft=$this->uri->segment(1);
   
   $sitedetails = sitedetails();
   
   
   ?>

<div class="footer-top-newsletter space-50">
    <div class="container">
        <div class="newsletter-content ">
            <div class="newsletter">
                <h4 class="newsletter-title">News Letter</h4>
                <p class="about-text"><?php echo $homepagedetails->newsletter;?></p>
            </div>
           

            <form class="newsletter-form" name="frmemail" id="frmemail" action="<?php echo base_url().'Home/newslettersubscribe';?>" method="post">
                <div class="form-group">
               
 <div class="row">
    <div class="col-md-10">
                    <input class="form-control" name="emailidnews"  id="emailnews" type="email" placeholder="Email Address"   >
                        <label id="emailnews-error" class="error errpopupmsg" for="emailnews" style='margin-top:5px' ></label>
                        <span id="newsmsg" style='bottom:51px;color:red;font-weight:bold;'></span>
</div> <div class="col-md-2">
                        <button type="submit" class="th-btn" id="sub">Subscribe</button></div> 

</div>
                        
                </div>
                
                
              
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
                                <a href="#"><img src="<?=base_url().'assets/uploads/site/'.$gt->site_logo?>" alt="eletrical"></a>
                            </div>
                            <p class="about-text">

                            <?php echo $homepagedetails->footeraboutus;?>

                            </p>
                            <div class="th-social">
                                <!--a href="#/"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-whatsapp"></i></a-->


                                <?php //print_r($sitedetails);?>
                                    <a href="<?php echo $sitedetails['facebook_url']?>" target='_blank'><i class="fab fa-facebook-f"></i></a>
                                     
                                    <a href="<?php echo $sitedetails['instagram_url']?>" target='_blank' ><i class="fab fa-instagram"></i></a>
                                    <a href="<?php echo $sitedetails['site_linkldn']?>" target='_blank'><i class="fab fa-linkedin-in"></i></a>
                                  
                                 
                                    <a href="<?=$sitedetails['whatsapp_number']?>"><i class="fab fa-whatsapp"></i></a>

                                   


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget_nav_menu footer-widget">
                        <h3 class="widget_title">Quick Links</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <!--li><a href="#">About Us</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Help & FAQs</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact Us</a></li-->

                                <li><a href="<?php echo site_url().'about-us/';?>">About Us</a></li>




<li><a href="<?php echo site_url().'login';?>">Login</a></li>
<li><a href="<?php echo base_url().'register';?>">Register</a></li>
<li><a href="<?php echo base_url().'clearencesale';?>">Clearence Sale</a></li>
<li><a href="<?php echo base_url(). 'contact-us';?>">Contact Us</a></li>





                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget_nav_menu footer-widget">
                        <h3 class="widget_title">Categories</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <!--li><a href="#">MPCB</a></li>
                                <li><a href="#">PLC & HMI</a></li>
                                <li><a href="#">CAPACITORS</a></li>
                                <li><a href="#">SWITCH & SOCKET</a></li>
                                <li><a href="#">LIMIT SWITCH & SENSORE</a></li-->


                                <?php 
                                $i=0;
                                
                                foreach ($recent_categories as $recentCategory) { 
                                    if ($i<5){
                                    ?>
                                    <li><a href="<?=site_url().'products/category/'.$recentCategory['cat_canonial_name']?>"><?=$recentCategory['cat_name']?></a></li>
                                    <?php
                              
                                
                                }
                                $i++;
                                
                                
                                
                                } ?>



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
                                <a href="https://maps.app.goo.gl/cEzx5gaEhvf6D92N7" target="_blank"><p class="info-box_text"><?php 
                                    
                                    //print_r($sitedetails);
                                    echo $site->site_address_line1;?>,<br><?php 
                                    
                                   
                                    echo $site->site_address_line2;?></p></a>
                            </div>
                            <div class="info-box">
                                <div class="info-box_icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <p class="info-box_text">
                                    <a href="tel:+<?=$sitedetails['phone_number_1']?>" class="info-box_link"><?=$sitedetails['phone_number_1']?></a>
                                   
                                </p>
                            </div>
                            <div class="info-box">
                                <div class="info-box_icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <p class="info-box_text">
                                    <a href="mailto:<?=$sitedetails['email_1']?>" class="info-box_link"><?=$sitedetails['email_1']?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap" data-bg-src="<?php echo base_url().'/assets/img/bg/copyright_bg_1.png';?>">
        <div class="container">
            <div class="row gy-2 align-items-center">
                <div class="col-md-12 col-lg-12 ">
                    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2024 <a href="#">Nexa</a>. All Rights Reserved.</p>
                </div>
                
            </div>
        </div>
    </div>
</footer>


<div class="button__cover">
    <a href="<?=$sitedetails['whatsapp_number']?>"><i class="fab fa-whatsapp"></i></a>
    <a href="https://maps.app.goo.gl/cEzx5gaEhvf6D92N7" target="_blank"> <i class="fas fa-location-dot"></i> </a>
</div>

<!-- Scroll To Top -->
<div class="scroll-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>

  


    <script src="<?php echo base_url().'assets/js/vendor/jquery-3.6.0.min.js';?>"></script>
    
    <script src="<?php echo base_url().'assets/js/swiper-bundle.min.js';?>"></script>
  
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js';?>"></script>
    
    <script src="<?php echo base_url().'assets/js/jquery.magnific-popup.min.js';?>"></script>
    
    <script src="<?php echo base_url().'assets/js/jquery.counterup.min.js';?>"></script>
    
    <script src="<?php echo base_url().'assets/js/jquery-ui.min.js';?>"></script>
    
    <script src="<?php echo base_url().'assets/js/imagesloaded.pkgd.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/isotope.pkgd.min.js';?>"></script>

    <script src="<?php echo base_url().'assets/js/main.js';?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>


    <script>
    $('form[id="frm1"]').validate({  
    rules: {  
        usernameemail: 'required',  
      //password: 'required',
      
    },  
    messages: {  

        usernameemail: 'Email is required',  
      //password: 'Password is required',

    },  
    submitHandler: function(form) { 
       
      e.preventDefault();
            var Form = $(this);
            $.ajax({
                url: Form.attr('action'),
                type: 'post',
                data: Form.serialize(),
                processData: false,
        contentType: false,
        cache:false,
        async:false,
                success: function(response){                   
     $('input[type=text]').each(function() {
        $(this).val('');
    });   
              

                }
            });
      

        }
            });




            $('form[id="frmemail"]').validate({  
rules: {  
    emailidnews: 'required',  
 
},  
messages: {  
    emailidnews: '<span style="padding:20px"><font color=red>Please enter your emailid</font></span>',  
 
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
$('#emailnews-error').html('');
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
$('.numberonly').keypress(function (e) {    
    
    var charCode = (e.which) ? e.which : event.keyCode    

    if (String.fromCharCode(charCode).match(/[^0-9]/g))    

        return false;                        

});   
//$(document).ready(function() {

//});

</script>



<script>


</script>