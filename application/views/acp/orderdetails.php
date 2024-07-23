
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
             $page_title="Order Details";
             $page_breadcrumb1="Order Details";
             
            
            $this->load->view('acp/includes/page-head', array('page_title' => $page_title, 'breadcrum' => $page_breadcrumb1)); ?>
            <!-- page title area end -->
           
            <div class="main-content-inner p-0">
                <div class="col-12 p-0 mt-5X">
                    <div class="card">
                        <div class="card-body">
                            <div class="formArea">
                                <span style='color:green';>
                            <?php echo $this->session->flashdata('msg');
                            
                            ?>
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


<table id="customersList" class="text-center listingPage  dataTable" width=100%>
    <thead class="text-capitalize">
        <tr style='background-color:#000;color:#fff'>
        <th class="w-20">No</th>
            <th class="w-20">Order:</th>
            <!--th class="w-20">Product</th>
            <th class="w-20">Quantity</th>
            <th class="w-20">Sub Total</th-->



            <th class="cart-col-productname">Product Name</th>
                            <th class="cart-col-quantity">Quantity</th>
                            <th class="cart-col-price">Price excl VAT</th>
                            <th class="cart-col-price">VAT Rate</th>
                            <th class="cart-col-price">VAT Amount</th>
                            <th class="cart-col-total">Price incl VAT</th>
           
           
        </tr>
    </thead>
    <tbody>
        <?php 
        $slno = 0;
        //print_r($billcustomers);
        //die;
        foreach ($billcustomers as $k => $customerVal) {
            $slno++; ?>
            <tr>
                <td><?=$slno?></td>
                <td><?php //echo trim($customerVal['customer_id']);
                
                echo $orderid=trim($customerVal['order_id']);
                /*$this->db->where('userid',$custid);
        $this->db->from('userlogin');
        $query = $this->db->get();
         $dt=$query->row();
       
            echo $dt->name.' '.$dt->lastname;*/    
                
                
                ?></td> <td><?php //echo trim($customerVal['customer_id']);
                
                $prod_id=trim($customerVal['product_id']);

                $this->db->where('prod_id',$prod_id);
                
                $this->db->select('*');
                $this->db->from('products');
                $query = $this->db->get();
                $row=$query->row();
                echo $row->prod_name;


                /*$this->db->where('userid',$custid);
        $this->db->from('userlogin');
        $query = $this->db->get();
         $dt=$query->row();
       
            echo $dt->name.' '.$dt->lastname;*/    
                
                
                ?></td>
                <td align="center"><?=$customerVal['quantity']?></td>
                <td align="center"><?=$customerVal['sub_total']?></td>
                <td align="center"><?=$customerVal['vatrate']?>%</td>
                <td align="center"><?=$customerVal['vatamo']?></td>
                <td align="center"><?=$customerVal['pricewithvat']?></td>
              
              

               
               
            </tr>
        <?php } ?>
        <!--tr >
            
           
            <td colspan="5">Shipping Amount:</td>
           
           
        </tr-->
        <tr >
            
           
            <td colspan="7">Vat Amount:</td>
            <td><?=$net->vatamo?></td>
           
        </tr>
        <tr >
            
           
            <td colspan="7">Shipping Amount:</td>
            <td><?=$net->shippingamount?></td>
           
        </tr>
        <tr >
            
           
            <td colspan="7">Net Total:</td>
            <td><?=$net->grand_total?></td>
           
        </tr>
        <!--tr >
            
           
            <th colspan="5">25</th>
            <th>700</th>
           
        </tr-->
    </tbody>
</table>







                                <form id="home" method="post" action="<?php echo base_url().'acp/settings/managebulkuploadprocess';?>" enctype="multipart/form-data">
                                    
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
    <script src="<?=site_url()?>assets/js/acp/categories.js?c=<?=strtotime(date('s:i:H Y-m-d'))?>"></script>
    <script type="text/javascript">
        <?php /*if ($page_title == 'View Category') { */
            ?>
            /*$(function() {
                $("#manageCategory :input").prop("disabled", true);
            });*/
        <?php //} else { ?>
           /* $(function() {
                Categories.add();
            });*/
        <?php //} ?>
    </script>

<script type="text/javascript">

$(document).ready(function() {
    
$('.breadcrumbs').hide();
});
</script>
</body>

</html>