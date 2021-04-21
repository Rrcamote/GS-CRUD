<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- navbar link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="./src/home.css">
    <!-- second link -->
    <title>Document</title>
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
                <a href="./home.php" class="nav-item nav-link">Home</a>
                <a href="./about.php" class="nav-item nav-link">About</a>
                <a href="#" class="nav-item nav-link active">Pricing</a>
                <a href="./crud.php" class="nav-item nav-link">Retrieve</a>
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
    <div class="service-40 py-5 wrap-feature40-box" style="background-image:url(https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/features/feature40/img1.jpg), url(https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/features/feature40/img2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card border-0 mb-4">
                    <div class="card-body"> <span class="badge badge-danger rounded-pill px-3 py-1 font-weight-light">Service 40</span>
                        <h3 class="my-3 text-uppercase">Awesome Extra Ordinary Flexibility</h3>
                        <p class="my-4">You can relay on our amazing features list and also our customer services will be great</p> 
												<a class="btn btn-info-gradiant btn-md btn-rounded border-0 text-white" href="#f40"><span>View Details</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6"> 
							<img src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/features/feature40/img3.jpg" alt="wrapkit" class="img-fluid rounded" /> 
						</div>
        </div>
    </div>
</div>                            
<!-- second page -->
<div class="blog-home5 py-5">
  <div class="container">
    <!-- Row  -->
    <div class="row justify-content-center">
      <!-- Column -->
      <div class="col-md-8 text-center">
        <h3 class="mb-3">Latest from Our Blog</h3>
        <h6 class="subtitle font-weight-normal">You can relay on our amazing features list and also our customer services will be great experience for you without doubt</h6>
      </div>
      <!-- Column -->
    </div>
    <!-- Row  -->
    <div class="row mt-4">
      <!-- Column -->
      <div class="col-md-4">
        <div class="card b-h-box position-relative font-14 border-0 mb-4">
          <img class="card-img" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img9.jpg" alt="Card image">
          <div class="card-img-overlay overflow-hidden">
						<div class="d-flex align-items-center">
								<span class="bg-danger-gradiant badge overflow-hidden text-white px-3 py-1 font-weight-normal">Charity, Ngo</span>
								<div class="ml-2">
									<span class="ml-2">Feb 18, 2018</span>
								</div>
						</div>
            <h5 class="card-title my-3 font-weight-normal">Help out the people who really need it on time.</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p>
          </div>
        </div>
      </div>
      <!-- Column -->
      <!-- Column -->
      <div class="col-md-4">
        <div class="card b-h-box position-relative font-14 border-0 mb-4">
          <img class="card-img" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img10.jpg" alt="Card image">
          <div class="card-img-overlay overflow-hidden">
            <div class="d-flex align-items-center">
								<span class="bg-danger-gradiant badge overflow-hidden text-white px-3 py-1 font-weight-normal">Charity, Ngo</span>
								<div class="ml-2">
									<span class="ml-2">Feb 18, 2018</span>
								</div>
						</div>
            <h5 class="card-title my-3 font-weight-normal">Help out the people who really need it on time.</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p>
          </div>
        </div>
      </div>
      <!-- Column -->
      <!-- Column -->
      <div class="col-md-4">
        <div class="card b-h-box position-relative font-14 border-0 mb-4">
          <img class="card-img" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img11.jpg" alt="Card image">
          <div class="card-img-overlay overflow-hidden">
            <div class="d-flex align-items-center">
								<span class="bg-danger-gradiant badge overflow-hidden text-white px-3 py-1 font-weight-normal">Charity, Ngo</span>
								<div class="ml-2">
									<span class="ml-2">Feb 18, 2018</span>
								</div>
						</div>
            <h5 class="card-title my-3 font-weight-normal">Help out the people who really need it on time.</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p>
          </div>
        </div>
      </div>
      <!-- Column -->
    </div>
  </div>
</div>                            
<div class="blog-home5 py-5">
  <div class="container">
    <!-- Row  -->
    <div class="row justify-content-center">
      <!-- Column -->

      <!-- Column -->
    </div>
    <!-- Row  -->
    <div class="row mt-4">
      <!-- Column -->
      <div class="col-md-4">
        <div class="card b-h-box position-relative font-14 border-0 mb-4">
          <img class="card-img" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img9.jpg" alt="Card image">
          <div class="card-img-overlay overflow-hidden">
						<div class="d-flex align-items-center">
								<span class="bg-danger-gradiant badge overflow-hidden text-white px-3 py-1 font-weight-normal">Charity, Ngo</span>
								<div class="ml-2">
									<span class="ml-2">Feb 18, 2018</span>
								</div>
						</div>
            <h5 class="card-title my-3 font-weight-normal">Help out the people who really need it on time.</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p>
          </div>
        </div>
      </div>
      <!-- Column -->
      <!-- Column -->
      <div class="col-md-4">
        <div class="card b-h-box position-relative font-14 border-0 mb-4">
          <img class="card-img" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img10.jpg" alt="Card image">
          <div class="card-img-overlay overflow-hidden">
            <div class="d-flex align-items-center">
								<span class="bg-danger-gradiant badge overflow-hidden text-white px-3 py-1 font-weight-normal">Charity, Ngo</span>
								<div class="ml-2">
									<span class="ml-2">Feb 18, 2018</span>
								</div>
						</div>
            <h5 class="card-title my-3 font-weight-normal">Help out the people who really need it on time.</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p>
          </div>
        </div>
      </div>
      <!-- Column -->
      <!-- Column -->
      <div class="col-md-4">
        <div class="card b-h-box position-relative font-14 border-0 mb-4">
          <img class="card-img" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img11.jpg" alt="Card image">
          <div class="card-img-overlay overflow-hidden">
            <div class="d-flex align-items-center">
								<span class="bg-danger-gradiant badge overflow-hidden text-white px-3 py-1 font-weight-normal">Charity, Ngo</span>
								<div class="ml-2">
									<span class="ml-2">Feb 18, 2018</span>
								</div>
						</div>
            <h5 class="card-title my-3 font-weight-normal">Help out the people who really need it on time.</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod...</p>
          </div>
        </div>
      </div>
      <!-- Column -->
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
                            <div class="footer-title">
                                <h2>Navigation</h2>
                            </div>
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
                            <div class="footer-title">
                                <h2>Latest Projects</h2>
                            </div>
                            <div class="col-xs-4">
                                <img src="./image/kawasaki.jpg" style="width: 200px;" class="img-responsive center-block">
                            </div>
                        </div>

                    </div>

                    <div class="col-md-3 col-sm-6">
                        <div class="footer-single">
                            <div class="footer-title">
                                <h2>Contact Information</h2>
                            </div>
                            <address>
                                999, Holly Eiusmod Tempor, City<br>
                                Your State, Country <br>
                                <i class="fa fa-phone"></i> 987 654 3210 <br>
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

    <script src="./src/home.js"></script>
</body>

</html>