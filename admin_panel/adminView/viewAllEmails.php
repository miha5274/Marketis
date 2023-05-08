<h2>Админ Панель - Продукты</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">id</th>
        <th class="text-center">Email</th>
        <th class="text-center">Дата</th>

      </tr>
    </thead>
    <?php
        include_once "../config/dbconnect.php";

        $sql = "SELECT * FROM subscribed_emails";
        $result = $conn->query($sql);
        
        $count = 0;
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["created_at"]?></td>         
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>