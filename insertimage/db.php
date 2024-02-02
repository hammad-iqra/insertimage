<?php
$_root = "root";
$_host ="localhost";
$connect =mysqli_connect($_host,$_root);
if($connect == true){
    echo "<script>alert('database connection successfully')</script>";
}
else{
    echo "error";

}
$db = mysqli_select_db($connect,"images");
?>