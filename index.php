<?php
/*
 * Tiffany Ferderer
 * 1/15/2021
 * http://tferderer.greenriverdev.com/SDEV328/pp2/index.php
 * PairProgram 2
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

include "functions.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 2</title>
</head>
<body>
<?php
echo "<h1>PHP Array Practice</h1>";

$numbers = array(7, 9, 8, 9, 8, 8, 6);

printArr($numbers);

$max = largest($numbers);
echo "<p>Largest number: $max</p>";

$new = removeDupes($numbers);
echo "<p>No Dupes:</p>";
printArr($new);

$combine = distribute($numbers);
echo "<p>New Associated Array: </p>";
echo var_dump($combine);

?>

</body>
</html>