<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
        parent::__construct();         
		 $this->load->library('session'); 
         $this->load->model('Servicesmodel','sm');
		 $this->load->library("pagination");
		 $this->load->library('upload');
		 //$this->load->database();
		 //$this->session->keep_flashdata('flash_msg'); 
		 $this->db2=$this->load->database('default1', True);			 
		

    }


	public function index()
	{
		//$this->load->view('welcome_message');
		//echo "hello";
		//die;
		$this->load->model('Servicesmodel');
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/sign-in',$data);
	}



	public function listteammembers(){
		if( $this->session->has_userdata('username')) {					
		}
		else{
		  redirect("welcome/services");
		}
	$config = array();
	$config["base_url"] = base_url() . "Welcome/listteammembers";
	$config["total_rows"]=$this->sm->get_countdata('teammembers');
		$config["per_page"] = 10;
		$config["uri_segment"] = 3;
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["links"] = $this->pagination->create_links();
		//$data['result']=$this->sm->get_featureupdate($config["per_page"], $page);	
		//$data['result']=$this->sm->get_solutions($config["per_page"], $page);
		//$this->db2->from('problems');
		//$query = $this->db2->get();
		//$data['resultphone']=$query->row();
		$data['result']=$this->sm->get_data($config["per_page"], $page,'teammembers');
	$this->db2->from('contactus');
		$query = $this->db2->get();
		$data['resultphone']=$query->row();
		$data['contactus']=$this->sm->get_contactus();
		$data['newsletter']=$this->sm->get_newsletter();
		$data['siteinf']=$this->sm->get_siteinf();
		$data['socialmedia']=$this->sm->get_socialmedialinks();
	$this->load->view('services/listteammembers',$data);	
	
	
	}



	function addteammembers(){
		if( $this->session->has_userdata('username')) {					
		}
		else{
		  redirect("welcome/services");
		}
		/*$this->load->model('Servicesmodel');
		$this->db2->from('testimonials');
		$query = $this->db2->get();
		$data['result']=$query->result_array();*/ 
		$data['contactus']=$this->sm->get_contactus();
		$data['newsletter']=$this->sm->get_newsletter();
		$data['siteinf']=$this->sm->get_siteinf();
		$this->load->view('services/addteammembers',$data);
	
	
	}


	function edittm(){
		if( $this->session->has_userdata('username')) {					
		}
		else{
		  redirect("welcome/services");
		}
		$this->load->model('Servicesmodel');
		$id=$this->uri->segment(3);
		$this->db2->where('socialmediaid',$id);
		$this->db2->from('teammembers');
		$query = $this->db2->get();
		$data['result']=$query->row();
		$data['contactus']=$this->sm->get_contactus();
		$data['newsletter']=$this->sm->get_newsletter();
		$data['siteinf']=$this->sm->get_siteinf();
		$this->load->view('services/edittm',$data);
	
	
	}


	public function deletetm(){
		$id=$_GET['id'];
		$this->db2->where('socialmediaid',$id);
		$this->db2->delete('teammembers');
		echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Team Members' : 'Team Members deleted Successfully';
	}

	public function addtmprocess(){

		$file_name=$_FILES['image1']['name'];
		//$newfile_name= preg_replace('/[^A-Za-z0-9]/', "", $file_name);
		//$//ext=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
		//$new_name = time().$file_name;
		$ext=pathinfo($file_name, PATHINFO_EXTENSION);
		$new_name = time().'teammembers'.'.'.$ext;
		$config['file_name'] = $new_name;
		 $config['upload_path'] = 'uploads/teammembers';
		 $config['allowed_types'] = 'gif|jpg|png|jpeg';	
		 $config['max_size'] = '1024'; //1 MB
		 $this->load->library('upload', $config);
		 $this->upload->initialize($config);
		 if (isset($_FILES['image1']['name'])) {
			 if (0 < $_FILES['image1']['error']) {
				 echo 'Error during file upload' . $_FILES['image1']['error'];
			 } else {
				 if (file_exists('uploads/teammembers/' .$new_name)) {
					 echo 'File already exists : uploads/teammembers/' .$new_name;
				 } else {
					 
					 if (!$this->upload->do_upload('image1')) {
						 //echo $this->upload->display_errors();
					 } else {
						 //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
					 }
				 }
			 }
		 } else {
			 echo 'Please choose a file';
		 }
		 
		 
	 
		 
		 $image1=$new_name;
		 $alttag1=$this->input->post('alttag1');
	 
		  $testtitle=$this->input->post('testtitle');
		  $testtitlear=$this->input->post('testtitlear');
		  $testtitle1=$this->input->post('testtitle1');
		  $testtitlear1=$this->input->post('testtitlear1');
		  $namear=$this->input->post('namear');
		   $placear=$this->input->post('placear');
		  //$rating=$this->input->post('rating');
		  //$description=$this->input->post('description');
		  
		  $name=$this->input->post('name');
		   $place=$this->input->post('place');
	 
		   
		   //$date=$this->input->post('date');
		   $status=$this->input->post('status');
		  $data = array(
			 'twitter'=>"$testtitlear",
			 'youtube'=>"$testtitlear1",
			  'namear'=>"$namear",
			  'designationar'=>"$placear",
			 'facebook'=>"$testtitle",
			 'instagram'=>"$testtitle1",
			  //'testimonial' =>"$description",
			  //'rating' =>"$rating",
			  'name'=>"$name",
			  'picture'=>$image1,'designation'=>$place,
			  //'date'=>$date,
			  'alttagimg1'=>"$alttag1",'active'=>$status		
		   );
		   
				 $this->db2->insert('teammembers', $data);
	 
		   echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Team Members' : '<b>Team Members added Successfully</b>';
	
	
	}
	
	
	
	
	public function edittmprocess(){
	
	
		$id=$this->input->post('id'); 
		$this->db2->where('socialmediaid',$id);
		$this->db2->select('*');
		$this->db2->from('teammembers');
		$query = $this->db2->get();
	   $imgdetails=$query->row();
	   $image11=$imgdetails->picture;
	
		$file_name=$_FILES['image1']['name'];
		//$newfile_name= preg_replace('/[^A-Za-z0-9]/', "", $file_name);
		//$//ext=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
		//$new_name = time().$file_name;
		$ext=pathinfo($file_name, PATHINFO_EXTENSION);
		$new_name = time().'teammembers'.'.'.$ext;
		$config['file_name'] = $new_name;
		 $config['upload_path'] = 'uploads/teammembers';
		 $config['allowed_types'] = 'gif|jpg|png|jpeg';	
		 $config['max_size'] = '1024'; //1 MB
		 $this->load->library('upload', $config);
		 $this->upload->initialize($config);
		 if (($_FILES["image1"]["name"])!=''){
		 if (isset($_FILES['image1']['name'])) {
			 if (0 < $_FILES['image1']['error']) {
				 echo 'Error during file upload' . $_FILES['image1']['error'];
			 } else {
				 if (file_exists('uploads/teammembers/' .$new_name)) {
					 echo 'File already exists : uploads/teammembers/' .$new_name;
				 } else {
					 
					 if (!$this->upload->do_upload('image1')) {
						 //echo $this->upload->display_errors();
					 } else {
						 //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
					 }
				 }
			 }
		 } else {
			 echo 'Please choose a file';
		 }
		 $image1=$new_name;
		}else{
	
			$image1=$image11;
	
		}
		 
		 
	 
		 
		 
		 $alttag1=$this->input->post('alttag1');
	 
		  $testtitle=$this->input->post('testtitle');
		  $testtitlear=$this->input->post('testtitlear');
		  $testtitle1=$this->input->post('testtitle1');
		  $testtitlear1=$this->input->post('testtitlear1');
		  $namear=$this->input->post('namear');
		   $placear=$this->input->post('placear');
		  //$rating=$this->input->post('rating');
		  //$description=$this->input->post('description');
		  
		  $name=$this->input->post('name');
		   $place=$this->input->post('place');
		   $id=$this->input->post('id');
	 
	 
		   
		   //$date=$this->input->post('date');
		   $status=$this->input->post('status');
		  $data = array(
			 'twitter'=>"$testtitlear",
			 'youtube'=>
			 "$testtitlear1",
			  'namear'=>"$namear",
			  'designationar'=>"$placear",
			 'facebook'=>"$testtitle",
			 'instagram'=>"$testtitle1",
			  //'testimonial' =>"$description",
			  //'rating' =>"$rating",
			  'name'=>"$name",
			  'picture'=>$image1,'designation'=>$place,
			  //'date'=>$date,
			  'alttagimg1'=>"$alttag1",'active'=>$status		
		   );
		   $this->db2->where('socialmediaid',$id);
				 $this->db2->update('teammembers', $data);
	 
		   echo ($this->db2->affected_rows() != 1) ? 'Error in Editing Team Members' : '<b>Team Members edited Successfully</b>';
	
	
	
	}

public function services(){	
	//echo "hello1";
	$this->load->model('Servicesmodel');
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/sign-in',$data);
	//$this->load->view('winsky/login',$data);
} 


public function dashboard(){	
	$this->load->model('Servicesmodel');
	//echo $this->session->userdata('username');
	$this->db2->where('active',1);
	$this->db2->select('*');
	$this->db2->from('packages');
	$query = $this->db2->get();
	$data['rowcountpackages'] = $query->num_rows();
	//$this->db2->where('active',1);
	$this->db2->select('*');
	$this->db2->from('bookingenquiries');
	$query = $this->db2->get();
	$data['rowcountbook'] = $query->num_rows();

	$this->db2->where('active',1);
	$this->db2->select('*');
	$this->db2->from('blogcontents');
	$query = $this->db2->get();
	$data['rowcountblogact'] = $query->num_rows();

	$this->db2->select('*');
	$this->db2->from('contactenquiries');
	$query = $this->db2->get();
	$data['rowcountcontactenquiries'] = $query->num_rows();

	$this->db2->select('*');
	$this->db2->from('enquiries');
	$query = $this->db2->get();
	$data['rowcountenquiries'] = $query->num_rows();
	$this->db2->where('active',1);
	$this->db2->select('*');
	$this->db2->from('testimonials');
	$query = $this->db2->get();
	$data['rowcounttest'] = $query->num_rows();



	//$this->db2->where('active',0);
	$this->db2->select('*');
	$this->db2->from('packageenquiries');
	$query = $this->db2->get();
	$data['rowcountpckenquiries'] = $query->num_rows();
	

	$this->db2->from('contactus');
    $query = $this->db2->get();
    $data['resultphone']=$query->row();

	$data['contactus']=$this->sm->get_contactus();
	/*if( $this->session->has_userdata('username')) {
					
			  }
			  else{
				redirect("welcome/services");
			  }*/
			  $data['newsletter']=$this->sm->get_newsletter();
			  $data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/dashboard',$data);
} 


public function loginprocess(){
	$services=$this->load->model('Servicesmodel');
	$this->load->library('session');
	$username=$this->input->post('username');
	$password=$this->input->post('password');	
	$pass=md5($password);
	//echo 
	//die;
	
    $user_detail=$this->sm->get_user($username,$pass);
	//die;
	 if ($user_detail==1){
		$this->session->set_userdata('username','admin');
		redirect("welcome/dashboard");
	 }else {
		$this->session->set_flashdata('flash_msg', 'Invalid User name and Password');
		redirect("welcome/services");
	 }
} 


public function logout(){
	$this->load->model('Servicesmodel');
	$this->session->sess_destroy();
	redirect("welcome/services");
}

public function addcategory(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('category');
    $query = $this->db2->get();
    $data['result']=$query->result_array(); 
	$this->db2->from('contactus');
    $query = $this->db2->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/add-category',$data);
}

