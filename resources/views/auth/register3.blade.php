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

#registration-header > h1
{
	font-weight: bold;
	text-align: center;
	padding: 10px 0;
	background-color: #eee;
	mix-blend-mode: multiply;
	width: 100%;
	position: relative;
	top: 15px;
	text-transform: uppercase;
}

h2
{
	font-weight: bold;
	text-align: center;
	padding: 10px 0;
	background-color: #eee;
	mix-blend-mode: multiply;
	width: 100%;
	position: relative;
	text-transform: uppercase;
    border-radius: 10px;
}

h2.question
{
	font-weight: bold;
	text-align: center;
	padding: 10px 0;
	background-color: #004d73 !important;
	mix-blend-mode: normal !important;
	width: 100%;
	position: relative;
	text-transform: uppercase;
    border-radius: 10px;
}

#bg 
{
position: relative;
    background-image: url("{{ asset('img') }}/bryte/bg3.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    max-height: 200vh !important;
    /* overflow-y: auto !important; */
    width: 100%;
    height: 125vh;
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
#banner
{
	object-fit: cover; /* Do not scale the image */
	object-position: center; /* Center the image within the element */
	width:100%;
	text-align: center;
	text-transform: uppercase;
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
.signup-form
{
    /* margin-top: 4%; */
    /* display: flex; */
    /* justify-content: center; */
    /* align-items: center; */
    background-color: rgba(0,0,0,0.70);
    padding: 5%;
    position: relative;
    top: 15px;
    transform: translateX(0);
    left: 10%;
    width: 80% !important;
	border-radius: 10px;
}
.signup-form-steps
{
    /* margin-top: 4%; */
    /* display: flex; */
    /* justify-content: center; */
    /* align-items: center; */
    background-color: rgba(0,0,0,0.70);
    padding-top: 1%;
    padding-right: 1%;
    padding-left: 1%;
    padding-bottom: 0 !important;
    position: relative;
    top: 15px;
    transform: translateX(0);
    left: 20%;
    width: 60% !important;
	border-radius: 10px;
}
.signup-form-steps  label
{
	color: #ccc;
}

input.larger {
        width: 25px;
        height: 25px;
      }
.signup-form  label
{
	color: #ccc;
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
                width: 100% !important;
  display: block;
  /* margin-bottom:42px; */
  /* margin-left:5%; */
  padding: 1.6vh 1.4vh;
  box-sizing: border-box;
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

.right-input{
    margin-left: 5px !important;
}

.bryte-button{
    background-color: #004d73 !important;
    border-color: #004d73 !important;
    color: #ffffff !important;
}


/* START OF NICE CHECKBOX */

.inputGroup {
	 background-color: #fff;
	 display: block;
	 margin: 10px 0;
	 position: relative;
}
 .inputGroup label {
	 padding: 12px 30px;
	 width: 100%;
	 display: block;
	 text-align: left;
	 color: #3c454c;
	 cursor: pointer;
	 position: relative;
	 z-index: 2;
	 transition: color 200ms ease-in;
	 overflow: hidden;
}
 .inputGroup label:before {
	 width: 10px;
	 height: 10px;
	 border-radius: 50%;
	 content: '';
	 background-color: #dac057;
	 position: absolute;
	 left: 50%;
	 top: 50%;
	 transform: translate(-50%, -50%) scale3d(1, 1, 1);
	 transition: all 300ms cubic-bezier(0.4, 0, 0.2, 1);
	 opacity: 0;
	 z-index: -1;
}
 .inputGroup label:after {
	 width: 32px;
	 height: 32px;
	 content: '';
	 border: 2px solid #d1d7dc;
	 background-color: #fff;
	 background-image: url("data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.414 11L4 12.414l5.414 5.414L20.828 6.414 19.414 5l-10 10z' fill='%23fff' fill-rule='nonzero'/%3E%3C/svg%3E ");
	 background-repeat: no-repeat;
	 background-position: 2px 3px;
	 border-radius: 50%;
	 z-index: 2;
	 position: absolute;
	 right: 30px;
	 top: 50%;
	 transform: translateY(-50%);
	 cursor: pointer;
	 transition: all 200ms ease-in;
}
 .inputGroup input:checked ~ label {
	 color: #fff;
}
 .inputGroup input:checked ~ label:before {
	 transform: translate(-50%, -50%) scale3d(110, 110, 1);
	 opacity: 1;
}
 .inputGroup input:checked ~ label:after {
	 background-color: #004d73;
	 border-color: #004d73;
}
 .inputGroup input {
	 width: 32px;
	 height: 32px;
	 order: 1;
	 z-index: 2;
	 position: absolute;
	 right: 30px;
	 top: 50%;
	 transform: translateY(-50%);
	 cursor: pointer;
	 visibility: hidden;
}

/*  */

</style>

</head>

<body>
<div id="banner"><img src="{{ asset('img') }}/bryte/banner.jpg" class="stretch" alt="" /></div>

<div id="bg">
<div id="registration-header"><h1>Registration</h1></div>
<div id="sign-up-form-div" class="signup-form">
            <form method="POST" class="login-form" id="login-form" action="{{ route('login') }}">
            @csrf
            <div id="page1">
                    <div class="container-fluid">
                        <!-- First Row - First Name & Surname -->
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="edtName">First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" id="edtName" name="edtName"/>
                            </div>
                            <div class="col-sm-6 form-group">
                                 <label for="edtSurname">Surname</label>
                                <input type="text" class="form-control" placeholder="Surname" id="edtSurname" name="edtSurname"/>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="edtCName">Company Name</label>
                                <input type="text" class="form-control" placeholder="Company Name" id="edtCName" name="edtCName"/>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="edtMNum">Mobile Number</label>
                                <input type="text" class="form-control" placeholder="Mobile Number" id="edtMNum" name="edtMNum"/>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="edtEmail">Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="edtEmail" name="edtEmail"/>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="edtPass">Password</label>
                                <input type="password" class="form-control" placeholder="Password" id="edtPass" name="edtPass"/>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <button type="button" onclick="showPage2();" class="btn bryte-button">{{ __('Next') }}</button>

                            </div>
                        </div>
                        
                    </div>


                </div>

                <div id="page2">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <h2 class="question" style="color: #fff;">Would you like a lunch voucher?</h2>
                            </div>
                        </div>
                        <!-- <div class="row justify-content-center"> -->
                        <div class="inputGroup">
                            <input id="radio1" name="radio" type="radio"/>
                            <label for="radio1">Yes</label>
                        </div>

                        <!-- </div> -->
                        <!-- <div class="row justify-content-center"> -->
                        <div class="inputGroup">
                            <input id="radio2" name="radio" type="radio"/>
                            <label for="radio2">No</label>
                        </div>
                        <!-- </div> -->
                        <div class="row justify-content-center" style="margin-top:3.5%;">
                            <div class="form-group">
                                <button type="button" onclick="showPage1();" class="btn bryte-button">{{ __('Back') }}</button>
                                <button type="button" onclick="showPage3();" class="btn bryte-button">{{ __('Next') }}</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="page3">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <h2 class="question" style="color: #fff;">Which of our breakaway rooms would you be interested in attending?</h2>
                            </div>
                        </div>
                        <!-- <div class="row justify-content-center"> -->
                        <div class="inputGroup">
                            <input id="checkbox1" name="checkbox1" type="checkbox"/>
                            <label for="checkbox1">Launching Bonds and Guarantees</label>
                        </div>

                        <!-- </div> -->
                        <!-- <div class="row justify-content-center"> -->
                        <div class="inputGroup">
                            <input id="checkbox2" name="checkbox2" type="checkbox"/>
                            <label for="checkbox2">Bespoke Solutions for the Hospitality Sector Claims – Our Shop Window</label>
                        </div>
                        <!-- </div> -->
                        <div class="row justify-content-center" style="margin-top:3.5%;">
                            <div class="form-group">
                                <button type="button" onclick="showPage2();" class="btn bryte-button">{{ __('Back') }}</button>
                                <button type="button" onclick="showPage4();" class="btn bryte-button">{{ __('Next') }}</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="page4">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <h2 class="question" style="color: #fff;">Would you like to extend this invitation to any of your colleagues within your organisation?</h2>
                            </div>
                        </div>
                        <!-- <div class="row justify-content-center"> -->
                        <div class="inputGroup">
                            <input id="radio3" name="radio" type="radio" onclick="showInvite()"/>
                            <label for="radio3">Yes</label>
                        </div>

                        <!-- </div> -->
                        <!-- <div class="row justify-content-center"> -->
                        <div class="inputGroup">
                            <input id="radio4" name="radio" type="radio" onclick="showInvite()"/>
                            <label for="radio4">No</label>
                        </div>
                        <!-- </div> -->

                        <div id="invitationExtend" style="display:none">
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <h2 class="question" style="color: #fff; margin-top: 3%;">Please provide us with your colleagues details:</h2>
                                </div>
                            </div>
                            <div id="inviteDetails">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label for="edtName">Full Name</label>
                                        <input type="text" class="form-control" placeholder="First Name" id="edtName" name="edtName"/>
                                        
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label for="edtSurname">Email Address</label>
                                        <input type="text" class="form-control" placeholder="Surname" id="edtSurname" name="edtSurname"/>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="form-group">
                                    <button type="button" onclick="addInvite();" class="btn bryte-button">{{ __('Add Invite') }}</button>

                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center" style="margin-top:3.5%;">
                            <div class="form-group">
                                <button type="button" onclick="showPage3();" class="btn bryte-button">{{ __('Back') }}</button>
                                <button type="button" onclick="submitForm();" class="btn bryte-button">{{ __('Submit') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

<script>

function submitForm(){
    window.location = "{{ route('thankyou') }}";
}
function addInvite(){
    var invitationExtend = document.getElementById("inviteDetails");
    invitationExtend.innerHTML += '<div class="row"><div class="col-sm-6 form-group"><label for="edtName">Full Name</label><input type="text" class="form-control" placeholder="First Name" id="edtName" name="edtName"/></div><div class="col-sm-6 form-group"><label for="edtSurname">Email Address</label><input type="text" class="form-control" placeholder="Surname" id="edtSurname" name="edtSurname"/></div></div>';
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
    var checkBox = document.getElementById("radio3");
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
    document.getElementById("sign-up-form-div").className = "signup-form";
}

function showPage2(){
    document.getElementById("page2").style.display = "block";
    document.getElementById("page1").style.display = "none";
    document.getElementById("page3").style.display = "none";
    document.getElementById("sign-up-form-div").className = "signup-form-steps";

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