<?php

require_once "vadersentiment.php";

$textToTest = "La jolie Galline est une salope";

$s = new SentimentIntensityAnalyzer();
$result = $s->getSentiment($textToTest);

$s->dbg($result,1);

?>