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
#myImage_zone1{
    width:32%;
    height:62%;
    top:17%;
    left:57.5%;
}
#myImage_zone2{
    width:15%;
    height:7%;
    top:79%;
    left:66%;
}
#myImage_zone3{
   width:15%;
    height:15%;
    top:35%;
    left:52%;
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
  width: 90%;
  border: 1px solid #ebebeb;
  padding: 11px 20px;
  box-sizing: border-box;
  font-family: 'Montserrat';
  font-weight: 500;
  font-size: 13px; }
  input:focus, select:focus {
    border: 1px solid #f0f4c9d;
}

label {
  font-size: 14px;
  font-weight: bold;
  font-family: 'Montserrat';
  margin-bottom: 2px;
  display: block; }
</style>

</head>

<body>

<div id="bg">
    <img src="{{ asset('img') }}/register.jpg" class="stretch" alt="" />
    <div id="myImage_zone1" class="divInImage">
    <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form" action="{{ route('register') }}">
                    @csrf
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">First Name :</label>
                                <input type="text" name="name" id="name" required/>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="father_name">Last  Name :</label>
                                <input type="text" name="last_name" id="last_name" required/>
                            </div>
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
                            <label for="mobile">Mobile Number:</label>
                            <input type="text" name="mobile" id="mobile" required/>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="company">Company:</label>
                                <input type="text" name="company" id="company" required/>
                            </div>
                            <div class="form-group">
                                <label for="pos">Position/Title:</label>
                                <input type="text" name="pos" id="pos" required/>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="password">Password :</label>
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
    </div>
    <a id="myImage_zone2" onclick="event.preventDefault();document.getElementById('register-form').submit();"></a>
</div>

</body>