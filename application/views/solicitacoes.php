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
          <h2>Solicitações de Cadastro de Localizações</h2>
          <h6>Verifique aqui o status das solicitações</h6>
           <?php if(!empty($status) && $status == "sucesso"): ?>
            <div class="alert alert-success" role="alert">
                <?php echo "Sucesso! O endereço foi alteado."; ?>
            </div>
          <?php endif; ?>
          <table id="solicitacoes" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>CEP</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>Bairro</th>
                <th>Logradouro</th>
                <th>Status</th>
                <th>Data Solicitação</th>
                <th>Data Status</th>
                <th>Aprovar/Reprovar</th>
                <tr>
                </thead>
                <tbody>
                  <?php 

                  foreach ($solicitacoes as $solicitacao) { 

                    switch($solicitacao['sts_solicitacao']){
                    case 1:
                      $status = "Aprovado";
                      break;
                    case 2:
                      $status = "Pendente";
                      break;
                    case 3:
                      $status = "Reprovado";
                      break;

                      case 4:
                      $status = "Finalizado";
                      break;
                  }
                    ?>
                  <tr>
                    <td><?php echo $solicitacao['id_aprov']; ?></td>
                    <td><?php echo $solicitacao['CEP']; ?></td>
                    <td><?php echo $solicitacao['UF']; ?></td>
                    <td><?php echo $solicitacao['Cidade']; ?></td>
                    <td><?php echo $solicitacao['Bairro']; ?></td>
                    <td><?php echo $solicitacao['Logradouro']; ?></td>
                    <td><?php echo $status; ?></td>
                    <td><?php echo $solicitacao['dt_solicitacao']; ?></td>
                    <td><?php if(empty($solicitacao['dt_modificacao'])){ echo "N/A"; } else{ echo $solicitacao['dt_modificacao']; }?> 
                  </td>
                    <td><div class=" dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" href="#pk" role="button" aria-haspopup="true" aria-expanded="false">Ação</a>
                    <ul class="dropdown-menu dropdown-success" aria-labelledby="dropdownMenuButton">
                      <li class="dropdown-header">Ações</li>
                      <?php if($solicitacao['sts_solicitacao'] == 3 || $solicitacao['sts_solicitacao'] == 2): ?>
                      <a class="dropdown-item" href="<?php echo base_url() . 'Admin/alterar_solicitacao/' . $solicitacao['id_aprov'] . '/1' ?>">APROVAR</a>
                      <?php endif; ?>
                      <?php if($solicitacao['sts_solicitacao'] == 1 || $solicitacao['sts_solicitacao'] == 2): ?>
                        <a class="dropdown-item" href="<?php echo base_url() . 'Admin/alterar_solicitacao/' . $solicitacao['id_aprov'] . '/3' ?>">REPROVAR</a>
                    <?php endif; ?>
                    </ul>
                  </div></td>
                  </tr>
                <?php } ?>
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