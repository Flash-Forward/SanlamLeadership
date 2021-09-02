<head>
		<meta charset="UTF-8">
    <title>Sanlam Connect</title>
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

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.9/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

  <!-- Main Stylesheet File -->
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
    left: 0px; 
    top: 0px; 
    position: relative;
    /* z-index: -1; Ensure div tag stays behind content; -999 might work, too. */
    
}

.stretch {
    width:100%;
    height:100%;

}
.divInImage {
    /* border:1px solid #fff; */
    display:block;
    position:absolute;
    /* background-color:rgba(0,0,0,0.6); */
}
#bg a {
    /* border:1px solid #fff; */
    display:block;
    position:absolute;
    background-color:rgba(0,0,0,0.1);
}
#bg a:hover {
  cursor: pointer;
    background-color:rgba(255,255,255,0.3);
}
#mainRoom{
    width:15.6%;
    height:15.5%;
    top:50.5%;
    left:42.3%;
    /* border-radius: 35px; */
}

#mainRoomHeadingArea{
    display: flex;
  justify-content: center;
  align-items: center;
    width:15.4%;
    height:6.3%;
    top:50.5%;
    left:42.3%;
    /* border-radius: 35px; */
}
#mainRoomHeadingText{

  text-shadow: 0px 1px, 1px 0px, 2px 1.5px #131313;
  font-weight: 450;
  font-size: 1.9vw !important;
  text-align: center;
  line-height: 1.15;
    color: #f8f8f8;
}

#exhibitionHall{
    width:15%;
    height:15.5%;
    top:35%;
    left:33.3%;
    /* border-radius: 35px; */
}

#exhibitionHallHeadingArea{
    display: flex;
  justify-content: center;
  align-items: center;
    width:15%;
    height:7.8%;
    top:35%;
    left:33.3%;
    /* border-radius: 35px; */
}
#exhibitionHallHeadingText{
    text-shadow: 0px 1px, 1px 0px #f8f8f8, 2px 1.5px #131313;
  font-weight: 450;
  font-size: 1.8vw !important;
  text-align: center;
  line-height: 1.05;
    color: #f8f8f8;
}
#breakawayRooms{
   width:15%;
    height:15.5%;
    top:35%;
    left:51.9%;
    /* border-radius: 35px; */
}
#breakawayRoomsHeadingArea{
    display: flex;
  justify-content: center;
  align-items: center;
    width:15%;
    height:7.8%;
    top:35%;
    left:51.9%;
    /* border-radius: 35px; */
}
#breakawayRoomsHeadingText{
    text-shadow: 0px 1px, 1px 0px #f8f8f8, 2px 1.5px #131313;
  font-weight: 450;
  font-size: 1.8vw !important;
  text-align: center;
  line-height: 1.05;
    color: #f8f8f8;
}
#innovatorsCafe{
   width:17%;
    height:15%;
    top:39%;
    left:0%;
    border-radius: 35px;
}
#innovatorsCafeHeadingArea{
    display: flex;
  justify-content: center;
  align-items: center;
  width:17%;
    height:15%;
    top:39.0%;
    left:0%;
    border-radius: 35px;
}
video {
  object-fit: fill;
}
#innovatorsCafeHeadingText{
    text-shadow: 0px 1px, 1px 0px #f8f8f8, 2px 1.5px #131313;
  font-weight: 450;
  font-size: 2.5vw !important;
  text-align: center;
  line-height: 1.00;
    color: #f8f8f8;
}
#rightVideoInner{
  width:13.5vw;
  height:7.48vw;
    top:18.8%;
    left:8.8%;
    border-radius: 35px;
}
#rightVideo{
  width:16.4vw;
    height:10.7vw;
    top:36.5%;
    left:83%;
    border-radius: 35px;
}

#middleVideoInner{
  width:13.5vw;
  height:7.48vw;
    top:18.8%;
    left:8.8%;
    border-radius: 35px;
}
#middleVideo{
  width:16.4vw;
    height:10.7vw;
    top:46.5%;
    left:42%;
    border-radius: 35px;
}

#rightVideoInner1{
   width:13.3vw;
    height:15.2vh;
    top:66.5%;
    left:84.5%;
    border-radius: 35px;
}
#rightVideo1{
   width:16.4vw;
    height:22vh;
    top:62.5%;
    left:83%;
    border-radius: 35px;
}
#leftVideoInner{
  width:13.5vw;
  height:7.48vw;
    top:18.8%;
    left:8.8%;
    border-radius: 35px;
}
#leftVideo{
  width:16.4vw;
    height:10.7vw;
    top:36.5%;
    left:0.8%;
    border-radius: 35px;
}

#leftVideoInner1{
  width:13.5vw;
  height:7.48vw;
    top:18.8%;
    left:8.8%;
    border-radius: 35px;
}
#leftVideo1{
  width:16.4vw;
    height:10.7vw;
    top:62.5%;
    left:0.8%;
    border-radius: 35px;
}

