<!doctype html>
<html class="no-js" lang="en">
<head>
    <title><?=$page_title?> | ACP | <?=sitename()?></title>
    <?php $this->load->view('acp/includes/header-assets', array('page_title' => 'Dropzone')); ?>
</head>


<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <?php 
        
        $page_title="Add Metatag";
        $page_breadcrumb="Metatag";
        
        $this->load->view('acp/includes/sidebar-menu', array('page_title' => $page_title, 'breadcrum' => $page_breadcrumb, 'main_menu_active' => $main_menu_active, 'sub_menu_active' => $sub_menu_active, 'innersub_menu_active' => $innersub_menu_active)); ?>
        <!-- sidebar menu area end -->

        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <?php $this->load->view('acp/includes/header'); ?>
            <!-- header area end -->

            <!-- page title area start -->
            <?php 
             $page_title="Add Home Page details";
             $page_breadcrumb1="Home Page";
             
            
            $this->load->view('acp/includes/page-head', array('page_title' => $page_title, 'breadcrum' => $page_breadcrumb1)); ?>
            <!-- page title area end -->
           
            <div class="main-content-inner p-0">
                <div class="col-12 p-0 mt-5X">
                    <div class="card">
                        <div class="card-body">
                            <div class="formArea">
                                <span style='color:green';>
                            <?php echo $this->session->flashdata('flash_msg');?>
