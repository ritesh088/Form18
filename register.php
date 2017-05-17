<?php
include_once('connection.php'); 
global $wwwroot;
$wwwroot='http://letmepractice.com/';

?>

<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Register | Letme Practice</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
        <!-- Fonts -->




        <!-- CSS -->

        <link rel="stylesheet" href="site/register/css/bootstrap.min.css">
        <link rel="stylesheet" href="site/register/css/font-awesome.min.css">
        <link rel="stylesheet" href="site/register/css/main.css">
        <!--link rel="stylesheet" href="site/register/css/animate.css">
        <link rel="stylesheet" href="site/register/css/responsive.css">
        
        <script src="site/register/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="site/register/js/bootstrap.min.js"></script--->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo $wwwroot;?>js/registation.js"></script>
		<style>
.control-label
		{
			text-align: left !IMPORTANT;
		}
</style>
		
    </head>
    <!-- <body oncontextmenu="return false">-->
	<body onload="disableSubmit()">
				 
<div id="please_wait" style="display: none;text-align: center;width: 100%;height: 1200px;z-index: 999;/* margin-top: 24%; */">
			<img src="img/PleaseWait.gif" style="
    width: 13%;
">
		</div>
    <header>
		
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-6 col-sm-3">
                    <a href="#" class="logo">
                        <img src="site/bootstrap/images/logo.png" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="menu">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                               
                                       <li><a href="index">Home</a></li>
                                        <li><a href="login">Login</a></li>
                                        <!--<li><form class="form-inline text-left col-sm-20 col-xs-20"  role="form">
                            <div class="form-group"><input size="20" placeholder="Search your exam"  type="text" class="form-control" id="signup-form" >
                                                             
                            </div>
                            <a href="" type="submit" class="btn btn-default btn-signup">
                                <i class="fa fa-paper-plane"></i>
                            </a>
                        </form></li>-->
                                    </ul>
                                  
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-3">
                    <ul class="social-info">
                        <li><a href="https://www.facebook.com/Letme-Practice-1203133733145824/" target="_blank";><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/" target="_blank";><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://in.linkedin.com/" target="_blank";><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://plus.google.com/" target="_blank";><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    


    <section id="banner" class="wow fadeInUp">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="block">
                        <img class="app-img img-responsive" src="site/register/images/app.png" alt="">
                    </div>
                    
                </div>
                <div class="col-md-8 col-sm-6">
					<fieldset>	
						<legend>Register  &nbsp; &nbsp;<?php if(isset($_GET['message'])){?><span style="color: rgb(209, 42, 42);"><?php echo $_GET['message']; ?></span><?php } ?></legend>
						<form method="post" class="form-horizontal" action="register_action.php" name='formres' id='formres'>
							<div class="form-group">
								<label for="inputEmail" class="control-label col-xs-3">Name</label>			
								<div class="col-xs-4">
									<input type="text" name="fname" class="form-control" id="fname" placeholder="First Name">
								</div>
								<div class="col-xs-4">
									<input type="text"name="lname" class="form-control" id="lname" placeholder="Last Name">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail" class="control-label col-xs-3">Email Address</label>			
								<div class="col-xs-8">
									<input onchange="searchemail()" type="email" name="email" autocomplete="off" class="form-control" id="email" placeholder="Email Address">
