<?php 
 //Name validation

	if( isset($_REQUEST['submit']))
	{
		$name = $_REQUEST['name'];

		if(empty(trim($name))) 
		{
			echo "Null submission found!";
		}

		else if(strlen($name)<2)
		{	
			echo 'Name must be more than 2 letters ';

		}
	}	





//email validation
	if( isset($_REQUEST['esubmit']))
	{
		$email = $_REQUEST['email'];

		if(empty(trim($email))) 
		{
			echo "Null submission found!";
		}

		else
		{
			if(strpos($email, 0)=='@')
				echo 'not valid email address';

		}
		
	}

//gender validation

		
	
 ?>