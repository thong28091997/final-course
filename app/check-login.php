<?php
session_start();
  define("URL_SITE", "http://localhost:8080/final-course/app/"); 
?>
<?php
	if(!isset($_SESSION["login"])){
		$_SESSION["flash"] = "Ban khong co quyen";
		header("location: ".URL_SITE."index.php");		
	}
?>