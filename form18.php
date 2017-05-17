<?php
@session_start(); 

ini_set('max_execution_time', 300);
include 'includes/dbconnect.php';
//error_reporting(0);
include 'includes/function.php';
include 'includes/function_18.php';//die('vvvv');
//include 'js/form18.js';

//check type of form 18
if(isset($_SESSION['form18_type']) && $_SESSION['form18_type'] != ''){	
	$form18_type = $_SESSION['form18_type'];	
}else{
	header('Location : dashboard.php');
}

check_userlogin();
$data_m= calculate_restoration_fee();
$user_data = get_user_data();
//calculate_fee_form18_re($FORMATION_PROPRIETORY_DATE);die('testt');
//$fee = calculate_fee_form18_re($FORMATION_PROPRIETORY_DATE);
//$DELAY_FEE = $fee['TOTAL_AMT'];
//echo $wwwroot;die;
$MRH_MRN = $_SESSION['UserID'];
//ECHO "<PRE>";PRINT_R($_POST);DIE
 if((isset($_POST['mem_form']) && $_POST['mem_form']=='') && ($_SESSION['randomFlag']==$_POST['hndRandomFlag'])) 
{
	//if($_POST['STUD_PART1_MEMBER_NO'] != '' ){ $STUD_PART1_MEMBER_NO = test_input_mem($_POST['STUD_PART1_MEMBER_NO']); }else{ $STUD_PART1_MEMBER_NO =''; }
	//ECHO "<PRE>";print_r($_POST);
	
	if(isset($_POST['MRH_CONSTITUTION_FORM'])){ $MRH_CONSTITUTION_FORM = test_input_mem($_POST['MRH_CONSTITUTION_FORM']); }
	else{ $MRH_CONSTITUTION_FORM =''; }
	  
	if(isset($_POST['TRADE_NAME'])){ $TRADE_NAME = test_input_mem($_POST['TRADE_NAME']); }else{ $TRADE_NAME =''; }
	
	if(isset($_POST['PROPRIETOR_PARTNER'])){ $PROPRIETOR_PARTNER = test_input_mem($_POST['PROPRIETOR_PARTNER']); }else{
		$PROPRIETOR_PARTNER =''; }
	
	
	
	
	if(isset($_POST['PROPRIETOR_PARTNER_NAME'])){ $PROPRIETOR_PARTNER_NAME = test_input_mem($_POST['PROPRIETOR_PARTNER_NAME']); }else{ $PROPRIETOR_PARTNER_NAME =''; }
	
	if(isset($_POST['PROPRIETOR_NAME_1'])){ $PROPRIETOR_NAME_1 = test_input_mem($_POST['PROPRIETOR_NAME_1']); }else{ $PROPRIETOR_NAME_1 =''; }
	
	if(isset($_POST['MEMBERSHIP_NUMBER_1'])){ $MEMBERSHIP_NUMBER_1 = test_input_mem($_POST['MEMBERSHIP_NUMBER_1']); }else{ $MEMBERSHIP_NUMBER_1 =''; }
	
	//if(isset($_POST['CERTIFICATE_DATE_1'])){ $CERTIFICATE_DATE_1 = test_input_mem($_POST['CERTIFICATE_DATE_1']); }else{ $CERTIFICATE_DATE_1 =''; }
	
	
	
	if(isset($_POST['CERTIFICATE_DATE_1']) && $_POST['CERTIFICATE_DATE_1'] != ''){ 
		$date_array=explode('-',$_POST['CERTIFICATE_DATE_1']);
		$CERTIFICATE_DATE_1=$date_array[2].'-'.$date_array[1].'-'.$date_array[0];
		//echo $CERTIFICATE_DATE_1;
		//die;
	}else{ 
		$CERTIFICATE_DATE_1 ='0000-00-00'; 
	}
	
	
	if(isset($_POST['PARTNER_NAME_2'])){ $PARTNER_NAME_2 = test_input_mem($_POST['PARTNER_NAME_2']); }else{ $PARTNER_NAME_2 =''; }
	
	if(isset($_POST['MEMBERSHIP_NUMBER_2'])){ $MEMBERSHIP_NUMBER_2 = test_input_mem($_POST['MEMBERSHIP_NUMBER_2']); }else{ $MEMBERSHIP_NUMBER_2 =''; }
	
	//if(isset($_POST['CERTIFICATE_DATE_2'])){ $CERTIFICATE_DATE_2 = test_input_mem($_POST['CERTIFICATE_DATE_2']); }else{ $CERTIFICATE_DATE_2 =''; }
	
	
	if(isset($_POST['CERTIFICATE_DATE_2']) && $_POST['CERTIFICATE_DATE_2'] != ''){ 
		$date_array=explode('-',$_POST['CERTIFICATE_DATE_2']);
		$CERTIFICATE_DATE_2=$date_array[2].'-'.$date_array[1].'-'.$date_array[0];
		//echo $CERTIFICATE_DATE_1;
		//die;
	}else{ 
		$CERTIFICATE_DATE_2 ='0000-00-00'; 
	}
	
	
	
	if(isset($_POST['PARTNER_NAME_3'])){ $PARTNER_NAME_3 = test_input_mem($_POST['PARTNER_NAME_3']); }else{ $PARTNER_NAME_3 =''; }
	
	if(isset($_POST['MEMBERSHIP_NUMBER_3'])){ $MEMBERSHIP_NUMBER_3 = test_input_mem($_POST['MEMBERSHIP_NUMBER_3']); }else{ $MEMBERSHIP_NUMBER_3 =''; }
	
	if(isset($_POST['CERTIFICATE_DATE_3'])){ $CERTIFICATE_DATE_3 = test_input_mem($_POST['CERTIFICATE_DATE_3']); }else{ $CERTIFICATE_DATE_3 =''; }
	
	if(isset($_POST['CERTIFICATE_DATE_3']) && $_POST['CERTIFICATE_DATE_3'] != ''){ 
		$date_array=explode('-',$_POST['CERTIFICATE_DATE_3']);
		$CERTIFICATE_DATE_3=$date_array[2].'-'.$date_array[1].'-'.$date_array[0];
		//echo $CERTIFICATE_DATE_1;
		//die;
	}else{ 
		$CERTIFICATE_DATE_3 ='0000-00-00'; 
	}
	
	
	
	if(isset($_POST['PARTNER_NAME_4'])){ $PARTNER_NAME_4 = test_input_mem($_POST['PARTNER_NAME_4']); }else{ $PARTNER_NAME_4 =''; }
	
	if(isset($_POST['MEMBERSHIP_NUMBER_4'])){ $MEMBERSHIP_NUMBER_4 = test_input_mem($_POST['MEMBERSHIP_NUMBER_4']); }else{ $MEMBERSHIP_NUMBER_4 =''; }
	
	//if(isset($_POST['CERTIFICATE_DATE_4'])){ $CERTIFICATE_DATE_4 = test_input_mem($_POST['CERTIFICATE_DATE_4']); }else{ $CERTIFICATE_DATE_4 =''; }
	
	if(isset($_POST['CERTIFICATE_DATE_4']) && $_POST['CERTIFICATE_DATE_4'] != ''){ 
		$date_array=explode('-',$_POST['CERTIFICATE_DATE_4']);
		$CERTIFICATE_DATE_4=$date_array[2].'-'.$date_array[1].'-'.$date_array[0];
		//echo $CERTIFICATE_DATE_1;
		//die;
	}else{ 
		$CERTIFICATE_DATE_4 ='0000-00-00'; 
	}
	
	
	
	if(isset($_POST['PARTNER_NAME_5'])){ $PARTNER_NAME_5 = test_input_mem($_POST['PARTNER_NAME_5']); }else{ $PARTNER_NAME_5 =''; }
	
	if(isset($_POST['MEMBERSHIP_NUMBER_5'])){ $MEMBERSHIP_NUMBER_5 = test_input_mem($_POST['MEMBERSHIP_NUMBER_5']); }else{ $MEMBERSHIP_NUMBER_5 =''; }
	
	//if(isset($_POST['CERTIFICATE_DATE_5'])){ $CERTIFICATE_DATE_5 = test_input_mem($_POST['CERTIFICATE_DATE_5']); }else{ $CERTIFICATE_DATE_5 =''; }
	
	if(isset($_POST['CERTIFICATE_DATE_5']) && $_POST['CERTIFICATE_DATE_5'] != ''){ 
		$date_array=explode('-',$_POST['CERTIFICATE_DATE_5']);
		$CERTIFICATE_DATE_5=$date_array[2].'-'.$date_array[1].'-'.$date_array[0];
		//echo $CERTIFICATE_DATE_1;
		//die;
	}else{ 
		$CERTIFICATE_DATE_5 ='0000-00-00'; 
	}
	
	
	if(isset($_POST['PARTNER_NAME_6'])){ $PARTNER_NAME_6 = test_input_mem($_POST['PARTNER_NAME_6']); }else{ $PARTNER_NAME_6 =''; }
	
	
	if(isset($_POST['MEMBERSHIP_NUMBER_6'])){ $MEMBERSHIP_NUMBER_6 = test_input_mem($_POST['MEMBERSHIP_NUMBER_6']); }else{ $MEMBERSHIP_NUMBER_6 =''; }
	
	//if(isset($_POST['CERTIFICATE_DATE_6'])){ $CERTIFICATE_DATE_6 = test_input_mem($_POST['CERTIFICATE_DATE_6']); }else{ $CERTIFICATE_DATE_6 =''; }
	
	
	
	if(isset($_POST['CERTIFICATE_DATE_6']) && $_POST['CERTIFICATE_DATE_6'] != ''){ 
		$date_array=explode('-',$_POST['CERTIFICATE_DATE_6']);
		$CERTIFICATE_DATE_6=$date_array[2].'-'.$date_array[1].'-'.$date_array[0];
		//echo $CERTIFICATE_DATE_6;
		//die;
	}else{ 
		$CERTIFICATE_DATE_6 ='0000-00-00'; 
	}
	
	
	//if(isset($_POST['FORMATION_PROPRIETORY_DATE'])){ $FORMATION_PROPRIETORY_DATE = test_input_mem($_POST['FORMATION_PROPRIETORY_DATE']); }else{ $FORMATION_PROPRIETORY_DATE =''; }
	
	if(isset($_POST['FORMATION_PROPRIETORY_DATE']) && $_POST['FORMATION_PROPRIETORY_DATE'] != ''){ 
		$date_array=explode('-',$_POST['FORMATION_PROPRIETORY_DATE']);
		$FORMATION_PROPRIETORY_DATE=$date_array[2].'-'.$date_array[1].'-'.$date_array[0];
		//echo $FORMATION_PROPRIETORY_DATE;
		//die;
	}else{ 
		$FORMATION_PROPRIETORY_DATE ='0000-00-00'; 
	}
	
	
	
	
	//if(isset($_POST['PRESENT_PARTNERSHIP_DATE'])){ $PRESENT_PARTNERSHIP_DATE = test_input_mem($_POST['PRESENT_PARTNERSHIP_DATE']); }else{ $PRESENT_PARTNERSHIP_DATE =''; }
	
	
	
	if(isset($_POST['PRESENT_PARTNERSHIP_DATE']) && $_POST['PRESENT_PARTNERSHIP_DATE'] != ''){ 
		$date_array=explode('-',$_POST['PRESENT_PARTNERSHIP_DATE']);
		$PRESENT_PARTNERSHIP_DATE=$date_array[2].'-'.$date_array[1].'-'.$date_array[0];
		//echo $CERTIFICATE_DATE_1;
		//die;
	}else{ 
		$PRESENT_PARTNERSHIP_DATE ='0000-00-00'; 
	}
	
	
	
	if(isset($_POST['PARTNERSHIP_STATUS'])){ $PARTNERSHIP_STATUS = test_input_mem($_POST['PARTNERSHIP_STATUS']); }else{ $PARTNERSHIP_STATUS =''; }
	
	if(isset($_POST['PARTNER_SHARE_STATUS'])){ $PARTNER_SHARE_STATUS = test_input_mem($_POST['PARTNER_SHARE_STATUS']); }else{ $PARTNER_SHARE_STATUS =''; }
	
	if(isset($_POST['DATE_PARTICULARS_APPROVAL'])){ $DATE_PARTICULARS_APPROVAL = test_input_mem($_POST['DATE_PARTICULARS_APPROVAL']); }else{ $DATE_PARTICULARS_APPROVAL =''; }
	
	if(isset($_POST['FIRM_NAME'])){ $FIRM_NAME = test_input_mem($_POST['FIRM_NAME']); }else{ $FIRM_NAME =''; }
	
	if(isset($_POST['ADD_HEAD_OFFICE_LINE_1'])){ $ADD_HEAD_OFFICE_LINE_1 = test_input_mem($_POST['ADD_HEAD_OFFICE_LINE_1']); }else{ $ADD_HEAD_OFFICE_LINE_1 =''; }
	if(isset($_POST['ADD_HEAD_OFFICE_LINE_2'])){ $ADD_HEAD_OFFICE_LINE_2 = test_input_mem($_POST['ADD_HEAD_OFFICE_LINE_2']); }else{ $ADD_HEAD_OFFICE_LINE_2 =''; }
	if(isset($_POST['ADD_HEAD_OFFICE_LINE_3'])){ $ADD_HEAD_OFFICE_LINE_3 = test_input_mem($_POST['ADD_HEAD_OFFICE_LINE_3']); }else{ $ADD_HEAD_OFFICE_LINE_3 =''; }
	if(isset($_POST['ADD_HEAD_OFFICE_LINE_4'])){ $ADD_HEAD_OFFICE_LINE_4 = test_input_mem($_POST['ADD_HEAD_OFFICE_LINE_4']); }else{ $ADD_HEAD_OFFICE_LINE_4 =''; }
	if(isset($_POST['HEAD_OFFICE_CITY_CODE'])){ $HEAD_OFFICE_CITY_CODE = test_input_mem($_POST['HEAD_OFFICE_CITY_CODE']); }else{ $HEAD_OFFICE_CITY_CODE =''; }
	if(isset($_POST['HEAD_OFFICE_STATE_CODE'])){ $HEAD_OFFICE_STATE_CODE = test_input_mem($_POST['HEAD_OFFICE_STATE_CODE']); }else{ $HEAD_OFFICE_STATE_CODE =''; }
	if(isset($_POST['HEAD_OFFICE_ZIP_POSTAL_CODE'])){ $HEAD_OFFICE_ZIP_POSTAL_CODE = test_input_mem($_POST['HEAD_OFFICE_ZIP_POSTAL_CODE']); }else{ $HEAD_OFFICE_ZIP_POSTAL_CODE =''; }
	if(isset($_POST['HEAD_OFFICE_TEL'])){ $HEAD_OFFICE_TEL = test_input_mem($_POST['HEAD_OFFICE_TEL']); }else{ $HEAD_OFFICE_TEL =''; }
	if(isset($_POST['HEAD_OFFICE_COU_CODE'])){ $HEAD_OFFICE_COU_CODE = test_input_mem($_POST['HEAD_OFFICE_COU_CODE']); }else{ $HEAD_OFFICE_COU_CODE =''; }
	if(isset($_POST['HEAD_OFFICE_EMAIL'])){ $HEAD_OFFICE_EMAIL = test_input_mem($_POST['HEAD_OFFICE_EMAIL']); }else{ $HEAD_OFFICE_EMAIL =''; }
	if(isset($_POST['HEAD_OFFICE_MOBILE'])){ $HEAD_OFFICE_MOBILE = test_input_mem($_POST['HEAD_OFFICE_MOBILE']); }else{ $HEAD_OFFICE_MOBILE =''; }
	
	if(isset($_POST['SIX_MRH_RES_ADDR_LINE_1'])){ $SIX_MRH_RES_ADDR_LINE_1 = test_input_mem($_POST['SIX_MRH_RES_ADDR_LINE_1']); }else{ $SIX_MRH_RES_ADDR_LINE_1 =''; }
	if(isset($_POST['SIX_MRH_RES_ADDR_LINE_2'])){ $SIX_MRH_RES_ADDR_LINE_2 = test_input_mem($_POST['SIX_MRH_RES_ADDR_LINE_2']); }else{ $SIX_MRH_RES_ADDR_LINE_2 =''; }
	if(isset($_POST['SIX_MRH_RES_ADDR_LINE_3'])){ $SIX_MRH_RES_ADDR_LINE_3 = test_input_mem($_POST['SIX_MRH_RES_ADDR_LINE_3']); }else{ $SIX_MRH_RES_ADDR_LINE_3 =''; }
	if(isset($_POST['SIX_MRH_RES_ADDR_LINE_4'])){ $SIX_MRH_RES_ADDR_LINE_4 = test_input_mem($_POST['SIX_MRH_RES_ADDR_LINE_4']); }else{ $SIX_MRH_RES_ADDR_LINE_4 =''; }
	if(isset($_POST['SIX_MRH_RES_CITY_CODE'])){ $SIX_MRH_RES_CITY_CODE = test_input_mem($_POST['SIX_MRH_RES_CITY_CODE']); }else{ $SIX_MRH_RES_CITY_CODE =''; }
	if(isset($_POST['SIX_MRH_RES_STATE_CODE'])){ $SIX_MRH_RES_STATE_CODE = test_input_mem($_POST['SIX_MRH_RES_STATE_CODE']); }else{ $SIX_MRH_RES_STATE_CODE =''; }
	if(isset($_POST['SIX_MRH_RES_ZIP_POSTAL_CODE'])){ $SIX_MRH_RES_ZIP_POSTAL_CODE = test_input_mem($_POST['SIX_MRH_RES_ZIP_POSTAL_CODE']); }else{ $SIX_MRH_RES_ZIP_POSTAL_CODE =''; }
	if(isset($_POST['SIX_MRH_RES_TEL'])){ $SIX_MRH_RES_TEL = test_input_mem($_POST['SIX_MRH_RES_TEL']); }else{ $SIX_MRH_RES_TEL =''; }
	if(isset($_POST['SIX_MRH_RES_COU_CODE'])){ $SIX_MRH_RES_COU_CODE = test_input_mem($_POST['SIX_MRH_RES_COU_CODE']); }else{ $SIX_MRH_RES_COU_CODE =''; }
	if(isset($_POST['SIX_MRH_RES_EMAIL'])){ $SIX_MRH_RES_EMAIL = test_input_mem($_POST['SIX_MRH_RES_EMAIL']); }else{ $SIX_MRH_RES_EMAIL =''; }
	if(isset($_POST['SIX_MRH_RES_MOBILE'])){ $SIX_MRH_RES_MOBILE = test_input_mem($_POST['SIX_MRH_RES_MOBILE']); }else{ $SIX_MRH_RES_MOBILE =''; }
	
	
	if(isset($_POST['SIX_TWO_MRH_RES_ADDR_LINE_1'])){ $SIX_TWO_MRH_RES_ADDR_LINE_1 = test_input_mem($_POST['SIX_TWO_MRH_RES_ADDR_LINE_1']); }else{ $SIX_TWO_MRH_RES_ADDR_LINE_1 =''; }
	if(isset($_POST['SIX_TWO_MRH_RES_ADDR_LINE_2'])){ $SIX_TWO_MRH_RES_ADDR_LINE_2 = test_input_mem($_POST['SIX_TWO_MRH_RES_ADDR_LINE_2']); }else{ $SIX_TWO_MRH_RES_ADDR_LINE_2 =''; }
	if(isset($_POST['SIX_TWO_MRH_RES_ADDR_LINE_3'])){ $SIX_TWO_MRH_RES_ADDR_LINE_3 = test_input_mem($_POST['SIX_TWO_MRH_RES_ADDR_LINE_3']); }else{ $SIX_TWO_MRH_RES_ADDR_LINE_3 =''; }
	if(isset($_POST['SIX_TWO_MRH_RES_ADDR_LINE_4'])){ $SIX_TWO_MRH_RES_ADDR_LINE_4 = test_input_mem($_POST['SIX_TWO_MRH_RES_ADDR_LINE_4']); }else{ $SIX_TWO_MRH_RES_ADDR_LINE_4 =''; }
	if(isset($_POST['SIX_TWO_MRH_RES_CITY_CODE'])){ $SIX_TWO_MRH_RES_CITY_CODE = test_input_mem($_POST['SIX_TWO_MRH_RES_CITY_CODE']); }else{ $SIX_TWO_MRH_RES_CITY_CODE =''; }
	if(isset($_POST['SIX_TWO_MRH_RES_STATE_CODE'])){ $SIX_TWO_MRH_RES_STATE_CODE = test_input_mem($_POST['SIX_TWO_MRH_RES_STATE_CODE']); }else{ $SIX_TWO_MRH_RES_STATE_CODE =''; }
	if(isset($_POST['SIX_TWO_MRH_RES_ZIP_POSTAL_CODE'])){ $SIX_TWO_MRH_RES_ZIP_POSTAL_CODE = test_input_mem($_POST['SIX_TWO_MRH_RES_ZIP_POSTAL_CODE']); }else{ $SIX_TWO_MRH_RES_ZIP_POSTAL_CODE =''; }
		
	if(isset($_POST['SIX_TWO_MRH_RES_TEL'])){ $SIX_TWO_MRH_RES_TEL = test_input_mem($_POST['SIX_TWO_MRH_RES_TEL']); }else
	{ 
	$SIX_TWO_MRH_RES_TEL =''; 
	}
	
	if(isset($_POST['SIX_TWO_MRH_RES_COU_CODE'])){ $SIX_TWO_MRH_RES_COU_CODE = test_input_mem($_POST['SIX_TWO_MRH_RES_COU_CODE']); }else{ $SIX_TWO_MRH_RES_COU_CODE =''; }	
	if(isset($_POST['SIX_TWO_MRH_RES_EMAIL'])){ $SIX_TWO_MRH_RES_EMAIL = test_input_mem($_POST['SIX_TWO_MRH_RES_EMAIL']); }else{ $SIX_TWO_MRH_RES_EMAIL =''; }
	if(isset($_POST['SIX_TWO_MRH_RES_MOBILE'])){ $SIX_TWO_MRH_RES_MOBILE = test_input_mem($_POST['SIX_TWO_MRH_RES_MOBILE']); }else{ $SIX_TWO_MRH_RES_MOBILE =''; }
	
	if(isset($_POST['SIX_THREE_MRH_RES_ADDR_LINE_1'])){ $SIX_THREE_MRH_RES_ADDR_LINE_1 = test_input_mem($_POST['SIX_THREE_MRH_RES_ADDR_LINE_1']); }else{ $SIX_THREE_MRH_RES_ADDR_LINE_1 =''; }
	if(isset($_POST['SIX_THREE_MRH_RES_ADDR_LINE_2'])){ $SIX_THREE_MRH_RES_ADDR_LINE_2 = test_input_mem($_POST['SIX_THREE_MRH_RES_ADDR_LINE_2']); }else{ $SIX_THREE_MRH_RES_ADDR_LINE_2 =''; }
	if(isset($_POST['SIX_THREE_MRH_RES_ADDR_LINE_3'])){ $SIX_THREE_MRH_RES_ADDR_LINE_3 = test_input_mem($_POST['SIX_THREE_MRH_RES_ADDR_LINE_3']); }else{ $SIX_THREE_MRH_RES_ADDR_LINE_3 =''; }
	if(isset($_POST['SIX_THREE_MRH_RES_ADDR_LINE_4'])){ $SIX_THREE_MRH_RES_ADDR_LINE_4 = test_input_mem($_POST['SIX_THREE_MRH_RES_ADDR_LINE_4']); }else{ $SIX_THREE_MRH_RES_ADDR_LINE_4 =''; }
	if(isset($_POST['SIX_THREE_MRH_RES_CITY_CODE'])){ $SIX_THREE_MRH_RES_CITY_CODE = test_input_mem($_POST['SIX_THREE_MRH_RES_CITY_CODE']); }else{ $SIX_THREE_MRH_RES_CITY_CODE =''; }
	if(isset($_POST['SIX_THREE_MRH_RES_STATE_CODE'])){ $SIX_THREE_MRH_RES_STATE_CODE = test_input_mem($_POST['SIX_THREE_MRH_RES_STATE_CODE']); }else{ $SIX_THREE_MRH_RES_STATE_CODE =''; }
	if(isset($_POST['SIX_THREE_MRH_RES_ZIP_POSTAL_CODE'])){ $SIX_THREE_MRH_RES_ZIP_POSTAL_CODE = test_input_mem($_POST['SIX_THREE_MRH_RES_ZIP_POSTAL_CODE']); }else{ $SIX_THREE_MRH_RES_ZIP_POSTAL_CODE =''; }
	if(isset($_POST['SIX_THREE_MRH_RES_TEL'])){ $SIX_THREE_MRH_RES_TEL = test_input_mem($_POST['SIX_THREE_MRH_RES_TEL']); }else{ $SIX_THREE_MRH_RES_TEL =''; }
	if(isset($_POST['SIX_THREE_MRH_RES_COU_CODE'])){ $SIX_THREE_MRH_RES_COU_CODE = test_input_mem($_POST['SIX_THREE_MRH_RES_COU_CODE']); }else{ $SIX_THREE_MRH_RES_COU_CODE =''; }
	if(isset($_POST['SIX_THREE_MRH_RES_EMAIL'])){ $SIX_THREE_MRH_RES_EMAIL = test_input_mem($_POST['SIX_THREE_MRH_RES_EMAIL']); }else{ $SIX_THREE_MRH_RES_EMAIL =''; }
	if(isset($_POST['SIX_THREE_MRH_RES_MOBILE'])){ $SIX_THREE_MRH_RES_MOBILE = test_input_mem($_POST['SIX_THREE_MRH_RES_MOBILE']); }else{ $SIX_THREE_MRH_RES_MOBILE =''; }
	
	if(isset($_POST['PLACE_OF_BRANCH_1'])){ $PLACE_OF_BRANCH_1 = test_input_mem($_POST['PLACE_OF_BRANCH_1']); }else{ $PLACE_OF_BRANCH_1 =''; }
	//if(isset($_POST['DATE_OF_BRANCH_1'])){ $DATE_OF_BRANCH_1 = test_input_mem($_POST['DATE_OF_BRANCH_1']); }else{ $DATE_OF_BRANCH_1 =''; }
	
	
	if(isset($_POST['DATE_OF_BRANCH_1']) && $_POST['DATE_OF_BRANCH_1'] != ''){ 
		$date_array=explode('-',$_POST['DATE_OF_BRANCH_1']);
		$DATE_OF_BRANCH_1=$date_array[2].'-'.$date_array[1].'-'.$date_array[0];
		//echo $CERTIFICATE_DATE_1;
		//die;
	}else{ 
		$DATE_OF_BRANCH_1 ='0000-00-00'; 
	}
	
	
	
	if(isset($_POST['PLACE_OF_BRANCH_2'])){ $PLACE_OF_BRANCH_2 = test_input_mem($_POST['PLACE_OF_BRANCH_2']); }else{ $PLACE_OF_BRANCH_2 =''; }
	//if(isset($_POST['DATE_OF_BRANCH_2'])){ $DATE_OF_BRANCH_2 = test_input_mem($_POST['DATE_OF_BRANCH_2']); }else{ $DATE_OF_BRANCH_2 =''; }
	
	if(isset($_POST['DATE_OF_BRANCH_2']) && $_POST['DATE_OF_BRANCH_2'] != ''){ 
		$date_array=explode('-',$_POST['DATE_OF_BRANCH_2']);
		$DATE_OF_BRANCH_2=$date_array[2].'-'.$date_array[1].'-'.$date_array[0];
		//echo $CERTIFICATE_DATE_1;
		//die;
	}else{ 
		$DATE_OF_BRANCH_2 ='0000-00-00'; 
	}
	
	
	if(isset($_POST['PLACE_OF_BRANCH_3'])){ $PLACE_OF_BRANCH_3 = test_input_mem($_POST['PLACE_OF_BRANCH_3']); }else{ $PLACE_OF_BRANCH_3 =''; }
	//if(isset($_POST['DATE_OF_BRANCH_3'])){ $DATE_OF_BRANCH_3 = test_input_mem($_POST['DATE_OF_BRANCH_3']); }else{ $DATE_OF_BRANCH_3 =''; }
	
	if(isset($_POST['DATE_OF_BRANCH_3']) && $_POST['DATE_OF_BRANCH_3'] != ''){ 
		$date_array=explode('-',$_POST['DATE_OF_BRANCH_3']);
		$DATE_OF_BRANCH_3=$date_array[2].'-'.$date_array[1].'-'.$date_array[0];
		//echo $CERTIFICATE_DATE_1;
		//die;
	}else{ 
		$DATE_OF_BRANCH_3 ='0000-00-00'; 
	}
	
	
	if(isset($_POST['PLACE_OF_BRANCH_4'])){ $PLACE_OF_BRANCH_4 = test_input_mem($_POST['PLACE_OF_BRANCH_4']); }else{ $PLACE_OF_BRANCH_4 =''; }
	//if(isset($_POST['DATE_OF_BRANCH_4'])){ $DATE_OF_BRANCH_4 = test_input_mem($_POST['DATE_OF_BRANCH_4']); }else{ $DATE_OF_BRANCH_4 =''; }
	
	if(isset($_POST['DATE_OF_BRANCH_4']) && $_POST['DATE_OF_BRANCH_4'] != ''){ 
		$date_array=explode('-',$_POST['DATE_OF_BRANCH_4']);
		$DATE_OF_BRANCH_4=$date_array[2].'-'.$date_array[1].'-'.$date_array[0];
		//echo $CERTIFICATE_DATE_1;
		//die;
	}else{ 
		$DATE_OF_BRANCH_4 ='0000-00-00'; 
	}
	
	
	if(isset($_POST['PLACE_OF_BRANCH_5'])){ $PLACE_OF_BRANCH_5 = test_input_mem($_POST['PLACE_OF_BRANCH_5']); }else{ $PLACE_OF_BRANCH_5 =''; }
	//if(isset($_POST['DATE_OF_BRANCH_5'])){ $DATE_OF_BRANCH_5 = test_input_mem($_POST['DATE_OF_BRANCH_5']); }else{ $DATE_OF_BRANCH_5 =''; }
	
	if(isset($_POST['DATE_OF_BRANCH_5']) && $_POST['DATE_OF_BRANCH_5'] != ''){ 
		$date_array=explode('-',$_POST['DATE_OF_BRANCH_5']);
		$DATE_OF_BRANCH_5=$date_array[2].'-'.$date_array[1].'-'.$date_array[0];
		//echo $CERTIFICATE_DATE_1;
		//die;
	}else{ 
		$DATE_OF_BRANCH_5 ='0000-00-00'; 
	}
	
	
	if(isset($_POST['BRANCH_OFFICE'])){ $BRANCH_OFFICE = test_input_mem($_POST['BRANCH_OFFICE']); }else{ $BRANCH_OFFICE =''; }
	if(isset($_POST['MEMBER_IN_CHARGE'])){ $MEMBER_IN_CHARGE = test_input_mem($_POST['MEMBER_IN_CHARGE']); }else{ $MEMBER_IN_CHARGE =''; }
	if(isset($_POST['MEMBER_NUMBER'])){ $MEMBER_NUMBER = test_input_mem($_POST['MEMBER_NUMBER']); }else{ $MEMBER_NUMBER =''; }
	if(isset($_POST['BRANCH_OFFICE_1'])){ $BRANCH_OFFICE_1 = test_input_mem($_POST['BRANCH_OFFICE_1']); }else{ $BRANCH_OFFICE_1 =''; }
	if(isset($_POST['MEMBER_IN_CHARGE_1'])){ $MEMBER_IN_CHARGE_1 = test_input_mem($_POST['MEMBER_IN_CHARGE_1']); }else{ $MEMBER_IN_CHARGE_1 =''; }
	
	if(isset($_POST['MEMBER_NUMBER_1'])){ $MEMBER_NUMBER_1 = test_input_mem($_POST['MEMBER_NUMBER_1']); }else{ $MEMBER_NUMBER_1 =''; }
	if(isset($_POST['BRANCH_OFFICE_2'])){ $BRANCH_OFFICE_2 = test_input_mem($_POST['BRANCH_OFFICE_2']); }else{ $BRANCH_OFFICE_2 =''; }
	if(isset($_POST['MEMBER_IN_CHARGE_2'])){ $MEMBER_IN_CHARGE_2 = test_input_mem($_POST['MEMBER_IN_CHARGE_2']); }else{ $MEMBER_IN_CHARGE_2 =''; }
	if(isset($_POST['MEMBER_NUMBER_2'])){ $MEMBER_NUMBER_2 = test_input_mem($_POST['MEMBER_NUMBER_2']); }else{ $MEMBER_NUMBER_2 =''; }
	if(isset($_POST['BRANCH_OFFICE_3'])){ $BRANCH_OFFICE_3 = test_input_mem($_POST['BRANCH_OFFICE_3']); }else{ $BRANCH_OFFICE_3 =''; }
	if(isset($_POST['MEMBER_IN_CHARGE_3'])){ $MEMBER_IN_CHARGE_3 = test_input_mem($_POST['MEMBER_IN_CHARGE_3']); }else{ $MEMBER_IN_CHARGE_3 =''; }
	if(isset($_POST['MEMBER_NUMBER_3'])){ $MEMBER_NUMBER_3 = test_input_mem($_POST['MEMBER_NUMBER_3']); }else{ $MEMBER_NUMBER_3 =''; }
	if(isset($_POST['BRANCH_OFFICE_4'])){ $BRANCH_OFFICE_4 = test_input_mem($_POST['BRANCH_OFFICE_4']); }else{ $BRANCH_OFFICE_4 =''; }
	if(isset($_POST['MEMBER_IN_CHARGE_4'])){ $MEMBER_IN_CHARGE_4 = test_input_mem($_POST['MEMBER_IN_CHARGE_4']); }else{ $STUD_PART3_ACCOUNTING_3 =''; }
	if(isset($_POST['MEMBER_NUMBER_4'])){ $MEMBER_NUMBER_4 = test_input_mem($_POST['MEMBER_NUMBER_4']); }else{ $MEMBER_NUMBER_4 =''; }
	
	if(isset($_POST['MRH_PRO_PARTNER'])){ $MRH_PRO_PARTNER = test_input_mem($_POST['MRH_PRO_PARTNER']); }else{ $MRH_PRO_PARTNER =''; }
	
	
	
	if(isset($_POST['PAR_PRO_PA_NAME'])){ $PAR_PRO_PA_NAME = test_input_mem($_POST['PAR_PRO_PA_NAME']); }else{ $PAR_PRO_PA_NAME =''; }
	if(isset($_POST['CA_FIRM_NAME'])){ $CA_FIRM_NAME = test_input_mem($_POST['CA_FIRM_NAME']); }else{ $CA_FIRM_NAME =''; }
	if(isset($_POST['CAPACITY_CONNECTED'])){ $CAPACITY_CONNECTED = test_input_mem($_POST['CAPACITY_CONNECTED']); }else{ $CAPACITY_CONNECTED =''; }
	if(isset($_POST['OCCUPATION_DETAILS'])){ $OCCUPATION_DETAILS = test_input_mem($_POST['OCCUPATION_DETAILS']); }else{ $OCCUPATION_DETAILS =''; }
	
	
	
	if(isset($_POST['PAR_PRO_PA_NAME_1'])){ $PAR_PRO_PA_NAME_1 = test_input_mem($_POST['PAR_PRO_PA_NAME_1']); }else{ $PAR_PRO_PA_NAME_1 =''; }
	if(isset($_POST['CA_FIRM_NAME_1'])){ $CA_FIRM_NAME_1 = test_input_mem($_POST['CA_FIRM_NAME_1']); }else{ $CA_FIRM_NAME_1 =''; }
	if(isset($_POST['CAPACITY_CONNECTED_1'])){ $CAPACITY_CONNECTED_1 = test_input_mem($_POST['CAPACITY_CONNECTED_1']); }else{ $CAPACITY_CONNECTED_1 =''; }
	if(isset($_POST['OCCUPATION_DETAILS_1'])){ $OCCUPATION_DETAILS_1 = test_input_mem($_POST['OCCUPATION_DETAILS_1']); }else{ $OCCUPATION_DETAILS_1 =''; }
	
	
	if(isset($_POST['PAR_PRO_PA_NAME_2'])){ $PAR_PRO_PA_NAME_2 = test_input_mem($_POST['PAR_PRO_PA_NAME_2']); }else{ $PAR_PRO_PA_NAME_2 =''; }
	if(isset($_POST['CA_FIRM_NAME_2'])){ $CA_FIRM_NAME_2 = test_input_mem($_POST['CA_FIRM_NAME_2']); }else{ $CA_FIRM_NAME_2 =''; }
	if(isset($_POST['CAPACITY_CONNECTED_2'])){ $CAPACITY_CONNECTED_2 = test_input_mem($_POST['CAPACITY_CONNECTED_2']); }else{ $CAPACITY_CONNECTED_2 =''; }
	if(isset($_POST['OCCUPATION_DETAILS_2'])){ $OCCUPATION_DETAILS_2 = test_input_mem($_POST['OCCUPATION_DETAILS_2']); }else{ $OCCUPATION_DETAILS_2 =''; }
	

	if(isset($_POST['PAR_PRO_PA_NAME_3'])){ $PAR_PRO_PA_NAME_3 = test_input_mem($_POST['PAR_PRO_PA_NAME_3']); }else{ $PAR_PRO_PA_NAME_3 =''; }
	if(isset($_POST['CA_FIRM_NAME_3'])){ $CA_FIRM_NAME_3 = test_input_mem($_POST['CA_FIRM_NAME_3']); }else{ $CA_FIRM_NAME_3 =''; }
	if(isset($_POST['CAPACITY_CONNECTED_3'])){ $CAPACITY_CONNECTED_3 = test_input_mem($_POST['CAPACITY_CONNECTED_3']); }else{ $CAPACITY_CONNECTED_3 =''; }
	if(isset($_POST['OCCUPATION_DETAILS_3'])){ $OCCUPATION_DETAILS_3 = test_input_mem($_POST['OCCUPATION_DETAILS_3']); }else{ $OCCUPATION_DETAILS_3 =''; }
	
	
	if(isset($_POST['FIRM_IND_PAR_NAME'])){ $FIRM_IND_PAR_NAME = test_input_mem($_POST['FIRM_IND_PAR_NAME']); }else{ $FIRM_IND_PAR_NAME =''; }
	
	
	if(isset($_POST['FIRM_MEM_NAME_LINE_1'])){ $FIRM_MEM_NAME_LINE_1 = test_input_mem($_POST['FIRM_MEM_NAME_LINE_1']); }else{ $FIRM_MEM_NAME_LINE_1 =''; }
	if(isset($_POST['FIRM_MEMBERSHIP_NUMBER_LINE_1'])){ $FIRM_MEMBERSHIP_NUMBER_LINE_1 = test_input_mem($_POST['FIRM_MEMBERSHIP_NUMBER_LINE_1']); }else{ $FIRM_MEMBERSHIP_NUMBER_LINE_1 =''; }
	
	if(isset($_POST['FIRM_MEM_NAME_LINE_2'])){ $FIRM_MEM_NAME_LINE_2 = test_input_mem($_POST['FIRM_MEM_NAME_LINE_2']); }else{ $FIRM_MEM_NAME_LINE_2 =''; }
	if(isset($_POST['FIRM_MEMBERSHIP_NUMBER_LINE_2'])){ $FIRM_MEMBERSHIP_NUMBER_LINE_2 = test_input_mem($_POST['FIRM_MEMBERSHIP_NUMBER_LINE_2']); }else{ $FIRM_MEMBERSHIP_NUMBER_LINE_2 =''; }
	
	if(isset($_POST['FIRM_MEM_NAME_LINE_3'])){ $FIRM_MEM_NAME_LINE_3 = test_input_mem($_POST['FIRM_MEM_NAME_LINE_3']); }else{ $FIRM_MEM_NAME_LINE_3 =''; }
	if(isset($_POST['FIRM_MEMBERSHIP_NUMBER_LINE_3'])){ $FIRM_MEMBERSHIP_NUMBER_LINE_3 = test_input_mem($_POST['FIRM_MEMBERSHIP_NUMBER_LINE_3']); }else{ $FIRM_MEMBERSHIP_NUMBER_LINE_3 =''; }
	
	if(isset($_POST['FIRM_MEM_NAME_LINE_4'])){ $FIRM_MEM_NAME_LINE_4 = test_input_mem($_POST['FIRM_MEM_NAME_LINE_4']); }else{ $FIRM_MEM_NAME_LINE_4 =''; }
	if(isset($_POST['FIRM_MEMBERSHIP_NUMBER_LINE_4'])){ $FIRM_MEMBERSHIP_NUMBER_LINE_4 = test_input_mem($_POST['FIRM_MEMBERSHIP_NUMBER_LINE_4']); }else{ $FIRM_MEMBERSHIP_NUMBER_LINE_4 =''; }
	
	if(isset($_POST['FIRM_MEM_NAME_LINE_5'])){ $FIRM_MEM_NAME_LINE_5 = test_input_mem($_POST['FIRM_MEM_NAME_LINE_5']); }else{ $FIRM_MEM_NAME_LINE_5 =''; }
	if(isset($_POST['FIRM_MEMBERSHIP_NUMBER_LINE_5'])){ $FIRM_MEMBERSHIP_NUMBER_LINE_5 = test_input_mem($_POST['FIRM_MEMBERSHIP_NUMBER_LINE_5']); }else{ $FIRM_MEMBERSHIP_NUMBER_LINE_5 =''; }
	
	
	if(isset($_POST['INS_MEM_NAME_LINE_1'])){ $INS_MEM_NAME_LINE_1 = test_input_mem($_POST['INS_MEM_NAME_LINE_1']); }else{ $INS_MEM_NAME_LINE_1 =''; }
	if(isset($_POST['INS_MEM_NUMBER_LINE_1'])){ $INS_MEM_NUMBER_LINE_1 = test_input_mem($_POST['INS_MEM_NUMBER_LINE_1']); }else{ $INS_MEM_NUMBER_LINE_1 =''; }
	//if(isset($_POST['INS_MEM_DOJ_LINE_1'])){ $INS_MEM_DOJ_LINE_1 = test_input_mem($_POST['INS_MEM_DOJ_LINE_1']); }else{ $INS_MEM_DOJ_LINE_1 =''; }
	
	if(isset($_POST['INS_MEM_DOJ_LINE_1']) && $_POST['INS_MEM_DOJ_LINE_1'] != ''){ 
		$date_array=explode('-',$_POST['INS_MEM_DOJ_LINE_1']);
		$INS_MEM_DOJ_LINE_1=$date_array[2].'-'.$date_array[1].'-'.$date_array[0];
		//echo $CERTIFICATE_DATE_1;
		//die;
	}else{ 
		$INS_MEM_DOJ_LINE_1 ='0000-00-00'; 
	}


	if(isset($_POST['INS_MEM_NAME_LINE_2'])){ $INS_MEM_NAME_LINE_2 = test_input_mem($_POST['INS_MEM_NAME_LINE_2']); }else{ $INS_MEM_NAME_LINE_2 =''; }
	if(isset($_POST['INS_MEM_NUMBER_LINE_2'])){ $INS_MEM_NUMBER_LINE_2 = test_input_mem($_POST['INS_MEM_NUMBER_LINE_2']); }else{ $INS_MEM_NUMBER_LINE_2 =''; }
	//if(isset($_POST['INS_MEM_DOJ_LINE_2'])){ $INS_MEM_DOJ_LINE_2 = test_input_mem($_POST['INS_MEM_DOJ_LINE_2']); }else{ $INS_MEM_DOJ_LINE_2 =''; }
	
	
	if(isset($_POST['INS_MEM_DOJ_LINE_2']) && $_POST['INS_MEM_DOJ_LINE_2'] != ''){ 
		$date_array=explode('-',$_POST['INS_MEM_DOJ_LINE_2']);
		$INS_MEM_DOJ_LINE_2=$date_array[2].'-'.$date_array[1].'-'.$date_array[0];
		//echo $CERTIFICATE_DATE_1;
		//die;
	}else{ 
		$INS_MEM_DOJ_LINE_2 ='0000-00-00'; 
	}
	
	
	if(isset($_POST['INS_MEM_NAME_LINE_3'])){ $INS_MEM_NAME_LINE_3 = test_input_mem($_POST['INS_MEM_NAME_LINE_3']); }else{ $INS_MEM_NAME_LINE_3 =''; }
	if(isset($_POST['INS_MEM_NUMBER_LINE_3'])){ $INS_MEM_NUMBER_LINE_3 = test_input_mem($_POST['INS_MEM_NUMBER_LINE_3']); }else{ $STUD_PART3_ACCOUNTING_3 =''; }
	//if(isset($_POST['INS_MEM_DOJ_LINE_3'])){ $INS_MEM_DOJ_LINE_3 = test_input_mem($_POST['INS_MEM_DOJ_LINE_3']); }else{ $INS_MEM_DOJ_LINE_3 =''; }
	
	if(isset($_POST['INS_MEM_DOJ_LINE_3']) && $_POST['INS_MEM_DOJ_LINE_3'] != ''){ 
		$date_array=explode('-',$_POST['INS_MEM_DOJ_LINE_3']);
		$INS_MEM_DOJ_LINE_3=$date_array[2].'-'.$date_array[1].'-'.$date_array[0];
		//echo $CERTIFICATE_DATE_1;
		//die;
	}else{ 
		$INS_MEM_DOJ_LINE_3 ='0000-00-00'; 
	}
	
	

	if(isset($_POST['INS_MEM_NAME_LINE_4'])){ $INS_MEM_NAME_LINE_4 = test_input_mem($_POST['INS_MEM_NAME_LINE_4']); }else{ $INS_MEM_NAME_LINE_4 =''; }
	if(isset($_POST['INS_MEM_NUMBER_LINE_4'])){ $INS_MEM_NUMBER_LINE_4 = test_input_mem($_POST['INS_MEM_NUMBER_LINE_4']); }else{ $INS_MEM_NUMBER_LINE_4 =''; }
	//if(isset($_POST['INS_MEM_DOJ_LINE_4'])){ $INS_MEM_DOJ_LINE_4 = test_input_mem($_POST['INS_MEM_DOJ_LINE_4']); }else{ $INS_MEM_DOJ_LINE_4 =''; }
	
	
	if(isset($_POST['INS_MEM_DOJ_LINE_4']) && $_POST['INS_MEM_DOJ_LINE_4'] != ''){ 
		$date_array=explode('-',$_POST['INS_MEM_DOJ_LINE_3']);
		$INS_MEM_DOJ_LINE_4=$date_array[2].'-'.$date_array[1].'-'.$date_array[0];
		//echo $CERTIFICATE_DATE_1;
		//die;
	}else{ 
		$INS_MEM_DOJ_LINE_4 ='0000-00-00'; 
	}
	
	
	if(isset($_POST['INS_MEM_NAME_LINE_5'])){ $INS_MEM_NAME_LINE_5 = test_input_mem($_POST['INS_MEM_NAME_LINE_5']); }else{ $INS_MEM_NAME_LINE_5 =''; }
	if(isset($_POST['INS_MEM_NUMBER_LINE_5'])){ $INS_MEM_NUMBER_LINE_5 = test_input_mem($_POST['INS_MEM_NUMBER_LINE_5']); }else{ $STUD_PART3_ACCOUNTING_3 =''; }
	//if(isset($_POST['INS_MEM_DOJ_LINE_5'])){ $INS_MEM_DOJ_LINE_5 = test_input_mem($_POST['INS_MEM_DOJ_LINE_5']); }else{ $INS_MEM_DOJ_LINE_5 =''; }
	
	if(isset($_POST['INS_MEM_DOJ_LINE_5']) && $_POST['INS_MEM_DOJ_LINE_5'] != ''){ 
		$date_array=explode('-',$_POST['INS_MEM_DOJ_LINE_5']);
		$INS_MEM_DOJ_LINE_5=$date_array[2].'-'.$date_array[1].'-'.$date_array[0];
		//echo $CERTIFICATE_DATE_1;
		//die;
	}else{ 
		$INS_MEM_DOJ_LINE_5 ='0000-00-00'; 
	}
	
	if(isset($_POST['PAID_ASSISTANT'])){ $PAID_ASSISTANT = test_input_mem($_POST['PAID_ASSISTANT']); }else{ $PAID_ASSISTANT =''; }
	
	
	
	if(isset($_POST['PAID_ASSISTANCE_NAME_LINE_1'])){ $PAID_ASSISTANCE_NAME_LINE_1 = test_input_mem($_POST['PAID_ASSISTANCE_NAME_LINE_1']); }else{ $PAID_ASSISTANCE_NAME_LINE_1 =''; }
	if(isset($_POST['ENGAGED_PAR_PRO_PA_NAME_LINE_1'])){ $ENGAGED_PAR_PRO_PA_NAME_LINE_1 = test_input_mem($_POST['ENGAGED_PAR_PRO_PA_NAME_LINE_1']); }else{ $ENGAGED_PAR_PRO_PA_NAME_LINE_1 =''; }
	if(isset($_POST['ENGAGED_CAP_CONN_LINE_1'])){ $ENGAGED_CAP_CONN_LINE_1 = test_input_mem($_POST['ENGAGED_CAP_CONN_LINE_1']); }else{ $ENGAGED_CAP_CONN_LINE_1 =''; }
	
	
	if(isset($_POST['PAID_ASSISTANCE_NAME_LINE_2'])){ $PAID_ASSISTANCE_NAME_LINE_2 = test_input_mem($_POST['PAID_ASSISTANCE_NAME_LINE_2']); }else{ $PAID_ASSISTANCE_NAME_LINE_2 =''; }
	if(isset($_POST['ENGAGED_PAR_PRO_PA_NAME_LINE_2'])){ $ENGAGED_PAR_PRO_PA_NAME_LINE_2 = test_input_mem($_POST['ENGAGED_PAR_PRO_PA_NAME_LINE_2']); }else{ $ENGAGED_PAR_PRO_PA_NAME_LINE_2 =''; }
	if(isset($_POST['ENGAGED_CAP_CONN_LINE_2'])){ $ENGAGED_CAP_CONN_LINE_2 = test_input_mem($_POST['ENGAGED_CAP_CONN_LINE_2']); }else{ $ENGAGED_CAP_CONN_LINE_2 =''; }
	

	if(isset($_POST['PAID_ASSISTANCE_NAME_LINE_3'])){ $PAID_ASSISTANCE_NAME_LINE_3 = test_input_mem($_POST['PAID_ASSISTANCE_NAME_LINE_3']); }else{ $PAID_ASSISTANCE_NAME_LINE_3 =''; }
	if(isset($_POST['ENGAGED_PAR_PRO_PA_NAME_LINE_3'])){ $ENGAGED_PAR_PRO_PA_NAME_LINE_3 = test_input_mem($_POST['ENGAGED_PAR_PRO_PA_NAME_LINE_3']); }else{ $ENGAGED_PAR_PRO_PA_NAME_LINE_3 =''; }
	if(isset($_POST['ENGAGED_CAP_CONN_LINE_3'])){ $ENGAGED_CAP_CONN_LINE_3 = test_input_mem($_POST['ENGAGED_CAP_CONN_LINE_3']); }else{ $ENGAGED_CAP_CONN_LINE_3 =''; }
	
	if(isset($_POST['PAID_ASSISTANCE_STATUS'])){ $PAID_ASSISTANCE_STATUS = test_input_mem($_POST['PAID_ASSISTANCE_STATUS']); }else{ $PAID_ASSISTANCE_STATUS =''; }
	
	
	if(isset($_POST['INDIVISUAL_PA_NAME_LINE_1'])){ $INDIVISUAL_PA_NAME_LINE_1 = test_input_mem($_POST['INDIVISUAL_PA_NAME_LINE_1']); }else{ $INDIVISUAL_PA_NAME_LINE_1 =''; }
	if(isset($_POST['INDIVISUAL_PA_MEM_NO_LINE_1'])){ $INDIVISUAL_PA_MEM_NO_LINE_1 = test_input_mem($_POST['INDIVISUAL_PA_MEM_NO_LINE_1']); }else{ $INDIVISUAL_PA_MEM_NO_LINE_1 =''; }
	
	if(isset($_POST['INDIVISUAL_PA_NAME_LINE_2'])){ $INDIVISUAL_PA_NAME_LINE_2 = test_input_mem($_POST['INDIVISUAL_PA_NAME_LINE_2']); }else{ $INDIVISUAL_PA_NAME_LINE_2 =''; }
	if(isset($_POST['INDIVISUAL_PA_MEM_NO_LINE_2'])){ $INDIVISUAL_PA_MEM_NO_LINE_2 = test_input_mem($_POST['INDIVISUAL_PA_MEM_NO_LINE_2']); }else{ $INDIVISUAL_PA_MEM_NO_LINE_2 =''; }
	
	if(isset($_POST['INDIVISUAL_PA_NAME_LINE_3'])){ $INDIVISUAL_PA_NAME_LINE_3 = test_input_mem($_POST['INDIVISUAL_PA_NAME_LINE_3']); }else{ $INDIVISUAL_PA_NAME_LINE_3 =''; }
	if(isset($_POST['INDIVISUAL_PA_MEM_NO_LINE_3'])){ $INDIVISUAL_PA_MEM_NO_LINE_3 = test_input_mem($_POST['INDIVISUAL_PA_MEM_NO_LINE_3']); }else{ $INDIVISUAL_PA_MEM_NO_LINE_3 =''; }
	
	if(isset($_POST['INDIVISUAL_PA_NAME_LINE_4'])){ $INDIVISUAL_PA_NAME_LINE_4 = test_input_mem($_POST['INDIVISUAL_PA_NAME_LINE_4']); }else{ $INDIVISUAL_PA_NAME_LINE_4 =''; }
	if(isset($_POST['INDIVISUAL_PA_MEM_NO_LINE_4'])){ $INDIVISUAL_PA_MEM_NO_LINE_4 = test_input_mem($_POST['INDIVISUAL_PA_MEM_NO_LINE_4']); }else{ $INDIVISUAL_PA_MEM_NO_LINE_4 =''; }
	
	if(isset($_POST['INDIVISUAL_PA_MEM_DATE'])){ $INDIVISUAL_PA_MEM_DATE = test_input_mem($_POST['INDIVISUAL_PA_MEM_DATE']); }else{ $INDIVISUAL_PA_MEM_DATE =''; }
	if(isset($_POST['INDIVISUAL_PA_MEM_PLACE'])){ $INDIVISUAL_PA_MEM_PLACE = test_input_mem($_POST['INDIVISUAL_PA_MEM_PLACE']); }else{ $INDIVISUAL_PA_MEM_PLACE =''; }
	
	
	
	
	if(isset($_POST['SIGNATURE_MM_NUMBER_1'])){ $SIGNATURE_MM_NUMBER_1 = test_input_mem($_POST['SIGNATURE_MM_NUMBER_1']); }else{ $SIGNATURE_MM_NUMBER_1 =''; }
	if(isset($_POST['SIGNATURE_MM_NUMBER_2'])){ $SIGNATURE_MM_NUMBER_2 = test_input_mem($_POST['SIGNATURE_MM_NUMBER_2']); }else{ $SIGNATURE_MM_NUMBER_2 =''; }
	if(isset($_POST['SIGNATURE_MM_NUMBER_3'])){ $SIGNATURE_MM_NUMBER_3 = test_input_mem($_POST['SIGNATURE_MM_NUMBER_3']); }else{ $SIGNATURE_MM_NUMBER_3 =''; }
	if(isset($_POST['SIGNATURE_MM_NUMBER_4'])){ $SIGNATURE_MM_NUMBER_4 = test_input_mem($_POST['SIGNATURE_MM_NUMBER_4']); }else{ $SIGNATURE_MM_NUMBER_4 =''; }
	if(isset($_POST['SIGNATURE_MM_NUMBER_5'])){ $SIGNATURE_MM_NUMBER_5 = test_input_mem($_POST['SIGNATURE_MM_NUMBER_5']); }else{ $SIGNATURE_MM_NUMBER_5 =''; }
	if(isset($_POST['SIGNATURE_MM_NUMBER_6'])){ $SIGNATURE_MM_NUMBER_6 = test_input_mem($_POST['SIGNATURE_MM_NUMBER_6']); }else{ $SIGNATURE_MM_NUMBER_6 =''; }
	
	//if(isset($_POST['STUD_PART1_VIDE_REGISTRATION'])){ $STUD_PART1_VIDE_REGISTRATION = test_input($_POST['STUD_PART1_VIDE_REGISTRATION']); }else{ $STUD_PART1_VIDE_REGISTRATION =''; }
	
	if(isset($_POST['MRH_MRN'])){ $MRH_MRN = test_input_mem($_POST['MRH_MRN']); }else{ $MRH_MRN =''; }	
	
	if(isset($_POST['FORM_NO'])){ $FORM_NO = test_input_mem($_POST['FORM_NO']); }else{ $FORM_NO =''; }
	
	if(isset($_POST['FORM_SAVE_STATUS'])){ $FORM_SAVE_STATUS = test_input_mem($_POST['FORM_SAVE_STATUS']); }else{ $FORM_SAVE_STATUS =''; }
	
	$fee = calculate_fee_form18_re($FORMATION_PROPRIETORY_DATE);
    $DELAY_FEE = $fee['TOTAL_AMT'];
    $TOTAL_AMT = $fee['TOTAL_AMT'];
//echo "<pre>";print_r($DELAY_FEE);die;
//ECHO $MRH_CONSTITUTION_FORM;DIE;
	if($FORM_NO == '')
	{
		
		insert_form18(
		//$STUD_PART1_MEMBER_NO,
		$MRH_CONSTITUTION_FORM,
		$TRADE_NAME,
						$PROPRIETOR_PARTNER,
						$PROPRIETOR_PARTNER_NAME,

					$PROPRIETOR_NAME_1,
					$MEMBERSHIP_NUMBER_1,
					$CERTIFICATE_DATE_1,

					$PARTNER_NAME_2,
					$MEMBERSHIP_NUMBER_2,
					$CERTIFICATE_DATE_2,

					$PARTNER_NAME_3,
					$MEMBERSHIP_NUMBER_3,
					$CERTIFICATE_DATE_3,

					$PARTNER_NAME_4,
					$MEMBERSHIP_NUMBER_4,
					$CERTIFICATE_DATE_4,

					$PARTNER_NAME_5,
					$MEMBERSHIP_NUMBER_5,
					$CERTIFICATE_DATE_5,

					$PARTNER_NAME_6,
					$MEMBERSHIP_NUMBER_6,
					$CERTIFICATE_DATE_6,


				$FORMATION_PROPRIETORY_DATE,
				$PRESENT_PARTNERSHIP_DATE,
				$PARTNERSHIP_STATUS,
				$PARTNER_SHARE_STATUS,


				$DATE_PARTICULARS_APPROVAL,
				$FIRM_NAME,


				$ADD_HEAD_OFFICE_LINE_1,
				$ADD_HEAD_OFFICE_LINE_2,
				$ADD_HEAD_OFFICE_LINE_3,
				$ADD_HEAD_OFFICE_LINE_4,
				$HEAD_OFFICE_CITY_CODE,
				$HEAD_OFFICE_STATE_CODE,
				$HEAD_OFFICE_ZIP_POSTAL_CODE,
				$HEAD_OFFICE_TEL,
				$HEAD_OFFICE_COU_CODE,
				$HEAD_OFFICE_EMAIL,
				$HEAD_OFFICE_MOBILE,


				$SIX_MRH_RES_ADDR_LINE_1,
				$SIX_MRH_RES_ADDR_LINE_2,
				$SIX_MRH_RES_ADDR_LINE_3,
				$SIX_MRH_RES_ADDR_LINE_4,
				$SIX_MRH_RES_CITY_CODE,
				$SIX_MRH_RES_STATE_CODE,
				$SIX_MRH_RES_ZIP_POSTAL_CODE,
				$SIX_MRH_RES_TEL,
				$SIX_MRH_RES_COU_CODE,
				$SIX_MRH_RES_EMAIL,
				$SIX_MRH_RES_MOBILE,


				$SIX_TWO_MRH_RES_ADDR_LINE_1,
				$SIX_TWO_MRH_RES_ADDR_LINE_2,
				$SIX_TWO_MRH_RES_ADDR_LINE_3,
				$SIX_TWO_MRH_RES_ADDR_LINE_4,
				$SIX_TWO_MRH_RES_CITY_CODE,
				$SIX_TWO_MRH_RES_STATE_CODE,
				$SIX_TWO_MRH_RES_ZIP_POSTAL_CODE,
				$SIX_TWO_MRH_RES_TEL,
				$SIX_TWO_MRH_RES_COU_CODE,
				$SIX_TWO_MRH_RES_EMAIL,
				$SIX_TWO_MRH_RES_MOBILE,


				$SIX_THREE_MRH_RES_ADDR_LINE_1,
				$SIX_THREE_MRH_RES_ADDR_LINE_2,
				$SIX_THREE_MRH_RES_ADDR_LINE_3,
				$SIX_THREE_MRH_RES_ADDR_LINE_4,
				$SIX_THREE_MRH_RES_CITY_CODE,
				$SIX_THREE_MRH_RES_STATE_CODE,
				$SIX_THREE_MRH_RES_ZIP_POSTAL_CODE,
				$SIX_THREE_MRH_RES_TEL,
				$SIX_THREE_MRH_RES_COU_CODE,
				$SIX_THREE_MRH_RES_EMAIL,
				$SIX_THREE_MRH_RES_MOBILE,


				$PLACE_OF_BRANCH_1,
				$DATE_OF_BRANCH_1,
				$PLACE_OF_BRANCH_2,
				$DATE_OF_BRANCH_2,
				$PLACE_OF_BRANCH_3,
				$DATE_OF_BRANCH_3,
				$PLACE_OF_BRANCH_4,
				$DATE_OF_BRANCH_4,
				$PLACE_OF_BRANCH_5,
				$DATE_OF_BRANCH_5,


				$BRANCH_OFFICE,
				$MEMBER_IN_CHARGE,
				$MEMBER_NUMBER,
				$BRANCH_OFFICE_1,
				$MEMBER_IN_CHARGE_1,
				$MEMBER_NUMBER_1,
				$BRANCH_OFFICE_2,
				$MEMBER_IN_CHARGE_2,
				$MEMBER_NUMBER_2,
				$BRANCH_OFFICE_3,
				$MEMBER_IN_CHARGE_3,
				$MEMBER_NUMBER_3,
				$BRANCH_OFFICE_4,
				$MEMBER_IN_CHARGE_4,
				$MEMBER_NUMBER_4,


				$MRH_PRO_PARTNER,



				$PAR_PRO_PA_NAME,
				$CA_FIRM_NAME,
				$CAPACITY_CONNECTED,
				$OCCUPATION_DETAILS,


				$PAR_PRO_PA_NAME_1,
				$CA_FIRM_NAME_1,
				$CAPACITY_CONNECTED_1,
				$OCCUPATION_DETAILS_1,


				$PAR_PRO_PA_NAME_2,
				$CA_FIRM_NAME_2,
				$CAPACITY_CONNECTED_2,
				$OCCUPATION_DETAILS_2,


				$PAR_PRO_PA_NAME_3,
				$CA_FIRM_NAME_3,
				$CAPACITY_CONNECTED_3,
				$OCCUPATION_DETAILS_3,

				$FIRM_IND_PAR_NAME,


				$FIRM_MEM_NAME_LINE_1,
				$FIRM_MEMBERSHIP_NUMBER_LINE_1,


				$FIRM_MEM_NAME_LINE_2,
				$FIRM_MEMBERSHIP_NUMBER_LINE_2,


				$FIRM_MEM_NAME_LINE_3,
				$FIRM_MEMBERSHIP_NUMBER_LINE_3,


				$FIRM_MEM_NAME_LINE_4,
				$FIRM_MEMBERSHIP_NUMBER_LINE_4,


				$FIRM_MEM_NAME_LINE_5,
				$FIRM_MEMBERSHIP_NUMBER_LINE_5,



				$INS_MEM_NAME_LINE_1,
				$INS_MEM_NUMBER_LINE_1 ,
				$INS_MEM_DOJ_LINE_1,


				$INS_MEM_NAME_LINE_2,
				$INS_MEM_NUMBER_LINE_2,
				$INS_MEM_DOJ_LINE_2,


				$INS_MEM_NAME_LINE_3,
				$INS_MEM_NUMBER_LINE_3,
				$INS_MEM_DOJ_LINE_3,


				$INS_MEM_NAME_LINE_4,
				$INS_MEM_NUMBER_LINE_4,
				$INS_MEM_DOJ_LINE_4,


				$INS_MEM_NAME_LINE_5,
				$INS_MEM_NUMBER_LINE_5,
				$INS_MEM_DOJ_LINE_5,


				$PAID_ASSISTANT,


				$PAID_ASSISTANCE_NAME_LINE_1,
				$ENGAGED_PAR_PRO_PA_NAME_LINE_1,
				$ENGAGED_CAP_CONN_LINE_1,


				$PAID_ASSISTANCE_NAME_LINE_2,
				$ENGAGED_PAR_PRO_PA_NAME_LINE_2,
				$ENGAGED_CAP_CONN_LINE_2,


				$PAID_ASSISTANCE_NAME_LINE_3,
				$ENGAGED_PAR_PRO_PA_NAME_LINE_3,
				$ENGAGED_CAP_CONN_LINE_3,


				$PAID_ASSISTANCE_STATUS,


				$INDIVISUAL_PA_NAME_LINE_1,
				$INDIVISUAL_PA_MEM_NO_LINE_1,


				$INDIVISUAL_PA_NAME_LINE_2,
				$INDIVISUAL_PA_MEM_NO_LINE_2,


				$INDIVISUAL_PA_NAME_LINE_3,
				$INDIVISUAL_PA_MEM_NO_LINE_3,


				$INDIVISUAL_PA_NAME_LINE_4,
				$INDIVISUAL_PA_MEM_NO_LINE_4,


				   $INDIVISUAL_PA_MEM_DATE,
				   $INDIVISUAL_PA_MEM_PLACE,



				$SIGNATURE_MM_NUMBER_1,
				$SIGNATURE_MM_NUMBER_2,
				$SIGNATURE_MM_NUMBER_3,
				$SIGNATURE_MM_NUMBER_4,
				$SIGNATURE_MM_NUMBER_5,
				$SIGNATURE_MM_NUMBER_6,
				
				
				//$STUD_PART1_VIDE_REGISTRATION,
				
				$MRH_MRN,
				$FORM_NO,
				$FORM_SAVE_STATUS,
				$DELAY_FEE,
				$TOTAL_AMT);

				//$MRH_MRN,
				//$FORM_NO,
				//$FORM_SAVE_STATUS,
				//$STUD_PART3_PLACE,
				//$STUD_PART3_DT);
	}
	else
	{
		//echo "update";
							update_form18(
							$MRH_CONSTITUTION_FORM,
							$TRADE_NAME,
							$PROPRIETOR_PARTNER,
							$PROPRIETOR_PARTNER_NAME,
							$PROPRIETOR_NAME_1,
							$MEMBERSHIP_NUMBER_1,
							$CERTIFICATE_DATE_1,
							$PARTNER_NAME_2,
							$MEMBERSHIP_NUMBER_2,
							$CERTIFICATE_DATE_2,
							$PARTNER_NAME_3,
							$MEMBERSHIP_NUMBER_3,
							$CERTIFICATE_DATE_3,
							$PARTNER_NAME_4,
							$MEMBERSHIP_NUMBER_4,
							$CERTIFICATE_DATE_4,
							$PARTNER_NAME_5,
							$MEMBERSHIP_NUMBER_5,
							$CERTIFICATE_DATE_5,
							$PARTNER_NAME_6,
							$MEMBERSHIP_NUMBER_6,
							$CERTIFICATE_DATE_6,
							$FORMATION_PROPRIETORY_DATE,
							$PRESENT_PARTNERSHIP_DATE,
							$PARTNERSHIP_STATUS,
							$PARTNER_SHARE_STATUS,
							$DATE_PARTICULARS_APPROVAL,
							$FIRM_NAME,
							$ADD_HEAD_OFFICE_LINE_1,
							$ADD_HEAD_OFFICE_LINE_2,
							$ADD_HEAD_OFFICE_LINE_3,
							$ADD_HEAD_OFFICE_LINE_4,
							$HEAD_OFFICE_CITY_CODE,
							$HEAD_OFFICE_STATE_CODE,
							$HEAD_OFFICE_ZIP_POSTAL_CODE,
							$HEAD_OFFICE_TEL,
							$HEAD_OFFICE_COU_CODE,
							$HEAD_OFFICE_EMAIL,
							$HEAD_OFFICE_MOBILE,
							$SIX_MRH_RES_ADDR_LINE_1,
							$SIX_MRH_RES_ADDR_LINE_2,
							$SIX_MRH_RES_ADDR_LINE_3,
							$SIX_MRH_RES_ADDR_LINE_4,
							$SIX_MRH_RES_CITY_CODE,
							$SIX_MRH_RES_STATE_CODE,
							$SIX_MRH_RES_ZIP_POSTAL_CODE,
							$SIX_MRH_RES_TEL,
							$SIX_MRH_RES_COU_CODE,
							$SIX_MRH_RES_EMAIL,
							$SIX_MRH_RES_MOBILE,
							$SIX_TWO_MRH_RES_ADDR_LINE_1,
							$SIX_TWO_MRH_RES_ADDR_LINE_2,
							$SIX_TWO_MRH_RES_ADDR_LINE_3,
							$SIX_TWO_MRH_RES_ADDR_LINE_4,
							$SIX_TWO_MRH_RES_CITY_CODE,
							$SIX_TWO_MRH_RES_STATE_CODE,
							$SIX_TWO_MRH_RES_ZIP_POSTAL_CODE,
							$SIX_TWO_MRH_RES_TEL,
							$SIX_TWO_MRH_RES_COU_CODE,
							$SIX_TWO_MRH_RES_EMAIL,
							$SIX_TWO_MRH_RES_MOBILE,
							$SIX_THREE_MRH_RES_ADDR_LINE_1,
							$SIX_THREE_MRH_RES_ADDR_LINE_2,
							$SIX_THREE_MRH_RES_ADDR_LINE_3,
							$SIX_THREE_MRH_RES_ADDR_LINE_4,
							$SIX_THREE_MRH_RES_CITY_CODE,
							$SIX_THREE_MRH_RES_STATE_CODE,
							$SIX_THREE_MRH_RES_ZIP_POSTAL_CODE,
							$SIX_THREE_MRH_RES_TEL,
							$SIX_THREE_MRH_RES_COU_CODE,
							$SIX_THREE_MRH_RES_EMAIL,
							$SIX_THREE_MRH_RES_MOBILE,
							$PLACE_OF_BRANCH_1,
							$DATE_OF_BRANCH_1,
							$PLACE_OF_BRANCH_2,
							$DATE_OF_BRANCH_2,
							$PLACE_OF_BRANCH_3,
							$DATE_OF_BRANCH_3,
							$PLACE_OF_BRANCH_4,
							$DATE_OF_BRANCH_4,
							$PLACE_OF_BRANCH_5,
							$DATE_OF_BRANCH_5,
							$BRANCH_OFFICE,
							$MEMBER_IN_CHARGE,
							$MEMBER_NUMBER,
							$BRANCH_OFFICE_1,
							$MEMBER_IN_CHARGE_1,
							$MEMBER_NUMBER_1,
							$BRANCH_OFFICE_2,
							$MEMBER_IN_CHARGE_2,
							$MEMBER_NUMBER_2,
							$BRANCH_OFFICE_3,
							$MEMBER_IN_CHARGE_3,
							$MEMBER_NUMBER_3,
							$BRANCH_OFFICE_4,
							$MEMBER_IN_CHARGE_4,
							$MEMBER_NUMBER_4,
							$MRH_PRO_PARTNER,
							$PAR_PRO_PA_NAME,
							$CA_FIRM_NAME,
							$CAPACITY_CONNECTED,
							$OCCUPATION_DETAILS,
							$PAR_PRO_PA_NAME_1,
							$CA_FIRM_NAME_1,
							$CAPACITY_CONNECTED_1,
							$OCCUPATION_DETAILS_1,
							$PAR_PRO_PA_NAME_2,
							$CA_FIRM_NAME_2,
							$CAPACITY_CONNECTED_2,
							$OCCUPATION_DETAILS_2,
							$PAR_PRO_PA_NAME_3,
							$CA_FIRM_NAME_3,
							$CAPACITY_CONNECTED_3,
							$OCCUPATION_DETAILS_3,
							$FIRM_IND_PAR_NAME,
							$FIRM_MEM_NAME_LINE_1,
							$FIRM_MEMBERSHIP_NUMBER_LINE_1,
							$FIRM_MEM_NAME_LINE_2,
							$FIRM_MEMBERSHIP_NUMBER_LINE_2,
							$FIRM_MEM_NAME_LINE_3,
							$FIRM_MEMBERSHIP_NUMBER_LINE_3,
							$FIRM_MEM_NAME_LINE_4,
							$FIRM_MEMBERSHIP_NUMBER_LINE_4,
							$FIRM_MEM_NAME_LINE_5,
							$FIRM_MEMBERSHIP_NUMBER_LINE_5,
							$INS_MEM_NAME_LINE_1,
							$INS_MEM_NUMBER_LINE_1 ,
							$INS_MEM_DOJ_LINE_1,
							$INS_MEM_NAME_LINE_2,
							$INS_MEM_NUMBER_LINE_2,
							$INS_MEM_DOJ_LINE_2,
							$INS_MEM_NAME_LINE_3,
							$INS_MEM_NUMBER_LINE_3,
							$INS_MEM_DOJ_LINE_3,
							$INS_MEM_NAME_LINE_4,
							$INS_MEM_NUMBER_LINE_4,
							$INS_MEM_DOJ_LINE_4,
							$INS_MEM_NAME_LINE_5,
							$INS_MEM_NUMBER_LINE_5,
							$INS_MEM_DOJ_LINE_5,
							$PAID_ASSISTANT,
							$PAID_ASSISTANCE_NAME_LINE_1,
							$ENGAGED_PAR_PRO_PA_NAME_LINE_1,
							$ENGAGED_CAP_CONN_LINE_1,
							$PAID_ASSISTANCE_NAME_LINE_2,
							$ENGAGED_PAR_PRO_PA_NAME_LINE_2,
							$ENGAGED_CAP_CONN_LINE_2,
							$PAID_ASSISTANCE_NAME_LINE_3,
							$ENGAGED_PAR_PRO_PA_NAME_LINE_3,
							$ENGAGED_CAP_CONN_LINE_3,
							$PAID_ASSISTANCE_STATUS,
							$INDIVISUAL_PA_NAME_LINE_1,
							$INDIVISUAL_PA_MEM_NO_LINE_1,
							$INDIVISUAL_PA_NAME_LINE_2,
							$INDIVISUAL_PA_MEM_NO_LINE_2,
							$INDIVISUAL_PA_NAME_LINE_3,
							$INDIVISUAL_PA_MEM_NO_LINE_3,
							$INDIVISUAL_PA_NAME_LINE_4,
							$INDIVISUAL_PA_MEM_NO_LINE_4,
						    $INDIVISUAL_PA_MEM_DATE,
						    $INDIVISUAL_PA_MEM_PLACE,
							$SIGNATURE_MM_NUMBER_1,
							$SIGNATURE_MM_NUMBER_2,
							$SIGNATURE_MM_NUMBER_3,
							$SIGNATURE_MM_NUMBER_4,
							$SIGNATURE_MM_NUMBER_5,
							$SIGNATURE_MM_NUMBER_6,
							$MRH_MRN,
							$FORM_NO,
							$FORM_SAVE_STATUS,
							$DELAY_FEE,
							$TOTAL_AMT);
//$MRH_MRN,
//$FORM_NO,
//$FORM_SAVE_STATUS,
//$STUD_PART3_PLACE,
//$STUD_PART3_DT);
	}

}

