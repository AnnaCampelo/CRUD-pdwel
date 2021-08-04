<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()  . 'assets/img//apple-icon.png' ?>">
    <link rel="icon" type="image/png" href="<?php echo base_url()  . 'assets/img//favicon.png' ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        sLocator - Localizador de CEPs
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="<?php echo base_url()  . 'assets/css/bootstrap.min.css' ?>" rel="stylesheet" />
    <link href="<?php echo base_url()  . 'assets/css/paper-kit.css?v=2.2.0" rel="stylesheet' ?>" />
    <link href="<?php echo base_url()  . 'assets/css/personalizado.css' ?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url()  . 'assets/demo/demo.css' ?>" rel="stylesheet" />
    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet" />-->
    </head>

    <body class="index-page sidebar-collapse">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg fixed-top" >
            <div class="container">
                <div class="navbar-translate">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>" rel="tooltip" title="Localizador de CEPs" data-placement="bottom">
                        sLocator
                    </a>
                    <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <button type="button" class="btn btn-primary btn-round" data-toggle="modal" data-target="#modal-login"> Entrar
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Modal -->
        <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <h5 class="modal-title text-center" id="exampleModalLabel">Login</h5>
            </div>
            <form action="<?php echo base_url() . 'logar' ?>" method="post" target="_self">
              <div class="modal-body"> 
                <div class="container text-center">
                  <div class="input-group">
                    <input type="text" class="form-control" name="email" placeholder="E-mail">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-group" aria-hidden="true"></i></span>
                  </div>
              </div>
              <div class="input-group">
                <input type="password" class="form-control" name="senha" placeholder="Senha">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
              </div>
          </div>
          <h6>Não tem acesso? <a href="/crud-pdwel/index.php/Welcome/cadastroUsuario" class="btn btn-link btn-primary">Cadastre-se</a></h6>

      </div>
  </div>
  <div class="modal-footer">
    <div class="left-side">
      <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Cancelar</button>
  </div>
  <div class="divider"></div>
  <div class="right-side">
      <button type="submit" class="btn btn-success btn-link">Entrar</button>
  </div>
</div>
</form>
</div>
</div>
</div>



