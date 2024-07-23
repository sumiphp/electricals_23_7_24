<table id="customersList" class="text-center listingPage  dataTable" width=100%>
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
        //print_r($billcustomers);
        //die;
        foreach ($billcustomers as $k => $customerVal) {
            $slno++; ?>
            <tr>
                <td><?=$slno?></td>
                <td><?php //echo trim($customerVal['customer_id']);
                
                echo $orderid=trim($customerVal['order_id']);
                /*$this->db->where('userid',$custid);
        $this->db->from('userlogin');
        $query = $this->db->get();
         $dt=$query->row();
       
            echo $dt->name.' '.$dt->lastname;*/    
                
                
                ?></td> <td><?php //echo trim($customerVal['customer_id']);
                
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
                 <td><?=$customerVal['quantity']?></td>
                <td><?=$customerVal['sub_total']?></td>
              
              

               
               
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
            <th class="no-sorting">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $slno = 0;
        //print_r($billcustomers);
        $billdetail=array('billshipflag'=>1,'city'=>$city,'country'=>$country,'state'=>$state,'message'=>$message,'apartment'=>$apartment,'name'=>$name,'companyname'=>$cname,'address'=>$saddress,'zip'=>$zip,'email'=> $eadd,'phone'=>$pnumber);
        //die;
        foreach ($billdetail as $k => $customerVal) {
            $slno++; ?>
            <tr>
                <td><?=$slno?></td>
                <td><?=trim($customerVal['name'])?></td>
                <td><?=$customerVal['email']?></td>
                <td><?=$customerVal['phone']?></td>
                <td><?=$customerVal['address']?></td>
                <td><?=$customerVal['apartment']?></td>
                <td><?=$customerVal['country']?></td>
                <td><?=$customerVal['zip']?></td>
                <td><?=$customerVal['companyname']?></td>
                <td><?=$customerVal['message']?></td>
                <td><?=$customerVal['city']?></td>
                <td><?=$customerVal['state']?></td>

                <td><?php $sflag=$customerVal['billshipflag'];
                if ($sflag==1){
echo "Billing Address";

                }else{
                    echo "Shipping Address";
                }

                
                
                
                
                ?></td>
                

               
                
            </tr>
        <?php } ?>
    </tbody>
</table>