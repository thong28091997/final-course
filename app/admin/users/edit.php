<?php include "../header.php" ?>
<?php
  if(!isset($_GET["id"])){
    $_SESSION["flash"] = "Wrong params";
    header("location: index.php");
  }

  $id = $_GET["id"];
  $sql = "select * from users where id='$id'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  $name = $row["name"];
  $email = $row["email"];
  $role = $row["role"];
?>
  <div class="container">
    <form method="post" action="update.php">
      <input type="hidden" value="<?php echo $id; ?>" name="id">
      <div class="row">
        <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
      </div>
      <div>
        <h1>Tao moi nguoi dung</h1>
      </div>
      <div class="row">
        <label>Ten nguoi dung:</label>
        <input class="form-control" type="text" name="name" value="<?php echo $name; ?>">
      </div>
      <div class="row">
        <label>Email:</label>
        <input class="form-control"  type="email" name="email" value="<?php echo $email; ?>">
      </div>
      <div class="row">
        <label>Mat khau:</label>
        <input class="form-control"  type="password" name="password">
      </div>
      <div class="row">
        <label>Lap lai mat khau:</label>
        <input class="form-control"  type="password" name="repassword">
      </div>
      <div class="row">
        <label>Quyen:</label>
        <select class="form-control" name="role">
          <option <?php if($role ==  2) echo "selected='true'"; ?> value="2">User</option>
          <option <?php if($role ==  1) echo "selected='true'"; ?> value="1">Editor</option>
          <option <?php if($role ==  0) echo "selected='true'"; ?> value="0">Admin</option>
        </select>
      </div>
      <br>
      <div class="row">
        <button class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  <?php include "../footer.php" ?>