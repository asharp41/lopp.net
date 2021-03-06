<?php
$nameErr = $emailErr = $subjectErr = $messageErr = "";
$name = $email = $subject = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
  if (empty($_POST["subject"])) {
    $subjectErr = "Subject is required";
  } else {
    $subject = test_input($_POST["subject"]);
    }
  }
	
  if (empty($_POST["message"])) {
    $messageErr = "Message is required";
  } else {
    $message = test_input($_POST["message"]);
  }



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="jameson, lopp, bitcoin, crypto, cypherpunk" />
<meta name="Robots" content="index,follow" />
<title>Jameson Lopp :: Contact</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">
<link href="style.css" rel="stylesheet" type="text/css"> 
<link href="https://fonts.googleapis.com/css?family=Overpass+Mono:300,400,600,700&amp;subset=latin-ext" rel="stylesheet"> 

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>

<script type="text/javascript"><!--
function HideContent(d) {
document.getElementById(d).style.display = "none";
}
function ShowContent(d) {
document.getElementById(d).style.display = "block";
}
function ReverseDisplay(d) {
if(document.getElementById(d).style.display == "none") { document.getElementById(d).style.display = "block"; }
else { document.getElementById(d).style.display = "none"; }
}
//--></script>

<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2071667-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body onLoad="MM_preloadImages('images/facebook-roll.gif','images/twitter-roll.gif','images/linked-roll.gif','images/github-roll.gif','images/21-roll.gif','images/keybase-roll.gif')">
<nav class="navbar navbar-default col-sm-offset-0 col-sm-12 col-md-offset-0 col-md-12 col-lg-offset-0 col-lg-12">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myDefaultNavbar1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.html">Jameson Lopp</a> </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="myDefaultNavbar1">
      <ul class="nav navbar-nav">
      <li><a href="articles.html">Articles</a></li>
        <li><a href="presentations.html">Presentations</a></li>
        <!-- Do not display this at the moment 
         <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        -->
      <li><a href="interviews.html">Interviews</a></li>
        <li><a href="bitcoin.html">Bitcoin Resources</a></li>
        <li class="active"><a href="#">Contact<span class="sr-only">(current)</span></a></li>
      </ul>
              <!-- Do not display this at the moment 
<form class="navbar-form navbar-right" role="search">d
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      -->
</div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<section class="inner-background">
<div class="container">
    <div class="row">
      <div class="col-xs-12 text-left col-lg-offset-0 col-lg-12"> <br>
      </div>
    </div>
  </div>
  <div class="container" style="background-color: #ffffff">
    <div class="row">
      <div class="col-xs-12 text-left col-lg-offset-1 col-lg-8 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10">
        <h1>Contact</h1>
        <p>Jameson's goal is to spread knowledge of crypto systems and liberating technologies. If you can offer an opportunity to reach a large audience, please use the form below. If you're seeking specific answers for your own understanding, please check the <a href="bitcoin.html">educational resources page.</a> For business opportunities or other requests, please use the contact form hosted at <a href="https://21.co/lopp/" target="_blank">21.co</a></p>
        <br>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 text-left col-lg-offset-0 col-lg-12"> <br><br>
      </div>
    </div>
  </div>
</section>
<section>
    <div class="container">
    <div class="row">
      <div class="col-xs-12 text-left col-lg-offset-0 col-lg-12"> <br><br>
      </div>
      <div class="col-xs-12 col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-10 col-sm-offset-1">
        <h3>Presentation/Interview Request Form</h3>
        <p><span class="error">* required field.</span></p>

        <form action="" method="post">    
           <label for="name">Name </label><span class="error"> * <?php echo $nameErr;?></span>

            <input type="text" id="name" name="name" placeholder="Your name...">

            <label for="email">Email</label><span class="error"> * <?php echo $emailErr;?></span>
            <input type="text" id="email" name="email" placeholder="Your email..." >

            <label for="subject">Subject</label><span class="error"> * <?php echo $subjectErr;?></span>
            <input type="text" id="subject" name="subject" placeholder="Subject...">
            
            <label for="message">Message</label><span class="error"> * <?php echo $messageErr;?></span>
            <textarea id="message" name="message" placeholder="Write something..." style="height:200px"></textarea>

            <input type="submit" name="submit" value="Submit">
        </form>

  <?php 
