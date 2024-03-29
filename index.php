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
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!--  Open Sans Font -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/bookauto-mainpage.css" rel="stylesheet">
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

	<!-- Smiley guy picture and main menu-->
	<div class="background">
		<div class="background-text">
			<p> <b> A SUA EQUIPA DE MECÂNICOS ONDE QUISER </b></p>
			<p2> <b> Marque a reparação do seu carro com conforto </b> </p2>
			<br> <br> <br>
      <form action="repair-options.php" method="POST">
  			<input type="text" name="license_plate" placeholder="Matrícula" />
  			<input type="text" name="postal_code" placeholder="Código Postal"/>
  			<input type="submit" value="      Obter preço      "/>
      </form>
			</p>
		</div>
	</div>

  <!-- Blue ribbon with the advantages of picking this service -->
	<div class ="blue_ribbon">
    <div class="blue_ribbon_text">
      <div class="blue_ribbon_partition">
		    <img src="img/save.png" alt="Piggy bank" height="70px" width="90px" vspace="5"> <break>
        <header_text> Poupe Dinheiro </header_text> <br>
        <text> Conheça os melhores preços e controle facilmente os gastos </text>
      </div>
      <div class="blue_ribbon_partition">
        <img src="img/time_3.png" alt="Time" height="70px" width="70px"> <break>
        <header_text> Poupe Tempo </header_text> <br>
        <text> Decida se quer que seja feita a recolha e entrega da sua viatura </text>
      </div>
      <div class="blue_ribbon_partition">
        <img src="img/star33.png" alt="Handy Man" height="70px" width="95px"> <break>
        <header_text> Confiança </header_text> <br>
        <text> Conheça à partida quais os níveis de qualidade de cada oficina </text>
      </div>
      <div class="blue_ribbon_partition">
        <img src="img/price_tag.png" alt="Price tag" height="70px" width="70px"> <break>
        <header_text> Preço pré-serviço </header_text> <br>
        <text> Todos os preços apresentados em tempo real </text>
      </div>
    </div>
	</div>

  <!-- Happy car Happy costumer logo -->
  <div class ="happycar">
    <img src="img/frase.png" alt="Happy Car">
  </div>

  <!-- How to information partitions -->
  <div class="howto">
    <div class="howto_partition">
      <img src="img/matricula_blue.png" alt="License Plate" height="130px" width="220px"> <break>
      <header_text> 1- Insira a matrícula e código postal </header_text> <break>
      <text> Insira a matricula e o código postal onde quer que seja feita a recolha do carro por mecânicos especializados.</text>
    </div>
    <div class="howto_partition">
      <img src="img/123.png" alt="Car" height="130px" width="260px"> <break>
      <header_text> 2- Selecione o serviço e a data  </header_text> <break>
      <text> Selecione que tipo de serviço quer efetuar no seu carro e a data em que o quer realizar.</text>
    </div>
    <div class="howto_partition">
      <img src="img/screen.png" alt="Screen" height="130px" width="220px" > <break>
      <header_text> 3- Preços antes do serviço, adjudique online</header_text> <break>
      <text> Selecione a oficina e saiba os preços antes do carro estar na oficina, com total transparência.</text>
    </div>
  </div>

  <br><br><br><br><br><br><br><br><br><br><br>
  <!-- Process-->
  <div class="process_header">
    Você não precisa ir à revisão, o seu carro sim!
    <img src="img/process.jpg" alt="Process">
  </div>

  <!-- Images scrolling -->
  <div class ="background_scroll">
  </div>


  <!-- Bottom bar with hyperlinks and stuff -->
  <div class ="bottom_bar">
    <div class ="bottom_bar_div">
        <a href="default.asp">
          <img src="img/facebook.jpg" alt="facebook" style="width:42px;height:42px;align = "top"">
        </a>
        <input type="submit" value="     Mecânicos      "/>
        <img src="img/startuplisboa.png" alt="Startup lisboa" height="35%" width="20%" align="right" >
    </div>
  </div>

</body>
</html>
