<?php

$conn = new mysqli(
		'localhost',
		'root',
		'',
		'wp_db2019'
);
echo '</pre>';
$r = $conn->query("SELECT comment_ID, comment_author, comment_date FROM  wp_comments, wp_comments
;")->fetch_all();
echo '<pre>';
print_r($r);
echo '</pre>';
?> 