<?php
/**
* KOMENTAR
*
* PHP version 5
*
* @category Snifovanje
* @package  Snifsnif
* @author   Nikola <nikola@trtmrt.com>
* @license  http://www.trtmrt.com/copyleft/licenca.html Licenca prava
* @link     http://ovoono.com
*/
echo "The current directory is ". getcwd() .".";
$scan = scandir(getcwd());
echo " Its contents are:\n";
foreach ($scan as $single) {
    if (($single == ".") || ($single == "..")) {
        echo("");
    } else {
        echo($single . "\n");
    }
}
?>
