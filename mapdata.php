<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
<title>Hostify</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.min.css">
<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
<link rel="stylesheet" type="text/css" href="css/slick.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>

<body>

<div id="header-holder" class="inner-header serverspage-header">
    <nav id="nav" class="navbar navbar-default navbar-full">
        <div class="container-fluid">
            <div class="container container-nav">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <button aria-expanded="false" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="logo-holder" href="index.php">
                                <div class="logo" style="width:62px;height:18px"></div>
                            </a>
                        </div>
                        <div style="height: 1px;" role="main" aria-expanded="false" class="navbar-collapse collapse" id="bs">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="index.php">Home</a></li>
                                <li class="dropdown unity-menu">
                                    <a href="#pricing">Hosting <i class="fas fa-caret-down"></i></a>
                                    <ul class="dropdown-menu dropdown-unity">
                                        <li>
                                            <a class="unity-link" href="webhosting.php">
                                                <div class="unity-box">
                                                    <div class="unity-icon">
                                                        <img src="images/service-icon1.svg" alt="">
                                                    </div>
                                                    <div class="unity-title">
                                                        Web Hosting
                                                    </div>
                                                    <div class="unity-details">
                                                        Flexible shared-hosting
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="unity-link" href="resellershosting.php">
                                                <div class="unity-box">
                                                    <div class="unity-icon">
                                                        <img src="images/service-icon2.svg" alt="">
                                                    </div>
                                                    <div class="unity-title">
                                                        Resellers
                                                    </div>
                                                    <div class="unity-details">
                                                        Money on the side!
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="unity-link" href="cloudhosting.php">
                                                <div class="unity-box">
                                                    <div class="unity-icon">
                                                        <img src="images/service-icon3.svg" alt="">
                                                    </div>
                                                    <div class="unity-title">
                                                        Cloud Hosting
                                                    </div>
                                                    <div class="unity-details">
                                                        Fast as rocket
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="unity-link" href="vpshosting.php">
                                                <div class="unity-box">
                                                    <div class="unity-icon">
                                                        <img src="images/service-icon4.svg" alt="">
                                                    </div>
                                                    <div class="unity-title">
                                                        VPS Servers
                                                    </div>
                                                    <div class="unity-details">
                                                        Scalable hosting
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Pages <i class="fas fa-caret-down"></i></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="about.php">Company</a></li>
                                      <li><a href="blog.php">Blog</a></li>
                                      <li><a href="domains.php">Domain List</a></li>
                                      <li><a href="ourservers.php">Servers</a></li>
                                      <li><a href="mapdata.php">Map Generator</a></li>
                                      <li><a href="horizontalpricing.php">Horizontal Pricing</a></li>
                                    </ul>
                                </li>
                                <li><a href="../../whmcs/index.php?systpl=hostify">WHMCS</a></li>
                                <li><a href="contact.php">Contact us</a></li>
                                <li><a class="login-button" href="signin.php">Login</a></li>
                                <li class="support-button-holder support-dropdown">
                                    <a class="support-button" href="#">Support</a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="fas fa-phone"></i>Toll-Free  08-197-435-01</a></li>
                                      <li><a href="#"><i class="fas fa-comments"></i>Start a Live Chat</a></li>
                                      <li><a href="#"><i class="fas fa-ticket-alt"></i>Open a ticket</a></li>
                                      <li><a href="#"><i class="fas fa-book"></i>Knowledge base</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div id="page-head" class="container-fluid inner-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="page-title">Generate the servers map data</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="serverslocation" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row-title grey-color">Map Generator</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <style>
                    #location-name{
                        padding: 10px 20px;
                        border-radius: 10px;
                        border: 1px solid #aedff9;
                        outline: none;
                        font-size: 16px;
                        font-weight: 700;
                        color: #6f7690;
                    }
                    #location-name:hover,#location-name:focus{
                        border: 1px solid #99d2f0;
                    }
                    #btn-add{
                        margin-left: 10px;
                        padding: 10px 20px;
                        border-radius: 10px;
                        border: 0;
                        background-color: #766df7;
                        font-size: 16px;
                        font-weight: 700;
                        color: #ffffff;
                        outline: none;
                    }
                    #btn-add:hover{
                        background-color: #6c63ea;
                    }
                    .server-marker {
                        position: absolute;
                        cursor: move;
                        -webkit-transition: all 0.3s ease;
                        transition: all 0.3s ease;
                        -webkit-transform-origin: center center;
                        -moz-transform-origin: center center;
                        -ms-transform-origin: center center;
                        transform-origin: center center;
                        -webkit-transform: scale(1);
                        -moz-transform: scale(1);
                        -ms-transform: scale(1);
                        transform: scale(1);
                    }
                    .server-marker.dragged {
                        -webkit-transition: all 0.3s cubic-bezier(0.34, 1.61, 0.7, 1);
                        transition: all 0.3s cubic-bezier(0.34, 1.61, 0.7, 1);
                        -webkit-transform: scale(1.2);
                        -moz-transform: scale(1.2);
                        -ms-transform: scale(1.2);
                        transform: scale(1.2);
                    }
                    .server-marker .btn-delete{
                        position: absolute;
                        font-size: 18px;
                        left: -10px;
                        top: -2px;
                        opacity: 0;
                        pointer-events: none;
                        -webkit-transition: all 0.3s cubic-bezier(0.34, 1.61, 0.7, 1);
                        transition: all 0.3s cubic-bezier(0.34, 1.61, 0.7, 1);
                    }
                    .server-marker.selected:before{
                        position: absolute;
                        content: "";
                        width: 120%;
                        height: 30px;
                        left: 50%;
                        margin-left: -60%;
                        top: 50%;
                        margin-top: -15px;
                        border: 1px solid #bbbaba;
                        border-radius: 10px;
                        padding: 5px;
                        -webkit-transition: all 0.3s ease;
                        transition: all 0.3s ease;
                    }
                    .server-marker.selected .btn-delete{
                        cursor: pointer;
                        left: -30px;
                        opacity: 1;
                        pointer-events: all;
                    }
                    #gencode{
                        display: block;
                        padding: 9.5px;
                        margin: 0 0 10px;
                        font-size: 14px;
                        line-height: 2;
                        color: #333;
                        word-break: break-all;
                        word-wrap: break-word;
                        background-color: #f5f5f5;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        font-family: Menlo,Monaco,Consolas,"Courier New",monospace;
                        text-align: left;
                    }
                    h4.small-title{
                        text-align: left;
                        font-size: 17px;
                        color: #3f3d59;
                        font-weight: 600;
                    }
                    ul.inst-list{
                        text-align: left;
                        margin-left: 0;
                        padding-left: 20px;
                        margin-bottom: 30px;
                    }
                    ul.inst-list li{
                        font-size: 16px;
                        font-size: 16px;
                        color: #7a7896;
                        font-weight: 300;
                    }
                </style>
                <input id="location-name" type="text" /><button id="btn-add">Add</button>
            </div>
            <div class="col-md-12">
                <div class="serversmap-holder">
                    <div id="serversmap">
                        <img src="images/worldmap.png" alt="">
                        <div class="servers-location-holder"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4 class="small-title">Generated Code:</h4>
                <div id="gencode">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h4 class="small-title">Instructions:</h4>
                <ul class="inst-list">
                    <li>Type the country or city name that you want, then click on Add button.</li>
                    <li>Drag the added country to any location you want.</li>
                    <li>Double click the country name to change the text side.</li>
                    <li>To delete one of the added items, click on it and then click on the trash icon.</li>
                    <li>Copy the generated code and replace it with one in the "main.js" file.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="footer" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="address-holder">
                    <div class="phone"><i class="fas fa-phone"></i> 00 285 900 38502</div>
                    <div class="email"><i class="fas fa-envelope"></i> hello@hostify.com</div>
                    <div class="address">
                        <i class="fas fa-map-marker"></i>
                        <div>City Avenue, Office 64,<br>
                            Floor 6,  Milbourne,<br>
                            Australia.</div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-2">
                <div class="footer-menu-holder">
                    <h4>Company</h4>
                    <ul class="footer-menu">
                        <li><a href="about.php">About us</a></li>
                        <li><a href="blog.php">News</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-3">
                <div class="footer-menu-holder">
                    <h4>Services</h4>
                    <ul class="footer-menu">
                        <li><a href="webhosting.php">Web Hosting</a></li>
                        <li><a href="cloudhosting.php">Cloud Hosting</a></li>
                        <li><a href="vpshosting.php">VPS Servers</a></li>
                        <li><a href="domains.php">Domain Names</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
                <div class="footer-menu-holder">
                    <h4>Others</h4>
                    <ul class="footer-menu">
                        <li><a href="#">Transfer domains</a></li>
                        <li><a href="portal.php">Customer Portal</a></li>
                        <li><a href="#">Support Portal</a></li>
                        <li><a href="#">Video Tutorials</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-1 col-md-1">
                <div class="social-menu-holder">
                    <ul class="social-menu">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" ></script>
