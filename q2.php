<?php
session_start();

if(!isset($_POST['q1'])) {
    header('Location: index.php');
}

$_SESSION['q1'] = $_POST['q1'];

echo "Welcome to the quiz " . $_SESSION['name'];


?>
<h1>WHOSE THAT POKEMON?</h1>
<img src="https://pbs.twimg.com/media/BkpACzMIQAElgZI?format=jpg&name=medium" height="200" />

<form method="POST" action="q3.php">
    Gengar:
    <input type="radio" name="q2" value="a" />
    Ghastly:
    <input type="radio" name="q2" value="b" />
    Haunter:
    <input type="radio" name="q2" value="c" />
    <input type="submit" />
</form>