<?php

$db = mysqli_connect('localhost', 'root', '1111', 'echatdb');

if (mysqli_connect_errno()) {
echo '<p>Error: Could not connect to database.<br/>
Please try again later.</p>';
exit;
}
?>