<?php


					if($_SERVER['REQUEST_METHOD']=='POST'){
    
					    $errors=array();
					    
					    if(empty($_POST['name'])){

					    $errors[] = 'You didnt include your name!!';
					    }  else {
					      $name = (trim($_POST['name']));    
					    }
					    
					    if(empty($_POST['phone']) && !is_numeric($_POST['phone'])){
					        $errors[] = 'Please iput your phone Number';
					    }  else {
					      $phone = ($_POST['phone']);    
				    }


				    if(empty($_POST['email'])){

					    $errors[] = 'Please include your email!!';
					    }  else {
					      $email = (trim($_POST['email']));    
					    }


					    if(empty($_POST['notes'])){

					    $errors[] = 'Please write a note!!';
					    }  else {
					      $notes = (trim($_POST['notes']));    
					    }

					    
					    

					         if(empty($errors)){
					             
					             
					             $to = 'pickupng17@gmail.com';
					               
					              $subject = 'Enquiry from PICK_UP NG-'.$name;       
					         
					               $from = $email;
					              
					               $body = "Good day, i am". $name . "and i would love to say"


					             .$notes." '<br />' my phone number is ". $phone; 
					                       
					                       
					              mail($to,$subject,$body, $from);
					              
					              echo "A pick up has been booked, expect a call soon";
					         } else {
					             echo'<div class="errors">';
					                 
					            echo "The following errors occured;";
					            
					            foreach ($errors as $msgs){
					                echo "-$msgs <br />\n";
					            }
					          echo "please try again";  
					              
					          echo '</div';
					          
					            }  
					            
					             }

					?>