</span>
                                <?php
                                /*$categ = array();
                                if (isset($productcategory) && !empty($productcategory)) {
                                    $categ = array(
                                        'cat_id' => $productcategory['cat_id'],
                                        'cat_name' => $productcategory['cat_name'],
                                        'cat_canonial_name' => $productcategory['cat_canonial_name'],
                                        'cat_desc' => $productcategory['cat_desc'],
                                        'cat_image' => $productcategory['cat_image'],
                                    );
                                } */ ?>
                                <form id="home" method="post" action="<?php echo base_url().'acp/settings/managehomepageprocess';?>" enctype="multipart/form-data">
                                    <!--div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Text1*</label>
                                            <input class="form-control" type="text" id="title1" name="title1" placeholder="Enter Membership Title1" value="<?=$meta->title1?>" required="required">
                                           
                                        </div>
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Text2*</label>
                                            <input class="form-control" type="text" id="title2" name="title2" placeholder="Enter Membership Title2" value="<?=$meta->title2?>" required="required">
                                            
                                        </div>

                                    </div-->

                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Image1*</label>
                                            <input class="form-control" type="file" id="image1" name="image1" placeholder="Enter Membership Banner1" value="" >
                                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$meta->banner1;?>" width="150" height="150' class="modal-logo1" alt="<?php //echo $meta->alttagimg1;?>">
                     
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            
                                            <label for="cat_name" class="col-form-label">Image2*</label>
                                            <input class="form-control" type="file" id="image2" name="image2" placeholder="Enter Membership Banner2" value="" >
                                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$meta->banner2;?>"  width="150" height="150' class="modal-logo1" alt="<?php //echo $meta->alttagimg1;?>">
                                        </div>

                                    </div>



                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Top Page Label1*</label>
                                            <input class="form-control" type="text" id="label1" name="label1" placeholder="Enter Top Page label1" value="<?=$meta->label1?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Top Page Label2*</label>
                                            <input class="form-control" type="text" id="label2" name="label2" placeholder="Enter Top Page label2" value="<?=$meta->label2?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Top Page Label3*</label>
                                            <input class="form-control" type="text" id="label3" name="label3" placeholder="Enter Top Page label3" value="<?=$meta->label3?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Top Page Label4*</label>
                                            <input class="form-control" type="text" id="label4" name="label4" placeholder="Enter Top Page label4" value="<?=$meta->label4?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Top Page Label5*</label>
                                            <input class="form-control" type="text" id="label5" name="label5" placeholder="Enter Top Page label5" value="<?=$meta->label5?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Top Page Label6*</label>
                                            <input class="form-control" type="text" id="label6" name="label6" placeholder="Enter Top Page label6" value="<?=$meta->label6?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Top Page Label7*</label>
                                            <input class="form-control" type="text" id="label7" name="label7" placeholder="Enter Top Page label7" value="<?=$meta->label7?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Top Page Label8*</label>
                                            <input class="form-control" type="text" id="label8" name="label8" placeholder="Enter Top Page label8" value="<?=$meta->label8?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>

                                    </div>


                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Top Page Image1*</label>
                                            <input class="form-control" type="file" id="image6" name="image6" placeholder="Enter Top Page Image1" value="" >
                                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$meta->img1;?>" width="50" height="50' class="modal-logo1" alt="<?php //echo $meta->alttagimg1;?>">
                     
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            
                                            <label for="cat_name" class="col-form-label">Top Page Image2*</label>
                                            <input class="form-control" type="file" id="image7" name="image7" placeholder="Enter Top Page Image2" value="" >
                                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$meta->img2;?>"  width="50" height="50' class="modal-logo1" alt="<?php //echo $meta->alttagimg1;?>">
                                        </div>

                                    </div>


                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Top Page Image3*</label>
                                            <input class="form-control" type="file" id="image8" name="image8" placeholder="Enter Top Page Image3" value="" >
                                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$meta->img3;?>" width="50" height="50' class="modal-logo1" alt="<?php //echo $meta->alttagimg1;?>">
                     
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            
                                            <label for="cat_name" class="col-form-label">Top Page Image4*</label>
                                            <input class="form-control" type="file" id="image9" name="image9" placeholder="Enter Top Page Image4" value="" >
                                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$meta->img4;?>"  width="50" height="50' class="modal-logo1" alt="<?php //echo $meta->alttagimg1;?>">
                                        </div>

                                    </div>




                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Home page title*</label>
                                            <input class="form-control" type="text" id="label17" name="label17" placeholder="Home page title" value="<?=$meta->label17?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Text3*</label>
                                            <input class="form-control" type="text" id="label18" name="label18" placeholder="Banner title" value="<?=$meta->label18?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>

                                    </div>


                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Scroll Text1*</label>
                                            <input class="form-control" type="text" id="label9" name="label9" placeholder="Middle Title1" value="<?=$meta->label9?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Scroll Text2*</label>
                                            <input class="form-control" type="text" id="label10" name="label10" placeholder="Middle Title2" value="<?=$meta->label10?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Scroll Text3*</label>
                                            <input class="form-control" type="text" id="label11" name="label11" placeholder="Middle Title3" value="<?=$meta->label11?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Scroll Text4*</label>
                                            <input class="form-control" type="text" id="label12" name="label12" placeholder="Middle Title4" value="<?=$meta->label12?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Scroll Text5*</label>
                                            <input class="form-control" type="text" id="label13" name="label13" placeholder="Middle Title5" value="<?=$meta->label13?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Scroll Text6*</label>
                                            <input class="form-control" type="text" id="label14" name="label14" placeholder="Middle Title6" value="<?=$meta->label14?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Scroll Text7*</label>
                                            <input class="form-control" type="text" id="label15" name="label15" placeholder="Title10" value="<?=$meta->label15?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Scroll Text8*</label>
                                            <input class="form-control" type="text" id="label16" name="label16" placeholder="Middle Title11" value="<?=$meta->label16?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>

                                    </div>



                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Scroll Text9*</label>
                                            <input class="form-control" type="text" id="label19" name="label19" placeholder="Middle Title12" value="<?=$meta->label19?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Scroll Text10*</label>
                                            <input class="form-control" type="text" id="label20" name="label20" placeholder="Middle Title13" value="<?=$meta->label20?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>

                                    </div>



                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Scroll Text11*</label>
                                            <input class="form-control" type="text" id="label21" name="label21" placeholder="Middle Title14" value="<?=$meta->label21?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Scroll Text12*</label>
                                            <input class="form-control" type="text" id="label22" name="label22" placeholder="Middle Title15" value="<?=$meta->label22?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>

                                    </div>



                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Happy client*</label>
                                            <input class="form-control" type="text" id="label177" name="label177" placeholder="Happy client" value="<?=$meta->happyclient?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Brands*</label>
                                            <input class="form-control" type="text" id="label188" name="label188" placeholder="Brands" value="<?=$meta->brands?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Product*</label>
                                            <input class="form-control" type="text" id="label199" name="label199" placeholder="Product" value="<?=$meta->product?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Quality*</label>
                                            <input class="form-control" type="text" id="label200" name="label200" placeholder="Quality" value="<?=$meta->quality?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Image3</label>
                                            <input class="form-control" type="file" id="image10" name="image10" placeholder="Enter  Image3" value="" >
                                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$meta->image1;?>" width="150" height="150' class="modal-logo1" alt="<?php //echo $meta->alttagimg1;?>">
                     
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            
                                            <label for="cat_name" class="col-form-label">Image4</label>
                                            <input class="form-control" type="file" id="image11" name="image11" placeholder="Enter Image4" value="" >
                                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$meta->image2;?>"  width="150" height="150' class="modal-logo1" alt="<?php //echo $meta->alttagimg1;?>">
                                        </div>

                                    </div>



                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Image5*</label>
                                            <input class="form-control" type="file" id="image12" name="image12" placeholder="Enter Image5" value="" >
                                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$meta->image3;?>" width="150" height="150' class="modal-logo1" alt="<?php //echo $meta->alttagimg1;?>">
                     
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>

                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Blog Image1*</label>
                                            <input class="form-control" type="file" id="image13" name="image13" placeholder="Enter Blog Image1" value="" >
                                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$meta1->blogimage1;?>" width="150" height="150' class="modal-logo1" alt="<?php //echo $meta->alttagimg1;?>">
                     
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>
                                      

                                    </div>



                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Blog Image2*</label>
                                            <input class="form-control" type="file" id="image14" name="image14" placeholder="Enter Blog Image2" value="" >
                                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$meta1->blogimage2;?>" width="150" height="150' class="modal-logo1" alt="<?php //echo $meta->alttagimg1;?>">
                     
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>

                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Clearencesale Image1*</label>
                                            <input class="form-control" type="file" id="image15" name="image15" placeholder="Enter Clearencesale Image1" value="" >
                                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$meta1->clearenceimg1;?>" width="150" height="150' class="modal-logo1" alt="<?php //echo $meta->alttagimg1;?>">
                     
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>
                                      

                                    </div>


                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Clearencesale Image2*</label>
                                            <input class="form-control" type="file" id="image16" name="image16" placeholder="Enter Clearencesale Image2" value="" >
                                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$meta1->clearenceimg2;?>" width="150" height="150' class="modal-logo1" alt="<?php //echo $meta->alttagimg1;?>">
                     
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>

                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Clearencesale Image3*</label>
                                            <input class="form-control" type="file" id="image17" name="image17" placeholder="Enter Clearencesale Image3" value="" >
                                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$meta1->clearenceimg3;?>" width="150" height="150' class="modal-logo1" alt="<?php //echo $meta->alttagimg1;?>">
                     
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>
                                      

                                    </div>






