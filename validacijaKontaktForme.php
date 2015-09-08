<?php
		
	/*$ime = "";
	  $prezime = "";
	  $email = "";
	  $kod= "";
		$kod1= "";
	  $poruka ="";*/
		
		
		
		$ime = $_GET['ime'];
	  $prezime = $_GET['prezime'];
	  $prezime = test_input($prezime);
	  $email = $_GET['email'];
	  $kod= $_GET['kod'];
		$kod1= $_GET['kod1'];
	  $poruka = $_GET['poruka'];
	  
	 // $ime = $data[0];
	//  $prezime=$data[1];
	 // $email=$data[2];
	 // $kod=$data[3];
	 // $kod1 =$data[4];
	//  $poruka = $data[5];

		
		$errorIme=false;
		$errorEmail=false;
		$errorKod=false;
		$errorKod1=false;
		$errorPoruka=false;
			
    
          if(empty($ime)){
             $errorIme = true; 
          }
          else{
    
               $ime = test_input($ime);
               if(validateName($ime)){}
               else
               {
                    $errorIme = true;  
               }
          }
    
          if(empty($email))
          {
              $errorEmail = true;  
          }
          else{
    
               $email = test_input($email);
              if(validateEmail($email)){
    
               }
               else {
                    $errorEmail = true; 
               }
          }
		  
		  if(empty($kod))
          {
              $errorKod = true;  
          }
          else{
    
               $kod = test_input($kod);
              if(validateCode($kod)){
               }
               else {
                    $errorKod = true; 
               }
          }
		  
		  
		  if(empty($kod1))
          {
              $errorKod1 = true;
          }
          else{
    
               $kod1 = test_input($kod1);
              if($kod==$kod1){
    
               }
               else {
                    $errorKod1 = true;
               }
          }
		  
		  
    
          if(empty($poruka)){
             $errorPoruka = true;  
          }
          else{
    
               $poruka = test_input($poruka);
          }
		  
		  
		  
		 function test_input($data) 
      {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
      }
	  
      function validateEmail($email){
          if(filter_var($email, FILTER_VALIDATE_EMAIL)) return true;
          else return false;
      }
    
      function validateName($name){
          if(preg_match("/^[a-zA-Z ]*$/",$name)) return true;
          else return false;
      }
	  
	  function validateCode($kod)
	  {
		  if( $kod == "aZ09AN11" )
		  {
			  return true;
		  }
		  else return false;
	  }

          $rezultat = array('errorIme'=> $errorIme, 'errorEmail'=>$errorEmail, 'errorKod'=>$errorKod, 'errorKod1'=>$errorKod1, 'errorPoruka'=>$errorPoruka);
    
          header("content-type: application/json");
          echo json_encode($rezultat);


?>