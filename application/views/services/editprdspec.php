<?php include_once("header.php");?>   

    <body>
        <!-- Start Preloader -->
        <!--<div class="preloader">
            <div class="preloader-wave"></div>
        </div>-->
        <!-- End Preloader -->


      

        <!-- Start Sign In Area -->
		<section class="sign-in-area ptb-50">
			<div class="container">
              <div class="dashboard-bgarea">


                     
            <?php include_once("sidebar.php");
            //print_r($result);
            
            ?>     

 

                <div class="dashboard-innerbox">
               
                            <div class="inner-page-sec">
                            <span id="qlmsg" style="color:green"></span><br>
                              <div class="description-sec">
                                <h2>Edit Product Specifications </h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="qlfrm1" class="rounded-form" method="post"  action="<?php echo base_url().'Welcome/editprdspecprocess';?>" >
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Label:</label>
                                                              <input type="text" class="form-control " id="title" name="title" placeholder="Enter Label" maxlength="30" required value="<?php echo $result->label;?>" >
                                          
                                                          </div>
                                                         <div class="col-md-6">
                                                              <label for="company-logo" class="form-label text-primary">Order No:</label>
                                                              <input type="text" class="form-control numericvalidate" id="orderno" name="orderno" placeholder="Orderno" required value="<?php echo $result->orderno;?>">
                                                              <input type="hidden" class="form-control numericvalidate" id="id" name="id"  required value="<?php echo $result->prdspecid;?>">
                                                          </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                      <label for="status" class="form-label text-primary">Status:</label>   
                                                      <select class="form-control" placeholder="Select Status" name="status" id="status"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Status</option>
                                                                <option value="1" <?php if ($result->active=='1'){?> selected <?php }?>>Active </option>
                                                                <option value="0" <?php if ($result->active=='0'){?> selected <?php }?>>Inactive </option>
</select> </div>

                                                          <div class="col-md-6">
                                                          <label for="value" class="form-label text-primary">Value:</label>
                                                              <input type="text" class="form-control" id="value" name="value" required placeholder="Enter Value" value="<?php echo $result->value;?>">
                                                          </div>
                                                      </div>


                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label class="form-label">Select Product</label>
                                                                <select class="form-control" placeholder="Product" name="prd" id="prd"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Product</option>
                                                                
                                                                <?php                                              
                                                                                                     
                                                    foreach($result1 as $res){?>
                                                    <option value="<?php echo $res['itemid'];?>" <?php if ($res['itemid']==$result->productid){?> selected <?php }?>><?php echo $res['itemname'];?></option>

                                                    <?php } ?>
                                                                    
</select>
                                                          </div></div>
                                                      
                                                      <a class="btn btn-primary me-3" href="<?php echo base_url().'Welcome/listprdspec';?>" data-bs-original-title="" title="">View/Edit  </a>
                                                      
                                                      <button type="submit" class="btn btn-primary" id="uploadfaq" >Submit</button>
                                                  </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                           
                                
                          
              
                   
              </div>
              </div>
			</div>
		</section>
		
        
    </body>
    <?php include_once("footer.php");?>


            


             
        <!---<script src="<?php //echo base_url().'assets/js/jquery.min.js';?>"></script>
      
        <script src="<?php //echo base_url().'assets/js/bootstrap.bundle.min.js';?>"></script>
        
        <script src="<?php //echo base_url().'assets/js/meanmenu.min.js';?>"></script>
      
        <script src="<?php //echo base_url().'assets/js/owl.carousel.min.js';?>"></script>
     
        <script src="<?php //echo base_url().'assets/js/jquery.magnific-popup.min.js';?>"></script>
      
        <script src="<?php //echo base_url().'assets/js/wow.min.js';?>"></script>
    
        <script src="<?php //echo base_url().'assets/js/jquery.ajaxchimp.min.js';?>"></script>
        
        <script src="<?php //echo base_url().'assets/js/form-validator.min.js';?>"></script>
      
        <script src="<?php //echo base_url().'assets/js/contact-form-script.js';?>"></script>
       
        <script src="<?php //echo base_url().'assets/js/custom.js';?>"></script>-->
        <script>
$('#qlfrm').on('submit', function (e) {
    e.preventDefault();
   //alert("enter");
        //var file_data1 = $('#image1').prop('files')[0];
        //var file_data2 = $('#image2').prop('files')[0];
        var title=$('#title').val();
       var qualityid=$("#qualityid").val();
        var orderno=$("#orderno").val();
        var status=$("#status").val();
        var prd=$("#prd").val();
        var form_data = new FormData();
        //form_data.append('image1', file_data1);
        //form_data.append('image2', file_data2);
        form_data.append('prd',prd);
        form_data.append('title',title);
       form_data.append('qualityid',qualityid);
        form_data.append('orderno',orderno);
        form_data.append('status',status);
        $.ajax({
            url: "<?php echo base_url().'Welcome/editqualityprocess';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                //$('#image1').val('');
                //$('#image2').val('');
                $('input[type=text]').each(function() {
        $(this).val('');
    });
    $("#description").val('');
    window.location.href ="<?php echo base_url().'Welcome/listquality';?>";
            },
            error: function (response) {
                window.location.href ="<?php echo base_url().'Welcome/listquality';?>";
            }
        });
    });






</script>
