<?php
include_once('connection.php'); 
global $wwwroot;
$wwwroot='http://letmepractice.com/';
function validatefun($var)
{
	if($var!="")
	{
		return true;
	}
}
if(isset($_POST['subData']))
{
	$i=0;
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$contactNO=$_POST['contactNO'];
	$address=$_POST['address'];
	$country=$_POST['country'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$pin=$_POST['pin'];
	$exam=$_POST['exam'];
	$amt_text=$_POST['amt_text'];
	$date=date('d-m-Y');
	$ip=0;
if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
}else{
    $ip = $_SERVER['REMOTE_ADDR'];
}	
	if(!validatefun($fname))
	{
		$message="Please Enter First Name";
		$i++;
		?>
		<script> 
			 window.location.href = 'http://letmepractice.com/register.php?message=<?php echo $message ?>';
		</script>
       <?php
	}
	if(!validatefun($lname))
	{
		$message="Please Enter Last Name";
		$i++;
		?>
		<script> 
			 window.location.href = 'http://letmepractice.com/register.php?message=<?php echo $message ?>';
		</script>
       <?php
	}
	if(!validatefun($email))
	{
		$message="Please Enter Valid Email Id";
		$i++;
		?>
		<script> 
			 window.location.href = 'http://letmepractice.com/register.php?message=<?php echo $message ?>';
		</script>
       <?php
	}
	if(!validatefun($contactNO))
	{
		$message="Please Enter Contact Number";
		$i++;
		?>
		<script> 
			 window.location.href = 'http://letmepractice.com/register.php?message=<?php echo $message ?>';
		</script>
       <?php
	}
	if(!validatefun($address))
	{
		$message="Please Enter Address";
		$i++;
		?>
		<script> 
			 window.location.href = 'http://letmepractice.com/register.php?message=<?php echo $message ?>';
		</script>
       <?php
	}
	if(!validatefun($state))
	{
		$message="Please Select State name";
		$i++;
		?>
		<script> 
			 window.location.href = 'http://letmepractice.com/register.php?message=<?php echo $message ?>';
		</script>
       <?php
	}
	if(!validatefun($city))
	{
		$message="Please Select City Name";
		$i++;
		?>
		<script> 
			 window.location.href = 'http://letmepractice.com/register.php?message=<?php echo $message ?>';
		</script>
       <?php
	}
	if(!validatefun($pin))
	{
		$message="Please Enter Valid Pincode ";
		$i++;
		?>
		<script> 
			 window.location.href = 'http://letmepractice.com/register.php?message=<?php echo $message ?>';
		</script>
       <?php
	}
	if(!validatefun($exam))
	{
		$message="Please Select Exam";
		$i++;
		?>
		<script> 
			 window.location.href = 'http://letmepractice.com/register.php?message=<?php echo $message ?>';
		</script>
       <?php
	}
	if($i==0)
	{
$txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
		$sql="INSERT INTO `users` (`email_id`, `fname`, `lname`, `contact_no`, `address`, `country`, `state`, `city`, `pincode`, `amount`, `transaction_id`, `payment_status`, `IP`, `created_date`) VALUES ('$email', '$fname', '$lname', '$contactNO', '$address', '$country', '$state', '$city', '$pin', '$amt_text', '$txnid', '0', '$ip', '$date') ";

			$query=mysql_query($sql);
$last_id=mysql_insert_id(); 
			if($query)
			{
                          mysql_query("INSERT INTO `Relation_user_course` (`user_id`, `course_id`, `date`) VALUES ('$last_id', '$exam', '$date')");
                          pay($txnid, $amt_text,$fname,$email,$contactNO,"Payment for Let Me Practice",$lname,$pin,$last_id,$ip);	
			}
	}
}

