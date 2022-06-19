<html class="no-js" lang="en-za">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sanlam Leadership</title>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.9/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
		<meta name="description" content="Flash Forward ">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="{{ asset('css') }}/schedule/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
		<style>
		.interval-row{
			height: 70;
		}
		.interval-row-alert{
			height: 50;
		}
		.h2, h2 {
			font-size: 1.5rem;
		}
		.room-fold
		{
			position: absolute;
			top: 0;
			left: 0;
			width: 10%;
			height: 95%;
			background-image: url('{{ asset("img") }}/schedule/room-fold-02.png');
			background-position: 0 60%;
			background-repeat: no-repeat;
			background-size: cover;
			/* border: thin red solid; */
			z-index: 999 !important;
			/* transform: rotate(-90deg);*/
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
	#mainNav li{
        cursor: pointer;
    }
	#mainNav li:hover{
        color: #0096FF !important;
    }

	main{
		background-color: #ffffff;

	}
	.join-link:hover{
        cursor: pointer;

	}
	.room-card{
		background: #ffffff;
	}

	.alertBox{
		box-shadow: 5px 10px;
	}
	.bryte-button {
            background-color: #0074c9
 !important;
            border-color: #0074c9
 !important;
            color: #ffffff !important;
            height: 1.7vw;
            width: 2.5vw;

            margin-bottom: 2%;
			padding: 0 !important;
			border-radius: 10px;
        }
        .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

 /* Style all font awesome icons */
 .fa {
  padding: 20px;
  width: 65px;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
}

/* Add a hover effect if you want */
.fa:hover {
  opacity: 0.7;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
  background: #3B5998;
  color: white;
}

/* Twitter */
.fa-twitter {
  background: #55ACEE;
  color: white;
} 

