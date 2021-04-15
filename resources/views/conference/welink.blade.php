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
				border-radius: 35px;
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

</style>

	</head>


<body>
<div id="bg">
    <img src="{{ asset('img') }}/ttc/latest/background.jpg" class="stretch" alt="" />
	<div id="myImage_zone1" class="divInImage"></div>
    <!-- <a id="myImage_zone1" href="{{ route('room') }}"></a>
    <a id="myImage_zone2" href="{{ route('exhibition') }}"></a>
    <a id="myImage_zone3"></a> -->
    <!-- <a id="myImage_zone2" onclick="event.preventDefault();document.getElementById('login-form').submit();"></a> -->
</div>
<div class="header" id="myHeader">
  <h2>WeLink</h2>
</div> 
<!-- <script src="https://embed.clickmeeting.com/embed_conference.html?r=1716098224950816&l=2e2b9099269534c54309a70060383c9f"></script> -->
<script type='text/javascript'>
	var _options = {
		'_license_key':'124-998-970',
		'_role_token':'',
		'_registration_token':'',
		'_widget_containerID':'myImage_zone1',
		'_widget_width':'100%',
		'_widget_height':'100%',
		'_nickname':'{{ Session::get("fname")." ".Session::get("lname") }}',
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
</script>
<div style="position: fixed; bottom: 0; left:0; width:70px;">
	<button id="homeButton" type="button" class="btn btn-primary btn-circle" onclick="redirectToLobby();"><i class="fa fa-home"></i>
</div>
</body>