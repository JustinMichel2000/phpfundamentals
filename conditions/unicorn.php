<!-- In a new file unicorn.php, create an html form asking 
"Are you a human, a cat or a unicorn ?". When submitted, 
the screen displays an animated Gif showing either a human, 
a cat or a unicorn, as per the user input (you can find gifs here). 
Use GET or POST as method, whichever you like. 
Use a ternary operation to evaluate the condition. -->



<form method="post" action="">
    <label>Are you a human , a cat or a unicorn? </label>
    <input type="radio" name="gender" value="human">Human
    <input type="radio" name="gender" value="cat">Cat
    <input type="radio" name="gender" value="unicorn">Unicorn
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form> 



<!-- <?php
$human = '<iframe 
src="https://giphy.com/embed/pPk0lZ4OfmccXmXftC" width="272" height="480" 
frameBorder="0" class="giphy-embed" allowFullScreen></iframe>';

$cat = '<iframe src="https://giphy.com/embed/JIX9t2j0ZTN9S" 
    width="480" height="480" frameBorder="0" class="giphy-embed" 
    allowFullScreen></iframe>';

$unicorn = '<iframe src="https://giphy.com/embed/HULqwwF5tWKznstIEE" 
    width="480" height="270" frameBorder="0" class="giphy-embed" 
    allowFullScreen></iframe>';

if (isset($_POST['gender'])) {

    if ($gender === "human") {
        echo $human;
    } elseif ($gender === "cat") {
        echo $cat;
    } else {
        echo $unicorn;
    }
}
?> -->

<?php
$human = '<iframe 
src="https://giphy.com/embed/pPk0lZ4OfmccXmXftC" width="272" height="480" 
frameBorder="0" class="giphy-embed" allowFullScreen></iframe>';

$cat = '<iframe src="https://giphy.com/embed/JIX9t2j0ZTN9S" 
    width="480" height="480" frameBorder="0" class="giphy-embed" 
    allowFullScreen></iframe>';

$unicorn = '<iframe src="https://giphy.com/embed/HULqwwF5tWKznstIEE" 
    width="480" height="270" frameBorder="0" class="giphy-embed" 
    allowFullScreen></iframe>';
    
if (isset($_POST['gender'])){

$gender = $_POST ["gender"];
$result = ($gender == "human") ? $human : (($gender == "cat") ? $cat : $unicorn) ;
echo $result;
}
?>

<!-- <?php
$human = '<iframe 
src="https://giphy.com/embed/pPk0lZ4OfmccXmXftC" width="272" height="480" 
frameBorder="0" class="giphy-embed" allowFullScreen></iframe>';

$cat = '<iframe src="https://giphy.com/embed/JIX9t2j0ZTN9S" 
    width="480" height="480" frameBorder="0" class="giphy-embed" 
    allowFullScreen></iframe>';

$unicorn = '<iframe src="https://giphy.com/embed/HULqwwF5tWKznstIEE" 
    width="480" height="270" frameBorder="0" class="giphy-embed" 
    allowFullScreen></iframe>';

echo isset($_POST['gender']) 
    ? ($_POST['gender'] === "human" ? $human : ($_POST['gender'] === "cat" ? $cat : $unicorn)) 
    : '';
?> -->