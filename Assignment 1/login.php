<!DOCTYPE html>
<!--index.html
	Brad McMullen
    Index for mobile website-->
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <title>
        </title>
        <link rel="stylesheet" href="css/main.css" />
        <link href='http://fonts.googleapis.com/css?family=Sintony' rel='stylesheet' type='text/css'>

        <script src="main.js">
        </script>
        <script>
            try {

    $(function() {

    });

  } catch (error) {
    console.error("Your javascript has an error: " + error);
  }
        </script>
		<script type="text/javascript">
        $(document).bind("mobileinit", function () {
            $.mobile.ajaxEnabled = false;
        });
        </script>     
        <script src="http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js">
        </script>           
        
    </head>
	<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title">Brad McMullen</h1>
                <nav>
                    <ul>
                        <li><a href="http://webdesign4.georgianc.on.ca/~200162912/adv_web_a1/index.html">Home</a></li>
                        <li><a href="http://webdesign4.georgianc.on.ca/~200162912/adv_web_a1/about.html" style="background-color:#80D0E4 !important;">About Me</a></li>
                        <li><a href="http://webdesign4.georgianc.on.ca/~200162912/adv_web_a1/projects.html">Projects</a></li>
                        <li><a href="http://webdesign4.georgianc.on.ca/~200162912/adv_web_a1/services.html">Services</a></li>
                        <li><a href="http://www.github.com/bradmcmullen" style="text-size:21px;">Github</a></li>
                        <li><a href="http://webdesign4.georgianc.on.ca/~200162912/adv_web_a1/contact.html">Contact Me</a></li>
						<li><a href="http://webdesign4.georgianc.on.ca/~200162912/adv_web_a1/login.php">Business Contacts</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                    <header>
                        <h1>Contacts</h1>
                    </header>
                    <br/>
                    <section>
					<?php if(isset($_SESSION['message'])) :
					echo $_SESSION['message'];
					endif;?>
					<div id='loginform'>
					<form action="checklogin.php" method='post' id='login'>
					Username: <br />
					<input type='text' name='username' /><br />
					Password: <br />
					<input type='password' name='password' /><br />
					<input type='submit' value='Login' />
					</form>
                    </section><br/>
                    
                </article>
            </div> <!-- #main -->
        </div> <!-- #main-container -->
       
            </div>
        </div>
		<div class="footer-container">
            <center><footer class="wrapper">
                <h3>&copy; 2013, Brad McMullen, All Rights Reserved.</h3>
            </footer></center>
        </div>
    </body>
</html>
