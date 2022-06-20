 
<?php
$dsn = 'mysql:dbname=Student_Infor;host=47.93.228.255';
      $user = 'root';
      $password = '';
    
      $db = new PDO($dsn, $user, $password);
      
    
                 
       
try {
    
                 $val1=$_POST['student_name'];
      
                   $boolean=false;
                   
                   $val=0;
    
                  $sql="SELECT Name FROM Student_Infor.Register WHERE Name='$val1' ";          
                  
                 $stmt = $db->prepare($sql);

                 $stmt->execute();


                if($stmt->rowCount() > 0){

                echo '1';
                
                  }else{

                  //echo 0;
                      
                   echo '0';
              
                      }
                      




 } catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}

?>