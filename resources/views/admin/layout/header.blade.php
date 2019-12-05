<header class="admin_header">
    <div class="logo">
        <a href="">ADMIN</a>
    </div>
    <div class="admin_nav">
        <nav class="navbar navbar-static-top">
            <div class="a">
                <span class="glyphicon glyphicon-align-justify"></span>
            </div>

            <div class="b">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><span class="glyphicon glyphicon-envelope" style=""></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-bell"></span></a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-flag"></span></a></li>
                    <li>
                        <a href="#" class="admin">
                            <div class="avatar_header">
                                <img src="D:\Wamp\www\Blog_theme\frontend\1.jpg" class="img-responsive" >

                            </div>
                            <div class="name">{{ Auth::user()->name}}</div>
                        </a>
                    </li>
                </ul>
            </div>

        </nav>
    </div>

</header>
