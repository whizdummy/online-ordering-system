<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Ordering System</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{!! asset('css/materialize.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{!! asset('css/style.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{!! asset('css/dropify.min.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{!! asset('css/jquery.dataTables.min.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{!! asset('node_modules/angular-datatables-master/dist/css/angular-datatables.min.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="pink" ng-app="app">
  <br><br>
    <div class="container" ng-controller="loginCtrl as vm">
        <div class="row center">
          <div class="col s12 center">
            <h2 class="light white-text">Miss Ellen's</h2>
          <h4 class="thin white-text">Log In</h4>
          <div class="col s5">
            <div class="input-field white-text">
              <input id="name" type="text" name="" style="color: white" ng-model="vm.user.username">
              <label for="#name"  class="white-text">Username</label>
            </div>
            <div class="input-field white-text">
              <input id="pass" type="password" name="" style="color: white" ng-model="vm.user.password">
              <label for="#pass" class="white-text">Password</label>
            </div>

            <a class="btn pink darken-2">Log In</a>
            <a class="btn white pink-text">Register</a>
            <a class="btn btn-flat white-text">Continue as guest</a>
          </div>
          
          </div>
        </div>

    </div>
    
  

  <footer class="page-footer pink" style="position: fixed; bottom: 0;">
    
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="pink-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="{!! asset('js/jquery-2.1.1.min.js') !!}"></script>
  <script src="{!! asset('js/materialize.js') !!}"></script>
  <script src="{!! asset('js/init.js') !!}"></script>
  <script src="{!! asset('js/angular.js') !!}"></script>
   <script src="{!! asset('js/app/app.js') !!}"></script>
   <script src="{!! asset('js/app/controllers/loginCtrl.ctr.js') !!}"></script>
 
  </body>
</html>
