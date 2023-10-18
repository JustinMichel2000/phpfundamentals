<!-- Series of exercises on PHP conditional structures. -->


<!-- // 1.1 Clean your room Exercise  -->

<?php

$room_is_filthy = false;

if( $room_is_filthy) {
	echo "Yuk, Room is dirty : let's clean it up !";
	
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}


echo"<br>";


// <!-- // 1.2 Clean your room Exercise, improved -->




$possible_states = ["Health Hazard", "Filthy", "Dirty", "Clean", "Immaculate"];

// When testing, change the index value to navigate to the possible array values

$room_filthiness = $possible_states[2]; 


if($room_filthiness == $possible_states[0]) {
	echo "<br>Yuk, Room is Tchernobyl! Let's clean it up !";
} else if($room_filthiness == $possible_states[1]){
	echo "<br>Yuk, Room is filthy : let's clean it up !";
} else if($room_filthiness == $possible_states[2]){
    echo "<br>Yuk, Room is dirty : let's clean it up !";
} else if($room_filthiness == $possible_states[3]){
    echo "<br>Nothing to do, room is clean.";  
} else {
	echo "<br>Nothing to do, room is immaculate.";
}


echo"<br>";
echo"<br>";

// 2. Display a different greeting message depending on the time of the day.
// You know what's worse than a stupid robot? A stupid impolite robot. Let's fix that.

// Write a script that implements these specifications :

// If the time is between 05h00 and 09h00, display "Good morning !".
// If the time is between 09h01 and 12h00, display "Good day !".
// If the time is between 12h01 and 16h00, display "Good afternoon !".
// If the time is between 16h01 and 21h00, display "Good evening !".
// If the time is between 21h01 and 04h59, display "Good night !".
// Tip: you can combine multiple conditions (using AND / OR).


// 2. "Different greetings according to time" Exercise
date_default_timezone_set("Europe/Brussels");
$now = date('d-m-y h:i:s');
echo $now; // How to get the current time in PHP ? Google is your friend ;-)

echo"<br>";
echo"<br>";

// Test the value of $now and display the right message according to the specifications.
if ("5:00:00" <= $now AND $now <= "9:00:00") {
    echo "Good morning !";
} else if ("9:01:00" <= $now AND $now <= "12:00:00") {
    echo "Good day !";
} else if ("12:01:00" <= $now AND $now <= "16:00:00") {
    echo "Good afternoon !";
} else if ("16:01:00" <= $now AND $now <= "21:00:00") {
    echo "Good evening !";
} else {
    echo "Good night !";
}  


echo "<br>";
echo "<br>";

?>

<!-- 
// 3. Display a different greeting according to the user's age.
// Let's continue to make our robot a little more civil and greet humans properly, taking into account their age.

// Here is the user experience we aim for :
// First, users see a form asking for their age :

// Please type your age : __

// When they submit the form, the page displays the right message:

// if age is less than 12 years old, display "Hello kiddo!"
// if age is between 12 and 18 years old, display "Hello Teenager !"
// if age is between 18 and 115 years old, display Hello Adult !"
// if age is beyond 115 years old, display "Wow! Still alive ? 
Are you a robot, like me ? Can I hug you ?"
// Have both the form and the processing script in the same file. Use the GET method. -->


<form method="get" action="">
	<label for="age">Enter your age :</label>
	<input type="" name="age">
	<input type="submit" name="submit" value="Greet me now">
</form>

<?php if (isset($_GET["age"])){ 
    
    if ($_GET["age"] < 12 ) {
        echo "Hello kiddo!";
    } else if ($_GET["age"] >= 12 AND $_GET["age"] < 18 ) {
        echo "Hello Teenager !";
    } else if ($_GET["age"] >= 18 AND $_GET["age"] < 115 ) {
        echo "Hello Adult !";
    } else {
        echo "Wow! Still alive ? 
        Are you a robot, like me ? Can I hug you ?";
    }
    ?>
<?php
} ?>



<!-- 4. Display a different greeting according to the user's age and gender.
Improve the previous form to add another question: "Man or Woman?". 
Use an input of type radio to capture the data.

If gender is "Woman", the displayed message should be adapted accordingly.

For example, if the user age is between 12 and 18 and the gender is female, 
display "Hello Miss Teen!" otherwise, display "Hello mister Teen!".

Do the same for all the other age ranges.

Tip: You can nest conditional structures inside others. -->

<form method="get" action="">
	<label for="age">...</label>
	<input type="" name="age">
	<input type="submit" name="submit" value="Greet me now">
</form>

























