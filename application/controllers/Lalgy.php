<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lalgy extends CI_Controller {

	
	
	public function __construct(){
        parent::__construct();

         //load the model 
		 $this->load->library('session'); 
         $this->load->model('Servicesmodel','sm');
		 $this->load->database();
		 $this->session->keep_flashdata('flash_msg'); 
		 $this->load->helper(['form', 'url']); 
		 $this->load->library("pagination");
		 $this->load->library('email');
		 $this->db2=$this->load->database('default1', True);

    }

	

	public function index()
	{
		
		$data['resultcontents']=$this->sm->get_blogcontentsactive();
		//$data['resultfaq']=$this->sm->get_faqactive();
		$data['resulttest']=$this->sm->get_testimonialactive();
		$data['about']=$this->sm->get_aboutus();
		$data['contactus']=$this->sm->get_contactus();
		$data['newsletter']=$this->sm->get_newsletter();
		$data['featureupdate']=$this->sm->get_featureupdateactive();
		$data['resulthome']=$this->sm->get_homepage();
		//$data['qualities']=$this->sm->get_qualitiesactive();
		$data['menus']=$this->sm->get_menus();
		$data['siteinf']=$this->sm->get_siteinf();
		$data['result2']=$this->sm->get_carousalactivedis(0);
		$data['result1']=$this->sm->get_blog();
		$data['service']=$this->sm->get_servicesall();
		$data['resultdata']=$this->sm->get_activedata('destination');
		$data['resultdata1']=$this->sm->get_activedata('packages');
		$data['resultdata2']=$this->sm->get_activedata('authority');
		$data['resultdata3']=$this->sm->get_activedata('tourservices');
		$data['resultdata4']=$this->sm->get_activedata('faq');
		
		
		$this->load->view('lalgy/index.php',$data);
	}


    public function about()
	{
		$data['contactus']=$this->sm->get_contactus();
		$data['about']=$this->sm->get_aboutus();
		$data['newsletter']=$this->sm->get_newsletter();
		$data['featureupdate']=$this->sm->get_featureupdateactive();
		$data['menus']=$this->sm->get_menus();
		$data['siteinf']=$this->sm->get_siteinf();
		$data['resultfaq']=$this->sm->get_faqactive();
		$data['resultdata']=$this->sm->get_activedata('teammembers');
		$data['resultdata1']=$this->sm->get_activedata('authority');
		$this->load->view('lalgy/about.php',$data);
	}
    public function booking()
	{
		$data['contactus']=$this->sm->get_contactus();
		$data['about']=$this->sm->get_aboutus();
		$data['newsletter']=$this->sm->get_newsletter();
		$data['featureupdate']=$this->sm->get_featureupdateactive();
		$data['menus']=$this->sm->get_menus();
		$data['siteinf']=$this->sm->get_siteinf();
		$data['resultdata']=$this->sm->get_activedata('packages');
		$id=1;
	//$fieldid='packageid';
	$fieldid1='bookingid';
		$data['resultrow']=$this->sm->get_activedatarowwhere('booking',$id,$fieldid1);
		$data['resultdata3']=$this->sm->get_activedata('city');
		$data['resultdata1']=$this->sm->get_activedata('state');
		$data['resultdata2']=$this->sm->get_activedata('country');
		$this->load->view('winsky/booking.php',$data);
	}


/*public function service(){
	$data['contactus']=$this->sm->get_contactus();
	//$data['result']=$this->sm->get_categoriesall();
	$data['result']=$this->sm->get_categoriesallactive();
	$data['service']=$this->sm->get_servicesall();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdateactive();
	$data['about']=$this->sm->get_aboutus();
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['steps']=$this->sm->get_stepsactive();
    $this->load->view('pocket/service.php',$data);
}*/

/*public function prdspec(){
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	//$data['featureupdate']=$this->sm->get_featureupdateactive();
	$data['about']=$this->sm->get_aboutus();
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
	$productid=$this->uri->segment(3);
	$data['prdspec']=$this->sm->get_prdspecactive($productid);
	$data['prdimg']=$this->sm->get_prdimgactive($productid);
	$data['prd']=$this->sm->get_prdactive($productid);
	$this->load->view('light/product-details.php',$data);
}


public function producttype(){
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	//$data['featureupdate']=$this->sm->get_featureupdateactive();
	$data['about']=$this->sm->get_aboutus();
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
	$producttype=$this->uri->segment(3);
	//$producttype=1;
	$data['result']=$this->sm->get_productsactive($producttype);
	//$producttype=1;
		$data['producttype']=$this->sm->get_productstypeactive($producttype);
	
	//$data['prdspec']=$this->sm->get_prdspecactive($productid);
	//$data['prdimg']=$this->sm->get_prdimgactive($productid);
	//$data['prd']=$this->sm->get_prdactive($productid);
	$this->load->view('light/product',$data);
}

public function listproducttype(){

	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	//$data['featureupdate']=$this->sm->get_featureupdateactive();
	$data['about']=$this->sm->get_aboutus();
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
	$producttype=$this->uri->segment(3);

    $config["base_url"] = base_url()."Light/listproducttype/$producttype";
	$config["total_rows"] = $this->sm->get_countproductslistactive($producttype);
	$config["per_page"] = 10;
	$config["uri_segment"] = 4;
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
	$data["links"] = $this->pagination->create_links();	
	$data['result']=$this->sm->get_productslistactive($config["per_page"], $page,$producttype);
	$data['producttype']=$this->sm->get_productstypeactive($producttype);
	$this->load->view('light/productlist',$data);
}*/


public function blog(){
	$data['result1']=$this->sm->get_blog();
	$data['resultcontents']=$this->sm->get_blogcontentsactive();
	$data['resulttopcontent']=$this->sm->get_blogcontentstop();
	$data['resulttopcontentcount']=$this->sm->get_blogcontentstopcount();

	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdateactive();
	$data['about']=$this->sm->get_aboutus();
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
    $this->load->view('winsky/blog.php',$data);
}

public function services(){
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['service']=$this->sm->get_servicesall();
	$data['resultdata']=$this->sm->get_activedataser('tourservices');
	$data['resultdata1']=$this->sm->get_activedata('traveldetails');
	$data['newsletter']=$this->sm->get_newsletter();
	$data['contactus']=$this->sm->get_contactus();
	$data['result2']=$this->sm->get_carousalactivedis(1);
	$this->load->model('Servicesmodel');
	$this->load->view('lalgy/service',$data);
	

} 




public function ourwork(){
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['service']=$this->sm->get_servicesall();
	$data['resultdata']=$this->sm->get_activedata('destination');
	//$data['resultdata1']=$this->sm->get_activedata('traveldetails');
	$data['newsletter']=$this->sm->get_newsletter();
	$data['contactus']=$this->sm->get_contactus();
	$this->load->model('Servicesmodel');
	$this->load->view('lalgy/our-work',$data);
	

} 











/*public function contact1(){
	$data['menus']=$this->sm->get_menus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdate();
	$data['contactus']=$this->sm->get_contactus();
	$data['about']=$this->sm->get_aboutus();
	$data['siteinf']=$this->sm->get_siteinf();
    //$this->load->view('pocket/contact.php',$data);
 $this->load->view('pocket/contact1.php',$data);

}*/

public function contact(){
	$data['menus']=$this->sm->get_menus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdateactive();
	$data['contactus']=$this->sm->get_contactus();
	$data['about']=$this->sm->get_aboutus();
	$data['siteinf']=$this->sm->get_siteinf();
    //$this->load->view('pocket/contact.php',$data);
 $this->load->view('lalgy/contact.php',$data);

}


public function packagedetails(){
    $data['menus']=$this->sm->get_menus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdateactive();
	$data['contactus']=$this->sm->get_contactus();
	$data['about']=$this->sm->get_aboutus();
	$data['siteinf']=$this->sm->get_siteinf();
	$id=$this->uri->segment(3);
	$fieldid='packageid';
	$fieldid1='packageid';
	$data['resultdata']=$this->sm->get_activedatawhere('packagesgallery',$id,$fieldid);
	$data['resultrow']=$this->sm->get_activedatarowwhere('packagesdetails',$id,$fieldid1);

	$data['resultdatacount']=$this->sm->get_activedatacount('packagesgallery',$id,$fieldid);
	$data['resultrowcount']=$this->sm->get_activedatacount('packagesdetails',$id,$fieldid1);
	//print_r($data['resultdata']);
	$this->db->where('contentid',$id);
	$this->db->select('*');
  $this->db->from('packages');
  $query = $this->db->get();
  $simpck=$query->row();
  $simpckarr=explode(',',$simpck->similarpackages);

  $this->db->where_in('contentid',$simpckarr);
	$this->db->select('*');
  $this->db->from('packages');
  $query = $this->db->get();
  $data['simpcklist']=$query->result_array();
  //$data['resultdatarow']=$this->sm->get_activedata('packagepage');
  $id=1;
	//$fieldid='packageid';
	$fieldid1='pckid';
		$data['resultdatarow']=$this->sm->get_activedatarowwhere('packagepage',$id,$fieldid1);
    $this->load->view('winsky/package-details.php',$data);

}


public function advertisers(){
    $data['menus']=$this->sm->get_menus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdateactive();
	$data['contactus']=$this->sm->get_contactus();
	$data['about']=$this->sm->get_aboutus();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['resultdata']=$this->sm->get_activedata('packages');
	$id=1;
	//$fieldid='packageid';
	$fieldid1='pckid';
		//$data['resultrow']=$this->sm->get_activedatarowwhere('packagepage',$id,$fieldid1);
    $this->load->view('lalgy/advertisers.php',$data);

}




public function dashboard(){
	
	$this->load->model('Servicesmodel');
	$this->load->view('services/dashboard');
	
} 

/*public function sustainability(){
	$this->load->model('Servicesmodel');
	$data['menus']=$this->sm->get_menus();
	$data['contactus']=$this->sm->get_contactus();
	$data['about']=$this->sm->get_aboutus();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['service']=$this->sm->get_servicesall();
	$this->load->view('light/sustainability',$data);

} 

public function download(){
	$this->load->model('Servicesmodel');
	$data['menus']=$this->sm->get_menus();
	$data['contactus']=$this->sm->get_contactus();
	$data['about']=$this->sm->get_aboutus();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['downloads']=$this->sm->get_downloadsdt();
	$this->load->view('light/download',$data);

} 


public function product(){
	$this->load->model('Servicesmodel');
	$data['menus']=$this->sm->get_menus();
	$data['contactus']=$this->sm->get_contactus();
	$data['about']=$this->sm->get_aboutus();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['result']=$this->sm->get_productactive();
	$this->load->view('light/product',$data);

} */





public function logout(){
	$this->load->model('Servicesmodel');
	redirect("welcome/services");




}

/*public function flightenquiry(){
echo "hello";

}*/


public function flightenquiry(){
$fromdest=$this->input->post('frmdest');
$todest=$this->input->post('todest');
$date=$this->input->post('date');
$duration=$this->input->post('duration');
/*$businessnature=$this->input->post('natureofbusiness');
$packages=$this->input->post('package');
$note=$this->input->post('note');
$businesswebsiteduration=$this->input->post('businesswebsiteduration');*/
$data = array(
	'fromdest' =>"$fromdest",
	'todest' =>"$todest",
	'date' =>"$date",
	'duration' =>"$duration",
	//'businessnature' =>"$businessnature",
	//'packages'=>"$packages",
	//'note'=>"$note",
	//'businesswebsiteduration'=>"$businesswebsiteduration"
 );
 $this->db->insert('enquiries', $data);

 $toemailid='sumilaifix@gmail.com';
 //$this->htmlmailenquiry($firstname,$lastname,$email,$phone,$note,$toemailid,$packages,$businessnature,$businesswebsiteduration);

 $this->htmlmailenquiry($fromdest,$todest,$date,$duration);



echo "Your enquiry send successfully";
}

//jcqa cvfq iwrc plsu 

public function contactenquiryprocess(){
	$first_name=$this->input->post('first_name');
	$last_name=$this->input->post('last_name');
	$email=$this->input->post('email');
	$phone=$this->input->post('phone');
	$message=$this->input->post('message');
	$purpose=$this->input->post('purpose');
	$subject=$this->input->post('subject');
	$name="$first_name $last_name";		
	$data = array(
		'name' =>"$first_name $last_name",
		'subject' =>"$subject",
		'email' =>"$email",
		'phone' =>"$phone",
		'message' =>"$message",
		'purpose'=>"$purpose",
		//'note'=>"$note",
		//'businesswebsiteduration'=>"$businesswebsiteduration"
	 );
	 $this->db2->insert('contactenquiries',$data);
	 $toemailid='sumilaifix@gmail.com';

	 $subject="Contact Enquiries";
	$this->htmlmailcontactus($name,$subject,$email,$phone,$message,$email,$toemailid);
	echo "Your enquiry send successfully";
	}

	public function pckadd(){
		$name=$this->input->post('name1');
		$phone=$this->input->post('phone1');
		$email=$this->input->post('email1');
		$from=$this->input->post('from');
		$to=$this->input->post('to');
		$options=$this->input->post('options');	
		$place=$this->input->post('place');
		$city=$this->input->post('city');
		$options=$this->input->post('city');				
		$data = array(
			'firstname' =>"$name",
			'options' =>"$options",
			'email' =>"$email",
			'phone' =>"$phone",
			'from' =>"$from",
			'to'=>"$to",
			'place'=>"$place",
			'city'=>"$city",'options'=>$options
		 );
		 $this->db->insert('packageenquiries',$data);
		 $toemailid='sumilaifix@gmail.com';
	
		 $subject="Package Enquiries";
		//$this->htmlmailcontactus($name,$subject,$email,$phone,$message,$email,$toemailid);
		//$this->htmlmailpck($name,$options,$email,$phone,$place,$city,$from,$to,$email,$toemailid);
		echo "Your Package enquiry send successfully";
		}


		public function bookenquiryprocess(){
			$fname=$this->input->post('fname');
			$lname=$this->input->post('lname');
			$phone=$this->input->post('phone');
			$email=$this->input->post('email');
			$from=$this->input->post('fromaddress');
			$to=$this->input->post('toaddress');
			$person=$this->input->post('person');	
			$place=$this->input->post('place');
			$city=$this->input->post('city');
			$gender=$this->input->post('gender');
			$dob=$this->input->post('dob');	
			$address=$this->input->post('address');
			$state=$this->input->post('state');	
			$country=$this->input->post('country');	

			$banktype=$this->input->post('banktype');
			$payment=$this->input->post('payment');	
			$person=$this->input->post('person');
			$bookdt=$this->input->post('bookdt');	
			$stydt=$this->input->post('stydt');
			$rdt=$this->input->post('rdt');


			$chn=$this->input->post('chn');
			$cno=$this->input->post('cno');	
			$expdt=$this->input->post('expdt');
			$cvc=$this->input->post('cvc');

			$data = array(
				'firstname' =>"$fname",
				'lastname' =>"$lname",
				'email' =>"$email",
				'phone' =>"$phone",
				'from' =>"$from",
				'to'=>"$to",
				'place'=>"$place",
				'city'=>"$city",
				'gender' =>"$gender",
				'dob' =>"$dob",
				'address'=>"$address",
				'state'=>"$state",
				'country'=>"$country",'person'=>"$person",'banktype'=>"$banktype",'rdt'=>"$rdt",'payment'=>"$payment",'bookdt'=>"$bookdt",'stydt'=>"$stydt"
				,'chn'=>$chn,'cno'=>$cno,'expdt'=>$expdt,'cvc'=>$cvc
			 );
			 $this->db->insert('bookingenquiries',$data);
			 $toemailid='sumilaifix@gmail.com';
		
			 $subject="Booking Enquiries";
			//$this->htmlmailcontactus($name,$subject,$email,$phone,$message,$email,$toemailid);
			//$this->htmlmailpck($name,$options,$email,$phone,$place,$city,$from,$to,$email,$toemailid);
			echo "Your Booking enquiry send successfully";
			}









	/*public function contactenquiryprocesspopup(){
		$name=$this->input->post('name');
		$companyname=$this->input->post('companyname');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$message=$this->input->post('message');	
		$business=$this->input->post('business');
		$package=$this->input->post('package');
		$natureofbusiness=$this->input->post('business');
		$data = array(
			'name' =>"$name",
			'companyname' =>"$companyname",
			'email' =>"$email",
			'phone' =>"$phone",
			'message' =>"$message",
			'packageid'=>"$package",
			'natureofbusiness'=>"$natureofbusiness",
			//'businesswebsiteduration'=>"$businesswebsiteduration"
		 );
		 $this->db->insert('contactenquiries',$data);
		 $toemailid='sumilaifix@gmail.com';
		 $this->htmlmailcontactuspopup($name,$companyname,$email,$phone,$message,$email,$toemailid,$package,$natureofbusiness);
		 
		echo "Your enquiry send successfully";
		}*/




		public function blogdetails(){

			$blogid=$this->uri->segment(3);
			$data['blogdt']=$this->sm->get_blogdt($blogid);
			//print_r($data['blogdt']);
			//die;
			$data['result']=$this->sm->get_blog();
			$data['menus']=$this->sm->get_menus();
			$data['contactus']=$this->sm->get_contactus();
			$data['about']=$this->sm->get_aboutus();
			$data['siteinf']=$this->sm->get_siteinf();
			$this->load->view('light/blog-details.php',$data);
		}


public function servicedetails(){

    $serid=$this->uri->segment(3);
	//echo "hhhh";
	//$data['servicedetails']=$this->sm->get_servicedetals($serid);
	$data['servicedetails']=$this->sm->get_servicedetalsactive($serid);
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdate();
	$data['about']=$this->sm->get_aboutus();
	//$data['categories']=$this->sm->get_categoriesall();
	$data['categories']=$this->sm->get_categoriesallactive();
	$data['lowestpackage']=$this->sm->get_lowestpackage($serid);
	$data['lowestpackagecount']=$this->sm->get_lowestpackagecount($serid);
	$data['easeyourproblems']=$this->sm->get_problemsactive();
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['result']=$this->sm->get_servicesdetails();
	$data['resultsub']=$this->sm->get_subcategoriesallactive();

	$this->load->view('pocket/service-details.php',$data);

}

public function newslettersubscribe(){
	//$newsletteremailid=$this->input->post('emailidnews1');
	//$newsletteremailid=$this->input->post('emailidnews1');
	//$newsletteremailid=$this->input->post('emailidnews1');
	$newsletteremailid=$_GET['emailidnews1'];
	//$newsletteremailid=$this->input->post('emailidnews1');
	$data=array('subscribeemailid'=>$newsletteremailid);
	$this->db2->insert('newslettersubscribe', $data);
	echo ($this->db2->affected_rows() != 1) ? 'Error in Subscription' : 'Your emailid subscribed Successfully';

}

public function hosting(){
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdate();
	$data['about']=$this->sm->get_aboutus();
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
	//$data['contactus']=$this->sm->get_contactus();
	$this->load->view('pocket/hosting.php',$data);

}


public function indexload(){
	$this->load->view('pocket/post_view');
 }

 /**
  * This method returns all the data.
  *
  * @return Response
 */

 public function indexloaddiv(){
	$this->load->view('pocket/post_viewdiv');
 }



public function loadRecord($rowno=0){

    // Row per page
    $rowperpage = 5;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }
 
    // All records count
    $allcount = $this->sm->getrecordCount();

    // Get records
    $users_record = $this->sm->getData($rowno,$rowperpage);
 
    // Pagination Configuration
    $config['base_url'] = base_url().'Pocket/loadRecord';
    $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;

    // Initialize
    $this->pagination->initialize($config);

    // Initialize $data Array
    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;

    echo json_encode($data);
 
  }