<span style="color:red" id="emailError"></span>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail" class="control-label col-xs-3">Contact Number</label>			
								<div class="col-xs-8">
									<input type="text" name="contactNO" autocomplete="off" class="form-control" id="contactNO" placeholder="Contact Number">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail" class="control-label col-xs-3">Address</label>			
								<div class="col-xs-8">
									<textarea name="address" class="form-control" id="address" placeholder="Address"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail" class="control-label col-xs-3">Country</label>			
								<div class="col-xs-3">
									<input type="text" name="country" class="form-control" id="country" placeholder="India" readonly value="India">
								</div>
								<label for="inputEmail" class="control-label col-xs-2">State</label>
								<div class="col-xs-3">
						<select name="state" class="form-control" id="state" onchange="fetchcity()">
								  <option value='0'> select state</option>
								  <?php
									 $sql=mysql_query("SELECT * FROM `state_name`");
									 while($state=mysql_fetch_assoc($sql))

									 {
									?>
									 <option value="<?php echo $state['id']; ?>"> <?php echo $state['state_name']; ?></option>
									 <?php
									 }
								  ?>
								</select>
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail" class="control-label col-xs-3">City</label>			
								<div class="col-xs-3">
									<!--select  name="city" class="form-control" id="city">
										<option value="0">Select city</option>
									</select-->
									<input type="text" name="city" class="form-control" id="city" placeholder="City" >
								</div>
								<label for="inputEmail" class="control-label col-xs-2">Pincode</label>
								<div class="col-xs-3">
									<input type="text" name="pin" class="form-control" id="pin" placeholder="Pin Number">
								</div>
							</div>
							<div class="form-group">
								<label for="inputEmail" class="control-label col-xs-3">Category</label>			
													
								<div class="col-xs-3">
									<select name="exam" class="form-control" id="exam" onchange="fetchexam()" >
								  		<option value='0'> select Category</option>
										 <?php
									 			$sql=mysql_query("SELECT * FROM `exam`");
												 while($exm=mysql_fetch_assoc($sql))
												 {
												?>
												 <option value=<?php echo $exm['id']; ?>> <?php echo $exm['exam_name']; ?></option>
												 <?php
												 }
										?>
									</select>
								</div>
								<label for="inputEmail" class="control-label col-xs-2">Amount</label>
								<div class="col-xs-3">
									<div class="input-group">
									  <div class="input-group-addon"><span class="fa fa-rupee"></span></div>
									  <input type="text" class="form-control" readonly=""  name="amt_text" value="0" id="amt_text" placeholder="Amount">
									  <div class="input-group-addon">00</div>
									</div>
								</div>
							</div>
							<div class="form-group">
							  <center>
									   <input type="checkbox" name="terms" id="terms"  onchange="activateButton(this)">  I have Read and Agree to the <a href="pdf/Termandconditions.pdf" target="_blank">Terms and Conditions and Privacy Policy</a> 
									 
									  <br><br>
									 <!--<input type="submit" name="submit" id="submit">-->
									 
									<!-- <input type="checkbox" name="terms" id="terms" onchange="activateButton(this)"> 
									 I have Read and Agree to the <a  target="popup" style="cursor:pointer;" 
									 onclick="window.open'popup','width=600,height=600'); return false;">Terms and Conditions and Privacy Policy</a> -->
									  
						<!--for popup <input type="checkbox" name="terms" id="terms" onchange="activateButton(this)"> 
									I have Read and Agree to the <a href="policy" target="popup" 
                                    onclick="window.open('policy','popup','width=300,height=300,scrollbars=no,resizable=no'); return false;">
									Terms and Conditions and Privacy Policy</a>-->
									  
						
<!--									
<button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Terms and Conditions and Privacy Policy</button>

<button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Popover on right
</button>-->

									 <!--<input type="submit" name="submit" id="submit">-->
									 
								
								<input type="submit" name="subData"  id="submit" style="width:25%" value="Register & Pay" class="btn btn-success" />
								<button type="button" class="btn btn-warning" style="width: 25%;margin-left:1%" onClick="clearform();">RESET</button>
							  </center>
							</div> <br/>
							
							
							
						</form>
					</fieldset>
                </div>
            </div>
        </div>
    </section>   
    <footer class="wow fadeInUp" data-wow-delay=".8s">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                        <a class="footer-logo"href="#">
                            <img class="img-responsive" src="site/bootstrap/images/footer-logo.png" alt="">
                        </a>
                    <p>Copyright © 2017 Letme Practice. All rights reserved. Powred by Appirion Technologies Pvt Ltd.</p>
                    
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
<script>
function fetchcity()
{
/*
  var txt=$("#state").val();
var type=encode("fetch_city");
	// Encode the String
		if(txt!=0)
		{
          $("#please_wait").css('display','block');
			var encodedString = encode(txt);
				$.ajax({
							type:'GET',
							url:"http://letmepractice.com/ajax_page.php",
							contentType:"application/JSON",
							data:{text:encodedString,ty:type},
							success: function(data) {
								if(data)
								{
									$("#city").html(data);
$("#please_wait").css('display','none');
									setInterval(function(){
										$("#please_wait").css('display','none');
										},2000);

								}
							  }
							});
		}
*/

}
	function encode(string)
	{
	var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9+/=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/rn/g,"n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}
		return Base64.encode(string);
	}
	function fetchexam()
	{
	var txt=$("#exam").val();
	
	// Encode the String
	var encodedString = encode(txt);

		if(txt!=0)
		{
			
			var type=encode("fetch_exam_price");


			   // $("#please_wait").css('display','block');
				 $.ajax({
							type:'GET',
							url:"ajax_page.php",
							contentType:"application/JSON",
							data:{text:encodedString,ty:type},
							success: function(data) {

								if(data)
								{
									$("#amt_text").val(data);
$("#please_wait").css('display','none');
		
										
								}
							  }
							  
							});

		}
	}
