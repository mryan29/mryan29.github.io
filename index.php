<?php if($_POST["contactMessage"]) { mail("mryan29@nd.edu", $_POST["contactSubject"], $_POST["contactMessage"], "From: "$_POST["contactName"]" at "$_POST["contactEmail"]); } ?>

<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="no-js ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Meg Ryan</title>
	<meta name="description" content="">
	<meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="css/default.css">
	<link rel="stylesheet" href="css/layout.css">
   <link rel="stylesheet" href="css/media-queries.css">
   <link rel="stylesheet" href="css/magnific-popup.css">

   <!-- Script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="MR.png" >

</head>

<body>

   <!-- Header
   ================================================== -->
   <header id="home">

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>
	    <li><a class="smoothscroll" href="#resume">Resume</a></li>
            <li><a class="smoothscroll" href="#portfolio">Works</a></li>
            <li><a class="smoothscroll" href="#testimonials">Testimonials</a></li>
            <li><a class="smoothscroll" href="#contact">Contact</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline">Meg Ryan</h1>
            <h3>21 year old <span>student</span>, studying <span>Computer Science</span> and <span>Economics</span> 
		    <br>at the University of Notre Dame and Saint Mary's College.
		<br><a class="smoothscroll" href="#about"> Start scrolling</a> to learn more.</h3>
            <hr />
            <ul class="social">
               <li><a target="_blank" href="https://www.linkedin.com/in/meaghaneryan/"><i class="fa fa-linkedin"></i></a></li>
               <li><a target="_blank" href="https://github.com/mryan29"><i class="fa fa-github"></i></a></li>
            </ul>
         </div>
      </div>

      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>

   </header> <!-- Header End -->


   <!-- About Section
   ================================================== -->
   <section id="about">

      <div class="row">

         <div class="three columns">

            <img class="profile-pic"  src="images/me.jpg.jpg" alt="" />

         </div>

         <div class="nine columns main-col">

            <h2>About Me</h2>

            <p>
			Enrolled in the five-year dual degree engineering program, 
			earning a bachelor’s degree in Economics with a minor in Mathematics from Saint Mary’s in four years,
			and a second bachelor’s degree in Computer Science from Notre Dame following my fifth year of study.
            </p>

            <div class="row">

               <div class="columns contact-details">

                  <h2>Contact Details</h2>
                  <p class="address">
						   <span>Meg Ryan</span><br>
						   <span>11014 Ashton Lane<br>
						         Orland Park, IL 60467 US
                     </span><br>
						   <span>(708) 308-2067</span><br>
                     <span>mryan29@nd.edu</span>
					   </p>

               </div>

               <div class="columns download">
                  <p>
                     <a href="MegRyanFall2017.pdf" download="MegRyanFall2017.pdf" class="button"><i class="fa fa-download"></i>Download Resume</a>
                  </p>
               </div>

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>

   </section> <!-- About Section End-->


   <!-- Resume Section
   ================================================== -->
   <section id="resume">

      <!-- Education -->
      <div class="row education">

         <div class="three columns header-col">
            <h1><span>Education</span></h1>
         </div>

         <div class="nine columns main-col">

            <div class="row item">

               <div class="twelve columns">

                  <h3>University of Notre Dame</h3>
                  <p class="info">B.S. Degree in Computer Science <span>&bull;</span> <em class="date">Expected May 2019</em></p>

                  <p>
                  Society of Women Engineers
                  </p>

               </div> <!-- twelve columns end -->

            </div> <!-- item end -->

            <div class="row item">

               <div class="twelve columns">

                  <h3>Saint Mary's College</h3>
                  <p class="info">B.S. Degree in Economics, Minor in Mathematics <span>&bull;</span> <em class="date">Expected May 2018</em></p>

               </div> <!-- end 12 columns -->

            </div> <!-- item end -->

         </div> <!-- main-col end -->

      </div> <!-- End Education -->


      <!-- Work -->
      <div class="row work">

         <div class="three columns header-col">
            <h1><span>Experience</span></h1>
         </div> <!-- End three columns header-col -->

         <div class="nine columns main-col">

		 <div class="row item">
			 <div class="twelve columns">
				 <h3>Hybrid Cloud Intern</h3>
				 <p class="info">IBM <span>&bull;</span> Research Triangle Park, NC <span>&bull;</span> <em class="date"> 2017 </em></p>
				 <p>Worked alongside the L2 TADDM customer experience and support team to assist customers in performing problem determination on IBM Cloud Software. 
					 Combined problem solving and communication skills to carry out debugging and analysis via the telephone as well as electronically. 
					 Interpreted complex software problems spanning across multiple clients and servers. 
					 Other responsibilities included developing a searchable server, testing and checking in scripts, and certifying DB2 version 11.0.1 for TADDM.<p>
				 <p>-</p>
			 </div> <!-- twelve columns end -->
		 </div> <!-- row item end -->

            <div class="row item">

               <div class="twelve columns">

                   <h3>Computer Science Instructor</h3>
                  <p class="info">Girls Who Code<span>&bull;</span> Chicago, IL <span>&bull;</span> <em class="date"> 2016 </em></p>
				<p>Assisted in the instruction of a 7-week summer program designed to educate, inspire, and equip high school women with the skills and resources to pursue academics and careers in the technology and engineering sectors. 
					Identified areas of weakness and provided one-on-one support to the students. 
					Acted as a GWC ambassador, in addition to serving as a mentor and leader to the students. 
					Curriculum included Scratch, Python, C++, HTML/CSS, and JavaScript.</p>
                  <p>-</p>

               </div> <!-- twelve columns end -->

            </div> <!-- row item end -->
		<div class="row item">
			<div class="twelve columns">
				<h3>Predictive Data Model</h3>
				<p class="info">University of Notre Dame, IN <span>&bull;</span> <em class="date">2016</em></p>
				<p>Developed a graphical user interface to model population growth on the moon, while determining the resources needed to sustain this population and the overall cost. 
					Used MATLAB software to model differential equations for population growth that took into account a risk value, ratios of resources, and size of initial population. 
					Final product evaluated these inputs to approximate the time until the population would become self-sustainable, if at all, and the overall cost of the mission.</p>
				<p>-</p>
			</div> <!-- twelve columns end -->
		 </div> <!-- row item end -->
		 <div class="row item">
			 <div class="twelve columns">
				 <h3>Interactive Robotic Prototype</h3>
				 <p class="info">University of Notre Dame, IN <span>&bull;</span> <em class="data">2015</em></p>
				 <p>Created a partially autonomous robotic lion prototype for a fictional toy company. 
					 Developed computer programs to be executed by the pet as a finite state machine and downloaded using the NXT and associated LabView software. 
					 Utilized ultrasonic, touch, light, and sound sensors to incorporate features such as movement with object avoidance and respond to environmental stimuli in a way that resembled a lion.</p>
			 </div> <!-- twelve columns end -->
			 <p>-</p>
		 </div> <!-- row item end -->
			 

         </div> <!-- End nine columns main-col end -->

      </div> <!-- End Work -->


      <!-- Skills -->
      <div class="row skill">

         <div class="three columns header-col">
		 	<h1><span>Languages</span></h1>
         </div>
	
		<br>
		<p>-</p>

        <!-- <div class="nine columns main-col"> -->
		<div class="row item">
			<div class="twelve columns">
				<!--<h3><span>C++<br>C<br>Javascript<br>Python<br>Bourne Shell</span></h3>-->
				<h3>C++</h3>
				<h3>C</h3>
			</div>
		</div>
            

		
