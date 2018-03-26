<?php
include_once('connection.php');
?>
<!DOCTYPE html>
<html>

<head> 
	<meta charset="UTF-8">
	
<title>Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"></script>
    

	<link rel="stylesheet" href="css/newstyle.css" type="text/css">
    </head>
     
<body  background="s.jpg">
    <center>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
	<div id="logo">
				
<a href="index.html"><img src="images/logo.png" alt="LOGO" height="150" width="300"></a>
			
       
				
	</div>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
   
    </div>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
           <a class="navbar-brand" href="login.php">Home</a>
	     <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Guidelines<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="applicant_side_guid.php">View Guidelines</a></li>
            
         
          </ul>
        </li>
          
          
          
          
        <li><a href="faqs.php">FAQs</a></li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Social Media<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://www.fb.com" class="fa fa-facebook">Facebook</a></li>
            <li><a href="http://www.twitter.com">Twitter</a></li>
            <li><a href="http://www.linkedin.com">LinkedIn</a></li>
            <li role="http://separator" class="divider"></li>
            <li><a href="http://www.youtube.com">Youtube</a></li>
          </ul>
        </li>
      </ul>
     
        <ul class="nav navbar-nav navbar-right">
            
       
            
      
          </ul>
       <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</div>
 
    </nav>
    


    
    
    
    
    
    
    

<style type="text/css">
form {
 width:100%;
 height:600px;
 margin:2px solid blue;

 }
   input[type="email"],input[type="password"]   {
  width: 90%;
  padding: 10px 0px 15px 8px;
  border-radius: 5px;
  box-shadow: inset 4px 6px 10px -4px rgba(0, 0, 0, 0.3), 0 1px 1px -1px rgba(255, 255, 255, 0.3);
  background: rgba(0, 0, 0, 0.2);
  outline: blue;
  border: none;
  border: 1px solid black;
   } 
   
    input[type="submit"],input[type="button"] {
  width: 90%;
  padding: 15px 0px 15px 8px;
  border-radius: 5px;
  background: rgba(0, 0, 0, 0.2);
  outline: none;
  border: none;
  border: 1px solid black;
   } 
   
   fieldset{
	  width:96%;
 height:550px;
 margin:solid;
 position:center-align;  
	   
   }
   h1{
  text-align:$align;
  padding:20px 0px 0px 0px;
  font:25px Oswald;
  color:#FFF;
  text-transform:uppercase;
  margin:0px;
}

</style>

<?php
session_start();
if( (isset($_POST["eml"]))&&(isset($_POST["psw"])) )
{
    
$em=$_POST["eml"];
$_SESSION["em"] = $em;
$p=$_POST["psw"];

$login_query="Select u_email,u_psw From register Where u_email='$em' and u_psw='$p'";
$result=mysqli_query($con,$login_query);
if(!$result || mysqli_num_rows($result)<=0)
{
echo "<script type=\"text/javascript\">window.alert('Email or Password is incorrect click OK to try again');
window.location.href = '/login.php';</script>"; 
exit;
}	
else{
 header('Location: home.php');
}	
}//isset	
?>		
			
<div id="contents">
				
<div class="box">
					
<div>
						
<div class="body">
							
						
<form action="login.php" method="POST" ">
<fieldset>
<legend><h1>Login Form </h1></legend>
  
    <label><b>Enter Email:</b></label>
    <input type="email" placeholder="Enter Username" name="eml" required>
	<br><br>
    <label><b>Enter Password :</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
<br><br>
     <button type="submit" value="submit">LogIn</button>
	<button type="button" class="cancel">Cancel</button>
 
<br><br>
  <a href="register.php"><b>Register New User</b> </a>
             <br><br>           
  <a href="admin_class.php"><b>Login As Admin</b> </a>                        
</fieldset>
</form>					
</div>	
						
</div>
						
</div>
		
<?php include_once("footer.php"); ?></center>
</body>
</html>