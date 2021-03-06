<head>
    <meta charset="UTF-8">
    <title>WeLink Reg</title>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.9/dist/sweetalert2.all.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('schedule') }}/css/style.css" rel="stylesheet">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: 'Arial', serif;
        }


        h2 {
            font-weight: bold;
            text-align: center;
            padding: 10px 0;
            background-color: #eee;
            mix-blend-mode: multiply;
            width: 100%;
            position: relative;
            text-transform: none;
            border-radius: 10px;
        }

        h2.question {
            font-weight: bold;
            text-align: center;
            padding: 10px 0;
            background-color: #0074c9
 !important;
            mix-blend-mode: normal !important;
            width: 100%;
            position: relative;
            text-transform: none;
            border-radius: 10px;
            font-size: 1.5vw;
        }

        #bg {
            position: relative;
            background-image: url("{{$bgL->value}}");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            max-height: 200vh !important;
            /* overflow-y: auto !important; */
            width: 100%;
            height: 80vh;
            left: 0px;
            top: 0px;
        }

        .stretch {
            width: 100%;
            /* height:100%; */
            z-index: -1;
            /* Ensure div tag stays behind content; -999 might work, too. */
        }

        .divInImage {
            /* border:1px solid #fff; */
            display: block;
            position: absolute;
            /* background-color:rgba(0,0,0,0.1); */
        }

        #bg a {
            /* border:1px solid #fff; */
            display: block;
            position: absolute;
            background-color: rgba(0, 0, 0, 0.1);
        }

        #bg a:hover {
            background-color: rgba(255, 255, 255, 0.3);
        }

        #banner {
            object-fit: cover;
            /* Do not scale the image */
            object-position: center;
            /* Center the image within the element */
            width: 100%;
            text-align: center;
            text-transform: uppercase;
        }

        #myImage_zone2 {
            width: 11%;
            height: 36px;
            top: 805px;
            left: 44.5%;
        }

        #myImage_zone3 {
            width: 15%;
            height: 15%;
            top: 35%;
            left: 52%;
        }

        .signup-form {
            /* margin-top: 4%; */
            /* display: flex; */
            /* justify-content: center; */
            /* align-items: center; */
            background: url('{{$container->value}}');
            padding-top: 2%;
            padding-right: 2%;
            padding-left: 2%;
            padding-bottom: 0 !important;
            position: relative;
            top: 15px;
            transform: translateX(0);
            left: 25%;
            width: 50% !important;
            border-radius: 10px;
        }

        .signup-form-steps {
            /* margin-top: 4%; */
            /* display: flex; */
            /* justify-content: center; */
            /* align-items: center; */
            background: url('{{$container->value}}');
            padding-top: 1%;
            padding-right: 1%;
            padding-left: 1%;
            padding-bottom: 0 !important;
            position: relative;
            top: 15px;
            transform: translateX(0);
            left: 25%;
            width: 50% !important;
            border-radius: 10px;
        }

        .signup-form-steps label {
            font-weight: bold;
            color: #000;
        }

        input.larger {
            width: 25px;
            height: 25px;
        }

        .signup-form label {
            font-weight: bold;
            color: #000;
            font-size: 16px;
        }

        .btn-circle {
            width: 70px;
            height: 70px;
            padding: 10px 16px;
            border-radius: 35px;
            font-size: 24px;
            line-height: 1.33;
        }

        input,
        select {
            height: 45px;
            width: 100% !important;
            display: block;
            /* margin-bottom:42px; */
            /* margin-left:5%; */
            padding: 1.6vh 1.4vh;
            box-sizing: border-box;
            font-weight: 500;
            font-size: 13px;
        }

        #regNowBtn {
            position: relative;
            left: 18%;
            display: block;
            width: 80%;
            height: 20%;
        }

        .regBtn {
            width: inherit !important;
            height: inherit !important;
        }

        #page1 {
            display: block;
        }

        #page2 {
            display: none;
        }

        #page3 {
            display: none;
        }

        #page4 {
            display: none;
        }

        .form-check-label {
            margin-bottom: 0;
            margin-top: 2%;
        }

        .right-input {
            margin-left: 5px !important;
        }

        .bryte-button {
            background-color: #0074c9
 !important;
            border-color: #0074c9
 !important;
            color: #ffffff !important;
        }


        /* START OF NICE CHECKBOX */

        .inputGroup {
            background-color: #ccc;
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

        .inputGroup input:checked~label {
            color: #fff;
        }

        .inputGroup input:checked~label:before {
            transform: translate(-50%, -50%) scale3d(110, 110, 1);
            opacity: 1;
        }

        .inputGroup input:checked~label:after {
            background-color: #0074c9
;
            border-color: #0074c9
;
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

        #registration-header>h1 {
            font-weight: bold;
            text-align: center;
            padding: 10px 0;
            mix-blend-mode: multiply;
            width: 100%;
            position: relative;
            top: 15px;
            text-transform: none;
        }

        @media only screen 
            and (max-width : 500px) {

                #bg {
            position: relative;
            background-image: url("{{$bgL->value}}");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            max-height: 200vh !important;
            /* overflow-y: auto !important; */
            width: 100%;
            height: 100vh;
            left: 0px;
            top: 0px;
        }

                .signup-form {
            /* margin-top: 4%; */
            /* display: flex; */
            /* justify-content: center; */
            /* align-items: center; */
            background: url('{{$container->value}}');
            padding-top: 2%;
            padding-right: 2%;
            padding-left: 2%;
            padding-bottom: 0 !important;
            position: relative;
            top: 15px;
            transform: translateX(0);
            left: 10%;
            width: 80% !important;
            border-radius: 10px;
        }

        .signup-form-steps {
            /* margin-top: 4%; */
            /* display: flex; */
            /* justify-content: center; */
            /* align-items: center; */
            background: url('{{$container->value}}');
            padding-top: 1%;
            padding-right: 1%;
            padding-left: 1%;
            padding-bottom: 0 !important;
            position: relative;
            top: 15px;
            transform: translateX(0);
            left: 10%;
            width: 80% !important;
            border-radius: 10px;
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
	text-transform: none;
    border-radius: 10px;
}

h2.question
{
	font-weight: bold;
	text-align: center;
	padding: 10px 0;
	background-color: #0074c9
 !important;
	mix-blend-mode: normal !important;
	width: 100%;
	position: relative;
	text-transform: none;
    border-radius: 10px;
    font-size: 5vw;
}
            }

            @media only screen 
            and (max-height : 800px) {

                #bg {
            position: relative;
            background-image: url("{{$bgL->value}}");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            max-height: 200vh !important;
            /* overflow-y: auto !important; */
            width: 100%;
            height: 130vh;
            left: 0px;
            top: 0px;
        }
            }
    </style>

