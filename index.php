<?php

//Pseudocode planning

// homepage with form to collect persons name
    //form would submit to q1.php - POST

//q1.php - grab the name from POST data & put in the SESSION
    //display name on the page somewhere
    //create a form with radio buttons for answers
    //form will submit to q2.php

//q2.php - grab the answer data from POST data & put in the SESSION
    //display name on the page somewhere from SESSION
    //create a form with radio buttons for answers
    //form will submit to q3.php

//q3.php - grab the answer data from POST data & put in the SESSION
    //display name on the page somewhere from SESSION
    //create a form with radio buttons for answers
    //form will submit to results.php

//results.php - grab the answer data from POST data & put in the SESSION
    //display name on the page somewhere from SESSION
    //assess the results
        //hardcode a set of correct answers and compare to answers given in the SESSION
    //turn the score into a %
    //display on page

//options for storing answer data in the session.
    //$_SESSION['q1'] = 'a';
    //$_SESSION['q2'] = 'a';
    //$_SESSION['q3'] = 'a';
        //or
    //$_SESSION['answers'] = ['q1'=>'a', 'q2' => 'b', 'q3' => 'c'];


?>

<h1>Welcome to the quiz</h1>
<p>Please enter your name</p>

<form action="q1.php" method='POST'>
    <input type="text" name='username' />
    <input type="submit" />
</form>
