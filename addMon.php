<?php require_once('database.php'); ?>

<?php
// print_r($_POST);
// extract form submissions __________________________
if($_SERVER['REQUEST_METHOD'] == "POST") {
  @extract($_POST);
  $monName=$_POST['monName'];

  $db->insert_monster($monName);
}

?>

<!DOCTYPE html>
<html>

<head>

  <title>New Monster</title>

  <script src="addmon.js"></script>

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
			<H1>Monster Input (Modular)</H1>
		</div>
		<div class="row">
			<form class="form-inline" method="post" role="form">
				<div class="form-group">
          <label class="control-label col-sm-3">Name:</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="monName" name="monName" placeholder="Enter Name Here" />
          </div>
        </div>
        <input type="submit" name="monUpdate" value="Submit" />
			</form>
		</div>
	</div>

	<script>
		window.onload = function(){
			document.getElementById("monName").focus();
		}
	</script>

</body>
</html>