<head>
		<meta charset="UTF-8">
		<title>BryteSA</title>
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
    border-radius: 35px;
}
#bg a:hover {
    background-color:rgba(255,255,255,0.3);
}

#exhibitionHallBg{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  /* background: url("{{ asset('img') }}/bryte/breakawayroom.png"); */
  background-size: cover;
  width:80vw;
    height:80vh;
    top:10%;
    left:10%;
    border-radius: 35px;
}

.standlogo{
  top:0%;
    left:0%;
  width:100%;
    height:65%;
    border-radius: 10px;
    opacity: 0.75;
  position: absolute;
    z-index: 2;
}

.roundlogo{
    border-radius: 25px;
}

.standImage{
  position: relative;
  z-index: 1;
}

.standLink{
  position: relative;
  z-index: 3;
}

#floorSpace{
  display: grid;
    grid-template-columns: repeat(120, 1fr);
    grid-template-rows: repeat(120, 1vw);
    grid-gap: 16px;
    position:absolute;
    /* transform: perspective(600px) rotateX(22deg);
    backface-visibility: visible;
  perspective-origin: 150% 150%; */
top: 15%;
left: 10%;
width: 77%;
height: 83%;
  /* background-color:rgba(0,0,0,0.5); */
}

#myImage_zone2{

  grid-column-start: 9;
grid-column-end: 20;
grid-row-start: 2;
grid-row-end: 7;

    width: 100%;
    height: 100%;
    border-radius: 35px;
    
}

#myImage_zone3{
  grid-column-start: 21;
grid-column-end: 32;
grid-row-start: 2;
grid-row-end: 7;

    width: 100%;
    height: 100%;
    border-radius: 35px;
}
#myImage_zone4{
  grid-column-start: 33;
grid-column-end: 44;
grid-row-start: 2;
grid-row-end: 7;
    width: 100%;
    height: 100%;
    border-radius: 35px;
}

#myImage_zone5{
  grid-column-start: 45;
grid-column-end: 56;
grid-row-start: 2;
grid-row-end: 7;
    width: 100%;
    height: 100%;
    border-radius: 35px;
}

#myImage_zone6{
  grid-column-start: 57;
grid-column-end: 68;
grid-row-start: 2;
grid-row-end: 7;

    width: 100%;
    height: 100%;
    border-radius: 35px;
}

#myImage_zone7{

  grid-column-start: 9;
grid-column-end: 20;
grid-row-start: 7;
grid-row-end: 12;

  width: 100%;
  height: 100%;
  border-radius: 35px;
  
}

#myImage_zone8{
  grid-column-start: 21;
grid-column-end: 32;
grid-row-start: 7;
grid-row-end: 12;

  width: 100%;
  height: 100%;
  border-radius: 35px;
}
#myImage_zone9{
  grid-column-start: 33;
grid-column-end: 44;
grid-row-start: 7;
grid-row-end: 12;
  width: 100%;
  height: 100%;
  border-radius: 35px;
}

#myImage_zone10{
  grid-column-start: 45;
grid-column-end: 56;
grid-row-start: 7;
grid-row-end: 12;
  width: 100%;
  height: 100%;
  border-radius: 35px;
}

#myImage_zone11{
  grid-column-start: 57;
grid-column-end: 68;
grid-row-start: 7;
grid-row-end: 12;

  width: 100%;
  height: 100%;
  border-radius: 35px;
}

#myImage_zone12{
  grid-column-start: 15;
grid-column-end: 26;
grid-row-start: 12;
grid-row-end: 17;

  width: 100%;
  height: 100%;
  border-radius: 35px;
}
#myImage_zone13{
  grid-column-start: 27;
grid-column-end: 38;
grid-row-start: 12;
grid-row-end: 17;
  width: 100%;
  height: 100%;
  border-radius: 35px;
}

#myImage_zone14{
  grid-column-start: 39;
grid-column-end: 50;
grid-row-start: 12;
grid-row-end: 17;
  width: 100%;
  height: 100%;
  border-radius: 35px;
}

#myImage_zone15{
  grid-column-start: 51;
grid-column-end: 62;
grid-row-start: 12;
grid-row-end: 17;
  width: 100%;
  height: 100%;
  border-radius: 35px;
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
      nav li a {
    color: #000000;
}
h2{
	font-size: 48px !important;
  color: #f1f1f1 !important;
}
.header {
	width: 100%;
	position: fixed; 
	top: 10%;
	
  padding: 10px 16px;
  color: #f1f1f1 !important;
  text-align: center;
}
.bryte-button{
    background-color: #004d73 !important;
    border-color: #004d73 !important;
    color: #ffffff !important;
}
</style>

</head>

<body>
<nav class="navbar navbar-expand-sm bg-light">

  <!-- Links -->
  <a href="#" class="navbar-left" style="margin-right: 3%; margin-left: 3%;"><img src="{{ asset('img') }}/bryte/logo3.png"></a>
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
    <img src="{{ asset('img') }}/bryte/background.jpg" class="stretch" alt="" />

    <div id="exhibitionHallBg" class="divInImage">
      <img src="{{ asset('img') }}/bryte/exhall2.png" class="stretch" alt="" />
      <div id="floorSpace">
      @foreach($exhibitors as $item)
        @if($item->order < '99')
        <div id="myImage_zone{{$item->order + 2}}" class="divInImage">
          <a class="stretch standLink" href="{{ route('room', ['order'=>$item->order]) }}"></a>
          <img src="{{ asset('img') }}/bryte/exstand2.png" class="stretch standImage" alt="" />
          <div class="standlogo">
            <img src="{{$item->logo}}" class="stretch roundLogo" alt="" />
          </div>
        </div>
        @endif
      @endforeach
      </div>
    </div>


</div>
<div class="header" id="myHeader">
  <h2>EXHIBITION HALL</h2>
</div> 
<script>
function redirectToLobby(){
	window.location.href = "{{ route('lobby') }}";
}
</script>
<div style="position: fixed; bottom: 1%; left:1%; width:70px;">
	<button id="homeButton" type="button" class="btn btn-primary btn-circle" onclick="redirectToLobby();"><i class="fa fa-home"></i>
</div>

</body>

