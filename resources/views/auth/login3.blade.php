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
    object-fit: cover; /* Do not scale the image */
  object-position: center; /* Center the image within the element */
    width:100%;
    height:52vh;
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
  font-weight: 500;
  font-size: 13px; }

  label{
    font-weight: bold;
  }

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
#bg{
    background: url("{{ asset('img') }}/bryte/bg3d.jpg");
    background-size: cover;
  height: 100%;
  color: #ffffff;
}
.bryte-button{
    background-color: #004d73 !important;
    border-color: #004d73 !important;
    color: #ffffff !important;
}
#registration-header > h1
{
	font-weight: bold;
	text-align: center;
	padding: 10px 0;
	/* background-color: #eee; */
	/* mix-blend-mode: multiply; */
	width: 100%;
	position: relative;
	top: 15px;
	text-transform: uppercase;
    color: #ffffff;
}
</style>

</head>

<body>
<div id="bg">
<div id="banner"><img src="{{ asset('img') }}/bryte/loginbanners.jpg" class="stretch" alt="" /></div>
<div id="registration-header"><h1>Login</h1></div>
<div class="signup-form">
            <form method="POST" class="login-form" id="login-form" action="{{ route('login') }}">
            @csrf
                <div class="form-group">
                <label for="email">{{ __('Email address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                

                <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="test" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <button type="button" onclick="login();" class="btn bryte-button">{{ __('Login') }}</button>

                <div class="form-group row mb-1">
                    <div class="col-md-8">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #ffffff">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                </div>

            </form>
        </div>

        </div>

</body>

<script>

if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
    || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
        window.location = "/mobile";
}
function login(){
    var email = document.getElementById('email').value;
    if(email != "ffp@gmail.com" && email != 'wade@atu.co.za' && email != 'cavanzyl@tracker.co.za' && email != 'scrowder@tracker.co.za' && email != 'swatt@tracker.co.za' && email != 'claims@gmail.com' && email != 'main@gmail.com' && email != 'underwriting@gmail.com' && email != 'product@gmail.com' 
        && email != 'brytelife@gmail.com' && email != 'bryterisk@gmail.com' 
        && email != 'francois@smartlegal.co.za'  && email != 'rene.stassen@brytesa.com'  
        && email != 'tracy@smartlegal.co.za'  && email != 'lwandi@smartlegal.co.za' 
        && email != 'glen@risksolutions.co.za' && email != 'chantelle@risksolutions.co.za'
         && email != 'sonja@risksolutions.co.za' && email != 'sonja@risksolutions.co.za'
          && email != 'g.blane@zigora.co.za' && email != 'a.algera@zigora.co.za' 
          && email != 'mbambo@gilela.co.za' && email != 'zolile@gilela.co.za' 
          && email != 'siza@gilela.co.za' && email != 'lukas@pcbs.co.za'
           && email != 'joey@pcbs.co.za' && email != 'jessica.van.der.westhuizen@brytesa.com' 
           && email != 'lana.mizen@brytesa.com' && email != 'rene.stassen@brytesa.com'
           && email != 'jeffry.butt@brytesa.com' && email != 'louise@phishield.com'
           && email != 'jeanne@phisheld.com' && email != 'monique@phishield.com'
           && email != 'catherine@camargueum.co.za' && email != 'vaidah@camargueum.co.za'
           && email != 'Tamlyn@camargueum.co.za' && email != 'jako@vapsure.co.za'
           && email != 'ross@vapsure.co.za' && email != 'demi@vapsure.co.za'
           && email != 'roelof@impacuma.co.za' && email != 'riani@impacuma.co.za'
           && email != 'melanie@taxrisk.co.za' && email != 'willem@taxrisk.co.za'
           && email != 'marie.mower@brytesa.com' && email != 'michelle.dickson@brytesa.com'
           && email != 'reynier.rautenbach@brytesa.com' && email != 'ellen.engelbrecht@brytesa.com'
           && email != 'kishore.maharaj@brytesa.com' && email != 'sedick.isaacs@brytesa.com'
           && email != 'shupikayi.kasayi@brytesa.com' && email != 'robert.hodgkiss@brytesa.com'
           && email != 'pieter.pieterse@brytesa.com' && email != 'eddie.mckenzie@brytesa.com'
           && email != 'moroesi.mokhabi@brytesa.com' && email != 'dziki.nganunu@bryte.co.bw'
           && email != 'akanyang.masole@bryte.co.bw' && email != 'john.heldsinger@bryte.co.bw' )
        alert('THIS EVENT HAS NOT STARTED');
    else
        document.getElementById('login-form').submit();
}
</script>