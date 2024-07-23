<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load form library & helper
        $this->load->library('form_validation');
        $this->load->helper('form');
        
        // Load cart library
        $this->load->library('cart');
        
        // Load product model
        $this->load->model('product');
        $this->load->model('Manage_frontend', 'frontend');
        $this->load->model('acp/Manage_common', 'commonModel');
        
        $this->controller = 'checkout';

       




    }
    
    function index(){
        // Redirect if the cart is empty
        if($this->cart->total_items() <= 0){
            redirect('cart/');
        }


        $username=$this->session->userdata('username');
        //die;
     
       //$custID=10;
        $custname=$this->session->userdata('username');
       /* if ($custname==''){
        
         redirect("home/index");
     
        }*/
     





        
        $custData = $data = array();
        
        
        /*$submit = $this->input->post('placeOrder');
        if(isset($submit)){
            
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('phone', 'Phone', 'required');
            $this->form_validation->set_rules('address', 'Address', 'required');
            
           
            $custData = array(
                'name'     => strip_tags($this->input->post('name')),
                'email'     => strip_tags($this->input->post('email')),
                'phone'     => strip_tags($this->input->post('phone')),
                'address'=> strip_tags($this->input->post('address'))
            );
            
            
            if($this->form_validation->run() == true){
                
                $insert = $this->product->insertCustomer($custData);
                
               
                if($insert){
                    
                    $order = $this->placeOrder($insert);
                    
                    
                    if($order){
                        $this->session->set_userdata('success_msg', 'Order placed successfully.');
                        redirect($this->controller.'/orderSuccess/'.$order);
                    }else{
                        $data['error_msg'] = 'Order submission failed, please try again.';
                    }
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        }*/
        
        // Customer data
        $data['custData'] = $custData;
        
        // Retrieve cart data from the session
        $data['cartItems'] = $this->cart->contents();
        
        // Pass products data to the view

        //print_r($cartItems);
        //die;


        $data['menus']=$this->frontend->get_menus();
        $data['gt']=$this->db->get('site')->row();
        $data['site']= $this->frontend->sitedetails();
        $data['homepagedetails']= $this->frontend->homepagedetails();

        $this->categories = $this->frontend->getCategories();
        $data['recent_categories'] = array_slice($this->categories, 0, 9);

        if ($custname==''){
            $custname='guest@gmail.com';
        }
        
   $custID=$this->product->getcustdata($custname);


   $this->db->where('customer_id',$custID);
   $this->db->select('*');
   $this->db->from('wishlist');
   $query = $this->db->get();
   $data['wishlistcount'] = $query->num_rows();
 
   $data['custdetails']=$this->product->getcustdetails($custID);
   
   $data['countries']=$this->product->getcountries();
   //print_r($data['countries']);
   //die;

$data['currency']=$_GET['cur'];



   
 $this->load->view('nexa/checkout', $data);


        //$this->load->view($this->controller.'/index', $data);
    }
    
    //function placeOrder($custID){

        function placeOrder(){


        // Insert order data

        //echo $custID;
        //die;
        $custname=$this->session->userdata('username');
 

        if ($custname==''){
            $custname='guest@gmail.com';
        }

       $custID=$this->product->getcustdata($custname);

    $fname=$this->input->post('fname');
     $lname=$this->input->post('lname');
     $cname=$this->input->post('cname');
     $saddress=$this->input->post('saddress');
     $apartment=$this->input->post('apartment');
     $city=$this->input->post('city');

     $country=$this->input->post('country');
     $zip=$this->input->post('zip');
     $eadd=$this->input->post('eadd');
     $pnumber=$this->input->post('pnumber');
     $message=$this->input->post('message');
     $state=$this->input->post('state');
     $name=$fname.' '.$lname;
     $billdetail=array('billshipflag'=>1,'city'=>$city,'country'=>$country,'state'=>$state,'message'=>$message,'apartment'=>$apartment,'name'=>$name,'companyname'=>$cname,'address'=>$saddress,'zip'=>$zip,'email'=> $eadd,'phone'=>$pnumber);
     
     
     $insertbill = $this->product->insertbill($billdetail);


     $ship_to_different_address=$this->input->post('ship_to_different_address');

if ($ship_to_different_address==1){
     $fname=$this->input->post('fname1');
     $lname=$this->input->post('lname1');
     $cname=$this->input->post('cname1');
     $saddress=$this->input->post('saddress1');
     $apartment=$this->input->post('apartment1');
     $city=$this->input->post('city1');
     $state=$this->input->post('state1');
     $country=$this->input->post('country1');
     $zip=$this->input->post('zip1');
     $eadd=$this->input->post('eadd1');
     $pnumber=$this->input->post('pnumber1');
     $name=$fname.' '.$lname;
}

$currency=$this->input->post('currency');
$shipamotxt=$this->input->post('shipamotxt');
$vatper=$this->input->post('vatper');
$vatamo=$this->input->post('vatamo');
$cartnet=$this->input->post('cartnet');
$shipdetail=array('billshipflag'=>2,'city'=>$city,'country'=>$country,'state'=>$state,'message'=>$message,'apartment'=>$apartment,'name'=>$name,'companyname'=>$cname,'address'=>$saddress,'zip'=>$zip,'email'=> $eadd,'phone'=>$pnumber);
$insertship = $this->product->insertbill($shipdetail);
error_reporting(0);
//echo $shipamotxt;

$tot=$cartnet;
$gd=$cartnet;
 //$gd=$tot+$vatamo+$shipamotxt;
//die;
        $ordData = array(
            'customer_id' => $custID,
            'grand_total' =>$gd ,
            'currency'=>$currency,
            'shippingamount'=>$shipamotxt,'name'=>$name,'vatper'=>$vatper,'vatamo'=>$vatamo
        );
        $insertOrder = $this->product->insertOrder($ordData);
        
        if($insertOrder){
            // Retrieve cart data from the session
            $cartItems = $this->cart->contents();
            
            // Cart items
            $ordItemData = array();
            $i=0;
            foreach($cartItems as $item){
                $ordItemData[$i]['order_id']     = $insertOrder;
                $ordItemData[$i]['product_id']     = $item['id'];
                $ordItemData[$i]['quantity']     = $item['qty'];
                $ordItemData[$i]['sub_total']     = $item["subtotal"];
                $ordItemData[$i]['vatrate']     =$vatper;
                $ordItemData[$i]['vatamo']     =round($item["subtotal"]*($vatper/100),2);
                $st=round($item["subtotal"]*($vatper/100),2);
                $ordItemData[$i]['pricewithvat']     =$st+$item["subtotal"];

                $i++;
            }
            
            if(!empty($ordItemData)){
                // Insert order items
                $insertOrderItems = $this->product->insertOrderItems($ordItemData);
                
                if($insertOrderItems){
                    // Remove items from the cart
                    $this->cart->destroy();
                    
                    // Return order ID
                    //return $insertOrder;
                    $ordID=$insertOrder;
                    $data['order'] = $this->product->getOrder($ordID);
                  


                  
            
                    $this->categories = $this->frontend->getCategories();
                    $data['recent_categories'] = array_slice($this->categories, 0, 9);

 

  $ordID=$insertOrder;
  $data=array('orderid' => $ordID);
  $this->db->update("billingdetails",$data, array('billingid' => $insertbill));
  $this->db->update("billingdetails",$data, array('billingid' => $insertship));
  $orderdt = $this->product->getOrder($ordID);
  $data['order'] = $this->product->getOrder($ordID);
  $net = $this->commonModel->getdataordersnet($ordID);
 // $billdt = $this->product->getbill($ordID);
  //print_r($orderdt);
  //die;
  
$subject="Your Orders";
$message="Below is your Order details";
$billdetail=array('billshipflag'=>1,'city'=>$city,'country'=>$country,'state'=>$state,'message'=>$message,'apartment'=>$apartment,'name'=>$name,'companyname'=>$cname,'address'=>$saddress,'zip'=>$zip,'email'=> $eadd,'phone'=>$pnumber);
  $this->htmlmail($subject,$message,$orderdt,$billdetail,$shipdetail,$ordID,$net);

  $subject="New Orders";
$message="Below is the Order details";
  $this->htmlmail($subject,$message,$orderdt,$billdetail,$shipdetail,$ordID,$net);





  
  $data=array("name"=>$name,"emailid"=>$eadd);
  

  redirect("checkout/orderSuccess?ordid=".$ordID.'&cur='.$currency.'&name='.$name.'&emailid='.$eadd.'&phone='.$pnumber.'&shipamo='.$shipamotxt);


                }
            }
        }
        return false;
    }
    




    public function htmlmail($subject,$msg,$orderdt,$billdetail,$shipdetail,$ordID,$net){

        //$from_email=$email;
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
    
      $this->db->select('*');
      $this->db->from('site');
      $query = $this->db->get();
      $quote = $query->row();
      $fn1=$quote->site_email2_id; 
      $from_email="$quote->site_email2_id";
      $name="Nexa";
        $this->email->from($from_email,$name);
    
        $data = array('net'=>$net,'ordid'=>$ordID,
    'subject'=>$subject."ppp",'message'=>$message,'orderdt'=>$orderdt,'billdetail'=>$billdetail,'billdetail1'=>$shipdetail
          // 'name'=>$name,'subject'=>$subject,'email'=>$email,'phone'=>$phone,'message'=>$message
    
             );
    
             //$userEmail='sumilaifix@gmail.com';
             //$subject='Order Details';
             /*$this->db->select('*');
             $this->db->from('contact_us');
             $query = $this->db->get();
             $contactusdte=$query->row();
             $fn1=$contactusdte->toemail1;
             $fn2=$contactusdte->toemail2;
             $fn3=$contactusdte->toemail3;*/
             
             //$fn1="sumila.c@gmail.com";

            
             $this->email->to($fn1);
             //$this->email->to($fn2);
             //$this->email->bcc(array($fn2,$fn3));
      $this->email->subject($subject); // replace it with relevant subject
    
      
    
         $body = $this->load->view('nexa/mail1.php',$data,TRUE);
        //die;
    
      $this->email->message($body); 
    
        $this->email->send();
    
      }



    //function orderSuccess($ordID){

        function orderSuccess(){
            $custname=$this->session->userdata('username');
            if ($custname=='')
            {
                //redirect('Home/index');
                $custname='guest@gmail.com';
            }     
           $ordID=$_GET['ordid'];
        // Fetch order data from the database
        $data['order'] = $this->product->getOrder($ordID);
        $data['menus']=$this->frontend->get_menus();
        $data['gt']=$this->db->get('site')->row();
        $data['site']= $this->frontend->sitedetails();
        $data['homepagedetails']= $this->frontend->homepagedetails();
        $this->categories = $this->frontend->getCategories();
        $data['recent_categories'] = array_slice($this->categories, 0, 9);

        
        // Load order details view
        //$this->load->view($this->controller.'/order-success', $data);
        //$custID=1;
      
        $data['namedt']=$_GET['name'];

        $custID=$this->product->getcustdata($custname);
        $data['custIDdt']=$this->product->getcustdatadt($custname);
        $this->db->where('customer_id',$custID);
        $this->db->select('*');
        $this->db->from('wishlist');
        $query = $this->db->get();
        $data['wishlistcount'] = $query->num_rows();
        $this->load->view('nexa/order-success', $data);
    }
    





