 
<?php
$dsn = 'mysql:dbname=Student_Infor;host=47.93.228.255';
      $user = 'root';
      $password = '';
      
     $mobile="/^1[34578]\d{9}$/";

$db = new PDO($dsn, $user, $password);
      
try {
    
   $val1 = $_POST['username'];//字符串

  $val2 = $_POST['password'];


  
  
  
 
  $sql ="INSERT INTO Student_Infor.Register(Name,IC_NO,Parent,Phone,Address)VALUES(?,?,?,?,?)"; //Create 

  
  $statement=$db->prepare($sql);
  
$statement->bindValue(1,$val1,PDO::PARAM_STR);
$statement->bindvalue(2,$val2,PDO::PARAM_STR);

$res=$statement->execute();

    
 } catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}

?>