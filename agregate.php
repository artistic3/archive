<?php

if(!isset($argv[1])) die("Race Date Not Entered!!\n");
$raceDate = trim($argv[1]);
if(!isset($argv[2])) $venue = "ST";
else $venue = trim($argv[2]);

$currentDir = __DIR__ . DIRECTORY_SEPARATOR . $raceDate . $venue;
$outFile = $currentDir . DIRECTORY_SEPARATOR . "agregate.php";

if(file_exists($outFile)) $oldData = include($outFile);

$mainBetsFile = $currentDir . DIRECTORY_SEPARATOR . "bets.php";
$mainData = include($mainBetsFile);
$numberOfRaces = count($mainData);
$outtext = "<?php\n\n";
$outtext .= "return [\n";

$bets = [];
$unions = [];
$basicBet = 10;
foreach($mainData as $raceNumber => $shit) {
    $bets[$raceNumber] = ['favorites' => '(F) ' . $mainData[$raceNumber]['favorites']];
}
$dir = new DirectoryIterator($currentDir); 
foreach ($dir as $fileinfo) {
    if(!$fileinfo->isDot()&& preg_match("/(bets)/", $fileinfo->getFilename())) {
        $fullFilePath = $currentDir . DIRECTORY_SEPARATOR . $fileinfo->getFilename();
        $fileContents = include($fullFilePath);
        foreach($fileContents as $raceNumber => $data){
            if(isset($oldData[$raceNumber]["unions(\$$basicBet)"])) $oldUnions = explode(", ", $oldData[$raceNumber]["unions(\$$basicBet)"]);
            else $oldUnions = [];
            if(!isset($unions[$raceNumber])) $unions[$raceNumber] = [];
            if(isset($data['bets'])) {
                foreach($data['bets'] as $key => $value){
                    if(!in_array($value, $bets[$raceNumber])) {
                        $bets[$raceNumber][$key] = $value;
                    }
                    if(strpos($key, "qin(union") === 0){
                        $unions[$raceNumber] = array_values(array_unique(array_merge($unions[$raceNumber], explode(", ", $value))));
                    } 
                }
            }
            $oldUnions = array_values(array_unique(array_merge($oldUnions, $unions[$raceNumber])));
            sort($oldUnions);
            if(!empty($oldUnions)) {
                $bets[$raceNumber]["unions(\$$basicBet)"] = implode(", ", $oldUnions);
                $unionPlusFavorites = array_values(array_unique(array_merge($oldUnions, explode(", ",$mainData[$raceNumber]['favorites']))));
                sort($unionPlusFavorites);
            }
        }
    }
}
foreach($bets as $raceNumber => $data){
    if(!empty($data)){
        $racetext = "\t'$raceNumber' => [\n";
        $racetext .= "\t\t/**\n";
        $racetext .= "\t\tRace $raceNumber\n";
        $racetext .= "\t\t*/\n";
        foreach($data as $betDescription => $betContent) $racetext .= "\t\t'$betDescription' => '$betContent',\n";
        $racetext .= "\t],\n";
        $outtext .= $racetext;
    }
}
if(isset($unionPlusFavorites) && !empty($unionPlusFavorites)){
    $bets[$raceNumber]["union + favorites"] = implode(", ", $unionPlusFavorites);
}
$outtext .= "];\n";
file_put_contents($outFile, $outtext);
?>
