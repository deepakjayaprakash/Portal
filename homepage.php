<!DOCTYPE html>
<html>
<head>
    <!--  App Title  -->
     <title>Portal</title>
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/animate.css"/>
<link rel="stylesheet" type="text/css" href="css/main.css"/>

 <script type="text/javascript" src="js/jquery.js"></script>
 
<script type="text/javascript" src="js/bootstrap.min.js"></script>    
<script type="text/javascript" src="js/wow.js"></script>    <script type="text/javascript" src="js/parallax.js"></script>
<script type="text/javascript" src="js/main.js"></script>

    <style type="text/css">

.hero{
    display: block;
    position: relative;
    width: 100%;
    height: 560px;
    background: url('img/gif1.gif') no-repeat fixed center center;
   opacity: 0.95;
    background-size: cover;
}


.hero .caption ul li:hover{color: #282828;   
     font-weight: bold;
    font-style: italic;
    transition:0.4s;
    background-color: lightgrey;
    font-size: 40px;
    line-height: 50px;
        text-align: center;
    
}
#banners{height:100px;padding:20px;text-align:center;color:plum;background-color: #41c17d;
     color:#484848;border:6px solid;}
     #banners:hover{height:100px;padding:20px;text-align:center;color:plum;
        background-color: Navajowhite;
        transition:1s;
     color:#484848;border:6px solid;}

#first:hover,#second:hover{background-color: NavajoWhite; transition: 0.8s;}


#con:hover #img,#con2:hover #img,#con3:hover #img{-webkit-transform:scale(1.3);
transform:scale(1.3);}

#con {overflow:hidden;width:250px;height:200px;}#img {
-webkit-transition: all 0.7s ease;transition: all 0.7s ease;}
#con2 {overflow:hidden;width:400px;height:400px;}#img {
-webkit-transition: all 0.7s ease;transition: all 0.7s ease;}

#con3 {overflow:hidden;width:1000px;height:350px;}#img {
-webkit-transition: all 0.7s ease;transition: all 0.7s ease;}


  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
</style>
</head>

    <body>


    <!--  Header Section  -->
    <header>
        <div class="container">
            <div class="heading pull-left animated infinite wow tada ">
                <h1>Portal</h1>
                <p style="font-style: italic;font-weight: bold;">Initiate. Involve. Inspire</p>
            </div>

            <nav class="pull-left">
                <ul class="list-unstyled">

                    <li class="animated wow bounceInLeft" data-wow-delay="0s"><a href="homepage.php">  Home</a></li>
                
                    <li class="animated wow bounceInLeft" data-wow-delay="0s"><a href="#about"> About</a></li>
                    <li>
                    <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle animated wow bounceInLeft"
                    data-wow-delay=".8s"
                    type="button" data-toggle="dropdown">NGO Banner
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="login_ngo.php">Login</a></li>
      <li><a href="register_ngo.php">Register</a></li>
      </ul>
      </div>
  
      </li>

       <li>
                    <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle animated wow bounceInLeft"
                    data-wow-delay="1s"
                    type="button" data-toggle="dropdown">Volunteer Banner
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="login_vol.php">Login</a></li>
      <li><a href="register_vol.php">Register</a></li>
      </ul>
      </div>
  
      </li>
            <li class="animated wow bounceInLeft" data-wow-delay="1.2s"><a href="#copy">Contact Us</a></li>
                </ul>
            </nav>
</div>

</header>

    <!--  Hero Section  -->
    <section class="hero" id="hero" >
        <div class="container">
            <div class="caption">
                <h1 class="animated wow zoomIn "data-wow-delay="1.3s" >
                It's not how much we give, but how much love<br> we put into giving<br>-Mother Teresa</h1>
                
                <ul class="animated wow bounceInDown "data-wow-delay="0.5s" style="list-style-type:none; text-align:center;
                ">
                    <li>Initiate</li>
                    <li>Involve</li>
                    <li>Inspire</li>
                </ul> 
                                

                

            </div>          
        </div>
    </section>
    <!--  End Hero Section  -->

     <!--  banner Section  -->
     <div id="banners"><h1>Banners</h1></div>

        <div id="first" style="float:left; margin: 3px;padding: 10px;border:3px solid NavajoWhite">
                 <h1  align="center">NGO Banner</h1>
                        <img src="img/gif2.gif" width="540px" height="480px" alt="" title=""> 
                       

                    </div>
 <div id="second" style="float:left; margin: 3px;padding: 10px;border:3px solid NavajoWhite">
                    
                     <h1 align="center">Volunteer Banner</h1>
                        <img src="img/gif3.gif" width="540px"  height="480px" alt="" title=""> 
                        
                       
</div>
                    


                                    
    <!--  About Section  -->
    <section class="about" id="about">
        <div class="container">
            
                
                    <div  style="padding: 5px">
                        <img src="img/volunteering.png" width="540px" align="left" height="480px" alt="" title="">
                    </div>
                
                <div class="animated wow bounceInLeft" data-wow-delay="0.5s"  >
                    <div class="features_list">
                        <h1 class="text-uppercase" >About</h1>
                       <p>There is absolutely no doubt in the fact that each individual wants to contribute his share to the society.  <br>But what's 
                       keeping us from doing it is the fact 
                       we are not able to connect with the right organisation and vice versa. 
                       Therefore the primary goal of this website is to establish the right link between the NGO's and volunteers.<br>The 
                       volunteers will be asked to fill in a resume and NGO's will go through these resumes and pick the right candidates. 
                       <br>The volunteers can browse through the list of organisations and their line of work and pick their interests.
                       <br> This ensures mutual benefits and enriches the enthusiasm from both sides.

                        </p>      
                </div>
            </div>
        </div>

        
    </section>
    <!--  End About Section  -->

