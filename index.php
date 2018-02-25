<?php
session_start();
$url1="php/logout.php";
 if(isset($_SESSION['Email'])){
  header("Refresh: 1439; URL=$url1");
}

?>



<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999.com/xhtml">
  <html lang="en">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="description" content="Log in/Sign up">
      <meta name="keywords" content="Log in/Sign up">
      <meta name="author" content="Arpit Singh">
      <title>
        Grapevine
      </title>
      
      <!-- Bootstrap Core CSS -->
      <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      
      <!-- Fonts -->
      <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      
      <!-- Custom Theme CSS -->
      <link href="css/index.css" rel="stylesheet">
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-custom" style="background-color:white">
      
      <nav class="navbar navbar-custom navbar-fixed-top top-nav-collapse" role="navigation" id="nav" style="min-width:800px;">
        <div class="container">
          <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
              <i class="fa fa-bars">
              </i>
            </button>
            <a class="navbar-brand" href="#home">
              <img id="logo" src="../img/logo.jpg">
            </a>
          </div>
          
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
              <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
              
              <li class="page-scroll">
                <a href="#home">
                  Home
                </a>
              </li>
              <li class="page-scroll">
                <a href="#services">
                  Services
                </a>
              </li>
              <li class="page-scroll">
                <a href="#clients">
                  Clients
                </a>
              </li>
              <li class="page-scroll">
                <a href="#can" style="font-weight:900">
                  CAN
                </a>
              </li>
              <li class="page-scroll">
                <a href="#contact">
                  Contact
                </a>
              </li> 
              <li id="lasthead" 
              <?php 
              if(isset($_SESSION['Email'])){
                  $x=$_SESSION['Username'];
                  $name = $_SESSION['Name'];
                  $name = explode(' ', $name);
                  $y = $name[0];
                  if ($_SESSION['Type']==1){
                  echo "class='page-scroll'>
                <a href='clientaccount.php?id=$x'>
                 $y
                </a>
              </li>";}
              else {
                  echo "class='page-scroll'>
                <a href='ambassadoraccount.php?id=$x'>
                 $y
                </a>
              </li>";
              }
                }
               else {
                echo " class='dropdown'>
                <a href='' class='dropdown-toggle' data-toggle='dropdown'>
                  Sign in/up
                  <i class='fa fa-caret-down'>
                  </i>
                </a>
                <ul class='dropdown-menu'>
                  <li>
                    <a href='' id='clientsignin'>
                      <i class='fa fa-globe fa-fw'>
                      </i>
                      As Client
                    </a>
                  </li>
                  <li class='divider'>
                  </li>
                  <li>
                    <a href='' id='ambassadorsignin'>
                      <i class='fa fa-shopping-cart fa-fw'>
                      </i>
                      As ambassador
                    </a>
                  </li>
                  
                  
                </ul>
              </li>"; 
              }
              ?>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        
        <!-- 
<hr style="top:100px;">
-->
        <!-- /.container -->
      </nav>
      
      <section class="intro" id="home" style="overflow-x:hidden">
        <div class="intro-body" >
          
          <div id="carousel" class="carousel slide carousel-fade">
            <ol class="carousel-indicators">
              <li data-target="#carousel" data-slide-to="0" class="active">
              </li>
              <li data-target="#carousel" data-slide-to="1">
              </li>
              <li data-target="#carousel" data-slide-to="2">
              </li>
              <li data-target="#carousel" data-slide-to="3">
              </li>
            </ol>
            <div class="carousel-inner">
              <div class="active item">
                <img src="../img/front.jpg" width="100%" />
              </div>
              <div class="item">
                <img src="../img/front.jpg" width="100%"/>
              </div>
              <div class="item">
                <img src="../img/front.jpg" width="100%"/>
              </div>
              <div class="item">
                <img src="../img/front.jpg" width="100%"/>
              </div>
            </div>
            <a class="carousel-control left" href="#carousel" data-slide="prev">
              ‹
            </a>
            
            <a class="carousel-control right" href="#carousel" data-slide="next">
              ›
            </a>
          </div>
          
          
          
          <div class="row" >
            <div style="color:green">
            </div>
            
            <div class="col-md-10 col-md-offset-1">
              <!--code-->
              <span style="color:green;font-size:35px;font-weight:900;font-style:bold;">
                "WE ARE HERE TO MAKE DIFFERENCE IN MARKETING"
                <br>
              </span >
              <span style="color:#6bb247;font-style:italic;font-weight:400">
                there's a  lot more....scroll down
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section id="services" class="container content-section text-center" style="color:green;">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2" style="margin-top:-200px">
          <h2>
            WHAT WE DO
          </h2>
          <p style="font-size:18px;color:#5cd65c">
            There is a great satisfaction in knowing you've done your job well and served your clients' interests.It gives us particular satisfaction when our clients take the time to acknowledge their satifaction by providing Blue Fountain Media with their testimonials.
          </p>
          <br>
          <br>
          <br>
          <div class="imgspan" id="imgtext">
            <span>
              <div id="imgtext3">
                <img id="icon1" src="../img/marketinsights.png">
                <img id="icon2" src="../img/planclg.png">
                <img id="icon3" src="../img/onlinemarketing.png">
              </div>
            </span>
            <img id="strip" src="../img/strip.jpg">
            <span>
              <div id="imgtext2">
                <img id="icon4" src="../img/productpreview.png">
                <img id="icon5" src="../img/accesstocampus.png">
                <img id="icon6" src="../img/feedback.png">
              </div>
            </span>
          </div>
          <!--
<img src="../img/whatwedo.jpg" style="margin-left:-54px" usemap="#marketmap">
<map name="marketmap">
<area shape="rect" coords="107,11,252,53" onclick="f(0)">
<area shape="rect" coords="259,11,478,56" onclick="f(2)">
<area shape="rect" coords="586,11,760,55" onclick="f(4)">
<area shape="rect" coords="76,101,254,162" onclick="f(1)">
<area shape="rect" coords="373,108,543,155" onclick="f(3)">
<area shape="rect" coords="670,109,792,154" onclick="f(5)">
</map>
-->
        </div>
      </div>
      <div class="container">
        <div style="color:#00ff00;">
          <p id="qwe" style="font-size:17px;display:block">
            move mouse over it and ageshsergeshseh
          </p>
          <p id="pa0" style="font-size:17px;display:none">
            <br>
            <span style="color:green;font-size:18px;">
              SURVEYS AND IDENTIFICATION OF FOCUS GROUPS
              <br>
              MARKET TRENDS
            </span>
            <br>
            <br>
            Using our extensive on-ground presence, we can access up to date information on what's hot and what's not. You can access relevant information from our archives or have us collect specific data that you need.
          </p>
          <p id="pa1" style="font-size:17px;display:none">
            <vr>
              <br>
              We can collect opinions on your upcoming products from your target audience which will help you to better gauge the market.
            </p>
            <p id="pa2" style="font-size:17px;display:none">
              <br>
              <span style="color:green;font-size:18px;">
                EXHAUSTIVE DATABASE OF MARKETING AVENUES IN COLLEGES
              </span>
              <br>
              <br>
              We can provide you with information regarding all possible marketing avenues in colleges including intra-college events, inter-college festivals and much more!
          </p>
          <p id="pa3" style="font-size:17px;display:none">
            <br>
            <span style="color:green;font-size:18px;">
              SETTING UP A CAMPUS AMBASSADOR NETWORK
              <br>
              PEER TO PEER MARKETING
              <br>
              CAMPUS BRANDING
              <br>
              COLLEGE EVENTS AND FESTIVALS
            </span>
            <br>
            <br>
            We offer ready made infrastructure to create a brand ambassador network and out campaigns towards brand activation. Our presence in x campuses across y cities enables superior reach.
            Our carefully selected and trained Campus Ambassador Network can be used to generate buzz about your product among young people in colleges. 
            The Campus Ambassador Network can also be used to conduct innovative on-ground marketing exercises inside campuses or during festivals, which help you to connect with the youth.
          </p>
          <p id="pa4" style="font-size:17px;display:none">
            <br>
            <span style="color:green;font-size:18px;">
              ROLL OUT SOCIAL MEDIA CAMPAIGNS
            </span>
            <br>
            <br>
            We can also help you publicise your social media campaigns. Our well-established network of influential Campus Ambassadors allows you to have penetrating reach into college campuses.
          </p>
          <p id="pa5" style="font-size:17px;display:none">
            <br>
            <span style="color:green;font-size:18px;">
              FEEDBACK ON PRODUCT
              <br>
              FEEDBACK ON MARKETING CAMPAIGNS
            </span>
            <br>
            <br>
            We can use our on-ground presence to provide you with feedback and data regarding your marketing campaigns or general feedback on certain products. This keeps you in touch with the pulse of the youth.
          </p>
        </div>
      </div>
    </section>
    
    <section id="clients" class="container content-section text-center" style="color:green;padding-top:-100px">
      <div class="download-section" style="background-color:#335833;margin-top:-200px">
        <h2 style="color:orange;margin-top:-80px;">
          TESTIMONIALS
        </h2>
        <br>
        <div class="well-none">
          <div id="myCarousel" class="carousel slide" >
            <div class="carousel-inner">
              <div class="item active">
                <div class="row">
                  <div class="col-md-6 col-xs-6"  style="padding-left:6.5%">
                    <img src="../img/clienttestimonial.jpg" alt="Image" class="img-responsive">
                </div>
                <div class="col-md-6 col-xs-6"  style="padding-right:2.5%">
                  <img src="../img/clienttestimonial.jpg" alt="Image" class="img-responsive">
                </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-md-6 col-xs-6"  style="padding-left:6.5%">
                  <img src="../img/clienttestimonial.jpg" alt="Image" class="img-responsive">
                </div>
                <div class="col-md-6 col-xs-6"  style="padding-right:2.5%">
                  <img src="../img/clienttestimonial.jpg" alt="Image" class="img-responsive">
                </div>
              </div>
            </div>
            <div class="item">
              <div class="row">
                <div class="col-md-6 col-xs-6"  style="padding-left:6.5%">
                  <img src="../img/clienttestimonial.jpg" alt="Image" class="img-responsive">
                </div>
                <div class="col-md-6 col-xs-6"  style="padding-right:2.5%">
                  <img src="../img/clienttestimonial.jpg" alt="Image" class="img-responsive">
                </div>
              </div>
            </div>
            
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <i class="fa fa-chevron-left fa-4">
            </i>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i class="fa fa-chevron-right fa-4">
            </i>
          </a>
        </div>
        </div>
      </div>
      <div class="col-md-10 col-lg-offset-1" style="color:green">
        <h2>
          <br>
          OUR CLIENTS
        </h2>
        <img style="align:left" src="../img/ourclients.jpg" />
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
      </div>
    </section>
    
    <section id="can" class="container content-section text-center" style="background-color:green;width:100%">
      <div class="row" style="margin-top:-200px">
        <h2>
          <br>
          CAMPUS AMBASSADOR NETWORK
          <br>
          ALL OVER THE COUNTRY
        </h2>
        <span class="pull-left" style="padding-left:6%">
          <img src="../img/indiamap.png" alt="Image" class="img-responsive"  usemap="#indiamap">
          <map name="indiamap">
            <area shape="rect" coords="141,136,173,164" onmouseover ="g(0)">
          <area shape="rect" coords="180,150,212,179" onmouseover ="g(1)">
          <area shape="rect" coords="240,178,278,208" onmouseover ="g(2)">
          <area shape="rect" coords="312,193,350,219" onmouseover ="g(3)">
          <area shape="rect" coords="304,227,340,253" onmouseover ="g(4)">
          <area shape="rect" coords="244,314,285,343" onmouseover ="g(5)">
          <area shape="rect" coords="201,243,238,279" onmouseover ="g(6)">
          <area shape="rect" coords="132,181,174,205" onmouseover ="g(7)">
          <area shape="rect" coords="96,179,131,212" onmouseover ="g(8)">
          <area shape="rect" coords="106,279,152,320" onmouseover ="g(9)">
          <area shape="rect" coords="133,366,166,395" onmouseover ="g(10)">
          <area shape="rect" coords="174,357,211,390" onmouseover ="g(11)">
          <area shape="rect" coords="219,380,253,407" onmouseover ="g(12)">
          <area shape="rect" coords="193,443,237,480" onmouseover ="g(13)">
        </map>
        </span>
        <span id="squadtext" class-"pull-right well" style="font-family:lucida sans unicode">
          
          <h3 style="font-style:italic;color:orange">
            <br>
            <br>
            THE STANDOUT SQUAD
          </h3>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          <br>
          <br>
          <br>
          <img id="squadimage0" class="squadimage" src="../img/ambastestimonial.jpg" style="display:block">
          <img id="squadimage1" class="squadimage" src="../img/ambastestimonial.jpg" style="display:none">
          <img id="squadimage2" class="squadimage" src="../img/ambastestimonial.jpg" style="display:none">
          <img id="squadimage3" class="squadimage" src="../img/ambastestimonial.jpg" style="display:none">
          <img id="squadimage4" class="squadimage" src="../img/ambastestimonial.jpg" style="display:none">
          <img id="squadimage5" class="squadimage" src="../img/ambastestimonial.jpg" style="display:none">
          <img id="squadimage6" class="squadimage" src="../img/ambastestimonial.jpg" style="display:none">
          <img id="squadimage7" class="squadimage" src="../img/ambastestimonial.jpg" style="display:none">
          <img id="squadimage8" class="squadimage" src="../img/ambastestimonial.jpg" style="display:none">
          <img id="squadimage9" class="squadimage" src="../img/ambastestimonial.jpg" style="display:none">
          <img id="squadimage10" class="squadimage" src="../img/ambastestimonial.jpg" style="display:none">
          <img id="squadimage11" class="squadimage" src="../img/ambastestimonial.jpg" style="display:none">
          <img id="squadimage12" class="squadimage" src="../img/ambastestimonial.jpg" style="display:none">
          <img id="squadimage13" class="squadimage" src="../img/ambastestimonial.jpg" style="display:none">
          
        </span>
      </div>
    </div>
    <br>
    <br>
    <br>
  </section>
  
  <section id="contact" class="container content-section text-center" style="color:green">
    <div class="col-md-10 col-lg-offset-1" style="margin-top:-200px">
      <h2>
        WHO ARE WE?
      </h2>
      <span  class="pull-left" style="background-color:white;text-align:left;border:0;max-width:20%;font-family:lucida sans unicode">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
        
      </span>
      <span class="pull-right">
        <table border-space="1px">
          
          <tr>
            <td>
              <img src="../img/user.jpg" width="175px" height="200px">
            </td>
            <td>
              <img src="../img/user.jpg" width="175px" height="200px">
            </td>
            <td>
              <img src="../img/user.jpg" width="175px" height="200px">
            </td>
            <td>
              <img src="../img/user.jpg" width="175px" height="200px">
            </td>
          </tr>
          
        </table>
      </span>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      
      
    </div>
  </section>  

  <div style="width:100%;background-color:#002400;align:center;color:white;height:30%; font-family:Arial">
    <span>
      <br>
    </span>
    <span class="pull-left" style="padding-left:15%">
      <span style="font-weight:700">
        ABOUT US
        <br>
      </span>
      <span style="color:#33cc33;">
        The Grapevine Co.
        <br>
      </span>
      <span style="color:#33cc33;">
        Powai,
        <br>
      </span>
      <span style="color:#33cc33;">
        Mumbai-400076.
        <br>
      </span>
    </span>
    <span class="pull-right" style="padding-right:30%">
      <span style="font-weight:700;color:white">
        Email:&nbsp
      </span>
      <span style="color:#33cc33;display:inline-block">aadadf@dfdzfzf.com
      </span>
      <span>
        <br>
      </span>
      <span style="font-weight:700;color:white">
        Phone:&nbsp
      </span>
      <span style="color:#33cc33;">
        9999999999
      </span>
      
      <ul class="list-inline banner-social-buttons">
        <br>
        
        <li>
          <a href="" target="_blank" class="btn btn-default btn-sm">
            <i class="fa fa-facebook fa-fw">
            </i>
          </a>
        </li>
        <li>
          <a href="" target="_blank" class="btn btn-default btn-sm">
            <i class="fa fa-twitter fa-fw">
            </i>
            
          </a>
        </li>
        <li>
          <a href="" target="_blank" class="btn btn-default btn-sm">
            <i class="fa fa-google-plus fa-fw">
            </i>
          </a>
        </li>
      </ul>
    </span>
    
  </div>
  
  
  <!-- Button trigger modal -->
  
  <div class="container" id="logform">
    <button id="mybtn" style="display:none;" 
    class="btn btn-primary btn-lg" href="#signup" data-toggle="modal" data-target="#myModal">
      Sign In/Register
    </button>
    
  </div>
  
  <!-- Modal -->
  
  <div class="modal fade bs-modal-sm" id="myModal"  tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" >
      
      <p style="text-align:center;margin: 0 0 0px;">
        As a client 
      </p>
      <div class="modal-content">
        <br>
        <div class="bs-example bs-example-tabs">
          <ul id="myTab" class="nav nav-tabs">
            <li class="active">
              <a href="#signin" data-toggle="tab">
                Sign In
              </a>
            </li>
            <li class="">
              <a href="#signup" data-toggle="tab">
                Register
              </a>
            </li>
          </ul>
        </div>
        
        <div class="modal-body ">
          <div id="myTabContent" class="tab-content">
            
            
            <div class="tab-pane fade active in" id="signin">
              <form class="form-horizontal" id="formsignin">
                <fieldset>
                  <!-- Sign In Form -->
                  <!-- Text input-->
                  <div class="control-group">
                    <br>
                    <div class="controls">
                      <input required="" id="useridin" name="useridin" type="email" class="form-control" placeholder="Email" class="input-medium" required="">
                    </div>
                  </div>
                  
                  <!-- Password input-->
                  <div class="control-group">
                    <br>
                    <div class="controls">
                      <input required="" id="passwordinputin" name="passwordinputin" class="form-control" type="password" placeholder="Password" class="input-medium">
                    </div>
                  </div>
                  
                  
                  
                  <!-- Button -->
                  <div class="control-group">
                    <br>
                    <div class="controls">
                      <button id="signin" name="signin" class="btn btn-success">
                        Sign In
                      </button>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
            
            <div class="tab-pane fade" id="signup">
              <form class="form-horizontal" id="formsignup">
                <fieldset>
                  
                  <!-- Sign Up Form -->
                  
                  <!-- Text input-->
                  
                  
                  
                  <!-- Text input-->
                  
                  <div class="control-group">
                    <br>
                    <div class="controls">
                      <input id="useridup" name="useridup" class="form-control" type="text" placeholder="Full name" class="input-large" required="">
                    </div>
                  </div>
                  
                  <div class="control-group">
                    <br>
                    <div class="controls">
                      <input id="companyid" name="companyid" class="form-control" type="text" placeholder="Company Name(optional)" class="input-large" !required>
                    </div>
                  </div>
                  
                  <div class="control-group">
                    <br>
                    <div class="controls">
                      <input id="Email" name="Email" class="form-control" type="email" placeholder="Email" class="input-large" required="">
                    </div>
                  </div>
                  <!-- Password input-->
                  
                  <div class="control-group">
                    <br>
                    <div class="controls">
                      <input id="passwordinputup" name="passwordinputup" class="form-control" type="password" placeholder="Password(at least 6 digits)" class="input-large" required="">
                      
                    </div>
                  </div>
                  
                  
                  
                  <!-- Multiple Radios (inline) -->
                  
                  
                  
                  <!-- Button -->
                  
                  <div class="control-group">
                    <label class="control-label" for="confirmsignup">
                    </label>
                    <div class="controls">
                      <button id="confirmsignup" name="confirmsignup" class="btn btn-success">
                        Sign Up
                      </button>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
        
        <div class="modal-footer">
          <center>
            <button type="button" class="btn btn-default" data-dismiss="modal">
              Close
            </button>
          </center>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container" id="logform2">
    <button id="mybtn2" style="display:none;" 
    class="btn btn-primary btn-lg" href="#signup2" data-toggle="modal" data-target="#myModal2">
      Sign In/Register
    </button>
    
  </div>
  
  <!-- Modal -->
  
  <div class="modal fade bs-modal-sm" id="myModal2"  tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" >
      
      <p style="text-align:center;margin: 0 0 0px;">
        As an ambassador 
      </p>
      <div class="modal-content">
        <br>
        <div class="bs-example bs-example-tabs">
          <ul id="myTab2" class="nav nav-tabs">
            <li class="active">
              <a href="#signin2" data-toggle="tab">
                Sign In
              </a>
            </li>
            <li class="">
              <a href="#signup2" data-toggle="tab">
                Register
              </a>
            </li>
          </ul>
        </div>
        
        <div class="modal-body ">
          <div id="myTabContent2" class="tab-content">
            
            
            <div class="tab-pane fade active in" id="signin2">
              <form class="form-horizontal" id="formsignin2">
                <fieldset>
                  <!-- Sign In Form -->
                  <!-- Text input-->
                  <div class="control-group">
                    <br>
                    <div class="controls">
                      <input required="" id="useridin2" name="useridin2" type="email" class="form-control" placeholder="Email" class="input-medium" required="">
                    </div>
                  </div>
                  
                  <!-- Password input-->
                  <div class="control-group">
                    <br>
                    <div class="controls">
                      <input required="" id="passwordinputin2" name="passwordinputin2" class="form-control" type="password" placeholder="Password" class="input-medium">
                    </div>
                  </div>
                  
                  
                  
                  <!-- Button -->
                  <div class="control-group">
                    <br>
                    <div class="controls">
                      <button id="signin2" name="signin2" class="btn btn-success">
                        Sign In
                      </button>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
            
            <div class="tab-pane fade" id="signup2">
              <form class="form-horizontal" id="formsignup2">
                <fieldset>
                  
                  <!-- Sign Up Form -->
                  
                  <!-- Text input-->
                  
                  
                  
                  <!-- Text input-->
                  
                  <div class="control-group">
                    <br>
                    <div class="controls">
                      <input id="useridup2" name="useridup2" class="form-control" type="text" placeholder="Full name" class="input-large" required="">
                    </div>
                  </div>
                  
                  <div class="control-group">
                    <br>
                    <div class="controls">
                      <input id="companyid2" name="companyid2" class="form-control" type="text" placeholder="Company Name(optional)" class="input-large" !required>
                    </div>
                  </div>
                  
                  <div class="control-group">
                    <br>
                    <div class="controls">
                      <input id="Email2" name="Email2" class="form-control" type="email" placeholder="Email" class="input-large" required="">
                    </div>
                  </div>
                  <!-- Password input-->
                  
                  <div class="control-group">
                    <br>
                    <div class="controls">
                      <input id="passwordinputup2" name="passwordinputup2" class="form-control" type="password" placeholder="Password(at least 6 digits)" class="input-large" required="">
                      
                    </div>
                  </div>
                  
                  
                  
                  <!-- Multiple Radios (inline) -->
                  
                  
                  
                  <!-- Button -->
                  
                  <div class="control-group">
                    <label class="control-label" for="confirmsignup2">
                    </label>
                    <div class="controls">
                      <button id="confirmsignup2" name="confirmsignup2" class="btn btn-success">
                        Sign Up
                      </button>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
        
        <div class="modal-footer">
          <center>
            <button type="button" class="btn btn-default" data-dismiss="modal">
              Close
            </button>
          </center>
        </div>
      </div>
    </div>
  </div>
  
  
  
  
</div>
</div>


</body>
<a href="#home" class="scrollup">
  <img src="../img/icon_top.png">
</a>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-latest.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/index.js"></script>

</body>


</html>
