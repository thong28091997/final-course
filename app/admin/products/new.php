<?php include "../header.php" ?>
  <div class="container">
    <form method="post" action="create.php">
      <div class="row">
        <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
      </div>
      <div>
        <h1>Ten san pham<m/h1>
      </div>
      <div class="row">
        <label>Ten nguoi dung:</label>
        <input class="form-control" type="text" name="name">
      </div>
      <div class="row">
        <label>Anh san pham:</label>
        <input class="form-control"  type="text" name="image">
      </div>
      <div class="row">
        <label>Mo ta san pham:</label>
        <textarea class="form-control" name="description"></textarea>
      </div>
      <div class="row">
        <label>So luong:</label>
        <input class="form-control"  type="text" name="qty">
      </div>
      <div class="row">
        <label>Gia moi san pham:</label>
        <input class="form-control"  type="text" name="price">
      </div>
      <div class="row">
        <label>Danh muc:</label>
        <select class="form-control" name="catalog_id">
          <?php
            $sql = "select * from catalogs";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
              while($row = $result->fetch_assoc()){ ?>
                  <option value="<?php echo $row['id']; ?>"><?php echo $row["name"]; ?></option>
          <?php    }
            }
          ?>
        </select>
      </div>
      <br>
      <div class="row">
        <button class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div><?php include "../footer.php" ?>