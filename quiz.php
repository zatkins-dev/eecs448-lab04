<?php
    $q = array($_POST["q1"], $_POST["q2"], $_POST["q3"],$_POST["q4"],$_POST["q5"]);
    $q_k = array("q1_c", "q2_c", "q3_a", "q4_d", "q5_a");

    $correct = 0;

    for ($i = 0; $i<5; $i++) {
        if ($q1 == $q1_k) {
            $correct++;
        }
    }
    

?>