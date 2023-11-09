<?php
include ('Team.php');

$name = $_GET['teamName'];

$homeTeam = new Team($name);

$matchResults = [
    ['homeTeamScore' => $_GET['home1'], 'opposingTeamScore' => $_GET['away1']],
    ['homeTeamScore' => $_GET['home2'], 'opposingTeamScore' => $_GET['away2']],
    ['homeTeamScore' => $_GET['home3'], 'opposingTeamScore' => $_GET['away3']]
];

foreach ($matchResults as $result) {
    $homeTeamScore = $result['homeTeamScore'];
    $opposingTeamScore = $result['opposingTeamScore'];
    
    $homeTeam->finalScore($homeTeamScore, $opposingTeamScore);
}

$goalAverage = $homeTeam->getGoalAverage();
echo "Goal Average for {$name}: {$goalAverage}";

?>
