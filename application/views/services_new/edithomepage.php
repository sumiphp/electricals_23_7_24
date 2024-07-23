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
                <span id="sermsg"></span><br>
                            <div class="inner-page-sec">
                              <div class="description-sec">
                                <h2>Edit Home Page</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="edithomepage" class="rounded-form" method="post" >
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Main Title:</label>
                                                              <input type="text" class="form-control" id="maintitle" name="maintitle" maxlength=50  required placeholder="Enter Main Title" value="<?php echo $result->title1;?>">
                                          
                                                          </div>
                                                          <div class="col-md-6">

                                                          <label for="contact-person" class="form-label text-primary">Title2:</label>
                                                              <input type="text" class="form-control" id="subtitle" name="subtitle"  maxlength=50 placeholder="Enter Sub Title" value="<?php echo $result->title2;?>">


                                                             
                                                          </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                          <label for="company-logo" class="form-label text-primary">Image1:</label>
                                                              <input type="file" class="form-control" id="image1" name="image1">
                                                              <img src="<?php echo base_url().'uploads/homepage/'.$result->homepageimg1;?>" width="50" height="50" />


                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="designation" class="form-label text-primary">Image2:</label>
                                                              <input type="file" class="form-control" id="image2" name="image2">
                                                              <img src="<?php echo base_url().'uploads/homepage/'.$result->homepageimg2;?>" width="50" height="50" />
                                                          </div>
                                                      </div>

                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Alt Tag Image1:</label>
                                                              <input type="text" class="form-control" id="alttagimg1" name="alttagimg1" required placeholder="Enter Alt attribute" value="<?php echo $result->alttagimg1;?>">
                                          
                                                          </div>
                                                          <div class="col-md-6">

                                                          <label for="contact-person" class="form-label text-primary">Alt Tag Image2:</label>
                                                              <input type="text" class="form-control" id="alttagimg2" name="alttagimg2" required placeholder="Enter Alt attribute" value="<?php echo $result->alttagimg2;?>">


                                                             
                                                          </div>
                                                      </div>

                                                      
                                                      <!--<div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Description:</label>
                                                          <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Description" required><?php //echo $result->description;?></textarea>
                                                      </div>-->
                                                     <div class="row mb-3">

                                                     <div class="col-md-6">
                                                              <label for="email" class="form-label text-primary">Title3 </label>
                                                              <input type="text" class="form-control" id="title3" name="title3" maxlength=50 placeholder="Enter Title3" value="<?php echo $result->title3;?>">
                                                          </div>
                                                         
                                                          <div class="col-md-6">
                                                              <label for="website" class="form-label text-primary">Title4:</label>
                                                              <input type="text" class="form-control" id="title4" name="title4" maxlength=50 placeholder="Enter Title4" value="<?php echo $result->title4;?>">
                                                          </div>
                                                      </div>


                                                      <!--div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="email" class="form-label text-primary">Service Title2 </label>
                                                              <input type="text" class="form-control" id="servicetitle2" name="servicetitle2" maxlength=50 placeholder="Enter Service Title2" value="<?php echo $result->servicetitle2;?>">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="website" class="form-label text-primary">Service Title3:</label>
                                                              <input type="text" class="form-control" id="servicetitle3" name="servicetitle3" maxlength=50 placeholder="Enter Service Title3" value="<?php echo $result->servicetitle3;?>">
                                                          </div>
                                                      </div-->

                                                      <div class="row mb-3">


                                                      <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Alt Tag Image3:</label>
                                                              <input type="text" class="form-control" id="alttagimg3" name="alttagimg3" required placeholder="Enter Alt attribute" value="<?php echo $result->alttagimg3;?>">
                                          
                                                          </div>
                                                      
                                                         
                                                          <div class="col-md-6">
                                                          <label for="designation" class="form-label text-primary">Service Image:</label>
                                                              <input type="file" class="form-control" id="image3" name="image3">
                                                              <img src="<?php echo base_url().'uploads/homepage/'.$result->serviceimg;?>" width="50" height="50" />
                                                          </div>
                                                      </div>


                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                      <label for="company-name" class="form-label text-primary">Alt Tag Image4:</label>
                                                              <input type="text" class="form-control" id="alttagimg4" name="alttagimg4" required placeholder="Enter Alt attribute" value="<?php echo $result->alttagimg4;?>">
                                                          </div>
                                                         
                                                          <div class="col-md-6">
                                                          <label for="designation" class="form-label text-primary">Image4:</label>
                                                              <input type="file" class="form-control" id="image4" name="image4">
                                                              <img src="<?php echo base_url().'uploads/homepage/'.$result->homepageimg4;?>" width="50" height="50" />
                                                          </div>
                                                      </div>





                                                      <div class="row mb-3">
                                                      <div class="col-md-6">
                                                              <label for="email" class="form-label text-primary">Title5 </label>
                                                              <input type="text" class="form-control" id="title5" name="title5" maxlength=50 placeholder="Enter Title5" value="<?php echo $result->title5;?>">
                                                          </div>
                                                          
                                                      </div>

                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Description1:</label>
                                                          <textarea class="form-control" id="description1" name="description1" rows="4" placeholder="Enter description1" required maxlength="1330"><?php echo $result->description1;?></textarea>
                                                      </div>
                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Description2:</label>
                                                          <textarea class="form-control" id="description2" name="description2" rows="4" placeholder="Enter description1" required maxlength="1330"><?php echo $result->description2;?></textarea>
                                                      </div>

                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Description3:</label>
                                                          <textarea class="form-control" id="description3" name="description3" rows="4" placeholder="Enter description1" required maxlength="1330"><?php echo $result->description3;?></textarea>
                                                      </div>

                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Description4:</label>
                                                          <textarea class="form-control" id="description4" name="description4" rows="4" placeholder="Enter description1" required maxlength="1330"><?php echo $result->description4;?></textarea>
                                                      </div>
                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Description5:</label>
                                                          <textarea class="form-control" id="description5" name="description5" rows="4" placeholder="Enter description5" required maxlength="1330"><?php echo $result->description5;?></textarea>
                                                      </div>

                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Description6:</label>
                                                          <textarea class="form-control" id="description6" name="description6" rows="4" placeholder="Enter description6" required maxlength="1330"><?php echo $result->description6;?></textarea>
                                                      </div>

                                                      

                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Meta Tag:</label>
                                                          <textarea class="form-control" id="metatag" name="metatag" rows="20" placeholder="Enter Meta Tage"><?php echo $result->metatag;?></textarea>
                                                      </div>



                                                      
                                                      <!--<a class="btn btn-primary me-3" href="<?php //echo base_url().'Welcome/listcategory';?>" data-bs-original-title="" title="">View/Edit  </a>-->
                                                      
                                                      <button type="submit" class="btn btn-primary" id="uploadser" >Update</button>
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
$('#edithomepage').on('submit', function (e) {
    e.preventDefault();
//alert("enter");
        var file_data1 = $('#image1').prop('files')[0];
        var file_data2 = $('#image2').prop('files')[0];
        var file_data3 = $('#image3').prop('files')[0];
        var file_data4 = $('#image4').prop('files')[0];
        var maintitle=$('#maintitle').val();
      var subtitle=$("#subtitle").val();
      var title3=$("#title3").val();
      var title4=$("#title4").val();
      var title5=$("#title5").val();
        /*var servicetitle1=$("#servicetitle1").val();
        var servicetitle2=$("#servicetitle2").val();
        var servicetitle3=$("#servicetitle3").val();
        var servicetitle=$("#servicetitle").val();
        var qualitytitle=$("#qualitytitle").val();*/
        var alttagimg1=$("#alttagimg1").val();
        var alttagimg2=$("#alttagimg2").val();
        var alttagimg3=$("#alttagimg3").val();
        var alttagimg4=$("#alttagimg4").val();
        var metatag=$("#metatag").val();
        var description1=$("#description1").val();
        var description2=$("#description2").val();
        var description3=$("#description3").val();
        var description4=$("#description4").val();
        var description5=$("#description5").val();
        var description6=$("#description6").val();

        var form_data = new FormData();
        form_data.append('image1', file_data1);
        form_data.append('image2', file_data2);
        form_data.append('image3', file_data3);
        form_data.append('image4', file_data4);
       
        form_data.append('maintitle',maintitle);
        form_data.append('subtitle',subtitle);
        form_data.append('title3',title3);
        form_data.append('title4',title4);
        form_data.append('title5',title5);
        /*form_data.append('servicetitle',servicetitle);
        form_data.append('servicetitle1',servicetitle1);
        form_data.append('servicetitle2',servicetitle2);*/
        form_data.append('description1',description1);
        form_data.append('description2',description2);
        form_data.append('description3',description3);
        form_data.append('description4',description4);
        form_data.append('description5',description5);
        form_data.append('description6',description6);
        form_data.append('alttag1',alttagimg1);
        form_data.append('alttag2',alttagimg2);
        form_data.append('alttag3',alttagimg3);
        form_data.append('alttag4',alttagimg4);
        form_data.append('metatag',metatag);
        //form_data.append('qualitytitle',qualitytitle);
        //form_data.append('servicetitle3',servicetitle3);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/edithomepageprocess';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                $('#image1').val('');
                $('#image2').val('');
                $('#image3').val('');
                $('input[type=text]').each(function() {
        $(this).val('');
    });
                //$('#sermsg').html(response); // display success response from the server
                window.location.href ="<?php echo base_url().'Welcome/listhomepage';?>";
            },
            error: function (response) {
               // $('#sermsg').html(response); // display error response from the server
               window.location.href ="<?php echo base_url().'Welcome/listhomepage';?>";
            }
        });
    });






</script>