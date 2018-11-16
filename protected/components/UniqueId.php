<?php



/**

 * UniqueId represents the data needed to identity a user.

 * It contains the authentication method that checks if the provided

 * data can identity the user.

 */

class UniqueId extends CUserIdentity

{


public function site_id()
{

/* @mid L_81_LU_001*/
$mid1="CATS";
$index="000001";

$mid=$mid1."_".$index;

$sql="SELECT site_id FROM site_register order by site_id DESC";

$merchant=SiteRegister::model()->findAllBySql($sql);
if(empty($merchant))
return $mid;
else
{

$oldmid=$merchant[0]['site_id'];
$str=explode("_",$oldmid);
$nindex=end($str);

$nindex=$nindex+1;
$count= strlen($nindex);

if($count==1)
$nindex="00000".$nindex;
if($count==2)
$nindex="0000".$nindex;
if($count==3)
$nindex="000".$nindex;
if($count==4)
$nindex="00".$nindex;
if($count==5)
$nindex="0".$nindex;
if($count==6)
$nindex=$nindex;

$mid=$mid1."_".$nindex;

return $mid;

}

}

/*product id number generator for fresh registration*/

public function product_id_register()
{

/* @pdid MID_BIZZ_001*/
$mid1=Yii::app()->user->mer_id."_BIZZ_";
$index='001';
$mid=$mid1.$index;


$sql="SELECT bizznet_product_id FROM bizznet_product_details WHERE bizznet_product_id LIKE'".$mid1."%'";
$merchant=BizznetProductDetails::model()->findAllBySql($sql);
if(empty($merchant))
return $mid;
else
{

/*Product id presernt and procut is activated; fresh product purcahse product id genertaion*/
$oldmid=$merchant[0]['bizznet_product_id'];
$str=explode("/",$oldmid);
$nindex=$str[5];

$nindex=$nindex+1;

$count=count($nindex);
if($count==1)
$nindex="00".$nindex;
if($count==2)
$nindex="0".$nindex;
if($count==3)
$nindex=$nindex;

$mid=$mid1.$nindex;

return $mid;

}

}

/*setup id finder based on state and disrtict selected at time of signup @A,B,C */

public function setup_id($city)
{

$loc=LocationDetails::model()->findByAttributes(array('district'=>$city));
if(empty($loc))
return 'C';
else
{
$sd=SetupDetails::model()->findByAttributes(array('category'=>$loc['code']));
return $sd['setup_id'];
}

}

public function checkProductStage()
{

$status=BizznetProductDetails::model()->findByAttributes(array('merchant_id'=>Yii::app()->user->mer_id,'product_status'=>'Pending'));

if(empty($status))
{
$url='';
}
else
{
	
	$stage=$status['product_stage'];
	
	Yii::app()->user->setState("mer_pd_id", $status['bizznet_product_id']);
	
	
	$url='';
	
	if($stage==1)
	$url=Yii::app()->createUrl('site/choosePlan');
	if($stage==2)
	$url=Yii::app()->createUrl('site/chooseaddon');
	if($stage==3)
	$url=Yii::app()->createUrl('site/plansummary');
	if($stage==4)
	$url=Yii::app()->createUrl('site/choosetheme');
	if($stage==5)
	$url=Yii::app()->createUrl('site/accountdetail');
	if($stage==6)
	$url=Yii::app()->createUrl('site/storedetail');
	if($stage==7)
	$url=Yii::app()->createUrl('site/accept');
	if($stage==8)
	$url=Yii::app()->createUrl('site/billsummary');
	
	return $url;
	
	
}

	
}

/*product form id number generator*/

public function product_form_id()
{

/* @pdid O_USPL/1617/00001*/
$mid1="O_USPL/".date("y").(date("y")+1)."/";
$index='00001';

$mid=$mid1.$index;

$sql="SELECT bizznet_form_number FROM bizznet_product_details order by  bizznet_form_number DESC";
$merchant=BizznetProductDetails::model()->findAllBySql($sql);
if(empty($merchant))
return $mid;
else
{

/*Product id presernt and procut is activated; fresh product purcahse product id genertaion*/
$oldmid=$merchant[0]['bizznet_form_number'];
$str=explode("/",$oldmid);
$nindex=$str[2];

$nindex=$nindex+1;

$count=count($nindex);
if($count==1)
$nindex="0000".$nindex;
if($count==2)
$nindex="000".$nindex;
if($count==3)
$nindex="00".$nindex;
if($count==4)
$nindex="0".$nindex;
if($count==5)
$nindex=$nindex;

$mid=$mid1.$nindex;

return $mid;

}

}
 

