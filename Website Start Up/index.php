<?php
// Functions to filter user inputs
function filterName($field){
    // Sanitize user name
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    
    // Validate user name
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        return $field;
    } else{
        return FALSE;
    }
}    
function filterEmail($field){
    // Sanitize e-mail address
    $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);
    
    // Validate e-mail address
    if(filter_var($field, FILTER_VALIDATE_EMAIL)){
        return $field;
    } else{
        return FALSE;
    }
}
function filterString($field){
    // Sanitize string
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if(!empty($field)){
        return $field;
    } else{
        return FALSE;
    }
}
 
// Define variables and initialize with empty values

$name = $email = $subject = $message = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
	$name = filterName($_POST["name"]);
    
	$email = filterEmail($_POST["email"]);

    $subject = filterString($_POST["subject"]);
	
    $message = filterString($_POST["message"]);

    }
    
	// Recipient email address
	$to = 'info@chukaunicu.org';
	
	// Create email headers
	$headers = 'From: '. $email . "\r\n" .
	'Reply-To: '. $email . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	
	// Sending email
	if(mail($to, $subject, $message, $headers)){
		echo '<p class="success">Your message has been sent successfully!</p>';
	} else{
		echo '<p class="error">Unable to send email. Please try again!</p>';
	}
    
}
?>

