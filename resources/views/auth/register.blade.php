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
  <!-- <link href="{{ asset('schedule') }}/css/style.css" rel="stylesheet"> -->

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  
<style>
body, html {
  margin: 0;
}

#bg {
  /* The image used */
  max-height: 100vh !important;
	overflow-y: auto !important;
  width: 100%; 
    /* height: 100%;  */
    position: fixed; 
    left: 0px; 
    top: 0px; 
    
}

#overviewBg{
    /* background-image: url("{{ asset('img') }}/ttc/genbg.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-position: center;  */
  width: 100%; 
    height: 100%; 
    position: relative;
}

#overviewText{
    color: #000000 !important;
    position: relative;
    top: 5%;
    text-align: center;
    margin-right:5% !important;
    margin-left:5% !important;
    font-size: 24px;
  width: 90%; 
    height: 100%; 
}

#regNowBtn{
    position: absolute;
    bottom: 2%;
    left: 24%;
    width: 52%; 
    height: 7%; 
}

img{
    width: 100%;
    height: 100%;
}


#speakersBg{
    /* background-image: url("{{ asset('img') }}/ttc/genbg.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-position: center;  */
  width: 100%; 
    height: 100%; 
    position: relative;
}

#speakersText{
    color: #ffffff !important;
    position: relative;
    top: 5%;
    text-align: center;
    font-size: 300%;
  width: 100%; 
    height: 100%; 
}

.speakerImg{
    margin-top: 7%;
    width: 345px; 
    height: 116px; 
}

#whatYouWillLearnBg{
    /* background-image: url("{{ asset('img') }}/ttc/genbg.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-position: center;  */
  width: 100%; 
    height: 100%; 
    position: relative;
}

#whatYouWillLearnHeader{
    color: #ffffff !important;
    position: relative;
    top: 5%;
    text-align: center;
    font-size: 300%;
  width: 100%; 
    height: 20%; 
}

#whatYouWillLearnText{
    color: #ffffff !important;
    position: relative;
    top: 5%;
    text-align: left;
    font-size: 125%;
  width: 100%; 
    height: 60%; 
}

li{
    padding-top: 3%;
}

#registerBg{
    /* background-image: url("{{ asset('img') }}/ttc/genbg.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-position: center;  */
  width: 100%; 
    height: 100%; 
    max-height: 80%;
    position: relative;
}

#registerHeader{
    color: #ffffff !important;
    position: relative;
    top: 5%;
    text-align: center;
    font-size: 300%;
  width: 100%; 
    height: 20%; 
}

#bannerBg {
  /* The image used */
  /* background-image: url("{{ asset('img') }}/ttc/bannerbg.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-position: center;  */
  width: 100%; 
    height: 30%; 
    position: relative;
    
}

#bannerLogo {
  /* The image used */
  /* background-image: url("{{ asset('img') }}/ttc/logo.png");
  background-repeat: no-repeat;
  background-attachment: fixed; */
  /* background-color: #ffffff; */
  /* background-size: cover; */
  /* background-position: 0% 30%; 
  background-size: 100% 25%; */
  position: relative;
  top: 8%;
  width: 100%; 
    height: 25%;
    background-color:rgba(0,0,0,0.8); 
    
}
.logoImg{
    width: 100%;
    height: 100%;
    /* position: absolute; */
    /* z-index: -1; */
}

#bannerDate {
  /* The image used */
  position: relative;
  background-color: #053a5b;
  color: #ffffff !important;
  top: 5%;
  width: 100%; 
    height: 15%; 
    
    
}
#bannerText{
    position: relative;
    top: 5%;
    text-align: center;
    font-size: 200%
}
#bgMobile {
  /* The image used */
  max-height: 100vh !important;
	overflow-y: auto !important;
  width: 100%; 
    height: 100%; 
    position: fixed; 
    display:none;
    
}

