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
    /* height:100%; */
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
    object-fit: cover; /* Do not scale the image */
  object-position: center; /* Center the image within the element */
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

#page1{
    display: block;
}

#page2{
    display: none;
}

#page3{
    display: none;
}
#page4{
    display: none;
}

.form-check-label {
    margin-bottom: 0;
    margin-top: 2%;
}
</style>

</head>

<body>
<div id="banner"><img src="{{ asset('img') }}/bryte/banner.jpg" class="stretch" alt="" /></div>
<div class="signup-form">
            <form method="POST" class="login-form" id="login-form" action="{{ route('login') }}">
            @csrf
            <div id="page1">
                <div class="form-group row">
                    <div class="form-group">
                    <label for="email">{{ __('First Name') }}</label>
                            <input id="fname" type="fname" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                    <label for="email">{{ __('Last Name') }}</label>
                    <input id="lname" type="lname" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    </div>


                    <div class="form-group row">
                    <label for="email">{{ __('Company Name') }}</label>
                    <input id="lname" type="lname" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    
                    <div class="form-group row">
                    <div class="form-group">
                    <label for="email">{{ __('Email Address') }}</label>
                            <input id="fname" type="fname" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                    <label for="email">{{ __('Mobile Number') }}</label>
                    <input id="lname" type="lname" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    </div>


                    <button type="button" onclick="showPage2();" class="btn btn-success">{{ __('Next') }}</button>
                </div>

                <div id="page2">
                    <div class="form-group">
                        <label for="check-form">{{ __('Would you like a lunch voucher?') }}</label>
                        <div class="form-check form-switch" name="check-form">
                            <input class="form-check-input" type="checkbox" id="voucherCheck" onclick="">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Yes</label>
                        </div>
                    </div>
                    <div id="voucherOptions" style="display:none">
                        <div class="form-group">
                            <label for="check-form-voucher">{{ __('Which lunch voucher would you prefer?') }}</label>
                            <div class="form-check form-switch" name="check-form-voucher">
                                <div class="form-group">
                                <input class="form-check-input" type="checkbox" id="uberEatsCheck">
                                <label class="form-check-label" for="uberEatsCheck">UberEats</label>
                                </div>
                                <input class="form-check-input" type="checkbox" id="mrDCheck">
                                <label class="form-check-label" for="mrDCheck">Mr. Delivery</label>
                            </div>
                        </div>
                    </div>
                    <button type="button" onclick="showPage1();" class="btn btn-danger">{{ __('Back') }}</button>
                    <button type="button" onclick="showPage3();" class="btn btn-success">{{ __('Next') }}</button>
                </div>

                <div id="page3">
                    <div class="form-group">
                        <label for="check-form">{{ __('Which of our breakaway rooms would you be interested in attending?') }}</label>
                        <div class="form-check form-switch" name="check-form">
                            <div class="form-group">
                                <input class="form-check-input" type="checkbox" id="breakaway1">
                                <label class="form-check-label" for="breakaway1">Launching Bonds and Guarantees</label>
                            </div>
                            <div class="form-group">
                                <input class="form-check-input" type="checkbox" id="breakaway2">
                                <label class="form-check-label" for="breakaway2">Bespoke Solutions for the Hospitality Sector Claims – Our Shop Window</label>
                            </div>
                        </div>
                    </div>
                    <button type="button" onclick="showPage2();" class="btn btn-danger">{{ __('Back') }}</button>
                    <button type="button" onclick="showPage4();" class="btn btn-success">{{ __('Next') }}</button>
                </div>

                <div id="page4">
                    <div class="form-group">
                        <label for="check-form">{{ __('Would you like to extend this invitation to any of your colleagues within your organisation?') }}</label>
                        <div class="form-check form-switch" name="check-form">
                            <input class="form-check-input" type="checkbox" id="inviteCheck" onclick="showInvite()">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Yes</label>
                        </div>
                    </div>
                    <div id="invitationExtend" style="display:none">
                        <div class="form-group">
                            <label for="inviteDetails">{{ __('Please provide us with your colleagues details:') }}</label>
                            <div name="inviteDetails" id="inviteDetails">
                                <div class="form-group row">
                                    <div class="form-group">
                                    <label for="email">Full Name</label>
                                            <input id="fname" type="fname" class="form-control @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="fname" autofocus>
                                    </div>
                                    <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input id="lname" type="lname" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="lname" autofocus>
                                    </div>
                                </div>
                            </div>
                            <button type="button" onclick="addInvite();" class="btn btn-success">{{ __('Add Invite') }}</button>
                        </div>
                    </div>
                    <button type="button" onclick="showPage3();" class="btn btn-danger">{{ __('Back') }}</button>
                    <button type="button" class="btn btn-success">{{ __('Submit') }}</button>
                </div>
            </form>
        </div>

</body>

<script>
function addInvite(){
    var invitationExtend = document.getElementById("inviteDetails");
    invitationExtend.innerHTML += '<div class="form-group row"><div class="form-group"><label for="email">Full Name</label><input id="fname" type="fname" class="form-control @error("fname") is-invalid @enderror" name="fname" value="{{ old("fname") }}" required autocomplete="fname" autofocus></div><div class="form-group"><label for="email">Email Address</label><input id="lname" type="lname" class="form-control @error("lname") is-invalid @enderror" name="lname" value="{{ old("lname") }}" required autocomplete="lname" autofocus></div></div>';
}
function showVoucherOptions(){
    var checkBox = document.getElementById("voucherCheck");
  // Get the output text
  var voucherOptions = document.getElementById("voucherOptions");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    voucherOptions.style.display = "block";
  } else {
    voucherOptions.style.display = "none";
  }
}

function showInvite(){
    var checkBox = document.getElementById("inviteCheck");
  // Get the output text
  var invitationExtend = document.getElementById("invitationExtend");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    invitationExtend.style.display = "block";
  } else {
    invitationExtend.style.display = "none";
  }
}

function showPage1(){
    document.getElementById("page1").style.display = "block";
    document.getElementById("page2").style.display = "none";
}

function showPage2(){
    document.getElementById("page2").style.display = "block";
    document.getElementById("page1").style.display = "none";
    document.getElementById("page3").style.display = "none";
}

function showPage3(){
    document.getElementById("page3").style.display = "block";
    document.getElementById("page2").style.display = "none";
    document.getElementById("page4").style.display = "none";
}
function showPage4(){
    document.getElementById("page4").style.display = "block";
    document.getElementById("page3").style.display = "none";
}

function login(){
    var email = document.getElementById('email').value;
    if(email != "wayne@flash-forward.co.za")
        alert('THIS EVENT HAS NOT STARTED');
    else
        document.getElementById('login-form').submit();
}
</script>