$user_data = get_user_data_form18(); // GET USER DATA FROM TRANSACTION TABLE 103
//echo "<pre>";print_r($user_data);die();
//$user_login_data = get_student_login_data();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ICAI FORM 18</title>

    <!-- Bootstrap -->
    <!--<link href="../css/bootstrap.min.css" rel="stylesheet">-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!--<script src="<?php echo $wwwroot;?>/student/js/form18.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <!-- <![endif]-->
<!--<link href="../style.css" rel="stylesheet" type="text/css">-->
<link href="style.css" rel="stylesheet" type="text/css">
<script type = "text/javascript" >
	function burstCache() {
        if (!navigator.onLine) {
            document.body.innerHTML = 'Loading...';
            window.location = 'ErrorHtml.html';
        }
    }
	
	//add by ritesh
	

function get_city_state(code){
	var state_code = $('#'+code+'_STATE_CODE').val();
	$.ajax({
		url:'ajax1.php',
		type: "POST",
		data:{state_code : state_code},
		dataType:'HTML',
		success: function(data){
			$('#'+code+'_CITY_CODE').html('');
			$('#'+code+'_CITY_CODE').append(data);
			
		},
		error: function(data){
			//alert(data);
		}
	});
}
</script>

<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script src="md5.js"></script>
<script src="base64_decode.js"></script>