<!--
		<ul class="skills">
			<li><span class="bar-expand python"></span><em>Python</em></li>
                	<li><span class="bar-expand html"></span><em>HTML</em></li>
			<li><span class="bar-expand css"></span><em>CSS</em></li>
			<li><span class="bar-expand javascript"></span><em>JavaScript</em></li>
			<li><span class="bar-expand cplusplus"></span><em>C++</em></li>
                  	<li><span class="bar-expand swift"></span><em>Swift</em></li>
		</ul>
-->

		</div> <!-- main-col end -->

      </div> <!-- End skills -->

   </section> <!-- Resume Section End-->


   <!-- Portfolio Section
   ================================================== -->
   <section id="portfolio">

      <div class="row" align="center">

         <div class="twelve columns collapsed">

            <h1>Check Out Some of My Works.</h1>

            <!-- portfolio-wrapper -->
            <!-- <div align="center" id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf"> -->
			<div align="center" id="portfolio-wrapper" class="bgrid-thirds s-bgrid-thirds cf">
		    <div class="columns portfolio-item">
			     <div class="item-wrap">
				     <a href="#modal-01" title="Searchable Server">
					     <img alt="Searchable Server" src="images/SearchEngineScreenshot.png">
					     <div class="overlay">
						     <div class="portfolio-item-meta">
							     <h5>Searchable Server</h5>
							     <p>Developed an indexed searchable server for IBM TADDM L2 Support with a user-friendly web interface. Indexed server files and searched a given directory for files matching user provided criteria, included filename patterns and filetypes. Returned list of corresponding files in order of relevance along with their location and the option to open in a new window or download.</p>
						     </div>
					     </div>
					     <div class="link-icon><i class="icon-plus"></i></div>
					</a>
				</div>
		</div> <!-- item end -->
		    
		<div class="columns portfolio-item">
                	<div class="item-wrap">

                	<a href="#modal-02" title="Predictive Data Model">
                        <img alt="Predictive Data Model" src="images/portfolio/moon.png">
                        	<div class="overlay">
                          		<div class="portfolio-item-meta">
          					<h5>Moon Project</h5>
                              			<p>Developed a graphical user interface to model population growth on the moon, while determining the resources needed to sustain this population and the overall cost. Used MATLAB software to model differential equations for population growth that took into account a risk value, ratios of resources, and size of initial population. Final product evaluated these inputs to approximate the time until the population would become self-sustainable, if at all, and the overall cost of the mission.</p>
          				</div>
                        	</div>
                        	<div class="link-icon"><i class="icon-plus"></i></div>
                     	</a>

                  	</div>
          	</div> <!-- item end -->
		
		<div class="columns portfolio-item">
			<div class="item-wrap">
			<a href="#modal-03" title="Legend of Zelda Remake">
			<img alt="Legend of Zelda Remake" src="images/hud.png">
				<div class="overlay">
					<div class="portfolio-item-meta">
						<h5>Legend of Zelda Remake</h5>
						<p>This program is a simple C++ implementation of Nintendo’s classic The Legend of Zelda.  
									For those less common with Zelda, the game revolves around its protagonist, Link, as he navigates the world and encounters multiple enemies with the ultimate goal of rescuing Princess Zelda. 
									While size of the world has been made significantly smaller due to the time restraint of the project, the program includes many of the original game’s features.</p>
					</div>
				</div>
				<div class="link-icon"><i class="icon-plus"></i></div>
			</a>
			</div>
		</div> <!-- item end -->

			
            </div> <!-- portfolio-wrapper end -->

         </div> <!-- twelve columns end -->


         <!-- Modal Popup
	      --------------------------------------------------------------- -->

         <div id="modal-01" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/SearchEngineScreenshot.png" alt="" />

		      <div class="description-box">
			      <h4>Searchable Server</h4>
			      <p>Developed an indexed searchable server for IBM TADDM L2 Support with a user-friendly web interface. Indexed server files and searched a given directory for files matching user provided criteria, included filename patterns and filetypes. Returned list of corresponding files in order of relevance along with their location and the option to open in a new window or download.</p>
               <span class="categories"><i class="fa fa-tag"></i>Perl, File Indexing and Searching, Web Development, CGI</span>
		      </div>
