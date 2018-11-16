<?php
class UserSmsApi{

function send_sms($username, $password, $senderid, $msg, $umob)  {
	$message=urlencode($msg);
	 //echo "http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=".$this->username."&password=".$this->password."&sendername=".$this->senderid."&mobileno=91".$umob."&message=".$message;
	$fp=fopen("http://www.smscgateway.com/messageapi.asp?username=".$username."&password=".$password."&sender=".$senderid."&mobile=91".$umob."&message=".$message1,"r"); 
		//print_r($fp);
}


}
?>