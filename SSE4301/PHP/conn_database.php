<?php

      $dsn = 'mysql:dbname=Student_Infor;host=47.93.228.255';
      $user = 'root';
      $password = '';
      
     $mobile="/^1[34578]\d{9}$/";

$db = new PDO($dsn, $user, $password);
      
try {
    
   $val1 = $_POST['tName'];//字符串

  $val2 = $_POST['IC_NO'];

  $val3 = $_POST['Parent'];//字符串

  $val4 = $_POST['FirstName'];

  $val5 = $_POST['address'];//字符串
  
    if(preg_match_all($mobile,$val4)){
  
 
  $sql ="INSERT INTO Student_Infor.Register(Name,IC_NO,Parent,Phone,Address)VALUES(?,?,?,?,?)"; //Create 

  
  $statement=$db->prepare($sql);
  
$statement->bindValue(1,$val1,PDO::PARAM_STR);
$statement->bindvalue(2,$val2,PDO::PARAM_STR);
$statement->bindvalue(3,$val3,PDO::PARAM_STR);
$statement->bindvalue(4,$val4,PDO::PARAM_STR);

$statement->bindvalue(5,$val5,PDO::PARAM_STR);

$res=$statement->execute();

      if($res>0){
          
         $css=$result->fetch_all();
         echo json_encode($css);
      }else{
          
   
      }

 
    }
 } catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}

?>