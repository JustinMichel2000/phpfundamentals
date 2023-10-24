<?php
$family = array( 'Alain', 'Delphine', 'Geneviève', "Annie");
?>

<?php
$family = array('Alain', 'Delphine', 'Geneviève', 'Annie');
print_r($family);
echo "<br><br>";
?>

<?php
$favoriteRecipes = array('Pasta Carbonara', 'Chicken Tikka Masala', 'Tiramisu', 'Pad Thaï');
echo "Content of the \$favoriteRecipes array:<br>";
print_r($favoriteRecipes);
echo "<br><br>";
?>

<?php
$favoriteFilms = array('Interstellar', 'Shutter Island', 'Forrest Gump', 'Spiderman');
?>

<?php
$index = 3; 
echo "My favorite film is " . $favoriteFilms[$index];
echo "<br><br>";
?>


<?php

$me = array(
    'age' => 23, 
    'favorite_season' => 'winter', 
    'like_soccer' => true 
);
$me['like_soccer'] = $me['like_soccer'] ? 'yes' : 'no';
echo '<pre>';
print_r($me);
echo '</pre>';
?>



<?php
$me = array(
    'age' => 23,
    'firstname' => 'Justin',
    'lastname'  => 'Michel',
    'favourite_movies' => array('Spiderman', 'Shutter Island', 'Interstellar')
);

$me['hobbies'] = array('Video games', 'Reading', 'Playing football');

$mother = array(
    'age' => 51,
    'firstname' => 'Delphine',
    'lastname'  => 'Lejeune',
    'favourite_movies' => array('Le gendarme de St-Tropez', 'Pride and Prejudice', 'Pulp Fiction'),
    'hobbies' => array('Gardening', 'Painting', 'Travelling')
);

$me['hobbies'][]= 'Taxidermy';
// Or 
// array_push($me['hobbies'], 'Taxidermy');

$me['lastname'] = 'Durand';

$me['mother'] = $mother;

echo '<pre>';
print_r($me);
echo '</pre>';

$myHobbiesCount = count($me['hobbies']);
$motherHobbiesCount = count($me['mother']['hobbies']);

$totalHobbies = $myHobbiesCount + $motherHobbiesCount;
echo "Total amount of hobbies: " . $totalHobbies;

?>

<!-- One day, you meet your $soulmate. 
Describe your soulmate as an array, with the same keys as yours.

Now, I wonder ... What are the potential hobbies your child could have ? 
It turns out there was a documentary on TV the other day, 
in which an expert in Genetics explained 2 possible scenarios that could answer that question :

either intersection (only the hobbies common to both arrays)
or a fusion (all the hobbies of each array together)
Try to guess the name of the 2 PHP functions that can 
make these two operations and look it up in the online PHP Manual. 
(Tip: both start with array_). Test their syntax and try to answer the question. -->

<?php

$me = array('Video games', 'Reading', 'Playing football');
$soulmate = array('Video games', 'Reading', 'Playing tennis');

$possible_hobbies_via_intersection = array_intersect($me, $soulmate);
$possible_hobbies_via_merge = array_merge($me, $soulmate) ;

echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';

?>


<!-- 
For each of these exercises, use print_r()or var_dump() to check if
the result corresponds to the specifications.

Create an array  $web_development containing a 'frontend' and a 'backend' key. 
Assign an empty array to each key.
Then, add a line underneath that pushes 'xhtml' in the right array.
Then, add a line underneath that pushes 'Ruby on Rails' in the right array.
Then, add a line underneath that pushes 'CSS' in the right array.
Then, add a line underneath that pushes 'Flash' in the right array.
Then, add a line underneath that pushes 'JavaScript' in the right array.
Then, add a line underneath that replace 'xhtml' by 'html'.
Then, add a line underneath that removes 'Flash' from the array. -->


<?php

$web_development = array(
    'frontend' => array(),
    'backend' => array()
);
$web_development['frontend'][]='xhtml';
$web_development['frontend'][]= 'Ruby on Rails';
$web_development['backend'][]= 'Ruby on Rails';
$web_development['frontend'][]= 'CSS';
$web_development['backend'][]= 'Flash';
$web_development['frontend'][]= 'Javascript';
$web_development['frontend'][0]= 'html';
unset($web_development['backend'][1]);

echo '<pre>';
print_r($web_development);
echo '</pre>';
?>


