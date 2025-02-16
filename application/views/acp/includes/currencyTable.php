<table id="productBrandsList" class="text-center listingPage">
    <thead class="text-capitalize">
        <!--tr>
            <th>Sl.No1:</th>
            <th>Name</th>
            <th>Description</th>
            <th>Updated Date</th>
            <th class="no-sorting">Actions</th>
        </tr-->
        <tr role="row">
                                                      <th class="sorting_asc" tabindex="0" aria-controls="data-source-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 116px;">Currency</th>
                                                      <th class="sorting" tabindex="0" aria-controls="data-source-1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 142px;">Current Rate</th>
                                                      <th class="sorting" tabindex="0" aria-controls="data-source-1" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 220px;">Date</th>

                                                           <th class="sorting taC" tabindex="0" aria-controls="data-source-1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 151px;">Action</th></tr>




    </thead>
    <tbody>
        <?php 
        $slno = 0;
        foreach ($currency as $k => $res) {
            $slno++; ?>
            

            <tr role="row" class="odd" id="<?php echo $res['currencyid'];?>" >
                                                   
                                                   <td class="sorting_1"><?php echo $res['currency'];?></td>
                                                   <td><?php echo $res['amount'];?></td>
                                                  
                                                   <td><?php echo $res['date'];?></td>
                                                   
                                                   <td> 
                                                   <ul class="d-flex justify-content-center">
                       
                        <li data-currencyid="<?php echo $res['currencyid'];?>" data-action="delete" data-toggle="modal" data-target="#confirm" class="delete"><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
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
                <p>Are you sure you want to Delete this Carousel?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">Confirm</button>
            </div>
        </div>
    </div>
</div>