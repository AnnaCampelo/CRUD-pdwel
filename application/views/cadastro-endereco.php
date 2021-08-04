<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php if($this->session->userdata('logado')){ ?>
<?php include('parts/header-color.php'); ?>
<div class="main">
  <div class="section section-buttons ">
    <div class="row">
      <div class="col-sm-4">
          <?php if(isset($flag) && $flag == 1){ ?>
            <form action="<?php echo base_url() . 'atualizar/endereco' ?>" method="post" id="form-end">
        <?php } else { ?>
           <form action="<?php echo base_url() . 'cadastrar/endereco' ?>" method="post" id="form-end">
        <?php } ?>
        <div class="container"><br/>
            <?php if(!empty($resposta) && $resposta == "sucesso"): ?>
            <div class="alert alert-success" role="alert">
                <?php echo "Sucesso! O endereço foi cadastrado, em breve um administrador irá analisá-lo."; ?>
            </div>
            <?php endif; ?>

            <?php if(!empty($resposta_atualizacao) && $resposta_atualizacao == "sucesso"): ?>
            <div class="alert alert-success" role="alert">
                <?php echo "Sucesso!"; ?>
            </div>
            <?php endif; ?>

            <?php if(!empty($resposta) && $resposta == "existe-registro"): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo "ERRO: Já existe um endereço cadastrado com esse CEP."; ?>
            </div>
            <?php endif; ?>
          <h2>Cadastro de CEP/Endereço</h2>
          <h6>O cadastro dependerá de análise</h6>
          <div class="row">
            <div class="col-sm-10">
              <div class="form-group">
                <input type="text" id="cep" name="cep" value="<?php if(isset($atualizar[0]['cep'])){ echo $atualizar[0]['cep']; } ?>" class="form-control" placeholder="CEP">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10">
              <div class="form-group">
                <select id="estado" class="form-control" name="estado">
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "AC"){ echo 'selected'; } ?> value="AC">Acre</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "AL"){ echo 'selected'; } ?> value="AL">Alagoas</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "AP"){ echo 'selected'; } ?> value="AP">Amapá</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "AM"){ echo 'selected'; } ?> value="AM">Amazonas</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "BA"){ echo 'selected'; } ?> value="BA">Bahia</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "CE"){ echo 'selected'; } ?> value="CE">Ceará</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "DF"){ echo 'selected'; } ?> value="DF">Distrito Federal</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "ES"){ echo 'selected'; } ?> value="ES">Espírito Santo</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "GO"){ echo 'selected'; } ?> value="GO">Goiás</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "MA"){ echo 'selected'; } ?> value="MA">Maranhão</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "MT"){ echo 'selected'; } ?> value="MT">Mato Grosso</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "MS"){ echo 'selected'; } ?> value="MS">Mato Grosso do Sul</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "MG"){ echo 'selected'; } ?> value="MG">Minas Gerais</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "PA"){ echo 'selected'; } ?>value="PA">Pará</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "PB"){ echo 'selected'; } ?> value="PB">Paraíba</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "PR"){ echo 'selected'; } ?> value="PR">Paraná</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "PE"){ echo 'selected'; } ?> value="PE">Pernambuco</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "PI"){ echo 'selected'; } ?> value="PI">Piauí</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "RJ"){ echo 'selected'; } ?> value="RJ">Rio de Janeiro</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "RN"){ echo 'selected'; } ?> value="RN">Rio Grande do Norte</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "RS"){ echo 'selected'; } ?> value="RS">Rio Grande do Sul</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "RO"){ echo 'selected'; } ?> value="RO">Rondônia</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "RR"){ echo 'selected'; } ?> value="RR">Roraima</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "SC"){ echo 'selected'; } ?> value="SC">Santa Catarina</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "SP"){ echo 'selected'; } ?> value="SP">São Paulo</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "SE"){ echo 'selected'; } ?> value="SE">Sergipe</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "TO"){ echo 'selected'; } ?> value="TO">Tocantins</option>
                  <option <?php if(isset($atualizar[0]['uf']) && $atualizar[0]['uf'] == "EST"){ echo 'selected'; } ?> value="EST">Estrangeiro</option>
              </select>
              </div>
            </div>
          </div>
          <input type="hidden" name="id_aprov" value="<?php if(isset($atualizar[0]['id_aprov'])){ echo $atualizar[0]['id_aprov']; } ?>">
          <div class="row">
            <div class="col-sm-10">
              <div class="form-group">
                <input type="text" id="cidade" name="cidade" class="form-control" value="<?php if(isset($atualizar[0]['cidade'])){ echo $atualizar[0]['cidade']; } ?>" placeholder="Cidade">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10">
              <div class="form-group">
                <input type="text" id="bairro" value="<?php if(isset($atualizar[0]['bairro'])){ echo $atualizar[0]['bairro']; } ?>" name="bairro" class="form-control" placeholder="Bairro">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-10">
              <div class="form-group">
                <input type="text" id="logradouro" name="logradouro" value="<?php if(isset($atualizar[0]['logradouro'])){ echo $atualizar[0]['logradouro']; } ?>" class="form-control" placeholder="Logradouro">
              </div>
            </div>
          </div>
          <input type="hidden" name="id" value="<?php echo $this->session->userdata('id'); ?>">
          <div class="row">
            <div class="col-sm-10 text-center">
              <button type="submit" id="salvar-endereco" class="btn btn-success btn-round">Salvar</button>
            </div>
          </div>
          <br/>
        </div>
      </div> 
    </form>
      <div class="col-sm-8">
        <div class="container">
          <h2>Solicitações de Cadastro</h2>
          <h6>Verifique aqui o status das solicitações</h6>
          
          <table id="solicitacoes" class="table table-striped table-bordered">
            <thead>
              <th>CEP</th>
              <th>Estado</th>
              <th>Cidade</th>
              <th>Bairro</th>
              <th>Logradouro</th>
              <th>Status</th>
              <th>Data Solicitação</th>
              <th>Data Status</th>
              <th>Alterar</th>
            </thead>
            <tbody>
              <?php foreach ($solicitacoes as $solicitacao) { ?>
              <tr>

                  <?php switch($solicitacao['sts_solicitacao']){
                    case 1:
                      $status = "Aprovado";
                      break;
                    case 2:
                      $status = "Pendente";
                      break;
                    case 3:
                      $status = "Reprovado";
                      break;
                  }

                  ?>
                  <td><?php echo $solicitacao['cep']; ?></td>
                  <td><?php echo $solicitacao['uf']; ?></td>
                  <td><?php echo $solicitacao['cidade']; ?></td>
                  <td><?php echo $solicitacao['bairro']; ?></td>
                  <td><?php echo $solicitacao['logradouro']; ?></td>
                  <td><?php echo $status; ?></td>
                  <td><?php echo $solicitacao['dt_solicitacao']; ?></td>
                  <td><?php if(empty($solicitacao['dt_modificacao'])){ echo "N/A"; } else{ echo $solicitacao['dt_modificacao']; } ?></td>
                  <td>
                      <a href="<?php echo base_url() . 'Admin/atualizar/' . $solicitacao['id_aprov']; ?>">
                        <button type="button" class="btn btn-outline-info btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i>Alterar</button>
                      </a>
                  </td>
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