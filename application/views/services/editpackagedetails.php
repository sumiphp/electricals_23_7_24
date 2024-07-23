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
                              <div class="description-sec">
                                <h2>Edit Package Details</h2>
                                <div class="row">
                                <span id="msg"></span><br>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="inner-card">
                                            <div class="inner-card-body">
                                                <div class="product-info">
                                                    <form id="edit" class="rounded-form" method="post" >
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="company-name" class="form-label text-primary">Enter Title1:</label>
                                                              <input type="text" class="form-control" id="title1" name="title1" placeholder="Enter Title1" required maxlength="25" value=<?php echo $resultrow->title1;?>>
                                          
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="company-logo" class="form-label text-primary">Package Picture:</label>
                                                              <input type="file" class="form-control" id="image1" name="image1">
                                                              <img src="<?php echo base_url().'uploads/packagesdetails/'.$resultrow->picture;?>"  width="50" height="50" />
                                                              <input type="hidden" class="form-control" id="id" name="id"  value="<?php echo $resultrow->contentid;?>"  required>
                                                          </div>
                                                      </div>
                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Enter Title2:</label>
                                                              <input type="text" class="form-control" id="title2" name="title2" placeholder="Enter Title2" value="<?php echo $resultrow->title2;?>" required maxlength="25">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="alttagimg1" class="form-label text-primary">Alt tag Package Picture:</label>
                                                              <input type="text" class="form-control" id="alttagimg1" name="alttagimg1" required placeholder="Enter Alt tag Package Picture" value="<?php echo $resultrow->alttagimg1;?>">
                                                          </div>
                                                      </div>


              

                                                                                                                   <!--div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Title3:</label>
                                                              <input type="text" class="form-control" id="title3" name="title3" placeholder="Enter Title3" required maxlength="25">
                                                          

                                                              <label for="Rating" class="form-label text-primary">Rating:</label>
                                                          <select class="form-control" placeholder="Select Status" id="rating" name="rating"  data-bs-original-title="" title="" required>
                                                              <option value=''>Select Rating</option>
                                                                <option value="1" >1 </option>
                                                                <option value="2" >2</option>
                                                                <option value="3">3 </option>
                                                                <option value="4" >4</option>
                                                                <option value="5" >5</option>
</select></div--->
                                                               





                                                    



                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Enter Title3:</label>
                                                              <input type="text" class="form-control" id="title3" name="title3" placeholder="Enter Title3" required maxlength="25" value=<?php echo $resultrow->title3;?>>
                                                          </div>
                                                          <div class="col-md-6">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Enter Title4:</label>
                                                              <input type="text" class="form-control" id="title4" name="title4" value="<?php echo $resultrow->title4;?>" placeholder="Enter Enter Title4" required maxlength="25">
                                                          </div>
                                                          </div>
                                                      </div>

                                                      <!--div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Duration:</label>
                                                              <input type="text" class="form-control" id="duration" name="duration" placeholder="Enter Duration" required maxlength="25">
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="alttagimg1" class="form-label text-primary">Package Rate:</label>
                                                              <input type="text" class="form-control" id="packagerate" name="packagerate" required placeholder="Enter Package Rate" value="<?php //echo $result->alttagimg1;?>">
                                                          </div>
                                                      </div>


                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Package Type:</label>
                                                              <select class="form-control" placeholder="Enter Package Type" id="packagetype" name="packagetype"  data-bs-original-title="" title="" required>
                                                              <option value=''>Select Package Type</option>
                                                                <option value="1">Package </option>
                                                                <option value="2">Couple's Retreat</option>
                                                                <option value="3">Premium Packages</option>
                                                              </select>
                                                          </div>
                                                          <div class="col-md-6">
                                                              <label for="alttagimg1" class="form-label text-primary">Package Title:</label>
                                                              <input type="text" class="form-control" id="packagetitle" name="packagetitle" required placeholder="Enter Package Title" value="<?php //echo $result->alttagimg1;?>">
</div>
                                                      </div-->


                                                      <div class="row mb-3">
                                                          <div class="col-md-6">
                                                              <label for="contact-person" class="form-label text-primary">Enter Packages:</label>
                                                              <select class="form-control" placeholder="Enter Packages" id="packagesim" name="packagesim"   data-bs-original-title="" title="" required>
                                                              <option value=''>Select Packages</option>
                                                              <?php 
                                                    
                                                    
                                                    
                                                    foreach($result as $res){?>
                                                     <option value="<?php echo $res['contentid'];?>" <?php if ($res['contentid']==$resultrow->packageid){?> selected <?php }?>><?php echo $res['title'];?></option>

                                                    <?php }?>
                                                                <!--option value="1">Package </option>
                                                                <option value="2">Couple's Retreat</option>
                                                                <option value="3">Premium Packages</option-->
                                                              </select>
                                                          </div>


                                                          <div class="col-md-6">
                                                      <label for="status" class="form-label text-primary">Status:</label>   
                                                          <select class="form-control" placeholder="Select Status" name="status" id="status"  data-bs-original-title="" title="" required>
                                                                <option value=''>Select Status</option>
                                                                <option value="1" <?php if ($resultrow->active=='1'){?> selected <?php }?>>Active </option>
                                                                <option value="0" <?php if ($resultrow->active=='0'){?> selected <?php }?>>Inactive </option>
