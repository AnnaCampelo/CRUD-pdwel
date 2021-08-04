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
                <!-- logado -->
                <?php if($this->session->userdata('logado')): ?>
                <li class="nav-item">
                    <a href="<?php echo base_url() . 'cadastrar/endereco'; ?>" class="nav-link"><i class="fa fa-pencil"></i> Cadastrar CEP/Endereço</a>
                </li>
                <?php endif; ?>
                <!-- adm -->
                <?php if($this->session->userdata('nivel') == 2): ?>
                <li class="nav-item">
                    <a href="<?php echo base_url() . 'visualizar/solicitacoes/' ?>" class="nav-link"><i class="fa fa-search"></i> Visualizar Solicitações</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url() . 'visualizar/usuarios' ?>" class="nav-link"><i class="fa fa-users"></i> Visualizar Usuários</a>
                </li>
                <?php endif; ?>
                <li class="nav-item">
                    <?php if($this->session->userdata('logado')): ?>
                        <a href="<?php echo base_url() . 'deslogar' ?>">
                            <button type="button" class="btn btn-primary btn-round"> Sair </button>
                        </a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </div>
</nav>

  
  