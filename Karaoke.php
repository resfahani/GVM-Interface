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
    $n = 0;
	$Nn=count($DirMP3[$_GET['varname']]);
	for($index=0; $index < $Nn; $index++) {
	$AHDS[$n]=$DirMP3[$_GET['varname']][$index];
	$n = $n+1;
	}
	
	for($index=0; $index < count($DirMP3[$_GET['varname']]); $index++) {
		$Nn=count($MP3Name[$_GET['varname']][$index])-1;

        if ($MP3Name[$_GET['varname']][$index][$Nn][0] == "T"){
            $NT = $index;
        }
    if ($MP3Name[$_GET['varname']][$index][$Nn][0] == "M"){
            $NM = $index;
        }
    if ($MP3Name[$_GET['varname']][$index][$Nn][0] == "B"){
            $NB = $index;
        }
    }
    
	for($index=0; $index < count($DirMP4[$_GET['varname']]); $index++) {
        
        if (strpos($DirMP4[$_GET['varname']][$index],"KAR")){
            $NV = $index;
        }
    }

?>



<div class="layer1">

        
        <div id="video-player">
        <video  class="video"    src="<?php   echo $DirMP4[$_GET["varname"]][$NV];?>";" type="video/mp4"></video>
        </div>


<div class="layer2">
    <div id="playlist"  > </div>
    
    <div class="btn-group">
        <span class="btn-pause btn btn-warning"><i class="fa fa-pause"></i></span>
        <span class="btn-play btn btn-success"><i class="fa fa-play"></i></span>
        <span class="btn-stop btn btn-danger"><i class="fa fa-stop"></i></span>
        <span class="btn-rewind btn btn-success"><i class="fa fa-fast-backward"></i></span>
        <span class="btn-fast-forward btn btn-success"><i class="fa fa-fast-forward"></i></span>
    </div>
</div>
    
</div>

    
    
<script>
var playlist = WaveformPlaylist.init({
  samplesPerPixel: 3000,
  mono: false,
  waveHeight: 100,
  container: document.getElementById("playlist"),
  state: 'select',
  colors: {
      waveOutlineColor: '#E0EFF1',
      timeColor: 'grey',
      fadeColor: 'black'
  },
  timescale: true,
  controls: {
    show: true, //whether or not to include the track controls
    width: 200 //width of controls in pixels
  },
  seekStyle : 'line',
  zoomLevels: [100, 200, 3000, 5000],
  AutomaticScroll:true,
  	    annotationList: {
	      annotations: [],
	      controls: [],
	      editable: true,
	      linkEndpoints: true,
	      continuousplay: true
	    },
	    automaticscroll: true,
	    continuousplay: true,
});



playlist.load([
  {
    "src":  "<?php   echo $AHDS[$NT];?>",
    "name": "Top (<?php   echo $MP3Name[$_GET['varname']][$NT][$Nn][0];?>)",
          "states": {
    select: true        
    },
    },
    {
    "src":  "<?php   echo $AHDS[$NM];?>",
    "name": "Middle (<?php   echo $MP3Name[$_GET['varname']][$NM][$Nn][0];?>)",
  },
  {
    "src":  "<?php   echo $AHDS[$NB];?>",
    "name": "Bass (<?php   echo $MP3Name[$_GET['varname']][$NB][$Nn][0]?>)",

  }
]).then(function() {
  //can do stuff with the playlist.
});

</script>
    <script type="text/javascript" src="emitter.js"></script>


  </body>

</html>
