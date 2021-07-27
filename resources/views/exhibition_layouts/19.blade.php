<head>
		<meta charset="UTF-8">
    <title>Africa Careers Network's Entrepreneurs' Launchpad</title>
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
  width:80%;
    height:80%;
    top:10%;
    left:10%;
    border-radius: 35px;
}

.standlogo{
  top:0%;
    left:0%;
  width:100%;
    height:80%;
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
    grid-template-columns: repeat(30, 1fr);
    grid-template-rows: repeat(30, 1vw);
    grid-gap: 15px;
    position:absolute;
    /* transform: perspective(600px) rotateX(22deg);
    backface-visibility: visible;
  perspective-origin: 150% 150%; */
top: 15%;
left: 10%;
width: 80%;
height: 83%;
  /* background-color:rgba(0,0,0,0.5); */
}

#myImage_zone2{

  grid-column-start: 6;
grid-column-end: 10;
grid-row-start: 2;
grid-row-end: 6;

    width: 100%;
    height: 100%;
    border-radius: 35px;
    
}

#myImage_zone3{
  grid-column-start: 10;
grid-column-end: 14;
grid-row-start: 2;
grid-row-end: 6;

    width: 100%;
    height: 100%;
    border-radius: 35px;
}
#myImage_zone4{
  grid-column-start: 14;
grid-column-end: 18;
grid-row-start: 2;
grid-row-end: 6;
    width: 100%;
    height: 100%;
    border-radius: 35px;
}

#myImage_zone5{
  grid-column-start: 18;
grid-column-end: 22;
grid-row-start: 2;
grid-row-end: 6;
    width: 100%;
    height: 100%;
    border-radius: 35px;
}

#myImage_zone6{
  grid-column-start: 22;
grid-column-end: 26;
grid-row-start: 2;
grid-row-end: 6;

    width: 100%;
    height: 100%;
    border-radius: 35px;
}

#myImage_zone7{

grid-column-start: 6;
grid-column-end: 10;
grid-row-start: 6;
grid-row-end: 10;

  width: 100%;
  height: 100%;
  border-radius: 35px;
  
}

#myImage_zone8{
grid-column-start: 10;
grid-column-end: 14;
grid-row-start: 6;
grid-row-end: 10;

  width: 100%;
  height: 100%;
  border-radius: 35px;
}
#myImage_zone9{
grid-column-start: 14;
grid-column-end: 18;
grid-row-start: 6;
grid-row-end: 10;
  width: 100%;
  height: 100%;
  border-radius: 35px;
}

#myImage_zone10{
grid-column-start: 18;
grid-column-end: 22;
grid-row-start: 6;
grid-row-end: 10;
  width: 100%;
  height: 100%;
  border-radius: 35px;
}

#myImage_zone11{
grid-column-start: 22;
grid-column-end: 26;
grid-row-start: 6;
grid-row-end: 10;

  width: 100%;
  height: 100%;
  border-radius: 35px;
}

#myImage_zone12{
grid-column-start: 6;
grid-column-end: 10;
grid-row-start: 10;
grid-row-end: 14;

  width: 100%;
  height: 100%;
  border-radius: 35px;
}
#myImage_zone13{
grid-column-start: 10;
grid-column-end: 14;
grid-row-start: 10;
grid-row-end: 14;
  width: 100%;
  height: 100%;
  border-radius: 35px;
}

#myImage_zone14{
grid-column-start: 14;
grid-column-end: 18;
grid-row-start: 10;
grid-row-end: 14;
  width: 100%;
  height: 100%;
  border-radius: 35px;
}

#myImage_zone15{
grid-column-start: 18;
grid-column-end: 22;
grid-row-start: 10;
grid-row-end: 14;
  width: 100%;
  height: 100%;
  border-radius: 35px;
}
#myImage_zone16{
grid-column-start: 22;
grid-column-end: 26;
grid-row-start: 10;
grid-row-end: 14;
  width: 100%;
  height: 100%;
  border-radius: 35px;
}

#myImage_zone17{
grid-column-start: 8;
grid-column-end: 12;
grid-row-start: 14;
grid-row-end: 18;
  width: 100%;
  height: 100%;
  border-radius: 35px;
}

