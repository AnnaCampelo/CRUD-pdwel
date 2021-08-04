<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php include('parts/header-color-no-user.php'); ?>
<div class="main">
  <div class="section section-buttons ">
    <div class="row">
        <div class="container">
            <form class="col-sm-12" action="<?php echo base_url() . 'cadastrar/usuario' ?>" method="post">
          <h2>Cadastro de Usuário</h2>
          <h6>Seja bem vindo</h6>
                <?php if(!empty($resposta)): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo "Sucesso!"; ?>
                </div>
                <?php endif; ?>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <input type="text" id="cpf" name="cpf" class="form-control" placeholder="CPF">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <input type="password" id="senha" name="senha" class="form-control" maxlength="20" placeholder="Senha">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <input type="text" id="data-nascimento" name="data-nascimento" class="form-control" placeholder="Data de Nascimento">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <input type="text" id="tipo-cadastro" name="tipo-cadastro" class="form-control" placeholder="Tipo de Cadastro">
                <!-- change to select with types -->  
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 text-center">
              <button type="submit" id="salvar-usuario" class="btn btn-success btn-round">Salvar</button>
            </div>
          </div>
          <br/>
      </form>
        </div>
      </div> 
    </div>
  </div>
  

</div>

<?php include('parts/footer.php'); ?>