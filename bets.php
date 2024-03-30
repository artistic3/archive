<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");

$step = "bets";
$raceDate = trim($argv[1]);
$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate;

$allRacesOdds = include($currentDir . DIRECTORY_SEPARATOR . "odds.php");
$history = include(__DIR__ . DIRECTORY_SEPARATOR . "winhistory.php");
$outFile = $currentDir . DIRECTORY_SEPARATOR . "$step.php";

if(file_exists($outFile)){
    $oldData = include($outFile);
}

$totalRaces = count($allRacesOdds);

$outtext = "<?php\n\n";
$outtext .= "return [\n";
for ($raceNumber = 1; $raceNumber <= $totalRaces; $raceNumber++) {
    if(!isset($allRacesOdds[$raceNumber])) continue;
    if(isset($oldData)){
        if(isset($oldData[$raceNumber]['favorites'])) $oldFavorites = explode(", ", $oldData[$raceNumber]['favorites']);
        if(isset($oldData[$raceNumber]['additional favorites'])) $oldAddedFavorites = explode(", ", $oldData[$raceNumber]['additional favorites']);
    }
    if(isset($oldFavorites)) $favorites = $oldFavorites;
    else $favorites = [];

    if(isset($oldAddedFavorites)) $addedFavorites = $oldAddedFavorites;
    else $addedFavorites = [];

    $winsArray = $allRacesOdds[$raceNumber];
    asort($winsArray);
    $runners = array_keys($winsArray);
    $favorite = $runners[0];
    if(count($favorites) < 3){
        if(!in_array($favorite, $favorites)) $favorites[] = $favorite;
    }
    else{
        if(!in_array($favorite, $addedFavorites) && !in_array($favorite, $favorites)) $addedFavorites[] = $favorite;
    }
    sort($runners);
    $racetext = "";
    $racetext .= "\t'$raceNumber' => [\n";
    $racetext .= "\t\t/**\n";
    $racetext .= "\t\tRace $raceNumber\n";
    $racetext .= "\t\t*/\n";
    $racetext .= "\t\t'favorites' => '" . implode(", ", $favorites) . "',\n"; 
    if(!empty($addedFavorites))  {
        $racetext .= "\t\t'additional favorites' => '" . implode(", ", $addedFavorites) . "',\n"; 
    }
    $favorites = array_merge($favorites, $addedFavorites);
    sort($favorites);
    $union = [];
    foreach($favorites as $one){
        foreach($favorites as $two){
            if(!isset($history[$raceNumber][$one]['win']) || !isset($history[$raceNumber][$two]['win'])) continue;
            if($two > $one){
                $win1 = array_intersect($history[$raceNumber][$one]['win'], $runners);
                $win2 = array_intersect($history[$raceNumber][$two]['win'], $runners);
                if(count($win1) > 6 || count($win2) > 6) continue;
                $inter = array_intersect($win1, $win2);
                if(count($inter) > 2){
                    // $racetext .= "\t\t'win hist(fav $one)' => '" . implode(", ", $win1) . "',\n"; 
                    // $racetext .= "\t\t'win hist(fav $two)' => '" . implode(", ", $win2) . "',\n"; 
                    $union = array_values(array_unique(array_merge($union, $inter)));
                    $racetext .= "\t\t'inter(fav $one, fav $two)' => '" . implode(", ", $inter) . "',\n"; 
                }
            }
        }
    }
    if(!empty($union)){
        $candidates = [2, 3, 4, 5, 6];
        $place = array_intersect($favorites, $candidates);
        $racetext .= "\t\t'win' => '" . implode(", ", $place) . "',\n";
    }
    $racetext .= "\t],\n";
    unset($oldFavorites);
    unset($favorites);
    unset($oldAddedFavorites);
    unset($addedFavorites);
    unset($union);
    unset($place);
    $outtext .= $racetext;
}
$outtext .= "];\n";
file_put_contents($outFile, $outtext);