<noscript><meta http-equiv="refresh" content="0;url=enablejava.html"></noscript>
 
 <meta http-equiv="X-FRAME-OPTIONS" content="DENY" >
 <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
 <meta http-equiv="Cache-control" content="private" />
 <meta http-equiv="Cache-Control" content="post-check=0,pre-check=0" />
 <meta http-equiv="Pragma" content="no-cache" />
 <meta http-equiv="Expires" content="0" />
 
   <link rel="shortcut icon" href="http://getuikit.com/docs/images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon-precomposed" href="http://getuikit.com/docs/images/apple-touch-icon.png">
	<link id="data-uikit-theme" rel="stylesheet" href="<?php echo $wwwroot;?>/js/uikit.docs.min.css">
       

		
  </head>
  <body>
    
    
    <div class="container">
    
    
    <div class="row" style="margin-bottom:20px;margin-top:20px;">
 <!-- <div class="col-md-6"><img src="../images/mainlogo.png"></div>-->
   <div class="col-md-6"><img src="images/mainlogo.png"></div>
  <div class="col-md-6" style="text-align:right; padding-top:40px;"><a class="btn btn-primary" href="<?php echo $wwwroot;?>/dasboard.php" role="button">DASHBOARD</a></div>
</div>
    
<div style="text-align:center;font-weight:bold;font-size:20px;">Form "18"</div>
<div  style="text-align:center;font-weight:bold;font-size:12px;">[See Regulation 190]</div>
<div style="text-align:center;font-weight:bold;font-size:20px;">The Institute of Chartered Accountants of India</div>
<div style="text-align:center;font-weight:bold;font-size:12px;">Particulars of Offices and Firm</div>
	

