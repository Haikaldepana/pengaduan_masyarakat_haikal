<?php
session_start();
if(!isset($_SESSION['nik'])){
    header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include "navabar.php";
 ?>
  <div class="hero"> 
    <div class="container">
    <h1>PENGADUAN MASYARAKAT</h1>

</div>
    
</body>
</html>