<?php
class SmsApi{
public $username = '';
public $password = '22319466';
public $senderid = 'BIZNET';
public $adminmob='8182806465';
function enrol_sms_user($umob,$name,$enrolid,$password)  {
	$message=urlencode("Hello ".$name.", your application is submitted successfully. Your Enrolment number is ".$enrolid." and password is ".$password);
	 $fp=fopen("http://www.smscgateway.com/messageapi.asp?username=".$this->username."&password=".$this->password."&sender=".$this->senderid."&mobile=91".$umob."&message=".$message,"r"); 
		//print_r($fp);
}
function enrol_sms_admin($name,$enrolid)  { 
		
		$message1=urlencode("Admin, there is a new application registered with enrolment number: ".$enrolid." and Name: ".$name);
		
		$fp=fopen("http://www.smscgateway.com/messageapi.asp?username=".$this->username."&password=".$this->password."&sender=".$this->senderid."&mobile=".			$this->adminmob."&message=".$message1,"r");
}

function certificate_sms_user($umob,$name,$enrolid,$course)  { 
		
		$message1=urlencode("Hello <NAME>, your result has been uploaded for Course: ".$course." and enrolment num.: ".$enrolid.". Please visit sugam.org.in");
		
		$fp=fopen("http://www.smscgateway.com/messageapi.asp?username=".$this->username."&password=".$this->password."&sender=".$this->senderid."&mobile=".			$umob."&message=".$message1,"r");
}

}
?>