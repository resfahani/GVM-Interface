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
	if (strpos($DirMP3[$_GET['varname']][$index],"AHDS")){
	$AHDS[$n]=$DirMP3[$_GET['varname']][$index];
	$n = $n+1;
	}
	}
    $NAHDS = shell_exec("python FreqDit.py $AHDS[0] $AHDS[1] $AHDS[2]");
    ?>
<div>

<div class="layer1">

    <div id="container1" class="video-container" >
        <div id="video-player">
            <video  class="video"  width="100%"  src="<?php   echo $DirMP4[$_GET["varname"]][0];?>";" type="video/mp4">
            </video>
        </div>
    </div>

    <div id="container2" class="video-container2" >
        <div id="video-player">
            <video  class="video2" width="100%"   src="<?php   echo $DirM4V[$_GET["varname"]][0];?>";" type="video/m4v">
            </video>
        </div>
    </div>

</div>
<div class="layer2" >
 <div id="playlist"  ></div>
</div>
</div>
    
    <div class="btn-group">
      <span class="btn-pause btn btn-warning"><i class="fa fa-pause"></i></span>
      <span class="btn-play btn btn-success"><i class="fa fa-play"></i></span>
      <span class="btn-stop btn btn-danger"><i class="fa fa-stop"></i></span>
      <span class="btn-rewind btn btn-success"><i class="fa fa-fast-backward"></i></span>
      <span class="btn-fast-forward btn btn-success"><i class="fa fa-fast-forward"></i></span>
    </div>

    
    
<script>
var playlist = WaveformPlaylist.init({
  samplesPerPixel: 3000,
  mono: false,
  waveHeight: 100,
  container: document.getElementById("playlist"),
  state: 'cursor',
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
  seekStyle : 'fill',
  zoomLevels: [500, 1000, 3000, 5000],
});


playlist.load([
  {
    "src":  "<?php   echo $AHDS[$NAHDS[5]];?>",
    "name": "Top (AHDS<?php echo $NAHDS[5]+1;?>)",
    "states": {
    cursor: true        
    },
    continuousplay :true
  },
  {
    "src":  "<?php   echo $AHDS[$NAHDS[3]];?>",
    "name": "Middle (AHDS<?php echo $NAHDS[3]+1;?>)",
        "states": {
    cursor: true        
    },

  },
  {
    "src":  "<?php   echo $AHDS[$NAHDS[1]];?>",
    "name": "Bass (AHDS<?php echo $NAHDS[1]+1;?>)",
        "states": {
    cursor: true        
    },

  }
]).then(function() {
  //can do stuff with the playlist.
});

</script>
    <script type="text/javascript" src="emitter.js"></script>


  </body>

</html>
