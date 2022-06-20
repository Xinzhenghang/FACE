 
<?php
      $dsn = 'mysql:dbname=Student_Infor;host=47.93.228.255';
      $user = 'root';
      $password = '';
    
      $db = new PDO($dsn, $user, $password);
      
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                 
       
try {
    

              $val1=$_POST['text'];
              
              $val2=$_POST['Holistic'];
              
      
              
                  $boolean=false;
    
                  $sql="SELECT Name FROM Student_Infor.Register WHERE Name='$val1' ";          
                  
                 $stmt = $db->prepare($sql);

                 $stmt->execute();


                if($stmt->rowCount() > 0){

//                     echo '好了';
                      
                         
                   $boolean=true;
                
                  }else{

                   echo 'Can not find this name';
              
                      }
                      
                      if($boolean==true){
                          
                   $sql ="INSERT INTO Student_Infor.Assessment_Holistic(student_name,Holistic)VALUES(?,?)"; 
                   
                    $statement=$db->prepare($sql);
  
                     $statement->bindValue(1,$val1,PDO::PARAM_STR);
                     
                     $statement->bindvalue(2,$val2,PDO::PARAM_STR);
                     
                   
                     
                     $statement->execute();
                     
                     echo 'Successfully Record !';
                      }
        

 } catch (PDOException $e) {
  echo 'Connection failed: ' . $e->getMessage();
}

?>