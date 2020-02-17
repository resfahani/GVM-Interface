<!DOCTYPE html>
<html>
<link rel="stylesheet" href="./style.css">
   <script src="sorttable.js"></script>

<body>

<div id="container">
	<h1>GVM Directory contents</h1>

	<table class="sortable">
	<thead>
	    <tr>
            <th>No.</th>
            <th>Identifier</th>
            <th>Song</th>
            <th>Place</th>
            <th>Performer(s)</th>
            <th>Date</th>
            <th>HDS</th>
            <th>LRX</th>
            <th></th>
            
            
        </tr>
    </thead>
    <tbody>


<?php 
include 'MyPhP.php';
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
<td><?php echo $index;?></td>
<td><?php echo $Info[0];?></td>
<td><?php echo $ID;?></td>
<td><?php echo $Place;?></td>
<td><?php echo $Performer;?></td>
<td><?php echo $Date?></td>
<td><a href="playerHDS.php?varname=<?php echo $index;?>"><?php echo "Play"?></a></td> 
<td><a href="playerLRX.php?varname=<?php echo $index;?>"><?php echo "Play"?></a></td> 

</tr>
<?php endfor; 

?>

</body>
</html>