<div> &nbsp; </div>	<div> &nbsp; </div>	
<form name='form18' id='form18' method="post" action="">
<input type="hidden" name="mem_form" id="mem_form" value="">
<input type="hidden" name="hndRandomFlag"  id="hndRandomFlag" value="<?php echo getRandom(); ?>" />
<input type="hidden" name="FORM_SAVE_STATUS" id="FORM_SAVE_STATUS" value="">
<input type="hidden" name="MRH_MRN" id="MRH_MRN" value="<?php echo $MRH_MRN; ?>">
<input type="hidden" name="FORM_NO" id="FORM_NO" value="<?php echo $user_data['FORM_NO']; ?>">
<!---------------------------->
	<div class="panel panel-default">
			<div class="panel-heading"><strong>Form Type</strong></div>
		<div class="panel-body">								
			<div class="row margin-15px"> 					
				<div class="col-md-2">Constitution Form </div>	 
				<div class="col-md-1">
					<input type="radio" name="MRH_CONSTITUTION_FORM" id="MRH_CONSTITUTION_FORM_1" 
				value="Constitution Form" <?php if($form18_type =='Constitution') { echo "checked";} ?> onclick="return editablecheck();" disabled></div> 
				<div class="col-md-2">Reconstitution Form</div>	 
				<div class="col-md-1">
					<input type="radio" name="MRH_CONSTITUTION_FORM" id="MRH_RECONSTITUTION_FORM_1" 
				value="Reconstitution Form" <?php if($form18_type =='Re-Constitution') { echo "checked";} ?> onclick="return disablecheck();" disabled></div> 
			</div>
		
			<div class="clearfix"></div>
		</div>
	
		
	</div>
<!---------------------style="display: none;"------->


<div class="panel panel-default">
	<div class="panel-heading"><strong>1. Name in firm / trade name of Chartered Accountants in practice</strong></div>
	<div class="panel-body">
		<div class="col-md-12 margin-15px">					  			
			<div class="form-group">   
				<input type="text" name="TRADE_NAME" id="TRADE_NAME" class="form-control"  value="<?php if(isset($user_data['TRADE_NAME'])){ echo $user_data['TRADE_NAME']; }?>" placeholder="Text input" >
			</div>
		</div>  
	</div> 
</div>

<div class="panel panel-default">
	<div class="panel-heading"><strong>2. Name(s) of the proprietor / partner of firm with his / their membership number(s)</strong></div>
	<div class="panel-body">
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">
				Proprietor
					<input type="radio" name="PROPRIETOR_PARTNER" id="PROPRIETOR_PARTNER_1" value="Proprietor"  <?php 
					if(isset($user_data['PROPRIETOR_PARTNER']) && $user_data['PROPRIETOR_PARTNER']=='Proprietor' ){ echo "checked"; }?> >
				
				Partner
					<input type="radio" name="PROPRIETOR_PARTNER" id="PROPRIETOR_PARTNER_2" value="Partner"  <?php 
					if(isset($user_data['PROPRIETOR_PARTNER']) && $user_data['PROPRIETOR_PARTNER']=='Partner' ){ echo "checked"; }?> >
				
			</div>
			<div class="col-md-3">
				<input type="text" name="PROPRIETOR_PARTNER_NAME" id="PROPRIETOR_PARTNER_NAME" class="form-control" placeholder="Text input"   value="<?php if(isset($user_data['PROPRIETOR_PARTNER_NAME'])){ echo $user_data['PROPRIETOR_PARTNER_NAME']; }?>">
			</div>
			<div class="col-md-3">
				Nos.			
			</div>		
		</div>				  
		
	<hr>

	(i)
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Name of Proprietor/Partner(s)</div>
			<div class="col-md-9">
				<input type="text" name="PROPRIETOR_NAME_1" id="PROPRIETOR_NAME_1" class="form-control" placeholder="Text input"   value="<?php if(isset($user_data['PROPRIETOR_NAME_1'])){ echo $user_data['PROPRIETOR_NAME_1']; }?>" >
			</div>
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Membership Number</div>
			<div class="col-md-9">
				<input type="text" name="MEMBERSHIP_NUMBER_1" id="MEMBERSHIP_NUMBER_1" class="form-control" placeholder="Text input"  value="<?php if(isset($user_data['MEMBERSHIP_NUMBER_1'])){ echo $user_data['MEMBERSHIP_NUMBER_1']; }?>" >
			</div>
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Date from which Certificate of Practice held</div>
			<div class="col-md-9"><input type="text" name="CERTIFICATE_DATE_1" id="CERTIFICATE_DATE_1" onchange="datecalculation(this.id)" class="form-control "  data-uk-datepicker="{format:'DD-MM-YYYY', maxDate: '+0'}" placeholder="DD-MM-YYYY" readonly value="<?php if(isset($user_data['CERTIFICATE_DATE_1'])){ echo dd_mm_yyyy_member($user_data['CERTIFICATE_DATE_1']); }?>">
			</div>
		</div>
 
	
	<hr>

	(ii) 
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Name of Partner</div>
			<div class="col-md-9">
				<input type="text" name="PARTNER_NAME_2" id="PARTNER_NAME_2" class="form-control" placeholder="Text input" 
				value="<?php if(isset($user_data['PARTNER_NAME_2'])){ echo $user_data['PARTNER_NAME_2']; }?>">
			</div>
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Membership Number</div>
			<div class="col-md-9">
				<input type="text" name="MEMBERSHIP_NUMBER_2" id="MEMBERSHIP_NUMBER_2" class="form-control" placeholder="Text input"   value="<?php if(isset($user_data['MEMBERSHIP_NUMBER_2'])){ echo $user_data['MEMBERSHIP_NUMBER_2']; }?>">
			</div>
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Date from which Certificate of Practice held</div>
			<!--MRH_MEMBERSHIP_NO_II-->
			<div class="col-md-9"><input type="text" name="CERTIFICATE_DATE_2" id="CERTIFICATE_DATE_2"  onchange="datecalculation(this.id)" class="form-control "  data-uk-datepicker="{format:'DD-MM-YYYY', maxDate: '+0'}" placeholder="DD-MM-YYYY" readonly  value="<?php if(isset($user_data['CERTIFICATE_DATE_2'])){ echo dd_mm_yyyy_member($user_data['CERTIFICATE_DATE_2']); }?>">
			</div>
		</div>

	<hr>

	(iii) 
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Name of Partner</div>
			<div class="col-md-9">
				<input type="text" name="PARTNER_NAME_3" id="PARTNER_NAME_3" class="form-control" placeholder="Text input"   value="<?php if(isset($user_data['PARTNER_NAME_3'])){ echo $user_data['PARTNER_NAME_3']; }?>">
			</div>
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Membership Number</div>
			<div class="col-md-9">
				<input type="text" name="MEMBERSHIP_NUMBER_3" id="MEMBERSHIP_NUMBER_3" class="form-control" placeholder="Text input"   value="<?php if(isset($user_data['MEMBERSHIP_NUMBER_3'])){ echo $user_data['MEMBERSHIP_NUMBER_3']; }?>">
			</div>
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Date from which Certificate of Practice held</div>
			<div class="col-md-9"><input type="text" name="CERTIFICATE_DATE_3" id="CERTIFICATE_DATE_3" onchange="datecalculation(this.id)" class="form-control "  data-uk-datepicker="{format:'DD-MM-YYYY', maxDate: '+0'}" placeholder="DD-MM-YYYY"  readonly value="<?php if(isset($user_data['CERTIFICATE_DATE_3'])){ echo dd_mm_yyyy_member($user_data['CERTIFICATE_DATE_3']); }?>">
			</div>
		</div>


	
	<hr>

	(iv) 
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Name of Partner</div>
			<div class="col-md-9">
				<input type="text" name="PARTNER_NAME_4" id="PARTNER_NAME_4" class="form-control" placeholder="Text input"   value="<?php if(isset($user_data['PARTNER_NAME_4'])){ echo $user_data['PARTNER_NAME_4']; }?>">
			</div>
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Membership Number</div>
			<div class="col-md-9">
				<input type="text" name="MEMBERSHIP_NUMBER_4" id="MEMBERSHIP_NUMBER_4" class="form-control" placeholder="Text input"   value="<?php if(isset($user_data['MEMBERSHIP_NUMBER_4'])){ echo $user_data['MEMBERSHIP_NUMBER_4']; }?>">
			</div>
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Date from which Certificate of Practice held</div>
			<div class="col-md-9"><input type="text" name="CERTIFICATE_DATE_4" id="CERTIFICATE_DATE_4" onchange="datecalculation(this.id)" class="form-control "  data-uk-datepicker="{format:'DD-MM-YYYY', maxDate: '+0'}" placeholder="DD-MM-YYYY"  readonly value="<?php if(isset($user_data['CERTIFICATE_DATE_4'])){ echo dd_mm_yyyy_member($user_data['CERTIFICATE_DATE_4']); }?>">
			</div>
		</div>


	
	<hr>

	(v) 
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Name of Partner</div>
			<div class="col-md-9">
				<input type="text" name="PARTNER_NAME_5" id="PARTNER_NAME_5" class="form-control" placeholder="Text input"   value="<?php if(isset($user_data['PARTNER_NAME_5'])){ echo $user_data['PARTNER_NAME_5']; }?>">
			</div>
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Membership Number</div>
			<div class="col-md-9">
				<input type="text" name="MEMBERSHIP_NUMBER_5" id="MEMBERSHIP_NUMBER_5" class="form-control" placeholder="Text input"   value="<?php if(isset($user_data['MEMBERSHIP_NUMBER_5'])){ echo $user_data['MEMBERSHIP_NUMBER_5']; }?>">
			</div>
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Date from which Certificate of Practice held</div>
			<div class="col-md-9"><input type="text" name="CERTIFICATE_DATE_5" id="CERTIFICATE_DATE_5" onchange="datecalculation(this.id)" class="form-control "  data-uk-datepicker="{format:'DD-MM-YYYY', maxDate: '+0'}"  placeholder="DD-MM-YYYY"  readonly value="<?php if(isset($user_data['CERTIFICATE_DATE_5'])){ echo dd_mm_yyyy_member($user_data['CERTIFICATE_DATE_5']); }?>">
			</div>
		</div>


	
	<hr>

	(vi) 
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Name of Partner</div>
			<div class="col-md-9">
				<input type="text" name="PARTNER_NAME_6" id="PARTNER_NAME_6" class="form-control" placeholder="Text input"   value="<?php if(isset($user_data['PARTNER_NAME_6'])){ echo $user_data['PARTNER_NAME_6']; }?>">
			</div>
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Membership Number</div>
			<div class="col-md-9">
				<input type="text" name="MEMBERSHIP_NUMBER_6" id="MEMBERSHIP_NUMBER_6" class="form-control" placeholder="Text input"   value="<?php if(isset($user_data['MEMBERSHIP_NUMBER_6'])){ echo $user_data['MEMBERSHIP_NUMBER_6']; }?>">
			</div>
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Date from which Certificate of Practice held</div>
			<div class="col-md-9"><input type="text" name="CERTIFICATE_DATE_6" id="CERTIFICATE_DATE_6" onchange="datecalculation(this.id)" class="form-control "  data-uk-datepicker="{format:'DD-MM-YYYY', maxDate: '+0'}"  placeholder="DD-MM-YYYY"  readonly value="<?php if(isset($user_data['CERTIFICATE_DATE_6'])){ echo dd_mm_yyyy_member($user_data['CERTIFICATE_DATE_6']); }?>">
			</div>
		</div>
		
		
		<div id="TextBoxesGroup"></div>
		
		
		<div class="col-md-12 margin-15px">
			<input type='button' class="btn btn-success waves-effect waves-light" value='Add More' id='addButton'>
			<input type='button' class="btn btn-danger waves-effect waves-light" value='Remove Last' id='removeButton'>
		</div>

      <div class="clearfix"></div>
	  
  </div>
</div>    



<div class="panel panel-default">
  <div class="panel-heading"><strong>3. </strong></div>
  <div class="panel-body">
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">(a) Date of formation of Proprietory / Partnership firm</div>
			<div class="col-md-6"><input type="text" placeholder="DD-MM-YYYY" data-uk-datepicker="{format:'DD-MM-YYYY', maxDate: '+0'}" name="FORMATION_PROPRIETORY_DATE" id="FORMATION_PROPRIETORY_DATE" class="form-control" placeholder="DD-MM-YYYY" value="<?php 
			if(isset($user_data['FORMATION_PROPRIETORY_DATE'])){ echo dd_mm_yyyy_member($user_data['FORMATION_PROPRIETORY_DATE']); }?>">
			</div>
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">(b) Date on which the present partnership was entered into</div>
			<div class="col-md-6"><input type="text" placeholder="DD-MM-YYYY" data-uk-datepicker="{format:'DD-MM-YYYY', maxDate: '+0'}" name="PRESENT_PARTNERSHIP_DATE" id="PRESENT_PARTNERSHIP_DATE" class="form-control"  placeholder="Text input"  value="<?php 
			if(isset($user_data['PRESENT_PARTNERSHIP_DATE'])){ echo dd_mm_yyyy_member($user_data['PRESENT_PARTNERSHIP_DATE']); }?>">
			</div>
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">(c) Whether the partnership is supported by a Deed?</div>
			<div class="col-md-6">
				<input type="radio" name="PARTNERSHIP_STATUS" id="PARTNERSHIP_STATUS_1" value="Yes"   <?php //if(isset($user_data['PARTNERSHIP_STATUS']) && $user_data['PARTNERSHIP_STATUS']=='IND'){  echo"checked";  }
				if(isset($user_data['PARTNERSHIP_STATUS']) && $user_data['PARTNERSHIP_STATUS']=='Yes' ){ echo "checked"; }
				?> >
				Yes							
				<input type="radio" name="PARTNERSHIP_STATUS" id="PARTNERSHIP_STATUS_2" value="No"   <?php 
				//if(isset($user_data['PARTNERSHIP_STATUS']) && $user_data['PARTNERSHIP_STATUS']=='IND'){  echo"checked";  }
				if(isset($user_data['PARTNERSHIP_STATUS']) && $user_data['PARTNERSHIP_STATUS']=='No' ){ echo "checked"; }
				?> >
				No
			</div>
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">(d) Whether all the partners are sharing the profile of the firm </div>
			<div class="col-md-6">				
				<input type="radio" name="PARTNER_SHARE_STATUS" id="PARTNER_SHARE_STATUS_1" value="Yes"   <?php 
				//if(isset($user_data['PARTNER_SHARE_STATUS']) && $user_data['PARTNER_SHARE_STATUS']=='IND'){  echo"checked";  }
				if(isset($user_data['PARTNER_SHARE_STATUS']) && $user_data['PARTNER_SHARE_STATUS']=='Yes' ){ echo "checked"; }
				?> >
				Yes							
				<input type="radio" name="PARTNER_SHARE_STATUS" id="PARTNER_SHARE_STATUS_2" value="No"   <?php 
				//if(isset($user_data['PARTNER_SHARE_STATUS']) && $user_data['PARTNER_SHARE_STATUS']=='IND'){  echo"checked";  }
				if(isset($user_data['PARTNER_SHARE_STATUS']) && $user_data['PARTNER_SHARE_STATUS']=='No' ){ echo "checked"; }
				?> >
				No
				
			</div>
		</div>

  
  
  <div class="clearfix"></div>
  </div>
</div> 



<div class="panel panel-default">
  <div class="panel-heading"><strong>4. Date and particulars of approval of trade/firm name obtained from the Council ( applicable to cases where the firm was started on or before 1.1.1983 )</strong></div>
  <div class="panel-body">
		<div class="col-md-12">
			<div class="col-md-3 margin-15px">
				<input type="text" name="DATE_PARTICULARS_APPROVAL" id="DATE_PARTICULARS_APPROVAL" class="form-control" placeholder="Text input"   value="<?php if(isset($user_data['DATE_PARTICULARS_APPROVAL'])){ echo $user_data['DATE_PARTICULARS_APPROVAL']; }?>">
			</div>
		</div>
  
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">
				<input type="text" name="FIRM_NAME" id="FIRM_NAME" class="form-control" placeholder="Text input"   value="<?php 
				if(isset($user_data['FIRM_NAME'])){ echo $user_data['FIRM_NAME']; }?>">(Approval No.)
			</div>
		</div>
  <div class="clearfix"></div>
  </div>
</div> 


  <div class="panel panel-default">
  <div class="panel-heading"><strong>5. Address of the Head Office of the firm/Chartered Accountant in practice  <span style="float:right" ><a href='javascript:void(0);' onclick="return edit_col8();">  </a></span></strong>     </div>
  <div class="panel-body">
  <div class="col-md-12 margin-15px"> 
  <input type="hidden" name="edit_address" id="edit_address" value="0">
  <div class="col-md-2">Address </div>	 
  <div class="col-md-10"><input type="text" name="ADD_HEAD_OFFICE_LINE_1" id="ADD_HEAD_OFFICE_LINE_1" class="form-control" placeholder="Text input"  value="<?php if(isset($user_data['ADD_HEAD_OFFICE_LINE_1'])){ echo $user_data['ADD_HEAD_OFFICE_LINE_1']; }?>"></div> 
  </div>
  <div class="col-md-12 margin-15px">
  <div class="col-md-2">Address 2</div>
  <div class="col-md-10"><input type="text" name="ADD_HEAD_OFFICE_LINE_2" id="ADD_HEAD_OFFICE_LINE_2" class="form-control" placeholder="Text input"   value="<?php if(isset($user_data['ADD_HEAD_OFFICE_LINE_2'])){ echo $user_data['ADD_HEAD_OFFICE_LINE_2']; }?>"></div> 
  </div>
  <div class="col-md-12 margin-15px">
  <div class="col-md-2">Address 3</div>
  <div class="col-md-10"><input type="text" name="ADD_HEAD_OFFICE_LINE_3" id="ADD_HEAD_OFFICE_LINE_3" class="form-control" placeholder="Text input"   value="<?php if(isset($user_data['ADD_HEAD_OFFICE_LINE_3'])){ echo $user_data['ADD_HEAD_OFFICE_LINE_3']; }?>"></div> 
  </div>
  <div class="col-md-12 margin-15px">
  <div class="col-md-2">Address 4</div>
  <div class="col-md-10"><input type="text" name="ADD_HEAD_OFFICE_LINE_4" id="ADD_HEAD_OFFICE_LINE_4" class="form-control" placeholder="Text input"   value="<?php if(isset($user_data['ADD_HEAD_OFFICE_LINE_4'])){ echo $user_data['ADD_HEAD_OFFICE_LINE_4']; }?>"></div>   
  </div>
  
  
  <div class="col-md-12 margin-15px">
  
  
  
  <div class="col-md-6"><div class="col-md-4">State Code</div>
  <div class="col-md-6">
  
  <select name="HEAD_OFFICE_STATE_CODE" id="HEAD_OFFICE_STATE_CODE"  class="form-control"><?php print_r(show_all_state($state_code));?></select>
  <!--
  <input type="text" name="MRH_RES_STATE_CODE" id="MRH_RES_STATE_CODE" class="form-control" placeholder="Text input"  readonly value="<?php if(isset($user_data['HEAD_OFFICE_STATE_CODE'])){ 
    $state_code = $user_data['HEAD_OFFICE_STATE_CODE']; 
  $state_data = get_state_name($state_code);
  echo $state_data['state_name'];
  }?>">--></div> </div>
  
  
  
  
  

  <?php if(isset($user_data['MRH_RES_STATE_CODE'])){ 
    $state_code = $user_data['MRH_RES_STATE_CODE']; }?>
  <div class="col-md-2">City</div>
  <div class="col-md-3"><?php if(isset($user_data['MRH_RES_CITY_CODE'])){ 
  $city_code=$user_data['MRH_RES_CITY_CODE']; }else{ $city_code=''; }?>
  <select name="HEAD_OFFICE_CITY_CODE" id="HEAD_OFFICE_CITY_CODE"  class="form-control" ><?php   print_r(show_all_city($city_code,$state_code));?></select>
 <!-- <input type="text" name="MRH_RES_CITY_CODE" id="MRH_RES_CITY_CODE" class="form-control" placeholder="Text input"  readonly value="<?php if(isset($user_data['HEAD_OFFICE_CITY_CODE'])){ 
    $city_code=$user_data['HEAD_OFFICE_CITY_CODE'];
  $city_data = get_city_name($city_code);
   echo $city_data['city_name']; } ?>">-->
  </div>  

  
</div>

  
  <div class="col-md-12 margin-15px">

  <div class="col-md-2">Pin</div>
  <div class="col-md-3"><input type="text" name="HEAD_OFFICE_ZIP_POSTAL_CODE" id="HEAD_OFFICE_ZIP_POSTAL_CODE" class="form-control" placeholder="Text input"  value="<?php if(isset($user_data['HEAD_OFFICE_ZIP_POSTAL_CODE'])){ echo $user_data['HEAD_OFFICE_ZIP_POSTAL_CODE']; }?>"></div>  
 <div class="col-md-6">
 <div class="col-md-4">Phone No.</div>
  <div class="col-md-6" ><input type="text" name="HEAD_OFFICE_TEL" id="HEAD_OFFICE_TEL" class="form-control" placeholder="Text input"  value="<?php if(isset($user_data['HEAD_OFFICE_TEL'])){ echo $user_data['HEAD_OFFICE_TEL']; }?>"></div> </div>
</div>
  
  
  <div class="col-md-12 margin-15px">
  <div class="col-md-2">Country</div>
  <div class="col-md-3"><!--<input type="text" name="MRH_RES_COU_CODE" id="MRH_RES_COU_CODE" class="form-control" placeholder="Text input" readonly value="<?php //if(isset($user_data['MRH_RES_COU_CODE'])){ echo $user_data['MRH_RES_COU_CODE']; }?>">-->
  
  <select name="HEAD_OFFICE_COU_CODE" id="HEAD_OFFICE_COU_CODE" disabled class="form-control" onchange="return show_sub(this);" ><?php print_r(show_all_country($country_code));?></select>
  <!--<input type="text" name="MRH_RES_COU_CODE" id="MRH_RES_COU_CODE" class="form-control" placeholder="Text input"  readonly value="<?php /*if(isset($user_data['MRH_RES_COU_CODE'])){ 
    $country_code = $user_data['MRH_RES_COU_CODE']; 
  $country_data = get_country_name($country_code);
  echo $country_data['cou_name'];
  } */?>">-->
  
  </div> 
 
</div>
  

<div class="col-md-12 margin-15px">
  
  <div class="col-md-2">Email Id</div>
  <div class="col-md-10"><input type="text" name="HEAD_OFFICE_EMAIL" id="HEAD_OFFICE_EMAIL" class="form-control" placeholder="Text input"  value="<?php if(isset($user_data['HEAD_OFFICE_EMAIL'])){ echo $user_data['HEAD_OFFICE_EMAIL']; }?>"></div>  
</div>  
  