<!doctype html>
<html class="no-js" lang="zxx" dir="ltr">
	<head> <meta charset="utf-8"> <meta http-equiv="x-ua-compatible" content="ie=edge"> <meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Chuka Uni CU</title> 
		<link rel="stylesheet" href="css/font-awesome.min.css"> 
		<link rel="stylesheet" href="css/flaticon.css"> 
		<link rel="shortcut icon" href="images/favicon.ico"> 
		<link rel="stylesheet" href="css/plugins.css"> 
		<link rel="stylesheet" href="style.css"> 
		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	</head>
	<body data-spy="scroll" data-target=".navigation_area">
		<!--[if lt IE 8]> <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]--> 
		<div id="preloader"> 
			<div class="loader_line"></div>
		</div>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Site Header ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--> 
		<header id="header" class="site_header"> 
			<div class="site_navigation"> 
				<div class="container-fluid"> 
					<div class="row"> 
						<div class="col-12"> 
							<nav class="navbar navbar-expand-lg navigation_area"> 
								<a class="navbar-brand site_logo" href="index.html"> <span>ChukaUniCU</span></a> 
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button> 
								<div class="collapse navbar-collapse mainmenu_area" id="navbarNav"> 
									<ul class="navbar-nav mainmenu"> 
										<li class="nav-item"> 
											<a class="nav-link smoot_scroll dots_effect active" href="#home" data-scroll-nav="0">Home <span class="dot_effect dot_hover"></span></a></li>
											<li class="nav-item"> <a class="nav-link smoot_scroll dots_effect" href="#about" data-scroll-nav="1">About <span class="dot_effect dot_hover"></span></a></li>
											<li class="nav-item"> <a class="nav-link smoot_scroll dots_effect" href="#sermons" data-scroll-nav="2">sermons <span class="dot_effect dot_hover"></span></a> </li>
											<li class="nav-item"> <a class="nav-link smoot_scroll dots_effect" href="#ministries" data-scroll-nav="3">Ministries <span class="dot_effect dot_hover"></span></a> </li>
											<li class="nav-item"> <a class="nav-link smoot_scroll dots_effect" href="#memberssay" data-scroll-nav="4">Testimonials <span class="dot_effect dot_hover"></span></a> </li>
											<li class="nav-item"> <a class="nav-link smoot_scroll dots_effect" href="#blog" data-scroll-nav="5">blog <span class="dot_effect dot_hover"></span></a> </li>
											<li class="nav-item"> <a class="nav-link smoot_scroll dots_effect" href="#contact" data-scroll-nav="6">contact <span class="dot_effect dot_hover"></span></a> </li>
									</ul> 
								</div>
							</nav> 
						</div>
					</div>
				</div>
			</div>
		</header> 
		
		<div id="sticky_header"></div>
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Site Wrapper ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--> 
		<div class="site_wrapper bg_white"> 
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ header ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<section id="home" class="section_scroll welcome_area" data-scroll-index="0"> <div class="bg_overlay bg_image page_cover" style="background-image:url('images/bg/bg.jpg')"></div>
				<div id="particles-js"></div><div class="home_wrapper_info"> 
					<div class="container"> 
						<div class="row justify-content-center"> 
							<div class="col-lg-12"> 
								<div class="home_text_block text-center"> 
									<h3><span>CHUKA UNIVERSITY CHRISTIAN UNION</span></h3> 
									<h1 class="cd-headline clip"> <span>We are</span> <span class="cd-words-wrapper"> <b class="is-visible">ChukaUniCU</b> <b>A family</b> <b>Here For YOU</b> </span> </h1> 
									<ul class="expart_list"> 
										<li>CUCU</li>
										<li>A Family</li>
										<li>Home Away From Home</li>
									</ul> 
									<ul class="header_social_share"> 
										<li><a href="https://www.facebook.com/chukaunicu2021/" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/chukaunicu2021" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<li><a href="https://www.instagram.com/chukaunicu2021/" target="_blank"><i class="fa fa-instagram"></i></a></li>
									</ul> 
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="scroll_indicator_wrapper"> 
					<a href="#about" class="scroll_indicator scroll_down" data-scroll-goto="1"></a> 
				</div>
			</section> 
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Vision & Mission ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<section id="about" class="section_scroll" data-scroll-index="1"> 
				<div class="about_area pb-110"> 
					<div class="container"> 
						<div class="row justify-content-center"> 
							<div class="col-lg-8"> 
								<div class="about_content text-center"> 
									<div class="info"> <img src="images/logo.jpg" alt="chukauniversity cu logo"> 
										<h3>Chuka Uni CU<br/></h3> 
										<h4>Mission</h4> 
									</div>
									<p>To Equip members to be able to stude, practice and teach the word of God for productive life for Christ</p>
										<h4>Vission</h4> 
									<p>To Be a congregation of faithful witnesses, demonstrating God's Grace in and Out of Campus</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> 
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Us in numbers ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<section class="fanfact_area ptb-100 funfact_bg bg_image bg_overlay" style="background-image:url('images/bg/1.jpg')">
				<div class="container"> 
					<div class="row"> 
						<div class="col-lg-3 col-md-6 col-sm-6"> 
							<div class="single-fanfact"> 
								<span class="flaticon-users"></span> 
								<h3 class="counter">1500</h3> 
								<p>Total CU Members</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6"> 
							<div class="single-fanfact"> 
								<span class="flaticon-layers"></span> 
								<h3 class="counter">15</h3> 
								<p>Ministries</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Sermons ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<section id="sermons" class="services_area section_scroll ptb-110" data-scroll-index="2"> 
				<div class="container"> 
					<div class="row"> 
						<div class="col-12"> 
							<div class="section_title text-center"> 
								<h3><span>services</span></h3> 
								<h2 class="title">Our <span>Featured</span> Sermons</h2> 
							</div>
						</div>
					</div>
					<div class="row justify-content-center"> 
						<div class="col-lg-4 col-md-6"> 
							<div class="single_service"> 
								<div class="info"> 
									<iframe width="100%" height="280" src="https://www.youtube.com/embed/RW9c6wGg9VQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<h2><br/>God's Love</h2> 
									<p>God's Unconditional Love to mankind, to the point of giving His only son to die for us. Watch to get impacted.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6"> 
							<div class="single_service"> 
								<div class="info"> 
									<iframe width="100%" height="280" src="https://www.youtube.com/embed/UNiSUWThpKM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<h2><br/>Holliness</h2> 
									<p>Jesus, Our Righteousness<br/><br/><br/></p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6"> 
							<div class="single_service"> 
								<div class="info"> 
									<iframe width="100%" height="280" src="https://www.youtube.com/embed/QiuRGh0D1CM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<h2><br/>Keeping Hope Alive</h2> 
									<p>Even In Uncertain times, Our hope lies in Jesus, the creator of all that lives, who was, is and shall forever remain to be.</p>
								</div>
							</div>
						</div>
						
						
						<div class="col-lg-4 col-md-6"> 
							<div class="single_service"> 
								<div class="info"> 
									<iframe width="100%" height="280" src="https://www.youtube.com/embed/1ClYE9rjNBw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<h2><br/>Worship Afternoon</h2> 
									<p>A Power packed worship experience at Chuka University Pavilion grounds. Glory be to God!.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6"> 
							<div class="single_service"> 
								<div class="info">
									<iframe width="100%" height="280" src="https://www.youtube.com/embed/Tpx37m89YPE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>							
									<h2><br/>Worship Night 2019 Part 1</h2> 
									<p>Not to us, LORD, not to us but to your name be the glory, because of your love and faithfulness.</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6"> 
							<div class="single_service"> 
								<div class="info"> 
									<iframe width="100%" height="280" src="https://www.youtube.com/embed/vn1tuU3K0O4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<h2><br/>Worship Night 2019 Part 2</h2> 
									<p>Not to us, LORD, not to us but to your name be the glory, because of your love and faithfulness.</p>
								</div>
							</div>
						</div>		
					</div>
				</div>
			</section>  
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Minisstries ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<section id="ministries" class="work_area section_scroll ptb-110" data-scroll-index="3"> 
				<div class="container"> 
					<div class="row"> 
						<div class="col-12"> 
							<div class="section_title text-center"> 
								<h3><span>ministries</span></h3> 
								<h2 class="title">Our <span>Ministries/Programs.</span></h2> 
							</div>
						</div>
					</div>
					<div class="row"> 
						<div class="col-12"> 
							<ul class="recent_work_nav"> 
								<li> <a href="#" data-filter="*" class="dots_effect filter active">all<span class="dot_effect dot_hover"></span> </a> </li>
								<li> <a href="#" data-filter=".min" class="dots_effect filter">Ministries<span class="dot_effect dot_hover"></span></a> </li>
								<li> <a href="#" data-filter=".prog" class="dots_effect filter">Programmes<span class="dot_effect dot_hover"></span></a> </li>
								<li> <a href="#" data-filter=".other" class="dots_effect filter">Other<span class="dot_effect dot_hover"></span></a> </li>
							</ul> 
						</div>
					</div>
					<div id="masonry" class="row justify-content-center portfolio_items_list"> 
						<div class="col-lg-4 col-md-6 grid min"> 
							<a href="images/portfolio/1.jpg" class="work_item">
								<div class="work_thumb"><img src="images/portfolio/1.jpg" alt="praise & worship" class="img-responsive"></div>
								<div class="work_hover_mask">
									<div class="mask_container text-center"> <h3>Praise & Worship</h3> <p>The worship family</p></div>
									 
								</div>
							</a> 
						</div>
						<div class="col-lg-4 col-md-6 grid prog"> 
							<a href="images/portfolio/2.jpg" class="work_item">
								<div class="work_thumb"><img src="images/portfolio/2.jpg" alt="bestp" class="img-responsive"></div>
								<div class="work_hover_mask">
									<div class="mask_container text-center"> <h3>BEST -P</h3> <p>Bible Expository Self Training Programme</p></div>
									 
								</div>
							</a> 
						</div>
						<div class="col-lg-4 col-md-6 grid min"> 
							<a href="images/portfolio/5.jpg" class="work_item">
								<div class="work_thumb"><img src="images/portfolio/5.jpg" alt="instrumentalists" class="img-responsive"></div>
								<div class="work_hover_mask">
									<div class="mask_container text-center"> <h3>Instrumentalist</h3> <p>Where we skillfully play for God's glory</p></div>
									 
								</div>
							</a> 
						</div>
						<div class="col-lg-4 col-md-6 grid min"> 
							<a href="images/portfolio/5.jpg" class="work_item">
								<div class="work_thumb"><img src="images/portfolio/5.jpg" alt="ushering CUCU" class="img-responsive"></div>
								<div class="work_hover_mask">
									<div class="mask_container text-center"> <h3>Ushering</h3> <p>Called to service</p></div>
									 
								</div>
							</a> 
						</div>
						<div class="col-lg-4 col-md-6 grid other"> 
							<a href="images/portfolio/5.jpg" class="work_item">
								<div class="work_thumb"><img src="images/portfolio/5.jpg" alt="Bible Study" class="img-responsive"></div>
								<div class="work_hover_mask">
									<div class="mask_container text-center"> <h3>Bible Study</h3> <p>Growing in God's word</p></div>
									 
								</div>
							</a> 
						</div>
						<div class="col-lg-4 col-md-6 grid min"> 
							<a href="images/portfolio/4.jpg" class="work_item">
								<div class="work_thumb"><img src="images/portfolio/4.jpg" alt="Choir CUCU" class="img-responsive"></div>
								<div class="work_hover_mask"><div class="mask_container text-center"> <h3>Choir</h3> <p>The choir family</p></div>
									 
								</div>
							</a> 
						</div>
						<div class="col-lg-4 col-md-6 grid min"> 
							<a href="images/portfolio/5.jpg" class="work_item">
								<div class="work_thumb"><img src="images/portfolio/5.jpg" alt="Welfare" class="img-responsive"></div>
								<div class="work_hover_mask">
									<div class="mask_container text-center"> <h3>Welfare</h3> <p>You well being is our happiness</p></div>
									 
								</div>
							</a> 
						</div>
						<div class="col-lg-4 col-md-6 grid other"> 
							<a href="images/portfolio/5.jpg" class="work_item">
								<div class="work_thumb"><img src="images/portfolio/5.jpg" alt="year fellowship CUCU" class="img-responsive"></div>
								<div class="work_hover_mask">
									<div class="mask_container text-center"> <h3>Year Fellowship</h3> <p>Moving as a team and family</p></div>
									 
								</div>
							</a> 
						</div>
						<div class="col-lg-4 col-md-6 grid min"> 
							<a href="images/portfolio/3.jpg" class="work_item">
								<div class="work_thumb"><img src="images/portfolio/3.jpg" alt="IT CUCU" class="img-responsive"></div>
								<div class="work_hover_mask"><div class="mask_container text-center"> <h3>IT</h3> <p>Learn IT Skills for free</p></div>
									 
								</div>
							</a> 
						</div>
						<div class="col-lg-4 col-md-6 grid min"> 
							<a href="images/portfolio/5.jpg" class="work_item">
								<div class="work_thumb"><img src="images/portfolio/5.jpg" alt="Creative ministry CUCU" class="img-responsive"></div>
								<div class="work_hover_mask">
									<div class="mask_container text-center"> <h3>Creative</h3> <p>Talented and serving God</p></div>
									
								</div>
							</a> 
						</div>
						<div class="col-lg-4 col-md-6 grid other"> 
							<a href="images/portfolio/5.jpg" class="work_item">
								<div class="work_thumb"><img src="images/portfolio/5.jpg" alt="Brothers Ministry" class="img-responsive"></div>
								<div class="work_hover_mask">
									<div class="mask_container text-center"> <h3>Brothers</h3> <p>The male gender in the church</p></div>
									 
								</div>
							</a> 
						</div>
						<div class="col-lg-4 col-md-6 grid prog"> 
							<a href="images/portfolio/6.jpg" class="work_item">
								<div class="work_thumb"><img src="images/portfolio/6.jpg" alt="CBR CUCU" class="img-responsive"></div>
								<div class="work_hover_mask"><div class="mask_container text-center"> <h3>CBR</h3> <p>Consistent Bible Reading</p></div>
									 
								</div>
							</a> 
						</div>
						<div class="col-lg-4 col-md-6 grid prog"> 
							<a href="images/portfolio/6.jpg" class="work_item">
								<div class="work_thumb"><img src="images/portfolio/6.jpg" alt="Faith foundation CUCU" class="img-responsive"></div>
								<div class="work_hover_mask"><div class="mask_container text-center"> <h3>Faith Foundation</h3> <p>Grow in your faith</p></div>
									 
								</div>
							</a> 
						</div>
						<div class="col-lg-4 col-md-6 grid min"> 
							<a href="images/portfolio/5.jpg" class="work_item">
								<div class="work_thumb"><img src="images/portfolio/5.jpg" alt="intercessory" class="img-responsive"></div>
								<div class="work_hover_mask">
									<div class="mask_container text-center"> <h3>Intercessory</h3> <p>We are the prayer worriors</p></div>
									 
								</div>
							</a> 
						</div>
						<div class="col-lg-4 col-md-6 grid other"> 
							<a href="images/portfolio/5.jpg" class="work_item">
								<div class="work_thumb"><img src="images/portfolio/5.jpg" alt="Sisters Ministry" class="img-responsive"></div>
								<div class="work_hover_mask">
									<div class="mask_container text-center"> <h3>Sisters</h3> <p>The female gender in the church</p></div>
									 
								</div>
							</a> 
						</div>
						<div class="col-lg-4 col-md-6 grid min"> 
							<a href="images/portfolio/6.jpg" class="work_item">
								<div class="work_thumb"><img src="images/portfolio/6.jpg" alt="Publicity CUCU" class="img-responsive"></div>
								<div class="work_hover_mask"><div class="mask_container text-center"> <h3>Publicity</h3> <p>Learn designing publications for free</p></div>
									 
								</div>
							</a> 
						</div>
						<div class="col-lg-4 col-md-6 grid min"> 
							<a href="images/portfolio/6.jpg" class="work_item">
								<div class="work_thumb"><img src="images/portfolio/6.jpg" alt="Editorial CUCU" class="img-responsive"></div>
								<div class="work_hover_mask"><div class="mask_container text-center"> <h3>Editorial</h3> <p>Editing skills for free</p></div>
									 
								</div>
							</a> 
						</div>
						<div class="col-lg-4 col-md-6 grid min"> 
							<a href="images/portfolio/5.jpg" class="work_item">
								<div class="work_thumb"><img src="images/portfolio/5.jpg" alt="in/outreach CUCU" class="img-responsive"></div>
								<div class="work_hover_mask">
									<div class="mask_container text-center"> <h3>Missions -In/Outreach</h3> <p>One more soul for christ</p></div>
									 
								</div>
							</a> 
						</div>
					</div>
				</div>
			</section>
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Testimonials ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<section id="memberssay" class="testimonial_area section_scroll bg_gray ptb-110" data-scroll-index="4"> 
				<div class="container"> 
					<div class="row"> 
						<div class="col-lg-12"> 
							<div class="section_title text-center"> 
								<h3><span>members say</span></h3> 
								<h2 class="title">Members <span>Testimonials.</span></h2> 
							</div>
						</div>
					</div>
					<div class="row justify-content-center"> 
						<div class="col-lg-8"> 
							<div class="testimonial_carousel owl-carousel"> 
								<div class="single_testimonial text-center"> 
									<img src="" alt=""/> 
									<div class="info"> 
										<p>" The CU is the best place for every christian desiring to grow! "</p>
										<h5> <span class="recomenders-name">Zabron Ole Mwangi,</span> <span class="recomenders-role">Cu Member</span> </h5> 
									</div>
								</div>
								<div class="single_testimonial text-center"> 
									<img src="" alt=""/> 
									<div class="info"> <p>" The CU is the best place for every christian desiring to grow! "</p>
										<h5> <span class="recomenders-name">Deborrah Nasieku,</span> <span class="recomenders-role">Cu Member</span> </h5> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> 
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Blog ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<section id="blog" class="section_scroll blog_area ptb-110" data-scroll-index="5"> 
				<div class="container"> 
					<div class="row"> 
						<div class="col-lg-12"> 
							<div class="section_title text-center"> 
								<h3><span>Blog</span></h3> 
								<h2 class="title">Latest <span>News.</span></h2> 
							</div>
						</div>
					</div>
					<div class="row justify-content-center"> 
						<div class="col-lg-4 col-md-6"> 
							<article class="entry_post text-center"> 
								<figure class="post_thumb"> 
									<a href="#"> <img class="img-responsive" src="images/post/2.jpg" alt="img"> </a> 
									<span class="entry_date">April 4, 2021</span> 
								</figure> 
								<h2 class="entry_title"> <a href="#">Digital Ministry</a> </h2> 
								<div class="entry_content"> 
									<p> The CU activities will all be online as indicated on the memo</p>
								</div>
								<footer class="entry_footer clearfix"> 
									<div class="social_share_area"> 
										<div class="share_btn"> 
											<i class="fa fa-share-alt"></i> 
											<div class="social_share"> 
												<a href="#"><i class="fa fa-facebook"></i></a> 
												<a href="#"><i class="fa fa-twitter"></i></a> 
												<a href="#"><i class="fa fa-google-plus"></i></a> 
											</div>
										</div>
									</div>
								</footer> 
							</article> 
						</div>
					</div>
				</div>
			</section> 
			<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Contact Us ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
			<section class="contact_area section_scroll bg_gray ptb-110" data-scroll-index="6"> 
				<div class="container"> 
					<div class="row"> 
						<div class="col-lg-12"> 
							<div class="section_title text-center"> 
								<h3><span>contact</span></h3> <h2 class="title">Get In <span>Touch.</span></h2> 
							</div>
						</div>
					</div>
					<div class="row"> 
						<div class="col-lg-6"> 
							<div class="single_contact_info"> 
								<span class="fa fa-map-marker"></span> 
								<div class="info"> <h4>Location : </h4> <p>Chuka Uni CU</p></div>
							</div>
							<div class="single_contact_info"> 
								<span class="fa fa-envelope"></span> 
								<div class="info"> <h4>Email : </h4> <p>info@chukaunicu.org</p></div>
							</div>
						</div>
						<div class="col-lg-6">  
							<form class="form" id="contact_form"> 
								<div class="row"> 
									<div class="col-md-6 pt_right"> 
										<div class="form-group"> 
											<input class="form-controller" id="form_name" name="name" placeholder="Name" type="text"> 
										</div>
									</div>
									<div class="col-md-6"> 
										<div class="form-group"> 
											<input class="form-controller" id="form_email" name="email" placeholder="Email" type="email"> 
										</div>
									</div>
									<div class="col-md-12"> 
										<div class="form-group"> 
											<input class="form-controller" id="form_subject" name="subject" placeholder="Subject" type="text"> 
										</div>
									</div>
									<div class="col-md-12"> 
										<div class="form-group"> 
											<textarea class="form-controller" id="form_message" name="message" placeholder="Message"></textarea> 
										</div>
									</div>
									<div class="col-md-12 text-center"> 
										<button type="submit" class="btn btn-default btn-sumbit"><span>Send</span></button> 
									</div>
								</div>
							</form>  
						</div>
					</div>
				</div>
			</section>
		</div>
		
		<div id="section_scroller_button"> 
			<span class="fa fa-angle-down"></span> 
		</div>
		
		<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Site Footer ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~--> 
		
		<footer id="footer" class="footer section_scroll" > 
			<div class="footer-widgets-area ptb-80" > 
				<div class="container"> 
					<div class="row justify-content-center"> 
						<div class="col-lg-7"> 
							<div class="footer_description text-center"> 
								<a class="footer_logo site_logo" href="index.html"><span>Chuka Uni CU</span></a> 
								<p>The love of Jesus abounds in us!</p>
								<ul class="footer_social_share"> 
									<li><a href="https://www.facebook.com/chukaunicu2021/" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://twitter.com/chukaunicu2021" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.instagram.com/chukaunicu2021/" target="_blank"><i class="fa fa-instagram"></i></a></li>
								</ul> 
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom-area text-center"> 
				<div class="container"> 
					<div class="row"> 
						<div class="col-md-12"> 
							<div class="copyright"> 
								<p>&copy; <?php date('Y')?> Copyright <a href="https://www.chukaunicu.org">Chuka Uni CU</a> All rights reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer> 
		
		<script src="js/vendor/jquery-v3.2.1.min.js"></script> 
		<script src="js/bootstrap.min.js"></script> 
		<script src="js/popper.min.js"></script> 
		<script src="js/plugins.js"></script> 
		<script src="js/jquery.appear.js"></script> 
		<script src="js/main.js"></script> 
		<script type="text/javascript">
			particlesJS('particles-js',{"particles":{"number":{"value": 50, "density":{"enable": true, "value_area": 800}}, "color":{"value": "#888"}, "shape":{"type": "circle", "stroke":{"width": 0, "color": "#888"}, "polygon":{"nb_sides": 5}, "image":{"src": "img/github.svg", "width": 100, "height": 100}}, "opacity":{"value": 0.5, "random": false, "anim":{"enable": false, "speed": 3, "opacity_min": 0.1, "sync": false}}, "size":{"value": 5, "random": true, "anim":{"enable": false, "speed": 40, "size_min": 0.1, "sync": false}}, "line_linked":{"enable": true, "distance": 150, "color": "#888", "opacity": 0.4, "width": 1}, "move":{"enable": true, "speed": 6, "direction": "none", "random": false, "straight": false, "out_mode": "out", "attract":{"enable": false, "rotateX": 600, "rotateY": 1200}}}, "interactivity":{"detect_on": "canvas", "events":{"onhover":{"enable": true, "mode": "repulse"}, "onclick":{"enable": true, "mode": "push"}, "resize": true}, "modes":{"grab":{"distance": 400, "line_linked":{"opacity": 1}}, "bubble":{"distance": 400, "size": 40, "duration": 2, "opacity": 8, "speed": 3}, "repulse":{"distance": 200}, "push":{"particles_nb": 4}, "remove":{"particles_nb": 2}}}, "retina_detect": true, "config_demo":{"hide_card": false, "background_color": "#b61924", "background_image": "", "background_position": "50% 50%", "background_repeat": "no-repeat", "background_size": "cover"}});  
		</script>
	</body>
</html>