if(isset($_POST['submit']) and (!empty($_POST["name"])) and (preg_match("/^[a-zA-Z ]*$/",$name)) and (!empty($_POST["email"])) and  (filter_var($email, FILTER_VALIDATE_EMAIL)) and (!empty($_POST["subject"])) and (!empty($_POST["message"]))) {
    $to = "contactform@lopp.net";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = "Jameson," . "\n\n" . $name . " from email: " . $email . " wrote the following:" . "\n\n" . $_POST['message'];
	$headers = "From: $from\r\nReply-to: $email";
    mail($to, $subject, $message, $headers);
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=thank_you.html">';	

	exit;
    }
?>
  
        <br>
        <br>
        </div>
        </div>
        <div class="row">
          <div class="col-lg-offset-0 col-lg-4">

          </div>
          <div class="col-lg-4">&nbsp;</div>
        </div>
        <div class="row">
          <div class="text-left col-lg-offset-1 col-lg-5 col-md-5 col-md-offset-1 col-sm-offset-1 col-sm-6 col-xs-12">
            <h3>Open Source Projects</h3>
            <h4><a href="https://github.com/jlopp/bitcoin-core-config-generator/" target="_blank">Bitcoin Core Config Generator</a></h4>
            <h4><a href="https://github.com/jlopp/statoshi" target="_blank">Statoshi</a></h4>
            <br>
            <br>
          </div>
          <div class="col-lg-4 col-md-5 col-sm-5 col-xs-12">
            <h3>Other Email Requests</h3>
            <p data_temp_dwid="1">
              <a href="https://21.co/lopp/" target="_blank">
                <button type="button" class="btn btn-success">Get in touch</button>
              </a>
            </p>
            <br>
            <br>
          </div>
        </div>
  </div>
</section>
<section>
  <div class="container"> </div>
</section>
<hr>
<div class="section well">
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-md-10 col-lg-10 col-xs-offset-0 col-xs-12">
        <p class="text-right"><strong><a href="pgpkey.html" target="_blank">PGP KEY</a></strong>
          <a href="https://www.facebook.com/jameson.lopp" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Facebook','','images/facebook-roll.gif',1)" target="_blank"><img src="images/facebook.gif" alt="Facebook" width="24" height="20" id="Facebook">
          </a>
          <a href="https://twitter.com/lopp?ref_src=twsrc%5Etfw&ref_url=http%3A%2F%2Flopp.net%2F" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Twitter','','images/twitter-roll.gif',1)" target="_blank"><img src="images/twitter.gif" alt="Twitter" width="20" height="17" id="Twitter">
          </a>
          <a href="https://www.linkedin.com/in/jamesonlopp/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('LinkedIn','','images/linked-roll.gif',1)" target="_blank"><img src="images/linked.gif" alt="LinkedIn" width="24" height="20" id="LinkedIn">
          </a>
          <a href="https://github.com/jlopp" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Github','','images/github-roll.gif',1)" target="_blank"><img src="images/github.gif" alt="Github" width="24" height="20" id="Github">
          </a>
          <a href="https://21.co/lopp/" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('21','','images/21-roll.gif',1)" target="_blank"><img src="images/21.gif" alt="21" width="24" height="20" id="21">
          </a>
          <a href="https://keybase.io/lopp" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Keybase','','images/keybase-roll.gif',1)" target="_blank"><img src="images/keybase.gif" alt="Keybase" width="24" height="20" id="Keybase">
          </a> <strong><a href="https://onename.com/lopp" target="_blank">ONENAME</a></strong> </p>
      </div>
    </div>
  </div>
</div>
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p class="footer">No copyright ever. No rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.3.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.js"></script>
</body>

</html>