#bgMobile a {
    /* border:1px solid #fff; */
    display:block;
    position:absolute;
    background-color:rgba(0,0,0,0.1);
}
#bgMobile a:hover {
    background-color:rgba(255,255,255,0.3);
}

.stretch {

    width:100%;
    height:4271px;
    z-index: -1; /* Ensure div tag stays behind content; -999 might work, too. */
}
.bgImg{
    object-fit: cover; /* Do not scale the image */
  object-position: center; /* Center the image within the element */
    width:100%; 
    height:100%;
    opacity: 0.8;
    position: absolute;
    z-index: -1;
}

.bgImgL{
    object-fit: cover; /* Do not scale the image */
  object-position: center; /* Center the image within the element */
    width:inherit;
    height:260;
    position: relative;
    z-index: -1;
}
/* Smartphones (portrait) ----------- */
@media only screen 
and (max-width : 500px) {


        #bgMobile {
            display:block !important;
        }

        #bg {

            display:none;
            
        }
        input, select {
            display: block;
            width: 90% !important;
            height: 16px !important;
            padding: 1.6vh 1.4vh;
            margin-left:5%;
            margin-top:0%;
            margin-bottom:0% !important;
            margin-right:0% !important;
            box-sizing: border-box;
            font-family: 'Montserrat';
            font-weight: 500;
            font-size: 13px; }
            input:focus, select:focus {
                outline: 2px dashed blue;
            }
            input
            {
                background: #ffffff !important;
                border: 2px solid black;
            }
            label {
            font-size: 16px;
            font-weight: bold;
            color: #ffffff !important;
            /* font-family: 'Montserrat'; */
            margin-left:5%;
            margin-bottom: 2px;
            display: block; }
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
    width:36%;
    height:25%;
    top:3785px;
    left:28%;
}
#myImage_zone2{
    width:18%;
    height:78px;
    top:4146px;
    left:40.5%;
}
#myImage_zone3{
   width:18%;
    height:78px;
    top:1280px;
    left:40.5%;
}

#myImage_zone4{
   width:18%;
    height:78px;
    top:2480px;
    left:40.5%;
}

#fname_zone{
    width:18%;
    height:4%;
    top:17%;
    left:57.5%;
}

.btn-circle {
				width: 70px;
				height: 70px;
				padding: 10px 16px;
				border-radius: 35px;
				font-size: 24px;
				line-height: 1.33;
			}

input, select {
  display: block;
  width: 97%;
  height: 32px;
  padding: 1.6vh 1.4vh;
  margin-bottom:42px;
  margin-right:30%;
  box-sizing: border-box;
  font-family: 'Montserrat';
  font-weight: 500;
  font-size: 13px; }


label {
  font-size: 16px;
  font-weight: bold;
  /* font-family: 'Montserrat'; */
  margin-bottom: 0px;
  display: block; }

#regButtons{
    display: flex;
  align-items: center;
  justify-content: center;
}
</style>

</head>

