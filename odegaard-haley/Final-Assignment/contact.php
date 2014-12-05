<!DOCTYPE html> 
<html>
<head>
	<title>UIBRUSH</title>
	<link rel="stylesheet" href="style.css">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
	<section id="nav">
		<?php include_once("header.php"); ?> 
	</section>

	<section id="top">
		<div id="stage3">
			<div id="who">
				<h6 class="who-we-are" align="center"><span>Talk</span> To Us</h6>
				<p class="who-info">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio 
nihil impedit quo facilis est et expedita distinctio minus id quod maxime placeat facere possimus, omnis voluptas assumenda est.</p>
			</div> <!-- ===== who ===== -->
		</div>
</section>

	<section id="info">
		<h2 class="long">Contact Us</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing 
			elit, sed do eiusmod tempor  ut labore eturet dolore 
			magna aliqua. Ut enim ad minim veniam, quis nostrud 
			exercitation ullamco laboris nisi ut aliquip ex ea 
			commodo consequat. Duis aute irure dolor in reprehenderit 
			in voluptate velit esse cillum.  Lorem ipsum dolor       
			sit amet, consectetur adipisicing elit, sed do eiusmod tempor  
			ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, 
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
			commodo consequat. Duis aute irure dolor in reprehenderit in 
			voluptate velit esse cillum. Lorem ipsum dolor sit amet, 
			consectetur adipisicing elit, sed do eiusmod tempor  
			ut labore eturet dolore magna aliqua. Ut enim ad minim veniam, 
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
			commodo consequat. Duis aute irure dolor in reprehenderit in 
			voluptate velit esse cillum.  </p>	
	</section>

		<img class="map" src="images/map.jpg">

         
        <form method="post" action="submit-form.php">
            
            <p class="title">Contact Details:</p>
            <ul>
            	<li><i class="fa fa-phone"></i>(+91) 0975 720 3582</li>
            	<li><i class="fa fa-envelope-o"></i>email@domain.com</li>
            	<li><i class="fa fa-map-marker"></i>No.325, New St, 25th Sector, <span>London, England</span></li>
            </ul>
            
            <input type="text" placeholder="Name" name="name" id="name"> <br>

            <input type="text" placeholder="Email" name="email" id="email"> <br>

            <input type="text" placeholder="Message" name="message" id="message"><br>
            
            <div id="submit">
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>

	<section id="foot">
		<?php include_once("footer.php"); ?> 
	</section>
</body>