public function editcategory(){
	if($this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$catid=$this->uri->segment(3);
	//die;
	$this->load->model('Servicesmodel');
	$this->db2->where('categoryid',$catid);
	$this->db2->from('category');
    $query = $this->db2->get();
    $data['result']=$query->row();
	
	$data['cat_detail']=$this->sm->get_categoriesall();
	$this->db2->from('contactus');
    $query = $this->db2->get();
    $data['resultphone']=$query->row();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['contactus']=$this->sm->get_contactus();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/edit-category',$data);
}

public function editsubcategory(){
	if($this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$subcatid=$this->uri->segment(3);
	//die;
	$this->load->model('Servicesmodel');
	$this->db2->where('subcategoryid',$subcatid);
	$this->db2->from('subcategory');
    $query = $this->db2->get();
    $data['result']=$query->row();
	
	$data['cat_detail']=$this->sm->get_categoriesall();
	$this->db2->from('contactus');
    $query = $this->db2->get();
    $data['resultphone']=$query->row();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['contactus']=$this->sm->get_contactus();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/edit-subcategory',$data);
}






public function categoryaddprocess(){

   
}
public function categoryeditprocess(){
	$productcategory=$this->input->post('productcategory');
	$productdesc=$this->input->post('productdescription');
	$catid=2;
	$data = array(
		'categoryname' =>"$productcategory",
		'categorydescription' =>"$productdesc",		
	 );
	 $this->db2->where('categoryid',$catid);
	 $this->db2->update('category', $data);
	 
	 echo ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Category not edited') : $this->session->set_flashdata('flash_msg', 'Category edited successfully');;



}


function upload_file() {

	//upload file
	/*$file_name=$_FILES['file']['name'];
	$new_name = time().$file_name;
	$config['file_name'] = $new_name;
 
 
 
	$config['upload_path'] = 'uploads';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';
	//$config['max_filename'] = '255';
	//$config['encrypt_name'] = TRUE;   // remove it for actual file name.
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['file']['name'])) {
		if (0 < $_FILES['file']['error']) {
			echo 'Error during file upload' . $_FILES['file']['error'];
		} else {
			if (file_exists('uploads/' . $new_name)) {
				echo 'File already exists : uploads/' . $new_name;
			} else {
				
				if (!$this->upload->do_upload('file')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}*/

	if (isset($_FILES['file']['name'])){
		$file_name=$_FILES['file']['name'];
	//$new_name = time().$file_name;
	$ext=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'category1st.'.$ext;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['file']['name'])) {
		if (0 < $_FILES['file']['error']) {
			echo 'Error during file upload' . $new_name;
		} else {
			if (file_exists('uploads' . $new_name)) {
				echo 'File already exists : uploads' . $new_name;
			} else {
				
				if (!$this->upload->do_upload('file')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		//echo 'Please choose a file';
	}

	$image1=$new_name;
}else{
	$image1='';
}
$productimg=$image1;



	$image1=$new_name;
	$productcategory=$this->input->post('productcategory');
	$productdesc=$this->input->post('productdescription');
	$alttag1=$this->input->post('alttag1');
	$status=$this->input->post('status');
	$metatag=$this->input->post('metatag');
	$productimg=$image1;
	$data = array(
		'categoryname' =>"$productcategory",
		'categorydescription' =>"$productdesc",
		'categoryimage'=>$productimg,'alttagimg1'=>"$alttag1",'active'=>"$status",'metatag'=>$metatag	
	 );
	 $this->db2->insert('category', $data);
	 echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Product' : '<b>Product Category added Successfully</b>';





}



function upload_filecatedit() {

	//upload file
	$file_name=$_FILES['file']['name'];
	if ($file_name!=''){
	//$new_name = time().$file_name;
	$ext=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'category1st.'.$ext;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';
	//$config['max_filename'] = '255';
	//$config['encrypt_name'] = TRUE;   // remove it for actual file name.
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['file']['name'])) {
		if (0 < $_FILES['file']['error']) {
			echo 'Error during file upload' . $_FILES['file']['error'];
		} else {
			if (file_exists('uploads/' . $new_name)) {
				echo 'File already exists : uploads/' . $new_name;
			} else {
				
				if (!$this->upload->do_upload('file')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	$productimg=$new_name;
}else{
	$productimg='';

}

	$alttag1=$this->input->post('alttag1');
	$productcategory=$this->input->post('productcategory');
	$productcategoryid=$this->input->post('productcategoryid');
	$productdesc=$this->input->post('productdescription');
	$status=$this->input->post('status');
	$metatag=$this->input->post('metatag');
	if ($productimg==''){

		$data = array(
			'categoryname' =>"$productcategory",
			'categorydescription' =>"$productdesc",
			'alttagimg1'=>"$alttag1",'active'=>"$status",'metatag'=>$metatag	
		 );

	}else{
	$data = array(
		'categoryname' =>"$productcategory",
		'categorydescription' =>"$productdesc",
		'categoryimage'=>$productimg,
		'alttagimg1'=>"$alttag1",'active'=>"$status",'metatag'=>$metatag		
	 );
	}
	 $this->db2->where('categoryid',$productcategoryid);
	 $this->db2->update('category', $data);
	 echo ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Category not edited') : $this->session->set_flashdata('flash_msg', 'Category edited successfully');


}



function upload_filesub() {

	//upload file
	
	/*$config['upload_path'] = 'uploads/subcategory';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';
	//$config['max_filename'] = '255';
	//$config['encrypt_name'] = TRUE;   // remove it for actual file name.
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['filesub']['name'])) {
		if (0 < $_FILES['filesub']['error']) {
			echo 'Error during file upload' . $_FILES['filesub']['error'];
		} else {
			if (file_exists('uploads/subcategory' . $_FILES['filesub']['name'])) {
				echo 'File already exists : uploads/' . $_FILES['filesub']['name'];
			} else {
				
				if (!$this->upload->do_upload('filesub')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}*/

	if (isset($_FILES['filesub']['name'])){
		$file_name=$_FILES['filesub']['name'];
	//$new_name = time().$file_name;
	$ext=pathinfo($_FILES["filesub"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'subcategory1st'.'.'.$ext;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/subcategory';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['filesub']['name'])) {
		if (0 < $_FILES['filesub']['error']) {
			echo 'Error during file upload' . $new_name;
		} else {
			if (file_exists('uploads/subcategory' . $new_name)) {
				echo 'File already exists : uploads/subcategory' . $new_name;
			} else {
				
				if (!$this->upload->do_upload('filesub')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		//echo 'Please choose a file';
	}

	$image1=$new_name;
}else{
	$image1='';
}
$productimg=$image1;

	/*if (isset($_FILES['filesubimg']['name'])) {
		if (0 < $_FILES['filesubimg']['error']) {
			echo 'Error during file upload' . $_FILES['filesubimg']['error'];
		} else {
			if (file_exists('uploads/subcategory' . $_FILES['filesubimg']['name'])) {
				echo 'File already exists : uploads/' . $_FILES['filesubimg']['name'];
			} else {
				
				if (!$this->upload->do_upload('filesubimg')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}*/
	if (isset($_FILES['filesubimg']['name'])){
		$file_name=$_FILES['filesubimg']['name'];
	//$new_name = time().$file_name;
	$ext=pathinfo($_FILES["filesubimg"]["name"], PATHINFO_EXTENSION);
	$new_name2 = time().'subcategory2nd'.'.'.$ext;
	$config2['file_name'] = $new_name2;
	$config2['upload_path'] = 'uploads/subcategory';
	$config2['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config2['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config2);
	$this->upload->initialize($config2);
	if (isset($_FILES['filesubimg']['name'])) {
		if (0 < $_FILES['filesubimg']['error']) {
			echo 'Error during file upload' . $new_name2;
		} else {
			if (file_exists('uploads/subcategory' . $new_name2)) {
				echo 'File already exists : uploads/subcategory' . $new_name2;
			} else {
				
				if (!$this->upload->do_upload('filesubimg')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		//echo 'Please choose a file';
	}

	$productimgsub=$new_name2;
}else{
	$productimgsub='';
}


	
$metatag=$this->input->post('metatag');
	//$productimgsub=$_FILES['filesubimg']['name'];
	 $productcategory=$this->input->post('prdcat');
	 $prdsubcat=$this->input->post('prdsubcat');
	 $prdsubdesc=$this->input->post('prdsubdesc');
	 $price=$this->input->post('price');
	 $subcatshortdesc=$this->input->post('prdsubshortdesc');
	 $alttag1=$this->input->post('alttag1');
	 $alttag2=$this->input->post('alttag2');
	 $status=$this->input->post('status');
	// form_data.append('price',price);
	 $data = array(
		 'subcategoryname' =>"$prdsubcat",
		 'categoryid' =>"$productcategory",
		 'subcatdesc'=>"$prdsubdesc",
		 'subcategoryimage'=>$productimg,
		 		'subcatbannerimage'=>$productimgsub,
				'subcatshortdesc'=>$subcatshortdesc,
				'price'=>$price,
				'currency'=>'AED','alttagimg1'=>"$alttag1",
				'alttagimg2'=>"$alttag2",'active'=>"$status",'metatag'=>$metatag	
	  );
	  $this->db2->insert('subcategory', $data);

	  echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Product Sub Category' : '<b>Product Sub Category added Successfully</b>';







}




function upload_filesubedit() {

	//upload file
	
	/*$config['upload_path'] = 'uploads/subcategory';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';
	//$config['max_filename'] = '255';
	//$config['encrypt_name'] = TRUE;   // remove it for actual file name.
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['filesub']['name'])) {
		if (0 < $_FILES['filesub']['error']) {
			echo 'Error during file upload' . $_FILES['filesub']['error'];
		} else {
			if (file_exists('uploads/subcategory' . $_FILES['filesub']['name'])) {
				echo 'File already exists : uploads/subcategory' . $_FILES['filesub']['name'];
			} else {
				
				if (!$this->upload->do_upload('filesub')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}


	if (isset($_FILES['filesubimg']['name'])) {
		if (0 < $_FILES['filesubimg']['error']) {
			echo 'Error during file upload' . $_FILES['filesubimg']['error'];
		} else {
			if (file_exists('uploads/subcategory' . $_FILES['filesubimg']['name'])) {
				echo 'File already exists : uploads/subcategory' . $_FILES['filesubimg']['name'];
			} else {
				
				if (!$this->upload->do_upload('filesubimg')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}*/
	//$productimg=$_FILES['filesub']['name'];
	//$productimgsub=$_FILES['filesubimg']['name'];
	$subcatid=$this->input->post('subcatid');
	$this->db2->where('subcategoryid',$subcatid);
	$this->db2->select('*');
    $this->db2->from('subcategory');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   
   $image11=$imgdetails->subcategoryimage;
   $image22=$imgdetails->subcatbannerimage;

	if (($_FILES['filesub']['name'])!=''){

		$file_ext = pathinfo($_FILES["filesub"]["name"],PATHINFO_EXTENSION);
		$new_name1 = time().'subcategory1st.'.$file_ext;
		 $config['file_name'] = $new_name1;
		 $config['upload_path'] = 'uploads/subcategory';
		 $config['allowed_types'] = 'gif|jpg|png|jpeg';	
		 $config['max_size'] = '1024'; //1 MB
		 $this->load->library('upload', $config);
		 $this->upload->initialize($config);
		 if (isset($_FILES['filesub']['name'])) {
			 if (0 < $_FILES['filesub']['error']) {
				 echo 'Error during file upload'.$new_name1;
			 } else {
				 if (file_exists('uploads/subcategory/'.$new_name1)) {
					 echo 'File already exists : uploads/subcategory/'.$new_name1;
				 } else {
					 
					 if (!$this->upload->do_upload('filesub')) {
						 //echo $this->upload->display_errors();
					 } else {
						 //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
					 }
				 }
			 }
			 $image1=$new_name1;
		 } else {
			 $image1=$image11;
		 }
		 
	 }
	 else{
		 $image1=$image11;
	 }


	 if (($_FILES['filesubimg']['name'])!=''){

		$file_ext = pathinfo($_FILES['filesubimg']['name'],PATHINFO_EXTENSION);
		$new_name2 = time().'subcategory2nd'.'.'.$file_ext;
		 $config2['file_name'] = $new_name2;
		 $config2['upload_path'] = 'uploads/subcategory';
		 $config2['allowed_types'] = 'gif|jpg|png|jpeg';	
		 $config2['max_size'] = '1024'; //1 MB
		 $this->load->library('upload', $config2);
		 $this->upload->initialize($config2);
		 if (isset($_FILES['filesubimg']['name'])) {
			 if (0 < $_FILES['filesubimg']['error']) {
				 echo 'Error during file upload'.$new_name2;
			 } else {
				 if (file_exists('uploads/subcategory/'.$new_name2)) {
					 echo 'File already exists : uploads/subcategory/'.$new_name2;
				 } else {
					 
					 if (!$this->upload->do_upload('filesubimg')) {
						 //echo $this->upload->display_errors();
					 } else {
						 //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
					 }
				 }
			 }
			 $image2=$new_name2;
		 } else {
			 $image2=$image22;
		 }
		 
	 }
	 else{
		 $image2=$image22;
	 }

	 $productimg=$image1;
	 $productimgsub=$image2;
	
	 $productcategory=$this->input->post('prdcat');
	 $prdsubcat=$this->input->post('prdsubcat');
	 $prdsubdesc=$this->input->post('prdsubdesc');
	 $subcatid=$this->input->post('subcatid');
	 $status=$this->input->post('status');
	 $price=$this->input->post('price');
	 $subcatshortdesc=$this->input->post('prdsubshortdesc');
	 $alttag1=$this->input->post('alttag1');
	 $alttag2=$this->input->post('alttag2');
	 $metatag=$this->input->post('metatag');
	 $data = array(
		 'subcategoryname' =>"$prdsubcat",
		 'categoryid' =>"$productcategory",
		 'subcatdesc'=>"$prdsubdesc",
		 'subcategoryimage'=>$productimg,
		 'subcatbannerimage'=>$productimgsub,
		 'subcatshortdesc'=>$subcatshortdesc,
				'price'=>$price,
				'currency'=>'AED','alttagimg1'=>"$alttag1",
				'alttagimg2'=>"$alttag2",'active'=>"$status",'metatag'=>$metatag			
	  );
	/*}else if (($productimg!='') && ($productimgsub=='')){
		$data = array(
			'subcategoryname' =>"$prdsubcat",
			'categoryid' =>"$productcategory",
			'subcatdesc'=>"$prdsubdesc",
			'subcategoryimage'=>$productimg,
			//'subcatbannerimage'=>$productimgsub,
			'subcatshortdesc'=>$subcatshortdesc,
				   'price'=>$price,
				   'currency'=>'AMD','alttagimg1'=>"$alttag1",
				   'alttagimg2'=>"$alttag2",'active'=>"$status"		
		 );

	}
	else if (($productimg=='') && ($productimgsub!='')){
		$data = array(
			'subcategoryname' =>"$prdsubcat",
			'categoryid' =>"$productcategory",
			'subcatdesc'=>"$prdsubdesc",
			//'subcategoryimage'=>$productimg,
			'subcatbannerimage'=>$productimgsub,
			'subcatshortdesc'=>$subcatshortdesc,
				   'price'=>$price,
				   'currency'=>'AMD','alttagimg1'=>"$alttag1",
				   'alttagimg2'=>"$alttag2",'active'=>"$status"		
		 );

		 //print_r($data);

	}
	else{
		$data = array(
			'subcategoryname' =>"$prdsubcat",
			'categoryid' =>"$productcategory",
			'subcatdesc'=>"$prdsubdesc",
			'subcatshortdesc'=>$subcatshortdesc,
				'price'=>$price,
				'currency'=>'AMD','alttagimg1'=>"$alttag1",
				'alttagimg2'=>"$alttag2",'active'=>"$status"			
		 );

	}*/
	  $this->db2->where('subcategoryid',$subcatid);
	  $this->db2->update('subcategory', $data);

	  //echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Product Sub Category' : '<b>Product Sub Category added Successfully</b>';
	  echo ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Sub Category not edited') : $this->session->set_flashdata('flash_msg', 'Sub Category edited successfully');



}




public function listcategory(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$config = array();
	$config["base_url"] = base_url() . "Welcome/listcategory";
	$config["total_rows"] = $this->sm->get_count();
	$config["per_page"] = 10;
	$config["uri_segment"] = 3;
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["links"] = $this->pagination->create_links();	
	$data['result']=$this->sm->get_categories($config["per_page"], $page);
	$this->db2->from('contactus');
    $query = $this->db2->get();
    $data['resultphone']=$query->row();	
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/listcategory',$data);
}


public function listsubcategory(){	
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
    $config = array();
	$config["base_url"] = base_url() . "Welcome/listsubcategory";
	$config["total_rows"] = $this->sm->get_countsub();
	$config["per_page"] = 10;
	$config["uri_segment"] = 3;
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["links"] = $this->pagination->create_links();	
	$data['result']=$this->sm->get_subcategories($config["per_page"], $page);
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/listsubcategory',$data);
}

/*public function deletecategory(){
	$catid=$_GET['catid'];
	$this->db2->where('categoryid',$catid);
	$this->db2->delete('category');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Product Category' : 'Product Category deleted Successfully';
}

public function deletesubcategory(){
	$subcatid=$_GET['subcatid'];
	$this->db2->where('subcategoryid',$subcatid);
	$this->db2->delete('subcategory');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Product Sub Category' : 'Product Sub Category deleted Successfully';
}*/

public function deletepack(){
	$id=$_GET['id'];
	$this->db2->where('packageid',$id);
	$this->db2->delete('packagesgallery');

	$this->db2->where('packageid',$id);
	$this->db2->delete('packagesdetails');

	$this->db2->where('contentid',$id);
	$this->db2->delete('packages');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Packages' : 'Packages deleted Successfully';
}
public function deletecoupledt(){
	$id=$_GET['id'];
	$this->db2->where('contentid',$id);
	$this->db2->delete('packages');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Package' : 'Package deleted Successfully';

}

public function subcategoryaddprocess(){
	/*$productcategory=$this->input->post('prdcat');
	$prdsubcat=$this->input->post('prdsubcat');
	$prdsubdesc=$this->input->post('prdsubdesc');
	$data = array(
		'subcategoryname' =>"$prdsubcat",
		'categoryid' =>"$productcategory",
		'subcatdesc'=>"$prdsubdesc",		
	 );
	 $this->db2->insert('subcategory', $data);
	 echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Product Subcategory' : 'Product Sub Category added Successfully';*/
}


public function listenquiries(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listenquiries";
$config["total_rows"] = $this->sm->get_countenquiries();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_enquiries($config["per_page"],$page);
$this->db2->from('contactus');
    $query = $this->db2->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listenquiries',$data);	
}


public function listpckenquiries(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listpckenquiries";
$config["total_rows"] = $this->sm->get_countenquiries();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_enquiries($config["per_page"],$page);
$this->db2->from('contactus');
    $query = $this->db2->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listpckenquiries',$data);	
}




public function listbookenquiries(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listbookenquiries";
$config["total_rows"] = $this->sm->get_countbookenquiries();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_bookenquiries($config["per_page"],$page);
$this->db2->from('contactus');
    $query = $this->db2->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
//$this->load->view('services/listbookenquiries',$data);
$this->load->view('services/listbookings',$data);		
}


public function listflightenquiries(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listflightenquiries";
$config["total_rows"] = $this->sm->get_countflightenquiries();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_flightenquiries($config["per_page"],$page);
$this->db2->from('contactus');
    $query = $this->db2->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
//$this->load->view('services/listbookenquiries',$data);
$this->load->view('services/listflightenquiries',$data);		
}


public function deleteenquiries(){
	$id=$_GET['id'];
	$this->db2->where('enquiryid',$id);
	$this->db2->delete('packageenquiries');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Enquiries' : 'Enquiries deleted Successfully';
}


public function deletebookenquiries(){
	$id=$_GET['id'];
	$this->db2->where('enquiryid',$id);
	$this->db2->delete('bookingenquiries');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Enquiries' : 'Enquiries deleted Successfully';
}

public function deletecontactenquiries(){
	$id=$_GET['id'];
	$this->db2->where('enquiryid',$id);
	$this->db2->delete('contactenquiries');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Contact Enquiries' : 'Contact Enquiries deleted Successfully';

}



public function listcontactenquiries(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listcontactenquiries";
$config["total_rows"] = $this->sm->get_countcontactenquiries();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_contactenquiries($config["per_page"],$page);
$this->db2->from('contactus');
    $query = $this->db2->get();
    $data['resultphone']=$query->row();	
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listcontactenquiries',$data);
}

function addservices(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('category');
    $query = $this->db2->get();
    $data['result']=$query->result_array();
	$data['contactus']=$this->sm->get_contactus(); 
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/addservices',$data);

}

function addtestimonials(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('testimonials');
    $query = $this->db2->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/addtestimonials',$data);


}

function edittestimonials(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$testid=$this->uri->segment(3);
	$this->load->model('Servicesmodel');
	$this->db2->where('testimonialid',$testid);
	$this->db2->from('testimonials');
    $query = $this->db2->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/edittestimonials',$data);


}
function editblog(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$blogid=$this->uri->segment(3);
	$this->load->model('Servicesmodel');
	$this->db2->where('contentid',$blogid);
	$this->db2->from('blogcontents');
    $query = $this->db2->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editblogcontents',$data);


}





function addb2logcontent(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('blogcontents');
    $query = $this->db2->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/addb2logcontents',$data);


}
function editblogcontent(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$blogid=$this->uri->segment(3);
	$this->db2->where('contentid',$blogid);
	$this->db2->from('blogcontents');
    $query = $this->db2->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editblogcontent',$data);


}






function addfaq(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('faq');
    $query = $this->db2->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/addfaq',$data);

}



function addflightdestinations(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('faq');
    $query = $this->db2->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/addflightdestinations',$data);

}

function listflightdestination(){


	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listflightdestination";
$config["total_rows"] = $this->sm->get_countflight();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_flightadmin($config["per_page"],$page);
$data['contactus']=$this->sm->get_contactus();
$data['newsletter']=$this->sm->get_newsletter();
$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listflightdestination',$data);





}


function listduration(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listduration";
$config["total_rows"] = $this->sm->get_countduration();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_durationadmin($config["per_page"],$page);
$data['contactus']=$this->sm->get_contactus();
$data['newsletter']=$this->sm->get_newsletter();
$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listduration',$data);





}





function addproducttype(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	//$this->db2->from('faq');
    //$query = $this->db2->get();
    //$data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/addproducttype',$data);

}


function editfaq(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$id=$this->uri->segment(3);
	//echo $id;
	//die;
	$this->load->model('Servicesmodel');
	$this->db2->from('faq');
	$this->db2->where('faqid',$id);
    $query = $this->db2->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editfaq',$data);

}


function editflightdest(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$id=$this->uri->segment(3);
	//echo $id;
	//die;
	$this->load->model('Servicesmodel');
	$this->db2->from('touristplaces');
	$this->db2->where('placeid',$id);
    $query = $this->db2->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editflightdest',$data);

}







function editproducttype(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$id=$this->uri->segment(3);
	//echo $id;
	//die;
	$this->load->model('Servicesmodel');
	$this->db2->from('producttype');
	$this->db2->where('producttypeid',$id);
    $query = $this->db2->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editproducttype',$data);

}







function addmenu(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('menus');
    $query = $this->db2->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['pmenus']=$this->sm->get_parentmenus();
	$data['siteinf']=$this->sm->get_siteinf();
	//print_r($data['pmenus']);
	$this->load->view('services/addmenu',$data);

}

function editmenu(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$id=$this->uri->segment(3);
	//echo $id;
	//die;
	$this->load->model('Servicesmodel');
	$this->db2->from('menus');
	$this->db2->where('menuid',$id);
    $query = $this->db2->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['pmenus']=$this->sm->get_parentmenus();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editmenu',$data);

}




function editservices(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('services');
    $query = $this->db2->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editservices',$data);

}


function edithomepage(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('homepage');
    $query = $this->db2->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/edithomepage',$data);

}

function editaboutus(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('aboutus');
    $query = $this->db2->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editaboutus',$data);

}




public function addservicesprocess(){

	$config['upload_path'] = 'uploads';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	
	

	if (isset($_FILES['image2']['name'])) {
		if (0 < $_FILES['image2']['error']) {
			echo 'Error during file upload' . $_FILES['image2']['error'];
		} else {
			if (file_exists('uploads/' . $_FILES['image2']['name'])) {
				echo 'File already exists : uploads/' . $_FILES['image2']['name'];
			} else {
				
				if (!$this->upload->do_upload('image2')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	$image1=$_FILES['image1']['name'];
	$image2=$_FILES['image2']['name'];

	 $maintitle=$this->input->post('maintitle');
	 $subtitle=$this->input->post('subtitle');
	 $description=$this->input->post('description');
	 $data = array(
		 'maintitle' =>"$maintitle",
		 'subtitle' =>"$subtitle",
		 'description'=>"$description",
		 'Image1'=>$image1,'Image2'=>$image2		
	  );
	  //print_r($data);
	  $this->db2->insert('services', $data);

	  echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Product Services' : '<b>Product Services added Successfully</b>';


}

public function addfaqprocess(){
	$faqtitle=$this->input->post('faqtitle');
	$status=$this->input->post('status');

	$description=$this->input->post('description');
	$data = array(
		'faqtitle' =>"$faqtitle",
		//'subtitle' =>"$subtitle",
		'faqdescription'=>"$description"
		,'active'=>"$status"
	 );
	 //print_r($data);
	 $this->db2->insert('faq', $data);

	 echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Faq' : '<b>Faq added Successfully</b>';
}

public function addflightdestprocess(){
	$place=$this->input->post('place');
	$status=$this->input->post('status');

	$description=$this->input->post('description');
	$data = array(
		'place' =>"$place"
		//,
		//'subtitle' =>"$subtitle",
		//'faqdescription'=>"$description"
		,'active'=>"$status"
	 );
	 //print_r($data);
	 $this->db2->insert('touristplaces', $data);

	 echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Destination' : '<b>Destination added Successfully</b>';
}




public function adddurationprocess(){
	$duration=$this->input->post('duration');
	$status=$this->input->post('status');

	//$description=$this->input->post('description');
	$data = array(
		'durationperiod' =>"$duration"
		//,
		//'subtitle' =>"$subtitle",
		//'faqdescription'=>"$description"
		,'active'=>"$status"
	 );
	 //print_r($data);
	 $this->db2->insert('tourduration', $data);

	 echo ($this->db2->affected_rows() != 1) ? 'Error in Adding duration' : '<b>Duration added Successfully</b>';
}













public function addproducttypeprocess(){
	$producttypetitle=$this->input->post('producttypetitle');
	$status=$this->input->post('status');

	$description=$this->input->post('description');
	$data = array(
		'producttypetitle' =>"$producttypetitle",
		//'subtitle' =>"$subtitle",
		'producttypedesc'=>"$description"
		,'active'=>"$status"
	 );
	 //print_r($data);
	 $this->db2->insert('producttype', $data);

	 echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Product Type' : '<b>Product Type added Successfully</b>';
}

public function addmenuprocess(){

	if (isset($_FILES['image1']['name'])){
		$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'menu'.'.'.$ext;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/menu';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $new_name;
		} else {
			if (file_exists('uploads/menu' . $new_name)) {
				echo 'File already exists : uploads/menu' . $new_name;
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		//echo 'Please choose a file';
	}

	$image1=$new_name;
}else{
	$image1='';
}


	$alttag1=$this->input->post('alttag1');

	$menuname=$this->input->post('menuname');
	$menutype=$this->input->post('menutype');
	$menuurl=$this->input->post('menuurl');
	$status=$this->input->post('status');
	$pmenu=$this->input->post('pmenu');
	$orderno=$this->input->post('orderno');
	$data = array(
		'orderno' =>"$orderno",
		'menuname' =>"$menuname",
		'menutype' =>"$menutype",
		'url'=>"$menuurl",
		'status'=>$status,'parentmenuid'=>$pmenu,'menuimg'=>$image1,'alttagimg1'=>$alttag1		
	 );
	 //print_r($data);
	 $this->db2->insert('menus', $data);

	 echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Menu' : '<b>Menu added Successfully</b>';


}

public function editmenuprocess(){

	if ($_FILES['image1']['name']!=''){

		$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'menu'.'.'.$ext;
	$config['file_name'] = $new_name;
	
	$config['upload_path'] = 'uploads/menu';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/menu' .$new_name)) {
				echo 'File already exists : uploads/menu'.$new_name;
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
					$image1=$new_name;
				}


			}
		}
	} else {
		//echo 'Please choose a file';
	}
}
else{
	$image1='';
}
	


	$alttag1=$this->input->post('alttagimg1');
	$menuid=$this->input->post('menuid');
	$menuname=$this->input->post('menuname');
	$menutype=$this->input->post('menutype');
	$menuurl=$this->input->post('menuurl');
	$status=$this->input->post('status');
	$pmenu=$this->input->post('pmenu');
	$orderno=$this->input->post('orderno');
	if ($image1!=''){
		$data = array(
			'orderno' =>"$orderno",
			'menuname' =>"$menuname",
			'menutype' =>"$menutype",
			'url'=>"$menuurl",
			'status'=>$status,'parentmenuid'=>$pmenu,'menuimg'=>$image1,'alttagimg1'=>$alttag1		
		 );



	}else{
	$data = array(
		'orderno' =>"$orderno",
		'menuname' =>"$menuname",
		'menutype' =>"$menutype",
		'url'=>"$menuurl",
		'status'=>$status,'parentmenuid'=>$pmenu,'alttagimg1'=>$alttag1		
	 );
	}
	 //print_r($data);
	 $this->db2->where('menuid',$menuid);
	 $this->db2->update('menus', $data);

	  ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Menu') : $this->session->set_flashdata('flash_msg', 'Menu Edited Successfully');

 redirect("welcome/listmenus");


}








public function addqualityprocess(){
	$title=$this->input->post('title');
	$status=$this->input->post('status');
	$orderno=$this->input->post('orderno');
	$data = array(
		'quality' =>"$title",
		'active' =>"$status",
		'orderno'=>"$orderno",
		//'Image1'=>$image1,'Image2'=>$image2		
	 );
	 //print_r($data);
	 $this->db2->insert('quality', $data);

	 echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Quality' : '<b>Quality added Successfully</b>';


}

public function editfaqprocess(){
	$faqtitle=$this->input->post('faqtitle');
	$faqid=$this->input->post('faqid');
	$description=$this->input->post('description');
	$status=$this->input->post('status');
	$data = array(
		'faqtitle' =>"$faqtitle",
		//'subtitle' =>"$subtitle",
		'faqdescription'=>"$description"
		,'active'=>"$status"	
	 );
	 //print_r($data);
	 $this->db2->where('faqid',$faqid);
	 $this->db2->update('faq', $data);

	 echo ($this->db2->affected_rows() != 1) ? 'Error in Editing Faq' : '<b>Faq edited Successfully</b>';
}



public function editflightprocess(){
	$place=$this->input->post('place');
	$placeid=$this->input->post('placeid');
	//$description=$this->input->post('description');
	$status=$this->input->post('status');
	$data = array(
		'place' =>"$place"
		//,
		//'subtitle' =>"$subtitle",
		//'faqdescription'=>"$description"
		,'active'=>"$status"	
	 );
	 //print_r($data);
	 $this->db2->where('placeid',$placeid);
	 $this->db2->update('touristplaces', $data);

	 echo ($this->db2->affected_rows() != 1) ? 'Error in Editing touristplaces' : '<b>Touristplaces edited Successfully</b>';
}



public function addprdspecprocess(){

	$title=$this->input->post('title');
	$prdid=$this->input->post('prd');
	$value=$this->input->post('value');
	$status=$this->input->post('status');
	$orderno=$this->input->post('orderno');
	$data = array(
		'label' =>"$title",
		'orderno' =>"$orderno",
		'value'=>"$value"
		,'active'=>"$status",'productid'=>"$prdid"	
	 );
	 //print_r($data);
	 //$this->db2->where('prdspecid',$id);
	 $this->db2->insert('productspecifications', $data);

	  echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Product Specifications ' : '<b>Product Specifications  Adding Successfully</b>';





}

public function editprdspecprocess(){
	$title=$this->input->post('title');
	$id=$this->input->post('id');
	$value=$this->input->post('value');
	$status=$this->input->post('status');
	$orderno=$this->input->post('orderno');
	$prdid=$this->input->post('prd');
	$data = array(
		'label' =>"$title",
		'orderno' =>"$orderno",
		'value'=>"$value"
		,'active'=>"$status",'productid'=>"$prdid"	
	 );
	 //print_r($data);
	 $this->db2->where('prdspecid',$id);
	 $this->db2->update('productspecifications', $data);
	 ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Product Specifications') : $this->session->set_flashdata('flash_msg', 'Product Specifications Edited Successfully');
	  //($this->db2->affected_rows() != 1) ? 'Error in Editing Product Specifications ' : '<b>Product Specifications  edited Successfully</b>';
	  redirect("welcome/listprdspec");
}



public function editproducttypeprocess(){
	$producttypetitle=$this->input->post('title');
	$producttypeid=$this->input->post('producttypeid');
	$description=$this->input->post('description');
	$status=$this->input->post('status');
	$data = array(
		'producttypetitle' =>"$producttypetitle",
		//'subtitle' =>"$subtitle",
		'producttypedesc'=>"$description"
		,'active'=>"$status"	
	 );
	 //print_r($data);
	 $this->db2->where('producttypeid',$producttypeid);
	 $this->db2->update('producttype', $data);
	 ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Product Type') : $this->session->set_flashdata('flash_msg', 'Product Type Edited Successfully');
	 //($this->db2->affected_rows() != 1) ? 'Error in Editing Product Type' : '<b>Product Type edited Successfully</b>';
	 redirect("welcome/listproducttype");
}





public function editservicesprocess(){

	$this->db2->where('serviceid',1);
	$this->db2->select('*');
    $this->db2->from('services');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   $image1old=$imgdetails->Image1;
   $image2old=$imgdetails->Image2;
 
	/*$config1['upload_path'] = 'uploads/services';
	$config1['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config1['max_size'] = '1024'; //1 MB*/


	$file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);	
	$new_name = time().'services'.'.'.$file_ext;
	$config1['file_name'] = $new_name;
	$config1['upload_path'] = 'uploads/services';
	$config1['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config1['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config1);
	$this->upload->initialize($config1);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/services/'.$new_name)) {
				//echo 'File already exists : uploads/contactus/'.$new_name;
				$image1=$image1old;
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
					$image1=$new_name;
				}
				$image1=$image1old;

			}
		}
		$image1=$new_name;;

	} else {
		//echo 'Please choose a file';
		$image1=$image1old;

	}



	$file_ext2 = pathinfo($_FILES["image2"]["name"],PATHINFO_EXTENSION);	
	$new_name2 = time().'services2nd'.'.'.$file_ext2;
	$config2['file_name'] = $new_name2;
	$config2['upload_path'] = 'uploads/services';
	$config2['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config2['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config2);
	$this->upload->initialize($config2);
	if (isset($_FILES['image2']['name'])) {
		if (0 < $_FILES['image2']['error']) {
			echo 'Error during file upload' . $_FILES['image2']['error'];
		} else {
			if (file_exists('uploads/services/'.$new_name2)) {
				//echo 'File already exists : uploads/contactus/'.$new_name;
				$image2=$image2old;
			} else {
				
				if (!$this->upload->do_upload('image2')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
					$image2=$new_name2;
				}
				$image2=$image2old;

			}
		}
		$image2=$new_name2;

	} else {
		//echo 'Please choose a file';
		$image2=$image2old;

	}







	//$config1['file_name'] = $image2;

	/*$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/services' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/services' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		//$image1=time().$_FILES['image1']['name'];

			$image1=$_FILES['image1']['name'];
	} else {
	$image1=$image1old;
	}*/
	
	/*$this->load->library('upload', $config1);
	$this->upload->initialize($config1);

	if (isset($_FILES['image2']['name'])) {
		if (0 < $_FILES['image2']['error']) {
			echo 'Error during file upload' . $_FILES['image2']['error'];
		} else {
			if (file_exists('uploads/services' . $_FILES['image2']['name'])) {
				echo 'File already exists : uploads/services' . $_FILES['image2']['name'];
			} else {
				
				if (!$this->upload->do_upload('image2')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image2=$_FILES['image2']['name'];
	} else {
		$image2=$image2old;
	}*/
	
	
	 $maintitle=$this->input->post('maintitle');
	 $subtitle=$this->input->post('subtitle');
	 $description=$this->input->post('description');
	 $description2=$this->input->post('description2');
	 $description3=$this->input->post('description3');
	 $metatag=$this->input->post('metatag');
	 $alttag1=$this->input->post('alttag1');
	 $alttag2=$this->input->post('alttag2');
	 $data = array(
		'maintitle' =>"$maintitle",
		'subtitle' =>"$subtitle",
		'description'=>"$description",
		'description2'=>"$description2",
		'description3'=>"$description3",
		'metatag'=>"$metatag",
		'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
		'Image1'=>$image1
		,'Image2'=>$image2
				
	 );
	 /*if (($image1!='') && ($image2!='')){
	 $data = array(
		 'maintitle' =>"$maintitle",
		 'subtitle' =>"$subtitle",
		 'description'=>"$description",
		 'Image1'=>$image1,'Image2'=>$image2		
	  );
	}
	if (($image1!='') && ($image2=='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description",
			'Image1'=>$image1		
		 );
	   }
	   if (($image1=='') && ($image2!='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description",
			
			'Image2'=>$image2		
		 );
	   }
	   if (($image1=='') && ($image2=='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description",
					
		 );
	   }*/
	  //print_r($data);
	  //die;
	  $this->db2->where('serviceid',1);
	  $this->db2->update('services', $data);
	  echo ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Services') : $this->session->set_flashdata('flash_msg', 'Services Edited Successfully');
	  die;
	  //echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Product Services' : '<b>Product Services added Successfully</b>';


}


public function editsiteinformation(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('siteinformation');
    $query = $this->db2->get();
    $data['result']=$query->row();
	$data['contactus']=$this->sm->get_contactus(); 
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editsiteinformation',$data);




}

public function siteinfeditprocess(){
	$this->db2->select('*');
    $this->db2->from('siteinformation');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   
   $image11=$imgdetails->logoimg;
   $image22=$imgdetails->faviconimg;
   //$image3=$imgdetails->serviceimg;

   /*$config['upload_path'] = 'uploads/logo';
   $config['allowed_types'] = 'gif|jpg|png|jpeg';	
   $config['max_size'] = '1024'; //1 MB
   $this->load->library('upload', $config);
   $this->upload->initialize($config);
   if (isset($_FILES['image1']['name'])) {
	   if (0 < $_FILES['image1']['error']) {
		   echo 'Error during file upload' . $_FILES['image1']['error'];
	   } else {
		   if (file_exists('uploads/logo' . $_FILES['image1']['name'])) {
			   echo 'File already exists : uploads/logo' . $_FILES['image1']['name'];
		   } else {
			   
			   if (!$this->upload->do_upload('image1')) {
				   //echo $this->upload->display_errors();
			   } else {
				   //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
			   }
		   }
	   }
	   $image1=$_FILES['image1']['name'];
   } else {
	   $image1=$image11;
   }
   

   if (isset($_FILES['image2']['name'])) {
	   if (0 < $_FILES['image2']['error']) {
		   echo 'Error during file upload' . $_FILES['image2']['error'];
	   } else {
		   if (file_exists('uploads/logo' . $_FILES['image2']['name'])) {
			   echo 'File already exists : uploads/logo' . $_FILES['image2']['name'];
		   } else {
			   
			   if (!$this->upload->do_upload('image2')) {
				   //echo $this->upload->display_errors();
			   } else {
				   //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
			   }
		   }
	   }
	   $image2=$_FILES['image2']['name'];
   } else {
	   $image2=$image22;
   }
   if ($image1==''){
	$image1=$image11;
   }
   if ($image2==''){
	$image2=$image22;
   }*/

   
if (($_FILES["image1"]["name"])!=''){

   $file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);
   $new_name1 = time().'logo1st'.'.'.$file_ext;
	$config['file_name'] = $new_name1;
	$config['upload_path'] = 'uploads/logo';
	$config['allowed_types'] = 'gif|jpg|png|jpeg|ico';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload'.$new_name1;
		} else {
			if (file_exists('uploads/logo1st/'.$new_name1)) {
				echo 'File already exists : uploads/logo1st/'.$new_name1;
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image1=$new_name1;
	} else {
		$image1=$image11;
	}
	
}
else{
	$image1=$image11;
}
if (($_FILES["image2"]["name"])!=''){
	$file_ext = pathinfo($_FILES["image2"]["name"],PATHINFO_EXTENSION);
   $new_name2 = time().'logo2nd'.'.'.$file_ext;
	$config2['file_name'] = $new_name2;
	$config2['upload_path'] = 'uploads/logo';
	$config2['allowed_types'] = 'gif|jpg|png|jpeg|ico';	
	$config2['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config2);
	$this->upload->initialize($config2);
	if (isset($_FILES['image2']['name'])) {
		if (0 < $_FILES['image2']['error']) {
			echo 'Error during file upload'.$new_name2;
		} else {
			if (file_exists('uploads/logo/'.$new_name2)) {
				echo 'File already exists : uploads/logo/'.$new_name2;
			} else {
				
				if (!$this->upload->do_upload('image2')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image2=$new_name2;
	} else {
		$image2=$image22;
	}

   
}
else{
	$image2=$image22;
}


$sitedescription=$this->input->post('sitedescription');
$sitename=$this->input->post('sitename');
$sitetitle=$this->input->post('sitetitle');
   $data = array(
	'sitedescription' =>"$sitedescription",
	'sitename' =>"$sitename",
	'sitetitle'=>"$sitetitle",
	//'metatag'=>"$metatag",
	//'alttagimg1'=>"$alttag1",
	//'alttagimg2'=>"$alttag2",
	'faviconimg'=>$image2
	,'logoimg'=>$image1
			
 );

 $this->db2->where('siteinfid',1);
 $this->db2->update('siteinformation', $data);
($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Site Information') : $this->session->set_flashdata('flash_msg', 'Site Information Edited Successfully');

 redirect("welcome/listsiteinformation");



}

public function edithomepageprocess(){
	$this->db2->select('*');
    $this->db2->from('homepage');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->homepageimg1;
   $image22=$imgdetails->homepageimg2;
   $image33=$imgdetails->serviceimg;
   $image44=$imgdetails->homepageimg4;
   $file_name=$_FILES['image1']['name'];
   //$newfile_name= preg_replace('/[^A-Za-z0-9]/', "", $file_name);
   //$//ext=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
   $new_name = time().$file_name;
   $config['file_name'] = $new_name;
   //$config['remove_spaces'] = true;
	$config['upload_path'] = 'uploads/homepage';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/homepage' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/homepage' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		//$image1=$_FILES['image1']['name'];
		$image1=$new_name;
	} else {
		$image1=$image11;
	}
	
	$file_name2=$_FILES['image2']['name'];
   //$newfile_name= preg_replace('/[^A-Za-z0-9]/', "", $file_name);
   //$//ext=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
   $new_name2 = time().$file_name2;
   $config2['file_name'] = $new_name2;
   $config2['upload_path'] = 'uploads/homepage';
   $config2['allowed_types'] = 'gif|jpg|png|jpeg';	
   $config2['max_size'] = '1024'; //1 MB
   $this->load->library('upload', $config2);
   $this->upload->initialize($config2);
	if (isset($_FILES['image2']['name'])) {
		if (0 < $_FILES['image2']['error']) {
			echo 'Error during file upload' . $_FILES['image2']['error'];
		} else {
			if (file_exists('uploads/homepage' . $_FILES['image2']['name'])) {
				echo 'File already exists : uploads/homepage' . $_FILES['image2']['name'];
			} else {
				
				if (!$this->upload->do_upload('image2')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image2=$new_name2;
	} else {
		$image2=$image22;
	}
	

	
	/*$config4['upload_path'] = 'uploads/homepage';
	$config4['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config4['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config4);
	$this->upload->initialize($config4);
	 if (isset($_FILES['image4']['name'])) {
		 if (0 < $_FILES['image4']['error']) {
			 echo 'Error during file upload' . $_FILES['image4']['error'];
		 } else {
			 if (file_exists('uploads/homepage' . $_FILES['image4']['name'])) {
				 echo 'File already exists : uploads/homepage' . $_FILES['image4']['name'];
			 } else {
				 
				 if (!$this->upload->do_upload('image4')) {
					 //echo $this->upload->display_errors();
				 } else {
					 //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				 }
			 }
		 }
		 $image2=$new_name2;
	 } else {
		 $image2=$image22;
	 }*/



	 $file_name3=$_FILES['image3']['name'];
	 $new_name3 = time().$file_name3;
	 $config3['file_name'] = $new_name3;
	 $config3['upload_path'] = 'uploads/homepage';
	 $config3['allowed_types'] = 'gif|jpg|png|jpeg';	
	 $config3['max_size'] = '1024'; //1 MB
	 $this->load->library('upload', $config3);
	 $this->upload->initialize($config3);
	 $file_name3=$_FILES['image3']['name'];
	 //$newfile_name= preg_replace('/[^A-Za-z0-9]/', "", $file_name);
	 //$//ext=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
	 

	if (isset($_FILES['image3']['name'])) {
		if (0 < $_FILES['image3']['error']) {
			echo 'Error during file upload' . $_FILES['image3']['error'];
		} else {
			if (file_exists('uploads/homepage' . $_FILES['image3']['name'])) {
				echo 'File already exists : uploads/homepage' . $_FILES['image3']['name'];
			} else {
				
				if (!$this->upload->do_upload('image3')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image3=$new_name3;
	} else {
		$image3=$image33;
	}




	$file_name4=$_FILES['image4']['name'];
	$new_name4 = time().$file_name4;
	$config4['file_name'] = $new_name4;
	$config4['upload_path'] = 'uploads/homepage';
	$config4['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config4['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config4);
	$this->upload->initialize($config4);
	$file_name4=$_FILES['image4']['name'];
	//$newfile_name= preg_replace('/[^A-Za-z0-9]/', "", $file_name);
	//$//ext=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
	

   if (isset($_FILES['image4']['name'])) {
	   if (0 < $_FILES['image4']['error']) {
		   echo 'Error during file upload' . $_FILES['image4']['error'];
	   } else {
		   if (file_exists('uploads/homepage' . $_FILES['image4']['name'])) {
			   echo 'File already exists : uploads/homepage' . $_FILES['image4']['name'];
		   } else {
			   
			   if (!$this->upload->do_upload('image4')) {
				   //echo $this->upload->display_errors();
			   } else {
				   //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
			   }
		   }
	   }
	   $image4=$new_name4;
   } else {
	   $image4=$image44;
   }











	if ($image1==''){
		$image1=$image11;
	   }
	   if ($image2==''){
		$image2=$image22;
	   }
	   if ($image3==''){
		$image3=$image33;
	   }
	   if ($image4==''){
		$image4=$image44;
	   }
	/*$servicetitle1=$this->input->post('servicetitle1');
	$servicetitle2=$this->input->post('servicetitle2');
	$servicetitle3=$this->input->post('servicetitle3');
	$servicetitle=$this->input->post('servicetitle');
	$qualitytitle=$this->input->post('qualitytitle');*/	
	 $maintitle=$this->input->post('maintitle');
	 $subtitle=$this->input->post('subtitle');
	 $metatag=$this->input->post('metatag');
	 $alttag1=$this->input->post('alttag1');
	 $alttag2=$this->input->post('alttag2');
	 $alttag3=$this->input->post('alttag3');
	 $alttag4=$this->input->post('alttag4');
	 $title3=$this->input->post('title3');
	 $title4=$this->input->post('title4');
	 $title5=$this->input->post('title5');
	 $description1=$this->input->post('description1');
	 $description2=$this->input->post('description2');
	 $description3=$this->input->post('description3');
	 $description4=$this->input->post('description4');
	 $description5=$this->input->post('description5');
	 $description6=$this->input->post('description6');
	 $data = array(
		'description1'=>"$description1",
		'description2'=>"$description2",
		'description3'=>"$description3",
		'description4'=>"$description4",
		'description5'=>"$description5",
		'description6'=>"$description6",
		'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
		'alttagimg3'=>"$alttag3",
		'alttagimg4'=>"$alttag4",
		'metatag'=>$metatag,
		'title1' =>"$maintitle",
		'title2' =>"$subtitle",
		'homepageimg4'=>$image4,
		'title3'=>$title3,'title4'=>$title4,'title5'=>$title5,
		//'servicetitle1'=>$servicetitle1, 'servicetitle2'=>$servicetitle2,'servicetitle3'=>$servicetitle3,
		'homepageimg1'=>$image1,'homepageimg2'=>$image2,'serviceimg'=>$image3,'servicetitle'=>$servicetitle,'qualitytitle'=>$qualitytitle		
	 );




	/* if (($image1!='') && ($image2!='')){
	 $data = array(
		 'maintitle' =>"$maintitle",
		 'subtitle' =>"$subtitle",
		 'description'=>"$description",
		 'servicetitle1'=>'$servicetitle1', 'servicetitle2'=>'$servicetitle2','servicetitle3'=>'$servicetitle3',
		 'Image1'=>$image1,'Image2'=>$image2,'servicetitle'=>'$servicetitle','qualitytitle'=>'$qualitytitle'		
	  );
	}
	if (($image1!='') && ($image2=='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description",
			'Image1'=>$image1, 'servicetitle1'=>'$servicetitle1', 'servicetitle2'=>'$servicetitle2','servicetitle3'=>'$servicetitle3',
			'Image1'=>$image1,'Image2'=>$image2,'servicetitle'=>'$servicetitle','qualitytitle'=>'$qualitytitle'		
		 );
	   }
	   if (($image1=='') && ($image2!='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description",
			
			'Image2'=>$image2, 'Image1'=>$image1,'Image2'=>$image2,'servicetitle'=>'$servicetitle','qualitytitle'=>'$qualitytitle','servicetitle1'=>'$servicetitle1', 'servicetitle2'=>'$servicetitle2','servicetitle3'=>'$servicetitle3',		
		 );
	   }
	   if (($image1=='') && ($image2=='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description", 'Image1'=>$image1,'Image2'=>$image2,'servicetitle'=>'$servicetitle','qualitytitle'=>'$qualitytitle','servicetitle1'=>'$servicetitle1', 'servicetitle2'=>'$servicetitle2','servicetitle3'=>'$servicetitle3',
				
		 );
	   }*/
	  //print_r($data);
	  $this->db2->where('homepageid',2);
	  $this->db2->update('homepage', $data);
//echo $this->db2->last_query();
//die;
	  //echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Product Services' : '<b>Product Services added Successfully</b>';
	 ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Home Page') : $this->session->set_flashdata('flash_msg', 'Home Page Edited Successfully');

}


public function editaboutusprocess(){
	$this->db2->select('*');
    $this->db2->from('aboutus');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->missionlogo;
   $image22=$imgdetails->visionlogo;
   $image33=$imgdetails->aboutusbanner;


   $file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);
   $new_name1 = time().'aboutus'.'.'.$file_ext;
	$config['file_name'] = $new_name1;
	$config['upload_path'] = 'uploads/aboutus';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload'.$new_name1;
		} else {
			if (file_exists('uploads/aboutus/'.$new_name1)) {
				echo 'File already exists : uploads/aboutus/'.$new_name1;
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image1=$new_name1;
	} else {
		$image1=$image11;
	}
	
	

	$file_ext = pathinfo($_FILES["image2"]["name"],PATHINFO_EXTENSION);
   $new_name2 = time().'aboutus2'.'.'.$file_ext;
	$config2['file_name'] = $new_name2;
	$config2['upload_path'] = 'uploads/aboutus';
	$config2['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config2['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config2);
	$this->upload->initialize($config2);
	if (isset($_FILES['image2']['name'])) {
		if (0 < $_FILES['image2']['error']) {
			echo 'Error during file upload'.$new_name2;
		} else {
			if (file_exists('uploads/aboutus/'.$new_name2)) {
				echo 'File already exists : uploads/aboutus/'.$new_name2;
			} else {
				
				if (!$this->upload->do_upload('image2')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image2=$new_name2;
	} else {
		$image2=$image22;
	}



	$file_ext = pathinfo($_FILES["image3"]["name"],PATHINFO_EXTENSION);
   $new_name3 = time().'aboutus3'.'.'.$file_ext;
	$config3['file_name'] = $new_name3;
	$config3['upload_path'] = 'uploads/aboutus';
	$config3['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config3['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config3);
	$this->upload->initialize($config3);
	if (isset($_FILES['image3']['name'])) {
		if (0 < $_FILES['image3']['error']) {
			echo 'Error during file upload'.$new_name3;
		} else {
			if (file_exists('uploads/aboutus/'.$new_name3)) {
				echo 'File already exists : uploads/aboutus/'.$new_name3;
			} else {
				
				if (!$this->upload->do_upload('image3')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image3=$new_name3;
	} else {
		$image3=$image33;
	}








	/*if (isset($_FILES['image2']['name'])) {
		if (0 < $_FILES['image2']['error']) {
			echo 'Error during file upload' . $_FILES['image2']['error'];
		} else {
			if (file_exists('uploads/aboutus' . $_FILES['image2']['name'])) {
				echo 'File already exists : uploads/aboutus' . $_FILES['image2']['name'];
			} else {
				
				if (!$this->upload->do_upload('image2')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image2=$_FILES['image2']['name'];
	} else {
		$image2=$image22;
	}*/
	
	/*if (isset($_FILES['image3']['name'])) {
		if (0 < $_FILES['image3']['error']) {
			echo 'Error during file upload' . $_FILES['image3']['error'];
		} else {
			if (file_exists('uploads/aboutus' . $_FILES['image3']['name'])) {
				echo 'File already exists : uploads/aboutus' . $_FILES['image3']['name'];
			} else {
				
				if (!$this->upload->do_upload('image3')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image3=$_FILES['image3']['name'];
	} else {
		$image3=$image33;
	}*/
	
	 $maintitle=$this->input->post('maintitle');
	 $mission=$this->input->post('mission');
	 $vision=$this->input->post('vision');
	 $yearsexperience=$this->input->post('yearsexperience');
	 $happyclients=$this->input->post('happyclients');
	 $expertmembers=$this->input->post('expertmembers');
	 $aboutusshortdesc=$this->input->post('aboutusshortdesc');
	 $projectsdone=$this->input->post('projectsdone');
	 $aboutcompany=$this->input->post('aboutcompany');

	 $hotel=$this->input->post('hotel');
	 $travel=$this->input->post('travel');
	 $noofwinning=$this->input->post('nowinning');
	 $metatag=$this->input->post('metatag');
	 $alttag1=$this->input->post('alttag1');
	 $alttag2=$this->input->post('alttag2');
	 $alttag3=$this->input->post('alttag3');
	 $data = array(
		'nohotels'=>"$hotel",
		'notravels'=>"$travel",
		'nowinning'=>"$noofwinning",
		'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
		'alttagimg3'=>"$alttag3",
		'metatag'=>$metatag,
		'title' =>"$maintitle",
		'mission' =>"$mission",
		'aboutcompany'=>"$aboutcompany",
		'vision'=>$vision,
		'mission'=>$mission,
		'yearsexperience'=>$yearsexperience,
		'happyclients'=>$happyclients,
		'expertmembers'=>$expertmembers,
		'aboutusshortdesc'=>$aboutusshortdesc,
		'projectsdone'=>$projectsdone,'missionlogo'=>$image1,'visionlogo'=>$image2,'aboutusbanner'=>$image3,

		//'Image1'=>$image1,'Image2'=>$image2		
	 );
	 /*if (($image1!='') && ($image2!='')){
	 $data = array(
		 'maintitle' =>"$maintitle",
		 'subtitle' =>"$subtitle",
		 'description'=>"$description",
		 'Image1'=>$image1,'Image2'=>$image2		
	  );
	}
	if (($image1!='') && ($image2=='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description",
			'Image1'=>$image1		
		 );
	   }
	   if (($image1=='') && ($image2!='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description",
			
			'Image2'=>$image2		
		 );
	   }
	   if (($image1=='') && ($image2=='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description",
				
		 );
	   }*/
	  //print_r($data);
	  $this->db2->where('aboutusid',1);
	  $this->db2->update('aboutus', $data);
	  ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing About Us') : $this->session->set_flashdata('flash_msg', 'About Us Edited Successfully');
	  //echo ($this->db2->affected_rows() != 1) ? 'Error in Editing About Us Contents' : '<b>About Us Contents added Successfully</b>';


}



public function listservices(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listservices";
$config["total_rows"] = $this->sm->get_countservices();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_services($config["per_page"],$page);
$this->db2->from('contactus');
    $query = $this->db2->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listservices',$data);	


}


public function listsiteinformation(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listsiteinformation";
/*$config["total_rows"] = $this->sm->get_countservices();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_services($config["per_page"],$page);*/
$this->db2->from('contactus');
    $query = $this->db2->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	//$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listsiteinformation',$data);	


}




public function listsocialmedialinks(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listsiteinformation";
/*$config["total_rows"] = $this->sm->get_countservices();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_services($config["per_page"],$page);*/
$this->db2->from('contactus');
    $query = $this->db2->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['socialmedia']=$this->sm->get_socialmedialinks();
$this->load->view('services/listsocialmedialinks',$data);	


}


public function socialmedialinksprocess(){

	$whatsuplink=$this->input->post('whatsuplink');
	$linkldn=$this->input->post('linkldn');
	$youtube=$this->input->post('youtube');
	$facebook=$this->input->post('facebook');
	$instagram=$this->input->post('instagram');
	$twitter=$this->input->post('twitter');
	$calllnk=$this->input->post('wplink');
	$locationlink=$this->input->post('loclink');

	$metatag=$this->input->post('metatag');
	$metatag1=$this->input->post('metatag1');
	$metatag2=$this->input->post('metatag2');
	
	



	$data = array(
		'whatsuplink'=>"$whatsuplink",
	'linkldn'=>"$linkldn",
		'youtube'=>"$youtube",
		'facebook'=>$facebook,
		 'instagram' =>"$instagram",
		'twitter' =>"$twitter",
		 'calllnk'=>"$calllnk",
		 'locationlink'=>"$locationlink",
		 'metatag' =>"$metatag",
		 'metatag1' =>"$metatag1",
		 'metatag2' =>"$metatag2"						
	  );


  //}
 
  //$id=$this->input->post('blogid'); 
  //$this->db2->where('contentid',$id);
   $this->db2->update('socialmedialinks', $data);

  ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Social media Links') : $this->session->set_flashdata('flash_msg', 'Social media Links Edited Successfully');

  redirect("welcome/listsocialmedialinks");


}

public function editsocialmedialinks(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('socialmedialinks');
    $query = $this->db2->get();
    $data['result']=$query->row();
	$data['contactus']=$this->sm->get_contactus(); 
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editsocialmedialinks',$data);


}


public function listservicesdetails(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}

$this->db2->from('contactus');
    $query = $this->db2->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['result']=$this->sm->get_servicesdetails();
$this->load->view('services/listservicesdetails',$data);	


}





public function deleteservices(){
	$id=$_GET['id'];
	$this->db2->where('serviceid',$id);
	$this->db2->delete('services');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Services' : 'Services deleted Successfully';
}


public function listaboutus(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listaboutus";
$config["total_rows"] = $this->sm->get_countservices();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_aboutusadmin();
$this->db2->from('contactus');
    $query = $this->db2->get();
    $data['resultphone']=$query->row();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['contactus']=$this->sm->get_contactus();
	$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listaboutus',$data);	


}

public function listhomepage(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listhomepage";
$config["total_rows"] = $this->sm->get_countservices();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_homepageadmin();
$data['contactus']=$this->sm->get_contactus();
$data['newsletter']=$this->sm->get_newsletter();
$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listhomepage',$data);	


}

public function listcontactus(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$data['result']=$this->sm->get_contactus();
	$this->db2->from('contactus');
    $query = $this->db2->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/listcontactus',$data);	

}

public function listfaq(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listfaq";
$config["total_rows"] = $this->sm->get_countfaq();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_faqadmin($config["per_page"],$page);
$data['contactus']=$this->sm->get_contactus();
$data['newsletter']=$this->sm->get_newsletter();
$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listfaq',$data);	


}

public function listmenus(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listmenus";
$config["total_rows"] = $this->sm->get_countmenu();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_menuadmin($config["per_page"],$page);
$data['contactus']=$this->sm->get_contactus();
$data['newsletter']=$this->sm->get_newsletter();
$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listmenus',$data);	


}









public function listquality(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listquality";
$config["total_rows"] = $this->sm->get_countquality();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_qualityadmin($config["per_page"],$page);
$data['contactus']=$this->sm->get_contactus();
$data['newsletter']=$this->sm->get_newsletter();
$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listquality',$data);	


}




public function listblogcontents(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listblogcontents";
$config["total_rows"] = $this->sm->get_countblog();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_blogadmin($config["per_page"],$page);
$this->db2->from('contactus');
    $query = $this->db2->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listblog',$data);	


}
public function listtestimonials(){


	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listtestimonials";
$config["total_rows"] = $this->sm->get_counttestimonials();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_testimonialsadmin($config["per_page"],$page);
$this->db2->from('contactus');
    $query = $this->db2->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listtestimonials',$data);
}


function delfaq(){

	$id=$_GET['id'];
	$this->db2->where('faqid',$id);
	$this->db2->delete('faq');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Faq' : 'Faq deleted Successfully';


}

function deldest(){


	$id=$_GET['id'];
	$this->db2->where('placeid',$id);
	$this->db2->delete('touristplaces');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Destination' : 'Destination deleted Successfully';


}

function delduration(){


	$id=$_GET['id'];
	$this->db2->where('durationid',$id);
	$this->db2->delete('tourduration');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting duration' : 'Duration deleted Successfully';


}


function delproducttype(){

	$id=$_GET['id'];
	$this->db2->where('producttypeid',$id);
	$this->db2->delete('producttype');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Product Type' : 'Product Type deleted Successfully';


}

function delmenu(){

	$id=$_GET['id'];
	$this->db2->where('parentmenuid',$id);
	$this->db2->delete('menus');
	$this->db2->where('menuid',$id);
	$this->db2->delete('menus');
	
	//echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Menu' : 'Menu deleted Successfully';
	//echo ($this->db2->affected_rows() ==0) ? $this->session->set_flashdata('flash_msg', 'Error in deleting Menu') : $this->session->set_flashdata('flash_msg', 'Menu deleted Successfully');
	($this->db2->affected_rows() >0) ? $this->session->set_flashdata('flash_msg', 'Menu deleted Successfully') : $this->session->set_flashdata('flash_msg', 'Error in deleting menu');

}
function delql(){

	$id=$_GET['id'];
	$this->db2->where('qualityid',$id);
	$this->db2->delete('quality');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Quality' : 'Quality deleted Successfully';


}

function delprdspec(){

	$id=$_GET['id'];
	$this->db2->where('prdspecid',$id);
	$this->db2->delete('productspecifications');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Product Specification' : 'Product Specification deleted Successfully';


}


public function addtestimonialsprocess(){

	$file_name=$_FILES['image1']['name'];
   //$newfile_name= preg_replace('/[^A-Za-z0-9]/', "", $file_name);
   //$//ext=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
   //$new_name = time().$file_name;
   $ext=pathinfo($file_name, PATHINFO_EXTENSION);
   $new_name = time().'testimonal'.'.'.$ext;
   $config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/testimonial';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/testimonial/' .$new_name)) {
				echo 'File already exists : uploads/testimonial/' .$new_name;
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	
	

	
	$image1=$new_name;
	$alttag1=$this->input->post('alttag1');

	 $testtitle=$this->input->post('testtitle');
	 $rating=$this->input->post('rating');
	 $description=$this->input->post('description');
	 $name=$this->input->post('name');
	  $place=$this->input->post('place');
	  $date=$this->input->post('date');
	  $status=$this->input->post('status');
	 $data = array(
		'title'=>"$testtitle",
		 'testimonial' =>"$description",
		 'rating' =>"$rating",
		 'name'=>"$name",
		 'image'=>$image1,'place'=>$place,'date'=>$date,'alttagimg1'=>"$alttag1",'active'=>$status		
	  );
	  
	  	  $this->db2->insert('testimonials', $data);

	  echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Testimonials' : '<b>Testimonials added Successfully</b>';


}


public function deletetestimonials(){
	$id=$_GET['id'];
	$this->db2->where('testimonialid',$id);
	$this->db2->delete('testimonials');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Testimonials' : 'Testimonials deleted Successfully';
}

public function deleteblog(){
	$id=$_GET['id'];
	$this->db2->where('contentid',$id);
	$this->db2->delete('blogcontents');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Blog Contents' : 'Blog Contents deleted Successfully';
}


public function addb2logcontentsprocess(){

	/*$config['upload_path'] = 'uploads/blog';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/blog' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/blog' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	if (isset($_FILES['image2']['name'])) {
		if (0 < $_FILES['image2']['error']) {
			echo 'Error during file upload' . $_FILES['image2']['error'];
		} else {
			if (file_exists('uploads/blog' . $_FILES['image2']['name'])) {
				echo 'File already exists : uploads/blog' . $_FILES['image2']['name'];
			} else {
				
				if (!$this->upload->do_upload('image2')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	

	
	$image1=$_FILES['image1']['name'];
	$image2=$_FILES['image2']['name'];*/


	if (isset($_FILES['image1']['name'])){
		$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'blog1'.'.'.$ext;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/blog';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $new_name;
		} else {
			if (file_exists('uploads/blog' . $new_name)) {
				echo 'File already exists : uploads/blog' . $new_name;
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		//echo 'Please choose a file';
	}

	$image1=$new_name;
}else{
	$image1='';
}
if (isset($_FILES['image2']['name'])){
	$file_name=$_FILES['image2']['name'];
//$new_name = time().$file_name;
$ext=pathinfo($_FILES["image2"]["name"], PATHINFO_EXTENSION);
$new_name = time().'blog2nd'.'.'.$ext;
$config['file_name'] = $new_name;
$config['upload_path'] = 'uploads/blog';
$config['allowed_types'] = 'gif|jpg|png|jpeg';	
$config['max_size'] = '1024'; //1 MB
$this->load->library('upload', $config);
$this->upload->initialize($config);
if (isset($_FILES['image2']['name'])) {
	if (0 < $_FILES['image2']['error']) {
		echo 'Error during file upload' . $new_name;
	} else {
		if (file_exists('uploads/blog' . $new_name)) {
			echo 'File already exists : uploads/blog' . $new_name;
		} else {
			
			if (!$this->upload->do_upload('image2')) {
				//echo $this->upload->display_errors();
			} else {
				//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
			}
		}
	}
} else {
	//echo 'Please choose a file';
}

$image2=$new_name;
}else{
$image2='';
}


if (isset($_FILES['image3']['name'])){
	$file_name=$_FILES['image3']['name'];
//$new_name = time().$file_name;
$ext=pathinfo($_FILES["image3"]["name"], PATHINFO_EXTENSION);
$new_name = time().'blog3rd'.'.'.$ext;
$config['file_name'] = $new_name;
$config['upload_path'] = 'uploads/blog';
$config['allowed_types'] = 'gif|jpg|png|jpeg';	
$config['max_size'] = '1024'; //1 MB
$this->load->library('upload', $config);
$this->upload->initialize($config);
if (isset($_FILES['image3']['name'])) {
	if (0 < $_FILES['image3']['error']) {
		echo 'Error during file upload' . $new_name;
	} else {
		if (file_exists('uploads/blog' . $new_name)) {
			echo 'File already exists : uploads/blog' . $new_name;
		} else {
			
			if (!$this->upload->do_upload('image3')) {
				//echo $this->upload->display_errors();
			} else {
				//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
			}
		}
	}
} else {
	//echo 'Please choose a file';
}

$image3=$new_name;
}else{
$image3='';
}


if (isset($_FILES['image4']['name'])){
	$file_name=$_FILES['image4']['name'];
//$new_name = time().$file_name;
$ext=pathinfo($_FILES["image4"]["name"], PATHINFO_EXTENSION);
$new_name = time().'blog4th'.'.'.$ext;
$config['file_name'] = $new_name;
$config['upload_path'] = 'uploads/blog';
$config['allowed_types'] = 'gif|jpg|png|jpeg';	
$config['max_size'] = '1024'; //1 MB
$this->load->library('upload', $config);
$this->upload->initialize($config);
if (isset($_FILES['image4']['name'])) {
	if (0 < $_FILES['image4']['error']) {
		echo 'Error during file upload' . $new_name;
	} else {
		if (file_exists('uploads/blog' . $new_name)) {
			echo 'File already exists : uploads/blog' . $new_name;
		} else {
			
			if (!$this->upload->do_upload('image4')) {
				//echo $this->upload->display_errors();
			} else {
				//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
			}
		}
	}
} else {
	//echo 'Please choose a file';
}

$image4=$new_name;
}else{
$image4='';
}










$status=$this->input->post('status');

	 $blogtitle=$this->input->post('blogtitle');
	 $toparticle=$this->input->post('toparticle');
	 $description=$this->input->post('description');
	 $name=$this->input->post('name');
	 $place=$this->input->post('place');
	  $companyname=$this->input->post('companyname');
	  $date=$this->input->post('date');
	  $alttag1=$this->input->post('alttag1');
	 $alttag2=$this->input->post('alttag2');
	 $alttag3=$this->input->post('alttag3');
	 $alttag4=$this->input->post('alttag4');
	 $data = array(
		'active'=>$status,
		'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
		'alttagimg3'=>"$alttag3",
		'alttagimg4'=>"$alttag4",
		'place'=>"$place",
		'companyname'=>$companyname,
		 'description' =>"$description",
		'toparticle' =>"$toparticle",
		 'authorname'=>"$name",
		 'autorimage'=>$image1,'toparticle'=>$toparticle,'date'=>$date,'title'=>$blogtitle,'contentimage'=>$image2,'contentimage2'=>$image3,'contentimage3'=>$image4		
	  );
	  //$id=$this->uri->segment(3); 
	  //$this->db2->where('contentid',$id);
	   $this->db2->insert('blogcontents', $data);

	  echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Blogs' : '<b>Blog Added Successfully</b>';




}


public function editblogcontentsprocess(){

	$id=$this->input->post('blogid'); 
	$this->db2->where('contentid',$id);
	$this->db2->select('*');
    $this->db2->from('blogcontents');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->autorimage;
   $image22=$imgdetails->contentimage;
   $image33=$imgdetails->contentimage2;
   $image44=$imgdetails->contentimage3;

	/*$config['upload_path'] = 'uploads/blog';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/blog' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/blog' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	if (isset($_FILES['image2']['name'])) {
		if (0 < $_FILES['image2']['error']) {
			echo 'Error during file upload' . $_FILES['image2']['error'];
		} else {
			if (file_exists('uploads/blog' . $_FILES['image2']['name'])) {
				echo 'File already exists : uploads/blog' . $_FILES['image2']['name'];
			} else {
				
				if (!$this->upload->do_upload('image2')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	

	
	$image1=$_FILES['image1']['name'];
	$image2=$_FILES['image2']['name'];*/



	$file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);
	$new_name1 = time().'blog1'.'.'.$file_ext;
	 $config['file_name'] = $new_name1;
	 $config['upload_path'] = 'uploads/blog';
	 $config['allowed_types'] = 'gif|jpg|png|jpeg';	
	 $config['max_size'] = '1024'; //1 MB
	 $this->load->library('upload', $config);
	 $this->upload->initialize($config);
	 if (isset($_FILES['image1']['name'])) {
		 if (0 < $_FILES['image1']['error']) {
			 echo 'Error during file upload'.$new_name1;
		 } else {
			 if (file_exists('uploads/blog/'.$new_name1)) {
				 echo 'File already exists : uploads/blog/'.$new_name1;
			 } else {
				 
				 if (!$this->upload->do_upload('image1')) {
					 //echo $this->upload->display_errors();
				 } else {
					 //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				 }
			 }
		 }
		 $image1=$new_name1;
	 } else {
		 $image1=$image11;
	 }
	 
	 
 
	 $file_ext = pathinfo($_FILES["image2"]["name"],PATHINFO_EXTENSION);
	$new_name2 = time().'blog2nd'.'.'.$file_ext;
	 $config2['file_name'] = $new_name2;
	 $config2['upload_path'] = 'uploads/blog';
	 $config2['allowed_types'] = 'gif|jpg|png|jpeg';	
	 $config2['max_size'] = '1024'; //1 MB
	 $this->load->library('upload', $config2);
	 $this->upload->initialize($config2);
	 if (isset($_FILES['image2']['name'])) {
		 if (0 < $_FILES['image2']['error']) {
			 echo 'Error during file upload'.$new_name2;
		 } else {
			 if (file_exists('uploads/blog/'.$new_name2)) {
				 echo 'File already exists : uploads/blog/'.$new_name2;
			 } else {
				 
				 if (!$this->upload->do_upload('image2')) {
					 //echo $this->upload->display_errors();
				 } else {
					 //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				 }
			 }
		 }
		 $image2=$new_name2;
	 } else {
		 $image2=$image22;
	 }
 


	 $file_ext = pathinfo($_FILES["image3"]["name"],PATHINFO_EXTENSION);
	 $new_name3 = time().'blog3rd'.'.'.$file_ext;
	  $config3['file_name'] = $new_name3;
	  $config3['upload_path'] = 'uploads/blog';
	  $config3['allowed_types'] = 'gif|jpg|png|jpeg';	
	  $config3['max_size'] = '1024'; //1 MB
	  $this->load->library('upload', $config3);
	  $this->upload->initialize($config3);
	  if (isset($_FILES['image3']['name'])) {
		  if (0 < $_FILES['image3']['error']) {
			  echo 'Error during file upload'.$new_name3;
		  } else {
			  if (file_exists('uploads/blog/'.$new_name3)) {
				  echo 'File already exists : uploads/blog/'.$new_name3;
			  } else {
				  
				  if (!$this->upload->do_upload('image3')) {
					  //echo $this->upload->display_errors();
				  } else {
					  //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				  }
			  }
		  }
		  $image3=$new_name3;
	  } else {
		  $image3=$image33;
	  }



	  $file_ext = pathinfo($_FILES["image4"]["name"],PATHINFO_EXTENSION);
	  $new_name4 = time().'blog4th'.'.'.$file_ext;
	   $config4['file_name'] = $new_name4;
	   $config4['upload_path'] = 'uploads/blog';
	   $config4['allowed_types'] = 'gif|jpg|png|jpeg';	
	   $config4['max_size'] = '1024'; //1 MB
	   $this->load->library('upload', $config4);
	   $this->upload->initialize($config4);
	   if (isset($_FILES['image4']['name'])) {
		   if (0 < $_FILES['image4']['error']) {
			   echo 'Error during file upload'.$new_name4;
		   } else {
			   if (file_exists('uploads/blog/'.$new_name4)) {
				   echo 'File already exists : uploads/blog/'.$new_name4;
			   } else {
				   
				   if (!$this->upload->do_upload('image4')) {
					   //echo $this->upload->display_errors();
				   } else {
					   //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				   }
			   }
		   }
		   $image4=$new_name4;
	   } else {
		   $image4=$image44;
	   }
 

	 $status=$this->input->post('status');
	 $blogtitle=$this->input->post('blogtitle');
	 $toparticle=$this->input->post('toparticle');
	 $description=$this->input->post('description');
	 $name=$this->input->post('name');
	 $place=$this->input->post('place');
	  $companyname=$this->input->post('companyname');
	  $date=$this->input->post('date');
	  $alttag1=$this->input->post('alttag1');
	 $alttag2=$this->input->post('alttag2');

	 $alttag3=$this->input->post('alttag3');
	 $alttag4=$this->input->post('alttag4');
	  //if (($image1!='') && ($image2!='')){

		$data = array(
			'active'=>$status,
			'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
		'alttagimg3'=>"$alttag3",
		'alttagimg4'=>"$alttag4",
			'place'=>"$place",
			'companyname'=>$companyname,
			 'description' =>"$description",
			'toparticle' =>"$toparticle",
			 'authorname'=>"$name",
			 'autorimage'=>$image1,'toparticle'=>$toparticle,'date'=>$date,'title'=>$blogtitle,'contentimage'=>$image2,'contentimage2'=>$image3,'contentimage3'=>$image4	
		  );

	  /*}else if ($image2!=''){

		$data = array(
			'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
			'place'=>"$place",
			'companyname'=>$companyname,
			 'description' =>"$description",
			'toparticle' =>"$toparticle",
			 'authorname'=>"$name",
			 'toparticle'=>$toparticle,'date'=>$date,'title'=>$blogtitle,'contentimage'=>$image2		
		  );


	  }else if ($image1!=''){
		$data = array(
			'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
			'place'=>"$place",
			'companyname'=>$companyname,
			 'description' =>"$description",
			'toparticle' =>"$toparticle",
			 'authorname'=>"$name",
			 'toparticle'=>$toparticle,'date'=>$date,'title'=>$blogtitle,'autorimage'=>$image1		
		  );


	  }else{
		$data = array(
			'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
			'place'=>"$place",
			'companyname'=>$companyname,
			 'description' =>"$description",
			'toparticle' =>"$toparticle",
			 'authorname'=>"$name",
			 'toparticle'=>$toparticle,'date'=>$date,'title'=>$blogtitle		
		  );


	  }*/
	 
	  $id=$this->input->post('blogid'); 
	  $this->db2->where('contentid',$id);
	   $this->db2->update('blogcontents', $data);
	   //echo $this->db2->last_query();

	  echo ($this->db2->affected_rows() != 1) ? 'Error in Editing Blogs' : '<b>Blog Edited Successfully</b>';




}
















public function edittestimonialsprocess(){
	$id=$this->uri->segment(3); 
	  $this->db2->where('testimonialid',$id);
	$this->db2->select('*');
    $this->db2->from('testimonials');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->image;

   $file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);
	//$file_name=$_FILES['image1']['name'];
	//$newfile_name= preg_replace('/[^A-Za-z0-9]/', "", $file_name);
	//$//ext=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'testimonial'.'.'.$file_ext;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/testimonial';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/testimonial/'.$new_name)) {
				//echo 'File already exists : uploads/contactus/'.$new_name;
				$image1=$image11;
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
					$image1=$new_name;
				}
				$image1=$image11;

			}
		}
		$image1=$new_name;;

	} else {
		//echo 'Please choose a file';
		$image1=$image11;

	}




	/*$file_name=$_FILES['image1']['name'];
   //$newfile_name= preg_replace('/[^A-Za-z0-9]/', "", $file_name);
   //$//ext=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
   $new_name = time().$file_name;
   $config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/testimonial';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/testimonial' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/testimonial' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}*/
	
	

	
	//$image1=$new_name;
	//$image2=$_FILES['image2']['name'];

	 $testtitle=$this->input->post('testtitle');
	 $rating=$this->input->post('rating');
	 $description=$this->input->post('description');
	 $name=$this->input->post('name');
	  $place=$this->input->post('place');
	  $date=$this->input->post('date');
	  $alttag1=$this->input->post('alttag1');
	  $status=$this->input->post('status');
/*if ($file_name==''){
	$data = array(
		'testimonial' =>"$description",'alttagimg1'=>"$alttag1",
		'rating' =>"$rating",
		'name'=>"$name",
		'place'=>$place,'date'=>$date,'title'=>$testtitle		
	 );

}else{*/
	 $data = array(
		 'testimonial' =>"$description",'alttagimg1'=>"$alttag1",
		 'rating' =>"$rating",
		 'name'=>"$name",
		 'image'=>$image1,'place'=>$place,'date'=>$date,'title'=>$testtitle,'active'=>$status		
	  );
	//}
	  $id=$this->uri->segment(3); 
	  $this->db2->where('testimonialid',$id);
	   $this->db2->update('testimonials', $data);

	  echo ($this->db2->affected_rows() != 1) ? 'Error in Editing Testimonials' : '<b>Testimonials Edited Successfully</b>';


}


public function addsolutionsprocess(){

	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'problems'.'.'.$ext;
	$config['file_name'] = $new_name;

	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/problems';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/problems' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/problems' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	$image1=$new_name;


	 $title=$this->input->post('maintitle');
	$link=$this->input->post('link');
	 $description=$this->input->post('description');
	 $alttag1=$this->input->post('alttag1');
	 $status=$this->input->post('status');
	  //$date=$this->input->post('date');
	  
	 $data = array(
		 'description' =>"$description",
		 'link' =>"$link",
		 'title'=>"$title",
		 'picture'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status"		
	  );
	  //print_r($data);
	  $id=$this->uri->segment(3); 
	  //$this->db2->where('testimonialid',$id);
	   //$this->db2->update('testimonials', $data);
	   $this->db2->insert('problems', $data);

	  echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Solutions' : '<b>Solutions Added Successfully</b>';



}


public function editsolutionsprocess(){


	$problemid=$this->input->post('problemid');
	$this->db2->where('problemid',$problemid);
	$this->db2->select('*');
    $this->db2->from('problems');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   
   $image11=$imgdetails->image1;
   //$image22=$imgdetails->faviconimg;
   //$image3=$imgdetails->serviceimg;

   /*$config['upload_path'] = 'uploads/logo';
   $config['allowed_types'] = 'gif|jpg|png|jpeg';	
   $config['max_size'] = '1024'; //1 MB
   $this->load->library('upload', $config);
   $this->upload->initialize($config);
   if (isset($_FILES['image1']['name'])) {
	   if (0 < $_FILES['image1']['error']) {
		   echo 'Error during file upload' . $_FILES['image1']['error'];
	   } else {
		   if (file_exists('uploads/logo' . $_FILES['image1']['name'])) {
			   echo 'File already exists : uploads/logo' . $_FILES['image1']['name'];
		   } else {
			   
			   if (!$this->upload->do_upload('image1')) {
				   //echo $this->upload->display_errors();
			   } else {
				   //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
			   }
		   }
	   }
	   $image1=$_FILES['image1']['name'];
   } else {
	   $image1=$image11;
   }
   







	/*$config['upload_path'] = 'uploads/problems';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/problems' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/problems' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}*/


	if (($_FILES["image1"]["name"])!=''){

		$file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);
		$new_name1 = time().'problems'.'.'.$file_ext;
		 $config['file_name'] = $new_name1;
		 $config['upload_path'] = 'uploads/problems';
		 $config['allowed_types'] = 'gif|jpg|png|jpeg';	
		 $config['max_size'] = '1024'; //1 MB
		 $this->load->library('upload', $config);
		 $this->upload->initialize($config);
		 if (isset($_FILES['image1']['name'])) {
			 if (0 < $_FILES['image1']['error']) {
				 echo 'Error during file upload'.$new_name1;
			 } else {
				 if (file_exists('uploads/problems/'.$new_name1)) {
					 echo 'File already exists : uploads/problems/'.$new_name1;
				 } else {
					 
					 if (!$this->upload->do_upload('image1')) {
						 //echo $this->upload->display_errors();
					 } else {
						 //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
					 }
				 }
			 }
			 $image1=$new_name1;
		 } else {
			 $image1=$image11;
		 }
		 
	 }
	 else{
		 $image1=$image11;
	 }

	//$image1=$_FILES['image1']['name'];
	$status=$this->input->post('status');

	 $title=$this->input->post('maintitle');
	 $link=$this->input->post('link');
	 $description=$this->input->post('description');
	$problemid=$this->input->post('problemid');
	$alttag1=$this->input->post('alttag1');
	  //$date=$this->input->post('date');
	  if ($image1==''){
		$data = array(
			'description' =>"$description",
			'alttagimg1'=>"$alttag1",
			'title'=>"$title",
			//'picture'=>$image1,
			'link' =>"$link",'active'=>"$status"
			//,'place'=>$place,'date'=>$date,'title'=>$testtitle		
		 );

	  }else {
	 $data = array(
		 'description' =>"$description",
		 'alttagimg1'=>"$alttag1",
		 'title'=>"$title",
		 'picture'=>$image1,
		 'link' =>"$link",
		 //,'place'=>$place,'date'=>$date,'title'=>$testtitle		
	  );
	}
	  //print_r($data);
	  $id=$this->uri->segment(3); 
	  $this->db2->where('problemid',$problemid);
	   $this->db2->update('problems', $data);
	   //$this->db2->insert('problems', $data);

	  //echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Solutions' : '<b>Solutions Added Successfully</b>';
	  echo ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Solutions') : $this->session->set_flashdata('flash_msg', 'Solutions Edited Successfully');


}












public function listblogpage(){

	$data['result']=$this->sm->get_blogpagedetails();
	$this->db2->from('contactus');
    $query = $this->db2->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/listblogpage',$data);


}

public function newsletter(){
	$data['result']=$this->sm->get_newsletterall();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/listnewsletter',$data);
}


public function newslettersubscribers(){
	$config = array();
$config["base_url"] = base_url() . "Welcome/newslettersubscribers";
$config["total_rows"] = $this->sm->get_countnewslettersubscribers();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
	$data['result']=$this->sm->get_newslettersubscribersall($config["per_page"],$page);
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/newslettersubscribers',$data);


}

public function deletenewsletter(){
	$id=$_GET['id'];
	$this->db2->where('newsletterid',$id);
	$this->db2->delete('newslettersubscribe');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Newsletter Subscribers' : 'Newsletter Subscribers deleted Successfully';

}
function editnewsletter(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('newsletter');
    $query = $this->db2->get();
    $data['result']=$query->row();
	$data['contactus']=$this->sm->get_contactus(); 
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editnewsletter',$data);


}



function editgoogleanalyics(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('googleanalyticscode');
    $query = $this->db2->get();
    $data['result']=$query->row();
	$data['contactus']=$this->sm->get_contactus(); 
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editgoogleanalytics',$data);


}


function editgaprocess(){

	//$data['upgoogleanalytics']=$this->sm->upgoogleanalytics();
	$description=$this->input->post('description');
	/*$name=$this->input->post('name');
	 $place=$this->input->post('place');
	 $date=$this->input->post('date');*/
	$data = array(
		'googleanalytics' =>"$description",
		//'rating' =>"$rating",
		//'name'=>"$name",
		//'image'=>$image1,'place'=>$place,'date'=>$date,'title'=>$testtitle		
	 );
	 //$id=$this->uri->segment(3); 
	 //$this->db2->where('newsletterid',$id);
	  $this->db2->update('googleanalyticscode', $data);

	 //echo ($this->db2->affected_rows() != 1) ? 'Error in Editing Newsletter' : '<b>Newsletter Edited Successfully</b>';

	 ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Google analytics not edited') : $this->session->set_flashdata('flash_msg', 'Google analytics  edited successfully');;

	 redirect("welcome/editgoogleanalyics");





}



function editnewsletterprocess(){
	$description=$this->input->post('description');
	/*$name=$this->input->post('name');
	 $place=$this->input->post('place');
	 $date=$this->input->post('date');*/
	$data = array(
		'newsletterdescription' =>"$description",
		//'rating' =>"$rating",
		//'name'=>"$name",
		//'image'=>$image1,'place'=>$place,'date'=>$date,'title'=>$testtitle		
	 );
	 $id=$this->uri->segment(3); 
	 $this->db2->where('newsletterid',$id);
	  $this->db2->update('newsletter', $data);

	 //echo ($this->db2->affected_rows() != 1) ? 'Error in Editing Newsletter' : '<b>Newsletter Edited Successfully</b>';

	 echo ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Newsletter not edited') : $this->session->set_flashdata('flash_msg', 'Newsletter edited successfully');;



}

function editblogpageprocess(){

	$this->db2->select('*');
    $this->db2->from('blog');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->blogimg;
   $file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);
	//$file_name=$_FILES['image1']['name'];
	//$newfile_name= preg_replace('/[^A-Za-z0-9]/', "", $file_name);
	//$//ext=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
	//$new_name = time().'blog'.'.'.$file_ext;
	//$config['file_name'] = $new_name;



	$config['upload_path'] = 'uploads/blog';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (($_FILES['image1']['name'])!='') {
		$file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);
		$new_name1 = time().'blog.'.$file_ext;
		 $config['file_name'] = $new_name1;
		 $config['upload_path'] = 'uploads/blog';
		 $config['allowed_types'] = 'gif|jpg|png|jpeg';	
		 $config['max_size'] = '1024'; //1 MB
		 $this->load->library('upload', $config);
		 $this->upload->initialize($config);
		 if (isset($_FILES['image1']['name'])) {
			 if (0 < $_FILES['image1']['error']) {
				 echo 'Error during file upload'.$new_name1;
			 } else {
				 if (file_exists('uploads/blog/'.$new_name1)) {
					 echo 'File already exists : uploads/blog/'.$new_name1;
				 } else {
					 
					 if (!$this->upload->do_upload('image1')) {
						 //echo $this->upload->display_errors();
					 } else {
						 //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
					 }
				 }
			 }
			 $image1=$new_name1;
		 } else {
			 $image1=$new_name1;
		 }
		 
	 }
	 else{
		 $image1=$image11;
	 }








	 $description2=$this->input->post('description2');
	$description=$this->input->post('description');
	//die;
	$metatag=$this->input->post('metatag');
	$metatag1=$this->input->post('metatag1');
	$blogtitle=$this->input->post('blogtitle');
	$blogtitle2=$this->input->post('blogtitle2');
	/* $place=$this->input->post('place');
	 $date=$this->input->post('date');*/
	$data = array(
		'blogdescription' =>"$description",
		'metatag' =>"$metatag",
		'metatag1' =>"$metatag1",
		'blogtitle'=>"$blogtitle",
		'blogimg'=>$image1,'description2' =>"$description2",
		'metatag' =>"$metatag",'title2'=>"$blogtitle2",
		
		//,'place'=>$place,'date'=>$date,'title'=>$testtitle		
	 );
	 $id=$this->uri->segment(3); 
	 //$this->db2->where('blogid',$id);
	  $this->db2->update('blog', $data);

	 //echo ($this->db2->affected_rows() != 1) ? 'Error in Editing Newsletter' : '<b>Newsletter Edited Successfully</b>';

	 //echo ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Blog page not edited') : $this->session->set_flashdata('flash_msg', 'Blog Page edited successfully');;
	 ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Blog page not edited') : $this->session->set_flashdata('flash_msg', 'Blog Page edited successfully');
	 redirect("Welcome/listblogpage");
}

function editblogpage(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('blog');
    $query = $this->db2->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editblogpagecontent',$data);


}


function sendsubscribersemail(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/sendsubscribersemail.php',$data);





}

function editemail(){

	$subject=$this->input->post('subject');
	$message=$this->input->post('description');
	$this->htmlmail($subject,$message);

	
	 $this->session->set_flashdata('flash_msg', 'Mail send Successfully');
	redirect("Welcome/newslettersubscribers");



}
function editcontactus(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$blogid=$this->uri->segment(3);
	$this->db2->from('contactus');
    $query = $this->db2->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editcontactus',$data);


}



	

function contactusprocess(){

	$this->db2->select('*');
    $this->db2->from('contactus');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->contactusimg;
   $file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);
	//$file_name=$_FILES['image1']['name'];
	//$newfile_name= preg_replace('/[^A-Za-z0-9]/', "", $file_name);
	//$//ext=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'contactus'.'.'.$file_ext;
	$config['file_name'] = $new_name;



	$config['upload_path'] = 'uploads/contactus';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/contactus/'.$new_name)) {
				//echo 'File already exists : uploads/contactus/'.$new_name;
				$image1=$image11;
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
					$image1=$new_name;
				}
				$image1=$image11;

			}
		}
		$image1=$new_name;;

	} else {
		//echo 'Please choose a file';
		$image1=$image11;

	}

	





	$description=$this->input->post('description');
	$phoneno=$this->input->post('phoneno');
	 $emailid=$this->input->post('emailid');
	 $place=$this->input->post('place');
	 $country=$this->input->post('country');
	 $metatag=$this->input->post('metatag');
	 $alttag1=$this->input->post('alttag1');
	 $alttag2=$this->input->post('alttag2');
	 $lanno=$this->input->post('lanno');
	 $email1=$this->input->post('email1');
	 $email2=$this->input->post('email2');
	 $email3=$this->input->post('email3');
	 $street=$this->input->post('street');
	 $title1=$this->input->post('title1');
	 $title2=$this->input->post('title2');
	 //$image1=$_FILES['image1']['name'];
	 /*if ($image1==''){

		$data = array(
			'contactusdescription' =>"$description",
			'phoneno' =>"$phoneno",
			'emailid'=>"$emailid",
			//'image'=>$image1,
			'city'=>$place,'country'=>$country,
			'metatag' =>"$metatag",
			'alttagimg1'=>"$alttag1",
			'alttagimg2'=>"$alttag2",
			'lanno'=>$lanno		
		 );

	 }else{*/
		$description2=$this->input->post('description2');
	$data = array(
		'title1'=>$title1,'title2'=>$title2,	
		'street'=>"$street",
		'contactusdescription' =>"$description",
		'description2' =>"$description2",
		'phoneno' =>"$phoneno",
		'emailid'=>"$emailid",
		'contactusimg'=>$image1,
		'city'=>$place,'country'=>$country,
		'metatag' =>"$metatag",
		'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
		'lanno'=>$lanno,'toemail1'=>$email1,'toemail2'=>$email2,'toemail3'=>$email3					
	 );
	//}
	 //$id=$this->uri->segment(3); 
	 //$this->db2->where('blogid',$id);
	  $this->db2->update('contactus', $data);

	 //echo ($this->db2->affected_rows() != 1) ? 'Error in Editing Newsletter' : '<b>Newsletter Edited Successfully</b>';

	 //echo ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Blog page not edited') : $this->session->set_flashdata('flash_msg', 'Blog Page edited successfully');;
	 echo ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Contact us page not edited') : $this->session->set_flashdata('flash_msg', 'Contact us Page edited successfully');

}


public function addservicesproblemsolutions(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	//$this->db2->from('faq');
    //$query = $this->db2->get();
    //$data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/addsolutions',$data);



}

public function addcarousel(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	//$this->db2->from('faq');
    //$query = $this->db2->get();
    //$data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/addcarousel',$data);



}


public function editcarousel(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$id=$this->uri->segment(3);
	$this->db2->where('carouselid',$id);
	$this->db2->from('carousel');
    $query = $this->db2->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editcarousel',$data);



}










public function addproductimage(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('item');
    $query = $this->db2->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/addproductimage',$data);



}


public function addfeatureupdate(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('item');
    $query = $this->db2->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/addfeatureupdate',$data);



}




public function addauthority(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('item');
    $query = $this->db2->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/addauthority',$data);



}




public function addgallery(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('item');
    $query = $this->db2->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->db2->where('active',1);
	$this->db2->from('packages');
    $query = $this->db2->get();
    $data['result']=$query->result_array();
	$this->load->view('services/addgallery',$data);



}






public function addsitemap(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('item');
    $query = $this->db2->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/addsitemap',$data);



}








public function editproductimages(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');

	/*$this->db2->where('imgid',1);
	$this->db2->select('*');
    $this->db2->from('productimages');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->picture;*/

$id=$this->uri->segment(3);
   $this->db2->where('imgid',$id);
	$this->db2->from('productimages');
    $query = $this->db2->get();
    $data['result']=$query->row();

	$this->db2->from('item');
    $query = $this->db2->get();
    $data['result1']=$query->result_array();


	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editproductimage',$data);



}



public function editfeature(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');

	/*$this->db2->where('imgid',1);
	$this->db2->select('*');
    $this->db2->from('productimages');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->picture;*/

$id=$this->uri->segment(3);
   $this->db2->where('featureid',$id);
	$this->db2->from('featureupdate');
    $query = $this->db2->get();
    $data['result']=$query->row();

	$this->db2->from('item');
    $query = $this->db2->get();
    $data['result1']=$query->result_array();


	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editfeatureupdate',$data);



}

public function editauthority(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');

	/*$this->db2->where('imgid',1);
	$this->db2->select('*');
    $this->db2->from('productimages');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->picture;*/

$id=$this->uri->segment(3);
   $this->db2->where('imgid',$id);
	$this->db2->from('authority');
    $query = $this->db2->get();
    $data['result']=$query->row();

	$this->db2->from('item');
    $query = $this->db2->get();
    $data['result1']=$query->result_array();


	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editauthority',$data);



}



public function editgallery(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');

	/*$this->db2->where('imgid',1);
	$this->db2->select('*');
    $this->db2->from('productimages');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->picture;*/

$id=$this->uri->segment(3);
   $this->db2->where('imgid',$id);
	$this->db2->from('packagesgallery');
    $query = $this->db2->get();
    $data['result']=$query->row();

	$this->db2->from('packages');
    $query = $this->db2->get();
    $data['result1']=$query->result_array();


	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editgallery',$data);



}










//$this->load->view('services/editfeatureupdate',$data);







public function addproduct(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('producttype');
    $query = $this->db2->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/addproduct',$data);



}

public function editproduct(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$prdid=$this->uri->segment(3);
	$this->db2->where('itemid',$prdid);
	$this->db2->from('item');
    $query = $this->db2->get();

    $data['result']=$query->row(); 
	$this->db2->from('producttype');
    $query = $this->db2->get();
    $data['result1']=$query->result_array();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editproduct',$data);



}





public function adddestination(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('producttype');
    $query = $this->db2->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/adddestination',$data);



}


function editdestination(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$conid=$this->uri->segment(3);
	$this->load->model('Servicesmodel');
	$this->db2->where('contentid',$conid);
	$this->db2->from('destination');
    $query = $this->db2->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editdestination',$data);


}

function edittraveldetails(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$conid=$this->uri->segment(3);
	$this->load->model('Servicesmodel');
	$this->db2->where('contentid',$conid);
	$this->db2->from('traveldetails');
    $query = $this->db2->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/edittraveldetails',$data);


}




public function addtourservices(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	//$this->db2->from('producttype');
    //$query = $this->db2->get();
    //$data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/addtourservices',$data);



}


public function addduration(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	//$this->db2->from('producttype');
    //$query = $this->db2->get();
    //$data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/addduration',$data);



}








function edittourservices(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$conid=$this->uri->segment(3);
	$this->load->model('Servicesmodel');
	$this->db2->where('contentid',$conid);
	$this->db2->from('tourservices');
    $query = $this->db2->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/edittourservices',$data);


}







public function addtraveldetails(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	//$this->db2->from('producttype');
    //$query = $this->db2->get();
    //$data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/addtraveldetails',$data);



}

public function addpackages(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->where('active',1);
	$this->db2->from('packages');
    $query = $this->db2->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/addpackages',$data);



}



public function addpackagedetails(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->where('active',1);
	$this->db2->from('packages');
    $query = $this->db2->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/addpackagedetails',$data);



}






public function editpackagedetails(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->where('active',1);
	$this->db2->from('packages');
    $query = $this->db2->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();

	$id=$this->uri->segment(3);
	//$fieldid='packageid';
	$fieldid1='contentid';
	$data['resultrow']=$this->sm->get_datarowwhere('packagesdetails',$id,$fieldid1);



	$this->load->view('services/editpackagedetails',$data);



}





public function listsolutions(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$config = array();
	$config["base_url"] = base_url() . "Welcome/listsolutions";
	$config["total_rows"] = $this->sm->get_countsolutions();
	$config["per_page"] = 10;
	$config["uri_segment"] = 3;
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["links"] = $this->pagination->create_links();	
	$data['result']=$this->sm->get_solutions($config["per_page"], $page);
	$this->db2->from('problems');
    $query = $this->db2->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();	
	$this->load->view('services/listsolutions',$data);
}


public function deletesolution(){
	$id=$_GET['prbid'];
	$this->db2->where('problemid',$id);
	$this->db2->delete('problems');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Solution' : 'Solution deleted Successfully';


}

public function deleteitem(){
	$id=$_GET['id'];
	$this->db2->where('itemid',$id);
	$this->db2->delete('item');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Item' : 'Item deleted Successfully';


}


public function deletedest(){
	$id=$_GET['id'];
	$this->db2->where('contentid',$id);
	$this->db2->delete('destination');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Work' : 'Work deleted Successfully';


}


public function deletetourservices(){
	$id=$_GET['id'];
	$this->db2->where('contentid',$id);
	$this->db2->delete('tourservices');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting services' : 'services deleted Successfully';


}


public function deletetraveldetails(){
	$id=$_GET['id'];
	$this->db2->where('contentid',$id);
	$this->db2->delete('traveldetails');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Traveldetails ' : 'Traveldetails  deleted Successfully';


}

public function deletecarousel(){
	$id=$_GET['id'];
	$this->db2->where('carouselid',$id);
	$this->db2->delete('carousel');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Carousel' : 'Carousel deleted Successfully';


}


public function deletesteps(){
	$id=$_GET['prbid'];
	$this->db2->where('stepid',$id);
	$this->db2->delete('solutionsteps');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Services Steps' : 'Services Steps deleted Successfully';


}

public function deletefeature(){
	$id=$_GET['id'];
	$this->db2->where('featureid',$id);
	$this->db2->delete('featureupdate');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Feature Update' : 'Feature Update deleted Successfully';


}


public function deleteauth(){
	$id=$_GET['id'];
	$this->db2->where('imgid',$id);
	$this->db2->delete('authority');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Clients' : 'Clients deleted Successfully';


}

public function deletegallery(){
	$id=$_GET['id'];
	$this->db2->where('imgid',$id);
	$this->db2->delete('packagesgallery');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting gallery' : 'Gallery deleted Successfully';


}

public function deletekeywords(){
	$id=$_GET['id'];
	$this->db2->where('productid',$id);
	$this->db2->delete('products');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Keywords' : 'Keywords deleted Successfully';


}







public function deleteproductimages(){
	$id=$_GET['id'];
	$this->db2->where('imgid',$id);
	$this->db2->delete('productimages');
	echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Product Images' : 'Product Images deleted Successfully';


}



public function editsolutions(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$id=$this->uri->segment(3);
	$this->db2->where('problemid',$id); 
	$this->db2->from('problems');
    $query = $this->db2->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editsolutions',$data);



}



public function addservicessteps(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	//this->db2->from('faq');
    //$query = $this->db2->get();
    //$data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/addservicessteps',$data);



}

public function addservicesstepsprocess(){
	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'servicessteps'.'.'.$ext;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/servicessteps';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/servicessteps' . $new_name)) {
				echo 'File already exists : uploads/servicessteps' . $new_name;
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	$image1=$new_name;

	 $title=$this->input->post('maintitle');
	//$link=$this->input->post('link');
	 $description=$this->input->post('description');
	 $alttag1=$this->input->post('alttag1');
	  //$place=$this->input->post('place');
	  $status=$this->input->post('status');
	  
	 $data = array(
		 'description' =>"$description",
		 //'link' =>"$link",
		 'title'=>"$title",
		 'picture'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status"		
	  );
	  //print_r($data);
	  $id=$this->uri->segment(3); 
	  //$this->db2->where('testimonialid',$id);
	   //$this->db2->update('testimonials', $data);
	   $this->db2->insert('solutionsteps', $data);

	  echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Services Steps' : '<b>Services Steps Added Successfully</b>';

}

public function listservicessteps(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$config = array();
	$config["base_url"] = base_url() . "Welcome/listservicessteps";
	$config["total_rows"] = $this->sm->get_countservicessteps();
	$config["per_page"] = 10;
	$config["uri_segment"] = 3;
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["links"] = $this->pagination->create_links();	
	$data['result']=$this->sm->get_servicessteps($config["per_page"], $page);
	$this->db2->from('problems');
    $query = $this->db2->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();	
	$this->load->view('services/listservicessteps',$data);



}


public function editsteps(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$id=$this->uri->segment(3);
	$this->db2->where('stepid',$id); 
	$this->db2->from('solutionsteps');
    $query = $this->db2->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editsteps',$data);



}





public function editdownloadsprocess(){
/*$config['upload_path'] = 'uploads/servicessteps';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/servicessteps' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/servicessteps' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}

	$image1=$_FILES['image1']['name'];*/
	//$this->db2->where('stepid',$stepid);
	$downloadid=$this->input->post('downloadid');
	$this->db2->where('downloadid',$downloadid);
	$this->db2->select('*');
    $this->db2->from('downloads');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->picture;
   //$file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);

	//if (($_FILES["image1"]["name"])!=''){
		//if (isset($_FILES['image1']['name'])) {
			if (($_FILES['image1']['name'])!='') {
		$file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);
		$new_name1 = time().'downloads.'.$file_ext;
		 $config['file_name'] = $new_name1;
		 $config['upload_path'] = 'uploads/downloads';
		 $config['allowed_types'] = 'gif|jpg|png|jpeg';	
		 $config['max_size'] = '1024'; //1 MB
		 $this->load->library('upload', $config);
		 $this->upload->initialize($config);
		 if (isset($_FILES['image1']['name'])) {
			 if (0 < $_FILES['image1']['error']) {
				 echo 'Error during file upload'.$new_name1;
			 } else {
				 if (file_exists('uploads/downloads/'.$new_name1)) {
					 echo 'File already exists : uploads/downloads/'.$new_name1;
				 } else {
					 
					 if (!$this->upload->do_upload('image1')) {
						 //echo $this->upload->display_errors();
					 } else {
						 //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
					 }
				 }
			 }
			 $image1=$new_name1;
		 } else {
			 $image1=$new_name1;
		 }
		 
	 }
	 else{
		 $image1=$image11;
	 }



	//$image2=$_FILES['image2']['name'];

	 $title=$this->input->post('title');
	 $metatag=$this->input->post('metatag');
	 $description=$this->input->post('description');
	$downloadid=$this->input->post('downloadid');
	$alttag1=$this->input->post('alttagimg1');
	$status=$this->input->post('status');
	  //$date=$this->input->post('date');
	  /*if ($image1==''){
		$data = array(
			'description' =>"$description",
			'alttagimg1'=>"$alttag1",
			'title'=>"$title",'active'=>"$status"
			//'picture'=>$image1,
			//'link' =>"$link",
			//,'place'=>$place,'date'=>$date,'title'=>$testtitle		
		 );

	  }else {*/
	 $data = array(
		 'description' =>"$description",
		 'alttagimg1'=>"$alttag1",
		 'title'=>"$title",
		 'picture'=>$image1,
		 'metatag' =>"$metatag",
		 'active'=>"$status"
		 //,'place'=>$place,'date'=>$date,'title'=>$testtitle		
	  );
	//}
	  //print_r($data);
	  $id=$this->uri->segment(3); 
	  //echo $downloadid;
	  //die;
	  $this->db2->where('downloadid',$downloadid);
	   $this->db2->update('downloads', $data);
	   //$this->db2->insert('problems', $data);

	  //echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Solutions' : '<b>Solutions Added Successfully</b>';
	  ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing downloads') : $this->session->set_flashdata('flash_msg', 'Downloads Edited Successfully');
	  redirect("welcome/adddownloads");
	}


	public function editbookprocess(){

		$id=$this->input->post('id');
		$this->db2->where('bookingid',$id);
		$this->db2->select('*');
		$this->db2->from('booking');
		$query = $this->db2->get();
	   $imgdetails=$query->row();
	   $image11=$imgdetails->picture;
	   $image22=$imgdetails->picture;
	   //$file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);
	
		//if (($_FILES["image1"]["name"])!=''){
			//if (isset($_FILES['image1']['name'])) {
				if (($_FILES['image1']['name'])!='') {
			$file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);
			$new_name1 = time().'book.'.$file_ext;
			 $config['file_name'] = $new_name1;
			 $config['upload_path'] = 'uploads/book';
			 $config['allowed_types'] = 'gif|jpg|png|jpeg';	
			 $config['max_size'] = '1024'; //1 MB
			 $this->load->library('upload', $config);
			 $this->upload->initialize($config);
			 if (isset($_FILES['image1']['name'])) {
				 if (0 < $_FILES['image1']['error']) {
					 echo 'Error during file upload'.$new_name1;
				 } else {
					 if (file_exists('uploads/book/'.$new_name1)) {
						 echo 'File already exists : uploads/book/'.$new_name1;
					 } else {
						 
						 if (!$this->upload->do_upload('image1')) {
							 //echo $this->upload->display_errors();
						 } else {
							 //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
						 }
					 }
				 }
				 $image1=$new_name1;
			 } else {
				 $image1=$new_name1;
			 }
			 
		 }
		 else{
			 $image1=$image11;
		 }
	
	


		 if (($_FILES['image2']['name'])!='') {
			$file_ext = pathinfo($_FILES["image2"]["name"],PATHINFO_EXTENSION);
			$new_name2 = time().'book2.'.$file_ext;
			 $config['file_name'] = $new_name2;
			 $config['upload_path'] = 'uploads/book';
			 $config['allowed_types'] = 'gif|jpg|png|jpeg';	
			 $config['max_size'] = '1024'; //1 MB
			 $this->load->library('upload', $config);
			 $this->upload->initialize($config);
			 if (isset($_FILES['image2']['name'])) {
				 if (0 < $_FILES['image2']['error']) {
					 echo 'Error during file upload'.$new_name2;
				 } else {
					 if (file_exists('uploads/book/'.$new_name2)) {
						 echo 'File already exists : uploads/book/'.$new_name2;
					 } else {
						 
						 if (!$this->upload->do_upload('image2')) {
							 //echo $this->upload->display_errors();
						 } else {
							 //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
						 }
					 }
				 }
				 $image2=$new_name2;
			 } else {
				 $image2=$new_name2;
			 }
			 
		 }
		 else{
			 $image2=$image22;
		 }




	
		//$image2=$_FILES['image2']['name'];
	
		 $title=$this->input->post('title');
		 $metatag=$this->input->post('metatag');
		 $description=$this->input->post('description');
		$downloadid=$this->input->post('downloadid');
		$alttag1=$this->input->post('alttagimg1');
		$status=$this->input->post('status');
		$title2=$this->input->post('title2');
		$description2=$this->input->post('description2');
		$description3=$this->input->post('description3');
		  //$date=$this->input->post('date');
		  /*if ($image1==''){
			$data = array(
				'description' =>"$description",
				'alttagimg1'=>"$alttag1",
				'title'=>"$title",'active'=>"$status"
				//'picture'=>$image1,
				//'link' =>"$link",
				//,'place'=>$place,'date'=>$date,'title'=>$testtitle		
			 );
	
		  }else {*/
		 $data = array(
			'description3' =>"$description3",
			 'description' =>"$description",
			 'alttagimg1'=>"$alttag1",
			 'title'=>"$title",
			 'picture'=>$image1,
			 'metatag' =>"$metatag",
			 'active'=>"$status",'description2' =>"$description2",'title2'=>"$title2",'picture2'=>$image2,
			 //,'place'=>$place,'date'=>$date,'title'=>$testtitle		
		  );
		//}
		  //print_r($data);
		  //$id=$this->uri->segment(3); 
		  //echo $downloadid;
		  //die;
		  $this->db2->where('bookingid',$id);
		   $this->db2->update('booking', $data);
		   //$this->db2->insert('problems', $data);
	
		  //echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Solutions' : '<b>Solutions Added Successfully</b>';
		  ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing booking') : $this->session->set_flashdata('flash_msg', 'Booking Edited Successfully');
		  redirect("welcome/editbook");

	}



public function editpckprocess(){

	$id=$this->input->post('id');
	$this->db2->where('pckid',$id);
	$this->db2->select('*');
	$this->db2->from('packagepage');
	$query = $this->db2->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->picture;
   $image22=$imgdetails->picture;
   //$file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);

	//if (($_FILES["image1"]["name"])!=''){
		//if (isset($_FILES['image1']['name'])) {
			if (($_FILES['image1']['name'])!='') {
		$file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);
		$new_name1 = time().'pck1.'.$file_ext;
		 $config['file_name'] = $new_name1;
		 $config['upload_path'] = 'uploads/packages';
		 $config['allowed_types'] = 'gif|jpg|png|jpeg';	
		 $config['max_size'] = '1024'; //1 MB
		 $this->load->library('upload', $config);
		 $this->upload->initialize($config);
		 if (isset($_FILES['image1']['name'])) {
			 if (0 < $_FILES['image1']['error']) {
				 echo 'Error during file upload'.$new_name1;
			 } else {
				 if (file_exists('uploads/packages/'.$new_name1)) {
					 echo 'File already exists : uploads/packages/'.$new_name1;
				 } else {
					 
					 if (!$this->upload->do_upload('image1')) {
						 //echo $this->upload->display_errors();
					 } else {
						 //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
					 }
				 }
			 }
			 $image1=$new_name1;
		 } else {
			 $image1=$new_name1;
		 }
		 
	 }
	 else{
		 $image1=$image11;
	 }




	 if (($_FILES['image2']['name'])!='') {
		$file_ext = pathinfo($_FILES["image2"]["name"],PATHINFO_EXTENSION);
		$new_name2 = time().'pck2.'.$file_ext;
		 $config['file_name'] = $new_name2;
		 $config['upload_path'] = 'uploads/packages';
		 $config['allowed_types'] = 'gif|jpg|png|jpeg';	
		 $config['max_size'] = '1024'; //1 MB
		 $this->load->library('upload', $config);
		 $this->upload->initialize($config);
		 if (isset($_FILES['image2']['name'])) {
			 if (0 < $_FILES['image2']['error']) {
				 echo 'Error during file upload'.$new_name2;
			 } else {
				 if (file_exists('uploads/package/'.$new_name2)) {
					 echo 'File already exists : uploads/packages/'.$new_name2;
				 } else {
					 
					 if (!$this->upload->do_upload('image2')) {
						 //echo $this->upload->display_errors();
					 } else {
						 //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
					 }
				 }
			 }
			 $image2=$new_name2;
		 } else {
			 $image2=$new_name2;
		 }
		 
	 }
	 else{
		 $image2=$image22;
	 }





	//$image2=$_FILES['image2']['name'];

	 $title=$this->input->post('title');
	 $metatag=$this->input->post('metatag');
	 $description=$this->input->post('description');
	$downloadid=$this->input->post('downloadid');
	$alttag1=$this->input->post('alttagimg1');
	$status=$this->input->post('status');
	$title2=$this->input->post('title2');
	$title3=$this->input->post('title3');
	$description2=$this->input->post('description2');
	$description3=$this->input->post('description3');
	  //$date=$this->input->post('date');
	  /*if ($image1==''){
		$data = array(
			'description' =>"$description",
			'alttagimg1'=>"$alttag1",
			'title'=>"$title",'active'=>"$status"
			//'picture'=>$image1,
			//'link' =>"$link",
			//,'place'=>$place,'date'=>$date,'title'=>$testtitle		
		 );

	  }else {*/
	 $data = array(
		'description3' =>"$description3",
		 'description' =>"$description",
		 'alttagimg1'=>"$alttag1",
		 'title'=>"$title",
		 'title3'=>"$title3",
		 'picture'=>$image1,
		 'metatag' =>"$metatag",
		 'active'=>"$status",'description2' =>"$description2",'title2'=>"$title2",'picture2'=>$image2,
		 //,'place'=>$place,'date'=>$date,'title'=>$testtitle		
	  );
	//}
	  //print_r($data);
	  //$id=$this->uri->segment(3); 
	  //echo $downloadid;
	  //die;
	  $this->db2->where('pckid',$id);
	   $this->db2->update('packagepage', $data);
	   //$this->db2->insert('problems', $data);

	  //echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Solutions' : '<b>Solutions Added Successfully</b>';
	  ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Package Page') : $this->session->set_flashdata('flash_msg', 'Package Page Edited Successfully');
	  redirect("welcome/editpackagepage");










}





















public function editservicesstepsprocess(){
	/*$config['upload_path'] = 'uploads/servicessteps';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/servicessteps' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/servicessteps' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}

	$image1=$_FILES['image1']['name'];*/
	//$this->db2->where('stepid',$stepid);
	$stepid=$this->input->post('stepid');
	$this->db2->where('stepid',$stepid);
	$this->db2->select('*');
    $this->db2->from('solutionsteps');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->picture;
   //$file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);

	//if (($_FILES["image1"]["name"])!=''){
		//if (isset($_FILES['image1']['name'])) {
			if (($_FILES['image1']['name'])!='') {
		$file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);
		$new_name1 = time().'servicessteps.'.$file_ext;
		 $config['file_name'] = $new_name1;
		 $config['upload_path'] = 'uploads/servicessteps';
		 $config['allowed_types'] = 'gif|jpg|png|jpeg';	
		 $config['max_size'] = '1024'; //1 MB
		 $this->load->library('upload', $config);
		 $this->upload->initialize($config);
		 if (isset($_FILES['image1']['name'])) {
			 if (0 < $_FILES['image1']['error']) {
				 echo 'Error during file upload'.$new_name1;
			 } else {
				 if (file_exists('uploads/servicessteps/'.$new_name1)) {
					 echo 'File already exists : uploads/servicessteps/'.$new_name1;
				 } else {
					 
					 if (!$this->upload->do_upload('image1')) {
						 //echo $this->upload->display_errors();
					 } else {
						 //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
					 }
				 }
			 }
			 $image1=$new_name1;
		 } else {
			 $image1=$new_name1;
		 }
		 
	 }
	 else{
		 $image1=$image11;
	 }



	//$image2=$_FILES['image2']['name'];

	 $title=$this->input->post('maintitle');
	 //$link=$this->input->post('link');
	 $description=$this->input->post('description');
	$stepid=$this->input->post('stepid');
	$alttag1=$this->input->post('alttag1');
	$status=$this->input->post('status');
	  //$date=$this->input->post('date');
	  /*if ($image1==''){
		$data = array(
			'description' =>"$description",
			'alttagimg1'=>"$alttag1",
			'title'=>"$title",'active'=>"$status"
			//'picture'=>$image1,
			//'link' =>"$link",
			//,'place'=>$place,'date'=>$date,'title'=>$testtitle		
		 );

	  }else {*/
	 $data = array(
		 'description' =>"$description",
		 'alttagimg1'=>"$alttag1",
		 'title'=>"$title",
		 'picture'=>$image1,
		 'link' =>"$link",'active'=>"$status"
		 //,'place'=>$place,'date'=>$date,'title'=>$testtitle		
	  );
	//}
	  //print_r($data);
	  $id=$this->uri->segment(3); 
	  $this->db2->where('stepid',$stepid);
	   $this->db2->update('solutionsteps', $data);
	   //$this->db2->insert('problems', $data);

	  //echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Solutions' : '<b>Solutions Added Successfully</b>';
	  echo ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Steps') : $this->session->set_flashdata('flash_msg', 'Steps Edited Successfully');

}










public function addhomepagequalities(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('quality');
    $query = $this->db2->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/addqualities',$data);


}


public function edithomepagequalities(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$id=$this->uri->segment(3);
	$this->db2->where('qualityid',$id);
	$this->db2->from('quality');
    $query = $this->db2->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['quality']=$this->sm->get_quality($id);
	$data['siteinf']=$this->sm->get_siteinf();
	 
	$this->load->view('services/editqualities',$data);


}



public function  editprdspec(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$id=$this->uri->segment(3);
	$this->db2->where('prdspecid',$id);
	$this->db2->from('productspecifications');
    $query = $this->db2->get();
    $data['result']=$query->row(); 

	$this->db2->from('item');
    $query = $this->db2->get();
    $data['result1']=$query->result_array();
	//print_r($data['result']);
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['quality']=$this->sm->get_quality($id);
	$data['siteinf']=$this->sm->get_siteinf();
	 
	$this->load->view('services/editprdspec',$data);


}


public function editqualityprocess(){
	$title=$this->input->post('title');
	$qualityid=$this->input->post('qualityid');
	$orderno=$this->input->post('orderno');
	$status=$this->input->post('status');
	$data = array(
		'quality' =>"$title",
		'active' =>"$status",
		'orderno'=>"$orderno",
		//'Image1'=>$image1,'Image2'=>$image2		
	 );
	 //print_r($data);
	 $this->db2->where('qualityid',$qualityid);
	 $this->db2->update('quality', $data);

	 //echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Quality' : '<b>Quality added Successfully</b>';
	 echo ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Quality') : $this->session->set_flashdata('flash_msg', 'Quality Edited Successfully');


}


public function editservicedetails(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$id=$this->uri->segment(3);
	//$this->db2->where('qualityid',$id);
	$this->db2->from('servicedetails');
    $query = $this->db2->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['quality']=$this->sm->get_quality($id);
	$data['siteinf']=$this->sm->get_siteinf();
	 
	$this->load->view('services/editservicesdetails',$data);


}

public function editservicesdetailsprocess(){
	$title=$this->input->post('title');
	$solution=$this->input->post('solution');
	$data = array(
		'servicedttitle' =>"$title",
		//'subtitle' =>"$subtitle",
		'servicedtsolution'=>"$solution",
		//'Image1'=>$image1,'Image2'=>$image2		
	 );
	 //print_r($data);
	 //$this->db2->where('qualityid',$qualityid);
	 $this->db2->update('servicedetails', $data);

	 //echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Quality' : '<b>Quality added Successfully</b>';
	 ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Service details') : $this->session->set_flashdata('flash_msg', 'Service details Edited Successfully');
	 redirect("welcome/listservicesdetails");

}



public function generatesitemap(){
	$data['result']=$this->sm->get_newsletterall();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/listsitemap',$data);
}


public function adddownloads(){
	$data['result']=$this->sm->get_downloads();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/listdownloads',$data);
}
public function listbookings(){
	$data['result']=$this->sm->get_bookings();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/listbookings',$data);
}


public function editdownloads(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	//$id=$this->uri->segment(3);
	//$this->db2->where('stepid',$id); 
	$this->db2->from('downloads');
    $query = $this->db2->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editdownloads',$data);



}



public function editbook(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	//$id=$this->uri->segment(3);
	//$this->db2->where('stepid',$id); 
	$this->db2->from('booking');
    $query = $this->db2->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editbooking',$data);



}



public function editpackagepage(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	//$id=$this->uri->segment(3);
	//$this->db2->where('stepid',$id); 
	$this->db2->from('packagepage');
    $query = $this->db2->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editpackagepage',$data);



}








public function listprdspec(){

	if($this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listprdspec";
//$config["total_rows"] = $this->sm->get_countquality();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
//$data['result']=$this->sm->get_qualityadmin($config["per_page"],$page);
$data['contactus']=$this->sm->get_contactus();
$data['newsletter']=$this->sm->get_newsletter();
$data['siteinf']=$this->sm->get_siteinf();
$data['prdspec']=$this->sm->get_prdspec();
$this->load->view('services/listprdspec',$data);





}





public function addprdspec(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db2->from('item');
    $query = $this->db2->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/addprdspec',$data);


}




public function addcarousalprocess(){

	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'carousel'.'.'.$ext;
	$config['file_name'] = $new_name;

	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/carousel';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/carousel' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/carousel' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	$image1=$new_name;


	 $title=$this->input->post('maintitle');

	 $title2=$this->input->post('title2');
	 $title3=$this->input->post('title3');
	 $title4=$this->input->post('title4');
	//$link=$this->input->post('link');
	 //$description=$this->input->post('description');
	 $alttag1=$this->input->post('alttag1');
	 $status=$this->input->post('status');
	 $showinfront=$this->input->post('showinfront');
	  
	 $data = array(
		 //'description' =>"$description",
		 'showinfront'=>"$showinfront",
		 'title'=>"$title",
		 'title2'=>"$title2",
		 'title3'=>"$title3",
		 'title4'=>"$title4",
		 'picture'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status"		
	  );
	  //print_r($data);
	  $id=$this->uri->segment(3); 
	  //$this->db2->where('testimonialid',$id);
	   //$this->db2->update('testimonials', $data);
	   //$this->db2->insert('problems', $data);
	   
	   $this->db2->insert('carousel', $data);
	  echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Carousel' : '<b>Carousel Added Successfully</b>';



}




public function editcarousalprocess(){



	$id=$this->input->post('id');
	$this->db2->where('carouselid',$id);
	$this->db2->select('*');
    $this->db2->from('carousel');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->picture;
	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'carousel'.'.'.$ext;
	$config['file_name'] = $new_name;

	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/carousel';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	//if (isset($_FILES['image1']['name'])) {
		if (($_FILES['image1']['name'])!='') {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/carousel' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/carousel' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image1=$new_name;
	} else {
		$image1=$image11;
	}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	


	 $title=$this->input->post('maintitle');

	 $title2=$this->input->post('title2');
	 $title3=$this->input->post('title3');
	 $title4=$this->input->post('title4');
	//$link=$this->input->post('link');
	 //$description=$this->input->post('description');
	 $alttag1=$this->input->post('alttag1');
	 $status=$this->input->post('status');
	 $showinfront=$this->input->post('showinfront');
	  
	 $data = array(
		 //'description' =>"$description",
		 'showinfront'=>"$showinfront",
		 'title'=>"$title",
		 'title2'=>"$title2",
		 'title3'=>"$title3",
		 'title4'=>"$title4",
		 'picture'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status"		
	  );
	  //print_r($data);
	  $id=$this->input->post('id'); 
	  $this->db2->where('carouselid',$id);
	  $this->db2->update('carousel', $data);
	   //$this->db2->insert('problems', $data);
	   
	   //$this->db2->insert('carousel', $data);
	  echo ($this->db2->affected_rows() != 1) ? 'Error in Editing Carousel' : '<b>Carousel Edited Successfully</b>';



}




















public function addprdimgprocess(){

	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'carousel'.'.'.$ext;
	$config['file_name'] = $new_name;

	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/item';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/item' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/item' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	$image1=$new_name;


	 $prd=$this->input->post('prd');

	 //$title2=$this->input->post('title2');
	 //$title3=$this->input->post('title3');
	 //$title4=$this->input->post('title4');
	//$link=$this->input->post('link');
	 //$description=$this->input->post('description');
	 $alttag1=$this->input->post('alttag1');
	 $status=$this->input->post('status');
	  //$date=$this->input->post('date');
	  
	 $data = array(
		 //'description' =>"$description",
		 //'link' =>"$link",
		 'productid'=>"$prd",
		 //'title2'=>"$title2",
		 //'title3'=>"$title3",
		 //'title4'=>"$title4",
		 'picture'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status"		
	  );
	  //print_r($data);
	  $id=$this->uri->segment(3); 
	  //$this->db2->where('testimonialid',$id);
	   //$this->db2->update('testimonials', $data);
	   //$this->db2->insert('problems', $data);
	   
	   $this->db2->insert('productimages', $data);
	  echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Images' : '<b>Images Added Successfully</b>';



}



public function addfeatureupdateprocess(){

	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'featureicon'.'.'.$ext;
	$config['file_name'] = $new_name;

	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/featureicon';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/featureicon' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/featureicon' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	$image1=$new_name;


	 $prd=$this->input->post('prd');

	 //$title2=$this->input->post('title2');
	 //$title3=$this->input->post('title3');
	 //$title4=$this->input->post('title4');
	//$link=$this->input->post('link');
	 //$description=$this->input->post('description');
	 $alttag1=$this->input->post('alttag1');
	 $status=$this->input->post('status');
	  //$date=$this->input->post('date');
	  
	 $data = array(
		 //'description' =>"$description",
		 //'link' =>"$link",
		 //'productid'=>"$prd",
		 //'title2'=>"$title2",
		 //'title3'=>"$title3",
		 //'title4'=>"$title4",
		 'featureicon'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status"		
	  );
	  //print_r($data);
	  $id=$this->uri->segment(3); 
	  //$this->db2->where('testimonialid',$id);
	   //$this->db2->update('testimonials', $data);
	   //$this->db2->insert('problems', $data);
	   
	   $this->db2->insert('featureupdate', $data);
	  echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Images' : '<b>Images Added Successfully</b>';



}



public function addauthorityprocess(){

	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'authority'.'.'.$ext;
	$config['file_name'] = $new_name;

	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/authority';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/authority' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/authority' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	$image1=$new_name;


	 $prd=$this->input->post('prd');

	 //$title2=$this->input->post('title2');
	 //$title3=$this->input->post('title3');
	 //$title4=$this->input->post('title4');
	//$link=$this->input->post('link');
	 //$description=$this->input->post('description');
	 $alttag1=$this->input->post('alttag1');
	 $status=$this->input->post('status');
	  //$date=$this->input->post('date');
	  
	 $data = array(
		 //'description' =>"$description",
		 //'link' =>"$link",
		 //'productid'=>"$prd",
		 //'title2'=>"$title2",
		 //'title3'=>"$title3",
		 //'title4'=>"$title4",
		 'picture'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status"		
	  );
	  //print_r($data);
	  $id=$this->uri->segment(3); 
	  //$this->db2->where('testimonialid',$id);
	   //$this->db2->update('testimonials', $data);
	   //$this->db2->insert('problems', $data);
	   
	   $this->db2->insert('authority', $data);
	  echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Clients' : '<b>Clients Added Successfully</b>';



}

public function addgalleryprocess(){

	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'gallery'.'.'.$ext;
	$config['file_name'] = $new_name;

	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/packagesgallery';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/packagesgallery' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/packagesgallery' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	$image1=$new_name;


	 $prd=$this->input->post('prd');

	 //$title2=$this->input->post('title2');
	 //$title3=$this->input->post('title3');
	 //$title4=$this->input->post('title4');
	//$link=$this->input->post('link');
	 //$description=$this->input->post('description');
	 $alttag1=$this->input->post('alttag1');
	 $status=$this->input->post('status');
	  $package=$this->input->post('package');
	  
	 $data = array(
		 //'description' =>"$description",
		 //'link' =>"$link",
		 //'productid'=>"$prd",
		 //'title2'=>"$title2",
		 //'title3'=>"$title3",
		 'packageid'=>"$package",
		 'picture'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status"		
	  );
	  //print_r($data);
	  $id=$this->uri->segment(3); 
	  //$this->db2->where('testimonialid',$id);
	   //$this->db2->update('testimonials', $data);
	   //$this->db2->insert('problems', $data);
	   
	   $this->db2->insert('packagesgallery', $data);
	  echo ($this->db2->affected_rows() != 1) ? 'Error in Adding gallery' : '<b>Gallery Added Successfully</b>';

	}




public function editprdimgprocess(){


	$id=$this->input->post('id');
	$this->db2->where('imgid',$id);
	$this->db2->select('*');
    $this->db2->from('productimages');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->picture;

	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'carousel'.'.'.$ext;
	$config['file_name'] = $new_name;

	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/item';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (($_FILES['image1']['name'])!='') {
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/item' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/item' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	$image1=$new_name;
}else {

	$image1=$image11;

}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	


	 $prd=$this->input->post('prd');

	 //$title2=$this->input->post('title2');
	 //$title3=$this->input->post('title3');
	 //$title4=$this->input->post('title4');
	//$link=$this->input->post('link');
	 //$description=$this->input->post('description');
	 $alttag1=$this->input->post('alttag1');
	 $status=$this->input->post('status');
	  //$date=$this->input->post('date');
	  
	 $data = array(
		 //'description' =>"$description",
		 //'link' =>"$link",
		 'productid'=>"$prd",
		 //'title2'=>"$title2",
		 //'title3'=>"$title3",
		 //'title4'=>"$title4",
		 'picture'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status"		
	  );
	  //print_r($data);
	  $id=$this->input->post('id');
	  $this->db2->where('imgid',$id);
	   $this->db2->update('productimages', $data);
	   //$this->db2->insert('problems', $data);
	   
	   //$this->db2->insert('productimages', $data);
	  echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Images' : '<b>Images Added Successfully</b>';
	  redirect("welcome/listproductimages");


}






public function editfupprocess(){


	$id=$this->input->post('id');
	$this->db2->where('featureid',$id);
	$this->db2->select('*');
    $this->db2->from('featureupdate');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->featureicon;

	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'featureicon'.'.'.$ext;
	$config['file_name'] = $new_name;

	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/featureicon';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (($_FILES['image1']['name'])!='') {
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/featureicon' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/featureicon' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	$image1=$new_name;
}else {

	$image1=$image11;

}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	


	 $prd=$this->input->post('prd');

	 //$title2=$this->input->post('title2');
	 //$title3=$this->input->post('title3');
	 //$title4=$this->input->post('title4');
	//$link=$this->input->post('link');
	 //$description=$this->input->post('description');
	 $alttag1=$this->input->post('alttag1');
	 $status=$this->input->post('status');
	  //$date=$this->input->post('date');
	  
	 $data = array(
		 //'description' =>"$description",
		 //'link' =>"$link",
		 //'productid'=>"$prd",
		 //'title2'=>"$title2",
		 //'title3'=>"$title3",
		 //'title4'=>"$title4",
		 'featureicon'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status"		
	  );
	  //print_r($data);
	  $id=$this->input->post('id');
	  $this->db2->where('featureid',$id);
	   $this->db2->update('featureupdate', $data);
	   //$this->db2->insert('problems', $data);
	   
	   //$this->db2->insert('productimages', $data);
	  echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Images' : '<b>Images Added Successfully</b>';
	  redirect("welcome/listfeatureupdate");


}




public function editauthorityprocess(){


	$id=$this->input->post('id');
	$this->db2->where('imgid',$id);
	$this->db2->select('*');
    $this->db2->from('authority');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->picture;

	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'featureicon'.'.'.$ext;
	$config['file_name'] = $new_name;

	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/authority';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (($_FILES['image1']['name'])!='') {
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/featureicon' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/featureicon' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	$image1=$new_name;
}else {

	$image1=$image11;

}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	


	 $prd=$this->input->post('prd');

	 //$title2=$this->input->post('title2');
	 //$title3=$this->input->post('title3');
	 //$title4=$this->input->post('title4');
	//$link=$this->input->post('link');
	 //$description=$this->input->post('description');
	 $alttag1=$this->input->post('alttag1');
	 $status=$this->input->post('status');
	  //$date=$this->input->post('date');
	  
	 $data = array(
		 //'description' =>"$description",
		 //'link' =>"$link",
		 //'productid'=>"$prd",
		 //'title2'=>"$title2",
		 //'title3'=>"$title3",
		 //'title4'=>"$title4",
		 'picture'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status"		
	  );
	  //print_r($data);
	  $id=$this->input->post('id');
	  $this->db2->where('imgid',$id);
	   $this->db2->update('authority', $data);
	   //$this->db2->insert('problems', $data);
	   
	   //$this->db2->insert('productimages', $data);
	  echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Authority' : '<b>Authority Added Successfully</b>';
	  redirect("welcome/listauthority");


}



public function editgalleryprocess(){



	$id=$this->input->post('id');
	$this->db2->where('imgid',$id);
	$this->db2->select('*');
    $this->db2->from('packagesgallery');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->picture;

	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'packagesgallery'.'.'.$ext;
	$config['file_name'] = $new_name;

	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/packagesgallery';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (($_FILES['image1']['name'])!='') {
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/packagesgallery' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/packagesgallery' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	$image1=$new_name;
}else {

	$image1=$image11;

}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	


	 $prd=$this->input->post('prd');

	 //$title2=$this->input->post('title2');
	 //$title3=$this->input->post('title3');
	 //$title4=$this->input->post('title4');
	//$link=$this->input->post('link');
	 //$description=$this->input->post('description');
	 $alttag1=$this->input->post('alttag1');
	 $status=$this->input->post('status');
	  //$date=$this->input->post('date');
	  
	 $data = array(
		 //'description' =>"$description",
		 //'link' =>"$link",
		 'packageid'=>"$prd",
		 //'title2'=>"$title2",
		 //'title3'=>"$title3",
		 //'title4'=>"$title4",
		 'picture'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status"		
	  );
	  //print_r($data);
	  $id=$this->input->post('id');
	  $this->db2->where('imgid',$id);
	   $this->db2->update('packagesgallery', $data);
	   //$this->db2->insert('problems', $data);
	   
	   //$this->db2->insert('productimages', $data);
	  echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Picture' : '<b>Picture Added Successfully</b>';
	  redirect("welcome/listgallery");





}


















public function addproductprocess(){

	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'item'.'.'.$ext;
	$config['file_name'] = $new_name;

	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/item';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/item' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/item' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	$image1=$new_name;


	 $prdname=$this->input->post('prdname');

	 $model=$this->input->post('model');
	 $prdtype=$this->input->post('prdtype');
	 //$title4=$this->input->post('title4');
	//$link=$this->input->post('link');
	 $description=$this->input->post('description');
	 $alttag1=$this->input->post('alttag1');
	 $status=$this->input->post('status');
	  //$date=$this->input->post('date');
	  
	 $data = array(
		 //'description' =>"$description",
		 //'link' =>"$link",
		 'itemdesc' =>"$description",
		 'model'=>"$model",
		 'type'=>"$prdtype",
		 //'title3'=>"$title3",
		'itemname'=>"$prdname",
		 'picture'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status"		
	  );
	  //print_r($data);
	  $id=$this->uri->segment(3); 
	  //$this->db2->where('testimonialid',$id);
	   //$this->db2->update('testimonials', $data);
	   //$this->db2->insert('problems', $data);
	   
	   $this->db2->insert('item', $data);
	  echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Item' : '<b>Item Added Successfully</b>';



}





public function adddestinationprocess(){



	
	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'dest'.'.'.$ext;
	$config['file_name'] = $new_name;

	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/dest';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/dest' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/dest' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	$image1=$new_name;


	 $place=$this->input->post('place');

	 $country=$this->input->post('country');
	 $noofstars=$this->input->post('rating');
	 //$title4=$this->input->post('title4');
	//$link=$this->input->post('link');
	 $description=$this->input->post('description');
	 $alttag1=$this->input->post('alttag1');
	 $status=$this->input->post('status');
	  $showinfront=$this->input->post('showinfront');
	  
	 $data = array(
		 //'description' =>"$description",
		 //'link' =>"$link",
		 'description1' =>"$description",
		 'city'=>"$place",
		 'country'=>"$country",
		 'showinfront'=>"$showinfront",
		'noofstars '=>"$noofstars",
		 'picture'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status"		
	  );
	  //print_r($data);
	  $id=$this->uri->segment(3); 
	  //$this->db2->where('testimonialid',$id);
	   //$this->db2->update('testimonials', $data);
	   //$this->db2->insert('problems', $data);
	   
	   $this->db2->insert('destination', $data);
	  echo ($this->db2->affected_rows() != 1) ? 'Error in Adding destination' : '<b>Destination Added Successfully</b>';






	
}

public function editdestinationprocess(){


	$id=$this->input->post('id'); 
	$this->db2->where('contentid',$id);
  $this->db2->select('*');
  $this->db2->from('destination');
  $query = $this->db2->get();
 $imgdetails=$query->row();
 //print_r($imgdetails);
 //die;
 $image11=$imgdetails->picture;
//echo $this->db2->lastquery();
//die;
 $file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);
  //$file_name=$_FILES['image1']['name'];
  //$newfile_name= preg_replace('/[^A-Za-z0-9]/', "", $file_name);
  //$//ext=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
  $new_name = time().'destination'.'.'.$file_ext;
  $config['file_name'] = $new_name;
  $config['upload_path'] = 'uploads/dest';
  $config['allowed_types'] = 'gif|jpg|png|jpeg';	
  $config['max_size'] = '1024'; //1 MB
  $this->load->library('upload', $config);
  $this->upload->initialize($config);
  if (isset($_FILES['image1']['name'])) {
	  if (0 < $_FILES['image1']['error']) {
		  echo 'Error during file upload' . $_FILES['image1']['error'];
	  } else {
		  if (file_exists('uploads/dest/'.$new_name)) {
			  //echo 'File already exists : uploads/contactus/'.$new_name;
			  $image1=$image11;
		  } else {
			  
			  if (!$this->upload->do_upload('image1')) {
				  //echo $this->upload->display_errors();
			  } else {
				  //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				  $image1=$new_name;
			  }
			  $image1=$image11;

		  }
	  }
	  $image1=$new_name;;

  } else {
	  //echo 'Please choose a file';
	  $image1=$image11;

  }








	$place=$this->input->post('place');

	$country=$this->input->post('country');
	$noofstars=$this->input->post('rating');
	//$title4=$this->input->post('title4');
   //$link=$this->input->post('link');
	$description=$this->input->post('description');
	$alttag1=$this->input->post('alttag1');
	$status=$this->input->post('status');
	$showinfront=$this->input->post('showinfront');
	 
	$data = array(
		//'description' =>"$description",
		//'link' =>"$link",
		'description1' =>"$description",
		'city'=>"$place",
		'country'=>"$country",
		'showinfront'=>"$showinfront",
	   'noofstars '=>"$noofstars",
		'picture'=>$image1,
		'alttagimg1'=>"$alttag1",'active'=>"$status"		
	 );
	 //print_r($data);
	 //$id=$this->uri->segment(3); 
	 $this->db2->where('contentid',$id);
	  $this->db2->update('destination', $data);
	  //echo $this->db2->query();
	  //die;
	  //$this->db2->insert('problems', $data);
	  
	 // $this->db2->insert('destination', $data);
	 //echo ($this->db2->affected_rows() != 1) ? 'Error in Adding destination' : '<b>Destination Added Successfully</b>';
	 ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in destination') : $this->session->set_flashdata('flash_msg', 'Destination Edited Successfully');

	  redirect("Welcome/listdestinations");

	}







