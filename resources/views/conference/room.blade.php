<head>
		<meta charset="UTF-8">
		<title>BryteSA</title>
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
    width:75%;
    height:75%;
    top:16%;
    left:12.5%;
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

			.btn-bottom {
				/* width: 70px; */
				/* height: 70px; */
				padding: 10px 16px;
				font-size: 24px;
				margin: 7px;
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

.box {
  display: flex;
  align-items: center;
  justify-content: center;
  position: fixed; bottom: 0.5%; left:12.5%; width:75%;
}
</style>

	</head>


<body>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
<div id="bg">
    <img src="{{ $bg->value ?? '' }}" class="stretch" alt="" />
	<div id="myImage_zone1" class="divInImage"></div>

    <!-- <a id="myImage_zone1" href="{{ route('room') }}"></a>
    <a id="myImage_zone2" href="{{ route('exhibition') }}"></a>
    <a id="myImage_zone3"></a> -->
    <!-- <a id="myImage_zone2" onclick="event.preventDefault();document.getElementById('login-form').submit();"></a> -->
</div>
<div class="header" id="myHeader">
  <h2>{{$heading}}</h2>
</div> 
<script type='text/javascript'>
	var _options = {
		'_license_key':'{{$webinar}}',
@if(Auth::user()->user_roles_id == 2)

		'_role_token':'',
@else
		'_role_token':'{{$extra->presToken}}',
@endif

		'_registration_token':'',
		'_widget_containerID':'myImage_zone1',
		'_widget_width':'100%',
		'_widget_height':'100%',
		'_nickname':'{{ Auth::user()->name }}',
	};
	(function() {
		!function(i){
			i.Widget=function(c){
				'function'==typeof c&&i.Widget.__cbs.push(c),
				i.Widget.initialized&&(i.Widget.__cbs.forEach(function(i){i()}),
				i.Widget.__cbs=[])
			},
			i.Widget.__cbs=[]
		}(window);
		var ab = document.createElement('script'); 
		ab.type = 'text/javascript'; 
		ab.async = true;
		ab.src = 'https://embed.livewebinar.com/em?t='+_options['_license_key']+'&'+Object.keys(_options).reduce(function(a,k){
				a.push(k+'='+encodeURIComponent(_options[k]));
				return a
			},[]).join('&');
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ab, s);
	})();
</script>
<script>
function redirectToLobby(){
	window.location.href = "{{ route('lobby') }}";
}
@if($backRoute != "NONE")
function redirectBack(){
	window.location.href = "{{ route($backRoute) }}";
}
@endif

</script>
<div style="position: fixed; bottom: 1%; left:1%; width:70px;">
@if($backRoute != "NONE")

	<button id="backButton" type="button" class="btn btn-primary btn-circle" onclick="redirectBack();"><i class="fa fa-arrow-left"></i>
@endif
@if(Auth::user()->user_roles_id == 2)
	<button id="homeButton" type="button" class="btn btn-primary btn-circle" onclick="redirectToLobby();"><i class="fa fa-home"></i>
@endif
</div>
@if($backRoute != "NONE" && $backRoute != "breakaway")
<div class="box">
	<a id="backButton" href="{{$extra->website}}" target="_blank" class="btn btn-primary btn-bottom">Website</a>
	<a id="homeButton" href="{{ asset('ExhibitorData') }}/{{$extra->brochure}}" target="_blank" class="btn btn-primary btn-bottom">Brochure</a>
	<a id="homeButton" href="mailto:{{$extra->email}}" class="btn btn-primary btn-bottom">Contact Us</a>


</div>
@endif
@if(Auth::user()->user_roles_id == 1)
<div style="position: fixed; top: 1%; right:1%;">
<a id="backButton" onclick="event.preventDefault();
       document.getElementById('logout-form').submit();" class="btn btn-primary btn-bottom">Log Out</a>
</div>
@endif

</body>