<?php

  $to = "mailparacenas100@gmail.com";
  $subject = "BookAuto service request";
  
  $license_plate = "27-AX-10";
  $postal_code = "2730-298";

  $service_selection = "Susbtituição pastilhas frente";
  $wishes_delivery = 1;
  $observations = "";

  $name = "João";
  $surname = "Varandas";
  $e_mail = "xxxx@gmail.com";
  $telephone = "9105333333";
  $nif = "27364823647234";

  if($wishes_delivery == 1){

    $adress = "Rua do Cao";
    $door_number = "15": 
    $obs_2 = "";
  }

  $date = "21-September-2015";

  $message = "Service request for ". $date . ". \n";
  $message = $message . $name . " " . $surname " requested the following service(s): " . $service_selection ." .\n";
  $message = $message . "Additional information: License plate: " . $license_plate . " Postal code: " . $postal_code . " Nif: " . $nif . "Telephone:" . $telephone .".\n";
  $message = $message . "Client e_mail: " . $e_mail . "Observations: " . $observations .".\n";

  if($wishes_delivery == 1){
    $message = $message . "The client wishes delivery at the following addres: " . $adress . " door number: " . $door_number . ". Additional informations: " . $obs_2;
  }

  mail($to , $subject , $message);

?>


<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>HomePage | BookAuto</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="css/bookauto-mainpage.css"/>
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!--  Open Sans Font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/bookauto.css" rel="stylesheet">
</head>
<body>

	<!-- Informative menu that stays on the top of the page at all times -->
  <nav class="navbar navbar-inverse navbar-bookauto navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="img/logo-white.png" class="bookauto-logo" /></a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav pull-right">
          <li class="menu-items"><a href="#about">COMO FUNCIONA</a></li>
          <li class="menu-items"><a href="#contact">CONTACTE-NOS</a></li>
          <li class="menu-items"><a href="#contact"><img src="img/callcenterwhite.png" class="menu-callcenter"/>808 300 400</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <div class="happycar2">
     <img src="img/checkout.jpg" alt="Checkout">
  </div>

</body>
</html>