<h1 style="background-color:NavajoWhite; padding:30px;
text-align:center;">Gallery</h1>

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
       <li data-target="#myCarousel" data-slide-to="5"></li>
       <li data-target="#myCarousel" data-slide-to="6"></li>
       <li data-target="#myCarousel" data-slide-to="7"></li>
          <li data-target="#myCarousel" data-slide-to="8"></li>
       <li data-target="#myCarousel" data-slide-to="9"></li>
      

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/car1.jpg"  >
      </div>

      <div class="item">
        <img src="img/car2.jpg" >
      </div>

      <div class="item">
        <img src="img/vol.jpg">
      </div>

      <div class="item">
        <img src="img/volunteering.png" >
      </div>
            <div class="item">
        <img src="img/nd.gif" >
      </div>
      <div class="item">
        <img src="img/bck1.jpg"  >
      </div>
      <div class="item">
        <img src="img/vol_back.jpg"  >
      </div>
      <div class="item">
        <img src="img/background.jpg"  >
      </div>
        <div class="item">
        <img src="img/pic.jpg"  >
      </div>
      <div class="item">
        <img src="img/sw1.jpg"  >
      </div>
    
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


 <div id="banners"style="height:100px;padding:20px;text-align:center;color:plum;background-color: NavajoWhite;color:#484848;border:6px solid;"><h1>Features</h1></div>


    <!--  App Features Section  -->
    
    <section class="app_features" id="app_features">
        <div class="container">

            <div class="row text-center">
                     
                
                <div class="col-sm-4 col-md-4 details animated wow bounceInLeft" data-wow-delay="0s">
                   <div id="con"> 
                   <div id="img"><img src="img/background.jpg" height="200px" width="250px"  alt="" title=""></div></div>
                    <h1 class="text-uppercase">Database</h1>

                    <p class="text-lowercase">We maintain two seperate databases. One for the organisations and one for the vounteers.<br> Both parties will be able to browse and select the appropriate people.</p>
                </div>
                

                
                <div class="col-sm-4 col-md-4 details animated wow bounceInLeft" data-wow-delay="0.5s">
                     <div id="con"> 
                   <div id="img"><img src="img/images1.jpg" id="pic" height="200px" width="250px"  alt="" title=""></div></div>
                    <h1 class="text-uppercase">Link</h1>
                    <p class="text-lowercase"> To establish the link between the two, we use a form which collects the necessary info from both and runs a query on their preferences.</p>
                
                </div>
                
                <div class="col-sm-4 col-md-4 details animated wow bounceInLeft" data-wow-delay="1s">
                   <div id="con"> 
                   <div id="img">  <img src="img/images.jpg" id="pic" height="200px" width="250px" alt="" title=""></div></div>
                    <h1 class="text-uppercase">Participants</h1>
                    <p class="text-lowercase">All are welcome to this intitative. There is no restriction on who can contribute.<br> And dont worry about where can you fit in, we'll take care of that for you.</p>
                </div>

                 <div class="col-sm-6 col-md-6 details animated wow bounceInLeft" data-wow-delay="0s">
                     <div id="con2"> 
                   <div id="img"><img src="img/nd.gif" height="400px" width="400px"  id="pic" alt="" title=""></div></div>
                    <h1 class="text-uppercase">NGO Banner</h1>
                    <p class="text-lowercase">This is for the organisations. They have to register and login into the banner. <br>
                    Then theu=y can access the information about the volunteers</p>
                </div>
                <div class="col-sm-6 col-md-6 details animated wow bounceInLeft" data-wow-delay="0.75s">
                     <div id="con2"> 
                   <div id="img"><img src="img/pic.jpg" id="pic" height="400px" width="400px"  alt="" title=""></div></div>
                    <h1 class="text-uppercase">Volunteer Banner</h1>
                    <p class="text-lowercase">This is for the volunteers. Once the voulunteer registers, he/she will 
                    be able to view the list of organisations.<br> They can add their qualifications and interests to make the suggestions better.</p>
                </div>
                
                
              
                <div class="col-sm-12 col-md-12 details animated wow bounceInLeft" data-wow-delay="0.5s">
                     <div id="con3"> 
                   <div id="img"><img src="img/background1.jpg" id="pic" height="350px" width="900px" alt="" title=""></div></div>
                    <h1 class="text-uppercase">Suggestions</h1>
                    <p class="text-lowercase">Once all the credentials are filled, the website suggests interested parties. <br>For example, the organisation will be 
                    showed the list of interested volunteers and vice versa</p>
                </div>
                </div>
          </div>

        </div>
    </section>
    <!--  And App Features Section  -->

    <!--  Email Subscription Section  -->
    <section class="sub_box">
        <div class="cta_text animated wow bounceInLeft">Contact Us!</div>
        <div class="cta_text">The web site has been created by the 
        great Mr. Deepak Jayaprakash. It has been developed as my final project.
         You can contact me at 
        <a href="mailto:deepakjpkodlekere@gmail.com">deepakjpkodlekere@gmail.com 
        </a>. We always respect the feedback from the user(as long it is positive and good LOL).</div>
    
    
    </section>
    


    <!--  Footer Section  -->
    <footer>
        <div id="copy"> created by Deepak Jayaprakash.     &copy; reserved</div>
    </footer>
    <!--  End Footer Section  -->


            
    </body>
</html>