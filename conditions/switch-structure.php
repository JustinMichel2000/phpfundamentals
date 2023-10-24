<form method="post" action="">
        <label for="grade">Enter the student's grade:</label><br>
        <input type="number" id="grade" name="grade" min="0" max="20"><br><br>
        <input type="submit" value="Grade">
    </form>


    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $grade = $_POST['grade'];
        switch ($grade) {
            case $grade < 4:
                echo "This work is really bad. What a dumb kid!";
                break;
            case $grade >= 5 && $grade <= 9:
                echo "This is not sufficient. More studying is required.";
                break;
            case 10:
                echo "Barely enough!";
                break;
            case $grade >= 11 && $grade <= 14:
                echo "Not bad!";
                break;
            case $grade >= 15 && $grade <= 18:
                echo "Bravo, bravissimo!";
                break;
            case 19:
            case 20:
                echo "Too good to be true: confront the cheater!";
                break;
            default:
                echo "Please enter a valid grade.";
        }
    }
    ?> 