<!DOCTYPE HTML>
<html>
<head>
<title>Blogs</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/icon-font.css" type='text/css' />
<script src="js/jquery-2.1.4.js"></script>
<script type="text/javascript">
function logout() {
    var r = confirm("Do you really want to log out?");
    if (r) {
       window.location.href = "sql/logout.php";
    }
}
</script>
</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
      <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="home.php">Mosai<span>c</span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="home.php">M </a>
			</div>

			<!--logo and iconic logo end-->
					<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li class="active"><a href="home.php"><i class="lnr lnr-home"></i><span>Home</span></a></li>
						
						<li><a href="radio.php"><i class="camera"></i> <span>Radio</span></a></li>
						<li><a href="radio.php"><i class="lnr lnr-users"></i> <span>Artists</span></a></li> 
						<li><a href="browse.php"><i class="lnr lnr-music-note"></i> <span>Albums</span></a></li>						
						<li class="menu-list"><a href="browse.php"><i class="lnr lnr-indent-increase"></i> <span>Browser</span></a>  
							<ul class="sub-menu-list">
								<li><a href="browse.php">Artists</a> </li>
								<li><a href="404.php">Services</a> </li>
							</ul>
						</li>
						<li><a href="blog.php"><i class="lnr lnr-book"></i><span>Blog</span></a></li>
						<li class="menu-list"><a href="#"><i class="lnr lnr-heart"></i>  <span>My Favourities</span></a> 
							<ul class="sub-menu-list">
								<li><a href="radio.php">All Songs</a></li>
							</ul>
						</li>
						<li class="menu-list"><a href="contact.php"><i class="fa fa-thumb-tack"></i><span>Contact</span></a>
							<ul class="sub-menu-list">
								<li><a href="contact.php">Location</a> </li>
							</ul>
						</li>     
					</ul>
				<!--sidebar nav end-->
			</div>
		</div>
		<!-- left side end-->
					
		<!-- signup -->
			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="sign-grids">
								<div class="sign">
									<div class="sign-left">
										<ul>
											<li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
											<li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
											<li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
										</ul>
									</div>
									<div class="sign-right">
										<form action="#" method="post">
											<h3>Create your account </h3>
											<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
											<input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
											<input type="text" value="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
											<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											
											<input type="submit" value="CREATE ACCOUNT" >
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								<p>By logging in you agree to our <span>Terms and Conditions</span> and <span>Privacy Policy</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //signup -->
	 
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->
			<!--notification menu start -->
				<div class="menu-right">
					<div class="profile_details">		
						  <div class="col-md-4 serch-part">
								<div id="sb-search" class="sb-search">
									<form action="#" method="post">
										<input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
										<input class="sb-search-submit" type="submit" value="">
										<span class="sb-icon-search"> </span>
									</form>
								</div>
							</div>
							  <!-- search-scripts -->
									<script src="js/classie.js"></script>
									<script src="js/uisearch.js"></script>
										<script>
											new UISearch( document.getElementById( 'sb-search' ) );
										</script>
									<!-- //search-scripts -->
											 <!---->
											  <div class="col-md-4 player">
													<div class="audio-player">
														<audio id="audio-player"  controls="controls">
														<source src="media/Blue Browne.ogg" type="audio/ogg"></source>
																<source src="media/Blue Browne.mp3" type="audio/mpeg"></source>
																<source src="media/Georgia.ogg" type="audio/ogg"></source>
																<source src="media/Georgia.mp3" type="audio/mpeg"></source></audio>
														</div>
												<!---->
												<script type="text/javascript">
													$(function(){
													  $('#audio-player').mediaelementplayer({
														alwaysShowControls: true,
														features: ['playpause','progress','volume'],
														audioVolume: 'horizontal',
														iPadUseNativeControls: true,
														iPhoneUseNativeControls: true,
														AndroidUseNativeControls: true
													});
												 });
												</script>
												<!--audio-->
													<link rel="stylesheet" type="text/css" media="all" href="css/audio.css">
													<script type="text/javascript" src="js/mediaelement-and-player.min.js"></script>
													<!---->


												<!--//-->
												<ul class="next-top">
													<li><a class="ar" href="#"> <img src="images/arrow.png" alt=""/></a></li>
													<li><a class="ar2" href="#"><img src="images/arrow2.png" alt=""/></i></a></li>
														
											 </ul>	
											</div>
											<div class="col-md-4 login-pop">
												<div id="loginpop"><a id="loginButton"><span>Profile <i class="arrow glyphicon glyphicon-chevron-right"></i></span></a><a class="top-sign" href="#" data-toggle="modal" data-target="#myModal5"></a>
														<div id="loginBox"> 
													<form method="post" id="loginForm">
																	<fieldset id="body">
																		<fieldset>
																			  <label for="email">Email Address</label>
																			  <input type="text" name="email" id="email">
																		</fieldset>
																		<input type="submit" id="login" value="Logout" onClick="logout()">
																	</fieldset>
																<span><a href="#"></a></span>
														 </form>
													</div>
												</div>

											</div>
										<div class="clearfix"> </div>
								</div>
							<!-------->
						</div>
					<div class="clearfix"></div>
				</div>
					 
				<!--notification menu end -->
				<!-- //header-ends -->
							<div id="page-wrapper">
								<div class="inner-content">
									<!-- /blog -->
									
										<div class="tittle-head">
											<h3 class="tittle">Our Blogs </h3>
											<div class="clearfix"> </div>
										</div>
										<!-- /music-left -->
										<div class="music-left">
											<div class="post-media">
												  <a href="single.php"><img src="images/33.jpg" class="img-responsive" alt="" /></a>
												  <div class="blog-text">
														<a href="single.php"><h3 class="h-t">Lorem Ipsum is simply dummy text</h3></a>
												      <div class="entry-meta">
															<h6 class="blg"><i class="fa fa-clock-o"></i> Jan 25, 2016</h6>
															<div class="icons">
																<a href="#"><i class="fa fa-user"></i> Admin</a>
																<a href="#"><i class="fa fa-comments-o"></i> 2</a>
																<a href="#"><i class="fa fa-thumbs-o-up"></i> 152</a>
																<a href="#"><i class="fa fa-thumbs-o-down"></i>  26</a>
															</div>
																<div class="clearfix"></div>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non semper, inquam; Quo modo autem philosophus loquitur? Duo Reges: constructio interrete. Dici enim nihil potest verius. Hic ambiguo ludimur. An hoc usque quaque, aliter in vita? Bonum incolumis acies: misera caecitas. Favorite</p>
													  </div>
												  </div>
											</div>
											
											<div class="post-media second">
												  <a href="single.php"><img src="images/11.jpg" class="img-responsive" alt="" /></a>
												  <div class="blog-text">
														<a href="single.php"><h3 class="h-t">Lorem Ipsum is simply dummy text</h3></a>
												      <div class="entry-meta">
															<h6 class="blg"><i class="fa fa-clock-o"></i> Feb 13, 2016</h6>
															<div class="icons">
																<a href="#"><i class="fa fa-user"></i> Admin</a>
																<a href="#"><i class="fa fa-comments-o"></i> 2</a>
																<a href="#"><i class="fa fa-thumbs-o-up"></i> 152</a>
																<a href="#"><i class="fa fa-thumbs-o-down"></i>  26</a>
															</div>
																<div class="clearfix"></div>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non semper, inquam; Quo modo autem philosophus loquitur? Duo Reges: constructio interrete. Dici enim nihil potest verius. Hic ambiguo ludimur. An hoc usque quaque, aliter in vita? Bonum incolumis acies: misera caecitas. Favorite</p>
													  </div>
												  </div>
											</div>
											
											<div class="post-media">
												  <a href="single.php"><img src="images/22.jpg" class="img-responsive" alt="" /></a>
												  <div class="blog-text">
														<a href="single.php"><h3 class="h-t">Lorem Ipsum is simply dummy text</h3></a>
												      <div class="entry-meta">
															<h6 class="blg"><i class="fa fa-clock-o"></i> Mach 30, 2016</h6>
															<div class="icons">
																<a href="#"><i class="fa fa-user"></i> Admin</a>
																<a href="#"><i class="fa fa-comments-o"></i> 2</a>
																<a href="#"><i class="fa fa-thumbs-o-up"></i> 152</a>
																<a href="#"><i class="fa fa-thumbs-o-down"></i>  26</a>
															</div>
																<div class="clearfix"></div>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Non semper, inquam; Quo modo autem philosophus loquitur? Duo Reges: constructio interrete. Dici enim nihil potest verius. Hic ambiguo ludimur. An hoc usque quaque, aliter in vita? Bonum incolumis acies: misera caecitas. Favorite</p>
													  </div>
												  </div>
											</div>
											<!--start-blog-pagenate-->
												<div class="blog-pagenat">
													<ul>
														<li><a class="frist" href="#">Prev</a></li>
														<li><a href="#">1</a></li>
														<li><a href="#">2</a></li>
														<li><a href="#">3</a></li>
														<li><a href="#">4</a></li>
														<li><a href="#">5</a></li>
														<li><a class="last" href="#">Next</a></li>
														<div class="clearfix"> </div>
													</ul>
												</div>
												<!--//end-blog-pagenate-->

										</div>
										<!-- //music-left-->
										<!-- /music-right-->
										<div class="music-right">
											<!-- //widget -->
											  <div class="widget-side">
												<h4 class="widget-title">Recent Posts</h4>
													<ul>
														<li>
															<a href="single.php">Taylor Swift – Shake It Off</a>
															<span class="post-date">Feb 13, 2016</span>
														</li>
														<li>
															<a href="single.php">Love Me Like You Do – Ellie Goulding (Fifty Shades of Grey Soundtrack) HQ</a>
															<span class="post-date">Feb 14, 2016</span>
														</li>
														<li>
															<a href="single.php">Jessie J – Flashlight (from Pitch Perfect 2)</a>
															<span class="post-date">Feb 16, 2016</span>
														</li>
														<li>
															<a href="single.php">Sol – “Ain’t Gon’ Stop”</a>
															<span class="post-date">Feb 18, 2016</span>
														</li>
														<li>
															<a href="single.php">Eminem – No Love (Explicit Version) ft. Lil Wayne</a>
															<span class="post-date">Feb 19, 2016</span>
														</li>
													</ul>
												 </div>
												 <div class="widget-side second">
												<h4 class="widget-title">Top Songs</h4>
													<ul>
														<li>
															<div class="song-img">
															  <a href="single.php"><img src="images/play1.png" class="img-responsive" alt="" /></a>
															</div>
															<div class="song-text">
																<a href="single.php">Ellie-Goulding</a>
																<span class="post-date">Feb 13, 2016</span>
															</div>
															<div class="clearfix"></div>
														</li>
														<li>
															<div class="song-img">
															  <a href="single.php"><img src="images/play2.png" class="img-responsive" alt="" /></a>
															</div>
															<div class="song-text">
																<a href="single.php">Mark-Ronson-Uptown</a>
																<span class="post-date">Feb 14, 2016</span>
															</div>
															<div class="clearfix"></div>
														</li>
														<li>
															<div class="song-img">
															  <a href="single.php"><img src="images/play4.png" class="img-responsive" alt="" /></a>
															</div>
															<div class="song-text">
																<a href="single.php">Pharrell-Williams</a>
																<span class="post-date">Feb 16, 2016</span>
															</div>
															<div class="clearfix"></div>
														</li>
														<li>
															<div class="song-img">
															  <a href="single.php"><img src="images/play5.png" class="img-responsive" alt="" /></a>
															</div>
															<div class="song-text">
																<a href="single.php">Taylor Swift – Shake It Off</a>
																<span class="post-date">Feb 18, 2016</span>
															</div>
															<div class="clearfix"></div>
														</li>
														
													</ul>
												 </div>
											  <!-- //widget -->
										</div>
										<div class="clearfix"></div>
									<!-- //blog -->
								</div>
							<div class="clearfix"></div>
						<!--body wrapper end-->
	 
					</div>
			  <!--body wrapper end-->
			       <div class="footer two">
				<div class="footer-grid">
					<h3>Navigation</h3>
					<ul class="list1">
					  <li><a href="home.php">Home</a></li>
					  <li><a href="radio.php">All Songs</a></li>
					  <li><a href="browse.php">Albums</a></li>
					  <li><a href="radio.php">New Collections</a></li>
					  <li><a href="blog.php">Blog</a></li>
					  <li><a href="contact.php">Contact</a></li>
				    </ul>
				</div>
				<div class="footer-grid">
					<h3>Our Account</h3>
				    <ul class="list1">
					  <li><a href="#" data-toggle="modal" data-target="#myModal5">Your Account</a></li>
					  <li><a href="#">Personal information</a></li>
					  <li><a href="#">Addresses</a></li>
					  <li><a href="#">Discount</a></li>
					  <li><a href="#">Orders history</a></li>
					  <li><a href="#">Addresses</a></li>
					  <li><a href="#">Search Terms</a></li>
				    </ul>
				</div>
				<div class="footer-grid">
					<h3>Our Support</h3>
					<ul class="list1">
					  <li><a href="contact.php">Site Map</a></li>
					  <li><a href="#">Search Terms</a></li>
					  <li><a href="#">Advanced Search</a></li>
					  <li><a href="#">Mobile</a></li>
					  <li><a href="contact.php">Contact Us</a></li>
					  <li><a href="#">Mobile</a></li>
					  <li><a href="#">Addresses</a></li>
				    </ul>
				  </div>
					  <div class="footer-grid">
						<h3>Newsletter</h3>
						<p class="footer_desc">AllMusic New Releases. Sign up for our free weekly email newsletter and get new featured albums delivered to your inbox.</p>
						<div class="search_footer">
						 <form>
						   <input type="text" placeholder="Email...." required="">
						  <input type="submit" value="Submit">
						  </form>
						</div>
					 </div>
					 <div class="footer-grid footer-grid_last">
						<h3>About Us</h3>
						<p class="footer_desc">Our mission is to maximise the opportunities for people to create and enjoy new music.</p>
						<p class="f_text">Phone:  &nbsp;&nbsp;&nbsp; +91-8618010414</p>
						<p class="f_text">Phone:  &nbsp;&nbsp;&nbsp; +91-6361336452</p>
						<p class="email">Email : &nbsp;<span><a href="mailto:souju387@gmail.com">souju387@gmail.com</a></span></p>
						<p class="email">Email : &nbsp;<span><a href="mailto:pushkalvaidya1@gmail.com">pushkalvaidya1@gmail.com</a></span></p>
					 </div>
					 <div class="clearfix"> </div>
				</div>
			</div>
      <!-- main content end-->
   </section>
  
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"></script>
</body>
</html>