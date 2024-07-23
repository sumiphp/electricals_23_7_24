

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexa</title>
    <style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }
        .brand-section{
           background-color: #0d1033;
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                    <h1 class="text-white">Nexa</h1>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <!--p class="text-white">assdad asd  asda asdad a sd</p>
                        <p class="text-white">assdad asd asd</p>
                        <p class="text-white">+91 888555XXXX</p-->


                        <p class="text-white">Nexa electricals trading LLC </p><p class="text-white"
                        >LLC AI Nakhal Road </p>
                    </div>
                </div>
            </div>
        </div>

       

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Invoice No.: <?=$ordid;?></h2>
                    <!--p class="sub-heading">Tracking No. fabcart2025 </p-->
                    <p class="sub-heading">Order Date: <?php echo Date('d-m-Y');?></p>
                    <p class="sub-heading">Email Address: <?=$billdetail1['email']?> </p>
                </div>
                <div class="col-6">
                    <p class="sub-heading">Full Name:<?=trim($billdetail1['name'])?>  </p>
                    <p class="sub-heading">Address:<?=$billdetail1['address']?>  </p>
                    <p class="sub-heading">Phone Number: <?=$billdetail1['phone']?> </p>
                    <p class="sub-heading">City,State,Pincode: <?=$billdetail1['city']?>,
                    <?=$billdetail1['state']?>,<?=$billdetail1['zip']?>
                </div>
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Ordered Items</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    


                    <tr>
            <th class="w-20">No</th>
            <th class="w-20">Order:</th>
            <!--th class="w-20">Product</th>
            <th class="w-20">Quantity</th>
            <th class="w-20">Sub Total</th-->



            <th class="cart-col-productname">Product Name</th>
                            <th class="cart-col-quantity">Quantity</th>
                            <th class="cart-col-price">Price excl VAT</th>
                            <th class="cart-col-price">VAT Rate</th>
                            <th class="cart-col-price">VAT Amount</th>
                            <th class="cart-col-total">Price incl VAT</th>
           
           
        </tr>
                </thead>
                <tbody>
                <?php 
        $slno = 0;
       

        foreach($orderdt['items'] as $k => $customerVal) {
            $slno++; ?>
            <tr >
                <td align="center" ><?=$slno?></td>
                <td align="center"><?php //echo trim($customerVal['customer_id']);
                
                echo $orderid=trim($customerVal['order_id']);
                
                
                
                ?></td> <td align="center"><?php //echo trim($customerVal['customer_id']);
                
                $prod_id=trim($customerVal['product_id']);

                $this->db->where('prod_id',$prod_id);
                
                $this->db->select('*');
                $this->db->from('products');
                $query = $this->db->get();
                $row=$query->row();
                echo $row->prod_name;


                
                
                ?></td>
                 <td align="center"><?=$customerVal['quantity']?></td>
                <td align="center"><?=$customerVal['sub_total']?></td>
                <td align="center"><?=$customerVal['vatrate']?></td>
                <td align="center"><?=$customerVal['vatamo']?></td>
                <td align="center"><?=$customerVal['pricewithvat']?></td>
               
               
            </tr>
        <?php } ?>
        <tr >
            
           
            <td colspan="7">Vat Amount:</td>
            <td><?=$net->vatamo.' '.$net->currency?></td>
           
        </tr>
        <tr >
            
           
            <td colspan="7">Shipping Amount:</td>
            <td><?=$net->shippingamount.' '.$net->currency?></td>
           
        </tr>
        <tr >
            
           
            <td colspan="7">Net Total:</td>
            <td><?=$net->grand_total.' '.$net->currency?></td>
           
        </tr>
                </tbody>
            </table>
            <br>
            <!--h3 class="heading">Payment Status: Paid</h3-->
            <h3 class="heading">Payment Mode: Cash on Delivery</h3>
        </div>


            <div class="body-section">
            <h3 class="heading">Billing and Shipping Address</h3>
            <br>

            <table class="table-bordered">
            <thead>
        <tr>
            <th class="w-20">Sl.No:</th>
            <th class="w-20">Name</th>
            <th class="w-20">Email</th>
            <th class="w-20">Phone</th>
            <th class="w-20">Address</th>
            <th class="w-20">Apartment</th>
            <th class="w-20">Country</th>
            <th class="w-20">Zip</th>
            <th class="w-20">Company Name</th>
            <th class="w-20">Message</th><th class="w-20">City</th><th  class="w-20">State</th>
            <th class="w-20">Billing and Address</th>
            
        </tr>
    </thead>
    <tbody>
        <?php 
        $slno = 0;
       
            $slno++; ?>
            <tr>
                <td align="center">
                    <?=$slno?></td>
                <td align="center"><?=trim($billdetail['name'])?></td>
                <td align="center"><?=$billdetail['email']?></td>
                <td align="center"><?=$billdetail['phone']?></td>
                <td align="center"><?=$billdetail['address']?></td>
                <td align="center"><?=$billdetail['apartment']?></td>
                <td align="center"><?=$billdetail['country']?></td>
                <td align="center"><?=$billdetail['zip']?></td>
                <td align="center"><?=$billdetail['companyname']?></td>
                <td align="center"><?=$billdetail['message']?></td>
                <td align="center"><?=$billdetail['city']?></td>
                <td align="center"><?=$billdetail['state']?></td>

                <td><?php $sflag=$billdetail['billshipflag'];
                if ($sflag==1){
echo "Billing Address";

                }else{
                    echo "Shipping Address";
                }

                
                
                
                
                ?></td>
                

               
                
            </tr>
            <?php 
        $slno = 0;
        
            $slno++; ?>
            <tr>
                <td align="center"><?=$slno?></td>
                <td align="center"><?=trim($billdetail1['name'])?></td>
                <td align="center"><?=$billdetail1['email']?></td>
                <td align="center"><?=$billdetail1['phone']?></td>
                <td align="center"><?=$billdetail1['address']?></td>
                <td align="center"><?=$billdetail1['apartment']?></td>
                <td align="center"><?=$billdetail1['country']?></td>
                <td align="center"><?=$billdetail1['zip']?></td>
                <td align="center"><?=$billdetail1['companyname']?></td>
                <td align="center"><?=$billdetail1['message']?></td>
                <td align="center"><?=$billdetail1['city']?></td>
                <td align="center"><?=$billdetail1['state']?></td>

                <td><?php $sflag=$billdetail1['billshipflag'];
                if ($sflag==1){
echo "Billing Address";

                }else{
                    echo "Shipping Address";
                }

                
                
                
                
                ?></td>
                

               
                
            </tr>
        <?php //} ?>
    </tbody>
</table>

            <br>
            <!--h3 class="heading">Payment Status: Paid</h3-->
            <h3 class="heading">Payment Mode: Cash on Delivery</h3>
        </div>

        <div class="body-section">
            <p>&copy; Copyright 2024 - Nexa electricals. All rights reserved. 
                <a href="https://schneiderelectricals.com" class="float-right">www.schneiderelectricals.com</a>
            </p>
        </div>      
    </div>      

</body>
</html>