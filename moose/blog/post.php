<?php include('../perch/runtime.php'); ?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#"><!-- InstanceBegin template="/Templates/arfmain.dwt" codeOutsideHTMLIsLocked="false" -->
<head>


<!-- InstanceBeginEditable name="title" -->
<title><?php perch_blog_post_field(perch_get('s'), 'postTitle'); ?></title>
<link rel="canonical" href="http://www.anchoragerunfest.org/ " />
<!-- InstanceEndEditable -->

<meta charset="utf-8" />
<meta name="viewport" content="initial-scale=1.0, width=device-width" />


<!-- InstanceBeginEditable name="Meta" -->

<?php 
$domain        = 'http://'.$_SERVER["HTTP_HOST"];
$url           = $domain.$_SERVER["REQUEST_URI"];
$sitename      = "Anchorage RunFest";
$twittername   = "@AnchorageRunFest";
$sharing_image = '/images/arf-logo-150h.png';

PerchSystem::set_var('bigwildliferuns.org',$domain);
PerchSystem::set_var('http://www.bigwildliferuns.org',$url);
PerchSystem::set_var('/images/bwlr-logo-500x300.jpg',$sharing_image);
PerchSystem::set_var('BigWildLifeRuns',$twittername);

perch_page_attributes(array(        
  'template' => 'default.html'    
));
?>

<link rel="shortcut icon" href="favicon.png" />
<link rel="apple-touch-icon" href="apple-touch-icon.png"/>
<!-- InstanceEndEditable -->

<!-- Styles -->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="../../styles/style.css">
<link rel="stylesheet" href="../../styles/arf-main8.css">
<link href="../../styles/mobile-nav.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="stylesheet" href="../../styles/main-nav.css" type="text/css" />

<!-- InstanceBeginEditable name="Additional Styles" -->
<link rel="stylesheet" href="../styles/innerpages-new.css">
<link rel="alternate" type="application/rss+xml" title="RSS" href="rss.php" />
<link rel="stylesheet" href="blog.css" type="text/css" />
 
<!-- InstanceEndEditable -->

 
<!-- InstanceBeginEditable name="iescripts" -->
<!--[if lt IE 9]>
<script src="../scripts/respond.min.js" ></script>
<script src="scripts/html5shiv.js"></script>
<![endif]-->
<!-- InstanceEndEditable -->
 
<!-- Scripts -->
<script src="//use.typekit.net/gjq8yfc.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.mobile-nav").toggleClass("open");
			});    
		});
</script>
<!--<script src="../jquery/jquery-1.8.2.min.js"></script>-->
<link href="../../jcountdown/jcountdown.css" rel="stylesheet" type="text/css">
<script src="../../jcountdown/jquery.jcountdown.min.js"></script>
    
<!-- InstanceBeginEditable name="Additional Scripts" -->


<!-- InstanceEndEditable -->

</head>

<body class="splash">

<a id="topofpage"></a>
<div id="header-wrap"> 
<div id="header">
	<div id="arflogo">
	    <div id="logo-wrap"><a href="../../index.html">
        <img src="../../images/ARF-RRCA-combo-220.png" alt="Anchorage RunFest and Road Runners Club of America logos">
        <!--<img src="../images/ARF-logo-120.png" alt="Anchorage RunFest logo">-->
        <!--<img src="../images/ARF-logo-RRCA-120.png" alt="Anchorage RunFest logo">--></a></div>
    </div><!-- end #arflogo -->
   
   
    <div id="register-block">
     	<a href="https://runsignup.com/Race/AK/Anchorage/AnchorageRunFest" target="_blank">REGISTER</a>
       
        <!--<a href="https://www.athlinks.com/event/184527/results/Event/818386/Results" target="_blank">RESULTS</a>-->
     </div><!-- end #register-block -->
     
    <div id="join-constant-contact">
        <a href="http://visitor.r20.constantcontact.com/d.jsp?llr=lol7cocab&amp;p=oi&amp;m=1102131899851" title="Join our mailing list link." target="_blank">JOIN OUR MAILING LIST</a>
    </div><!--end #join-constant-contact-->
   