//$custname=$this->session->userdata('username');
 

//echo $custID=$this->product->getcustdata($custname);



public function deletewishlist(){
    $id=$_GET['id'];
    $this->db->where('id',$id);
    $this->db->delete('wishlist');
    //echo ($this->db->affected_rows() != 1) ? 'Error in deleting Product' : 'Product deleted Successfully from wishlist';
    $custname=$this->session->userdata('username');


    $custID=$this->product->getcustdata($custname);
    $this->db->where('customer_id',$custID);
    $this->db->select('*');
	$this->db->from('wishlist');
	$query = $this->db->get();
	echo $rowcount = $query->num_rows();
}


public function addwishlist(){

    $id=$_GET['id'];
    //$this->db->where('id',$id);
    //echo $id;
    //die;

    $custname=$this->session->userdata('username');


    $custID=$this->product->getcustdata($custname);
    //$custID=1;
    $data=array("customer_id"=>$custID,"product_id"=>$id);

    $this->db->insert('wishlist',$data);

    $this->db->where('customer_id',$custID);
    $this->db->select('*');
	$this->db->from('wishlist');
	$query = $this->db->get();
	echo $rowcount = $query->num_rows();


    //echo "4";


}


public function countwishlist(){
    //$custID=1;
    $custname=$this->session->userdata('username');


    $custID=$this->product->getcustdata($custname);
    $this->db->where('customer_id',$custID);
    $this->db->select('*');
	$this->db->from('wishlist');
	$query = $this->db->get();
	return $rowcount = $query->num_rows();


}
}



//}

?>