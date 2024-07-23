<table id="customersList" class="text-center listingPage">
    <thead class="text-capitalize">
        <tr id="id">
            <th>No</th>
            <th>Ad</th>
           
            <th>Type</th>
          
            <th class="no-sorting">Status</th>  
            <th class="no-sorting">Edit</th>  
            <th class="no-sorting">Action</th>  
           
        </tr>
    </thead>
    <tbody>
        <?php 
        $slno = 0;
        //print_r($billcustomers);
        //die;
        foreach ($ad as $k => $adval) {
            $slno++; ?>
            <tr id="<?php echo 'id'.$adval['ad_id'];?>">
                <td><?=$slno?></td>
                <td>
                
              <?php echo "<img width=50 height=50 src=".base_url()."assets/uploads/homepage/".$adval['img']." />"; ?>   
                
                
                </td>

                <td><?=$adval['adtype']?></td>

                <td ><span id="<?php echo 'st'.$adval['ad_id'];?>"><?=$adval['status']?></span></td>

                <td><a href='#'  onclick=st1("<?=$adval['status']?>","<?php echo $adval['ad_id'];?>")><i class="fa fa-pencil"></i></a></td>
              
               

               
<td><a href='#' onclick=del(<?php echo $adval['ad_id'];?>)>Delete</a></td>
                
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
                <p>Are you sure you want to Delete this Billing details?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger">Confirm</button>
            </div>
        </div>
    </div>
</div>

<script>
    function del(id){
      
$.ajax({
            type: 'GET',
            url: "<?php echo base_url().'acp/Settings/deletead';?>",
            data:{id:id},
            success:function(data){
                $("#id"+id).remove();
                $("#msg").html(data);
            }
        });

}


function st1(st,id){
      //alert(st);
      var string=id+','+st;
      if (st=='Active'){
        var st1='InActive';

      }else{
        var st1='Active';
      }
      $.ajax({
                  type: 'GET',
                  url: "<?php echo base_url().'acp/Settings/upad';?>",
                  data:{id:id,st:st},
                  success:function(data){
                      //$("#id"+id).remove();
                      window.location.href="<?php echo base_url().'acp/Settings/listad';?>";
                      $("#st"+id).html(st1);
                      $("#msg").html(data);
                  }
              });
      
      }

</script>