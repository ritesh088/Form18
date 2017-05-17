<?php include_once('connection.php'); ?>
<!DOCTYPE html>
<html class="no-js">
    <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login | Letme Practice</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
        <!-- Fonts -->




        <!-- CSS -->

        <link rel="stylesheet" href="site/login/css/bootstrap.min.css">
        <link rel="stylesheet" href="site/login/css/font-awesome.min.css">
        <link rel="stylesheet" href="site/login/css/main.css">
        <link rel="stylesheet" href="site/login/css/animate.css">
        <link rel="stylesheet" href="site/login/css/responsive.css">
        

        <!-- Js -->
        <script src="site/login/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="site/bootstrap/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="site/login/js/bootstrap.min.js"></script>
        <script src="site/login/js/plugins.js"></script>
        <script src="site/login/js/main.js"></script>
        <script src="site/login/js/wow.min.js"></script>
        <script>
         new WOW(
            ).init();
        </script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-57708809-1', 'auto');
          ga('send', 'pageview');

        </script>

    </head>
    <body>


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
                                 <li><a href="register">Register</a></li>
                                      
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
                        <img class="app-img img-responsive" src="site/bootstrap/images/app.png" alt="">
                    </div>
                    
                </div>
                <div class="col-md-6 col-md-offset-1 col-sm-6">
				<form class="form-horizontal" method="post" style=" margin-top: 19%;">
					  <h3> login</h3>
					<?php if(isset($_GET['message'])) { ?> <span style="color: #ce2424;"><?php echo $_GET['message']; ?></span> 	<?php }  ?>
						
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Email Id</label>
						<div class="col-sm-10">
						  <input type="email" class="form-control" id="emailId" name="emailId" placeholder="Email">
						</div>
					  </div>
					  <div class="form-group">
						<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
						<div class="col-sm-10">
						  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
						</div>
					  </div>
					 <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<input type="submit" name="login" class="btn btn-default" value="Sign in" />
						 </div>
					  </div>
					</form>
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
<?php 
function validatefun($var)
{
	if($var!="")
	{
		return true;
	}
}

if(isset($_POST['login']))
{
$i=0;
	$pass=$_POST['password'];
	$email=$_POST['emailId'];
	if(!validatefun($email))
	{
		$message="Please Enter Valid Email Address !";
		$i++;
		?>
		<script> 
			 window.location.href = 'http://letmepractice.com/login.php?message=<?php echo $message ?>';
		</script>
       <?php
	}
	if(!validatefun($pass))
	{
		$message="Please Enter Password !";
		$i++;
		?>
		<script> 
			 window.location.href = 'http://letmepractice.com/login.php?message=<?php echo $message ?>';
		</script>
       <?php
	}

	if($i==0)
	{
		//$pass=md5($pass);
		$query=" SELECT * FROM  `users` WHERE  `email_id` =  '$email' AND  `password` =  '$pass' AND  `payment_status` =  '1'  ";
		$count=mysql_query($query);

		if(mysql_num_rows($count))
		{
			//$message="Login Successfuly !";
			?>
				<script>
					 window.location.href = 'searchyourexam.php';
				</script>
			<?php
		}
else
{
    $message="Wrong Email Id or Password!";
			?>
				<script>
					 window.location.href = 'http://letmepractice.com/login.php?message=<?php echo $message ?>';
				</script>
			<?php
}
	}
}
?>
