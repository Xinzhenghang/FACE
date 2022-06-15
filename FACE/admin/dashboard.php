<?php
$corepage = explode('/', $_SERVER['PHP_SELF']);
$corepage = end($corepage);
if ($corepage !== 'index.php') {
  if ($corepage == $corepage) {
    $corepage = explode('.', $corepage);
    header('Location: index.php?page=' . $corepage[0]);
  }
}
?>

<h1><a href="index.php"> Student</a> <small> Overview</small></h1>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">All Children in FACE</li>
  </ol>
</nav>

<div class="row student">




  <div class="col-sm-4">
    <div class="card text-white bg-info mb-3">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-4">
            <i class="fa fa-users fa-3x"></i>
          </div>
          <div class="col-sm-8">
            <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php $stu = mysqli_query($db_con, 'SELECT * FROM `student_info`');
                                                                            $stu = mysqli_num_rows($stu);
                                                                            echo $stu; ?></span></div>
            <div class="clearfix"></div>
            <div class="float-sm-right">Preschool</div>
          </div>
        </div>
      </div>
      <div class="list-group-item-info list-group-item list-group-item-action">
        <div class="row">
          <div class="col-sm-8">
            <p class="">Total Students</p>
          </div>
          <div class="col-sm-4">
            <a href="all-student.php"><i class="fa fa-arrow-right float-sm-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card text-white bg-info mb-3">
      <div class="card-header">
        <div class="row">
          <div class="col-sm-4">
            <i class="fa fa-users fa-3x"></i>
          </div>
          <div class="col-sm-8">
            <div class="float-sm-right">&nbsp;<span style="font-size: 30px"><?php $tusers = mysqli_query($db_con, 'SELECT * FROM `users`');
                                                                            $tusers = mysqli_num_rows($tusers);
                                                                            echo $tusers; ?></span></div>
            <div class="clearfix"></div>
            <div class="float-sm-right">Nursery</div>
          </div>
        </div>
      </div>
      <div class="list-group-item-primary list-group-item list-group-item-action">
        <a href="index.php?page=all-children">
          <div class="row">
            <div class="col-sm-8">
              <p class="">Total Children</p>
            </div>
            <div class="col-sm-4">
              <i class="fa fa-arrow-right float-sm-right"></i>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>


</div>
<hr>


</tbody>
</table>