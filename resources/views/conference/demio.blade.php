<head>
		<meta charset="UTF-8">
    <title>Sanlam Leadership</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- google fonts -->

		<!-- Css link -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, html {
  height: 100%;
  margin: 0;
}

#bg {
  /* The image used */
  /* background-image: url("{{ asset('img') }}/login.jpg"); */

  width: 100%; 
    height: 100%; 
    position: fixed; 
    left: 0px; 
    top: 0px; 
    
}

.stretch {
    width:100%;
    height:100%;
    z-index: -1; /* Ensure div tag stays behind content; -999 might work, too. */
}
.divInImage {
    /* border:1px solid #fff; */
    display:block;
    position:absolute;
    /* background-color:rgba(0,0,0,0.1); */
}
#bg a {
    /* border:1px solid #fff; */
    display:block;
    position:absolute;
    background-color:rgba(0,0,0,0.1);
}
#bg a:hover {
    background-color:rgba(255,255,255,0.3);
}
#myImage_zone1{
    width:80%;
    height:80%;
    top:16%;
    left:10%;
}

.btn-circle {
				width: 70px;
				height: 70px;
				padding: 10px 16px;
				margin: 7px;
				border-radius: 35px;
				font-size: 24px;
				line-height: 1.33;
			}

            .header {
	width: 100%;
	position: fixed; 
	top: 4%;
	
  padding: 10px 16px;
  color: #f1f1f1;
  text-align: center;
}

h2{
	font-size: 48px !important;
}

</style>

	</head>


<body>
<div id="bg">
        <img src="{{$bg->value}}" class="stretch" alt="" />

	<div id="myImage_zone1" class="divInImage">
    <iframe id="bigmarker_embed_conference_room" src="https://www.bigmarker.com/the-hansen-group/Test-Webinar" allow="camera;microphone" width="100%" height="100%" allowfullscreen="allowfullscreen" frameborder="0"></iframe>    
    </div>
    <!-- <a id="myImage_zone1" href="{{ route('room') }}"></a>
    <a id="myImage_zone2" href="{{ route('exhibition') }}"></a>
    <a id="myImage_zone3"></a> -->
    <!-- <a id="myImage_zone2" onclick="event.preventDefault();document.getElementById('login-form').submit();"></a> -->
</div>
<div class="header" id="myHeader">
  <h2>BigMarker Webinar</h2>
</div> 

<script>
function redirectToLobby(){
	window.location.href = "{{ route('lobby') }}";
}
</script>
<div style="position: fixed; bottom: 0; left:0; width:70px;">
	<button id="homeButton" type="button" class="btn btn-primary btn-circle" onclick="redirectToLobby();"><i class="fa fa-home"></i>
</div>
</body>