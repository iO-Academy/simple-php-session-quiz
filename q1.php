<?php

session_start();

if(!isset($_POST['username'])) {
    header('Location: index.php');
}

$_SESSION['name'] = $_POST['username'];

echo "Welcome to the quiz " . $_POST['username'];


?>
<h1>WHOSE THAT POKEMON?</h1>
<img src="https://www.outcyders.net/images/quizzes/4/question1.jpg" height="200" />

<form method="POST" action="q2.php">
    Clefable:
    <input type="radio" name="q1" value="a" />
    Clefairy:
    <input type="radio" name="q1" value="b" />
    Jigglypuff:
    <input type="radio" name="q1" value="c" />
    <input type="submit" />
</form>

