
<form action="" method="post">
        Child's Name: <input type="text" name="childName"><br><br>
        Child's Gender: <input type="radio" name="childGender" value="girl" checked> Girl
        <input type="radio" name="childGender" value="boy"> Boy<br><br>
        Teacher's Name: <input type="text" name="teacherName"><br><br>
        Parent's Name :  <input type="text" name="parentName"><br><br>
        Reason for Absence:<br>
        <input type="radio" name="reason" value="illness" checked> Illness<br>
        <input type="radio" name="reason" value="death"> Death of the pet (or a family member)<br>
        <input type="radio" name="reason" value="activity"> Significant extra-curricular activity<br>
        <input type="radio" name="reason" value="other"> Any other excuse<br><br>
        <input type="submit" name="submit" value="Generate Apology">
    </form>


<?php
if (isset($_POST['submit'])) {
    $childName = $_POST['childName'];
    $childGender = $_POST['childGender'];
    $teacherName = $_POST['teacherName'];
    $parentName = $_POST['parentName'];
    $reason = $_POST['reason'];
    $date = date("l, \\t\\h\\e d F Y");

    switch ($reason) {
        case "illness":
            $excuse = "My $childGender $childName couldn't come to school today as $childName got a sprain.";
            break;
        case "death":
            $excuse = "I am sorry to inform you that $childName couldn't attend school today due to the unfortunate demise of our family pet, Zozo.";
            break;
        case "activity":
            $excuse = "I regret to inform you that $childName was unable to attend school today due to a football tournament.";
            break;
        case "other":
            $excuse = "I apologize for the absence of $childName from school today. We had some unavoidable circumstances that prevented $childName from attending.";
            break;
        default:
            $excuse = "";
    }

    echo "<p>Date: $date</p>";
    echo "<p>Dear $teacherName,</p>";
    echo "<p>$excuse</p>";
    echo "<p>Best regards,</p>";
    echo "<p>$parentName</p>";
} else {
    ?>
    
    <?php
}
?>

