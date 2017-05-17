<?php
include_once('connection.php'); 
global $wwwroot;
$wwwroot='http://letmepractice.com/';
include_once('connection.php');
$query=mysql_query("SELECT * FROM `question` WHERE `exam_cat_id` =1 AND `exam_sub_id` =1");
//$fetch_data=mysql_fetch_assoc($query);



 
//print_r($fetch_data);
?>

<!DOCTYPE html>
<html><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>IBPS | Letme Practice</title>
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
<script src="http://letmepractice.com/js/registation.js"></script>
		<style>
.control-label
		{
			text-align: left !IMPORTANT;
		}
</style>
<script>
      /* function disableClick(){
        document.onclick=function(event){
          if (event.button == 2) {
            alert('Right Click Message');
            return false;
          }
        }
      } */
    </script>
	<style>
		  #demo{
		  text-align: right;
		  font-size: 20px;
		}
</style>
		
    </head>
   <!-- <body oncontextmenu="return false">-->
<body>

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
                        <li><a href="https://www.facebook.com/Letme-Practice-1203133733145824/" target="_blank" ;=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/" target="_blank" ;=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://in.linkedin.com/" target="_blank" ;=""><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://plus.google.com/" target="_blank" ;=""><i class="fa fa-google-plus"></i></a></li>
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
					
                        <div id="demo"></div>
					
						<legend><center><p style="font-size:20px; color:#f39c04;font-family: inherit;line-height: 30px;">
						Direction: All Questions (1 - 5) is Basic Php question. </p></center></legend>
						
<div class="form-group">
	<?php
		$i=1;
		while($fetch_data=mysql_fetch_assoc($query)){
	?>
     <p style="font-size:15px;font-family:inherit;line-height:25px;">
	   <?php echo  $i++ . "."; ?>&nbsp;<?php echo $fetch_data['questions']; ?>
	 </p>
</div>

<div class="form-group">
<div class="col-xs-6"></div><br/>

	<div class="col-xs-6"><input type="radio" name="ans" value="<?php echo $fetch_data['fans']; ?>">&nbsp; <?php echo $fetch_data['fans']; ?></div><br/>
	<div class="col-xs-6"><input type="radio" name="ans" value=" <?php echo $fetch_data['sans']; ?>">&nbsp; <?php echo $fetch_data['sans']; ?></div><br/>
	<div class="col-xs-6"><input type="radio" name="ans" value=" <?php echo $fetch_data['tans']; ?>">&nbsp; <?php echo $fetch_data['tans']; ?></div><br/>
<div class="col-xs-6"><input type="radio" name="ans" value=" <?php echo $fetch_data['foans']; ?>">&nbsp; <?php echo $fetch_data['foans']; ?></div><br/><?php } ?>
</div>
				<hr>			

<div class="form-group">

         </div>			
		<div class="block">					
		<div class="form-group">
				<div class="col-xs-20" onclick="sub_cat()" style="float: right;">	
					
					

                        <ul class="download-btn">
                            
                            <li>
                                <a href="#" class="btn btn-default btn-andriod">next &gt;&gt;</a>
                            </li>
                        </ul>


					   
                       
</div>
					
                               
		</div>
        
        
        <div class="form-group" style="display:none;" id="sub_exam"><label for="inputEmail" class="control-label col-xs-3">Select Exam Type</label>
			<div class="col-xs-3">  
            <select class="form-control" id="state">
				<option>mains</option>
				<option>pre</option>
			</select>
            </div>
</div>
</div>
							
							      
							<div class="form-group">
										
								    
							</div>
							<div class="form-group">
											
								<div class="col-xs-8">
									
								</div>
							</div>
							<div class="form-group">
										
								<div class="col-xs-3">
									
								</div>
								
								<div class="col-xs-3">
					
								</div>
							</div>
							<div class="form-group">
									
								<div class="col-xs-3">
									
								</div>
								
								<div class="col-xs-3">
									
								</div>
							</div>
							<div class="form-group">
								
													
								<div class="col-xs-3">
									
								</div>
								
								<div class="col-xs-3">
									<div class="input-group">
									  
									 
									 
									</div>
								</div>
							</div>
							<div class="form-group">
							 
							</div>
						
					</fieldset>
                </div>
            </div>
        </div>
    </section>   
    <footer class="wow fadeInUp" data-wow-delay=".8s">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                        <a class="footer-logo" href="#">
                            <img class="img-responsive" src="site/bootstrap/images/footer-logo.png" alt="">
                        </a>
                    <p>Copyright © 2017 Letme Practice. All rights reserved. Powred by Appirion Technologies Pvt Ltd.</p>
                    
                </div>
            </div>
        </div>
    </footer>



<script>
 /* $(document).bind('copy', function(e) { alert('Copy is not allowed !!!'); e.preventDefault(); }); $(document).bind('paste', function() { alert('Paste is not allowed !!!'); e.preventDefault(); }); $(document).bind('cut', function() { alert('Cut is not allowed !!!'); e.preventDefault(); }); $(document).bind('contextmenu', function(e) { alert('Right Click is not allowed !!!'); e.preventDefault(); });  */ 
 
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
/*function sub_cat()
{
	$("#sub_exam").css('display','block');
}*/

</script>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2018 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
</body></html>