<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog Site</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- pusher -->
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('2360b8f55f7fdbc1d58b', {
        cluster: 'ap1'
        });

        let message = "";
       
        var channel = pusher.subscribe('role-channel');
        channel.bind('role-event', function(data) {
            let accountId=data.id;
            let newRole = data.newRole;


            if($("#accId").val() == accountId){
                if(newRole=== 0){
                    message = "You are admin now. Login with admin form to see admiin panel.";
                }else{
                    message = "You have been removed from admin list.";
                }

                $alertBox = `
                    <div class="alert alert-primary position-fixed" role="alert" style="top: 20px; right: 20px; z-index: 222222;">
                        ${message}
                    </div>
                `;

                $("#bodyTag").append($alertBox);
                setTimeout(function(){
                    $(location).attr('href', '/logout');
                }, 8000);
            }
        });

    </script>
</head>

<body class="hold-transition sidebar-mini" id="bodyTag">
    <input type="hidden" id="accId" value="<?= $_SESSION['id']?? null; ?>">
    <div class="wrapper">

       

       