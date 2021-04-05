<head>
		<meta charset="UTF-8">
		<title>Thriving Through Covid</title>
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
    color: #ffffff !important;
    position: relative;
    top: 5%;
    text-align: center;
    margin-right:5% !important;
    margin-left:5% !important;
    font-size: 91%;
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
    /* height: 100%;  */
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
  top: 5%;
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
    width:inherit; 
    height:inherit;
    position: absolute;
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
  input:focus, select:focus {
    outline: none;
}
input
{
    background: transparent;
    border: none;
}

label {
  font-size: 16px;
  font-weight: bold;
  /* font-family: 'Montserrat'; */
  margin-bottom: 0px;
  display: block; }
</style>

</head>

<body>
<div id="bgMobile">
    <div id="bannerBg">
        <img src="{{ asset('img') }}/ttc/bannerbg1.jpg" class="bgImg" alt="" />
        <div id="bannerLogo">
        <img src="{{ asset('img') }}/ttc/logo.png" class="logoImg" alt="" />
        </div>
        
        <div id="bannerDate">
            <div id="bannerText">
                <b>Date: 8th April 2021</b>
                <br>
                <b>Time: 18:00 - 20:30</b>
            </div>
        </div>
    </div>
    <div id="overviewBg">
    <img src="{{ asset('img') }}/ttc/genbg.jpg" class="bgImg" alt="" />
        <div id="overviewText">
            <b>
                Life is not meant to be struggle; we’re meant to THRIVE.. in all areas of our life. Join us for an exhilarating FREE Virtual Event featuring some of SA’s most successful entrepreneurs who will be sharing their inspiring stories, secrets and techniques of how they pivoted their businesses during COVID, which left them better off than prior to the pandemic. You will learn how to spot the gaps in the market, adjust your service offerings to cater for the demand as well as implement bullet proof marketing techniques to generate more revenue. 
            </b>
            <br><br>
            <b>
            During this event, there will be an array of virtual talks from dynamic entrepreneurs. speakers and business experts on how they have not only survived the pandemic, but managed to scale their organisations and THRIVE. This event is NOT for everyone! It is only for entrepreneurs or aspiring business owners who are serious about thriving and skyrocketing their business through these uncertain times.This event will be hosted on the WE-LINK Virtual Conferencing Platform; the first ever proudly South African LIVE virtual platform. Register now! Limited spots available.
            </b>
        </div>
        <a id="regNowBtn" onclick="event.preventDefault();scrollToRegMobile();"><img src="{{ asset('img') }}/ttc/regbtn.png" class="regBtn" alt="" /></a>
    </div>
    <div id="speakersBg">
    <img src="{{ asset('img') }}/ttc/genbg.jpg" class="bgImg" alt="" />
        <div id="speakersText">
            <b>
                MEET THE SPEAKERS
            </b>
            <img src="{{ asset('img') }}/ttc/speaker1.png" class="speakerImg" alt="" />
            <img src="{{ asset('img') }}/ttc/speaker3.png" class="speakerImg" alt="" />
            <img src="{{ asset('img') }}/ttc/speaker2.png" class="speakerImg" alt="" />
        </div>
        
        <a id="regNowBtn" onclick="event.preventDefault();scrollToRegMobile();"><img src="{{ asset('img') }}/ttc/regbtn.png" class="regBtn" alt="" /></a>
    </div>
    <div id="whatYouWillLearnBg">
    <img src="{{ asset('img') }}/ttc/genbg.jpg" class="bgImg" alt="" />
        <div id="whatYouWillLearnHeader">
            <b>
                WHAT YOU WILL LEARN
            </b>
        </div>
        <div id="whatYouWillLearnText">
            <ul>
                <li>How to Skyrocket your Business during uncertain times</li>
                <li>How to Increase your Turnover</li>
                <li>How to identify gaps in the current market</li>
                <li>How to pivot your service offerings to cater for the demand</li>
                <li>How to implement Bulletproof Marketing Campaigns</li>
                <li>How to develop a Winning Mindset</li>
                <li>How to keep your clients coming back for more</li>
                <li>How to start a thriving business during COVID</li>
            </ul> 
        </div>
    </div>
    <div id="registerBg">
    <img src="{{ asset('img') }}/ttc/genbg.jpg" class="bgImg" alt="" />
        <div id="registerHeader">
            <b>
                REGISTER
            </b>
        </div>
        <div class="signup-form" style="top:10%;">
            <form method="POST" class="register-form" id="mregister-form" action="{{ route('register') }}">
            @csrf
                    <div class="form-group">
                        <label for="name">First Name:</label>
                        <input type="text" name="name" id="name" required/>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                    <label for="last_name">Last Name:</label>
                        <input type="text" name="last_name" id="last_name" required/>
                    </div>
                    <div class="form-group">
                    <label for="email">Email:</label>
                        <input type="text" name="email" id="email" required/>
                        @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                    <label for="confir_email">Confirm Email:</label>
                        <input type="text" name="confirm_email" id="confir_email" required/>
                    </div>
                    <div class="form-group">
                    <label for="password">Password:</label>
                        <input type="password" name="password" id="password" required>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                
                    <div class="form-group">
                    <label for="password-confirm">Confirm Password:</label>
                        <input type="password" name="password-confirm" id="password-confirm"  required/>
                    </div>

                <input type="text" name="role" id="role" value="2" style="display: none"/>
            </form>
        </div>
        <a id="regNowBtn" onclick="event.preventDefault();document.getElementById('mregister-form').submit();"><img src="{{ asset('img') }}/ttc/regbtn.png" class="regBtn" alt="" /></a>
    </div>
</div>


<div id="bg">
    <img src="{{ asset('img') }}/ttc/REGISTER PAGE4.jpg" class="stretch" alt="" />
    <div id="myImage_zone1" class="divInImage">
    <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="{{ route('register') }}">
                    @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" name="name" id="name" required/>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input style="position: relative; left: 122%" type="text" name="last_name" id="last_name" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" name="company" id="company" required/>
                            </div>
                            <div class="form-group">
                                <input style="position: relative; left: 122%" type="text" name="pos" id="pos" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input type="text" name="email" id="email" required/>
                                @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <input style="position: relative; left: 122%" type="text" name="confirm_email" id="confir_email" required/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <input type="password" name="password" id="password" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                <input style="position: relative; left: 122%" type="password" name="password-confirm" id="password-confirm"  required/>
                            </div>
                        </div>

                        

                        <input type="text" name="role" id="role" value="2" style="display: none"/>
                    </form>
                </div>
    </div>
    <a id="myImage_zone2" onclick="event.preventDefault();document.getElementById('register-form').submit();"></a>
    <a id="myImage_zone3" onclick="event.preventDefault();scrollSmoothToBottom('bg');"></a>
    <a id="myImage_zone4" onclick="event.preventDefault();scrollSmoothToBottom('bg');"></a>
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