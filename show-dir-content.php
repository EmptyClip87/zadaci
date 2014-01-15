<?php
echo "The current directory is ". getcwd() .".";
$scan = scandir(getcwd());
echo " Its contents are:\n";
foreach($scan as $single)
{
	if (($single == ".") || ($single == ".."))
	{echo("");}
	else
	{echo($single . "\n");}
}
?>
