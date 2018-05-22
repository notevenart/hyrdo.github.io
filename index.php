<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

      <!-- V E R T I C A L     N A V-->
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/verticalNavigation/styless.css">
      <link rel="stylesheet" href="css/verticalNavigation/reset.css">
      <script type="text/javascript" src="js/scroll.js"></script>
      <script src="js/jquery.scrollify.js"></script>
        <script src="js/modernizr.js"></script>
        <!--  B o o t s t r a p -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link href="css/stylo.css" rel="stylesheet">
        <script type="text/javascript" src="js/script.js"></script>
        <link href="pic/favicon.ico" rel="icon" type="image/x-icon" />
          <title>Hydro</title>
  </head>

<body>

  <!--   FIXED NAVIGATION    -->
  <nav id="cd-vertical-nav" style="z-index: 6;">
    <ul>
      <li>
        <a href="#section1" data-number="1">
          <span class="cd-dot"></span>
          <span class="cd-label">Logo</span>
        </a>
      </li>
      <li>
        <a href="#section2" data-number="2">
          <span class="cd-dot"></span>
          <span class="cd-label">Data</span>
        </a>
      </li>
      <li>
        <a href="#section3" data-number="3">
          <span class="cd-dot"></span>
          <span class="cd-label">Footer</span>
        </a>
      </li>
      <li>

      </li>
    </ul>
  </nav>

  <!--  C O N T E N T -->

  <div id = "content">
    <section id="section1" class="cd-section">
  <!--N A V      B A R -->
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <!-- <a class="navbar-brand" href="index.php">HydroGeology</a> -->
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="map.php">Map</a></li>
      <!-- <li><a href="table.php">Well Table</a></li> -->
      <li><a href="#">Hydrogeology</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">AtyrauHydrogeology</a></li>

      <!-- <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li> -->
      <!-- <li><a href="#">Log in <span class="glyphicon glyphicon-log-in"></span></a></li> -->


      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Log In</b> <span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-lr animated fadeInDown" role="menu">
          <div class="col-lg-12">
            <div class="text-center">
              <h3><b>Log In</b><br><br></h3></div>
              <!--  L O G I N     E R R O R S-->
                <?php if(!empty($_SESSION['errMsg'])) { echo $_SESSION['errMsg']; } ?>  <?php unset($_SESSION['errMsg']); ?>
                <?php if(!empty($_SESSION['errMsg2'])) { echo $_SESSION['errMsg2']; } ?>  <?php unset($_SESSION['errMsg2']); ?>
                <?php if(!empty($_SESSION['errMsg3'])) { echo $_SESSION['errMsg3']; } ?>  <?php unset($_SESSION['errMsg3']); ?>
                <?php if(!empty($_SESSION['errMsg4'])) { echo $_SESSION['errMsg4']; } ?>  <?php unset($_SESSION['errMsg4']); ?>
                <?php if(!empty($_SESSION['errMsg5'])) { echo $_SESSION['errMsg5']; } ?>  <?php unset($_SESSION['errMsg5']); ?>


            <form id="ajax-login-form" action="login.php" method="POST" role="form" autocomplete="off">
              <div class="form-group">
                <!-- <label for="username">Username</label> -->
                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" autocomplete="off">
              </div>

              <div class="form-group">
                <!-- <label for="password">Password</label> -->
                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" autocomplete="off">
              </div>

              <div class="form-group">
                <div class="row">
                  <!-- <div class="col-xs-7">
                    <input type="checkbox" tabindex="3" name="remember" id="remember">
                    <label for="remember"> Remember Me</label>
                  </div> -->
                  <div class="col-xs-5 pull-right">
                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Log In">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="text-center">
                      <a href="#" tabindex="5" class="forgot-password">Forgot Password?</a>
                    </div>
                  </div>
                </div>
              </div>
              <input type="hidden" class="hide" name="token" id="token" value="a465a2791ae0bae853cf4bf485dbe1b6">
            </form>
          </div>
        </ul>
      </li>


    </ul>
  </div>
</nav>



      <div class="firstIm">
        <img src="pic/nach.gif" style="width:100%;" >
        <div class="firstImContent">
          <h1 style="font-size: 4em;">HydroTravel</h1>
            <h3 style="font-size: 2.5em;">Water is closer than you think!</h3><br>
           <p style="font-size: 1.2em; width: 65%;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
        </div>
      </div>
    </section>


  <section id="section2" class="cd-section" style="background-color:#303030;">
