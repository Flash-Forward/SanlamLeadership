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
    height:88vh;
    top:8%;
    left:10%;
    border-radius: 35px;
}

.standlogo{
  top:0%;
    left:0%;
  width:100%;
    height:65%;
    border-radius: 10px;
    opacity: 0.85;
  position: absolute;
    z-index: 2;
}

.standColor2{
  background-color: #052b48;
  border-radius: 25px;
  top:0%;
    left:0%;
  width:100%;
    height:71%;
  position: absolute;

    /* border-radius: 10px; */

}
.standColor3{
  background-color: #79232E
;
  border-radius: 25px;
  top:0%;
    left:0%;
  width:100%;
    height:71%;
  position: absolute;

    /* border-radius: 10px; */

}
.standColor4{
  background-color: #4d4b40;
  border-radius: 25px;
  top:0%;
    left:0%;
  width:100%;
    height:71%;
  position: absolute;

    /* border-radius: 10px; */

}

.standColor5{
  background-color: #0a578a;
  border-radius: 25px;
  top:0%;
    left:0%;
  width:100%;
    height:71%;
  position: absolute;

    /* border-radius: 10px; */

}
.standColor6{
  background-color: #a02629;
  border-radius: 25px;
  top:0%;
    left:0%;
  width:100%;
    height:71%;
  position: absolute;

    /* border-radius: 10px; */

}
.standColor7{
  background-color: #303048;
  border-radius: 25px;
  top:0%;
    left:0%;
  width:100%;
    height:71%;
  position: absolute;

    /* border-radius: 10px; */

}
.standColor8{
  background-color: #00ccff;
  border-radius: 25px;
  top:0%;
    left:0%;
  width:100%;
    height:71%;
  position: absolute;

    /* border-radius: 10px; */

}
.standColor9{
  background-color: #4091ae;
  border-radius: 25px;
  top:0%;
    left:0%;
  width:100%;
    height:71%;
  position: absolute;

    /* border-radius: 10px; */

}
.standColor10{
  background-color: #1a1062;
  border-radius: 25px;
  top:0%;
    left:0%;
  width:100%;
    height:71%;
  position: absolute;

    /* border-radius: 10px; */

}
.standColor11{
  background-color: #006a72;
  border-radius: 25px;
  top:0%;
    left:0%;
  width:100%;
    height:71%;
  position: absolute;

    /* border-radius: 10px; */

}
.standColor12{
  background-color: #23c0f0;
  border-radius: 25px;
  top:0%;
    left:0%;
  width:100%;
    height:71%;
  position: absolute;

    /* border-radius: 10px; */

}
.standColor13{
  background-color: #0a1760;
  border-radius: 25px;
  top:0%;
    left:0%;
  width:100%;
    height:71%;
  position: absolute;

    /* border-radius: 10px; */

}
.standColor14{
  background-color: #dbc059;
  border-radius: 25px;
  top:0%;
    left:0%;
  width:100%;
    height:71%;
  position: absolute;

    /* border-radius: 10px; */

}
.standColor15{
  background-color: #e31d1a;
  border-radius: 25px;
  top:0%;
    left:0%;
  width:100%;
    height:71%;
  position: absolute;

    /* border-radius: 10px; */

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



#myImage_zone2{

  width: 9.2vw;
    height: 9.2vw;
    top:20%;
    left:22%;
  border-radius: 35px;
    
}

#myImage_zone3{
  width: 9.2vw;
    height: 9.2vw;
    top:20%;
    left:36%;
    border-radius: 35px;
}
#myImage_zone4{
  width: 9.2vw;
    height: 9.2vw;
    top:20%;
    left:50%;
    border-radius: 35px;
}

#myImage_zone5{
  width: 9.2vw;
    height: 9.2vw;
    top:20%;
    left:64%;
    border-radius: 35px;
}

#myImage_zone6{
  width: 9.2vw;
    height: 9.2vw;
    top:43%;
    left:22%;
    border-radius: 35px;
}

#myImage_zone7{

  width: 9.2vw;
    height: 9.2vw;
    top:43%;
    left:36%;
  border-radius: 35px;
  
}

#myImage_zone8{
  width: 9.2vw;
    height: 9.2vw;
    top:43%;
    left:50%;
    border-radius: 35px;
}
#myImage_zone9{
  width: 9.2vw;
    height: 9.2vw;
    top:43%;
    left:64%;
    border-radius: 35px;
}

#myImage_zone10{
  width: 9.2vw;
    height: 9.2vw;
    top:66%;
    left:29%;
    border-radius: 35px;
}

#myImage_zone11{
  width: 9.2vw;
    height: 9.2vw;
    top:66%;
    left:43%;
    border-radius: 35px;
}

#myImage_zone12{
  width: 9.2vw;
    height: 9.2vw;
    top:66%;
    left:57%;
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
    <img src="{{ asset('img') }}/bryte/background.jpg" class="stretch" alt="" />

    <div id="exhibitionHallBg" class="divInImage">
      <img src="{{ asset('img') }}/bryte/exhall4.png" class="stretch" alt="" />
      {{$counter = 2}}
      @foreach($exhibitors as $item)
        @if($item->order < '99')
        <div id="myImage_zone{{$counter}}" class="divInImage">
          <a class="stretch standLink" href="{{ route('room', ['order'=>$item->order]) }}"></a>
          <img src="{{ asset('img') }}/bryte/exstand3.png" class="stretch standImage" alt="" />
          <div class="standColor{{$counter++}}"></div>
          <div class="standlogo">
            <img src="{{$item->logo}}" class="stretch roundLogo" alt="" />
          </div>
        </div>
        @endif
      @endforeach
    </div>


</div>
<div class="header" id="myHeader">
  <h2>EXHIBITION HALL</h2>
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
                // if (data == "1") {
	              //   window.location.href = route;
                    
                // }else{
                    swalWithBootstrapButtons.fire({
                        //html: '<span style="color:#ffffff; font-size: 1.2vw;">This room opens at '+data+'</span>',
                        html: '<span style="color:#ffffff; font-size: 1.2vw;">This room is closed</span>',

                        background: "url('{{ asset('img') }}/bryte/background.jpg')",
                        // html: true,

						padding: "8px",
            margin: "2px",
						width: "20%",
                        //footer: '<a href>Why do I have this issue?</a>'
                    })
               // }
            }
        });
    }

</script>
<div style="position: fixed; bottom: 1%; left:1%; width:70px;">
	<button id="homeButton" type="button" class="btn btn-primary btn-circle" onclick="redirectToLobby();"><i class="fa fa-home"></i>
</div>
@if(Auth::user()->user_roles_id == 1)
<script>
function redirectToRoom(){
	window.location.href = "/speaker/100";
}

</script>

<div style="position: fixed; top: 8%; left:1%;">
<a id="" onclick="redirectToRoom();" class="btn-primary btn-circle-big">Join My Room / Stand</a>
</div>

@endif

</body>

