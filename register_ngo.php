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

<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>

  <style type="text/css">
  #panel, #flip {
    padding: 20px;
    text-align:center; 
        background-color:#484848;  font-style:bold;
        line-height: 40px;
        font-size: 14pt; letter-spacing: 6px;
  color: Coral;
   
    border: solid 4px NavajoWhite;
}

#panel {
    padding: 60px;
    display: none;
}

.hero{
  display: block;
  position: relative;
  width: 100%;
  height: 560px;
  background: url('img/background.jpg') no-repeat fixed center center;
  background-size: cover;
}
h2:hover{transition:0.3s;font-size: 29pt;}
</style>
</head>

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

    <h2 class="animated wow rubberBand" data-wow-delay=".8s" 
        style="text-align:center; 
        color:lightgrey;">Organisation Registration Page</h2>

    <!--  Hero Section  -->
    <section class="hero" id="hero" >
        <div class="container">
            <div class="caption">
            <h1 class="animated wow zoomIn" data-wow-delay=".8s" >
                No act of kindness, however small, is ever wasted. <br>– Aesop</h1>
<div class="animated wow fadeInDown" data-wow-delay="1.2s" 
style="font-size:15pt; font-style:italic;font-weight:bold;" ><p>You're a few steps from becoming a part of the organisation 
community!!!!</p>
<br><br>
<p>Please fill all the credentials required to improve our 
candidate suggestions.</p>
</div>
</div>
</div>

</section>

<div class="container-fluid"  style="margin:0px;
font-size:25px;background-color:lightgrey;
    padding:50px;color:black;">

        
        
 
 
<div id="flip" >Enter Details<br>click to start entering!!!</div>
<div id="panel">
  
    <form role="form" action="register_ngo.php" method="post">
  <li>    <div class="form-group"> Name of the organisation: 
  <input type="text" class="form-control" 
  name="username" required="required"/></div></li> <br/>
  <li>   <div class="form-group">  Password: <input type="password" name="password" 
  class="form-control" required="required" /> </div></li><br/>
      
   <li>   <div class="form-group">Location: <input type="text" 
   name="location" class="form-control" 
   required="required"/> </div></li><br/>
    <li>    <div class="form-group"> Contact No: 
  <input type="text" class="form-control" 
  name="contact" required="required"/></div></li> <br/>

   <li>  Description:</li><br>
        <div class="form-group"><textarea name="description"
        class="form-control" rows="6" cols="60" >Describe the 
        oganisation briefly in few lines.</textarea> </div><br/>
   <li>     Skills required/Interests:</li><br>
   <div class="form-group">
       <input type="checkbox" name="Technical">Technical<br>
       <input type="checkbox" name="Music">Music<br>
       <input type="checkbox" name="Literature">Literature<br>
       <input type="checkbox" name="Art">Art<br>
       <input type="checkbox" name="Sports">Sports<br>
       <input type="checkbox" name="Computer">Computer<br>
       <input type="checkbox" name="Oratory">Oratory<br>
       </div>
       <br>
   <li>    Time expected from the volunteer:</li><br>
   <div class="form-group"> 
       <input type="radio" name="time" value="we">weekly once,twice, etc(weekly basis)<br>
       <input type="radio" name="time" value="mon1">1 month<br>
       <input type="radio" name="time" value="mon2">2 months<br>
       <input type="radio" name="time" value="an">Annular basis(>2 months)<br>
          </div>


</ol>
     <div align="center"> <input type="submit" value="Register"/></div>
    </form>
</div>
    </div>
    </div>
    
    
 </body>
</html>



<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $username = mysql_real_escape_string($_POST['username']);
  $password = mysql_real_escape_string($_POST['password']);
  $location = mysql_real_escape_string($_POST['location']);
  $contact = mysql_real_escape_string($_POST['contact']);
  $description = mysql_real_escape_string($_POST['description']);

  //checkboxes
  $technical="NO";
  $music="NO";
  $literature="NO";
  $art="NO";
  $sports="NO";
  $computer="NO";
  $oratory="NO";

  if (isset($_POST['Technical'])) {
    $technical= "YES";
}
if (isset($_POST['Music'])) {
    $music= "YES";
}
if (isset($_POST['Literature'])) {
    $literature= "YES";
}
if (isset($_POST['Art'])) {
    $art= "YES";
}
if (isset($_POST['Sports'])) {
    $sports= "YES";
}
if (isset($_POST['Computer'])) {
    $computer= "YES";
}
if (isset($_POST['Oratory'])) {
    $oratory= "YES";
}


// radio
$period="none";

if($_POST['time']=="we"){
$period="we";
}
if($_POST['time']=="mon1"){
$period="mon1";
}
if($_POST['time']=="mon2"){
$period="mon2";
}
if($_POST['time']=="an"){
$period="an";
}



    $bool = true;
  mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
  mysql_select_db("project") or die("Cannot connect to database"); //Connect to database
  $query = mysql_query("Select * from ngo"); //Query the users table
  while($row = mysql_fetch_array($query)) //display all rows from query
  {
    $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
    if($username == $table_users) // checks if there are any matching fields
    {
      $bool = false; // sets bool to false
      Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
      Print '<script>window.location.assign("register_ngo.php");</script>'; // redirects to register.php
    }
  }
  if($bool) // checks if bool is true
  {
    mysql_query("INSERT INTO ngo (username, password, location,contact, 
    description, technical, music, literature, art, sports,
    computer, oratory, period) VALUES ('$username','$password',
    '$location','$contact','$description','$technical','$music','$literature',
    '$art','$sports','$computer','$oratory','$period')"); //Inserts the value to table users
    Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
    Print '<script>window.location.assign("register_ngo.php");</script>'; // redirects to register.php
  }
}
?>