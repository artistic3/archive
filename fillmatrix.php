<?php

$outFile = __DIR__ . DIRECTORY_SEPARATOR . "matrix.php";
$outtext = "<?php\n\n";
$outtext .= "return [\n";
$matrix = [];
for($i = 1; $i <= 11; $i++){
    for($j = 1; $j <= 14; $j++){
        $matrix[$i][$j] = [];
    }
}

$dir = new DirectoryIterator(__DIR__);
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot() && $fileinfo->isDir() && preg_match("/^[0-9]+$/", $fileinfo->getFilename())) {
        $betsFile = __DIR__ . DIRECTORY_SEPARATOR . $fileinfo->getFilename() . DIRECTORY_SEPARATOR . "bets.php";
        $bets = include($betsFile);
        foreach($bets as $raceNumber => $data){
            if(!isset($data['official win'])) continue;
            $favorites = explode(", ", $data['favorites']);
            $result = explode(", ", $data['official win']);
            $history = explode(", ", $data['win hist']);
            foreach($history as $candidate){
                if(in_array($candidate, $result) && is_numeric($candidate)){
                    foreach($favorites as $favorite){
                        if(is_numeric($favorite) && !isset($matrix[$raceNumber][$favorite][$candidate])) $matrix[$raceNumber][$favorite][$candidate] = true;
                    }
                }
                else{
                    foreach($favorites as $favorite){
                        if(is_numeric($favorite) && is_numeric($candidate)) $matrix[$raceNumber][$favorite][$candidate] = false;
                    }
                }
               
            }
        }
    }
}
foreach($matrix as $raceNumber => $data){
    $outtext .= "\t$raceNumber => [\n";
    foreach($data as $favorite => $candidates){
        $outtext .= "\t\t$favorite => [\n";
        foreach($candidates as $candidate => $value){
            if($data[$favorite][$candidate] === true) $outtext .= "\t\t\t$candidate => true,\n";
            else $outtext .= "\t\t\t$candidate => false,\n";
        }
        $outtext .= "\t\t],\n";
    }
    $outtext .= "\t],\n";
}
$outtext .= "];\n";
file_put_contents($outFile, $outtext);
?>