</head>

<body>
    <div id="banner"><img src="{{$banner->value}}" class="stretch" alt="" /></div>
    <div id="bg">
        <div id="registration-header">
            <h1>Registration</h1>
        </div>
        <div id="sign-up-form-div" class="signup-form">

            <form method="POST" class="login-form" id="login-form" action="{{ route('register') }}">
                @csrf
                <div id="page1">
                    <div class="container-fluid">
                        <!-- First Row - First Name & Surname -->
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="edtName">First name</label>
                                <input type="text" class="form-control" placeholder="First name" id="edtName" name="edtName" />
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="edtSurname">Surname</label>
                                <input type="text" class="form-control" placeholder="Surname" id="edtSurname" name="edtSurname" />

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group" style="display:none">
                                <label for="edtCName">Company name</label>
                                <input type="text" class="form-control" placeholder="Company name" id="edtCName" name="edtCName" value="TEST" />

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group" style="display:none">
                                <label for="edtMNum">Mobile number</label>
                                <input type="text" class="form-control" placeholder="Mobile number" id="edtMNum" name="edtMNum"  value="TEST"/>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="edtEmail">Email address</label>
                                <input type="email" class="form-control" placeholder="Email address" id="edtEmail" name="edtEmail" />

                            </div>
                        </div>
                        @foreach($fields as $item)
                        <div class="row">
                            <div class="col-sm-12 form-group">
                            @php
                                $idName = preg_replace('/\s*/', '', $item->name);
                                $idName = strtolower($idName);
                            @endphp     
                                <label for="edtC{{$idName}}">{{$item->name}}</label>
                                <input type="text" class="form-control" placeholder="{{$item->name}}" id="edtC{{$idName}}" name="edtC{{$idName}}" />

                            </div>
                        </div>
                        @endforeach
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="edtPass">Password</label>
                                <input type="password" class="form-control" placeholder="Please create a password that you will use on the day of the event to login to the Virtual Platform" id="edtPass" name="edtPass" />

                            </div>
                        </div>
                        <input type="text" name="country" id="country" value="sa" style="display: none"/>
                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <button type="button" onclick="submitReg()" class="btn bryte-button">{{ __('Submit') }}</button>

                            </div>
                        </div>

                    </div>


                </div>
                
                </div>
                <br>
            </form>

        </div>

    </div>