<div class="grid2">
        <div style="margin:30% 0 0 15%;">
            <ul class="secondIndexUl animated">

              <li id="secondIndexLi1"><p>Cool routes bluh bluh lbuh</p></li><br>
              <li id="secondIndexLi2"><p>Amazing map bluh bluh lbuh</p></li><br>
              <li id="secondIndexLi3"><p>Water For everybody bluh bluh lbuh</p></li><br>
              <li id="secondIndexLi4"><p>Save the planet bluh bluh lbuh</p></li><br>
              <li id="secondIndexLi5"><p>Save the kazakhstan bluh bluh lbuh</p></li><br>

            </ul>
          </div>
        <div>
          <img src="pic/hydrologo.png" style="width:80%; margin-top:15%" >
        </div>
     </div>
  </section>

    <!-- C A R O U S E L -->
  <!-- <section id="section3" class="cd-section">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <!-- <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol> -->

      <!-- Wrapper for slides -->
      <!-- <div class="carousel-inner" style="height:600px;">
        <div class="item active">
          <img src="pic/1.jpg" style="width:100%;" >
        </div>

        <div class="item">
          <img src="pic/2.jpg" style="width:100%;">
        </div>

        <div class="item">
          <img src="pic/3.jpg" style="width:100%;">
        </div>
      </div> -->

      <!-- Left and right controls -->
      <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>  -->


  <section id="section3" class="cd-section" style="background-color:#222222">


<h1 style="font-size: 2em; color:#59a9ff; text-align:center; padding:4%;">Our Work and Research</h1>
  <p style="font-size: 1.2em; color:white; margin:2% 5%; width:90%">Selection of water-quality parameters. Any design for a water-quality network faces the immediate question: What parameters should be included in the measurement program that will provide a broad base of information for general use? About sixty chemical, physical, and biological properties are pertinent to various uses. It must follow that the design or plan for measurement selected will be ﬂexible so that the selected or key parameters measured will lead logically from one level of activity to the next higher as measured by parameter diversity. The following parameters are recommended for measurement in hydrologic water quality networks</p>
    <table id="footer" class="table table-hover"  style="width:80%; color:white; margin-left:7%;">
  <thead style="font-size: 1.2em;font-weight: bold;">
      <tr>
        <th>Chemical parameters</th>
        <th>Physical parameters</th>
        <th>Biological parameters</th>
      </tr>
  </thead>
    <tbody>
      <tr>
        <td>Dissolved Solids</td>
        <td>Dissolved Oxygen</td>
        <td>Alkalinity</td>
      </tr>

      <tr>
        <td>Color</td>
        <td>Turbidity</td>
        <td>Hardness</td>

      </tr>

      <tr>
        <td>Biological Diversity</td>
        <td>Coliform</td>
        <td>Odor</td>
      </tr>
    </tbody>
  <tbody>
    <tr>
      <td>Dissolved Solids</td>
      <td>Dissolved Oxygen</td>
      <td>Alkalinity</td>
    </tr>

    <tr>
      <td>Color</td>
      <td>Turbidity</td>
      <td>Hardness</td>

    </tr>

  </tbody>
  </table>

	<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5 style="color:#59a9ff">Research Information</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="#"><i class="fa fa-angle-double-right"></i>Hydrogeology</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>LLP "AtyrauHydrogeology"</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>Web Application</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>Contacts</a></li><br>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5 style="color:#59a9ff">Website Data</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="#"><i class="fa fa-angle-double-right"></i>Ugh</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>Chebipostavit</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>E-mail Us</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i>Site Map</a></li><br>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5 style="color:#59a9ff">Contacts</h5>
					<ul class="list-unstyled quick-links">
					       <p style="color:white">
                   Товарищество с ограниченной ответственностью «Атыраугидрогеология» (ТОО «АГГ»)
                   <br>инд. 060024, г. Атырау, с. Томарлы, ул. К. Исмагулова, 2<br>
                   тел: 8 (7122) 39-18- 54, факс: 8 (7122) 39-18- 25.<p>
        </ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				</hr>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p>This version is a starting version of the OS for diploma project</p>
					<p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.notevenart.com" target="_blank">Adley Dana</a></p>
				</div>
				</hr>
			</div>
		</div>
  </section>
</section>

</div>
</body>

</html>