<div class="col-md-12 margin-15px">
  
  <div class="col-md-2">Mobile No.</div>
  <div class="col-md-10"><input type="text" name="HEAD_OFFICE_MOBILE" id="HEAD_OFFICE_MOBILE" class="form-control" placeholder="Text input"  value="<?php if(isset($user_data['HEAD_OFFICE_MOBILE'])){ echo $user_data['HEAD_OFFICE_MOBILE']; }?>"></div> 
  
</div>  
  
  
  </div>
</div>
 


 
 

 <div class="panel panel-default">
  <div class="panel-heading"><strong>6(a). Address(es) of the Branch Office(s) of the firm/Chartered Accountant in practice, if any  </strong>     </div>
  <div class="panel-body" style="">
	(i)
    <div class="col-md-12 margin-15px"> 
  <input type="hidden" name="edit_address" id="edit_address" value="0">
  <div class="col-md-2">Address </div>	 
  <div class="col-md-10"><input type="text" name="SIX_MRH_RES_ADDR_LINE_1" id="SIX_MRH_RES_ADDR_LINE_1" class="form-control" placeholder="Text input"  value="<?php if(isset($user_data['SIX_MRH_RES_ADDR_LINE_1'])){ echo $user_data['SIX_MRH_RES_ADDR_LINE_1']; }?>"></div> 
  </div>
  <div class="col-md-12 margin-15px">
  <div class="col-md-2">Address 2</div>
  <div class="col-md-10"><input type="text" name="SIX_MRH_RES_ADDR_LINE_2" id="SIX_MRH_RES_ADDR_LINE_2" class="form-control" placeholder="Text input"   value="<?php if(isset($user_data['SIX_MRH_RES_ADDR_LINE_2'])){ echo $user_data['SIX_MRH_RES_ADDR_LINE_2']; }?>"></div> 
  </div>
  <div class="col-md-12 margin-15px">
  <div class="col-md-2">Address 3</div>
  <div class="col-md-10"><input type="text" name="SIX_MRH_RES_ADDR_LINE_3" id="SIX_MRH_RES_ADDR_LINE_3" class="form-control" placeholder="Text input"   value="<?php if(isset($user_data['SIX_MRH_RES_ADDR_LINE_3'])){ echo $user_data['SIX_MRH_RES_ADDR_LINE_3']; }?>"></div> 
  </div>
  <div class="col-md-12 margin-15px">
  <div class="col-md-2">Address 4</div>
  <div class="col-md-10"><input type="text" name="SIX_MRH_RES_ADDR_LINE_4" id="SIX_MRH_RES_ADDR_LINE_4" class="form-control" placeholder="Text input"   value="<?php if(isset($user_data['SIX_MRH_RES_ADDR_LINE_4'])){ echo $user_data['SIX_MRH_RES_ADDR_LINE_4']; }?>"></div>   
  </div>
  
  
  <div class="col-md-12 margin-15px">
  
  
   <div class="col-md-6"><div class="col-md-4">State Code</div>
  <div class="col-md-6">
  
  <select name="SIX_MRH_RES_STATE_CODE" id="SIX_MRH_RES_STATE_CODE"  class="form-control"><?php print_r(show_all_state($state_code));?></select>
  <!--
  <input type="text" name="MRH_RES_STATE_CODE" id="MRH_RES_STATE_CODE" class="form-control" placeholder="Text input"  readonly value="<?php if(isset($user_data['SIX_MRH_RES_STATE_CODE'])){ 
    $state_code = $user_data['SIX_MRH_RES_STATE_CODE']; 
  $state_data = get_state_name($state_code);
  echo $state_data['state_name'];
  }?>">--></div> </div>
  

  <?php if(isset($user_data['HEAD_OFFICE_STATE_CODE'])){ 
    $state_code = $user_data['HEAD_OFFICE_STATE_CODE']; }?>
  <div class="col-md-2">City</div>
  <div class="col-md-3"><?php if(isset($user_data['HEAD_OFFICE_CITY_CODE'])){ 
  $city_code=$user_data['HEAD_OFFICE_CITY_CODE']; }else{ $city_code=''; }?>
  <select name="SIX_MRH_RES_CITY_CODE" id="SIX_MRH_RES_CITY_CODE"  class="form-control" ><?php   print_r(show_all_city($city_code,$state_code));?></select>
 <!-- <input type="text" name="MRH_RES_CITY_CODE" id="MRH_RES_CITY_CODE" class="form-control" placeholder="Text input"  readonly value="<?php if(isset($user_data['HEAD_OFFICE_CITY_CODE'])){ 
    $city_code=$user_data['HEAD_OFFICE_CITY_CODE'];
  $city_data = get_city_name($city_code);
   echo $city_data['city_name']; } ?>">-->
  </div>  

 
</div>

  
  <div class="col-md-12 margin-15px">

  <div class="col-md-2">Pin</div>
  <div class="col-md-3"><input type="text" name="SIX_MRH_RES_ZIP_POSTAL_CODE" id="SIX_MRH_RES_ZIP_POSTAL_CODE" class="form-control" placeholder="Text input"  value="<?php if(isset($user_data['SIX_MRH_RES_ZIP_POSTAL_CODE'])){ echo $user_data['SIX_MRH_RES_ZIP_POSTAL_CODE']; }?>"></div>  
 <div class="col-md-6">
 <div class="col-md-4">Phone No.</div>
  <div class="col-md-6" ><input type="text" name="SIX_MRH_RES_TEL" id="SIX_MRH_RES_TEL" class="form-control" placeholder="Text input"  value="<?php if(isset($user_data['SIX_MRH_RES_TEL'])){ echo $user_data['SIX_MRH_RES_TEL']; }?>"></div> </div>
</div>
  
  
  <div class="col-md-12 margin-15px">
  <div class="col-md-2">Country</div>
  <div class="col-md-3"><!--<input type="text" name="MRH_RES_COU_CODE" id="MRH_RES_COU_CODE" class="form-control" placeholder="Text input" readonly value="<?php //if(isset($user_data['MRH_RES_COU_CODE'])){ echo $user_data['MRH_RES_COU_CODE']; }?>">-->
  
  <select name="SIX_MRH_RES_COU_CODE" id="SIX_MRH_RES_COU_CODE"  class="form-control" onchange="return show_sub(this);" ><?php print_r(show_all_country($country_code));?></select>
  <!--<input type="text" name="MRH_RES_COU_CODE" id="MRH_RES_COU_CODE" class="form-control" placeholder="Text input"  readonly value="<?php /*if(isset($user_data['MRH_RES_COU_CODE'])){ 
    $country_code = $user_data['MRH_RES_COU_CODE']; 
  $country_data = get_country_name($country_code);
  echo $country_data['cou_name'];
  } */?>">-->
  
  </div> 
 
</div>
  

<div class="col-md-12 margin-15px">
  
  <div class="col-md-2">Email Id</div>
  <div class="col-md-10"><input type="text" name="SIX_MRH_RES_EMAIL" id="SIX_MRH_RES_EMAIL" class="form-control" placeholder="Text input"  value="<?php if(isset($user_data['SIX_MRH_RES_EMAIL'])){ echo $user_data['SIX_MRH_RES_EMAIL']; }?>"></div>  
</div>  
  


<div class="col-md-12 margin-15px">
  
  <div class="col-md-2">Mobile No.</div>
  <div class="col-md-10"><input type="text" name="SIX_MRH_RES_MOBILE" id="SIX_MRH_RES_MOBILE" class="form-control" placeholder="Text input"  value="<?php if(isset($user_data['SIX_MRH_RES_MOBILE'])){ echo $user_data['SIX_MRH_RES_MOBILE']; }?>"></div> 
  
</div>  
  
   
  
	<hr>
	(ii)
	
	<div class="col-md-12 margin-15px"> 
  <input type="hidden" name="edit_address" id="edit_address" value="0">
  <div class="col-md-2">Address </div>	 
  <div class="col-md-10"><input type="text" name="SIX_TWO_MRH_RES_ADDR_LINE_1" id="SIX_TWO_MRH_RES_ADDR_LINE_1" class="form-control" placeholder="Text input"  value="<?php if(isset($user_data['SIX_TWO_MRH_RES_ADDR_LINE_1'])){ echo $user_data['SIX_TWO_MRH_RES_ADDR_LINE_1']; }?>"></div> 
  </div>
  <div class="col-md-12 margin-15px">
  <div class="col-md-2">Address 2</div>
  <div class="col-md-10"><input type="text" name="SIX_TWO_MRH_RES_ADDR_LINE_2" id="SIX_TWO_MRH_RES_ADDR_LINE_2" class="form-control" placeholder="Text input"   value="<?php if(isset($user_data['SIX_TWO_MRH_RES_ADDR_LINE_2'])){ echo $user_data['SIX_TWO_MRH_RES_ADDR_LINE_2']; }?>"></div> 
  </div>
  <div class="col-md-12 margin-15px">
  <div class="col-md-2">Address 3</div>
  <div class="col-md-10"><input type="text" name="SIX_TWO_MRH_RES_ADDR_LINE_3" id="SIX_TWO_MRH_RES_ADDR_LINE_3" class="form-control" placeholder="Text input"   value="<?php 
  if(isset($user_data['SIX_TWO_MRH_RES_ADDR_LINE_3']))
  {
	  echo $user_data['SIX_TWO_MRH_RES_ADDR_LINE_3']; 
	  }?>"></div> 
  </div>
  <div class="col-md-12 margin-15px">
  <div class="col-md-2">Address 4</div>
  <div class="col-md-10"><input type="text" name="SIX_TWO_MRH_RES_ADDR_LINE_4" id="SIX_TWO_MRH_RES_ADDR_LINE_4" class="form-control" placeholder="Text input"   value="<?php if(isset($user_data['SIX_TWO_MRH_RES_ADDR_LINE_4'])){ echo $user_data['SIX_TWO_MRH_RES_ADDR_LINE_4']; }?>"></div>   
  </div>
  
  
  <div class="col-md-12 margin-15px">
  
  
  
  <div class="col-md-6"><div class="col-md-4">State Code</div>
  <div class="col-md-6">
  
  <select name="SIX_TWO_MRH_RES_STATE_CODE" id="SIX_TWO_MRH_RES_STATE_CODE"  class="form-control"><?php print_r(show_all_state($state_code));?></select>
  <!--
  <input type="text" name="MRH_RES_STATE_CODE" id="MRH_RES_STATE_CODE" class="form-control" placeholder="Text input"  readonly value="<?php if(isset($user_data['MRH_RES_STATE_CODE'])){ 
    $state_code = $user_data['MRH_RES_STATE_CODE']; 
  $state_data = get_state_name($state_code);
  echo $state_data['state_name'];
  }?>">--></div> </div>
  
  

  <?php if(isset($user_data['MRH_RES_STATE_CODE'])){ 
    $state_code = $user_data['MRH_RES_STATE_CODE']; }?>
  <div class="col-md-2">City</div>
  <div class="col-md-3"><?php if(isset($user_data['MRH_RES_CITY_CODE'])){ 
  $city_code=$user_data['MRH_RES_CITY_CODE']; }else{ $city_code=''; }?>
  <select name="SIX_TWO_MRH_RES_CITY_CODE" id="SIX_TWO_MRH_RES_CITY_CODE"  class="form-control" ><?php   print_r(show_all_city($city_code,$state_code));?></select>
 <!-- <input type="text" name="MRH_RES_CITY_CODE" id="MRH_RES_CITY_CODE" class="form-control" placeholder="Text input"  readonly value="<?php if(isset($user_data['MRH_RES_CITY_CODE'])){ 
    $city_code=$user_data['MRH_RES_CITY_CODE'];
  $city_data = get_city_name($city_code);
   echo $city_data['city_name']; } ?>">-->
  </div>  

  
</div>

  
  <div class="col-md-12 margin-15px">

  <div class="col-md-2">Pin</div>
  <div class="col-md-3"><input type="text" name="SIX_TWO_MRH_RES_ZIP_POSTAL_CODE" id="SIX_TWO_MRH_RES_ZIP_POSTAL_CODE" class="form-control" placeholder="Text input"  value="<?php if(isset($user_data['SIX_TWO_MRH_RES_ZIP_POSTAL_CODE'])){ echo $user_data['SIX_TWO_MRH_RES_ZIP_POSTAL_CODE']; }?>"></div>  
 <div class="col-md-6">
 <div class="col-md-4">Phone No.</div>
  <div class="col-md-6" ><input type="text" name="SIX_TWO_MRH_RES_TEL" id="SIX_TWO_MRH_RES_TEL" class="form-control" placeholder="Text input"  value="<?php if(isset($user_data['SIX_TWO_MRH_RES_TEL'])){ echo $user_data['SIX_TWO_MRH_RES_TEL']; }?>"></div> </div>
</div>

  
  
  <div class="col-md-12 margin-15px">
  <div class="col-md-2">Country</div>
  <div class="col-md-3"><!--<input type="text" name="MRH_RES_COU_CODE" id="MRH_RES_COU_CODE" class="form-control" placeholder="Text input" readonly value="<?php //if(isset($user_data['MRH_RES_COU_CODE'])){ echo $user_data['MRH_RES_COU_CODE']; }?>">-->
  
  <select name="SIX_TWO_MRH_RES_COU_CODE" id="SIX_TWO_MRH_RES_COU_CODE"  class="form-control" onchange="return show_sub(this);" ><?php print_r(show_all_country($country_code));?></select>
  <!--<input type="text" name="MRH_RES_COU_CODE" id="MRH_RES_COU_CODE" class="form-control" placeholder="Text input"  readonly value="<?php /*if(isset($user_data['MRH_RES_COU_CODE'])){ 
    $country_code = $user_data['MRH_RES_COU_CODE']; 
  $country_data = get_country_name($country_code);
  echo $country_data['cou_name'];
  } */?>">-->
  
  </div> 
 
</div>
  

<div class="col-md-12 margin-15px">
  
  <div class="col-md-2">Email Id</div>
  <div class="col-md-10"><input type="text" name="SIX_TWO_MRH_RES_EMAIL" id="SIX_TWO_MRH_RES_EMAIL" class="form-control" placeholder="Text input"  value="<?php if(isset($user_data['SIX_TWO_MRH_RES_EMAIL'])){ echo $user_data['SIX_TWO_MRH_RES_EMAIL']; }?>"></div>  
</div>  
  


<div class="col-md-12 margin-15px">
  
  <div class="col-md-2">Mobile No.</div>
  <div class="col-md-10"><input type="text" name="SIX_TWO_MRH_RES_MOBILE" id="SIX_TWO_MRH_RES_MOBILE" class="form-control" placeholder="Text input"  value="<?php if(isset($user_data['SIX_TWO_MRH_RES_MOBILE'])){ echo $user_data['SIX_TWO_MRH_RES_MOBILE']; }?>"></div> 
  
</div> 
  
   
	
	<hr>
	(iii)
	<div class="col-md-12 margin-15px"> 
  <input type="hidden" name="edit_address" id="edit_address" value="0">
  <div class="col-md-2">Address </div>	 
  <div class="col-md-10"><input type="text" name="SIX_THREE_MRH_RES_ADDR_LINE_1" id="SIX_THREE_MRH_RES_ADDR_LINE_1" class="form-control" placeholder="Text input"  value="<?php if(isset($user_data['SIX_THREE_MRH_RES_ADDR_LINE_1'])){
	  echo $user_data['SIX_THREE_MRH_RES_ADDR_LINE_1']; }?>"></div> 
  </div>
  <div class="col-md-12 margin-15px">
  <div class="col-md-2">Address 2</div>
  <div class="col-md-10"><input type="text" name="SIX_THREE_MRH_RES_ADDR_LINE_2" id="SIX_THREE_MRH_RES_ADDR_LINE_2" class="form-control" placeholder="Text input"   value="<?php if(isset($user_data['SIX_THREE_MRH_RES_ADDR_LINE_2'])){
	  echo $user_data['SIX_THREE_MRH_RES_ADDR_LINE_2']; }?>"></div> 
  </div>
  <div class="col-md-12 margin-15px">
  <div class="col-md-2">Address 3</div>
  <div class="col-md-10"><input type="text" name="SIX_THREE_MRH_RES_ADDR_LINE_3" id="SIX_THREE_MRH_RES_ADDR_LINE_3" class="form-control" placeholder="Text input"   value="<?php if(isset($user_data['SIX_THREE_MRH_RES_ADDR_LINE_3'])){
	  echo $user_data['SIX_THREE_MRH_RES_ADDR_LINE_3']; }?>"></div> 
  </div>
  <div class="col-md-12 margin-15px">
  <div class="col-md-2">Address 4</div>
  <div class="col-md-10"><input type="text" name="SIX_THREE_MRH_RES_ADDR_LINE_4" id="SIX_THREE_MRH_RES_ADDR_LINE_4" class="form-control" placeholder="Text input"   value="<?php if(isset($user_data['SIX_THREE_MRH_RES_ADDR_LINE_4'])){
	  echo $user_data['SIX_THREE_MRH_RES_ADDR_LINE_4']; }?>"></div>   
  </div>
  
  
  <div class="col-md-12 margin-15px">
  
  
  
  <div class="col-md-6"><div class="col-md-4">State Code</div>
  <div class="col-md-6">
  
  <select name="SIX_THREE_MRH_RES_STATE_CODE" id="SIX_THREE_MRH_RES_STATE_CODE"  class="form-control"><?php print_r(show_all_state($state_code));?></select>
  <!--
  <input type="text" name="MRH_RES_STATE_CODE" id="MRH_RES_STATE_CODE" class="form-control" placeholder="Text input"  readonly value="<?php if(isset($user_data['MRH_RES_STATE_CODE'])){ 
    $state_code = $user_data['MRH_RES_STATE_CODE']; 
  $state_data = get_state_name($state_code);
  echo $state_data['state_name'];
  }?>">--></div> </div>
  
  

  <?php if(isset($user_data['MRH_RES_STATE_CODE'])){ 
    $state_code = $user_data['MRH_RES_STATE_CODE']; }?>
  <div class="col-md-2">City</div>
  <div class="col-md-3"><?php if(isset($user_data['MRH_RES_CITY_CODE'])){ 
  $city_code=$user_data['MRH_RES_CITY_CODE']; }else{ $city_code=''; }?>
  <select name="SIX_THREE_MRH_RES_CITY_CODE" id="SIX_THREE_MRH_RES_CITY_CODE"  class="form-control" ><?php   print_r(show_all_city($city_code,$state_code));?></select>
 <!-- <input type="text" name="MRH_RES_CITY_CODE" id="MRH_RES_CITY_CODE" class="form-control" placeholder="Text input"  readonly value="<?php if(isset($user_data['MRH_RES_CITY_CODE'])){ 
    $city_code=$user_data['MRH_RES_CITY_CODE'];
  $city_data = get_city_name($city_code);
   echo $city_data['city_name']; } ?>">-->
  </div>  

  
</div>

  
  <div class="col-md-12 margin-15px">

  <div class="col-md-2">Pin</div>
  <div class="col-md-3"><input type="text" name="SIX_THREE_MRH_RES_ZIP_POSTAL_CODE" id="SIX_THREE_MRH_RES_ZIP_POSTAL_CODE" class="form-control" placeholder="Text input"  value="<?php if(isset($user_data['SIX_THREE_MRH_RES_ZIP_POSTAL_CODE'])){ 
  echo $user_data['SIX_THREE_MRH_RES_ZIP_POSTAL_CODE']; }?>"></div>  
 <div class="col-md-6">
 <div class="col-md-4">Phone No.</div>
  <div class="col-md-6" ><input type="text" name="SIX_THREE_MRH_RES_TEL" id="SIX_THREE_MRH_RES_TEL" class="form-control" placeholder="Text input"  value="<?php if(isset($user_data['SIX_THREE_MRH_RES_TEL'])){ echo $user_data['SIX_THREE_MRH_RES_TEL']; }?>"></div> </div>
</div>
 
  
  <div class="col-md-12 margin-15px">
  <div class="col-md-2">Country</div>
  <div class="col-md-3"><!--<input type="text" name="MRH_RES_COU_CODE" id="MRH_RES_COU_CODE" class="form-control" placeholder="Text input" readonly value="<?php //if(isset($user_data['MRH_RES_COU_CODE'])){ echo $user_data['MRH_RES_COU_CODE']; }?>">-->
  
  <select name="SIX_THREE_MRH_RES_COU_CODE" id="SIX_THREE_MRH_RES_COU_CODE"  class="form-control" onchange="return show_sub(this);" ><?php print_r(show_all_country($country_code));?></select>
  <!--<input type="text" name="MRH_RES_COU_CODE" id="MRH_RES_COU_CODE" class="form-control" placeholder="Text input"  readonly value="<?php /*if(isset($user_data['MRH_RES_COU_CODE'])){ 
    $country_code = $user_data['MRH_RES_COU_CODE']; 
  $country_data = get_country_name($country_code);
  echo $country_data['cou_name'];
  } */?>">-->
  
  </div> 
 
</div>
  

<div class="col-md-12 margin-15px">
  
  <div class="col-md-2">Email Id</div>
  <div class="col-md-10"><input type="text" name="SIX_THREE_MRH_RES_EMAIL" id="SIX_THREE_MRH_RES_EMAIL" class="form-control" placeholder="Text input"  value="<?php if(isset($user_data['SIX_THREE_MRH_RES_EMAIL'])){ echo $user_data['SIX_THREE_MRH_RES_EMAIL']; }?>"></div>  
</div>  
  


<div class="col-md-12 margin-15px">
  
  <div class="col-md-2">Mobile No.</div>
  <div class="col-md-10"><input type="text" name="SIX_THREE_MRH_RES_MOBILE" id="SIX_THREE_MRH_RES_MOBILE" class="form-control" placeholder="Text input"  value="<?php if(isset($user_data['SIX_THREE_MRH_RES_MOBILE'])){ echo $user_data['SIX_THREE_MRH_RES_MOBILE']; }?>"></div> 
  
</div>  
  
  
  </div>
</div>



<div class="panel panel-default">
  <div class="panel-heading"><strong>6(b). Date on which each branch office was opened</strong></div>
  <div class="panel-body">
	<div class="col-md-12 margin-15px">
		<div class="col-md-8">Place of the Branch:</div>	  
		<div class="col-md-4">Date	</div>				
	</div>
	
	<div class="col-md-12 margin-15px">	  
		<div class="col-md-8">			
			<input type="text" name="PLACE_OF_BRANCH_1" id="PLACE_OF_BRANCH_1" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['PLACE_OF_BRANCH_1'])){ echo $user_data['PLACE_OF_BRANCH_1']; }?>"> 
		</div> 	
		<div class="col-md-4">			
			<input type="text" name="DATE_OF_BRANCH_1" id="DATE_OF_BRANCH_1" class="form-control" 
			data-uk-datepicker="{format:'DD-MM-YYYY', maxDate: '+0'}" placeholder="DD-MM-YYYY" value="<?php
			if(isset($user_data['DATE_OF_BRANCH_1'])){ echo dd_mm_yyyy_member($user_data['DATE_OF_BRANCH_1']); }?>">	 
		</div>				
	</div>
	
	<div class="col-md-12 margin-15px">
		<div class="col-md-8">			
			<input type="text" name="PLACE_OF_BRANCH_2" id="PLACE_OF_BRANCH_2" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['PLACE_OF_BRANCH_2'])){ echo $user_data['PLACE_OF_BRANCH_2']; }?>"> 
		</div> 	
		<div class="col-md-4">			
			<input type="text" name="DATE_OF_BRANCH_2" id="DATE_OF_BRANCH_2" class="form-control" 
			data-uk-datepicker="{format:'DD-MM-YYYY', maxDate: '+0'}"placeholder="DD-MM-YYYY" value="<?php 
			if(isset($user_data['DATE_OF_BRANCH_2'])){ echo dd_mm_yyyy_member($user_data['DATE_OF_BRANCH_2']); }?>">	 
		</div>		
	</div>
	
	<div class="col-md-12 margin-15px">
		<div class="col-md-8">			
			<input type="text" name="PLACE_OF_BRANCH_3" id="PLACE_OF_BRANCH_3" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['PLACE_OF_BRANCH_3'])){ echo $user_data['PLACE_OF_BRANCH_3']; }?>"> 
		</div> 	
		<div class="col-md-4">			
			<input type="text" name="DATE_OF_BRANCH_3" id="DATE_OF_BRANCH_3" class="form-control"
			data-uk-datepicker="{format:'DD-MM-YYYY', maxDate: '+0'}" placeholder="DD-MM-YYYY" value="<?php 
			if(isset($user_data['DATE_OF_BRANCH_3'])){ echo dd_mm_yyyy_member($user_data['DATE_OF_BRANCH_3']); }?>">	 
		</div>		
	</div>
	
	<div class="col-md-12 margin-15px">
		<div class="col-md-8">			
			<input type="text" name="PLACE_OF_BRANCH_4" id="PLACE_OF_BRANCH_4" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['PLACE_OF_BRANCH_4'])){ echo $user_data['PLACE_OF_BRANCH_4']; }?>"> 
		</div> 	
		<div class="col-md-4">			
			<input type="text" name="DATE_OF_BRANCH_4" id="DATE_OF_BRANCH_4" class="form-control"
			data-uk-datepicker="{format:'DD-MM-YYYY', maxDate: '+0'}" placeholder="DD-MM-YYYY" value="<?php
			if(isset($user_data['DATE_OF_BRANCH_4'])){ echo dd_mm_yyyy_member($user_data['DATE_OF_BRANCH_4']); }?>">	 
		</div>		
	</div>
	
	<div class="col-md-12 margin-15px">
		<div class="col-md-8">			
			<input type="text" name="PLACE_OF_BRANCH_5" id="PLACE_OF_BRANCH_5" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['PLACE_OF_BRANCH_5'])){ echo $user_data['PLACE_OF_BRANCH_5']; }?>"> 
		</div> 	
		<div class="col-md-4">			
			<input type="text" name="DATE_OF_BRANCH_5" id="DATE_OF_BRANCH_5" class="form-control"
			data-uk-datepicker="{format:'DD-MM-YYYY', maxDate: '+0'}" placeholder="DD-MM-YYYY" value="<?php
			if(isset($user_data['DATE_OF_BRANCH_5'])){ echo dd_mm_yyyy_member($user_data['DATE_OF_BRANCH_5']); }?>">	 
		</div>		
	</div>
  <div class="clearfix"></div>
  </div>
