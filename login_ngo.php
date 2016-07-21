
<!DOCTYPE html>
<html>
<head>
        <title>Portal</title>
    
  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="css/animate.css"/>
  <link rel="stylesheet" type="text/css" href="css/main.css"/>
 <script type="text/javascript" src="js/jquery.js"></script>  <script type="text/javascript" src="js/wow.js"></script>
 <script type="text/javascript" src="js/parallax.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>   
  <style type="text/css">

.hero{
  display: block;
  position: relative;
  width: 100%;
  height: 600px;
  background: url('img/gif2.gif') no-repeat fixed center center;
  opacity: 0.9;
  background-size: cover;
}
h2:hover{transition:0.3s;font-size: 29pt;}
</style>
</head>

    <body>


    <!--  Header Section  -->
    <header>
          <div class="container">
            <div class="heading pull-left infinite animated wow wobble">
                <h1>Portal</h1>
                 <p style="font-style: italic;font-weight: bold;">
                 Initiate. Involve. Inspire</p>
            </div>

             <nav class="pull-left">
                <ul class="list-unstyled">

                    <li class="animated wow bounceInLeft" data-wow-delay="0s"><a href="homepage.php">  Home</a></li>
                

                   
                    
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
                    
                </ul>
            </nav>
</div>
</header>

        <h2 class=" animated wow rubberBand" data-wow-delay=".8s" 
        style="text-align:center; color:lightgrey;">Organisation Login Page</h2>

    <!--  Hero Section  -->
    <section class="hero" id="hero" >
        <div class="container">
            <div class="caption">
               <h1 class="animated wow zoomIn" data-wow-delay=".8s">
                No act of kindness, however small, is ever wasted. <br>– Aesop</h1>
                 <div align="center">
<br><br>
                <h2 class="text-uppercase  animated wow swing" data-wow-delay=".8s" >
                Haven't Registered yet?</h2>
                <a href="register_ngo.php"> click here to register</a>
                          

              <br>
    
    
<br>
         <div style="text-align:center; 
         border: 4px solid; font-style:bold;color:#282828;
        font-size: 14pt; letter-spacing: 3px;padding: 2px;line-height: 30px;">

        <form action="checklogin_ngo.php" method="POST">
            <h2>LOGIN</h2>
           Name: <input  type="text" name="username" required="required" /> <br/><br/>
           <br> Password: <input type="password" name="password" required="required" /> <br/>
           <div align="center"><input type="submit"  value="Let me in"/></div>
        

        </form>
       
        </div>
       
        
        </div>


            </div>          
        </div>
    </section>
    <!--  End Hero Section  -->

        



    <!--  Footer Section  -->
    <footer>
        <div id="copy"> created by Deepak Jayaprakash.     &copy; reserved</div>
    </footer>
    <!--  End Footer Section  -->




            
    </body>
</html>


