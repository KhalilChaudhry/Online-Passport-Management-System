<?php
session_start();
include_once('connection.php');
class register{
	private $applicant_fn;
	private $applicant_ln;
    private $applicant_password;
    private $applicant_email;
    
	
	function __Construct($fn, $ln, $p, $em)
	{
		$this->setapplicant_fn($fn);
		$this->setapplicant_ln($ln);
		$this->setapplicant_password($p);
        $this->setapplicant_email($em);	
	}
	public function setapplicant_email( $em)
	{
		$this->applicant_email=$em;
        $_SESSION['Email'] = $em;
	}
	public function setapplicant_password($p)
	{
		$this->applicant_password=$p;
	}
	public function setapplicant_fn( $fn)
	{
		$this->applicant_fn=$fn;
	}
	public function setapplicant_ln( $ln)
	{
		$this->applicant_ln=$ln;
	}
	public function getapplicant_email()
	{
		return $this->applicant_email;
	}
	public function getapplicant_password()
	{
		return $this->applicant_password;
	}
	public function getapplicant_fn()
	{
		return $this->applicant_fn;
	}
	public function getapplicant_ln()
	{
		return $this->applicant_ln;
	}
	public function show()
	{
		echo $this->getapplicant_email(),$this->getapplicant_password(),$this->getapplicant_fn(),$this->getapplicant_ln();
	}
	public function register($con)
	{
		$reg= "INSERT INTO register VALUES('' , '$this->applicant_fn','$this->applicant_ln','$this->applicant_password', '$this->applicant_email')";
        $query=mysqli_query($con,$reg);
 if($query)
	{
	echo "<script type=\"text/javascript\">window.alert('You are registered successfully click OK to login');
window.location.href = '/login.php';</script>"; 
exit;
	}
	else
	{
echo $con->error;
	}//else
	}
}


?>
