<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include('parts/header.php'); ?>
<div class="page-header section-dark" style="background-image: url(<?php echo base_url()  . 'assets/img/daniel-olahs.jpg'; ?>)">

  <div class="filter"></div>
  <div class="content-center">
    <div class="container">
       <?php if(!empty($aviso)): ?>
        <?php if($aviso == 'sucesso-login'): ?>
          <div class="alert alert-success">
            <div class="container">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="nc-icon nc-simple-remove"></i>
              </button>
              <span><?php echo "Sucesso! Você foi logado."; ?></span>
            </div>
          </div>
        <?php endif; ?>

        <?php if($aviso == 'erro-login'): ?>
          <div class="alert alert-danger">
            <div class="container">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="nc-icon nc-simple-remove"></i>
              </button>
              <span><?php echo "ERRO: usuário ou senha não conferem."; ?></span>
            </div>
          </div>
        <?php endif; ?>

        <?php if($aviso == 'deslogado'): ?>
          <div class="alert alert-info">
            <div class="container">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="nc-icon nc-simple-remove"></i>
              </button>
              <span><?php echo "Sucesso! Você foi deslogado."; ?></span>
            </div>
            
          </div>
        <?php endif; ?>

      <?php endif; ?>
      <div class="title-brand">
        <h1 class="presentation-title">sLocator</h1>
      </div>
      <h2 class="presentation-subtitle text-center">O mais prático localizador de CEPs e ruas!</h2>
      <div class="text-center input-cep">
        <form action="<?php echo base_url() . "pesquisar" ?>" method="post">
          <div class="row col-sm-6">
            <div class="form-check-radio col-sm-6">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="tipo_busca" value="cep" checked> CEP
                <span class="form-check-sign"></span>
              </label>
            </div>
            <div class="form-check-radio col-sm-6">
              <label class="form-check-label">
                <input class="form-check-input" type="radio" name="tipo_busca" value="logradouro" > Logradouro
                <span class="form-check-sign"></span>
              </label>
            </div>
          </div>
            <div class="row">
              <div class="col-sm-10">
                <div class="form-group">
                  <input type="text" name="termo" class="form-control" placeholder="Digite o CEP ou o nome do logradouro">
                </div>
              </div>
              <div class="col-sm-2">
                <button type="submit" class="btn btn-primary btn-just-icon"><i class="fa fa-search"></i></button>
              </div>
            </div>
            <?php if(!empty($infos)): ?>
              <div class="jumbotron">
                <p><?php echo $infos[0]['Logradouro']; ?><br>
                  <?php echo $infos[0]['Bairro']; ?><br>
                  <?php echo $infos[0]['CEP']; ?><br>
                  <?php echo $infos[0]['Cidade']; ?><br>
                  <?php echo $infos[0]['UF']; ?><br>
                </p>
              </div>
            <?php endif; ?>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="main">

  </div>

  <?php include('parts/footer.php'); ?>