<!-- Using foreach, build a loop that displays each element of the array
Then, modify your loop so as to conjugate the verb "to code" in the present tense. 
Use a <br> to go to the next line. 
The result should be : -->


<!-- <?php

$pronouns = array ('I ', 'You ', 'He/She ','We ', 'You ', 'They ');
$verb = 'code';

foreach ($pronouns as $value) {
    if ($value == 'He/She') {

        echo $value . 'codes <br> ';
    } else {
        echo $value . 'code <br> ';
    }
}

?> -->


<!-- Write a script that prints the numbers from 1 to 120 using  while  -->

<!-- <?php

$print_to_while = 1;

while ($print_to_while <= 120)
{
    echo $print_to_while . "<br />";
    $print_to_while ++; 

}
?> -->

<!-- Write a script that prints the numbers from 1 to 120 using  for  -->

<!-- <?php

for ($print_to_for = 1; $print_to_for <= 120; $print_to_for ++)
{
    echo $print_to_for . "<br />";
}

?> -->

<!-- Create an array containing the firstname of everyone in your startup. 
Display each firstname using a loop. -->

<!-- <?php

$people_startup = array ("Jean","Pierre","Paul","Jacques","Mathieu","Joe");

foreach ($people_startup as $value) {

    echo $value . '<br />';
}

?> -->

<!-- Create an array containing at least 10 countries. Then, generate the html that 
will render a select box inside an html form (see mockup below). 
Of course, a loop will be useful...  -->



<!-- <form method="post" >
    <label for="country">Select a country:</label>
    <select name="country" id="country">
        
<?php
$countries = array ('Argentina','Australia','Austria','Belgium','Brazil','Canada','China','France','Russia','USA');
        foreach ($countries as $country) {
            echo "<option value='$country'>$country</option>";
        }
        ?>
    </select>
</form> -->

 <!-- Now, edit your array so that it becomes an associative array: 
use the country ISO code as array key, and the country name as value. For example :
$pays = array('BE'=>'Belgique');`  -->

<!-- <form method="post" >
    <label for="country">Select a country:</label>
    <select name="country" id="country">
        
<?php
$countries = array 
('AR' => 'Argentina',
'AU' => 'Australia',
'AT' => 'Austria',
'BE' => 'Belgium',
'BR' => 'Brazil',
'CA' => 'Canada',
'CN' => 'China',
'FR' => 'France',
'RU' => 'Russia',
'US' => 'USA'
);
        foreach ($countries as $country) {
            echo "<option value='$country'>$country</option>";
        }
        ?>
    </select>
</form> -->

<!-- Now, adapt your html select box so that the country ISO code becomes the <option> element value, 
and the country name be the visible part of the <option>.  -->

<form>

    <label for="country">Select a country:</label>
    <select> 
        
<?php
$countries = array 
('AR' => 'Argentina',
'AU' => 'Australia',
'AT' => 'Austria',
'BE' => 'Belgium',
'BR' => 'Brazil',
'CA' => 'Canada',
'CN' => 'China',
'FR' => 'France',
'RU' => 'Russia',
'US' => 'USA'
);
        foreach ($countries as $country => $country_value) {
            echo "<option value='$country'>$country_value</option>";
        }
        ?>
    </select>
</form>