//}


public function loadRecorddiv($rowno=0){

    // Row per page
    $rowperpage = 5;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }
 
    // All records count
    $allcount = $this->sm->getrecordCountsubcategory();

    // Get records
    $users_record = $this->sm->getDatasubcategory($rowno,$rowperpage);
 
    // Pagination Configuration
    $config['base_url'] = base_url().'Pocket/loadRecorddiv';
    $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;

    // Initialize
    $this->pagination->initialize($config);

    // Initialize $data Array
    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;

    echo json_encode($data);
 
  }












public function htmlmailcontactus($name,$subject,$email,$phone,$msg,$fromemailid,$toemailid){

	$from_email=$email;
	$message=$msg;
	
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

       'name'=>$name,'subject'=>$subject,'email'=>$email,'phone'=>$phone,'message'=>$message

         );

		 //$userEmail='sumilaifix@gmail.com';
		 $subject='Contact Us Enquiries';
		 $this->db2->select('*');
		 $this->db2->from('contactus');
		 $query = $this->db2->get();
		 $contactusdte=$query->row();
		 $fn1=$contactusdte->toemail1;
		 $fn2=$contactusdte->toemail2;
		 $fn3=$contactusdte->toemail3;
		 
		 
		 $this->email->to($fn1);
	
		 $this->email->bcc(array($fn2,$fn3));
  $this->email->subject($subject); // replace it with relevant subject

  

     $body = $this->load->view('lalgy/contactusenquiresemail1.php',$data,TRUE);
	//die;

  $this->email->message($body); 

    $this->email->send();

  }



  public function htmlmailpck($name,$subject,$email,$phone,$msg,$fromemailid,$toemailid){

	$from_email=$email;
	$message=$msg;
	
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

       'name'=>$name,'subject'=>$subject,'email'=>$email,'phone'=>$phone,'message'=>$message

         );

		 //$userEmail='sumilaifix@gmail.com';
		 $subject='Axiom Contact Us Enquiries';
		 $this->db->select('*');
		 $this->db->from('contactus');
		 $query = $this->db->get();
		 $contactusdte=$query->row();
		 $fn1=$contactusdte->toemail1;
		 $fn2=$contactusdte->toemail2;
		 $fn3=$contactusdte->toemail3;
		 
		 
		 $this->email->to($fn1);
	
		 $this->email->bcc(array($fn2,$fn3));
  $this->email->subject($subject); // replace it with relevant subject

  

     $body = $this->load->view('light/contactusenquiresemail1.php',$data,TRUE);
	//die;

  $this->email->message($body); 

    $this->email->send();

  }








  /*public function htmlmailcontactuspopup($name,$companyname,$email,$phone,$msg,$fromemailid,$toemailid,$packageid,$natureofbusiness){

	$from_email=$email;
	$message=$msg;
	$to_email =$toemailid;
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
	if (!empty($packageid)){
		$this->db->where('subcategoryid',$packageid);
		$this->db->select('*');
		$this->db->from('subcategory');
		$query = $this->db->get();
		$packagedt=$query->row();
		$packagename=$packagedt->subcategoryname;
	  }






    $data = array(

       'name'=>$name,'companyname'=>$companyname,'email'=>$email,'phone'=>$phone,'message'=>$message,'package'=>$packagename,'natureofbusiness'=>$natureofbusiness

         );

		 //$userEmail='sumilaifix@gmail.com';
		 $subject='Pocket friendly Contact Us Enquiries';

    //$this->email->to($to_email); // replace it with receiver mail id
	$this->db->select('*');
	$this->db->from('contactus');
	$query = $this->db->get();
	$contactusdte=$query->row();
	$fn1=$contactusdte->toemail1;
	$fn2=$contactusdte->toemail2;
	$fn3=$contactusdte->toemail3;
	
	
	$this->email->to($fn1);

	$this->email->bcc(array($fn2,$fn3));

  $this->email->subject($subject); // replace it with relevant subject

  

    $body = $this->load->view('Pocket/contactusenquiresemail2.php',$data,TRUE);

  $this->email->message($body); 

    $this->email->send();

  }

*/

  public function htmlmailenquiry($fromdest,$todest,$date,$duration){

  

	$from_email='sumilaifix@gmail.com';
	//$message=$note;
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

  
  $firstname='Flight Enquiry';
    $this->email->from($from_email,$firstname);
	/*if (!empty($packageid)){
		$this->db->where('subcategoryid',$packageid);
		$this->db->select('*');
		$this->db->from('subcategory');
		$query = $this->db->get();
		$packagedt=$query->row();
		$packagename=$packagedt->subcategoryname;
	  }*/


    $data = array(
		'fromdest'=>$fromdest,
       'todest'=>$todest,'date'=>$date,'duration'=>$duration,

         );
		 //print_r($data);

		 //$userEmail='sumilaifix@gmail.com';
		 $subject='Flight Enquiries';
		 $this->db->select('*');
		 $this->db->from('contactus');
		 $query = $this->db->get();
		 $contactusdte=$query->row();
		 $fn1=$contactusdte->toemail1;
		 $fn2=$contactusdte->toemail2;
		 $fn3=$contactusdte->toemail3;
		 
		 
		 $this->email->to($fn1);
	
		 $this->email->bcc(array($fn2,$fn3));
	   
		 $this->email->subject($subject); 

  

  

    $body = $this->load->view('Winsky/contactusenquiresemail3.php',$data,TRUE);

  $this->email->message($body); 

    $this->email->send();

  }














	
}