</div>



<div class="panel panel-default">
  <div class="panel-heading"><strong>7. Name of the member with membership number who is incharge of each of the offices,i.e. head office and branch offices.</strong></div>
  <div class="panel-body">
	<div class="col-md-12 margin-15px">
		<div class="col-md-3">Head Office</div>	  
		<div class="col-md-9"><input type="text" name="BRANCH_OFFICE" id="BRANCH_OFFICE" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['BRANCH_OFFICE'])){ echo $user_data['BRANCH_OFFICE']; }?>">	</div>				
	</div>
	
	<div class="col-md-12 margin-15px">
		<div class="col-md-3">Name of the member in-charge</div>	  
		<div class="col-md-9"><input type="text" name="MEMBER_IN_CHARGE" id="MEMBER_IN_CHARGE" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['MEMBER_IN_CHARGE'])){ echo $user_data['MEMBER_IN_CHARGE']; }?>">	</div>				
	</div>
	
	<div class="col-md-12 margin-15px">
		<div class="col-md-3">Membership No</div>	  
		<div class="col-md-9"><input type="text" name="MEMBER_NUMBER" id="MEMBER_NUMBER" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['MEMBER_NUMBER'])){ echo $user_data['MEMBER_NUMBER']; }?>">	</div>				
	</div>
  
	<div class="col-md-12 margin-15px">
		<div class="col-md-3">Branch Office(s)</div>	  
		<div class="col-md-6">Name(s) of member(s) in-charge	</div>	
		<div class="col-md-3">Membership No</div>
	</div>
	
	<div class="col-md-12 margin-15px">	  
		<div class="col-md-3">			
			<input type="text" name="BRANCH_OFFICE_1" id="BRANCH_OFFICE_1" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['BRANCH_OFFICE_1'])){ echo $user_data['BRANCH_OFFICE_1']; }?>"> 
		</div> 	
		<div class="col-md-6">			
			<input type="text" name="MEMBER_IN_CHARGE_1" id="MEMBER_IN_CHARGE_1" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['MEMBER_IN_CHARGE_1'])){ echo $user_data['MEMBER_IN_CHARGE_1']; }?>">	 
		</div>
		<div class="col-md-3">			
			<input type="text" name="MEMBER_NUMBER_1" id="MEMBER_NUMBER_1" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['MEMBER_NUMBER_1'])){ echo $user_data['MEMBER_NUMBER_1']; }?>">	 
		</div>	
	</div>
	
	<div class="col-md-12 margin-15px">
		<div class="col-md-3">			
			<input type="text" name="BRANCH_OFFICE_2" id="BRANCH_OFFICE_2" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['BRANCH_OFFICE_2'])){ echo $user_data['BRANCH_OFFICE_2']; }?>"> 
		</div> 	
		<div class="col-md-6">			
			<input type="text" name="MEMBER_IN_CHARGE_2" id="MEMBER_IN_CHARGE_2" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['MEMBER_IN_CHARGE_2'])){ echo $user_data['MEMBER_IN_CHARGE_2']; }?>">	 
		</div>
		<div class="col-md-3">			
			<input type="text" name="MEMBER_NUMBER_2" id="MEMBER_NUMBER_2" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['MEMBER_NUMBER_2'])){ echo $user_data['MEMBER_NUMBER_2']; }?>">	 
		</div>		
	</div>
	
	<div class="col-md-12 margin-15px">
		<div class="col-md-3">			
			<input type="text" name="BRANCH_OFFICE_3" id="BRANCH_OFFICE_3" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['BRANCH_OFFICE_3'])){ echo $user_data['BRANCH_OFFICE_3']; }?>"> 
		</div> 	
		<div class="col-md-6">			
			<input type="text" name="MEMBER_IN_CHARGE_3" id="MEMBER_IN_CHARGE-3" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['MEMBER_IN_CHARGE_3'])){ echo $user_data['MEMBER_IN_CHARGE_3']; }?>">	 
		</div>
		<div class="col-md-3">			
			<input type="text" name="MEMBER_NUMBER_3" id="MEMBER_NUMBER_3" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['MEMBER_NUMBER_3'])){ echo $user_data['MEMBER_NUMBER_3']; }?>">	 
		</div>			
	</div>
	
	<div class="col-md-12 margin-15px">
		<div class="col-md-3">			
			<input type="text" name="BRANCH_OFFICE_4" id="BRANCH_OFFICE_4" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['BRANCH_OFFICE_4'])){ echo $user_data['BRANCH_OFFICE_4']; }?>"> 
		</div> 	
		<div class="col-md-6">			
			<input type="text" name="MEMBER_IN_CHARGE_4" id="MEMBER_IN_CHARGE_4" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['MEMBER_IN_CHARGE_4'])){ echo $user_data['MEMBER_IN_CHARGE_4']; }?>">	 
		</div>
		<div class="col-md-3">			
			<input type="text" name="MEMBER_NUMBER_4" id="MEMBER_NUMBER_4" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['MEMBER_NUMBER_4'])){ echo $user_data['MEMBER_NUMBER_4']; }?>">	 
		</div>	

      
		
		


				
	</div>
	
  <div class="clearfix"></div>
  </div>
</div>


<div class="panel panel-default">
  <div class="panel-heading"><strong>8. Whether the proprietor/any partner stated in serial number 2 above is/are partner or proprietor or paid assistant with any other firm(s) of chartered accountants in practice any where in India and Whether any of them are engaged in a full time or part-time occupation elsewhere?</strong></div>
  <div class="panel-body">
      <div class="col-md-1">
    <input type="radio"     name="MRH_PRO_PARTNER" id="MRH_PRO_PARTNER_1" value="Yes"      <?php 
	if(isset($user_data['MRH_PRO_PARTNER']) && $user_data['MRH_PRO_PARTNER']=='Yes' ){ echo "checked"; }
	?> >
    Yes
  </div>
  
    <div class="col-md-1">
    <input type="radio"   name="MRH_PRO_PARTNER" id="MRH_PRO_PARTNER_2" value="NO"      <?php 
	if(isset($user_data['MRH_PRO_PARTNER']) && $user_data['MRH_PRO_PARTNER']=='NO' ){ echo "checked"; }
	?>>
    NO
  </div>
  
  <div class="clearfix"></div>
  </div>
</div> 


<div class="panel panel-default">
  <div class="panel-heading"><strong>9. If yes,give details in each case</strong></div>
  <div class="panel-body">
	(i)
	<div class="row">
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Name of the Partner/ Proprietor / Paid Assistant </div>	  
			<div class="col-md-6"><input type="text" name="PAR_PRO_PA_NAME" id="PAR_PRO_PA_NAME" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['PAR_PRO_PA_NAME'])){ echo $user_data['PAR_PRO_PA_NAME']; }?>">	</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Name(s) of the firm(s) of Chartered accountants with which connected</div>	  
			<div class="col-md-6"><input type="text" name="CA_FIRM_NAME" id="CA_FIRM_NAME" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['CA_FIRM_NAME'])){ echo $user_data['CA_FIRM_NAME']; }?>">	</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Capacity in which connected</div>	  
			<div class="col-md-6">
				<input type="radio"   name="CAPACITY_CONNECTED" id="MRH_NATIONALITY5" value="Proprietor"      <?php 
				if(isset($user_data['CAPACITY_CONNECTED']) && $user_data['CAPACITY_CONNECTED']=='Proprietor' ){ echo "checked"; }
				?>>Proprietor
				
				<input type="radio"   name="CAPACITY_CONNECTED" id="MRH_NATIONALITY6" value="Partner"      <?php 
				if(isset($user_data['CAPACITY_CONNECTED']) && $user_data['CAPACITY_CONNECTED']=='Partner' ){ echo "checked"; }
				?>>Partner
				
				<input type="radio"   name="CAPACITY_CONNECTED" id="MRH_NATIONALITY7" value="Paid Assistant"      <?php 
				if(isset($user_data['CAPACITY_CONNECTED']) && $user_data['CAPACITY_CONNECTED']=='Paid Assistant' ){ echo "checked"; }
				?>>Paid Assistant
			</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Particulars of full-time of part-time occupation elsewhere if any.</div>	  
			<div class="col-md-6"><input type="text" name="OCCUPATION_DETAILS" id="OCCUPATION_DETAILS" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['OCCUPATION_DETAILS'])){ echo $user_data['OCCUPATION_DETAILS']; }?>">	
			</div>				
		</div>
	</div>
	
	<hr>
	(ii)
	<div class="row">
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Name of the Partner/ Proprietor / Paid Assistant </div>	  
			<div class="col-md-6"><input type="text" name="PAR_PRO_PA_NAME_1" id="PAR_PRO_PA_NAME_1" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['PAR_PRO_PA_NAME_1'])){ echo $user_data['PAR_PRO_PA_NAME_1']; }?>">	</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Name(s) of the firm(s) of Chartered accountants with which connected</div>	  
			<div class="col-md-6"><input type="text" name="CA_FIRM_NAME_1" id="CA_FIRM_NAME_1" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['CA_FIRM_NAME_1'])){ echo $user_data['CA_FIRM_NAME_1']; }?>">	</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Capacity in which connected</div>	  
			<div class="col-md-6">
				<input type="radio"   name="CAPACITY_CONNECTED_1" id="MRH_NATIONALITY2" value="Proprietor"      <?php 
				
				if(isset($user_data['CAPACITY_CONNECTED_1']) && $user_data['CAPACITY_CONNECTED_1']=='Proprietor' ){ echo "checked"; }
				?>>Proprietor
				
				<input type="radio"   name="CAPACITY_CONNECTED_1" id="MRH_NATIONALITY3" value="Partner"      <?php 
				
				if(isset($user_data['CAPACITY_CONNECTED_1']) && $user_data['CAPACITY_CONNECTED_1']=='Partner' ){ echo "checked"; }
				
				?>>Partner
				
				<input type="radio"   name="CAPACITY_CONNECTED_1" id="MRH_NATIONALITY4" value="Paid Assistant"      <?php 
				//if(isset($user_data['MRH_NATIONALITY']) && $user_data['MRH_NATIONALITY']!='IND'){  echo"checked";  }
				//if(isset($user_data['CAPACITY_CONNECTED_1'])){ echo $user_data['CAPACITY_CONNECTED_1']; }
				
				if(isset($user_data['CAPACITY_CONNECTED_1']) && $user_data['CAPACITY_CONNECTED_1']=='Paid Assistant' ){ echo "checked"; }
				?>>Paid Assistant
			</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Particulars of full-time of part-time occupation elsewhere if any.</div>	  
			<div class="col-md-6"><input type="text" name="OCCUPATION_DETAILS_1" id="OCCUPATION_DETAILS_1" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['OCCUPATION_DETAILS_1'])){ echo $user_data['OCCUPATION_DETAILS_1']; }?>">	
			</div>				
		</div>
	</div>
	
	<hr>
	(iii)
	<div class="row">
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Name of the Partner/ Proprietor / Paid Assistant </div>	  
			<div class="col-md-6"><input type="text" name="PAR_PRO_PA_NAME_2" id="PAR_PRO_PA_NAME_2" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['PAR_PRO_PA_NAME_2'])){ echo $user_data['PAR_PRO_PA_NAME_2']; }?>">	</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Name(s) of the firm(s) of Chartered accountants with which connected</div>	  
			<div class="col-md-6"><input type="text" name="CA_FIRM_NAME_2" id="CA_FIRM_NAME_2" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['CA_FIRM_NAME_2'])){ echo $user_data['CA_FIRM_NAME_2']; }?>">	</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Capacity in which connected</div>	  
			<div class="col-md-6">
				<input type="radio"   name="CAPACITY_CONNECTED_2" id="MRH_NATIONALITY8" value="Proprietor"      <?php 
				
				
				if(isset($user_data['CAPACITY_CONNECTED_2']) && $user_data['CAPACITY_CONNECTED_2']=='Proprietor' ){ echo "checked"; }
				?>>Proprietor
				
				<input type="radio"   name="CAPACITY_CONNECTED_2" id="MRH_NATIONALITY9" value="Partner"      <?php 
				if(isset($user_data['CAPACITY_CONNECTED_2']) && $user_data['CAPACITY_CONNECTED_2']=='Partner' ){ echo "checked"; }
				?>>Partner
				
				<input type="radio"   name="CAPACITY_CONNECTED_2" id="MRH_NATIONALITY20" value="Paid Assistant"      <?php 
				if(isset($user_data['CAPACITY_CONNECTED_2']) && $user_data['CAPACITY_CONNECTED_2']=='Paid Assistant' ){ echo "checked"; }
				?>>Paid Assistant
			</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Particulars of full-time of part-time occupation elsewhere if any.</div>	  
			<div class="col-md-6"><input type="text" name="OCCUPATION_DETAILS_2" id="OCCUPATION_DETAILS_2" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['OCCUPATION_DETAILS_2'])){ echo $user_data['OCCUPATION_DETAILS_2']; }?>">	
			</div>				
		</div>
	</div>
	
	<hr>
	(iv)
	<div class="row">
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Name of the Partner/ Proprietor / Paid Assistant </div>	  
			<div class="col-md-6"><input type="text" name="PAR_PRO_PA_NAME_3" id="PAR_PRO_PA_NAME_3" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['PAR_PRO_PA_NAME_3'])){ echo $user_data['PAR_PRO_PA_NAME_3']; }?>">	</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Name(s) of the firm(s) of Chartered accountants with which connected</div>	  
			<div class="col-md-6"><input type="text" name="CA_FIRM_NAME_3" id="CA_FIRM_NAME_" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['CA_FIRM_NAME_3'])){ echo $user_data['CA_FIRM_NAME_3']; }?>">	</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Capacity in which connected</div>	  
			<div class="col-md-6">
				<input type="radio"   name="CAPACITY_CONNECTED_3" id="MRH_NATIONALITY25" value="Proprietor"      <?php 
				
				if(isset($user_data['CAPACITY_CONNECTED_3']) && $user_data['CAPACITY_CONNECTED_3']=='Proprietor' ){ echo "checked"; }
				?>>Proprietor
				
				<input type="radio"   name="CAPACITY_CONNECTED_3" id="MRH_NATIONALITY26" value="Partner"      <?php 
				if(isset($user_data['CAPACITY_CONNECTED_3']) && $user_data['CAPACITY_CONNECTED_3']=='Partner' ){ echo "checked"; }
				?>>Partner
				
				<input type="radio"   name="CAPACITY_CONNECTED_3" id="MRH_NATIONALITY27" value="Paid Assistant"      <?php 
				if(isset($user_data['CAPACITY_CONNECTED_3']) && $user_data['CAPACITY_CONNECTED_3']=='Paid Assistant' ){ echo "checked"; }
				?>>Paid Assistant
			</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Particulars of full-time of part-time occupation elsewhere if any.</div>	  
			<div class="col-md-6"><input type="text" name="OCCUPATION_DETAILS_3" id="OCCUPATION_DETAILS_3" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['OCCUPATION_DETAILS_3'])){ echo $user_data['OCCUPATION_DETAILS_3']; }?>">	
			</div>				
		</div>
	</div>
	
	<hr>
	
  <div class="clearfix"></div>
  </div>
</div>



<div class="panel panel-default">
  <div class="panel-heading"><strong>10. In case of a firm, whether any partner is also practising in his individual name?</strong></div>
  <div class="panel-body">
      <div class="col-md-1">
    <input type="radio"  name="FIRM_IND_PAR_NAME" id="FIRM_IND_PAR_NAME45" value="Yes"      <?php 
	//if(isset($user_data['FIRM_IND_PAR_NAME']) && $user_data['MRH_NATIONALITY']=='IND'){  echo"checked";  }
	if(isset($user_data['FIRM_IND_PAR_NAME']) && $user_data['FIRM_IND_PAR_NAME']=='Yes' ){ echo "checked"; }
	?> >
    Yes
  </div>
  
    <div class="col-md-1">
    <input type="radio"  name="FIRM_IND_PAR_NAME" id="FIRM_IND_PAR_NAME46" value="NO"    disabled  <?php
	//if(isset($user_data['MRH_NATIONALITY']) && $user_data['MRH_NATIONALITY']!='IND'){  echo"checked";  }
	if(isset($user_data['FIRM_IND_PAR_NAME']) && $user_data['FIRM_IND_PAR_NAME']=='NO' ){ echo "checked"; }
	?>>
    NO
  </div>
  
  <div class="clearfix"></div>
  </div>
</div> 


<div class="panel panel-default">
  <div class="panel-heading"><strong>11. If yes,give name(s) and membership number(s) of the member(s)</strong></div>
  <div class="panel-body">
	(i)
	<div class="row">
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Name </div>	  
			<div class="col-md-9"><input type="text" name="FIRM_MEM_NAME_LINE_1" id="FIRM_MEM_NAME_LINE_1" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['FIRM_MEM_NAME_LINE_1'])){ echo $user_data['FIRM_MEM_NAME_LINE_1']; }?>">	
			</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Membership No.</div>	  
			<div class="col-md-9"><input type="text" name="FIRM_MEMBERSHIP_NUMBER_LINE_1" id="FIRM_MEMBERSHIP_NUMBER_LINE_1" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['FIRM_MEMBERSHIP_NUMBER_LINE_1'])){ 
			echo $user_data['FIRM_MEMBERSHIP_NUMBER_LINE_1']; }?>">	</div>				
		</div>
				
	</div>
	
	<hr>
	(ii)
	<div class="row">
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Name </div>	  
			<div class="col-md-9"><input type="text" name="FIRM_MEM_NAME_LINE_2" id="FIRM_MEM_NAME_LINE_2" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['FIRM_MEM_NAME_LINE_2'])){ echo $user_data['FIRM_MEM_NAME_LINE_2']; }?>">	
			</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Membership No.</div>	  
			<div class="col-md-9"><input type="text" name="FIRM_MEMBERSHIP_NUMBER_LINE_2" id="FIRM_MEMBERSHIP_NUMBER_LINE_2" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['FIRM_MEMBERSHIP_NUMBER_LINE_2'])){
				echo $user_data['FIRM_MEMBERSHIP_NUMBER_LINE_2']; }?>">	</div>				
		</div>
	</div>
	
	<hr>
	(iii)
	<div class="row">
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Name </div>	  
			<div class="col-md-9"><input type="text" name="FIRM_MEM_NAME_LINE_3" id="FIRM_MEM_NAME_LINE_3" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['FIRM_MEM_NAME_LINE_3'])){ echo $user_data['FIRM_MEM_NAME_LINE_3']; }?>">	
			</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Membership No.</div>	  
			<div class="col-md-9"><input type="text" name="FIRM_MEMBERSHIP_NUMBER_LINE_3" id="FIRM_MEMBERSHIP_NUMBER_LINE_3" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['FIRM_MEMBERSHIP_NUMBER_LINE_3'])){ 
			echo $user_data['FIRM_MEMBERSHIP_NUMBER_LINE_3']; }?>">	</div>				
		</div>
	</div>
	
	<hr>
	(iv)
	<div class="row">
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Name </div>	  
			<div class="col-md-9"><input type="text" name="FIRM_MEM_NAME_LINE_4" id="FIRM_MEM_NAME_LINE_4" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['FIRM_MEM_NAME_LINE_4'])){ echo $user_data['FIRM_MEM_NAME_LINE_4']; }?>">	
			</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Membership No.</div>	  
			<div class="col-md-9"><input type="text" name="FIRM_MEMBERSHIP_NUMBER_LINE_4" id="FIRM_MEMBERSHIP_NUMBER_LINE_4" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['FIRM_MEMBERSHIP_NUMBER_LINE_4'])){ 
			echo $user_data['FIRM_MEMBERSHIP_NUMBER_LINE_4']; }?>">	</div>				
		</div>
	</div>
	
	<hr>
	(v)
	<div class="row">
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Name </div>	  
			<div class="col-md-9"><input type="text" name="FIRM_MEM_NAME_LINE_5" id="FIRM_MEM_NAME_LINE_5" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['FIRM_MEM_NAME_LINE_5'])){ echo $user_data['FIRM_MEM_NAME_LINE_5']; }?>">	
			</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Membership No.</div>	  
			<div class="col-md-9"><input type="text" name="FIRM_MEMBERSHIP_NUMBER_LINE_5" id="FIRM_MEMBERSHIP_NUMBER_LINE_5" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['FIRM_MEMBERSHIP_NUMBER_LINE_5'])){
				echo $user_data['FIRM_MEMBERSHIP_NUMBER_LINE_5']; }?>">	</div>				
		</div>
	</div>
	
	<hr>
	
  <div class="clearfix"></div>
  </div>
</div>



<div class="panel panel-default">
  <div class="panel-heading"><strong>12. Name(s) of the member(s) of the institute with membership number(s) holding full time employment in the firm/under chartered accountant in practice and date of joining of each such member.</strong></div>
  <div class="panel-body">
	(i)
	<div class="row">
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Name </div>	  
			<div class="col-md-9"><input type="text" name="INS_MEM_NAME_LINE_1" id="INS_MEM_NAME_LINE_1" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['INS_MEM_NAME_LINE_1'])){echo $user_data['INS_MEM_NAME_LINE_1']; }?>">	
			</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Membership No.</div>	  
			<div class="col-md-3">
				<input type="text" name="INS_MEM_NUMBER_LINE_1" id="INS_MEM_NUMBER_LINE_1" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['INS_MEM_NUMBER_LINE_1'])){echo $user_data['INS_MEM_NUMBER_LINE_1']; }?>">
			</div>	
			<div class="col-md-3">Date of joining</div>	
			<div class="col-md-3">
				<input type="text" name="INS_MEM_DOJ_LINE_1" id="INS_MEM_DOJ_LINE_1" class="form-control" 
				data-uk-datepicker="{format:'DD-MM-YYYY', maxDate: '+0'}" placeholder="DD-MM-YYYY" value="<?php 
				if(isset($user_data['INS_MEM_DOJ_LINE_1'])){echo dd_mm_yyyy_member($user_data['INS_MEM_DOJ_LINE_1']); }?>">
			</div>
		</div>
				
	</div>
	
	<hr>
	(ii)
	<div class="row">
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Name </div>	  
			<div class="col-md-9"><input type="text" name="INS_MEM_NAME_LINE_2" id="INS_MEM_NAME_LINE_2" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['INS_MEM_NAME_LINE_2'])){echo $user_data['INS_MEM_NAME_LINE_2']; }?>">	
			</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Membership No.</div>	  
			<div class="col-md-3">
				<input type="text" name="INS_MEM_NUMBER_LINE_2" id="INS_MEM_NUMBER_LINE_2" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['INS_MEM_NUMBER_LINE_2'])){echo $user_data['INS_MEM_NUMBER_LINE_2']; }?>">
			</div>	
			<div class="col-md-3">Date of joining</div>	
			<div class="col-md-3">
				<input type="text" name="INS_MEM_DOJ_LINE_2" id="INS_MEM_DOJ_LINE_2" class="form-control" 
				data-uk-datepicker="{format:'DD-MM-YYYY', maxDate: '+0'}" placeholder="DD-MM-YYYY" value="<?php
				if(isset($user_data['INS_MEM_DOJ_LINE_2'])){echo dd_mm_yyyy_member($user_data['INS_MEM_DOJ_LINE_2']); }?>">
			</div>
		</div>
	</div>
	
	<hr>
	(iii)
	<div class="row">
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Name </div>	  
			<div class="col-md-9"><input type="text" name="INS_MEM_NAME_LINE_3" id="INS_MEM_NAME_LINE_3" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['INS_MEM_NAME_LINE_3'])){echo $user_data['INS_MEM_NAME_LINE_3']; }?>">	
			</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Membership No.</div>	  
			<div class="col-md-3">
				<input type="text" name="INS_MEM_NUMBER_LINE_3" id="INS_MEM_NUMBER_LINE_3" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['INS_MEM_NUMBER_LINE_3'])){echo $user_data['INS_MEM_NUMBER_LINE_3']; }?>">
			</div>	
			<div class="col-md-3">Date of joining</div>	
			<div class="col-md-3">
				<input type="text" name="INS_MEM_DOJ_LINE_3" id="INS_MEM_DOJ_LINE_3" class="form-control" 
				data-uk-datepicker="{format:'DD-MM-YYYY', maxDate: '+0'}"placeholder="DD-MM-YYYY" value="<?php
				if(isset($user_data['INS_MEM_DOJ_LINE_3'])){echo dd_mm_yyyy_member($user_data['INS_MEM_DOJ_LINE_3']); }?>">
			</div>
		</div>
	</div>
	
	<hr>
	(iv)
	<div class="row">
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Name </div>	  
			<div class="col-md-9"><input type="text" name="INS_MEM_NAME_LINE_4" id="INS_MEM_NAME_LINE_4" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['INS_MEM_NAME_LINE_4'])){echo $user_data['INS_MEM_NAME_LINE_4']; }?>">	
			</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Membership No.</div>	  
			<div class="col-md-3">
				<input type="text" name="INS_MEM_NUMBER_LINE_4" id="INS_MEM_NUMBER_LINE_4" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['INS_MEM_NUMBER_LINE_4'])){echo $user_data['INS_MEM_NUMBER_LINE_4']; }?>">
			</div>	
			<div class="col-md-3">Date of joining</div>	
			<div class="col-md-3">
				<input type="text" name="INS_MEM_DOJ_LINE_4" id="INS_MEM_DOJ_LINE_4" class="form-control"
				data-uk-datepicker="{format:'DD-MM-YYYY', maxDate: '+0'}" placeholder="DD-MM-YYYY" value="<?php 
				if(isset($user_data['INS_MEM_DOJ_LINE_4'])){echo dd_mm_yyyy_member($user_data['INS_MEM_DOJ_LINE_4']); }?>">
			</div>
		</div>
	</div>
	
	<hr>
	(v)
	<div class="row">
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Name </div>	  
			<div class="col-md-9"><input type="text" name="INS_MEM_NAME_LINE_5" id="INS_MEM_NAME_LINE_5" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['INS_MEM_NAME_LINE_5'])){echo $user_data['INS_MEM_NAME_LINE_5']; }?>">	
			</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Membership No.</div>	  
			<div class="col-md-3">
				<input type="text" name="INS_MEM_NUMBER_LINE_5" id="INS_MEM_NUMBER_LINE_5" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['INS_MEM_NUMBER_LINE_5'])){echo $user_data['INS_MEM_NUMBER_LINE_5']; }?>">
			</div>	
			<div class="col-md-3">Date of joining</div>	
			<div class="col-md-3">
				<input type="text" name="INS_MEM_DOJ_LINE_5" id="INS_MEM_DOJ_LINE_5" class="form-control"
				data-uk-datepicker="{format:'DD-MM-YYYY', maxDate: '+0'}" placeholder="DD-MM-YYYY" value="<?php
				if(isset($user_data['INS_MEM_DOJ_LINE_5'])){echo dd_mm_yyyy_member($user_data['INS_MEM_DOJ_LINE_5']); }?>">
			</div>
		</div>
	</div>
	
	<hr>
	
  <div class="clearfix"></div>
  </div>
