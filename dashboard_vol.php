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


h2:hover{
	transition:0.3s;font-size: 29pt;}
</style>
</head>

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
                
                    
                    <li class="animated wow bounceInLeft" data-wow-delay=".4s"><a href="login_ngo.php">NGO Banner</a></li>

                    <li class="animated wow bounceInLeft" data-wow-delay=".8s"><a href="login_vol.php">Volunteer Banner</a></li>
                    
                </ul>
            </nav>
</div>

</header>

    <h2 class="animated wow rubberBand" data-wow-delay=".8s" 
        style="text-align:center; 
        color:lightgrey;">DashBoard</h2>
 <h2 
        style="text-align:center; background-color:NavajoWhite;

        color:#282828;padding:10px;font-size: 16pt;">Hello!!!!You have chosen 
        <?php  $field=$_POST['choice'];
print($field.'<br>'); ?>
as your field of interest.There are many organisations inetersted 
in different fields. But don't worry we have optimized the search
results for you.!!!</h2>


<div class="container-fluid"  style="margin:0px;
font-size:25px;background-color:lightgrey;
    padding:50px;color:black;">

        
        
 
 
<div id="flip" >Organisation List<br>click to view!!!</div>
<div id="panel">

    
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
	
$field=$_POST['choice'];
print(' <h2 class="animated wow rubberBand" data-wow-delay=".8s" 
        style="text-align:center; 
        color:lightgrey;">Field: '.$field.'</h2>'.'<br>');






	mysql_connect("localhost", "root","") or die(mysql_error()); //Connect to server
  mysql_select_db("project") or die("Cannot connect to database"); //Connect to database
  $query = mysql_query("Select * from ngo"); //Query the users table
while($row = mysql_fetch_array($query)) //display all rows from query
  {
    $table_users = $row[$field]; // the first username row is passed on to $table_users, and so on until the query is finished
    if($table_users=='YES') // checks if there are any matching fields
    {
    	print('<div style="text-align:center; 
          color:coral;background-color:#282828 ;border: 4px solid white; 
        font-size: 14pt;">');



    	print(
    '<h2 style="text-align:center; 
        color:coral;background-color:LightGrey">'.$row['username'].'</h2>'.'<br>');
    	 Print 'Name:'  . $row['username'].'<br><br>';
        
        Print 'Location:  '. $row['location'].'<br><br>';
        Print 'Contact:   '. $row['contact'].'<br><br>';
        Print 'Description:  <br> '. $row['description'].'<br><br>';     

        Print 'Skills/Interests:<br>';


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
          Print('<br>');
        Print 'Time expected from the volunteer: ';
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
        print('</div>');

      
    }
  }
}
	?>
  
</div>

 <h2 
        style="text-align:center; background-color:NavajoWhite;

        color:#282828;padding:10px;font-size: 16pt;">Thank You!!!!<br>
        You can change this field and view a different list of volunteers by going back to the volunteer
        homescreen and entering a different field.</h2>

    </div>
    
 </body>
</html>