#networkLounges{
   width:17.5%;
    height:15%;
    top:39%;
    left:82.5%;
    border-radius: 35px;
}
#networkLoungesHeadingArea{
    display: flex;
  justify-content: center;
  align-items: center;
  width:17%;
    height:15%;
    top:39.0%;
    left:83%;
    border-radius: 35px;
}
#networkLoungesHeadingText{
    text-shadow: 0px 1px, 1px 0px #f8f8f8, 2px 1.5px #131313;
  font-weight: 450;
  font-size: 2.5vw !important;
  text-align: center;
  line-height: 1.00;
    color: #f8f8f8;
}
#helpDesk{
   width:17%;
    height:20%;
    top:64%;
    left:19%;
    border-radius: 35px;
}

#schedule{
   width:3%;
    height:30%;
    top:61%;
    left:71.6%;
}

#leftBannerHolder{
  width:10.331vw;
    height:26.5vw;
    top:0.5%;
    left:19.2%;
}

#leftBanner{
  width:9.031vw;
    height:22.8vw;
    top:12%;
    left:6.5%;
}

#rightBanner{
  width:9.031vw;
    height:22.8vw;
    top:12%;
    left:6.5%;
}
#rightBannerHolder{
  width:10.331vw;
    height:26.5vw;
    top:0.5%;
    left:69.6%;
}
#middleBanner:after, 
#middleBanner:before {
  content:'';
  background:transparent;
  position:absolute;
  top:-10px;
  left:0;
  width:100%;
  height:20px;
  border-radius:0 0 50% 50%;
}
#middleBanner:after {
  top:auto;
  bottom:-10px;
  border-radius:50% 50% 0 0 ;
}
#middleBannerHolder{
   width:41.5vw;
    height:16.6vw;
    top:0.5%;
    left:29.3%;
}
#middleBanner{
   width:34vw;
    height:11.4vw;
    top:18.6%;
    left:9%;
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
    color: #000000;
}