<body>
<div id="bgMobile">
    <div id="bannerBg">
        <img src="{{ asset('img') }}/bryte/banner.jpg" class="bgImgL" alt="" />
        
        <div id="bannerDate">
            <div id="bannerText">
                <b>Date: 15th April 2021</b>
                <br>
                <b>Time: 18:00 - 20:30</b>
            </div>
        </div>
    </div>
    <div id="overviewBg">
    <img src="{{ asset('img') }}/bryte/background.jpg" class="bgImg" alt="" />
        <br>
        <div id="overviewText">
            <b>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pulvinar mi et dignissim porta. Sed in lacinia lectus. Sed felis odio, vehicula non mattis non, bibendum nec purus. Nulla tincidunt nibh sit amet sapien scelerisque sollicitudin. Donec eu aliquam neque. Praesent id sollicitudin urna, eu iaculis nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut vitae mauris pulvinar, luctus ante ac, euismod justo. Maecenas nec odio eleifend, ornare tortor vel, rhoncus sem. Cras hendrerit pharetra lacinia. Phasellus arcu turpis, consectetur a cursus id, ultricies vel diam. 
            </b>
            <br><br>
            <b>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pulvinar mi et dignissim porta. Sed in lacinia lectus. Sed felis odio, vehicula non mattis non, bibendum nec purus. Nulla tincidunt nibh sit amet sapien scelerisque sollicitudin. Donec eu aliquam neque. Praesent id sollicitudin urna, eu iaculis nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut vitae mauris pulvinar, luctus ante ac, euismod justo. Maecenas nec odio eleifend, ornare tortor vel, rhoncus sem. Cras hendrerit pharetra lacinia. Phasellus arcu turpis, consectetur a cursus id, ultricies vel diam. 
            </b>
            <br><br>
            <b>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pulvinar mi et dignissim porta. Sed in lacinia lectus. Sed felis odio, vehicula non mattis non, bibendum nec purus. Nulla tincidunt nibh sit amet sapien scelerisque sollicitudin. Donec eu aliquam neque. Praesent id sollicitudin urna, eu iaculis nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut vitae mauris pulvinar, luctus ante ac, euismod justo. Maecenas nec odio eleifend, ornare tortor vel, rhoncus sem. Cras hendrerit pharetra lacinia. Phasellus arcu turpis, consectetur a cursus id, ultricies vel diam. 
            </b>
            <br><br>
            <b>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pulvinar mi et dignissim porta. Sed in lacinia lectus. Sed felis odio, vehicula non mattis non, bibendum nec purus. Nulla tincidunt nibh sit amet sapien scelerisque sollicitudin. Donec eu aliquam neque. Praesent id sollicitudin urna, eu iaculis nibh. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut vitae mauris pulvinar, luctus ante ac, euismod justo. Maecenas nec odio eleifend, ornare tortor vel, rhoncus sem. Cras hendrerit pharetra lacinia. Phasellus arcu turpis, consectetur a cursus id, ultricies vel diam. 
            </b>
        </div>
        <br>
        <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
        <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
        <br>
        <!-- <a id="regNowBtn" onclick="event.preventDefault();scrollToRegMobile();"><img src="{{ asset('img') }}/ttc/regbtn.png" class="regBtn" alt="" /></a> -->
    </div>
</div>


<div id="bg">
    <div id="bannerBg">
        <img src="{{ asset('img') }}/bryte/banner.jpg" class="bgImgL" alt="" />
        
        <div id="bannerDate">
            <div id="bannerText">
                <b>Date: 25th May 2021</b>
                <br>
                <b>Time: 18:00 - 20:30</b>
            </div>
        </div>
    </div>
    <div id="overviewBg">
    <img src="{{ asset('img') }}/bryte/landingbg.jpg" class="bgImg" alt="" />
        <br>
        <br>
        <div id="overviewText">
            <b>
            Thank you for joining us for our first, Business Partner Conference, focusing on a range of risk realities. We are delighted to bring to you several, renowned thought leaders who will share robust insights, interesting perspectives.            
            </b>
            <br><br>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div id="regButtons" class="btn-group">
            <button type="button" onclick="window.location.href='/register/sa'" class="btn btn-primary btn-lg">REGISTER: SOUTH AFRICA</button>
            <button type="button"  onclick="window.location.href='/register/ba'" class="btn btn-secondary btn-lg">REGISTER: BOTSWANA</button>
        </div>
        <br>
        <br>
        <br>
        <!-- <a id="regNowBtn" onclick="event.preventDefault();scrollToRegMobile();"><img src="{{ asset('img') }}/ttc/regbtn.png" class="regBtn" alt="" /></a> -->
    </div>
</div>

</body>

<script>
function scrollSmoothToBottom (id) {
   var div = document.getElementById(id);
   $('#' + id).animate({
      scrollTop: div.scrollHeight - div.clientHeight
   }, 500);
}

function scrollToRegMobile(){
    document
    .getElementById("registerBg")
    .scrollIntoView({ behavior: "smooth" });
}

</script>