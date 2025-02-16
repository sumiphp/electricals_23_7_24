<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productssample extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
        
        // Load cart library
        $this->load->library('cart');
        
        // Load product model
        $this->load->model('product');
    }
    
    function index(){
        $data = array();
        
        // Fetch products from the database
        $data['products'] = $this->product->getRows();
        
        // Load the product list view
        $this->load->view('products/index', $data);
    }
    
    function addToCart($proID){
        
        // Fetch specific product by ID
        $product = $this->product->getRows($proID);
        $cur=$_GET['cur'];
        if ($cur==''){
            $cur='QAR';
        }
        //print_r($product);
        //die;
        
        // Add product to the cart
       /*$data = array(
            'id'    => $product['prod_id'],
            'qty'    => 1,
            'price'    => $product['price'],
            'name'    => "prd",
            'image' => $product['image']
        );*/



        $this->db->where('prod_dt_prodid',$product['prod_id']);
        $this->db->where('prod_dt_typeid',4);
       // $this->db->order_by("orderno", "asc");
        $this->db->select('*');
        $this->db->from('product_details');
        $query = $this->db->get();
        $pricedt=$query->row();
        
        //echo  $currency.' '.$pricedt->prod_dt_desc;

$price=$pricedt->prod_dt_desc;


if ($cur=='SAR'){
    //echo '<b>SAR : </b> '.$product['prod_price2'];
    $price=$product['prod_price2'];

}
else if ($cur=='USD'){
    //echo '<b>USD :</b>'.$product['prod_price3'];
    $price=$product['prod_price3'];

}



else{
//echo  "<b>$currency : </b>".$pricedt->prod_dt_desc;
$price=$pricedt->prod_dt_desc;
}





       $data = array(
            'id'    => $product['prod_id'],
            'qty'    => 1,
            //'price'    => 30,
            'price'    => $price,
            'name'    =>$product['prod_id'],
            'image' => $product['prod_primary_image'],
            'currency'=> $cur,
        );
        //print_r($data);
        
        $this->cart->insert($data);
        //die;
        
       
        redirect('cart/');
    }


    function addToCartajhtml(){

        $this->load->view('nexa/loadcart.php');


    }

    function addToCartaj(){
        
        // Fetch specific product by ID
        $proID=$_GET['prdid'];
        $product = $this->product->getRows($proID);
        $cur=$_GET['cur'];
        if ($cur==''){
            $cur='AED';
        }
        //print_r($product);
        //die;
        
        // Add product to the cart
       /*$data = array(
            'id'    => $product['prod_id'],
            'qty'    => 1,
            'price'    => $product['price'],
            'name'    => "prd",
            'image' => $product['image']
        );*/



        $this->db->where('prod_dt_prodid',$product['prod_id']);
        $this->db->where('prod_dt_typeid',4);
       // $this->db->order_by("orderno", "asc");
        $this->db->select('*');
        $this->db->from('product_details');
        $query = $this->db->get();
        $pricedt=$query->row();
        
        //echo  $currency.' '.$pricedt->prod_dt_desc;

$price=$pricedt->prod_dt_desc;


if ($cur=='SAR'){
    //echo '<b>SAR : </b> '.$product['prod_price2'];
    $price=$product['prod_price2'];

}
else if ($cur=='USD'){
    //echo '<b>USD :</b>'.$product['prod_price3'];
    $price=$product['prod_price3'];

}



else{
//echo  "<b>$currency : </b>".$pricedt->prod_dt_desc;
$price=$pricedt->prod_dt_desc;
}





       $data = array(
            'id'    => $product['prod_id'],
            'qty'    => 1,
            //'price'    => 30,
            'price'    => $price,
            'name'    =>$product['prod_id'],
            'image' => $product['prod_primary_image'],
            'currency'=> $cur,
        );
        //print_r($data);
        
        $this->cart->insert($data);
        echo $no=$this->cart->total_items();
        //die;
        
       
        //redirect('cart/');
    }























    //function addToCartqty($proID,$qty){

        function addToCartqty(){
        $quantity=$this->input->post('quantity');
        $proID=$this->input->post('prdid');
        $cur=$this->input->post('currency');
        
        // Fetch specific product by ID
        $product = $this->product->getRows($proID);
        //print_r($product);
        //die;
        
        // Add product to the cart
       /*$data = array(
            'id'    => $product['prod_id'],
            'qty'    => 1,
            'price'    => $product['price'],
            'name'    => "prd",
            'image' => $product['image']
        );*/



        $this->db->where('prod_dt_prodid',$product['prod_id']);
        $this->db->where('prod_dt_typeid',4);
       // $this->db->order_by("orderno", "asc");
        $this->db->select('*');
        $this->db->from('product_details');
        $query = $this->db->get();
        $pricedt=$query->row();
        
        //echo  $currency.' '.$pricedt->prod_dt_desc;

$price=$pricedt->prod_dt_desc;





       $data = array(
            'id'    => $product['prod_id'],
            'qty'    => $quantity,
            //'price'    => 30,
            'price'    => $price,
            'name'    =>$product['prod_id'],
            'image' => $product['prod_primary_image'],
            'currency'=> $cur,
        );
        //print_r($data);
        
        $this->cart->insert($data);
        //die;
        
       
        redirect('cart/');
    }
    












    
}

?>