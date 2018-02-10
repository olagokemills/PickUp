<?php

require_once("header.php");
?>


			<section id="white_canvas">

			<div id="contact_top">

			<aside>
				
						<div>

		 		
					<img width="180px" height="70px" src="images/logo.png" />


						
						</div>

			</aside>

			<aside>


			<center>   <span>Contact</span></center>



			</aside>

			</div>

			
			<div class="clear"></div>

			<br />
			<br />

			<div class="mainw3-agileinfo">
			<!-- login form -->
			<div class="login-forms">  
				<div class="login-agileits-top"> 

				<p id="remessage"></p>	
					<form method="post"> 
			
						<input  type="text" class="name" name="name" placeholder="Full Name" required=""/>
					
						<input  type="text" class="password" name="phone" placeholder="Phone number" required=""/>

						<input  type="text" class="password" name="email" placeholder="email" required=""/>

						Notes<textarea placeholder="notes">
							Notes

						
								</textarea>

						<input  type="text" class="password" name="Destination" placeholder="Destination" required=""/>
   
						<input type="submit" value="Post" id="contact"> 
					</form> 

					<img id="uploadIm" src="load.gif">		
				</div> 
				 
			 

			</div> 
		</div>	
		





			</section>



<?php

	include("footer.php");
	?>