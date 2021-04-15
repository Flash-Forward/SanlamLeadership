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
  <link href="{{ asset('schedule') }}/css/style.css" rel="stylesheet">
<style>
body, html {
  height: 100%;
  margin: 0;
}

#bg {
  /* The image used */
  /* background-image: url("{{ asset('img') }}/login.jpg"); */
  max-height: 100vh !important;
	overflow-y: auto !important;
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
#banner{
    width:100%;
    height:50%;
    position: relative;
}
#myImage_zone2{
    width:11%;
    height:36px;
    top:805px;
    left:44.5%;
}
#myImage_zone3{
   width:15%;
    height:15%;
    top:35%;
    left:52%;
}
.signup-form{
    margin-top: 4%;
    display: flex;
  justify-content: center;
  align-items: center;
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
                height: 34px;
                /* width: 30% !important; */
  display: block;
  /* margin-bottom:42px; */
  /* margin-left:5%; */
  padding: 1.6vh 1.4vh;
  box-sizing: border-box;
  font-family: 'Montserrat';
  font-weight: 500;
  font-size: 13px; }

  #regNowBtn{
      position: relative;
    left: 18%;
    display: block;
    width: 80%; 
    height: 20%; 
}

.regBtn{
    width: inherit !important;
    height: inherit !important;
}
</style>

</head>

<body>
<div id="banner"><img src="{{ asset('img') }}/ttc/banner.jpg" class="stretch" alt="" /></div>
<div class="signup-form">
            <form method="POST" class="login-form" id="login-form" action="{{ route('login') }}">
            @csrf
                <div class="form-row">
                    <div class="form-group">
                            <label for="fname">{{ __('First Name') }}</label>
                            <input id="fname" type="text" name="fname" required autofocus>
                    </div>
                    <div class="form-group">
                            <label for="lname">{{ __('Last Name') }}</label>
                            <input id="lname" type="text" name="lname" required autofocus>
                    </div>
                </div>
                <div class="form-group">
                <label for="email2">{{ __('E-Mail Address') }}</label>
                        <input id="email2" type="email" class="form-control @error('email') is-invalid @enderror" name="email2" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <!-- <input id="email" style="display: none" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="kylehansen75@gmail.com" required autocomplete="email" autofocus>
                <input id="password" style="display: none" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="q1w2e3q1w2e3" required autocomplete="current-password"> -->
                <input id="email" style="display: none" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="ffp@gmail.com" required autocomplete="email" autofocus>
                <input id="password" style="display: none" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="test" required autocomplete="current-password">
                <a id="regNowBtn" onclick="login();"><img src="{{ asset('img') }}/ttc/loginbtn.png" class="regBtn" alt="" /></a>

            </form>
        </div>

</body>

<script>
function login(){
    var name = document.getElementById('fname').value;
    var email = document.getElementById('email2').value;
    if(name != "Wayne" && email != "wayne@flash-forward.co.za")
        alert('THE EVENT ONLY STARTS ON THE 15th OF APRIL - 6PM');
    else
        document.getElementById('login-form').submit();
}
</script>