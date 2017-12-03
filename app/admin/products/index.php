<?php include "../header.php" ?>
  <div class="container">
  <h2>Danh sach nguoi dung</h2>
  <table class="table">
    <thead>
      <tr>
        <th>User ID</th>
        <th>Catalog ID</th>
        <th>Name</th>
        <th>Image</th>
        <th>Description</th>
        <th>QTY</th>
        <th>Price</th>
        <th>:D</th>
        <th>:D</th>
      </tr>
    </thead>
    <tbody>
    <?php
    $sql = "select * from products";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $row['user_id']; ?></td>
          <td><?php echo $row['catalog_id']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['image']; ?></td>
          <td><?php echo $row['description']; ?></td>
          <td><?php echo $row['qty']; ?></td>
          <td><?php echo $row['price']; ?></td>
          <td><a href="Edit.php?id=<?php echo $row["id"];?>">Edit</a></td>
          <td><a href="delete.php?id=<?php echo $row["id"];?>">Delete</a></td>
        </tr>
    <?php  }
    }
     ?>       
    </tbody>
  </table>
</div><?php include "../footer.php" ?>