/* Twitter */
.fa-linkedin {
  background: #007bb5;
  color: white;
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

.content-bg{
	background-image: url('{{ asset('img') }}/bg.jpg');
	background-repeat: no-repeat;
	background-size: cover;
	height: 70%;
}

		</style>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
	<script src="{{ asset('js') }}/schedule/ics.deps.min.js"></script>
	<script src="{{ asset('js') }}/schedule/ics.min.js"></script>		
	<nav class="navbar navbar-expand-sm bg-light" style="color: #000000 !important;">

<!-- Links -->
<a href="#" class="navbar-left" style="margin-right: 3%; margin-left: 3%;"><img src="{{ asset('img') }}/slogo.png"></a>
<ul class="navbar-nav ml-auto" id="mainNav">
  <li class="nav-item active" onMouseOver="this.style.color='#0096FF'">
	<a class="nav-link" href="{{ route('lobby') }}" style="color: #000000 !important;"  onMouseOver="this.style.color='#0096FF'" onMouseOut="this.style.color='#000000'">Lobby</a>
  </li>
  <li class="nav-item">
	<a class="nav-link" href="{{ route('schedule') }}" style="color: #000000 !important;"  onMouseOver="this.style.color='#0096FF'" onMouseOut="this.style.color='#000000'">Schedule</a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="/sponsors"  style="color: #000000 !important;"  onMouseOver="this.style.color='#0096FF'" onMouseOut="this.style.color='#000000'">Sponsors</a>
    </li>
  <li class="nav-item">
	<a class="nav-link"  onclick="checkRoom('room_two_open_time', '/room/99', event);" style="color: #000000 !important;"  onMouseOver="this.style.color='#0096FF'" onMouseOut="this.style.color='#000000'">Main Room</a>
  </li>
  <li class="nav-item">
	<a class="nav-link"  onclick="checkRoom('room_four_open_time', '/breakaway', event);" style="color: #000000 !important;"  onMouseOver="this.style.color='#0096FF'" onMouseOut="this.style.color='#000000'">Breakaway Rooms</a>
  </li>
	  <li class="nav-item">
	  <a class="nav-link"  onMouseOver="this.style.color='#0096FF'" onMouseOut="this.style.color='#000000'"  href="{{ route('logout') }}" style="color: #000000 !important;" onclick="event.preventDefault();
	 document.getElementById('logout-form').submit();">Log Out</a>
	  </li>
</ul>


</nav>
<img src="{{$sponsor->logo}}" alt="Sanlam" class="center" style="width: 30vw"> 
<ul class="nav nav-tabs" id="myTab" role="tablist" style="background: {{$sponsor->color}};">
    <li class="nav-item" role="presentation" style="width: 33.33%;">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true" style="width: 100%; color:#000">About Us</button>
    </li>
    <li class="nav-item" role="presentation" style="width: 33.33%;">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false" style="width: 100%; color:#000">Downloadable Content</button>
    </li>
    <li class="nav-item" role="presentation" style="width: 33.33%;">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false" style="width: 100%; color:#000">Contact Us</button>
    </li>
</ul>
<div class="tab-content content-bg" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab" style="color: #000">
		<div style="position:relative; left: 10%; width: 80%; text-align: center; font-size: 25px;">
		<h1>About Us</h1>
		<hr>
		<span style="font-size: 1vmax;">
		{{$sponsor->content}}
		</span>

		</div>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
		<div style="position:relative; left: 10%; width: 80%; text-align: center; font-size: 25px;">
		<h1>Downloadable Content</h1>
		<hr>
		<div class="row">
				@for ($i = 0; $i < $sponsor->numfiles; $i++)
					<div class="col-md-{{12/$sponsor->numfiles}}">
					<span class="material-icons" style="font-size: 60px;">description</span>
					<h2>{{ $files[$i]->name }}<h2>
					<a href="{{ asset('ExhibitorData') }}/{{ $files[$i]->path }}" target="_blank" class="btn" style="background: {{$sponsor->color}};">Download</a>
					</div>
				@endfor
			</div>
		</div>
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
		<div style="position:relative; left: 10%; width: 80%; text-align: center;">
			<h1>Contact Us</h1>
			<hr>
			<div class="row">
				<div class="col-md-4">
				<span class="material-icons" style="font-size: 60px;">web</span>
				<h2>Website<h2>
				<a href="{{$extra->website}}" target="_blank" class="btn" style="background: {{$sponsor->color}};">Visit</a>
				</div>
				<div class="col-md-4">
				<span class="material-icons" style="font-size: 60px;">email</span>
				<h2>Email<h2>
				@for ($i = 0; $i < count($emails); $i++)
					<a style="font-size: 1vmax;" href="mailto:{{$emails[$i]}}">{{$emails[$i]}}</a>

				@endfor

				</div>
				<div class="col-md-4">
				<span class="material-icons" style="font-size: 60px;">groups</span>
				<h2>Social Media<h2>
				<div class="row justify-content-center">
					<div class="col-md-2">
					<a href="{{$sponsor->facebook}}" target="_blank" class="fa fa-facebook"></a>
					</div>
					<div class="col-md-2">
					<a href="{{$sponsor->twitter}}" target="_blank" class="fa fa-twitter"></a>
					</div>
					<div class="col-md-2">
					<a href="{{$sponsor->linkedin}}" target="_blank" class="fa fa-linkedin"></a>
					</div>
				</div>
				</div>
			</div>
		</div>
    
    </div>
</div>
<div style="position: fixed; bottom: 3%; left:1%; width:5vw; height:10vw;">

	<a id="backButton" type="button" class="btn btn-primary btn-circle" href="{{route('sponsors')}}"><i class="fa fa-arrow-left" style="padding:0; width: auto; top: 13px; position:relative;"></i></a>
	<a id="homeButton" type="button" class="btn btn-primary btn-circle" href="{{route('lobby')}}"><i class="fa fa-home" style="padding:0; width: auto; top: 13px; position:relative;"></i></a>

</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
<script>
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn bryte-button',
    cancelButton: 'btn bryte-button'
  },
  buttonsStyling: false
})
var first_time = 1;
var redirectPrep = 0;
(function worker() {
  $.ajax({
    url: '{{ route("instructions") }}', 
    success: function(data) {
		console.log(data);
      if(data["message"] != "NONE"){
			  if(first_time == 1){
          swalWithBootstrapButtons.fire({
                        html: '<span style="color:#ffffff; font-size: 1.2vw;">'+data["message"]+'</span>',
                        //html: '<span style="color:#ffffff; font-size: 1.2vw;">This room is closed</span>',

                        background: "url('{{ asset('img') }}/bryte/background.jpg')",
                        // html: true,

                    padding: "8px",
                    margin: "2px",
                    width: "20%",
                                //footer: '<a href>Why do I have this issue?</a>'
                            })
				  first_time = 0;
			  }
      }else{
				  first_time = 1;

      }

      if(data["redirect"] == "PREP"){
        redirectPrep = 1;
      }
      if(data["redirect"] != "PREP" && data["redirect"] != "NONE"){
			  if(redirectPrep == 1){
          // Simulate a mouse click:
          window.location.href = data["redirect"];
			  }
      }
		},
    complete: function() {
      // Schedule the next request when the current one's complete
      setTimeout(worker, 2000);
    }
  });
})();
</script>