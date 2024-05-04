
<?php
$server = 'localhost';
$usre = 'root';
$password = '';
$dbname = 'contact_management-system';

$conn =  mysqli_connect($server, $usre, $password, $dbname);
if($conn){
  // echo"connection okay";
}
else{
    echo"conection failed";
}

?>