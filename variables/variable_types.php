<!-- Store your first name in a variable, then display its value (echo) in a <p> html tag 
    so that the screen shows:
Hi! My name is ______.

Then add another variable to contain your age, then display it in a second <p> tag :
I am ____ years old.

Then add yet another variable that describes the colour 
of your eyes, then display it in another <p> tag :
My eyes are ____

Then add yet another variable that contains the name of all the people in your family.
 What type of variable would you use for that ?
Display the value stored at the first index in another <p> tag :
The first person in my family is ____

And finally : what type of variable would you use to store the information 
whether you are hungry or not ? -->

<?php
$firstName = "Justin";
?>

<?php
$age = 23;
?>

<?php
$eyescolour = "brown";
?>

<?php
$family = array(
  
    0 => 'Alain', 
    1 => 'Delphine'); 

?>

<?php

$temperature = 13;

if( $temperature >= 15 ) {
   // code to execute if the condition results TRUE
   $clothes = "T-shirt";
   $should_i_wear_a_scarf = false;
 } else {
   // code to execute if the condition results FALSE
   $clothes = "Pull-over";
   $should_i_wear_a_scarf = true;
 }
 
 if ($should_i_wear_a_scarf == true){
	 // this is a "fake" function for the sake of the example 
	 // that function is only executed in the condition is true
	//  grab_scarf_from_door_hanger();
 }
 // The following function will be executed everytime, 
 // but its $clothes argument changes according to the result
 // of our previous conditional structure
// cover_my_chest_with($clothes);

echo $clothes;
?>
 



<html>
  <head><title>Hi!</title></head>
  <body>

<p>Hi! My name is <?php echo $firstName ?> </p>

<p>I am <?php echo $age ?> years old</p>

<p> My eyes are <?php echo $eyescolour ?> </p>

<p> The first person of my family is <?php echo $family[0] ?> </p>




  </body>
</html>

