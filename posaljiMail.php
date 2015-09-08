<?php
			require('sendgrid-php/sendgrid-php.php');
			ini_set('display_errors', 'On');
			error_reporting(E_ALL);
			if($_POST)
			 {
				
					$imeSalji = $_POST['imeSlanje'];
					$prezimeSalji = $_POST['prezimeSlanje'];
					$emailSalji = $_POST['emailSlanje'];
					$porukaSalji = $_POST['porukaSlanje'];
					
						$eol = PHP_EOL;
						$message = "Ime i prezime : " .$imeSalji." ".$prezimeSalji."\r\n"."Email : ".$emailSalji."\r\n Poruka : ".$porukaSalji; 
                        
						$service_plan_id = "sendgrid"; // your OpenShift Service Plan ID
						//$account_info = json_decode(getenv($service_plan_id), true);
						//$sendgrid = new SendGrid($account_info['username'], $account_info['password']);
						$sendgrid = new SendGrid('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');
						$email    = new SendGrid\Email();
						$email->addTo("onlinebiblio@hotmail.com")
							  ->addCc("aluckin1@etf.unsa.ba")
						      ->setReplyTo($emailSalji)
						      ->setFrom($emailSalji)
						      ->setSubject("Kontakt forma testiranje!")
						      ->setText($message);
						try
						{
							$sendgrid->send($email);
						$por = "Mail uspjesno poslan!";
						echo "<script type='text/javascript'>alert('$por');
						window.location = \"index.php\";
						</script>";
						}
						catch (\SendGrid\Exception $e)
						{
							echo $e->getCode();
						    foreach($e->getErrors() as $er) {
						        echo $er;
    						}
						}

				
			}
		?>