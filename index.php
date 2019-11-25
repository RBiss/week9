<?php
function img100_format_name($fullname)
{
  

	$lastname = strstr($fullname, ' ');
    $firstname = strtok($fullname, ' ');
	echo "<table><tr>";
	echo" <td>".trim($lastname." "), trim(", ".$firstname)."</td>";
	echo "</tr></table>";
	
	

}
echo img100_format_name('Lisa Simpson'); // return "Simpson, Lisa"
echo img100_format_name('Edna Krabeppel'); // return "Krabeppel, Edna"
