<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Simple Data Table</title>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Josefin+Slab'><link rel="stylesheet" href="./style.css">

<!-- navbar link -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="./src/crud.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    body {
        background-color:  grey;
    }
</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
});
</script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light pb-4 pt-4">
	<a href="#" class="navbar-brand">Double RJ'S<b> Motorcycle Corporation</b></a>  		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<div class="navbar-nav">
			<a href="home.php" class="nav-item nav-link">Home</a>
			<a href="./about.php" class="nav-item nav-link">About</a>			
			<a href="#" class="nav-item nav-link active">Pricing</a>
			<a href="crud.php" class="nav-item nav-link">Retrive</a>
			<a href="./contact.html" class="nav-item nav-link">Contact</a>
        </div>
		<form class="navbar-form form-inline search-form">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
					<button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</form>
		<div class="navbar-nav ml-auto">
			<div class="nav-item dropdown login-dropdown">
				<a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle"><i class="fa fa-user-o"></i> Login</a>
				<div class="dropdown-menu">					
                    <form class="form-inline login-form" action="/examples/actions/confirmation.php" method="post">
                        <div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<span class="fa fa-user"></span>
								</span>                    
							</div>
                            <input type="text" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fa fa-lock"></i>
								</span>                    
							</div>
                            <input type="text" class="form-control" placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                </div>
            </div>			
        </div>
	</div>
</nav>

<!-- first page  -->
<!-- partial:index.partial.html -->
<div class="background"></div>
  <section class="container">
    <div id="carousel"> 
      <figure>
        <a href="#">
          <img src="http://ecx.images-amazon.com/images/I/41nrwU788-L.jpg" />
          <h3>NOFX</h3>
        </a>
      </figure>
      <figure>
        <a href="#">
          <img src="http://ecx.images-amazon.com/images/I/51JHrRWAZ4L.jpg" />
          <h3>Green Day</h3>
        </a>
      </figure>
      <figure>
        <a href="#">
          <img src="http://ecx.images-amazon.com/images/I/613npd9HJqL.jpg" />
          <h3>Blink 182</h3>
        </a>
      </figure>
      <figure>
        <a href="#">
          <img src="http://ecx.images-amazon.com/images/I/513seObyj6L.jpg" />
          <h3>The Starting Line</h3>
        </a>
      </figure>
      <figure>
        <a href="#">
          <img src="https://media.tumblr.com/c56e7b0fbc3a6879bf554c91bb17df60/tumblr_inline_n5sqqoGEK11qfo293.jpg" />
          <h3>New Found Glory</h3>
        </a>
      </figure>
      <figure>
        <a href="#">
          <img src="http://ecx.images-amazon.com/images/I/51clrJHvG%2BL.jpg" />
          <h3>Fenix TX</h3>
        </a>
      </figure> 
            <figure>
        <a href="#">
          <img src="http://ecx.images-amazon.com/images/I/41nrwU788-L.jpg" />
          <h3>NOFX</h3>
        </a>
      </figure>
      <figure>
        <a href="#">
          <img src="http://ecx.images-amazon.com/images/I/51JHrRWAZ4L.jpg" />
          <h3>Green Day</h3>
        </a>
      </figure>
      <figure>
        <a href="#">
          <img src="http://ecx.images-amazon.com/images/I/613npd9HJqL.jpg" />
          <h3>Blink 182</h3>
        </a>
      </figure>
      <figure>
        <a href="#">
          <img src="http://ecx.images-amazon.com/images/I/513seObyj6L.jpg" />
          <h3>The Starting Line</h3>
        </a>
      </figure>
      <figure>
        <a href="#">
          <img src="https://media.tumblr.com/c56e7b0fbc3a6879bf554c91bb17df60/tumblr_inline_n5sqqoGEK11qfo293.jpg" />
          <h3>New Found Glory</h3>
        </a>
      </figure>
      <figure>
        <a href="#">
          <img src="http://ecx.images-amazon.com/images/I/51clrJHvG%2BL.jpg" />
          <h3>Fenix TX</h3>
        </a>
      </figure> 
    </div>
  </section>
  <nav id="navigation">
    <span class="navigation-control left" data-increment="1">></span>
    <span class="navigation-control right" data-increment="-1"><</span>
  </nav>
