<?php

class Pessoa
{
    private $pdo;
    //CONEXÃO COM O BANCO DE DADOS
    public function __construct($nomeDB, $host, $usuario, $senha)
    {


        try {
            $this->pdo = new PDO("mysql:dbname=" . $nomeDB . ";host=" . $host, $usuario, $senha);
        } catch (PDOException $e) {
            echo "Erro com o banco de dados: " . $e->getMessage();
            exit();
        }
    }

    //SELECIONA OS DADOS DO BANCO
    public function buscarDados()
    {
        $res = array();
        $cmd = $this->pdo->query("SELECT * FROM pessoa ORDER BY nome");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    //INSERE DADOS NO BANCO DE DADOS
    public function cadastrarPessoa($nome, $telefone, $email)
    {
        //Verifica se o email já existe no Bando de Dados
        $cmd = $this->pdo->prepare("SELECT id from pessoa WHERE email =:e");
        $cmd->bindValue(":e", $email);
        $cmd->execute();
        if ($cmd->rowCount() > 0) { //email já existe no banco

            return false;
        } else { //nao foi encotrado o email
            $cmd = $this->pdo->prepare("INSERT INTO pessoa (nome, telefone, email) VALUES (:n , :t , :e)");
            $cmd->bindValue(":n", $nome);
            $cmd->bindValue(":t", $telefone);
            $cmd->bindValue(":e", $email);
            $cmd->execute();
            return true;
        }
    }

    public function excluiPessoa($id)
    {

        $cmd = $this->pdo->prepare("DELETE FROM pessoa WHERE id=:id");
        $cmd->bindValue(":id", $id);
        $cmd->execute();
    }

    //BUSCA OS DADOS DE UM REGISTRO EM ESPECÍFICO
    public function buscarDadosPessoa($id)
    {
        $res = array();
        $cmd = $this->pdo->prepare("SELECT * FROM pessoa WHERE id= :id ");
        $cmd->bindValue(":id", $id);
        $cmd->execute();
        $res = $cmd->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
    //ATUALIZA (EDITA) OS DADOS
    public function atualizarDados($id, $nome, $telefone, $email)
    {

        $cmd = $this->pdo->prepare("UPDATE pessoa SET nome =:n,telefone = :t, email=:e WHERE id=:id");
        $cmd->bindValue(":n", $nome);
        $cmd->bindValue(":t", $telefone);
        $cmd->bindValue(":e", $email);
        $cmd->bindValue(":id", $id);
        $cmd->execute();
    }
}
