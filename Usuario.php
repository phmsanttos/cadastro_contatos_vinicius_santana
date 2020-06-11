<?php

class Usuario {
    private $ativo;
    private $data_atualizacao;
    private $data_criacao;
    private $email;
    private $nome;
    private $senha;


    public function __construct($nome, $senha, $email, $ativo = 1) {
        $this->nome = $nome;
        $this->senha = $senha;
        $this->email = $email;
        #$this->data_criacao = $data_criacao;
        #$this->data_atualizacao = $data_atualizacao;
        $this->ativo = $ativo;
    }

    public function __set($attr, $valor) {
        $this->attr = $valor;
    }

    public function __get($attr) {
        return $this->attr;
    }

    // public static function preparar() {
    //     $tratado = array(
    //         "nome" => $nome,
    //         "senha" => $senha,
    //         "email" => $email,
    //         "data_criacao" => $data_criacao,
    //         "data_atualizacao" => $this.,
    //         "ativo" => $ativo;
    //     );

    //     return $tratado;
    // }

    public function save() {
        $query = "INSERT INTO usuarios (nome, senha, email, data_criacao, data_atualizacao) VALUES (
            $this->nome, $this->senha, $this->email, $this->data_criacao, $this->data_atualizacao)
        );";

        $conexao = Conexao::getInstance();
        $stmt = $conexao->prepare($query);
        return $stmt->execute() ? $stmt->rowCount() : false;
    }

    public static function all() {
        $conn = Conexao::getInstance();
        $stmt = $conn->prepare("SELECT * FROM usuarios;");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function count() {
        $conexao = Conexao::getInstance();
        $count   = $conexao->exec("SELECT count(*) FROM usuarios;");
        if ($count) {
            return (int) $count;
        }
        return false;
    }

    public static function find($id)
    {
        $conexao = Conexao::getInstance();
        $stmt    = $conexao->prepare("SELECT * FROM usuarios WHERE id_user='{$id}';");
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                $resultado = $stmt->fetchObject('Usuario');
                if ($resultado) {
                    return $resultado;
                }
            }
        }
        return false;
    }

    public static function destroy($id)
    {
        $conexao = Conexao::getInstance();
        if ($conexao->exec("DELETE FROM usuarios WHERE id_user='{$id}';")) {
            return true;
        }
        return false;
    }


}
