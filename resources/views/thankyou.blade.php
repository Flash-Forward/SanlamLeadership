<link href="{{ asset('schedule') }}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style>
    html body{
        width: 100%;
        height: 100%;
    }
    .bg{
        background-image: url("{{ asset('img') }}/bryte/background.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 100%;
        position: relative;
        z-index: -1;
    }
    .message{
        width: 50%;
        /* height: 50%; */
        position: absolute;
        top: 35%;
        left: 25%;
    }

</style>
<body>
<div class="bg">
<div class="jumbotron text-center message">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>Please check your email</strong> for what's next.</p>
  <hr>

</div>
</div>
</body>