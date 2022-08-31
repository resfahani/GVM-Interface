<!DOCTYPE html>
<html>
<link rel="stylesheet" href="./style.css">
   <script src="sorttable.js"></script>

<body>

<div id="container">
	<h1>GVMOL Repository (Test Version)</h1>

	<table class="sortable">
	<thead>
	    <tr>
	    
            <th><center>No</center></th>
            <th><center>GVMID</center></th>
            <th><center>Song Name</center></th>
            <th><center>Record Session<br>(Video)</center></th>
            <th><center>Audio Mix<br>(Audio)</center></th>
            <th><center>F0 Trajectories<br>(Video)</center></th>
            <th><center>Pseudo Score<br>(Video)</center></th>
            <th><center>Karaoke<br>(Video)</center></th>
            <th><center>Meta Information<br>(PDF)</center></th>
            <th></th>

    </tr>
    </thead>
    <tbody>


<?php 
include 'MyPhP.php';
error_reporting(0);
$n = count($dirArray);

for($index=0; $index <= $n-1; $index++):?>
<?php 
$Info =  explode( '_', $DirFolder[$index]);
$ID = preg_replace("([A-Z])", " $0", $Info[1]);
$Place = preg_replace("([A-Z])", " $0", $Info[2]);
$Performer = preg_replace("([A-Z])", " $0", $Info[3]);
$Date = preg_replace("([A-Z])", " $0", $Info[4]);
$Date = $Date[0].$Date[1].$Date[2].$Date[3]."/".$Date[4].$Date[5]."/".$Date[6].$Date[7];
?>
<tr> 

<td><center><?php echo $index+1;?></center></td>
<td><center><?php echo $Info[0];?></center></td>
<td><center><?php echo $ID;?></center></td>
<td><center><a href="Record.php?varname=<?php echo $index;?>" target="_blank">Play</a></center></td> 
<td><center><a href="Audio.php?varname=<?php echo $index;?>" target = "_blank"> Play</a></center></td> 
<td><center><a href="F0.php?varname=<?php echo $index;?>" target="_blank">Play</a></center></td> 
<td><center><a href="Pseudo.php?varname=<?php echo $index;?>" target = "_blank">Play</a></center></td> 
<td><center><a href="Karaoke.php?varname=<?php echo $index;?>" target = "_blank"> Play</a></center></td> 
<td><center><a href="<?php echo $Dirpdf[$index];?>" target = "_blank" >Show Info</a></td> 


</tr>
<?php endfor; 

?>

</body>
</html>