<script>
    $(window).on('load', function() {
        var serversLocationHolder = $('.servers-location-holder','#serversmap');
        var gencode = $('#gencode');
        $('#btn-add').on('click',function(){
             if($('#location-name').val() != ""){
                 serversLocationHolder.append('<div class="server-marker" data-dir="r"><span class="btn-delete"><i class="far fa-trash-alt" aria-hidden="true"></i></span><span class="left-text"></span><span class="marker-icon"></span><span class="right-text">'+$('#location-name').val()+'</span></div>');
                 $('#location-name').val("");
                 gencode.php("var locationsList = "+JSON.stringify(getGencode())+";");
                 $(".server-marker",serversLocationHolder).draggable({
                    start: function(e, ui) {
                        $(".server-marker",serversLocationHolder).removeClass("selected");
                        $(this).addClass("selected");
                        $(this).addClass("dragged");
                    },
                    stop: function(e, ui) {
                        $(this).removeClass("dragged");
                        gencode.php("var locationsList = "+JSON.stringify(getGencode())+";");
                    },
                    drag: function(e, ui) {
                        gencode.php("var locationsList = "+JSON.stringify(getGencode())+";");
                    }
                 });
             }
            $(".server-marker",serversLocationHolder).unbind( "click" );
            $(".server-marker",serversLocationHolder).on('click',function(e){
                $(".server-marker",serversLocationHolder).removeClass("selected");
                $(this).addClass("selected");
            });
            $(".server-marker",serversLocationHolder).unbind( "dblclick" );
            $(".server-marker",serversLocationHolder).on('dblclick',function(e){
                 var direction = $(this).attr("data-dir");
                 if(direction=="r"){
                     $(".left-text",this).php($(".right-text",this).php());
                     $(".right-text",this).php("");
                     $(this).attr("data-dir","l");
                 }else if(direction=="l"){
                     $(".right-text",this).php($(".left-text",this).php());
                     $(".left-text",this).php("");
                     $(this).attr("data-dir","r");
                 }
                 gencode.php("var locationsList = "+JSON.stringify(getGencode())+";");
            });
            $(".server-marker .btn-delete",serversLocationHolder).unbind( "click" );
            $(".server-marker .btn-delete",serversLocationHolder).on('click',function(e){
                $(".server-marker",serversLocationHolder).remove(".selected");
                gencode.php("var locationsList = "+JSON.stringify(getGencode())+";");
            });
        });

        function getGencode(){
            var locations = [];
            for(var i=0;i<=$(".server-marker",serversLocationHolder).length-1;i++){
                var sMarker = $(".server-marker:nth-child("+Number(i+1)+")",serversLocationHolder);
                var sMarkerDir = sMarker.attr("data-dir");
                var sMarkerText = "";
                if(sMarkerDir=="r"){
                    sMarkerText = $(".right-text",sMarker).php();
                }else if(sMarkerDir=="l"){
                    sMarkerText = $(".left-text",sMarker).php();
                }
                locations.push([sMarkerText,parseInt(sMarker.css("top"), 10),parseInt(sMarker.css("left"), 10),sMarker.attr("data-dir")]);
            }
            return locations;
        }
    });
</script>

</body>
</html>
