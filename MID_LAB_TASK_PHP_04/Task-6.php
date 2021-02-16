<?php

$flag= false;

$arr =array(1,3,5,7,9,11,13,15,17);
for($i=0; $i<count($arr); $i++)
{
    if($arr[$i]==13)
	{   
		$flag=true; 
		break;	
	}	
}
	if($flag)
		echo "Number  is found";
	else
		echo "Number is not found";
?>