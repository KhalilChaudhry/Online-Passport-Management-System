<!DOCTYPE html>
<html>
<head>
	
<meta charset="UTF-8">
	
<title>register</title>
	
<link rel="stylesheet" href="css/newstyle.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
</head>


<body>				
<a href="index.html"><img src="images/logo.png" alt="LOGO" height="112" width="118"></a>
<center>
    <div id="navigation">
<ul>
												
<li>
<a href="faqs1.html">FAQs</a>
</li>
						
<li>
<a href="guideline1.html">Guidlines</a>
</li>
</ul>
</div>
			

<?php

include_once('connection.php');
include_once("registerclass.php");        

if( (isset($_POST["fname"]))&&(isset($_POST["lname"]))&&(isset($_POST["email"]))&&(isset($_POST["psw"]))&&(isset($_POST["cnf_psw"])) )
{
$fn=$_POST["fname"];
$ln=$_POST["lname"];   
$p=$_POST["psw"];    
$em=$_POST["email"];
$cnf_p=$_POST["cnf_psw"]; 
if($p==$cnf_p)     //compare passwords
{
$s=new register($fn,$ln,$p,$em);
//$s->show();
$s->register($con);
}//if
else
{
	echo "Password Dosn't Match";
}

}
?>			
<div id="contents">
<div class="body">
 <form action="register.php" method="POST"  >
  <fieldset>
      <table>
  <legend><h1><b>Registration Form</b></h1></legend>
       <tr>  
<td><label><b> First Name: </b></label></td>
   <td> <input type="text"class="form-control" placeholder="Enter first name" name="fname"  size="100%" required></td>
</tr> 
          <tr>  
	
              <td><label><b>Last Name: </b></label></td>
    <td><input type="text" class="form-control"placeholder="Enter last name" name="lname"  size="100%" required></td>
	</tr>
          <tr>  
    <td><label><b>Enter Email: </b></label></td>
    <td><input type="email"class="form-control" placeholder="Enter Email" name="email"  size="100%" required></td>
	</tr>
          <tr>  
   <td> <label><b>Enter Password</b></label></td>
    <td><input type="password"class="form-control" placeholder="Enter Password" name="psw"  size="100%" required></td>
</tr> 
          <tr>  
    <td><label><b>Confirm Password</b></label></td>
    <td><input type="password"class="form-control" placeholder="Confirm Password" name="cnf_psw"   size="100%" required></td>
    </tr> 
	<br><br>
          <tr>  
      <td><button type="button" class="form-control" name="cancel" value="cancel">Cancel</button></td>
	
      <td><button type="submit" class="form-control"name="Submit" value="submit" >Sign Up</button></td>
    </tr> 
</table>
</fieldset>
</form> 	
</div>
</div>				
						
<?php include_once("footer.php"); ?>
		
</center>
</body>
</html>