</select> </div>
                                                        
                                                      </div>
                                                      <div class="row mb-3">
                                                          <label for="address" class="form-label text-primary">Enter Package Details Description:</label>
                                                          <textarea class="form-control" id="desc5" name="desc5" rows="3" placeholder="Enter Package Details Description" required maxlength="170"><?php echo $resultrow->desc5;?></textarea>
                                                      </div>

                                                     
                                                     
                                                      <div class="row mb-3">
                                                          <label for="address" class="form-label text-primary">Enter Famous Places Description:</label>
                                                          <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Description1" required maxlength="170"><?php echo $resultrow->famousplaces;?></textarea>
                                                      </div>
                                                    

                                                      <div class="row mb-3">
                                                          <label for="address" class="form-label text-primary">Enter cityvisit Description:</label>
                                                          <textarea class="form-control" id="description2" name="description2" rows="3" placeholder="Enter Description2" required maxlength="170"><?php echo $resultrow->cityvisit;?></textarea>
                                                      </div>


                                                      <div class="row mb-3">
                                                          <label for="address" class="form-label text-primary">Enter rooms Description:</label>
                                                          <textarea class="form-control" id="description3" name="description3" rows="3" placeholder="Enter Description3" required maxlength="170"><?php echo $resultrow->rooms;?></textarea>
                                                      </div>


                                                      <div class="row mb-3">
                                                          <label for="address" class="form-label text-primary">Enter food Description:</label>
                                                          <textarea class="form-control" id="description4" name="description4" rows="3" placeholder="Enter Description4" required maxlength="170"><?php echo $resultrow->food;?></textarea>
                                                      </div>
                                                      
                                                      <a class="btn btn-primary me-3" href="<?php echo base_url().'Welcome/listpackagedetails';?>" data-bs-original-title="" title="">View/Edit  </a>
                                                      
                                                      <button type="submit" class="btn btn-primary" id="uploadsub" >Submit</button>
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
$('#edit').on('submit', function (e) {
    e.preventDefault();
    //alert("add");
       var file_data1 = $('#image1').prop('files')[0];
       
        var title1=$('#title1').val();
        var status=$("#status").val();
       
        var title2=$('#title2').val();
        var title3=$('#title3').val();
        var title4=$('#title4').val();
        var id=$('#id').val();
       var description=$('#description').val();
       var description2=$('#description2').val();
       var description3=$('#description3').val();
       var description4=$('#description4').val();
       var desc5=$('#desc5').val();
        var alttagimg1=$("#alttagimg1").val();
        //var packagetype=$("#packagetype").val();
        var packagetitle=$('#packagetitle').val();
        var packagesim=$('#packagesim').val();
        var desc5=$('#desc5').val();
        var form_data = new FormData();
        form_data.append('image1', file_data1);
        form_data.append('title2',title2);
        form_data.append('description',description);
        form_data.append('description2',description2);
        form_data.append('description3',description3);
        form_data.append('description4',description4);
        form_data.append('desc5',desc5);
        form_data.append('alttag1',alttagimg1);
        form_data.append('status',status);
        form_data.append('id',id);
        form_data.append('title3',title3);
        form_data.append('title4',title4);
        form_data.append('title1',title1);
        form_data.append('package',packagesim);
        form_data.append('desc5',desc5);
       
        $.ajax({
            url: "<?php echo base_url().'Welcome/editpackagesdetailsprocess';?>", // point to server-side controller method
            dataType: 'text', // what to expect back from the server
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (response) {
                $('#image1').val('');
               
                $('input[type=text]').each(function() {
        $(this).val('');
    });
    $('textarea').each(function() {
        $(this).val('');
    });

    $('select').each(function() {
        $(this).val('');
    });
    
    window.location.href ="<?php echo base_url().'Welcome/listpackagedetails';?>";
            },
            error: function (response) {
                window.location.href ="<?php echo base_url().'Welcome/listpackagedetails';?>";
            }
        });
    });






</script>

    </body>
    