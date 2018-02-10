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


				    if(empty($_POST['location'])){

					    $errors[] = 'Please include your location!!';
					    }  else {
					      $location = (trim($_POST['location']));    
					    }


					    if(empty($_POST['Destination'])){

					    $errors[] = 'Please include your destination!!';
					    }  else {
					      $destination = (trim($_POST['Destination']));    
					    }

					    
					    

					         if(empty($errors)){
					             
					             
					             $to = 'pickupng17@gmail.com';
					               
					              $subject = 'PICK REQUEST from PICKUPNG-'.$name;       
					         
					               $from = $name;
					              
					               $body = "Good day, i am". $name . "and i would love to book a pick up from"


					             .$location."to" .$destination. ", my phone number is ". $phone; 
					                       
					                       
					              mail($to,$subject,$body, $from);
					              
					              echo "A pick up has been booked, expect a call soon";
					         } else {

					            				                 
					            echo "The following errors occured;";
					            
					            foreach ($errors as $msgs){
					                echo "-$msgs \n";
					            }
					          echo "please try again";  
					         
					          
					            }  
					            
					             }

					?>