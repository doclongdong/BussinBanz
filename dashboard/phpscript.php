<?php

	$nBets =  50;
	$nPlayers = 8;
	$DollarsPerPlayerPerBet = 200;
	$DollarsUnitString = "$";

	$totalMonies = $nBets * $nPlayers * $DollarsPerPlayerPerBet;
	echo "The total number of dollars is" . $DollarsUnitString . $totalMonies;
?>
