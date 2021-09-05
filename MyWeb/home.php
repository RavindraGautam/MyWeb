<!DOCTYPE html>
<html lang="en">
<head>
  <title>GPA Sports</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab&display=swap" rel="stylesheet">
 </head>

<body>
	
	<?php include 'menu.php'  ?>
	
  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/a.jpeg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/b.jpeg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/e.jpeg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<section class="my-4">
	<div class="py-5">
		<h3 class="text-center">About Us</h3>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="images/g.jpeg" class="img-fluid aboutimg">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h2 class="text-center display-5">Welcome to G P A</h2>
				<p class="py-4">Many users already have downloaded Bootstrap 4 from MaxCDN when visiting another site. 
				As a result, it will be loaded from cache when they visit your site, which leads to faster loading time.
				Also, most CDN's will make sure that once a user requests a file from it,
				it will be served from the server closest to them, which also leads to faster loading time.
				</p>
				<a href="about.php" class="btn btn-success">check here</a>
			</div>
		</div>
	</div>	
</section>


<section class="my-4">
	<div class="py-5">
		<h3 class="text-center">Event</h3>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
					<img class="card-img-top" src="images/c.jpeg" alt="card image">
						<div class="card-body text-center">
							<h4 class="card-title ">Our House</h4>
							<p class="card-text">this is raman house</p>
							<a href="#" class="btn btn-primary">Go House</a>
						</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
					<img class="card-img-top" src="images/football1.jpeg" alt="card image">
						<div class="card-body text-center">
							<h4 class="card-title ">Our House</h4>
							<p class="card-text">this is raman house</p>
							<a href="#" class="btn btn-primary">Go House</a>
						</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
					<img class="card-img-top" src="images/c.jpeg" alt="card image">
						<div class="card-body text-center">
							<h4 class="card-title ">Our House</h4>
							<p class="card-text">this is raman house</p>
							<a href="#" class="btn btn-primary">Go House</a>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="my-4">
	<div class="py-5">
		<h3 class="text-center">Gailary</h3>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/batmitan.jpeg"alt="galary" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/football1.jpeg"alt="galary" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/girl.jpeg"alt="galary" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/football1.jpeg"alt="galary" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/girl.jpeg"alt="galary" class="img-fluid pb-4">
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<img src="images/batmitan.jpeg"alt="galary" class="img-fluid pb-4">
			</div>
		</div>
	</div>
</section>

<section class="my-4">
	<div class="py-5">
		<h3 class="text-center">Register Here</h3>
	</div>
	<div class="w-50 m-auto">
		<form action="register.php" method="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>E-mail</label>
				<input type="text"name="E-mail" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Mobile no</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Branch</label>
				<input type="text"name="branch" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password"name="password" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Comment</label>
				<textarea class="form-control" name="comment">
				</textarea>
			</div>
			<button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</section>
<footer>
	<p class="p-3 text-center text-white bg-dark">@gpaurai.ac.in</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>