public function addtourservicesprocess(){



	
	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'tour'.'.'.$ext;
	$config['file_name'] = $new_name;

	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/tour';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/tour' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/tour' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	$image1=$new_name;


	 $place=$this->input->post('place');

	 $country=$this->input->post('country');
	 $noofstars=$this->input->post('rating');
	 //$title4=$this->input->post('title4');
	//$link=$this->input->post('link');
	 $description=$this->input->post('description');
	 $alttag1=$this->input->post('alttag1');
	 $status=$this->input->post('status');
	  //$date=$this->input->post('date');
	  
	 $data = array(
		 //'description' =>"$description",
		 //'link' =>"$link",
		 'description1' =>"$description",
		 'city'=>"$place",
		 'country'=>"$country",
		 //'title3'=>"$title3",
		'noofstars '=>"$noofstars",
		 'picture'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status"		
	  );
	  //print_r($data);
	  $id=$this->uri->segment(3); 
	  //$this->db2->where('testimonialid',$id);
	   //$this->db2->update('testimonials', $data);
	   //$this->db2->insert('problems', $data);
	   
	   $this->db2->insert('tourservices', $data);
	  echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Services' : '<b>Services Added Successfully</b>';






	
}

























public function edittourservicesprocess(){
	$id=$this->input->post('id');
	$this->db2->where('contentid',$id);
	$this->db2->select('*');
    $this->db2->from('tourservices');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->picture;


	
	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'tour'.'.'.$ext;
	$config['file_name'] = $new_name;

	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/tour';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (($_FILES['image1']['name'])!='') {
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/tour' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/tour' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	$image1=$new_name;
}else{
	$image1=$image11;

}



