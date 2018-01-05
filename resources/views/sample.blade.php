<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Sample Page</title>

    <style>

        body {
            margin-top: 100px;
        }

        .upper-navbar > ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            /*overflow: hidden;*/
            background-color: #F44336;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            min-height: 28px;
            max-height: 28px;
        }

        .upper-navbar > ul > li {
            float: left;
        }

        .upper-navbar > ul > li a {
            display: block;
            color: white;
            text-align: center;
            padding-left: 16px;
            padding-right: 16px;
            text-decoration: none;
        }

        .upper-navbar > ul > li a:hover {
            background-color: #bf3a30;
        }

        .center-menu {
            display: flex;
            justify-content: center;
        }

        header {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 99;
        }

        .sidenav {
            height: 100%;
            /*margin-top: 78px   ;*/
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 138px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 78px;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }

        .navbar-brand{
            float: none;
        }

        .navbar{
            border-radius: 0;
        }

        .jumbotron{
            padding: 16px;
        }

        .jumbotron > p{
            font-size: 18px;
        }

        .content{
            margin: 40px;
        }

        .tip{
            width: 100%;
            height: 100px;
            margin-top: 40px;
            border: 2px dashed #a2a2a2;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            padding: 10px;
        }

        .grid{
            display: flex;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .grid-item{
            min-width: 320px;
            max-width: 240px;
            width: 240px;
            height: 160px;
            background-color: #00a000;
            margin: 10px;
        }

    </style>
</head>
<body>
<header>
    <nav class="upper-navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
        </ul>
    </nav>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header" style="display: flex;align-items: center">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span style="font-size:24px;cursor:pointer; padding-right: 16px;" onclick="openNav()">&#9776;</span>
                <a class="navbar-brand" href="#">WebSiteName</a>
                {{--<a class="navbar-brand" href="#">WebSiteName</a>--}}
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <div class="center-menu">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Page 1</a></li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">Page 3</a></li>
                        <li><a href="#">Page 4</a></li>
                        <form class="navbar-form navbar-left" action="/action_page.php">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<aside>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>
</aside>
<div id="main">
    <div class="content">
        <div class="jumbotron">
            <p>Note: Most user interface tasks can be performed in Edge Classic or the New Edge experience. For an overview, getting started topics, and release notes specific to the New Edge experience, see the docs.</p>
        </div>
        <h2>Unacores Documentation</h2>
        <div class="tip">
            <p><strong><a href="#">Troubleshoot Apigee errors</a></strong>: If you get an error using Apigee, check here first for troubleshooting info.</p>
        </div>
        <div class="grid">
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
        </div>
        <h2>Videos</h2>
        <div class="grid">
            <div class="grid-item"></div>
            <div class="grid-item"></div>
            <div class="grid-item"></div>
        </div>
    </div>
</div>
</body>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft= "0";
    }
</script>
</html>