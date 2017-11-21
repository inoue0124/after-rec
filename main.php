<?php
  session_start();
  if (!isset($_SESSION["user_id"])){
     header("Location:https:login.php");
     exit;
}
  if ($_SESSION["user_id"] != $_GET['u']){
     header("Location:https:login.php");
     exit;
}
  if ($_GET['p'] == 11) {
     header("Location: https:finish.php");
     exit;
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Online Voice Recorder</title>
  <link href="css/lib.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <h1>Online Voice Recorder</h1><hr class="style1">
  <div class="container">
  <div id="wrap">
  <div id="contents">
      <div id="user-panel">
      <div id="video-panel"></div>
      <div id="waveform-demo"></div>
        <input id="model-button" type="button" value="Model" />
        <input id="start" type="button" value="Record"/>
        <input id="play-button" type="button" value="Play" disabled="true" />
        <span id="time">0:00 / 0:00</span>
        <input id="submit-button" type="button" value="Next" disabled="true" />
        <div id="waveform-container">
          <div id="waveform"></div>
          <span id="task-progress">Task: <span id="task-progress-now"></span> / <span id="task-progress-all"></span></span>
          <span id="progress">Progress: <span id="progress-now"></span> / <span id="progress-all"></span></span>
        </div><!-- waveform-container -->
        </div><!-- user-panel -->

    </div><!-- contents -->
    <footer id="footer">Copyright &copy; <span class="nowyear"></span> Minematsu & Saito Laboratory, The University of Tokyo.</footer>
  </div><!-- wrap -->

  <script src="js/recorder.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.0.57/wavesurfer.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
  <script src="main.js"></script>
  <script type="text/javascript" src="js/footerFixed.js"></script>
</body>
</html>
