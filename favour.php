<?php
for($i=1;$i<=50;$i++)
{
	echo"Multiply by $i<br>";
	for($j=1;$j<=12;$j++)
	{
		$favour = $i * $j;
		echo"$i * $j = $favour<br>";
	}
}
?>