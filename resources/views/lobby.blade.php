<head>
		<meta charset="UTF-8">
		<title>WRC 2021</title>
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
#mainRoom{
    width:16%;
    height:15.5%;
    top:50.5%;
    left:42%;
}
#exhibitionHall{
    width:15%;
    height:15%;
    top:35%;
    left:33%;
}
#breakawayRooms{
   width:15%;
    height:15%;
    top:35%;
    left:52%;
}
#innovatorsCafe{
   width:17%;
    height:15%;
    top:40%;
    left:0%;
}
#networkLounges{
   width:17%;
    height:15%;
    top:40%;
    left:83%;
}
#helpDesk{
   width:17%;
    height:21%;
    top:64%;
    left:19%;
}

#schedule{
   width:3%;
    height:30%;
    top:61%;
    left:71.5%;
}
.btn-circle {
				width: 70px;
				height: 70px;
				padding: 10px 16px;
				border-radius: 35px;
				font-size: 24px;
				line-height: 1.33;
			}
</style>

</head>

<body>

<div id="bg">
    <img src="{{ asset('img') }}/lobby.jpg" class="stretch" alt="" />
    <a id="mainRoom" href="{{ route('room') }}"></a>
    <a id="exhibitionHall" href="{{ route('exhibition') }}"></a>
    <a id="breakawayRooms" href="{{ route('breakaway') }}"></a>
    <a id="innovatorsCafe" href="{{ route('innovator') }}"></a>
    <a id="networkLounges" href="{{ route('networking') }}"></a>
    <a id="helpDesk" href="{{ route('help') }}"></a>
    <a id="schedule" href="{{ route('breakaway') }}"></a>
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
</script>

</body>