function searchemail()
{
   var txt=$("#email").val();
   var encodedString = encode(txt);

if(txt!=0)
		{
			
			var type=encode("checkemail");			  
				 $.ajax({
							type:'GET',
							url:"ajax_page.php",
							contentType:"application/JSON",
							data:{text:encodedString,ty:type},
							success: function(data) {
								if(data)
								{
										//alert(data);
$("#email").val("");
$("#emailError").html(data);							
								}
							  }
							  
							});

		}


}
function amtCalculaltion1()
{
  var amt=$("#amt_text").val();
  if($("#amt1").is(':checked'))
  {
	  amt =parseFloat(amt)+parseFloat('1500');
	  $("#amt_text").val(amt);
  }
  else
  {
	   amt =parseFloat(amt)-parseFloat('1500');
	  $("#amt_text").val(amt);
  }
}
function amtCalculation2()
{
	var amt=$("#amt_text").val();
  if($("#amt2").is(':checked'))
  {
	  amt =parseFloat(amt)+parseFloat('1200');
	  $("#amt_text").val(amt);
  }
  else
  {
	   amt =parseFloat(amt)-parseFloat('1200');
	  $("#amt_text").val(amt);
  }
}
function clearform()
{
    //$('#'+id).val("");
    document.getElementById("fname").value=""; 
    document.getElementById("lname").value="";   
    document.getElementById("email").value=""; 
    document.getElementById("contactNO").value="";
    document.getElementById("address").value=""; 
    document.getElementById("country").value="";
    document.getElementById("state").value=""; 
    document.getElementById("city").value="";    
    document.getElementById("pin").value=""; 
    document.getElementById("exam").value="";
    document.getElementById("amt_text").value="";
}
</script>
<script>
 $(document).bind('copy', function(e) { alert('Copy is not allowed !!!'); e.preventDefault(); }); $(document).bind('paste', function() { alert('Paste is not allowed !!!'); e.preventDefault(); }); $(document).bind('cut', function() { alert('Cut is not allowed !!!'); e.preventDefault(); }); $(document).bind('contextmenu', function(e) { alert('Right Click is not allowed !!!'); e.preventDefault(); });  
</script>
<script>
 document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            alert('View Source not allowed');
            return false;
        } else {
            return true;
        }
};
</script>


 <script>
  function disableSubmit() {
  document.getElementById("submit").disabled = true;
 }

  function activateButton(element) {

      if(element.checked) {
        document.getElementById("submit").disabled = false;
       }
       else  {
        document.getElementById("submit").disabled = true;
      }

  } 
  /* 
  function disableSubmit() {
  //document.getElementById("submit").disabled = true;
 }

  function activateButton(element) {

      if(element.checked  == false ) {
        //document.getElementById("submit").disabled = false;
		alert('Please check the box to continue.');
        return false;
       }
       else  {
        document.getElementById("submit").disabled = false;
      }

  } */
    
	
/* $('#formres').formValidation({
    ...
    fields: {
        ...
        terms: {
            validators: {
                notEmpty: {
                    message: 'You must agree with the terms and conditions'
                }
            }
        }
    }
}); */
	
	
</script> 



