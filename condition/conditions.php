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

<?php
echo "<br>"
?>
<?php
echo "<br>"
?>


<!-- 4. Display a different greeting according to the user's age and gender.
Improve the previous form to add another question: "Man or Woman?". 
Use an input of type radio to capture the data.

If gender is "Woman", the displayed message should be adapted accordingly.

For example, if the user age is between 12 and 18 and the gender is female, 
display "Hello Miss Teen!" otherwise, display "Hello mister Teen!".

Do the same for all the other age ranges.

Tip: You can nest conditional structures inside others. -->


<form method="get" action="">
    <label for="age">Age:</label>
    <input type="number" name="age" id="age">
    <br><br>
    <label>Man or Woman:</label>
    <input type="radio" name="gender" value="Man">Man
    <input type="radio" name="gender" value="Woman">Woman
    <br><br>
    <input type="submit" name="submit" value="Greet me now">
</form>


<?php
if (isset($_GET['submit'])) {
    $age = $_GET['age'];
    $gender = $_GET['gender'];

    if ($age >= 12 && $age <= 18) {
        if ($gender === 'Woman') {
            echo 'Hello Miss Teen!';
        } else {
            echo 'Hello mister Teen!';
        }
    } elseif ($age > 18) {
        if ($gender === 'Woman') {
            echo 'Hello Madam!';
        } else {
            echo 'Hello Sir!';
        }
    } else {
        echo 'Hello, Youngster!';
    }
}
?>

<?php
echo "<br>"
?>
<?php
echo "<br>"
?>


<!-- 5. Display a different greeting according to the user's age, gender and mothertongue.
Improve the previous form to add yet another question: "Do you speak English ? ". 
Use an input of type radio to capture the data. Possible answers: "yes" or "no".

Then modify your form processing script to implement this :

If age is below 12 and the user replies "yes", display :
 "Hello boy!" or "Hello Girl!" according to the gender indicated.
If the answer is "no", display "Aloha boy" or "Aloha Girl"
Adapt all the other answers accordingly, using "Aloha" instead of "Hello". -->



<form method="get" action="">
    <label for="age">Age:</label>
    <input type="number" name="age" id="age">
    <br><br>
    <label>Man or Woman:</label>
    <input type="radio" name="gender" value="Man">Man
    <input type="radio" name="gender" value="Woman">Woman
    <br><br>
    <label>Do you speak English?</label>
    <input type="radio" name="english" value="yes">Yes
    <input type="radio" name="english" value="no">No
    <br><br>
    <input type="submit" name="submit" value="Greet me now">
</form>

<?php
if (isset($_GET['submit'])) {
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $englishSpeaking = $_GET['english'];

    if ($age < 12) {
        if ($englishSpeaking === 'yes') {
            if ($gender === 'Woman') {
                echo 'Aloha Girl!';
            } else {
                echo 'Aloha boy!';
            }
        } else {
            if ($gender === 'Woman') {
                echo 'Aloha Girl!';
            } else {
                echo 'Aloha boy!';
            }
        }
    } else {
        if ($englishSpeaking === 'yes') {
            if ($age >= 12 && $age <= 18) {
                if ($gender === 'Woman') {
                    echo 'Hello Miss Teen!';
                } else {
                    echo 'Hello mister Teen!';
                }
            } else {
                if ($gender === 'Woman') {
                    echo 'Hello Madam!';
                } else {
                    echo 'Hello Sir!';
                }
            }
        } else {
            if ($age >= 12 && $age <= 18) {
                if ($gender === 'Woman') {
                    echo 'Aloha Miss Teen!';
                } else {
                    echo 'Aloha mister Teen!';
                }
            } else {
                if ($gender === 'Woman') {
                    echo 'Aloha Madam!';
                } else {
                    echo 'Aloha Sir!';
                }
            }
        }
    }
}
?>

<?php
echo "<br>"
?>
<?php
echo "<br>"
?>


<!-- 6. The Girl Soccer team
You want to create a soccer team for girls between 21 and 40 years old.

Create a form asking for the age, gender and name of the person. 
Use the $age and $gender variables in an if/else to display 
a "welcome to the team !" or "Sorry you don't fit the criteria" message. -->


    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br><br>
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required>
        <br><br>
        <label>Gender:</label>
        <input type="radio" name="gender" value="female" required>Female
        <input type="radio" name="gender" value="male">Male
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>



<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    if ($gender === 'female' && $age >= 21 && $age <= 40) {
        echo "Welcome to the team, $name!";
    } else {
        echo "Sorry, you don't fit the criteria.";
    }
}
?>


<?php
echo "<br>"
?>
<?php
echo "<br>"
?>


<!-- 7. Achieve the same, without the ELSE.
A key aspect of coding conditions is to keep them as simple as possible. 
Improve the previous exercise 
by using only an if statement (without the else), 
and a default value that changes only if the condition is true. -->



<form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br><br>
        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required>
        <br><br>
        <label>Gender:</label>
        <input type="radio" name="gender" value="female" required>Female
        <input type="radio" name="gender" value="male">Male
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>



    <?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    $message = "Sorry, you don't fit the criteria.";

    if ($gender === 'female' && $age >= 21 && $age <= 40) {
        $message = "Welcome to the team, $name!";
    }

    echo $message;
}
?>




<?php
echo "<br>"
?>
<?php
echo "<br>"
?>


<!-- 8. "School sucks!" Exercise
Start a new form that would allow a (nasty) teacher to grade a student.

It would display a different message according to the number annotated :

note below 4 : "This work is really bad. What a dumb kid! "
note between 5 and 9 : "This is not sufficient. More studying is required."
note equals 10 : "barely enough!"
note is 11, 12, 13 or 14 : "Not bad!"
note is 15, 16, 17 or 18 : "Bravo, bravissimo!"
note is 19 or 20 : "Too good to be true : confront the cheater!" -->




















