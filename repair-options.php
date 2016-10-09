<?php

if (!isset($_POST['license_plate']) || !isset($_POST['postal_code'])) {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Reparação | BookAuto</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/bookauto.css" rel="stylesheet">
  </head>

  <body>

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

    <div class="container">

      <div class="starter-template">
        <h1>Seleção de serviços</h1>
        <form method="POST" action="user-info.php">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Manutenção</h3>
                    <div class="checkbox form-checks">
                        <label>
                            <input type="radio" name="manutencao" value="Revisão Simples">
                            <span class="checkbox-label">Revisão Simples</span>
                        </label>
                    </div>

                    <div class="checkbox form-checks">
                        <label>
                            <input type="radio" name="manutencao" value="Revisão Oficial">
                            <span class="checkbox-label">Revisão Oficial</span>
                        </label>
                    </div>

                    <div class="checkbox form-checks">
                        <label>
                            <input type="text" placeholder="KMS" class="text-input">
                        </label>
                    </div>

                    <div class="checkbox form-checks">
                        <label>
                            <input type="radio" name="manutencao" value="Inspeção Periódica">
                            <span class="checkbox-label">Inspeção Periódica</span>
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Sistema de travagem</h3>
                    <div class="checkbox form-checks">
                        <label>
                            <input type="radio" name="sistemadetravagem" value="Substituição Pastilhas Frente">
                            <span class="checkbox-label">Substituição Pastilhas Frente</span>
                        </label>
                    </div>

                    <div class="checkbox form-checks">
                        <label>
                            <input type="radio" name="sistemadetravagem" value="Substituição Pastilhas Trás">
                            <span class="checkbox-label">Substituição Pastilhas Trás</span>
                        </label>
                    </div>

                    <div class="checkbox form-checks">
                        <label>
                            <input type="radio" name="sistemadetravagem" value="Substituição Discos Frente">
                            <span class="checkbox-label">Substituição Discos Frente</span>
                        </label>
                    </div>

                    <div class="checkbox form-checks">
                        <label>
                            <input type="radio" name="sistemadetravagem" value="Substituição Discos Trás">
                            <span class="checkbox-label">Substituição Discos Trás</span>
                        </label>
                    </div>

                    <div class="checkbox form-checks">
                        <label>
                            <input type="radio" name="sistemadetravagem" value="Substituição Líquido Travões">
                            <span class="checkbox-label">Substituição Líquido Travões</span>
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Ignição</h3>
                    <div class="checkbox form-checks">
                        <label>
                            <input type="radio" name="ignicao" value="Substituição Bateria">
                            <span class="checkbox-label">Substituição Bateria</span>
                        </label>
                    </div>

                    <div class="checkbox form-checks">
                        <label>
                            <input type="radio" name="ignicao" value="Substituição de Velas">
                            <span class="checkbox-label">Substituição de Velas</span>
                        </label>
                    </div>

                    <div class="checkbox form-checks">
                        <label>
                            <input type="radio" name="ignicao" value="Substituição Motor de Arranque">
                            <span class="checkbox-label">Substituição Motor de Arranque</span>
                        </label>
                    </div>

                    <div class="checkbox form-checks">
                        <label>
                            <input type="radio" name="ignicao" value="Substituição Alternador">
                            <span class="checkbox-label">Substituição Alternador</span>
                        </label>
                    </div>

                    <div class="checkbox form-checks">
                        <label>
                            <input type="radio" name="ignicao" value="Substituição Bomba combustível">
                            <span class="checkbox-label">Substituição Bomba combustível</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h3>Embraiagem</h3>
                    <div class="checkbox form-checks">
                        <label>
                            <input type="radio" name="embraiagem" value="Substituição KIT de Embraiagem">
                            <span class="checkbox-label">Substituição KIT de Embraiagem</span>
                        </label>
                    </div>

                    <div class="checkbox form-checks">
                        <label>
                            <input type="radio" name="embraiagem" value="Subst. KIT de Embraiagem + Vol. Motor">
                            <span class="checkbox-label">Subst. KIT de Embraiagem + Vol. Motor</span>
                        </label>
                    </div>

                    <div class="checkbox form-checks">
                        <label>
                            <input type="radio" name="embraiagem" value="Substituição volante do motor">
                            <span class="checkbox-label">Substituição volante do motor</span>
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Distribuição</h3>
                    <div class="checkbox form-checks">
                        <label>
                            <input type="radio" name="distribuicao" value="Substituição correia distribuição">
                            <span class="checkbox-label">Substituição correia distribuição</span>
                        </label>
                    </div>

                    <div class="checkbox form-checks">
                        <label>
                            <input type="radio" name="distribuicao" value="Subst. correia distribuição + Bomba Água">
                            <span class="checkbox-label">Subst. correia distribuição + Bomba Água</span>
                        </label>
                    </div>

                    <div class="checkbox form-checks">
                        <label>
                            <input type="radio" name="distribuicao" value="Substituição Correia Alternador">
                            <span class="checkbox-label">Substituição Correia Alternador</span>
                        </label>
                    </div>
                </div>
                <div class="col-md-4" style="text-align: center">
                    <h3>Deseja recolha e entrega da viatura</h3>
                    <div class="checkbox form-check-inline">
                        <label>
                            <input type="radio" name="recolha_entrega_viatura" value="sim">
                            Sim
                        </label>
                    </div>

                    <div class="checkbox form-check-inline">
                        <label>
                            <input type="radio" name="recolha_entrega_viatura" value="nao">
                            Não
                        </label>
                    </div>
                    <p>Relaxe enquanto os mecânicos fazem todo o trabalho.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <h3>Não sabe o que se passa com o seu carro?</h3>
                    <div class="checkbox form-checks">
                        <label>
                            <input type="radio" name="diagnostico" value="sim">
                            <span class="checkbox-label">Diagnóstico Problema</span>
                        </label>
                    </div>
                    <br />
                    <p>Um mecânico irá realizar uma inspeção e/ou um diagnóstico electónico à sua viatura para detetar a causa dos problemas.</p>
                </div>
                <div class="col-md-8">
                    <h3>Observações</h3>
                    <textarea class="form-control" name="observacoes-reparacao" rows="5"></textarea>
                    <input type="hidden" name="license_plate" value="<?php echo $_POST['license_plate'];?>" />
                    <input type="hidden" name="postal_code" value="<?php echo $_POST['postal_code'];?>" />
                    <button type="submit" name="submit-repair" value="si" class="btn btn-info btn-bookauto btn-lg">Seguinte</button>
                </div>
            </div>
        </div>
    </form>
      </div>

      <br />
      <br />
      <br />

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
