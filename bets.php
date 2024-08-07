<?php

$raceDate = trim($argv[1]);

if(isset($argv[2])) $revision = trim($argv[2]);
else $revision = "";

include "condition$revision.php";
$step = "bets$revision";
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "history$revision.php");

function factorial($n){
    if($n <= 0) return 1;
    $fact = 1;
    for($i = 1; $i <= $n; $i++) $fact *= $i;
    return $fact;
}
function combination($p, $n){
    if($n < $p) return 0;
    return factorial($n) / (factorial($p) * factorial($n - $p));
}

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$total = 0;
$totalWin = 0;
$totalPlace = 0;
$totalWP = 0;
$totalQin = 0;
$totalTrio = 0;

$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$oddsFile = $currentDir . DIRECTORY_SEPARATOR . "odds.php";
$winOddsFile = $currentDir . DIRECTORY_SEPARATOR . "winodds.php";
if(file_exists($winOddsFile)) $allWinOdds = include($winOddsFile);
$allRacesOdds = include($oddsFile);
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

if(file_exists($outFile)){
    $oldData = include($outFile);
}

$numberOfRaces = count($allRacesOdds);

$outtext = "<?php\n\n";
$outtext .= "return [\n";

$totalBets = [];
$totalRace = [];

for ($raceNumber = 1; $raceNumber <= $numberOfRaces; $raceNumber++) {
    $totalBets[$raceNumber] = 0;
    $totalRace[$raceNumber] = 0;
    if(isset($oldData)){
        if(isset($oldData[$raceNumber]['favorites'])) $oldFavorites = explode(", ", $oldData[$raceNumber]['favorites']);
        if(isset($oldData[$raceNumber]['official win'])) $officialWin = explode(", ", $oldData[$raceNumber]['official win']);
        if(isset($oldData[$raceNumber]['win amount'])) $winAmount = $oldData[$raceNumber]['win amount'];
        if(isset($oldData[$raceNumber]['qin amount'])) $qinAmount = $oldData[$raceNumber]['qin amount'];
        if(isset($oldData[$raceNumber]['trio amount'])) $trioAmount = $oldData[$raceNumber]['trio amount'];
        if(isset($oldData[$raceNumber]['place amount'])) $placeAmount = $oldData[$raceNumber]['place amount'];
    }
    if(isset($oldFavorites)) $favorites = $oldFavorites;
    else $favorites = [];
    $winsArray = $allRacesOdds[$raceNumber];
    asort($winsArray);
    $runners = array_keys($winsArray);
    $first7 = array_slice($runners, 0, 7);
    $favorite = $runners[0];
    if(!in_array($favorite, $favorites)) $favorites[] = $favorite;
    $favorites = array_intersect($favorites, $runners);
    sort($favorites);
    sort($runners);
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'favorites' => '" . implode(", ", $favorites) . "',\n"; 
    $racetext .= "\t\t'runners' => '" . implode(", ", $runners) . "',\n"; 
    if(isset($officialWin)){
        $racetext .= "\t\t'official win' => '" . implode(", ", $officialWin) . "',\n"; 
    }
    if(isset($winAmount)){
        $racetext .= "\t\t'win amount' => " . $winAmount . ",\n"; 
    }
    if(isset($qinAmount)){
        $racetext .= "\t\t'qin amount' => " . $qinAmount . ",\n"; 
    }
    if(isset($trioAmount)){
        $racetext .= "\t\t'trio amount' => " . $trioAmount . ",\n"; 
    }
    if(isset($placeAmount)){
        $racetext .= "\t\t'place amount' => [\n";
        foreach($placeAmount as $place => $amount){
            $racetext .= "\t\t\t$place => $amount,\n";
        }
        $racetext .= "\t\t],\n"; 
    }
    $intersections = [];
    $toWin = [];
    $first7 = array_values(array_unique(array_merge($first7, $favorites)));
    sort($first7);
    foreach($first7 as $F){
        $intersections[$F] = array_intersect($history[$raceNumber][$F]["win"], $runners);
        foreach($first7 as $horse){
            if($horse != $F) $intersections[$F] = array_intersect($intersections[$F], $history[$raceNumber][$horse]["win"]);
        }
        if(count($intersections[$F]) === 2) $toWin[] = $F;
    }
    $firstSet = true;
    foreach($favorites as $F){
        $wincandidates = array_intersect($history[$raceNumber][$F]["win"], $runners);
        if($firstSet) {
            $winInter = $wincandidates;
            $firstSet = false;
        }
        else {
            $winInter = array_intersect($winInter, $wincandidates);
        }
    }
    sort($winInter);
    $winInter = array_intersect($favorites, $winInter);
    $racetext .= "\t\t'win inter' => '" . implode(", ", $winInter) . "',\n";
    $unitBet = 30;
    $allValues = [];
    $winSets = [];
    foreach($runners  as $one){
        foreach($runners as $two){
            if($two > $one){
                foreach($runners as $three){
                    if($three > $two){
                        $set = [$one, $two, $three];
                        $temp = array_intersect($history[$raceNumber][$one]["win"], $history[$raceNumber][$two]["win"], $history[$raceNumber][$three]["win"], $runners);
                        $temp = array_intersect($set, $temp);
                        foreach($runners as $four){
                            if($four > $three){
                                $set = [$one, $two, $three, $four];
                                $temp = array_intersect($temp, $history[$raceNumber][$four]["win"]);
                                $temp = array_intersect($set, $temp);
                                if(count($temp) >= 2){
                                    $allValues = array_values(array_unique(array_merge($allValues, $set)));
                                    $winSets[] = $set;
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    $racetext .= "\t\t'count sets' => " . count($winSets) . ",\n"; 
    sort($allValues);
    $racetext .= "\t\t'allValues' => '" . implode(", ", $allValues) . "',\n";
    if(!empty($toWin)){
        $racetext .= "\t\t'win(count 2, $" . $unitBet . ")' => '" . implode(", ", $toWin) . "',\n"; 
        $totalBets[$raceNumber] += $unitBet * count($toWin);
        $totalWin -= 1 * $unitBet * count($toWin);
        if(isset($officialWin) && in_array($officialWin[0], $toWin)){
            $totalRace[$raceNumber] += ($unitBet / 10) * $winAmount;
            $racetext .= "\t\t'22 won(win bet)' => " . ($unitBet / 10) * $winAmount . ",\n";
            $totalWin += ($unitBet / 10) * $winAmount;
        }
    }
    if(!empty($allValues) && !in_array($raceNumber, [3, 4, 5, 6, 8]) && count($allValues) <= 7){
        $allValues = array_slice($allValues, 0, 6);
        $racetext .= "\t\t'win(allValues, $" . $unitBet . ")' => '" . implode(", ", $allValues) . "',\n"; 
        $totalBets[$raceNumber] += 1 * $unitBet * count($allValues);
        $totalWin -= 1 * $unitBet * count($allValues);
        if(isset($officialWin) && in_array($officialWin[0], $allValues)){
            $totalRace[$raceNumber] += ($unitBet / 10) * $winAmount;
            $racetext .= "\t\t'1 won(win bet)' => " . ($unitBet / 10) * $winAmount . ",\n";
            $totalWin += ($unitBet / 10) * $winAmount;
        }
    }
    if(count($favorites) >= 3 && count($winInter) >= 3){
        $racetext .= "\t\t'place(end-favorites, $" . 2 * $unitBet . ")' => '" .  end($favorites)  . "',\n"; 
        $totalBets[$raceNumber] += 2 * $unitBet;
        $totalPlace -= 2 * $unitBet;
        if(isset($officialWin) && in_array(end($favorites), array_slice($officialWin, 0, 3)) && isset($placeAmount[end($favorites)])){
            $totalRace[$raceNumber] += 2/10 * $unitBet * $placeAmount[end($favorites)];
            $racetext .= "\t\t'1 won(place bet)' => " . 2/10 * $unitBet * $placeAmount[end($favorites)] . ",\n";
            $totalPlace += 2/10 * $unitBet * $placeAmount[end($favorites)];
        }
    }
    if(in_array(count($winSets), $allValuesWin) && in_array(count(array_intersect($allValues, $favorites)), [2, 3])){
        $wp = array_intersect($allValues, $favorites);
        if(count($wp) === 2) $wp = range(1, $favorites[1]);
        if(count($wp) < 9){
            $racetext .= "\t\t'win(wp, " . $unitBet . ")' => '" . implode(", ", $wp) . "',\n"; 
            $totalBets[$raceNumber] += 1 * $unitBet * count($wp);
            $totalWin -= 1 * $unitBet * count($wp);
            if(isset($officialWin) && in_array($officialWin[0], $wp)){
                $totalRace[$raceNumber] += ($unitBet / 10) * $winAmount;
                $racetext .= "\t\t'2 won(win bet)' => " . ($unitBet / 10) * $winAmount . ",\n";
                $totalWin += ($unitBet / 10) * $winAmount;
            }
        }
        if(count($wp) === 3){
            $racetext .= "\t\t'place(end-wp, $" . 2 * $unitBet . ")' => '" . end($wp) . "',\n"; 
            $totalBets[$raceNumber] += 2 * $unitBet;
            $totalPlace -= 2 * $unitBet;
            if(isset($officialWin) && in_array(end($wp), array_slice($officialWin, 0, 3)) && isset($placeAmount[end($wp)])){
                $totalRace[$raceNumber] += (2 * $unitBet / 10) * $placeAmount[end($wp)];
                $racetext .= "\t\t'2 won(place bet)' => " . (2 * $unitBet / 10) * $placeAmount[end($wp)] . ",\n";
                $totalPlace += (2 * $unitBet / 10) * $placeAmount[end($wp)];
            }
        }
    }
    $racetext .= "\t\t'total bets' => $totalBets[$raceNumber],\n";
    $totalRace[$raceNumber] -= $totalBets[$raceNumber];
    if(isset($officialWin) && $totalBets[$raceNumber] > 0){
        $racetext .= "\t\t'total won in race $raceNumber' => " . $totalRace[$raceNumber] . ",\n";
        $total += $totalRace[$raceNumber];
    }
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    $outtext .= $racetext;
}
$outtext .= "];\n";
$outtext .= "//total wp: $totalWP\n";
$outtext .= "//total win: $totalWin\n";
$outtext .= "//total place: $totalPlace\n";
$outtext .= "//total qin: $totalQin\n";
$outtext .= "//total trio: $totalTrio\n";
$outtext .= "//total: $total\n";
file_put_contents($outFile, $outtext);