<div id="navigation">
    <div id="top-nav-wrap">
        <div id="topnav">
            <!-- Start main menu -->
                <ul id="main-nav" class="topmenu">
                	<li class="topfirst"><a href="../../index.html">HOME</a></li>
                    <li class="topmenu"><a href="#" ><span>RACES</span></a>
                        <ul>
                            <li class="subfirst"><a href="../../pages/races/49K.html">49K Ultra</a></li>
                            <li><a href="../../pages/races/marathon.html">Marathon</a></li>
                            <li><a href="../../pages/races/marathon-walk.html">Marathon Walk</a></li>
                            <li><a href="../../pages/races/marathon-relay.html">Marathon Relay</a></li>
                            <li><a href="../../pages/races/half-marathon.html">Half Marathon</a></li>
                            <li><a href="../../pages/races/five-kilometer.html">5K</a></li>
                            <li><a href="../../pages/races/the-anchorage-mile.html">The Anchorage Mile</a></li>
                            <li><a href="../../pages/races/the-military-mile.html">The Military Mile</a></li>
                            <li><a href="../../pages/races/kids-two-kilometer.html">Kids' 2K</a></li>
                            <li><a href="../../pages/races/back-to-back-challenge.html">Back 2 Back Challenge</a></li>
                        </ul>
                    </li>
                    <li class="topmenu"><a href="#" ><span>RUNNER INFO</span></a>
                        <ul>
                            <li class="subfirst"><a href="../../pages/runner-info/register.html">Registration</a></li>
                            <li><a href="../../pages/runner-info/run-for-good.html">Run For Good</a></li>
                            <li><a href="../../pages/runner-info/travel-hotel.html">Travel / Hotel</a></li>
                            <li><a href="../../pages/runner-info/faq.html">FAQs</a></li>
                            <li><a href="../../pages/runner-info/bib-pick-up.html">Bib Pickup</a></li>
                            <li><a href="../../pages/runner-info/race-day.html">Race Day</a></li>
                            <li><a href="../../pages/runner-info/entertainment.html">Course Entertainment</a></li>
                            <li><a href="../../pages/runner-info/spectators.html">Spectators</a></li>
                            <li><a href="../../pages/runner-info/results.html">Results</a></li>
                            <li><a href="../../pages/runner-info/our-running-partners.html">Our Running Partners</a></li>
                            <li><a href="../../pages/runner-info/future-race-dates.html">Future Race Dates</a></li>
                        </ul>
                    </li>
                    <li class="topmenu"><a href="#"><span>EVENTS</span></a>
                        <ul>
                            <li class="subfirst"><a href="../../pages/events/2021-expo.html">Virtual Expo</a></li>
                            <li><a href="../../pages/events/movie.html">Movie</a></li>
                            <li><a href="../../pages/events/family-health-and-safety-day.html">Family Health &amp; Safety Day</a></li>                    
                            <li><a href="../../pages/events/pasta-feed.html">Pasta Feed</a></li>
                            <li><a href="../../pages/events/race-week-schedule.html">Race Week Schedule</a></li>
                        </ul>
                    </li>
                    <li class="topmenu"><a href="#" ><span>NEWS ROOM</span></a>
                    <ul>
                        <li class="subfirst"><a href="../../blog/index.php">News</a></li>
                        <li><a href="../../pages/news-room/vip-guests.html">VIP Guests</a></li>
                        <li><a href="../../pages/news-room/media.html">Media</a></li>
                    </ul></li>
                    <li class="topmenu"><a href="#" ><span>SPONSORS</span></a>
                    <ul>
                        <li class="subfirst"><a href="../../pages/sponsors/race-and-event-sponsors.html">Race &amp; Event Sponsors</a></li>
                        <li><a href="../../pages/sponsors/all-sponsors.html">All Sponsors</a></li>
                        <li><a href="../../pages/sponsors/become-a-sponsor.html">Become a Sponsor</a></li>
                    </ul></li>
                    <li class="toplast"><a href="#" ><span>ABOUT</span></a>
                    <ul>
                        <li class="subfirst"><a href="../../pages/about/race-history.html">Race History</a></li>
                        <li><a href="../../pages/about/race-director-message.html">Race Director's Message</a></li>
                        <li><a href="../../pages/about/race-committee.html">Race Committee</a></li>
                        <li><a href="../../pages/about/arc-scholarships.html">ARC Scholarships</a></li>
                    </ul></li>
                    <li class="topmenu"><a href="../../pages/volunteer.html" >VOLUNTEER</a></li>
                    
                </ul>
                <!-- End Main menu --> 
           
         </div><!-- end #topnav -->
    </div><!-- end #top-nav-wrap -->
    <div class="endmenu"></div>
    
