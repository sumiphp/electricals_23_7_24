 <!-- ======= Sidebar ======= -->
 <div class="other-side">

<div class="modal-menu">
    <a href="#" data-bs-toggle="modal" data-bs-target="#myModal2">
        <i class="flaticon-menu"></i>
    </a>
</div>
</div>

<!-- Start Sidebar Modal -->
<div class="sidebar-modal">  
<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                        <i class="bx bx-x"></i>
                    </span>
                </button>
                <h2 class="modal-title" id="myModalLabel2">
                    <a href="<?php echo base_url().'Welcome/dashboard';?>">
                       <!--<img src="<?php //echo base_url().'Pocket/assets/img/logo.png';?>" class="modal-logo1" alt="Logo">-->

                       <img src="<?php echo base_url().'uploads/logo/'.$siteinf->logoimg;?>" class="modal-logo1" alt="<?php echo $siteinf->alttagimg1;?>">
                    </a>
                </h2>
            </div>
            
            <div class="modal-body" id="navbarSupportedContent">
                <nav class="sidebar card py-2 mb-4">
                    <ul class="nav-links">
                        <li>
                          <a href="<?php echo base_url().'Welcome/dashboard';?>">
                            <i class='bx bx-grid-alt' ></i>
                            <span class="link_name">Dashboard</span>
                          </a>
                         
                        </li>
                        <li class="active">
                          <div class="iocn-link">
                            <a href="#">
                              <i class='bx bx-collection' ></i>
                              <span class="link_name">Core Content</span>
                            </a>
                            <i class='bx bxs-chevron-down arrow' ></i>
                          </div>
                          <ul class="sub-menu">
                           
                            <li><a href="<?php echo base_url().'Welcome/listsiteinformation';?>">Primary Info / Logo & Favicon </a></li>
                           
                            <li><a href="core-content-email.html">Site Emails / Contact Details </a></li>
                            <li><a href="<?php echo base_url().'Welcome/listsocialmedialinks';?>">Social Media Links / Meta Tages</a></li>
                            
                          </ul>
                        </li>
                        <li>
                          <div class="iocn-link">
                            <a href="#">
                              <i class='bx bx-book-alt' ></i>
                              <span class="link_name">Page Content</span>
                            </a>
                            <i class='bx bxs-chevron-down arrow' ></i>
                          </div>
                          <ul class="sub-menu">
                          
                                <li><a href="<?php echo base_url().'Welcome/listhomepage';?>">Home Page</a></li>
                                <li><a href="<?php echo base_url().'Welcome/listaboutus';?>">About Us</a></li>
                              
                               
                                <li><a href="<?php echo base_url().'Welcome/listcontactus';?>">Contact Page</a></li>
                                                      
                          </ul>
                        </li>               
                      
                    

                              <li>
                              <a href="<?php echo base_url().'Welcome/addfeatureupdate';?>">
                                <i class='bx bx-compass' ></i>
                                <span class="link_name">Add Feature Icon</span>
                              </a>
                              
                            </li>

                           
                            <li>
                              <a href="<?php echo base_url().'Welcome/adddestination';?>">
                                <i class='bx bx-compass' ></i>
                                <span class="link_name">Add Works</span>
                              </a>
                              
                            </li>
                            <li>
                              <a href="<?php echo base_url().'Welcome/addtourservices';?>">
                                <i class='bx bx-compass' ></i>
                                <span class="link_name">Add Services</span>
                              </a>
                              
                            </li>

                            


                        
                        <li>
                                <a href="<?php echo base_url().'Welcome/addcarousel';?>">
                                  <i class='bx bx-compass'></i>
                                  <span class="link_name">Add Carousal</span>
                                </a>
                              
                              </li>
                        <li>

                        <li>
                                <a href="<?php echo base_url().'Welcome/addauthority';?>">
                                  <i class='bx bx-compass'></i>
                                  <span class="link_name">Add Clients</span>
                                </a>
                              
                              </li>
                              <li>

                                <a href="<?php echo base_url().'Welcome/addpackages';?>">
                                  <i class='bx bx-compass'></i>
                                  <span class="link_name">Add Advertisement</span>
                                </a>
                              
                              </li>
                      
                        <li>
                              <a href="<?php echo base_url().'Welcome/addtestimonials';?>">
                                <i class='bx bx-compass' ></i>
                                <span class="link_name">Add Testimonials</span>
                              </a>
                              
                            </li>
                            <li>
                              <a href="<?php echo base_url().'Welcome/addteammembers';?>">
                                <i class='bx bx-compass' ></i>
                                <span class="link_name">Add Team Members</span>
                              </a>
                              
                            </li>
                            <li>
                              <a href="<?php echo base_url().'Welcome/addfaq';?>">
                                <i class='bx bx-compass' ></i>
                                <span class="link_name">Add Categories</span>
                              </a>
                              
                            </li>
                       
                            <li>
                              <a href="<?php echo base_url().'Welcome/listcontactenquiries';?>">
                                <i class='bx bx-history'></i>
                                <span class="link_name">Contact Enquiry</span>
                              </a>
                            
                            </li>
                          

                            
                            <li>
                              <div class="iocn-link">
                                <a href="#">
                                  <i class='bx bx-plug' ></i>
                                  <span class="link_name">Newsletter</span>
                                </a>
                                <i class='bx bxs-chevron-down arrow' ></i>
                              </div>
                              <ul class="sub-menu">
                                <li><a class="link_name" href="#">Plugins</a></li>
                                <li><a href="<?php echo base_url().'Welcome/newsletter';?>">Newsletter View</a></li>
                                <li><a href="<?php echo base_url().'Welcome/newslettersubscribers';?>">Newsletter Subscribers</a></li>
                              
                              </ul>
                            </li>
                           


                        <li>
                                <a href="<?php echo base_url().'index.php/Welcome/logout';?>">
                                  <i class='bx bx-history'></i>
                                  <span class="link_name">Logout</span>
                                </a>
                              
                              </li>
                        
                    
                  </ul>
                    </nav>
            </div>
        </div>
    </div>
</div>
</div>
<!-- End Sidebar Modal -->