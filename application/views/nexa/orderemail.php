<table id="customersList" class="text-center listingPage  dataTable" width=100%>
<tr><th>
<?php echo base_url().'assets/uploads/site/logo-electrical.png'?></th>
<tr> </table>

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