 /*product form id number generator*/

public function merchant_add_id($loc)
{

/* @pdid PIN_2017_00001*/
$mid1=$loc."_".date("Y")."_";
$index='00001';

$mid=$mid1.$index;

$sql="SELECT address_id FROM merchant_address WHERE address_id LIKE'".$$mid1."%'";
$merchant=MerchantAddress::model()->findAllBySql($sql);
if(empty($merchant))
return $mid;
else
{

/*Product id presernt and procut is activated; fresh product purcahse product id genertaion*/
$oldmid=$merchant[0]['address_id'];
$str=explode("_",$oldmid);
$nindex=$str[2];

$nindex=$nindex+1;

$count=count($nindex);
if($count==1)
$nindex="0000".$nindex;
if($count==2)
$nindex="000".$nindex;
if($count==3)
$nindex="00".$nindex;
if($count==4)
$nindex="0".$nindex;
if($count==5)
$nindex=$nindex;

$mid=$mid1.$nindex;

return $mid;

}

}


/*legal id for merhant generator*/

public function merchant_legal_id()
{

/* @pdid PIN_2017_00001*/
$mid1=Yii::app()->user->mer_id."_";
$index='000001';

$mid=$mid1.$index;

$sql="SELECT legal_id FROM merchant_legal order by  legal_id DESC";
$merchant=MerchantLegal::model()->findAllBySql($sql);
if(empty($merchant))
return $mid;
else
{

/*Product id presernt and procut is activated; fresh product purcahse product id genertaion*/
$oldmid=$merchant[0]['legal_id'];
$str=explode("_",$oldmid);
$nindex=$str[2];

$nindex=$nindex+1;

$count=count($nindex);
if($count==1)
$nindex="00000".$nindex;
if($count==2)
$nindex="0000".$nindex;
if($count==3)
$nindex="000".$nindex;
if($count==4)
$nindex="00".$nindex;
if($count==5)
$nindex="0".$nindex;
if($count==6)
$nindex=$nindex;

$mid=$mid1.$nindex;

return $mid;

}

}


/*preferrence id for merhant generator*/

public function merchant_pref_id()
{

/* @pdid PIN_2017_00001*/
$mid1=Yii::app()->user->mer_id."_";
$index='000001';

$mid=$mid1.$index;

$sql="SELECT preference_id FROM merchant_preferences order by  preference_id DESC";
$merchant=MerchantPreferences::model()->findAllBySql($sql);
if(empty($merchant))
return $mid;
else
{

/*Product id presernt and procut is activated; fresh product purcahse product id genertaion*/
$oldmid=$merchant[0]['preference_id'];
$str=explode("_",$oldmid);
$nindex=$str[2];

$nindex=$nindex+1;

$count=count($nindex);
if($count==1)
$nindex="00000".$nindex;
if($count==2)
$nindex="0000".$nindex;
if($count==3)
$nindex="000".$nindex;
if($count==4)
$nindex="00".$nindex;
if($count==5)
$nindex="0".$nindex;
if($count==6)
$nindex=$nindex;

$mid=$mid1.$nindex;

return $mid;

}

}


/*tnc id for merchant generator*/

public function merchant_tnc_id()
{

/* @MID 001*/
$mid1=Yii::app()->user->mer_id."_";
$index='001';

$mid=$mid1.$index;

$sql="SELECT merchant_tc_id FROM merchant_terms_and_condition order by  merchant_tc_id DESC";
$merchant=MerchantTermsAndCondition::model()->findAllBySql($sql);
if(empty($merchant))
return $mid;
else
{

/*Product id presernt and procut is activated; fresh product purcahse product id genertaion*/
$oldmid=$merchant[0]['merchant_tc_id'];
$str=explode("_",$oldmid);
$nindex=end($str);

$nindex=$nindex+1;

$count=count($nindex);
if($count==1)
$nindex="00".$nindex;
if($count==2)
$nindex="0".$nindex;
if($count==3)
$nindex=$nindex;

$mid=$mid1.$nindex;

return $mid;

}

}



/*merchant_service_agreement id for merchant generator*/

public function merchant_sa_id()
{

/* @MID 001*/
$mid1=Yii::app()->user->mer_id."_";
$index='001';

$mid=$mid1.$index;

$sql="SELECT merchant_sa_id FROM merchant_service_agreement order by  merchant_sa_id DESC";
$merchant=MerchantServiceAgreement::model()->findAllBySql($sql);
if(empty($merchant))
return $mid;
else
{

/*Product id presernt and procut is activated; fresh product purcahse product id genertaion*/
$oldmid=$merchant[0]['merchant_sa_id'];
$str=explode("_",$oldmid);
$nindex=end($str);

$nindex=$nindex+1;

$count=count($nindex);
if($count==1)
$nindex="00".$nindex;
if($count==2)
$nindex="0".$nindex;
if($count==3)
$nindex=$nindex;

$mid=$mid1.$nindex;

return $mid;

}

}

/*merchant_privacy_policy_id for merchant generator*/

public function merchant_pp_id()
{

/* @MID 001*/
$mid1=Yii::app()->user->mer_id."_";
$index='001';

$mid=$mid1.$index;

$sql="SELECT merchant_pp_id FROM merchant_privacy_policy order by  merchant_pp_id DESC";
$merchant=MerchantPrivacyPolicy::model()->findAllBySql($sql);
if(empty($merchant))
return $mid;
else
{

/*Product id presernt and procut is activated; fresh product purcahse product id genertaion*/
$oldmid=$merchant[0]['merchant_pp_id'];
$str=explode("_",$oldmid);
$nindex=end($str);

$nindex=$nindex+1;

$count=count($nindex);
if($count==1)
$nindex="00".$nindex;
if($count==2)
$nindex="0".$nindex;
if($count==3)
$nindex=$nindex;

$mid=$mid1.$nindex;

return $mid;

}

}


/*merchant_disclaimer_id for merchant generator*/

public function merchant_d_id()
{

/* @MID 001*/
$mid1=Yii::app()->user->mer_id."_";
$index='001';

$mid=$mid1.$index;

$sql="SELECT merchant_d_id FROM merchant_disclaimer order by  merchant_d_id DESC";
$merchant=MerchantDisclaimer::model()->findAllBySql($sql);
if(empty($merchant))
return $mid;
else
{

/*Product id presernt and procut is activated; fresh product purcahse product id genertaion*/
$oldmid=$merchant[0]['merchant_d_id'];
$str=explode("_",$oldmid);
$nindex=end($str);

$nindex=$nindex+1;

$count=count($nindex);
if($count==1)
$nindex="00".$nindex;
if($count==2)
$nindex="0".$nindex;
if($count==3)
$nindex=$nindex;

$mid=$mid1.$nindex;

return $mid;

}

}

/*merchant_product_bill_id for merchant purchase*/

public function merchant_bill_id()
{

/* @MID 001*/
$mid1=Yii::app()->user->mer_id."_".date('Y')."_";
$index='001';

$mid=$mid1.$index;

$sql="SELECT merchant_bill_id FROM merchant_bill_summary WHERE merchant_bill_id LIKE'".$mid1."%'";
$merchant=MerchantBillSummary::model()->findAllBySql($sql);
if(empty($merchant))
return $mid;
else
{

/*merchant_bill_id presernt ; fresh product purcahse merchant_bill_id genertaion*/
$oldmid=$merchant[0]['merchant_bill_id'];
$str=explode("_",$oldmid);
$nindex=end($str);

$nindex=$nindex+1;

$count=count($nindex);
if($count==1)
$nindex="00".$nindex;
if($count==2)
$nindex="0".$nindex;
if($count==3)
$nindex=$nindex;

$mid=$mid1.$nindex;

return $mid;

}

}

/*merchant_payment_id for merchant purchase*/

public function merchant_payment_id()
{

/* @MID 001*/
$mid1=Yii::app()->user->mer_pd_id."_";
$index='000001';

$mid=$mid1.$index;

$sql="SELECT merchant_payment_id FROM merchant_payment WHERE merchant_payment_id like '$mid1%' order by  merchant_payment_id DESC";
$merchant=MerchantPayment::model()->findAllBySql($sql);
if(empty($merchant))
return $mid;
else
{

/*merchant_bill_id presernt ; fresh product purcahse merchant_bill_id genertaion*/
$oldmid=$merchant[0]['merchant_payment_id'];
$str=explode("_",$oldmid);
$nindex=end($str);

$nindex=$nindex+1;

$count=count($nindex);
if($count==1)
$nindex="00000".$nindex;
if($count==2)
$nindex="0000".$nindex;
if($count==3)
$nindex="000".$nindex;
if($count==4)
$nindex="00".$nindex;
if($count==5)
$nindex="0".$nindex;
if($count==6)
$nindex=$nindex;

$mid=$mid1.$nindex;

return $mid;

}

}

/*merchant_receipt_number for merchant purchase*/

public function merchant_receipt_number()
{

/* @MID 001*/
$mid1="O_";
$index='000001';

$mid=$mid1.$index;

$sql="SELECT receipt_number FROM merchant_payment order by  receipt_number DESC";
$merchant=MerchantPayment::model()->findAllBySql($sql);
if(empty($merchant))
return $mid;
else
{

/*merchant_bill_id presernt ; fresh product purcahse merchant_bill_id genertaion*/
$oldmid=$merchant[0]['receipt_number'];
$str=explode("_",$oldmid);
$nindex=end($str);

$nindex=$nindex+1;

$count=count($nindex);
if($count==1)
$nindex="00000".$nindex;
if($count==2)
$nindex="0000".$nindex;
if($count==3)
$nindex="000".$nindex;
if($count==4)
$nindex="00".$nindex;
if($count==5)
$nindex="0".$nindex;
if($count==6)
$nindex=$nindex;

$mid=$mid1.$nindex;

return $mid;

}

}

/*merchant_bill_number for merchant purchase*/

public function merchant_bill_number()
{

/* @MID 001*/
$mid1="O_USPL/".date('y').(date('y')+1)."/";
$index='00001';

$mid=$mid1.$index;

$sql="SELECT bill_number FROM merchant_bill_summary order by  bill_number DESC";
$merchant=MerchantBillSummary::model()->findAllBySql($sql);
if(empty($merchant))
return $mid;
else
{

/*bill_number presernt ; fresh product purcahse bill_number genertaion*/
$oldmid=$merchant[0]['bill_number'];
$str=explode("/",$oldmid);
$nindex=end($str);

$nindex=$nindex+1;

$count=count($nindex);
if($count==1)
$nindex="0000".$nindex;
if($count==2)
$nindex="000".$nindex;
if($count==3)
$nindex="00".$nindex;
if($count==4)
$nindex="0".$nindex;
if($count==5)
$nindex=$nindex;

$mid=$mid1.$nindex;

return $mid;

}

}


/*merchant_bill_itenary_id for merchant purchase*/

public function merchant_bill_itneray()
{

/* @MID 001*/
$mid1=Yii::app()->user->mer_pd_id."_";
$index='001';

$mid=$mid1.$index;

$sql="SELECT merchant_bill_itinerary_id FROM merchant_bill_itinerary Where merchant_bill_itinerary_id LIKE '".$mid1."%' ORDER BY merchant_bill_itinerary_id DESC ";
$merchant=MerchantBillItinerary::model()->findAllBySql($sql);
if(empty($merchant))
return $mid;
else
{

/*merchant_bill_itinerary_id presernt ; fresh product purcahse merchant_bill_itinerary_id genertaion*/
$oldmid=$merchant[0]['merchant_bill_itinerary_id'];
$str=explode("_",$oldmid);
$nindex=end($str);

$nindex=$nindex+1;

$count=count($nindex);
if($count==1)
$nindex="00".$nindex;
if($count==2)
$nindex="0".$nindex;
if($count==3)
$nindex=$nindex;

$mid=$mid1.$nindex;

return $mid;

}

}



/*shop id for merhant generator*/

public function merchant_shop_id($sname,$oname)
{

$sname=strtoupper($sname);
$oname=strtoupper($oname);
/* @pdid PIN_2017_00001*/
$s=substr($sname, 0, 2);
$o=substr($oname, 0, 2);
$mid1=$s."_".$o."_";
$index='000001';

$mid=$mid1.$index;

$sql="SELECT shop_id FROM merchant_shop order by  shop_id DESC";
$merchant=MerchantShop::model()->findAllBySql($sql);
if(empty($merchant))
return $mid;
else
{

/*Product id presernt and procut is activated; fresh product purcahse product id genertaion*/
$oldmid=$merchant[0]['shop_id'];
$str=explode("_",$oldmid);
$nindex=end($str);

$nindex=$nindex+1;

$count=count($nindex);
if($count==1)
$nindex="00000".$nindex;
if($count==2)
$nindex="0000".$nindex;
if($count==3)
$nindex="000".$nindex;
if($count==4)
$nindex="00".$nindex;
if($count==5)
$nindex="0".$nindex;
if($count==6)
$nindex=$nindex;

$mid=$mid1.$nindex;

return $mid;

}

}
 
 
 /*bank id for merhant generator*/

public function merchant_bank_id($sname)
{

$sname=strtoupper($sname);
/* @pdid PIN_2017_00001*/
$s=substr($sname, 0, 2);
$mid1=$s."_";
$index='000001';

$mid=$mid1.$index;

$sql="SELECT merchant_bank_id FROM  merchant_bank order by  merchant_bank_id DESC";
$merchant=MerchantBank::model()->findAllBySql($sql);
if(empty($merchant))
return $mid;
else
{

/*Product id presernt and procut is activated; fresh product purcahse product id genertaion*/
$oldmid=$merchant[0]['merchant_bank_id'];
$str=explode("_",$oldmid);
$nindex=end($str);

$nindex=$nindex+1;

$count=count($nindex);
if($count==1)
$nindex="00000".$nindex;
if($count==2)
$nindex="0000".$nindex;
if($count==3)
$nindex="000".$nindex;
if($count==4)
$nindex="00".$nindex;
if($count==5)
$nindex="0".$nindex;
if($count==6)
$nindex=$nindex;

$mid=$mid1.$nindex;

return $mid;

}

}


/*merchant_contact_group_id number generator*/

public function contact_group_id()
{

/* @pdid MID_00001*/
$mid1=Yii::app()->user->mer_id."_";
$index='00001';

$mid=$mid1.$index;

$sql="SELECT merchant_cg_id FROM merchant_contact_groups order by  merchant_cg_id DESC";
$merchant=MerchantContactGroups::model()->findAllBySql($sql);
if(empty($merchant))
return $mid;
else
{

/*Product id presernt and procut is activated; fresh product purcahse product id genertaion*/
$oldmid=$merchant[0]['merchant_cg_id'];
$str=explode("_",$oldmid);
$nindex=end($str);

$nindex=$nindex+1;

$count=count($nindex);
if($count==1)
$nindex="0000".$nindex;
if($count==2)
$nindex="000".$nindex;
if($count==3)
$nindex="00".$nindex;
if($count==4)
$nindex="0".$nindex;
if($count==5)
$nindex=$nindex;

$mid=$mid1.$nindex;

return $mid;

}

}


/*merchant_contact_id number generator*/

public function contact_id()
{

/* @pdid MID_00001*/
$mid1=Yii::app()->user->mer_id."_";
$index='00001';

$mid=$mid1.$index;

$sql="SELECT merchant_contact_id FROM merchant_contact order by  merchant_contact_id DESC";
$merchant=MerchantContact::model()->findAllBySql($sql);
if(empty($merchant))
return $mid;
else
{

/*Product id presernt and procut is activated; fresh product purcahse product id genertaion*/
$oldmid=$merchant[0]['merchant_contact_id'];
$str=explode("_",$oldmid);
$nindex=end($str);

$nindex=$nindex+1;

$count=count($nindex);
if($count==1)
$nindex="0000".$nindex;
if($count==2)
$nindex="000".$nindex;
if($count==3)
$nindex="00".$nindex;
if($count==4)
$nindex="0".$nindex;
if($count==5)
$nindex=$nindex;

$mid=$mid1.$nindex;

return $mid;

}

}

/*merchant_query_id number generator*/

public function merchant_qt_id()
{

/* @pdid MID_00001*/
$mid1=Yii::app()->user->mer_id."_";
$index='00001';

$mid=$mid1.$index;

$sql="SELECT merchant_qt_id FROM merchant_query_tickets order by  merchant_qt_id DESC";
$merchant=MerchantQueryTickets::model()->findAllBySql($sql);
if(empty($merchant))
return $mid;
else
{

/*Product id presernt and procut is activated; fresh product purcahse product id genertaion*/
$oldmid=$merchant[0]['merchant_qt_id'];
$str=explode("_",$oldmid);
$nindex=end($str);

$nindex=$nindex+1;

$count=count($nindex);
if($count==1)
$nindex="0000".$nindex;
if($count==2)
$nindex="000".$nindex;
if($count==3)
$nindex="00".$nindex;
if($count==4)
$nindex="0".$nindex;
if($count==5)
$nindex=$nindex;

$mid=$mid1.$nindex;

return $mid;

}

}

/*merchant_query_comment_id number generator*/

public function merchant_qtc_id()
{

/* @pdid MID_00001*/
$mid1=Yii::app()->user->mer_id."_";
$index='00001';

$mid=$mid1.$index;

$sql="SELECT merchant_qtc_id FROM merchant_qt_comments order by  merchant_qtc_id DESC";
$merchant=MerchantQtComments::model()->findAllBySql($sql);
if(empty($merchant))
return $mid;
else
{

/*Product id presernt and procut is activated; fresh product purcahse product id genertaion*/
$oldmid=$merchant[0]['merchant_qtc_id'];
$str=explode("_",$oldmid);
$nindex=end($str);

$nindex=$nindex+1;

$count=count($nindex);
if($count==1)
$nindex="0000".$nindex;
if($count==2)
$nindex="000".$nindex;
if($count==3)
$nindex="00".$nindex;
if($count==4)
$nindex="0".$nindex;
if($count==5)
$nindex=$nindex;

$mid=$mid1.$nindex;

return $mid;

}

}
 
/*merchant_email_send_id number generator*/

public function merchant_email_id()
{

/* @pdid MID_00001*/
$mid1=Yii::app()->user->mer_id."_";
$index='00001';

$mid=$mid1.$index;

$sql="SELECT merchant_et_id FROM merchant_email_transaction order by  merchant_et_id DESC";
$merchant=MerchantEmailTransaction::model()->findAllBySql($sql);
if(empty($merchant))
return $mid;
else
{

/*Product id presernt and procut is activated; fresh product purcahse product id genertaion*/
$oldmid=$merchant[0]['merchant_et_id'];
$str=explode("_",$oldmid);
$nindex=end($str);

$nindex=$nindex+1;

$count=count($nindex);
if($count==1)
$nindex="0000".$nindex;
if($count==2)
$nindex="000".$nindex;
if($count==3)
$nindex="00".$nindex;
if($count==4)
$nindex="0".$nindex;
if($count==5)
$nindex=$nindex;

$mid=$mid1.$nindex;

return $mid;

}

}


/*merchant_sms_send_id number generator*/

public function merchant_sms_id()
{

/* @pdid MID_00001*/
$mid1=Yii::app()->user->mer_id."_";
$index='00001';

$mid=$mid1.$index;

$sql="SELECT merchant_smst_id FROM merchant_sms_transactions order by  merchant_smst_id DESC";
$merchant=MerchantSmsTransactions::model()->findAllBySql($sql);
if(empty($merchant))
return $mid;
else
{

/*Product id presernt and procut is activated; fresh product purcahse product id genertaion*/
$oldmid=$merchant[0]['merchant_smst_id'];
$str=explode("_",$oldmid);
$nindex=end($str);

$nindex=$nindex+1;

$count=count($nindex);
if($count==1)
$nindex="0000".$nindex;
if($count==2)
$nindex="000".$nindex;
if($count==3)
$nindex="00".$nindex;
if($count==4)
$nindex="0".$nindex;
if($count==5)
$nindex=$nindex;

$mid=$mid1.$nindex;

return $mid;

}

}
  

}

?>