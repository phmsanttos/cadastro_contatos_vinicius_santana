<?php

class UsuariosController extends Controller {
    
    /*
        Lista os usuários do sistema
    */
    public function listar() {
        $usuarios = Usuario::all();
        return $this->view('tabela_usuarios', ['usuarios' => $usuarios]);
    }
    
    public function criar() {
        return $this->view('form_contato');
    }

    public function editar() {

    }

    public function salvar() {

        $usuario = new Usuario($_POST['nome'], $_POST['telefone'], $_POST['email']);
        $data_atual = date('d-m-Y');
        $usuario->data_criacao = $data_atual;
        $usuario->data_atualização = $data_atual;

        $usuario->salvar;
        $usuario->listar;
    }

    public function atualizar() {

    }

    public function excluir($data) {
        $id = (int) $data['id_user'];
        $usuario = Usuario::destroy($id);
    }
} 