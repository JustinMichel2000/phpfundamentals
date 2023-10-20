<!-- In a new file ternary.php declare a $hello variable 
which value is a greeting message. 
That greeting message depends on another variable $gender, 
which can either be "M" or "F". Finish by displaying the resulting message. -->


<!-- $age = 24;
$is_adult = ($age >= 18) ? true : false;
// $is_adult is true

$age = 24;
if ($age >= 18)
{
	$is_adult = true;
} else {
	$is_adult = false;
}
// $is_adult is true -->

<?php
$gender = "M";
$hello = ($gender === "M") ? "Hello, Sir!" : "Hello, Madam!";
echo $hello;
?>



