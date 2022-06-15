<?php 
  $corepage = explode('/', $_SERVER['PHP_SELF']);
    $corepage = end($corepage);
    if ($corepage!=='index.php') {
      if ($corepage==$corepage) {
        $corepage = explode('.', $corepage);
       header('Location: index.php?page='.$corepage[0]);
     }
    }
    
    $id = base64_decode($_GET['id']);

  if (isset($_POST['updatestudent'])) {
  	$name = $_POST['name'];
  	$mykid = $_POST['mykid'];
  	$address = $_POST['address'];
  	$pcontact = $_POST['pcontact'];
  	$class = $_POST['class'];
  	
 
  	

  	$query = "UPDATE `student_info` SET `name`='$name',`mykid`='$mykid',`class`='$class',`address`='$address',`pcontact`='$pcontact' WHERE `id`= $id";
  	if (mysqli_query($db_con,$query)) {
  		$datainsert['insertsucess'] = '<p style="color: green;">Student Updated!</p>';
		
  		header('Location: index.php?page=all-student&edit=success');
  	}else{
  		header('Location: index.php?page=all-student&edit=error');
  	}
  }
?>
<h1 class="text-primary"><i class="fas fa-user-plus"></i>  Edit Student Informations!<small class="text-warning"> Edit Student!</small></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
     <li class="breadcrumb-item" aria-current="page"><a href="index.php">Dashboard </a></li>
     <li class="breadcrumb-item" aria-current="page"><a href="index.php?page=all-student">All Student </a></li>
     <li class="breadcrumb-item active" aria-current="page">Student Detail</li>
  </ol>
</nav>

	<?php
		if (isset($id)) {
			$query = "SELECT `id`, `name`, `mykid`, `class`, `Address`, `pcontact`, `datetime` FROM `student_info` WHERE `id`=$id";
			$result = mysqli_query($db_con,$query);
			$row = mysqli_fetch_array($result);
		}
	 ?>
<div class="row">
<div class="col-sm-8">
	<form enctype="multipart/form-data" method="POST" action="">
		<div class="form-group">
		    <label for="name">Student Name</label>
		    <input name="name" type="text" class="form-control" id="name" value="<?php echo $row['name']; ?>" required="">
	  	</div>
	  	<div class="form-group">
		    <label for="mykid">MyKid / Passport</label>
		    <input name="mykid" type="text" class="form-control" pattern="[0-9]{12}" id="mykid" value="<?php echo $row['mykid']; ?>" required="">
	  	</div>
	  	<div class="form-group">
		    <label for="address">Address</label>
		    <input name="address" type="text" class="form-control" id="address" value="<?php echo $row['Address']; ?>" required="" >
	  	</div>
	  	<div class="form-group">
		    <label for="pcontact">Contact No</label>
		    <input name="pcontact" type="text" class="form-control" id="pcontact" value="<?php echo $row['pcontact']; ?>" pattern="01[5|6|7|8|9][0-9]{8}" placeholder="01........." required="">
	  	</div>
	  	<div class="form-group">
		    <label for="class">Student Class</label>
		    <select name="class" class="form-control" id="class" required="" value="">
		    	<option>Select</option>
		    	<option value="Arif" <?= $row['class']=='Arif'? 'selected':'' ?>>Arif</option>
		    	<option value="Bijak" <?= $row['class']=='Bijak'? 'selected':'' ?>>Bijak</option>
		    	<option value="Pintar" <?= $row['class']=='Pintar'? 'selected':'' ?>>Pintar</option>
		    	<option value="Cerdik" <?= $row['class']=='Cerdik'? 'selected':'' ?>>Cerdik</option>

		    </select>
	  	</div>
		  <div class="form-group" >
		  <button type="button" class="btn btn-light">Assessment 1</button>
		  <button type="button" class="btn btn-light">Assessment 2</button>
		  <button type="button" class="btn btn-light">Assessment 3</button>
		  <button type="button" class="btn btn-light">Assessment 4</button>
		  </div>
	  	<div class="form-group text-center">
		    <input name="updatestudent" value="Update Student" type="submit" class="btn btn-success">
	  	</div>
	 </form>
</div>
</div>