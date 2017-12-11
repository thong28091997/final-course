<?php session_start(); ?>
<?php require_once "../db/mysql.php"; ?>
<?php
  define("URL_SITE", "http://localhost:84/final-course/app/"); 
?>
<?php
    if(isset($_POST["email"]) && isset($_POST["password"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $sql = "select * from users where email='$email' and password='$password'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION["login"] = true;
            $_SESSION["userid"] = $row["id"];
            $_SESSION["flash"] = "Đăng nhập thành công";
        }
        else
        {          
            $_SESSION["flash"] = "Tài khoản hoặc mật khẩu không đúng";
        }
    }
    else
    {
        $_SESSION["flash"] = "Wrong params";
    }
    header("location: ".URL_SITE."index.php");
?>