</div>



<div class="panel panel-default">
  <div class="panel-heading"><strong>13. Whether any paid assistant stated at serial number 12 above is partner or proprietor or paid assistant with any other firm(s) or chartered accountant in practice any where in India?</strong></div>
  <div class="panel-body">
      <div class="col-md-1">
    <input type="radio"     name="PAID_ASSISTANT" id="PAID_ASSISTANT_1" value="Yes"      <?php 
	//if(isset($user_data['PAID_ASSISTANT']) && $user_data['PAID_ASSISTANT']=='IND'){  echo"checked";  }
	//if(isset($user_data['PAID_ASSISTANT'])){echo $user_data['PAID_ASSISTANT']; }
	
	if(isset($user_data['PAID_ASSISTANT']) && $user_data['PAID_ASSISTANT']=='Yes' ){ echo "checked"; }
	?> >
    Yes
  </div>
  
    <div class="col-md-1">
    <input type="radio"   name="PAID_ASSISTANT" id="PAID_ASSISTANT_2" value="NO"      <?php 
	//if(isset($user_data['PAID_ASSISTANT']) && $user_data['PAID_ASSISTANT']!='IND'){  echo"checked";  }
	//if(isset($user_data['PAID_ASSISTANT'])){echo $user_data['PAID_ASSISTANT']; }
	if(isset($user_data['PAID_ASSISTANT']) && $user_data['PAID_ASSISTANT']=='NO' ){ echo "checked"; }
	?>>
    NO
  </div>
  
  <div class="clearfix"></div>
  </div>
</div> 


<div class="panel panel-default">
  <div class="panel-heading"><strong>14. If yes,give details</strong></div>
  <div class="panel-body">
	(i)
	<div class="row">
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Name of Paid Assistant </div>	  
			<div class="col-md-6"><input type="text" name="PAID_ASSISTANCE_NAME_LINE_1" id="PAID_ASSISTANCE_NAME_LINE_1" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['PAID_ASSISTANCE_NAME_LINE_1'])){
				echo $user_data['PAID_ASSISTANCE_NAME_LINE_1']; }?>">	</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Name(s) of the firm(s) in which engaged as partner/proprietor/paid assistant</div>	  
			<div class="col-md-6"><input type="text" name="ENGAGED_PAR_PRO_PA_NAME_LINE_1" id="ENGAGED_PAR_PRO_PA_NAME_LINE_1" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['ENGAGED_PAR_PRO_PA_NAME_LINE_1'])){
				echo $user_data['ENGAGED_PAR_PRO_PA_NAME_LINE_1']; }?>">	</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Capacity in which connected with the firm, i.e.,as partner/proprietor/paid assistant</div>	  
			<div class="col-md-6">
				<input type="radio"   name="ENGAGED_CAP_CONN_LINE_1" id="ENGAGED_CAP_CONN_LINE_11" value="Proprietor"      <?php
				//if(isset($user_data['MRH_NATIONALITY']) && $user_data['MRH_NATIONALITY']!='IND'){  echo"checked";  }
				//if(isset($user_data['ENGAGED_CAP_CONN_LINE_1'])){echo $user_data['ENGAGED_CAP_CONN_LINE_1']; }
				
				if(isset($user_data['ENGAGED_CAP_CONN_LINE_1']) && $user_data['ENGAGED_CAP_CONN_LINE_1']=='Proprietor' ){ echo "checked"; }
				?>>Proprietor
				
				<input type="radio"   name="ENGAGED_CAP_CONN_LINE_1" id="ENGAGED_CAP_CONN_LINE_12" value="Partner"      <?php 
				//if(isset($user_data['MRH_NATIONALITY']) && $user_data['MRH_NATIONALITY']!='IND'){  echo"checked";  }
				//if(isset($user_data['ENGAGED_CAP_CONN_LINE_1'])){echo $user_data['ENGAGED_CAP_CONN_LINE_1']; }
				
				if(isset($user_data['ENGAGED_CAP_CONN_LINE_1']) && $user_data['ENGAGED_CAP_CONN_LINE_1']=='Partner' ){ echo "checked"; }
				?>>Partner
				
				<input type="radio"   name="ENGAGED_CAP_CONN_LINE_1" id="ENGAGED_CAP_CONN_LINE_13" value="Paid Assistant"      <?php
				//if(isset($user_data['MRH_NATIONALITY']) && $user_data['MRH_NATIONALITY']!='IND'){  echo"checked";  }
				//if(isset($user_data['ENGAGED_CAP_CONN_LINE_1'])){echo $user_data['ENGAGED_CAP_CONN_LINE_1']; }
				
				if(isset($user_data['ENGAGED_CAP_CONN_LINE_1']) && $user_data['ENGAGED_CAP_CONN_LINE_1']=='Paid Assistant' ){ echo "checked"; }
				?>>Paid Assistant
			</div>				
		</div>		
	</div>
	
	<hr>
	(ii)
	<div class="row">
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Name of Paid Assistant </div>	  
			<div class="col-md-6"><input type="text" name="PAID_ASSISTANCE_NAME_LINE_2" id="PAID_ASSISTANCE_NAME_LINE_2" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['PAID_ASSISTANCE_NAME_LINE_2'])){
				echo $user_data['PAID_ASSISTANCE_NAME_LINE_2']; }?>">	</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Name(s) of the firm(s) in which engaged as partner/proprietor/paid assistant</div>	  
			<div class="col-md-6"><input type="text" name="ENGAGED_PAR_PRO_PA_NAME_LINE_2" id="ENGAGED_PAR_PRO_PA_NAME_LINE_2" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['ENGAGED_PAR_PRO_PA_NAME_LINE_2'])){
				echo $user_data['ENGAGED_PAR_PRO_PA_NAME_LINE_2']; }?>">	</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Capacity in which connected with the firm, i.e.,as partner/proprietor/paid assistant</div>	  
			<div class="col-md-6">
				<input type="radio"   name="ENGAGED_CAP_CONN_LINE_2" id="ENGAGED_CAP_CONN_LINE_14" value="Proprietor"      <?php 
				//if(isset($user_data['ENGAGED_CAP_CONN_LINE_2']) && $user_data['ENGAGED_CAP_CONN_LINE_2']!='IND'){  echo"checked";  }
				//if(isset($user_data['ENGAGED_CAP_CONN_LINE_2'])){echo $user_data['ENGAGED_CAP_CONN_LINE_2']; }
				
				
				if(isset($user_data['ENGAGED_CAP_CONN_LINE_2']) && $user_data['ENGAGED_CAP_CONN_LINE_2']=='Proprietor' ){ echo "checked"; }
				?>>Proprietor
				
				<input type="radio"   name="ENGAGED_CAP_CONN_LINE_2" id="ENGAGED_CAP_CONN_LINE_24" value="Partner"      <?php 
				//if(isset($user_data['ENGAGED_CAP_CONN_LINE_2']) && $user_data['ENGAGED_CAP_CONN_LINE_2']!='IND'){  echo"checked";  }
				//if(isset($user_data['ENGAGED_CAP_CONN_LINE_2'])){echo $user_data['ENGAGED_CAP_CONN_LINE_2']; }
				
				
				if(isset($user_data['ENGAGED_CAP_CONN_LINE_2']) && $user_data['ENGAGED_CAP_CONN_LINE_2']=='Partner' ){ echo "checked"; }
				?>>Partner
				
				<input type="radio"   name="ENGAGED_CAP_CONN_LINE_2" id="ENGAGED_CAP_CONN_LINE_34" value="Paid Assistant"      <?php 
				//if(isset($user_data['ENGAGED_CAP_CONN_LINE_2']) && $user_data['ENGAGED_CAP_CONN_LINE_2']!='IND'){  echo"checked";  
				//if(isset($user_data['ENGAGED_CAP_CONN_LINE_2'])){echo $user_data['ENGAGED_CAP_CONN_LINE_2']; }
				
				
				if(isset($user_data['ENGAGED_CAP_CONN_LINE_2']) && $user_data['ENGAGED_CAP_CONN_LINE_2']=='Paid Assistant' ){ echo "checked"; }
				?>>Paid Assistant
			</div>				
		</div>		
	</div>
	
	<hr>
	(iii)
	<div class="row">
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Name of Paid Assistant </div>	  
			<div class="col-md-6"><input type="text" name="PAID_ASSISTANCE_NAME_LINE_3" id="PAID_ASSISTANCE_NAME_LINE_3" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['PAID_ASSISTANCE_NAME_LINE_3'])){
				echo $user_data['PAID_ASSISTANCE_NAME_LINE_3']; }?>">	</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Name(s) of the firm(s) in which engaged as partner/proprietor/paid assistant</div>	  
			<div class="col-md-6"><input type="text" name="ENGAGED_PAR_PRO_PA_NAME_LINE_3" id="ENGAGED_PAR_PRO_PA_NAME_LINE_3" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['ENGAGED_PAR_PRO_PA_NAME_LINE_3'])){
				echo $user_data['ENGAGED_PAR_PRO_PA_NAME_LINE_3']; }?>">	</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-6">Capacity in which connected with the firm, i.e.,as partner/proprietor/paid assistant</div>	  
			<div class="col-md-6">
				<input type="radio"   name="ENGAGED_CAP_CONN_LINE_3" id="ENGAGED_CAP_CONN_LINE_31" value="Proprietor"      <?php
				//if(isset($user_data['ENGAGED_CAP_CONN_LINE_3']) && $user_data['MRH_NATIONALITY']!='IND'){  echo"checked";  }
				//if(isset($user_data['ENGAGED_CAP_CONN_LINE_3'])){echo $user_data['ENGAGED_CAP_CONN_LINE_3']; }
				
				if(isset($user_data['ENGAGED_CAP_CONN_LINE_3']) && $user_data['ENGAGED_CAP_CONN_LINE_3']=='Proprietor' ){ echo "checked"; }
				?>>Proprietor
				
				<input type="radio"   name="ENGAGED_CAP_CONN_LINE_3" id="ENGAGED_CAP_CONN_LINE_32" value="Partner"      <?php
				//if(isset($user_data['ENGAGED_CAP_CONN_LINE_3']) && $user_data['MRH_NATIONALITY']!='IND'){  echo"checked";  }
				//if(isset($user_data['ENGAGED_CAP_CONN_LINE_3'])){echo $user_data['ENGAGED_CAP_CONN_LINE_3']; }
				
				
				if(isset($user_data['ENGAGED_CAP_CONN_LINE_3']) && $user_data['ENGAGED_CAP_CONN_LINE_3']=='Partner' ){ echo "checked"; }
				?>>Partner
				
				<input type="radio"   name="ENGAGED_CAP_CONN_LINE_3" id="ENGAGED_CAP_CONN_LINE_33" value="Paid Assistant"      <?php 
				//if(isset($user_data['ENGAGED_CAP_CONN_LINE_3']) && $user_data['MRH_NATIONALITY']!='IND'){  echo"checked";  }
				//if(isset($user_data['ENGAGED_CAP_CONN_LINE_3'])){echo $user_data['ENGAGED_CAP_CONN_LINE_3']; }
				
				
				if(isset($user_data['ENGAGED_CAP_CONN_LINE_3']) && $user_data['ENGAGED_CAP_CONN_LINE_3']=='Paid Assistant' ){ echo "checked"; }
				?>>Paid Assistant
			</div>				
		</div>		
	</div>
	
	<hr>
	
  <div class="clearfix"></div>
  </div>
</div>




<div class="panel panel-default">
  <div class="panel-heading"><strong>15. Whether any paid assistant stated at serial number 12 above is practising in his individual name?</strong></div>
  <div class="panel-body">
      <div class="col-md-1">
    <input type="radio"     name="PAID_ASSISTANCE_STATUS" id="PAID_ASSISTANCE_STATUS_1" value="Yes"      <?php
	//if(isset($user_data['PAID_ASSISTANCE_STATUS']) && $user_data['PAID_ASSISTANCE_STATUS']=='IND'){  echo"checked";  }
	//if(isset($user_data['PAID_ASSISTANCE_STATUS'])){echo $user_data['PAID_ASSISTANCE_STATUS']; }
	
	
	if(isset($user_data['PAID_ASSISTANCE_STATUS']) && $user_data['PAID_ASSISTANCE_STATUS']=='Yes' ){ echo "checked"; }
	?> >
    Yes
  </div>
  
    <div class="col-md-1">
    <input type="radio"   name="PAID_ASSISTANCE_STATUS" id="PAID_ASSISTANCE_STATUS_2" value="NO"      <?php
	//if(isset($user_data['PAID_ASSISTANCE_STATUS']) && $user_data['PAID_ASSISTANCE_STATUS']!='IND'){  echo"checked";  }
	//if(isset($user_data['PAID_ASSISTANCE_STATUS'])){echo $user_data['PAID_ASSISTANCE_STATUS']; }
	
	
	if(isset($user_data['PAID_ASSISTANCE_STATUS']) && $user_data['PAID_ASSISTANCE_STATUS']=='NO' ){ echo "checked"; }
	?>>
    NO
  </div>
  
  <div class="clearfix"></div>
  </div>
</div> 



<div class="panel panel-default">
  <div class="panel-heading"><strong>16. If yes,give name(s) and membership number(s) of the paid assistant(s)</strong></div>
  <div class="panel-body">
	(i)
	<div class="row">
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Name </div>	  
			<div class="col-md-9"><input type="text" name="INDIVISUAL_PA_NAME_LINE_1" id="INDIVISUAL_PA_NAME_LINE_1" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['INDIVISUAL_PA_NAME_LINE_1'])){echo $user_data['INDIVISUAL_PA_NAME_LINE_1']; }?>">	
			</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Membership No.</div>	  
			<div class="col-md-9"><input type="text" name="INDIVISUAL_PA_MEM_NO_LINE_1" id="INDIVISUAL_PA_MEM_NO_LINE_1" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['INDIVISUAL_PA_MEM_NO_LINE_1'])){
				echo $user_data['INDIVISUAL_PA_MEM_NO_LINE_1']; }?>">	</div>				
		</div>
				
	</div>
	
	<hr>
	(ii)
	<div class="row">
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Name </div>	  
			<div class="col-md-9"><input type="text" name="INDIVISUAL_PA_NAME_LINE_2" id="INDIVISUAL_PA_NAME_LINE_2" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['INDIVISUAL_PA_NAME_LINE_2'])){
				echo $user_data['INDIVISUAL_PA_NAME_LINE_2']; }?>">	
			</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Membership No.</div>	  
			<div class="col-md-9"><input type="text" name="INDIVISUAL_PA_MEM_NO_LINE_2" id="INDIVISUAL_PA_MEM_NO_LINE_2" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['INDIVISUAL_PA_MEM_NO_LINE_2'])){
				echo $user_data['INDIVISUAL_PA_MEM_NO_LINE_2']; }?>">	</div>				
		</div>
	</div>
	
	<hr>
	(iii)
	<div class="row">
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Name </div>	  
			<div class="col-md-9"><input type="text" name="INDIVISUAL_PA_NAME_LINE_3" id="INDIVISUAL_PA_NAME_LINE_3" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['INDIVISUAL_PA_NAME_LINE_3'])){
				echo $user_data['INDIVISUAL_PA_NAME_LINE_3']; }?>">	
			</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Membership No.</div>	  
			<div class="col-md-9"><input type="text" name="INDIVISUAL_PA_MEM_NO_LINE_3" id="INDIVISUAL_PA_MEM_NO_LINE_3" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['INDIVISUAL_PA_MEM_NO_LINE_3'])){
				echo $user_data['INDIVISUAL_PA_MEM_NO_LINE_3']; }?>">	</div>				
		</div>
	</div>
	
	<hr>
	(iv)
	<div class="row">
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Name </div>	  
			<div class="col-md-9"><input type="text" name="INDIVISUAL_PA_NAME_LINE_4" id="INDIVISUAL_PA_NAME_LINE_4" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['INDIVISUAL_PA_NAME_LINE_4'])){echo $user_data['INDIVISUAL_PA_NAME_LINE_4']; }?>">	
			</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Membership No.</div>	  
			<div class="col-md-9"><input type="text" name="INDIVISUAL_PA_MEM_NO_LINE_4" id="INDIVISUAL_PA_MEM_NO_LINE_4" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['INDIVISUAL_PA_MEM_NO_LINE_4'])){
				echo $user_data['INDIVISUAL_PA_MEM_NO_LINE_4']; }?>">	</div>				
		</div>
	</div>
	
	<hr>
	
	
	
  <div class="clearfix"></div>
  </div>
</div>



<div class="panel panel-default">
<div class="panel-heading"></div>
<div class="panel-body">
<div class="row">
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Date:</div>	  
			<div class="col-md-9"><input type="text" name="INDIVISUAL_PA_MEM_DATE" id="INDIVISUAL_PA_MEM_DATE" class="form-control" 
			data-uk-datepicker="{format:'DD-MM-YYYY', maxDate: '+0'}" placeholder="DD-MM-YYYY" value="<?php if(isset($user_data['INDIVISUAL_PA_MEM_DATE'])){echo $user_data['INDIVISUAL_PA_MEM_DATE']; }?>">	
			</div>				
		</div>
		
		<div class="col-md-12 margin-15px">
			<div class="col-md-3">Place:</div>	  
			<div class="col-md-9"><input type="text" name="INDIVISUAL_PA_MEM_PLACE" id="INDIVISUAL_PA_MEM_PLACE" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['INDIVISUAL_PA_MEM_PLACE'])){
				echo $user_data['INDIVISUAL_PA_MEM_PLACE']; }?>"></div>				
		</div>
			
</div>
</div>
</div>
<div class="row margin-15px">
<div class="col-md-15" style="text-align:center">
			
		<div><strong>Signature(s) of the proprietor / all partner(s) of the  firm  with their Membership number(s)</strong></div>
	</div>

</div>

<div class="row margin-15px">

	<div class="col-md-2" style="text-align:center">

	</div>

	<div class="col-md-3" style="text-align:center">
		<div style="border: 2px solid black;padding: 50px;"></div>
		
		
		<div><small>(Within the frame only)</small></div>
		<div><strong>Signature</strong></div>
		
	</div>
		<div class="col-md-2" style="text-align:center">

	</div>
	<div class="col-md-3" style="text-align:center">
		<div style="border: 2px solid black;padding: 50px;"></div>
		
		<div><small>(Within the frame only)</small></div>
		<div><strong>Signature</strong></div>
	</div>
				
</div>

<div class="row margin-15px">

	<div class="col-md-1" style="text-align:left">

	</div>

	<div class="col-md-5" style="text-align:left">
		<div  class="col-md-5" style="font-size: 13px;width: 36% !important;"><strong>Membership Number:</strong></div>	  
		<div class="col-md-6"><input type="text" name="SIGNATURE_MM_NUMBER_1" id="SIGNATURE_MM_NUMBER_1" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['SIGNATURE_MM_NUMBER_1'])){echo $user_data['SIGNATURE_MM_NUMBER_1']; }?>"></div>	  
	</div>
	
	<div class="col-md-5" style="text-align:left">
		<div  class="col-md-5" style="font-size: 13px;width: 36% !important;"><strong>Membership Number:</strong></div>	  
		<div class="col-md-6"><input type="text" name="SIGNATURE_MM_NUMBER_2" id="SIGNATURE_MM_NUMBER_2" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['SIGNATURE_MM_NUMBER_2'])){echo $user_data['SIGNATURE_MM_NUMBER_2']; }?>"></div>	
	</div>
	
</div>

<div class="row margin-15px">

	<div class="col-md-2" style="text-align:center">

	</div>

	<div class="col-md-3" style="text-align:center">
		<div style="border: 2px solid black;padding: 50px;"></div>
		
		
		<div><small>(Within the frame only)</small></div>
		<div><strong>Signature</strong></div>
		
	</div>
		<div class="col-md-2" style="text-align:center">

	</div>
	<div class="col-md-3" style="text-align:center">
		<div style="border: 2px solid black;padding: 50px;"></div>
		
		<div><small>(Within the frame only)</small></div>
		<div><strong>Signature</strong></div>
	</div>
				
</div>

<div class="row margin-15px">

	<div class="col-md-1" style="text-align:left">

	</div>

	<div class="col-md-5" style="text-align:left">
		<div  class="col-md-5" style="font-size: 13px;width: 36% !important;"><strong>Membership Number:</strong></div>	  
		<div class="col-md-6"><input type="text" name="SIGNATURE_MM_NUMBER_3" id="SIGNATURE_MM_NUMBER_3" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['SIGNATURE_MM_NUMBER_3'])){echo $user_data['SIGNATURE_MM_NUMBER_3']; }?>"></div>	  
	</div>
	
	<div class="col-md-5" style="text-align:left">
		<div  class="col-md-5" style="font-size: 13px;width: 36% !important;"><strong>Membership Number:</strong></div>	  
		<div class="col-md-6"><input type="text" name="SIGNATURE_MM_NUMBER_4" id="SIGNATURE_MM_NUMBER_4" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['SIGNATURE_MM_NUMBER_4'])){echo $user_data['SIGNATURE_MM_NUMBER_4']; }?>"></div>	
	</div>
	
</div>

<div class="row margin-15px">

	<div class="col-md-2" style="text-align:center">

	</div>

	<div class="col-md-3" style="text-align:center">
		<div style="border: 2px solid black;padding: 50px;"></div>
		
		
		<div><small>(Within the frame only)</small></div>
		<div><strong>Signature</strong></div>
		
	</div>
		<div class="col-md-2" style="text-align:center">

	</div>
	<div class="col-md-3" style="text-align:center">
		<div style="border: 2px solid black;padding: 50px;"></div>
		
		<div><small>(Within the frame only)</small></div>
		<div><strong>Signature</strong></div>
	</div>
				
</div>

<div class="row margin-15px">

	<div class="col-md-1" style="text-align:left">

	</div>

	<div class="col-md-5" style="text-align:left">
		<div class="col-md-5" style="font-size: 13px;width: 36% !important;"><strong>Membership Number:</strong></div>	  
		<div class="col-md-6"><input type="text" name="SIGNATURE_MM_NUMBER_5" id="SIGNATURE_MM_NUMBER_5" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['SIGNATURE_MM_NUMBER_5'])){echo $user_data['SIGNATURE_MM_NUMBER_5']; }?>"></div>	  
	</div>
	
	<div class="col-md-5" style="text-align:left">
		<div  class="col-md-5" style="font-size: 13px;width: 36% !important;"><strong>Membership Number:</strong></div>	  
		<div class="col-md-6"><input type="text" name="SIGNATURE_MM_NUMBER_6" id="SIGNATURE_MM_NUMBER_6" class="form-control" placeholder="Text input" value="<?php if(isset($user_data['SIGNATURE_MM_NUMBER_6'])){echo $user_data['SIGNATURE_MM_NUMBER_6']; }?>"></div>	
	</div>
	
	<!--<div class="col-md-5" style="text-align:left">
		<div  class="col-md-5" style="font-size: 13px;width: 36% !important;"><strong></strong></div>	  
		<div class="col-md-6"><input type="text" name="DELAY_FEE" id="DELAY_FEE" class="form-control" placeholder="Text input" readonly value="<?php //if(isset($user_data['DELAY_FEE'])){echo $user_data['DELAY_FEE']; }?>"></div>	
	</div-->
	
	
	
</div>
<br/>

