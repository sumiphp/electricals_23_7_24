<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Cart extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load cart library
        $this->load->library('cart');
        
        // Load product model
        $this->load->model('product');
        
        $this->load->model('Manage_frontend', 'frontend');
        $this->categories = $this->frontend->getCategories();
    }
    
    function index(){
        $data = array();
        
        // Retrieve cart data from the session
        $data['cartItems'] = $this->cart->contents();
        $data['gt']=$this->db->get('site')->row();
        $data['site']= $this->frontend->sitedetails();
        $data['homepagedetails']= $this->frontend->homepagedetails();
        $data['recent_categories'] = array_slice($this->categories, 0, 9);
        $data['menus']=$this->frontend->get_menus();
        
        
       //$custID=1;
       $custname=$this->session->userdata('username');
       /*if ($custname==''){

       
        redirect("home/login");

    }*/


    $custID=$this->product->getcustdata($custname);

    if ($custID==''){

       $this->db->where('customer_id',$custID);
       $this->db->select('*');
       $this->db->from('wishlist');
       $query = $this->db->get();
       $data['wishlistcount']=$query->num_rows();
    }else{
        $data['wishlistcount']=0;

    }
       $this->load->view('nexa/cart', $data);

    }
    
    function updateItemQty(){
        $update = 0;
        
        // Get cart item info
        $rowid = $this->input->get('rowid');
        $qty = $this->input->get('qty');
        
        // Update item in the cart
        if(!empty($rowid) && !empty($qty)){
            $data = array(
                'rowid' => $rowid,
                'qty'   => $qty
            );
            $update = $this->cart->update($data);
        }
        
        // Return response
        echo $update?'ok':'err';
    }
    
    function removeItem($rowid){
        // Remove item from cart
        $remove = $this->cart->remove($rowid);
        
        // Redirect to the cart page
        redirect('cart/');
    }

    function removecartItem(){
        // Remove item from cart
        
        $cartItems = $this->cart->contents();
        $rowid=$_GET['id'];
        $remove = $this->cart->remove($rowid);
        // Cart items
        $ordItemData = array();
        $i=0;
        $subtotal=array();
        $cartItems1 = $this->cart->contents();
        $no=$this->cart->total_items();
        $json=array();
        //$shipamount=$_GET['shipamount'];
        foreach($cartItems1 as $item){
            //$ordItemData[$i]['order_id']     = $insertOrder;
            $ordItemData[$i]['product_id']     = $item['id'];
            $ordItemData[$i]['quantity']     = $item['qty'];
            $ordItemData[$i]['sub_total']     = $item["subtotal"];
            $subtotal[]=$item["subtotal"];
            $i++;
        }
        $stotal=array_sum($subtotal);



        $cur=$_GET['cur'];
        //$sitedetails = sitedetails();

        //$this->db->where('customer_id',$custID);
        $this->db->select('*');
        $this->db->from('site');
        $query = $this->db->get();
        $sitedetails=$query->row();


                                
        if ($cur=='AED'){

           $tot=$stotal;
            if ($tot>=500){
                //echo "0".$cur;
        $sa=0;

            }else{
       // echo $sitedetails['shippingamount'].$cur;
        $sa=$sitedetails->shippingamount;
        }

        }else{
            $tot=$stotal;
            if ($tot>=500){
                //echo "0".$cur;
        $sa=0;

            }else{

            //echo $sitedetails['shippingamountusd'].$cur;
            $sa=$sitedetails->shippingamountusd;
            }
        }
        
        

       /* if ($stotal>=500){
            $shipamount=$_GET['shipamount'];
        }
        else{
            $shipamount=0;

        }


        if ($stotal==0){
            $nettotal=0;
        }
        else{
            $nettotal=$stotal+$shipamount;
        }*/
       
if ($stotal==0){
    $nettotal=0;
    $sa=0;
}else{
        $nettotal=$stotal+$sa;
}
echo "$stotal-$nettotal-$cur-$no-$sa";
//$json=array("subtotal=>$stotal","nettotal"=>$nettotal,"currency"=>$cur);

/*$json['subtotal'] = $stotal;
$json['nettotal'] = $nettotal;
$json['currency
'] = $cur;
$myJSON = json_encode($json);*/

//echo $myJSON;




        
        // Redirect to the cart page
        //redirect('cart/');
    }
    
}

?>