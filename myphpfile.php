<?php
$link = mysqli_connect("127.0.0.1", "root", "", "eCommerce");

if (!$link) {
	echo "Error: Unable to connect to MySQL" . PHP_EOL;
}

echo "Successfully connected to MySQL" . PHP_EOL;
echo "Host info: " . mysqli_get_host_info($link) . PHP_EOL;

$sql = 'INSERT INTO customer info'.
	'(Name, email, address, city, state, zipcode, hash of password) '.
	'VALUES ( "mike", "address", "cville", "VA", 00000, "blah" )';

mysql_select_db('eCommerce');
$retval = mysql_query($sql, $link);

?>