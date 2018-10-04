<?php
    $q = array($_POST["q1"], $_POST["q2"], $_POST["q3"],$_POST["q4"],$_POST["q5"]);
    $q_k = array("\$5.7 Billion", "Tunis", "5,472,730,538", "Homo neanderthalensis", "672");
    $q_text = array(
        "What was the GDP (gross domestic product) of Guam in 2015?",
        "What is the capital of Tunisia?",
        "How many unique Sudoku puzzles are possible?",
        "Which species in the genus <i>Homo</i> has the largest brain?",
        "What is the international telephone dialing code for Antarctica?"
    );
    $correct = array_map(function ($x,$y) {return ($x==$y);}, $q, $q_k);
    $ncorrect = array_sum($correct);
    $score = $ncorrect*20;
    echo "<html>
    <head>
        <script src=\"js/password.js\"> </script>
        <link rel=\"stylesheet\" href=\"../../style.css\"/>
        <title>
            Quiz Results
        </title>
    </head>
    <header>
        <nav>
            <a href=\"../../index.html\">Home</a>
            &#x2712;
            <a href=\"index.html\">Lab 04</a>
            &#x2712;
            <a href=\"quiz.html\">Quiz</a>
        </nav>
    </header>
    <main>
        <div class=\"content titlebox\">
            <h1>Quiz Results: $score%</h1>
            <h2 style=\"background-color:inherit;\">You got $ncorrect questions correct.</h2>
        </div>";
    echo "<div class=\"content\">";
    for ($i = 0; $i<5; $i++) {
        $qNum = $i+1;
        echo "<h3>Q$qNum.  $q_text[$i]: ";
        if ($q[$i] == $q_k[$i]) {
            echo "<span style=\"color:green;\">Correct.</span></h3>";
            $correct[$i] = TRUE;
            $ncorrect++;
        } else {
            echo "<span style=\"color:red;\">Incorrect.</span></h3>";
        }
        echo "Your answer: $q[$i]";
        echo "<br>";
        echo "Correct Answer: $q_k[$i]";
    }
    echo "</div>";
    $score = (100*$ncorrect)/5;
    echo "</main>
    </html>";
?>