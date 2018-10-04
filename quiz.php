<?php
    $q = array($_POST["q1"], $_POST["q2"], $_POST["q3"],$_POST["q4"],$_POST["q5"]);
    $q_k = array("C", "C", "A", "D", "A");
    var_dump($_POST);
    $correct = array(FALSE,FALSE,FALSE,FALSE,FALSE);
    $ncorrect = 0;
    for ($i = 0; $i<5; $i++) {
        $qNum = $i+1;
        echo "<div>";
        echo "<p>";
        echo "Number $qNum:";
        echo "<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;Your answer: {$q[$i]}";
        echo "<br>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;Correct Answer: {$q_k[$i]}";
        echo "<br>";
        if ($q[$i] == $q_k[$i]) {
            $correct[$i] = TRUE;
            $ncorrect++;
        }
        $text = $correct[$i] ? 'correct' : 'incorrect';
        echo "Number $qNum is $text";
        echo "</p>";
        echo "</div>";
    }
    $score = (100*$ncorrect)/5;

    echo "\n$score";
?>