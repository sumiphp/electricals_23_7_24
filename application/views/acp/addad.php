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
        <?php $this->load->view('acp/includes/sidebar-menu', array('page_title' => $page_title, 'breadcrum' => $page_breadcrumb, 'main_menu_active' => $main_menu_active, 'sub_menu_active' => $sub_menu_active, 'innersub_menu_active' => $innersub_menu_active)); ?>
        <!-- sidebar menu area end -->

        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <?php $this->load->view('acp/includes/header'); ?>
            <!-- header area end -->

            <!-- page title area start -->
            <?php $this->load->view('acp/includes/page-head', array('page_title' => $page_title, 'breadcrum' => $page_breadcrumb)); ?>
            <!-- page title area end -->

            <div class="main-content-inner p-0">
                <div class="col-12 p-0 mt-5X">
                    <div class="card">
                        <div class="card-body">
                            <div class="formArea">
                                <?php
                                $catg = array();
                                if (isset($productcategory) && !empty($productcategory)) {
                                    $catg = array(
                                        'cat_id' => $productcategory['cat_id'],
                                        'cat_name' => $productcategory['cat_name'],
                                        'cat_canonial_name' => $productcategory['cat_canonial_name'],
                                        'cat_desc' => $productcategory['cat_desc'],
                                        'cat_image' => $productcategory['cat_image'],
                                        'cat_orderno' => $productcategory['cat_orderno'],
                                        'addinmenu'=> $productcategory['addinmenu'],
                                        'cat_shdesc' => $productcategory['cat_shdesc'],
                                    );
                                   // print_r($catg);
                                } ?>
                                <!--form id="manageCatg"-->

                                <form  method="post" action="<?php echo base_url().'acp/settings/manageadprocess';?>" enctype="multipart/form-data">
                                   

                                    <div class="form-group row" >
                                        <div class="col-md-6 mb-3">
                                            <label for="adtype" class="col-form-label">Ad Type</label>
                                            <select class="form-control" type="text" id="adtype" name="adtype"   required="required">
                                            <option value=''>Select</option>
                                           

                                                <option value='First'>First</option>
                                            <option value='Second'>Second</option>
                                            <option value='Third'>Third</option>
                                            <option value='Fourth'>Fourth</option>
                                            <option value='Fifth'>Fifth</option>
                                            <option value='Sixth'>Sixth</option>
                                            <option value='Seventh'>Seventh</option>
                                            <option value='Eighth'>Eighth</option>


                                             
                            </select>


                                            </div>

                                            <div class="col-md-6 mb-3">
                                           
                                           <label for="cat_name" class="col-form-label">Image1*</label>
                                           <input class="form-control" type="file" id="image1" name="image1" placeholder="Enter Ad" value="" >
                                          
                    
                                           <!--span>After saving URL to this category will be: <?//=MAIN_SITE_URL?>category/<strong id="show_canonial_name"><?//=((!empty($categ) && isset($categ['cat_canonial_name']))? $categ['cat_canonial_name'] : '')?></strong></span-->
                                       </div>






                                    </div>


                                    <div class="form-group row" >
                                        <div class="col-md-6 mb-3">
                                            <label for="adtype" class="col-form-label">Status</label>
                                            <select class="form-control" type="text" id="status" name="status"   required="required">
                                            <option value=''>Select</option>
                                           

                                                <option value='Active'>Active</option>
                                            <option value='InActive'>InActive</option>
                                           


                                             
                            </select>


                                            </div> </div>



                                         

                                   
                                    <div class="submit-btn-area" style="width:15%;float:right;min-width: 200px;">
                                        <?php //if (($page_title == 'Add Category') || ($page_title == 'Edit Category')) { ?>
                                            <button id="saveCatgSubmit1" type="submit"><?=(($page_title == 'Add Ad')? 'Save Ad' : 'Save Ad')?><i class="ti-arrow-right"></i></button>
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

    <!-- custom js files -->
    <!--script src="<?//=site_url()?>assets/js/acp/ad.js?c=<?//=date('siHYmd')?>"></script-->
    <script type="text/javascript">
       
    </script>
</body>

</html>