<!DOCTYPE html>
<html>
<head>
	<title>Javascript motion detection</title>
	<link rel="stylesheet" href="styles/main.css"/>
</head>
<body>

<div id="description">This demo plays sounds, please turn the volume up. Reach the xylophone with your hands to play the notes.</div>
<div id="message">Loading assets...</div>
<div id="info" style="display:none">
	<p>You are watching a video demo, follow the instructions below to enable your webcam.</p>
	<p>Please view this page using <a href="http://tools.google.com/dlpage/chromesxs" target="_blank">Google Chrome Canary</a> and enable the "Media Stream" flag in about:flags.</p>
	<img src="images/mediastream.png"/>
</div>

<!--<device type="media"></device>-->
<video id="webcam" autoplay width="640" height="480"></video>

<video id="video-demo" controls="controls" poster="videos/jsdetection.jpg" width="640" height="480"  onclick="if(/Android/.test(navigator.userAgent))this.play();">
	<source src="videos/jsdetection.mp4" type="video/mp4" />
	<source src="videos/jsdetection.ogv" type="video/ogg" />
	<source src="videos/jsdetection.webm" type="video/webm" />
	Your browser doesn't support the html 5 video tag.
</video>

<canvas id="canvas-source" style="display:none;" width="640" height="480"></canvas>
<canvas id="canvas-blended" style="display:none;" width="640" height="480"></canvas>

<div id="xylo">
	<div id="back"><img id="xyloback" src="images/xylo.png"/></div>
	<div id="front">
		<img id="note0" src="images/note1.png"/>
		<img id="note1" src="images/note2.png"/>
		<img id="note2" src="images/note3.png"/>
		<img id="note3" src="images/note4.png"/>
		<img id="note4" src="images/note5.png"/>
		<img id="note5" src="images/note6.png"/>
		<img id="note6" src="images/note7.png"/>
		<img id="note7" src="images/note8.png"/>
	</div>
</div>


<script src="js/libs/jquery.js"></script>
<script src="js/libs/buffer-loader.js"></script>
<script src="js/app.js"></script>

</body>
</html>