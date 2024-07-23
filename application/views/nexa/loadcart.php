
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget woocommerce widget_shopping_cart">
                <h3 class="widget_title">Shopping cart</h3>
                <div class="widget_shopping_cart_content">
                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                    <?php $username=$this->session->userdata('username');?>
                    <?php $sitedetails = sitedetails();





?>
                    <?php 
                     $cartItems = $this->cart->contents();
    
    $i=0;
    
    
    if($this->cart->total_items() > 0){ foreach($cartItems as $item){    ?>

<?php $itn=$item["name"]; 
                                
                                $this->db->where('prod_id',$itn);
                                //$this->db->where('prod_dt_typeid',5);
                               // $this->db->order_by("orderno", "asc");
                                $this->db->select('*');
                                $this->db->from('products');
                                $query = $this->db->get();
                                $rowdt=$query->row();
                                
                                $qty=$item["qty"];
                                $price=$item["price"];
                                
                                
                                ?>
                        <li class="woocommerce-mini-cart-item mini_cart_item" id="<?php echo $item['rowid'];?>" >
                            <a href="#" class="remove remove_from_cart_button"  onclick=del("<?php echo $item['rowid'];?>")><i class="far fa-times"></i></a>
                            <a href="<?=site_url().'product/'.$rowdt->prod_canonial_name;?>"><img src="<?=site_url()?>assets/uploads/products/<?=$item['image']?>" alt="Cart Image"><img width="91" height="91" src="<?=site_url()?>assets/uploads/products/<?=$item['image']?>" alt="Image"></a>
                            <?php echo $string1=$rowdt->prod_name;?>
                            <span class="quantity"><?php echo  $qty;?>
                           
                            
                            

                           

                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol"><?php echo  $price;?></span><?php echo  $item["currency"];?></span>
                            </span>
                        </li>
                        <?php 
                    
                    $i++;

                    $cur1=$item["currency"];
                    
                    } }else{ ?>
    <tr><td colspan="6"><p>Your cart is empty.....</p></td></tr>
    <?php } ?>
                        
                       
                    </ul>
                    <?php if($this->cart->total_items() > 0){ ?>




                        
                    <p class="woocommerce-mini-cart__total total">
                        <strong>Total:</strong>
                        <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol"></span><span id='subtotal'><?php echo $this->cart->total().'&nbsp;'.$cur1; ?></span></span>
                    </p>



                    <!--p class="woocommerce-mini-cart__total total">
                        <strong>Shipping Amount:</strong>
                        <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol"></span><span id='shipamo'>

                            <?php 
                                
                                /*if ($cur1=='AED'){

                                   $tot=$this->cart->total();
                                    if ($tot>=500){
                                        echo "0&nbsp;".$cur1;
                                $sa=0;

                                    }else{
                                echo $sitedetails['shippingamount'].'&nbsp;'.$cur1;
                                $sa=$sitedetails['shippingamount'];
                                }

                                }else{
                                    $tot=$this->cart->total();
                                    if ($tot>=500){
                                        echo "0&nbsp;".$cur1;
                                $sa=0;

                                    }else{

                                    echo $sitedetails['shippingamountusd'].'&nbsp;'.$cur1;
                                    $sa=$sitedetails['shippingamountusd'];
                                    }
                                }
                                */
                                
                                ?>




                            </span></span>
                    </p>


                    <p class="woocommerce-mini-cart__total total">
                        <strong>Order Total:</strong>
                        <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol" id='nettotal'><?php 
                            $net=$this->cart->total()+$sa;
                            
                           
                            echo $net.'&nbsp;'.$cur1;?></span>
                    </p-->
                    <p class="woocommerce-mini-cart__buttons buttons">
                     

                        <a  style='margin:15px;padding:10px;' href="<?php echo base_url().'cart'?>" class="th-btn wc-forward" >View cart</a><!--p-->
                       

                        <?php if($this->cart->total_items() > 0){ ?>

                       


                        <div class="row">
                        <?php if ($username==''){?>
                            <div class="col-md-6">
                        <a id="lin" href="<?php echo base_url().'checkout'?>?cur=<?php echo $cur1;?>" class="th-btn" style='padding:10px;'>Checkout</a>
                        </div>
                        <div class="col-md-6">
                         <a href="<?php echo base_url().'login?cur='.$cur1?>" class="th-btn" style='padding:10px;'>Sign In & Checkout</a>
                         </div>
                         <?php } else { ?>
                         <div class="">
                         <a id="lin" style='margin:15px;padding:10px;' href="<?php echo base_url().'checkout'?>?cur=<?php echo $cur1;?>" class="th-btn" style='padding:10px;'>Checkout</a>
                         </div>

                         <?php } ?>
                        </div>



                        <?php }else { ?>

                            <a href="#" class="th-btn">Proceed to checkout</a>

                            <?php } ?>
                    </p>
                    <?php } ?>



                    
                </div>
            </div>
        </div>


        <script>
function del(id){
    //alert("lcart"+id);

var shipamount="<?php echo $sitedetails['shippingamount'];?>"
var cur="<?php echo $cur1;?>"
    $.ajax({
            type: 'GET',
            //'dataType': 'json',
            url: "<?php echo base_url().'cart/removecartItem';?>",
            data:{id:id,shipamount:shipamount,cur:cur},
            success:function(data){
                var data1 =data;
               
                //alert(data1.subtotal);
                //var net1=data1.nettotal+" "+data1.cur;
                //let text = "How are you doing today?";
const myArray = data.split("-");
let subtotal = myArray[0];
if (subtotal>=500){
                    $("#subtotal11").html(shipamount);
                }else{

                    $("#subtotal11").html(0);
                }
let net1 = myArray[1];
let cur=myArray[2];
let sym=net1+cur;
let no=myArray[3];
let shipamo=myArray[4];
//alert(no);
                $("#"+id).remove();
                $("#subtotal").html(subtotal);
                //$("#subtotal1").html(no);
                //$("#subtotal11").html(no);
                $("#nettotal").html(net1);
                
                //$("#"+id).remove();
                //$("#subtotal").html(subtotal);
                $("#ctcount").html(no);
                $("#shipamo").html(shipamo);
                $("#subtotal1").html(no);


                //$("#lin").html(data.nettotal);
                /*if(no==0){
                $("#lin a").attr("href","#");
                }*/
            }
        });





}




</script>
    
    <!--==============================
    Sidemenu
============================== -->