#myImage_zone18{
grid-column-start: 12;
grid-column-end: 16;
grid-row-start: 14;
grid-row-end: 18;
  width: 100%;
  height: 100%;
  border-radius: 35px;
}

#myImage_zone19{
grid-column-start: 16;
grid-column-end: 20;
grid-row-start: 14;
grid-row-end: 18;
  width: 100%;
  height: 100%;
  border-radius: 35px;
}

#myImage_zone20{
grid-column-start: 20;
grid-column-end: 24;
grid-row-start: 14;
grid-row-end: 18;
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
    background-color: #79232E
 !important;
    border-color: #79232E
 !important;
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
      <img src="{{ asset('img') }}/bryte/exhall.png" class="stretch" alt="" />
      <div id="floorSpace">
        <div id="myImage_zone2" class="divInImage">
          <a class="stretch standLink" href="{{ route('breakawayroom') }}"></a>
          <img src="{{ asset('img') }}/bryte/exstand.png" class="stretch standImage" alt="" />
          <div class="standlogo">
            <img src="{{ asset('img') }}/bryte/coke.webp" class="stretch roundLogo" alt="" />
          </div>
        </div>

        <div id="myImage_zone3" class="divInImage">
          <a class="stretch standLink" href="{{ route('breakawayroom') }}"></a>
          <img src="{{ asset('img') }}/bryte/exstand.png" class="stretch standImage" alt="" />
          <div class="standlogo">
            <img src="{{ asset('img') }}/bryte/coke.webp" class="stretch roundLogo" alt="" />
          </div>
        </div>

        <div id="myImage_zone4" class="divInImage">
          <a class="stretch standLink" href="{{ route('breakawayroom') }}"></a>
          <img src="{{ asset('img') }}/bryte/exstand.png" class="stretch standImage" alt="" />
          <div class="standlogo">
            <img src="{{ asset('img') }}/bryte/coke.webp" class="stretch roundLogo" alt="" />
          </div>
        </div>

        <div id="myImage_zone5" class="divInImage">
          <a class="stretch standLink" href="{{ route('breakawayroom') }}"></a>
          <img src="{{ asset('img') }}/bryte/exstand.png" class="stretch standImage" alt="" />
          <div class="standlogo">
            <img src="{{ asset('img') }}/bryte/coke.webp" class="stretch roundLogo" alt="" />
          </div>
        </div>

        <div id="myImage_zone6" class="divInImage">
          <a class="stretch standLink" href="{{ route('breakawayroom') }}"></a>
          <img src="{{ asset('img') }}/bryte/exstand.png" class="stretch standImage" alt="" />
          <div class="standlogo">
            <img src="{{ asset('img') }}/bryte/logo3.png" class="stretch roundLogo" alt="" />
          </div>
        </div>

        <div id="myImage_zone7" class="divInImage">
          <a class="stretch standLink" href="{{ route('breakawayroom') }}"></a>
          <img src="{{ asset('img') }}/bryte/exstand.png" class="stretch standImage" alt="" />
          <div class="standlogo">
            <img src="{{ asset('img') }}/bryte/nestle.jpeg" class="stretch roundLogo" alt="" />
          </div>
        </div>

        <div id="myImage_zone8" class="divInImage">
          <a class="stretch standLink" href="{{ route('breakawayroom') }}"></a>
          <img src="{{ asset('img') }}/bryte/exstand.png" class="stretch standImage" alt="" />
          <div class="standlogo">
            <img src="{{ asset('img') }}/bryte/coke.webp" class="stretch roundLogo" alt="" />
          </div>
        </div>

        <div id="myImage_zone9" class="divInImage">
          <a class="stretch standLink" href="{{ route('breakawayroom') }}"></a>
          <img src="{{ asset('img') }}/bryte/exstand.png" class="stretch standImage" alt="" />
          <div class="standlogo">
            <img src="{{ asset('img') }}/bryte/coke.webp" class="stretch roundLogo" alt="" />
          </div>
        </div>

        <div id="myImage_zone10" class="divInImage">
          <a class="stretch standLink" href="{{ route('breakawayroom') }}"></a>
          <img src="{{ asset('img') }}/bryte/exstand.png" class="stretch standImage" alt="" />
          <div class="standlogo">
            <img src="{{ asset('img') }}/bryte/coke.webp" class="stretch roundLogo" alt="" />
          </div>
        </div>

        <div id="myImage_zone11" class="divInImage">
          <a class="stretch standLink" href="{{ route('breakawayroom') }}"></a>
          <img src="{{ asset('img') }}/bryte/exstand.png" class="stretch standImage" alt="" />
          <div class="standlogo">
            <img src="{{ asset('img') }}/bryte/coke.webp" class="stretch roundLogo" alt="" />
          </div>
        </div>

        <div id="myImage_zone12" class="divInImage">
          <a class="stretch standLink" href="{{ route('breakawayroom') }}"></a>
          <img src="{{ asset('img') }}/bryte/exstand.png" class="stretch standImage" alt="" />
          <div class="standlogo">
            <img src="{{ asset('img') }}/bryte/coke.webp" class="stretch roundLogo" alt="" />
          </div>
        </div>

        <div id="myImage_zone13" class="divInImage">
          <a class="stretch standLink" href="{{ route('breakawayroom') }}"></a>
          <img src="{{ asset('img') }}/bryte/exstand.png" class="stretch standImage" alt="" />
          <div class="standlogo">
            <img src="{{ asset('img') }}/bryte/coke.webp" class="stretch roundLogo" alt="" />
          </div>
        </div>

        <div id="myImage_zone14" class="divInImage">
          <a class="stretch standLink" href="{{ route('breakawayroom') }}"></a>
          <img src="{{ asset('img') }}/bryte/exstand.png" class="stretch standImage" alt="" />
          <div class="standlogo">
            <img src="{{ asset('img') }}/bryte/coke.webp" class="stretch roundLogo" alt="" />
          </div>
        </div>

        <div id="myImage_zone15" class="divInImage">
          <a class="stretch standLink" href="{{ route('breakawayroom') }}"></a>
          <img src="{{ asset('img') }}/bryte/exstand.png" class="stretch standImage" alt="" />
          <div class="standlogo">
            <img src="{{ asset('img') }}/bryte/coke.webp" class="stretch roundLogo" alt="" />
          </div>
        </div>

        <div id="myImage_zone16" class="divInImage">
          <a class="stretch standLink" href="{{ route('breakawayroom') }}"></a>
          <img src="{{ asset('img') }}/bryte/exstand.png" class="stretch standImage" alt="" />
          <div class="standlogo">
            <img src="{{ asset('img') }}/bryte/coke.webp" class="stretch roundLogo" alt="" />
          </div>
        </div>
        <div id="myImage_zone17" class="divInImage">
          <a class="stretch standLink" href="{{ route('breakawayroom') }}"></a>
          <img src="{{ asset('img') }}/bryte/exstand.png" class="stretch standImage" alt="" />
          <div class="standlogo">
            <img src="{{ asset('img') }}/bryte/coke.webp" class="stretch roundLogo" alt="" />
          </div>
        </div>
        <div id="myImage_zone18" class="divInImage">
          <a class="stretch standLink" href="{{ route('breakawayroom') }}"></a>
          <img src="{{ asset('img') }}/bryte/exstand.png" class="stretch standImage" alt="" />
          <div class="standlogo">
            <img src="{{ asset('img') }}/bryte/coke.webp" class="stretch roundLogo" alt="" />
          </div>
        </div>
        <div id="myImage_zone19" class="divInImage">
          <a class="stretch standLink" href="{{ route('breakawayroom') }}"></a>
          <img src="{{ asset('img') }}/bryte/exstand.png" class="stretch standImage" alt="" />
          <div class="standlogo">
            <img src="{{ asset('img') }}/bryte/coke.webp" class="stretch roundLogo" alt="" />
          </div>
        </div>
        <div id="myImage_zone20" class="divInImage">
          <a class="stretch standLink" href="{{ route('breakawayroom') }}"></a>
          <img src="{{ asset('img') }}/bryte/exstand.png" class="stretch standImage" alt="" />
          <div class="standlogo">
            <img src="{{ asset('img') }}/bryte/coke.webp" class="stretch roundLogo" alt="" />
          </div>
        </div>


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
<div style="position: fixed; bottom: 0; left:0; width:70px;">
	<button id="homeButton" type="button" class="btn btn-primary btn-circle" onclick="redirectToLobby();"><i class="fa fa-home"></i>
</div>

</body>

