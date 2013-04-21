<?php
session_start();

if ($_SESSION['username'] =='') {
	header('location:login.php');
	exit;
}
include('db/database.php');

/*
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$username = stripslashes($username);
$password = stripslashes($password);
*/
$username = $_SESSION['username'];
$password = $_SESSION['password'];

$q = mysql_query("
SELECT * FROM contacts WHERE name='$username' AND password='$password'
ORDER BY cname;
");

$contacts = array();

while ($row = mysql_fetch_array($q)) {
$contacts[] = $row;
}

?>
<!-- About.html, Brad McMullen, About page for website.-->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/js-image-slider.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
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
					<center>
			<table>
				<tr>
					<th>Name</th>
					<th>Phone</th>
				</tr>
				
				<?php 
				foreach ($contacts as $contact):
					echo "<tr><td>";?>
					<a href="" onClick="alert('Name: <?php echo htmlentities($contact['cname']) .'\nEmail: '. htmlentities($contact['cemail']).' \nPhone: ' . htmlentities($contact['cphone']). ' \nAddress: ' . htmlentities($contact['caddress']);?> ')"><?php echo htmlentities($contact['cname']); ?></a>
					<?php
					echo "</td><td>";?>
					<a href="tel:<?php echo htmlentities($contact['cphone']);?>"><?php echo htmlentities($contact['cphone']);?></a>
					<?php
				endforeach;
				
				?>
			</table></center><br/><br/>
			<a href="logout.php" style="color:#06F !important;">Log Out</a>
                    </section><br/>
                    
                </article>
            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <center><footer class="wrapper">
                <h3>&copy; 2013, Brad McMullen, All Rights Reserved.</h3>
            </footer></center>
        </div>
    </body>
</html>
