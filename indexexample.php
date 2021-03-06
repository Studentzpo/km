<!doctype html>
<html lang="en">
  <head>
    <title>Knowledge Mamagement</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/Styles.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark text-uppercase top-bar">
      <div class="container">
        <a class="navbar-brand" href="#">knowledge Management</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i>หน้าหลัก</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Video_stategic.php">แผนยุทรศาสตร์</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="report.php">รายงานประจำปี</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
      </nav>
      <div class="content-section">
        <div class="container">
            	<div class="col-md-3" style="float:left;">
                	<a href="animal.php"><img src="images/km/1-01.jpg" width="260px" height="480px" class="resize"></a>
                </div>
                <div class="col-md-3" style="float:left;">
                	<a href="law.php"><img src="images/km/2-02.jpg" width="260px" height="480px" class="resize"></a>
                </div>
                <div class="col-md-3" style="float:left;">
                	<a href="Video.php"><img src="images/km/3-03.jpg" width="260px" height="480px" class="resize"></a>
                </div>
                <div class="col-md-3" style="float:left;">
                	<a href="computer.php"><img src="images/km/4-04.jpg" width="260px" height="480px" class="resize"></a>
           		</div>
        </div>
      </div>
      <div class="login-section">
        <div class="container">
            <form class="form-signin" action="...">
              <h2 class="form-signin-heading text-center">login</h2>
              <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
              <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
              <label class="checkbox">
                <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
              </label>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
            </form>
        </div>
      </div>
  </body>
</html>