<?php if($user_data['MRH_TRANS_STATUS']=='Transaction Successful'){?>
<div class="panel panel-default">
  <div class="panel-heading"><strong>You have Successfully paid for the restoration !!</strong></div>
 
</div>

<?php } ?>
<div>&nbsp;</div>
<!--<center><div id='paid'><?php //if($user_data['PRO_address_updated']!='1') {?>	<a class="btn btn-primary" href="javascript:void(0)" onclick="save_data();" role="button">SAVE</a><?php //} ?></div></center>-->


<?php if($user_data['FORM_SAVE_STATUS']!='1'){ ?>
		<div class="panel-body">
			<center><div class="row margin-15px">
				<a class="btn btn-primary" href="javascript:void(0)" onclick="save_data();" role="button">SAVE</a>
				<?php if($user_data != 1){ ?>
				<a class="btn btn-primary" href="javascript:void(0)" onclick="save_lock();" role="button">SAVE & LOCK</a>
				<?php } ?>
			</div>	</center>
		</div>	
		<?php } ?>




</form><br/><br/>
<?php if($user_data['TOTAL_AMT'] > 0){
	?>
	
	
	<table>
<tr><td> <?php if($user_data['FORM_SAVE_STATUS'] =='1' && $user_data['MRH_TRANS_STATUS']==''){?>
<form action="vpc_php_serverhost_do_form18.php" method="post">
<input type="hidden" name="Title" value="PHP VPC 3-Party">
    <!-- get user input -->
    <table width="80%" align="center" border="0" cellpadding='0' cellspacing='0'>
    <input type="hidden" name="virtualPaymentClientURL" size="63" value="https://migs.mastercard.com.au/vpcpay" maxlength="250">
    <input type="hidden" name="vpc_Version" value="1" size="20" maxlength="8">
	<input type="hidden" name="vpc_Command" value="pay" size="20" maxlength="16"> 
    <input type="hidden" name="vpc_AccessCode" value="77BF19A1" size="20" maxlength="8">
 	 <!--Live credential
     <input type="hidden" name="vpc_AccessCode" value="EC4C8852" size="20" maxlength="8">
	 -->
    <tr  >
         
       
        <td><input type="hidden" name="vpc_MerchTxnRef" value="<?php if(isset($user_data['FORM_NO'])){ echo $user_data['FORM_NO']; }?>" size="20" maxlength="40"></td>
    </tr>
     <input type="hidden" name="vpc_Merchant" value="TESTICAI12022016" size="20" maxlength="16">  </tr>
	  <!--Live credential
      <input type="hidden" name="vpc_Merchant" value="ICAI12022016" size="20" maxlength="16">
	  -->
	 <input type="hidden" name="vpc_OrderInfo" value="<?php if(isset($user_data['MRH_MRN'])){ echo $user_data['MRH_MRN']; }?>" size="20" maxlength="34"> 
    <tr>
        <td>&nbsp;</td>
        <!--<td align="right"><b><i>Purchase Amount: </i></b></td>-->
        <td><input type="hidden" name="vpc_Amount" value="<?php echo $user_data['TOTAL_AMT'];?>" size="20" maxlength="10"></td>
    </tr>
    <input type="hidden" name="vpc_Locale" value="en" size="20" maxlength="5"> 
	<input type="hidden" name="vpc_ReturnURL" size="63" value="<?php echo $wwwroot;?>/vpc_php_serverhost_dr_form18.php" maxlength="250"> 
    <tr>    <td colspan="2">&nbsp;</td> 
            <td><input class="btn btn-primary" type="submit" name="SubButL" value="Pay Now!"></td></tr>
        <input type="hidden" name="vpc_TicketNo" maxlength="15" value="Form 18" readonly> 
    </table><br/>
</form> <?php } ?></td></tr>
</table>
	
	
	
	<?php
	
} ?> 



<div>
<div style="text-align:justify;font-weight:bold;">
<div class="col-md-1">
</div>
<div class="col-md-10">
Note:Particulars in Form 18 should be submitted for the constitution/reconstitution of the firm within one month from the date of constitution or change in constitution.<br/>
In case of delay in filling the form beyond the stipulated period as stated above,it has to be accompained by a request for condonation and appropriate condonation fee as per the following schedule:
</div></div><br/><br/>
<div class="panel-body">
<div class="row margin-15px">
<br/><br/><br/>
	<div class="col-md-12" style="padding-left:220px;text-align:center;font-weight: bold">
			<table border="1" cellspacing="3" cellpadding="2" width="80%">
			<tr>
			<td rowspan=3 width="30%">Regulation</td>
			<td colspan=3>Period of Delay1Corresponding fee  to be charged</td>
			</tr>
			<tr>
			<td width="20%">30 days</td>
			<td width="20%">31-180 days</td>
			<td width="20%">Beyond 181 days</td>
			</tr>
			<tr>
			<td>Rs.</td>
			<td>Rs.</td>
			<td>Rs.</td>
			</tr>
			<tr>
			<td>190 (4)- Condonation of delay in filing Form 18, for registration of firm name</td>
			<td>100</td>
			<td>300</td>
			<td>1000</td>
			</tr>
						<tr>
			<td>190 (7) - Condonation of delay in filing Form 18 notifying change in particulars of office/firms</td>
			<td>100</td>
			<td>300</td>
			<td>1000</td>
			</tr>
			</table>
	</div>
</div>


<div class="row margin-15px" style="text-align:justify;">
<div class="col-md-1">
</div>
<div class="col-md-10">
<p>The levy of fee would come into effect in respect of requests for condonation received on or after 1st April, 2002. It may be clarified that each case of condonation received alongwith the fee, will be considered on its merits.
<br><br><br>
Regulation 190(4)/190(7) -Condonation of delay in filing Form 18, for registration/re-constitution/ closure of the firm: The following supporting documents should accompany along with the request for confonation<br>
<ul>
<li>1. Certified true copy of the partnership deed</li>
<li>2. Copies  of income Tax Returns of the firm and partners/ proprietor, as the case may be.<br>
In case where the income of the firm is not taxable, certified copy of the accounts of the firm /member(s).</li>
<li>3. Certified true copy of the dissolution deed.</li>
</ul>
</p>
</div>
</div>
</div>
</div>



 <!-- <form action="<?php //echo $wwwroot; ?>/test3.php" method="post" name="download_pdf" id="download_pdf">
			<input type="hidden" name="txt_Org2" id="txt_Org2" >
			  <input type="submit" text="Download">
			</form>-->
			
  <!-------------------------------  Payment gateway Start-------------------------->
  <?php// if($user_data['MRH_TRANS_STATUS']!='Transaction Successful'){?>

  
  <?php // } ?>
  
  <!-------------------------------------  Payment gateway -------------------------->
 
  <div>
  <?php if($user_data['pdf_path']!=''){
	    
  if($user_data['Digital_Signed_Attched']=='1'){
	  
	  $pdf_path = get_pdf_path();
	  
	  echo "<a href='".$wwwroot."/generated_pdf/form9/".$pdf_path['pdf_path']."' target='_blank'> Click to Download Digitally Signed PDF</a> ";
	  }else{
		  
  if($user_data['digital_certificate_number']!=''){
	  
  ?>
  <iframe src="<?php echo $wwwroot; ?>/default.aspx?filepath=<?php echo $user_data['pdf_path']; ?>&UserID=<?php echo $_SESSION['UserID'];?>&folder_name=form9&cn=<?php echo $user_data['digital_certificate_number']; ?>&exp_date=<?php echo $user_data['certificate_expired_date'];?>" width="100%" height="80" scrolling="no" style="overflow:hidden; margin-top:-4px; margin-left:-4px; border:none;"></iframe> 
  <?php }else{?>
	   <a href='<?php echo $wwwroot;?>/signature_details.php' target="_blank">  Register Digital Signature </a> | <?php $pdf_path = get_pdf_path();
	  echo "<a href='".$wwwroot."/generated_pdf/form9/".$pdf_path['pdf_path']."' target='_blank'> Click to Download  PDF</a> "; ?>
 <?php } }} else{ 
	  if($user_data['Digital_Signed_Attched']!='1'){  
	  if($user_data['MRH_TRANS_STATUS']=='Transaction Successful'){ ?><a href='<?php echo $wwwroot; ?>/FormPDF/pdf/form9.php' target="_blank">  Generate PDF  </a> 
	  <?php }}}?>	
</div>
			

  <div style="padding-top:20px; margin-bottom:20px; margin-top:20px; text-align:center; border-top:1px solid #cccccc;">
  <div class="row">
    Copyright 2016. All right reserved to the ICAI.<br>
Best viewed in 1280x1024 resolution
 <form id="form1" action="" method="post" >
     
        <div>
             <input type="hidden" name="txt_Org" id="txt_Org" >            
			 <input type="hidden" name="HF_DSC_SerialNo_MD5" id="HF_DSC_SerialNo_MD5" >
			 <input type="hidden" name="HF_DSC_SerialNo_Hash" id="HF_DSC_SerialNo_Hash" >
			 <input type="hidden" name="HF_DSC_UName" id="HF_DSC_UName" >
			 <input type="hidden" name="HF_DSC_ValidDate" id="HF_DSC_ValidDate" >
			 <input type="hidden" name="HF_DSC_SerialNo_Encrypt" id="HF_DSC_SerialNo_Encrypt" >
			 <input type="hidden" name="HF_PDF_File_Data_Org" value="" id="HF_PDF_File_Data_Org" >
			 <input type="hidden" name="HF_PDF_File_Path_Org" id="HF_PDF_File_Path_Org" >
			 <input type="hidden" name="HF_Curr_DateTime_Org" id="HF_Curr_DateTime_Org" >
			 <input type="hidden" name="HF_Y_Dim_Org" value="128,128,128,561" id="HF_Y_Dim_Org">
			 <input type="hidden" name="HF_DSC_Attached" id="HF_DSC_Attached">
        </div>
    </form>
	
	
  </div>
</div>  

   </div>   
<script src="<?php echo $wwwroot;?>/assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo $wwwroot;?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $wwwroot;?>/assets/js/jquery.backstretch.min.js"></script>
<script src="<?php echo $wwwroot;?>/js/highlight.js"></script>
<script src="<?php echo $wwwroot;?>/js/docs.js"></script>
<script src="<?php echo $wwwroot;?>/js/form-select.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo $wwwroot;?>/js/bootstrap.min.js"></script>
<script src="<?php echo $wwwroot;?>/js/uikit.min.js"></script>
<script src="<?php echo $wwwroot;?>/js/datepicker.js"></script>  
<script type="text/javascript" src="<?php echo $wwwroot;?>/student/js/form103.js"></script> 



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  <script language="javascript">
 // alert('Only Address fields are editable in form 9');
  /*
$(document).bind('copy', function(e) { alert('Copy is not allowed !!!'); e.preventDefault(); }); $(document).bind('paste', function() { alert('Paste is not allowed !!!'); e.preventDefault(); }); $(document).bind('cut', function() { alert('Cut is not allowed !!!'); e.preventDefault(); }); $(document).bind('contextmenu', function(e) { alert('Right Click is not allowed !!!'); e.preventDefault(); }); */


$(document).ready(function(){
		
	//$('#form18').css('display', 'none');	
	$(document).on('change', '#MRH_MRN_NO', function(){
		var MRH_MRN_NO = $(this).val();
		//alert(MRH_MRN);
		if(MRH_MRN_NO != ''){
			$.ajax({
			url:'ajax.php',
			type: "POST",
			data:{MRH_MRN_NO : MRH_MRN_NO},
			dataType:'JSON',
			success: function(data){
				//alert(data);
				//alert(JSON.stringify(data));
				if(data != ''){
					$('#form18').css('display', 'block');
					$('#STUD_PART1_MEMBER_I').val(data.MRH_FIRST_NAME);
					$('#STUD_PART1_MEMBER_NO').val(MRH_MRN_NO);
					$('#STUD_PART1_MEMBER_NAME').val(data.MRH_FIRST_NAME);
					$('#STUD_PART1_MEMBER_NAME2').val(data.MRH_FIRST_NAME);
				}else{
					alert('Membership No not matched');
					$('#form18').css('display', 'none');
				}								
			},
			error: function(data){
				//alert(data);
			}
		});
		}else{
			alert('Fill Membership No');
		}
	});
	$(document).on('change', '#STUD_PART1_TO_DT', function(){
		var STUD_PART1_TO_DT = $(this).val();
		$('#STUD_PART1_TERMINATED_DT').val(STUD_PART1_TO_DT);
		$('#STUD_PART1_WEF').val(STUD_PART1_TO_DT);
	});
	


	/* $(document).on('click', '#MRH_CONSTITUTION_FORM', function(){
		var STUD_PART1_TO_DT = $(this).val();
		$('input[name=MRH_CONSTITUTION_FORM]:checked').val(STUD_PART1_TO_DT);
		$('#MRH_PRESENT_PARTNERSHIP_DATE').attr('readonly', 'true');
	}); */
	
		
 /*  $('#MRH_CONSTITUTION_FORM').on('click',function() {
	if ($("#MRH_CONSTITUTION_FORM").attr("checked")) {
		$('#MRH_PRESENT_PARTNERSHIP_DATE:input').attr('readonly', 'true');
		//$('#PRESENT_PARTNERSHIP_DATE:input').attr('readonly', 'true');
	}
	else {
		$('#MRH_PRESENT_PARTNERSHIP_DATE:input').removeAttr('readonly');
		//$('#PRESENT_PARTNERSHIP_DATE:input').removeAttr('readonly');
	}
	});	
		 */
		
});



</script>




<?php //if($user_data == 1){ ?>
<script language="javascript">
	//$('#form18').css('display', 'none');
</script>
<?php //}else{ ?>
<script language="javascript">
	//$('#form18').css('display', 'block');		
</script>
<?php //} ?>



<script type="text/javascript">
//ritesheditablecheck

function editablecheck(){
	 //$(document).ready(function(){
		
		//alert('helo');
	
			//$("#MRH_PRESENT_PARTNERSHIP_DATE").prop("disabled", true); //PRESENT_PARTNERSHIP_DATE
			
			$("#PRESENT_PARTNERSHIP_DATE").prop("disabled", true);
		
			$("#SIX_MRH_RES_CITY_CODE").prop("disabled", false);
			$("#SIX_MRH_RES_STATE_CODE").prop("disabled", false);
			$("#SIX_MRH_RES_COU_CODE").prop("disabled", false);
			
			$("#SIX_TWO_MRH_RES_CITY_CODE").prop("disabled", false);
			$("#SIX_TWO_MRH_RES_STATE_CODE").prop("disabled", false);
			$("#SIX_TWO_MRH_RES_COU_CODE").prop("disabled", false);
			
			$("#SIX_THREE_MRH_RES_CITY_CODE").prop("disabled", false);
			$("#SIX_THREE_MRH_RES_STATE_CODE").prop("disabled", false);
			$("#SIX_THREE_MRH_RES_COU_CODE").prop("disabled", false);
		
		
	
		   
    //});

}

	
  

</script>
<script type="text/javascript">
//add ritesh
//$(document).ready(function(){
						/*function editablecheck(){
							//$(document).ready(function(){
								
								alert('helo');
								//$("#MRH_CONSTITUTION_FORM").click(function (){
									
								$("#MRH_PRESENT_PARTNERSHIP_DATE").prop("disabled", true); 
								
									$("#SIX_MRH_RES_CITY_CODE").prop("disabled", false);
									$("#SIX_MRH_RES_STATE_CODE").prop("disabled", false);
									$("#SIX_MRH_RES_COU_CODE").prop("disabled", false);
									
									$("#SIX_TWO_MRH_RES_CITY_CODE").prop("disabled", false);
									$("#SIX_TWO_MRH_RES_STATE_CODE").prop("disabled", false);
									$("#SIX_TWO_MRH_RES_COU_CODE").prop("disabled", false);
									
									$("#SIX_THREE_MRH_RES_CITY_CODE").prop("disabled", false);
									$("#SIX_THREE_MRH_RES_STATE_CODE").prop("disabled", false);
									$("#SIX_THREE_MRH_RES_COU_CODE").prop("disabled", false);
						}*/
	//});
</script>
<script type="text/javascript">
//ritesh	
	function disablecheck(){

		
		//$("#MRH_RECONSTITUTION_FORM").click(function (){
				//$("#MRH_PRESENT_PARTNERSHIP_DATE").prop("disabled",false);//PRESENT_PARTNERSHIP_DATE
				
				$("#PRESENT_PARTNERSHIP_DATE").prop("disabled",false);//
						//alert('Reconstitution disablitity testing');
				$("#SIX_MRH_RES_ADDR_LINE_1").prop("disabled",true);
				$("#SIX_MRH_RES_ADDR_LINE_2").prop("disabled",true);
				$("#SIX_MRH_RES_ADDR_LINE_3").prop("disabled",true);
				$("#SIX_MRH_RES_ADDR_LINE_4").prop("disabled",true);
				$("#SIX_MRH_RES_ZIP_POSTAL_CODE").prop("disabled",true);
				$("#SIX_MRH_RES_TEL").prop("disabled",true);
				$("#SIX_MRH_RES_EMAIL").prop("disabled",true);
				$("#SIX_MRH_RES_MOBILE").prop("disabled",true);
				
				$("#SIX_TWO_MRH_RES_ADDR_LINE_1").prop("disabled",true);
				$("#SIX_TWO_MRH_RES_ADDR_LINE_2").prop("disabled",true);
				$("#SIX_TWO_MRH_RES_ADDR_LINE_3").prop("disabled",true);
				$("#SIX_TWO_MRH_RES_ADDR_LINE_4").prop("disabled",true);
				$("#SIX_TWO_MRH_RES_ZIP_POSTAL_CODE").prop("disabled",true);
				$("#SIX_TWO_MRH_RES_TEL").prop("disabled",true);
				$("#SIX_TWO_MRH_RES_EMAIL").prop("disabled",true);
				$("#SIX_TWO_MRH_RES_MOBILE").prop("disabled",true);
				
				$("#SIX_THREE_MRH_RES_ADDR_LINE_1").prop("disabled",true);
				$("#SIX_THREE_MRH_RES_ADDR_LINE_2").prop("disabled",true);
				$("#SIX_THREE_MRH_RES_ADDR_LINE_3").prop("disabled",true);
				$("#SIX_THREE_MRH_RES_ADDR_LINE_4").prop("disabled",true);
				$("#SIX_THREE_MRH_RES_ZIP_POSTAL_CODE").prop("disabled",true);
				$("#SIX_THREE_MRH_RES_TEL").prop("disabled",true);
				$("#SIX_THREE_MRH_RES_EMAIL").prop("disabled",true);
				$("#SIX_THREE_MRH_RES_MOBILE").prop("disabled",true);
				
				$("#PLACE_OF_BRANCH_1").prop("disabled",true);
				$("#DATE_OF_BRANCH_1").prop("disabled",true);
				$("#PLACE_OF_BRANCH_2").prop("disabled",true);
				$("#DATE_OF_BRANCH_2").prop("disabled",true);
				$("#PLACE_OF_BRANCH_3").prop("disabled",true);
				$("#DATE_OF_BRANCH_3").prop("disabled",true);
				$("#PLACE_OF_BRANCH_4").prop("disabled",true);
				$("#DATE_OF_BRANCH_4").prop("disabled",true);
				$("#PLACE_OF_BRANCH_5").prop("disabled",true);
				$("#DATE_OF_BRANCH_5").prop("disabled",true);
				
				$("#SIX_MRH_RES_CITY_CODE").prop("disabled", true);
				$("#SIX_MRH_RES_STATE_CODE").prop("disabled", true);
				$("#SIX_MRH_RES_COU_CODE").prop("disabled", true);
				
				$("#SIX_TWO_MRH_RES_CITY_CODE").prop("disabled", true);
				$("#SIX_TWO_MRH_RES_STATE_CODE").prop("disabled", true);
				$("#SIX_TWO_MRH_RES_COU_CODE").prop("disabled", true);
				
				$("#SIX_THREE_MRH_RES_CITY_CODE").prop("disabled", true);
				$("#SIX_THREE_MRH_RES_STATE_CODE").prop("disabled", true);
				$("#SIX_THREE_MRH_RES_COU_CODE").prop("disabled", true);

		//});
		/*var applicant_name=$("#applicant_name").val();
			//var dob=$('#dob').val();
			var date1 = new Date(dob);
			var date2 = new Date("2016-10-03");
			a = calcDate(date2,date1);
		   if(a<18){
		   alert('gh');
		   return false;
		   }
		   if(a>35)
		   {
			   alert('not');
		}*/
		
	}
//function validation()
		//{
			//var name_space=/^[a-zA-Z ]*$/;
			
			/*var applicant_name=$("#applicant_name").val();
			//var dob=$('#dob').val();
			var date1 = new Date(dob);
			var date2 = new Date("2016-10-03");
			a = calcDate(date2,date1);
		   if(a<18){
		   alert('gh');
		   return false;
		   }
		   if(a>35)
		   {
			   alert('not');
		}*/
//}
  
  //add by ritesh
 function datecalculation(id)
  
  {
		var select_date=$('#'+id).val(); 
		var from = select_date.split("-");

		var now = new Date();
		var past = new Date(from[2], from[1] - 1, from[0]);
		//console.log(now);
		//console.log(past);
		
		var nowYear = now.getFullYear();
		var pastYear = past.getFullYear();
		var age = nowYear - pastYear;

		//alert(age);
		
		if(age > 3)
		{
		  //alert(diffDays);
		  alert("Please select date between current date to prevoius three year date.");
		  $('#'+id).val("");
		}
	
  }
  
		
 /* }//*/
  
function save_data(){	

	if(document.getElementById("MRH_CONSTITUTION_FORM_1").checked == false) {
		if (document.getElementById("MRH_RECONSTITUTION_FORM_1").checked == false) {
			alert("Please select Form Type");
			document.getElementById('MRH_CONSTITUTION_FORM_1').focus();
			return false;
		}
    }
	
	var FORMATION_PROPRIETORY_DATE = document.getElementById('FORMATION_PROPRIETORY_DATE').value;
	if(FORMATION_PROPRIETORY_DATE == ''){
		alert("Please Fill Date of formation of Proprietory / Partnership firm");
		document.getElementById('FORMATION_PROPRIETORY_DATE').focus();
		return false;
	}
	document.form18.submit();
}




function save_lock(){

	var r = confirm("Please click on OK for finally submit form");
	
	if(document.getElementById("MRH_CONSTITUTION_FORM_1").checked == false) {
		if (document.getElementById("MRH_RECONSTITUTION_FORM_1").checked == false) {
			alert("Please select Form Type");
			document.getElementById('MRH_CONSTITUTION_FORM_1').focus();
			return false;
		}
    }
	
	var FORMATION_PROPRIETORY_DATE = document.getElementById('FORMATION_PROPRIETORY_DATE').value;
	if(FORMATION_PROPRIETORY_DATE == ''){
		document.getElementById('FORMATION_PROPRIETORY_DATE').focus();
		return false;
	}
	
	
	if (r == true) {
		document.getElementById('FORM_SAVE_STATUS').value='1';
		document.form18.submit();
	}
}

var counter = 2;

$("#addButton").click(function () {

	if(counter>10){
            alert("Only 10 textboxes allow");
            return false;
	}
	
	var newTextBoxDiv = $(document.createElement('div')).attr("id", 'TextBoxDiv' + counter);

	newTextBoxDiv.after().html('(vi) <div class="col-md-12 margin-15px"><div class="col-md-3">Name of Partner</div><div class="col-md-9">	<input type="text" name="PARTNER_NAME_6" id="PARTNER_NAME_6" class="form-control" placeholder="Text input" value=""></div></div>	<div class="col-md-12 margin-15px"><div class="col-md-3">Membership Number</div><div class="col-md-9"><input type="text" name="MEMBERSHIP_NUMBER_6" id="MEMBERSHIP_NUMBER_6" class="form-control" placeholder="Text input" value=""></div></div><div class="col-md-12 margin-15px"><div class="col-md-3">Date from which Certificate of Practice held</div><div class="col-md-9"><input type="text" name="CERTIFICATE_DATE_6" id="CERTIFICATE_DATE_6" onchange="datecalculation(this.id)" class="form-control "  data-uk-datepicker="{format:"DD-MM-YYYY", maxDate: "+0"}"  placeholder="DD-MM-YYYY"  readonly value=""></div></div>');
		  
	/*newTextBoxDiv.after().html('<div class="col-md-12"><div class="col-md-3"><div class="form-group">' +
	      '<input value="" type="text"  name="milestone[]" value="" class="form-control" id="milestone" placeholder="Milestone" required></div></div><div class="col-md-3"><div class="form-group">' +
	      '<input value="" type="text" name="milestone_name[]" value="" required class="form-control" placeholder="MileStone Name" id="milestone_name"></div></div><div class="col-md-3"><div class="form-group">' +
	      '<input type="text" class="form-control date-picker" name ="milestone_start_date[]" id="milestone_start_date"  placeholder="dd/mm/yyyy" ></div></div><div class="col-md-3"><div class="form-group">' +
	      '<input type="text" class="form-control date-picker" name="milestone_end_date[]" id="milestone_end_date"   placeholder="dd/mm/yyyy" ></div></div></div>');*/
		  
	

	newTextBoxDiv.appendTo("#TextBoxesGroup");

	counter++;
});

$("#removeButton").click(function (){
	if(counter==1){
		alert("No more textbox to remove");
		return false;
	}

	counter--;

	$("#TextBoxDiv" + counter).remove();

});
</script>


  </body>
  
</html>