iframe{
  margin-top: 5%;
}
#overlay {
  text-align:center;
  vertical-align: middle;
  
  display: flex;
  justify-content: center;
  align-items: center;
  position: fixed; /* Sit on top of the page content */
  display: none;
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.6); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
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

      .bryte-button {
            background-color: #79232E
 !important;
            border-color: #79232E
 !important;
            color: #ffffff !important;
            margin-bottom: 2%;
        }

        li{
        cursor: pointer;
    }
    li:hover{
        color: #0096FF;
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
      <a class="nav-link"  onclick="checkRoom('room_two_open_time', '/room/99');">Main Room</a>
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

<div id="overlay">
<iframe style="width: 80%; height: 80%;" src="{{$welcome_video->value}}" title="YouTube video player" class="yt_player_iframe" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div style="position: fixed; top: 11%; right:11.5%; width:70px;">
	<button id="homeButton" type="button" class="btn btn-danger btn-circle" onclick="off();"><i class="fa fa-times"></i>
  </div>
</div> 
<div id="bg">
    <img src="{{ asset('img') }}/bryte/lobbyb.jpg" class="stretch" alt="" />

    @if($room_three_name->value != "NONE")
    <div id="mainRoomHeadingArea" class="divInImage">
        <div id="mainRoomHeadingText">
            {{$room_three_name->value}}
        </div>
    </div>
    <a id="mainRoom"  onclick="checkRoom('room_three_open_time', '{{$room_three_route->value}}');"></a>
    @endif
    @if($room_three_name->value == "NONE")

    <div id="middleVideo" class="divInImage">
    <img src="{{ asset('img') }}/bryte/screen1.png" class="stretch" alt="" />
    <div id="middleVideoInner" class="divInImage">
    <video width="100%" height="100%" autoplay loop muted>
    <source src="{{ asset('vid') }}/al.mp4" type="video/mp4" />
    </video>
    </div>
    </div>

    @endif

    @if($room_two_name->value != "NONE")
    <div id="exhibitionHallHeadingArea" class="divInImage">
        <div id="exhibitionHallHeadingText">
        {{$room_two_name->value}}
        </div>
    </div>
    <a id="exhibitionHall"  onclick="checkRoom('room_two_open_time', '{{$room_two_route->value}}');"></a>
    @endif

    @if($room_four_name->value != "NONE")
    <div id="breakawayRoomsHeadingArea" class="divInImage">
        <div id="breakawayRoomsHeadingText">
        {{$room_four_name->value}}
        </div>
    </div>
    <a id="breakawayRooms" onclick="checkRoom('room_four_open_time', '{{$room_four_route->value}}');"></a>
    @endif

    @if($room_five_name->value != "NONE")
    <div id="networkLoungesHeadingArea" class="divInImage">
        <div id="networkLoungesHeadingText">
        {{$room_five_name->value}}
        </div>
    </div>
    <a id="networkLounges" onclick="checkRoom('room_five_open_time', '{{$room_five_route->value}}');"></a>

    @endif

    @if($room_one_name->value != "NONE")
    <div id="innovatorsCafeHeadingArea" class="divInImage">
        <div id="innovatorsCafeHeadingText">
        {{$room_one_name->value}}
        </div>
    </div>
    <a id="innovatorsCafe" onclick="checkRoom('room_one_open_time', '{{$room_one_route->value}}');"></a>

    @endif
    @if($room_five_name->value == "NONE")

    <!-- <div id="rightVideo" class="divInImage">
    <img src="{{ asset('img') }}/bryte/screen1.png" class="stretch" alt="" />
    <div id="rightVideoInner" class="divInImage">
    <video width="100%" height="100%" autoplay loop muted>
    <source src="{{ asset('vid') }}/al.mp4" type="video/mp4" />
    </video>
    </div>
    </div> -->

    @else
    <!-- <div id="rightVideo1" class="divInImage">
    <img src="{{ asset('img') }}/bryte/screen1.png" class="stretch" alt="" />
    </div>
    <div id="rightVideoInner1" class="divInImage">
    <video width="100%" height="100%" autoplay loop muted>
    <source src="{{ asset('vid') }}/al.mp4" type="video/mp4" />
    </video>
    </div> -->
    @endif

    @if($room_one_name->value == "NONE")
<!-- 
    <div id="leftVideo" class="divInImage">
    <img src="{{ asset('img') }}/bryte/screen1.png" class="stretch" alt="" />
    <div id="leftVideoInner" class="divInImage">
    <video width="100%" height="100%" autoplay loop muted>
    <source src="{{ asset('vid') }}/al.mp4" type="video/mp4" />
    </video>
    </div>                                                                      
    </div> -->

    @else
    <!-- <div id="leftVideo1" class="divInImage">
    <img src="{{ asset('img') }}/bryte/screen1.png" class="stretch" alt="" />
    </div>
    <div id="leftVideoInner1" class="divInImage">
    <video width="100%" height="100%" autoplay loop muted>
    <source src="{{ asset('vid') }}/al.mp4" type="video/mp4" />
    </video>
    </div> -->
    @endif

    <!-- <div id="leftBannerHolder" class="divInImage">
    <img src="{{ asset('img') }}/bryte/emptybanner.png" class="stretch" alt="" />
      <div id="leftBanner" class="divInImage">
      <img src="{{ $left_banner->value ?? '' }}" class="stretch" alt="" />
      </div>
    </div>



    <div id="rightBannerHolder" class="divInImage">
    <img src="{{ asset('img') }}/bryte/emptybanner.png" class="stretch" alt="" />
      <div id="rightBanner" class="divInImage">
      <img src="{{ $right_banner->value ?? '' }}" class="stretch" alt="" />
      </div>
    </div> -->



    <div id="middleBannerHolder" class="divInImage">
    <img src="{{ asset('img') }}/bryte/bannermid.png" class="stretch" alt="" />
      <div id="middleBanner" class="divInImage">
      <img src="{{ $middle_banner->value ?? '' }}" class="stretch" alt="" />
      </div>
    </div>


    
    <a id="helpDesk" onclick="Tawk_API.toggle();"></a>
    <a id="schedule" href="{{ route('schedule') }}"></a>
    <!-- <a id="myImage_zone2" onclick="event.preventDefault();document.getElementById('login-form').submit();"></a> -->
</div>

<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/604a277a385de407571f14a6/1f0gqkdv1';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();

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
              @if(Auth::user()->user_roles_id == 1)
                if (true) 
              @else
                if (data == "1") 

              @endif
              {
	                window.location.href = route;
                    
                }else{
                    swalWithBootstrapButtons.fire({
                        html: '<span style="color:#ffffff; font-size: 1.2vw;">This room opens at '+data+'</span>',
                        //html: '<span style="color:#ffffff; font-size: 1.2vw;">This room is closed</span>',

                        background: "url('{{ asset('img') }}/bryte/background.jpg')",
                        // html: true,

						padding: "8px",
            margin: "2px",
						width: "20%",
                        //footer: '<a href>Why do I have this issue?</a>'
                    })
                }
            }
        });
    }

function on() {
  document.getElementById("overlay").style.display = "block";
}

function off() {
  {{session(['startvideo' => '1'])}}
    //if I want i can set scope to a specific region
var myScope = document.getElementById('overlay');      
//otherwise set scope as the entire document
//var myScope = document;

//if there is an iframe inside maybe embedded multimedia video/audio, we should reload so it stops playing
var iframes = myScope.getElementsByTagName("iframe");
if (iframes != null) {
    for (var i = 0; i < iframes.length; i++) {
        iframes[i].src = iframes[i].src; //causes a reload so it stops playing, music, video, etc.
    }
}
  document.getElementById("overlay").style.display = "none";



} 
</script>

@if(Auth::user()->user_roles_id == 1)

<<script>
function redirectToRoom(){
	window.location.href = "/speaker/100";
}

</script>

<!-- <div style="position: fixed; top: 8%; left:1%;">
<a id="" onclick="redirectToRoom();" class="btn-primary btn-circle-big">Join My Room / Stand</a>
</div> -->
@endif

</body>

