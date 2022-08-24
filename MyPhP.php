<?php

$myDirectory=opendir("./Data");


$NN  = 0;

    while($entryName=readdir($myDirectory)) {
        if (strstr($entryName,"GVM")){
        $dirArray[$NN]=$entryName;
        $NN = $NN+1;
	   }
	}

	closedir($myDirectory);
	
	
	$indexCountFolder=count($dirArray);
	$NFA = 0;

	for($index=0; $index < $indexCountFolder; $index++) {
	$myDirectory2=opendir("./Data/".$dirArray[$index]);

        $NV = 0;
        $NA = 0;

        while($entryName=readdir($myDirectory2)) {
        if (strpos($entryName,"mp3")){
        $DirFolder[$NFA] = $dirArray[$index];
        $DirMP3[$NFA][$NA]="./Data/".$dirArray[$index]."/".$entryName;
        $MP3Name[$NFA][$NA]= explode("_", $entryName);
        $NA = $NA + 1;
        }
        }
        $NFA = $NFA+1;
    
        }
	$NFA = 0;

	for($index=0; $index < $indexCountFolder; $index++) {
        $myDirectory2=opendir("./Data/".$dirArray[$index]);
        $NV = 0;
        while($entryName=readdir($myDirectory2)) {
        if (strpos($entryName,"mp4")){
        $DirMP4[$NFA][$NV]="./Data/".$dirArray[$index]."/".$entryName;
        $MP4name[$NFA][$NV]=$entryName;
        $NV = $NV+1;
        }
        }
        $NFA = $NFA+1;
        }
        
	$NFA = 0;
	
	for($index=0; $index < $indexCountFolder; $index++) {
        $myDirectory2=opendir("./Data/".$dirArray[$index]);
        while($entryName=readdir($myDirectory2)) {
        if (strpos($entryName,"pdf")){
            $Dirpdf[$NFA]="./Data/".$dirArray[$index]."/".$entryName;
            }
        }
        $NFA = $NFA+1;
 
    }
?>