$place=$this->input->post('place');

$country=$this->input->post('country');
$noofstars=$this->input->post('rating');
//$title4=$this->input->post('title4');
//$link=$this->input->post('link');
$description=$this->input->post('description');
$alttag1=$this->input->post('alttag1');
$status=$this->input->post('status');
 //$date=$this->input->post('date');
 
$data = array(
	//'description' =>"$description",
	//'link' =>"$link",
	'description1' =>"$description",
	'city'=>"$place",
	'country'=>"$country",
	//'title3'=>"$title3",
   'noofstars '=>"$noofstars",
	'picture'=>$image1,
	'alttagimg1'=>"$alttag1",'active'=>"$status"		
 );
	  $this->db2->where('contentid',$id);
	 //$this->db2->update('testimonials', $data);
	   //$this->db2->insert('problems', $data);
	   
	   $this->db2->update('tourservices', $data);

	   //echo $this->db2->lastquery();
	     //echo $this->db2->last_query();
		 //die;


	  echo ($this->db2->affected_rows() != 1) ? 'Error in Editing Tour Services' : '<b>Tour Services Edited Successfully</b>';


}








public function addtraveldetailsprocess(){



	
	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'tour'.'.'.$ext;
	$config['file_name'] = $new_name;

	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/tour';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/tour' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/tour' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	$image1=$new_name;


	 $place=$this->input->post('place');

	 $country=$this->input->post('country');
	 $noofstars=$this->input->post('rating');
	 //$title4=$this->input->post('title4');
	//$link=$this->input->post('link');
	 $description=$this->input->post('description');
	 $alttag1=$this->input->post('alttag1');
	 $status=$this->input->post('status');
	  //$date=$this->input->post('date');
	  
	 $data = array(
		 //'description' =>"$description",
		 //'link' =>"$link",
		 'description1' =>"$description",
		 'city'=>"$place",
		 'country'=>"$country",
		 //'title3'=>"$title3",
		'noofstars '=>"$noofstars",
		 'picture'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status"		
	  );
	  //print_r($data);
	  $id=$this->uri->segment(3); 
	  //$this->db2->where('testimonialid',$id);
	   //$this->db2->update('testimonials', $data);
	   //$this->db2->insert('problems', $data);
	   
	   $this->db2->insert('traveldetails', $data);
	  echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Travel details' : '<b>Travel details Added Successfully</b>';






	
}

