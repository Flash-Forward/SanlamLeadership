
<!DOCTYPE html>

<head>
    <title>Zoom Example</title>
    <meta charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.9.5/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.9.5/css/react-select.css" />
    <link type="text/css" rel="stylesheet" href="css/zoom-sdk-example.css" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

</head>

<body>

    <nav id="nav-tool" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Zoom Example</a>
            </div>
            <div id="navbar" class="websdktest">
                <form class="navbar-form navbar-right" id="meeting_form">
                    <div class="form-group">
                        <input type="text" name="userName" id="userName" value="1.9.5#CDN" maxLength="100"
                            placeholder="Name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="meetingNumber" id="meetingNumber" value="" maxLength="200"
                            style="width:150px" placeholder="Meeting Number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="meetingPassword" id="meetingPassword" value="" style="width:150px"
                            maxLength="32" placeholder="Meeting Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" name="userEmail" id="userEmail" value="" style="width:150px"
                            maxLength="32" placeholder="Email option" class="form-control">
                    </div>

                    <div class="form-group">
                        <select id="meetingRole" class="sdk-select">
                            <option value=0>Attendee</option>
                            <option value=1>Host</option>
                            <option value=5>Assistant</option>
                        </select>
                    </div>
                    
                    <input type="hidden" id="meeting_lang" value="en-US" />
                    <input type="hidden" id="meeting_china" value="0" /> <!-- Global-->
                    
                    <input type="hidden" value="" id="copy_link_value" />
                    <button type="submit" class="btn btn-primary" id="join_meeting">Join</button>
                    
                </form>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </nav>

    <script src="https://source.zoom.us/1.9.5/lib/vendor/react.min.js"></script>
    <script src="https://source.zoom.us/1.9.5/lib/vendor/react-dom.min.js"></script>
    <script src="https://source.zoom.us/1.9.5/lib/vendor/redux.min.js"></script>
    <script src="https://source.zoom.us/1.9.5/lib/vendor/redux-thunk.min.js"></script>
    <script src="https://source.zoom.us/1.9.5/lib/vendor/lodash.min.js"></script>
    <script src="https://source.zoom.us/zoom-meeting-1.9.5.min.js"></script>
    <script src="{{asset('js')}}/zoom.js"></script>

</body>

</html>

