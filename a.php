<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/main.css">
  <script type="text/javascript" src="waveform-playlist.var.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

<body>

  <body>
  <?php include "MyPhP.php"; 
	?>

	
	    
	    
    <div id="container1" class="video-container">
        <div id="video-player">
            <video  class="video"  src="<?php   echo $DirMP4[0][0];?>";" type="video/mp4">
            </video>
        </div>
    </div>
	
	
    <div class="btn-group">
      <span class="btn-pause btn btn-warning"><i class="fa fa-pause"></i></span>
      <span class="btn-play btn btn-success"><i class="fa fa-play"></i></span>
      <span class="btn-stop btn btn-danger"><i class="fa fa-stop"></i></span>
      <span class="btn-rewind btn btn-success"><i class="fa fa-fast-backward"></i></span>
      <span class="btn-fast-forward btn btn-success"><i class="fa fa-fast-forward"></i></span>
    </div>

        <script type="text/javascript" src="emitter.js"></script>

</body>
</html>