public function addpackagesprocess(){


	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'tour'.'.'.$ext;
	$config['file_name'] = $new_name;

	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/packages';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/packages' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/packages' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	$image1=$new_name;


	 $place=$this->input->post('place');

	 $country=$this->input->post('country');
	 $noofstars=$this->input->post('rating');
	$noofpeople=$this->input->post('noofpeople');
	$touristplace=$this->input->post('touristplace');
	 $description=$this->input->post('description');
	 $alttag1=$this->input->post('alttag1');
	 $status=$this->input->post('status');
	  $duration=$this->input->post('duration');
	  $noofreviews=$this->input->post('noofreviews');
	  $noofpeople=$this->input->post('noofpeople');
	  $duration=$this->input->post('duration');
	  $packagerate=$this->input->post('packagerate');
	  $packagetype=$this->input->post('packagetype');
	  $packagetitle=$this->input->post('packagetitle');
	  $packagesim=$this->input->post('packagesim');
	  //$packagesim1=implode(",",$packagesim);
	 $data = array(
		'similarpackages' =>"$packagesim",
		 'duration' =>"$duration",
		 'packagerate' =>"$packagerate",
		 'noofreviews' =>"$noofreviews",
		 'description1' =>"$description",
		 'city'=>"$place",
		 'country'=>"$country",
		'noofpeople'=>"$noofpeople",
		'noofstars '=>"$noofstars",
		 'picture'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status",'type'=>$packagetype,'title'=>$packagetitle		
	  );
	  //print_r($data);
	  $id=$this->uri->segment(3); 
	  //$this->db2->where('testimonialid',$id);
	   //$this->db2->update('testimonials', $data);
	   //$this->db2->insert('problems', $data);
	   
	   $this->db2->insert('packages', $data);
	  echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Packages' : '<b>Packages Added Successfully</b>';



}


