<table id="customersList" class="text-center listingPage">
    <thead class="text-capitalize">
        <tr>
            <th>No</th>
            <th>Order:</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Sub Total</th>
            <th>Shipping Amount</th>
            <th>Net Total</th>
           
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
                
                echo $orderid=trim($customerVal['product_id']);
                /*$this->db->where('userid',$custid);
        $this->db->from('userlogin');
        $query = $this->db->get();
         $dt=$query->row();
       
            echo $dt->name.' '.$dt->lastname;*/    
                
                
                ?></td>
                 <td><?=$customerVal['quantity']?></td>
                <td><?=$customerVal['sub_total']?></td>
              
                <td><?=$customerVal['quantity']?></td>
                <td><?=$customerVal['sub_total']?></td>

               
                
            </tr>
            <tr colspan="5">
            
           
            <th>Net Total</th>
            <th>Shipping Amount</th>
           
        </tr>
        <tr colspan="5">
            
           
            <th>25</th>
            <th>700</th>
           
        </tr>
        <?php } ?>
    </tbody>
</table>
