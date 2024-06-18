<?php

include 'condition.php';

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
$totalQin = 0;
$totalTrio = 0;
$step = "bets";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$oddsFile = $currentDir . DIRECTORY_SEPARATOR . "odds.php";
$winOddsFile = $currentDir . DIRECTORY_SEPARATOR . "winodds.php";
if(file_exists($winOddsFile)) $allWinOdds = include($winOddsFile);
if(file_exists($oddsFile)) $allRacesOdds = include($oddsFile);
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "history.php");
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

if(file_exists($outFile)){
    $oldData = include($outFile);
}

if(file_exists($oddsFile)) $numberOfRaces = count($allRacesOdds);
elseif(file_exists($outFile)) $numberOfRaces = count($oldData);
else die('No input Files!');

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
    $favorite = $runners[0];
    if(!in_array($favorite, $favorites)) $favorites[] = $favorite;
    $favorites = array_intersect($favorites, $runners);
    sort($favorites);
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'favorites' => '" . implode(", ", $favorites) . "',\n"; 
    sort($runners);
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
    $firstSet = true;
    foreach($favorites as $F){
        $wincandidates = array_intersect($history[$raceNumber][$F]["win"], $runners);
        $qincandidates = array_intersect($history[$raceNumber][$F]["qin"], $runners);
        $triocandidates = array_intersect($history[$raceNumber][$F]["trio"], $runners);
        if($firstSet) {
            $winInter = $wincandidates;
            $qinInter = $qincandidates;
            $trioInter = $triocandidates;
            $firstSet = false;
        }
        else {
            $winInter = array_intersect($winInter, $wincandidates);
            $qinInter = array_intersect($qinInter, $qincandidates);
            $trioInter = array_intersect($trioInter, $qincandidates);
        }
    }
    sort($winInter);
    sort($qinInter);
    sort($trioInter);
    $winInter = array_intersect($favorites, $winInter);
    $qinInter = array_intersect($favorites, $qinInter);
    $trioInter = array_intersect($favorites, $trioInter);
    $trioPivots = [];
    $winPivots = [];
    $qinPivots = [];
    foreach($favorites as $F){
        foreach($favorites as $other){
            if($F !== $other){
                $candidates = array_intersect($history[$raceNumber][$other]["win"], $runners);
                if(in_array($F, $candidates) && !in_array($F, $winPivots)) $winPivots[] = $F;
                $candidates = array_intersect($history[$raceNumber][$other]["qin"], $runners);
                if(in_array($F, $candidates) && !in_array($F, $qinPivots)) $qinPivots[] = $F;
                $candidates = array_intersect($history[$raceNumber][$other]["trio"], $runners);
                if(in_array($F, $candidates) && !in_array($F, $trioPivots)) $trioPivots[] = $F;
            }
        }
    }
    $racetext .= "\t\t'win inter' => '" . implode(", ", $winInter) . "',\n";
    $racetext .= "\t\t'qin inter' => '" . implode(", ", $qinInter) . "',\n";
    $racetext .= "\t\t'trio inter' => '" . implode(", ", $trioInter) . "',\n";
    $racetext .= "\t\t'win pivots' => '" . implode(", ", $winPivots) . "',\n";
    $racetext .= "\t\t'qin pivots' => '" . implode(", ", $qinPivots) . "',\n";
    $racetext .= "\t\t'trio pivots' => '" . implode(", ", $trioPivots) . "',\n";
    $unitBet = 100;
    $compactExpr = count($favorites) * (count($winInter) + count($qinInter) + count($trioInter));
    $condition = count($favorites) >= 3 && count($winInter) >= 3 && count($qinInter) >= 3 && count($trioInter) >= 3;
    if($condition){
        // if(in_array($compactExpr, $biggestFavoritePlace)){
        $racetext .= "\t\t'place($" . $unitBet . ")' => '" .  end($favorites)  . "',\n"; 
        $totalBets[$raceNumber] += $unitBet;
        $totalPlace -= $unitBet;
    }
    $surePlace = [];
    foreach($placeCondition as $placer => $criteria){
        if(in_array($compactExpr, $criteria)){
            $surePlace[] = $placer;
        }
    }
    if(isset($officialWin) && $totalBets[$raceNumber] > 0){
        $totalRace[$raceNumber] -= $totalBets[$raceNumber];
        $racetext .= "\t\t'total bets' => $totalBets[$raceNumber],\n";
        if($condition) {
            // if(in_array($compactExpr, $biggestFavoritePlace)) {
            if(in_array(end($favorites), array_slice($officialWin, 0, 3)) && isset($placeAmount[end($favorites)])){
                $totalRace[$raceNumber] += 1/10 * $unitBet * $placeAmount[end($favorites)];
                $racetext .= "\t\t'4 won(place bet)' => " . 1/10 * $unitBet * $placeAmount[end($favorites)] . ",\n";
                $totalPlace += 1/10 * $unitBet * $placeAmount[end($favorites)];
            }
        }
        $racetext .= "\t\t'total won in race' => " . $totalRace[$raceNumber] . ",\n";
        $total += $totalRace[$raceNumber];
    }
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    $outtext .= $racetext;
}
$outtext .= "];\n";
$outtext .= "//total win: $totalWin\n";
$outtext .= "//total place: $totalPlace\n";
$outtext .= "//total qin: $totalQin\n";
$outtext .= "//total trio: $totalTrio\n";
$outtext .= "//total: $total\n";
file_put_contents($outFile, $outtext);