</div><!--end #navigation -->
    
</div><!-- end #header -->
</div><!-- end #header-wrap-->   
   
<div id="race-date">AUGUST 21 &amp; 22, 2021</div><!-- end race-date -->

 
    <!-- code below for mobile navigtion only -->
    
    <div id="mobilenavigation">
        <button class="nav-button">Toggle Navigation</button>
        <ul class="mobile-nav">
             <li><a href="../../index.html">HOME</a></li>
                
              	<li class="parent"><a href="">RACES</a>
					<ul>
                        <li><a href="../../pages/races/49K.html">49K Ultra</a></li>
                        <li><a href="../../pages/races/marathon.html">Marathon</a></li>
                        <li><a href="../../pages/races/marathon-walk.html">Marathon Walk</a></li>
                        <li><a href="../../pages/races/marathon-relay.html">Marathon Relay</a></li>
                        <li><a href="../../pages/races/half-marathon.html">Half Marathon</a></li>
                        <li><a href="../../pages/races/five-kilometer.html">5K</a></li>
                        <li><a href="../../pages/races/the-anchorage-mile.html">The Anchorage Mile</a></li>
                        <li><a href="../../pages/races/the-military-mile.html">The Military Mile</a></li>
                        <li><a href="../../pages/races/kids-two-kilometer.html">Kids' 2K</a></li>
                        <li><a href="../../pages/races/back-to-back-challenge.html">Back 2 Back Challenge</a></li>
                    </ul>
                </li>
                
                <li class="parent"><a href="">RUNNER INFO</a>
					<ul>
                        <li><a href="../../pages/runner-info/register.html">Registration</a></li>
                        <li><a href="../../pages/runner-info/run-for-good.html">Run For Good</a></li>
                        <li><a href="../../pages/runner-info/travel-hotel.html">Travel / Hotel</a></li>
                        <li><a href="../../pages/runner-info/faq.html">FAQs</a></li>
                        <li><a href="../../pages/runner-info/bib-pick-up.html">Bib Pickup</a></li>
                        <li><a href="../../pages/runner-info/race-day.html">Race Day</a></li>
                        <li><a href="../../pages/runner-info/entertainment.html">Course Entertainment</a></li>
                        <li><a href="../../pages/runner-info/spectators.html">Spectators</a></li>
                        <li><a href="../../pages/runner-info/results.html">Results</a></li>
                        <li><a href="../../pages/runner-info/our-running-partners.html">Our Running Partners</a></li>
                        <li><a href="../../pages/runner-info/future-race-dates.html">Future Race Dates</a></li>
                    </ul>
                </li>
                
                <li class="parent"><a href="">EVENTS</a>
					<ul>
                        <li><a href="../../pages/events/movie.html">Movie</a></li>
                        <li><a href="../../pages/events/family-health-and-safety-day.html">Family Health &amp; Safety Day</a></li>
                        <li><a href="../../pages/events/pasta-feed.html">Pasta Feed</a></li>
                        <li><a href="../../pages/events/race-week-schedule.html">Race Week Schedule</a></li>
                    </ul>
                </li>
                
                <li class="parent"><a href="">NEWS</a>
                	<ul>
                    	<li><a href="../../blog/index.php">News</a></li>
                        <li><a href="../../pages/news-room/vip-guests.html">VIP Guests</a></li>
                        <li><a href="../../pages/news-room/media.html">Media</a></li>
                    </ul>
                
                <li class="parent"><a href="">SPONSORS</a>
                	<ul>
                		<li><a href="../../pages/sponsors/race-and-event-sponsors.html">Race &amp; Event Sponsors</a></li>
                		<li><a href="../../pages/sponsors/all-sponsors.html">All Sponsors</a></li>
                   		<li><a href="../../pages/sponsors/become-a-sponsor.html">Become A Sponsor</a></li>
                    </ul>
                </li>
                
                <li class="parent"><a href="">ABOUT</a>
                	<ul>
                    	<li><a href="../../pages/about/race-history.html">Race History</a></li>
                        <li><a href="../../pages/about/race-director-message.html">Race Director's Message</a></li>
                        <li><a href="../../pages/about/race-committee.html">Race Committee</a></li>
                        <li><a href="../../pages/about/arc-scholarships.html">ARC Scholarships</a></li>
                    </ul>
               </li>
                
                <li><a href="../../pages/volunteer.html">VOLUNTEER</a></li>
                  			
         </ul>
        
     </div> <!-- end #mobilenav -->
