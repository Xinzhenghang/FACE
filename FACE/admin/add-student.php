<?php 
  $corepage = explode('/', $_SERVER['PHP_SELF']);
    $corepage = end($corepage);
    if ($corepage!=='index.php') {
      if ($corepage==$corepage) {
        $corepage = explode('.', $corepage);
       header('Location: index.php?page='.$corepage[0]);
     }
    }

  if (isset($_POST['addstudent'])) {
  	$name = $_POST['name'];
  	$mykid = $_POST['mykid'];
  	$address = $_POST['address'];
  	$pcontact = $_POST['pcontact'];
  	$class = $_POST['class'];
  	
  

  	$query = "INSERT INTO `student_info`(`name`, `mykid`, `class`, `Address`, `pcontact`) VALUES ('$name', '$mykid', '$class', '$address', '$pcontact');";
  	if (mysqli_query($db_con,$query)) {
  		$datainsert['insertsucess'] = '<p style="color: green;">Student Inserted!</p>';

  	}else{
  		$datainsert['inserterror']= '<p style="color: red;">Student Not Inserted, please input right informations!</p>';
  	}
  }
?>
<h1 class="text-primary"><i class="fas fa-user-plus"></i>  Add Student<small class="text-warning"> Add New Student!</small></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
     <li class="breadcrumb-item" aria-current="page"><a href="index.php">Dashboard </a></li>
     <li class="breadcrumb-item active" aria-current="page">Add Student</li>
  </ol>
</nav>

<div class="row">
	
<div class="col-sm-6">
		<?php if (isset($datainsert)) {?>
	<div role="alert" aria-live="assertive" aria-atomic="true" class="toast fade" data-autohide="true" data-animation="true" data-delay="2000">
	  <div class="toast-header">
	    <strong class="mr-auto">Student Insert Alert</strong>
	    <small><?php echo date('d-M-Y'); ?></small>
	    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
	      <span aria-hidden="true">&times;</span>
	    </button>
	  </div>
	  <div class="toast-body">
	    <?php 
	    	if (isset($datainsert['insertsucess'])) {
	    		echo $datainsert['insertsucess'];
	    	}
	    	if (isset($datainsert['inserterror'])) {
	    		echo $datainsert['inserterror'];
	    	}
	    ?>
	  </div>
	</div>
		<?php } ?>
	<form enctype="multipart/form-data" method="POST" action="">
		<div class="form-group">
		    <label for="name">Student Name</label>
		    <input name="name" type="text" class="form-control" id="name" value="<?= isset($name)? $name: '' ; ?>" required="">
	  	</div>
	  	<div class="form-group">
		    <label for="mykid">MyKid</label>
		    <input name="mykid" type="text" value="<?= isset($mykid)? $mykid: '' ; ?>" class="form-control" pattern="[0-9]{6}" id="roll" required="">
	  	</div>
	  	<div class="form-group">
		    <label for="address">Student Address</label>
		    <input name="address" type="text" value="<?= isset($address)? $address: '' ; ?>" class="form-control" id="address" required="">
	  	</div>
	  	<div class="form-group">
		    <label for="pcontact">Parent Contact No</label>
		    <input name="pcontact" type="text" class="form-control" id="pcontact" pattern="01[5|6|7|8|9][0-9]{8}" value="<?= isset($pcontact)? $pcontact: '' ; ?>" required="">
	  	</div>
	  	<div class="form-group">
		    <label for="class">Student Class</label>
		    <select name="class" class="form-control" id="class" required="">
		    	<option>Select</option>
		    	<option value="Arif">Arif</option>
		    	<option value="Bijak">Bijak</option>
		    	<option value="Pintar">Pintar</option>
		    	<option value="Cerdik">Cerdik</option>
		
		    </select>
	  	</div>
	  
	  	<div class="form-group text-center">
		    <input name="addstudent" value="Add Student" type="submit" class="btn btn-danger">
	  	</div>
	 </form>
</div>
</div>