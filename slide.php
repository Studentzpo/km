<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/carousel.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
 </head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
    			<div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
  					</ol>
  				<div class="carousel-inner">
    				<div class="carousel-item active">
      					<img class="d-block w-100" src="..." alt="First slide">
    				</div>
   					<div class="carousel-item">
      					<img class="d-block w-100" src="..." alt="Second slide">
    				</div>
    				<div class="carousel-item">
      					<img class="d-block w-100" src="..." alt="Third slide">
    				</div>
  				</div>
  				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
                	<span class="sr-only">Previous</span>
  				</a>
  				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    				<span class="carousel-control-next-icon" aria-hidden="true"></span>
    				<span class="sr-only">Next</span>
  				</a>
                </div>
               </div>
              </div>
             </div>
      <script>
		$("#myCarousel").carousel();
	</script>
</body>
</html>
