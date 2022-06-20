<?php

      $dsn = 'mysql:dbname=Student_Infor;host=47.93.228.255';
      $user = 'root';
      $password = '';
      
$db = new PDO($dsn, $user, $password);
      
try {
    
   $val1 = $_POST['tName'];//字符串

  $val2 = $_POST['IC_NO'];

  $val3 = $_POST['Parent'];//字符串

  $val4 = $_POST['FirstName'];

  $val5 = $_POST['address'];//字符串
  
 
$sql="update Student_Infor.Register set Name=:Name,Parent=:Parent,Phone=:Phone,Address=:Address where IC_NO =:IC_NO ";


  
  $statement=$db->prepare($sql);
  
$statement->bindValue(':IC_NO',$val2,PDO::PARAM_STR);
$statement->bindvalue(':Name',$val1,PDO::PARAM_STR);
$statement->bindvalue(':Parent',$val3,PDO::PARAM_STR);
$statement->bindvalue(':Phone',$val4,PDO::PARAM_STR);

$statement->bindvalue(':Address',$val5,PDO::PARAM_STR);

$res=$statement->execute();

 } catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}

?>