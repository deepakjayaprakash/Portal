<!DOCTYPE html>
<html>
<head>
<title>Portal</title>
    <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="css/animate.css"/>
  <link rel="stylesheet" type="text/css" href="css/main.css"/>
 <script type="text/javascript" src="js/jquery.js"></script> 
  
  <script type="text/javascript" src="js/wow.js"></script>
 <script type="text/javascript" src="js/parallax.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

  <script type="text/javascript" src="js/jquery.min.js"></script> 

<script> 
$(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});

$(document).ready(function(){
    $("#flip2").click(function(){
        $("#panel2").slideToggle("slow");
    });
});
</script>

<style> 
#panel, #flip ,#panel2,#flip2{
    padding: 30px;
    text-align:center; 
        background-color:#484848;  font-style:bold;
        font-size: 14pt; letter-spacing: 6px;
  color: Coral;
   
    border: solid 4px NavajoWhite;
}

#panel, #panel2{
    padding: 60px;
    display: none;
}

.hero{
  display: block;
  position: relative;
  width: 100%;
  height: 560px;
  background: url('img/sw1.jpg') no-repeat;
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
                
                    <li class="animated wow bounceInLeft" data-wow-delay="0s"><a href="#hero"> Personal</a></li>
                    <li class="animated wow bounceInLeft" data-wow-delay=".8s"><a href="#flip2">Organisation Finder</a></li>
                    <li class="animated wow bounceInLeft" data-wow-delay="1s"><a href="logout.php">Logout</a></li>
                    
                </ul>
            </nav>
</div>

</header>

    <h2 class="animated wow wobble" data-wow-delay=".8s" 
        style="text-align:center;color:Coral;">WELCOME!!!!!!!</h2>
        

        <!--  Hero Section  -->
    <section class="hero" id="hero" >
        <div class="container">
            
              
</div>
</section>


  
 <!-- personal section-->
       <div class="container"  id="personal" style="text-align:center; 
        background-color:lightgrey; border: 4px solid; font-style:bold;
        font-size: 14pt; color:Coral;letter-spacing: 3px;padding:30px ;line-height: 40px;">

<h2 class="animated wow wobble" data-wow-delay=".8s" 
        style="text-align:center; background-color:#484848;
        height:70px;padding:20px;
        color:LightSalmon;">Organization Details</h2>
             

             <?php

        session_start(); //starts the session

  if($_SESSION['user']){ //checks if user is logged in
  }
  else{
    header("location:homepage.php"); // redirects if user is not logged in
  }
  $user = $_SESSION['user']; //assigns user value


        mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
        mysql_select_db("project") or die("Cannot connect to database"); //connect to database        
        
        $result=mysql_query("SELECT * FROM ngo ");

// loop to get the right row
        while ( $row = mysql_fetch_array( $result ) ) {
        if ( $row['username'] == $user ) {
            mysql_data_seek( $result, 0 );
            break;
        }
    }




        
       
      print(
    '<h2 style="text-align:center; 
        color:coral;background-color:#282828">'.$row['username'].'</h2>'.'<br>');

       Print 'Name:'  . $row['username'].'<br><br>';
        Print 'Password: ' . $row['password'].'<br><br>';
        Print 'Location:' . $row['location'].'<br><br>';
          Print 'Contact:   '. $row['contact'].'<br><br>';
        Print 'Description:<br>'. $row['description'].'<br><br>';     

        Print 'Skills/Interests<br>';


        if($row['technical']=='YES'){
          Print 'Technical<br>';}

         if($row['music']=="YES"){
          Print 'Music<br>';
         }
       
         if($row['literature']=='YES'){
          Print 'Literature<br>';}
         if($row['art']=='YES'){
          Print 'Art<br>';}
         if($row['sports']=='YES'){
          Print 'Sports<br>';}
          if($row['computer']=='YES'){
          Print 'Computer<br>';}
         if($row['oratory']=='YES'){
          Print 'Oratory<br>';}
          print('<br>');
        Print 'Time willing to participate:';
        if($row['period']=='we'){
          Print 'Weekly Basis';
        }
        if($row['period']=='mon1'){
          Print '1 month<br>';
        }
        if($row['period']=='mon2'){
          Print '2 months<br>';
        }
        if($row['period']=='an'){
          Print 'Annual basis<br>';
        }
      


        ?>
 
 
<div id="flip">Edit details</div>
<div id="panel">
  

    <form action="home_ngo.php" method="post">
  
  <li>    Password: <input type="password" name="password" required="required" /> </li><br/>
      
   <li>   Location: <input type="text" name="location" required="required"/> </li><br/>
   <li>    <div class="form-group"> Contact No: 
  <input type="text" class="form-control" 
  name="contact" required="required"/></div></li> <br/>

   <li>   Description:</li><br>
       <textarea name="description" rows="6" cols="60" >Describe yourself briefly in few lines.</textarea> <br/>
   <li>    Skills/Interests:</li><br>
       <input type="checkbox" name="Technical">Technical<br>
       <input type="checkbox" name="Music">Music<br>
       <input type="checkbox" name="Literature">Literature<br>
       <input type="checkbox" name="Art">Art<br>
       <input type="checkbox" name="Sports">Sports<br>
       <input type="checkbox" name="Computer">Computer<br>
       <input type="checkbox" name="Oratory">Oratory<br>
       
       <br>
   <li>    Time willing to participate:</li><br>
       <input type="radio" name="time" value="we">weekly once,twice, etc(weekly basis)<br>
       <input type="radio" name="time" value="mon1">1 month<br>
       <input type="radio" name="time" value="mon2">2 months<br>
       <input type="radio" name="time" value="an">Annular basis(>2 months)<br>

</ol>
      <input type="submit" value="Done"/>
    </form>
</div>

</div>

<br><br>



       <div class="container"  id="personal" style="text-align:center; 
        background-color:lightgrey; border: 4px solid; font-style:bold;
        font-size: 14pt; letter-spacing: 3px;padding:30px ;line-height: 40px;">

<!-- suggestions part-->

<div id="flip2">Find Volunteers</div>
<div id="panel2">

<form action="dashboard_ngo.php" method="post">
Skills/Interests:</li><br>
       <input type="radio" name="choice" value="technical">Technical<br>
       <input type="radio" name="choice" value="music">Music<br>
       <input type="radio" name="choice" value="literature">Literature<br>
       <input type="radio" name="choice" value="art">Art<br>
       <input type="radio" name="choice" value="sports">Sports<br>
       <input type="radio" name="choice" value="computer">Computer<br>
       <input type="radio" name="choice" value="oratory">Oratory<br>
       <input type="submit" value="Done"/>
</form>

</div>
</div>
</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $user = $_SESSION['user']; //assigns user value

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



  
  mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
  mysql_select_db("project") or die("Cannot connect to database"); //Connect to database
//updating the database for edit option
    mysql_query("UPDATE ngo SET  password='$password'
      , location='$location',  contact='$contact',
      description='$description', technical='$technical'
      , music='$music', literature='$literature', art='$art'
      , sports='$sports', computer='$computer', oratory='$oratory'
      , period='$period' WHERE username='$user' "); //Inserts the value to table users
    Print '<script>alert("Successfully Updated!");</script>'; // Prompts the user
    Print '<script>window.location.assign("home_ngo.php");</script>'; // redirects to register.php
  }






     



?>