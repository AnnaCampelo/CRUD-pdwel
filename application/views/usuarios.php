<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php if($this->session->userdata('nivel') == 2){ ?>
<?php include('parts/header-color.php'); ?>
<div class="main">
  <div class="section section-buttons ">
    <div class="row">
      <div class="col-sm-12">
        <div class="container">
          <h2>Usuários cadastrados</h2>
          <h6>Verifique usuários cadastrados no sistema, dê ou retire privilégios. </h6>
           <?php if(!empty($status) && $status == "sucesso"): ?>
            <div class="alert alert-success" role="alert">
                <?php echo "Sucesso! A operação foi realizada."; ?>
            </div>
            <?php endif; ?>
          <table id="solicitacoes" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>Data de Cadastro</th>
                <th>Tipo de Cadastro</th>
                <th>Tornar/Retirar ADM</th>
                <tr>
                </thead>
                <tbody>
                  <?php foreach($usuarios as $usuario): 
                    switch($usuario['flg_tipocadastro']){
                      case 1:
                        $tipo = "Comum";
                        break;
                      case 2:
                        $tipo = "Administrador";
                        break;
                    }
                  ?>
                  <tr>
                    <td><?php echo $usuario['id_usuario']; ?></td>
                    <td><?php echo $usuario['Nome']; ?></td>
                    <td><?php echo $usuario['Email']; ?></td>
                    <td><?php echo $usuario['CPF']; ?></td>
                    <td><?php echo $usuario['dt_nascimento']; ?></td>
                    <td><?php echo $usuario['dt_cadastro']; ?></td>
                    <td><?php echo $tipo; ?></td>
                    <td>
                      <?php if($usuario['flg_tipocadastro'] == 2): ?>
                      <a href="<?php echo base_url() . 'Admin/alterar_admin/' . $usuario['id_usuario'] . '/1' ?>">
                        <button type="button" class="btn btn-outline-danger btn-sm">Remover</button>
                      </a>
                    <?php endif; ?>
                    <?php if($usuario['flg_tipocadastro'] == 1): ?>
                      <a href="<?php echo base_url() . 'Admin/alterar_admin/' . $usuario['id_usuario'] . '/2'?>">
                        <button type="button" class="btn btn-outline-success btn-sm">Adicionar</button>
                      </a>
                      <?php endif; ?>
                    </td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>


    </div>

    <?php include('parts/footer.php'); ?>

      <?php } else{
    exit('No direct script access allowed');
  }

  ?>