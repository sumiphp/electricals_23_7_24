<table id="customersList" class="text-center listingPage  dataTable" width=60%>
    <thead class="text-capitalize">
        <tr>
            <th>No</th>
            <th>Order:</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Sub Total</th>
           
           
        </tr>
    </thead>
    <tbody>
        <?php 
        $slno = 0;
        //print_r($orderdt);
        //die;
        //foreach ($billcustomers as $k => $customerVal) {

        foreach($orderdt['items'] as $k => $customerVal) {
            $slno++; ?>
            <tr >
                <td align="center" ><?=$slno?></td>
                <td align="center"><?php //echo trim($customerVal['customer_id']);
                
                echo $orderid=trim($customerVal['order_id']);
                /*$this->db->where('userid',$custid);
        $this->db->from('userlogin');
        $query = $this->db->get();
         $dt=$query->row();
       
            echo $dt->name.' '.$dt->lastname;*/    
                
                
                ?></td> <td align="center"><?php //echo trim($customerVal['customer_id']);
                
                $prod_id=trim($customerVal['product_id']);

                $this->db->where('prod_id',$prod_id);
                
                $this->db->select('*');
                $this->db->from('products');
                $query = $this->db->get();
                $row=$query->row();
                echo $row->prod_name;


                /*$this->db->where('userid',$custid);
        $this->db->from('userlogin');
        $query = $this->db->get();
         $dt=$query->row();
       
            echo $dt->name.' '.$dt->lastname;*/    
                
                
                ?></td>
                 <td align="center"><?=$customerVal['quantity']?></td>
                <td align="center"><?=$customerVal['sub_total']?></td>
              
              

               
               
            </tr>
        <?php } ?>
    </tbody>
</table>


<table id="customersList" class="text-center listingPage">
    <thead class="text-capitalize">
        <tr>
            <th>Sl.No:</th>
            <th>Name1</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Apartment</th>
            <th>Country</th>
            <th>Zip</th>
            <th>Company Name</th>
            <th>Message</th><th>City</th><th>State</th>
            <th>Billing and Address</th>
            
        </tr>
    </thead>
    <tbody>
        <?php 
        $slno = 0;
        //print_r($billdetail);
        //$customerVal=array('billshipflag'=>1,'city'=>$city,'country'=>$country,'state'=>$state,'message'=>$message,'apartment'=>$apartment,'name'=>$name,'companyname'=>$cname,'address'=>$saddress,'zip'=>$zip,'email'=> $eadd,'phone'=>$pnumber);
        //die;
        //foreach ($billdetail as $k => $customerVal) {
            $slno++; ?>
            <tr>
                <td><?=$slno?></td>
                <td><?=trim($billdetail['name'])?></td>
                <td><?=$billdetail['email']?></td>
                <td><?=$billdetail['phone']?></td>
                <td><?=$billdetail['address']?></td>
                <td><?=$billdetail['apartment']?></td>
                <td><?=$billdetail['country']?></td>
                <td><?=$billdetail['zip']?></td>
                <td><?=$billdetail['companyname']?></td>
                <td><?=$billdetail['message']?></td>
                <td><?=$billdetail['city']?></td>
                <td><?=$billdetail['state']?></td>

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
        //print_r($billdetail);
        //$customerVal=array('billshipflag'=>1,'city'=>$city,'country'=>$country,'state'=>$state,'message'=>$message,'apartment'=>$apartment,'name'=>$name,'companyname'=>$cname,'address'=>$saddress,'zip'=>$zip,'email'=> $eadd,'phone'=>$pnumber);
        //die;
        //foreach ($billdetail as $k => $customerVal) {
            $slno++; ?>
            <tr>
                <td><?=$slno?></td>
                <td><?=trim($billdetail1['name'])?></td>
                <td><?=$billdetail1['email']?></td>
                <td><?=$billdetail1['phone']?></td>
                <td><?=$billdetail1['address']?></td>
                <td><?=$billdetail1['apartment']?></td>
                <td><?=$billdetail1['country']?></td>
                <td><?=$billdetail1['zip']?></td>
                <td><?=$billdetail1['companyname']?></td>
                <td><?=$billdetail1['message']?></td>
                <td><?=$billdetail1['city']?></td>
                <td><?=$billdetail1['state']?></td>

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



<table id="customersList" class="text-center listingPage">
    <thead class="text-capitalize">
        <tr>
            <th>Sl.No:</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Apartment</th>
            <th>Country</th>
            <th>Zip</th>
            <th>Company Name</th>
            <th>Message</th><th>City</th><th>State</th>
            <th>Shipping and Address</th>
            
        </tr>
    </thead>
    <tbody>
       
        <?php //} ?>
    </tbody>
</table>

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
                        <p class="text-white">assdad asd  asda asdad a sd</p>
                        <p class="text-white">assdad asd asd</p>
                        <p class="text-white">+91 888555XXXX</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="body-section">
            <div class="row">
                <div class="col-6">
                    <h2 class="heading">Invoice No.: 001</h2>
                    <p class="sub-heading">Tracking No. fabcart2025 </p>
                    <p class="sub-heading">Order Date: 20-20-2021 </p>
                    <p class="sub-heading">Email Address: customer@gfmail.com </p>
                </div>
                <div class="col-6">
                    <p class="sub-heading">Full Name:  </p>
                    <p class="sub-heading">Address:  </p>
                    <p class="sub-heading">Phone Number:  </p>
                    <p class="sub-heading">City,State,Pincode:  </p>
                </div>
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Ordered Items</h3>
            <br>
            <table class="table-bordered">
                <thead>
                    <!--tr>
                        <th>Product</th>
                        <th class="w-20">Price</th>
                        <th class="w-20">Quantity</th>
                        <th class="w-20">Grandtotal</th>
                    </tr-->


                    <tr>
            <th class="w-20">No</th>
            <th class="w-20">Order:</th>
            <th class="w-20">Product</th>
            <th class="w-20">Quantity</th>
            <th class="w-20">Sub Total</th>
           
           
        </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Product Name</td>
                        <td>10</td>
                        <td>1</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Sub Total</td>
                        <td> 10.XX</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Tax Total %1X</td>
                        <td> 2</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-right">Grand Total</td>
                        <td> 12.XX</td>
                    </tr>
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