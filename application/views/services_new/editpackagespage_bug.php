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
               
                <span id="msg"></span><br>
                            <div class="inner-page-sec">
                              <div class="description-sec">
                              <?php echo $this->session->flashdata('flash_msg');?>  
                                <h2>Edit Packages Page</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="edit" class="rounded-form"  method="post" enctype="multipart/form-data" action="<?php echo base_url().'Welcome/editbookprocess';?>" >
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Title:</label>
                                                              <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" maxlength="200" value="<?php echo $result->title;?>"  required>
                                                              <input type="hidden" class="form-control" id="id" name="id"  value="<?php echo $result->bookingid;?>"  required>
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="company-logo" class="form-label text-primary">Image1:</label>
                                                              <input type="file" class="form-control" id="image1" name="image1" >
                                                              <img src="<?php echo base_url().'uploads/book/'.$result->picture;?>" width="50" height="50" />
                                                          </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                                                       
                                                      <div class="col-md-6">
                                                          <label for="status" class="form-label text-primary">Status:</label>
                                                              
                                                              <select class="form-control" placeholder="Select Status" name="status" id="status"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Status</option>
                                                                <option value="1" <?php if ($result->active=='1'){?> selected <?php }?>>Active </option>
                                                                <option value="0" <?php if ($result->active=='0'){?> selected <?php }?>>Inactive </option>
</select>
                                                                </div>
                                                          <div class="col-md-6">
                                                              <label for="designation" class="form-label text-primary">Alt Tag Image1:</label>
                                                              <input type="text" class="form-control" id="alttagimg1" name="alttagimg1" required placeholder="Enter Alt attribute" value="<?php echo $result->alttagimg1;?>">
                                                          </div>
                                                      </div>

                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Title2:</label>
                                                              <input type="text" class="form-control" id="title2" name="title2" placeholder="Enter Title2" maxlength="300" value="<?php echo $result->title2;?>"  required>
                                                             
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="company-logo" class="form-label text-primary">Image2:</label>
                                                              <input type="file" class="form-control" id="image2" name="image2" >
                                                              <img src="<?php echo base_url().'uploads/book/'.$result->picture2;?>" width="50" height="50" />
                                                          </div>
                                                      </div>



                                                      
                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Description1:</label>
                                                          <textarea class="form-control" id="description" name="description" rows="4" maxlength="700" placeholder="Enter Description1"><?php echo $result->description;?></textarea>
                                                      </div>

                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Description2:</label>
                                                          <textarea class="form-control" id="description2" name="description2" rows="4" maxlength="700" placeholder="Enter Description2"><?php echo $result->description2;?></textarea>
                                                      </div>


                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Description3:</label>
                                                          <textarea class="form-control" id="description3" name="description3" rows="4" maxlength="700" placeholder="Enter Description3"><?php echo $result->description3;?></textarea>
                                                      </div>

                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Meta Tag:</label>
                                                          <textarea class="form-control" id="metatag" name="metatag" rows="20" placeholder="Enter Meta Tage"><?php echo $result->metatag;?></textarea>
                                                      </div>
                                                      
                                                      
                                                      <!--<a class="btn btn-primary me-3" href="<?php //echo base_url().'Welcome/listsolutions';?>" data-bs-original-title="" title="">View/Edit  </a>-->
                                                      
                                                      <button type="submit" class="btn btn-primary" >Submit</button>
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
        
    </body>
    <?php include_once("footer.php");?>
        <script>
/*$('#editdownloads').on('submit', function (e) {
    e.preventDefault();
    
        var file_data1 = $('#image1').prop('files')[0];
        var link=$("#link").val();
        var title=$('#title').val();
        var status=$("#status").val();
        var downloadid=$("#downloadid").val();
        var description=$("#description").val();
        var alttagimg1=$("#alttagimg1").val();
        var form_data = new FormData();
        form_data.append('image1', file_data1);
        form_data.append('link', link);
        form_data.append('maintitle',title);
       form_data.append('downloadid',downloadid);
        form_data.append('description',description);
        form_data.append('alttag1',alttagimg1);
        form_data.append('status',status);
alert(downloadid);
        $.ajax({
            url: "<?php //echo base_url().'Welcome/editdownloadsprocess';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                $('#image1').val('');
                $('#image2').val('');
                $('input[type=text]').each(function() {
        $(this).val('');
    });
    $("#description").val('');
                //$('#solmsg').html(response); // display success response from the server
                window.location.href ="<?php //echo base_url().'Welcome/adddownloads';?>";
            },
            error: function (response) {
                //$('#solmsg').html(response); // display error response from the server
                window.location.href ="<?php //echo base_url().'Welcome/adddownloads';?>";
            }
        });
    });*/






</script>
