<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>Character Sheet</title>

	<script src="/Scripts/angular-ui/ui-bootstrap.min.js"></script>
    <script src="/Scripts/angular-ui/ui-bootstrap-tpls.min.js"></script>
</head>

<body>

<div class="container" ng-app="myApp" ng-controller="formCtrl">
  <form role="form">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" ng-model="charname">
    </div>
  </form>
</div>


</body>
</html>