</body>

<script>
const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn bryte-button',
    cancelButton: 'btn bryte-button'
  },
  buttonsStyling: false
})
    function submitReg(){
        @if ($whitelist_switch->value == "ON")
        var Email = document.getElementById("edtEmail");
        $.ajax({
            url: '{{ route("email.check") }}?e='+Email.value,
            type: "get",
            success: function (data) {
                if (data == "1") {
                    document.getElementById("login-form").submit(); 
                }else{
                    swalWithBootstrapButtons.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: data,
                        //footer: '<a href>Why do I have this issue?</a>'
                    })
                }
            }
        });
        @else
        document.getElementById("login-form").submit(); 

        @endif

    }

    function showNextAfterVoucherPick(){
    document.getElementById("page2Next").style.display = "inline-block";
}
function showVoucherOptions(){
    var checkBox = document.getElementById("voucherRadio1");
  // Get the output text
  var voucherOptions = document.getElementById("voucherOptions");

  // If the checkbox is checked, display the output text
  if (checkBox.checked == true){
    voucherOptions.style.display = "block";
    document.getElementById("page2Next").style.display = "none";
  } else {
    voucherOptions.style.display = "none";
    document.getElementById("page2Next").style.display = "inline-block";
  }
}
$(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});

    var invite_num = 2;
    function addInvite() {
        
        var invitationExtend = document.getElementById("inviteDetails");
        invitationExtend.innerHTML += '<div class="row"><div class="col-sm-6 form-group"><label for="edtName'+invite_num+'">Full name</label><input type="text" class="form-control" placeholder="Full name" id="edtName'+invite_num+'" name="edtName'+invite_num+'"/></div><div class="col-sm-6 form-group"><label for="edtSurname'+invite_num+'">Email address</label><input type="text" class="form-control" placeholder="Email address" id="edtSurname'+invite_num+'" name="edtSurname'+invite_num+'"/></div></div>';
        invite_num++;
    }

    function showInvite() {
        var checkBox = document.getElementById("radio3");
        // Get the output text
        var invitationExtend = document.getElementById("invitationExtend");

        // If the checkbox is checked, display the output text
        if (checkBox.checked == true) {
            invitationExtend.style.display = "block";
        } else {
            invitationExtend.style.display = "none";
        }
    }


    function showPage1() {



        document.getElementById("page1").style.display = "block";
        document.getElementById("page2").style.display = "none";
        document.getElementById("sign-up-form-div").className = "signup-form";


    }

    function showPage2() {
        var validated = 1;
        var fName = document.getElementById("edtName");
        if (fName) {
            if (fName.value == "") {
                fName.style.background = "#FFCCCC";
                validated = 0;
            } else {
                fName.style.background = "#FFFFFF";
               // validated = 1;
            }

            var SName = document.getElementById("edtSurname");
            if (SName.value == "") {
                SName.style.background = "#FFCCCC";
                validated = 0;
            } else {
                SName.style.background = "#FFFFFF";
                //validated = 1;
            }

            var CName = document.getElementById("edtCName");
            if (CName.value == "") {
                CName.style.background = "#FFCCCC";
                validated = 0;
            } else {
                CName.style.background = "#FFFFFF";
                //validated = 1;
            }

            var MNum = document.getElementById("edtMNum");
            if (MNum.value == "") {
                MNum.style.background = "#FFCCCC";
                //validated = 0;
            } else {
                MNum.style.background = "#FFFFFF";
                //validated = 1;
            }

            var Email = document.getElementById("edtEmail");
            if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(Email.value)) {
                Email.style.background = "#FFFFFF";
                //validated = 1;
            } else {
                Email.style.background = "#FFCCCC";
                validated = 0;
            }

            var Pass = document.getElementById("edtPass");
            if (Pass.value == "") {
                Pass.style.background = "#FFCCCC";
                validated = 0;
            } else {
                Pass.style.background = "#FFFFFF";
                //validated = 1;
            }
        }
        return validated;


    }

    function showPage3() {
        document.getElementById("page3").style.display = "block";
        document.getElementById("page2").style.display = "none";
        document.getElementById("page4").style.display = "none";
    }

    function showPage4() {
        document.getElementById("page4").style.display = "block";
        document.getElementById("page3").style.display = "none";
    }

    function login() {
        var email = document.getElementById('email').value;
        if (email != "wayne@flash-forward.co.za")
            alert('THIS EVENT HAS NOT STARTED');
        else
            document.getElementById('login-form').submit();
    }
</script>