public function addpackagesdetailsprocess(){


	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'packages'.'.'.$ext;
	$config['file_name'] = $new_name;

	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/packagesdetails';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/packagesdetails' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/packagesdetails' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	$image1=$new_name;


	 $description=$this->input->post('description');

	 $description2=$this->input->post('description2');
	 $description3=$this->input->post('description3');
	$title1=$this->input->post('title1');
	$title2=$this->input->post('title2');
	 $description4=$this->input->post('description4');
	 $alttag1=$this->input->post('alttag1');
	 $status=$this->input->post('status');
	  $title3=$this->input->post('title3');
	  $title4=$this->input->post('title4');
	  /*$noofpeople=$this->input->post('noofpeople');
	  $duration=$this->input->post('duration');
	  $packagerate=$this->input->post('packagerate');
	  $packagetype=$this->input->post('packagetype');
	  $packagetitle=$this->input->post('packagetitle');*/
	  $packagesim=$this->input->post('package');
	  $desc5=$this->input->post('desc5');
	  //$packagesim1=implode(",",$packagesim);
	 $data = array(
		
		'packageid' =>"$packagesim",
		 'famousplaces' =>"$description",
		 'cityvisit' =>"$description2",
		 'rooms' =>"$description3",
		 'title1'=>"$title1",
		 'title2'=>"$title2",
		 'title3'=>"$title3",
		 'title4 '=>"$title4",
		 'food'=>"$description4"
		 ,'desc5'=>"$desc5",
		 //'country'=>"$country",
		//'noofpeople'=>"$noofpeople",
		//'noofstars '=>"$noofstars",
		 'picture'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status"
		 //,'type'=>$packagetype,'title'=>$packagetitle		
	  );
	  //print_r($data);
	  $id=$this->uri->segment(3); 
	  //$this->db2->where('testimonialid',$id);
	   //$this->db2->update('testimonials', $data);
	   //$this->db2->insert('problems', $data);
	   
	   $this->db2->insert('packagesdetails', $data);
	  echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Package details' : '<b>Package details Added Successfully</b>';



}


