<html>

<body>
<?php
/*
$username = "Ryan Burgess";
$htmlTagString = "<p>".$username."</p>";
echo $htmlTagString;
date_default_timezone_set('UTC');
echo date('h:i:s:u a, l F jS Y e');*/

$userName = $_POST['username'];
$address = $_POST['address'];
$city = $_POST['city'];

echo "<hr>";
echo $userName . "<hr>";
echo $address . "<hr>";
echo $city . "<hr>";

?>
</body>
</html>
