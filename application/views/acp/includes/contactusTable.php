<table id="contactUsList" class="text-center listingPage">
    <thead class="text-capitalize">
        <tr>
            <th>Sl.No:</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Subject</th>
          
            <th>Message</th>
            <th>Quantity</th>
            <th>Product Type</th>
            <th>Type</th>
            <th>Country</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        // 	0: Trashed; 1: Unreaded; 2:Readed; 3: Contacted; 4: Analysing; 5: Resolved; 6: Ignore;
        $slno = 0;
        foreach ($contactus as $k => $contus) {
            $slno++; ?>
            <tr style="<?=(($contus['cus_status'] == 1)? 'font-weight:600;background:#ccc;' : '')?>">
                <td><?=$slno?></td>
                <td><?=trim($contus['cus_name'])?></td>
                <td><?=trim($contus['cus_email'])?></td>
                <td><?=trim($contus['cus_phone'])?></td>
                <td><?=trim($contus['cus_subject'])?></td>
                
                <td><?=trim($contus['cus_message'])?></td>
                <td><?=trim($contus['brand'])?></td>
                <td><?=trim($contus['producttype'])?></td>
                
                <td><?//=trim($contus['type'])?>
            
            <?php if ($contus['type']==1){
               echo "Bulk";

            }?><?php if ($contus['type']==2){
                echo "Quote";
 
             }?>
             <?php if ($contus['type']==3){
                echo "Contact Enquiries";
 
             }?>
            
            
            </td>

            <td><?=trim($contus['country'])?></td>

                <td><?php echo converttoUserTZ($contus['cus_added_date']); ?></td>
                <td>
                    <ul class="d-flex justify-content-center">
                        <!--li title="View" class="mr-3"><a href="<?//=site_url()?>acp/Contactus/view/<?//=$contus['cus_id']?>" class="text-secondary"><i class="fa <?//=(($contus['cus_status'] == 1)? 'fa-envelope' : 'fa-eye')?>"></i></a></li-->
                        <li title="Remove" class="delete" data-action="delete" data-toggle="modal" data-target="#confirm" data-qaid="<?=$contus['cus_id']?>"><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                    </ul>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="confirm">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to Delete this Query?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">Confirm</button>
            </div>
        </div>
    </div>
</div>