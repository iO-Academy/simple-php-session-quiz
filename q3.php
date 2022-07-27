<?php
session_start();

if(!isset($_POST['q2'])) {
    header('Location: index.php');
}

$_SESSION['q2'] = $_POST['q2'];

echo "Welcome to the quiz " . $_SESSION['name'];


?>
<h1>WHOSE THAT POKEMON?</h1>
<img src="https://static.wikia.nocookie.net/8de4c8e2-1732-4a6d-b257-cae466a0ffe5/scale-to-width/755" height="200" />

<form method="POST" action="results.php">
    Vernon:
    <input type="radio" name="q3" value="a" />
    Venoknat:
    <input type="radio" name="q3" value="b" />
    Venonat:
    <input type="radio" name="q3" value="c" />
    <input type="submit" />
</form>