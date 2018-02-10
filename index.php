<?php

require_once("header.php");
?>
	

			<div style="margin-left: 1em; margin-top:2em; text-align: center;">


				

		 		
					<center>


		<div class="pickup-centre wow zoomInDown">

						<img width="180px" height="70px" src="images/logo.png" />


		</div>



					</center>



			</div>
					

		</div>


<div class="clear"></div>
		<div class="mainw3-agileinfo">
			<!-- login form -->
			<div class="login-form">  
				<div class="login-agileits-top">
				<p id="remessage"></p> 	
					<form method="post"> 
			
						<input  type="text" id="name" class="name" name="name" placeholder="Full Name" required/>
					
						<input  type="text" id="phone" class="password" name="phone" placeholder="Phone number" required/>

						<input  type="text" id="location" class="password" name="location" placeholder="Pickup location" required/>

						<input  type="text" id="destination" class="password" name="Destination" placeholder="Destination" required/>
   
						<input type="submit" value="Request" id="request"> 
					</form> 

					<img id="uploadIm" src="load.gif">	
				</div> 
				 
			 

			</div> 
		</div>	

		 <script src="js/wow.min.js"></script> 
		

	<?php

	include("footer.php");
	?>