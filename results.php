<?php

session_start();
if(!isset($_POST['q3'])) {
    header('Location: index.php');
}

$q3Answer = $_POST['q3'];

$correctAnswers = [
    'q1' => 'b',
    'q2' => 'a',
    'q3' => 'c',
];

$score = 0;

if($correctAnswers['q1'] === $_SESSION['q1']) {
    $score++;
}

if($correctAnswers['q2'] === $_SESSION['q2']) {
    $score++;
}

if($correctAnswers['q3'] === $q3Answer) {
    $score++;
}

echo "Score is $score, thats " . $score/3 * 100 . "%";

?>
<br>
<a href="wipe.php">Play again?</a>