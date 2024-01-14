<form action="form.php" method="POST">
    <label for="name">
        Enter your name:
    </label>
    <input type="text" name="name" id="name">

    <label for="surname">
        Enter your surname:
    </label>
    <input type="text" name="surname" id="surname">

    <input type="submit" value="Send">
</form>

<?php

if($_POST !== [])
{

$formName = $_POST["name"];
$formSurname = $_POST["surname"];

echo $formName . $formSurname;
}