<!-- end of code for mobile navigation only -->

<div id="social-block-wrap">
    <div id="social-block">
   
        <div class="social-link"><a href="https://www.facebook.com/AnchorageRunFest/?fref=ts" target="_blank"><img src="../../images/social-media/facebook-white40.png"  alt="FaceBook link"></a></div>
        <div class="social-link"><a href="https://twitter.com/ANCRunFest" target="_blank"><img src="../../images/social-media/twitter-white40.png"  alt="Twitter link"></a></div>
        <div class="social-link"><a href="https://instagram.com/anchoragerunfest/" target="_blank"><img src="../../images/social-media/instagram-white40.png" alt="Instagram link"></a> </div>
        <div class="social-link"><a href="http://www.youtube.com/user/bigwildliferuns" target="_blank"><img src="../../images/social-media/youtube-white40.png" alt="YouTube link"></a></div>
        <div class="social-link"><a href="mailto:sharron@ancrun.org?subject=Anchorage%20RunFest" title="Contact us" target="_blank"><img src="../../images/social-media/email40.png" alt="link to email"></a></div>
        
    </div><!-- end #social-block -->
    </div><!-- end #social-block-wrap -->


<!-- InstanceBeginEditable name="bodywidth" -->
        
        
        
    <!-- InstanceEndEditable -->
<div id="mainwrap-wrap">  
        
    <div id="mainwrap">
        <!-- InstanceBeginEditable name="content" -->
        
  <div id="contentwrap">      

    <div id="leftcolumn">
            
       <div class="post">
		    	<?php perch_blog_post(perch_get('s')); ?>

		    	<?php perch_blog_author_for_post(perch_get('s')); ?>
		    	
		    	<div class="meta">
		            <div class="cats">
		                <?php perch_blog_post_categories(perch_get('s')); ?>
		            </div>
		            <div class="tags">
		                <?php perch_blog_post_tags(perch_get('s')); ?>
		            </div>
		        </div>
		    	
		    	<?php perch_blog_post_comments(perch_get('s')); ?>
		    	
		    	<?php perch_blog_post_comment_form(perch_get('s')); ?>
                
                <br>
                <small>Copyright &copy; <?php echo date('Y'); ?></small>
		        
		    </div><!-- end .post -->      
      	
     </div><!-- end #leftcolumn -->      
       
     <div id="sidelinks">
        	<p class="pagelinkheader">PAST ARTICLES</p>
		    
		   <!-- The following functions are different ways to display archives. You can use any or all of these. 
		    
		    All of these functions can take a parameter of a template to overwrite the default template, for example:
		    
		    perch_blog_categories('my_template.html');
		    
		    --> 
		    <!--  By category listing -->
		    <?php perch_blog_categories(); ?>
		    <!--  By tag -->
		    <?php perch_blog_tags(); ?>
		    <!--  By year -->
		    <?php perch_blog_date_archive_years(); ?>
		    <!--  By year and then month - can take parameters for two templates. The first displays the years and the second the months see the default templates for examples -->
		    <?php perch_blog_date_archive_months(); ?>
    	
	</div><!-- end #sidelinks -->
        

    
    <br />
	<?php perch_get_javascript(); ?>
   
        
 </div><!-- end #contentwrap-->       
               
            
            
            
