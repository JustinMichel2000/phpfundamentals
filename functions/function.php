<!-- Use a function that capitalizes the first letter of the provided argument. 
Example: "émile"should return "Émile" -->

<?php

echo ucfirst('paul');
echo'<br />';
?>

<!-- Use the native function allowing you to display the current year. -->

<?php

$year = date('Y');
echo $year;
echo'<br />';
?>

<!-- Now display the date, time, minutes and seconds, 
using the same function, by playing with the arguments. -->

<?php

date_default_timezone_set('Europe/Brussels');
$date = date('h:i:s A l jS \of F Y');
echo $date;
echo'<br />';

?>

<!-- Crée a "Sum" function that takes 2 numbers and returns their sum. -->

<?php

$numbers = array( 1,22);
echo (array_sum($numbers));
echo'<br />';

?>

<!-- 
Improve that function so that it checks whether the argument is indeed a Number. 
If not, it should display : "Error: argument is the not a number." -->

<?php

$numbers = array(7, 22);

array_sum($numbers) ;
    foreach ($numbers as $number) {
        if (!is_numeric($number)) {
            echo "Error: argument is not a number.";
            return;
        }
    }
    echo array_sum($numbers) . '<br />';

?>


<!-- Create a function that takes as argument a string of characters 
and returns an acronym made of the initials of each word.
Example: "In code we trust!" should return: ICWT. -->

<?php

$example = "In code we trust";
preg_match_all('/\b\w/', $example, $matches);
echo $firstLetters = implode('', $matches[0]);
echo'<br />';

?>

<!-- 
Create a function that replaces the letters "a" and "e" with "æ". Example: "caecotrophie", "chaenichthys","microsphaera", 
"sphaerotheca" should respectively return "cæcotrophie", "chænichthys","microsphæra", "sphærotheca". -->

<?php

$insaneWords = array('caecotrophie','chaenichthys','microsphaera','sphaerotheca');

$replace = array('ae' => 'æ');

echo '<pre>';
print_r(str_replace('ae', 'æ', $insaneWords, $replace));
echo '</pre>';

echo'<br />';

?>

<!-- Create the opposite function, which replaces "æ" by "ae" in :
cæcotrophie, chænichthys, microsphæra, sphærotheca -->

<?php

$insaneWords = array('cæcotrophie','chænichthys',
'microsphæra','sphærotheca');

$replace = array('æ' => 'ae');

echo '<pre>';
print_r(str_replace('æ', 'ae', $insaneWords, $replace));
echo '</pre>';

echo'<br />';

?>


<!-- Create a function to return "notice", "warning" and "error" 
messages to a user,which takes 2 arguments : the "message", and the "css class" 
(values: "info", "error", "warning"). 

This function would allow us to write this :

echo feedback("Incorrect email address", "error");

which will produce this html :

<div class="error">Error: Incorrect email address.</div> -->




