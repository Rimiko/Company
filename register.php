<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company-HTML Bootstrap theme</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">	
    <link href="css/register.css" rel="stylesheet">	
    <!-- =======================================================
        Theme Name: Company
        Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>
  <?php include('header.php'); ?>
	<!-- <header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.html"><h1><span>Com</span>pany</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="index.html">Home</a></li>
								<li role="presentation"><a href="about.html">About Us</a></li>
								<li role="presentation"><a href="services.html">Services</a></li>								
								<li role="presentation"><a href="portfolio.html">Portfolio</a></li>
								<li role="presentation"><a href="blog.html">Blog</a></li>
								<li role="presentation"><a href="contact.html" class="active">Contact</a></li>						
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="index.html">Home</a></li>
				<li>Contact</li>			
			</div>		
		</div>	
	</div>
	 -->
<!-- 	<div class="map">
		<div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
	</div> -->
	
	<section id="contact-page">
	<div class="kabe">
	<div class="container">
			<div class="row main">
				<div class="main-login main-center">

					<form class="form-horizontal" method="post" action="#">
						<div class="form-group">
						<h3>会員登録</h3>
							<label for="name" class="cols-sm-2 control-label">名前</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your name"/>
								</div>
							</div>
						</div>
                                                <div class="form-group">
                            <label for="job" class="cols-sm-2 control-label">メールアドレス</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="email" id="job"  placeholder="Enter your e-mail"/>
                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                            <label for="job" class="cols-sm-2 control-label">パスワード</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="email" id="job"  placeholder="Enter your password"/>
                                </div>
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="job" class="cols-sm-2 control-label">確認用パスワード</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="email" id="job"  placeholder="Enter your password"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                        <label for="avatar" class="cols-sm-2 control-label">アバター選択</label>
                        <div class="cols-sm-12">
						<div class="col-xs-4">
        				<img src="images/background.png" class="img-responsive img-radio">
        				<button type="button" class="btn btn-primary btn-radio">lion</button>
        				<input type="checkbox" id="left-item" class="hidden">
        			</div>
        			        			<div class="col-xs-4">
        				<img src="images/background.png" class="img-responsive img-radio">
        				<button type="button" class="btn btn-primary btn-radio">cat</button>
        				<input type="checkbox" id="middle-item" class="hidden">
        			</div>
        			<div class="col-xs-4">
        				<img src="images/background.png" class="img-responsive img-radio">
        				<button type="button" class="btn btn-primary btn-radio">dog</button>
        				<input type="checkbox" id="right-item" class="hidden">
        			</div>
                    </div>
                    </div>


<form class="form-horizontal">
<fieldset>

<!-- Form Name -->


<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-12 control-label" for="ages">年代</label>
  <div class="col-md-12"> 
    <label class="radio-inline" for="ages-0">
      <input type="radio" name="ages" id="ages-0" value="age10" checked="checked">
      10代以下
    </label> 
    <label class="radio-inline" for="ages-1">
      <input type="radio" name="ages" id="ages-1" value="age20">
      20代
    </label> 
    <label class="radio-inline" for="ages-2">
      <input type="radio" name="ages" id="ages-2" value="age30">
      30代
    </label> 
    <label class="radio-inline" for="ages-3">
      <input type="radio" name="ages" id="ages-3" value="age40">
      40代
    </label> 
    <label class="radio-inline" for="ages-4">
      <input type="radio" name="ages" id="ages-4" value="age50">
      50代
    </label> 
    <label class="radio-inline" for="ages-5">
      <input type="radio" name="ages" id="ages-5" value="age60">
      60代以上
    </label>
  </div>
</div>


</fieldset>
</form>

						<div class="form-group">
							<label for="job" class="cols-sm-2 control-label">職業（任意）</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-briefcase" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="job"  placeholder="Enter your job"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="hobby" class="cols-sm-2 control-label">趣味（任意）</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-star" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="hobby"  placeholder="Enter your hobby"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="button" class="btn btn-primary btn-lg btn-block login-button cols-sm-2">Register</button>
						</div>
					
					</form>
				</div>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>
    </section><!--/#contact-page-->
	<section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Developers</h2>
                <div class="footer">
            <div class="container">
                <!-- <div class="container"> -->
            <div class="developers">
                <div class="col-md-3">
                    <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="images/rimiko.png">
                        <div><img class="image-circle" src="images/rimiko.png"> </div>    
                        <h2>Rimiko Fukumitsu</h2>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
                        <div><img class="image-circle" src="images/naru.png"></div>    
                        <h2>Naru<br> Nishimura</h2>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" >
                        <div><img class="image-circle" src="images/atsushi.png"></div>    
                        <h2>Atsushi Miyamoto</h2>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" >
                        <div><img class="image-circle" src="images/IMG_1696.png"></div>    
                        <h2>Ayumi <br>Maeda</h2>
                        
                    </div>
                </div>
            </div>
        </div>
	<!-- <footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						<ul class="social-network">
							<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
						</ul>	
					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						&copy; Company Theme. All Rights Reserved.
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
                            -->
             <!--                <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
					</div>
				</div>						
			</div>
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>
		</div>
	</footer>  -->
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/functions.js"></script>
    <script src="contactform/contactform.js"></script>
    
</body>
</html>