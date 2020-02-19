<?php

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

?>