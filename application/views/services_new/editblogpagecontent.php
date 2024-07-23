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
                            <span id="testmsg"></span><br>
                              <div class="description-sec">
                                <h2>Edit Blog Page</h2>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="editnewsletter" class="rounded-form" method="post" enctype="multipart/form-data" action="<?php echo base_url().'Welcome/editblogpageprocess';?>" >
                                                    <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Blog Page Title1:</label>
                                                              <input type="text" class="form-control" id="blogtitle" name="blogtitle" placeholder="Blog Content Title" maxlength="50" required value="<?php echo $result->blogtitle;?>" >
                                          
                                                          </div>

                                                          <div class="col-md-6">
                                                              <label for="image1" class="form-label text-primary">Blog Page Image:</label>
                                                              <input type="file" class="form-control" id="image1" name="image1">
                                                              <img src="<?php echo base_url().'uploads/blog/'.$result->blogimg;?>"  width="50" height="50" />
                                                          </div>


                                                          
                                                      </div>


                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Blog Page Title2:</label>
                                                              <input type="text" class="form-control" id="blogtitle2"  name="blogtitle2" placeholder="Blog Content Title2" maxlength="50" required value="<?php echo $result->title2;?>" >
                                          
                                                          </div>

                                                          <!--div class="col-md-6">
                                                              <label for="image1" class="form-label text-primary">Blog Page Image:</label>
                                                              <input type="file" class="form-control" id="image1" name="image1">
                                                              <img src="<?php //echo base_url().'uploads/blog/'.$result->blogimg;?>"  width="50" height="50" />
                                                          </div--->


                                                          
                                                      </div>



                                                    
                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Blog Page Content1 :</label>
                                                          <textarea class="form-control" id="description" rows="4" name="description" rows="1" placeholder="Blog Page Content" maxlength="1350" ><?php echo $result->blogdescription;?></textarea>
                                                      </div>

                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Blog Page Content2 :</label>
                                                          <textarea class="form-control" id="description2" rows="4" name="description2" rows="1" placeholder="Blog Page Content" maxlength="1350" ><?php echo $result->description2;?></textarea>
                                                      </div>
                                                     
                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Meta Tag Blog Page:</label>
                                                          <textarea class="form-control" id="metatag" name="metatag" rows="20" placeholder="Enter Meta Tag"><?php echo $result->metatag;?></textarea>
                                                      </div>

                                                      <div class="mb-3">
                                                          <label for="address" class="form-label text-primary">Meta Tag Blog Detailed Page:</label>
                                                          <textarea class="form-control" id="metatag1" name="metatag1" rows="20" placeholder="Enter Meta Tag1"><?php echo $result->metatag1;?></textarea>
                                                      </div>
                                                      
                                                      
                                                      <button type="submit" class="btn btn-primary" id="uploadsub1" >Submit</button>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

        <script>
$(document).ready(function(){
  /*$("#save").click(function(){
    var description = CKEDITOR.instances['description'].getData();
    alert(description);
  });*/
//CKEDITOR.replace('description');
//CKEDITOR.replace('description2');
});
</script>





        <script>
$('#uploadsub').on('click', function (e) {
    e.preventDefault();
  
        var file_data1 = $('#image1').prop('files')[0];
        //var file_data2 = $('#image2').prop('files')[0];
        var blogtitle=$('#blogtitle').val();
        //var rating=$("#rating").val();
        var description=$("#description").val();
        var description2=$("#description2").val();
       var metatag=$("#metatag").val();
       var metatag1=$("#metatag").val();
       var blogtitle2=$('#blogtitle2').val();
        //var place=$("#place").val();
        //var date=$("#date").val();
        //alert("enter"+description);
        var form_data = new FormData();
        form_data.append('image1', file_data1);
        //form_data.append('image2', file_data2);
        form_data.append('blogtitle',blogtitle);
        form_data.append('blogtitle2',blogtitle2);
        //form_data.append('rating',rating);
        form_data.append('description',description);
        form_data.append('description2',description2);
        form_data.append('metatag',metatag);
        form_data.append('metatag1',metatag1);
        //form_data.append('date',date);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/editblogpageprocess/'.$this->uri->segment(3);?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                //$('#image1').val('');
                //$('#date').val('');
                $('#description').val('');
                /*$('input[type=text]').each(function() {
        $(this).val('');
    });*/
                //$('#testmsg').html(response); // display success response from the server
                window.location.href ="<?php echo base_url().'Welcome/listblogpage';?>";
            },
            error: function (response) {
                //$('#testmsg').html(response); // display error response from the server
                window.location.href ="<?php echo base_url().'Welcome/listblogpage';?>";
            }
        });
    });






</script>
