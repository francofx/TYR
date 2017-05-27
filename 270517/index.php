<!DOCTYPE html>
<html lang="en" ng-app="myApp">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Iniciativas, pedidos y propuestas</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/toaster.css" rel="stylesheet">
                
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]><link href= "css/bootstrap-theme.css"rel= "stylesheet" >

<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
 <style type="text/css">
  a {
      color: #1c7dc9
    }
</style>
</head>

<body ng-cloak="">
    <!--<div class="navbar navbar-default navbar-fixed-top" role="navigation"> 
      <div class="container">
        <div class="row">
          <div class="navbar-header col-md-8">
            
            <a class="navbar-brand" rel="home" title="Tramites y reclamos">Iniciativas, pedidos y propuestas</a>
          </div>

        </div>
      </div>
    </div>
    -->

      <div class="container" style="margin-top:20px;">

        <div data-ng-view="" id="ng-view" class="slide-animation"></div>

      </div>
</body>

<toaster-container toaster-options="{'time-out': 3000}"></toaster-container>

<!-- Libs -->
  <script src="js/angular.min.js"></script>
  <script src="js/angular-route.min.js"></script>
  <script src="js/angular-animate.min.js" ></script>
  <script src="js/toaster.js"></script>
  <script src="js/ui-bootstrap-tpls-2.2.0.min.js"></script>

  <script src="app/app.js"></script>
  <script src="app/data.js"></script>
  <script src="app/directives.js"></script>
  <script src="app/authCtrl.js"></script>
    <script src="app/services/reclamosServices.js"></script>

  <script src="app/controller.js"></script>
  
  
</html>

