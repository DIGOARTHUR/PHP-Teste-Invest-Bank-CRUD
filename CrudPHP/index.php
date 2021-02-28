<?php
require_once 'classePessoa.php';
$p = new Pessoa("crudpdo", "localhost", "root", "");
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CADASTRO PESSOA</title>
  <!--BOOSTRAP -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- CSS -->
  <link rel="stylesheet" href="style.css">

</head>

<body>

  <!--  BOTÕES NAVEGAÇÃO -->
  <section id="section_BotoesNav">
    <button type="button" class="btn btn-primary btn-lg" onclick="mudaSection(0)">CADASTRO</button>
    <button type="button" class="btn btn-secondary btn-lg" onclick="mudaSection(1)">LISTA DADOS</button>
  </section>





  <?php
  // CONSULTA AO ID ESPECÍFICO PARA EXCLUSÃO (BOTÃO EXCLUIR)
  if (isset($_GET['id'])) {

    $id_Pessoa = addslashes($_GET['id']);
    $p->excluiPessoa($id_Pessoa);
    header("location: index.php");
  }

  ?>



  <?php
  //  RESPONSÁVEL PELO O CAMPO CADASTRO - ATUALIZAÇÃO (EDIÇÃO) e CADASTRO DE DADOS
  if (isset($_POST['nome'])) {

    //----------- ATUALIZAÇÃO (EDIÇÃO)--------------------
    if (isset($_GET['id_editar']) && !empty($_GET['id_editar'])) {
      $id_editar = addslashes($_GET['id_editar']);
      $nome = addslashes($_POST['nome']);
      $telefone = addslashes($_POST['telefone']);
      $email = addslashes($_POST['email']);

      if (!empty($nome) && !empty($telefone) && !empty($email)) {

        $p->atualizarDados($id_editar, $nome, $telefone, $email);
        header("location: index.php");
      } else {
        echo "Preencha todos os campos";
      }


      // --------------- CADASTRAR ----------------------
    } else {

      $nome = addslashes($_POST['nome']);
      $telefone = addslashes($_POST['telefone']);
      $email = addslashes($_POST['email']);

      if (!empty($nome) && !empty($telefone) && !empty($email)) {

        if (!$p->cadastrarPessoa($nome, $telefone, $email)) {
  ?>

          <div class="aviso">
            <img src="./icones/aviso_email.png" alt="">
            <h4 class="aviso">Email já está cadastrado!</h4>
          </div>


        <?php
        }
      } else {

        ?>

        <div class="aviso">
          <img src="./icones/preencher.png" alt="">
          <h4 id="aviso">Preencha todos os campos!</h4>
        </div>


  <?php
      }
    }
  }
  ?>


  <?php
  // CONSULTA AO ID_EDITAR ESPECÍFICO PARA ATUALIZAÇÃO (EDIÇÃO) DOS DADOS (BOTÃO EDITAR)
  if (isset($_GET['id_editar'])) {
    $id_editar = addslashes($_GET['id_editar']);
    $res = $p->buscarDadosPessoa($id_editar);
  }

  ?>


<!-- SESSÃO COM OS CAMPOS PARA PREENCHIMENTO DE DADOS -->
  <section id="section_Cadastro">
    <h2>CADASTRO PESSOA</h2>
    <form id='form_Cadastro' method="POST">

      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" aria-describedby="emailHelp" placeholder="Nome" value="<?php if (isset($res)) {
                                                                                                                                echo $res['nome'];
                                                                                                                              }   ?>">

      </div>
      <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" id="telefone" class="form-control" placeholder="(xxx)xxxxx-xxxx" value="<?php if (isset($res)) {
                                                                                                                      echo $res['telefone'];
                                                                                                                    }   ?>">
      </div>
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" class="form-control" id="exampleInputPassword1" placeholder="nome@exemplo.com" value="<?php if (isset($res)) {
                                                                                                                                            echo $res['email'];
                                                                                                                                          }   ?>">
        <small id="emailHelp" class="form-text text-muted">Jamais compartilharemos o seu email com
          alguém.</small>
      </div>
      <input id="botaoSubmit" type="submit" value="<?php if (isset($res)) {
                                                      echo "Atualizar";
                                                    } else {
                                                      echo "Cadastrar";
                                                    }  ?>" class="btn btn-success">

    </form>

  </section>

<!-- CAMPO DE LISTAGEM DE DADOS   -->
  <section id="section_ListaDados">

    <table>
      <tr id="tituloTabela">
        <td>NOME</td>
        <td>TELEFONE</td>
        <td colspan="2">EMAIL</td>

      </tr>
      <?php
      $dados = $p->buscarDados();
      if (count($dados) > 0) { //há dados no banco

        for ($i = 0; $i < count($dados); $i++) {
          echo "<tr>";
          foreach ($dados[$i] as $key => $value) {
            if ($key != "id") {

              echo "<td>" . $value . "</td>";
            }
          }
      ?>
          <td>
            <a href="index.php?id_editar=<?php echo $dados[$i]['id'] ?>" class="btn btn-warning">Editar</a>
            <a href="index.php?id=<?php echo $dados[$i]['id'] ?>" class="btn btn-danger">Excluir</a>
    
          </td>
        <?php
          echo "</tr>";
        }
      } else { // não há dados no banco

        ?>

        <div class="aviso">
          <img src="./icones/vazio.png" alt="">
          <h4>Ainda não há pessoas cadastradas!</h4>
        </div>



      <?php
      }
      ?>

    </table>


  </section>





  <!---------------- JS -------------------->
  <script src="script.js"></script>
</body>

</html>