public function editpackagesdetailsprocess(){
	$id=$this->input->post('id');
	$this->db2->where('contentid',$id);
	$this->db2->select('*');
    $this->db2->from('packagesdetails');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->picture;

	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'packages'.'.'.$ext;
	$config['file_name'] = $new_name;

	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/packagesdetails';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (($_FILES['image1']['name'])!='') {
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/packagesdetails' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/packagesdetails' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	$image1=$new_name;
}
else{

	$image1=$image11;
}

$desc5=$this->input->post('desc5');

	 $description=$this->input->post('description');

	 $description2=$this->input->post('description2');
	 $description3=$this->input->post('description3');
	$title1=$this->input->post('title1');
	$title2=$this->input->post('title2');
	 $description4=$this->input->post('description4');
	 $alttag1=$this->input->post('alttag1');
	 $status=$this->input->post('status');
	  $title3=$this->input->post('title3');
	  $title4=$this->input->post('title4');
	  /*$noofpeople=$this->input->post('noofpeople');
	  $duration=$this->input->post('duration');
	  $packagerate=$this->input->post('packagerate');
	  $packagetype=$this->input->post('packagetype');
	  $packagetitle=$this->input->post('packagetitle');*/
	  $packagesim=$this->input->post('package');
	  //$packagesim1=implode(",",$packagesim);
	 $data = array(
		'packageid' =>"$packagesim",
		 'famousplaces' =>"$description",
		 'cityvisit' =>"$description2",
		 'rooms' =>"$description3",
		'title1' =>"$title1",
		 'food'=>"$description4",
	'title2'=>"$title2",
		'title3'=>"$title3",
		'title4 '=>"$title4",
		 'picture'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status",'desc5'=>"$desc5",
		 //,'type'=>$packagetype,'title'=>$packagetitle		
	  );
	  //print_r($data);
	  $id=$this->input->post('id'); 
	  $this->db2->where('contentid',$id);
	   //$this->db2->update('testimonials', $data);
	   //$this->db2->insert('problems', $data);
	   
	   $this->db2->update('packagesdetails', $data);
	  echo ($this->db2->affected_rows() != 1) ? 'Error in Editing Package details' : '<b>Package details Edited Successfully</b>';



}







