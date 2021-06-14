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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.9/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
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
.stretch-link {
    width:100%;
    height:110%;
    
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

#myImage_zone1{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  /* background: url("{{ asset('img') }}/bryte/breakawayroom.png"); */
  background-size: cover;
  width:28.2%;
    height:30%;
    top:15.5%;
    left:3.4%;
    border-radius: 35px;
}

#myImage_zone2{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  width:28.2%;
    height:30%;
    top:15.5%;
    left:36%;
    border-radius: 35px;
}

#myImage_zone3{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  width:28.2%;
    height:30%;
    top:15.5%;
    left:68%;
    border-radius: 35px;
}
#myImage_zone4{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-size: cover;
  width:28.2%;
    height:30%;
    top:52.5%;
    left:18.4%;
    border-radius: 35px;
}

#myImage_zone5{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-size: cover;
  width:28.2%;
    height:30%;
    top:52.5%;
    left:52.4%;
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
.btn-circle-big {
				width: 180px;
				height: 180px;
				padding: 10px 16px;
				border-radius: 90px;
				font-size: 40px;
				margin: 7px;
				line-height: 1;
				display: flex;  
  text-align: center;

justify-content: center;  
align-items: center; 
color: #ffffff !important; 
			}

h2{
	font-size: 2vw !important;
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
.top-half{
  display: flex;  
  text-align: center;

justify-content: center;  
align-items: center; 
flex-direction: column;

  height: 90%;
}
.room-heading{
  margin: 0;
}
li{
        cursor: pointer;
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
      <a class="nav-link" href="{{ route('schedule') }}">Schedule</a>
    </li>
    <li class="nav-item">
      <a class="nav-link"  onclick="checkRoom('room_two_open_time', '/exhibition');">Exhibition Hall</a>
    </li>
    <li class="nav-item">
      <a class="nav-link"  onclick="checkRoom('room_four_open_time', '/breakaway');">Breakaway Rooms</a>
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
    <img src="{{ $bg->value ?? '' }}" class="stretch" alt="" />

    <!-- <img src="{{ asset('img') }}/bryte/background.jpg" class="stretch" alt="" /> -->
    <div id="myImage_zone1" class="divInImage">
      <div class="top-half">
        <h2 class="room-heading"><b>ROOM 1</b></h2>
        <span style="color:#ffffff;"><b>Claims</b></span>
        <a class="stretch-link" href="{{ route('room', ['order'=>101]) }}"></a>
        <img src="{{ asset('img') }}/bryte/breakawayroom.png" class="" style="width: 100%;" alt="" />
      </div>

      <button type="button" style="top: 3vh; position: relative;" class="btn bryte-button">{{ __('Enter Room') }}</button>
    </div>
    <div id="myImage_zone2" class="divInImage">
      <div class="top-half">
        <h2 class="room-heading"><b>ROOM 2</b></h2>
        <span style="color:#ffffff;"><b>Underwriting</b></span>
        <a class="stretch-link" href="{{ route('room', ['order'=>102]) }}"></a>
        <img src="{{ asset('img') }}/bryte/breakawayroom.png" class="" style="width: 100%;" alt="" />
      </div>
      <button type="button" style="top: 3vh; position: relative;" class="btn bryte-button">{{ __('Enter Room') }}</button>
    </div>
    <div id="myImage_zone3" class="divInImage">
      <div class="top-half">
        <h2 class="room-heading"><b>ROOM 3</b></h2>
        <span style="color:#ffffff;"><b>Product</b></span>
        <a class="stretch-link" href="{{ route('room', ['order'=>103]) }}"></a>
        <img src="{{ asset('img') }}/bryte/breakawayroom.png" class="" style="width: 100%;" alt="" />
      </div>
      <button type="button" style="top: 3vh; position: relative;" class="btn bryte-button">{{ __('Enter Room') }}</button>
    </div>
    <div id="myImage_zone4" class="divInImage">
      <div class="top-half">
        <h2 class="room-heading"><b>ROOM 4</b></h2>
        <span style="color:#ffffff;"><b>Bryte Life</b></span>
        <a class="stretch-link" href="{{ route('room', ['order'=>104]) }}"></a>
        <img src="{{ asset('img') }}/bryte/breakawayroom.png" class="" style="width: 100%;" alt="" />
      </div>
      <button type="button" style="top: 3vh; position: relative;" class="btn bryte-button">{{ __('Enter Room') }}</button>
    </div>
    <div id="myImage_zone5" class="divInImage">
    <div class="top-half">
        <h2 class="room-heading"><b>ROOM 5</b></h2>
        <span style="color:#ffffff;"><b>Bryte Risk Services Botswana</b></span>
        <a class="stretch-link" href="{{ route('room', ['order'=>105]) }}"></a>
        <img src="{{ asset('img') }}/bryte/breakawayroom.png" class="" style="width: 100%;" alt="" />
      </div>
      <button type="button" style="top: 3vh; position: relative;" class="btn bryte-button">{{ __('Enter Room') }}</button>
    </div>
    <!-- <a id="myImage_zone2" onclick="event.preventDefault();document.getElementById('login-form').submit();"></a> -->
</div>
<div class="header" id="myHeader">
  <h2>BREAKAWAY ROOMS</h2>
</div> 
<script>
function redirectToLobby(){
	window.location.href = "{{ route('lobby') }}";
}
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn bryte-button',
    cancelButton: 'btn bryte-button'
  },
  buttonsStyling: false
})

function checkRoom(room, route){
        $.ajax({
            url: '{{ route("room.check") }}?r='+room,
            type: "get",
            success: function (data) {
                if (data == "1") {
	                window.location.href = route;
                    
                }else{
                  swalWithBootstrapButtons.fire({
                        title: 'This room opens at '+data,
                        //footer: '<a href>Why do I have this issue?</a>'
                    })
                }
            }
        });
    }
</script>
<div style="position: fixed; bottom: 0; left:0; width:70px;">
	<button id="homeButton" type="button" class="btn btn-primary btn-circle" onclick="redirectToLobby();"><i class="fa fa-home"></i>
</div>
@if(Auth::user()->user_roles_id == 1)

<<script>
function redirectToRoom(){
	window.location.href = "/speaker/100";
}

</script>

<div style="position: fixed; top: 8%; left:1%;">
<a id="" onclick="redirectToRoom();" class="btn-primary btn-circle-big">Join My Room / Stand</a>
</div>
@endif

</body>

