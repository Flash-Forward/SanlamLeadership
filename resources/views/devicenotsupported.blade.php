<link href="{{ asset('schedule') }}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style>
    html body{
        width: 100%;
        height: 100%;
    }
    .bg{
        background-image: url("{{ asset('img') }}/ttc/genbg.jpg");
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
        top: 30%;
        left: 25%;
    }

</style>
<body>
<div class="bg">
<div class="jumbotron text-center message">
  <h1 class="display-3">Please attend this event from a desktop device.</h1>
  <p class="lead"><strong>Mobile is currently</strong> not supported.</p>
  <hr>

</div>
</div>
</body>