public function editproductprocess(){

	$ext=pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'item'.'.'.$ext;
	$config['file_name'] = $new_name;

	//$file_name=$_FILES['image1']['name'];
	//$new_name = time().$file_name;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/item';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/item' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/item' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}

	//$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];
	$image1=$new_name;


	 $prdname=$this->input->post('prdname');

	 $model=$this->input->post('model');
	 $prdtype=$this->input->post('prdtype');
	 //$title4=$this->input->post('title4');
	//$link=$this->input->post('link');
	 $description=$this->input->post('description');
	 $alttag1=$this->input->post('alttag1');
	 $status=$this->input->post('status');
	  //$date=$this->input->post('date');
	  
	 $data = array(
		 'itemdesc' =>"$description",
		 //'link' =>"$link",
		 'model'=>"$model",
		 'type'=>"$prdtype",
		 //'title3'=>"$title3",
		'itemname'=>"$prdname",
		 'picture'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status"		
	  );
	  //print_r($data);
	  $id=$this->input->post('id'); 
	  $this->db2->where('itemid',$id);
	   //$this->db2->update('testimonials', $data);
	   //$this->db2->insert('problems', $data);
	   
	   $this->db2->update('item', $data);
	  echo ($this->db2->affected_rows() != 1) ? 'Error in editing Item' : '<b>Item editing Successfully</b>';



}


















public function listcarousel(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$config = array();
	$config["base_url"] = base_url() . "Welcome/listcarousel";
	//$config["total_rows"] = $this->sm->get_countsolutions();
	$config["total_rows"]=$this->sm->get_countcarousel();
	$config["per_page"] = 10;
	$config["uri_segment"] = 3;
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["links"] = $this->pagination->create_links();
	$data['result']=$this->sm->get_carousel($config["per_page"], $page);	
	//$data['result']=$this->sm->get_solutions($config["per_page"], $page);
	//$this->db2->from('problems');
    //$query = $this->db2->get();
    //$data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();	
	$this->load->view('services/listcarousal',$data);
}



public function listproductimages(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$config = array();
	$config["base_url"] = base_url() . "Welcome/listproductimages";
	//$config["total_rows"] = $this->sm->get_countsolutions();
	$config["total_rows"]=$this->sm->get_countproductimages();
	$config["per_page"] = 10;
	$config["uri_segment"] = 3;
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["links"] = $this->pagination->create_links();
	$data['result']=$this->sm->get_productimages($config["per_page"], $page);	
	//$data['result']=$this->sm->get_solutions($config["per_page"], $page);
	//$this->db2->from('problems');
    //$query = $this->db2->get();
    //$data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();	
	$this->load->view('services/listproductimages',$data);
}




public function listfeatureupdate(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$config = array();
	$config["base_url"] = base_url() . "Welcome/listfeatureupdate";
	//$config["total_rows"] = $this->sm->get_countsolutions();
	$config["total_rows"]=$this->sm->get_countfeatureupdate();
	$config["per_page"] = 10;
	$config["uri_segment"] = 3;
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["links"] = $this->pagination->create_links();
	$data['result']=$this->sm->get_featureupdate($config["per_page"], $page);	
	//$data['result']=$this->sm->get_solutions($config["per_page"], $page);
	//$this->db2->from('problems');
    //$query = $this->db2->get();
    //$data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();	
	$this->load->view('services/listfeatureupdate',$data);
}




public function listauthority(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$config = array();
	$config["base_url"] = base_url() . "Welcome/listauthority";
	//$config["total_rows"] = $this->sm->get_countsolutions();
	//$config["total_rows"]=$this->sm->get_countfeatureupdate();
	$config["total_rows"]=$this->sm->get_countdata('authority');
	$config["per_page"] = 10;
	$config["uri_segment"] = 3;
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["links"] = $this->pagination->create_links();
	//$data['result']=$this->sm->get_featureupdate($config["per_page"], $page);	
	//$data['result']=$this->sm->get_solutions($config["per_page"], $page);
	//$this->db2->from('problems');
    //$query = $this->db2->get();
    //$data['resultphone']=$query->row();
	$data['result']=$this->sm->get_data($config["per_page"], $page,'authority');	
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();	
	$this->load->view('services/listauthority',$data);
}



public function listgallery(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$config = array();
	$config["base_url"] = base_url() . "Welcome/listgallery";
	//$config["total_rows"] = $this->sm->get_countsolutions();
	//$config["total_rows"]=$this->sm->get_countfeatureupdate();
	$config["total_rows"]=$this->sm->get_countdata('packagesgallery');
	$config["per_page"] = 10;
	$config["uri_segment"] = 3;
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["links"] = $this->pagination->create_links();
	//$data['result']=$this->sm->get_featureupdate($config["per_page"], $page);	
	//$data['result']=$this->sm->get_solutions($config["per_page"], $page);
	//$this->db2->from('problems');
    //$query = $this->db2->get();
    //$data['resultphone']=$query->row();
	$data['result']=$this->sm->get_data($config["per_page"], $page,'packagesgallery');	
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();	
	$this->load->view('services/listgallery',$data);
}












public function listkeywords(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$config = array();
	$config["base_url"] = base_url() . "Welcome/listkeywords";
	//$config["total_rows"] = $this->sm->get_countsolutions();
	$config["total_rows"]=$this->sm->get_countkeywords();
	$config["per_page"] = 10;
	$config["uri_segment"] = 3;
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["links"] = $this->pagination->create_links();
	$data['result']=$this->sm->get_keywords($config["per_page"], $page);	
	//$data['result']=$this->sm->get_solutions($config["per_page"], $page);
	//$this->db2->from('problems');
    //$query = $this->db2->get();
    //$data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();	
	$this->load->view('services/listkeywords',$data);
}










public function listitems(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$config = array();
	$config["base_url"] = base_url() . "Welcome/listitems";
	//$config["total_rows"] = $this->sm->get_countsolutions();
	$config["total_rows"]=$this->sm->get_countitems();
	$config["per_page"] = 10;
	$config["uri_segment"] = 3;
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["links"] = $this->pagination->create_links();
	$data['result']=$this->sm->get_items($config["per_page"], $page);	
	//$data['result']=$this->sm->get_solutions($config["per_page"], $page);
	//$this->db2->from('problems');
    //$query = $this->db2->get();
    //$data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();	
	$this->load->view('services/listitems',$data);
}


public function listdestinations(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$config = array();
	$config["base_url"] = base_url() . "Welcome/listdestinations";
	//$config["total_rows"] = $this->sm->get_countsolutions();
	$config["total_rows"]=$this->sm->get_countdata('destination');
	$config["per_page"] = 10;
	$config["uri_segment"] = 3;
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["links"] = $this->pagination->create_links();
	$data['result']=$this->sm->get_data($config["per_page"], $page,'destination');	
	//$data['result']=$this->sm->get_solutions($config["per_page"], $page);
	//$this->db2->from('problems');
    //$query = $this->db2->get();
    //$data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();	
	$this->load->view('services/listdestinations',$data);
}

public function listtourservices(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$config = array();
	$config["base_url"] = base_url() . "Welcome/listtourservices";
	//$config["total_rows"] = $this->sm->get_countsolutions();
	$config["total_rows"]=$this->sm->get_countdata('tourservices');
	$config["per_page"] = 10;
	$config["uri_segment"] = 3;
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["links"] = $this->pagination->create_links();
	$data['result']=$this->sm->get_data($config["per_page"], $page,'tourservices');	
	//$data['result']=$this->sm->get_solutions($config["per_page"], $page);
	//$this->db2->from('problems');
    //$query = $this->db2->get();
    //$data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();	
	$this->load->view('services/listtourservices',$data);
}

public function listtraveldetails(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$config = array();
	$config["base_url"] = base_url() . "Welcome/listtraveldetails";
	//$config["total_rows"] = $this->sm->get_countsolutions();
	$config["total_rows"]=$this->sm->get_countdata('traveldetails');
	$config["per_page"] = 10;
	$config["uri_segment"] = 3;
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["links"] = $this->pagination->create_links();
	$data['result']=$this->sm->get_data($config["per_page"], $page,'traveldetails');	
	//$data['result']=$this->sm->get_solutions($config["per_page"], $page);
	//$this->db2->from('problems');
    //$query = $this->db2->get();
    //$data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();	
	$this->load->view('services/listtraveldetails',$data);
}



public function listpackages(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$config = array();
	$config["base_url"] = base_url() . "Welcome/listpackages";
	//$config["total_rows"] = $this->sm->get_countsolutions();
	$config["total_rows"]=$this->sm->get_countdata('packages');
	$config["per_page"] = 10;
	$config["uri_segment"] = 3;
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["links"] = $this->pagination->create_links();
	$data['result']=$this->sm->get_data($config["per_page"], $page,'packages');	
	//$data['result']=$this->sm->get_solutions($config["per_page"], $page);
	//$this->db2->from('problems');
    //$query = $this->db2->get();
    //$data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();	
	$this->load->view('services/listpackages',$data);
}

public function listpackagedetails(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$config = array();
	$config["base_url"] = base_url() . "Welcome/listpackagedetails";
	//$config["total_rows"] = $this->sm->get_countsolutions();
	$config["total_rows"]=$this->sm->get_countdata('packagesdetails');
	$config["per_page"] = 10;
	$config["uri_segment"] = 3;
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["links"] = $this->pagination->create_links();
	$data['result']=$this->sm->get_data($config["per_page"], $page,'packagesdetails');	
	//$data['result']=$this->sm->get_solutions($config["per_page"], $page);
	//$this->db2->from('problems');
    //$query = $this->db2->get();
    //$data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();	
	$this->load->view('services/listpackagedetails',$data);
}










public function listproducttype(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listproducttype";
//$config["total_rows"] = $this->sm->get_countfaq();
$config["total_rows"] = $this->sm->get_countproducttype();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
//$data['result']=$this->sm->get_faqadmin($config["per_page"],$page);
$data['result']=$this->sm->get_producttypeadmin($config["per_page"],$page);
$data['contactus']=$this->sm->get_contactus();
$data['newsletter']=$this->sm->get_newsletter();
$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listproducttype',$data);	


}






//$this->htmlmailcontactus($subject,$name,$companyname,$email,$phone,$message,$email,$toemailid);




public function htmlmail($subject,$msg){
	$this->db2->select('*');
	$this->db2->from('contactus');
	$query = $this->db2->get();
	$contactusdte=$query->row();
	$email=$contactusdte->toemail1;

	$from_email=$email;
	$message=$msg;
	$name='Lalgy';
	
	//$to_email =$toemailid;
	//$to_email = 'sumila.c@gmail.com';
	$config = array(
	   'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
	   'smtp_host' => 'smtp.gmail.com',
	   'smtp_port' => 587,
	   'smtp_user' => 'sumilaifix@gmail.com',
	   //'smtp_user' => 'crayoprojects2022@gmail.com',
	   //'smtp_pass' => 'wosmqbffmatsefdz',
	   'smtp_pass'=>'jcqa cvfq iwrc plsu',
	   'smtp_crypto' => 'tls', //can be 'ssl' or 'tls' for example
	   'mailtype' => 'html', //plaintext 'text' mails or 'html'
	   'smtp_timeout' => '4', //in seconds
	   'charset' => 'utf-8',
	   'wordwrap' => TRUE,
	   'newline' => "\r\n",
   );

    $this->load->library('email', $config);

  $this->email->set_newline("\r\n");

  

    $this->email->from($from_email,$name);

    $data = array(
'subject'=>$subject,
       'message'=>$message

         );

		 //$userEmail='sumilaifix@gmail.com';
		 //$subject='Pocket friendly Contact Us Enquiries';
		 $this->db2->select('*');
		 $this->db2->from('contactus');
		 $query = $this->db2->get();
		 $contactusdte=$query->row();
		 $fn1=$contactusdte->toemail1;
		 $fn2=$contactusdte->toemail2;
		 $fn3=$contactusdte->toemail3;
		 //$this->email->to('sumila.c@gmail.com,sumilaifix@gmail.com,sumilaifix@gmail.com,sumilaifix@gmail.com');


		 $this->db2->select('*');
		 $this->db2->from('newslettersubscribe');
		 $query = $this->db2->get();
		 $listarr=$query->result_array();
		 foreach($listarr as $li){
			$list[]=$li['subscribeemailid'];
		}

		$list = array('sumila.c@gmail.com', 'sumilaifix@gmail.com', 'sumilaifix@gmail.com');


//$this->email->to($list);
		 
		 //$this->email->to($fn1);
	
		 //$this->email->bcc(array($fn2,$fn3));
  $this->email->subject($subject); // replace it with relevant subject

  

     $body = $this->load->view('lalgy/subscriberssemail1.php',$data,TRUE);
	//die;

  $this->email->message($body); 

    $this->email->send();

  }



function addsitemapprocess(){

	//$prd=$this->input->post('prd');

	
	$alttag1=$this->input->post('alttag1');
	$status=$this->input->post('status');
	 //$date=$this->input->post('date');
	 
	$data = array(
		//'description' =>"$description",
		//'link' =>"$link",
		//'productid'=>"$prd",
		//'title2'=>"$title2",
		//'title3'=>"$title3",
		//'title4'=>"$title4",
		'changefreq'=>'Daily',
		'loc'=>"$alttag1",'active'=>"$status"		
	 );
	 //print_r($data);
	 $id=$this->uri->segment(3); 
	 //$this->db2->where('testimonialid',$id);
	  //$this->db2->update('testimonials', $data);
	  //$this->db2->insert('problems', $data);
	  
	  $this->db2->insert('products', $data);
	 echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Keywords' : '<b>Keywords Added Successfully</b>';







}



public function editkeywords(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');

	/*$this->db2->where('imgid',1);
	$this->db2->select('*');
    $this->db2->from('productimages');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->picture;*/

$id=$this->uri->segment(3);
   $this->db2->where('productid',$id);
	$this->db2->from('products');
    $query = $this->db2->get();
    $data['result']=$query->row();

	$this->db2->from('item');
    $query = $this->db2->get();
    $data['result1']=$query->result_array();


	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editkeywords',$data);



}


function editkwprocess(){



	//$prd=$this->input->post('prd');

	//$title2=$this->input->post('title2');
	//$title3=$this->input->post('title3');
	//$title4=$this->input->post('title4');
   //$link=$this->input->post('link');
	//$description=$this->input->post('description');
	$alttag1=$this->input->post('alttag1');
	$status=$this->input->post('status');
	 //$date=$this->input->post('date');
	 
	$data = array(
		//'description' =>"$description",
		//'link' =>"$link",
		//'productid'=>"$prd",
		//'title2'=>"$title2",
		//'title3'=>"$title3",
		//'title4'=>"$title4",
		//'picture'=>$image1,
		'loc'=>"$alttag1",'active'=>"$status"		
	 );
	 //print_r($data);
	 $id=$this->input->post('id');
	 $this->db2->where('productid',$id);
	  $this->db2->update('products', $data);
	  //$this->db2->insert('problems', $data);
	  
	  //$this->db2->insert('productimages', $data);
	 //echo ($this->db2->affected_rows() != 1) ? 'Error in Editing Keywords' : '<b>Keywords Edited Successfully</b>';
	 echo ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Keywords') : $this->session->set_flashdata('flash_msg', 'Keywords Edited Successfully');

	 redirect("welcome/listkeywords");


}


function editpackages(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$testid=$this->uri->segment(3);
	$this->load->model('Servicesmodel');
	$this->db2->where('contentid',$testid);
	$this->db2->from('packages');
    $query = $this->db2->get();
    $data['result']=$query->row();
	$this->db2->where('active',1);
	$this->db2->from('packages');
    $query = $this->db2->get();
    $data['result1']=$query->result_array();  
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->view('services/editpackages',$data);


}



public function editpackagesprocess(){
	$id=$this->input->post('id'); 
	  $this->db2->where('contentid',$id);
	$this->db2->select('*');
    $this->db2->from('packages');
    $query = $this->db2->get();
   $imgdetails=$query->row();
   //print_r($imgdetails);
   //die;
   $image11=$imgdetails->picture;
//echo $this->db2->lastquery();
//die;
   $file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);
	//$file_name=$_FILES['image1']['name'];
	//$newfile_name= preg_replace('/[^A-Za-z0-9]/', "", $file_name);
	//$//ext=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
	$new_name = time().'packages'.'.'.$file_ext;
	$config['file_name'] = $new_name;
	$config['upload_path'] = 'uploads/packages';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/packages/'.$new_name)) {
				//echo 'File already exists : uploads/contactus/'.$new_name;
				$image1=$image11;
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
					$image1=$new_name;
				}
				$image1=$image11;

			}
		}
		$image1=$new_name;;

	} else {
		//echo 'Please choose a file';
		$image1=$image11;

	}




	$place=$this->input->post('place');

	 $country=$this->input->post('country');
	 $noofstars=$this->input->post('rating');
	$noofpeople=$this->input->post('noofpeople');
	$touristplace=$this->input->post('touristplace');
	 $description=$this->input->post('description');
	 $alttag1=$this->input->post('alttag1');
	 $status=$this->input->post('status');
	  $duration=$this->input->post('duration');
	  $noofreviews=$this->input->post('noofreviews');
	  $noofpeople=$this->input->post('noofpeople');
	  $duration=$this->input->post('duration');
	  $packagerate=$this->input->post('packagerate');
	  $packagetype=$this->input->post('packagetype');
	  $packagetitle=$this->input->post('packagetitle');
	  $packagesim=$this->input->post('packagesim');
	  //$packagesim1=implode(",",$packagesim);
	
		
	 $data = array(
		'similarpackages' =>"$packagesim",
		 'duration' =>"$duration",
		 'packagerate' =>"$packagerate",
		 'noofreviews' =>"$noofreviews",
		 'description1' =>"$description",
		 'city'=>"$place",
		 'country'=>"$country",
		'noofpeople'=>"$noofpeople",
		'noofstars '=>"$noofstars",
		 'picture'=>$image1,
		 'alttagimg1'=>"$alttag1",'active'=>"$status",'type'=>$packagetype,'title'=>$packagetitle		
	  );
	  //print_r($data);
	  //$id=$this->uri->segment(3); 
	  //$this->db2->where('testimonialid',$id);
	   //$this->db2->update('testimonials', $data);
	   //$this->db2->insert('problems', $data);
	   $this->db2->where('contentid',$id);
	   $this->db2->update('packages', $data);
	  //echo ($this->db2->affected_rows() != 1) ? 'Error in Adding Packages' : '<b>Packages Added Successfully</b>';

	  //echo ($this->db2->affected_rows() != 1) ? 'Error in Editing Packages' : '<b>Packages Edited Successfully</b>';
	  echo ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Packages') : $this->session->set_flashdata('flash_msg', 'Packages Edited Successfully');

	  redirect("Welcome/listpackages");

}






public function edittraveldetailsprocess(){


	$id=$this->input->post('id'); 
	$this->db2->where('contentid',$id);
  $this->db2->select('*');
  $this->db2->from('traveldetails');
  $query = $this->db2->get();
 $imgdetails=$query->row();
 //print_r($imgdetails);
 //die;
 $image11=$imgdetails->picture;
//echo $this->db2->lastquery();
//die;
 $file_ext = pathinfo($_FILES["image1"]["name"],PATHINFO_EXTENSION);
  //$file_name=$_FILES['image1']['name'];
  //$newfile_name= preg_replace('/[^A-Za-z0-9]/', "", $file_name);
  //$//ext=pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
  $new_name = time().'tour'.'.'.$file_ext;
  $config['file_name'] = $new_name;
  $config['upload_path'] = 'uploads/tour';
  $config['allowed_types'] = 'gif|jpg|png|jpeg';	
  $config['max_size'] = '1024'; //1 MB
  $this->load->library('upload', $config);
  $this->upload->initialize($config);
  if (isset($_FILES['image1']['name'])) {
	  if (0 < $_FILES['image1']['error']) {
		  echo 'Error during file upload' . $_FILES['image1']['error'];
	  } else {
		  if (file_exists('uploads/tour/'.$new_name)) {
			  //echo 'File already exists : uploads/contactus/'.$new_name;
			  $image1=$image11;
		  } else {
			  
			  if (!$this->upload->do_upload('image1')) {
				  //echo $this->upload->display_errors();
			  } else {
				  //echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				  $image1=$new_name;
			  }
			  $image1=$image11;

		  }
	  }
	  $image1=$new_name;;

  } else {
	  //echo 'Please choose a file';
	  $image1=$image11;

  }








	$place=$this->input->post('place');

	$country=$this->input->post('country');
	$noofstars=$this->input->post('rating');
	//$title4=$this->input->post('title4');
   //$link=$this->input->post('link');
	$description=$this->input->post('description');
	$alttag1=$this->input->post('alttag1');
	$status=$this->input->post('status');
	 //$date=$this->input->post('date');
	 
	$data = array(
		//'description' =>"$description",
		//'link' =>"$link",
		'description1' =>"$description",
		'city'=>"$place",
		'country'=>"$country",
		//'title3'=>"$title3",
	   'noofstars '=>"$noofstars",
		'picture'=>$image1,
		'alttagimg1'=>"$alttag1",'active'=>"$status"		
	 );
	 //print_r($data);
	 //$id=$this->uri->segment(3); 
	 $this->db2->where('contentid',$id);
	  $this->db2->update('traveldetails', $data);
	  //echo $this->db2->query();
	  //die;
	  //$this->db2->insert('problems', $data);
	  
	 // $this->db2->insert('destination', $data);
	 //echo ($this->db2->affected_rows() != 1) ? 'Error in Adding destination' : '<b>Destination Added Successfully</b>';
	 ($this->db2->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Travel Details') : $this->session->set_flashdata('flash_msg', 'Travel Details Edited Successfully');

	  redirect("Welcome/listdestinations");

	}



	public function flightenquiries(){
		$id=$_GET['id'];
		$this->db2->where('enquiryid',$id);
		$this->db2->delete('enquiries');
		echo ($this->db2->affected_rows() != 1) ? 'Error in deleting Enquiries' : 'Enquiries deleted Successfully';
	}










}