<!--
            <div class="link-box">
               <a href="http://www.behance.net">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div>
-->
	      </div><!-- modal-01 End -->

         <div id="modal-02" class="popup-modal mfp-hide">

		      <img class="scale-with-grid" src="images/portfolio/moon.png" alt="" />

		      <div class="description-box">
			      <h4>Predictive Data Model</h4>
			      <p>Developed a graphical user interface to model population growth on the moon, while determining the resources needed to sustain this population and the overall cost. Used MATLAB software to model differential equations for population growth that took into account a risk value, ratios of resources, and size of initial population. Final product evaluated these inputs to approximate the time until the population would become self-sustainable, if at all, and the overall cost of the mission.</p>
               <span class="categories"><i class="fa fa-tag"></i>MATLAB, Data Modeling and Analytics, User GUI</span>
		      </div>

           <!--  <div class="link-box">
               <a href="http://www.behance.net">Details</a>
		         <a class="popup-modal-dismiss">Close</a>
            </div> -->

	      </div><!-- modal-02 End -->

	<div id="modal-03" class="popup-modal mfp-hide">
		<img class="scale-with-grid" src="images/hud.png" alt="Legend of Zelda Remake" />
		<div class="description-box">
			<h4>Predictive Data Model</h4>
			<p>This program is a simple C++ implementation of Nintendo’s classic The Legend of Zelda.  For those less common with Zelda, the game revolves around its protagonist, Link, as he navigates the world and encounters multiple enemies with the ultimate goal of rescuing Princess Zelda. While size of the world has been made significantly smaller due to the time restraint of the project, the program includes many of the original game’s features.</p>
			<span class="categories"><i class="fa fa-tag"></i>C++, Game Development, SDL2</span>
		</div>
		<div class="link-box">	
			<a target="_blank" href="https://gitlab.com/anemecek/DataStructuresFinalProject">Details</a>	
			<a class="popup-modal-dismiss">Close</a>
		</div>					      
	</div><!-- modal-03 End -->	
						      
      </div> <!-- row End -->

   </section> <!-- Portfolio Section End-->




   <!-- Contact Section
   ================================================== -->
   <section id="contact">

         <div class="row section-head">

            <div class="two columns header-col">
             <!--  <h1>Get In Touch.</h1> -->
          </div> <!-- end two cols header-col -->

            <div class="ten columns">

					<h1>Get In Touch.</h1>
                  <p class="lead">Please fill out the form below.
                  </p>

            </div> <!-- end ten columns -->

        </div> <!-- end row section head -->

         <div class="row">

            <div class="eight columns">

               <!-- form -->
               <!-- <form action="index.php" method="post" id="contactForm" name="contactForm"> -->
               <form action="mailto:mryan29@nd.edu" method="post" enctype="text/plain">
					<fieldset>

                  <div> <!-- begin contactname -->
						   <label for="contactName">Name <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactName" name="contactName">
                  </div> <!-- end contactname -->

                  <div> <!-- begin contactemail -->
						   <label for="contactEmail">Email <span class="required">*</span></label>
						   <input type="text" value="" size="35" id="contactEmail" name="contactEmail">
                  </div> <!-- end contactemail -->

                  <div> <!-- begin contactsubject -->
						   <label for="contactSubject">Subject</label>
						   <input type="text" value="" size="35" id="contactSubject" name="contactSubject">
                  </div> <!-- end contactsubject -->

                  <div> <!-- begin contactmessage -->
                     <label for="contactMessage">Message <span class="required">*</span></label>
                     <textarea cols="50" rows="15" id="contactMessage" name="contactMessage"></textarea>
                  </div> <!-- end contactmessage -->

                  <div> <!-- begin contactsubmit -->
                     <button class="submit">Submit</button>
                     <span id="image-loader">
                        <img alt="" src="images/loader.gif">
                     </span>
                  </div> <!-- end contact submit -->

					</fieldset>
				   </form> <!-- Form End -->

               <!-- contact-warning -->
               <div id="message-warning"> Error boy</div>
               <!-- contact-success -->
				   <div id="message-success">
                  <i class="fa fa-check"></i>Your message was sent, thank you!<br>
				   </div>

            </div> <!-- end eight columns -->


            <aside class="four columns footer-widgets">

               <div class="widget widget_contact">

					   <h4>Address and Phone</h4>
					   <p class="address">
						   Meg Ryan<br>
						   11014 Ashton Lane<br>
						   Orland Park, IL 60467 US<br>
						   <span>(708) 308-2067</span>
					   </p>

				   </div> <!-- end widget contact -->


            </aside>

      </div> <!-- end row -->

   </section> <!-- Contact Section End-->


   <!-- footer
   ================================================== -->
   <footer>

      <div class="row">

         <div class="twelve columns">

            <ul class="social-links">
               <li><a target="_blank" href="https://linkedin.com/in/meaghaneryan/"><i class="fa fa-linkedin"></i></a></li>
               <li><a target="_blank" href="https://github.com/mryan29"><i class="fa fa-github"></i></a></li>
            </ul>

            <ul class="copyright">
               <li>&copy; Copyright 2014 CeeVee</li>
               <li>Design by <a title="Styleshout" href="http://www.styleshout.com/">Styleshout</a></li>   
            </ul>

         </div>

         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>

      </div>

   </footer> <!-- Footer End-->

   <!-- Java Script
   ================================================== -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>

   <script src="js/jquery.flexslider.js"></script>
   <script src="js/waypoints.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/magnific-popup.js"></script>
   <script src="js/init.js"></script>

</body>

</html>
