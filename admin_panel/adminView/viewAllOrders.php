<div id="ordersBtn" >
  <h2>Админ Панель - Заказы</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Имя покупателя</th>
        <th>Телефон</th>
        <th>Дата заказа</th>
        <th>Order Status</th>
        <th>Действие</th>
        <th>Действие</th>
     </tr>
    </thead>
     <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from orders";
      $result=$conn-> query($sql);
      
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
       <tr>
          <td><?=$row["id"]?></td>
          <td><?=$row["name"]?></td>
          <td><?=$row["tel"]?></td>
          <td><?=$row["created_at"]?></td>
           <?php 
                if($row["is_ordered"]==0){
                            
            ?>
                <td><button class="btn btn-danger" onclick="ChangeOrderStatus(<?=$row['id']?>)">undone</button></td>
                
            <?php       
                }else{
            ?>
                <td><button class="btn btn-success" onclick="ChangeOrderStatus('<?=$row['id']?>')">done</button></td>
        
            <?php
            }
            ?>
              
           <td><a class="btn btn-primary openPopup" data-href="./adminView/viewEachOrder.php?orderID=<?=$row['id']?>" href="javascript:void(0);">View</a></td>
        </tr>
    <?php
            
        }
      }
    ?>
     
  </table>
   
</div>
<!-- Modal -->
<div class="modal fade" id="viewModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Order Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="order-view-modal modal-body">
        
        </div>
      </div><!--/ Modal content-->
    </div><!-- /Modal dialog-->
  </div>
<script>
     //for view order modal  
    $(document).ready(function(){
      $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
    
        $('.order-view-modal').load(dataURL,function(){
          $('#viewModal').modal({show:true});
        });
      });
    });
 </script>