<!-- InstanceEndEditable -->
        
        
        
    </div><!-- end#mainwrap -->
        
</div><!-- end #mainwrap-wrap -->
<div id="footerwrap">


	<div id="top-button-wrap-wrap">
	<div id="top-button-wrap">
         <div id="top-button"><a href="#topofpage"><img src="../../images/top.png" alt="link to top of page"></a></div>  
    </div><!-- end #top-wrap-->
</div><!-- end #top-wrap-wrap-->
	
	<div id="footer">
    
    <div id="arf-rep">
<img src="../../images/arf-runner.png" alt="arf logo runner">well organized<img src="../../images/arf-runner.png" alt="arf logo runner">friendly and supportive volunteers<img src="../../images/arf-runner.png" alt="arf logo runner">scenic courses<img src="../../images/arf-runner.png" alt="arf logo runner">events for the entire family<img src="../../images/arf-runner.png" alt="arf logo runner">
	</div><!-- end #arf-rep -->
   
 
                
       <div id="sponsorlogos">
       
       			<div class="logo-link">
             	<a href="http://www.unitedpt.com/" target="_blank"><img src="../../images/sponsor-logos-100x100/UPT-round-white-100x100.png" alt="United Physical Therapy logo"></a></div>
                
                <div class="logo-link"> 
                <a href="http://www.humpysalaska.com" target="_blank"><img src="../../images/sponsor-logos-100x100/humpys-100x100.png" alt="Humpy's Great Alaskan Alehouse logo"></a></div>
                
             	<div class="logo-link">
             	<a href="http://www.skinnyraven.com/" target="_blank"><img src="../../images/sponsor-logos-100x100/skinny-raven-100x100.png" alt="Skinny Rvaen logo" /></a></div>
                
               <!-- <div class="logo-link">
             	<a href="http://www.spenardroadhouse.com" target="_blank"><img src="../images/sponsor-logos-100x100/spenard-roadhouse-white-100x100.png" alt="Spenard Roadhouse logo" /></a></div>-->
                
               <div class="logo-link">
             	<a href="http://www.lynden.com" target="_blank"><img src="../../images/sponsor-logos-100x100/Lynden-100x100.png" alt="Lynden logo"></a>
                </div>
                
                <div class="logo-link">
            	<a href="http://alaska.providence.org/locations/pamc/services/childrens/Pages/default.aspx" target="_blank"><img src="../../images/sponsor-logos-100x100/CHAP-100x100.png" alt="The Children's Hospital at Providence logo" /></a></div>
                
    
        </div><!-- end #sponsorlogos-->
                
                
                
                <div id="orginfo">© 2011-2016 ANCHORAGE RUNNING CLUB. All rights reserved.  PO Box 243362, Anchorage, AK 99524  | <a href="../../pages/sitemap.html">sitemap</a> | <a href="../../pages/credits.html">site credits</a> | <a href="mailto:melanie@ancrun.org?subject=Anchorage RunFest" title="Contact us" target="_blank">contact us</a> | <a href="http://visitor.r20.constantcontact.com/d.jsp?llr=lol7cocab&amp;p=oi&amp;m=1102131899851" title="Join our mailing list link." target="_blank">join our mailing list</a>
                </div><!-- end #orginfo-->
                
	</div><!-- end #footer -->
            
</div><!-- end #footerwrap -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>

<script type="text/javascript" src="../../scripts/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript" src="../../scripts/jquery.easing-1.4.pack.js"></script>
<script src="../../scripts/jquery.superslides.min.js"></script>
<script src="https://unpkg.com/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
<script src="../../scripts/mouseover.js"></script>

</body>
<!-- InstanceEnd --></html>