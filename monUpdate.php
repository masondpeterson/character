<?php require_once('database.php'); ?>

<?php
// print_r($_POST);
// extract form submissions __________________________
if($_SERVER['REQUEST_METHOD'] == "POST") {
  @extract($_POST);
  $monsterName=$_POST['monsterName'];
  $monsterCr=$_POST['monsterCr'];
  $monsterSize=$_POST['monsterSize'];
  $monsterType=$_POST['monsterType'];
  $monsterAlignment=$_POST['monsterAlignment'];

  $db->add_monster($monsterName, $monsterCr, $monsterSize, $monsterType, $monsterAlignment);
}

?>

<!DOCTYPE html>

<html lang="en-US">

<head>

  <title>Update Monster</title>
  <link rel="stylesheet" type="text/css" href="styles.css">

  <!-- Bootstrap-->
    <meta charset="utf-8">
    <!--what makes containers work-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- end what makes containers work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <!-- Angular -->
<!--     <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script> -->
  <!--Angular Bootstrap-->
<!--     <script src="/Scripts/angular-ui/ui-bootstrap.min.js"></script>
    <script src="/Scripts/angular-ui/ui-bootstrap-tpls.min.js"></script> 
 -->
</head>

<body>

<div class="container">
  <div class="row">
    <h1>Update/Edit Monsters</h1>
  </div>
  <div class="row">
    <div class="col-sm-7">
      <form class="form-horizontal" action="monUpdates.php" method="post" role="form">
        <div class="form-group">
          <label class="control-label col-sm-3">Name:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="monsterName" placeholder="Enter Name Here" />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Challenge Rating:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="monsterCr" placeholder="Challenge Rating" />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Size:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="monsterSize" placeholder="Size" />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Type:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="monsterType" placeholder="Type" />
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-3">Alignment:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="monsterAlignment" placeholder="Alignment" />
          </div>
        </div>
      </form>
    </div>
    <div class="col-sm-5">
      <h4>Environments:</h4>
        <?php
        $environments = $db->get_environments();
        foreach($environments as $e){
          ?>
          <label class="checkbox-inline">
            <input type="checkbox" value="e<?=$e->env_id?>" name="env_box"><?=$e->env_name?>
          </label>
          <?php
        }
        ?>
    </div>
  </div>
  <input type="submit" name="monUpdate" value="Submit" />  
</div>

</body>
</html>