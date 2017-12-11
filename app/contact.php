<?php session_start(); ?>
<?php require_once "../db/mysql.php"; ?>
<?php
  define("URL_IMAGE", "http://localhost:84/final-course/public/uploads/");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "lib.php"; ?>
    <script language="javascript">
            function showTextVal(){
                var value = document.getElementById('id-textbox').value;
                alert(value);
            }
        </script>
  </head>
  <body>

    <!-- Navigation -->
    <?php include "menu.php" ?>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
          <div class="col-md-5"><p style="font-weight: bold;font-size: 21px;margin-top: 20px;">LIÊN HỆ VỚI CHÚNG TÔI</p>
          <p>HỌ TÊN : <br><input type="" name="" placeholder="Vui lòng nhập họ tên vào ô trống" style=" width: 300px;border-left: 6px solid red;background-color: lightgrey;padding-left: 10px;"></p>
          <P>EMAIL : <br><input type="" name="" placeholder="Vui lòng nhập email vào ô trống" style=" width:300px;border-left: 6px solid red;background-color: lightgrey;padding-left: 10px; "></P>
          <p>SDT : <br><input type="" name="" placeholder="Vui lòng nhập số điện thoại vào ô trống" style=" width: 300px;border-left: 6px solid red;background-color: lightgrey;padding-left: 10px; "></p>
          <p>ĐỊA CHỈ : <br><input type="" name="" placeholder="Vui lòng nhập địa chỉ vào ô trống" style="width:300px;border-left: 6px solid red;background-color: lightgrey;padding-left: 10px;  "></p>
          <p>GHI CHÚ : <br><textarea placeholder="Vui lòng nhập nội dung vào ô trống" style="width: 300px;height: 110px;resize: none;padding-left: 10px;border-left: 6px solid red;
    background-color: lightgrey;border-radius: 10px;" ></textarea></p>
        <p><button style="width: 70px;background: #2a75ab;border:none;height: 30px;border-radius: 5px;" onclick="gui()">Gửi đi</button></p></div>
        <!-- /.col-lg-9 -->
        <div class="col-md-7 " style="background-image: url(../public/uploads/map.png);margin-top: 20px;margin-bottom: 20px;">
        </div>
      </div>
    </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      function gui() {
    alert("Tin nhắn của bạn đã gửi thành công!!");
}
    </script>
  </body>

</html>