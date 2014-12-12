<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
$status				= 1; // 1 if available - 0 if not available
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0, width=320" />
<title>JOHN DOE</title>

<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/iphone.css" type="text/css" media="screen" />

</head>

<body>
<!-- BEGIN WRAPPER -->
<div id="wrapper">

	<!-- BEGIN CONTAINER -->
    <div id="container">
    
    	<!-- BEGIN HEADER -->
        <div id="header">
            <div id="photo"><a class="cbox" href="img/photo.jpg"><img src="img.php?src=img/photo.jpg&amp;w=70&amp;h=94&amp;zc=1" width="70" height="94" border="0" alt="Click to enlarge" /></a></div>
            
            <!-- BEGIN RIGHT HEADER -->
            <div id="right_header">
                <h1>John Doe</h1>
                <h3>web designer &amp; developer</h3>
            </div><!-- end #right_header div -->
            
            <div class="separator"></div>
            
            <!-- BEGIN INFO LIST -->
            <ul class="info">
                     <li class="info">28 years, Married</li>
                     <li class="address">152 West 51st Street, Manhattan (New York), US</li>
                     <li class="phone">212-123-4567</li>
                     <li class="email"><a href="mailto:john.doe@gmail.com">john.doe@gmail.com</a></li>
                     <li class="website"><a href="#">www.johndoe.net</a></li>
                    <?php
                    if($status == 1) {
                        // message to display if available
                        echo '<li class="status_available">Available for hire!</li>';
                    } else if($status == 0) {
                        // message to display if you're not available
                        echo '<li class="status_notavailable">Not available right now!</li>';
                    }
                    ?>
                </ul><!-- end .info list -->
                
        </div><!-- end #header div -->
        
        <!-- BEGIN SOCIAL ICONS -->
        <ul class="social_panel">
				<li><a href="#" title="Facebook Profile" class="blue-darker"><img src="img/facebook.png" width="32" height="32" alt="Facebook Profile" /></a></li>
				<li><a href="#" title="Twitter Profile" class="blue"><img src="img/twitter.png" width="32" height="32" alt="Twitter Profile" /></a></li>
				<li><a href="#" title="Flickr Profile" class="white"><img src="img/flickr.png" width="32" height="32" alt="Flickr Profile" /></a></li>
				<li><a href="#" title="My Yahoo! ID" class="purple"><img src="img/yahoo.png" width="32" height="32" alt="My Yahoo! ID" /></a></li>
				<li class="last"><a href="#" title="Linked In Profile" class="blue-dark"><img src="img/linkedin.png" width="32" height="32" alt="Linked In Profile" /></a></li>
		</ul><!-- end .social_panel list -->
       
		<!-- BEGIN SKILLS -->
        <div id="skills">
            <h2>Techical Skills</h2>
            <ul>
                <li>HTML &amp; CSS <span>advanced, 8 years</span></li>
                <li>Photoshop <span>advanced, 5 years</span></li>
                <li>Corel Draw <span>intermediate, 3 years</span></li>
                <li>PHP <span>intermediate, 4 years</span></li>
                <li>Fireworks <span>advanced, 6 years</span></li>
                <li>Illustrator <span>intermediate, 2 years</span></li>
                <li>Javascript <span>intermediate, 3 years</span></li>
                <li>Cinema 4D <span>beginner, 1 year</span></li>
                <li>SEO <span>beginner, 1 year</span></li>
            </ul>
        </div><!-- end #skills div -->
        
        <div class="separator"></div>
        
        <!-- BEGIN WORK EXPERIENCE -->
        <div id="work">
            <h2>Work Experience</h2>
            <div class="item">
                <h4>Senior web developer</h4>
                <h5>The best agency, New York / Full-time</h5>
                <span>June 2008 - present</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non pharetra felis. In eget velit a enim mattis faucibus sed quis erat. Duis sagittis velit libero, sollicitudin cursus ipsum. Ut eleifend tempor ipsum vel viverra. Quisque sit amet dui ac neque rhoncus tincidunt a a massa.
                </p>
            </div> <!-- end item -->
            <div class="item">
                <h4>Junior web developer</h4>
                <h5>Design agency, New York / Full-time</h5>
                <span>Apr 2007 - May 2008</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non pharetra felis. In eget velit a enim mattis faucibus sed quis erat. Duis sagittis velit libero, sollicitudin cursus ipsum. Ut eleifend tempor ipsum vel viverra. Quisque sit amet dui ac neque rhoncus tincidunt a a massa.
                </p>
            </div> <!-- end item -->
            
        </div><!-- END WORK EXPERIENCE -->
        
         <div class="separator"></div>
         
         <!-- BEGIN EDUCATION -->
         <div id="education">
            <h2>Education</h2>
            <div class="item">
                <h4>University of Arts</h4>
                <h5>Art specialist</h5>
                <span>2005 - 2008</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non pharetra felis. In eget velit a enim mattis faucibus sed quis erat. Duis sagittis velit libero, sollicitudin cursus ipsum. Ut eleifend tempor ipsum vel viverra. Quisque sit amet dui ac neque rhoncus tincidunt a a massa.
                </p>
            </div> <!-- end item -->
            <div class="item">
                <h4>University of design</h4>
                <h5>Master designer</h5>
                <span>2002 - 2005</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non pharetra felis. In eget velit a enim mattis faucibus sed quis erat. Duis sagittis velit libero, sollicitudin cursus ipsum. Ut eleifend tempor ipsum vel viverra. Quisque sit amet dui ac neque rhoncus tincidunt a a massa.
                </p>
            </div> <!-- end item -->
            
        </div><!-- END EDUCATION -->
        
        <div class="separator"></div>
        
        <!-- BEGIN MISC INFO -->
        <div id="misc">
            <h2>Misc. Info</h2>
            <ul>
                <li><strong>Languages:</strong> english, french</li>
                <li>Lorem ipsum dolor sit amet, consectetur.</li>
                <li>Lorem ipsum dolor sit amet, consectetur.</li>
                <li>Lorem ipsum dolor sit amet, consectetur.</li>
                <li>Lorem ipsum dolor sit amet, consectetur.</li>
           </ul>
        </div><!-- end misc -->
        
        <div class="separator"></div>
        
        <!-- BEGIN PORTFOLIO -->
        <ul id="portfolio">
        <li>
        	<h4>Websites</h4>
        	<ul>
            	<li><a href="img/wbs.jpg" class="cbox" rel="websites"><img src="img.php?src=img/wbs.jpg&amp;w=79&amp;h=79&amp;zc=1" border="0" alt="Websites example"/></a></li>
                <li><a href="img/wbs.jpg" class="cbox" rel="websites"><img src="img.php?src=img/wbs.jpg&amp;w=79&amp;h=79&amp;zc=1" border="0" alt="Websites example" /></a></li>
                <li class="last"><a href="img/wbs.jpg" class="cbox" rel="websites"><img src="img.php?src=img/wbs.jpg&amp;w=79&amp;h=79&amp;zc=1" border="0" alt="Websites example" /></a></li>
                <li><a href="img/wbs.jpg" class="cbox" rel="websites"><img src="img.php?src=img/wbs.jpg&amp;w=79&amp;h=79&amp;zc=1" border="0" alt="Websites example" /></a></li>
                <li><a href="img/wbs.jpg" class="cbox" rel="websites"><img src="img.php?src=img/wbs.jpg&amp;w=79&amp;h=79&amp;zc=1" border="0" alt="Websites example" /></a></li>
                <li class="last"><a href="img/wbs.jpg" class="cbox" rel="websites"><img src="img.php?src=img/wbs.jpg&amp;w=79&amp;h=79&amp;zc=1" border="0" alt="Websites example" /></a></li>
            </ul>
        </li>
        <li class="print">
        	<h4>Print</h4>
        	<ul>
            	<li><a href="img/print.jpg" class="cbox" rel="print"><img src="img.php?src=img/print.jpg&amp;w=79&amp;h=79&amp;zc=1" border="0" alt="Print example" /></a></li>
                <li><a href="img/print.jpg" class="cbox" rel="print"><img src="img.php?src=img/print.jpg&amp;w=79&amp;h=79&amp;zc=1" border="0" alt="Print example" /></a></li>
                <li class="last"><a href="img/print.jpg" class="cbox" rel="print"><img src="img.php?src=img/print.jpg&amp;w=79&amp;h=79&amp;zc=1" border="0" alt="Print example" /></a></li>
                <li><a href="img/print.jpg" class="cbox" rel="print"><img src="img.php?src=img/print.jpg&amp;w=79&amp;h=79&amp;zc=1" border="0" alt="Print example" /></a></li>
                <li><a href="img/print.jpg" class="cbox" rel="print"><img src="img.php?src=img/print.jpg&amp;w=79&amp;h=79&amp;zc=1" border="0" alt="Print example" /></a></li>
                <li class="last"><a href="img/print.jpg" class="cbox" rel="print"><img src="img.php?src=img/print.jpg&amp;w=79&amp;h=79&amp;zc=1" border="0" alt="Print example" /></a></li>
            </ul>
        </li>
        <li>
        	<h4>Logo design</h4>
        	<ul>
            	<li><a href="img/logo.jpg" class="cbox" rel="logos"><img src="img.php?src=img/logo.jpg&amp;w=79&amp;h=79&amp;zc=1.jpg" border="0" alt="Logo example" /></a></li>
                <li><a href="img/logo.jpg" class="cbox" rel="logos"><img src="img.php?src=img/logo.jpg&amp;w=79&amp;h=79&amp;zc=1.jpg" border="0" alt="Logo example" /></a></li>
                <li class="last"><a href="img/logo.jpg" class="cbox" rel="logos"><img src="img.php?src=img/logo.jpg&amp;w=79&amp;h=79&amp;zc=1.jpg" border="0" alt="Logo example" /></a></li>
                <li><a href="img/logo.jpg" class="cbox" rel="logos"><img src="img.php?src=img/logo.jpg&amp;w=79&amp;h=79&amp;zc=1.jpg" border="0" alt="Logo example" /></a></li>
                <li><a href="img/logo.jpg" class="cbox" rel="logos"><img src="img.php?src=img/logo.jpg&amp;w=79&amp;h=79&amp;zc=1.jpg" border="0" alt="Logo example" /></a></li>
                <li class="last"><a href="img/logo.jpg" class="cbox" rel="logos"><img src="img.php?src=img/logo.jpg&amp;w=79&amp;h=79&amp;zc=1.jpg" border="0" alt="Logo example" /></a></li>
            </ul>
        </li>
	</ul><!-- end portfolio -->
        <div class="separator"></div>
    
        <a id="backtoptop" href="#" target="_top">Back to top</a>
    </div><!-- END CONTAINER -->
</div><!-- END WRAPPER -->
</body>
</html>
