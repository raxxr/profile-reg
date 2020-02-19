<?php

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

	?>