<?php //print_r($meta1);?>


                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Clearencesale Image4*</label>
                                            <input class="form-control" type="file" id="image18" name="image18" placeholder="Enter Clearencesale Image4" value="" >
                                            <img src="<?php echo base_url().'assets/uploads/homepage/'.$meta1->clearenceimg4;?>" width="150" height="150' class="modal-logo1" alt="<?php //echo $meta->alttagimg1;?>">
                     
                                           
                                        </div>

                                        <!--div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Image12*</label>
                                            <input class="form-control" type="file" id="image12" name="image12" placeholder="Enter Middle Image12" value="" >
                                            <img src="<?php //echo base_url().'assets/uploads/homepage/'.$meta1->image3;?>" width="150" height="150' class="modal-logo1" alt="<?php //echo $meta->alttagimg1;?>">
                     
                                           
                                        </div-->
                                      

                                    </div>



                                    <!--div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Image9*</label>
                                            <input class="form-control" type="file" id="image9" name="image9" placeholder="Enter Middle Image9" value="" >
                                            <img src="<?php //echo base_url().'assets/uploads/homepage/'.$meta1->blogimage1;?>" width="150" height="150' class="modal-logo1" alt="<?php //echo $meta->alttagimg1;?>">
                     
                                           
                                        </div>

                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Image10*</label>
                                            <input class="form-control" type="file" id="image10" name="image10" placeholder="Enter Middle Image10" value="" >
                                            <img src="<?php //echo base_url().'assets/uploads/homepage/'.$meta1->blogimage2;?>" width="150" height="150' class="modal-logo1" alt="<?php //echo $meta->alttagimg1;?>">
                     
                                            
                                        </div>
                                      

                                    </div-->


                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Membership Label*</label>
                                            <input class="form-control" type="text" id="label25" name="label25" placeholder="Membership Label" value="<?=$meta1->label25?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Membership Url*</label>
                                            <input class="form-control" type="text" id="label26" name="label26" placeholder="Membership Url" value="<?=$meta1->label26?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>

                                    </div>



                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Url1*</label>
                                            <input class="form-control" type="text" id="label27" name="label27" placeholder="Url1" value="<?=$meta1->label27?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Url2*</label>
                                            <input class="form-control" type="text" id="label28" name="label28" placeholder="Url2" value="<?=$meta1->label28?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>

                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Url3*</label>
                                            <input class="form-control" type="text" id="label29" name="label29" placeholder="Url3" value="<?=$meta1->label29?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>
                                        <div class="col-md-6 mb-3">
                                           
                                            <label for="cat_name" class="col-form-label">Url4*</label>
                                            <input class="form-control" type="text" id="label30" name="label30" placeholder="Url4" value="<?=$meta1->label30?>" required="required">
                                            <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                        </div>

                                    </div>






                                    <div class="form-group row">
                                        
                                      

                                    </div>





                                    <div class="form-group row">
                                        <div class="col-md-12 mb-3">
                                            <label for="cat_desc" class="col-form-label">Membership description</label>
                                            <textarea class="form-control" rows="4" id="membershipdesc" name="membershipdesc" placeholder="Enter Membership description"><?=$meta->membershipdesc?></textarea>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-md-12 mb-3">
                                            <label for="cat_desc" class="col-form-label">About Us description1</label>
                                            <textarea class="form-control" rows="4" id="desc1" name="desc1" placeholder="Enter About Us description1"><?=$meta->desc1?></textarea>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-md-12 mb-3">
                                            <label for="cat_desc" class="col-form-label">About Us description2</label>
                                            <textarea class="form-control" rows="4" id="desc11" name="desc11" placeholder="Enter About Us description2"><?=$meta1->desc11?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 mb-3">
                                            <label for="cat_desc" class="col-form-label">About Us description3</label>
                                            <textarea class="form-control" rows="4" id="desc2" name="desc2" placeholder="Enter About Us description3"><?=$meta->desc2?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 mb-3">
                                            <label for="cat_desc" class="col-form-label">About Us description4</label>
                                            <textarea class="form-control" rows="4" id="desc22" name="desc22" placeholder="Enter About Us description4"><?=$meta1->desc22?></textarea>
                                        </div>
                                    </div>






                                    <div class="form-group row">
                                        <div class="col-md-12 mb-3">
                                            <label for="cat_desc" class="col-form-label">About Us Mission</label>
                                            <textarea class="form-control" rows="5" id="mission" name="mission" placeholder="Enter About Us Mission"><?=$meta->mission?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 mb-3">
                                            <label for="cat_desc" class="col-form-label">About Us Vision</label>
                                            <textarea class="form-control" rows="5"  id="vision" name="vision" placeholder="Enter About Us Vision"><?=$meta->vission?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 mb-3">
                                            <label for="cat_desc" class="col-form-label">Newsletter Details</label>
                                            <textarea class="form-control" rows="3"  id="newsletter" name="newsletter" placeholder="Enter Newsletter Details"><?=$meta->newsletter?></textarea>
                                        </div>
                                    </div>

                                    <!--div class="col-md-12 mb-3">
                                            <label style="display:none;">Message</label>
                                            <div id="tnc_content">fdfgdgfdgf------</div>
                                        </div-->
                                    


                                    <div class="form-group row">
                                        <div class="col-md-12 mb-3">
                                            <label for="cat_desc" class="col-form-label">Blog description</label>
                                            <textarea class="form-control" rows="3" id="blog" name="blog" placeholder="Enter Blog description"><?=$meta1->blogdesc?></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12 mb-3">
                                            <label for="cat_desc" class="col-form-label">Footer description</label>
                                            <textarea class="form-control" rows="3" id="footerdesc" name="footerdesc" placeholder="Enter Footer description"><?=$meta->footeraboutus?></textarea>
                                        </div>
                                    </div>


                                    

                                    <div class="submit-btn-area" style="width:15%;float:right;min-width: 200px;">
                                        <?php //if (($page_title == 'Add Category') || ($page_title == 'Edit Category')) { ?>
                                            <button id="saveCategorySubmit" type="submit"><?=(($page_title == 'Save ')? 'Save ' : 'Save')?><i class="ti-arrow-right"></i></button>
                                        <?php //} else { ?>
                                            <!--a class="btn btn-rounded btn-dark mt-3" href="javascript:history.back()" role="button">GO BACK <i class="ti-arrow-right"></i></a-->
                                        <?php //} ?>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main content area end -->

        <?php $this->load->view('acp/includes/footer'); ?>

    </div>
    <!-- page container area end -->

    <?php $this->load->view('acp/includes/footer-assets', array('page_title' => 'Dropzone', 'breadcrum' => $page_breadcrumb)); ?>
    <script src="<?=site_url()?>assets/js/acp/termsandconditions.js?c=<?=date('siHYmd')?>"></script>
    <script type="text/javascript">
        $(function() {
            TnC.init();
            TnC.save();
        });
    </script>

    <!-- custom js files -->
    <!--script src="<?//=site_url()?>assets/js/acp/categories.js?c=<?//=strtotime(date('s:i:H Y-m-d'))?>"></script-->
  

<script type="text/javascript">

$(document).ready(function() {
    
$('.breadcrumbs').hide();
});
</script>




        <script>
$(document).ready(function(){
    //$(".cke_notification_message").hide();
    

    //$('.cke_notification_close').find('a').trigger('click');
  /*$("#save").click(function(){
    var description = CKEDITOR.instances['description'].getData();
    alert(description);
  });*/
  CKEDITOR.replace('desc1');
CKEDITOR.replace('desc2');
//CKEDITOR.replace('description2');
//CKEDITOR.replace('description3');
});
</script>
</body>

</html>