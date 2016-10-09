<?php

if (!isset($_POST['license_plate']) || !isset($_POST['postal_code']) || !isset($_POST['submit-repair'])) {
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
    <link href="css/bootstrap-datepicker3.min.css" rel="stylesheet">

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

<!---

<div class="container">
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6"></div>
    </div>
</div>

-->


    <div class="container">

      <div class="starter-template">
        <h1>Dados do condutor</h1>
        <form method="POST" action="checkout.php">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="nome-cliente" class="form-control" id="exampleInputEmail1" placeholder="Nome">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="apelido-cliente" class="form-control" id="exampleInputEmail1" placeholder="Apelido">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="email-cliente" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="telefone-cliente" class="form-control" id="exampleInputEmail1" placeholder="Telefone">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="nif-cliente" class="form-control" id="exampleInputEmail1" placeholder="NIF">
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                    <h3>Caso tenha selecionado o serviço de recolha e entrega, preencha a informação abaixo pedida:</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" name="morada-cliente" class="form-control" id="exampleInputEmail1" placeholder="Morada">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" name="porta-cliente" class="form-control" id="exampleInputEmail1" placeholder="Nº Porta">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="text" name="observacoes-cliente" class="form-control" id="exampleInputEmail1" placeholder="Observações">
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="license_plate" value="<?php echo $_POST['license_plate'];?>" />
                    <input type="hidden" name="postal_code" value="<?php echo $_POST['postal_code'];?>" />
                    <?php
                        if (isset($_POST['manutencao'])) {
                            echo '<input type="hidden" name="manutencao" value="' . $_POST['manutencao'] . '" />';
                        }

                        if (isset($_POST['sistemadetravagem'])) {
                            echo '<input type="hidden" name="sistemadetravagem" value="' . $_POST['sistemadetravagem'] . '" />';
                        }

                        if (isset($_POST['ignicao'])) {
                            echo '<input type="hidden" name="ignicao" value="' . $_POST['ignicao'] . '" />';
                        }

                        if (isset($_POST['embraiagem'])) {
                            echo '<input type="hidden" name="embraiagem" value="' . $_POST['embraiagem'] . '" />';
                        }

                        if (isset($_POST['distribuicao'])) {
                            echo '<input type="hidden" name="distribuicao" value="' . $_POST['distribuicao'] . '" />';
                        }

                        if (isset($_POST['recolha_entrega_viatura'])) {
                            echo '<input type="hidden" name="recolha_entrega_viatura" value="' . $_POST['recolha_entrega_viatura'] . '" />';
                        }

                        if (isset($_POST['diagnostico'])) {
                            echo '<input type="hidden" name="diagnostico" value="' . $_POST['diagnostico'] . '" />';
                        }

                        if (isset($_POST['observacoes-reparacao'])) {
                            echo '<input type="hidden" name="observacoes-reparacao" value="' . $_POST['observacoes-reparacao'] . '" />';
                        }
                    ?>
                    <button type="submit" name="reparacao-completa" class="btn btn-info btn-bookauto btn-lg">Obter preço</button>
                </div>
                <div class="col-md-4" style="text-align: center">
                    <div style="overflow:hidden;">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8">
                                    <div id="datetimepicker">
                                        <div></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
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
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript">
        $('#datetimepicker div').datepicker({
            startView: 4,
            maxViewMode: 0,
            clearBtn: true,
            todayHighlight: true,
        });
    </script>
  </body>
</html>
