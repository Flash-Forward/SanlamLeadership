<head>
		<meta charset="UTF-8">
		<title>Thriving Through Covid</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- google fonts -->

		<!-- Css link -->
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('schedule') }}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('schedule') }}/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ asset('schedule') }}/lib/animate/animate.min.css" rel="stylesheet">
  <link href="{{ asset('schedule') }}/lib/venobox/venobox.css" rel="stylesheet">
  <link href="{{ asset('schedule') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('schedule') }}/css/style.css" rel="stylesheet">
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
    width:15.5%;
    height:6%;
    top:48.5%;
    left:9%;
}
#myImage_zone2{
    width:15%;
    height:15%;
    top:35%;
    left:33%;
}
#myImage_zone3{
   width:15%;
    height:15%;
    top:35%;
    left:52%;
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
    <img src="{{ asset('img') }}/ttc/latest/speakers2.jpg" class="stretch" alt="" />
    <!-- <a id="myImage_zone1" href="{{ route('networkingroom') }}"></a> -->

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

