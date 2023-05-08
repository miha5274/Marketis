<div>
  <h2>Админ Панель - Logo</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">id</th>
        <th class="text-center">Название</th>
        <th class="text-center">image_logo</th>
        <th class="text-center">box_logo</th>
        <th class="text-center">logo_svg</th>
      </tr>
    </thead>
    <?php
        include_once "../config/dbconnect.php";

        $sql = "SELECT * FROM logo";
        $result = $conn->query($sql);
        
        $count = 0;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["name"]?></td>
      <td><img height="60px" src="data:image/jpeg;base64,<?=base64_encode($row["image_logo"])?>"></td>         
      <td><img height="60px" src="data:image/jpeg;base64,<?=base64_encode($row["box_logo"])?>"></td> 
      <td><img height="60px" src="data:image/svg+xml;base64,<?=base64_encode($row['logo_svg'])?>"></td>  
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Добавить новый логотип
  </button>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Новый логотип</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <form enctype="multipart/form-data" onsubmit="addLogo()" method="POST">
            <div class="form-group">
                <label for="name">Название:</label>
                <input type="text" class="form-control" id="name" required>
            </div>
            <div class="form-group">
                <label for="image_logo">image_logo</label>
                <input type="file" name="image_logo" class="form-control-file" id="image_logo">
            </div>
            <div class="form-group">
                <label for="box_logo">box_logo</label>
                <input type="file" name="box_logo" class="form-control-file" id="box_logo">
            </div>
            <div class="form-group">
                <label for="logo_svg">logo_svg</label>
                <input type="file" name="logo_svg" class="form-control-file" id="logo_svg">
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