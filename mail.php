<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Michal Szekely">
    <meta name="description" content="Využitie NoSQL databáz v súčasných webových aplikáciách. [Bakalárska práca]. Univerzita Konštantína Filozofa v Nitre. Fakulta prírodných vied. ">
    <meta name="keywords" content="MongoDB, NoSQL, Model kľúč-hodnota, Model rodiny stĺpcov, Dokumentový model, Grafový model, JavaScript, Relačné databázy, Aggregate, Map_reduce  ">
    <title>...: Nosql.sk :...</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/small-business.css" rel="stylesheet">
    <link href="css/one-page-wonder.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">    
    <link href="css/freelancer.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="_grf/logo.png" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">Home</a></li>
                    <li class="page-scroll"><a href="about.html">O nás</a></li>
                    <li class="page-scroll"><a href="clanky.html">NoSQL Novinky</a></li>
                    <li class="page-scroll"><a href="download.html">Download</a></li>
                    <li class="page-scroll"><a href="cl1.html">Apache dashboard</a></li>                  
                    <li class="page-scroll"><a href="contact.html">Kontakt</a></li>                  
                </ul>
            </div>
           <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    

<div class="container">

<div class="page-header">
    <h1>Kontakt</h1>
</div>

<!-- Contact with Map - START -->

    <div class="row">
        <div class="col-md-6">
            <div class="well well-sm">
                <fieldset>
                        <legend class="text-center header">Kontaktujte nás</legend>
                        
<?php
$email = $_POST['email'];
$mes .= "
<br>
<center>
<br><br>
<div style=\"text-align: center; font-size: 20px; color: #FFFFFF; \"><b>Správa z kontaktného formulára</b></div>
<br><br>
<table cellpadding=\"2\" cellspacing=\"2\" border=\"0\" style=\"font-size: 15px; \">
<tr><td width=\"75\"><b>Meno:</b></td><td>".$_POST['fname']." &nbsp; ".$_POST['sname']."</td></tr>
<tr><td><b>E-mail:</b></td><td>".$_POST['email']."</td></tr>
<tr><td><b>Telefón:</b></td><td>".$_POST['phone']."</td></tr>
<tr><td><b>Správa:</b></td><td>".$_POST['message']."</td></tr>
<tr><td></td><td><br><br></td></tr>
</table>
</center>
";
	if (email==""){ $email = "formular@nosql.sk";}
	$to = "michal.szekely@gmail.com";
	$from = $email;
	$subject = "Správa z www.nosql.sk - kontakt";
    $message = <<<EOF
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv=Content-Type content="text/html; charset=unicode">
<title>Sprava z www.NOSQL.sk</title>
</head>
<body style="background-color:#62bdea; border:1px solid #000000; color:#FFFFFF;">
   $mes
</body>
</html>
EOF;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= "From: $from\r\n";
$headers .= "Content-type: text/html\r\n";
mail($to, $subject, $message, $headers);
?>
<br><br><br><br><br><br><br>
<center>
<h3>Vaša správa bola úspešne odoslaná.<br></h3>
</center>  
<br><br><br><br><br><br><br><br><br>                    
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <div class="panel panel-default">
                    <legend class="text-center header">Adresa</legend>
                    <div class="panel-body text-center">
                        <div >
<span class="glyphicon glyphicon-road"></span> 

Lozorno, Železničná 40, 900 55 
<br>
          <span class="glyphicon glyphicon-earphone"></span> &nbsp;&nbsp;  +421 000 000
<br>
      
          <span class="glyphicon glyphicon-envelope"></span> &nbsp;&nbsp; <a href="mailto:"admin(@)nosql.sk"> admin(@)nosql.sk</a>
    <br>   <br>  
                    <a  target="_blank" href="http://www.facebook.com/michal.szekely">
                       <i class="fa fa-facebook-square" style="font-size:30px"></i></a>
  
                    <a  href="https://www.linkedin.com/in/michal-szekely-435076a?trk=hp-identity-name"  target="_blank" >
                      <i class="fa fa-linkedin-square" style="font-size:30px"></i></a>
   
 



                        </div>
                        <hr />
                        <div id="map1" class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2652.192931865165!2d17.040765176617015!3d48.33759683002208!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476ceb7e66c04ba3%3A0x695bed50b3513339!2zxb1lbGV6bmnEjW7DoSwgOTAwIDU1IExvem9ybm8!5e0!3m2!1sen!2ssk!4v1462131732363" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>





       <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; NoSQL.sk 2016 | <a href="mailto:admin@nosql.sk">admin(@)nosql.sk</a>  
                    
                    <a  href="http://www.facebook.com/michal.szekely" target="_blank">
                       <i class="fa fa-facebook-square" style="font-size:20px"></i></a>
  
                    <a  href="https://www.linkedin.com/in/michal-szekely-435076a?trk=hp-identity-name"  target="_blank" >
                      <i class="fa fa-linkedin-square" style="font-size:20px"></i></a>
                     </p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