function pay($txnid,$amount,$firstname,$email,$phone,$productinfo,$lastname,$zipcode,$user,$ip)
{
	$MERCHANT_KEY = "z4O4B31c";
	$SALT = "n9vu1w5bB1";
	$PAYU_BASE_URL = "https://secure.payu.in";
	$surl="http://letmepractice.com/payment/success.php";
	$furl="http://letmepractice.com/payment/failure.php";
        $cancel="http://letmepractice.com/payment/cancel.php";
	$service_provider="payu_paisa";
	
	$posted = array();
	$posted['key']=$MERCHANT_KEY;
	$posted['hash']="";
	$posted['txnid']=$txnid;
	$posted['amount']=$amount;
	$posted['firstname']=$firstname;
	$posted['email']=$email;
	$posted['phone']=$phone;
	$posted['productinfo']=$productinfo;
	$posted['surl']=$surl;
	$posted['furl']=$furl;
	$posted['service_provider']=$service_provider;
	$posted['lastname']=$lastname;
	$posted['curl']=$cancel;
	$posted['address1']="";
	$posted['address2']="";
	$posted['city']="";
	$posted['state']="";
	$posted['country']="India";
	$posted['zipcode']=$zipcode;
	$posted['udf1']="$user";
	$posted['udf2']="$ip";
	$posted['udf3']="";
	$posted['udf4']="";
	$posted['udf5']="";
	$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }
	$hash_string .= $SALT;
    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
	
	?>
    
    <html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  </head>
  <body onload="submitPayuForm()">
    
    <?php if($formError) { ?>
	
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <input type="hidden" name="amount" value="<?php echo (empty($posted['amount'])) ? '' : $posted['amount'] ?>" />
      <input type="hidden" name="firstname" id="firstname" value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" />         
      <input type="hidden" name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" />              
      <input type="hidden" name="phone" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" />
      <textarea name="productinfo"><?php echo (empty($posted['productinfo'])) ? '' : $posted['productinfo'] ?></textarea> 
      <input type="hidden" name="surl" value="<?php echo (empty($posted['surl'])) ? '' : $posted['surl'] ?>" size="64" />
      <input name="furl" type="hidden" value="<?php echo (empty($posted['furl'])) ? '' : $posted['furl'] ?>" size="64" />
      <input type="hidden"  name="service_provider" value="payu_paisa" size="64" />
      <input name="lastname" type="hidden" id="lastname" value="<?php echo (empty($posted['lastname'])) ? '' : $posted['lastname']; ?>" />
      <input type="hidden" name="curl" value="<?php echo (empty($posted['curl'])) ? '' : $posted['curl']; ?>" /></td>
      <input type="hidden" name="address1" value="<?php echo (empty($posted['address1'])) ? '' : $posted['address1']; ?>" />
      <input type="hidden" name="address2" value="<?php echo (empty($posted['address2'])) ? '' : $posted['address2']; ?>" />
      <input type="hidden" name="city" value="<?php echo (empty($posted['city'])) ? '' : $posted['city']; ?>" />
      <input type="hidden" name="state" value="<?php echo (empty($posted['state'])) ? '' : $posted['state']; ?>" />
      <input type="hidden" name="country" value="<?php echo (empty($posted['country'])) ? '' : $posted['country']; ?>" />
      <input type="hidden" name="zipcode" value="<?php echo (empty($posted['zipcode'])) ? '' : $posted['zipcode']; ?>" />
      <input type="hidden" name="udf1" value="<?php echo (empty($posted['udf1'])) ? '' : $posted['udf1']; ?>" />
      <input type="hidden" name="udf2" value="<?php echo (empty($posted['udf2'])) ? '' : $posted['udf2']; ?>" />
      <input type="hidden" name="udf3" value="<?php echo (empty($posted['udf3'])) ? '' : $posted['udf3']; ?>" />
      <input type="hidden" name="udf4" value="<?php echo (empty($posted['udf4'])) ? '' : $posted['udf4']; ?>" />
      <input type="hidden" name="udf5" value="<?php echo (empty($posted['udf5'])) ? '' : $posted['udf5']; ?>" />
      <input type="hidden" name="pg" value="<?php echo (empty($posted['pg'])) ? '' : $posted['pg']; ?>" />
      <?php if(!$hash) { ?>
      <input type="submit" value="Submit" />
      <?php } ?>
        
    </form>
  </body>
</html>
    <?php
}
?>