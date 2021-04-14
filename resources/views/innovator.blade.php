<head>
		<meta charset="UTF-8">
		<title>Thriving Through Covid</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- google fonts -->

		<!-- Css link -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, html {
  height: 100%;
  margin: 0;
  overflow: hidden;
}

#bg {
  /* The image used */
  /* background-image: url("{{ asset('img') }}/login.jpg"); */

  width: 100%; 
    height: 100%; 
    position: relative; 
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
    width:11.8%;
    height:7%;
    top:39.6%;
    left:76.2%;
    border-radius: 10px;
}
#myImage_zone2{
    width:11.8%;
    height:7%;
    top:53.8%;
    left:76.2%;
    border-radius: 10px;
}
#myImage_zone3{
    width:11.8%;
    height:7%;
    top:67%;
    left:76.2%;
    border-radius: 10px;
}

.btn-circle {
				width: 70px;
				height: 70px;
				padding: 10px 16px;
				border-radius: 35px;
				font-size: 24px;
        margin: 7px;
				line-height: 1.33;
			}
      nav li a {
    color: #000051;
}
</style>

	</head>


<body>
<nav class="navbar navbar-expand-sm bg-light">

  <!-- Links -->
  <a href="#" class="navbar-left" style="margin-right: 3%;"><img src="{{ asset('img') }}/ttc/latest/logo.png"></a>
  <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('lobby') }}">Lobby</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('innovator') }}">Schedule</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('exhibition') }}">Exhibition Hall</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('breakaway') }}">Breakaway Rooms</a>
    </li>
		<li class="nav-item">
		<a class="nav-link"  href="{{ route('logout') }}" onclick="event.preventDefault();
       document.getElementById('logout-form').submit();">Log Out</a>
		</li>
  </ul>


</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
<div id="bg">
    <img src="{{ asset('img') }}/ttc/latest/schedule2.jpg" class="stretch" alt="" />
    <a id="myImage_zone1" href="{{ route('room') }}"></a>
    <a id="myImage_zone2" href="{{ route('breakawayroom') }}"></a>
    <a id="myImage_zone3" href="{{ route('breakawayroom2') }}"></a>
    <!-- <a id="myImage_zone2" onclick="event.preventDefault();document.getElementById('login-form').submit();"></a> -->
</div>
<!-- <script src="https://embed.clickmeeting.com/embed_conference.html?r=1716098224950816&l=2e2b9099269534c54309a70060383c9f"></script> -->
<script>
function redirectToLobby(){
	window.location.href = "{{ route('lobby') }}";
}
</script>
<div style="position: fixed; bottom: 0; left:0; width:70px;">
	<button id="homeButton" type="button" class="btn btn-primary btn-circle" onclick="redirectToLobby();"><i class="fa fa-home"></i>
</div>
</body>