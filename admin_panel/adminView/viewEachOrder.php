<div class="container">
<table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    </thead>
    <?php
        include_once "../config/dbconnect.php";
        $ID= $_GET['orderID'];

        $sql="SELECT cart 
            FROM orders 
            WHERE id = '$ID'";
        $result=$conn-> query($sql);
        $count=1;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data = json_decode($row['cart'], true);
        
                if ($data !== null) {
                    foreach ($data as $name => $quantity) {
    ?> 
                <tr>
                    <td><?=$count?></td>
                    <?php
                       $image="SELECT * from products
                       where name = '$name'";
                       
                       $res=$conn-> query($image);
                       if($row2 = $res-> fetch_assoc()){
                    ?>
                    <td><img height="80px" src="data:image/jpeg;base64,<?=base64_encode($row2["image"])?>"></td>
                    <td><?=$name ?></td>

                    <td><?=$quantity?></td>
                    <td><?=$row2["price"]?></td>
                    <?php
                       }
                    ?>
                </tr>
    <?php
                $count=$count+1;
                
            }
        }
    }
        }else{
            echo "error";
        }
    ?>
</table>
</div>
