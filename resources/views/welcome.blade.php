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
</head>
<body class="blue-grey lighten-5" ng-app="app">
  <nav class="pink" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" ui-sref="dashboard" class="brand-logo center">Miss Ellen's <span class="thin">Shop</span> </a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#" class="btn white pink-text text-darken-2">LOG OUT</a></li>
      </ul>

        <ul id="slide-out" class="side-nav pink white-text">
            <li>
                <div class="userView">
                    <img class="background" src="{!! asset('images/office.jpg') !!}" width="100%" height="100%">
                    <a href="#!user"><img class="circle" src="{!! asset('images/pormon.jpg') !!}"></a>
                    <a href="#!name"><span class="white-text name">Miss Elena</span></a>
                    <a href="#!email"><span class="white-text email">Elena.Miss@gmail.com</span></a>
                </div>
            </li>
            <li class="no-padding">
              <ul class="collapsible"  data-collapsible="accordion">
                <li class="bold"><a class="collapsible-header waves-effect waves-dark white-text"><i class="material-icons left white-text">settings</i>Maintenance</a>
                  <div class="collapsible-body" style="display: none;">
                    <ul class="pink darken-2">
                      <li><a ui-sref = "dashboard" class="white-text">Products</a></li>
                      <li><a href="" class="white-text">Category</a></li>
                    </ul>   
                  </div>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-dark white-text"><i class="material-icons left white-text">attach_money</i>Transactions</a>
                  <div class="collapsible-body" style="">
                    <ul class="pink darken-2">
                      <li><a href="badges.html" class="white-text">Product Order</a></li>
                      <li><a href="badges.html" class="white-text">Inventory</a></li>
                      <li><a href="badges.html" class="white-text">Payment</a></li>
                    </ul>
                  </div>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-dark white-text"><i class="material-icons left white-text">assessment</i>Reports</a>
                  <div class="collapsible-body" style="">
                    <ul class="pink darken-2">
                      <li><a href="carousel.html" class="white-text">Carousel</a></li>
             
                    </ul>
                  </div>
                </li>
              </ul>
             </li>   
        </ul>
   

    </div>
  </nav>

    <div class="container white z-depth-1" style="margin-top: 20px; border-radius: 10px; width: 90% !important">
        <a href="" data-activates="slide-out" class="btn-floating btn-large white left button-collapse waves-effect  waves-light  secondary-content" style="margin-top: 10px; margin-left: 10px;"><i class="material-icons small pink-text">view_list</i></a>  
      <br>
        <ui-view></ui-view>       
      <br><br>

    </div>

  

  <footer class="page-footer pink">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="pink-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{!! asset('js/materialize.js') !!}"></script>
  <script src="{!! asset('js/init.js') !!}"></script>
  <script src="{!! asset('js/angular.min.js') !!}"></script>
  <script src="{!! asset('js/app/app.js') !!}"></script>
  <script src="{!! asset('js/app/controllers/dashboardCtrl.ctr.js') !!}"></script>
  <script src="{!! asset('node_modules/angular-ui-router/release/angular-ui-router.js') !!}"></script>

  </body>
</html>
