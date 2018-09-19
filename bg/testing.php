<?php

for($i=0;$i<10;$i++)
{
	$sql = 
	"	
		INSERT INTO shoes (..) VALUES ( ... )$i
	";

	echo $sql;
}