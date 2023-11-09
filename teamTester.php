<?php

include("Team.php");

$myTeam = new Team("Tigers");

$myTeam->finalScore(3,2);
$myTeam->finalScore(2,2);
$myTeam->finalScore(1,0);

echo $myTeam->getGoalAverage();


?>