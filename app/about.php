<?php session_start(); ?>
<?php require_once "../db/mysql.php"; ?>
<?php
  define("URL_IMAGE", "http://localhost:84/final-course/public/uploads/");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "lib.php"; ?>
  </head>
  <body>

    <!-- Navigation -->
    <?php include "menu.php" ?>

    <!-- Page Content -->
    <div class="container">
          <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
      <div class="row">
      	<p style="font-weight: bold;font-size: 25px;margin-top: 20px;">Danh sách và logo các hãng xe lớn nhất trên thế giới</p>
        <p style="font-size: 17px;color: #666">Có hàng trăm đến hàng ngàn hãng xe ô tô trên thế giới, nhưng chỉ một số ít hãng xe ô tô thể hiện được mình và khẳng định được tên tuổi của mình trên thế giới. Ngoài những thương hiệu nổi bật như Toyota, Volkswagen, BMW, Mercedes-Benz, Ford, Hyundai...thì sự góp mặt của một số hãng xe như Lotus, Mini, Nissan như là làn gió mới kích thích thị trường xe ô tô cũng như cạnh tranh giữa các hãng xe trên thế giới.</p>
        <p style="margin: auto;"><img src="../public/uploads/dsx.jpg"></p>
        <p style="font-size: 17px;color: #666">Mỗi hãng xe trên thế giới đều ra những dòng xe theo phân khúc riêng, phân khúc gia đình, phân khúc tầm trung, phân khúc hạng sang, phân khúc giới trẻ, phân khúc thể thao, phân khúc siêu xe...nhiều loại, nhiều màu sắc, chúng ta có thể thoải mái lựa chọn.</p>
        <p style="font-size: 17px;color: #666">Hôm nay Terocket sẽ giới thiệu đến bạn đọc danh sách các hãng xe ô tô nổi tiếng nhất trên thế giới, và các hãng xe ô tô này phần nào đã thể hiện và khẳng định được giá trị của mình dựa trên độ phủ sóng thương hiệu của các hãng xe và sản lượng bán xe ra toàn cầu.
</p>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.bundle.min.js"></script>
  </body>

</html>