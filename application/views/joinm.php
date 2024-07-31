<!DOCTYPE html>

<head>
    <title>Integration with Zoom</title>
    <meta charset="utf-8" />
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.7.8/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/1.7.8/css/react-select.css" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>

<body>
    <style>
        .sdk-select {
            height: 34px;
            border-radius: 4px;
        }

        .websdktest button {
            float: right;
            margin-left: 5px;
        }

        #nav-tool {
            margin-bottom: 0px;
        }

        #show-test-tool {
            position: absolute;
            top: 100px;
            left: 0;
            display: block;
            z-index: 99999;
        }
    </style>
    <?php
    $email = $this->session->userdata('name');
    ?>

    <nav id="nav-tool" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Hi, <?= $email; ?> Please Click "Join" to join</a>
                <form class="navbar-form navbar-right" id="meeting_form">
                    <input type="hidden" name="display_name" id="display_name" value="<?= $email; ?>">
                    <input type="hidden" name="meeting_number" id="meeting_number" value="<?= $meetingID; ?>">
                    <input type="hidden" name="meeting_pwd" id="meeting_pwd" value="<?= $meetingPWD; ?>">
                    <input type="hidden" id="meeting_lang" value="en-US">
                    <input type="hidden" id="meeting_role" value="0">

                    <button type="submit" class="btn btn-primary" id="join_meeting">Join</button>
                    <button type="submit" class="btn btn-primary" id="clear_all">Back to Page</button>

                </form>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </nav>


    <!-- <div id="show-test-tool">
        <button type="submit" class="btn btn-primary" id="show-test-tool-btn" title="show or hide top test tool">Show</button>
    </div>
    <script>
        document.getElementById('show-test-tool-btn').addEventListener("click", function(e) {
            var textContent = e.target.textContent;
            if (textContent === 'Show') {
                document.getElementById('nav-tool').style.display = 'block';
                document.getElementById('show-test-tool-btn').textContent = 'Hide';
            } else {
                document.getElementById('nav-tool').style.display = 'none';
                document.getElementById('show-test-tool-btn').textContent = 'Show';
            }
        })
    </script> -->

    <script src="https://source.zoom.us/1.7.8/lib/vendor/react.min.js"></script>
    <script src="https://source.zoom.us/1.7.8/lib/vendor/react-dom.min.js"></script>
    <script src="https://source.zoom.us/1.7.8/lib/vendor/redux.min.js"></script>
    <script src="https://source.zoom.us/1.7.8/lib/vendor/redux-thunk.min.js"></script>
    <script src="https://source.zoom.us/1.7.8/lib/vendor/jquery.min.js"></script>
    <script src="https://source.zoom.us/1.7.8/lib/vendor/lodash.min.js"></script>

    <script src="https://source.zoom.us/zoom-meeting-1.7.8.min.js"></script>
    <script src="<?= base_url('assets/') ?>js/index.js"></script>
    <script src="<?= base_url('assets/') ?>js/tool.js"></script>

    <script>

    </script>
</body>

</html>