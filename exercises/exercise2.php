<?php 

$arr['name'] = "John Ray Hernani";
$arr['degree_year'] = "MS IT - 2";
$arr['course'] = "SD-208";
$arr['course_description'] = "Web Development 3";

print_r($arr);
echo "<br/>There are ".strlen($arr['name'])." characters on the name index<br/>";
echo "There are ".strlen($arr['degree_year'])." characters on the degree_year index<br/>";
echo "There are ".strlen($arr['course'])." characters on the course index<br/>";
echo "There are ".strlen($arr['course_description'])." characters on the course_description index";

?>