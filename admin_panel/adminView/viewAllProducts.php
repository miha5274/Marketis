<div>
  <h2>Админ Панель - Продукты</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">id</th>
        <th class="text-center">Название</th>
        <th class="text-center">Цена</th>
        <th class="text-center">Брэнд</th>
        <th class="text-center">Категория</th>
        <th class="text-center">Изображение</th>
        <th class="text-center"></th>
      </tr>
    </thead>
    <?php
        include_once "../config/dbconnect.php";

        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);
        
        $count = 0;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["name"]?></td>
      <td><?=$row["price"]?>$</td>
      <td><?=$row["brand"]?></td>         
      <td><?=$row["category"]?></td> 
      <td><img height="60px" src="data:image/jpeg;base64,<?=base64_encode($row["image"])?>"></td>  
      <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['product_id']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Добавить продукт
  </button>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Новый продукт</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype="multipart/form-data" onsubmit="addItems()" method="POST">
            <div class="form-group">
              <label for="name">Название:</label>
              <input type="text" class="form-control" id="name" required>
            </div>
            <div class="form-group">
              <label for="price">Цена:</label>
              <input type="number" class="form-control" id="price" required>
            </div>
            <div class="form-group">
              <label for="qty">Брэнд:</label>
              <input type="text" class="form-control" id="brand" required>
            </div>
            <div class="form-group">
              <label>Категория:</label>
              <input type="text" class="form-control" id="category" required>
            </div>
            <div class="form-group">
                <label for="file">Изображение:</label>
                <input type="file" name="file" class="form-control-file" id="image">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Добавить</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>