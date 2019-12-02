<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai|Alegreya|Amatic+SC|Big+Shoulders+Text|Lobster|Noto+Serif|Patrick+Hand|Mitr|Cormorant|Jura|Noto+Serif|PattayaEncode+Sans+Semi+Expanded&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/admin.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="responsive.css"> -->
</head>
<body>
<div class="container-fluid" >
    <header class="admin_header" >
        <div class="logo" >
            <a href="" style="font-size: 20px;color:white;">ADMIN</a>
        </div>
        <div class="admin_nav" s>
            <nav class="navbar navbar-static-top">
                <div style="display: inline-block;width: 50px;height: 50px;padding: 15px;text-align:center;font-size: 15px">
                    <span class="glyphicon glyphicon-align-justify"></span>
                </div>

                <div style="float: right;">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#"><span class="glyphicon glyphicon-envelope" style=""></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-bell"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-flag"></span></a></li>
                        <li>
                            <a href="#" class="admin" style="width: 200px;position: relative;">
                                <div class="avatar_header" style="width: 30px;height: 30px;border-radius: 50%;overflow: hidden;display: inline-block;">
                                    <img src="D:\Wamp\www\Blog_theme\frontend\1.jpg" class="img-responsive" >

                                </div>
                                <div style="display: inline-block;position: absolute;top:15px;left: 50px;color: white">Tài Trần</div>
                </div>
                </a>
                </li>
                </ul>
        </div>

        </nav>
</div>

</header>
<aside class="menu_admin">
    <section class="sidebar" style="margin: 50px 0;color: white">
        <div class="user_panel" style="background-color: #222d32;width: 100%;height: auto;">
            <div class="user_infor" style="width: 100%;padding: 20px 10px;">
                <div class="row" style="margin:0;">
                    <div class="col-sm-4">
                        <div class="avatar_header" style="width: 50px;height: 50px;border-radius: 50%;overflow: hidden;">
                            <img src="D:\Wamp\www\Blog_theme\frontend\1.jpg" class="img-responsive" >

                        </div>
                    </div>
                    <div class="col-sm-8">
                        <p>Tài Trần</p>
                        <p><i class="fa fa-circle text-success" style="margin-right: 10px;"></i>Online</p>
                    </div>
                </div>
            </div>

            <div class="sreach" style="text-align: center;width: 100%;padding: 0 15px;">
                <input class="well well-sm" type="text" name="sreach" placeholder="Search" style="width: 100%;background-color: #374850;border-color: #374850">
            </div>
        </div>
        <div class="sidebar-list">
            <ul>
                <li class="main" style="background-color: #1a2226">MAIN NAVIGATION</li>
                <li><span class="glyphicon glyphicon-dashboard"></span>&nbspDashboard</li>
                <li>dábdm</li>
            </ul>
        </div>
    </section>
</aside>
</div>
</body>
</html>