<!-- partial -->
 <br>
 <br>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Customer <b>Details</b></h2></div>
                    <div class="col-sm-4">
                        <div class="search-box">
                            <i class="material-icons">&#xE8B6;</i>
                            <input type="text" class="form-control" placeholder="Search&hellip;">
                        </div>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Full Name <i class="fa fa-sort"></i></th>
                        <th>Address</th>
                        <th>City <i class="fa fa-sort"></i></th>
                        <th>Pin Code</th>
                        <th>Country <i class="fa fa-sort"></i></th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Thomas Hardy</td>
                        <td>89 Chiaroscuro Rd.</td>
                        <td>Portland</td>
                        <td>97219</td>
                        <td>USA</td>
                        <td>
                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Maria Anders</td>
                        <td>Obere Str. 57</td>
                        <td>Berlin</td>
                        <td>12209</td>
                        <td>Germany</td>
                        <td>
                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Fran Wilson</td>
                        <td>C/ Araquil, 67</td>
                        <td>Madrid</td>
                        <td>28023</td>
                        <td>Spain</td>
                        <td>
                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Dominique Perrier</td>
                        <td>25, rue Lauriston</td>
                        <td>Paris</td>
                        <td>75016</td>
                        <td>France</td>
                        <td>
                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Martin Blank</td>
                        <td>Via Monte Bianco 34</td>
                        <td>Turin</td>
                        <td>10100</td>
                        <td>Italy</td>
                        <td>
                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="#" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>        
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>  
</div>   
<!--footer starts from here-->
<footer>
<section class="nb-footer">
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-6">
	<div class="footer-single">
	<!-- 	<img src="images/logo.png" class="img-responsive" alt="Logo"> -->

		<!-- This is only for better view of theme if you want your image logo remove div dummy-logo bellow and replace your logo in logo.png and uncomment logo tag above-->
	<div class="dummy-logo">
	<div class="icon pull-left brand">
		<i class="fa fa-copy"></i>
	</div>
		<h2>Lorem Ipsum</h2>
		<p>Another responsive footer</p>
	</div>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus felis diam, vulputate in risus eu, porttitor condimentum purus. Phasellus ullamcorper, odio id feugiat bibendum.</p>
		<a href="" class="btn btn-footer">Read More</a>
	</div>
</div>

<div class="col-md-3 col-sm-6">
	<div class="footer-single useful-links">
	 <div class="footer-title"><h2>Navigation</h2></div>
	 <ul class="list-unstyled">
            <li><a href="index.html">Home <i class="fa fa-angle-right pull-right"></i></a></li>
            <li><a href="about1.html">About Us <i class="fa fa-angle-right pull-right"></i></a></li>
            <li><a href="service1.html">Services <i class="fa fa-angle-right pull-right"></i></a></li>
            <li><a href="portfolio1.html">Portfolio <i class="fa fa-angle-right pull-right"></i></a></li>
            <li><a href="pricing.html">Pricing <i class="fa fa-angle-right pull-right"></i></a></li>
            <li><a href="contact1.html">Contact Us <i class="fa fa-angle-right pull-right"></i></a></li>
        </div>
</div>
<div class="clearfix visible-sm"></div>

<div class="col-md-3 col-sm-6">
	
	<div class="col-sm-12 left-clear right-clear footer-single footer-project">
		<div class="footer-title"><h2>Latest Projects</h2></div>
		<div class="col-xs-4">
			<img src="./image/kawasaki.jpg" style="width: 200px;" class="img-responsive center-block">
		</div>
	</div>

</div>

<div class="col-md-3 col-sm-6">
	<div class="footer-single">
		<div class="footer-title"><h2>Contact Information</h2></div>
		<address>
			999, Holly Eiusmod Tempor, City<br>
			Your State, Country <br>
			<i class="fa fa-phone"></i>  987 654 3210 <br>
			<i class="fa fa-fax"></i> 012 123 2345<br>
			<i class="fa fa-envelope"></i> info@example.com<br>
		</address>					
	</div>
</div>

</div>
</div>
</section>	
</footer>
<!--social_footer_ul ends here-->

<script src="./src/crud.js"></script>

</body>
</html>				                            