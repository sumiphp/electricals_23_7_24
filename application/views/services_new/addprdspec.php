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


                     
            <?php include_once("sidebar.php");?>     

 

                <div class="dashboard-innerbox">
               
                            <div class="inner-page-sec">
                            <span id="qlmsg" style="color:green"></span><br>
                              <div class="description-sec">
                                <h2>Add Product Specifications</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="frm" class="rounded-form" method="post"  action="<?php echo base_url().'Welcome/addprdspecprocess';?>" >
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Label:</label>
                                                              <input type="text" class="form-control " id="title" name="title" placeholder="Enter Product Specifications" required maxlength="30" >
                                          
                                                          </div>


                                                          <div class="col-md-6">
                                                              <label for="value" class="form-label text-primary">Value:</label>
                                                              <input type="text" class="form-control" id="value" name="value" required placeholder="Enter Value" value="<?php //echo $result->alttagimg1;?>">
                                                          </div>

                                                        
                                                      </div>


                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                      <label for="status" class="form-label text-primary">Status:</label>   
                                                          <select class="form-control" placeholder="Select Status" name="status" id="status"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Status</option>
                                                                <option value="1">Active </option>
                                                                <option value="0">Inactive </option>
</select> </div>


                                                          <div class="col-md-6">
                                                              <label for="company-logo" class="form-label text-primary">Order No:</label>
                                                              <input type="text" class="form-control numericvalidate" id="orderno" name="orderno" placeholder="Orderno" required>
                                          
                                                          </div>

                                                      </div>
                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                          <label class="form-label">Select Product</label>
                                                                <select class="form-control" placeholder="Product" name="prd" id="prd"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Product</option>
                                                                
                                                                <?php                                              
                                                                                                     
                                                    foreach($result as $res){?>
                                                    <option value="<?php echo $res['itemid'];?>"><?php echo $res['itemname'];?></option>

                                                    <?php } ?>
                                                                    
</select>
                                                          </div></div>
                                                      <!--<div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Subtitle:</label>
                                                              <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Enter Sub Title">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="designation" class="form-label text-primary">Image2:</label>
                                                              <input type="file" class="form-control" id="image2" name="image2">
                                                          </div>
                                                      </div>-->
                                                      
                                                      <!--<div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Faq Description:</label>
                                                          <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Description" required></textarea>
                                                      </div>-->
                                                      <!---<div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="email" class="form-label text-primary">Email:</label>
                                                              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="website" class="form-label text-primary">Website:</label>
                                                              <input type="url" class="form-control" id="website" name="website" placeholder="Enter website">
                                                          </div>
                                                      </div>--->
                                                      
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
		
        


            


        <?php include_once("footer.php");?>
        <script>
$('#frm').on('submit', function (e) {
    e.preventDefault();
   //alert("enter");
        //var file_data1 = $('#image1').prop('files')[0];
        //var file_data2 = $('#image2').prop('files')[0];
        var title=$('#title').val();
        var value=$("#value").val();
        var orderno=$("#orderno").val();
        var status=$("#status").val();
        var prd=$("#prd").val();
        var form_data = new FormData();
        //form_data.append('image1', file_data1);
        //form_data.append('image2', file_data2);
        form_data.append('title',title);
        form_data.append('value',value);
        form_data.append('orderno',orderno);
        form_data.append('status',status);
        form_data.append('prd',prd);
        $.ajax({
            url: "<?php echo base_url().'Welcome/addprdspecprocess';?>", // point to server-side controller method
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
  $("#status").val('');
        $("#prd").val('');
    //$("#description").val('');
                $('#qlmsg').html(response); // display success response from the server
            },
            error: function (response) {
                $('#almsg').html(response); // display error response from the server
            }
        });
    });






</script>

    </body>
    