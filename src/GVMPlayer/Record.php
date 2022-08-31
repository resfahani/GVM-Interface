<!DOCTYPE html>
<head>
<title>MWAP</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/main.css">
  <script type="text/javascript" src="waveform-playlist.var.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

</head>

  <body>
  <?php include "MyPhP.php"; 
	
	for($index=0; $index < count($DirMP4[$_GET['varname']]); $index++) {
        
        if (strpos($DirMP4[$_GET['varname']][$index],"REC")){
            $NV = $index;
        }
    }

?>


<div class="layerRecord">
    <video  controls><source src="<?php   echo $DirMP4[$_GET["varname"]][$NV];?>";" type="video/mp4"></video>    
</div>

</html>
